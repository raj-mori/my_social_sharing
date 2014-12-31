$(function() {

    function OpenModal(name, params) {
        $.ajax({
            type:'POST',
            url:'modal/' + name,
            data: params
        }).done(function() {

        }).fail(function() {

        });
    }
});