/* == ENVIRONMENT == */

var $mobCheck = $('.mobCheck');
var isMobile = true;
if ( $mobCheck.css('position') === 'absolute' ) {
	isMobile = false;
}
var $iPadCheck = $('.iPadCheck');
var isiPad = false;
if ( $iPadCheck.css('position') === 'absolute' ) {
    isiPad = true;
}
var isIE8 = false;
if ( $mobCheck.css('position') === 'fixed' ) {
    isIE8 = true;
}

// Absolute path for Wordpress (for images)
var absPath = "http://methodik.co.uk/wp-methodik/wp-content/themes/methodik/img/"
// don't forget to rest URL for AJAX

/* == MODAL POP UP & LOCAL STORAGE == */

var popUp = $('.modalNav');
var popUpButton = popUp.find('#modalButton');
localStorage.modalClick = 'false';

// hide popUp and set local storage
popUpButton.click(function() {
    popUp.hide();

    if ( Modernizr.localstorage ) {
        localStorage.setItem('modalClick', 'true');
    }
    
});


// remove popUp if user has already clicked OK.
function hidePopUp() {
    if ( Modernizr.localstorage && localStorage.getItem('modalClick') === 'true' ) {
        popUp.hide();
        alert('modalclick is true! why is this showing');
    }    
}

$(document).ready(function() {
    hidePopUp();
})

/* == VARS == */

var mobNavButton = $('#mobNav');
var navContainer = $('#navContainer');

$.fn.clickToggle = function(a, b) {
    return this.each(function() {
        var clicked = false;
        $(this).bind("click", function() {
            if (clicked) {
                clicked = false;
                return b.apply(this, arguments);
            }
            clicked = true;
            return a.apply(this, arguments);
        });
    });
};

function hideNav() {
    navContainer.transition({ y: '-23em' });
}

function showNav() {
    if ( isiPad ) {
        navContainer.transition({ y: '-23rem' });
    } else {
        navContainer.transition({ y: '0' });
    }
	
}

mobNavButton.clickToggle(hideNav, showNav);

/* == SCROLL PAGE ON NAV LINKS == */

// get links in nav
var workLink = $('.workLink');
var aboutLink = $('.aboutLink');
var whatwedoLink = $('.whatwedoLink');
var statisticsLink = $('.statisticsLink');
var contactLink = $('.contactLink');

// get elements to scroll to
var workEl = $('#scrollTo-work');
var aboutEl = $('#scrollTo-aboutUs');
var whatwedoEl = $('#scrollTo-whatWeDo');
var statisticsEl = $('#scrollTo-statistics');
var contactEl = $('#scrollTo-contact');
var HTMLel = $('html');

// are we on index page
var isIndex = false;
if ( HTMLel.hasClass('index') ) {
    isIndex = true;
}

// CHANGE WHEN YOU GO LIVE!!!
var homeURL = 'http://methodik.co.uk/'

workLink.click(function() {
    if ( isIndex ) {
        $('html, body').scrollTo(workEl, 600);    
    }
    else {
        location.href = homeURL + '#!work';
    }
});

aboutLink.click(function() {
    if ( isIndex ) {
        $('html, body').scrollTo(aboutEl, 600);    
    }
    else {
        location.href = homeURL + '#!about-us';
    }
});

whatwedoLink.click(function() {
    if ( isIndex ) {
        $('html, body').scrollTo(whatwedoEl, 600);    
    } else {
        location.href = homeURL + '!what-we-do';
    }
});

statisticsLink.click(function() {
    if ( isIndex ) {
        $('html, body').scrollTo(statisticsEl, 600);    
    } else {
        location.href = homeURL + '!statistics';
    } 
});

contactLink.click(function() {
    if ( isIndex ) {
        $('html, body').scrollTo(contactEl, 600);    
    } else {
        location.href = homeURL + '!contact'
    }
});

function sectionHandler() {
    // handle people coming back to index (scrolling)
    if ( location.hash === '#!work' ) {
        $('html, body').scrollTo(workEl, 600);
    }
    else if ( location.hash === '#!about-section' ) {
        $('html, body').scrollTo(aboutEl, 600);
    }
    else if ( location.hash === '#!what-we-do' ) {
        $('html, body').scrollTo(whatwedoEl, 600);
    }
    else if ( location.hash === '#!statistics' ) {
        $('html, body').scrollTo(statisticsEl, 600);
    }
    else if ( location.hash === '#!contact' ) {
        $('html, body').scrollTo(contactEl, 600);
    }    
}

$(document).ready(function() {
    sectionHandler(); 
})



/* == INIT FIT TEXT == */

// big quote headingss
$('.fitText').fitText();

// project tile icons
$('.fitText2').fitText(0.1);

/* == FIT VIDS INIT == */

var videoContainer = $('.videoContainer');

// if video exits, make them 100% width
if ( !videoContainer.length == 0 ) {
    videoContainer.fitVids();
}


/* == GALLERY SLIDER == */

$('#slides').slidesjs({
        width: 1000,
        height: 750,
        navigation: false
	});


var button = $('.button-arrowRight');



/* == WHAT WE DO TILES HANDLING == */

// different slide values based on device with
if ( isMobile ) {
    var tileDist = '250px';
} else {
    var tileDist = '25rem';
}

function slideUp() {
        
    $this = $(this);
    $topSlide = $this.siblings('.slide-top');
    $bottomSlide = $this.siblings('.slide-bottom');
    $button = $this.siblings('.button-fixed');

    if ($this.hasClass('photography')) {
        if ( !isIE8 ) {
            $this.parent().transition({ backgroundPosition: '50% 0%' }, 450);
            $topSlide.transition({ y: '-150px' });
            $button.transition({ bottom: '0' });    
        } else {
            $this.parent().css({ background: "url('" + absPath + "photography-tile-thumb.jpg')" }, 450);
            $topSlide.css({ top: '-150px' });
            $button.css({ bottom: '0' });
        }
        
        
    } else if ( $this.parent().is('#bigTile') ) {
        $this.siblings('.slide-top').animate({marginTop: '-150px'}, 300);
        $bottomSlide.transition({ y: '0' });
    }

    else {
        if ( !isIE8 ) {
            $topSlide.transition({ y: '-150px' });
            $bottomSlide.transition({ y: '0' });
            $button.transition({ bottom: '0' });
        } else {
            $topSlide.css({ top: '-400px' });
            $bottomSlide.css({ top: '32px' });
            $button.css({ bottom: '0' });
        }
        
    }
}

function slideDown() {
    if ($this.hasClass('photography')) {
        if ( !isIE8 ) {
            $this.parent().transition({ backgroundPosition: '50% -400%' }, 600);
            $topSlide.transition({ y: '0' });
            $button.transition({ bottom: '-2rem' });   
        } else {
            $this.parent().css({ background: 'white' });
            $topSlide.css({ top: '30%' });
            $button.css({ bottom: '-32px' });
        }


        
    } else if ( $this.parent().is('#bigTile') ) {
        $this.siblings('.slide-top').animate({ marginTop: '0'}, 300);
        $this.siblings('.slide-bottom:first').transition({ y: tileDist });
    } else {
        if ( !isIE8 ) {
            $topSlide.transition({ y: '0' });
            $bottomSlide.transition({ y: tileDist });
            $button.transition({ bottom: '-2rem' });    
        } else {
            $topSlide.css({ top: '30%' });
            $bottomSlide.css({ top: '400px' });
            $button.css({ bottom: '-32px' }); 
        }
        
    }
    
}

// toggle between slideUp and slideDown
button.clickToggle(slideUp, slideDown);

/* ==
   =
   = MODERNIZR
   =
   == */

if (!Modernizr.svg) {
    $('.logoIcon').attr('src', absPath + 'methodik-logo-icon.png');
}





/* == AJAX CASE STUDY == */

var csButton = $('#caseStudy-button');
var cs1buttonHide = $('#cs1button-hide');
var cs1Container = $('#cs1-container');
var cs1showButton = $('#cs1-showButton');
var cs2Container = $('#caseStudy');
var csURL = 'http://methodik.co.uk/wp-content/themes/methodik/ajax/casestudy.html';

$(document).ready(function() {
    cs1Height = cs1Container.height();
    cs1Height += 100;
});


csButton.click(function() {
	cs2Container.load(csURL, function() {
	cs2Container.transition({ height: cs1Height }, 1000);
	});	
})

// show loader while loading
$(document).ajaxStart(function() {
	$('#loading').css({ opacity: 1 });
 });


// hide loader once AJAX is loaded and attach click events
$(document).ajaxStop(function() {
	$('#loading').css({ opacity: 0 });
	$('#caseStudy-gallery').slidesjs({
		width: 1000,
		height: 750,
		navigation: false
	})
	// hide 'see project' button
	csButton.hide();
	// attach click events to new buttons
	$('#cs2-hideButton').on('click', function(event) {
		cs2Container.transition({ height: '0px' });
		csButton.show();
	});
    $('.fitText2').fitText(0.1);
});

// hide Case Study 1
cs1buttonHide.click(function() {
	cs1Container.transition({ height: '0' }, 1000);
	cs1showButton.show();
});

// option to show case study again
cs1showButton.click(function() {
	cs1Container.transition({ height: cs1Height }, 1000);
	cs1showButton.hide();
})

// go from CS1 to CS2

var nextProjectButton = $('#goToCS2');
var caseStudy2 = $('#scrollTo-CS2');

nextProjectButton.click(function() {
    $('html, body').scrollTo(caseStudy2, 600);
});

// modal pop up JPSG site is still under construction
var comingSoonButton = $('.comingSoonButton');

comingSoonButton.click(function() {
    alert('This site is still under construction');
})


/*
   /-==--------------==-\ 
  ||-== INFOGRAPHICS ==-||
   \-==--------------==-/ */

/* == PATHS == */

// first graphic
var path1 = {
    "infographic1": {
        "strokepath": [
            {
                "path" : "M89.619,5.56C93.028,5.19,96.492,5,100,5c52.467,0,95,42.533,95,95  c0,52.467-42.533,95-95,95c-52.467,0-95-42.533-95-95C5,51.73,41,11.869,87.615,5.8",
                "strokeWidth" : 9,
                "strokeColor" : '#272727',
            }
        ],
        "dimensions": {
            "width": 200,
            "height": 200
        }
    }
};

var path2 = {
    "infographic1-dashed": {
        "strokepath": [
            {
                "path" : "M89.619,5.56C93.028,5.19,96.492,5,100,5c52.467,0,95,42.533,95,95  c0,52.467-42.533,95-95,95c-52.467,0-95-42.533-95-95C5,51.73,41,11.869,87.615,5.8",
                "duration" : 1500,
                "strokeWidth" : 1.3,
                "strokeColor" : '#ffffff',
                "strokeDash" : '-'
            }
        ],
        "dimensions": {
            "width": 200,
            "height": 200
        }
    }
};

// second graphic

var path3 = {
    "infographic2": {
        "strokepath": [
            {
                "path": "M100,5c52.467,0,95,42.533,95,95c0,52.467-42.533,95-95,95  c-52.467,0-95-42.533-95-95c0-35.731,19.727-66.855,48.883-83.075",
                "duration" : 1500,
                "strokeWidth" : 9,
                "strokeColor" : '#272727',
            }
        ],
        "dimensions": {
            "width": 200,
            "height": 200
        }
    }
}; 

// third graphic (clock)
 
var clock = {
    "infographic3": {
        "strokepath": [
            {
                "path": "M95.111,5.124C96.73,5.042,98.36,5,100,5   c52.467,0,95,42.533,95,95c0,52.467-42.533,95-95,95c-52.467,0-95-42.533-95-95C5,49.172,44.916,7.668,95.111,5.124",
                "duration": 1500,
                "strokeWidth" : 9,
                "strokeColor" : '#272727'
            },
            {
                "path": "M 100 4.75 L 100 14.75",
                "duration": 200,
                "strokeWidth" : 4
            },
            {
                "path": "M 100 185 L 100 195",
                "duration": 200,
                "strokeWidth" : 4
            },
            {
                "path": "M 195 100 L 185 100",
                "duration": 200,
                "strokeWidth" : 4
            },
            {
                "path": "M 14.875 100 L 4.834 100",
                "duration": 200,
                "strokeWidth" : 4
            }
        ],
        "dimensions": {
            "width": 200,
            "height": 200
        }
    }
}; 

// infographic 75%

var path5 = {
    "infographic5": {
        "strokepath": [
            {
                "path" : "M100,5c52.467,0,95,42.533,95,95c0,52.467-42.533,95-95,95  c-52.467,0-95-42.533-95-95",
                "duration" : 1500,
                "strokeWidth" : 9,
                "strokeColor" : '#272727'
            }
        ],
        "dimensions": {
            "width": 200,
            "height": 200
        }
    }
}; 
 
var svgCount = 1;

function animation() {



/* == INFOGRAPHIC 1 == */

// needs refactoring.

    if(svgCount < 2) {

    $('.infographic-text').transition({y: '-135px'}, 1500, 'snap');

    $('#infographic1').lazylinepainter({
        'svgData' : path1,
    }).lazylinepainter('stamp');

    $('#infographic1-dashed').lazylinepainter({
        'svgData' : path2,
    }).lazylinepainter('paint');

    /* == INFOGRAPHIC 2 -- */

    $('#infographic2').lazylinepainter({
        'svgData' : path3,
    }).lazylinepainter('paint');

    /* == INFOGRAPHIC 3 == */

    $('#infographic3').lazylinepainter({
        'svgData' : clock,
    }).lazylinepainter('paint');

    $('#infographicClockhand1').transition({ rotate: '690deg'}, 3000);
    $('#infographicClockhand2').transition({ rotate: '630deg'}, 1500);

    /* == INFOGRAPHIC 4 == */

    $('#infographic4').transition({ opacity: 1 }, 300);

    /* == INFOGRAPHIC 5 == */

    $('#infographic5').lazylinepainter({
        'svgData' : path5,
    }).lazylinepainter('paint');

    svgCount ++;

    }
}


$('#button').click(animation);

// if container element is visible trigger animation
var win = $(window);
var infoGraphicContainer = $(".infographic-container");
infoGraphicContainer.each(function(i, el) {
	var el = $(el);
	if (el.visible(true)) {
    	el.addClass("already-visible"); 
	} 
});

win.scroll(function(event) {  
	infoGraphicContainer.each(function(i, el) {
		var el = $(el);
		if (el.visible(true)) {
			$('#button').trigger('click');
		}
	});
});




/* == STATS == */
// needs refactoring

function showStats(el) {
    var statsBars = el.find('.stats-bar');
    var statsBar1 = statsBars.eq(0);
    var statsBar2 = statsBars.eq(1);
    var statsBar3 = statsBars.eq(2);
    var statsBar4 = statsBars.eq(3);
    var statsBar1Height = statsBar1.siblings('.percentage').text();
    var statsBar2Height = statsBar2.siblings('.percentage').text();
    var statsBar3Height = statsBar3.siblings('.percentage').text();
    var statsBar4Height = statsBar4.siblings('.percentage').text();

    if ( !isIE8 ) {
        statsBar1.transition({ height: statsBar1Height }, 600, 'snap');
        statsBar2.transition({ height: statsBar2Height, delay: 300 }, 600, 'snap');
        statsBar3.transition({ height: statsBar3Height, delay: 600 }, 600, 'snap');
    
        if ( typeof statsBar4 === 'object' ) {
            statsBar4.transition({ height: statsBar4Height, delay: 900 }, 600, 'snap');
        }
    } else {
        statsBar1.animate({ height: statsBar1Height }, 600);
        statsBar2.animate({ height: statsBar2Height }, 600);
        statsBar3.animate({ height: statsBar3Height }, 600);
    
        if ( typeof statsBar4 === 'object' ) {
            statsBar4.animate({ height: statsBar4Height }, 600);
        }
    }

    

}


// if container element is visible trigger animation

var allMods = $(".stats");
allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
        el.addClass("already-visible"); 
    } 
});

win.scroll(function(event) {  
    allMods.each(function(i, el) {
        var el = $(el);
        if (el.visible(true)) {
            showStats($(this));
        }
    });
});

$(function() {
    if ( allMods.hasClass('already-visible') ) {
        showStats(allMods);
    }
});


/* == MAP == */

// $('.map').//toggle
    function mapOpen() {
        $('.map-maskLayer').hide(300);
        
    }
    function mapClose() {
        $('.map-maskLayer').show(300);
    }

$('#map-button').clickToggle(mapOpen, mapClose);

//  Google maps

function initialize() {
        var mapOptions = {
            zoom: 15,
            center: new google.maps.LatLng(50.827152,-0.135551),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

        // set marker on map
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(50.827152,-0.135551),
            title: "Hello World!",
            icon: "http://methodik.co.uk/wp-content/themes/methodik/img/methodik-logo.png"
        });

        marker.setMap(map);

        var styles = [
            {
                stylers: [
                    { hue: '#000' },
                    { saturation: -100 },
                    { lightness: 2 }
                ]
            }
        ];
        map.setOptions({ styles: styles });
    }

    

    function loadScript() {
      var script = document.createElement("script");
      script.type = "text/javascript";
      script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAXKhwWp7hhkDNavQ1lH9B01feX92292O8&sensor=false&callback=initialize";
      document.body.appendChild(script);
    }

    

    window.onload = loadScript;




