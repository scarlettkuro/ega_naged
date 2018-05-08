$(function() {

    var app = $.sammy(function() {
        /*var r = initial;

        $( document ).on( "click", "a", function() {
            r = window.location.href.split('/').pop();  // back
        });*/

        this.get('/', function() {
            putText('<p class="popup"><a href="/start"><img src="startup.jpg"/></a></p>');
        });

        this.get('/start', function() {
             this.redirect(initial);
        });

        /*this.get('/:back', function() {
             this.redirect(r);
        });*/

        this.get('/:id', function() {
            var id = this.params['id'];
            var text = data[id];
            putText(linkify(text));
        });

    });

app.run();


    function linkify(text) {
        return text.
                        replace(/\{(.*?)\|(.*?)\}/gim, '<a href="/$2">$1</a>').
                        replace(/\*(.*?)\*/gim, '<i>$1</i>').
                        replace(/\n/g,"<br><br>");
    }

    function putText(text) {
        $('#text').html(text);
    }

});
