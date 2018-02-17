var max_fields      = 15; //maximum input boxes allowed
var wrapper         = $("#class_wrap"); //Fields wrapper
var add_button      = $("#class_add"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
        x++; //text box increment
        $(wrapper).append('<div class="row" style="margin-top:4.5vh;margin-left: -3vw"><div class="col-lg-9"><div class="input-group"><span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span><input class="form-control" type="text" name="class_name[]" id="type_name" placeholder="Class Name" /></div></div><div class="col-lg-1"><button class="btn btn-default remove_field">Del</button></div></div>');
    }

});

$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent().parent().remove(); x--;
});



