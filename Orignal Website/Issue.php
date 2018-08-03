<?php

    $Connection = mysqli_connect("localhost","root","");
    $SelectDb = mysqli_select_db($Connection, "books_issueing_system");

    $ID_GET = $_GET['realIssue'];
    $Bname = $_POST['BookName'];
    $Receiver = $_POST['ReceiverName'];
    $Issuer = $_POST['IssuerName'];
    $LastDate = $_POST['Deadline'];

    $Insert_Query_Issued_Record = "INSERT INTO issued_record(bname,receiver,issuer,ldate) 
                    VALUES ('$Bname', '$Receiver', '$Issuer', '$LastDate')";

    $update_Query_Books_Record = "UPDATE books_record SET  status='1' WHERE id='$ID_GET'";
    $Execution_Result_Issued_Record = mysqli_query($Connection,$Insert_Query_Issued_Record);

    if ($Execution_Result_Issued_Record) {
        echo "The Record Has been Updated!";
    } else {
        echo "The Record Has Not Been Updated!";
    }

    $Execution_Result_Books_Record = mysqli_query($Connection,$update_Query_Books_Record);

    if ($Execution_Result_Books_Record) {
        echo "The Books Record has been Updated!";
    } else {
        echo "The Books Record hasn not been Updated";
    }

?>