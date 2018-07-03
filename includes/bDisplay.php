<?php

class bDisplay extends getBook {

    public function displayBooked() {
        $datas = $this->getAllBooked();
        if($datas != NULL){
        foreach($datas as $data){
            echo "<tr>
            <td>" . $data['fname'] . "&nbsp" . $data['lname'] . "</td>
            <td>" . $data['ckin'] . "</td>
            <td>" . $data['ckout'] . "</td>
            <td>" . $data['room_num'] . "&nbsp" . "&nbsp" . "&nbsp" . $data['room_type'] . "</td>
            </tr>";
             }
        }else{
            echo " ";
         }
    }
}