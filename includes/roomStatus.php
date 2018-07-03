<?php

class roomStatus extends Dbh {

    public function roomSingle($single) {

        if ($single == "1"){
                $qSingle = "UPDATE room SET avail = 'Booked' WHERE room_id = 1";
                $fQuer = $this->connect()->query($qSingle);

                $allSingle = "INSERT INTO reserved (res_id, room_id) VALUES ('1','1')";
                $sQuer = $this->connect()->query($allSingle);
            
        }else if ($single == "2"){
                $oneSingle = "UPDATE room SET avail = 'Booked' WHERE room_type = 'Single'";
                $fQuer = $this->connect()->query($oneSingle);
    
                $allSingle = "INSERT INTO reserved (res_id, room_id) VALUES ('1','1'),('1','2')";
                $sQuer = $this->connect()->query($allSingle);
        }
    }

    public function roomDouble($double) {

        if ($double == "1"){
                $qDouble = "UPDATE room SET avail = 'Booked' WHERE room_id = 3";
                $fQuer = $this->connect()->query($qDouble);

                $allDouble = "INSERT INTO reserved (res_id, room_id) VALUES ('1','3')";
                $sQuer = $this->connect()->query($allDouble);
            
        }else if ($double == "2"){
                $qDouble = "UPDATE room SET avail = 'Booked' WHERE room_type = 'Double'";
                $fQuer = $this->connect()->query($qDouble);
    
                $allDouble = "INSERT INTO reserved (res_id, room_id) VALUES ('1','3'),('1','4')";
                $sQuer = $this->connect()->query($allDouble);
        }
    }

    public function roomQueen($queen) {

        if ($queen == "1"){
                $qQueen = "UPDATE room SET avail = 'Booked' WHERE room_id = 5";
                $fQuer = $this->connect()->query($qQueen);

                $allQueen = "INSERT INTO reserved (res_id, room_id) VALUES ('1','5')";
                $sQuer = $this->connect()->query($allQueen);
            
        }else if ($queen == "2"){
                $qQueen = "UPDATE room SET avail = 'Booked' WHERE room_type = 'Queen'";
                $fQuer = $this->connect()->query($qQueen);
    
                $allQueen = "INSERT INTO reserved (res_id, room_id) VALUES ('1','5'),('1','6')";
                $sQuer = $this->connect()->query($allQueen);
        }
    }

    public function roomKing($king) {

        if ($king == "1"){
                $qKing = "UPDATE room SET avail = 'Booked' WHERE room_id = 7";
                $fQuer = $this->connect()->query($qKing);

                $allKing = "INSERT INTO reserved (res_id, room_id) VALUES ('1','7')";
                $sQuer = $this->connect()->query($allKing);
            
        }else if ($king == "2"){
                $qKing = "UPDATE room SET avail = 'Booked' WHERE room_type = 'King'";
                $fQuer = $this->connect()->query($qKing);
    
                $allKing = "INSERT INTO reserved (res_id, room_id) VALUES ('1','7'),('1','8')";
                $sQuer = $this->connect()->query($allKing);
        }
    }
}