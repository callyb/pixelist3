// Get the modal
var modal = document.getElementById('logoModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementById('b2tLogo');
var modalImg = document.getElementById('img01');
var captionText = document.getElementById('caption');
img1.onclick = function () {
    modal.style.display = 'block';
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
};

// Get the modal
var modal2 = document.getElementById('flyerModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img2 = document.getElementById('b2tflyer');
var modalImg2 = document.getElementById('img02');
var captionText2 = document.getElementById('caption2');
img2.onclick = function () {
    modal2.style.display = 'block';
    modalImg2.src = this.src;
    captionText2.innerHTML = this.alt;
};

function makeVisible(e) {
    // get the element that opens the modal
    const button = e.currentTarget;
    const divId = button.dataset.targetId;
    const div = document.getElementById(divId);
    // get other elements needed
    const closeBtn = div.getElementsByClassName("close-btn")[0];
    const wrap = document.getElementById('wrap');

    div.setAttribute('aria-hidden', 'false');
    wrap.setAttribute('aria-hidden', 'true');

    if (div.classList.contains('ease-visibility-out')) {
        div.classList.remove("ease-visibility-out");
    }

    closeBtn.tabIndex = 0;

    div.classList.add("ease-visibility-in")
    closeBtn.focus();

    // captures focus until the close button is clicked
    const container = document.getElementById("JG-div")
    container.addEventListener("focusout", (ev) => {
        if (!container.contains(ev.relatedTarget)) {
            closeBtn.focus()
        }
    });
};

function makeInvisible(e) {
    // get the element that opens the modal
    const button = e.currentTarget;
    const divId = button.dataset.targetId;
    const div = document.getElementById(divId);
    // get other elements needed
    const wrap = document.getElementById('wrap');
    const closeBtn = div.getElementsByClassName("close-btn")[0];

    div.setAttribute('aria-hidden', 'true');
    wrap.setAttribute('aria-hidden', 'false');

    closeBtn.tabIndex = -1;

    div.classList.remove("ease-visibility-in")
    div.classList.add("ease-visibility-out")

    console.log('tabindex: ', + closeBtn.tabIndex)
    button.focus();

};
