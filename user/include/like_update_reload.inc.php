<?php

$user_email=$_SESSION['email'];
require "dbconn.inc.php";

$user_id_query_exec=$con->query("SELECT u_id FROM tbl_user WHERE u_email = '$user_email';");
$user_data_row=$user_id_query_exec->fetch_assoc();
$user_id=$user_data_row['u_id'];

// to update the liked destinations when the page reloads
$liked_destinations_details_exec=$con->query("SELECT * FROM tbl_user_liked_trip WHERE like_user_id='".$user_id."';");

while($liked_destinations_row=$liked_destinations_details_exec->fetch_assoc()){?>

<script>
    var liked_destination_type="<?php echo $liked_destinations_row['like_dest_type']; ?>";
    var liked_destination_id="<?php echo $liked_destinations_row['like_dest_id']; ?>";

    var liked_destination_element=document.querySelector('[data-destination-type="'+liked_destination_type+'"][data-destination-id="'+liked_destination_id+'"]');
    liked_destination_element.style.backgroundColor ="#f88932";
    liked_destination_element.setAttribute("data-liked","yes");
</script>

<?php
}
?>