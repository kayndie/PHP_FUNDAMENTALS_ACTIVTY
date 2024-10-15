<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order System</title>
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
            width: 150px;
            font-size: 18px;
        }

        select, input[type="text"] {
            width: 300px;
            padding: 8px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            font-size: 16px;
        }

        table {
            width: 50%;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Order System</h2>
    <table>
        <tr>
            <th>Order</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>₱50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>₱75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>₱150</td>
        </tr>
    </table>

    <form action="" method="post">
        <label for="order">Select an order:</label>
        <select id="order" name="order" required>
            <option value="Burger">Burger</option>
            <option value="Fries">Fries</option>
            <option value="Steak">Steak</option>
        </select><br>

        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity" required><br>

        <label for="cash">Cash:</label>
        <input type="text" id="cash" name="cash" required><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $order = $_POST['order'];
        $quantity = $_POST['quantity'];
        $cash = $_POST['cash'];

        $prices = [
            'Burger' => 50,
            'Fries' => 75,
            'Steak' => 150
        ];

        if (is_numeric($quantity) && is_numeric($cash) && $quantity > 0) {
            $price_per_item = $prices[$order];
            $total_price = $price_per_item * $quantity;

            if ($cash >= $total_price) {
                $change = $cash - $total_price;

                echo "<h2>Receipt</h2>";
                echo "Order: " . $order . "<br>";
                echo "Quantity: " . $quantity . "<br>";
                echo "Total Price: ₱" . $total_price . "<br>";
                echo "Cash: ₱" . $cash . "<br>";
                echo "Change: ₱" . $change . "<br>";
                echo "Date: " . date("Y-m-d H:i:s") . "<br>";
            } else {
                echo "<h2>Sorry, balance not enough</h2>";
                echo "You need ₱" . ($total_price - $cash) . " more to complete the purchase.";
            }
        } else {
            echo "<h2>Error</h2>";
            echo "Please enter valid numeric values for quantity and cash.";
        }
    }
    ?>
</body>
</html>
