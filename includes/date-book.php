<?php 

include 'dbh.php';
include 'inGuest.php';
include 'inReservation.php';
include 'roomStatus.php';
include 'dbh.inc.php';

if(isset($_POST['submit'])){

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $checkin = mysqli_real_escape_string($conn, $_POST['checkin']);
    $checkout = mysqli_real_escape_string($conn, $_POST['checkout']);
    $g = mysqli_real_escape_string($conn, $_POST['guest']);

    $single = mysqli_real_escape_string($conn, $_POST['single']);
    $double = mysqli_real_escape_string($conn, $_POST['double']);
    $queen = mysqli_real_escape_string($conn, $_POST['queen']);
    $king = mysqli_real_escape_string($conn, $_POST['king']);

    $iG = new inGuest();
    $iG->insertGuest($fname, $lname, $address, $contact, $email);

    $iR = new inReservation();
    $iR->insertReservation($checkin, $checkout, $g);

    $Sroom = new roomStatus();
    $Sroom->roomSingle($single);
    $Droom = new roomStatus();
    $Droom->roomDouble($double);
    $Qroom = new roomStatus();
    $Qroom->roomQueen($queen);
    $Kroom = new roomStatus();
    $Kroom->roomKing($king);

    header("Location: ../index.php?success");
    
}else{

    header("Location: ../index.php?");
}

?> 