function refreshVerify() {
    var ts = Date.parse(new Date()) / 1000;
    $("#verify_img").attr("src", "/captcha?id=" + ts);//刷新验证码
}
function KeyDown() {
    if (event.keyCode == 13) {
        event.returnValue = false;
        event.cancel = true;
        form.btn.click();
    }
}