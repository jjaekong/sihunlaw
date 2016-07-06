//visual slide
$('.bxslider').bxSlider({
	//auto: true,
	controls: false //컨트롤 이전 다음 버튼 유무, 
	//pager: false // 페이퍼 사용 유무
});
//#shortcuts slide
$('#shortcuts .slider').bxSlider({
	minSlides: 3,
	maxSlides: 3,
	slideWidth: 100,
	moveSlides: 3, //영역안에 있는 이미지나 태그들 1개씩 이동
	pager: false,
	controls: true,
	prevText: '<span class="glyphicon glyphicon-menu-left"></span>',
	nextText: '<span class="glyphicon glyphicon-menu-right"></span>'
});