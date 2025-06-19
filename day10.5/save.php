<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $password = $_POST['password'];

  $entry = "Name: $fullname\nEmail: $email\nPhone: $phone\nGender: $gender\nAddress: $address\nPassword: $password\n\n";

  file_put_contents("data.txt", $entry, FILE_APPEND);

  echo "Registration successful!";
}
?>
