<?php

    $ID_GET = $_GET['RealUpdate'];
    $BookName = $_POST['Bname'];
    $AuthorName = $_POST['Aname'];
    $PublishedDate = $_POST['PublishDate'];
    $BookPrice = $_POST['BookPrice'];
    $ShelfNumber = $_POST['ShelfNumber'];
    if($_POST['Status']=="The Book is Not Issued.") {
        $Status = 0;
    } else {
        $Status = 1;
    }

    $connection = new mysqli("localhost","root","");
    $select_db = mysqli_select_db($connection,'books_issueing_system');
    $update_Query = "UPDATE books_record SET bname = '$BookName', aname = '$AuthorName', 
                    pdate='$PublishedDate', bprice='$BookPrice', snumber='$ShelfNumber', status='$Status' WHERE id='$ID_GET'";
    $Execution_Result = mysqli_query($connection,$update_Query);
    if ($Execution_Result) {
        echo "The Record has Been Updated!";
    } else {
        echo  "The Record has not been Updated!";
    }

?>