//-----------------------------------------------------------------------------------------------
// SHOW/HIDE CERTAIN ELEMENTS
/*function showSpecificPart(selectionID, selectedValue) {
    console.log(`Selected value: ${selectedValue}`);
    var selection = document.getElementById(selectionID).value;

    var part1 = document.getElementById('dynamic-form-container1');
    var part2 = document.getElementById('dynamic-form-container2');

    // Hide all parts initially
    part1.style.display = 'none';
    part2.style.display = 'none';

    // Show the selected part
    if (selection === 'part1') {
        part1.style.display = 'block';
    } else if (selection === 'part2') {
        part2.style.display = 'block';
    }

}*/

//-----------------------------------------------------------------------------------------------
// WRAP DYNAMIC SELECT & INPUT FOR FLEXIBLE ROWS (CAN BE USED INDIVIDUALLY OR BOTH)
// (EXAMPLE USE: CHANGE '2' in 1/2 BASED ON NEEDED ROWS) (CAN ALSO USE MULTIPLE SAME/DIFF TYPE)
// wrapElements([], 'w-full md:w-1/1 px-3 mb-6 md:mb-0');
// import { myFunction } from './file1'; // Path to the file1.js
function wrapElements(params, colClass, containerID, onchangeCallback) {
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
            const selectContainerDiv = createDynamicSelect(id, labelText, options, onchangeCallback, selectClass);
            columnDiv.appendChild(selectContainerDiv);
        }
        rowDiv.appendChild(columnDiv);
    }
    formContainer.appendChild(rowDiv);
}

//-----------------------------------------------------------------------------------------------
// USE THE 'wrapElements'; DIFFERENT DIV ID // Need to revise so that it only changes the  container ID


//-----------------------------------------------------------------------------------------------
// DYNAMIC LABEL ELEMENT
function createDynamicLabel(labelText, containerID) {
    const labelContainer = document.getElementById(containerID);

    // Create the label
    const label = document.createElement('label');
    label.className = 'block uppercase tracking-wide text-gray-700 text-base font-bold mb-2';
    label.textContent = labelText;

    // Append the label to the container
    labelContainer.appendChild(label);
}

//-----------------------------------------------------------------------------------------------
// DYNAMIC SELECT ELEMENT
function createDynamicSelect(id, labelText, options, onchangeCallback) {
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

    // Add onchange event listener if provided
    if (onchangeCallback) {
        select.addEventListener('change', function(event) {
            const selectedValue = event.target.value;
            onchangeCallback(selectedValue); // Call the callback with the selected value
        });
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

//-----------------------------------------------------------------------------------------------
// DYNAMIC INPUT ELEMENT
function createDynamicInput(id, labelText, inputType) {
    // Create a container div for the input element and label
    const containerDiv = document.createElement('div');

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
    containerDiv.appendChild(label);
    containerDiv.appendChild(input);

    return containerDiv; // Return the container with label and input
}

//-----------------------------------------------------------------------------------------------
// DYNAMIC CHECKBOX ELEMENT
function createDynamicCheckbox(id, labelText, containerID) {
    const checkboxContainer = document.getElementById(containerID);

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

//-----------------------------------------------------------------------------------------------
// CLEAR ELEMENTS IN 'dynamic-form-container'
function clearDynamicFormContainer(containerID) {
    const dynamicFormContainer = document.getElementById(containerID);
    while (dynamicFormContainer.firstChild) {
        dynamicFormContainer.removeChild(dynamicFormContainer.firstChild);
    }
}

//-----------------------------------------------------------------------------------------------
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