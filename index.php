<!DOCTYPE html>

<html>
    <head>
        <title>Form Input Box Add Delete</title>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row" style="margin-top: 5em">
                <input type="hidden" name="count" value="1" />
                <div class="control-group" id="fields">
                    <div class="controls" id="profs"> 
                        <form class="input-append">
                            <div id="field">
                                <input autocomplete="off" class="input" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8"/>
                                <button id="b1" class="btn add-more" type="button">+</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                var next = 1;
                $(".add-more").click(function (e) {
                    e.preventDefault();
                    var addto = "#field" + next;
                    var addRemove = "#field" + (next);
                    next = next + 1;
                    var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
                    var newInput = $(newIn);
                    var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
                    var removeButton = $(removeBtn);
                    $(addto).after(newInput);
                    $(addRemove).after(removeButton);
                    $("#field" + next).attr('data-source', $(addto).attr('data-source'));
                    $("#count").val(next);

                    $('.remove-me').click(function (e) {
                        e.preventDefault();
                        var fieldNum = this.id.charAt(this.id.length - 1);
                        var fieldID = "#field" + fieldNum;
                        $(this).remove();
                        $(fieldID).remove();
                    });
                });
            });
        </script>
    </body>
</html>