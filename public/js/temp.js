$(document).ready(function() {
	$(".outer-circle").mouseenter(function() {
		$(".mid").addClass("mid-mouse-on");
		$(".on-hover").addClass("on-hover-mouse-on");
		$(".line").addClass("line-rotate");
	});
	$(".outer-circle").mouseleave(function() {
		$(".mid").removeClass("mid-mouse-on");
		$(".on-hover").removeClass("on-hover-mouse-on");
		$(".line").removeClass("line-rotate");
	});
});