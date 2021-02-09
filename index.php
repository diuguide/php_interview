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
      <div class="row" id="navBar">
        <div class="col">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Bio Generator</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mock Sign-up Form</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row" id="bioGenerator">
        <div class="col">
          <div class="row">
            <div class="col-6 mx-auto">
              <h3>
                Hello World! My name is
                <?=$_POST["name"];?>. I am from
                <?=$_POST["home"];?>. I love to
                <?=$_POST["hobby"];?>
                in my free time. My favorite color is
                <?=$_POST["color"];?>
              </h3>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-6 mx-auto">
              <form method="post">
                <div class="mb-3">
                  <label for="inputName" class="form-label">Name</label>
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                  />
                </div>
                <div class="mb-3">
                  <label for="inputHome" class="form-label">Hometown</label>
                  <input
                    type="text"
                    name="home"
                    class="form-control"
                    id="home"
                  />
                </div>
                <div class="mb-3">
                  <label for="inputHobby" class="form-label"
                    >Favorite Hobby</label
                  >
                  <input
                    type="text"
                    name="hobby"
                    class="form-control"
                    id="hobby"
                  />
                </div>
                <div>
                  <p>Favorite Color</p>
                </div>
                <div class="mb-3 form-check">
                  <input type="radio" id="red" name="color" value="red" />
                  <label for="red">Red</label><br />
                  <input type="radio" id="green" name="color" value="green" />
                  <label for="green">Green</label><br />
                  <input type="radio" id="blue" name="color" value="blue" />
                  <label for="blue">Blue</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row" id="mockSignUp">
        <div class="col mx-auto">
          <div class="row">
            <div class="col">
              <h1>Mock Sign-up Form</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
