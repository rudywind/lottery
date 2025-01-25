$(document).ready(function() {
    $('.table.table-data').DataTable({
        dom:          '<"row no-gutters"<"col-12"t><"col-12 text-center"p>>',
        searching:    false,
        ordering:     false,
        lengthChange: false,
        pageLength:   4,
        pagingType:   'simple'
    });
});