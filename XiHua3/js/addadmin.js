var validateRules=[
	{"id":"user2Name","regex":"^([0-9]|[a-zA-Z_]){3,20}$","msg":" *管理员名只能是A-Z,a-z,0-9,_当中的任意字符组合并且只能是3~20位"

},
	{"id":"user2Pwd",
		"regex":"^([a-zA-Z_]|[0-9]){3,16}$",
		"msg":" *密码只能是数字或者字母组成并且只能是3~16位 "
},
{"id":"user2Pwd2",
	"regex":"^([a-zA-Z_]|[0-9]){3,16}$",
	"msg":" *密码必须和上次输入一样！ "
}
	];
//当页面刷新时
	$(function(){
	
		$("#addadmin").validateForm(validateRules);
});
 
	