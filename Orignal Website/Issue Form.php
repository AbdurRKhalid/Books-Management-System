<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Issue Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Bootstrap/css/bootstrap.css" />
</head>


<body>

    <div class="container">
        <div class="jumbotron" style="margin-top: 20px; margin-bottom: 10px; background-color: #f90606; color: aliceblue">
            <h1 class="display-4">Issue A Book</h1>
            <p class="lead">Fill The Form Below and Issue the Book to the Concern Person.</p>
        </div>
        <form action="Issue.php?realIssue=<?php echo $_GET['issue'];?>" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name of Book</label>
                    <input name="BookName" type="text" class="form-control" id="inputEmail4" placeholder="Book Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Name of Receiving Person</label>
                    <input type="text" name="ReceiverName" class="form-control" id="inputPassword4" placeholder="Receiving Person">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Issueing Person</label>
                <input type="text" name="IssuerName" class="form-control" id="inputAddress" placeholder="Issueing Person">
            </div>

            <div class="form-group">
                <label for="inputAddress">Last Date of Receiving</label>
                <input type="text" name="Deadline" class="form-control" id="inputAddress" placeholder="Last Date">
            </div>

            <button type="submit" class="btn btn-primary">Issue the Book</button>
        </form>
    </div>

</body>


</html>