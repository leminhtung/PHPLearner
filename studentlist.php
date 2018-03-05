<!DOCTYPE html>
<html>
<head>
	<style>
	    body, html{
			margin: 0;
			font-size:18px ;
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
		.container {
			margin: auto;   			
		    padding: 20px;
		    width: 50%;
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
		body > div.container > table > tbody > tr > td > a {
		    background-color: #4CAF50;
		    color: white;
		    padding: 14px 20px;
		    display: inline-block;
		    text-decoration: none;
		    margin: 10px;

		}
		input{
			background-color: #f44336;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    cursor: pointer;
		    width: 45%;
		    float: center;
		    display: inline-block;

	</style>
</head>
<?php
$connect = mysql_connect("localhost","root","") or die("could not connect to server");
mysql_select_db("test") or die (mysql_error($connect));
$result = mysql_query("SELECT user.*, role FROM user JOIN admin ON user.admin_id = admin.id WHERE role=1");
?>
<?php
$admin_id = $_POST['admin_id'];
$query = "DELETE FROM user WHERE admin_id='$admin_id'";
mysql_query ($query);

if (mysql_affected_rows() == 1) { 
?>
	<strong>Contact Has Been Deleted</strong><br /><br />
<?php
} else { 
?>
	<strong>Delete Failed</strong><br /><br />
<?php
} 
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
	<h2 align="center">Student List</h2>
	<div class="container">
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>DOB</th>
				<th>Adress</th>
				<td>Action</td>
			</tr>
			<?php
			while($row = mysql_fetch_assoc($result)){	
			?>
				<tr>
					<td><?php echo $row["admin_id"] ?></td>
					<td><?php echo $row["fullname"] ?></td>
					<td><?php echo date('m/d/Y', $row["dob"]) ?></td>
					<td><?php echo $row["address"] ?></td>
					<td>
						<a href="infopage.php?id=<?php echo($row["admin_id"]) ?>">Change</a>&nbsp;&nbsp;
	    				<form action="" method="post">
	    					<input type="hidden" name="admin_id" value = "<?php echo $row['admin_id']; ?>">
	    					<input type="submit" name="submit" value="Delete">
	    				</form>
					</td>
				</tr>
			<?php
			}
			?>
		</table>	
	</div>
</div>
</body>
</html>