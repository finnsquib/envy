<?php
	include '../includes/header.php';
?>

<title>Price list</title>

</head>
<body>
<div id="bodywrapper">
    <div id="rwytop">
       <div id="rwycenter">
      		<h2><img src="../images/rwy_link_text.png" alt="royal william yard heading"></h2>
       </div>
    </div>
    <div id="mainimage">
    	<div id="centermenu">
    		<div id='cmenu'>
			    <div id="cmenutitle"><h3 id="pricelisttitle">PRICE LIST</h3></div>
			    <ul id='removable'>
			        <li class="slider" id='styling'>STYLING</li>
			        <li class="slider" id='cutting'>CUTTING</li>
			        <li class="slider" id='colours'>COLOURS</li>
			        <li class="slider" id='techcolours'>TECHNICAL COLOURS</li>
			        <li class="slider" id='junior'>JUNIOR</li>
			        <li class="slider" id='gents'>GENTS</li>
			        <li class="slider" id='over65s'>OVER 65'S</li>
			        <li class="slider scrollbar" id='academystylings'>ACADEMY STYLING</li>
			        <li class="slider" id='hairextensions'>HAIR EXTENSIONS</li>
			        <li class="slider" id='perms'>PERMS</li>
			    </ul>
			</div>
    	</div>
        <div id="teampanel">
			<?php
				include 'styling.php';
				include 'cutting.php';
				include 'colours.php';
				include 'techcolours.php';
				include 'junior.php';
				include 'gents.php';
				include 'over65s.php';
				include 'academystyling.php';
				include 'hairextensions.php';
				include 'perms.php';
			?>
    	</div>
    </div>
    <script>
    slideright();

    // if ie8..
    if (document.all && document.querySelector && !document.addEventListener)
    {
    	hideItems();
    }
    </script>
<?php   
	include 'footer.php';
?>