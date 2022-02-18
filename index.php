<?php

include 'includes/autoloader.php';
include 'views/display.php';
include 'controllers/action.php';

if(isset($_POST['act'])){
    $act = $_POST['act'];    
}else{
    $act = "";
}

?>


<form action="" method="post">
    <select name="act">
        <option value="ByOwner" <?php if ($act == 'ByOwner') echo "selected"; ?>>Fetch Garage by Owner</option>
        <option value="ByCountry" <?php if ($act == 'ByCountry') echo "selected"; ?>>Fetch Garage by Country</option>
        <option value="ByPoint" <?php if ($act == 'ByPoint') echo "selected"; ?>>Fetch Garage by Point</option>
    </select>
    <input type='submit' name='Release' value='Submit'>
</form>
<hr>

<?php




if ($act != ""){
    $usrObjekt = new GarageDisplayController();
    $usrObjekt->ControlGarageDisplay($act);
} 

unset($usrObjekt);

