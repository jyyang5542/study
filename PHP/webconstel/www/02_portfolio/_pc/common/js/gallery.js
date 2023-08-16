// JavaScript Document
$(function(){
	
	n=1;
	$('#btnNext').click(function(){
		//imgwrap이 누를때마다 왼쪽으로 782만큼 이동
		n++;
		if(n==10){
			$('#imgwrap').css('left',-782*1);
			$('#imgwrap2').css('left',-782*1);
			n=2
		}		
		$('#imgwrap').stop().animate({left:-782*n})
		$('#imgwrap2').stop().animate({left:-782*n})
		
		
		$('#slidebtn img').attr('src','gallery/ico_slider.png');
		$('#icon'+n).attr('src','gallery/ico_slider_on.png');
		if(n==9){
			$('#icon1').attr('src','gallery/ico_slider_on.png');
		}	
		
	});
	$('#btnPrev').click(function(){
		n--;
		if(n==-1){
			$('#imgwrap').css('left',-782*8);
			$('#imgwrap2').css('left',-782*8);
			n=7
		}		
		$('#imgwrap').stop().animate({left:-782*n})
		$('#imgwrap2').stop().animate({left:-782*n})
		
		$('#slidebtn img').attr('src','gallery/ico_slider.png');
		$('#icon'+n).attr('src','gallery/ico_slider_on.png');
		if(n==0){
			$('#icon8').attr('src','gallery/ico_slider_on.png');
			}		
	});
	
	$('#btncolor1').click(function(){
		$('#imgwrap').css('display','none');
		$('#imgwrap2').css('display','block');
	});
	$('#btncolor2').click(function(){
		$('#imgwrap').css('display','block');
		$('#imgwrap2').css('display','none');
	});
	
});



