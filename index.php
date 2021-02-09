<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>PHP Practice</title>
  </head>
  <body>
    <div class="container-fluid">
      
      <?php 
      include "./pages/navBar.php";
      include "./pages/bioGenerator.php";
      ?>
      <hr>
      <?php 
      include "./pages/mockSignUp.php";
      ?>
    </div>
  </body>
</html>
