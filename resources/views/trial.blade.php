<!-- NOTE : FOR TESTING LNG TU SA DYNAMIC ADD FORM -CESS -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Accomplishments</title>

        @vite('resources/css/app.css')
    </head>
<body class="bg-ghostwhite">
    <ul> <!-- for links from accomplishments tab -->
        <li><a href="#" onclick="showAddForm('criterionA')">Show Page 1</a></li>
        <li><a href="#" onclick="showAddForm('criterionB')">Show Page 2</a></li>
        <li><a href="#" onclick="showAddForm('criterionC')">Show Page 3</a></li>
    </ul>

    <div id="dynamic-selects-container">
        <!-- Container for dynamic selects -->
    </div>

    <div id="form-content">
        <h1 id="add_page_title">Page Title</h1>
        <h2 id="add_page_kra">KRA</h2>
    </div>

    <script>
    // Function to create a dynamic select element
        function createDynamicSelect(id, labelText, options) {
            const container = document.getElementById('dynamic-selects-container');
            
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
            container.appendChild(label);
            container.appendChild(dropdownArrowContainer);
        }

    // Function to create a dynamic input element
        function createDynamicInput(id, labelText, inputType) {
            const container = document.getElementById('dynamic-selects-container');

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
            container.appendChild(label);
            container.appendChild(input);
        }

        // Clear the dynamic selects container
        function clearDynamicElements() {
            const dynamicSelectsContainer = document.getElementById('dynamic-selects-container');
            while (dynamicSelectsContainer.firstChild) {
                dynamicSelectsContainer.removeChild(dynamicSelectsContainer.firstChild);
            }
        }

        function showAddForm(option) {
            var addPageTitle = document.getElementById("add_page_title");
            var addPageKRA = document.getElementById("add_page_kra");

            // Clear the dynamic selects container
            clearDynamicSelectsContainer();

            if (option === "criterionA") {
                addPageTitle.innerHTML = "Teaching Effectiveness";
                addPageKRA.innerHTML = "KRA I - INSTRUCTION";

                // Call the function to create dynamic select elements for criterionA
                createDynamicSelect('grid-state-1', 'Type of Evaluation 1', [
                    { value: 'part1', label: 'Student Evaluation' },
                    { value: 'part2', label: 'Supervisor Evaluation' }
                ]);

                createDynamicSelect('grid-state-2', 'Type of Evaluation 2', [
                    { value: 'option1', label: 'Option 1' },
                    { value: 'option2', label: 'Option 2' },
                    { value: 'option3', label: 'Option 3' }
                ]);
            } else if (option === "criterionB") {
                addPageTitle.innerHTML = "Curriculum and Instructional Materials Developed";
                addPageKRA.innerHTML = "KRA I - INSTRUCTION";

                // Call the function to create dynamic select elements for criterionB
                createDynamicSelect('grid-state-3', 'Type of Evaluation 3', [
                    { value: 'part3', label: 'Evaluation 3' },
                    { value: 'part4', label: 'Evaluation 4' }
                ]);

                // Add more dynamic select creations as needed
            } else if (option === "criterionC") {
                addPageTitle.innerHTML = "Special Projects, Capstone Projects, Thesis, Dissertation and Mentorship Services";
                addPageKRA.innerHTML = "KRA I - INSTRUCTION";

                // Call the function to create dynamic select elements for criterionC
                createDynamicSelect('grid-state-4', 'Type of Evaluation 4', [
                    { value: 'part5', label: 'Evaluation 5' },
                    { value: 'part6', label: 'Evaluation 6' }
                ]);

                // Add more dynamic select creations as needed
            }
        }
    </script>
</body>
</html>
