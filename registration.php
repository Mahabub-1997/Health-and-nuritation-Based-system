

<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health & Nutrition Dairy</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
     integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
     crossorigin="anonymous">


  <title>Registration | PHP</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="stylereg.css">


  
     
   


<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Health and Nuitration Dairy</label>
        <ul>
            <li><a class="active"  href="homepage.php">Home</a></li>
             <li><a class="active"   href="index.php">Live Chat</a></li>
            <!--<li><a class ="active" href="search.php">Search</a></li>   -->
            <li><a class="active"  href="upload.php">Emergency</a></li>
            <li><a class="active"   href="registration.php">Appoinment</a></li>
            <li><a class="active"                 href="fit.html">Daily care </a></li>
            
        </ul>
    </nav>






<style>  
    body {
  background: url(regi.jpg);
}

p.ex1 {
   
  padding-left: 50px;
}
</style>



</head>
<body>


<br>
</br>
<br>
</br>
<div>
  <?php
    if(isset($_POST['create'])){
    $username       = $_POST['username'];
    $email          = $_POST['email'];
    $phonenumber    = $_POST['phonenumber'];

    
     $sql = "INSERT INTO total (username,email, phonenumber ) VALUES(?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$username, $email, $phonenumber]);
        if($result){
            echo 'Successfully saved.';
        }else{
            echo 'There were erros while saving the data.';
        }
}else{
    echo ' ';
}
  ?>  
</div>

<div>
  <form action="registration.php" method="post">
    <div class="container">
      
      <div class="row">
        <div class="col-sm-3">
          <h1 style="color: black">Registration</h1>
          <hr class="mb-3">
          <br> <br>
          <label for="username" style="margin-left: 10px" ><b>User Name :</b></label>
          <input class="form-control" style="margin-left: 00px " id="username" type="text" name="username" required>
          <br> <br>


          <label for="email" style="margin-left: 10px"><b>Email :</b></label>
          <input class="form-control" style="margin-left: 40px" id="email"  type="email" name="email" required>
          <br><br>


          <label for="phonenumber" style="margin-left: 10px"><b>Phone Num:</b></label>
          <input class="form-control" style="margin-left: 2px" id="phonenumber"  type="text" name="phonenumber" required>
          <br>
          <br>
          <label for="select" style="margin-left: 10px"><b>Catagory:</b></label>
          <select style="margin-left: 22px" name="option">
  <option>Select</option>

  <option>heart</option>
  <option>Eye</option>
  <option>Sargary</option>
  <option>Gaiyeny </option>
  <option>Arthopadic</option>

    </select>
<br>
          <br>
          <br>
          <br>


          <hr class="mb-3">
          <input class="btn btn-primary" style="margin-left: 115px" type="submit" id="register" name="create" value="submit">
        </div>
      </div>
    </div>
  </form>
</div>



</br>
<br>
</br>
<br>








  <div class="w3-container w3-teal" style="border: 1px solid black;background-color: #9932CC ">
  <footer style="width:100%; text-align: center;">
    <p>&copy; 2021 Health And Nurtation Dairy</p>
    <a href=" "> 24 hours service</a>
  </footer>

</div>
</body>
</html>