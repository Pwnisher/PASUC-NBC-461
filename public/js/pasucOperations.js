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
                alert('Applied successfully.');
                location.reload(); // Reload the page to reflect the changes
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
