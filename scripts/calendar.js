"use strict";

var arrMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

var arrWeekdays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];


var eleDateCells = document.getElementsByClassName("date-cell");
var eleCalendarMonth = document.getElementById("calendar-month");
var eleCalendarYear = document.getElementById("calendar-year");

getCurrentCalendar()

function display(str) {
	document.getElementById("result1").innerHTML += str;
}


function getCurrentCalendar() {
	/* function to generate calendar for current month and year. Should be default on page load */
	var currentDate = new Date();
	var curMonth = currentDate.getMonth();
	var curYear = currentDate.getFullYear();

	getMonthYearCalendar(curYear, curMonth+1);
}


function getNextMonthCalendar() {
	/* This is activated when the "Next" button in the calendar is clicked. */
	var monthNumber = parseInt(eleCalendarMonth.dataset.monthNumber);
	var yearNumber = parseInt(eleCalendarYear.dataset.yearNumber);
	
	var nextDate = new Date(yearNumber, monthNumber+1);
	
	var nextMonthNumber = nextDate.getMonth();
	var nextYearNumber = nextDate.getFullYear();
	
	getMonthYearCalendar(nextYearNumber, nextMonthNumber);
	//alert(nextDate);
	
	eleCalendarMonth.dataset.monthNumber = nextMonthNumber;
	eleCalendarYear.dataset.yearNumber = nextYearNumber;
}

function getPreviousMonthCalendar() {
	/* This is activated when the "Previous" button in the calendar is clicked. */
	var monthNumber = parseInt(eleCalendarMonth.dataset.monthNumber);
	var yearNumber = parseInt(eleCalendarYear.dataset.yearNumber);
	
	var prevDate = new Date(yearNumber, monthNumber-1);
	
	var prevMonthNumber = prevDate.getMonth();
	var prevYearNumber = prevDate.getFullYear();
	
	getMonthYearCalendar(prevYearNumber, prevMonthNumber);
	//alert(nextDate);
	
	eleCalendarMonth.dataset.monthNumber = prevMonthNumber;
	eleCalendarYear.dataset.yearNumber = prevYearNumber;
}

function getMonthYearCalendar(yy, mm){
	/* populates the calendar with dates for the given year and month
	This function is called within other functions */
	
	var date = new Date(yy, mm-1);
	
	var checkMonth = date.getMonth(); //to later verify and differentiate displayed month dates from previous month and next month dates.
	
	var date_NumOfDays = new Date(yy, mm, 0); // date object to calculate the number of days in the month. Not used for anything else.

	var numOfDays = date_NumOfDays.getDate();

	eleCalendarMonth.innerHTML = arrMonths[date.getMonth()];
	eleCalendarYear.innerHTML = date.getFullYear();
	
	eleCalendarMonth.dataset.monthNumber = mm;
	eleCalendarYear.dataset.yearNumber = yy;
	
	if(date.getDay() === 0) {
		date.setDate(date.getDate() - 7);
	}

	else {
		date.setDate(date.getDate() - date.getDay());
	}
	
	for (var i = 0; i < eleDateCells.length; i++) {
		eleDateCells[i].innerHTML = date.getDate();
		eleDateCells[i].dataset.mysqlDate = formatDateForMySql(date);
		
		if(date.getMonth() != checkMonth) {
			eleDateCells[i].classList.add("not-this-month");
			eleDateCells[i].parentElement.classList.add("not-this-month");
		}
		
		else {
			eleDateCells[i].classList.remove("not-this-month");
			eleDateCells[i].parentElement.classList.remove("not-this-month");

		}
		
		date.setDate(date.getDate() + 1);
	}
}

function formatDateForMySql(objDate) {

	var y = objDate.getFullYear();
  var m = objDate.getMonth()+1;
  var d = objDate.getDate();
  
  if(d < 10) {
  d = "0" + d;
  }
  
  if (m < 10) {
  	m = "0" + m;
  }

	return y + "-" + m + "-" + d;
}
