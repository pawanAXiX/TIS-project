<div class="breadcrumb-container">
    <div class="breadcrumb-trails">
        <ul class="breadcrumbs">

            <li class="crumb"><a href="search.php">Nepal</a></li>

            <?php if (isset($_GET['district'])){
                echo '<li class="crumb"><a href="attractions_list.php?destination=district">Districts</a></li>';
                echo '<li class="crumb"><a href="district_page.php?district=' . $_GET['district'] . '">' . $district . '</a></li>';
            }
                ?>

            <?php if (isset($destination)) {
                
                echo '<li class="crumb">';
                if (isset($_GET['district'])) {
                    echo " <a href='attractions_list.php?district=" . $_GET['district'] . "&destination=" . $destination . "'>" . ucfirst($destination) . "s</a>";
                } else {
                    echo " <a href='attractions_list.php?destination=" . $destination . "'>" . ucfirst($destination) . "s</a>";
                }
                echo '</li>';
                
            } ?>
            <?php if (isset($_GET['query'])){
                echo '<li class="crumb">search results for "'.$_GET['query'].'"</li>';
            }?>

            <?php if (isset($_GET['dest_id']))
                echo '<li class="crumb">' . $destination_name . '</li>' ?>

            <?php if(basename($_SERVER['PHP_SELF'])=="liked_destinations.php")
                echo '<li class="crumb">Liked Trips</li>' ?>
            </ul>
        </div>
    </div>