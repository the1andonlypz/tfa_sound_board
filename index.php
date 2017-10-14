<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Catamaran:400,800" rel="stylesheet">
	<link href="modules/plyr/plyr.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/8ae358415a.js"></script>
  <title>TFA Sound Board</title>
</head>

<body>
	<div id="page_container">

		<header id="page_header">
			<nav id="main_nav">
				<ul class="podcast_select">
					<li class="tfa_podcast">TFA Pod</li>
					<li class="dynasty_life">Dynasty Life</li>
					<li class="degenation">DegeNation</li>
				</ul>
				<ul class="audio_action">
					<li class="add_audio" title="Add new audio"><i class="fa fa-plus" aria-hidden="true"></i></li>
					<li class="remove_audio" title="Remove audio"><i class="fa fa-minus" aria-hidden="true"></i></li>
				</ul>
			</nav>
		</header>

		<aside id="new_file_form">
			<form id="add_new_file" action="" method="post">
				<select name="podcasts" class="podcasts">
					<option selected disabled>Choose Podcast</option>
					<option value="tfa_podcast">TFA Podcast</option>
					<option value="dynasty_life">Dynasty Life</option>
					<option value="degenation">DegeNation</option>
				</select>
				<input type="file" name="new_file" class="new_file">
				<button type="submit" name="add_file_submit" class="add_file_submit">Add File</button>
			</form>
		</aside>

		<main id="sound_board">
			<?php @ require_once ("includes/$podcast.html"); ?>
		</main>

		<footer id="audioplayer">
			<h4 id="now_playing">Now Playing: <span>Aaliyah - Are You That Somebody</span></h4>
			<audio controls>
				<source src="assets/audio/tfa_podcast/Aaliyah - Are You That Somebody (Official HD Video).mp3">
			</audio>
		</footer>

 <!-- Episode 100 
 	<h2>Episode 100</h2>
 	<audio id="ride_the_train" src="cmon_ride_it.mp3"></audio>
	<audio id="intro_mix" src="Intro_Mix.mp3"></audio>
	<audio id="end_of_the_road" src="End_of_the_Road.mp3"></audio>
	<audio id="big_guys" src="Big_Guys.mp3"></audio>
	<audio id="dick_and_dunk" src="Dick_and_Dunk.mp3"></audio>
	<audio id="riverboat_gambler" src="Riverboat_Gambler.mp3"></audio>
	<audio id="tfa_food_segment" src="tfa_food_segment.mp3"></audio>
	<audio id="david_jeremy_hill_johnson" src="David_Jeremy_Hill_Johnson.mp3"></audio>
	<audio id="teryaki" src="teryaki.mp3"></audio>
	<audio id="jeremy_hill_funeral" src="Jeremy_Hill_Funeral.mp3"></audio>
	<audio id="relaxation" src="relaxation.mp3"></audio>
	<button onclick="togglePlay(document.getElementById('ride_the_train'))">C'mon Ride It</button><br>
	<button onclick="togglePlay(document.getElementById('intro_mix'))">Intro Mix</button><br>
	<button onclick="togglePlay(document.getElementById('end_of_the_road'))">End of the Road</button><br>
 	<button onclick="togglePlay(document.getElementById('big_guys'))">Big Guys</button><br>
 	<button onclick="togglePlay(document.getElementById('dick_and_dunk'))">Dick and Dunk</button><br>
	<button onclick="togglePlay(document.getElementById('riverboat_gambler'))">Riverboat Gambler</button><br>
 	<button onclick="togglePlay(document.getElementById('tfa_food_segment'))">TFA Food Segment</button><br>
 	<button onclick="togglePlay(document.getElementById('david_jeremy_hill_johnson'))">"Jeremy Hill"</button><br>
	<button onclick="togglePlay(document.getElementById('teryaki'))">Teryaki</button><br>
	<button onclick="togglePlay(document.getElementById('jeremy_hill_funeral'))">J.Hill Funeral</button><br>
	<button onclick="togglePlay(document.getElementById('relaxation'))">Relaxation</button>
-->
 <!-- Intro and Outro
 	<h2>Intro and Outro</h2>
	<audio id="intro" src="2017_Generic_Intro.mp3"></audio>
	<audio id="jen_intro" src="2017_Jen_Intro.mp3"></audio>
	<audio id="outro" src="2017_Generic_Outro.mp3"></audio>
	<button onclick="togglePlay(document.getElementById('intro'))">Intro</button>
	<button onclick="togglePlay(document.getElementById('jen_intro'))">Intro</button>
 	<button onclick="togglePlay(document.getElementById('outro'))">Outro</button>
-->
<!-- Advertisements
	<h2>Advertisements</h2>
	<audio id="dlp_ad" src="DynastyLifePodCommercial.mp3"></audio>
	<audio id="afsp_ad" src="afsp_ad_60sec.mp3"></audio>
	<button onclick="togglePlay(document.getElementById('dlp_ad'))">DLP Advert</button>
 	<button onclick="togglePlay(document.getElementById('afsp_ad'))">AFSP Advert</button>
-->
<!-- Sound FX
	<h2>Sound FX</h2>
	<audio id="ref_whistle" src="ref_whistle.mp3"></audio>
	<audio id="bleep" src="bleep.mp3"></audio>
	<audio id="jeremy_hill" src="JeremyHill.mp3"></audio>
 	<button onclick="togglePlay(document.getElementById('ref_whistle'))">Ref Whistle</button>
 	<button onclick="togglePlay(document.getElementById('bleep'))">Bleep</button>
 	<button onclick="togglePlay(document.getElementById('jeremy_hill'))">Jeremy Hill</button>
-->
</div><!-- page-container -->

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="modules/plyr/plyr.js"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>