function generateUrlString(clickedId) {
    var option = "";

    switch (clickedId) {
        case 'k1A':
            option = "kra1/criteriaA";
            break;
        case 'k1B':
            option = "kra1/criteriaB";
            break;
        // Add more cases as needed
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

    if (urlstring !== null) {
        event.target.href = urlstring;
        window.history.pushState(null, null, urlstring);

        // Move the AJAX call here, outside the $(document).ready() block
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
