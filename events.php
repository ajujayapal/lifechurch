<!DOCTYPE html>
	
	<?php include "includes/header.inc.php"; ?>
	
	<?php include "includes/navbar.inc.php"; ?>

	<div class="container widget-box-area">
  	<div class="row">
			<div id="calendar-buttons-area" class="col-12 py-2">
				<div class="row">
					<div class="col-3">
						<button type="button" class="btn btn-primary" onclick="getPreviousMonthCalendar()">Previous</button>
					</div>

					<div class="col-6">
						<button type="button" class="btn btn-primary">
							<span id="calendar-month"></span>
							<span> - </span>
							<span  id="calendar-year"></span>
						</button>
					</div>

					<div class="col-3">
							<button type="button" class="btn btn-primary" onclick="getNextMonthCalendar()">Next</button>	
					</div>
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
	</div>

	<?php include "includes/footer.inc.php"; ?>