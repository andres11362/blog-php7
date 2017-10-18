$(document).ready(function () {
   $('#category').click(function (evt) {
       evt.preventDefault();
       var category = $('#new_category').val();
       $.ajax(
           {
               type: 'POST',
               url:  '../functions/categoryInsert.php',
               data: {'category' : category}

           }
       ).done(function (result) {
           alert(result.toString());
       }).fail(function () {
           alert('Error al insertar la categoria');
       })
   })
});