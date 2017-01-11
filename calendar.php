<!DOCTYPE html>

<?php include "includes/header.inc.php"; ?>

<?php include "includes/navbar.inc.php"; ?>


	<div class="container">
  
		<div id="calendar-buttons-area" class="col-sm-12">
			<div class="col-sm-3">
				<button type="button" class="btn btn-primary" onclick="getPreviousMonthCalendar()">Previous</button>
			</div>

			<div class="col-sm-6">
				<button type="button" class="btn btn-primary">
					<span id="calendar-month"></span>
					<span> - </span>
					<span  id="calendar-year"></span>
				</button>
			</div>

			<div class="col-sm-3">
					<button type="button" class="btn btn-primary" onclick="getNextMonthCalendar()">Next</button>	
			</div>

		</div>		

		<table class="table">

			<thead>
				<tr>
					<th>Sun</th>
					<th>Mon</th>
					<th>Tue</th>
					<th>Wed</th>
					<th>Thu</th>
					<th>Fri</th>
					<th>Sat</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>
						<span class="date-cell"></span>
						<div class="event-item">
							<ul>
								<li><a href="#">Sunday Worship: 10am - 12pm</a></li>
								<li><a href="#">Communion Sunday</a></li>
								<li><a href="#">Communion Sunday</a></li>              
							</ul>
						</div>
					</td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
				</tr>

				<tr>
					<td>
						<span class="date-cell"></span>
						 <div class="event-item">
							<ul>
								<li><a href="#">Sunday Worship: 10am - 12pm</a></li>
								<li><a href="#">Communion Sunday</a></li>
								<li><a href="#">Communion Sunday</a></li>
							</ul>
						</div>
					</td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
				</tr>

				<tr>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
				</tr>

				<tr>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
				</tr>

				<tr>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
				</tr>

				<tr>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
					<td><span class="date-cell"></span></td>
				</tr>
			</tbody>
		</table>
	</div>
    
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="scripts/calendar.js"></script>
</body>
</html>