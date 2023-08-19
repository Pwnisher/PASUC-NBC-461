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
        event.target.href = urlstring;
        window.history.pushState(null, null, urlstring);

        $.ajax({
            url: urlstring,
            type: 'GET',
            success: function(response) {
                var dynamicContent = response.title_bar;
                $('#title_bar').text(dynamicContent); // Update content in the page
                document.title = dynamicContent; // Update the title of the page
            },
            error: function() {
                $('#title_bar').text('Error fetching dynamic content.');
            }
        });        
    }
}
