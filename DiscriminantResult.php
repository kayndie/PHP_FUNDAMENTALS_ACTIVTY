<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discriminant Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_GET['discriminant'])) {
        // Display the discriminant value only
        $discriminant = $_GET['discriminant'];
        echo " " . $discriminant;
    } else {
        echo "No discriminant calculated.";
    }
    ?>
</body>
</html>