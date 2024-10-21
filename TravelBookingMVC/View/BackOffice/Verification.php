<?php
$host = 'localhost'; 
$db = 'traveloffer'; 
$user = 'root'; 
$pass = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titre = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
        $destination = filter_input(INPUT_POST, 'destination', FILTER_SANITIZE_STRING);
        $date_depart = filter_input(INPUT_POST, 'departure_date', FILTER_SANITIZE_STRING);
        $date_retour = filter_input(INPUT_POST, 'return_date', FILTER_SANITIZE_STRING);
        $prix = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
        $disponible = isset($_POST['disponible']) ? true : false;
        $categorie = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
        $sql = "INSERT INTO TravelOffers (titre, destination, date_depart, date_retour, prix, disponible, categorie) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$titre, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie]);
        header("Location: showTravelOffer.php");
        exit();
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
