	
    <?php if ( is_front_page() ) { ?>
        
        <nav class="secondaryNav">
            <button class="bgBlue button whatwedoLink">WHAT WE DO</button>
            <button class="bgBlue button aboutLink">ABOUT US</button>
            <button class="bgBlue button"><a href="http://methodik.co.uk/the-process" style="display: block; text-align: center; font-size: inherit;">THE PROCESS</a></button>
            <button class="bgBlue button statisticsLink">STATISTICS</button>
            <button class="last bgBlue button"></button>
        </nav>    
    <?php } else { 
        $homeURL = 'http://methodik.co.uk/' ?>
        
        <nav class="secondaryNav">
            <button class="bgBlue button whatwedoLink"><a href="<?php echo $homeURL ?>#!what-we-do">WHAT WE DO</a></button>
            <button class="bgBlue button aboutLink"><a href="<?php echo $homeURL ?>#!about-section">ABOUT US</a></button>
            <button class="bgBlue button"><a href="http://methodik.co.uk/the-process">THE PROCESS</a></button>
            <button class="bgBlue button statisticsLink"><a href="<?php echo $homeURL ?>#!statistics">STATISTICS</a></button>
            <button class="last bgBlue button"></button>
        </nav>
    <?php } ?>
    

        <footer class="footerSection" id="scrollTo-contact">
            <div class="inner">
                <h2 style="margin-bottom: 0;">we'd love to hear all about your project</h2>
                <h2 class="red">get in touch</h2>
                
                <div class="map-container">
                    <div class="map-maskLayer">
                        <p class="large mapAddress">
                        <span>find us at</span>
                        3 St. Georges Place,
                        Brighton,
                        East Sussex,
                        BN1 4GA
                        </p>
                        
                    </div>
                    <div class="map" id="map-canvas">
                        
                    </div>
                    <span class="button bgRed" id="map-button">see map</span>
                </div>


                <div class="contactForm">
                    <?php echo do_shortcode('[contact-form-7 id="72" title="Contact form 1"]') ?>
                </div>
            </div>
        </footer>

        <footer class="boringFooter">
            <p class="button-text">thanks for checking us out</p>
            <p class="button-text" style="margin-bottom: 0;">@copyright 2013 methodik<p>
        </footer>
        <div class="mobCheck"></div>
        <div class="iPadCheck"></div>
        <?php if ( is_front_page() ) { ?>
            <div class="modalNav">
                <p class="white">You're navigation is down at the bottom</p>
                <img src="<?php bloginfo('template_directory'); ?>/img/modal-arrow.svg" alt="An arrow pointing at the mobile navigation. ">
                <span class="button bgWhite" id="modalButton">got it</span>
            </div>
        <?php } ?>
        

	<?php wp_footer(); ?>
	
	
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39398100-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	
</body>

</html>
