<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- adding places section start  -->
<section class="booking">

    <h1 class="heading-title"> Add Places</h1>

    <form action="places_form.php" method="POST"  class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>name: </span>
                <input type="text" placeholder="enter the name of the place" name="place_name">
            </div>

            <div class="inputBox">
                <span>price: </span>
                <input type="number" placeholder="enter the price" name="price">
            </div>


            <div class="inputBox">
                <span>description: </span>
                <input type="text" placeholder="enter description about the place" name="description">
            </div>


            <div class="inputBox">
                <span>Image: </span>
                <input type="file" placeholder="Import images of the place" name="image">
            </div>


        </div>

        <input type="submit" value="submit" class="btn" name="send">
    </form>

</section>

<!-- adding places section start  -->

</body>
</html>
