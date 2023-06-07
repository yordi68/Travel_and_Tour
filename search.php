<?php
// Connect to the database
$db = new mysqli("localhost", "root", "", "lab");

// Get the search query from the user input
$query = $_GET["query"];

// Sanitize the query to prevent SQL injection
$query = $db->real_escape_string($query);

// Perform a database query to find the place name that matches the query
$sql = "SELECT * FROM user WHERE name LIKE '%$query%'";
$result = $db->query($sql);

// Check if the query returned any results
if ($result->num_rows > 0) {  
  // Loop through the results and display them in the desired container format
  while ($row = $result->fetch_assoc()) {
    // Get the name, email, and image from the row
    $name = $row["name"];
    $email = $row["email"];
    $image = $row["image"];

    // Create a container div with the appropriate classes and content
    echo "<div class='box'>";
    echo "<div class='image'>";
    echo "<img src='$image' alt='$name'>";
    echo "</div>";
    echo "<div class='content'>";
    echo "<h3>$name</h3>";
    echo "<p>$email</p>";
    echo "<a href='book.php' class='btn'>book now</a>";
    echo "</div>";
    echo "</div>";
  }
} else {
  // No results found, display a message
  echo "<p>No places found matching your query.</p>";
}

// Close the database connection
$db->close();
?>
