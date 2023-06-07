<?php
include('connectToDb.php');

$db = new connectToDb();
// $data = $db->search();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- tailwind cdn link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- swiper cdn link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    
<!-- header section start -->
<section class="header">
    <a href="home.php" class="logo"> Travel</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <a href="#">Recent</a>


    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="back bg-black px-8 py-32">

    <div class="flex justify-center mb-16">
        <form class="flex">
            <input type="text" class="p-5 border-2 border-gray-500 rounded-l-full  text-lg bg-black text-white" placeholder="Search...">
            <button type="submit" class="bg-gray-600 hover:bg-purple-700 text-white rounded-r-full font-bold py-3 px-6">Go</button>
        </form>
    </div>
    
    <div class="flex justify-center ">
        
    <div class="flex justify-center mr-28">
        <form class="flex flex-col">
            <label for="filter" class="text-white text-[14px] pl-5 pb-3">Filter by type of place</label>
                <select name="filter" class="p-5 border-2 border-gray-500 rounded-full text-lg bg-black text-white">
                <option value="">Select an option</option>
                <option value="All Types">Cafe</option>
                <option value="continents & subcontinents">continents & subcontinents</option>
                <option value="Regions">Regions</option>
                <option value="Countries">Countries</option>
                <option value="Cities">Cities</option>
            </select>
        </form>
    </div>

    
    
        <div class="flex justify-center ml-16 ">
            <form class="flex flex-col">
                <label for="sort" class="text-white text-[14px] pl-5 pb-3">Sort Places by</label>
                <select name="sort" type="text" class="p-5 border-2 border-gray-500 rounded-full  text-lg bg-black text-white">
                    <!-- <option value="">Select an option</option> -->
                    <option value="Most Visited" selected>Most Visited Places in the world</option>
                    <option value="A - Z">A - Z</option>
                    <option value="Z - A">Z - A</option>
                </select>
            </form>
        </div>
    
    </div>

</div>



<!-- search result section start  -->
<section class="home-packages">

    <div class="box-container">
        <div class="box">

            <div class="image">
                <img src="./images/img4.png" alt="">
            </div>

            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, corrupti!</p>
                <a href="book.php" class="btn"> book now</a>
            </div>

        </div>
    </div>
</section>

<section class="search-results">
    <div class="container">
    <?php
// Connect to the database
$db = new mysqli("localhost", "root", "password", "");

// Get the search query from the user input
$query = $_GET["query"];

// Sanitize the query to prevent SQL injection
$query = $db->real_escape_string($query);

// Perform a database query to find the place names that match the query
$sql = "SELECT * FROM place WHERE name LIKE '%$query%'";
$result = $db->query($sql);

// Check if the query returned any results
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Get the name, description, and image from the row
    $name = $row["name"];
    $description = $row["description"];
    $image = $row["image"];

    // Display each search result within a separate container
    echo "<div class='container'>";
    echo "<h3>$name</h3>";
    echo "<p>$description</p>";
    echo "<img src='$image' alt='$name'>";
    echo "</div>";
  }
} else {
  // No results found, display a message within the existing container
  echo "<div class='container'>";
  echo "<p>No places found matching your query.</p>";
  echo "</div>";
}

// Close the database connection
$db->close();
?>

    </div>
</section>





<!-- search result section ends  -->


<!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
        <div class="box">

            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> home</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about</a>
            <a href="#"> <i class="fas fa-angle-right"></i>  package</a>
            <a href="#"> <i class="fas fa-angle-right"></i>  book</a>

        </div>


            <div class="box">

                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>

            </div>


            <div class="box">

                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-angle-phone"></i> +251-0956348779</a>
                <a href="#"> <i class="fas fa-angle-phone"></i> +251-0956348779</a>
                <a href="#"> <i class="fas fa-angle-envelope"></i> yodanos.yirgu@gmail.com</a>
                <a href="#"> <i class="fas fa-angle-map"></i> Ethiopia, AddisAbaba - 1000</a>

            </div>


            <div class="box">

                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>

            </div>



        </div>


        <!-- <div class="credit">created by <span>Yordanos Yirgu </span> | all rights reserved! </div> -->
    </section>
<!-- footer section ends  -->



<!--  swiper js link--> 
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>