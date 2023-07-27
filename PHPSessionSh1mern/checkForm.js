document.addEventListener("DOMContentLoaded", function(){
    var curButton = document.querySelector(".button_next");
    var currForm = document.querySelector(".quiz_form");
    function check()
    {
        var radios = currForm.querySelectorAll('input[type="radio"]');
        var isChecked=false;
        for (var i=0;i<radios.length;i++)
            if(radios[i].checked)
                isChecked=true;
        return isChecked;

    }

    curButton.addEventListener("click",function(e){
        if(!check())
            e.preventDefault();
    });
});