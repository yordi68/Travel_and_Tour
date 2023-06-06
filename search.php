<?php
// Connect to the database
$db = new mysqli("localhost", "username", "password", "database");

// Get the search query from the user input
$query = $_GET["query"];

// Sanitize the query to prevent SQL injection
$query = $db->real_escape_string($query);

// Perform a database query to find the place name that matches the query
$sql = "SELECT * FROM place WHERE name LIKE '%$query%'";
$result = $db->query($sql);

// Check if the query returned any results
if ($result->num_rows > 0) {
  // Loop through the results and display them as containers below the search bar
  while ($row = $result->fetch_assoc()) {
    // Get the name, description and image from the row
    $name = $row["name"];
    $description = $row["description"];
    $image = $row["image"];

    // Create a container div with the name, description and image
    echo "<div class='container'>";
    echo "<h3>$name</h3>";
    echo "<p>$description</p>";
    echo "<img src='$image' alt='$name'>";
    echo "</div>";
  }
} else {
  // No results found, display a message
  echo "<p>No places found matching your query.</p>";
}

// Close the database connection
$db->close();
?>