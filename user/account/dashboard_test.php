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
            if (!isset($_GET['page'])){
                $page = 1;
            }else{
                $page = $_GET['page'];
            }
            $page_show = 6;
            $first_page = ($page - 1) * $page_show;
            require "include/db_files/dbconn.inc.php";
            $qry = "select * from tbl_place";
            $str = "select * from tbl_place order by p_name limit 6 offset " . $first_page;
            $res = $con->query($str);
            $result = $con->query($qry);
            $total_pages = ceil($result->num_rows / 6);
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
        <!-- <div class="next_page" id="next">
            <div class="page" id="page1">1</div>
        </div> -->
        <div class="next_page" id="next">
        <?php
        if($total_pages>0){
            for($i=1;$i<=$total_pages;$i++){
                ?>
                
                
                <div class="page"> <a href="<?php echo 'dashboard_test.php?page='.$i ?>" > <?php echo $i; ?> </a></div>
                
                <?php
            }
        } 
        ?>
        </div>
    </div>

    <script src="script/jquery.js"></script>
    <script src="script/(junk)searchPlaces.js"></script>
    <script src="script/search_query_suggestion.js"></script>
    <script src="script/main.js"></script>
</body>

</html>