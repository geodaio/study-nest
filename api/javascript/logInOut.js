function storeCookies(name, value){
  var myDate = new Date();
	myDate.setMonth(myDate.getMonth() + 1);
	document.cookie=name+"="+value+"; expires="+myDate.toUTCString()+"; path=/";
	console.log(document.cookie);
}
function signIn() {
	event.preventDefault();
	storeCookies("loggedIn", "true");
	window.location.assign("https://geodaio.github.io/interactive-design-final/index-login");
	console.log(document.cookie);
}
function signOut() {
	event.preventDefault();
	storeCookies("loggedIn", "false");
	window.location.assign("https://geodaio.github.io/interactive-design-final");
	console.log(document.cookie);
}

function toLogin() {
	window.location.assign("https://geodaio.github.io/interactive-design-final/login");
	console.log("1");
}

function backToHome() {
	window.location.assign("https://geodaio.github.io/interactive-design-final");
	console.log("2");
}
