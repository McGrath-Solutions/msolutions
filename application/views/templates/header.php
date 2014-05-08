<?= doctype('html5'); ?>
<html lang="en">
<head>
<meta charset="UTF-8">
<?= meta('description', $description);?>
<?= meta('keywords', 'people with disabilities, employment, internships, engineering, information technology, low cost, nonprofit, employment services');?>   
    
<title><?= $page_title ?> - McGrath Solutions</title>

<!-- STYLE SHEETS -->
<?= css_asset('style.css') ?>
<?= css_asset('yui-skin-custom.css') ?>

<!-- FAVICON -->
<link rel="icon" type="image/ico" href="<?= base_url();?>assets/image/favicon.ico"/>

<!-- JavaScripts -->
<script type="text/javascript" src="<?= js_asset_url('jquery.js') ?>"></script>
<script type="text/javascript" src="<?= js_asset_url('yui-min.js') ?>"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31881080-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script>
//    Call the "use" method, passing in "node-menunav".  This will load the
//    script and CSS for the MenuNav Node Plugin and all of the required
//    dependencies.

YUI().use("node-menunav", function(Y) {

    //    Use the "contentready" event to initialize the menu when the subtree of
    //    element representing the root menu (<div id=to
    //    be cripted.

    Y.on("contentready", function () {

        //    The scope of the callback will be a Node instance representing
        //    the root menu (<div id="menu-1">).  Therefore, since "this"
        //    represents a Node instance, it is possible to just call "this.plug"
        //    passing in a reference to the MenuNav Node Plugin.

        this.plug(Y.Plugin.NodeMenuNav);

    }, "#menu-1");

});</script>

<!-- GOOGLE ADSENSE -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<?php if($page_title == 'Home'){?>
<script type="text/javascript" src="<?= js_asset_url('unslider.min.js') ?>"></script>
<!-- UNSLIDER -->
<script>
    $(function() {
        $('.banner').unslider({
        speed: 900,               //  The speed to animate each slide (in milliseconds)
	delay: 16000,              //  The delay between slide animations (in milliseconds)
	complete: function() {},  //  A function that gets called after every slide animation
	keys: true,               //  Enable keyboard (left, right) arrow shortcuts
	dots: true,               //  Display dot navigation
	fluid: true              //  Support responsive design. May break non-responsive designs
    });
});
</script>
<?php } ?>
    
<?php if($page_title == 'Open Positions'){?>
<script type="text/javascript" src="<?= js_asset_url('viewjobs.js') ?>"></script>
<?php } ?>

<?php if(($page_title == 'Submit Resume') || ($page_title == 'Request Information Technology Services')){?>
<script type="text/javascript" src="<?= js_asset_url('validate.min.js') ?>"></script>
<?php } ?>

</head>

<body class="yui-skin-custom">
    
    <!-- FACEBOOK LIKE BUTTON -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <a id="skipto" href="#main_content">Skip to Main Content</a>
    
    <div id="wrapper">
       <!-- HEADER -->
       <div id="header_container">
           <div id="logo_container">
               <!-- LOGO -->
               <div id="logo">
                   <a href="<?= base_url() ?>"><?= image_asset('logo.png', '', array('alt'=>'McGrath Solutions Home')) ?></a>  
               </div>
               <div id="slogon_container">
                   <!-- COMPANY NAME -->
                   <div id="company">
                       McGrath Solutions, Inc.
                   </div>
                   <!-- SLOGAN -->
                   <div id="slogan">
                       Promoting Employment & Providing Affordable IT
                   </div> 
               </div>
           </div>

           <!-- TOP LINKS -->
           <div id="search_container">
               <h1 class="element-invisible">Top Links</h1>
               <div id="top_links">
                   <ul>
                       <li><a href="<?= base_url('search.html') ?>">Search</a></li>
                       <li><a href="<?= base_url('accessibility.html') ?>">Accessibility</a></li>
                       <li><a href="<?= base_url('site-map.html') ?>">Site Map</a></li>
                   </ul>
               </div>
               <div id="donate">
                   <a href="<?= base_url('donations.html') ?>">Donations</a>
               </div>
           </div>

           <div class="cleared"></div>
         </div><!-- END HEADER -->
    
        <!-- NAVIGATION -->
         <nav>
            <h1 class="element-invisible">Main Navigation</h1>
            <div id="menu-1" class="yui3-menu yui3-menu-horizontal yui3-splitbuttonnav"><!-- Root menu bounding box -->
                <div class="yui3-menu-content"><!-- Root menu content box -->
                    <ul>
                        <li class="yui3-menuitem"><!-- Menuitem bounding box -->
                            <a class="yui3-menuitem-content" href="<?= base_url() ?>">Home</a>
                        </li>
                        <li>
                            <span class="yui3-menu-label"><!-- menu label root node -->
                                <a href="<?= base_url('about-us.html') ?>">About Us</a><!-- menu label default action -->
                                <a href="#about-us" class="yui3-menu-toggle">About Us Options</a><!-- menu label submenu toggle -->
                            </span>
                            <div id="about-us" class="yui3-menu">
                                <div class="yui3-menu-content">
                                    <ul>
                                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('about-us/our-mission.html') ?>">Our Mission</a></li>
                                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('about-us/our-clients.html') ?>">Our Clients</a></li>
                                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('about-us/board-of-directors.html') ?>">Board of Directors</a></li>
                                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('about-us/staff-and-volunteers.html') ?>">Staff and Volunteers</a></li>
                                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('about-us/associates.html') ?>">Associates</a></li>
                                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('about-us/contact-us.html') ?>">Contact Us</a></li>
                                        <!--<li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('about-us/press-releases.html') ?>">Press Releases</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="yui3-menu-label"><!-- menu label root node -->
                                <a href="<?= base_url('associates-and-volunteers.html') ?>">Associates & Volunteers</a><!-- menu label default action -->
                                <a href="#associate" class="yui3-menu-toggle">Associates & Volunteers Submenu</a><!-- menu label submenu toggle -->
                            </span>
                            <div id="associate" class="yui3-menu">
                                <div class="yui3-menu-content">
                                    <ul>
                                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('associates-and-volunteers/associate-and-volunteer-FAQ.html') ?>">Associate & Volunteer FAQ</a></li>
                                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('associates-and-volunteers/employment-services.html') ?>">Employment Services</a></li>
                                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('associates-and-volunteers/open-positions.html') ?>">Open Positions</a></li>
                                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('associates-and-volunteers/submit-resume.html') ?>">Submit Resume</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="yui3-menu-label"><!-- menu label root node -->
                                <a href="<?= base_url('it-services.html') ?>">IT Services</a><!-- menu label default action -->
                                <a href="#it-services" class="yui3-menu-toggle">IT Services Options</a><!-- menu label submenu toggle -->
                            </span>
                            <div id="it-services" class="yui3-menu">
                                <div class="yui3-menu-content">
                                    <ul>
                                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('it-services/information-technology-FAQ.html') ?>">Information Technology FAQ</a></li>
                                        <li class="yui3-menuitem"><a class="yui3-menuitem-content" href="<?= base_url('it-services/request-information-technology-services.html') ?>">Request Information Technology Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                       
                        <li class="yui3-menuitem"><!-- Menuitem bounding box -->
                            <a class="yui3-menuitem-content" href="<?= base_url('research-and-development.html') ?>">Research & Development</a>
                        </li>
                    </ul>
                </div>
            </div>
      </nav> <!-- END NAVIGATION -->
  