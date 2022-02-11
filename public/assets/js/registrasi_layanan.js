const errors = $('#errors').data('swal');
if(errors){
    Swal.fire({
        title: 'Perhatian',
        text: errors,
        icon: 'warning'
    })
}

const success = $('#success').data('swal');
if(success){
    Swal.fire({
        title: 'Success',
        text: success,
        icon: 'success'
    })
}