const swal = $('#swal').data('swal');
if(swal){
    Swal.fire({
        title: 'Success',
        text: swal,
        icon: 'success'
    })
}