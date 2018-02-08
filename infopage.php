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
<body>
	<div>
		<ul>
		  <li><a class="active" href="#home">Home</a></li>
		  <li><a href="#info">Infomation of Student</a></li>
		  <li><a href="#list">Student List</a></li>
		  <li><a href="#account">Account Manager</a></li>
		</ul>
	</div>
	<h2 align="center">Infomation of Student</h2>

<form action="/action_page.php">
  <div class="container">
    <label><b>ID</b></label>
    <input type="text" name="textid" required>
    <label><b>Name</b></label>
    <input type="text" name="textname" required>
    <label><b>DOB</b></label>
    <input type="text" name="textdob" required>
    <label><b>Address</b></label>
    <input type="text" name="textaddress" required>
  </div>
</form>
</div>
</body>
</html>