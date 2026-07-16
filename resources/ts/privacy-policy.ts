document.addEventListener("DOMContentLoaded", () => {

    const tabs = document.querySelectorAll<HTMLButtonElement>(".privacy-tab");
    const contents = document.querySelectorAll<HTMLElement>(".privacy-content");

    tabs.forEach((tab) => {

        tab.addEventListener("click", () => {

            const target = tab.dataset.tab;

            if (!target) return;

            tabs.forEach((item) => item.classList.remove("active"));
            contents.forEach((item) => item.classList.remove("active"));

            tab.classList.add("active");

            document
                .getElementById(target)
                ?.classList.add("active");

        });

    });

});