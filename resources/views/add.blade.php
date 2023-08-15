<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Accomplishments</title>

        @vite('resources/css/app.css')
    </head>
<script>
    // DYNAMIC SELECT ELEMENT
        function createDynamicSelect(id, labelText, options) {
            const selectContainer = document.getElementById('dynamic-form-container');
            
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
            selectContainer.appendChild(label);
            selectContainer.appendChild(dropdownArrowContainer);

            selectContainer.appendChild(document.createElement('br'));
        }

    // DYNAMIC INPUT ELEMENT
        function createDynamicInput(id, labelText, inputType) {
            const inputContainer = document.getElementById('dynamic-form-container');

            // Create the label
            const label = document.createElement('label');
            label.className = 'block uppercase tracking-wide text-gray-700 text-base font-bold mb-2';
            label.setAttribute('for', id);
            label.textContent = labelText;

            // Create the input element
            const input = document.createElement('input');
            input.id = id;
            input.type = inputType;
            input.className = 'block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500';

            // Append elements to the container
            inputContainer.appendChild(label);
            inputContainer.appendChild(input);

            inputContainer.appendChild(document.createElement('br'));
        }

    // DYNAMIC CHECKBOX ELEMENT
        function createDynamicCheckbox(id, labelText) {
            const checkboxContainer = document.getElementById('dynamic-form-container');

            // Create the label
            const label = document.createElement('label');
            label.className = 'block uppercase tracking-wide text-gray-700 text-base font-bold mb-2';

            // Create the checkbox input element
            const checkbox = document.createElement('input');
            checkbox.id = id;
            checkbox.type = 'checkbox';
            checkbox.className = 'mr-2';

            // Append elements to the container
            label.appendChild(checkbox);
            label.appendChild(document.createTextNode(labelText));
            checkboxContainer.appendChild(label);

            checkboxContainer.appendChild(document.createElement('br'));
        }

    // CLEAR ELEMENTS IN 'dynamic-form-container'
        function clearDynamicFormContainer() {
            const dynamicFormContainer = document.getElementById('dynamic-form-container');
            while (dynamicFormContainer.firstChild) {
                dynamicFormContainer.removeChild(dynamicFormContainer.firstChild);
            }
        }

    // CHANGE CONTENT PER CRITERIA OPTION
        function showAddForm(option) {
            var addPageTitle = document.getElementById("add_page_title");
            var addPageKRA = document.getElementById("add_page_kra");

            // Clear the dynamic-form-container
            clearDynamicFormContainer();

            if (option === "criterionA") {
                addPageTitle.innerHTML = "Teaching Effectiveness";
                addPageKRA.innerHTML = "KRA I - INSTRUCTION";

                // Calls function to create unique select
                createDynamicSelect('grid-state-1', 'Type of Evaluation 1', [
                    { value: 'part1', label: 'Student Evaluation' },
                    { value: 'part2', label: 'Supervisor Evaluation' }
                ]);
                // Calls function to create unique select
                createDynamicSelect('grid-state-2', 'Type of Evaluation 2', [
                    { value: 'option1', label: 'Option 1' },
                    { value: 'option2', label: 'Option 2' },
                    { value: 'option3', label: 'Option 3' }
                ]);
                // Calls function to create unique input type="text"
                createDynamicInput('input-text', 'Text Input', 'text');
                // Calls function to create unique input type="date"
                createDynamicInput('input-date', 'Date Input', 'date');
            } 
            else if (option === "criterionB") {
                addPageTitle.innerHTML = "Curriculum and Instructional Materials Developed";
                addPageKRA.innerHTML = "KRA I - INSTRUCTION";

                // Calls function to create unique select
                createDynamicSelect('grid-state-3', 'Type of Evaluation 3', [
                    { value: 'part3', label: 'Evaluation 3' },
                    { value: 'part4', label: 'Evaluation 4' }
                ]);
                // Calls function to create unique input type="text"
                createDynamicInput('input-text', 'Text Input', 'text');
            } 
            else if (option === "criterionC") {
                addPageTitle.innerHTML = "Special Projects, Capstone Projects, Thesis, Dissertation and Mentorship Services";
                addPageKRA.innerHTML = "KRA I - INSTRUCTION";

                // Calls function to create unique select
                createDynamicSelect('grid-state-4', 'Type of Evaluation 4', [
                    { value: 'part5', label: 'Evaluation 5' },
                    { value: 'part6', label: 'Evaluation 6' }
                ]);
                // Calls function to create unique checkbox
                createDynamicCheckbox('checkbox-1', 'Checkbox 1');
                createDynamicCheckbox('checkbox-2', 'Checkbox 2');
            }
        }
</script>

<body class="bg-ghostwhite">
    <ul> <!-- for links from accomplishments tab -->
        <li><a href="#" onclick="showAddForm('criterionA')">Show Page 1</a></li>
        <li><a href="#" onclick="showAddForm('criterionB')">Show Page 2</a></li>
        <li><a href="#" onclick="showAddForm('criterionC')">Show Page 3</a></li>
    </ul>
        
<!-- DYNAMIC PAGE CONTENT -->
    <div id="main_container" class="flex flex-col items-center h-full mt-16">
      <div id="title_bar-container" class="bg-transparent text-left w-5/6">
        <h3 id="add_page_title" class="mb-2 font-bold text-xl font-sans">Teaching Effectiveness</h3>
      </div>
            
        <div id="add_form_container" class="bg-white rounded-md p-4 shadow-lg w-5/6 border border-gray-300 relative mb-16">
          <div class="flex flex-col items-stretch space-y-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3"> <!-- form content -->
              <div class="text-gray-600">
                <p id="add_page_kra" class="font-bold text-lg">KRA I - INSTRUCTION</p>
                <p>Please fill in the necessary details. No abbreviations.</p>
                <p>All inputs with the symbol (*) are required.</p>
              </div>
          
              <div class="lg:col-span-2">
              <!-- START DYNAMIC FORM -->
              <form>
                <div class="flex flex-wrap -mx-3 mb-6"> 
                  <div class="w-full px-3">
                    <div id="dynamic-form-container">
                        <!-- CONTENT CHANGES HERE -->
                    </div>
                  </div>
                </div>

                <!-- must always be present in all pages -->
                <!-- checkbox design for document names-->
                <!-- note: to be replaced with dynamic checkbox -->
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

                <!-- box design for upload document -->
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

                <!-- save/cancel button -->
                <div class="md:col-span-5 text-right">
                  <div class="inline-flex items-end">
                    <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
                    <button class="bg-green-500 hover:bg-green-600 text-white font-bold ml-3 py-2 px-4 rounded">Submit</button>
                    </div>
                </div>
                <!-- END DYNAMIC FORM -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END DYNAMIC PAGE CONTENT -->





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
                    <!-- START ORIGINAL FORM -->
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
                    
                    <!-- TEST TO MAKE SPECIFIC PARTS APPEAR -->
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
                    <!-- END TEST TO MAKE SPECIFIC PARTS APPEAR -->
                    </div>  
                    <!-- END ORIGINAL FORM -->
                    </form>
                    </div>
                </div>
              </div>
            </div>
        </div> 
        <!-- END ORIGINAL PAGE CONTENT -->
    </body>
</html>



