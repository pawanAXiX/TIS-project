<?php
if(isset($_GET['type'])){
    if($_GET['type']=="attraction"){
        ?>
        <div class="modal-form" id='<?php echo $_GET['type']; ?>'>
        <form>
            <div><label>Name</label><input type="text" name="name"></div>
            <div><label>Discripton</label><input name="description" type="text" maxlength="700"></div>
            <div><label>Address</label><input name="address" type="text"></div>
            <div><label>District</label><input name="district" type="text"></div>
            <div><label>Latitude</label><input name="latitude" type="text"></div>
            <div><label>Longitude</label><input name="longitude" type="text"></div>
            <div><label>Type</label><select name="type">
                <option value="place">Attraction</option> 
                <option value="accommodation">Accommodation</option> 
                <option value="restaurant">Restaurant</option> 
                <option value="cafe">Cafe</option> 
            </select></div>
            <div><label>Image</label><input name="image" type="file"></div>
            <div><input type="Submit" name="add" value="Add" class="btn"><button class="btn" id="btn-cancel">Cancel </button>
        </div>
        </form>
    </div>
        <?php
    }
    else if($_GET['type']=="accommodation"){
        ?>
         <div class="modal-form" id='<?php echo $_GET['type']; ?>'>
        <form enctype="multipart/form-data">
            <div><label>Name</label><input type="text" name="name" id="name"> <p></p></div>
            <div><label>Discripton</label><input name="description" type="text" maxlength="700"></div>
            <div><label>Address</label><input name="address" type="text" id="address_city"></div>
            <div><label>District</label><input name="district" type="text" id="address_district"></div>
            <div><label>Latitude</label><input name="latitude" type="text"></div>
            <div><label>Longitude</label><input name="longitude" type="text"></div>
            <div><label>Type</label><select name="type">
                <option value="place">Attraction</option> 
                <option value="accommodation">Accommodation</option> 
                <option value="restaurant">Restaurant</option> 
                <option value="cafe">Cafe</option> 
            </select></div>
            <div><label>Image</label><input name="image" type="file"></div>
            <div><input type="Submit" name="add" value="Add" id="add_btn" class="btn"><button class="btn" id="btn-cancel">Cancel </button>
        </div>
        </form>
    </div>

        <?php
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