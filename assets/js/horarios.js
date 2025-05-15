// 1) Referencia al modal
var editModal = document.getElementById('editHorarioModal');

if (editModal) {
  editModal.addEventListener('show.bs.modal', function (event) {
    var button    = event.relatedTarget;
    var id         = button.getAttribute('data-id');         
    var dia        = button.getAttribute('data-dia');
    var inicio     = button.getAttribute('data-inicio');
    var fin        = button.getAttribute('data-fin');
    var actividad  = button.getAttribute('data-actividad');
    var estado     = button.getAttribute('data-estado');

    editModal.querySelector('#id').value         = id;       
    editModal.querySelector('#dia').value        = dia;
    editModal.querySelector('#inicio').value     = inicio;
    editModal.querySelector('#fin').value        = fin;
    editModal.querySelector('#actividad').value  = actividad;
    editModal.querySelector('#estado').value     = estado;
  });


  // 4) (Opcional) Manejar el submit para enviar o cerrar el modal
  var form = document.getElementById('editHorarioForm');
}
