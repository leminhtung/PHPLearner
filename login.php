<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
form {
    border: 3px solid #f1f1f1;
}
html{
  background: url(img/work4.jpg) no-repeat;
  background-size: cover;
}
body, html{
  font-size:18px;
  color: white;
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

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
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
form{
  border: 0px;
}
div.Mask{
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  position: fixed;
  background: rgba(0,0,0,0.3);
  z-index: -1;
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

<div class="Mask"></div>
<h2 align="center">Login Form</h2>
<form action="logincontroller.php" method="post">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked"> isAdmin
    </label>
</form>

</body>
</html>