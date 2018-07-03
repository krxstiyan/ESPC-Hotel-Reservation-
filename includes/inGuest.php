<?php

class inGuest extends Dbh {

    public function insertGuest($fname, $lname, $address, $contact, $email) {
        $sql = "INSERT INTO guest (guest_id, fname, lname, address, number, email) VALUES ('1','$fname', '$lname','$address','$contact','$email')";
        $result = $this->connect()->query($sql);
    }
}

