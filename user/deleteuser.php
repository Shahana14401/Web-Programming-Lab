<html>
  <body>
    <form action="home1.php" method="POST">
      <center>
        <?php
          include 'conn.php';
          $id1=$_POST['userId'];
          $sql_3="DELETE FROM user WHERE id='$id1'";
          $result_3=mysqli_query($conn,$sql_3);
          if($result_3)
          {
            $msg="Error!!!".mysqli_error($conn);
          }
          else
          {
            echo "<br>Deletion Success!!!";
          }
          mysqli_close($conn);
        ?>
        <br><br>
        <input type="submit" value="Home page" name="btn">
      </center>
    </form>  
  </body>
</html>