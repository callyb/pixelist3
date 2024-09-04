
// (function ($) {

// function enableSkrollr() {
// 	console.log('we are on desktop');

// 	// Enable Skroll only for non-touch devices
// 	if (!Modernizr.touch) {
// 		//Init Skrollr
// 		var s = skrollr.init({
// 			forceHeight: false
// 		});

// 	}

// }

// function disableSkrollr() {
// 	console.log('we are on mobile');

// 	// Destroy Skrollr
// 	var s = skrollr.init();
// 	s.destroy();
// }

// enquire.register("screen and (min-width: 768px)", {
// 	match: function () {
// 		enableSkrollr();
// 	},
// 	unmatch: function () {
// 		disableSkrollr();
// 	}
// });

// }) (jQuery);

// //FUNCTIONS FOR DISABLING ANIMATIONS 

// function disableParallax() {
// 	var s = skrollr.init();
// 	s.destroy();
// };

// function disableArrowsAnimation() {
// 	var element = document.getElementById("arrows");
// 	element.classList.remove("animated", "bounce");
// }

// function togglePanels() {
// 	if (document.getElementById("who").className == "hideDiv") { document.getElementById("who").removeClass("hideDiv").addClass("showDiv") }
// 	else if (document.getElementById("who").className == "showDiv") { document.getElementById("who").removeClass("showDiv").addClass("hideDiv") };
// 	if (document.getElementById("who2").className == "hideDiv") { document.getElementById("who2").removeClass("hideDiv").addClass("showDiv") }
// 	else if (document.getElementById("who2").className == "showDiv") { document.getElementById("who2").removeClass("showDiv").addClass("hideDiv") };
// }
