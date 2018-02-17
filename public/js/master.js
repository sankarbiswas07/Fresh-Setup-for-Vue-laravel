var max_fields      = 15; //maximum input boxes allowed
var wrapper_stn         = $("#stn_wrap"); //Fields wrapper
var add_button_stn      = $("#stn_add"); //Add button ID

var x = 1; //initlal text box count
$(add_button_stn).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
        x++; //text box increment
        $(wrapper_stn).append('<div class="row" style="margin-top:4.5vh;margin-left: -3vw">\n' +
            '                <div class="col-lg-3">\n' +
            '                    <div class="input-group">\n' +
            '                        <span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span>\n' +
            '                        <input class="form-control" type="text" name="stn_name[]" id="stn_name" placeholder="Station Name"  />\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-lg-3">\n' +
            '                    <div class="input-group">\n' +
            '                        <span class="input-group-addon"><i class="fa fa-minus-square fa-fw"></i></span>\n' +
            '                        <input class="form-control" type="text" name="stn_abbr[]" id="stn_abbr" placeholder="Station Abbr."  />\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-lg-3">\n' +
            '                    <div class="input-group">\n' +
            '                        <span class="input-group-addon"><i class="fa fa-minus-square fa-fw"></i></span>\n' +
            '                        <input class="form-control" type="text" name="distance[]" id="distance" placeholder="Next Stn. Distance"  />\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                <div class="col-lg-1">\n' +
            '                    <button id="" class="btn btn-default remove_field">Del</button>\n' +
            '                </div>\n' +
            '            </div>');
    }

});

$(wrapper_stn).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent().parent().remove(); x--;
});



