import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    let deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            if (confirm('Are you sure you want to delete this comic?')) {
                let form = this.closest('.delete-form');
                form.submit();
            }
        });
    });
});
