// JavaScript Document
window.onload=function(){
	var current_index=0;
	var banner_imgs=document.getElementById("js_banner_img").getElementsByTagName("div");
	var buttons=document.getElementById("control").getElementsByTagName("li");
	var butSize=buttons.length;
	var timer=window.setInterval(change,1100);
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
}

