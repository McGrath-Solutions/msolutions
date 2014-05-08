
<div id="rightsideBG">
    <div id="leftsideBG">
        <div id="overbothsides">
            <div id="sidebar">
                <?php if((strtolower($page_title) == 'about us') || strtolower($directory) == 'about us'){?>
                <!-- ABOUT US VERTICAL MENU -->
                <div class="v-menu">
                    <h2>Navigation</h2>
                    <ul>
                        <li><a href="<?= base_url('about-us.html') ?>" <?php if(strtolower($page_title) == ('about us')){echo 'class="nav-selected"';}?>>About Us</a></li>
                        <li><a href="<?= base_url('about-us/our-mission.html') ?>" <?php if(strtolower($page_title) == 'our mission'){echo 'class="nav-selected"';}?>>Our Mission</a></li>
                        <li><a href="<?= base_url('about-us/our-clients.html') ?>" <?php if(strtolower($page_title) == 'our clients'){echo 'class="nav-selected"';}?>>Our Clients</a></li>
                        <li><a href="<?= base_url('about-us/board-of-directors.html') ?>" <?php if(strtolower($page_title) == 'board of directors'){echo 'class="nav-selected"';}?>>Board of Directors</a></li>
                        <li><a href="<?= base_url('about-us/staff-and-volunteers.html') ?>" <?php if(strtolower($page_title) == 'staff and volunteers'){echo 'class="nav-selected"';}?>>Staff and Volunteers</a></li>
                        <li><a href="<?= base_url('about-us/contact-us.html') ?>" <?php if(strtolower($page_title) == 'contact us'){echo 'class="nav-selected"';}?>>Contact Us</a></li>
                        <!--<li><a href="<?= base_url('about-us/press-releases.html') ?>" <?php if(strtolower($page_title) == 'press releases'){echo 'class="nav-selected"';}?>>Press Releases</a></li>-->
                    </ul>
                </div>
                <?php }else if((strtolower($page_title) == 'associates and volunteers') || strtolower($directory) == 'associates and volunteers'){ ?>
                <!-- ASSOCIATES AND VOLUNTEERS VERTICAL MENU -->
                <div class="v-menu">
                    <h2>Navigation</h2>
                    <ul>
                        <li><a href="<?= base_url('associates-and-volunteers.html') ?>" <?php if(strtolower($page_title) == ('associates and volunteers')){echo 'class="nav-selected"';}?>>Associates & Volunteers</a></li>
                        <li><a href="<?= base_url('associates-and-volunteers/associate-and-volunteer-FAQ.html') ?>" <?php if(strtolower($page_title) == ('associate and volunteer faq')){echo 'class="nav-selected"';}?>>Associate & Volunteer FAQ</a></li>
                        <li><a href="<?= base_url('associates-and-volunteers/employment-services.html') ?>" <?php if(strtolower($page_title) == ('employment services')){echo 'class="nav-selected"';}?>>Employment Services</a></li>
                        <li><a href="<?= base_url('associates-and-volunteers/open-positions.html') ?>" <?php if(strtolower($page_title) == ('open positions')){echo 'class="nav-selected"';}?>>Open Positions</a></li>
                        <li><a href="<?= base_url('associates-and-volunteers/submit-resume.html') ?>" <?php if(strtolower($page_title) == ('submit resume')){echo 'class="nav-selected"';}?>>Submit Resume</a></li>
                    </ul>
                </div>
                <?php }else if((strtolower($page_title) == 'it services') || strtolower($directory) == 'it services'){ ?>
                <!-- IT SERVICES VERTICAL MENU -->
                <div class="v-menu">
                    <h2>Navigation</h2>
                    <ul>
                        <li><a href="<?= base_url('it-services.html') ?>" <?php if(strtolower($page_title) == ('it services')){echo 'class="nav-selected"';}?>>IT Services</a></li>
                        <li><a href="<?= base_url('it-services/information-technology-FAQ.html') ?>" <?php if(strtolower($page_title) == ('information technology faq')){echo 'class="nav-selected"';}?>>Information Technology FAQ</a></li>
                        <li><a href="<?= base_url('it-services/request-information-technology-services.html') ?>" <?php if(strtolower($page_title) == ('request information technology services')){echo 'class="nav-selected"';}?>>Request Information Technology Services</a></li>
                    </ul>
                </div>
                <?php }else if((strtolower($page_title) == 'research and development') || strtolower($directory) == 'research and development'){ ?>
                <!-- RESEARCH AND DEVELOPMENT VERTICAL MENU -->
                <h2>Navigation</h2>
                <div class="v-menu">
                    <ul>
                        <li><a href="<?= base_url('research-and-development.html') ?>" <?php if(strtolower($page_title) == ('research and development')){echo 'class="nav-selected"';}?>>Research & Development</a></li>
                    </ul>
                </div>
                <!-- NO VERTICAL MENU -->
                <?php }else{ ?>
                <?php } ?>
        
                <h2>Google Ads</h2>
                <!-- Sidebar 1 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:200px;height:200px"
                     data-ad-client="ca-pub-6289886238351946"
                     data-ad-slot="3857902713"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

                <!-- Sidebar 2 -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:200px;height:200px"
                     data-ad-client="ca-pub-6289886238351946"
                     data-ad-slot="5334635912"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div><!-- END SIDEBAR -->
            <div id="content">
            <div id="main_content"></div>