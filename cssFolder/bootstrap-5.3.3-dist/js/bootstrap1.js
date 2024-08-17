document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll('.buhnrop');
    elements.forEach(element => {
        const text = element.textContent;
        if (text.length > 4) {
            const firstPart = text.slice(0, 4);
            const secondPart = text.slice(4);
            element.innerHTML = `<span class="first-part">${firstPart}<span class="second-part">${secondPart}</span></span>`;
        }
    });
});