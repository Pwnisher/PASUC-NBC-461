// DYNAMIC LABEL ELEMENT
function createDynamicLabel(labelText) {
    const labelContainer = document.getElementById('dynamic-form-container');

    // Create the label
    const label = document.createElement('label');
    label.className = 'block uppercase tracking-wide text-gray-700 text-base font-bold mb-2';
    label.textContent = labelText;

    // Append the label to the container
    labelContainer.appendChild(label);
}

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