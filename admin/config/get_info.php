<?php

require "dbconn.inc.php";
if (isset($_GET['type'])) {
    if ($_GET['type'] == "dashboard") {
        $str1 = "select * from tbl_user";
        $str2 = "select * from tbl_place";
        $str3 = "select * from tbl_accommodation";
        $str4 = "select * from tbl_restaurant";
        $str5 = "select * from tbl_cafe";
        $str6 = "select * from tbl_district";
        $res1 = $con->query($str1);
        $res2 = $con->query($str2);
        $res3 = $con->query($str3);
        $res4 = $con->query($str4);
        $res5 = $con->query($str5);
        $res6 = $con->query($str6);

        echo "<div class='main_block'>
        <a href='?type=district'>
            <div class='block'>
            <div class='block_icon'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><path d='M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z'/></svg>
            </div>
            <div class='block_num_name'>
            <div class='block_num'><p>" . $res6->num_rows . "</p></div>
                <div class='block_name' ><p> Districts</p></div> 
                </div>
            </div>
            </a>
            <a href='?type=place'>
            <div class='block'>
            <div class='block_icon'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512'><path d='M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z'/></svg>
            </div>
            <div class='block_num_name'>
                <div class='block_num' ><p>" . $res2->num_rows . "</p></div>
                <div class='block_name' ><p> Places</p></div> 
            </div>
            </div>
            </a>
            <a href='?type=accommodation'>
            <div class='block'>
            <div class='block_icon'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z'/></svg>
            </div>
            <div class='block_num_name'>
                <div class='block_num' ><p> " . $res3->num_rows . "</p></div>
                <div class='block_name' ><p> Accommodations</p></div> 
                  </div>
                  </div>
                  </a>
                  <a href='?type=restaurant'>
            <div class='block'>
            <div class='block_icon'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z'/></svg>
            </div>
            <div class='block_num_name'>
                <div class='block_num' ><p> " . $res4->num_rows . "</p></div>
                <div class='block_name' ><p> Restaurants</p></div> 
                  </div>
                  </div>
                  </a>
                  <a href='?type=cafe'>
            <div class='block'>
            <div class='block_icon'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512'><path d='M96 64c0-17.7 14.3-32 32-32H448h64c70.7 0 128 57.3 128 128s-57.3 128-128 128H480c0 53-43 96-96 96H192c-53 0-96-43-96-96V64zM480 224h32c35.3 0 64-28.7 64-64s-28.7-64-64-64H480V224zM32 416H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32z'/></svg>
            </div>
            <div class='block_num_name'>
                <div class='block_num' ><p> " . $res5->num_rows . "</p></div>
                <div class='block_name' ><p> Cafes</p></div> 
                  </div>
                  </div>
                  </a>
                  <a href='?type=user'>
                  <div class='block'>
            <div class='block_icon'>
            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><path d='M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z'/></svg>
            </div>
            <div class='block_num_name'>
                <div class='block_num'><p>" . $res1->num_rows . "</p></div>
                <div class='block_name' ><p> Users</p></div> 
                  </div>
                  </div>
                  </a>
        </div>";
    } else if ($_GET['type'] == "place") {
        $str1 = "select * from tbl_place";
        $res1 = $con->query($str1);
        $start = 0;
        $contents_per_page = 10;
        $no_of_rows = $res1->num_rows;
        $pages = ceil($no_of_rows / $contents_per_page);
        if (isset($_GET['page'])) {
            $page = $_GET['page'] - 1;
            $start = $page * $contents_per_page;
        }
        $str2 = "select * from tbl_place limit " . $start . "," . $contents_per_page;
        $res2 = $con->query($str2);
        if ($res2->num_rows > 0) {
            echo "<table class='attraction'  cellspacing='0'>
            <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Address</th>
            <th>District</th>
            <th>Type</th>
            <th>Ratings</th>
            <th>Update</th>
            <th>Delete</th>
            <th>View</th>
            </tr>
            ";
            while ($row = $res2->fetch_assoc()) {
                echo "<tr>
                <td>" . ++$start . "</td>
                <td>" . $row['p_name'] . "</td>
                <td>" . $row['p_address'] . "</td>
                <td>" . $row['p_district'] . "</td>
                <td>" . $row['p_type'] . "</td>
                <td>" . $row['p_rating'] . "</td>
                <td ><a href='update.php?type=" . $_GET['type'] . "&id=" . $row['p_id'] . "' ><svg style='fill:blue;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 512 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z'/></svg></a></td>

                <td><a href='config/delete.php?type=" . $_GET['type'] . "&id=" . $row['p_id'] . "'><svg style='fill:red;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 448 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z'/></svg></a></td>

                <td>
                <a href='view_destination.php?district=" . $row['p_district'] . "&destination=place&dest_id=" . $row['p_id'] . "' target='_blank'>
                <svg style='fill:grey;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 576 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z'/></svg></a></td>
                </tr>
                ";
            }
            echo "</table>";
            include "config/pagination.inc.php";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('manage-tourism').click();
            });
        </script>";
        }

    } else if ($_GET['type'] == "accommodation") {
        $str1 = "select * from tbl_accommodation";
        $res1 = $con->query($str1);
        $start = 0;
        $contents_per_page = 10;
        $no_of_rows = $res1->num_rows;
        $pages = ceil($no_of_rows / $contents_per_page);
        if (isset($_GET['page'])) {
            $page = $_GET['page'] - 1;
            $start = $page * $contents_per_page;
        }
        $str2 = "select * from tbl_accommodation limit " . $start . "," . $contents_per_page;
        $res2 = $con->query($str2);
        if ($res2->num_rows > 0) {
            echo "<table class='attraction'  cellspacing='0'>
            <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Address</th>
            <th>District</th>
            <th>Type</th>
            <th>Ratings</th>
            <th>Update</th>
            <th>Delete</th>
            <th>View</th>
            </tr>
            ";
            while ($row = $res2->fetch_assoc()) {
                echo "<tr>
                <td>" . ++$start . "</td>
                <td>" . $row['a_name'] . "</td>
                <td>" . $row['a_address'] . "</td>
                <td>" . $row['a_district'] . "</td>
                <td>" . $row['a_type'] . "</td>
                <td>" . $row['a_rating'] . "</td>
                <td><a href='update.php?type=" . $_GET['type'] . "&id=" . $row['a_id'] . "' ><svg style='fill:blue;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 512 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z'/></svg></a></td>

                <td><a href='config/delete.php?type=" . $_GET['type'] . "&id=" . $row['a_id'] . "' ><svg style='fill:red;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 448 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z'/></svg></a></td>

                <td>
                <a href='view_destination.php?district=" . $row['a_district'] . "&destination=accommodation&dest_id=" . $row['a_id'] . "' target='_blank'>
                <svg style='fill:grey;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 576 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z'/></svg></a></td>
                </tr>
                ";
            }
            echo "</table>";
            include "config/pagination.inc.php";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('manage-tourism').click();
            });
        </script>";
        }
    } else if ($_GET['type'] == "restaurant") {
        $str1 = "select * from tbl_restaurant";
        $res1 = $con->query($str1);
        $start = 0;
        $contents_per_page = 10;
        $no_of_rows = $res1->num_rows;
        $pages = ceil($no_of_rows / $contents_per_page);
        if (isset($_GET['page'])) {
            $page = $_GET['page'] - 1;
            $start = $page * $contents_per_page;
        }
        $str2 = "select * from tbl_restaurant limit " . $start . "," . $contents_per_page;
        $res2 = $con->query($str2);
        if ($res2->num_rows > 0) {
            echo "<table class='attraction'  cellspacing='0'>
            <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Address</th>
            <th>District</th>
            <th>Type</th>
            <th>Ratings</th>
            <th>Update</th>
            <th>Delete</th>
            <th>View</th>
            </tr>
            ";
            while ($row = $res2->fetch_assoc()) {
                echo "<tr>
                <td>" . ++$start . "</td>
                <td>" . $row['r_name'] . "</td>
                <td>" . $row['r_address'] . "</td>
                <td>" . $row['r_district'] . "</td>
                <td>" . $row['r_type'] . "</td>
                <td>" . $row['r_rating'] . "</td>
                <td><a href='update.php?type=" . $_GET['type'] . "&id=" . $row['r_id'] . "' ><svg style='fill:blue;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 512 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z'/></svg></a></td>

                <td><a href='config/delete.php?type=" . $_GET['type'] . "&id=" . $row['r_id'] . "' ><svg style='fill:red;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 448 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z'/></svg></a></td>

                <td>
                <a href='view_destination.php?district=" . $row['r_district'] . "&destination=restaurant&dest_id=" . $row['r_id'] . "' target='_blank'>
                <svg style='fill:grey;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 576 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z'/></svg></a></td>
                </tr>
                ";
            }
            echo "</table>";
            include "config/pagination.inc.php";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('manage-tourism').click();
            });
        </script>";
        }
    } else if ($_GET['type'] == "cafe") {
        $str1 = "select * from tbl_cafe";
        $res1 = $con->query($str1);
        $start = 0;
        $contents_per_page = 10;
        $no_of_rows = $res1->num_rows;
        $pages = ceil($no_of_rows / $contents_per_page);
        if (isset($_GET['page'])) {
            $page = $_GET['page'] - 1;
            $start = $page * $contents_per_page;
        }
        $str2 = "select * from tbl_cafe limit " . $start . "," . $contents_per_page;
        $res2 = $con->query($str2);
        if ($res2->num_rows > 0) {
            echo "<table class='attraction'  cellspacing='0'>
            <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Address</th>
            <th>District</th>
            <th>Type</th>
            <th>Ratings</th>
            <th>Update</th>
            <th>Delete</th>
            <th>View</th>
            </tr>
            ";
            while ($row = $res2->fetch_assoc()) {
                echo "<tr>
                <td>" . ++$start . "</td>
                <td>" . $row['c_name'] . "</td>
                <td>" . $row['c_address'] . "</td>
                <td>" . $row['c_district'] . "</td>
                <td>" . $row['c_type'] . "</td>
                <td>" . $row['c_rating'] . "</td>
                <td><a href='update.php?type=" . $_GET['type'] . "&id=" . $row['c_id'] . "' ><svg style='fill:blue;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 512 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z'/></svg></a></td>

                <td><a href='config/delete.php?type=" . $_GET['type'] . "&id=" . $row['c_id'] . "' ><svg style='fill:red;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 448 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z'/></svg></a></td>

                <td>
                <a href='view_destination.php?district=" . $row['c_district'] . "&destination=cafe&dest_id=" . $row['c_id'] . "' target='_blank'>
                <svg style='fill:grey;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 576 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z'/></svg></a></td>
                </tr>
                ";
            }
            echo "</table>";
            include "config/pagination.inc.php";
            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('manage-tourism').click();
            });
        </script>";
        }
    } else if ($_GET['type'] == "user") {
        $str1 = "select * from tbl_user";
        $res1 = $con->query($str1);
        $start = 0;
        $contents_per_page = 10;
        $no_of_rows = $res1->num_rows;
        $pages = ceil($no_of_rows / $contents_per_page);
        if (isset($_GET['page'])) {
            $page = $_GET['page'] - 1;
            $start = $page * $contents_per_page;
        }
        $str2 = "select * from tbl_user limit " . $start . "," . $contents_per_page;
        $res2 = $con->query($str2);
        if ($res2->num_rows > 0) {
            echo "<table class='attraction'  cellspacing='0'>
            <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>District</th>
            <th>Gender</th>
            <th>Delete</th>
            </tr>
            ";
            while ($row = $res2->fetch_assoc()) {
                echo "<tr>
                <td>" . ++$start . "</td>
                <td>" . $row['u_name'] . "</td>
                <td>" . $row['u_email'] . "</td>
                <td>" . $row['u_city'] . "</td>
                <td>" . $row['u_district'] . "</td>
                <td>" . $row['u_gender'] . "</td>
                <td><a href='#'><svg style='fill:red;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 448 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z'/></svg></a></td>
                </tr>
                ";
            }
            echo "</table>";
            include "config/pagination.inc.php";
        }
    } else if ($_GET['type'] == "suggestion") {
        $str1 = "select * from tbl_suggestion";
        $res1 = $con->query($str1);
        $start = 0;
        $contents_per_page = 10;
        $no_of_rows = $res1->num_rows;
        $pages = ceil($no_of_rows / $contents_per_page);
        if (isset($_GET['page'])) {
            $page = $_GET['page'] - 1;
            $start = $page * $contents_per_page;
        }
        $str2 = "select * from tbl_user limit " . $start . "," . $contents_per_page;
        $res2 = $con->query($str2);
        if ($res2->num_rows > 0) {
            echo "<table class='attraction'  cellspacing='0'>
            <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Type</th>
            <th>City</th>
            <th>District</th>
            <th>Gender</th>
            <th>Delete</th>
            </tr>
            ";
            while ($row = $res2->fetch_assoc()) {
                echo "<tr>
                <td>" . ++$start . "</td>
                <td>" . $row['s_name'] . "</td>
                <td>" . $row['s_type'] . "</td>
                <td>" . $row['s_address'] . "</td>
                <td>" . $row['s_district'] . "</td>
                <td>" . $row['s_gender'] . "</td>
                <td><a href='#'><svg style='fill:red;' xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 448 512'><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d='M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z'/></svg></a></td>
                </tr>
                ";
            }
            echo "</table>";
            include "config/pagination.inc.php";
        }
    }
} else {
    header("Location:admin.php?type=dashboard");
}



?>