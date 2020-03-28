<!DOCTYPE HTML>
<!--
Spatial by TEMPLATED
templated.co @templatedco
Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>NCKU Course</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../assets_index/css/main.css" />
        <style>
            .header {
                background-color: #F1F1F1;
                text-align: center;
                padding: 20px;
            }
            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            .topnav {
                overflow: hidden;
                background-color: #333;
            }

            .topnav a {
                float: top;
                color: #f2f2f2;
                text-align: center;
                padding: 12px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            .topnav a.active {
                background-color: #4CAF50;
                color: white;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                float: left;
            }

            li a, .dropbtn {
                display: inline-block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover, .dropdown:hover .dropbtn {
                background-color: red;
            }

            li.dropdown {
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {background-color: #f1f1f1;}

            .dropdown:hover .dropdown-content {
                display: block;
            }
            ul.wrap {
                display: table;
                margin: 0 auto;
            }
        </style>
    </head>
    <body class="landing">

        <!-- Header -->
        <div class="topnav">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="./Med_113.php">MED</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">DEN</a>
                    <div class="dropdown-content">
                        <a href="./Den_114_bio.php">Biology</a>
                        <a href="./Den_114_chem.php">Chemistry</a>
                    </div>
                </li>
            </ul>
        </div>


        <!-- Banner -->
        <section id="banner">
            <h2>DEN</h2>
            <p>DEN X Chemistry</p>

        </section>




        <!-- Two -->
        <section id="two" class="wrapper style2 special">
            <div class="container">
                <header class="major">
                    <h2>NKCU Course List</h2>
                    <p>DEN Chemestry Course</p>
                </header>

                <div class="row 150%">
                    <div class="6u 12u$(xsmall)">
                        <div class="image fit captioned">

                            <video class="videoElement" id="videoElement" poster="velocity-thumbnail.jpg" width="380" width="380" height="200" controls> 
                                <source src= "../Video/Den114_video/chem/0317.mp4" type="video/mp4"> 
                                <source src= "../Video/Den114_video/chem/0317.mp4" type="video/ogg">  
                            </video> 
                            <h3>0306</h3>
                            <p class="controls">
                                <label><input type="range" step="0.1" min="0.5" max="2" value="1" id="rateSlider"></label> <span id="rateOutput" aria-live="polite"></span>
                            </p>
                        </div>
                    </div>

                    <div class="6u 12u$(xsmall)">
                        <div class="image fit captioned">
                            <video class="videoElement" poster="velocity-thumbnail.jpg" width="380" height="200" controls> 
                                <source src= "../Video/Den114_video/chem/0324.mp4" type="video/mp4"> 
                                <source src= "../Video/Den114_video/chem/0324.mp4" type="video/ogg"> 
                            </video> 
                            <h3 onclick="alert('clicked')">0310</h3>
                            <p class="controls">
                                <label><input type="range" step="0.1" min="0.5" max="2" value="1" id="rateSlider"></label> <span id="rateOutput" aria-live="polite"></span>
                            </p>
                        </div>
                    </div>
                </div>

            
            </div>
        </section>


        <!-- Four -->
        <section id="four" class="wrapper style3 special">
            <div class="container">
                <header class="major">
                    <h2>NCKU COURSE</h2>
                    <p>遠距離教學</p>
                </header>

            </div>
        </section>

        <!-- Footer -->

        <!-- Scripts -->
        <script src="../assets_index/js/jquery.min.js"></script>
        <script src="../assets_index/js/skel.min.js"></script>
        <script src="../assets_index/js/util.js"></script>
        
        <script>
            // Inline code is for educational purposes. Best practice is to put your scripts in external files.
            
            (function() {
                'use strict';

                var video = document.getElementByClassName("videoElement");
                var rateOutput = document.getElementById('rateOutput');
                var rateSlider = document.getElementById('rateSlider');

                rateSlider.onchange = function(event) {
                    // When the slider is moved, changed the video's playback rate
                    video.playbackRate = rateSlider.value;
                };

                video.onplay = function(event) {
                    // We can only change the playbackRate once the video has started playing
                    video.playbackRate = rateSlider.value;
                };

                video.onratechange = function(event) {
                    // When the playback rate changes, display the new value
                    rateOutput.textContent = video.playbackRate;

                    // And let's have some colourful fun while we're here
                    document.body.style.background = 'hsl(' + (video.playbackRate * 180) + ', 50%, 15%)';
                };
                    
                rateOutput.textContent = rateSlider.value;
            })();
        </script>
    </body>
</html>