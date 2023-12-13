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
$sql = "SELECT id, title, description, price, discount, image FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<article class="featured__card swiper-slide">
                        <img src='.$row["image"].' alt="image" class="featured__img">

                        <h2 class="featured__title">'.$row["title"].'</h2>
                        <div class="featured__prices">image
                           <span class="featured__discount">$'.$row["discount"].'</span>
                           <span class="featured__price">$'.$row["price"].'</span>
                        </div>

                        <button class="button" value='.$row["id"].'>Add To Card</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>';
    }
} else {
    echo "<tr><td colspan='3'>0 results</td></tr>";
}

$conn->close();
