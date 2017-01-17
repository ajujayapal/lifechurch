var playButtons = document.getElementsByClassName("play-button");
var audioBoxes = document.getElementsByClassName("audio-box");
var audios = document.getElementsByTagName("audio");

for (var i = 0; i < playButtons.length; i++) {
	playButtons[i].addEventListener("click", audioToggle);
}



function audioToggle() {
	
	var clickedAudioBox = getClickedAudioBox(this);
	var clickedAudio = getClickedAudio(this);
		
	if (!clickedAudio.paused) {
		resetAudioElements();
		clickedAudio.pause();
		clickedAudioBox.classList.add("collapse");
		this.innerHTML("Play Audio");
	}
	
	else {
		resetAudioElements();
		this.innerHTML = "Pause Audio";
		clickedAudioBox.classList.remove("collapse");
		clickedAudio.play();
	}
	
}


function resetAudioElements() {
// pause all audio on page
// collapse all audio boxes (boxes with audio controls) on page
// set text for all audio buttons to "Play Audio"
	
	for (var i = 0; i < audios.length; i++) {
		audios[i].pause();
	}
	
	for (var i = 0; i < audioBoxes.length; i++) {
		audioBoxes[i].classList.add("collapse");
	}
	
	for (var i = 0; i < playButtons.length; i++) {
		playButtons[i].innerHTML = "Play Audio";
	}
	
}

function getClickedAudio(clickedButton) {
//get the audio related to the button that was clicked
	return clickedButton.parentElement.nextElementSibling.childNodes.item(1);
}

function getClickedAudioBox(clickedButton) {
//get the audio box related to the button that was clicked
	return clickedButton.parentElement.nextElementSibling;
}