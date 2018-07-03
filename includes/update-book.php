<?php 

include 'dbh.php';
include 'inReservation.php';
include 'roomStatus.php';
include 'dbh.inc.php';
include 'deleteBooked.php';

if(isset($_POST['submit'])){

    $checkin = mysqli_real_escape_string($conn, $_POST['checkin']);
    $checkout = mysqli_real_escape_string($conn, $_POST['checkout']);
    $g = mysqli_real_escape_string($conn, $_POST['guest']);

    $single = mysqli_real_escape_string($conn, $_POST['single']);
    $double = mysqli_real_escape_string($conn, $_POST['double']);
    $queen = mysqli_real_escape_string($conn, $_POST['queen']);
    $king = mysqli_real_escape_string($conn, $_POST['king']);

    $del = new deleteBooked();
    $del->resetRoom();
    $del->deleteReservedRooms();
    $del->deleteReservation();    

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

    $iR = new inReservation();
    $iR->insertReservation($checkin, $checkout, $g);

    header("Location: ../bookings.php?success");
}else{

    header("Location: ../index.php?");
}

?> 