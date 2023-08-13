<?php

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {

    $query = $_POST["query"];
    $destination = $_POST["destination"];
    $district = $_POST["district"];
    $type = $_POST["type"];
    // print_r($_POST);
    require "../include/dbconn.inc.php";

    $data = array();

    $condition = preg_replace("/[^0-9A-Za-z\s_*><&$#@()=-]/", "", $_POST["query"]);

    // echo $condition;

    if ($destination == "" && $district == "" && $type == "") { // if any of the options are not selected

        $query_data = "SELECT id, name, address, district, type, source_table
        FROM (
            SELECT d_name AS id, d_name AS name, 'Nepal' AS address, d_name AS district, d_type AS type, 'tbl_district' AS source_table
            FROM tbl_district
            UNION
            SELECT p_id AS id, p_name AS name, p_address AS address, p_district AS district, p_type AS type, 'tbl_place' AS source_table
            FROM tbl_place
            UNION
            SELECT a_id AS id, a_name AS name, a_address AS address, a_district AS district, a_type AS type, 'tbl_accommodation' AS source_table
            FROM tbl_accommodation
            UNION
            SELECT r_id AS id, r_name AS name, r_address AS address, r_district AS district, r_type AS type, 'tbl_restaurant' AS source_table
            FROM tbl_restaurant
            UNION
            SELECT c_id AS id, c_name AS name, c_address AS address, c_district AS district, c_type AS type, 'tbl_cafe' AS source_table
            FROM tbl_cafe
        ) AS combined_table
        WHERE name LIKE '" . $condition . "%'
        ORDER BY name ASC
        ;
        ";
    } else if ($district == "" && $type != "" && $destination != "") { // if only district is not selected
        $first_char = $destination[0];
        $query_data = "
            SELECT " . $first_char . "_id AS id," . $first_char . "_name AS name, " . $first_char . "_address AS address, " . $first_char . "_district AS district, " . $first_char . "_type AS type , 'tbl_" . $destination . "' AS source_table
            FROM tbl_" . $destination . "  where " . $first_char . "_type = '" . $type . "' and " . $first_char . "_name LIKE '" . $condition . "%'ORDER BY name ASC;";

    } else if ($district != "" && $type == "" && $destination == "") { //if only district is selected
        // $first_char = $destination[0];
        $query_data = "SELECT id,name, address, district, type, source_table
        FROM (
            SELECT p_id AS id,p_name AS name, p_address AS address, p_district AS district, p_type AS type , 'tbl_place' AS source_table
            FROM tbl_place
            UNION
            SELECT a_id AS id,a_name AS name, a_address AS address, a_district AS district, a_type AS type , 'tbl_accommodation' AS source_table
            FROM tbl_accommodation
            UNION
            SELECT r_id AS id,r_name AS name, r_address AS address, r_district AS district, r_type AS type , 'tbl_restaurant' AS source_table
            FROM tbl_restaurant
            UNION
            SELECT c_id AS id,c_name AS name, c_address AS address, c_district AS district, c_type AS type , 'tbl_cafe' AS source_table
            FROM tbl_cafe
        ) AS combined_table
        WHERE name LIKE '" . $condition . "%' and district = '" . $district . "'
        ORDER BY name ASC;
        ";
    } else if ($district == "" && $destination != "" && $type == "") { //if only destination is selected
        $first_char = $destination[0];
        $query_data = "
            SELECT " . $first_char . "_id AS id," . $first_char . "_name AS name, " . $first_char . "_address AS address, " . $first_char . "_district AS district, " . $first_char . "_type AS type , 'tbl_" . $destination . "' AS source_table
            FROM tbl_" . $destination . " where " . $first_char . "_name LIKE '" . $condition . "%' ORDER BY name ASC;";

    } else if ($district != "" && $destination != "" && $type == "") { // if only type is not selected
        $first_char = $destination[0];
        $query_data = "
            SELECT " . $first_char . "_id AS id," . $first_char . "_name AS name, " . $first_char . "_address AS address, " . $first_char . "_district AS district, " . $first_char . "_type AS type , 'tbl_" . $destination . "' AS source_table
            FROM tbl_" . $destination . " where " . $first_char . "_name LIKE '" . $condition . "%'and " . $first_char . "_district ='" . $district . "' ORDER BY name ASC;";

    } else if ($district != "" && $destination != "" && $type != "") { // if all options are selected
        $first_char = $destination[0];
        $query_data = "
            SELECT " . $first_char . "_id AS id," . $first_char . "_name AS name, " . $first_char . "_address AS address, " . $first_char . "_district AS district, " . $first_char . "_type AS type , 'tbl_" . $destination . "' AS source_table
            FROM tbl_" . $destination . " where " . $first_char . "_name LIKE '" . $condition . "%'and " . $first_char . "_district ='" . $district . "' and " . $first_char . "_type ='" . $type . "' ORDER BY name ASC;";
    }
    // echo $query_data;
    $result = $con->query($query_data);


    $count = 0;
    // echo $result;
    while ($result_row = $result->fetch_assoc()) {

        // echo $result_row['name'];
        $replace_string = '<b>' . $condition . '</b>';

        $data[$count] = array(
            "name" => str_ireplace($condition, $replace_string, $result_row["name"]),
            "address" => $result_row["address"],
            "district" => $result_row["district"],
            "type" => $result_row["type"],
            "destinaton" => substr($result_row["source_table"], 4), //removing "tbl_" from table name in database
            "id" => $result_row["id"]
        );
        $count++;

    }
    echo json_encode($data);
    // print_r($data);
    // echo json_encode($data);
    

}
?>