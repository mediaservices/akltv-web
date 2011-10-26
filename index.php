<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>AlaskaLegislature.tv -- The Alaska Legislature's streaming media portal</title>
		
		<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
		<link rel="home" href="http://alaskalegislature.tv" title="Home" />
		
		<link rel="stylesheet" href="styles/default.css" type="text/css" media="screen, projection" charset="utf-8" />
		
		<!-- google font loaders -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>		
		<!-- end google font loeaders -->
		
		<!-- jquery css-->
		<link rel="stylesheet" href="styles/jquery-ui-1.8.16.custom.css" type="text/css" media="screen, projection" charset="utf-8" />
		<!-- end jquery css -->
		
		<meta http-equiv='expires' content='-1' />
		
		<meta http-equiv='pragma' content='no-cache' />
		<meta name='robots' content='all' />
		<meta name='description' content="The Alaska Legislature's streaming media portal" />
		<meta name="keywords" content="alaska senate house streaming audio video committee meetings" />
		
		<!-- jquery & jquery ui-->
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
		<!-- end jquery -->

		<!-- jw player -->
		<script type="text/javascript" src="scripts/jwplayer.js"></script>
		<!-- end jwplayer -->
		
		<!-- twitter feed -->
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
		<!-- end twitter feed -->

	</head>
	
	<header></header>
	
	<body>
		<!-- page specific javascript-->
		<script type="text/javascript">
			//<![CDATA[ 
			$(document).ready(function () {
				//window.setInterval(updateCurrent, 10000);
				$('#tabs').tabs();
				
				//start jwplayer
				jwplayer("player").setup({
					flashplayer: "scripts/player.swf"
				});			
			});	
				//start twitter stream
				twttr = /*new TWTR.Widget(*/{
					version: 2,
					type: 'profile',
					rpp: 15,
					interval: 30000,
					width: 250,
					height: 300,
					theme: {
						shell: {
							background: '#333333',
							color: '#ffffff'
						},
						tweets: {
						background: '#4a494a',
						color: '#ffffff',
						links: '#e0b509'
						}
					},
					features: {
						scrollbar: true,
						loop: false,
						live: false,
						behavior: 'all'
					}
				}/*).render().setUser('aklegislature').start()*/; //*/
			// ]]> 
		</script>
		
		<div id="content">
			<!-- load JW Player -->
			<video 
			    src="/videos/video.m4v" 
			    height="360"
			    id="player"
			    width="640">
			</video>
			<!-- End load jwplayer -->
			
			<div id="tabs">
				<ul>
					<li><a href="_live.php"><span>Live</span></a></li>
					<li><a href="_schedule.php"><span>Upcoming</span></a></li>
				</ul>	
			</div>
			
			<div id="twitter">
				<script type="text/javascript">
					//new TWTR.Widget(twttr).render().setUser('aklegislature').start();
				</script>
			</div>
			
		</div>
	
	<!-- end page specific javascript -->
	</body>


	<!-- Google Analytics -->
	<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-19402664-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
	</script>
	<!-- End Google Analytics -->

</html>
