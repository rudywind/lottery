jQuery(document).ready(function($) {
    $('#pool-auto-number').on('click', function(e) {
        e.preventDefault();

        $('.input-pool-prize').val('');

        $('.input-pool-prize').each(function(index, value) {
            var inputMaxLength = $(this).attr('maxlength');
            var inputOutputTxt = '';

            for (var i = 1; i <= inputMaxLength; i++) {
                inputOutputTxt += Math.floor(Math.random() * 10);
            }

            $(this).val(inputOutputTxt);
        });
        
        $('#publish').click();
    });

    $('#pool-upload-gif').click(function() {
        var button = $(this), custom_uploader = wp.media({
            title    : 'Insert image',
            library  : { type : 'image' },
            button   : { text : 'Use this image' },
            multiple : false
        }).on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('#pool-gif').val(attachment.url);
            $('#pool-gif-preview').attr('src', attachment.url);
        }).open();
    });
});
