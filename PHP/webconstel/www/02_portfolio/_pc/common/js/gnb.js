// leftmenu

$(function(){
	$('.gnb_menu').mouseenter(function(){
		num=parseInt($(this).attr('data-n'))		
		gnb_h=$(this).height();
		li_h= $('li',this).height();
		$(this).stop().animate({height:gnb_h+	li_h*num})
	}).mouseleave(function(){
		$(this).stop().animate({ height: gnb_h})
	});
});