<!doctype html>
<html lang="en">
	<head>
		<title>cards Element</title>
		
		<link rel="stylesheet" type="text/css" href="../css/boot_custom.css">
		<link rel="stylesheet" type="text/css" href="../css/global.css">
		<style type="text/css">
			body {
			padding: 5%;
			}
			.box {
			height: 5.5em;
			background: #eee;
			border: 1px solid #ccc;
			padding: 0.5em 1em;
			margin-right: 30px;
			margin-bottom: 30px;
			overflow: hidden;
			float: left;
			}
			.box--fixed {
			width: 130px;
			}
			.box--responsive {
			width: 30%;
			}
			/* necessary plugin styles */
			
			.ellip {
			display: block;
			height: 100%;
			}
			.ellip-line {
			display: inline-block;
			text-overflow: ellipsis;
			white-space: nowrap;
			word-wrap: normal;
			}
			.ellip,
			.ellip-line {
			position: relative;
			overflow: hidden;
			max-width: 100%;
			}
			
			/* necessary plugin styles */
		</style>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
	 <script type="text/javascript">
			/*!
			* jQuery.ellipsis
			* https://github.com/jjenzz/jquery.ellipsis
			* adds a class to the last 'allowed' line of text so you can apply
			* text-overflow: ellipsis;
			*/
		$(function(a){if(typeof define==="function"&&define.amd){define(["jquery"],a)}else{a(jQuery)}}(function(d){var c="ellipsis",b='<span style="white-space: nowrap;">',e={lines:"auto",ellipClass:"ellip",responsive:false};function a(h,q){var m=this,w=0,g=[],k,p,i,f,j,n,s;m.$cont=d(h);m.opts=d.extend({},e,q);function o(){m.text=m.$cont.text();m.opts.ellipLineClass=m.opts.ellipClass+"-line";m.$el=d('<span class="'+m.opts.ellipClass+'" />');m.$el.text(m.text);m.$cont.empty().append(m.$el);t()}function t(){if(typeof m.opts.lines==="number"&&m.opts.lines<2){m.$el.addClass(m.opts.ellipLineClass);return}n=m.$cont.height();if(m.opts.lines==="auto"&&m.$el.prop("scrollHeight")<=n){return}if(!k){return}s=d.trim(m.text).split(/\s+/);m.$el.html(b+s.join("</span> "+b)+"</span>");m.$el.find("span").each(k);if(p!=null){u(p)}}function u(x){s[x]='<span class="'+m.opts.ellipLineClass+'">'+s[x];s.push("</span>");m.$el.html(s.join(" "))}if(m.opts.lines==="auto"){var r=function(y,A){var x=d(A),z=x.position().top;j=j||x.height();if(z===f){g[w].push(x)}else{f=z;w+=1;g[w]=[x]}if(z+j>n){p=y-g[w-1].length;return false}};k=r}if(typeof m.opts.lines==="number"&&m.opts.lines>1){var l=function(y,A){var x=d(A),z=x.position().top;if(z!==f){f=z;w+=1}if(w===m.opts.lines){p=y;return false}};k=l}if(m.opts.responsive){var v=function(){g=[];w=0;f=null;p=null;m.$el.html(m.text);clearTimeout(i);i=setTimeout(t,100)};d(window).on("resize."+c,v)}o()}d.fn[c]=function(f){return this.each(function(){try{d(this).data(c,(new a(this,f)))}catch(g){if(window.console){console.error(c+": "+g)}}})}}));
		$(function() {
		$('.overflow').ellipsis();
		$('.one-line').ellipsis({ lines: 1, responsive: true  });
		$('.two-lines').ellipsis({ lines: 2, responsive: true  });
		$('.three-lines').ellipsis({ lines: 3 , responsive: true });
		$('.box--responsive').ellipsis({ responsive: true });
				
			});
	 </script>
	</head>
	<body style="background:#eee;">
		<!--/*<header>*/-->
		<!--/*</header>*/-->
		<article class="section_container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
		<!--/*<!--body details*/-->
			<div class="container">
				
				<div class="box box--fixed overflow">
				No ellip. Too short.
				</div>
				
				<div class="box box--fixed one-line">
				Forcing one line regardless
				</div>
				
				<div class="box box--fixed two-lines">
				Forcing two lines of text 
				regardless of overflow
				</div>
				
				<div class="box box--fixed overflow">
				Trying to ellipsis any overflowed content. 
				The quick brown fox jumped over the lazy dogs. 
				The quick brown fox jumped over the lazy dogs.
				</div>
				
				<div class="box box--responsive">
				This is a responsive box that will update it's 
				ellipsis when the screen resizes. The quick brown 
				fox jumped over the lazy dogs. The quick brown fox 
				jumped over the lazy dogs.
				</div>
				<div class="box  three-lines">
				This is a responsive box that will update it's 
				ellipsis when the screen resizes. The quick brown 
				fox jumped over the lazy dogs. The quick brown fox 
				jumped over the lazy dogs.
				This is a responsive box that will update it's 
				ellipsis when the screen resizes. The quick brown 
				fox jumped over the lazy dogs. The quick brown fox 
				jumped over the lazy dogs.
				</div>
				
				
				
				
				
			</div>
		<!--/*<!--body details*/-->
		</article>

	</body>
</html>


