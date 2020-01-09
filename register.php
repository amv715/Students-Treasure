<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    <title>sign up page for this page </title>
<style>
h1{
    font-size : 45px;
    color : white;
    text-shadow: 2px 2px 3px black, 0 0 30px green, 0 0 10px darkgreen;
}
body {
    background-image: url(greengrass.jpg); 
    background-repeat: no-repeat;
    background-size: 1600px 780px;
    font-weight: bold;
    transition: width 2s;
    text-align: center;
    background-image-opacity: 0.1 !important;
}
a:link, a:visited {
    background-color:black;
    background-image: url("backgroundgif.gif");
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-align:center;
    transition: width 5s height 5s;
}

a:hover, a:active {
    color:black;
    background-color: white ;
    text-align: center;
    width : 100px;
    height : 50px;
    transition-duration: 0.5s;

}
.table{
    /*border: 2px black solid;*/
    margin: 5%;

}
.section{
    margin: 0% 0%;
}
.designation{
    font-size: 25px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 section">
            <h1 style="text-align:center">FRESHER'S GUIDE</h1>
            <br><br>
            <p>------------------------------------------------------------------------------------------------------------------------------------------------------</p>
            <br><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 section">
            <h1> About US </h1>
            <p><h4>Welcome to the reader's treasure. On the following pages you will find everything you need to know for a stress-free start into your new student life.
            All it takes for a successful start into uni life is a little planning and a few preparations. Our suggestions will help you with that, so you can enjoy your time at university to the fullest.</h4>
             </p>
             <p>
                Aneesh MV <br>
                Akashdeep Singh <br>
		Kanishk Swaroop <br>
            </p>
            <div class="designation">
            </div>
        </div>
    <div class="row">
        <div class="col-md-6 section">

            <form action="register.php" method="post">
            <br>
                <table class="table" style="background-color:#FFFFFF;background: linear-gradient(transparent,transparent);text-align:center;" border="0" width="350" height="400" align="center">
                    <tr>    
                        <td><h4><b>Name</b></h4></td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td><h4><b>Email ID</b></h4></td>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td><h4><b>Registration Number</h4></td>                
                        <td><input type="text" name="regno"></td>
                    </tr>
                    <tr>
                        <td><h4><b>Username</b></h4></td>
                        <td><input type="text" name="user"></td>
                    </tr>
                    <tr>
                        <td><h4><b>Password</b></h4></td>
                        <td><input type="password" name="pass"></td>
                    </tr>
                    <tr>    
                        <td colspan="4" align="center">
                        <input type="submit" name="submit" value="Sign-Up">
                        </td>
                    </tr> 
                </table>    
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a style="text-align:center" href="http://localhost/xampp/readerstreasure/second.php">NEXT</a>
        </div>
    </div>
</div>
</body>
</html> 
<?php  
if(isset($_POST['submit'])){  
if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['regno'])) {  
    $name=$_POST['name'];  
    $email=$_POST['email'];
    $username=$_POST['user'];
    $regno=$_POST['regno'];
    $password=$_POST['pass'];
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('IWP') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM login WHERE username='".$username."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows==0)  
    {  
    $query= " INSERT INTO register (name,email,regno,user,pass) values('$name','$email','$regno','$user','$pass')";  
  
    $result=mysql_query($sql);  
        if($result){  
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>   