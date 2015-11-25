<?php
	include '../includes/header.php';
?>

<title>Promotions</title>

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
				<div><h3 id="promotionstitle">PROMOTIONS</h3></div>
			    <ul id='removable'>
			        <li class="slider" id='recommends'>RECOMMEND A FRIEND</li>
			        <li class="slider" id='loyaltys'>LOYALTY POINTS</li>
			    </ul>
			</div>
    	</div>
        <div id="teampanel">
        	<?php
				include 'recommend.php';
				include 'loyalty.php';
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