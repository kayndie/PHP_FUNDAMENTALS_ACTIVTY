<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discriminant of a Quadratic Equation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        h2 {
            font-weight: bold;
        }

        label {
            display: inline-block;
            width: 20px;
            font-size: 18px;
        }

        input[type="text"] {
            width: 300px;
            padding: 8px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h2>Discriminant of a quadratic equation</h2>
    <form method="post">
        <label for="a">A</label>
        <input type="text" name="a" id="a" placeholder="Value of a here" required><br><br>

        <label for="b">B</label>
        <input type="text" name="b" id="b" placeholder="Value of b here" required><br><br>

        <label for="c">C</label>
        <input type="text" name="c" id="c" placeholder="Value of c here" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input values
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // Calculate the discriminant
        $discriminant = ($b * $b) - (4 * $a * $c);

        // Redirect to another page that shows only the discriminant value
        header("Location: result.php?discriminant={$discriminant}");
        exit();
    }
    ?>
    
</body>
</html>