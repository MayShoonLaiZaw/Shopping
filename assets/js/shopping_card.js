$(function() {
    $(".pay").click(function(){
        $(".pay").not(this).prop('checked',false);
    })
})