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

$json1 = file_get_contents('data.json');

$json1_data = json_decode($json1,true);


$jkeys=array();
        
foreach ($json1_data as $key1 => $value1) {
  
    array_push($jkeys,$json1_data[$key1]['name']);
           
}

$jkeyt=array();
        
foreach ($json1_data as $key1 => $value1) {
              
    array_push($jkeyt,$json1_data[$key1]['tutor']);
                       
}

?>
<?php
$filename = "classcode.txt";
$cfile = fopen($filename, "r");

while (!feof($cfile)) {
    $line = fgets($cfile);
    $parts = explode(";", $line);
}

?>

        
<!-- BANNER SECTION -->
<div class="banner row">
    <div class="image large-12 columns">
        <img src="<?=$path?>img/tutoring.png">
        <h2>Welcome Admin</h2>
    </div>
</div>

<div class="row">
    <img src="<?=$path?>/img/line.svg">
</div>
        
<div class="row"> 
    <div class="large-12 columns">                
        <p> 
            Welcome Admin. Please fill the form below to create tutor times.
        </p>
    </div>
                        
    <div class="large-12 columns">
        <form action="buildpage_tutor.php" method="GET" onsubmit="return validateForm()">
            <label for="class">Select Class</label>  
            <select name="class" id="selectClass">
                <option value="sc">Class List:</option>
                <?php
                for ($i=0; $i<count($parts); ++$i) {
                    echo("<option value='$parts[$i]'>CS $parts[$i]");
                }
                ?>
            </select>
            
            <br>
            
            <h6>Select Day.</h6>
            
            
            <input type="checkbox" name="monday" class="cb" >
            <label for="monday">Monday</label>
            
            <input type="checkbox" name="tuesday" class="cb" >
            <label for="tuesday">Tuesday</label>
            
            <input type="checkbox" name="wednesday" class="cb" >
            <label for="wednesday">Wednesday</label>
            
            <input type="checkbox" name="thursday" class="cb" >
            <label for="thursday">Thursday</label>
            
            <input type="checkbox" name="friday" class="cb" >
            <label for="friday">Friday</label>

            <br>
            
            <label for="stime">Starting Time</label>  
            <select name="stime" id="stime">
                <option value="st">Select Time:</option>
                <option value="0">8:00 am</option>
                <option value="1">8:30 am</option>
                <option value="2">9:00 am</option>
                <option value="3">9:30 am</option>
                <option value="4">10:00 am</option>
                <option value="5">10:30 am</option>
                <option value="6">11:00 am</option>
                <option value="7">11:30 am</option>
                <option value="8">noon</option>
                <option value="9">12:30 pm</option>
                <option value="10">1:00 pm</option>
                <option value="11">1:30 pm</option> 
                <option value="12">2:00 pm</option>
                <option value="13">2:30 pm</option>
                <option value="14">3:00 pm</option>
                <option value="15">3:30 pm</option>
                <option value="16">4:00 pm</option>          
            </select>
            
            <br>
            
            <label for="etime">Ending Time</label>  
            <select name="etime" id="etime" >
                <option value="st">Select Time:</option>
                <option value="0">8:00 am</option>
                <option value="1">8:30 am</option>
                <option value="2">9:00 am</option>
                <option value="3">9:30 am</option>
                <option value="4">10:00 am</option>
                <option value="5">10:30 am</option>
                <option value="6">11:00 am</option>
                <option value="7">11:30 am</option>
                <option value="8">noon</option>
                <option value="9">12:30 pm</option>
                <option value="10">1:00 pm</option>
                <option value="11">1:30 pm</option> 
                <option value="12">2:00 pm</option>
                <option value="13">2:30 pm</option>
                <option value="14">3:00 pm</option>
                <option value="15">3:30 pm</option>
                <option value="16">4:00 pm</option>          
            </select>
            
            <br>
            
            <label for="tname">Tutor Name:</label>
            <input type="text" name="tname" id="tname"  placeholder="Tutor name">
            
            <br>
            
            <label for="tc">Additional Comments(IF ANY):</label>
            <textarea id = "ta" name = "tc" placeholder= "Type comments here...."  cols ="15"></textarea><br>
            
            <input type="submit">
        </form>
            
        <div class="large-12 columns">                
            <p> 
                Please check a class to delete (if any).
            </p>
        </div>  



        <form action="buildpage_del.php" method="GET"> 
            
            <?php  
            for($i=0; $i<count($jkeys); ++$i) {
            echo("<input type='radio' name='$jkeys[$i]' value = '$jkeyt[$i]'>CS $jkeys[$i] Tutor :$jkeyt[$i]<br>");
            } 
            ?>

            <input type="submit" name="action" value="Delete" />
        </form>
        
        <form action="buildpage_clear.php">
            <input type="submit" name="action" value="Clear Records" /> 
        </form>

    </div>         
</div>
       
<?php
    include $path."footer.php";
?>        
<script src="js/myjs.js"></script>

</body>
</html> 