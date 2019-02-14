<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/boot_custom.css">
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="../js/masonry.pkgd.min.js"></script>
    <script>
    $(function() {
      $('.grid').masonry({
        // options
        itemSelector: '.grid-item'
      });
      $(".grid-item").on('click', function(event) {
        event.preventDefault();
        $(this).addClass('open');
        
      });
    });
    </script>
    <style>
    .grid{position: relative;}
    .grid-item{
      width: 33.33%;
      height: calc(100vh/3);
        /*width: calc(100vw/3);
      height: calc(100vh/3);*/
      background-color: #f00;
      -webkit-transition: all 0.8s;
      -o-transition: all 0.8s;
      transition: all 0.8s;
      z-index: 1;
    }
    .grid-item:nth-child(even){
      background-color: #00f;
    }
    .grid-item.open{
      width: 100%;
      height: 100%;
      left: 0 !important;
      top: 0 !important;
      z-index: 10;
    }
    </style>
</head>

<body>
    <div id="container">

      <div class="grid">
          <div class="grid-item">...</div>
          <div class="grid-item">...</div>
          <div class="grid-item">...</div>
          <div class="grid-item">...</div>
          <div class="grid-item">...</div>
          <div class="grid-item">...</div>
          <div class="grid-item">...</div>
          <div class="grid-item">...</div>
          <div class="grid-item">...</div>
        </div>
    </div>
</body>

</html>