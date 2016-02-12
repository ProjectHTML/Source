$(document).ready(function () {
   $('.login_box').draggable({
        opacity: 0.35,
        handle: '.login_box',
		containment: "screen"
    });
	
	$('.register_box').draggable({
        opacity: 0.35,
        handle: '.register_box',
		containment: "screen"
    });
	
	$('.motd_box').draggable({
        opacity: 0.35,
        handle: '.motd_box',
		containment: "screen"
    });
});
