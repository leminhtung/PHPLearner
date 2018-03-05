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
			margin: auto;   			
		    padding: 20px;
		    width: 50%;
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
<?php
$connect = mysql_connect("localhost","root","") or die("could not connect to server");
mysql_select_db("test") or die (mysql_error($connect));
$result = mysql_query("SELECT * FROM admin");
?>
<body>
	<div>
		<ul>
		  <li><a class="active" href="mainpage.php">Home</a></li>
		  <li><a href="CreateStu.php">Create New Student</a></li>
		  <li><a href="studentlist.php">Student List</a></li>
		  <li><a href="account.php">Account Manager</a></li>
		</ul>
	</div>
	<h2 align="center">Account Manager</h2>
	<div class="container">
		<table>
			<tr>
				<th>UserName</th>
				<th>Password</th>
				<th>Role</th>
			</tr>
			<?php
			while($row = mysql_fetch_assoc($result)){	
			?>
				<tr>
					<td><?php echo $row["username"] ?></td>
					<td><?php echo $row["password"] ?></td>
					<td><?php echo $row["role"] == 1 ? 'Student' : 'Admin' ?></t>
				</tr>
			<?php
			} 
			 ?>
		</table>	
	</div>
</div>
</body>
</html>