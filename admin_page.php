<?php
include('connectToDb.php');

$db = new connectToDb();
$data = $db->fetchdata();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- Tailwind cdn link -->
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


    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->





<div class="flex justify-end">
  <form class="flex">
    <input type="text" class="p-3 border border-gray-300 rounded-l-md mr-10 text-lg" placeholder="Search...">
    <button type="submit" class="bg-purple-400 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-r-md mr-14">Go</button>
  </form>
</div>




    <!-- Data Displaying section starts -->
    <section class="m-20 p-5">
    <?php if ($data && $data->num_rows > 0) { 
        $color = false;
        ?>
        <table class="w-full border-collapse">
            <tr class="bg-gray-600 text-xl ">
                <th class="py-10 px-6 text-white text-2xl">ID</th>
                <th class="py-10 px-6 text-white text-2xl">Name</th>
                <th class="py-10 px-6 text-white text-2xl">Email</th>
                <th class="py-10 px-6 text-white text-2xl">Phone</th>
                <th class="py-10 px-6 text-white text-2xl">Address</th>
                <th class="py-10 px-6 text-white text-2xl">Location</th>
                <th class="py-10 px-6 text-white text-2xl">Guests</th>
                <th class="py-10 px-6 text-white text-2xl">Arrivals</th>
                <th class="py-10 px-6 text-white text-2xl">Leaving</th>
                <th class="py-10 px-6 text-white text-2xl">Actions</th>
            </tr>
            <?php while ($row = $data->fetch_assoc()) { ?>
                <tr class="bg-white text-xl ">
                    <td class="py-10 px-5"><?php echo $row['id']; ?></td>
                    <td class="py-10 px-5"><?php echo $row['name']; ?></td>
                    <td class="py-10 px-9"><?php echo $row['email']; ?></td>
                    <td class="py-10 px-5"><?php echo $row['phone']; ?></td>
                    <td class="py-10 px-20"><?php echo $row['address']; ?></td>
                    <td class="py-10 px-20"><?php echo $row['location']; ?></td>
                    <td class="py-10 px-20"><?php echo $row['guests']; ?></td>
                    <td class="py-10 px-20"><?php echo $row['arrivals']; ?></td>
                    <td class="py-10 px-20"><?php echo $row['leaving']; ?></td>
                    <td class="py-10 px-20">
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="text-red-500">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <p>No records found</p>
    <?php } ?>
</section>



    <!-- Data displaying section ends -->



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