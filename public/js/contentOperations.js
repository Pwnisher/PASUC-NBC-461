function generateUrlString(clickedId) {
    var option = "";

    switch (clickedId) {
        case 'k1A':
            option = "kra1/criteriaA";
            break;
        case 'k1B':
            option = "kra1/criteriaB";
            break;
        case 'k1C':
            option = "kra1/criteriaC";
            break;
    
        case 'k2A':
            option = "kra2/criteriaA";
            break;
        case 'k2B':
            option = "kra2/criteriaB";
            break;
        case 'k2C':
            option = "kra2/criteriaC";
            break;
    
        case 'k3A':
            option = "kra3/criteriaA";
            break;
        case 'k3B':
            option = "kra3/criteriaB";
            break;
        case 'k3C':
            option = "kra3/criteriaC";
            break;
        case 'k3D':
            option = "kra3/criteriaD";
            break;
    
        case 'k4A':
            option = "kra4/criteriaA";
            break;
        case 'k4B':
            option = "kra4/criteriaB";
            break;
        case 'k4C':
            option = "kra4/criteriaC";
            break;
        case 'k4D':
            option = "kra4/criteriaD";
            break;
    }

    if (option !== "") {
        var urlstring = "/application/" + option;
        return urlstring;
    }

    return null; // Return null if no option is selected
}

function handleAnchorClick(event) {
    event.preventDefault();

    const clickedId = event.target.id;
    var urlstring = generateUrlString(clickedId);
    console.log(urlstring);

    if (urlstring !== null) {
        // Check if the current route is /application
        if (window.location.pathname.indexOf('/application') === 0) {
            event.target.href = urlstring;
            window.history.pushState(null, null, urlstring);
            
            // Update only the content using AJAX
            $.ajax({
                url: urlstring,
                type: 'GET',
                success: function(response) {
                    var dynamicContent = response.title_bar;
                    $('#title_bar').text(dynamicContent); // Update content in the page
            
                    // Update the table content
                    var tableBody = $('#table-body');
                    tableBody.empty(); // Clear previous content
            
                    // Populate the table rows from the response
                    response.pasucFiles.forEach(function(file, index) {
                        // Create a new table row
                        var newRow = $('<tr>', { class: 'hover:bg-gray-100' });
            
                        // Add table data cells (td) to the row
                        newRow.append($('<td>', { class: 'py-4 px-4' }).text(index + 1));
                        newRow.append($('<td>', { class: 'py-4 px-4' }).text(file.title));
                        newRow.append($('<td>', { class: 'py-4 px-4' }).text(file.cycle));
                        newRow.append($('<td>', { class: 'py-4 px-4' }).text(file.kra));
                        newRow.append($('<td>', { class: 'py-4 px-4' }).text(file.criteria));
                        newRow.append($('<td>', { class: 'py-4 px-4' }).text(file.inclusive_date));
                        newRow.append($('<td>', { class: 'py-4 px-4' }).text(file.accomplishment_name));
                        newRow.append($('<td>', { class: 'py-4 px-4' }).text(file.date_submitted));
                        newRow.append($('<td>', { class: 'py-4 px-4' }).text(file.eval_status));
            
                        var actionCell = $('<td>', { class: 'py-4 px-4' });
                        var actionDiv = $('<div>', { class: 'flex justify-between w-full space-x-4' });
                        actionCell.append(actionDiv);
                        newRow.append(actionCell);
            
                        // Append the new row to the table body
                        tableBody.append(newRow);
                    });
            
                    // Update the title of the page
                    document.title = dynamicContent;
                },
                error: function() {
                    $('#title_bar').text('Error fetching dynamic content.');
                }
            });
            
        } else {
            // Navigate to the requested URL
            window.location.href = urlstring;
        }
    }
}
