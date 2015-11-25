<?php
	include '../includes/header.php';
?>

<title>Services</title>

</head>
<body>
<div id="bodywrapper">
    <div id="rwytop">
       <div id="rwycenter">
      		<h2><img src="../images/bwy_link_text.png" alt="broadway"></h2>
       </div>
    </div>
    <div id="mainimage">
    	<div id="centermenu">
    		<div id='cmenu'>
				<div><h3 id="servicestitle">SERVICES</h3></div>
				<ul id='removable'>
					<li class="slider" id='weddings'>WEDDINGS</li>
					<li class="slider" id='indulge'>INDULGE</li>
				</ul>
			</div>
    	</div>
        <div id="teampanel">
	        <?php
				include 'weddings.php';
				include 'indulge.php';
			?>
    	</div>
    </div>
    <script>
    	slideright();
    	hideItems();
    </script>
<?php   
	include 'footer.php';
?>