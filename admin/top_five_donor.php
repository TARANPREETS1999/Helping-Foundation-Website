<?php
	include("./includes/session_check.php");
	include("./includes/connection.php");
?>
		<div style="width:600px; margin:0px auto;">
			<h1>Top Five Donor</h1><hr>
			<table>
			<tr>
				<th>Donor Name</th>
				<th>Donations</th>
				<th>Mostly Donates</th>
			</tr>
			<tr>
				<td>Mausami</td>
				<td>336</td>
				<td>Clothes</td>
			</tr>
			<tr>
				<td>Ankit</td>
				<td>298</td>
				<td>Food</td>
			</tr>
			<tr>
				<td>Samir</td>
				<td>275</td>
				<td>Education</td>
			</tr>
			<tr>
				<td>Hardik</td>
				<td>195</td>
				<td>Education</td>
			</tr>
			<tr>
				<td>Pruthvi</td>
				<td>163</td>
				<td>Health</td>
			</tr>
			</table>
			<button>Download</button>
			<button>Print</button>
		</div>
