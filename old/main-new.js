// LOGO AND FLYER MODALS

// Get the modal
var modal = document.getElementById('logoModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('b2tLogo');
var modalImg = document.getElementById('img01');
var captionText = document.getElementById('caption');
img.onclick = function () {
	modal.style.display = 'block';
	modalImg.src = this.src;
	captionText.innerHTML = this.alt;
};
// Get the <span> element that closes the modal
var btn = document.getElementsByClassName('close-btn2')[0];

// When the user clicks on <button> (x), close the modal
btn.onclick = function () {
	console.log("modal close function called");
	modal.style.display = 'none';
};

// Get the modal
var modal2 = document.getElementById('flyerModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img2 = document.getElementById('b2tflyer');
var modalImg = document.getElementById('img02');
var captionText = document.getElementById('caption2');
img2.onclick = function () {
	modal.style.display = 'block';
	modalImg.src = this.src;
	captionText.innerHTML = this.alt;
};

// Get the <span> element that closes the modal
var btn2 = document.getElementsByClassName('close-btn2')[1];

// When the user clicks on <span> (x), close the modal
btn2.onclick = function () {
	console.log("modal2 close function called");
	modal2.style.display = 'none';
};

// 