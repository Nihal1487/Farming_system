<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmingsystem";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM `contact`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/admin-dashboard.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #121212;
            color: #e0e0e0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #00ff88;
            font-size: 28px;
            margin-bottom: 30px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1200px;
            margin: 20px auto;
        }

        .card {
            background: #1f1f1f;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            width: 30%;
            border: 1px solid #333;
            transition: all 0.3s ease-in-out;
            margin-bottom: 20px;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            color: #00ff88;
            font-size: 20px;
            margin-bottom: 15px;
        }

        .card p {
            margin: 5px 0;
            color: #b0b0b0;
        }

        .no-records {
            text-align: center;
            color: #ff5252;
            font-size: 18px;
        }

        @media (max-width: 900px) {
            .card {
                width: 45%;
            }
        }

        @media (max-width: 600px) {
            .card {
                width: 100%;
            }
        }

        /* Additional visual improvements for better contrast */
        p strong {
            color: #00ff88;
        }
    </style>
</head>

<body>

    <h2>Contact Records</h2>

    <div class="card-container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                <div class='card'>
                    <h3>" . htmlspecialchars($row["name"]) . "</h3>
                    <p><strong>Email:</strong> " . htmlspecialchars($row["Email"]) . "</p>
                    <p><strong>Subject:</strong> " . htmlspecialchars($row["Subject"]) . "</p>
                    <p><strong>Message:</strong> " . nl2br(htmlspecialchars($row["Message"])) . "</p>
                </div>";
            }
        } else {
            echo "<h4 class='no-records'>No records found</h4>";
        }
        $conn->close();
        ?>
    </div>
</body>

</html>
