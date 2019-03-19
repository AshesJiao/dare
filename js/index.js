// JavaScript Document
window.onload=function(){
	var current_index=0;
	var banner_imgs=document.getElementById("js_banner_img").getElementsByTagName("div");
	var buttons=document.getElementById("control").getElementsByTagName("li");
	var butSize=buttons.length;
	var timer=window.setInterval(change,1100);
	var index_dl = document.getElementsByClassName("index_dl");
	var next = document.getElementById('next');
	var prev = document.getElementById('prev');
//	var index_s = document.getElementById("index_s");
	for(var i=0;i<butSize;i++){
			buttons[i].onmouseover=function(){
			if(timer){
				window.clearInterval(timer);
				}
				for(var i=0;i<butSize;i++){
				if(buttons[i]==this){
				current_index=i;	
				banner_imgs[i].className='current';
				buttons[i].className='current';
				}else{
				banner_imgs[i].className='pic';
				buttons[i].className='but';
				}
			}
			

			}
			buttons[i].onmouseout=function(){
			timer=window.setInterval(change,2000)
			}
	}
	

  	
	function change(){
		var pre_index=current_index;
		current_index++;
		
		if(current_index==butSize){
		   current_index=0;
		}
		banner_imgs[pre_index].className="pic";
		banner_imgs[current_index].className="current";
		
		buttons[pre_index].className="but";
		buttons[current_index].className="current";
	}
	 var i = 0 ;
	prev.onclick = function (){
		
		 i++
		if(i > index_dl.length -1){
			i = 0;
		}
		for(var j = 0; j < index_dl.length; j++){
			index_dl[j].style.opacity = "0";
		}
		index_dl[i].style.opacity = "1"
	}
	next.onclick = function(){
		i--;
		if(i < 0){
			i = index_dl.length - 1;
		}
		for(var j = 0; j < index_dl.length; j++){
			index_dl[j].style.opacity = "0";
		}
		index_dl[i].style.opacity = "1"
	}
	
}

