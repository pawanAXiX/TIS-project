<?php

session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['not_signed'] = "Plz, Log in first";
    header('location:login.php');
}


require "user/include/dbconn.inc.php";


if (isset($_POST['surprise-btn'])) {
    $random_place_exec=$con->query("SELECT * FROM tbl_place ORDER BY RAND() LIMIT 1");
    $random_place=$random_place_exec->fetch_assoc();
    $random_place_district=$random_place["p_district"];
    $random_place_id=$random_place["p_id"];
    header("Location:destination.php?district=".$random_place_district."&destination=place&dest_id=".$random_place_id);
}else if(isset($_POST['search-btn'])){
    header("Location:search.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "No search results | Traverse Nepal"; ?>
    </title>
    <link rel="icon" href="../image/TN_favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="user/style/search_error_page_style.css">
    <link rel="stylesheet" href="user/style/reload_animation_style.css">
    <link rel="stylesheet" href="user/style/header_style.css">
    <link rel="stylesheet" href="user/style/footer_style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Reload Animation -->
    <div id="loader-overlay">
        <img src="user/img/TN-reload-page-animation.gif" alt="Loading...">
    </div>
    <!-- Reload Animation -->
    <header>
        <?php include "user/include/header.inc.php" ?>
    </header>
    <main>
        <div class="empty-result-container">
            <div class="empty-result-description">
                <div class="sorry-desc-container">
                    <div class="sorry-title">Whoa!!!</div>
                    <div class="sorry-desc"> It looks like we've encountered a lost place of Nepal. We're sending our
                        virtual explorers to
                        find it.</div>
                </div>
                <div class="search-hints-container">
                    <div class="search-hints-title">Search Hints:</div>
                    <div class="search-hints">
                        <ul>
                            <li>Please double check your spelling or try a different search terms.</li>
                            <li>Use general destination name(s) or fewer keywords.</li>
                            <li>Try searching for an item that is less specific and refine results.</li>
                        </ul>
                    </div>
                </div>
                <form action="" method="POST">
                <div class="choices-container">
                    <div class="search-again-container">
                        <div class="search-again-desc">Don't worry, we've got you covered! Our virtual explorers are
                            ready for another round of searching. Just hit the 'Search Again!' button and let us dive
                            back into the depths of Nepal's wonders to find that elusive place you seek.</div>
                        <div class="search-again-btn-container">
                            <button class="choice-btn" id="search-again" value="search" name="search-btn">Search
                                Again!</button>
                        </div>
                    </div>
                    <div class="random-suggestion-container">
                        <div class="random-suggestion-desc">"Feeling adventurous? Let us take you on a virtual roulette
                            through Nepal's hidden treasures! Click the 'Surprise Me!' button and get ready to be
                            whisked away to a random breathtaking destination."</div>
                        <div class="random-suggestion-btn-container">
                            <button class="choice-btn" id="surprise-me" value="surprise" name="surprise-btn">Surprise
                                Me!</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </main>
    <footer>
        <?php include "user/include/footer.inc.php" ?>
    </footer>

    <script src="user/script/reload_animation.js"></script>
</body>

</html>