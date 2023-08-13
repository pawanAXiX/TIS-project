<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/dashboard.css">
</head>

<body>
    <?php include "include/header.inc.php" ?>
    <div class="dash_section">
        <div class="search_div">
            <input type="text" name="search" class="search" id="toSearch" placeholder="Enter a place to search" onkeyup="javascript:(load_search_result(this.value))">
            <i class="ri-search-line" onclick="fnSearch();"></i>
            <!-- <br>     -->
            <span id="search_result"></span>
        </div>
        <div class="dash_main">
            <?php
            require "include/db_files/dbconn.inc.php";
            $str = "select * from tbl_place order by p_name";
            $res = $con->query($str);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    $id = $row['p_id'];
                    $img=$row['p_image'];
                    ?>


                    <div class="place_card" id="<?php echo "card" . ($id); ?>" onclick="loadPlace(<?php echo $id?>);">
                        <div class="card_body" id="<?php echo 'card' . ($id) . 'main'; ?>">
                            <div class="card_image" id="<?php echo 'card' . ($id) . 'image'?>">
                                    <img src="<?php echo $img ;?>" alt="Image" class="place_img">
                            </div>

                        </div>
                        <div class="card_foot" id="<?php echo 'card' . ($id) . 'foot'; ?>">
                            <h2>
                                <?php echo strtoupper($row['p_name']); ?>
                            </h2>
                        </div>
                    </div>

                    <?php
                }
            }

            ?>



        </div>
        <div class="next_page" id="next">
            <div class="page" id="page1">1</div>
        </div>
    </div>

    <script src="script/jquery.js"></script>
    <script src="script/(junk)searchPlaces.js"></script>
    <script src="script/search_query_suggestion.js"></script>
    <script src="script/main.js"></script>
</body>

</html>