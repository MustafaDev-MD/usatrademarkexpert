document.addEventListener("DOMContentLoaded", () => {

const initPrivacyTabs = () => {

    const tabs = document.querySelectorAll<HTMLButtonElement>(".privacy-tab");
    const contents = document.querySelectorAll<HTMLElement>(".privacy-content");

    if (!tabs.length || !contents.length) return;

    const activateTab = (target: string) => {

        tabs.forEach((item) => {
            item.classList.remove("active");
        });

        contents.forEach((item) => {
            item.classList.remove("active");
        });

        const activeTab = document.querySelector<HTMLButtonElement>(
            `.privacy-tab[data-tab="${target}"]`
        );

        const activeContent = document.getElementById(target);

        if (activeTab && activeContent) {
            activeTab.classList.add("active");
            activeContent.classList.add("active");
        }
    };

    // Tab click
    tabs.forEach((tab) => {

        tab.addEventListener("click", () => {

            const target = tab.dataset.tab;

            if (!target) return;

            activateTab(target);

            // URL update
            const url = new URL(window.location.href);
            url.searchParams.set("tab", target);

            window.history.replaceState({}, "", url);
        });

    });

    // Check URL
    const params = new URLSearchParams(window.location.search);
    const tabFromUrl = params.get("tab");

    if (
        tabFromUrl &&
        ["our-guarantee", "privacy-policy", "terms-of-service"].includes(tabFromUrl)
    ) {
        activateTab(tabFromUrl);
    }

};

initPrivacyTabs();

// Livewire / wire:navigate support
document.addEventListener("livewire:navigated", () => {
    initPrivacyTabs();
});

});