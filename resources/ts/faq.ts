function initFaq() {

    /*=========================================
                    TABS
    =========================================*/

    const tabs = document.querySelectorAll<HTMLButtonElement>(".faq-tab");
    const contents = document.querySelectorAll<HTMLElement>(".faq-content");

    tabs.forEach((tab) => {

        tab.addEventListener("click", () => {

            const target = tab.dataset.tab;

            if (!target) return;

            tabs.forEach((item) => item.classList.remove("active"));
            contents.forEach((item) => item.classList.remove("active"));

            tab.classList.add("active");

            document.getElementById(target)?.classList.add("active");

        });

    });

    /*=========================================
                ACCORDION
    =========================================*/

    const faqLists = document.querySelectorAll<HTMLElement>(".faq-list");

    faqLists.forEach((list) => {

        const items = list.querySelectorAll<HTMLElement>(".faq-item");

        items.forEach((item) => {

            const answer = item.querySelector<HTMLElement>(".faq-answer");

            if (!answer) return;

            if (item.classList.contains("active")) {

                answer.style.height = "auto";
                answer.style.opacity = "1";

            } else {

                answer.style.height = "0px";
                answer.style.opacity = "0";

            }

        });

        items.forEach((item) => {

            const question = item.querySelector<HTMLButtonElement>(".faq-question");
            const answer = item.querySelector<HTMLElement>(".faq-answer");

            if (!question || !answer) return;

            question.onclick = () => {

                const opened = item.classList.contains("active");

                items.forEach((faq) => {

                    if (!faq.classList.contains("active")) return;

                    const oldAnswer = faq.querySelector<HTMLElement>(".faq-answer");

                    if (!oldAnswer) return;

                    oldAnswer.style.height = oldAnswer.scrollHeight + "px";

                    requestAnimationFrame(() => {

                        faq.classList.remove("active");

                        oldAnswer.style.height = "0px";
                        oldAnswer.style.opacity = "0";

                    });

                });

                if (!opened) {

                    item.classList.add("active");

                    answer.style.height = "0px";
                    answer.style.opacity = "0";

                    requestAnimationFrame(() => {

                        answer.style.height = answer.scrollHeight + "px";
                        answer.style.opacity = "1";

                    });

                    answer.addEventListener("transitionend", function handler(e) {

                        if (e.propertyName !== "height") return;

                        answer.style.height = "auto";

                        answer.removeEventListener("transitionend", handler);

                    });

                }

            };

        });

    });

}

document.addEventListener("DOMContentLoaded", initFaq);
document.addEventListener("livewire:navigated", initFaq);