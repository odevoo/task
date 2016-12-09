function build() {
    $('#log').load('log.php?mode=build');
    tally();

}

function tally() {
    $('#tally').load('log.php?mode=tally');
}



$(document).ready(function(){

build();

    $('#form-new').submit(function(event) {
        event.preventDefault();
        var form = $(this);
        var data = form.serialize()
        var task = $('#task').val();
        console.log(task);
        $.ajax({
            url: 'log.php?mode=new',
            data: data,
            success: function() {
                build();
            }
        });
    });

    $('#log').on('click', '.btn-stop', function() {
        var id = $(this).data('id');
        $.ajax({
            url: 'log.php?mode=stop&id='+id,
            success: function () {
                build();
            }
        });


    });

        $('#log').on('click', '.btn-remove', function() {
        var id = $(this).data('id');
        $.ajax({
            url: 'log.php?mode=remove&id='+id,
            success: function () {
                build();
            }
        })


    });








});
