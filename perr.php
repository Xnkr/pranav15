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
                                <ul>
                                    <li><a href="index.html#e1" class="scrolly">Paper Presentation</a></li>
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
                            <p>There seems to be an Error with the form.
                                <br /> Please Try again.</p>
                            <p>
                                <h3 style="color:red">*
								<?php
								session_start();
								$error = $_SESSION['error'];
								echo $error;
								?>
								</h3></p>
                        </header>
                        <form action="pipsreg.php" id="signup" method="post">
                            <div class="row uniform">
                                <div class="6u 12u$(xsmall)">
                                    <input id="name" name="name" placeholder="Name" required="true" type="text" value="" />
                                </div>

                                <div class="3u 12u$(xsmall)">
                                    <input id="email" name="email" placeholder="Email" required="true" type="email" value="" />
                                </div>

                                <div class="3u 12u$(xsmall)">
                                    <input id="phone" maxlength="10" name="phone" placeholder="Phone" required="true" type="text" value="" />
                                </div>

                                <div class="6u 12u$(xsmall)">
                                    <input id="clg" name="clg" placeholder="School/College" required="true" type="text" value="" />
                                </div>

                                <div class="2u 12u$(xsmall)">
                                    <div class="select-wrapper">
                                        <select id="year" name="year" required="true">
                                            <option value="">- Year -</option>
                                            <option value="c11">Class 11</option>
                                            <option value="c12">Class 12</option>
                                            <option value="1st">1st Year</option>
                                            <option value="2nd">2nd Year</option>
                                            <option value="3rd">3rd Year</option>
                                            <option value="4th">4th Year</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="4u 12u$(xsmall)">
                                    <div class="select-wrapper">
                                        <select id="prevp" name="prevp" required="true">
                                            <option value="">- Number of Youth Parliament Attended -</option>
                                            <option value="0">None</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="m3">More than 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="4u 12u(mobile)"></div>

                                <div class="4u 12u(mobile)">
                                    <ul class="actions">
                                        <li>
                                            <input class="special" id="submit_btn" type="submit" value="Submit" />
                                        </li>
                                        <li>
                                            <input type="reset" value="Reset" />
                                        </li>
                                    </ul>
                                </div>
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
                            <li>&copy; Pranav Team</li>
                            </li>
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