function applyFile(pasucId) {
    if (confirm("Are you sure you want to submit?")) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

        // Perform an AJAX request to update the is_applied field
        fetch(`/pasuc-update-applied/${pasucId}`, {
            method: 'PUT',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ is_submitted: true }) // Update other fields as needed
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Submitted successfully.');
                location.reload(); // Reload the page to reflect the changes
            } else {
                alert('An error occurred while submitting.');
            }
        })
        .catch(error => {
            alert('An error occurred while applying.');
            console.error(error);
        });
    }
}

$(document).ready(function () {
    $('#search-bar').on('input', function () {
        var searchTerm = $(this).val().toLowerCase();
        
        // Make an AJAX request to the server to fetch filtered data
        $.ajax({
            url: '/pasucSearch', // Replace with your backend endpoint
            type: 'GET',
            data: { searchTerm: searchTerm },
            success: function (data) {
                // Update the table body with the filtered data
                $('tbody').html(data);
            }
        });
    });
});


$(document).ready(function () {
    $('#sort-button').on('click', function () {
        var fromDate = $('#from-date').val();
        var toDate = $('#to-date').val();

        // Make an AJAX request to the server to fetch sorted data
        $.ajax({
            url: '/pasucSort', // Replace with your backend endpoint for sorting
            type: 'GET',
            data: {
                fromDate: fromDate,
                toDate: toDate
            },
            success: function (data) {
                // Update the table body with the sorted data
                $('tbody').html(data);
            }
        });
    });
});

function toggleCycleDropdown() {
    var dropdown = $("#cycleDropdown");
    dropdown.toggleClass("hidden");
}

function fetchCycleData(cycle) {
    $.ajax({
        url: "/cycle",
        type: "GET",
        data: { cycle: cycle },
        success: function (response) {
            $('tbody').html(response); // Replace the tbody content with the rendered view
        },
        error: function (xhr, status, error) {
            console.error(error);
        }
    });
    toggleCycleDropdown(); // Hide the dropdown after selection
}
