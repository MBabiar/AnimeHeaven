function rangeChange() {
    function rangeChangeEventHandler(e) {
        let minBtn = document.getElementById("range-slider-min");
        let maxBtn = document.getElementById("range-slider-max");
        let minInput = document.getElementById("price_min");
        let maxInput = document.getElementById("price_max");
        let minBtnVal = parseInt(minBtn.value, 10);
        let maxBtnVal = parseInt(maxBtn.value, 10);
        let minInputVal = parseInt(minInput.value, 10);
        let maxInputVal = parseInt(maxInput.value, 10);

        if (minBtnVal >= maxBtnVal) {
            minBtn.value = minInputVal;
            maxBtn.value = maxInputVal;
            return;
        }

        minInput.value = minBtnVal;
        maxInput.value = maxBtnVal;
    }

    document.querySelectorAll('input[type="range"]').forEach(function (input) {
        input.addEventListener("input", rangeChangeEventHandler);
    });
}

function inputChange() {
    function inputChangeEventHandler(e) {
        let minBtn = document.getElementById("range-slider-min");
        let maxBtn = document.getElementById("range-slider-max");
        let minInput = document.getElementById("price_min");
        let maxInput = document.getElementById("price_max");
        let minBtnVal = parseInt(minBtn.value, 10);
        let maxBtnVal = parseInt(maxBtn.value, 10);
        let minInputVal = parseInt(minInput.value, 10);
        let maxInputVal = parseInt(maxInput.value, 10);

        if (minInputVal >= maxInputVal) {
            minInput.value = minBtnVal;
            maxInput.value = maxBtnVal;
            return;
        }

        minBtn.value = minInputVal;
        maxBtn.value = maxInputVal;
    }

    document.querySelectorAll('input[type="number"]').forEach(function (input) {
        input.addEventListener("change", inputChangeEventHandler);
    });
}

rangeChange();
inputChange();
