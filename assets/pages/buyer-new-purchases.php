<?php
// Connect to the database
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "farmingsystem"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
    header("Location: payment.php");
    exit();
}

// Fetch data from the products table for displaying available products
$sql = "SELECT id, productName, description, ItemQuantity, quantityType, ExpectedPrice, PriceType, MobileNumber, Address, State, District, `Sub District`, Village FROM products";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/marketplace.css"> -->
     <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Roboto', sans-serif;
  background-color: #121212; /* Dark background for the whole page */
  color: #e0e0e0; /* Light text color */
  padding: 20px;
}

.container {
  max-width: 1200px;
  margin: auto;
  padding: 20px;
  background-color: #1e1e1e; /* Dark container background */
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
}

h1 {
  text-align: center;
  color: #00ff88; /* Green color for the header */
  margin-bottom: 20px;
}

.contract-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
}

.contract {
  background-color: #2a2a2a; /* Slightly lighter dark background for cards */
  padding: 20px;
  border: 1px solid #333;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  color: #e0e0e0;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contract:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
}

.contract h2 {
  color: #00ff88; /* Green color for card titles */
  margin-bottom: 15px;
}

.contract p {
  color: #cccccc;
  margin-bottom: 10px;
}

.contract button {
  background-color: #00ff88; /* Green background for button */
  color: #000;
  padding: 12px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.contract button:hover {
  background-color: #00cc66; /* Darker green on hover */
}

.no-products {
  text-align: center;
  color: #ff5252; /* Red color for no products message */
  font-size: 18px;
}

/* Media Queries for responsiveness */
@media (max-width: 768px) {
  .container {
    padding: 15px;
  }

  .contract {
    padding: 15px;
  }
}

@media (max-width: 480px) {
  .container {
    padding: 10px;
  }

  .contract {
    padding: 10px;
  }

  .contract h2 {
    font-size: 18px;
  }

  .contract p {
    font-size: 14px;
  }

  .contract button {
    font-size: 14px;
    padding: 10px;
  }
}

     </style>

    <title>Available Products</title>
</head>

<body>
    <div class="container">
        <h1>Available Products</h1>
        <div class="contract-list" id="contractList">
            <?php
            // Check if there are results
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="contract">';
                    echo '<h2>' . htmlspecialchars($row["productName"]) . '</h2>';
                    echo '<p><strong>Product ID:</strong> ' . htmlspecialchars($row["id"]) . '</p>'; // Display product id
                    echo '<p><strong>Description:</strong> ' . htmlspecialchars($row["description"]) . '</p>';
                    echo '<p><strong>Quantity:</strong> ' . htmlspecialchars($row["ItemQuantity"]) . ' ' . htmlspecialchars($row["quantityType"]) . '</p>';
                    echo '<p><strong>Expected Price:</strong> ' . htmlspecialchars($row["ExpectedPrice"]) . ' ' . htmlspecialchars($row["PriceType"]) . '</p>';
                    echo '<p><strong>Mobile Number:</strong> ' . htmlspecialchars($row["MobileNumber"]) . '</p>';
                    echo '<p><strong>Address:</strong> ' . htmlspecialchars($row["Village"]) . ', ' . htmlspecialchars($row["Sub District"]) . ', ' . htmlspecialchars($row["District"]) . ', ' . htmlspecialchars($row["State"]) . '</p>';
                    
                    // Add Purchase button form using the product id
                    echo '<form method="POST" action="">'; // Redirects to another page
                    echo '<input type="hidden" name="product_id" value="' . htmlspecialchars($row["id"]) . '">'; // Use product id
                    echo '<button type="submit">Purchase</button>';
                    echo '</form>';

                    echo '</div>';
                }
            } else {
                echo "<p style='color: red;'>No Products available at the moment.</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>

<?php
// Close the database connection
$conn->close();
?>
