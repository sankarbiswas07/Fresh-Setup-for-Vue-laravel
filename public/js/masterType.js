var max_fields      = 15; //maximum input boxes allowed
var wrapper_type         = $("#type_wrap"); //Fields wrapper
var add_button_type      = $("#type_add"); //Add button ID

var x = 1; //initlal text box count
$(add_button_type).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
        x++; //text box increment
        $(wrapper_type).append(' <div class="row" style="margin-top:4.5vh;margin-left: -3vw">\n' +
            '                    <div class="col-lg-9">\n' +
            '                        <div class="input-group">\n' +
            '                            <span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span>\n' +
            '                            <input class="form-control" type="text" name="type_name[]" id="type_name" placeholder="Train Type" />\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '\n' +
            '                    <div class="col-lg-1">\n' +
            '                        <button class="btn btn-default remove_field">Del</button>\n' +
            '                    </div>\n' +
            '                </div>');
    }

});

$(wrapper_type).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent().parent().remove(); x--;
});



