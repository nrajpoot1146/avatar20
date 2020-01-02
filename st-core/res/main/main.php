<!DOCTYPE html>
<html lang="en">

<head>
	{{head}}
</head>

<body class="body">
	<div id="particles-js" class="container-fluid"></div>
	<div class="av-bg-logo anim-back-2d"></div>

	<div id="solar" class="fadeIn">
		<div class="solar-bg"></div>
		<div id="at-solar" class="anim-solarStart">
			<div id="solar-events" class="anim-rClock orbit">
				<div class="planet anim-rPlanetClock" av-name="events">
					<dl style="color: dodgerblue;" class="infos">
						<dt></dt>
						<dd><span>Events</span></dd>
					</dl>
				</div>
			</div>
			<div id="solar-about-us" class="anim-rAntiClock orbit">
				<div class="planet anim-rPlanetAntiClock" av-name="aboutus">
					<dl style="color: dodgerblue;" class="infos">
						<dt></dt>
						<dd><span>About Us</span></dd>
					</dl>
				</div>
			</div>
			<div id="solar-contactus" class="anim-rClock orbit">
				<div class="planet anim-rPlanetClock" av-name="contactus">
					<dl style="color: dodgerblue;" class="infos">
						<dt></dt>
						<dd><span>Contact Us</span></dd>
					</dl>
				</div>
			</div>
			<div id="solar-sponsors" class="anim-rAntiClock otbit">
				<div class="planet anim-rPlanetAntiClock" av-name="sponsors">
					<dl style="color: dodgerblue;" class="infos">
						<dt></dt>
						<dd><span>Sponsors</span></dd>
					</dl>
				</div>
			</div>
			<div id="solar-ourteam" class="anim-rClock orbit">
				<div class="planet anim-rPlanetClock" av-name="ourteam">
					<dl style="color: dodgerblue;" class="infos">
						<dt></dt>
						<dd><span>Our Team</span></dd>
					</dl>
				</div>
			</div>
			<div id="solar-workshop" class="anim-rAntiClock orbit">
				<div class="planet anim-rPlanetAntiClock" av-name="workshop">
					<dl style="color: dodgerblue;" class="infos">
						<dt></dt>
						<dd><span>Work Shop</span></dd>
					</dl>
				</div>
			</div>
			<div id="at">
				<div class="planet anim-rSun" av-name="sun">

				</div>
			</div>
		</div>
	</div>

	<div id="bg-blur"></div>

	<canvas id="bubble"></canvas>

	<nav id="mainnav">
		<ul>
			<li><a class="nav-item">HOME</a></li>
			<li><a class="nav-item">EVENTS</a></li>
			<li><a class="nav-item">WORKSHOPS</a></li>
			<li><a class="nav-item">CONTACT US</a></li>
			<li><a class="nav-item">ABOUT US</a></li>
		</ul>
	</nav>

	<div class="hamb">
		<a><i class="fa fa-bars"></i></a>
	</div>
	<div id="av-section">
		<div style="position: fixed; top: 1%; left: 50%; transform: translate(-50%,0); display: block;">
			<a class="homeOpen csr-pointer" style=" display: inline-block; color: #1cb096; font-size: 30px;">
				<i class="fas fa-home"></i>
			</a>
		</div>
		<div class="cnt scroll">

		</div>
	</div>

	{{footer}}
</body>

</html>
