<?php

    $BookName = $_POST["Bname"];
    $AuthorName = $_POST["Aname"];
    $PublishedDate = $_POST["PublishDate"];
    $BookPrice = $_POST["BookPrice"];
    $ShelfNumber = $_POST["ShelfNumber"];
    $IssuedOrNot = 0;

    $Connection = mysqli_connect("localhost","root","");
    $SelectedDB = mysqli_select_db($Connection,"books_issueing_system");

    $Insert_Query = "INSERT INTO books_record(bname,aname,pdate,bprice,snumber,status) 
                    VALUES ('$BookName', '$AuthorName', '$PublishedDate', '$BookPrice', '$ShelfNumber','$IssuedOrNot')";

    $Execution_Result = mysqli_query($Connection,$Insert_Query);

    if ($Execution_Result) {
        echo "<p>The Book has Been Added to Record Successfully.</p>";
    } else {
        echo "<p>The Book has not Added to Record.</p>";
    }
?>