import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function () {
    const deleteForms = document.querySelectorAll('.delete-email-form');

    deleteForms.forEach((form) => {
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure would like to delete this email?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
