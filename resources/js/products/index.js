function rangeChange() {
    let minVal = document.getElementById("price_min").value;
    let maxVal = document.getElementById("price_max").value;

    function rangeChangeEventHandler(e) {
        let minBtn = document.getElementById("range-slider-min");
        let maxBtn = document.getElementById("range-slider-max");
        let minPrice = document.getElementById("price_min");
        let maxPrice = document.getElementById("price_max");
        let minBtnVal = parseInt(minBtn.value, 10);
        let maxBtnVal = parseInt(maxBtn.value, 10);

        if (minBtnVal >= maxBtnVal) {
            minBtn.value = minVal;
            maxBtn.value = maxVal;
        }
        minVal = minBtn.value;
        maxVal = maxBtn.value;

        minPrice.value = minVal;
        maxPrice.value = maxVal;
    }

    document.querySelectorAll('input[type="range"]').forEach(function (input) {
        input.addEventListener("input", rangeChangeEventHandler);
    });
}

function inputChange() {
    let minVal = document.getElementById("price_min").value;
    let maxVal = document.getElementById("price_max").value;

    function inputChangeEventHandler(e) {
        let minBtn = document.getElementById("range-slider-min");
        let maxBtn = document.getElementById("range-slider-max");
        let minPrice = document.getElementById("price_min");
        let maxPrice = document.getElementById("price_max");
        let minPriceVal = parseInt(minPrice.value, 10);
        let maxPriceVal = parseInt(maxPrice.value, 10);

        if (minPriceVal >= maxPriceVal) {
            minPrice.value = minVal;
            maxPrice.value = maxVal;
        }
        minVal = minPrice.value;
        maxVal = maxPrice.value;

        minBtn.value = minVal;
        maxBtn.value = maxVal;
    }

    document.querySelectorAll('input[type="number"]').forEach(function (input) {
        input.addEventListener("change", inputChangeEventHandler);
    });
}

rangeChange();
inputChange();
