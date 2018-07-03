<?php

class inReservation extends Dbh {

    public function insertReservation($checkin, $checkout, $g) {
        $sql = "INSERT INTO reservation (res_id, guest_id, ckin, ckout, guests) VALUES ('1','1','$checkin', '$checkout','$g')";
        $result = $this->connect()->query($sql);
    }
}