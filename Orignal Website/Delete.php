<?php
    $Id_To_Delete = $_GET['Delete'];
    $Connection = mysqli_connect("localhost","root","");
    $SelectedDB = mysqli_select_db($Connection,"books_issueing_system");
    $Delete_Query = "DELETE From books_record WHERE id = '$Id_To_Delete'";
    $Execution_Result = mysqli_query($Connection,$Delete_Query);
    if ($Execution_Result) {
        echo "The Book has been Deleted from the Record!";
    } else {
        echo "The Book has not been Deleted from the Record!";
    }
?>