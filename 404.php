<!-- Header of GISA website -->
<?php include("header.php"); ?>
<script>
	document.getElementById("a_home").className += " ";
</script>


<!-- Main page content follows the header -->
<div id="page-content">
<h1 class="fourohfour">404 Not Found <span frown>:(</span></h1>
   <div>
       <p>Sorry, but the page you were trying to view does not exist.</p>
       <p>It looks like this was the result of either:</p>
       <ul>
           <li>a mistyped address</li>
           <li>an out-of-date link</li>
       </ul>
		<p><a href="javascript:history.back()">Click here</a> to go back to the last visited working page.</p>
   </div>
</div>

<!-- Then comes the spider.. I mean the "sidebar" -->
<?php include("sidebar.php"); ?>

<!-- And the footer wraps it all -->
<?php include("footer.php"); ?>
	