<html>
<head>
  <style>
    /* Style the search bar */
    .search {
      width: 80%;
      margin: 20px auto;
    }

    .search input {
      width: 70%;
      padding: 10px;
      border: 1px solid #ccc;
    }

    .search button {
      width: 20%;
      padding: 10px;
      background-color: #eee;
      border: none;
    }

    /* Style the container div */
    .container {
      width: 80%;
      margin: 20px auto;
      border: 1px solid #ccc;
      padding: 10px;
    }

    .container img {
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <!-- Create a search bar with a form that submits the query to the PHP file -->
  <div class="search">
    <form action="search.php" method="get">
      <input type="text" name="query" placeholder="Enter a place name...">
      <button type="submit">Search</button>
    </form>
  </div>

  <!-- Create a container div that will display the results from the PHP file -->
  <div class="container">
    <?php include("search.php"); ?>
  </div>
</body>
</html>