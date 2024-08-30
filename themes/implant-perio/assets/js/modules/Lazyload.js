// Lazy Load
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll("[data-source]");
    const imgOptions = {
        threshold: 0,
        rootMargin: "0px 0px 500px 0px",
    };

    function preloadImage(element) {
        const src = element.getAttribute("data-source"); 

        if (!src) {
            return;
        }

        switch (element.nodeName) {
            case "DIV":
                element.style.backgroundImage = `url(${ src })`;
                break;

            case "SECTION":
                element.style.backgroundImage = `url(${ src })`;
                break;

            case "A":
                element.style.backgroundImage = `url(${ src })`;
                break;	

            case "SPAN":
                element.firstElementChild.src = src;
                break;

            default:
                element.src = src;
        }
    }

    const imgObserver = new IntersectionObserver((entries, imgObserver) => {
        entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        }
        preloadImage(entry.target);
        imgObserver.unobserve(entry.target);
        });
    }, imgOptions);

    images.forEach(image => {
        imgObserver.observe(image);
    });

    function slickCloned() {
        setTimeout(() => {
            const slickCloneImages = document.querySelectorAll(".slick-cloned [data-source]");

            if (slickCloneImages.length < 1) {
                return;
            }

            slickCloneImages.forEach(image => {
                imgObserver.observe(image);
            });
        }, 1000)	
    }

    slickCloned();
    
    window.addEventListener('resize', function(event) {
        slickCloned();
    }, true);
});