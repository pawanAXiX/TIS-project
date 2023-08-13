<?php
if(isset($_GET['type'])){
    if($_GET['type']=="attraction"){
        include "config/get_Attraction.php";
        if ($res->num_rows> 0) {
            $row = $res->fetch_assoc();
            ?>
        <div class="modal-form" id='<?php echo $_GET['type']; ?>'>
        <form>
            <div><label>Name</label><input type="text" name="name" value=<?php echo $row['p_name']; ?> ></div>
            <div><label>Discripton</label><input name="description" type="text" maxlength="700" value=<?php echo $row['p_desc']; ?> ></div>
            <div><label>Address</label><input name="address" type="text" value=<?php echo $row['p_address']; ?> ></div>
            <div><label>District</label><input name="district" type="text" value=<?php echo $row['p_district']; ?> ></div>
            <div><label>Latitude</label><input name="latitude" type="text" value=<?php echo $row['p_latitude']; ?> ></div>
            <div><label>Longitude</label><input name="longitude" type="text" value=<?php echo $row['p_longitude']; ?> ></div>
            <div><label>Image</label><input name="image" type="file" ></div>
            <div><input type="Submit" name="add" value="Add" class="btn">
        </form>
    </div>
        
        <?php
        }
    }
    else if($_GET['type']=="accommodation"){
        include "config/get_Accommodation.php";
        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();

            ?>
         <div class="modal-form" id='<?php echo $_GET['type']; ?>'>
        <form enctype="multipart/form-data">
            <div><label>Name</label><input type="text" name="name" id="name" value=<?php echo $row['a_name']; ?> > <p></p></div>
            <div><label>Discripton</label><input name="description" type="text" maxlength="700" value=<?php echo $row['a_name']; ?> ></div>
            <div><label>Address</label><input name="address" type="text" id="address_city" value=<?php echo $row['a_address']; ?> ></div>
            <div><label>District</label><input name="district" type="text" id="address_district" value=<?php echo $row['a_district']; ?> ></div>
            <div><label>Latitude</label><input name="latitude" type="text" value=<?php echo $row['a_latitude']; ?> ></div>
            <div><label>Longitude</label><input name="longitude" type="text" value=<?php echo $row['a_longitude']; ?> ></div>
            <div><label>Image</label><input name="image" type="file"></div>
            <div><input type="Submit" name="add" value="Add" id="add_btn" class="btn">
        </div>
        </form>
    </div>

        <?php
        }
    }
    else if($_GET['type']=="district"){
        ?>
         <div class="modal-form" id='<?php echo $_GET['type']; ?>'>
        <form>
            <div><label>Name</label><input type="text" name="name" id="name"> <p></p></div>
            <div><label>Discripton</label><input name="description" type="text" maxlength="700"></div>
            <div><label>District</label><input name="district" type="text" id="address_district"></div>
            <div><label>Type</label><input type="text"></div>
            <div><label>Image</label><input name="image" type="file"></div>
            <div><input type="Submit" name="add" value="Add" id="add_btn" class="btn"><button class="btn" id="btn-cancel">Cancel </button>
        </div>
        </form>
    </div>

        <?php
    }
} 
?>