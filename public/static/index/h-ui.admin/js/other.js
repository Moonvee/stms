function infoEdit(title,url,w,h){
	$.post(url);
	layer_show(title,url,w,h);
}
//set cookie
function setCk(name, value) {
	var Time = 300;
	var exp = new Date();
	exp.setTime(exp.getTime() + Time * 1000);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}