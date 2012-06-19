(function(window,undefined){

    $(function(){

        // Prepare Variables
        var
            
            $body = $(document.body),
            $content = $body.find('#page'),
            rootUrl = History.getRootUrl(),
            scrollOptions = {
                duration: 800,
                easing:'swing'
            };
        
        // Ensure Content
        if ( $content.length === 0 ) {
            $content = $body;
        }
        
        
        // HTML Helper
        var documentHtml = function(html){
            // Prepare
            var result = String(html)
                .replace(/<\!DOCTYPE[^>]*>/i, '')
                .replace(/<(html|head|body|title|meta|script)([\s\>])/gi,'<div class="document-$1"$2')
                .replace(/<\/(html|head|body|title|meta|script)\>/gi,'</div>')
            ;
            
            // Return
            return result;
        };
        
        // Ajaxify Helper
        $.fn.ajaxify = function(){
            
            // Ajaxify internal links
            $(this).find('a[href^="/"],a[href^="'+rootUrl+'"]').unbind('click').bind('click',function(event){
                var $this = $(this), url = $this.attr('href'), title = $this.attr('title')||null;
                window.History.pushState(null,title,url);
                event.preventDefault();
                return false;
            });
            
            // Chain
            return $(this);
        };
        
        // Ajaxify our Internal Links
        $body.ajaxify();
        
        // Hook into State Changes
  
        $(window).bind('statechange',function(){
            // Prepare Variables
            var
                State = History.getState(),
                url = State.url,
                relativeUrl = url.replace(rootUrl,'');

            // Set Loading
            $body.addClass('loading');

            // Start Fade Out
            // Animating to opacity to 0 still keeps the element's height intact
            // Which prevents that annoying pop bang issue when loading in new content
            $content.animate({opacity:0},800);
            
            // Ajax Request the Traditional Page
            $.ajax({
                url: url,
                success: function(data, textStatus, jqXHR){
                    
                    $data = data;
                    
                    // Update the title
                    document.title = $data.find('.document-title:first').text();
                    try {
                        document.getElementsByTagName('title')[0].innerHTML = document.title.replace('<','&lt;').replace('>','&gt;').replace(' & ',' &amp; ');
                    }
                    catch ( Exception ) { }
                    
    
                    // Inform Google Analytics of the change
                    if ( typeof window.pageTracker !== 'undefined' ) {
                        window.pageTracker._trackPageview(relativeUrl);
                    }

                    // Inform ReInvigorate of a state change
                    if ( typeof window.reinvigorate !== 'undefined' && typeof window.reinvigorate.ajax_track !== 'undefined' ) {
                        reinvigorate.ajax_track(url);
                        // ^ we use the full url here as that is what reinvigorate supports
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                    document.location.href = url;
                    return false;
                }
            }); // end ajax

        }); // end onStateChange

    }); // end onDomLoad


})(window);