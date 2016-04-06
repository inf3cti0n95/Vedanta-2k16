<?php

$HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];
function str_present($str,$substr)
{
$pos = strpos($str,$substr);

if($pos === false) {

 return false;
}
else {
 return true;
}
}

if (str_present($HTTP_USER_AGENT, "UC"))
{
		header('Location: uc.html');

}

else if (str_present($HTTP_USER_AGENT, "UCBrowser"))
{
	header('Location: uc.html');
}


?>
<html>
	<head>
		<title>Vedanta 2k16</title>
		<meta charset="UTF-8">
		<meta name="web_author" content="Viraj Trivedi">
		<meta name="keywords" content="Vedanta 2k16,V.V.P. College on Engineering,College Fest">
		<meta name="description" content="Rise above in the spotlight we provide you and get drowned into the euphoric universe of Vedanta 2k16.">
		<link rel="icon" href="favicon.png" sizes="16x16" type="image/png">
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		<link href="css/style.css" rel="stylesheet"/>
		<script src="js/prefixfree.min.js" ></script>
	</head>
	<body>
		<nav class="nav">

			<ul>
				<li><a href="#" class="popup6">Schedule</a></li>
				<li><a href="#event1">Overclock</a></li>
				<li><a href="#event2">Quiz Bowl</a></li>
				<li><a href="#landing-page"><img src="img/minilogo.svg"/></a></li>
				<li><a href="#event3">On The Spot</a></li>
				<li><a href="#event4">Pandora's Box</a></li>
				<li><a href="#" class="popup5">About Us</a></li>
			</ul>

		</nav>
		<!-- LANDING PAGE SECTION START-->
		<section id="landing-page">

			<div id="anim-logo">
				<a href="#events-page">
						<svg version="1.1"
							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
							 x="0px" y="0px" width="154.9px" height="154.9px" viewBox="0 0 154.9 154.9"
							 xml:space="preserve">
						<defs>
						</defs>
						<!-- <rect x="2.4" y="1.5" class="st0" width="150" height="150"/> -->
						<path id="logoPath" class="st1" d="M107.4,31.5L77.3,91.8L32.1,1.5h47.8H65.1H38.4l38.3,76.7l0,0l15-30
							l-8.3-16.7H107.4L107.4,31.5L107.4,31.5z M77.4,151.5l75-150H2.4L77.4,151.5L77.4,151.5L77.4,151.5z"/>
						</svg>
					</a>
			</div>
			<div id="anim-letters">EDANTA</div>
			<div id="cedept"><p style="font-size: 25px;">Hosted by<br/> Computer Engineering Department <br/>V.V.P. College of Engineering, Rajkot</p></div>
		</section>
		<!-- LANDING PAGE SECTION END -->

		<!-- EVENT SECTION START-->
		<section class="events-page" id="events-page">
			<!-- EVENT 1 -->
			<div class="event event1" id="event1">
				<div class="pinWrapper">
					<div class="image"></div>
					<div class="content event-content1" id="event-content1">
						<h1 style="font-size: 67px">Over clock</h1>
						<p>Play your miracles.</p>
						<span><button class="btn btn-3 btn-3e icon-arrow-right popup1">Read More</button></span>
					</div>
				</div>
			</div>
			<!-- !EVENT 1 -->

			<!-- EVENT 2 -->
			<div class="event event2" id="event2">
				<div class="pinWrapper">
					<div class="image"></div>
					<div class="content event-content2">
						<h1>Quiz Bowl</h1>
						<p>Keep your friends close, but enemies closer.</p>
						<span><button class="btn btn-3 quiz btn-3e icon-arrow-right popup2">Read More</button></span>
					</div>
				</div>
			</div>
			<!-- EVENT 2 -->

			<!-- EVENT 3 -->
			<div class="event event3" id="event3">
				<div class="pinWrapper">
					<div class="image"></div>
					<div class="content event-content3">
						<h1>On the Spot</h1>
						<p>Challenge the arena.</p>
						<span><button class="btn btn-3 quiz btn-3e icon-arrow-right popup3">Read More</button></span>
					</div>
				</div>
			</div>
			<!-- !EVENT 3 -->

			<!-- EVENT 4 -->
			<div class="event event4" id="event4">
				<div class="pinWrapper">
					<div class="image"></div>
					<div class="content event-content4">
						<h1 style="font-size: 63px">Pandora's Box</h1>
						<p>Advent yourself with a quest.</p>
						<span><button class="btn btn-3 quiz btn-3e icon-arrow-right popup4">Read More</button></span>
					</div>
				</div>
			</div>
			<!-- !EVENT 4 -->
		</section>
		<!-- EVENT SECTION END -->

		<!-- FOOTER SECTION START -->
		<footer id="footer">
			<div class="foot-container">
			<div class="foot1">
				<div class="vvplogo"></div>
				<p>
					VVP Engineering College<br/>
					Virda Vajadi, Kalawad Road,<br/> Rajkot, Gujarat-360005<br/>
					Phone : (0281) 2783394, (0281) 2783486<br/>
					Fax : (0281) 2783487<br/>
					Email : vvpedulink@gmail.com<br/>
					<a href="https://www.facebook.com/Vd2K16/" target="_blank" ><div class="fb">/Vd2K16</div></a>
				</p>
			</div>
			<div class="foot2">
				<p>
				Event Patrons  <br/>Computer Engineering Department <br/>
				Dr. Tejas Patalia (Head of Department),<br/>The Faculty Members of Computer Engineering Department<br/></p>
			</div>
		</div>
			<div id="foot"><p>Made with&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="heart" style="padding:10px"></span>in India</p>
			</br><!-- </br><p style="font-size:12px">Artwork by <a href="https://www.facebook.com/sudev.kiyada" target="_blank">Sudev Kiyada</a> and Web Design by <a href="https://twitter.com/inf3cti0n95" target="_blank">Viraj Trivedi</a></p> --></div>

		</footer>
		<!-- MODALs START-->
		<!-- EVENT 1 -->
		<section style="background-size:cover;background-image: url(img/overclockBG-min.jpg); opacity:0.97;" class="modal event1-modal is-notvisible">
			<div class="tabs">
				<ul>
					<li><img width="100%" height="75%" src="img/svglogo/dota2.svg"/>Rampage</li>
					<li><img width="100%" height="75%" src="img/svglogo/counterstrike.svg"/>HeadShot</li>
					<li><img width="100%" height="75%" src="img/svglogo/nfs.svg"/>BURNING WHEELS</li>
					<li><img width="100%" height="75%" src="img/svglogo/minimilitia.svg"/>MINI MILITIA</li>
				</ul>
			</div>
			<div class="modalcontent">
			<p>Enemy spotted ! Fire in the hole ! Get yourself in the aggresive mode for the largest gaming event in Rajkot.Getting few headshots, rampages or takedowns doesn’t matter here.What matters is your teamwork.Without it you would be smashed.Keep track of your ammo and reload,aim and bang ! Pick the counters ,keep calm and carry on farming to boost your chances of winning. Get adrenaline rush and takedown your rivals.Here is the greatest gaming battledrome at Overclock.<br/><br/>
				<br/><a href="rules/rules_overclock.pdf" >For Event Rules</a>
				<br/><a href="rules/rules_dota.pdf" >Rampage Info</a>
				<br/><a href="rules/rules_cs.pdf" >HeadShot Info</a>
				<br/><a href="rules/rules_nfs.pdf" >Burning Wheels Info</a>
				<br/><a href="rules/rules_minimilitia.pdf" >Mini Militia Info</a>
			</p>
			 <p class="coordinator">Dhanraj Nair-8000054449<br/>Parekh Parth-9825729300</p><p class="eventco">Event Co-ordinators</p>
		</div>
			<span><a class="popup1 close"></a></span>
		</section>
		<!--! EVENT 1 -->


		<!-- EVENT 2 -->
		<section style=" overflow-y:auto;background-size:cover;background-image: url(img/quizBG-min.jpg); opacity:0.97;" class="modal event2-modal is-notvisible">
			<div class="tabs">
				<ul>

					<li style="width:100%"><img width="100%" height="75%" src="img/quiz.svg"/>Quiz Bowl</li>

				</ul>
			</div>
			<div class="modalcontent">
			<p>
				Think you are “tez than paanchvipaas” ? Then here is the place to prove your mettle.In this General Knowledge based event, questions would be asked ranging from Hollywood movies to Indian mythology.From Indian politics to the Olympics, latest Bollywood number to everyday observations made by you and what not.Don’t ypu techies be disappointed because here is where you can do justice to all the time spent burning the midnight oil.Yes ! Technical questions would be asked too, just to turn up the heat a little beat more.Here is the chance to test your knowledge in areas more than one.Be sure to grab it !<br/><br/><br/>

				<h2>Rules</h2>

				<ul>
				<li>Team of 2</li>
				<li>Use of cell phone and/or laptops is prohibited. If found using, team shall be disqualified.</li>
				<li>Damage to the college property shall lead to disqualification.</li>
				<li>In case of any disputes, coordinator’s decision will be final.</li>
				</ul>

				<h3>Round-1</h3>
				<ul>
					<li>Pen –paper based round.</li>
					<li>Mcq(With negative marks) and one word.</li>
					<li>Top 20-30 teams will lead to the round-2.</li>
					<li>Round consists of GK, Current Affairs and basic technical questions.</li>
				</ul>
				<h3>Round-2</h3>
				<ul>
					<li>Questions will be displayed on projector. Teams need to write down the answers.</li>
					<li>Mcq(With negative marks) and one word.</li>
					<li>Top 5 teams will lead to the final round.</li>
				</ul>
				<h3>Round-3</h3>
				<ul>
					<li>Round consists of 5 stages.</li>
					<li>These include rapid fire round, Buzzer round and three other (kept surprise !!!)</li>
				</ul>
			</p>
			 <p class="coordinator">Sudev Kiyada - 7405159131</p> <p class="eventco">Event Co-ordinator</p>




		</div>
			<span><a class="popup2 close"></a></span>
		</section>
		<!-- !EVENT 2 -->


		<!-- EVENT 3 -->
		<section style="background-size:cover;background-image: url(img/onthespotBG-min.jpg); opacity:0.97;" class="modal event3-modal is-notvisible">


			<div class="tabs">
				<ul>
					<li><img width="100%" height="75%" src="img/svglogo/1minute.svg"/>Minute to Win It</li>
					<li><img width="100%" height="75%" src="img/svglogo/begborrowsteal.svg"/>Beg Borrow Steal</li>
					<li><img width="100%" height="75%" src="img/svglogo/ipl.svg"/>IPL Auction</li>
					<li><img width="100%" height="75%" src="img/svglogo/photography.svg"/>Focus shift</li>
				</ul>
			</div>
			<div class="modalcontent">

			<p>Can you outscore a large number of people in front of large no of people ? If that’s your cup of tea, challenge the arena of massive participants.The crowd is waiting to cheer you for glory.Engage in the fun filled on-the-spot tournaments. On the spot events give you the entertainment of completing a task in a minute,suit yourself up for the auction,get behind the lens to snap a thrilling story or play the role of the smartest businessman to boom your chance of winning.</p>
			<p class="coordinator">Dhaduk Kevin-7405440880</p> <p class="eventco">Event Co-ordinator</p>
		</div>
			<span><a class="popup3 close"></a></span>
		</section>
		<!-- !EVENT 3 -->


		<!-- EVENT 4 -->
		<section  style=" overflow-y:auto;background-size:cover;background-image: url(img/treasurehuntBG-min.jpg); opacity:0.97;" class="modal event4-modal is-notvisible">

			<div class="tabs">
				<ul>

					<li style="width:100%"><img width="100%" height="75%" src="img/treasurehunt.svg"/>Pandora's Box</li>

				</ul>
			</div>
			<div   class="modalcontent">

			<p>
				The Pandora’s Box is waiting to ingest and then digest you.So, let us strive to survive against all complications and use our energy to crack it whole.Pandora’s Box as in straight is the treasure hunt game bifurcated into three phases.The participants are required to solve the given puzzle and it’s result will be any of the location and so have to encounter there within the required time.Puzzles here interest to aptitude,crosswords,programs.So, let’s dare to go in it.<br/><br/><br/>
				      <!-- <a href="rules/rules_pandora.pdf" >Pandora's Box Rules.</a> -->
				<h2>Rules:</h2>
				<ul>
				  <li>Team of 2-3</li>
				  <li>Use of cell phone and/or laptops is prohibited. If found using, team shall be disqualified.</li>
				  <li>Damage to the college property shall lead to disqualification.</li>
				  <li>In case of any disputes, coordinator’s decision will be final.</li>
				</ul>
				<h3>Round-1</h3>
				<ul>
				  	<li>Pen –paper based round.</li>
					<li>Top 20-30 teams will lead to the round-2.</li>
					<li>Round consists of C snippets, aptitude, puzzles, etc.</li>
				</ul>

				<h3>Round-2</h3>
				<ul>
					<li>Solving series of clues will lead to different location in the college.</li>
					<li>Top 10 teams will lead to the final round.</li>
					<li>Teams will be initialized with 30 points.</li>
					<li>10 points will be added for every correct location.</li>
					<li>5 points will be deducted if asked for hint. (For specific questions only)</li>
					<li>In case of tie, time will be considered.</li>
				</ul>

				<h3>Round-3</h3>
				<ul>
					<li>Team will be provided with a question. The solution to that clue will lead to a location in the college. They need to find the password at that location to unlock next question.</li>
					<li>Teams will be initialized with 30 points.</li>
					<li>10 points will be added for every correct location.</li>
					<li>  5 points will be deducted if asked for hint. (For specific questions only)</li>
					<li>In case of tie, time will be considered.</li>
				</ul>


			</p>
			<p class="coordinator">
				Dhaduk Kevin-7405440880<br/> Patadia Purna-9723790690

			</p><p class="eventco">Event Co-ordinators  </p>
		</div>
			<span><a class="popup4 close"></a></span>
		</section>

		<!-- !EVENT 4 -->
		<!-- ABOUT US -->
		<section style="background-size:cover;background-image: url(img/landingBG-min.jpg); opacity:0.97;" class="modal event5-modal is-notvisible">
			<div style="color:111" class="modalcontent">
			<p style="font-size:30px">

				Rise above in the spotlight we provide you and get drowned into the euphoric universe of Vedanta 2k16.<br/>Registration Started. Give a Call to Register.<br/><br/>
				Event Patrons  <br/>Computer Engineering Department <br/>
				Dr. Tejas Patalia (Head of Department),<br/>The Faculty Members of Computer Engineering Department<br/>
			</p>




			<p class="coordinator">
			 Dhaduk Kevin-7405440880<br/> Patadia Purna-9723790690<br/>Kiyada Sudev-7405159131

		 </p><p class="eventco">Event Co-ordinators </p>
			</div>

			<span><a class="popup5 close"></a></span>
		</section>

		<!-- !ABOUT US -->
		<!-- !ABOUT US -->

		<section style="background-size:cover;background-image: url(img/landingBG-min.jpg); opacity:0.97;" class="modal event6-modal is-notvisible">
			<div style="color:111" class="modalcontent">

			<p style="font-size:30px">

				Vedanta 2k16 Going Live on 19th March, 2016 at V.V.P. College of Engineering, Rajkot<br/>Registration Started. Give a Call to Register.<br/><br/><br/>Detailed Event Schedule Coming Soon.
			</p>
			<p class="coordinator">
				Dhaduk Kevin-7405440880<br/> Patadia Purna-9723790690<br/>Kiyada Sudev-7405159131

			</p><p class="eventco">Event Co-ordinators  </p>
		</div>
			<span><a class="popup6 close"></a></span>
		</section>
		<!-- !ABOUT US -->





<!-- SCRIPTS -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script> -->

		<script src="js/jquery-2.1.1.js"></script>
		<script src="js/TweenMax.min.js"></script>
		<script src="js/ScrollMagic.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>
