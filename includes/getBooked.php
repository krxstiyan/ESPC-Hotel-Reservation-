<?php

class getBook extends Dbh {

    protected function getAllBooked() {
        $sql = "SELECT * FROM reservation LEFT JOIN guest ON reservation.guest_id = guest.guest_id LEFT JOIN reserved ON reservation.res_id = reserved.res_id LEFT JOIN room ON reserved.room_id = room.room_id ORDER BY room.room_num;";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }
}