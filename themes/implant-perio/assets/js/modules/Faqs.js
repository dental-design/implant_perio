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