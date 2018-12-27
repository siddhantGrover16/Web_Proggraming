<?php
 error_reporting(0);
    $path = "../../";
    include $path."head1.html";    
?>
	<link rel="stylesheet" type="text/css" href="css/tableStyles.css">

<?php
    include $path."head2.php"; 
?>
<?php
$checkedbox = $_GET;
$ckeys = array_keys($checkedbox);
$cvals = array_values($checkedbox);
$data = file_get_contents('data.json');

// decode json to associative array
$json_arr = json_decode($data, true);

// get array index to delete
$arr_index= 15;
 foreach ($json_arr as $key => $value) {
    if (($value['name'] == $ckeys[0]) && ($value['tutor'] == $cvals[0])) {
            $arr_index = $key;
            break;
    }
  
 }

//delete data
// foreach ($arr_index as $i) {
    unset($json_arr[$arr_index]);
//     break;
// }

// rebase array
$json_arr = array_values($json_arr);

// encode array to json and save to file
file_put_contents('data.json', json_encode($json_arr));

?>
        
<!-- BANNER SECTION -->
<div class="banner row">
    <div class="image large-12 columns">
        <img src="<?=$path?>img/tutoring.png">
        <h2>Tutoring Schedules</h2>
    </div>
</div>
<div class="row"><img src="<?=$path?>/img/line.svg"></div>       
        
<div class="row"> 
    <div class="large-12 columns">                
        <h3> Changes have been according to the form submitted. Please view them on the tutoring page.</h3>
    </div>
                        
    <div class="large-12 columns">


    </div>         
</div>
       
<?php
    include $path."footer.php";
?>        

</body>
</html> 