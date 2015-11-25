<?php
	include '../includes/header.php';
?>

<title>About Envy</title>

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
				<div class="loadsecondlevelmenu slideright" id="meet_the_team"><h3 id="aboutenvy">ABOUT ENVY</h3></div>
			    <ul id='removable'>
			        <li class="loadsecondlevelmenu slideright" id="meet_the_team">MEET THE TEAM</li>
			        <li class="slider" id="history">OUR HISTORY</li>
			    </ul>
			</div>
    	</div>
        <div id="teampanel">
        	<?php
        		include 'history.php';
        	?>
    	</div>
    </div>
	<script>slideright();</script>
<?php   
	include 'footer.php';
?>