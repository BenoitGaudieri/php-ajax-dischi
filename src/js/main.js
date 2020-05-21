import $ from "jquery";

$(document).ready(function() {
    // Ref
    var container = $(".container");

    // Init handlebars
    var source = $("#disk-template").html();
    var template = Handlebars.compile(source);

    // Get data from php
    $.ajax({
        url: "http://localhost:3000/esercizi/php-ajax-dischi/script.php",
        method: "GET",
        success: function(res) {
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

    //
}); //end doc ready
