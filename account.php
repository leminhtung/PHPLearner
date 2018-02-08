<!DOCTYPE html>
<html>
<head>
	<style>
	    body, html{
			margin: 0;
			font-size:18px;
		}
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: #333;
		}

		li {
    		float: left;
		}

		li a {
		    display: block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		    width: 100%
		}
		table {
            font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}


		li a:hover {
		    background-color: #111;
		}
		.container {
			height: 100%
		    width: 100%;
		}
		.changebutton {
		    background-color: #4CAF50;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    cursor: pointer;
		    width: 45%;
		}
		.deletebutton{
			background-color: #f44336;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    cursor: pointer;
		    width: 45%;
		    float: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<ul>
		  <li><a class="active" href="#home">Home</a></li>
		  <li><a href="#info">Infomation of Student</a></li>
		  <li><a href="#list">Student List</a></li>
		  <li><a href="#account">Account Manager</a></li>
		</ul>
	</div>
	<h2 align="center">Account Manager</h2>
	<div class="container">
		<table>
			<tr>
				<th>UserName</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
			<tr>
				<td>Mr.John</td>
				<td>123</td>
				<td>
					<button type="button" class="changebutton">Change</button>
    				<button type="button" class="deletebutton">Delete</button>
				</td>
			</tr>
		</table>	
	</div>
</div>
</body>
</html>