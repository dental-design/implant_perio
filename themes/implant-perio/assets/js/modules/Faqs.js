class FAQ {
    constructor() {
        this.faqButton = document.getElementsByClassName('accordion');

        this.events();
    }

    events() {
        for (let i = 0; i < this.faqButton.length; i++) {
            this.faqButton[i].addEventListener('click', this.toggleAccordion.bind(this));
        }
    }

    toggleAccordion(e) {
        const parent = e.target.closest('.faq-card');
        const answer = parent.querySelector('.answer-wrapper');
        const icon = parent.querySelector('.plus-wrapper');

        // check if another card that is already active.
        const activeCard = document.querySelector('.faq-card.active');

        if (activeCard && activeCard !== parent) {
            const activeAnswer = activeCard.querySelector('.answer-wrapper');
            const activeIcon = activeCard.querySelector('.plus-wrapper');

            // remove active class lists
            activeCard.classList.remove('active');
            activeIcon.classList.remove('active');

            // update styling
            activeAnswer.style.maxHeight = null;
            activeAnswer.style.paddingTop = null;
        }

        parent.classList.toggle('active');
        icon.classList.toggle('active');

        if (answer.style.maxHeight) {
            answer.style.maxHeight = null;
            answer.style.paddingTop = null;
        } else {
            answer.style.paddingTop = '30px';
            answer.style.maxHeight = `${ answer.scrollHeight + 40 }px`;
        }
    }
}

export default FAQ;