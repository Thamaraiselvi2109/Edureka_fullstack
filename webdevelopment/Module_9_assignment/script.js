$(document).ready(function () {
    $('#button').on('click',function(){
        $.ajax({
            type: "GET",
            url: $(this).attr('data-src'),
            success: function (response) {  
                $('#demo').html(response)
            }
        });
    })
});
