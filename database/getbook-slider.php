<?php
// Establish connection to MySQL
$servername = "localhost"; // Change this to your server
$username = "root"; // Change this to your username
$password = ""; // Change this to your password
$dbname = "storebook"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform SELECT query
$sql = "SELECT id, image FROM books ORDER BY id ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<article class="home__article swiper-slide">
                           <img src='.$row["image"].' alt="image" class="home__img">
                        </article>';
    }
} else {
    echo "<tr><td colspan='3'>0 results</td></tr>";
}

$conn->close();
