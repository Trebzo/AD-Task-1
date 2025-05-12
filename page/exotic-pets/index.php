<?php include '../../components/header.component.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Common Pets</title>
     <link rel="stylesheet" href="../../assets/css/styles.css">
     <link rel="stylesheet" href="assets/css/exotic-pets.css">
</head>
<body>
    <main>
        <h2>Exotic Pets for Adoption</h2>
        <div class="pet-list">
            <?php
            // Array of exotic pets
            $exoticPets = array(
                array("name" => "Luto", "type" => "Axolotl", "breed" => "Wild Type", "age" => 1, "available" => true, "image" => "assets/img/luto.jpg"),
                array("name" => "ChiChi", "type" => "Chinchilla", "breed" => "Standard Gray", "age" => 2, "available" => true, "image" => "assets/img/chichi.jpg"),
                array("name" => "Tuko", "type" => "Leopard Gecko", "breed" => "Normal", "age" => 3, "available" => false, "image" => "assets/img/tuko.jpg")
            );

            // Loop through the pets and display them
            foreach ($exoticPets as $pet) {
                echo "<div class='pet-card'>";
                echo "<img src='" . $pet["image"] . "' alt='" . $pet["name"] . "'>";
                echo "<h3>" . $pet["name"] . "</h3>";
                echo "<p>Type: " . $pet["type"] . "</p>";
                echo "<p>Breed: " . $pet["breed"] . "</p>";
                echo "<p>Age: " . $pet["age"] . " years old</p>";
                if ($pet["available"]) {
                    echo "<p class='available'>Available for Adoption</p>";
                } else {
                    echo "<p class='not-available'>Not Available</p>";
                }
                echo "</div>";
            }
            ?>
        </div>
        <a href="../../index.php" class="back-button">Back to Home</a>
    </main>
    
    <?php include '../../components/footer.component.php';?>
</body>

</html>
