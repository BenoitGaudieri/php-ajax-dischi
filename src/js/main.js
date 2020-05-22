import $ from "jquery";

$(document).ready(function() {
    // Ref
    var container = $(".container");
    var filter = $(".filter");

    // Init handlebars
    var source = $("#disk-template").html();
    var template = Handlebars.compile(source);

    ajaxCall(template, container);

    filter.on("change", function() {
        container.html("");
        var artist = $(this).val();
        getAlbums(artist, template, container);
    });

    //
}); //end doc ready

// Get data from php
function ajaxCall(artist = "all", template, container) {
    $.ajax({
        url: "http://localhost:3000/esercizi/php-ajax-dischi/script.php",
        method: "GET",
        success: function(res) {
            if (artist !== "all") {
                res = res.filter((item) => artist === item.artist);
                console.log(res);
            }

            for (let i = 0; i < res.length; i++) {
                const el = res[i];

                // handlebars
                var context = {
                    artist: el.artist,
                    title: el.title,
                    year: el.year,
                    img: el.img,
                };

                // output
                var output = template(context);

                // append
                container.append(output);
            }
        },
        error: function(err) {
            console.log("Error:", err);
        },
    });
}
