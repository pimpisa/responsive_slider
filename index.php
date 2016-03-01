<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> Slider with control</title>
		<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript">
			
			$(function(){
				
				$('#play').click(function() { $('#slider').cycle('resume'); return false;});
				$('#pause').click(function() { $('#slider').cycle('pause'); return false;});
				
			
			$('#slider').cycle({
				
				fx:      'scrollHorz',
				next:    '#next',
				prev:    '#prev',
				pager:   '#pager',
				timeout: 3000,
				speed:   900,
				pause: 1
				
			});
		});	
		</script>		
		<style type="text/css">
			#hero{
				width:859px;
				height:667px;
				display:block;
				position:relative;
				margin:auto;
			}
			#slider{
				width:859px;
				height:667px;
				display:block;
				position:absolute;
				overflow:hidden;
			}
			.info{
				width:960px;
				height:80px;
				display:none;
				position:relative;
				bottom:100px;				
				background:rgb(247, 178, 37);
				z-index:99;				
			}
			.info h2{
				font-family:sans-serif;
				font-size:20px;
				font-weight:bold;
				color:#fff;
				padding:15px 0 0 20px;
			}
			.info p{
				font-family:sans-serif;
				font-size:15px;
				font-weight:ligher;
				color:#fff;
				padding:0 0 0 20px;
			}
			#play{
				width:40px;
				height:40px;
				line-height:40px;
				text-align:center;
				display:block;
				position:absolute;
				top:0;
				right:44px;
				background:rgba(252,221,16,0.5);
				color:#fff;	
				cursor:pointer;	
				z-index:999;
				transform:rotate(90deg);
				-webkit-transform:rotate(90deg);					
			}
			#pause{
				width:40px;
				height:40px;
				line-height:40px;
				text-align:center;
				display:block;
				position:absolute;
				top:0;
				right:88px;
				background:rgba(252,221,16,0.5);
				color:#fff;	
				cursor:pointer;	
				z-index:999;
				/*transform:rotate(90deg);
				-webkit-transform:rotate(90deg);*/				
			}
			#next{
				width:40px;
				height:40px;
				line-height:40px;
				text-align:center;
				display:block;
				position:absolute;
				top:0;
				right:0;
				background:rgba(252,221,16,0.5);
				color:#fff;	
				cursor:pointer;	
				z-index:999;				
			}
			#prev{
				width:40px;
				height:40px;
				line-height:40px;
				text-align:center;
				display:block;
				position:absolute;
				top:0;
				right:133px;
				background:rgba(252,221,16,0.5);
				color:#fff;	
				cursor:pointer;	
				z-index:999;				
			}
			#pager{
				width:100%;
				text-align:left;
				display:block;
				position:absolute;
				cursor:pointer;
				z-index:999;				
			}
			#pager a{
				font-size:.0em;
				color:transparent;
				width:10px;
				height:10px;
				display:inline-block;
				position:relative;
				border:1px solid #fff;
				border-radius:20px;
				background:transparent;
				margin:10px;
			}

			#pager a.activeSlide { background:#fff;}
		</style>
	</head>
	<body>
		<div id="hero">
		
			<div id="pager"></div>
			<div id="pause">| |</div>
			<div id="play">&Delta;</div>
			<div id="next">&rang;</div>
			<div id="prev">&lang;</div>
						
			<div id="slider">
				<div class="items">
					<img src="images/slider_1.jpg">
						<div class="info">
							<h2>The Description</h2>
							<p>Slogan</p>
						</div>
					
				</div><!-- end items class-->
				<div class="items">
					<img src="images/morgant.jpg">
						<div class="info">
							<h2>The Description</h2>
							<p>Slogan</p>
						</div>				
				</div><!-- end items class-->
				<div class="items">
					<img src="images/best-friendst4.jpg">
						<div class="info">
							<h2>The Description</h2>
							<p>Slogan</p>
						</div>					
				</div><!-- end items class-->
				<div class="items">
					<img src="images/desert-dogst4.jpg">
						<div class="info">
							<h2>The Description</h2>
							<p>Slogan</p>
						</div>					
				</div><!-- end items class-->
				<div class="items">
					<img src="images/best-friendst4.jpg">
						<div class="info">
							<h2>The Description</h2>
							<p>Slogan</p>
						</div>					
				</div><!-- end items class-->
				<div class="items">
					<img src="images/finleyt2.jpg">
						<div class="info">
							<h2>The Description</h2>
							<p>Slogan</p>
						</div>					
				</div><!-- end items class-->
				<div class="items">
					<img src="images/puppyt4.jpg">
						<div class="info">
							<h2>The Description</h2>
							<p>Slogan</p>
						</div>					
				</div><!-- end items class-->
				<div class="items">
					<img src="images/ricky-taylort4.jpg">
						<div class="info">
							<h2>The Description</h2>
							<p>Slogan</p>
						</div>					
				</div><!-- end items class-->				
			</div><!-- end slider id -->		
		</div><!-- end Hero id -->
	</body>
</html>