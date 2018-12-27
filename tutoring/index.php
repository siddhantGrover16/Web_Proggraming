<?php
 error_reporting(0);
    $path = "../../";
    include $path."head1.html";    
?>
    <link rel="stylesheet" type="text/css" href="css/tableStyles.css">
    <link rel="stylesheet" type="text/css" href="css/ourTable.css">

<?php
    include $path."head2.php"; 
?> 
<?php
$filename = "classcode.txt";
$cfile = fopen($filename, "r");


while (!feof($cfile)) {
    $line = fgets($cfile);
    $parts = explode(";", $line);
}
// DIVIDES THE 'LINE' ON THE ";" MARK
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
            <p> 
				To view availability of a tutor for a specific class, select that class from the dropdown menu below. 
				The room number that gets displayed is where tutoring for that class takes place.
			</p>
        </div>
                         
		<div class="large-12 columns">
        <form>
            <select name="users" onchange="updateTable(this.value)">
                <option value="sc">Class List:</option>
                <?php
                    for ($i=0; $i<count($parts); ++$i) {
                        echo("<option value='$parts[$i]'>CS $parts[$i]");
                    }
                ?>
            </select>
          
            <br>
        </form>
        
        <div id="table-container">
        <table id="maintable">
                
            <tr>
                <th></th>
                <th>Mon</th>
                <th>Tues</th>
                <th>Wed</th>
                <th>Thurs</th>
                <th>Fri</th>
            </tr>
            
            <tr>
                <th>8:00</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>8:30</th>

                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>9:00</th>
    
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>9:30</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>10:00</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>10:30</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>11:00</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>11:30</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>12:00</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>12:30</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>1:00</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>

            </tr>
            
            <tr>
                <th>1:30</th>
                
               <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>2:00</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>2:30</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>3:00</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>3:30</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>4:00</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
            </tr>
            
            <tr>
                <th>4:30</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>5:00</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
            
            <tr>
                <th>5:30</th>
                
                <td class = "monday"></td>
                <td class = "tuesday"></td>
                <td class = "wednesday"></td>
                <td class = "thursday"></td>
                <td class = "friday"></td>
                
            </tr>
     
        </table>
        </div>

        </div>
        <div class="popup">
          <p id ="txt"></p>
        </div>        
    </div>
       
<?php
    include $path."footer.php";
?>        

<script src="js/myjs.js"></script>

</body>
</html> 