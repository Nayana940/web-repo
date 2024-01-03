<?php
// Array of Indian cricket players
$indianPlayers = array(
    "Virat Kohli",
    "Rohit Sharma",
    "Jasprit Bumrah",
    "Hardik Pandya",
    "Ravindra Jadeja",
    "Ajinkya Rahane",
    "Cheteshwar Pujara",
    "Shikhar Dhawan",
    "KL Rahul",
    "Rishabh Pant"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
   <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h2 {
            text-decoration: underline;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>List of Indian Cricket Players</h2>

<table>
    <thead>
        <tr>
            <th>Player Name</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Displaying players in the table
        foreach ($indianPlayers as $player) {
            echo "<tr><td>$player</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
