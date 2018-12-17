$('#borrarModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var nombre = button.data('name')
    var email = button.data('email')
    
    var modal = $(this)
    modal.find('.modal-title').text(nombre)
    modal.find('#hiddenInput').val(email)
})
