<?php
    if(isset($_GET['destination']) && (!isset($_GET['district'])) && !isset($_GET['type']) && !isset($_GET['query']) ){
        $query_string="?destination=" . $_GET['destination'];
    }
    elseif(!isset($_GET['destination']) && !isset($_GET['district']) && !isset($_GET['type']) && isset($_GET['query'])){
        $query_string="?query=".$_GET['query'];
    }
    else if(isset($_GET['destination']) && isset($_GET['district'])  && !isset($_GET['type']) && !isset($_GET['query'])){
        $query_string="?district=" . $_GET['district']."&destination=" . $_GET['destination'];
    }
    else if(!isset($_GET['destination']) && isset($_GET['district'])  && !isset($_GET['type']) && isset($_GET['query'])){
        $query_string="?district=" . $_GET['district']."&query=" . $_GET['query'];
    }
    else if(isset($_GET['destination']) && !isset($_GET['district'])  && isset($_GET['type']) && !isset($_GET['query'])){
        $query_string="?destination=" . $_GET['destination']."&type=" . $_GET['type'];
    }
    else if (isset($_GET['destination']) && !isset($_GET['district']) && !isset($_GET['type']) && isset($_GET['query'])) {
        $query_string="?destination=" . $_GET['destination']."&query=" . $_GET['query'];
    }
    else if (isset($_GET['destination']) && isset($_GET['district']) && isset($_GET['type']) && !isset($_GET['query'])) {
        $query_string="?district=" . $_GET['district']."&destination=" . $_GET['destination']."&type=" . $_GET['type'];
    }
    else if (isset($_GET['destination']) && isset($_GET['district']) && !isset($_GET['type']) && isset($_GET['query'])) {
        $query_string="?district=" . $_GET['district']."&destination=" . $_GET['destination']."&query=" . $_GET['query'];
    }
    else if (isset($_GET['destination']) && !isset($_GET['district']) && isset($_GET['type']) && isset($_GET['query'])) {
        $query_string="?destination=" . $_GET['destination']."&type=" . $_GET['type']."&query=" . $_GET['query'];
    }
    else if (isset($_GET['destination']) && isset($_GET['district']) && isset($_GET['type']) && isset($_GET['query'])) {
        $query_string="?district=" . $_GET['district']."&destination=" . $_GET['destination']."&type=" . $_GET['type']."&query=" . $_GET['query'];
    }
    else
        $query_string="?";
?>



<div class="pagination-container">
    <div class="page-info">
        <?php
        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }

        ?>

        Showing
        <?php echo $page; ?> of
        <?php echo $pages; ?>
    </div>
    <div class="pagination">
        <a href="<?php echo $query_string; ?>&page=1">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <path
                    d="M493.6 445c-11.2 5.3-24.5 3.6-34.1-4.4L288 297.7V416c0 12.4-7.2 23.7-18.4 29s-24.5 3.6-34.1-4.4L64 297.7V416c0 17.7-14.3 32-32 32s-32-14.3-32-32V96C0 78.3 14.3 64 32 64s32 14.3 32 32V214.3L235.5 71.4c9.5-7.9 22.8-9.7 34.1-4.4S288 83.6 288 96V214.3L459.5 71.4c9.5-7.9 22.8-9.7 34.1-4.4S512 83.6 512 96V416c0 12.4-7.2 23.7-18.4 29z" />
            </svg>
        </a>

        <!-- for previous page start-->
        <?php
        if (isset($_GET['page']) && $_GET['page'] > 1) {
            ?>

            <a href="<?php echo $query_string; ?>&page=<?php echo $_GET['page'] - 1; ?>"><svg
                    xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                    <path
                        d="M267.5 440.6c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4l-192 160L64 241V96c0-17.7-14.3-32-32-32S0 78.3 0 96V416c0 17.7 14.3 32 32 32s32-14.3 32-32V271l11.5 9.6 192 160z" />
                </svg></a>

            <?php
        } else {
            ?>

            <a><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                    <path
                        d="M267.5 440.6c9.5 7.9 22.8 9.7 34.1 4.4s18.4-16.6 18.4-29V96c0-12.4-7.2-23.7-18.4-29s-24.5-3.6-34.1 4.4l-192 160L64 241V96c0-17.7-14.3-32-32-32S0 78.3 0 96V416c0 17.7 14.3 32 32 32s32-14.3 32-32V271l11.5 9.6 192 160z" />
                </svg></a>

            <?php
        }
        ?>
        <!-- for previous page end-->



        <div class="page-numbers">
            <?php
            for ($counter = 1; $counter <= $pages; $counter++) {
                if ($counter == $page) {
                    echo '<a href='.$query_string.'&page=' . $counter . ' class="selected-page">' . $counter . '</a>';
                } else {
                    echo '<a href='.$query_string.'&page=' . $counter . '>' . $counter . '</a>';
                }
            } ?>
        </div>

        <!-- for next page start-->
        <?php
        if (!isset($_GET['page'])) {
            ?>
            <a href="<?php echo $query_string; ?>&page=2"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                    viewBox="0 0 320 512">
                    <path
                        d="M52.5 440.6c-9.5 7.9-22.8 9.7-34.1 4.4S0 428.4 0 416V96C0 83.6 7.2 72.3 18.4 67s24.5-3.6 34.1 4.4l192 160L256 241V96c0-17.7 14.3-32 32-32s32 14.3 32 32V416c0 17.7-14.3 32-32 32s-32-14.3-32-32V271l-11.5 9.6-192 160z" />
                </svg></a>

            <?php
        } else {
            if ($_GET['page'] >= $pages) {
                ?>

                <a><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                        <path
                            d="M52.5 440.6c-9.5 7.9-22.8 9.7-34.1 4.4S0 428.4 0 416V96C0 83.6 7.2 72.3 18.4 67s24.5-3.6 34.1 4.4l192 160L256 241V96c0-17.7 14.3-32 32-32s32 14.3 32 32V416c0 17.7-14.3 32-32 32s-32-14.3-32-32V271l-11.5 9.6-192 160z" />
                    </svg></a>

                <?php
            } else {
                ?>
                <a href="<?php echo $query_string; ?>&page=<?php echo $_GET['page'] + 1; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                        <path
                            d="M52.5 440.6c-9.5 7.9-22.8 9.7-34.1 4.4S0 428.4 0 416V96C0 83.6 7.2 72.3 18.4 67s24.5-3.6 34.1 4.4l192 160L256 241V96c0-17.7 14.3-32 32-32s32 14.3 32 32V416c0 17.7-14.3 32-32 32s-32-14.3-32-32V271l-11.5 9.6-192 160z" />
                    </svg>
                </a>

                <?php
            }
        }
        ?>
        <!-- for next page end-->
        <!-- <a href="#">Next</a> -->
        <a href="<?php echo $query_string; ?>&page=<?php echo $pages; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <path
                    d="M18.4 445c11.2 5.3 24.5 3.6 34.1-4.4L224 297.7V416c0 12.4 7.2 23.7 18.4 29s24.5 3.6 34.1-4.4L448 297.7V416c0 17.7 14.3 32 32 32s32-14.3 32-32V96c0-17.7-14.3-32-32-32s-32 14.3-32 32V214.3L276.5 71.4c-9.5-7.9-22.8-9.7-34.1-4.4S224 83.6 224 96V214.3L52.5 71.4c-9.5-7.9-22.8-9.7-34.1-4.4S0 83.6 0 96V416c0 12.4 7.2 23.7 18.4 29z" />
            </svg>
        </a>
    </div>
</div>