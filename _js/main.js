$(function() {
    $('#modal').on('click', '.close-button', function(event) {
        event.preventDefault();
        $('#modal').fadeOut(300);
    });
});

function OpenModal(name, params) {
    $.ajax({
        type:'POST',
        url:'modal/' + name,
        data: params
    }).done(function(data) {
        $('#modal').html(data);
        $('#modal').fadeIn(300);
    }).fail(function() {

    });
}

function CheckForm(form) {
    result = true;
    form.find('.required').each(function() {
        $('label[name="' + $(this).attr('name') + '"]').hide();
        if ($(this).val() == '') {
            $('label[name="' + $(this).attr('name') + '"]').html('This field is required!').show();
            result = false;
        }
    });

    return result;
}

function ParseModalReturn(data) {
    if(data.error) {
        if(data.error.type == 'display') {
            $('label[name="' + data.error.input + '"]').text(data.error.text).show();
        }

        return false;
    } else {
        if(data.redirect) {
            window.location.replace(data.redirect);
        }
    }

    return true;
}