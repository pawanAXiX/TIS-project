<?php

if ($_SERVER['REQUEST_METHOD']==="POST") {

    require "../include/dbconn.inc.php";

    $num = 0;

    $data = array();

    $query = "select * from tbl_place ";

    $result = $con->query($query);

    foreach ($result as $row) {
        $num += 1;
        $data[] = array(
            'p_num' => $num,
            'p_name' => $row["p_name"],
            'p_desc' => $row["p_desc"],
            'p_image' => $row["p_image"],
            'p_address' => $row["p_address"],
            'p_district' => $row["p_district"],
            'p_coordinates' => $row["p_coordinate"],
            'p_type' => $row["p_type"],
            'p_rating' => $row["p_rating"],
            'p_reviews' => $row["p_num_reviews"],
            'p_fee' => $row["p_fee"],
            'p_starttime' => $row["p_starttime"],
            'p_closetime' => $row["p_closetime"],
            'p_contact' => $row["p_contact"]
        );
    }

    echo json_encode($data);
}

?>