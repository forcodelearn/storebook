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
$sql = "SELECT id, title, description, image FROM testimoni";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<article class="testimonial__card swiper-slide">
                        <img src='.$row["image"].' alt="image" class="testimonial__img">

                        <h2 class="testimonial__title">'.$row["title"].'</h2>
                        <p class="testimonial__description">
                           '.$row["description"].'
                        </p>
                     </article>';
    }
} else {
    echo "<tr><td colspan='3'>0 results</td></tr>";
}

$conn->close();
