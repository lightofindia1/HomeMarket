var base="http://localhost/homemarket/";
var srec=localStorage.getItem("srec");
meSpeak.loadConfig(base+"mespeak_config.json");
meSpeak.loadVoice(base+"voices/en/en.json");
var defaultvoice={pitch:10,variant:"whisper",speed:150};

var msg=localStorage.getItem("newuser");
if(!msg){
	if(localStorage.getItem("ssyn")=="on"){meSpeak.speak("Hello Sir! Have a nice day!",defaultvoice);}
	localStorage.setItem("newuser","false");
}
function startRec(){
if (annyang) {
  var commands = {
	'hello': function() {
		if(localStorage.getItem("ssyn")=="on"){meSpeak.speak("Hello Sir! Have a nice day!",defaultvoice);}
		else{alert("Hello Sir! Have a nice day!");}
	},
	'buy now': function(){
		window.location=base+"buyers/";
	},
	'sell now': function(){
		window.location=base+"sellers/";
	},
	'find tutor': function(){
		window.location=base+"students/";
	},
	'teach now': function(){
		window.location=base+"tutors/";
	},
	'login': function(){
		window.location=base+"login";
	},
	'register': function(){
		window.location=base+"register";
	},
	'signup': function(){
		window.location=base+"register";
	},
	'settings': function(){
		window.location=base+"settings";
	},
	'scroll up': function(){
		mtop-=200;
		$("html, body").animate(scrollTop(mtop),1000);
	},
	'scroll down': function(){
		$("html, body").animate(scrollTop(100),1000);
	},
	'crawl up':function(){
		$("html, body").animate(scrollTop(100),1000);
	},
	'crawl down': function(){
		$("html, body").animate(scrollTop(100),1000);
	},
	'*term':function(term){
		if(localStorage.getItem("ssyn")=="on"){meSpeak.speak(term+", command not found!",defaultvoice);}
		else{alert(term+", command not found!");}
		console.log(term+", command not found!");
	}
  };
  annyang.addCommands(commands);
  annyang.start();
}
}
if(srec=="on"){
	startRec()
}