var Partie = function () {
    if (!this.isInit) {
        if (document.addEventListener)
            window.addEventListener("load", function (e) { $Jeu.init(); }, false)
        else if (window.attachEvent)
            window.attachEvent("onload", function (e) { $Jeu.init(); })
    }

}

Partie.prototype = {
	date_partie : "",
	joueur : "",
	score : 0,

	init: function(){
		this.initEvents();
		this.isInit = true;
	},

	initEvents: function(){
		$(".button_jouer").click(function(){
			console.log("1");
		});
	},
}

$Jeu = new Partie();