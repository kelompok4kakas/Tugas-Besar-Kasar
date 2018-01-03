<html>
<head>
</head>
<body>

<?php
error_reporting(0);

$nama = $email = $website = $jkel = $komentar = $minat1 = $minat2 = $minat3 = $minat4 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = test_input($_POST["nama"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $komentar = test_input($_POST["komentar"]);
    $jkel = test_input($_POST["jkel"]);
    $minat1 = test_input($_POST["minat1"]);       
    $minat2 = test_input($_POST["minat2"]);
    $minat3 = test_input($_POST["minat3"]);
    $minat4 = test_input($_POST["minat4"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>    

<h2><u>Buku Tamu</u></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?v=form ">
 Name: <input type="text" name="nama">
 <br><br>
 E-mail: <input type="text" name="email">
 <br><br>
 Website: <input type="text" name="website">
 <br><br>
 Comment: <textarea name="komentar" rows="5" cols="40"></textarea>
 <br><br>
 Gender:
 <input type="radio" name="jkel" value="female">Female
 <input type="radio" name="jkel" value="male">Male
 <br><br>
 Minat:
 <input type="checkbox" name="minat1" value="Refresing">Resfresing
 <input type="checkbox" name="minat2" value="Mancing">Mancing
 <input type="checkbox" name="minat3" value="Kamping">Kamping
 <input type="checkbox" name="minat4" value="Sopping">Sopping
 <br><br>
 <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Hasil Input:</h2?";
echo "Nama: ".$nama;
echo "<br>";
echo "Email: ".$email;
echo "<br>";
echo "Website: ".$website;
echo "<br>";
echo "komentar: ".$komentar;
echo "<br>";
echo "Gender: ".$jkel;
echo "<br>";
echo "Minat:".$minat1.'&nbsp;'.$minat2.'&nbsp;'.$minat3.'&nbsp;'.$minat4;
?>
 
</body>
</html>






