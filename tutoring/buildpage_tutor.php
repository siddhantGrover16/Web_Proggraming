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
$ckey = str_replace("_"," ",$ckeys);
$days = "";

class tutortrac { 
    public $name = ""; 
    public $start =""; 
    public $ending =""; 
   
    public $dow ="";
    public $tutor ="";
    public $comment ="";
    
    
    function create($n,$s,$e,$d,$t,$c) { 
        $this->name = $n;
        $this->start = $s;
        $this->ending = $e;
        $this->dow = $d;
        $this->tutor = $t;
        $this->comment = $c;
        
    } 
}


$checkedfile = fopen("adminform.txt","w");
fwrite($checkedfile,"$_GET[class] :");
for($i=0; $i<count($ckeys); ++$i) {
     $checkedservice0=$ckey[$i];
    if($checkedservice0 == "monday"){
    fwrite($checkedfile,"$checkedservice0,");
        $days=$days."1";
    }
    if($checkedservice0 == "tuesday"){
    fwrite($checkedfile,"$checkedservice0,");
         $days=$days."2";
    }
    if($checkedservice0 == "wednesday"){
    fwrite($checkedfile,"$checkedservice0,");
      $days=$days."3";
    }
    if($checkedservice0 == "thursday"){
    fwrite($checkedfile,"$checkedservice0,");
         $days=$days."4";
    }
    if($checkedservice0 == "friday"){
    fwrite($checkedfile,"$checkedservice0");
         $days=$days."5";
    }
     //$tt0=$services["$ckey[$i]"];
    //fwrite($checkedfile,"$checkedservice0:");
  // fwrite($checkedfile,"$tt0");
}

$current_data = file_get_contents('data.json');  
$array_data = json_decode($current_data, true); 
$obj = new tutortrac;
$obj->create("$_GET[class]","$_GET[stime]","$_GET[etime]","$days","$_GET[tname]","$_GET[tc]");
$array=array($obj);
$array_data[]=$obj;
//array_push($array_data,$obj);
//$final_data = json_encode($array_data); 
$myjson = json_encode($array_data);
//print_r($array_data);
file_put_contents('data.json', $myjson);

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