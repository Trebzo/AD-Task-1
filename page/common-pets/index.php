<?php include '../../components/header.component.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Common Pets</title>
</head>
<body>
    <main>
        <h2>Common Pets for Adoption</h2>
        <div class="pet-list">
            <?php 
            $commonPets = array(
                array("name" => "Aldous", "type" => "Dog", "breed" => "Golden Retriever", "age" => 2, "available" => true, "image" => "assets/img/aldous.jpg"),
               array("name" => "Buddy", "type" => "Dog", "breed" => "Golden Retriever", "age" => 2, "available" => true, "image" => "https://via.placeholder.com/300x200?text=Dog"),
                array("name" => "Buddy", "type" => "Dog", "breed" => "Golden Retriever", "age" => 2, "available" => true, "image" => "https://via.placeholder.com/300x200?text=Dog"),
                array("name" => "Buddy", "type" => "Dog", "breed" => "Golden Retriever", "age" => 2, "available" => true, "image" => "https://via.placeholder.com/300x200?text=Dog"),
               array("name" => "Buddy", "type" => "Dog", "breed" => "Golden Retriever", "age" => 2, "available" => true, "image" => "https://via.placeholder.com/300x200?text=Dog")
            );
        foreach ($commonPets as $pet){
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
    </main>
</body>
</html>
