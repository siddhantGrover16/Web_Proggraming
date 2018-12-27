<?php
    $path = "../../";
    include $path."head1.html";    
?>
	<link rel="stylesheet" type="text/css" href="css/tableStyles.css">

<?php
    include $path."head2.php"; 
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
                <option value="">Select a Class:</option>
                <option value="234">CS 234/250</option>
                <option value="275">CS 275</option>
                <option value="313">CS 313</option>
                <option value="341">CS 341</option>
                <option value="375">CS 375</option>
            </select>
        </form>
        
        
        <table id="maintable">
            
            <tr>
            
                <th>Mon</th>
                <td></td>
                
                
            </tr>
            
            <tr>
             
                <th>Tuesday</th>
                <td></td>
                
            </tr>
            
            <tr>
           
    
                <th>Wednesday</th>
                <td></td>
                
            </tr>
            
            <tr>
               
                
                <th>Thursday</th>
                <td></td>
                
            </tr>
            
            <tr>
                
                
                <th>Friday</th>
                <td></td>
                
            </tr>
            
            
        </table>


        </div>         
    </div>
       
<?php
    include $path."footer.php";
?>        
<script src="js/tableFunctions.js"></script>

</body>
</html> 