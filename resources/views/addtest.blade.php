<!-- NOTE : FOR TESTING LNG TU SA DYNAMIC ADD FORM -CESS -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dynamic Page Example</title>
<script>
  function showContent(option) {
    var pageContent = document.getElementById("page-content");

    if (option === "option1") {
      pageContent.innerHTML = `
        <h1>Option 1</h1>
        <p>This is the content for Option 1.</p>
      `;
    } else if (option === "option2") {
      pageContent.innerHTML = `
        <h1>Option 2</h1>
        <p>This is the content for Option 2.</p>
      `;
    } else if (option === "option3") {
      pageContent.innerHTML = `
        <h1>Option 3</h1>
        <p>This is the content for Option 3.</p>
      `;
    }



    var formContent = document.getElementById("form-content");
      
          if (option === "option1") {
            formContent.innerHTML = `
              <label for="input1">Input 1:</label>
              <input type="text" id="input1" name="input1">
            `;
          } else if (option === "option2") {
            formContent.innerHTML = `
              <label for="input2">Input 2:</label>
              <input type="text" id="input2" name="input2">
            `;
          } else if (option === "option3") {
            formContent.innerHTML = `
              <label for="select3">Select 3:</label>
              <select id="select3" name="select3">
                <option value="optionA">Option A</option>
                <option value="optionB">Option B</option>
                <option value="optionC">Option C</option>
              </select>
            `;
          }
  }
</script>
</head>
<body>
  <ul>
    <li><a href="#" onclick="showContent('option1')">Option 1</a></li>
    <li><a href="#" onclick="showContent('option2')">Option 2</a></li>
    <li><a href="#" onclick="showContent('option3')">Option 3</a></li>
  </ul>

  <div id="page-content">
    <!-- Page content will be updated here -->
  </div>
</body>
</html>

<div class="flex flex-wrap -mx-3 mb-6"> 
  <div class="w-full px-3">

      <label id="itemLabel" for="item">Select Item:</label>
          <select id="item">
              <!-- Options will be updated here -->
          </select>
          
  </div>
</div>



function updateOptions() {
  var category = document.getElementById("category").value;
  var itemSelect = document.getElementById("item");
  var itemLabel = document.getElementById("itemLabel");
  
  // Clear existing options and add new options
  itemSelect.innerHTML = ""; // Clear existing options
  
  if (category === "fruits") {
  itemLabel.innerHTML = "Select Fruit:";
  itemSelect.add(new Option("Apple", "apple"));
  itemSelect.add(new Option("Banana", "banana"));
  itemSelect.add(new Option("Orange", "orange"));
  } else if (category === "vegetables") {
  itemLabel.innerHTML = "Select Vegetable:";
  itemSelect.add(new Option("Carrot", "carrot"));
  itemSelect.add(new Option("Broccoli", "broccoli"));
  itemSelect.add(new Option("Spinach", "spinach"));
  }
}