<!DOCTYPE html>
<html>

<head>
 <title>Checkbox Recording Example</title>
</head>

<body>

 <!-- <h2>Checkbox Options</h2>
 <label><input type="checkbox" class="checkbox-option" value="option1"> Option 1</label><br>
 <label><input type="checkbox" class="checkbox-option" value="option2"> Option 2</label><br>
 <label><input type="checkbox" class="checkbox-option" value="option3"> Option 3</label><br>
 <label><input type="checkbox" class="checkbox-option" value="option4"> Option 4</label><br>

 <button id="recordButton">Record Checked Options</button>

 <p>Checked options: <span id="checkedOptions"></span></p> -->

 <script>
  // document.addEventListener("DOMContentLoaded", function() {
  //  const checkboxes = document.querySelectorAll(".checkbox-option");
  //  const recordButton = document.getElementById("recordButton");
  //  const checkedOptionsDisplay = document.getElementById("checkedOptions");
  //  const checkedOptions = new Set();

  //  checkboxes.forEach(checkbox => {
  //   checkbox.addEventListener("change", function() {
  //    if (this.checked) {
  //     checkedOptions.add(this.value);
  //    } else {
  //     checkedOptions.delete(this.value);
  //    }
  //   });
  //  });

  //  recordButton.addEventListener("click", function() {
  //   checkedOptionsDisplay.textContent = Array.from(checkedOptions).join(", ");
  //  });
  // });
 </script>
 <ul id="checkboxList">
  <li>
   <input type="checkbox" id="option1" />
   <label for="option1">Option 1</label>
  </li>
  <li>
   <input type="checkbox" id="option2" />
   <label for="option2">Option 2</label>
  </li>
  <!-- Add more options as needed -->
 </ul>

 <button id="recordButton">Record Selections</button>
 <script>
  function recordSelectedOptions() {
   const checkboxList = document.querySelectorAll("#checkboxList input[type='checkbox']");
   const selectedOptions = [];

   checkboxList.forEach(checkbox => {
    if (checkbox.checked) {
     selectedOptions.push(checkbox.id);
    }
   });

   // Do something with the selectedOptions array
   console.log("Selected options:", selectedOptions);
  }

  // Attach the function to the button click event
  const recordButton = document.getElementById("recordButton");
  recordButton.addEventListener("click", recordSelectedOptions);
  

 </script>

</body>

</html>