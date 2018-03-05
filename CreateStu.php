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

		li a:hover {
		    background-color: #111;
		}
		form {
    		border: 3px solid #f1f1f1;
		}
		input[type=text], input[type=password] {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    box-sizing: border-box;
		}

		button {
		    background-color: #4CAF50;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    cursor: pointer;
		    width: 100%;
		}

		button:hover {
		    opacity: 0.8;
		}

		.cancelbtn {
		    width: auto;
		    padding: 10px 18px;
		    background-color: #f44336;
		}
		.container {
			margin: auto;   			
		    padding: 20px;
		    width: 50%;
		}

		span.psw {
		    float: right;
		    padding-top: 16px;
		}
		#submit {
		    background-color: #4CAF50;
		    color: white;
		    padding: 14px 20px;
		    display: inline-block;
		    text-decoration: none;

		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
		    span.psw {
		       display: block;
		       float: none;
		    }
		    .cancelbtn {
		       width: 100%;
		    }
		}
	</style>

</head>
<?php 
if (isset($_POST['submit'])) 
{
	if (isset($_POST['fullname']) and isset($_POST['dob']) and !empty($_POST['address']) and !empty($_POST['role'])) 
	{
		$role = $_POST['role'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$fullname = $_POST['fullname'];
		$dob = $_POST['dob'];
		$address = $_POST['address'];
		$connect = mysql_connect("localhost","root","") or die("could not connect to server");
		mysql_select_db("test") or die(mysql_error($connect));
		$query = "Insert into admin(username, password, role) values('$username','$password')"; 
		mysql_query($query) or die(mysql_error($connect));
		$id = mysql_insert_id($connect);
		if(mysql_affected_rows()>0){
		    $query = "Insert into user(admin_id, fullname, dob, address) values($id, '$fullname',$dob, '$address')"; 
		    mysql_query($query) or die(mysql_error($connect));
		    if(mysql_affected_rows()>0){
		    	echo "create success";
		    }
		    else{
				echo "fail";
			}
		}
		else{
			echo "fail";
		}
	}
	else{
		echo "fail";
	}
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
	<h2 align="center">Create New Student</h2>
<form action="" method="post">
  <div class="container">
  	    <label><b>username</b></label>
	    <input type="text" name="username"  required>
	    <label><b>password</b></label>
	    <input type="password" name="password"  required>
	    <label><b>Name</b></label>
	    <input type="text" name="fullname"  required>
	    <label><b>DOB</b></label>
	    <input type="text" name="dob" required>
	    <label><b>Address</b></label>
	    <input type="text" name="address" required>
	    <label><b>Role</b></label>
	    <input type="text" name="role" required>
        <input type="submit" id="submit" name="submit" value="Create">
  </div>
</form>
</div>
</body>
</html>