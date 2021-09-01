function doupload() {
    let photo = document.getElementById("image-file").files[0];

    jQuery('.widget_imagerect_widget').each(function (i, widget) {
        jQuery.ajax({
            url: "http://127.0.0.1:5000/api/test",
            type: 'POST',
            data: photo,
            processData: false,
            contentType: false,
        }
        ).done(function (ic) {
            console.log(ic)
            var output = "<h2>" + ic.message+"</h2>";
            jQuery(widget).find('.content').html(output);
        }).fail(function (error) {
            console.log("something went wrong!", error);
        });
    })
}