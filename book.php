<!DOCTYPE html>
<html>
<head>
  <title> books info</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body style="background-color: powderblue">
<h1 style="text-align: center; font-size: 35px"> WELCOME </h1>
<p style="text-align: center"> You can choose from the lists of books given below (subject to availability)<br> <br></p>
<div class="container">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      
 
<form method="post">
    <br>
  	<p style="text-align: center; font-weight: bold; size: 25px"> Enter the book name: </p>
  	<input name="book" type="text">
  	<br><br>
    <p style="text-align: center; font-weight: bold; size: 25px"> Enter the author name: </p>
    <input name="auth" type="text">
    <br><br>
    <p style="text-align: center; font-weight: bold; size: 25px"> Enter the number of books to purchase: </p>
    <input name="quan" type="number">
    <br><br>
    <div style="text-align:center">  
  	 <input name="submit" type="submit" value="submit" align="center">
    </div>
</form>
   </div>
   <div classs="col-md-2"></div>

  </div>
  </div>
<?php
        $conn = mysqli_connect('localhost','root','');

        if(!$conn)
        {
          echo 'not connected to server';
        }

        if(!mysqli_select_db($conn,'software'))
        {
          echo ' software database not selected';
        }
if(isset($_POST['submit']))
{
  if(!empty($_POST['book']) && !empty($_POST['quan']) && !empty($_POST['auth'])) {
                  $name=$_POST['book'];
                  $quan=$_POST['quan'];
                  $auth=$_POST['auth'];
                  $sql ="SELECT * FROM sellbooks WHERE bname='".$name."' AND aname='".$auth."'";
            	    $result=mysqli_query($conn,$sql);
            	  if (mysqli_num_rows($result) > 0)
            	 {
                	while($row =mysqli_fetch_assoc($result
                  )) 
                	{
                    	$a = $row["stock"];
                    	$b = $row["mrp"];
                    	if($a>=$quan)
                      {
                        $a-=$quan;
                        $b*=$quan*0.4;

                    $query= "UPDATE sellbooks set stock=$a where bname='.$name.'";
                    mysqli_query($conn,$query);
                    echo "Amount to pay is:".$b;
                  }
                  else
                    echo "Not Available";
                  }
             	}
              else
                echo "Not Available";
            }

            else
              echo "Enter All the Details"; 
          }
?>
</body>
</html>