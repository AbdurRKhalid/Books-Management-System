<?php

    $Id_To_Update = $_GET['Update'];
    $Connection = mysqli_connect("localhost","root","");
    $SelectedDB = mysqli_select_db($Connection,"books_issueing_system");
    $RetrievingQuery = "SELECT * FROM books_record WHERE id='$Id_To_Update'";
    $Execution_Result = mysqli_query($Connection,$RetrievingQuery);
    while ($Data = mysqli_fetch_array($Execution_Result)) {
        $Name = $Data['bname'];
        $Author = $Data['aname'];
        $PublishedDate = $Data['pdate'];
        $Price = $Data['bprice'];
        $Shelf = $Data['snumber'];
        if ($Data['status']==0) {
            $Status = "The Book is Not Issued.";
        } else {
            $Status = "The Book has not Issued.";
        }
    }
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update the Record of Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Bootstrap/css/bootstrap.css" />
</head>
<body>
<div class="container">

    <div class="jumbotron" style="margin-top: 20px; margin-bottom: 10px; background-color: #9900cc; color: aliceblue">
        <h1 class="display-4">Update Record of Book</h1>
        <p class="lead">Using the Following Form You Can Update Record of Book to Record. Simply Fill the Form and Press Add to Record.</p>
    </div>

    <form action="Update2.php?RealUpdate=<?php echo $Id_To_Update;?>" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name of Book</label>
                <input name="Bname" value="<?php echo $Name; ?>" type="text" class="form-control" id="inputEmail4" placeholder="Name of Book">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Author of Book</label>
                <input name="Aname" value="<?php echo $Author; ?>" type="text" class="form-control" id="inputPassword4" placeholder="Author of Book">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Date of Published</label>
            <input name="PublishDate" value="<?php echo $PublishedDate; ?>" type="text" class="form-control" id="inputAddress" placeholder="Published Date">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Price of Book</label>
            <input name="BookPrice" value="<?php echo $Price; ?>" type="text" class="form-control" id="inputAddress2" placeholder="Price">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Shelf Number of Book</label>
                <input name="ShelfNumber" value="<?php echo $Shelf; ?>" type="text" class="form-control" id="inputCity" placeholder="Shelf Number">
            </div>
            <br>
            <input name="Status" value="<?php echo $Status; ?>" type="text" class="form-control" id="inputCity" placeholder="Status">
            <br>
            <button type="submit" style="margin-top: 15px; margin-bottom: 15px;" class="btn btn-primary">Add to Record</button>
    </form>

</div>
</body>
</html>
