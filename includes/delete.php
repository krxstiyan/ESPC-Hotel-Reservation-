<?php

include 'dbh.php';
include 'deleteBooked.php';

$del = new deleteBooked();
$del->resetRoom();
$del->deleteGuest();
$del->deleteReservedRooms();
$del->deleteReservation();

header("Location: ../index.php?success");

?>