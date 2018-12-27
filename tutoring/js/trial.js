console.log("js started");

var weekdays = ["", "monday", "tuesday", "wednesday", "thursday", "friday"];
var currentClass = [];
var selectedClass;
var selection = document.querySelector("select");
var info;
var index;
var indexes=[];
var ct=[];

selection.addEventListener("change", function() {
  console.log(this.value);
  selectedClass = this.value;
  //resetTable();
   reset1();
  updateTable();
})

var classData = null;



function loadJSON(callback) {   

  var xobj = new XMLHttpRequest();
  xobj.overrideMimeType("application/json");
  xobj.open('GET', './data.json', true); // Replace 'my_data' with the path to your file
  xobj.onreadystatechange = function () {
        if (xobj.readyState == 4 && xobj.status == "200") {
          // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
          callback(xobj.responseText);
        }
  };
  xobj.send(null); 
}


loadJSON(function(response) {
  // Parse JSON string into object
    classData = JSON.parse(response);
    console.log(classData);
    
 });


function updateTable() {
  // for{}
  
  classData.forEach(function(item) {
    
    if(item.name === selectedClass ) {
      
      currentClass.push(item);
      console.log("item");
      console.log(item);
 
    }
});

console.log(currentClass);

 for(i=0;i<currentClass.length;i++){

     console.log(currentClass[i].comment);
     ct.push(currentClass[i].comment);

var daysOfWeek = currentClass[i].dow.split(""); // array of chars
var selectedWeekDays = []; //weekday string of the class

// for each number representing the day of the week get weekday
daysOfWeek.forEach(function(item){
// console.log(weekdays[parseInt(item)]);
selectedWeekDays.push(weekdays[parseInt(item)]); //push the week days

console.log(selectedWeekDays);

//for each week day that we have for the class, get array with table's tds
selectedWeekDays.forEach(function(day) {
var classSelect = "." + day;
var tdArray = Array.prototype.slice.call(document.querySelectorAll(classSelect)); //array

console.log(tdArray);

for (let index = parseInt(currentClass[i].start); index <= parseInt(currentClass[i].ending)-1; index++) {
  tdArray[index].classList.add("classBG");
}

var middle = (parseInt(currentClass[i].start) + parseInt(currentClass[i].ending))/2;
tdArray[Math.floor(middle)].innerHTML= currentClass[i].tutor;
//tdArray[Math.floor(middle)].classList.add("clicked");
var help = tdArray[Math.floor(middle)].innerHTML;

//   })

console.log("loop ended");
})

}
)
$(".classBG").hover(()=> {
 
    $(".popup").toggleClass("popIt");
    
    $("#txt").text(ct[this]);
    
    //console.log(currentClass[i-1].comment);
    })


} 

  
}

function validateForm(){
  var stime = document.getElementById("stime");
  var etime = document.getElementById("etime");
  var startTime =parseInt(document.getElementById("stime").value) ;
  console.log(startTime);
  var endTime = parseInt(document.getElementById("etime").value);
  console.log(endTime);
  var selectClass = document.getElementById("selectClass");
  
  var tutorName = document.getElementById("tname");
  
  var days = document.getElementsByClassName("cb");
  var isDaysChosen = false;
  
  for(x in days){
  if(days[x].checked){
  isDaysChosen = true;
  }
  }
  if(selectClass.value == "sc"){
  alert("Please select a class");
  return false;
  }
  else if(stime.value == "st" || etime.value == "st"){
  alert("Please select a start and end time");
      return false;
  }
  else if(startTime >= endTime){
  alert("Invalid starting time and/or ending time");
  return false;
  }
  else if(tutorName.value == ""){
  alert("please enter a tutor name");
  return false;
  }
  else if(!isDaysChosen){
  alert("please select day(s)");
  return false;
  }
  else{
  return true;
  }
}

function reset() {
  console.log("imma reset");
  var all_tds = Array.prototype.slice.call(document.querySelectorAll("td"));
  console.log(all_tds);
  all_tds.forEach(function(item){
    item.classList.remove("classBG");
    item.innerHTML = "";
    console.log("i  reset");
  })
}


function reset1() {
  console.log("immnnnna reset");
  var all_tds = Array.prototype.slice.call(document.querySelectorAll("td"));
  console.log(all_tds);
 $("td").removeClass("classBG");
 $("td").removeClass("clicked");
 $("td").text("");
    
  }



function resetTable() {     
                    
  $("#table-container").empty();
  $("#table-container").append(` 
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
</table>`
);
}


