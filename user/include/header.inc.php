<?php 

if(isset($_SESSION['email'])){
    $user_email = $_SESSION['email'];
    $user_name=$_SESSION['name'];
    
    require "dbconn.inc.php";
    
    $user_image_exec = $con->query("SELECT u_image FROM tbl_user WHERE u_email = '$user_email';");
    $row = $user_image_exec->fetch_assoc();
    $user_image = $row['u_image'];
}

?>
<div class="header-container">
    <nav class="nav-container">
        <a class="logo-container" href="./search.php">
            <picture>
                <img src="user/img/logo.png" alt="Traverse Nepal" class="logo">
            </picture>
        </a>

        <div class="navbar-container">
            <div class="nav-menus">
                <a href="./index.php" class="nav-menu">
                    <span class="menu-name">
                        Home
                    </span>
                </a>
                <a href="#bottom" class="nav-menu scroll-to-bottom">
                    <span class="menu-name">
                        About
                    </span>
                </a>
                <a href="#bottom" class="nav-menu scroll-to-bottom">
                    <span class="menu-name">
                        Contact
                    </span>
                </a>
                <!-- <a href="#" class="nav-menu">
                    <span class="menu-name">
                        Support
                    </span>
                </a> -->
                <div>
                    <div class="profile-container">
                        <button class="profile-btn" id="user-profile-btn">
                            <picture class="profile-pic">
                                <?php if($user_image!=""){?>
                                    <img src="<?php echo $user_image; ?>"
                                        alt="profile pic">
                                <?php } else { ?>
                                    <img src="image/default-pp.jpg"
                                        alt="default Profile pic">
                                    <?php } ?>
                            </picture>
                        </button>
                    </div>

                    <div class="profile-dropdown-content" id="profile-dropdown">
                        <ul class="dropdown-contents">
                            <hr>
                            <a href="profile.php" class="dropdown-content">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                        viewBox="0 0 576 512">
                                        <path
                                            d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
                                    </svg>
                                </span>
                                <span class="dropdown-label">
                                    <li>Profile</li>
                                    <span>></span>
                                </span>
                            </a>
                            <hr>
                            <a href="liked_destinations.php" target="_blank" class="dropdown-content">
                                <span><svg viewBox="0 0 24 24" width="24px" height="24px">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="dropdown-label">
                                    <li>Liked Trips</li>
                                    <span>></span>
                                </span>
                            </a>
                            <hr>
                            <a href="./search.php" target="_blank" class="dropdown-content">
                                <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                        viewBox="0 0 320 512">
                                        <path
                                            d="M16 144a144 144 0 1 1 288 0A144 144 0 1 1 16 144zM160 80c8.8 0 16-7.2 16-16s-7.2-16-16-16c-53 0-96 43-96 96c0 8.8 7.2 16 16 16s16-7.2 16-16c0-35.3 28.7-64 64-64zM128 480V317.1c10.4 1.9 21.1 2.9 32 2.9s21.6-1 32-2.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32z" />
                                    </svg>
                                </span>
                                <span class="dropdown-label">
                                    <li>Search</li>
                                    <span>></span>
                                </span>
                            </a>
                            <hr>
                            <a href="./logout.php" class="dropdown-content">
                                <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                                    </svg>
                                </span>
                                <span class="dropdown-label">
                                    <li>Logout</li>
                                    <span>></span>
                                </span>
                            </a>
                            <hr>
                        </ul>
                    </div>
                </div>

                <?php
                if(isset($_SESSION['email'])){
                    $user_name=$_SESSION['name'];
                    if(str_word_count($user_name) > 1){
                        $user_name_array=explode(" ",$user_name);
                        array_pop($user_name_array);
                        $user_first_name=implode(" ",$user_name_array);
                    }else{
                        $user_first_name=$user_name;
                    }
                    $user_gender=$_SESSION['gender'];
                    $user_city=$_SESSION['city'];
                    $user_district=$_SESSION['district'];
                }
                ?>
                <div class="profile-details-content" id="profile-details">
                    <div class="profile-user-name">
                        <?php echo $user_first_name; ?>
                    </div>
                    <div class="profile-user-district">
                    <?php echo $user_district; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<!-- for profile dropdown menu transition -->
<script>
    const profileBtn = document.getElementById('user-profile-btn');
    const profileDropdown = document.getElementById("profile-dropdown");

    profileBtn.addEventListener("click", function (event) {
        event.stopPropagation();
        profileDropdown.classList.toggle("dropped");
    });

    window.addEventListener('click', function (event) {
        if (!event.target.closest('#user-profile-btn')) {
            if (profileDropdown.classList.contains('dropped')) {
                profileDropdown.classList.remove('dropped');
            }
        }
    });
</script>