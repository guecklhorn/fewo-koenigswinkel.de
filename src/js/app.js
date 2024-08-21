(function () {
    const targetElement = document.querySelector("body"),
        toggleElement = document.querySelectorAll("[data-toggle]"),
        editCookie = document.querySelectorAll("[data-cockie]"),
        toggleAnimation = document.querySelectorAll("[data-animation]");

    toggleElement.forEach((item) => {
        item.addEventListener("click", (event) => {
            targetElement.classList.toggle("is--open");
        });
    });

    editCookie.forEach((item) => {
        item.addEventListener("click", function () {
            const event = document.createEvent("HTMLEvents");
            event.initEvent("cookies:update", true, false);
            targetElement.dispatchEvent(event);
        });
    });

    targetElement.addEventListener("cookies:saved", function (event) {
        location.reload();
    });

    setTimeout(function () {
        toggleAnimation.forEach((item) => {
            item.classList.add("is--animated");
        });
    }, 100);
})();
