(function(window,undefined){

    $(function(){

        var
            $content = $('#content'),
            $body = $(document.body),
            rootUrl = document.location.protocol+'//'+(document.location.hostname||document.location.host);

        // Ajaxify our Internal Links
        $.fn.ajaxify = function(){

            // Ajaxify internal links
            $(this).find('a[href^="/"],a[href^="'+rootUrl+'"]').unbind('click').bind('click',function(event){
                var $this = $(this), url = $this.attr('href'), title = $this.attr('title')||null;
                window.History.pushState(null,title,url);
                event.preventDefault();
                return false;
            });

            // Chain
            return this;
        };

        $body.ajaxify();

        var first = true;
        $(window).bind('statechange',function(){
            // Prevent Initial
            if ( first ) { first = false; return; };

            // Prepare Variables
            var
                State = window.History.getState(),
                url = State.url,
                title = State.title,
                relativeUrl = url.replace(rootUrl,'');

            // Set Loading
            $body.addClass('loading');

            alert(title);

        }); // end onStateChange


    }); // end onDomLoad

    // Check Location
    /*
    if ( document.location.protocol === 'file:' ) {
        alert('The HTML5 History API (and thus History.js) do not work on files, please upload it to a server.');
    }

    // Establish Variables
    var
        History = window.History, // Note: We are using a capital H instead of a lower h
        State = History.getState(),
        $log = $('#log');

    // Log Initial State
    History.log('initial:', State.data, State.title, State.url);

    // Bind to State Change
    History.Adapter.bind(window,'statechange',function(){ // Note: We are using statechange instead of popstate
        // Log the State
        var State = History.getState(); // Note: We are using History.getState() instead of event.state
        //alert(State);
        History.log('statechange:', State.data, State.title, State.url);
    });
    */

})(window);