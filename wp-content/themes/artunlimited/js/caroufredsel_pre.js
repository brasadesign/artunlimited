// JavaScript Document

jQuery(function() {
	jQuery('#foo2').carouFredSel({
		prev: '#prev2',
		next: '#next2',
		auto: {
			delay: 1000,
		},
		circular: true,
		infinite: true,
		responsive: true,
		direction: "left",
		width: null, // automatically calculated
		//height: null, // automatically calculated
		align: "center",
		items: {
			visible: 1,
			start: "random"
		}
	});
});


// <a href="javascript:scroll_to('#nav-quem-somos');">Quem Somos</a>
function scroll_to (target) {
	jQuery('html, body').animate({
		scrollTop: jQuery(target).offset().top
	}, 500);
}
