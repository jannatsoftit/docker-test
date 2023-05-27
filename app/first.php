
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP From</title>

</head>
<body>

PHP contact from 


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

  <label>Username</label><br>
  <input type="text" name="user_name"><br>
  <label>Address</label><br>
  <input type="text" name="address"><br>
  <label>Phone</label><br>
  <input type="text" name="phone"><br> 
  <label>Age</label><br>
  <input type="text" name="age"><br>
  <label>Email</label><br>
  <input type="email" name="email"><br>
  <label>Password</label><br>
  <input type="password" name="password"><br><br>
  <input type="submit" value="submit Data" name="btn">

</form>
<br/>

<form action="img.php" method="post" enctype="multipart/form-data" >

<input type="file" name="uploade_file"><br>
<input type="submit" name="submit">

</form>


<?php 

if(isset($_POST['btn'])){

    $username = ($_POST['user_name']);
    $email = test_input($_POST['email']);
    $password = htmlspecialchars(test_input($_POST['password']));
    $address = test_input($_POST['address']);
    $phone = test_input($_POST['phone']);
    $age = test_input($_POST['age']);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?> 



<h2>Username: <?php if(isset($username)){
    echo $username; } ?></h2>

<h2>Email: <?php if(isset($email)){
    echo $email; } ?></h2>

<h2>Password: <?php if(isset($password)){
    echo $password; } ?></h2>
 
<h2>Address: <?php if(isset($address)){
    echo $address; } ?></h2>

<h2>Phone: <?php if(isset($phone)){
    echo $phone; } ?></h2>

<h2>Age: <?php if(isset($age)){
    echo $age; } ?></h2>




</body>
</html>