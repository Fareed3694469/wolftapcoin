// db.php
<?php
$host = 'https://fareed3694469.github.io/wolftapcoin/';
$dbname = ' @Wolftapcoin_bot.';  
$username = 'root';  
$password = '';  

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
