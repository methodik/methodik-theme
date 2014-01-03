<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<!-- START OF INDEX CONTENT -->			

	<section class="container pixelMosaic whatWeDo" id="scrollTo-whatWeDo">
            <div class="inner">
                <h4 class="indexTitle">  </h4>
                <ul class="grid">
                    <li class="sixth mob-fullWidth bgBlack" id="bigTile">
                        <span class="button-arrowRight"></span>
                        <i class="websiteDesign slide-top 3d"></i>
                        <h2 class="slide-top">website design</h2>
                        <p class="slide-bottom">if you're starting fresh, <strong>we've got it covered</strong>, we'll also take care of your redesign and upgrades.</p>
                        <a href="http://methodik.co.uk/the-process" class="slide-bottom">the process</a>
                    </li>

                    <li class="third noPadding mob-fullWidth" id="col2Container">
                        <div class="first bgWhite">
                            <span class="button-arrowRight photography"></span>
                            <h2 class="slide-top photography">photography</h2>
                            <a href="http://methodik.co.uk/events-branding-photography-case-study" class="button-fixed bgBlack">see our work</a>
                        </div>

                        <div class="second bgBlue">
                            <span class="button-arrowRight"></span>
                            <h2 class="slide-top projectManagement">project management</h2>
                            <p class="slide-bottom">Success & organisation come hand in hand, we know that. We also know the web can be a confusing place at first, <strong>so we’ll speak to you in English</strong> and leave the technical stuff to the studio.</p>
                            <a href="http://methodik.co.uk/jpsg-design-case-study" class="button-fixed bgBlack">see our work</a>
                        </div>
                    </li>
                    
                    <li class="half bgWhite">
                        <span class="button-arrowRight"></span>
                        <h2 class="slide-top video">video</h2>
                        <p class="slide-bottom"><strong>Engagement is at the heart of everything we do</strong>. Videos are a proven way to achieve it and we have a few tricks to get the most out of what we make.</p>
                        <a href="http://methodik.co.uk/jpsg-photography-case-study" class="button-fixed bgBlack">see our work</a>
                    </li>
                    
                    <li class="half bgYellow">
                        <span class="button-arrowRight"></span>
                        <h2 class="slide-top cms">cms</h2>
                        <p class="slide-bottom">We believe content is the most important component to a successful website. A content management system helps you deliver what's important to your customers.</p>
                        
                        <ul class="horizontal list slide-bottom">
                            <li>e-commerce</li>
                            <li>blog</li>
                            <li>event systems</li>
                            <li>anything</li>
                        </ul>
                        <a href="http://methodik.co.uk/john-white-design-case-study" class="button-fixed bgBlack">see our work</a>
                    </li>

                    <li class="sixth mob-half white bgBlack">
                        <span class="button-arrowRight"></span>
                        <h2 class="slide-top plugins white">plugins</h2>
                        <p class="slide-bottom white"><strong>Web plug ins are big business these days</strong>. We give ours away for free; we're just like that. </p>
                        
                    </li>
                    
                    <li class="third mob-half bgRed">
                        <span class="button-arrowRight"></span>
                        <h2 class="slide-top white brandIdentity">brand identity</h2>
                        <p class="slide-bottom">Identying the distinct features that set you apart and making them recognisable through content, design, and experience.</p>
                        <a href="http://methodik.co.uk/john-white-design-case-study" class="button-fixed bgBlack">see our work</a>
                    </li>
                
                    <li class="placeholder"> </li>
                </ul>
            </div>
        </section>

        <section class="quote" id="scrollTo-work">
            <div class="inner">
                <blockquote class="bigQuote">
                    <h5 class="lobster fitText">&ldquo;engaging & smart&rdquo;</h5>
                    <sub>Fergus Erquhart, Office Manager at London URC offices </sub>
                </blockquote>
                <div id="cs1-container">
                    <div class="projectDescription-container">
                        <div class="projectDescription">
                            <h2>the project</h2>
                            <p>The Joint Property Strategy Group is a partnership between the Methodist and United Reform Churches, which exists as a property campaign nationally around the UK. They wanted a creative and interactive website to persuade members to modernise over 7,500 buildings.</p>
                            <p>We decided early on that we would build a bespoke interactive video player that would act as a portal to more detailed information. It was important that it worked on all devices, a demo is coming very soon.</p>
                            <p>We wanted the web site to be a ‘fun place’, so we created plenty of interactive elements on the home page including short case studies and interactive quotes with pictures of members.</p>
                        </div>

                        <blockquote class="smallQuote">
                            <p>In early 2013 we chose Methodik to design & build our website to support our property campaign to rejuvinate our churches across the UK, this also included promotional videos and photography shoots. They have produced work that is vibrant by way of design, and content that is engaging and smart. They've also managed to turn work around under short time scales. </p>
                        </blockquote>
                    </div>

                        <div class="tileGrid-container">
                            <span class="bgBlack">
                                <i><img src="<?php bloginfo('template_directory'); ?>/img/html5-icon.png" alt="An image showing the HTML5 icon. "/></i>
                                <h3 class="white">website design</h3>
                            </span>

                            <span class="bgWhite">
                                <i class="fitText2">V</i>
                                <h3>video</h3>
                            </span>

                            <span class="bgRed">
                                <i class="fitText2 white">r</i>
                                <h3 class="white">brand identity</h3>
                            </span>

                            <span class="bgBlack">
                                <i class="fitText2 white">G</i>
                                <h3 class="white">plug ins</h3>
                            </span>

                            <span class="bgYellow">
                                <i class="fitText2">g</i>
                                <h3 class="white">cms</h3>
                            </span>

                            <span class="bgBlue">
                                <i class="fitText2">o</i>
                                <h3>project management</h3>
                            </span>

                            <span class="bgWhite">
                                <i class="fitText2">I</i>
                                <h3>photography</h3>
                            </span>
                        </div>
                
                        <div class="gallerySlider" style="position: relative;">
                            <div id="slides">
                                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/mat/jpsg-mobile-zoom.jpg" alt="" />
                                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/mat/jpsg-3d.jpg" alt="" />
                                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/jamie/jamie-jpsg-church-photo.jpg" alt="" />
                                
                                <a href="#" class="slidesjs-previous slidesjs-navigation"></a>
                                <a href="#" class="slidesjs-next slidesjs-navigation"></a>
                            </div>
                        </div>

                        <div class="quoteButtonContainer">
                            <button class="button bgRed comingSoonButton">VISIT SITE</button>
                            <button class="button bgBlue arrowUp button-hide" id="cs1button-hide">HIDE</button>
                            <button class="button bgBlue last" id="goToCS2">NEXT PROJECT</button>
                        </div>
                    </div>
                    <button id="cs1-showButton" style="display: none;" class="bgBlue button-center arrowDown">the whole story</button>
                </div>
        </section>

        <section class="container">
            <div class="inner about-us" id="scrollTo-aboutUs">
                <h4 class="indexTitle">a bit about us</h6>
                <p class="huge">Methodik is a digital agency that creates online products from our design studio in Brighton</p>
                <p class="big">Usually you'll find us building user-centered websites or thinking up new ways to bring better results to your business.</p>
                <p class="big">We don't see technology as a platform that we use. To us, it's built into everything we do which helps us understand the fundamentals of how and why people use technology. We come from a broad range of backgrounds, read more about us here:</p>
           
                <div class="staffMember-container">
                    <div class="staffMember jamie" style="margin-top: 2.6rem;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/jamie-photographer.jpg" alt="A picture of Jamie, the Photographer at Methodik"/>
                        <a href="http://methodik.co.uk/about-jamie" class="button-arrowRight"></a>
                        <footer>
                            <h2>jamie o'mara</h2>
                            <p>digital content</p>
                        </footer>
                    </div>

                    <div class="staffMember middle mat">
                        <img src="<?php bloginfo('template_directory'); ?>/img/mat-designer.jpg" alt="A picture of Mat, the Designer at Methodik"/>
                        <a href="http://methodik.co.uk/about-mat" class="button-arrowRight"></a>
                        <footer>
                            <h2>mat griffiths</h2>
                            <p>the designer</p>
                        </footer>
                    </div>

                    <div class="staffMember last antonis">
                        <img src="<?php bloginfo('template_directory'); ?>/img/antonis-developer.jpg" alt="A picture of Antonis, the Developer at Methodik"/>
                        <footer>
                            <h2>antonis pagidas</h2>
                            <p>the developer</p>
                        </footer>
                    </div>
                </div>
        
            </div>
        </section>

        <section class="theProcess">
            <div>
                <span class="bgYellow white title">the process</span>
                <span class="bgYellow tagline button-text">how we do it</span>
                <a href="http://methodik.co.uk/the-process" class="button-text">click to see</a>
            </div>
        </section>

        <section class="quote" id="scrollTo-CS2">
            <div class="inner" id="cs2-container">
                <blockquote class="bigQuote">
                    <h5 class="lobster fitText">&ldquo;above and beyond my expectations&rdquo;</h5>
                    <sub>John White, Director at Know You Can Coaching</sub>
                </blockquote>
                     <img src="<?php bloginfo('template_directory'); ?>/img/ajax-loader.gif" alt="An animated loading icon. " id="loading" />
                    <div class="projectDescription-container">
                        <div id="caseStudy">
                            
                        </div>
                    </div>
                <button id="caseStudy-button" class="bgBlue button-center arrowDown">the whole story</button>
            </div>
        </section>

        <section class="container" id="scrollTo-statistics">
            <div class="inner">
                <h4 class="indexTitle">we love statistics, here's some we think you may like too</h4>
                <section class="infographic-container">
                    <div class="infographic-box">
                        <div id="infographic1" class="infographic">
                            <p class="infographic-text" style="margin-top: -.75em;">200% of daily recommended caffiene intake</p>
                        </div>
                        
                        <div id="infographic1-dashed" class="infographic">
                        
                        </div>
                    </div>
                    
                    <div class="infographic-box">
                        <div id="infographic2" class="infographic">
                            <p class="infographic-text">over 90% of projects delivered on time</p>
                        </div>
                    </div>
                    
                    <div class="infographic-box">
                        <div id="infographic3" class="infographic">
                            <span id="infographicClockhand1"> </span>
                            <span id="infographicClockhand2"> </span>
                            <p class="infographic-text" style="-webkit-transform: translate(0, -4rem);">9 hours in studio per day</p>
                        </div>
                    </div>
                    
                    <div class="infographic-box fourth">
                        <div id="infographic4" class="infographic">
                            <p class="infographic-text">we ALL have iPads</p>
                        </div>
                    </div>

                    <div class="infographic-box">
                        <div id="infographic5" class="infographic">
                            <p class="infographic-text">75% repeat business</p>
                        </div>
                    </div>

                    <div class="infographic-box placeholder"></div>
                    <div class="infographic-box placeholder"></div>

                    <button id="button">animate</button>
                </section>
            </div>
        </section>

	<!-- END OF INDEX CONTENT -->
	<?php endwhile; ?>

	 <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_footer(); ?>