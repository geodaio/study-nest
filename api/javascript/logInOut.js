function storeCookies(name, value){
  var myDate = new Date();
	myDate.setMonth(myDate.getMonth() + 1);
	document.cookie=name+"="+value+"; expires="+myDate.toUTCString()+"; path=/";
	console.log(document.cookie);
}

/*onload = function checkSign(){
	if (window.location.pathname == "https://geodaio.github.io/interactive-design-final/") {
		console.log("test");
	  var allCookies = document.cookie;
	
	  var splitCookies = allCookies.split(";");
	
	  for (var c = 0; c<=splitCookies.length; c++){
	    var cleanCookie;
	    if (c != splitCookies.length){
	      cleanCookie = splitCookies[c].trim();
	    }
	    var cleanerCookie = cleanCookie.split("=");
	    console.log(cleanerCookie);
	    if (cleanerCookie[c] === "true") {
	        window.location.assign("https://geodaio.github.io/interactive-design-final/index-login");
		console.log("loggedin2");
	    }
	  }
	}
	else if (window.location.href == "https://geodaio.github.io/interactive-design-final/hub.html") {
		console.log("test");
	  var allCookies = document.cookie;
	
	  var splitCookies = allCookies.split(";");
	
	  for (var c = 0; c<=splitCookies.length; c++){
	    var cleanCookie;
	    if (c != splitCookies.length){
	      cleanCookie = splitCookies[c].trim();
	    }
	    var cleanerCookie = cleanCookie.split("=");
	    console.log(cleanerCookie);
	    if (cleanerCookie[c] === "true") {
	        window.location.assign("https://geodaio.github.io/interactive-design-final/hub-login.html");
		console.log("loggedin2");
	    }
	  }
	}
};*/
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
