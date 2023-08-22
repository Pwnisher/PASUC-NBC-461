function applyFile(eqarId) {
    if (confirm("Are you sure you want to apply?")) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

        fetch(`/eqar-update-applied/${eqarId}`, {
            method: 'PUT',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ is_applied: true })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Server response:', data); // Log the server response
            if (data.success) {
                alert('Applied successfully.');
                location.reload();
            } else {
                alert('An error occurred while applying.');
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
            url: '/search', // Replace with your backend endpoint
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
            url: '/sort', // Replace with your backend endpoint for sorting
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