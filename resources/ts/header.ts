function initMobileMenu() {
    const menuToggle = document.getElementById("menuToggle");
    const menuClose = document.getElementById("menuClose");
    const mobileMenuRaw = document.querySelector(".mobile-menu");
    const overlayRaw = document.querySelector(".menu-overlay");
    const menuIconRaw = menuToggle?.querySelector("i");

    if (
        !(menuToggle instanceof HTMLButtonElement) ||
        !(mobileMenuRaw instanceof HTMLElement) ||
        !(overlayRaw instanceof HTMLElement) ||
        !(menuIconRaw instanceof HTMLElement)
    ) {
        return;
    }

    // Duplicate listeners se bachne ke liye
    if (!menuToggle.dataset.initialized) {
        menuToggle.dataset.initialized = "true";

        const mobileMenu = mobileMenuRaw;
        const overlay = overlayRaw;
        const menuIcon = menuIconRaw;

        function toggleMenu(open?: boolean) {
            const isOpen = open ?? !mobileMenu.classList.contains("active");

            mobileMenu.classList.toggle("active", isOpen);
            overlay.classList.toggle("active", isOpen);
            document.body.classList.toggle("menu-open", isOpen);

            menuIcon.classList.toggle("fa-bars", !isOpen);
            menuIcon.classList.toggle("fa-xmark", isOpen);
        }

        menuToggle.addEventListener("click", () => toggleMenu());

        if (menuClose instanceof HTMLButtonElement) {
            menuClose.addEventListener("click", () => toggleMenu(false));
        }

        overlay.addEventListener("click", () => toggleMenu(false));
    }

    // Mobile Dropdown
    document.querySelectorAll<HTMLElement>(".mobile-dropdown-toggle").forEach((button) => {
        if (button.dataset.initialized) return;
        button.dataset.initialized = "true";

        button.addEventListener("click", () => {
            const parent = button.parentElement;

            if (!(parent instanceof HTMLElement)) return;

            document.querySelectorAll<HTMLElement>(".mobile-dropdown").forEach((item) => {
                if (item !== parent) {
                    item.classList.remove("active");
                }
            });

            parent.classList.toggle("active");
        });
    });
}

document.addEventListener("DOMContentLoaded", initMobileMenu);
document.addEventListener("livewire:navigated", initMobileMenu);