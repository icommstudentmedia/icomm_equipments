<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8"/>
	<title>Equipment/Facilities</title>
</head>

<body>
	<header>

		<div id="nav-menu">
			<nav>
				<ul>
					<li>Admin Panel</li>
					<li>New Equipment Request</li>
					<li>New Facilities Request</li>
					<li>Logout</li>
					<li>
						<form method="get" action="">
							<input type="text" name="search-text" />
							<button>Search</button>
						</form>
					</li>
				</ul>
			</nav>
		</div>

		<div id="nav-tabs">
			<nav>
				<ul>
					<li>Submitted</li>
					<li>Approved</li>
					<li>Rejected</li> <!-- Subcategories: Not Authorizes, No Equipment -->
					<li>Prepared</li> <!-- Prepped -->
					<li>Picked-up</li>
					<li>Returned</li>
				</ul>
			</nav>
		</div>

	</header>


		<div id="data-table">
			<table>
				<tr>
					<th>Date Created</th>
					<th>Reporter Name</th>
					<th>Group</th>
					<th>Requested Equipment</th>
					<th>Chackout Date</th>
					<th>Checkout Time</th>
					<th>Checkin Date</th>
					<th>Checkin Time</th>
					<th>Comment</th>
					<th>Status</th>
				</tr>
			</table>
		</div>

	<footer>
		<!-- Here we are going to put info about the service and the I~Comm Department -->
	</footer>
</body>

</html>