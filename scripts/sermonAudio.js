var playButtons = document.getElementsByClassName("play-button");
var audios = document.getElementsByTagName("audio");


for (var i = 0; i < playButtons.length; i++) {
    playButtons[i].addEventListener("click", toggleAudioControls, false);
}

function toggleAudioControls() {
	
    var cardFooter = this.parentElement.nextElementSibling;
    var audioToPlay = this.parentElement.nextElementSibling.childNodes.item(1);

	cardFooter.classList.toggle("collapse");
    
    if (cardFooter.classList.contains("collapse")) {
       this.innerHTML = "Play Audio";        
    }
    
    else {
        this.innerHTML = "Stop Audio";
    }
    
    
    for (var i = 0; i < audios.length; i++) {
        audios[i].pause();
    }
    
    
    audioToPlay.play();
    
    
}