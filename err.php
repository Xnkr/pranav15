<!DOCTYPE HTML>

<html>
	<head>
		<title>PRANAV 2K15</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">PRANAV 2K15</a></h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="index.html#banner" class="scrolly">About</a></li>
								<li>
									<a href="index.html#features" class="scrolly">Events</a>
									
									
									<ul>
									<li>
											<a href="index.html#">Oratorical Events</a>
											<ul><li><a href="index.html#e1" class="scrolly">Paper Presentation</a></li>
										<li><a href="index.html#e2" class="scrolly">Project Presentation</a></li>
										<li><a href="index.html#e7" class="scrolly">Tech-Bate</a></li>
										<li><a href="index.html#e13" class="scrolly">Survival of the fittest</a></li>
											</ul>
									</li>
									<li>
											<a href="index.html#">Robotics</a>
											<ul>
										<li><a href="index.html#e5" class="scrolly">Line Follower</a></li>
										<li><a href="index.html#e6" class="scrolly">Bot race</a></li>
											</ul>
										</li>
									<li>
											<a href="index.html#">Puzzles & Analytics</a>
											<ul>
										<li><a href="index.html#e3" class="scrolly">Circuit Debugging</a></li>
										<li><a href="index.html#e4" class="scrolly">Code Debugging</a></li>
										<li><a href="index.html#e8" class="scrolly">Tech-Hunt</a></li>
										<li><a href="index.html#e14" class="scrolly">Open Circuit</a></li>
										<li><a href="index.html#e10" class="scrolly">Connexions</a></li>
										<li><a href="index.html#e11" class="scrolly">Green Screen</a></li>
										<li><a href="index.html#e15" class="scrolly">Clue it!</a></li>
										<li><a href="index.html#e16" class="scrolly">Google it!</a></li>
											</ul>
										</li>
										<li>
										<a href="index.html#">Miscellaneous</a>
										<ul>
										<li><a href="index.html#e9" class="scrolly">Minute-to-Win-it</a></li>
										<li><a href="index.html#e12" class="scrolly">Tech-zap</a></li>
										<li><a href="index.html#e17" class="scrolly">Gaming</a></li>
										<li><a href="index.html#e18" class="scrolly">Short Film making</a></li>
										<li><a href="index.html#e19" class="scrolly">Online Photography</a></li>
										</ul>
										</li>
										<li><a href="index.html#e20" class="scrolly">???????????????</li>
										
									</ul>
								</li>
								<li><a href="#signupn" class="scrolly">Sign Up</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->


			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

							<!-- Sign Up -->
								<section class="12u 12u(mobile)">
									<header>
										<h2 id="signupn">Error!</h2>
										<p>There seems to be an Error with the form.<br />
							Please Try again.</p>
							<p>
							<h3 style="color:red">*
								<?php
								session_start();
								$error = $_SESSION['error'];
								echo $error;
								// Branch1
								?>
								</h3></p>
									</header>
									<form method="post" action="mail.php" id="signup">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="name" id="name" required="true" value="" placeholder="Name" />
											</div>
											
											<div class="3u 12u$(xsmall)">
												<input type="email" name="email" id="email" value="" required="true" placeholder="Email" />
											</div>
											
											<div class="3u 12u$(xsmall)">
												<input type="text" name="phone" id="phone" value="" required="true" maxlength="10" placeholder="Phone" />
											</div>
											
											<div class="6u 12u$(xsmall)">
												<input type="text" name="clg" id="clg" value="" required="true" placeholder="College" />
											</div>
											
											<div class="3u 12u$(xsmall)">
												<input type="text" name="dept" id="dept" value="" required="true" placeholder="Department" />
											</div>
											
											<div class="3u 12u$(xsmall)">
												<div class="select-wrapper">
													<select required="true" name="year" id="year">
														<option value="">- Year -</option>
														<option value="1st"> 1st</option>
														<option value="2nd"> 2nd </option>
														<option value="3rd"> 3rd</option>
														<option value="4th"> 4th</option>
													</select>
												</div>
											</div>
											
											<div class="12u$ 12u$(small)">
												<input type="checkbox" id="sevent1" name="event[]" value="Paper Presentation"><label for="sevent1">Paper Presentation*</label>
												<input type="checkbox" id="sevent2" name="event[]" value="Project Presentation"><label for="sevent2">Project Presentation*</label>
												<input type="checkbox" id="sevent3" name="event[]" value="Circuit Debugging"><label for="sevent3">Circuit Debugging</label>
												<input type="checkbox" id="sevent4" name="event[]" value="Code Debugging"><label for="sevent4">Code Debugging</label>
												<input type="checkbox" id="sevent5" name="event[]" value="Line Follower"><label for="sevent5">Line Follower</label>
												<input type="checkbox" id="sevent6" name="event[]" value="Bot Racing"><label for="sevent6">Bot Racing</label>
												<input type="checkbox" id="sevent7" name="event[]" value="Tech-Bate"><label for="sevent7">Tech-Bate</label>
												<input type="checkbox" id="sevent8" name="event[]" value="Tech-Hunt"><label for="sevent8">Tech-Hunt</label>
												<input type="checkbox" id="sevent9" name="event[]" value="Minute-to-Win-it"><label for="sevent9">Minute-to-Win-it!</label>
												<input type="checkbox" id="sevent10" name="event[]" value="Connexions"><label for="sevent10">Connexions</label>
												<input type="checkbox" id="sevent11" name="event[]" value="Green Screen"><label for="sevent11">Green Screen</label>
												<input type="checkbox" id="sevent12" name="event[]" value="Tech-Zap"><label for="sevent12">Tech-Zap</label>
												<input type="checkbox" id="sevent13" name="event[]" value="Survival of the fittest"><label for="sevent13">Survival of the fittest</label>
												<input type="checkbox" id="sevent14" name="event[]" value="Open Circuit"><label for="sevent14">Open Circuit</label>
												<input type="checkbox" id="sevent15" name="event[]" value="Clue it!"><label for="sevent15">Clue it!</label>
												<input type="checkbox" id="sevent16" name="event[]" value="Google it!"><label for="sevent16">Google it!</label>
												<input type="checkbox" id="sevent17" name="event[]" value="Gaming"><label for="sevent17">Gaming</label>
												<input type="checkbox" id="sevent18" name="event[]" value="Short Film making"><label for="sevent18">Short Film making**</label>
												<input type="checkbox" id="sevent19" name="event[]" value="Online Photography"><label for="sevent19">Online Photography***</label>
												
												<p>* Abstracts are to be mailed for Paper and Project presentation to <a href="mailto:pranav2k15.paper@gmail.com" >pranav2k15.paper@gmail.com</a> (Paper presentation) and <a href="mailto:pranav2k15.project@gmail.com" >pranav2k15.project@gmail.com</a> (Project presentation).</p>
												<p>** Further instructions for the event will be sent via registered e-mail after registration.</p>
											</div>
											<div class="4u 12u(mobile)"></div>
											<div class="4u 12u(mobile)">
												<ul class="actions">
													<li><input type="submit" value="Submit" id="submit_btn" class="special" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
								</form>		
						</div>
								</section>

						</div>
						<hr />
						<div class="row">
							<div class="12u">
								<!-- Contact -->
									<section class="contact">
										<ul class="icons">
							<li><a href="https://twitter.com/pranav2k15" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/pranav2k15" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="mailto:pranav2k15.msec@gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Pranav Team</li></li>
						</ul>
									</div>

							</div>

						</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>