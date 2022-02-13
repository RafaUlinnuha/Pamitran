const success = $('#success').data('swal');
if(success){
    Swal.fire({
        title: 'Sukses',
        text: success,
        icon: 'success'
    })
}

const errors = $('#errors').data('swal');
if(errors){
    Swal.fire({
        title: 'Oops...',
        text: errors,
        icon: 'error'
    })
}


$(document).ready(function() {
    $('#user').DataTable();
} );