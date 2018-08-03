<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add New Book To Record</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Bootstrap/css/bootstrap.css" />
</head>
<body>
<div class="container">
    <div class="jumbotron" style="margin-top: 20px; margin-bottom: 10px; background-color: #0099cc; color: aliceblue">
        <h1 class="display-4">Add New Book To Record</h1>
        <p class="lead">Using the Following Form You Can Add new Book to Record. Simply Fill the Form and Press Add to Record.</p>
    </div>

    <form action="Insert.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name of Book</label>
                <input name="Bname" type="text" class="form-control" id="inputEmail4" placeholder="Name of Book">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Author of Book</label>
                <input name="Aname" type="text" class="form-control" id="inputPassword4" placeholder="Author of Book">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Date of Published</label>
            <input name="PublishDate" type="text" class="form-control" id="inputAddress" placeholder="Published Date">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Price of Book</label>
            <input name="BookPrice" type="text" class="form-control" id="inputAddress2" placeholder="Price">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Shelf Number of Book</label>
                <input name="ShelfNumber" type="text" class="form-control" id="inputCity" placeholder="Shelf Number">
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Add to Record</button>
    </form>

</div>
</body>
</html>