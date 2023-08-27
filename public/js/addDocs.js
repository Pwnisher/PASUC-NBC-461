//-----------------------------------------------------------------------------------------------
// WRAP DYNAMIC SELECT & INPUT FOR FLEXIBLE ROWS (CAN BE USED INDIVIDUALLY OR BOTH)
// (EXAMPLE USE: CHANGE '2' in 1/2 BASED ON NEEDED ROWS) (CAN ALSO USE MULTIPLE SAME/DIFF TYPE)
// wrapElements([], 'w-full md:w-1/1 px-3 mb-6 md:mb-0');
// import { myFunction } from './file1'; // Path to the file1.js
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
            const [id, name, labelText, inputType] = rest;
            const inputContainerDiv = createDynamicInput(id, name, labelText, inputType);
            columnDiv.appendChild(inputContainerDiv);
        } else if (type === 'select') {
            const [id, name, labelText, options, selectClass] = rest;
            const selectContainerDiv = createDynamicSelect(id, name, labelText, options, selectClass);
            columnDiv.appendChild(selectContainerDiv);
        }
        rowDiv.appendChild(columnDiv);
    }
    formContainer.appendChild(rowDiv);
}

//-----------------------------------------------------------------------------------------------
// DYNAMIC SELECT ELEMENT
function createDynamicSelect(id, name, labelText, options) {
    // Create the label
    const label = document.createElement('label');
    label.className = 'block uppercase tracking-wide text-gray-700 text-base font-bold mb-2';
    label.setAttribute('for', id);
    label.textContent = labelText;

    // Create the select element
    const select = document.createElement('select');
    select.id = id;
    select.name = name;
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

//-----------------------------------------------------------------------------------------------
// DYNAMIC INPUT ELEMENT
function createDynamicInput(id, name, labelText, inputType) {
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
    input.name = name;
    input.type = inputType;
    input.className = 'block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500';

    // Append elements to the container
    containerDiv.appendChild(label);
    containerDiv.appendChild(input);

    return containerDiv; // Return the container with label and input
}

//-----------------------------------------------------------------------------------------------
// CLEAR ELEMENTS IN 'dynamic-form-container'
function clearFormContainer(containerID) {
    const dynamicFormContainer = document.getElementById(containerID);
    while (dynamicFormContainer.firstChild) {
        dynamicFormContainer.removeChild(dynamicFormContainer.firstChild);
    }
}

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
// DYNAMIC CHECKBOX ELEMENT
function createDynamicCheckbox(id, labelText, containerID) {
    const checkboxContainer = document.getElementById(containerID);

    // Create the label
    const label = document.createElement('label');
    label.className = 'block tracking-wide text-gray-700 text-base mb-2';

    // Create the checkbox input element
    const checkbox = document.createElement('input');
    checkbox.id = id;
    checkbox.type = 'checkbox';
    checkbox.className = 'mr-2';

    // Append elements to the container
    label.appendChild(checkbox);
    label.appendChild(document.createTextNode(labelText));
    checkboxContainer.appendChild(label);
}


//-----------------------------------------------------------------------------------------------
// CONFIRM MODAL WHEN 'SAVE'
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'block';
    document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden');
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'none';
    document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
}

function closeAllModals() {
    document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden');
    const modals = document.getElementsByClassName('modal');
    Array.from(modals).forEach(modal => {
        modal.style.display = 'none';
    });
}

// CLOSE MODAL WHEN 'ESC'
document.onkeydown = function(event) {
    event = event || window.event;
    if (event.keyCode === 27) {
        closeAllModals();
    }
};

//-----------------------------------------------------------------------------------------------
// CHANGE CONTENT PER CRITERIA OPTION
// showAddForm


