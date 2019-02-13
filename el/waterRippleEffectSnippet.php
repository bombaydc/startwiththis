<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>

<script>
   $(function () {
      let timeline = new TimelineMax({
          repeat: -1,
          yoyo: true
        }),
        feTurb = document.querySelector('#feturbulence');

      timeline.add(
        TweenMax.to(feTurb, 15, {
          onUpdate: function() {
            let bfX = this.progress() * 0.005 + 0.015, //base frequency x
              bfY = this.progress() * 0.05 + 0.1; //base frequency y
            feTurb.setAttribute('baseFrequency', `${bfX} ${bfY}`);
          }
        }), 0
      );
   });
</script>
   <style>
      body {
        background: #cfcfcf;
      }

      #container, #water {
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/lake.jpg");
        background-position: center center;
        -webkit-background-size: cover;
        background-size: cover;
      }

      #container {
        position: absolute;
        top: 0;
        left: 0;
        height:100%;
        width:100%;
      }
      /* #container:after {
        position: absolute;
        top: 10%;
        left: 2.5%;
        z-index: -1;
        content: '';
        display: block;
        height: 95%;
        width: 95%;
        background: #0f0f0f;
        -webkit-filter: blur(30px);
                filter: blur(30px);
      } */
      #container #water {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100%;
        -webkit-filter: url("#turbulence");
                filter: url("#turbulence");
        overflow: hidden;
      }

      #codepen-link {
        position: absolute;
        bottom: 30px;
        right: 30px;
        height: 40px;
        width: 40px;
        z-index: 10;
        border-radius: 50%;
        box-sizing: border-box;
        background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/logo.jpg");
        background-position: center center;
        background-size: cover;
        opacity: 0.5;
        transition: all 0.25s;
      }
      #codepen-link:hover {
        opacity: 0.8;
        box-shadow: 0 0 6px #0c0c0c;
      }


   </style>
</head>
<body>
      
   <div id="container">
     <div id="water"></div>
   </div>
   <svg xlmns="http://www.w3.org/2000/svg" version="1.1">
     <filter id="turbulence" filterUnits="objectBoundingBox" x="0" y="0" width="100%" height="100%">
       <feTurbulence id="feturbulence" type="fractalNoise" numOctaves="3" seed="2"></feTurbulence>
       <feDisplacementMap xChannelSelector="G" yChannelSelector="B" scale="20" in="SourceGraphic"></feDisplacementMap>
     </filter>
   </svg>
   <a id="codepen-link" href="https://www.codepen.io/seanfree" target="_blank"></a>
</body>
</html>