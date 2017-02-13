$( document ).ready(function() {

    $(function() {
        for (i=1; i<=12; i++){
            $(".hour-selector").append('<option value="'+ i +'">'+ i +'</option>');
        }
    })

    $(function() {
        for (j=0; j<=59; j++){
            $(".minute-selector").append('<option value="'+ j +'">'+ j +'</option>');
        }
    })

});
