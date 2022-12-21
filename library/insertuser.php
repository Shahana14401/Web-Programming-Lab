<html>
  <body>
    <form action="home1.php" method="POST">
    <center>
      <?php
        include'conn.php';
        $id=$_POST['BookId'];
        $bookName=$_POST['BookName'];
        $authorName=$_POST['AuthorName'];
        $publisher=$_POST['Publisher'];
        $price=$_POST['Price'];
        $quantity=$_POST['Quantity'];
        $sql_1="INSERT INTO bookdetails VALUES('$id','$bookName','$authorName','$publisher','$price','$quantity')";
        $result_1=mysqli_query($conn,$sql_1);        
        if(!$result_1)
        {
          $msg="Error!!!".mysqli_error($conn);
        }
        else
          echo "<br>Insertion Succes!!!";
        mysqli_close($conn);
      ?>
      <br><br>
      <input type="submit" value="Home Page" name="btn">
    </center>
    </form>
  </body>
</html>
    