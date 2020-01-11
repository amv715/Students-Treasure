<!DOCTYPE html>
<html>
<head>
  <title> books info</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h1> WELCOME </h1>
<h2> You can choose from the lists of books given below (subject to availability)<br> <br><br></h2>
<div class="row">
  <div class="col-sm-4">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <?php
        $conn = mysqli_connect('localhost','root','');

        if(!$conn)
        {
          echo 'not connected to server';
        }

        if(!mysqli_select_db($conn,'software'))
        {
          echo ' e-commerce database not selected';
        }
        echo ' BOOK ID = 1 <br><br> ' ;
        echo ' Ian Sommerville<br> Software Engineering <br>9th Edition<br> Addision-Wesley 2016 <br><br> ' ;
        echo ' PRICE = 1000 <br>';
        $sql = "SELECT units FROM books WHERE book_id = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) 
            {
                echo "quantity : " . $row["units"]. "<br><br>";
            }
        } 
        else 
        {
            echo "0 results";
        }
      ?>
    </div>
<form method="post">
  	Enter the book id:
  	<input name="book_id" type="text">
  	<br><br>
  	<input name="submit" type="submit" value="submit">
</form>

<?php
$conn = mysqli_connect('localhost','root','');

if(!$conn)
{
	echo 'not connected to server';
}

if(!mysqli_select_db($conn,'software'))
{
	echo ' e-commerce database not selected';
}
 if(isset($_POST['submit']))
 {
 	$book_id=$_POST['book_id'];
 	$sql = "SELECT * FROM books";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
    	while($row = $result->fetch_assoc() and $book_id == 1) 
    	{
        	$a = $row["units"];
        	$b = $row["price"];
        	$c = $row["name"];
        	$d = $row["book_id"];
        	$a=$a-1;
        	$query_del= "DELETE FROM books WHERE book_id=1";
        	$query= "INSERT INTO books (name,price,units,book_id) values ( '$c' , '$b' , '$a' ,'$d')";

		if (mysqli_query($conn, $query_del))
 		{
    		echo "record deleted successfully";
 		} 
 		else 
 		{
    		echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}

		if (mysqli_query($conn, $query))
 		{
    		echo "New record created successfully";
 		} 
 		else 
 		{
    		echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}
 	}
} 
	else 
		{
    		echo "0 results";
		}
	}

?>

</body>
</html>