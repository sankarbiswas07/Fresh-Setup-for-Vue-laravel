var max_fields      = 15; //maximum input boxes allowed
var wrapper_fair         = $("#fair_wrap"); //Fields wrapper
var add_button_fair      = $("#fair_add"); //Add button ID

var x = 1; //initlal text box count
$(add_button_fair).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
        x++; //text box increment
        $(wrapper_fair).append('<div class="row"><div class="col-lg-6 col-lg-offset-1"><div class="input-group"><span class="input-group-addon"><i class="fa fa-train fa-fw"></i></span><input class="form-control" type="text" name="class[]"  placeholder="Class" onkeydown="autofair(event)"/></div></div><div class="col-lg-2"><div class="input-group"><span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span><input class="form-control" type="text" name="fair[]"  placeholder="Fair" /></div></div><div class="col-lg-2"><button  class="btn btn-default remove_field" style="background-color:#399cf9; color:white" type="button" >Del</button></div></div>');
    }

});

$(wrapper_fair).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent().parent().remove(); x--;
});



