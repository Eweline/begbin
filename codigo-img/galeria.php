<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Spry Image Slideshow With Filmstrip - Basic : &lt;default&gt;</title>
<script type='text/javascript' src='Spry-UI-1.7/includes/SpryDOMUtils.js'></script>
<script type='text/javascript' src='Spry-UI-1.7/includes/SpryDOMEffects.js'></script>
<script type='text/javascript' src='Spry-UI-1.7/includes/SpryWidget.js'></script>
<script type='text/javascript' src='Spry-UI-1.7/includes/SpryPanelSelector.js'></script>
<script type='text/javascript' src='Spry-UI-1.7/includes/SpryPanelSet.js'></script>
<script type='text/javascript' src='Spry-UI-1.7/includes/SpryFadingPanels.js'></script>
<script type='text/javascript' src='Spry-UI-1.7/includes/SprySliderPanels.js'></script>
<script type='text/javascript' src='Spry-UI-1.7/includes/SpryFilmStrip.js'></script>
<script type='text/javascript' src='Spry-UI-1.7/includes/SpryImageLoader.js'></script>
<script type='text/javascript' src='Spry-UI-1.7/includes/SpryImageSlideShow.js'></script>
<script type='text/javascript' src='Spry-UI-1.7/includes/plugins/ImageSlideShow/SpryThumbnailFilmStripPlugin.js'></script>
<script type='text/javascript' src='Spry-UI-1.7/includes/plugins/ImageSlideShow/SpryTitleSliderPlugin.js'></script>
<script type='text/javascript' src='Spry-UI-1.7/includes/plugins/ImageSlideShow/SpryPanAndZoomPlugin.js'></script>
<link type='text/css' href='Spry-UI-1.7/css/ImageSlideShow/basicFS/basic_fs.css' rel='stylesheet'/>
<style type="text/css">
#ImageSlideShow {
	width: 684px;
	margin: 24px 0px 0px 0px;
	border: solid 1px #aaaaaa;
	background-color: #ffffff;
	padding-top: 10px;
}

#ImageSlideShow .ISSName {
	top: -24px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
	font-size: 18px;
	text-transform: uppercase;
	color: #aaaaaa;
}

#ImageSlideShow .ISSSlideTitle {
	top: -18px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
	font-size: 12px;
	overflow: hidden;
	color: #aaaaaa;
	text-transform: none;
}

#ImageSlideShow .ISSClip {
	height: 432px;
	margin: 0 10px 10px 10px;
	border: solid 1px #aaaaaa;
	background-color: #000000;
}

#ImageSlideShow .ISSControls {
	top: 11px;
	height: 432px;
}

#ImageSlideShow .FilmStrip {
	height: 80px;
	background-color: #cccccc;
}

#ImageSlideShow .FilmStripPreviousButton, #ImageSlideShow .FilmStripNextButton {
	width: 25px;
	height: 80px;
}

#ImageSlideShow .FilmStripTrack {
	height: 80px;
}

#ImageSlideShow .FilmStripContainer {
	height: 80px;
}

#ImageSlideShow .FilmStripPanel {
	height: 80px;
	padding-left: 10px;
	margin-right: 0px;
}

#ImageSlideShow .FilmStripPanel .ISSSlideLink {
	margin-top: 10px;
	border: solid 1px #aaaaaa;
	background-color: #ffffff;
}

#ImageSlideShow .FilmStripPanel .ISSSlideLinkRight {
	border: solid 1px #aaaaaa;
	width: 56px;
	height: 47px;
	margin: 4px 4px 4px 4px;
}

#ImageSlideShow .FilmStripCurrentPanel .ISSSlideLink {
	background-color: #ffffff;
	border-color: #ff0000;
}

#ImageSlideShow .FilmStripCurrentPanel .ISSSlideLinkRight {
	border-color: #aaaaaa;
}
</style>
</head>

<body>
<ul id="ImageSlideShow" title="Donald Booth Photography">
    <li><a href="#" title="White Orchids"><img src="img/a1.png" alt="photos-1.jpg" /></a></li>
    <li><a href="#" title="Sand"><img src="img/a2.jpg" alt="photos-10.jpg" /></a></li>
    <li><a href="#" title="Tree"><img src="img/a3.jpg" alt="photos-11.jpg" /></a></li>
    <li><a href="#" title="Canon"><img src="" alt="photos-12.jpg" /></a></li>
    <li><a href="#" title="Door"><img src="" alt="photos-13.jpg" /></a></li>
    <li><a href="#" title="Flowers at the Palace of Fine Arts"><img src="" alt="photos-14.jpg" /></a></li>
    <li><a href="#" title="Palace of Fine Arts"><img src="" alt="photos-15.jpg" /></a></li>
    <li><a href="#" title="Orchid Close Up"><img src="" alt="photos-2.jpg" /></a></li>
    <li><a href="#" title="Dirt Road"><img src="" alt="photos-3.jpg" /></a></li>
    <li><a href="#" title="Fence Post"><img src="" alt="photos-4.jpg" /></a></li>
    <li><a href="#" title="Portrait of a Horse"><img src="" alt="photos-5.jpg" /></a></li>
    <li><a href="#" title="Brown Horse"><img src="" alt="photos-6.jpg" /></a></li>
    <li><a href="#" title="Spotted Horse Head"><img src="" alt="photos-7.jpg" /></a></li>
    <li><a href="#" title="Spotted Horses"><img src="" alt="photos-8.jpg" /></a></li>
    <li><a href="#" title="Lone Horse"><img src="" alt="photos-9.jpg" /></a></li>
</ul>
<script type="text/javascript">
var ImageSlideShow = new Spry.Widget.ImageSlideShow("#ImageSlideShow", {
	widgetID: "ImageSlideShow",
	widgetClass: "BasicSlideShowFS",
	injectionType: "replace",
	autoPlay: true,
	displayInterval: 4000,
	transitionDuration: 2000,
	componentOrder: ["name", "title", "view", "controls", "links"],
	sliceMap: { BasicSlideShowFS: "3slice", ISSSlideLink: "3slice" },
	plugIns: [ Spry.Widget.ImageSlideShow.ThumbnailFilmStripPlugin, Spry.Widget.ImageSlideShow.TitleSliderPlugin, Spry.Widget.ImageSlideShow.PanAndZoomPlugin ],
	TFSP: { pageIncrement: 8, wraparound: true }
});
</script>
</body>
</html>