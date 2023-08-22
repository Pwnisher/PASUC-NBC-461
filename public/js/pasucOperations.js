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
$('#cycleDropdown li').on('click', function () {
    var selectedCycle = $(this).data('cycle');

    // Make an AJAX request to the server with the selected cycle
    $.ajax({
    url: 'eqarCycle', // Replace with your backend endpoint
    type: 'POST', // or 'GET', 'PUT', etc.
    data: {
        cycle: selectedCycle
    },
    success: function (response) {
        // Handle the response data here
        console.log(response);
    },
    error: function (xhr, status, error) {
        console.error('Error:', error);
    }
    });
});
});