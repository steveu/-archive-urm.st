<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Steven Urmston - Freelance Web &amp; UI Designer - Notes</title>

    <meta name="description" content="" />
    <meta name="author" content="Steven Urmston">

    <!-- I can scale myself -->
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- look nice in a browser tab -->
    <link rel="icon shortcut" href="/favicon.ico" type="image/vnd.microsoft.com" />

    <!-- When (if) I add IE specific code, this will be useful -->
    <script src="/assets/scripts/libs/modernizr.custom.89936.js"></script>

    <!-- Make text pretty -->
    <script type="text/javascript" src="http://use.typekit.com/mqf3dsx.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    
    <!-- CSS compressed SASS - source at https://github.com/clearbar/clearbar/blob/master/sass/screen.scss -->
    <link rel="stylesheet" href="/assets/styles/screen.css" />

</head>

<body class="paused">

    <div class="container">

        <header id="top">
            <div class="wrapper">

                <h1>
                    <a href="/" title="Home">
                        Steven Urmston
                        <em>Freelance Web &amp; <abbr title="User Interface">UI</abbr> Designer</em>
                    </a>
                </h1>
            
                <nav class="main fadeInDown">
                    <ul>
                                        <li class="projects">
                        <a href="/projects" title="Projects">
                            <span aria-hidden="true" data-icon="&#x25;"></span>
                            Projects                        </a>
                    </li>
                                        <li class="about">
                        <a href="/about" title="About">
                            <span aria-hidden="true" data-icon="&#x21;"></span>
                            About                        </a>
                    </li>
                                        <li class="notes">
                        <a class="active" href="/notes" title="Notes">
                            <span aria-hidden="true" data-icon="&#x2b;"></span>
                            Notes                        </a>
                    </li>
                                        <li class="contact">
                        <a href="/contact" title="Contact">
                            <span aria-hidden="true" data-icon="&#x26;"></span>
                            Contact                        </a>
                    </li>
                                        </ul>
                </nav>

            </div>
        </header>

        <div id="page">
<section class="notes">


	
	<article>

		<div class="padding">

			<h1><a href="/notes/seeing-faces">Seeing Faces Everywhere</a></h1>
			<time datetime="2012-03-25T00:00:00+00:00" pubdate="pubdate">
				25 March 2012			</time>
			<p>Our brains are hardwired to attribute human features and behaviour to many things we know not to have them. From pets (they really aren't clever), to abstract things like countries, simple things like plug sockets, and the UI of digital products.</p>

<p>Despite being able to rationally detach these human characteristics, we can't help but see them anyway. <em>We see faces everywhere we look</em>.</p>

<p><figure class="center"><img src="/content/03-notes/03-seeing-faces/plug_faces.jpg" alt="Steven Urmston - Freelance Web &amp; UI Designer" /></figure></p>

<p>This condition (<a href="http://en.wikipedia.org/wiki/Anthropomorphism">anthropomorphism</a> for those who like to sound clever) can be used by designers to give inanimate objects personality and to guide a positive user experience around digital products and services, <em>which we not only come to see as allies, but in many cases as friends</em>.</p>

<p>Can you imagine treating this little dude as you might treat your desktop printer? (which in my case is a toxic combination of disdain and rage)</p>

<p><figure class=""><img src="/content/03-notes/03-seeing-faces/little_print.jpg" alt="Steven Urmston - Freelance Web &amp; UI Designer" /></figure></p>

<p>Or throwing a cup this cute in a non-recycling bin?</p>

<p><figure class="right"><img src="/content/03-notes/03-seeing-faces/coffee_jacket.jpg" alt="Steven Urmston - Freelance Web &amp; UI Designer" /></figure></p>

<p>Nope though not. These designs can strongly infulence our reactions and behaviour toward the objects around us.</p>

<p>So, should I draw a face on my next website? <em>Yes this is a rhetorical question</em>. Clearly there are levels, and not everything needs a face.</p>

<p>I&#8217;ve made use of this in my own work in more subtly ways, recently on a website for <a href="http://cliffdesign.co.uk/">Cliff Design</a> where the open/close functionality uses animation to transform a 50 pixel green square into a little character who fetches content at your call.</p>

<p><figure class="right"><a href="http://cliffdesign.co.uk/"><img src="/content/03-notes/03-seeing-faces/cliff-screenshot.png" alt="Steven Urmston - Freelance Web &amp; UI Designer" /></a></figure></p>

<p>I did experiment using an face instead of the text and arrow combination, but found it wasn't required, the character coming from the animation (as well as making the functionality less obvious).</p>

<h2>What am I taking home here?</h2>

<p>This is a powerful technique to infulence people's behaviour. It can be used subtly, or overtly, but should be used carefully as it could easily become a turn-off. It could also just be an unecessary distraction.</p>

<p>What is certain is that we are going to see a lot more of this, and (like any overused technique) we could find ourselves in the middle of a backlash.</p>
		
		</div>

	</article>

	
	<article>

		<div class="padding">

			<h1><a href="/notes/percentages-and-pixels">Percentages &amp; Pixels Sitting in a Tree</a></h1>
			<time datetime="2012-01-30T00:00:00+00:00" pubdate="pubdate">
				30 January 2012			</time>
			<p>When building a <em>properly</em> responsive layout, gutters set in % become inappropriately sized at both large and small window sizes. <em>Using some simple and pretty well supported CSS (IE8+) we can damn well fix that</em>.</p>

<p>The obvious CSS for a liquid layout might be something like this;</p>

<pre><code>.sidebar {
    width: 20%;
    padding-left: 10%;
    float: left;
}
.content {
    width: 60%;
    padding-left: 10%;
    float: left;
}
</code></pre>

<p><a href="/content/03-notes/02-percentages-and-pixels/demo1.html" class="button demo">View demo</a></p>

<p>The problem being; at iPad size the gap between columns is too small, and on your shiny new cinema display, it's gonna be too damn big!</p>

<h2>Are we just gonna take this?</h2>

<p><em>(Hell no)</em></p>

<p>What we actually need is the IE6 box model in <a href="http://www.quirksmode.org/css/quirksmode.html">Quirks mode</a>, and <em>(here's one I prepared earlier!)</em> CSS has that very option!</p>

<pre><code>.sidebar, .content {
    box-sizing: border-box;
    padding-left: 24px;
    float: left;
}
.sidebar {
    width: 30%;
}
.content {
    width: 70%;
}
</code></pre>

<p><a href="/content/03-notes/02-percentages-and-pixels/demo2.html" class="button demo">View demo</a></p>

<p><em>This</em> is gonna to give us a liquid layout, with fixed pixel gutters.</p>

<p>To be fair this isn't perfectly supported. It requires the following prefixes;</p>

<pre><code>-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
-ms-box-sizing: border-box;
box-sizing: border-box;
</code></pre>

<p>and doesn't work in IE7 (although there is a <a href="http://ie7-js.googlecode.com/svn/test/box-sizing.html">polyfil for that</a>).</p>

<p>Only you can decide how much of a problem this is, although I would say is that if you are using this technique for fluid responsive websites, serve it up inside a media query and the poor little devil gets fat nothing.</p>

<p>There is an alternative; using <code>display: table</code> which does actually emulate this behaviour, but although this property is slightly better supported, I've found it to be a little unhelful due to additional effects; <a href="http://www.456bereastreet.com/archive/201110/using_displaytable_has_semantic_effects_in_some_screen_readers/">accessibility problems</a> and <a href="http://bugs.jquery.com/ticket/8301">jQuery issues</a>.</p>

<h2>Can we do better than pixels?</h2>

<p>We could use alternative pixel padding values within a series of media queries, so we could make use of the space afforded by larger screens with appropriate padding.</p>

<p>My personal preference however is to set gutters in ems, and control the gutter widths using the base font size.</p>

<pre><code>body {
    font-size: 16px;
}
@media screen and (min-width: 768px) {
    body {
        font-size: 18px;
    }
}
/* and onwards */

.sidebar, .content {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
    padding-left: 2em; /* either 32px, or 36px */
    float: left;
}
</code></pre>

<p><a href="/content/03-notes/02-percentages-and-pixels/demo3.html" class="button demo">View demo</a></p>

<p>Boom. Go build.</p>
		
		</div>

	</article>

	
	<article>

		<div class="padding">

			<h1><a href="/notes/bacon-in-the-sky">Bacon In The Sky ... With Diamonds.</a></h1>
			<time datetime="2012-01-15T00:00:00+00:00" pubdate="pubdate">
				15 January 2012			</time>
			<p>Hot damn I&apos;ve only launched a personal website! As something of a serial scrapper, I&apos;ve burnt through my fair share of designs, all preferable to the fat nothing my domain has worn for the last 5 years.</p>

<p>Recently I&apos;ve begun to consider why I even want a website, and I believe this thought process has tipped me over the edge. Thus as an eternal reminder of my own personal solution to scrapping, I shall now <em>scratch my reasons into this HTML</em>.</p>

<h2>Learn by doing</h2>

<p>I want to experiment with the bleeding edge techniques which I love about my job (more to come, but <a href="/responsive.html">responsive</a> and SVG are go). I shall also improve something I feel is a weakness; <em>my writing</em>, which whilst not a disaster, needs the polish which only consistently doing can bring.</p>

<h2>Make waves</h2>

<p>No, not <a href="https://wave.google.com/wave/?pli=1">that kind</a>. The Web is constantly shifting. I will use Clearbar to document the work I am proud of, before it's inevitable demise.</p>

<h2>Give something back</h2>

<p>I&apos;ve been making websites for about a decade, during which time I've consumed vast quantities of content, created by supremely talented people. Yet I never contribute, I don't even leave comments.</p>

<p>This will change. Hold me to it.</p>
		
		</div>

	</article>

	

</section>

    		</div>

        </div>

        <footer id="bottom">
                
            <div class="wrapper">

                <p class="contact">
                    Find me on <a href="http://twitter.com/steveu">Twitter</a>, <a href="http://dribbble.com/steveu">Dribbble</a>, <a href="http://github.com/steveu">GitHub</a> and <a href="http://uk.linkedin.com/in/steveurmston">LinkedIn</a>. Send email to <a href="mailto:&#x73;&#116;&#x65;&#x76;&#101;&#64;&#117;&#114;&#109;&#x2e;&#115;&#x74;">&#x73;&#x74;&#101;&#118;&#x65;&#x40;&#x75;&#x72;&#x6d;&#x2e;&#115;&#x74;</a>.
                </p>

                <p class="copyright">
                    <a class="cc" rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/">
                    <img alt="Creative Commons License" src="/assets/images/cc_licence.png" width="88" height="31" /></a>
                </p>

                
            </div>

        </footer>
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

        <script src="/assets/scripts/libs/jquery.history.js"></script>
        <script src="/assets/scripts/plugins.js"></script>
        <script src="/assets/scripts/global.js"></script>
        
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-32653177-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
        
    </body>
</html>