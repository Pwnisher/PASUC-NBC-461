<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Accomplishments</title>

        @vite('resources/css/app.css')
    </head>
    
    <body class="bg-ghostwhite">
        <!-- ORIGINAL PAGE CONTENT -->
        <div id="main_container" class="flex flex-col items-center h-full mt-16">
            <div id="title_bar-container" class="bg-transparent text-left w-5/6">
              <h3 id="title_bar" class="mb-2 font-bold text-xl font-sans">Teaching Effectiveness</h3>
            </div>
            
            <div id="add_form_container" class="bg-white rounded-md p-4 shadow-lg w-5/6 border border-gray-300 relative mb-16">
              <div class="flex flex-col items-stretch space-y-2">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3"> <!-- form content -->
                  <div class="text-gray-600">
                    <p class="font-bold text-lg">KRA I - INSTRUCTION</p>
                    <p>Please fill in the necessary details. No abbreviations.</p>
                    <p>All inputs with the symbol (*) are required.</p>
                  </div>
          
                    <div class="lg:col-span-2">
                    <form>
                        <!-- one column -->
                        <div class="flex flex-wrap -mx-3 mb-6"> 
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-base font-bold mb-2" for="grid-state">
                                    Type of Evaluation
                                </label>
                                <div class="relative">
                                    <select id="selection" onchange="showSpecificPart()" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                        <option value selected disabled>Choose...</option>
                                        <option value="part1">Student Evaluation</option>
                                        <option value="part2">Supervisor Evaluation</option>
                                    </select>
                                    <!-- dropdown arrow design -->
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div id="part1">
                        <!-- one column -->
                        <div class="flex flex-wrap -mx-3 mb-6"> 
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-base font-bold mb-2" for="grid-state">
                                    Faculty
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                        <option value selected disabled>Choose...</option>
                                        <option>Existing Faculty Members</option>
                                        <option>Newly Hired Faculty</option>
                                        <option>Faculty on Study Leave</option>
                                    </select>
                                    <!-- dropdown arrow design -->
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- two column -->
                        <div class="flex flex-wrap -mx-3 mb-6"> 
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0"> <!-- 1st column -->
                                <label class="block uppercase tracking-wide text-gray-700 text-base font-bold mb-2" for="grid-password">
                                    Academic Year
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
                                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                            </div>

                            <div class="w-full md:w-1/2 px-3"> <!-- 2nd column -->
                                <label class="block uppercase tracking-wide text-gray-700 text-base font-bold mb-2" for="grid-state">
                                    Semester
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                        <option value selected disabled>Choose...</option>
                                        <option>First Semester</option>
                                        <option>Second Semester</option>
                                    </select>
                                    <!-- dropdown arrow design -->
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- one column -->
                        <div class="flex flex-wrap -mx-3 mb-6"> 
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-base font-bold mb-2" for="grid-state">
                                    Rated by Immediate Supervisor
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                        <option value selected disabled>Choose...</option>
                                        <option>by the Department Chair</option>
                                        <option>by the Dean</option>
                                        <option>by the Vice President for Academic Affairs - VPAA</option>
                                        <option>by the President</option>
                                    </select>
                                    <!-- dropdown arrow design -->
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- checkbox design -->
                        <div class="flex flex-wrap -mx-3 mb-6"> 
                          <div class="w-full px-3 py-2">
                            <label class="block uppercase tracking-wide text-gray-700 text-base font-bold mb-2" for="grid-state">
                                Type of Documents
                            </label>
                            <div class="inline-flex items-center">
                                <input type="checkbox" name="" id="" class="form-checkbox" />
                                <label for="" class="ml-2">Student Evaluation Rating using prescribed template</label>
                            </div>
                          </div>
                          <div class="w-full px-3 py-2">
                            <div class="inline-flex items-center">
                                <input type="checkbox" name="" id="" class="form-checkbox" />
                                <label for="" class="ml-2">Supervisor Evaluation Rating using prescribed template</label>
                            </div>
                          </div>
                        </div>

                        <!-- uploadbox design -->
                        <div class="flex flex-wrap -mx-3 mb-6"> 
                          <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-base font-bold mb-2" for="grid-state">
                                Upload Documents
                            </label>
                                <input type="file" name="file" id="file" class="sr-only" />
                                <label for="file" class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-gray-300 p-12 text-center">
                                  <div>
                                    <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                    Drag & Drop Files Here
                                    </span>
                                    <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                    or
                                    </span>
                                    <span class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                    Browse
                                    </span>
                                  </div>
                                </label>
                          </div>
                        </div>

                        <!-- test change option content based on 1st select -->
                        <div class="flex flex-wrap -mx-3 mb-6"> 
                            <div class="w-full px-3">
                                <label for="category">Select Category:</label>
                                    <select id="category" onchange="updateOptions()">
                                        <option value="default">Select a Category</option>
                                        <option value="fruits">Fruits</option>
                                        <option value="vegetables">Vegetables</option>
                                    </select>
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6"> 
                            <div class="w-full px-3">
                                <label id="itemLabel" for="item">Select Item:</label>
                                    <select id="item">
                                        <!-- Options will be updated here -->
                                    </select>
                            </div>
                        </div>

                        <!-- save/cancel button -->
                        <div class="md:col-span-5 text-right">
                            <div class="inline-flex items-end">
                              <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
                              <button class="bg-green-500 hover:bg-green-600 text-white font-bold ml-3 py-2 px-4 rounded">Submit</button>
                            </div>
                        </div>
                    </div>  <!-- end part 1 disappear test -->

                        
                    </form>


            <!-- script change what appears in form -->
                    <script>
                        /*
                        function showSpecificPart() {
                            var selection = document.getElementById('selection').value;
                            var part1 = document.getElementById('part1');
                            var part2 = document.getElementById('part2');
                
                            // Hide all parts initially
                            part1.style.display = 'none';
                            part2.style.display = 'none';
                
                            // Show the selected part
                            if (selection === 'part1') {
                                part1.style.display = 'block';
                            } else if (selection === 'part2') {
                                part2.style.display = 'block';
                            }

                            if (inputType === "radio" && document.getElementById("option2").checked) {
                                document.getElementById("additionalOption2").style.display = "block";
                            }
                        }



                        function updateForm() {
                        var inputType = document.getElementById("inputType").value;
                        var dynamicElement = document.getElementById("dynamicElement");
                        
                        // Clear existing content
                        dynamicElement.innerHTML = "";
                        
                        if (inputType === "text") {
                            dynamicElement.innerHTML = `
                            <label for="textValue">Enter Text:</label>
                            <input type="text" id="textValue" name="textValue">
                            `;
                        } else if (inputType === "checkbox") {
                            dynamicElement.innerHTML = `
                            <label for="checkValue">Check this:</label>
                            <input type="checkbox" id="checkValue" name="checkValue">
                            `;
                        } else if (inputType === "radio") {
                            dynamicElement.innerHTML = `
                            <label for="radioOption1">Option 1:</label>
                            <input type="radio" id="radioOption1" name="radioOption" value="option1"><br>
                            <label for="radioOption2">Option 2:</label>
                            <input type="radio" id="radioOption2" name="radioOption" value="option2"><br>
                            `;
                        }
                        }



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
                        
                        // Add an event listener to the category select element
                        document.getElementById("category").addEventListener("change", updateOptions);

                        */
                    </script>


                    </div>
                </div>
              </div>
            </div>
        </div> 
    </body>
</html>

<!--
function showSpecificPart(selectionID) {
    var selection = document.getElementById(selectionID).value;
    var part1 = document.getElementById('dynamic-form-container1');
    var part2 = document.getElementById('dynamic-form-container2');

    // Hide all parts initially
    part1.style.display = 'none';
    part2.style.display = 'none';

    // Show the selected part
    if (selection === 'dynamic-form-container1') {
        part1.style.display = 'block';
    } else if (selection === 'dynamic-form-container2') {
        part2.style.display = 'block';
    }
}

function wrapElements(params, colClass, containerID) {
    const formContainer = document.getElementById(containerID);

    const rowDiv = document.createElement('div');
    rowDiv.className = 'flex flex-wrap -mx-3 mb-6'; 

    // Generate columns for each input or select based on the parameter type
    for (const param of params) {
        const [type, ...rest] = param;

        const columnDiv = document.createElement('div');
        columnDiv.className = colClass;

        if (type === 'input') {
            const [id, labelText, inputType] = rest;
            const inputContainerDiv = createDynamicInput(id, labelText, inputType);
            columnDiv.appendChild(inputContainerDiv);
        } else if (type === 'select') {
            const [id, labelText, options, selectClass] = rest;
            const selectContainerDiv = createDynamicSelect(id, labelText, options, selectClass);
            columnDiv.appendChild(selectContainerDiv);
        }
        rowDiv.appendChild(columnDiv);
    }
    formContainer.appendChild(rowDiv);
}

function createDynamicSelect(id, labelText, options) {
    // Create the label
    const label = document.createElement('label');
    label.className = 'block uppercase tracking-wide text-gray-700 text-base font-bold mb-2';
    label.setAttribute('for', id);
    label.textContent = labelText;

    // Create the select element
    const select = document.createElement('select');
    select.id = id;
    select.className = 'block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500';

    // Create the default option
    const defaultOption = document.createElement('option');
    defaultOption.value = '';
    defaultOption.disabled = true;
    defaultOption.selected = true;
    defaultOption.textContent = 'Choose...';
    
    select.appendChild(defaultOption);
    
    // Create the option elements
    for (const option of options) {
        const optionElement = document.createElement('option');
        optionElement.value = option.value;
        optionElement.textContent = option.label;
        select.appendChild(optionElement);
    }

    // Create the container for the dropdown arrow
    const dropdownArrowContainer = document.createElement('div');
    dropdownArrowContainer.className = 'relative';
    
    const dropdownArrow = document.createElement('div');
    dropdownArrow.className = 'pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700';
    
    // Append all elements to the container
    dropdownArrowContainer.appendChild(select);
    dropdownArrowContainer.appendChild(dropdownArrow);
    const containerDiv = document.createElement('div');
    containerDiv.appendChild(label);
    containerDiv.appendChild(select);

    return containerDiv; // Return the container with label and select
}


        const sel_kra1_cA = ['select','kra1_cA', 'Type of Evaluation:', [
            { value: 'part1', label: 'Student Evaluation' },
            { value: 'part2', label: 'Supervisor Evaluation' }
        ]]; 
        //contains the part you select
        wrapElements([sel_kra1_cA], 'w-full md:w-4/5 px-3 mb-6 md:mb-0', 'dynamic-category-container');
        
        document.addEventListener('DOMContentLoaded', function() {
        // Add event listener to the select element
        const selectionElement = document.getElementById('sel_kra1_cA');
        selectionElement.addEventListener('change', function() {
          showSpecificPart('sel_kra1_cA');
        });
        }); 


      // Student Evaluation -------------------------------------
        const in_stdEval_semDed = ['input','stdEval-semDed', 'Number of Semesters Deducted from the Divisor, If Applicable', 'number'];
        const sel_stdEval_reason = ['select','stdEval-reason', 'Reason for Reducing the Divisor', [
            { value: 'NOT APPLICABLE', label: 'NOT APPLICABLE' },
            { value: 'ON APPROVED STUDY LEAVE', label: 'ON APPROVED STUDY LEAVE' },
            { value: 'ON APPROVED SABBATICAL LEAVE', label: 'ON APPROVED SABBATICAL LEAVE' },
            { value: 'ON APPROVED MATERNITY LEAVE', label: 'ON APPROVED MATERNITY LEAVE' }
        ]]; 


        wrapElements([in_stdEval_semDed], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container1');
        wrapElements([sel_stdEval_reason], 'w-full md:w-1/1 px-3 mb-6 md:mb-0', 'dynamic-form-container2');




        /*
        document.addEventListener('DOMContentLoaded', function() {
        // Add event listener to the select element
        const selectionElement = document.getElementById('sel_kra1_cA');
        selectionElement.addEventListener('change', function() {
          console.log('Event listener triggered');
            showSpecificPart('sel_kra1_cA');
        });

        // Initial call to show the selected part based on the default value
        showSpecificPart('sel_kra1_cA');
        }); */
    -->
