interface TrademarkOwner {
    partyName: string;
}

interface Trademark {
    markIdentification: string;
    serialNumber: string;
    filingDate: string;
    owners?: TrademarkOwner[];
}

interface TrademarkResponse {
    elements: Trademark[];
}

document.addEventListener("DOMContentLoaded", () => {

    const form = document.querySelector<HTMLFormElement>(".tm-search-form");
    const input = document.querySelector<HTMLInputElement>(".tm-search-input");
    const wrapper = document.querySelector<HTMLElement>(".tm-search-table-wrapper");
    const tbody = document.querySelector<HTMLTableSectionElement>(".tm-search-table tbody");

    if (!form || !input || !wrapper || !tbody) return;

    form.addEventListener("submit", async (e) => {

        e.preventDefault();

        const keyword = input.value.trim();

        if (!keyword) return;

        wrapper.style.display = "block";

        tbody.innerHTML = `
            <tr>
                <td colspan="4" style="text-align:center">
                    Searching...
                </td>
            </tr>
        `;

        try {

            const response = await fetch(
                `https://innova-labs.net:9094/trademarks/search?name=${encodeURIComponent(keyword)}&page=1&count=5`
            );

            if (!response.ok) {
                throw new Error(`HTTP Error: ${response.status}`);
            }

            const result: TrademarkResponse = await response.json();

            tbody.innerHTML = "";

            if (result.elements?.length) {

                result.elements.forEach((item) => {

                    const owner = item.owners?.[0]?.partyName ?? "N/A";

                    tbody.insertAdjacentHTML(
                        "beforeend",
                        `
                        <tr>
                            <td>${item.markIdentification ?? "-"}</td>
                            <td>${owner}</td>
                            <td>${item.serialNumber ?? "-"}</td>
                            <td>${item.filingDate ?? "-"}</td>
                        </tr>
                        `
                    );

                });

            } else {

                tbody.innerHTML = `
                    <tr>
                        <td colspan="4" style="text-align:center">
                            No Trademark Found
                        </td>
                    </tr>
                `;

            }

        } catch (error) {

            console.error(error);

            tbody.innerHTML = `
                <tr>
                    <td colspan="4" style="text-align:center;color:red">
                        Unable to connect to trademark service.
                    </td>
                </tr>
            `;

        }

    });

});