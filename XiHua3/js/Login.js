var validateRules=[
	{"id":"userName","regex":"^([0-9]|[a-zA-Z_]){3,20}$","msg":" *"

},
	{"id":"userPwd",
		"regex":"^([a-zA-Z_]|[0-9]){3,16}$",
		"msg":" *"
}
	];
//当页面刷新时
	$(function(){
	
		$("#log").validateForm(validateRules);
});
 
	