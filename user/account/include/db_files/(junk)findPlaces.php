<?php
require "dbconn.inc.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
   if(isset($_POST['find'])){
    $return_values=array();
    $txt=$_POST['find'];
    $qry="select * from tbl_place where p_name='$txt' ";
    $res=$con->query($qry);
    if($res->num_rows>0){
       while($row = $res->fetch_assoc()){
        $id=$row['p_id'];
        $name=$row['p_name'];
        $return_values[]=array(
            "id"=>$id,
            "name"=>$name
        );
       }
       echo json_encode($return_values);
    }
   }
}
 ?>