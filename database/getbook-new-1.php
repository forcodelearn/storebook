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
$sql = "SELECT id, title, description, price, discount, image FROM books ORDER BY id ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<a href="#" class="new__card swiper-slide">
                        <img src='.$row["image"].' alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">'.$row["title"].'</h2>
                           <div class="new__prices">
                              <span class="new__discount">$'.$row["discount"].'</span>
                              <span class="new__price">$'.$row["price"].'</span>
                           </div>

                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>';
    }
} else {
    echo "<tr><td colspan='3'>0 results</td></tr>";
}

$conn->close();
