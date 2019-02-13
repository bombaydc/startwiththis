<!doctype html>
<html lang="en">

<head>
    <title>cards Element</title>
    <link rel="stylesheet" type="text/css" href="../css/boot_custom.css">
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <style type="text/css">
        .card_blk {
            width: 300px;
            position: relative;
        }

        img.img-container {
            max-width: 100%;
        }

        .card_blk .topHover {
            position: absolute;
            top: 0;
            left: 0;
        }

		.movie { float: left; }

		.movie-list:after {
		  content: " ";
		  display: block;
		  clear: both;
		}

		.card_blk {
		  position: relative;
		  width: 250px;
		  height: 370px;
		}

		.card_blk.hover-in { transition: .3s ease-out; }

		.card_blk.hover-out { transition: .3s ease-in; }

		.movie [class*="layer"] {
		  position: absolute;
		  left: 0;
		  top: 0;
		  right: 0;
		  bottom: 0;
		  border-radius: 10px;
		}

		.movie .layer-1 {
		  background-image: url(../img/003.png);
		  background-size: cover;
		}

		.movie .layer-2 {
		  background-image: url(../img/002.png);
		  background-size: cover;
		  -webkit-transform: translateZ(30px);
		  transform: translateZ(30px);
		}

		.movie .layer-3 {
		  background-image: url(../img/001.png);
		  background-size: cover;
		  -webkit-transform: translateZ(50px);
		  transform: translateZ(50px);
		}

		.movie .shine { border-radius: 10px; }

    </style>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript">
    (function($) {

        $.fn.hover3d = function(options) {

            var settings = $.extend({
                selector: null,
                perspective: 1000,
                sensitivity: 20,
                invert: false,
                shine: false,
                hoverInClass: "hover-in",
                hoverOutClass: "hover-out"
            }, options);

            return this.each(function() {

                var $this = $(this),
                    $card = $this.find(settings.selector);

                if (settings.shine) {
                    $card.append('<div class="shine"></div>');
                }
                var $shine = $(this).find(".shine");

                // Set perspective and transformStyle value
                // for element and 3d object	
                $this.css({
                    perspective: settings.perspective + "px",
                    transformStyle: "preserve-3d"
                });

                $card.css({
                    perspective: settings.perspective + "px",
                    transformStyle: "preserve-3d",
                });

                $shine.css({
                    position: "absolute",
                    top: 0,
                    left: 0,
                    bottom: 0,
                    right: 0,
                    "z-index": 9
                });

                // Mouse Enter function, this will add hover-in
                // Class so when mouse over it will add transition
                // based on hover-in class
                function enter() {
                    $card.addClass(settings.hoverInClass);

                    setTimeout(function() {
                        $card.removeClass(settings.hoverInClass);
                    }, 1000);
                }

                // Mouse movement Parallax effect
                function move(event) {
                    var w = $this.innerWidth(),
                        h = $this.innerHeight(),
                        ax = settings.invert ? (w / 2 - event.offsetX) / settings.sensitivity : -(w / 2 - event.offsetX) / settings.sensitivity,
                        ay = settings.invert ? -(h / 2 - event.offsetY) / settings.sensitivity : (h / 2 - event.offsetY) / settings.sensitivity;
                    dy = event.offsetY - h / 2,
                        dx = event.offsetX - w / 2,
                        theta = Math.atan2(dy, dx),
                        angle = theta * 180 / Math.PI - 90;

                    if (angle < 0) {
                        angle = angle + 360;
                    }


                    $card.css({
                        perspective: settings.perspective + "px",
                        transformStyle: "preserve-3d",
                        transform: "rotateY(" + ax + "deg) rotateX(" + ay + "deg)"
                    });

                    $shine.css('background', 'linear-gradient(' + angle + 'deg, rgba(255,255,255,' + event.offsetY / h * .5 + ') 0%,rgba(255,255,255,0) 80%)');
                }

                // Mouse leave function, will set the transform
                // property to 0, and add transition class
                // for exit animation
                function leave() {
                    $card.addClass(settings.hoverOutClass);
                    $card.css({
                        perspective: settings.perspective + "px",
                        transformStyle: "preserve-3d",
                        transform: "rotateX(0) rotateY(0)"
                    });
                    setTimeout(function() {
                        $card.removeClass(settings.hoverOutClass);
                    }, 1000);
                }

                // Mouseenter event binding
                $this.on("mouseenter", function() {
                    return enter();
                });

                // Mousemove event binding
                $this.on("mousemove", function(event) {
                    return move(event);
                });

                // Mouseleave event binding
                $this.on("mouseleave", function() {
                    return leave();
                });

            });

        };

    }(jQuery));
    $("document").ready(function() {
        $(".movie").hover3d({
			selector: ".card_blk",
			shine: true,
			sensitivity: 20,
		});
    });

   
    </script>
</head>

<body style="background:#eee;">
    <!--/*<header>*/-->
    <!--/*</header>*/-->
    <article class="section_container">
        <!--/*<!--body details*/-->
        <div class="container">
        	<!-- <div class="movie">
		        <div class="card_blk">
		        	<div class="clipBg"><img src="../img/003.png" class="img-container" alt=""></div>
	                <div class="clip topHover"><img src="../img/002.png" class="img-container" alt=""></div>
	                <div class="clip topHover"><img src="../img/001.png" class="img-container" alt=""></div>
		        </div>
	        </div> -->
        <div class="movie">
				<div class="card_blk">
					<div class="layer-1"></div>
					<div class="layer-2"></div>
					<div class="layer-3"></div>
				</div>
			</div>
        </div>
        <!--/* body details*/-->
    </article>
</body>

</html>