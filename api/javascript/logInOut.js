function storeCookies(name, value){
  var myDate = new Date();
	myDate.setMonth(myDate.getMonth() + 1);
	document.cookie=name+"="+value+"; expires="+myDate.toUTCString()+"; path=/";
	console.log(document.cookie);
}
function signIn() {
	event.preventDefault();
	storeCookies("loggedIn", "true");
	console.log(document.cookie);
}
function signOut() {
	event.preventDefault();
	storeCookies("loggedIn", "false");
	console.log(document.cookie);
}
