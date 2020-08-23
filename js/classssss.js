$(window).scroll(function(){

	var DanZai = $(this).scrollTop();

	$('.tengah').css({
		'transform' : 'translate(0px, '+ DanZai /30 +'%)'
	});

	$('.bawah').css({
		'transform' : 'translate(0px, +'+ DanZai /160 +'%)'
	});

});