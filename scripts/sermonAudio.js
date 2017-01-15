var playButtons = document.getElementsByClassName("play-button");

for(var i = 0; i < playButtons.length; i++) {
    playButtons[i].addEventListener("click", toggleAudioControls, false);
}

function toggleAudioControls() {
	
    var cardFooter = this.parentElement.nextElementSibling;
	cardFooter.classList.toggle("collapse");
    
    if (cardFooter.classList.contains("collapse")) {
       this.innerHTML = "Play Audio";        
    }
    
    else {
        this.innerHTML = "Stop Audio";
    }
}