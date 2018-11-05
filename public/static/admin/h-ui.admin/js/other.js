function onKeydown() {
 if (event.keyCode == 13) {
     event.cancelBubble = true;
     event.returnValue = false;
         document.getElementById('login').click();
   }
}

function matchPw(str){
  var result=str.match(/^[a-zA-Z0-9]{6,16}$/);
  if(result==null) return false;
  return true;
}
function matchName(str) {
  var result=str.match(/^[a-zA-Z0-9]{3,10}$/);
  if(result==null) return false;
  return true;
}
function matchEmail(str) {
  var result=str.match(/\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z0-9]{1,14}/g);
  if(result==null) return false;
  return true;
}
function matchXy(str) {
   var result=str.match(/[\u4e00-\u9fa5]/);
   if(result==null) return false;
   return true;
}
