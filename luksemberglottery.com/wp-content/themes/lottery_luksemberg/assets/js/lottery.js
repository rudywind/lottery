$(document).ready(function() {
    $('.btn-show-nav').on('click', function(e) {
        e.preventDefault();
        
        var nTarget = $(this).data('target');

        $(nTarget).removeClass('hide');
        $('body').addClass('prevent-scroll');
        $('section.content').addClass('prevent-scroll');
    });

    $('.btn-hide-nav').on('click', function(e) {
        e.preventDefault();
        
        var nTarget = $(this).data('target');

        $(nTarget).addClass('hide');
        $('body').removeClass('prevent-scroll');
        $('section.content').removeClass('prevent-scroll');
    });
    
    $('.table.table-data').DataTable({
        dom:          '<"row no-gutters"<"col-12"t><"col-12"p>>',
        searching:    false,
        ordering:     false,
        lengthChange: false,
        pageLength:   4,
        pagingType:   'simple'
    });
});