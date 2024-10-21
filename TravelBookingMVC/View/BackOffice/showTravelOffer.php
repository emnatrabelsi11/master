<?php
$host = 'localhost'; 
$db = 'traveloffer'; 
$user = 'root'; 
$pass = ''; 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM TravelOffers");
    $offers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<h2>Travel Offers</h2>";
    echo "<table>
            <tr>
                <th>Title</th>
                <th>Destination</th>
                <th>Departure Date</th>
                <th>Return Date</th>
                <th>Price</th>
                <th>Available</th>
                <th>Category</th>
            </tr>";

    foreach ($offers as $offer) {
        echo "<tr>
                <td>{$offer['titre']}</td>
                <td>{$offer['destination']}</td>
                <td>{$offer['date_depart']}</td>
                <td>{$offer['date_retour']}</td>
                <td>{$offer['prix']}</td>
                <td>" . ($offer['disponible'] ? 'Yes' : 'No') . "</td>
                <td>{$offer['categorie']}</td>
              </tr>";
    }

    echo "</table>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<link rel="stylesheet" href="../BackOffice/css/style2.css">