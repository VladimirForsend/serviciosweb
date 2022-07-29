jQuery(function($) {

    $(document).ready(function(){
        const state = {};
        const carouselList = document.querySelector(".carousel-list");
        const carouselItems = document.querySelectorAll(".carousel-item-plataforma");
        const elems = Array.from(carouselItems);

        carouselList.addEventListener("click", function (event) {
        var newActive = event.target;
        var isItem = newActive.closest(".carousel-item-plataforma");

        if (!isItem || newActive.classList.contains("carousel-item-plataforma-active")) {
            return;
        }

        update(newActive);
        });

        const update = function (newActive) {
        const newActivePos = newActive.dataset.pos;

        const current = elems.find((elem) => elem.dataset.pos == 0);
        const prev = elems.find((elem) => elem.dataset.pos == -1);
        const next = elems.find((elem) => elem.dataset.pos == 1);

        current.classList.remove("carousel-item-plataforma-active");

        [current, prev, next].forEach((item) => {
            var itemPos = item.dataset.pos;

            item.dataset.pos = getPos(itemPos, newActivePos);
        });
        };

        const getPos = function (current, active) {
        const diff = current - active;

        if (Math.abs(current - active) > 1) {
            return -current;
        }

        return diff;
        };
    });

});