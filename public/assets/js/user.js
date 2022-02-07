const success = $('#success').data('swal');
if(success){
    Swal.fire({
        title: 'Success',
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