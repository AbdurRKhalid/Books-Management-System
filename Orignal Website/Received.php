<?php

    $ID_GET = $_GET['received'];

    $Connection = mysqli_connect("localhost","root","");
    $SelectedDB = mysqli_select_db($Connection,"books_issueing_system");

    $Update_Query_Books_Record = "Update books_record SET status='0' WHERE id='$ID_GET'";

    $Execution_Result = mysqli_query($Connection, $Update_Query_Books_Record);

    if ($Execution_Result) {
        echo "The Books Record Has Been Updated!";
    } else {
        echo "The Books Record Has not Been Updated!";
    }
?>