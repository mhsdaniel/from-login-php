<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $username = isset($_GET["username"]) ? $_GET["username"] : "";
  $password = isset($_GET["password"]) ? $_GET["password"] : "";

  if ($username === "mhsdniel" && $password === "daniel15") {
    echo "Login berhasil";
  } else{
    echo "Login gagal. Periksa kembali username dan password";
  }
}
?>

<h2>Formulir Pendaftaran SSB</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Nomor HP: <input type="text" name="nomor_hp">
  <br><br>
  Posisi: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Jenis kelamin:
  <input type="radio" name="gender" value="laki-laki">Laki-laki
  <input type="radio" name="gender" value="perempuan">Perempuan
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $nomor_hp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $nomor_hp = test_input($_POST["nomor_hp"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h4>Formulir SSB:</h4>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $nomor_hp;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>