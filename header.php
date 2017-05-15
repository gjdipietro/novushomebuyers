<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/dist/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/dist/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		
        <script>
			/*! grunt-grunticon Stylesheet Loader - v2.1.2 | https://github.com/filamentgroup/grunticon | (c) 2015 Scott Jehl, Filament Group, Inc. | MIT license. */
            (function(e){function t(t,n,r,o){"use strict";function a(){for(var e,n=0;u.length>n;n++)u[n].href&&u[n].href.indexOf(t)>-1&&(e=!0);e?i.media=r||"all":setTimeout(a)}var i=e.document.createElement("link"),l=n||e.document.getElementsByTagName("script")[0],u=e.document.styleSheets;return i.rel="stylesheet",i.href=t,i.media="only x",i.onload=o||null,l.parentNode.insertBefore(i,l),a(),i}var n=function(r,o){"use strict";if(r&&3===r.length){var a=e.navigator,i=e.Image,l=!(!document.createElementNS||!document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||e.opera&&-1===a.userAgent.indexOf("Chrome")||-1!==a.userAgent.indexOf("Series40")),u=new i;u.onerror=function(){n.method="png",n.href=r[2],t(r[2])},u.onload=function(){var e=1===u.width&&1===u.height,a=r[e&&l?0:e?1:2];n.method=e&&l?"svg":e?"datapng":"png",n.href=a,t(a,null,null,o)},u.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",document.documentElement.className+=" grunticon"}};n.loadCSS=t,e.grunticon=n})(this);(function(e,t){"use strict";var n=t.document,r="grunticon:",o=function(e){if(n.attachEvent?"complete"===n.readyState:"loading"!==n.readyState)e();else{var t=!1;n.addEventListener("readystatechange",function(){t||(t=!0,e())},!1)}},a=function(e){return t.document.querySelector('link[href$="'+e+'"]')},c=function(e){var t,n,o,a,c,i,u={};if(t=e.sheet,!t)return u;n=t.cssRules?t.cssRules:t.rules;for(var l=0;n.length>l;l++)o=n[l].cssText,a=r+n[l].selectorText,c=o.split(");")[0].match(/US\-ASCII\,([^"']+)/),c&&c[1]&&(i=decodeURIComponent(c[1]),u[a]=i);return u},i=function(e){var t,o,a;o="data-grunticon-embed";for(var c in e)if(a=c.slice(r.length),t=n.querySelectorAll(a+"["+o+"]"),t.length)for(var i=0;t.length>i;i++)t[i].innerHTML=e[c],t[i].style.backgroundImage="none",t[i].removeAttribute(o);return t},u=function(t){"svg"===e.method&&o(function(){i(c(a(e.href))),"function"==typeof t&&t()})};e.embedIcons=i,e.getCSS=a,e.getIcons=c,e.ready=o,e.svgLoadedCallback=u,e.embedSVG=u})(grunticon,this);
			grunticon(["<?php echo get_template_directory_uri(); ?>/dist/img/icons/icons.data.svg.css", "<?php echo get_template_directory_uri(); ?>/dist/img/icons/icons.data.png.css", "<?php echo get_template_directory_uri(); ?>/dist/img/icons/icons.fallback.css"]);
		</script>
		<noscript><link href="<?php echo get_template_directory_uri(); ?>/dist/img/icons/icons.fallback.css" rel="stylesheet"></noscript>

	</head>
	<body <?php body_class(); ?>>
        
        <div id="container" class="o-container">
            <div class="c-ribbon" aria-hidden="true" role="decoration"></div>
            <header class="c-masthead" id="header" role="banner">
                <div class="c-masthead__main">
                    <div class="o-container__inner">
                        <h1 class="c-masthead__main__logo">
                            <a href="<?php echo home_url(); ?>" rel="home" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>">
                                <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                                <img class="c-masthead__main__logo__image" src="<?php echo get_template_directory_uri(); ?>/dist/img/novuslogo.svg" alt="Novus Home Buyers">
                                <span class="u-hiddenVisually">Novus Home Buyers</span>
                            </a>
                            <span class="u-hiddenVisually"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
                        </h1>
                        <div class="c-masthead__main__business c-business" itemscope="" itemtype="http://schema.org/LocalBusiness">
                            <div class="c-business__contact">
                                <label class="c-business__label">Get in touch</label>
                                <div>
                                    <a href="mailto:info@novushomebuyers.com" itemprop="email">info@novushomebuyers.com</a>
                                </div>
                                <div>
                                    <a href="tel:571-384-5474" class="c-business__phone" itemprop="telephone"  content="571-384-5474">
                                        571-384-5474
                                    </a>
                                </div>
                            </div>

                            <div class="c-business__hours">
                                <label class="c-business__label">Office Hours</label>
                                <div itemprop="openingHours" content="Mo,Tu,We,Th, Fr 07:00-10:00">
                                    <div>Monday to Friday</div>
                                    <div>7am to 10pm</div>
                                </div>
                            </div>
                        </div>                         
                    </div>
                </div>
                <nav class="c-masthead__nav js-menu" id="menu" role="navigation">
                    <div class="o-container__inner">
                        <button class="c-masthead__nav__toggle showMenu js-menu-toggle">
                            <span class="showMenu__wrap"><span class="showMenu__icon"></span></span>
                            <span class="showMenu__text">Menu</span>
                        </button>
                        <?php html5blank_nav(); ?>
                    </div>
                </nav>
            </header>
