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
