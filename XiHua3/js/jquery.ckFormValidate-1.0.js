/*!
 * jquery.ckFormValidate-1.0 
 * 
 * Author: kaka
 * Date: 2012-10-14 16:50:00
 */
 
;(function($){
	$.fn.validateForm=function(validateRules,functions){
		var el=this;
		$(validateRules).each(function(i,item){
			var e=el.find("#"+item.id);
			var $span_2=$("<span>").addClass("prompt").html(item.msg);
			e.after($span_2);
			
			var $span_1=$("<span>").addClass("mark");
			e.after($span_1);
			
			
			
			//注册验证相关的事件，keyup(自动根据正则去验证)
			if(item.regex){
				e.bind("keyup",function(event){
						if(event.which==9) return false;
						var result=validate(e,item.regex);
						error(e,result);
						return false;
					});
			}
			
			//无法通过正则表达式验证
			if(item.fun){
				e.bind("keyup",function(event){
					if(event.which==9) return false;
					var result=item.fun();
					error(e,result);
					return false;
				});
			}
			
			
		});
		
		//注册提交按钮事件
		el.submit(function(){
			var isvalid=true;
			$(validateRules).each(function(i,item){
				var e=el.find("#"+item.id);
				if(item.regex){
					var result = validate(e,item.regex);
					error(e,result);
					isvalid=isvalid & result;
				}
				
				//无法通过正则表达式验证
				if(item.fun){
					var result=item.fun();
					error(e,result);
					isvalid=isvalid & result;
				}
				
			});
			return isvalid?true:false;
		});	
	};
	
	function validate($obj,reg){
		var val=$obj.val();
		//进行正则表达式验证
		var regex=new RegExp(reg);
		return regex.test(val);
	}
	
	function error($obj,result){	
		if(!result){
			$obj.addClass("error");
			$obj.nextAll("span.mark").css({"color":"#ff0000"}).html("x");
			$obj.nextAll("span.prompt").css({"color":"#ff0000","background-color":"#FFCCFF"});
		} else {
			$obj.removeClass("error");
			$obj.nextAll("span.mark").css({"color":"#008000"}).html("v");
			$obj.nextAll("span.prompt").css({"color":"#008000","background-color":"#CCFFCC"});
		}
	}
	
	
})(jQuery);