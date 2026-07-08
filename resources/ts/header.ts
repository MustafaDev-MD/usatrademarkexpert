document.addEventListener("DOMContentLoaded", () => {

    const menuToggle = document.getElementById("menuToggle");
    const menuClose = document.getElementById("menuClose");
    const mobileMenuRaw = document.querySelector(".mobile-menu");
    const overlayRaw = document.querySelector(".menu-overlay");
    const menuIconRaw = menuToggle?.querySelector("i");

    // 1. Your guard clause works perfectly here
    if (
        !(menuToggle instanceof HTMLButtonElement) ||
        !(mobileMenuRaw instanceof HTMLElement) ||
        !(overlayRaw instanceof HTMLElement) ||
        !(menuIconRaw instanceof HTMLElement)
    ) {
        return;
    }

    // 2. Create strictly-typed references for the closure to inherit
    const mobileMenu: HTMLElement = mobileMenuRaw;
    const overlay: HTMLElement = overlayRaw;
    const menuIcon: HTMLElement = menuIconRaw;

    // 3. TypeScript now knows these are 100% safe inside this function
    function toggleMenu(open?: boolean): void {

        const isOpen = open ?? !mobileMenu.classList.contains("active");

        mobileMenu.classList.toggle("active", isOpen);
        overlay.classList.toggle("active", isOpen);
        document.body.classList.toggle("menu-open", isOpen);

        menuIcon.classList.toggle("fa-bars", !isOpen);
        menuIcon.classList.toggle("fa-xmark", isOpen);

    }

    menuToggle.addEventListener("click", () => {
        toggleMenu();
    });

    if (menuClose instanceof HTMLButtonElement) {
        menuClose.addEventListener("click", () => {
            toggleMenu(false);
        });
    }

    overlay.addEventListener("click", () => {
        toggleMenu(false);
    });

});