console.log("js started");

var weekdays = ["", "monday", "tuesday", "wednesday", "thursday", "friday"];
var selectedClass;
var selection = document.querySelector("select");
var info;

selection.addEventListener("change", function() {

  console.log(this.value);
  selectedClass = this.value;
  resetTable();
  updateTable();
});

var classData = null;

function loadJSON(callback) {   

  var xobj = new XMLHttpRequest();
  xobj.overrideMimeType("application/json");
  xobj.open('GET', './data.json', true);
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
  var currentClass;
  classData.forEach(function(item) {
    
    if(item.name === selectedClass ) {
    
      currentClass=item;
      console.log("item");
      console.log(item);
      info = item.comment; //check for the one you clicked
      var tuto = item.tutor;
      var daysOfWeek = currentClass.dow.split(""); //should be array of chars
      var selectedWeekDays = []; //weekday string of the class
      // for each number representing the day of the week, get weekday
    
      daysOfWeek.forEach(function(item){
        // console.log(weekdays[parseInt(item)]);
        selectedWeekDays.push(weekdays[parseInt(item)]); //push the week days
      
        console.log(selectedWeekDays);

        //for each week day that we have for the class, get array with table's tds
        selectedWeekDays.forEach(function(day) {
          var classSelect = "." + day;
          var tdArray = Array.prototype.slice.call(document.querySelectorAll(classSelect)); //array
        
          console.log(tdArray);
          console.log(currentClass.start);
          console.log(currentClass.ending);
          
          var co=currentClass.comment;
          console.log(co);
        
          for (let index = parseInt(currentClass.start); index <= parseInt(currentClass.ending)-1; index++) {
            //save tds
            tdArray[index].classList.add("classBG");
          
          }
        
          var middle = (parseInt(currentClass.start) + parseInt(currentClass.ending))/2
          tdArray[Math.floor(middle)].innerHTML= currentClass.tutor;
        
          console.log("loop ended");
        });

        $(".classBG").hover(()=> {
          console.log($(this));
          $(".popup").toggleClass("popIt");

          $("#txt").text(item.comment);
        });
      });
    }
  });
}

// function reset() {
//   var all_tds = Array.prototype.slice.call(document.querySelectorAll("td"));
//   console.log(all_tds);
//   all_tds.forEach(function(item){
//     item.classList.remove("classBG");
//     item.innerHTML = "";
//   });
// }

function validateForm() {
  var stime = document.getElementById("stime");
  var etime = document.getElementById("etime");
  var startTime =parseInt(document.getElementById("stime").value) ;
  console.log(startTime);
  var endTime = parseInt(document.getElementById("etime").value);
  console.log(endTime);
  var selectClass = document.getElementById("selectClass");
  
  var tutorName = document.getElementById("tname");
  
  if(selectClass.value == "sc"){
    alert("Please select a class.");
    return false;
  }
  else if(stime.value == "st" || etime.value == "st"){
    alert("Please select a Start time and End Time.");
      return false;
  }
  else if(startTime >= endTime){
    alert("Invalid Start time and/or End time.");
    return false;
  }
  else if(tutorName.value == ""){
    alert("Please enter a tutor name.");
    return false;
  }
  else{
    var previewCheck = confirm(

        "Please review your submission. Select cancel to modify.\n" +
        "Tutor: " + document.getElementById("tname").value + "\n" +
        "Class Name: " + selectClass.options[selectClass.selectedIndex].text + "\n" +
        "Start Time: " + stime.options[stime.selectedIndex].text + "\n" +
        "End Time: " + etime.options[etime.selectedIndex].text + "\n"
    );

    if (previewCheck){
      return true;
    }
    else{
      return false;
    }
  }
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
</table>`);
                         
}

