$(document).ready(function() {
    $('.table.table-data').DataTable({
        dom:          '<"row"><"col-12"t><"col-12"p>',
        searching:    false,
        ordering:     false,
        lengthChange: false,
        pageLength:   4,
    });
});