<?php

class deleteBooked extends Dbh {
    public function resetRoom() {
        $rstRoom = "UPDATE room SET avail = 'Available'";
        $q1 = $this->connect()->query($rstRoom);
    }
    public function deleteGuest(){
        $delGuest = "DELETE FROM guest WHERE guest_id = 1;";
        $q2 = $this->connect()->query($delGuest);
    }
    public function deleteReservedRooms(){
        $delRsvrd = "DELETE FROM reserved WHERE res_id = 1;";
        $q3 = $this->connect()->query($delRsvrd);
    }
    public function deleteReservation(){
        $delRes= "DELETE FROM reservation WHERE guest_id = 1;";
        $q4 = $this->connect()->query($delRes);
    }
}


