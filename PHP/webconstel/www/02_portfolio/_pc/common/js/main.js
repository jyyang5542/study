// JavaScript Document

$(function(){
	n=1;
	$('#btnR').click(function(){
		n++;
		if(n==4){
			$('#screenimg').css('left',-265*1);
			$('#articlewrap').css('left',-530*1);
			$('#bgwrap').css('left',-1920*1);			
			n=2
		}
		$('#screenimg').stop().animate({left:-265*n});
		$('#articlewrap').stop().animate({left:-530*n})
		$('#bgwrap').stop().animate({left:-1920*n})
	});
	$('#btnL').click(function(){ //왼쪽 버튼
		n--
		if(n==-1){			
			$('#screenimg').css('left',-265*2)	;
			$('#articlewrap').css('left',-530*2);
			$('#bgwrap').css('left',-1920*2);		
			n=1
		}		
			$('#screenimg').stop().animate({left:-265*n})	
			$('#articlewrap').stop().animate({left:-530*n})
			$('#bgwrap').stop().animate({left:-1920*n})	
	})
	
	
})