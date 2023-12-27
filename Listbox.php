<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListBox</title>
</head>
<body>
    
    <?php
    // Initialize available fruits
    $availableFruits = array("apple", "banana", "orange", "grape");
    $selectedFruits = array();
    ?>
     <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve selected fruits from the first select box
        $Fruits = isset($_POST["fruits"]) ? $_POST["fruits"] : array();

        foreach($Fruits as $values)
        {
            array_push($selectedFruits, $values);
        }
        // Display the selected fruits
        echo '<label for="selectedFruits">Selected Fruits:</label><br />';
        echo '<select id="selectedFruits" name="selectedFruits[]" multiple>';
        foreach ($selectedFruits as $fruit) {
            echo '<option value="' . $fruit . '">' . $fruit . '</option>';
        }
        echo '</select><br />';
        // Remove selected fruits from the available fruits list
        $availableFruits = array_diff($availableFruits, $selectedFruits);
    }
    ?>
     <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $description = join(', ', $_POST['fruits']);
        echo "You have a {$description}";
    }
    ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="availableFruits">Available Fruits:</label><br />
        <select id="availableFruits" name="fruits[]" multiple>
            <?php
            // Display options for available fruits
            foreach ($availableFruits as $fruit) {
                echo '<option value="' . $fruit . '">' . $fruit . '</option>';
            }
            ?>
        </select><br />
        <input type="submit" value="Submit">
        
    </form>
   
   
</body>
</html>
