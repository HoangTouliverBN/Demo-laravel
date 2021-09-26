$(function() {
    $("a[href='#bottom']").click(function() {
        $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        return false;
    });

    $(".phanquyen").hide()

    $('div#btn-delete').click(function(){
        console.log('123');
        $('form#form-delete').submit();
    })    
})