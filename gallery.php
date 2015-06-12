<!-- Header of GISA website -->
<?php include("header.php"); ?>
<script>
	document.getElementById("a_gallery").className += " highlight";
</script>
<script type="text/javascript" src="js/jquery.timers-1.2.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!-- Third, add the GalleryView Javascript and CSS files -->
<script type="text/javascript" src="js/jquery.galleryview-3.0-dev.js"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.galleryview-3.0-dev.css" />

<!-- Lastly, call the galleryView() function on your unordered list(s) -->
<script type="text/javascript">
	$(function(){
		$('#myGallery').galleryView();
	});
</script>

<!-- Main page content follows the header -->
<div id="page-content" class="gallery">
	<h3>Gallery Section:</h3>
	<p>This part of the website houses some of our most memorable moments at UB.</p>
	<p>If you have albumsets/pictures of events at UB which you think are worthy to be featured on this page, mail them to <a href="mailto:sbasavar@buffalo.edu">Sharath Babu</a>.
		
	<!-- Copy from here for creating a new album and change the "src" for the thumbs and main images -->
	<hr />
	<!-- Make sure to change the Album name below -->
	<p><span style="font-weight: bold; font-size: 1.2em;">Rang De UB - Holi 2014</span> 	<br /><br />
	
	
	<ul id="myGallery">
		<li><img src="gallery/holi.jpg" alt="image" />
		
		<li><img src="gallery/holi2.jpg" alt="image" />
		<li><img src="gallery/holi3.jpg" alt="image" />
		<li><img src="gallery/holi4.jpg" alt="image" />
		<li><img src="gallery/holi5.jpg" alt="image" />
		<li><img src="gallery/holi6.jpg" alt="image" />
		<li><img src="gallery/holi7.jpg" alt="image" />
		<li><img src="gallery/holi8.jpg" alt="image" />
		<li><img src="gallery/holi9.jpg" alt="image" />
		<li><img src="gallery/holi10.jpg" alt="image" />
		<li><img src="gallery/holi11.jpg" alt="image" />
		<li><img src="gallery/holi12.jpg" alt="image" />
		<li><img src="gallery/holi13.jpg" alt="image" />
		<li><img src="gallery/holi14.jpg" alt="image" />

				
	</ul>
	
	<!--
		<div class="span-6 column rotated">
		    <a id="image1" class="cms-editable polaroid" href="#pic-1" rel="lightbox" title="Garba_1"> <img src="gallery/garba1.jpg" alt="image" /> </a>
		</div>
		<div class="span-6 column rotated">
		    <a id="image2" class="cms-editable polaroid" href="#pic-2" rel="lightbox" title="Garba_2"> <img src="gallery/garba2.jpg" alt="image" /> </a>
		</div>
		<div class="span-6 column rotated last">
		    <a id="image3" class="cms-editable polaroid" href="#pic-3" rel="lightbox" title="Garba_3"> <img src="gallery/garba3.jpg" alt="image" /> </a>
		</div>
		<div class="span-6 column rotated">
		    <a id="image4" class="cms-editable polaroid" href="#pic-4" rel="lightbox" title="Garba_4"> <img src="gallery/garba4.jpg" alt="image" /> </a>
		</div>
		<div class="span-6 column rotated">
		    <a id="image5" class="cms-editable polaroid" href="#pic-5" rel="lightbox" title="Garba_5"> <img src="gallery/garba5.jpg" alt="image" /> </a>
		</div>
		<div class="span-6 column rotated">
		    <a id="image6" class="cms-editable polaroid" href="#pic-6" rel="lightbox" title="Garba_6"> <img src="gallery/garba6.jpg" alt="image" /> </a>
		</div>
		<div class="span-6 column rotated last">
		    <a id="image7" class="cms-editable polaroid" href="#pic-7" rel="lightbox" title="Garba_7"> <img src="gallery/garba7.jpg" alt="image" /> </a>
		</div>
		
		<div id="pic-1">
		    <img src="gallery/garba1.jpg" alt="image" />
		</div>
		<div id="pic-2">
		    <img src="gallery/garba2.jpg" alt="image" />
		</div>
		<div id="pic-3">
		    <img src="gallery/garba3.jpg" alt="image" />
		</div>
		<div id="pic-4">
		    <img src="gallery/garba4.jpg" alt="image" />
		</div>
		<div id="pic-5">
		    <img src="gallery/garba5.jpg" alt="image" />
		</div>
		<div id="pic-6">
		    <img src="gallery/garba6.jpg" alt="image" />
		</div>
		<div id="pic-7">
		    <img src="gallery/garba7.jpg" alt="image" />
		</div>
		<!-- Copy till here for every new album -->
		
		<!-- Do not touch anything after this -->
</div>


<!-- Then comes the spider.. I mean the "sidebar" -->


<!-- And the footer wraps it all -->
<?php include("footer.php"); ?>
	
