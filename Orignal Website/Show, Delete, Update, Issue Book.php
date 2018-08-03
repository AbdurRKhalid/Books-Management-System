<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show, Delete, Update and Issue the Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Bootstrap/css/bootstrap.css" />
</head>
<body>
<div class="container">

    <div class="jumbotron" style="margin-top: 20px; margin-bottom: 10px; background-color: #00cc45; color: aliceblue">
        <h1 class="display-4">Select, Delete, Update the Book in Record and Issue Book to Person.</h1>
        <p class="lead">You can Delete A book from Record, Update the record of Book or Issue the Book to a person using the Following Information.</p>
    </div>

    <button type="button" class="btn btn-primary" style="margin-top: 15px; margin-bottom: 15px"><a href="Add%20New%20Book.php?Action=Add New Book" style="text-decoration: none;"><span style="color: aliceblue">Add New Book</span></a></button>
    <button type="button" class="btn btn-dark" style="margin-top: 15px; margin-bottom: 15px"><a href="#" style="text-decoration: none;"><span style="color: aliceblue">See Record of Issued Books</span></a></button>

    <?php

    $Connection = mysqli_connect("localhost","root","");
    $SelectedDB = mysqli_select_db($Connection,"books_issueing_system");
    $View_Query = "SELECT * From books_record";
    $Execution_Result = mysqli_query($Connection, $View_Query);
    while ($Data = mysqli_fetch_array($Execution_Result)) {
        $Id = $Data['id'];
        $Name = $Data['bname'];
        $Author = $Data['aname'];
        $PublishedDate = $Data['pdate'];
        $Price = $Data['bprice'];
        $Shelf = $Data['snumber'];
        if ($Data['status'] == 0) {
            $Status = "Not Issued";
        } else {
            $Status = "Issued";
        }
    ?>

    <table class="table">

        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name of Book</th>
            <th scope="col">Name of Author</th>
            <th scope="col">Date of Publication</th>
            <th scope="col">Price of Book</th>
            <th scope="col">Shelf Numer</th>
            <th scope="col">Book Status</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <th scope="row"><?php echo $Id; ?></th>
            <td><?php echo $Name; ?></td>
            <td><?php echo $Author; ?></td>
            <td><?php echo $PublishedDate; ?></td>
            <td><?php echo $Price; ?></td>
            <td><?php echo $Shelf; ?></td>
            <td><?php echo $Status; ?></td>
            <td><button type="button" class="btn btn-danger"><a href="Delete.php?Delete=<?php echo $Id; ?>" style="text-decoration: none;"><span style="color: aliceblue">Delete</span></a></button></td>
            <td><button type="button" class="btn btn-warning"><span style="color: aliceblue"><a href="Update1.php?Update=<?php echo $Id; ?>" style="text-decoration: none;"><span style="color: aliceblue">Update</span></a></span></button></td>
            <td><button type="button" class="btn btn-success" <?php if ($Status == "Issued"){echo "disabled";} else{echo "enable";} ?>><a href="Issue%20Form.php?issue=<?php echo $Id; ?>" style="text-decoration: none;"><span style="color: aliceblue">Issue</span></a></button></td>
            <td><button type="button" class="btn btn-info"<?php if ($Status == "Issued"){echo "enable";} else{echo "disabled";} ?>><a href="Received.php?received=<?php echo $Id; ?>" style="text-decoration: none;"><span style="color: aliceblue">Received</span></a></button></td>
        </tr>
        </tbody>
        <?php }?>
    </table>
</div>
</body>
</html>