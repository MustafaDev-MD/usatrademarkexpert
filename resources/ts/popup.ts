class Popup {
    private popup: HTMLElement;

    constructor(selector: string) {
        const element = document.querySelector<HTMLElement>(selector);

        if (!element) {
            throw new Error(`Popup not found: ${selector}`);
        }

        this.popup = element;
        this.init();
    }

    private init(): void {
        document.querySelectorAll("[data-popup]").forEach((button) => {
            button.addEventListener("click", () => this.open());
        });

        this.popup
            .querySelector(".contact-popup-close")
            ?.addEventListener("click", () => this.close());

        this.popup
            .querySelector(".contact-popup-overlay")
            ?.addEventListener("click", () => this.close());

        document.addEventListener("keydown", (event: KeyboardEvent) => {
            if (event.key === "Escape") {
                this.close();
            }
        });
    }

    private open(): void {
        this.popup.classList.add("active");
        document.body.style.overflow = "hidden";
    }

    private close(): void {
        this.popup.classList.remove("active");
        document.body.style.overflow = "";
    }
}

document.addEventListener("DOMContentLoaded", () => {
    new Popup(".contact-popup");
});