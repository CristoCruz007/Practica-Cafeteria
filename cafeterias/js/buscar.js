function buscar() {
    // Obtener el valor del campo de búsqueda
    var input = document.getElementById('busqueda');
    var filtro = input.value.toUpperCase();

    // Obtener la tabla y las filas de la tabla
    var tabla = document.getElementById('tabla');
    var filas = tabla.getElementsByTagName('tr');

    // Recorrer las filas y mostrar solo las que coincidan con el filtro de búsqueda
    for (var i = 0; i < filas.length; i++) {
        var celdaNombre = filas[i].getElementsByTagName('td')[1];
        if (celdaNombre) {
            var contenido = celdaNombre.innerHTML.toUpperCase();
            if (contenido.indexOf(filtro) > -1) {
                filas[i].style.display = '';
            } else {
                filas[i].style.display = 'none';
            }
        }
    }
}