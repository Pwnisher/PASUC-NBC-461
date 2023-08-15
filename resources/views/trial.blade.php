<!-- NOTE : FOR TESTING LNG TU SA DYNAMIC ADD FORM -CESS -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Select Elements</title>
</head>
<body>
    <div id="dynamic-selects-container"></div>
    
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
            select.addEventListener('change', showSpecificPart); // Assuming showSpecificPart is defined elsewhere
            
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
        
        // Call the function to create dynamic select elements
        createDynamicSelect('grid-state-1', 'Type of Evaluation 1', [
            { value: 'part1', label: 'Student Evaluation' },
            { value: 'part2', label: 'Supervisor Evaluation' }
        ]);
        
        createDynamicSelect('grid-state-2', 'Type of Evaluation 2', [
            { value: 'option1', label: 'Option 1' },
            { value: 'option2', label: 'Option 2' },
            { value: 'option3', label: 'Option 3' }
        ]);
        
        // Define the showSpecificPart function
        function showSpecificPart() {
            // Your implementation here
        }
    </script>
</body>
</html>

