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

