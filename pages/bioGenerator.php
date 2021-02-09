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