<?php
	$index_json = '{
	  					"ebayconnect": {
							"displayName": "eBay <br/> Connect",
							"offsetTop": 27,
							"readmeURL": "https://github.scm.corp.ebay.com/spadmanabhan/ebayconnect/blob/master/README.md",
							"demoURL": "/ebayconnect?user=senthil&title=Bugatti%20Veyron",
							"sourceURL": "https://github.scm.corp.ebay.com/spadmanabhan/ebayconnect",
							"description": "eBay Connect started as a 2 day Hackathon project by four eBay engineers"
						},
						"3dwebphysics": {
							"displayName": "3D Web Physics",
							"offsetTop": 27,
							"readmeURL": "https://github.com/senthilp/3dwebphysics/blob/master/README.md",
							"demoURL": "/3dwebphysics/carousel",
							"sourceURL": "https://github.com/senthilp/3dwebphysics",
							"description": "Impressed by the Intro to CSS 3D transforms article by David DeSandro, this project"
						},
						"scriptloader": {
							"displayName": "Script <br/> Loader",
							"offsetTop": 27,
							"readmeURL": "https://raw.github.com/senthilp/scriptloader/master/README",
							"demoURL": "/scriptloader/demo",
							"sourceURL": "https://github.com/senthilp/scriptloader",
							"description": "ScriptLoader is a simple JavaScript loader utility API which downloads scripts in parallel with"
						},
						"ImageURIGen": {
							"displayName": "Data URI <br/> Sprites",
							"offsetTop": 27,
							"readmeURL": "https://raw.github.com/senthilp/ImageURIGen/master/README",
							"demoURL": "/services/urigen?params={\"images\":[\"http://images.apple.com/mac/home/images/productbrowser/macbookpro.jpg\"]}",
							"sourceURL": "https://github.com/senthilp/ImageURIGen",
							"description": "ImageURIGen (Image Data URI generator) is a simple web service which generates base64 encoded"
						},
						"cachewarmer" : {
							"displayName": "Cache <br/> Warmer",
							"offsetTop": 27,
							"readmeURL": "https://raw.github.com/senthilp/cachewarmer/master/README",
							"demoURL": "/cw/dashboard",
							"sourceURL": "https://github.com/senthilp/cachewarmer",
							"description": "CacheWarmer is built on the concept of using browser idleness as a playground to pre-fetch"
						},
						"picman": {
							"displayName": "PicMan",
							"offsetTop": 35,
							"readmeURL": "https://raw.github.com/senthilp/picman/master/README",
							"demoURL": "/picman/arena",
							"sourceURL": "https://github.com/senthilp/picman",
							"description": "PicMan (Picture Manager) application is a JavaScript based picture uploader utility which"
						}
					}';

	$archive_json = '{
						"smartbuttons": {
							"displayName": "Smart <br/> Buttons",
							"offsetTop": 27,
							"readmeURL": "https://raw.github.com/senthilp/smartbuttons/master/README",
							"demoURL": "/smartbuttons/button",
							"sourceURL": "https://github.com/senthilp/smartbuttons",
							"description": "SmartButton is a project which showcases various UI treatments for HTML buttons"
						},
						"impress": {
							"displayName": "Impress",
							"offsetTop": 35,
							"readmeURL": "https://raw.github.com/senthilp/impress/master/README",
							"demoURL": "/impress/presentation",
							"sourceURL": "https://github.com/senthilp/impress",
							"description": "Impress project uses impress.js framework library to create a web based powerpoint presentation"
						},
						"bigpipe": {
							"displayName": "Big Pipe",
							"offsetTop": 35,
							"readmeURL": "https://raw.github.com/senthilp/bigpipe/master/README",
							"demoURL": "/bigpipe/dialup",
							"sourceURL": "https://github.com/senthilp/bigpipe",
							"description": "BigPipe, a web performance buzzword coined by Facebook is a technique of building web pages in"
						},
						"dnsPrefetch": {
							"displayName": "DNS <br/> Prefetch",
							"offsetTop": 27,
							"readmeURL": "https://github.com/h5bp/html5-boilerplate/wiki/DNS-Prefetching ",
							"demoURL": "http://www.ebay.com/motors",
							"sourceURL": "https://github.com/h5bp/html5-boilerplate/wiki/DNS-Prefetching ",
							"description": "DNS Prefetching is a method of informing the browser of domain names referenced on"
						},
						"finder": {
							"displayName": "Finder",
							"offsetTop": 35,
							"readmeURL": "https://raw.github.com/senthilp/finder/master/README",
							"demoURL": "/finder/demo",
							"sourceURL": "https://github.com/senthilp/finder",
							"description": "Finder is a JavaScript based module to provide a intuitive navigation is a tree based"
						}

					}';
	$bArchive = false;
	if(isset($_GET['mode'])) {
		$bArchive = $_GET['mode'] === "archive";
	}
	$archiveDisplay = $bArchive?'class="hide"':'';
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="shortcut icon" href="http://nfs.corp.ebay.com/favicon.ico" />
	<title>Need for Speed - Techniques, Tips & Tricks on SITE SPEED</title>
	<link rel="prerender" href="http://twitter.com/#!/senthil_hi" />
	<style type="text/css">
		body, h1, header, hgroup, h2, footer {
			margin: 0;
			display: block;
		}
		body {
			font-family: Arial,Helvetica,sans-serif;
			font-size: 12px;
			background-color: #F0F0F0;
		}
		header {
			background-color: #9DC4DB;
			color: #000000;
			height: 105px;
		}
		header, footer, .content {
			width: 100%;
		}
		.banner {
			height: 72px;
			line-height: 72px;
		}
		.inner {
			width: 990px;
			margin: 0 auto;
		}
		.h1 {
			text-align: center;
			font: italic 46px Sans MS;
			padding: 10px 0;
		}
		.info {
			background-color: #74B0D3;
			z-index: 3;
			line-height: 33px;
			height: 33px;
		}
		.h2 {
			font-family: 'MuseoCustom','Century Gothic',Arial,Helvetica,sans-serif;
			text-align: center;
			font-size: 16px;
			font-weight: normal;
		}
		.h3 {
			font-size: 13px;
		}
		.clear {
			clear: both;
		}
		.hide {
			display: none;
		}
		footer .h2, footer a {
			color: #000000;
			font-size: 13px;
		}
		footer .info {
			background-color: #78B2D8;
		}
		footer img {
			vertical-align: middle;
			width: 18px;
			border: none;
		}
		.content .main{
			background-color: #FFFFFF;
			padding-bottom: 20px;
		}
		a {
			text-decoration: none;
		}
		.link a {
			font-weight: bold;
			color: purple;
		}

		.keylet {
			position: relative;
			margin: 20px 30px 20px;
			float: left;
		}
		.keylet .round {
			height: 90px;
			width: 90px;
			border: 7px solid #78B2D8;
			border-radius: 50%;
			text-align: center;
			font-weight: bold;
		}
		.keylet .round a {
			color: #000000;
		}
		.keylet .rect {
			position: absolute;
			left: 88px;
			left: 97px\9;
			top: 18px;
			border: 7px solid #78B2D8;
			border-left: 0;
			background-color: #FFFFFF;
			height: 54px;
			width: 300px;
			font-family: Arial,Helvetica,sans-serif;
    		border-radius: 5px;
		}
		.keylet .rect .link {
			float: right;
			margin: 3px 5px 0 0;
		}
		.keylet .rect .text {
			color: #666666;
			margin: 5px 5px 0;
		}
		.archive {
			text-align: right;
			margin-right: 62px;
		}
		.vertical {
			clear: left;
		}
		.horizontal {
			margin-left: 370px;
		}
		/* Twitter widget styles */
		.twitter {
			overflow:hidden;
		}
		.twitter .twtr-hd {
			padding: 3px 9px;
		}
		.twitter .twtr-ft{
			display: none !important;
		}
		.twitter #twtr-widget-1 .twtr-doc,
		.twitter #twtr-widget-1 .twtr-hd a,
		.twitter #twtr-widget-1 h3,
		.twitter #twtr-widget-1 h4 {
			background-color: #FFFFFF !important;
		}
		.twitter #twtr-widget-1 h3 {
			font-family: Arial,Helvetica,sans-serif !important;
    		font-size: 12px !important;
    		font-weight: bold !important;
		}
		/* The transition effects from :hover -> normal */
		.bubble {
			height: 104px;
			width: 104px;
			display: inline-block;
			position: absolute;
			left: 0;
			top: 0;
			opacity: 0.09;
			filter: alpha(opacity=9);
			border: 52px solid #9DC4DB;
			border-radius: 50%;
			-webkit-box-sizing: border-box;
  			-moz-box-sizing: border-box;
  			box-sizing: border-box;
  			-webkit-transition: 0s ease;
  			-moz-transition: 0s ease;
  			-ms-transition: 0s ease;
  			-o-transition: 0s ease;
  			transition: 0s ease;
		}
		/* The tran;sition from normal > :hover */
		.bubble:hover {
			border-width: 0;
			opacity: 1;
			border-color: #9DC4DB;
	  		-webkit-transition-duration:0.7s;
	  		-moz-transition-duration:0.7s;
	  		-ms-transition-duration:0.7s;
	  		-o-transition-duration:0.7s;
	  		transition-duration:0.7s;
		}
	</style>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<header <?php echo $archiveDisplay; ?>>
		<div class="inner">
			<div class="banner">
				<h1 class="h1">Need for Speed</h1>
			</div>
			<div class="info">
				<h2 class="h2">Techniques, Tips & Tricks on SITE SPEED</h2>
			</div>
		</div>
	</header>
	<div class="content">
		<div class="inner main" id="main">
			<div class="keylets">
				<?php echo generateKeylets($bArchive?$archive_json: $index_json); ?>
			</div>
			<div class="clear archive link"><a href="index.php?mode=archive" <?php echo $archiveDisplay; ?>>Archive >>></a></div>
		</div>
	</div>
	<footer <?php echo $archiveDisplay; ?>>
		<div class="twitter inner clear">
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
			new TWTR.Widget({
			  version: 2,
			  type: 'search',
			  search: 'from:souders OR from:stoyanstefanov OR from:dalmaer OR from:slicknet OR from:paul_irish OR from:senthil_hi OR from:tonygentilcore OR from:jeresig OR from:DmitrySoshnikov OR from:desandro OR from:ericlaw OR from:littlecalculist OR from:dylans OR from:jsmarr OR from:stubbornella OR from:ryah OR from:t OR from:mranney OR from:ls_n OR from:yaypie OR from:davglass OR sitespeed OR jsperf OR webperf OR webperformance',
			  interval: 10000,
			  title: 'What\'s happening in SiteSpeed...',
			  subject: '',
			  width: 990,
			  height: 112,
			  theme: {
			    shell: {
			      background: '#8ec1da',
			      color: '#000000'
			    },
			    tweets: {
			      background: '#ffffff',
			      color: '#444444',
			      links: '#1985b5'
			    }
			  },
			  features: {
			    scrollbar: false,
			    loop: true,
			    live: true,
			    behavior: 'default'
			  }
			}).render().start();
			</script>
		</div>
		<div class="inner info">
			<div class="h2">
				<a href="http://myhub.corp.ebay.com/Person.aspx?accountname=corp\spadmanabhan">senthil padmanabhan</a> |
				<a href="http://www.ebay.com/mtr">eBay Motors PD</a> |
				<a href="mailto:spadmanabhan@ebay.com?subject=nfs:">spadmanabhan@ebay.com</a> |
				<a href="http://twitter.com/#!/senthil_hi" target="_blank"><img src="data:image/png;base64,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"></img> senthil_hi</a>
			</div>
		</div>
	</footer>
	<script>
		/**
		 * Utility class
		 *
		 * @class Utils
		 * @singleton
		 *
		 */
		var Utils = {
			/**
		     * Opens a window popup for the given url.
		     *
		     * @method popup
		     *
		     * @public
		     */
			popup: function(url) {
				window.open(url, 'readme',
		         'toolbar=0,scrollbars=1,location=0,statusbar=1,menubar=0,resizable=1,width=680,height=500,left=0,top=0'
		         );
			},
			/**
		     * Gets the current window size (height & width)
		     *
		     * @method getWinSize
		     * @return object {height, width}
		     *
		     * @public
		     */
			getWinSize: function() {
		    	var win = window,
		    		d = document,
		    	 	h = win.innerHeight,
		    	 	w = win.innerWidth,
		    	 	mode = d.compatMode,
		    	 	root = d.documentElement;
				if ( mode && !win.navigator.userAgent.match(/Opera/) ) { // IE, Gecko
     				if (mode != 'CSS1Compat') { // Quirks
     					root = d.body;
     				}
     				h = root.clientHeight;
     				w = root.clientWidth;
     			}
		    	return {
	    	 		height: h,
	    	 		width: w
	    	 	};
			}
		};
		// Anonymous function to attach flex events
		(function() {
			var mainContainer = document.getElementById("main"),
				bArchive = <?php echo $bArchive?1:0 ?>,
				/**
			     * Flexes the main container based on window height
			     *
			     * @method flexMain
			     *
			     * @private
			     */
				flexMain = function() {
					var winHeight = Utils.getWinSize().height,
						mainHeight = 430,
						maxHeight = winHeight - 290,
						height = 0;
					if(bArchive) {
						height = winHeight - 20; // remove the padding
					} else if(maxHeight > mainHeight) {
						height = maxHeight;
					}
					if(height) {
						mainContainer.style.height = height + 'px';
					}
				};

			// Whwn window resize call flexMain
			window.onresize = function() {
				flexMain();
			};
			// Call flexMain to adjust footer on page load
			flexMain();
		})();
	</script>
</body>
</html>
<?php
	function generateKeylets($index_json) {
		$indexArr = json_decode($index_json, true);
		$html = array();
		$index = 0;
		foreach($indexArr as $key => $value) {
			$pos = ($index%2 == 0)? "vertical": "horizontal";
			$html[] = buildKeylet($value, $pos);
			$index++;
		}
		return implode("\n", $html);
	}

	function buildKeylet($model, $pos) {
		$html = array();
		$html[] = '<div class="keylet '.$pos.'">';
		$html[] = '<a href="'.$model["readmeURL"].'" class="bubble" onclick="Utils.popup(this.href); return false;"></a>';
		$html[] = '<div class="round">';
		$html[] = '<div style="margin-top: '.$model["offsetTop"].'px;">';
		$html[] = '<h3 class="h3">';
		$html[] = '<a href="'.$model["readmeURL"].'" onclick="Utils.popup(this.href); return false;">';
		$html[] = $model["displayName"];
		$html[] = '</a>';
		$html[] = '</h3>';
		$html[] = '</div>';
		$html[] = '</div>';
		$html[] = '<div class="rect">';
		$html[] = '<div class="text clear">';
		$html[] = substr($model["description"], 0, strrpos(substr($model["description"], 0, 85), ' ')).'...';
		$html[] = '<a href="'.$model["readmeURL"].'" onclick="Utils.popup(this.href); return false;">Read more</a>';
		$html[] = '</div>';
		$html[] = '<div class="link">';
		$html[] = '<a href='.$model["demoURL"].'>Demo</a> | <a href="'.$model["sourceURL"].'" target="_blank">Source</a>';
		$html[] = '</div>';
		$html[] = '</div>';
		$html[] = '</div>';

		return implode("\n", $html);
	}
?>