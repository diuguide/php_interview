<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../style.css" />
    <title>Document</title>
  </head>
  <body>
    <?php
$fName = trim(htmlspecialchars($_POST["fName"]));
$lName = trim(htmlspecialchars($_POST["lName"]));
$address = trim(htmlspecialchars($_POST["address"]));
$position = trim(htmlspecialchars($_POST["position"]));

?>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-header"><h1><?=$fName." ".$lName?></h1></div>
            <div class="card-body">
              <h5 class="card-title">Job Title: <?=$position?></h5>
              <p class="card-text">
                <?=$address?>
              </p>
              <a href="../index.php" class="btn btn-primary">Back to form</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
