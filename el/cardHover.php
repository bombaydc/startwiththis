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
    </style>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript">
    $("document").ready(function() {
        $(".card_blk").mousemove(function(e) {
            var el = $(this).find(".clip")
            var x = e.pageX - this.offsetLeft;
            var y = e.pageY - this.offsetTop;

            //console.log(x +', '+ y);	
            //console.log(e.pageX +', '+ this.offsetLeft);
            //console.log(e.pageY +', '+ this.offsetTop);	

            var width = $(this).innerWidth();
            var height = $(this).innerHeight();

            if (x > width / 2) {
                width = width / 2;
                x = (width - x);
                x = -Math.abs(x);
            } else {
                width = width / 2;
                x = (width - x);
            }

            if (y > height / 2) {
                height = height / 2;
                y = (height - y);
                y = -Math.abs(y);
            } else {
                height = height / 2;
                y = (height - y);

            }

            //console.log(x + "," + y);
            el.eq(0).css("transform", "translate3d(" + x / 36 + "px, " + y / 36 + "px, 0px)");
            el.eq(1).css("transform", "translate3d(" + x / 27 + "px, " + y / 27 + "px, 0px)");
            el.eq(2).css("transform", "translate3d(" + x / 23 + "px, " + y / 36 + "px, 0px)");
            el.eq(3).css("transform", "translate3d(" + x / 33 + "px, " + y / 33 + "px, 0px)");
            el.eq(4).css("transform", "translate3d(" + x / 30 + "px, " + y / 30 + "px, 0px)");
            el.eq(5).css("transform", "translate3d(" + x / 31 + "px, " + y / 31 + "px, 0px)");

            // $(this).find(".clip").eq(0).css("transform", "translate3d("+ x/13 +"px, "+ y/13 +"px, 0px)");
            // $(this).find(".clip").eq(1).css("transform", "translate3d("+ x/5 +"px, "+ y/5 +"px, 0px)");
            // $(this).find(".clip").eq(2).css("transform", "translate3d("+ x/3 +"px, "+ y/3 +"px, 0px)");
            // $(this).find(".clip").eq(3).css("transform", "translate3d("+ x/1 +"px, "+ y/1 +"px, 0px)");
            // $(this).find(".clip").eq(4).css("transform", "translate3d("+ x/13 +"px, "+ y/13 +"px, 0px)");
            // $(this).find(".clip").eq(5).css("transform", "translate3d("+ x/9 +"px, "+ y/9 +"px, 0px)");
        });

        $(".secBg").mouseout(function(e) {
            $(this).find(".clip").css("transform", "translate3d(0px, 0px, 0px)");
            //$(this).css("transform", "translate3d(0px, 0px, 0px)");
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
	        <div class="card_blk">
	        	<div class="clipBg"><img src="../img/003.png" class="img-container" alt=""></div>
                <div class="clip topHover"><img src="../img/002.png" class="img-container" alt=""></div>
                <div class="clip topHover"><img src="../img/001.png" class="img-container" alt=""></div>
	        </div>
        </div>
        <!--/* body details*/-->
    </article>
</body>

</html>