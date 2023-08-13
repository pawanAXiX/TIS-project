<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
} else {
    $user_name = $_SESSION['name'];
    $user_email = $_SESSION['email'];
    $user_city = $_SESSION['city'];
    $user_district = $_SESSION['district'];
    $user_gender = $_SESSION['gender'];
    $user_dob = $_SESSION['dob'];
}

require "user/include/dbconn.inc.php";
$user_image_exec = $con->query("SELECT u_image FROM tbl_user WHERE u_email = '$user_email';");
$row = $user_image_exec->fetch_assoc();
$user_image = $row['u_image'];
// if ($user_image == "") { // checking if image already exists or not
//     //if it doesn't exist then inserting a new image
//     echo "User image not found";

// } else {
//     //if it already exists then updating the image
//     echo "User image found";
//     $user_old_image = $row['u_image'];
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Traverse Nepal</title>
    <link rel="icon" href="image/TN_favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="user/style/header_style.css">
    <link rel="stylesheet" href="user/style/search.css">
    <link rel="stylesheet" href="user/style/footer_style.css">
    <link rel="stylesheet" href="user/style/profile_style.css">
    <link rel="stylesheet" href="user/style/reload_animation_style.css">
    <link rel="stylesheet" href="user/style/noti.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>


<body>
    <!-- Reload Animation -->
    <div id="loader-overlay">
        <img src="user/img/TN-reload-page-animation.gif" alt="Loading...">
    </div>
    <!-- Reload Animation -->

    <header>
        <?php include "user/include/header.inc.php"; ?>
    </header>

    <?php if(isset($_SESSION['action'])){
        echo "<div id='noti'>".$_SESSION['action']."</div>"; 
        unset($_SESSION['action']);
    } 
    ?>
    <main>
        <div class="profile-details-container">
            <div class="details-title">
                Account Information
            </div>
            <div class="information">
                <div class="user-pp-container">
                    <div class="pp" id="profile-pic">
                        <?php if ($user_image == "") { ?>
                            <img src="image/default-pp.jpg" id="user-pp" alt="Your profile picture...">
                        <?php } else { ?>
                            <img src="<?php echo $user_image; ?>" id="user-pp" alt="Your profile picture...">
                        <?php } ?>
                    </div>
                    <div class="pp-upload">
                        <form action="user/include/image_upload.php" method="POST" enctype="multipart/form-data">
                            <input type="file" name="pp-upload" id="image-input" accept="image/jpeg, image/png, image/gif" hidden>
                            <button type="submit" id="upload-btn" disabled>Upload Profile picture</button>
                        </form>
                    </div>
                </div>
                <div class="user-information-container">

                    <div class="user-details">
                        <div class="user-name detail">
                            <div class="detail-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 448 512">
                                    <path
                                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                </svg>
                            </div>
                            <div class="detail-value">
                                <?php echo $user_name; ?>
                            </div>
                        </div>
                        <div class="user-email detail">
                            <div class="detail-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path
                                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                </svg>
                            </div>
                            <div class="detail-value">
                                <?php echo $user_email; ?>
                            </div>
                        </div>
                        <div class="user-city detail">
                            <div class="detail-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                    <path
                                        d="M480 48c0-26.5-21.5-48-48-48H336c-26.5 0-48 21.5-48 48V96H224V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V96H112V24c0-13.3-10.7-24-24-24S64 10.7 64 24V96H48C21.5 96 0 117.5 0 144v96V464c0 26.5 21.5 48 48 48H304h32 96H592c26.5 0 48-21.5 48-48V240c0-26.5-21.5-48-48-48H480V48zm96 320v32c0 8.8-7.2 16-16 16H528c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16zM240 416H208c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16zM128 400c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32zM560 256c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H528c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h32zM256 176v32c0 8.8-7.2 16-16 16H208c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16zM112 160c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h32zM256 304c0 8.8-7.2 16-16 16H208c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32zM112 320H80c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16zm304-48v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16zM400 64c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V80c0-8.8 7.2-16 16-16h32zm16 112v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16z" />
                                </svg>
                            </div>
                            <div class="detail-value">
                                <?php echo $user_city; ?>
                            </div>
                        </div>
                        <div class="user-district detail">
                            <div class="detail-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                    <path
                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                </svg>
                            </div>
                            <div class="detail-value">
                                <?php echo $user_district; ?>
                            </div>
                        </div>
                        <div class="user-gender detail">
                            <div class="detail-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                    <path
                                        d="M176 288a112 112 0 1 0 0-224 112 112 0 1 0 0 224zM352 176c0 86.3-62.1 158.1-144 173.1V384h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H208v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V448H112c-17.7 0-32-14.3-32-32s14.3-32 32-32h32V349.1C62.1 334.1 0 262.3 0 176C0 78.8 78.8 0 176 0s176 78.8 176 176zM271.9 360.6c19.3-10.1 36.9-23.1 52.1-38.4c20 18.5 46.7 29.8 76.1 29.8c61.9 0 112-50.1 112-112s-50.1-112-112-112c-7.2 0-14.3 .7-21.1 2c-4.9-21.5-13-41.7-24-60.2C369.3 66 384.4 64 400 64c37 0 71.4 11.4 99.8 31l20.6-20.6L487 41c-6.9-6.9-8.9-17.2-5.2-26.2S494.3 0 504 0H616c13.3 0 24 10.7 24 24V136c0 9.7-5.8 18.5-14.8 22.2s-19.3 1.7-26.2-5.2l-33.4-33.4L545 140.2c19.5 28.4 31 62.7 31 99.8c0 97.2-78.8 176-176 176c-50.5 0-96-21.3-128.1-55.4z" />
                                </svg>
                            </div>
                            <div class="detail-value">
                                <?php echo $user_gender; ?>
                            </div>
                        </div>
                        <div class="user-dob detail">
                            <div class="detail-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                    <path
                                        d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                                </svg>
                            </div>
                            <div class="detail-value">
                                <?php echo $user_dob; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <?php include "user/include/footer.inc.php"; ?>
    </footer>
    <script src="user/script/reload_animation.js"></script>
    <script src="user/script/noti.js"></script>

    <script>
        const uploadBtn = document.getElementById('upload-btn');
        const inputImage = document.getElementById('image-input');
        const profilePictureDiv = document.getElementById('profile-pic');
        const imageElement = document.getElementById('user-pp');

        profilePictureDiv.addEventListener('click', function () {
            inputImage.click();
        });

        inputImage.addEventListener('change', function () {
            const file = this.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                const uploadedImage = document.createElement('img');
                uploadedImage.src = e.target.result;
                profilePictureDiv.innerHTML = '';
                profilePictureDiv.appendChild(uploadedImage);
                uploadBtn.disabled = false;
            };

            reader.readAsDataURL(file);
        });
    </script>
</body>

</html>