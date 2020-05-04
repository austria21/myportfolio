const getInTouch = document.querySelector('.about span');

getInTouch.addEventListener("mouseenter", e => {
    getInTouch.classList.remove("badge-danger");
    getInTouch.classList.remove("text-white");
    getInTouch.classList.add("mouseInGetInTouch");
});
getInTouch.addEventListener("mouseleave", () => {
    getInTouch.classList.remove("mouseInGetInTouch");
    getInTouch.classList.add("text-white");
    getInTouch.classList.add("badge-danger");
});

const texts = ['love codes', 'teach how to code', 'make money from code'];
let count = 0;
let index = 0;
let currentText = '';
let letter = '';

(function type() {

    if (count === texts.length) {
        count = 0;
    }
    currentText = texts[count];
    letter = currentText.slice(0, ++index);

    document.querySelector('.typing').textContent = letter;
    if (letter.length === currentText.length) {
        count++;
        index = 0;
    }
    setTimeout(type, 350);
}());