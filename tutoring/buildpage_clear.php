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
$fh = fopen('data.json', 'a');
fclose($fh);

unlink('data.json');
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
          <h3> All classes have been cleared. Please update the tutoring schedule</h3>
        </div>
                         
		<div class="large-12 columns">

        </div>         
    </div>
       
<?php
    include $path."footer.php";
?>        


</body>
</html> 