<?php

if (isset($_POST["select_option"])) {
    district_dropdown_value();
}
if (isset($_POST["dest_option"])) {
    type_dropdown_value($_POST["dest_option"]);
    // print_r($_POST["dest_option"]);
}

function district_dropdown_value()
{

    // require "./include/db_files/dbconn.inc.php";
    $con = new mysqli("localhost", "root", "", "db_tis"); //creating connection

    //checking connection
    if ($con->connect_error) {
        die("Connection failed :" . $con->connect_error);
    }



    $data = array();

    $query_district = "SELECT DISTINCT(p_district) AS district
    FROM tbl_place
    UNION
    SELECT DISTINCT(a_district) AS district
    FROM tbl_accommodation
    UNION
    SELECT DISTINCT(r_district) AS district
    FROM tbl_restaurant
    UNION
    SELECT DISTINCT(c_district) AS district
    FROM tbl_cafe
    ";


    $result = $con->query($query_district);

    foreach ($result as $row) {
        $data[] = array(
            'district' => $row["district"]
        );
    }

    echo json_encode($data);
}

function type_dropdown_value($dest_option)
{
    // require "./include/db_files/dbconn.inc.php";
    $con = new mysqli("localhost", "root", "", "db_tis"); //creating connection

    //checking connection
    if ($con->connect_error) {
        die("Connection failed :" . $con->connect_error);
    }

    $fstchar = $dest_option[0];


    $data = array();

    $query_district = "select DISTINCT(" . $fstchar . "_type) from tbl_" . $dest_option;




    $result = $con->query($query_district);

    foreach ($result as $row) {
        $data[] = array(
            'type' => $row[$fstchar.'_type']
        );
    }

    echo json_encode($data);
}


?>