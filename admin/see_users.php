<?php
include ('./BookDB.php');

$db = new BookDB();
$data = $db->fetchdata();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!-- Tailwind CSS CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="bg-gray-100">


    <div class="container mx-auto p-10">
        <!-- Data Displaying section starts -->
        <section>
            <!-- <h1 class="text-3xl font-bold mb-10">Admin Page</h1> -->
            <?php if ($data && $data->num_rows > 0) { ?>
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-600 text-white">
                        <th class="py-4 px-6">ID</th>
                        <th class="py-4 px-6">Name</th>
                        <th class="py-4 px-6">Email</th>
                        <th class="py-4 px-6">Phone</th>
                        <th class="py-4 px-6">Address</th>
                        <th class="py-4 px-6">Location</th>
                        <th class="py-4 px-6">Guests</th>
                        <th class="py-4 px-6">Arrivals</th>
                        <th class="py-4 px-6">Leaving</th>
                        <th class="py-4 px-6">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $data->fetch_assoc()) { ?>
                    <tr class="bg-white text-xl">
                        <td class="py-4 px-6"><?php echo $row['id']; ?></td>
                        <td class="py-4 px-6"><?php echo $row['name']; ?></td>
                        <td class="py-4 px-6"><?php echo $row['email']; ?></td>
                        <td class="py-4 px-6"><?php echo $row['phone']; ?></td>
                        <td class="py-4 px-6"><?php echo $row['address']; ?></td>
                        <td class="py-4 px-6"><?php echo $row['location']; ?></td>
                        <td class="py-4 px-6"><?php echo $row['guests']; ?></td>
                        <td class="py-4 px-6"><?php echo $row['arrivals']; ?></td>
                        <td class="py-4 px-6"><?php echo $row['leaving']; ?></td>
                        <td class="py-4 px-6">
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="text-red-500">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else { ?>
            <p>No records found</p>
            <?php } ?>
        </section>
        <!-- Data displaying section ends -->
    </div>

    <!-- Custom JS file link -->
    <script src="js/script.js"></script>
</body>
</html>
