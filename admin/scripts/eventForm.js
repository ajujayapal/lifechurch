var allForms = document.getElementsByTagName("form");

var oneDayRadio = document.getElementById("showOneDayForm")
var recurRadio = document.getElementById("showRecurringForm")

var oneDayForm = document.getElementById("oneDayForm");
var oneDayStartDate = document.getElementById("oneDayStartDate");
var oneDayEndDate = document.getElementById("oneDayEndDate");


oneDayRadio.addEventListener("click", toggleForms);
recurRadio.addEventListener("click", toggleForms);

oneDayStartDate.addEventListener("change", updateEndDate);


function updateEndDate() {
	oneDayEndDate.value = oneDayStartDate.value;
}

function toggleForms() {
	
	if(this.value === "oneDay") {
		oneDayForm.classList.remove("hidden-xs-up");
	}
	else if(this.value === "recur") {
		oneDayForm.classList.add("hidden-xs-up");
	}
	
	
	
}