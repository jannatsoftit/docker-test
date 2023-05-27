
<?php 

if(isset($_POST['btn'])){

    $username = ($_POST['user_name']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
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