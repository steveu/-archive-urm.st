// https://gist.github.com/854622
(function(window,undefined){
    
    // Prepare our Variables
    var
        History = window.History,
        $ = window.jQuery,
        document = window.document;

    // Check to see if History.js is enabled for our Browser
    if ( !History.enabled ) {
        return false;
    }

    // Wait for Document
    $(function(){
        // Prepare Variables
        var
            $body = $(document.body),
            $content = $body.find('#page'),
            rootUrl = History.getRootUrl(),
            nav = $body.find('#top nav.main');
        
        // Ensure Content
        if ( $content.length === 0 ) {
            $content = $body;
        }
        
        // Internal Helper
        $.expr[':'].internal = function(obj, index, meta, stack){
            // Prepare
            var
                $this = $(obj),
                url = $this.attr('href')||'',
                isInternalLink;
            
            // Check link
            isInternalLink = url.substring(0,rootUrl.length) === rootUrl || url.indexOf(':') === -1;
            
            // Ignore or Keep
            return isInternalLink;
        };
        
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

            // Prepare
            var $this = $(this);
            
            // Ajaxify
            $this.find('a:internal:not(.no-ajaxy)').on('click', function(event){


                // Prepare
                var
                    $this = $(this),
                    url = $this.attr('href'),
                    title = $this.attr('title')||null;
                
                // Continue as normal for cmd clicks etc
                if ( event.which == 2 || event.metaKey ) { return true; }
                
                // Ajaxify this link
                History.pushState(null,title,url);
                event.preventDefault();
                return false;
            });
            
            // Chain
            return $this;
        };
        
        // Ajaxify our Internal Links
        $body.ajaxify();
        
        // Hook into State Changes
        $(window).bind('statechange',function(){
            // Prepare Variables
           var
                State = History.getState(),
                url = State.url,
                relativeUrl = url.replace(rootUrl,''),
                urlParts = relativeUrl.split("/");

            // Set Loading
            $body.addClass('loading');

            nav.find('li a').removeClass('active');

            if (urlParts[0] !== '') {
                nav.find('li.' + urlParts[0] + ' a')
                    .addClass('active')
                ;

            }

            $content
        
                .transition(
                    {
                        delay: 150,
                        x: '250px',
                        opacity: 0
                    },
                    175,
                    'cubic-bezier(0.950, 0.050, 0.795, 0.035)',

                    function() {
                        // Ajax Request the Traditional Page
                        $.ajax({
                            url: url,
                            success: function(data, textStatus, jqXHR){
                                
                                var $data = $(documentHtml(data));

                                // get page content
                                var new_content = $data.find('#page').html();

                                _gaq.push(['_trackPageview', relativeUrl]);


                                if ($content.hasClass('left')) {


                                }

                                $content
                                    .transition(
                                        {
                                            x: '-250px'
                                        },
                                        0
                                    )
                                    .html(new_content)
                                    .transition(
                                        {
                                            x: '0px',
                                            opacity: 1
                                        },
                                        100,
                                        'cubic-bezier(1.000, 0.000, 0.000, 1.000)',
                                        function() {

                                            if (urlParts.length == 1) {
                                                $('html, body').animate({ scrollTop: 0 }, 150);
                                            }
                                            else {
                                                var headerHeight = $('#top').height();
                                                if ($(window).scrollTop() > headerHeight) {
                                                    $('html, body').animate({ scrollTop: (headerHeight + 8) }, 150);
                                                }
                                            }
                                        }
                                    )
                                ;

                                $content.ajaxify();          

                            },
                            error: function(jqXHR, textStatus, errorThrown){
                                document.location.href = url;
                                return false;
                            }
                        }); // end ajax
                    }
                )
            ;
            

        }); // end onStateChange

    }); // end onDomLoad

})(window); // end closure