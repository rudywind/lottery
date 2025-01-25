$(document).ready(function() {
    $('.table.table-data').DataTable({
        dom:          '<"row no-gutters"<"col-12"t><"col-12"p>>',
        searching:    false,
        ordering:     false,
        lengthChange: false,
        pageLength:   3,
        pagingType:   'simple'
    });
});