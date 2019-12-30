<!DOCTYPE html>
<html lang="en">

<head>
	{{head}}
</head>

<body>
	<div id="particles-js" class="container-fluid"></div>
	<div id="solar">
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
				<div class="planet" av-name="sun">

				</div>
			</div>
		</div>
	</div>

	<div id="bg-blur"></div>

	<canvas id="bubble"></canvas>

	<nav id="mainnav">
		<ul>
			<li><a class="nav-item">HOME</a></li>
			<li><a class="nav-item">GALLERY</a></li>
			<li><a class="nav-item">EVENTS</a></li>
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
			<div class="container mycontainer" id="contactus" style="display: none;">
				<div class="row myrow">
					<div class="col-md-2"></div>
					<div class="col-md-2 mycol pt-4 pb-4">
						<div type="button" class="memberteam" data-toggle="modal" data-target="#executiveModal">
							<div class="memberteam-item" av-name="event_manager">
								<img src="asset/img/ext/g.png">
								<div style="background-color: rgba(0,0,0,.3); height: 100%;">
									<h5>Executive Team</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 mycol pt-4 pb-4">
						<div type="button" class="memberteam" data-toggle="modal" data-target="#executiveModal">
							<div class="memberteam-item" av-name="event_manager">
								<img src="asset/img/ext/g.png">
								<div style="background-color: rgba(0,0,0,.3); height: 100%;">
									<h5>Event & Competition</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 mycol pt-4 pb-4">
						<div type="button" class="memberteam" data-toggle="modal" data-target="#eventsModal">
							<div class="memberteam-item" av-name="event_heads">
								<img src="asset/img/ext/web2.png">
								<div style="background-color: rgba(0,0,0,.3); height: 100%;">
									<h5>Web Team</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 mycol pt-4 pb-4">
						<div type="button" class="memberteam" data-toggle="modal" data-target="#webModal">
							<div class="memberteam-item" av-name="web_team">
								<img src="asset/img/ext/event2.png">
								<div style="background-color: rgba(0,0,0,.3); height: 100%;">
									<h5>Planning & Management</h5>
								</div>
							</div>
						</div>
					</div>
					<!------------------------2nd row-------------------------------------------------->
				</div>
				<div class="row myrow">
					<div class="col-md-3 mycol"></div>
					<div class="col-md-2 mycol pt-4 pb-4">
						<div type="button" class="memberteam" data-toggle="modal" data-target="#designModal">
							<div class="memberteam-item" av-name="design_team">
								<img src="asset/img/ext/design2.png">
								<div style="background-color: rgba(0,0,0,.3); height: 100%;">
									<h5>Creatives & Design Team</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 mycol pt-4 pb-4">
						<div type="button" class="memberteam" data-toggle="modal" data-target="#sponsorshipModal">
							<div class="memberteam-item" av-name="sponsors_team">
								<img src="asset/img/ext/sponsor2.png">
								<div style="background-color: rgba(0,0,0,.3); height: 100%;">
									<h5>Sponsorship Team</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 mycol pt-4 pb-4">
						<div type="button" class="memberteam" data-toggle="modal" data-target="#mediaModal">
							<div class="memberteam-item" av-name="marketing_team">
								<img src="asset/img/ext/media2.png">
								<div style="background-color: rgba(0,0,0,.3); height: 100%;">
									<h5>Marketing & Promotion Team</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<!-------------------------------------------------------Executive Heads------------------------------------------->
				<!-- Executive Heads -->
				<div class="modal fade" id="executiveModal" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog modal-xl">
						<div class="modal-content shadow">

							<!-- Modal Header -->
							<div class="modal-header">
								<h2 class="modal-title"
									style="text-align: center; color: white; width: 100%; margin: auto;">Executive
									Heads
								</h2>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-3 mycol">
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/arjaria.gif"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Dr. Siddhartha
														Arjaria </h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9926474339</p>
												</div>
											</div>
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/deep.jpg"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Mr. Deep Singh
														Thakur
													</h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9926474339</p>
												</div>
											</div>
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/abhijeet.jpg"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Mr. Abhijeet
														Singh
													</h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9598254284</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-------------------------------------------------------Events Heads------------------------------------------->

				<!-- Events Heads -->
				<div class="modal fade" id="eventsModal" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog modal-xl">
						<div class="modal-content shadow">

							<!-- Modal Header -->
							<div class="modal-header">
								<h2 class="modal-title"
									style="text-align: center; color: white; width: 100%; margin: auto;">Events Team
								</h2>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-4 mycol">
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/narendra.jpg"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Mr. Narendra
														Rajpoot
													</h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9926474339</p>
												</div>
											</div>
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/utsav.png"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Mr. Utsav Singh
													</h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9598254284</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!----------------------------------------------Web Heads------------------------------------------->

				<!-- Events Heads -->
				<div class="modal fade" id="webModal" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog modal-xl">
						<div class="modal-content shadow">

							<!-- Modal Header -->
							<div class="modal-header">
								<h2 class="modal-title"
									style="text-align: center; color: white; width: 100%; margin: auto;">Web Team</h2>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-4 mycol">
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/narendra.jpg"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Mr. Narendra
														Rajpoot
													</h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9926474339</p>
												</div>
											</div>
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/utsav.png"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Mr. Utsav Singh
													</h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9598254284</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!----------------------------------------------------Design Heads------------------------------------------->

				<!-- Events Heads -->
				<div class="modal fade" id="designModal" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog modal-xl">
						<div class="modal-content shadow">

							<!-- Modal Header -->
							<div class="modal-header">
								<h2 class="modal-title"
									style="text-align: center; color: white; width: 100%; margin: auto;">Design Team
								</h2>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-4 mycol">
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/narendra.jpg"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Mr. Narendra
														Rajpoot
													</h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9926474339</p>
												</div>
											</div>
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/utsav.png"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Mr. Utsav Singh
													</h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9598254284</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>


				<!-------------------------------------------------Sponsorship Heads---------------------------------->

				<!-- Events Heads -->
				<div class="modal fade" id="sponsorshipModal" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog modal-xl">
						<div class="modal-content shadow">

							<!-- Modal Header -->
							<div class="modal-header">
								<h2 class="modal-title"
									style="text-align: center; color: white; width: 100%; margin: auto;">Web Team</h2>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-4 mycol">
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/narendra.jpg"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Mr. Narendra
														Rajpoot
													</h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9926474339</p>
												</div>
											</div>
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/utsav.png"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Mr. Utsav Singh
													</h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9598254284</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>


				<!-----------------------------------Media, Publicity & Networking Heads---------------------------------->

				<!-- Events Heads -->
				<div class="modal fade" id="mediaModal" data-keyboard="false" data-backdrop="static">
					<div class="modal-dialog modal-xl">
						<div class="modal-content shadow">

							<!-- Modal Header -->
							<div class="modal-header">
								<h2 class="modal-title"
									style="text-align: center; color: white; width: 100%; margin: auto;">Web Team</h2>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body -->
							<div class="modal-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-4 mycol">
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/narendra.jpg"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Mr. Narendra
														Rajpoot
													</h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9926474339</p>
												</div>
											</div>
										</div>
										<div class="col-md-2 mycol">
											<div class="team-member">
												<div class="member-photo">
													<img class="img-responsive" src="asset/img/ext/utsav.png"
														style="height: 235px">

													<div class="mask">
														<ul class="list-inline">
															<li><a href="#"><i class="fa fa-facebook"></i></a>
															</li>
															<li><a href="#"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a>
															</li>
														</ul>
													</div>
												</div>

												<div class="member-meta">
													<h4 style="color: white;" class="text-center">Mr. Utsav Singh
													</h4>
													<h4 style="color: #1cb096;word-wrap: break-word;" class="text-center"><i class="fa fa-envelope"></i>xyz.avatar@gmail.com</h4>
													<p style="color: white;" class="tf-ion-android-call text-center">
														+91-9598254284</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!------------------------------------------------------------------------------------------------->

			</div>
		</div>
	</div>

	{{footer}}
</body>

</html>
