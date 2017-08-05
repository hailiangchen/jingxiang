$(document).ready(function(){
	function lunLeftFn(obj,time){
		time = time ? time: 30;
		var ul = $(obj).find("ul")
		ul.append(ul.children().clone(true))
		var len = ul.children('li').width()*ul.children('li').length / 2
		var times = null;
		times = window.setInterval(function(){
			var t = ul.css('left');
			t = t.replace('px','');
			
			if(t > -len){
				t--;
				ul.css({left: t})
			}else{
				ul.css({left: 0})
			}
			
		},time)
		
		ul.hover(function(){
			window.clearInterval(times);
		},function(){
			times = window.setInterval(function(){
				var t = ul.css('left');
				t = t.replace('px','');
				
				if(t > -len){
					t--;
					ul.css({left: t})
				}else{
					ul.css({left: 0})
				}
				
			},time)
		})
	}
   lunLeftFn(".lunleft",50)
	
	
})