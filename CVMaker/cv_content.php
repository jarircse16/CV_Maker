<!DOCTYPE html>
<html lang="en">
<head>
      <style type="text/css">
        *{
      margin: 0;
      padding: 0;
      font-family: verdana;
      }
      /*index page*/
      #cv_heading{
      text-align: center;
      color: #000;
      text-shadow: 2px 2px 2px #fff;
      font-weight: bold;
      }
      /*cv page*/
      * {
      box-sizing: border-box;
      }
      body{
      background-color: #fff;
      font-family: sans-serif;
      }
      #container{
      position: relative;
      width: 100%;
      height: 100%;
      margin: auto;
      background-color: #fff;
      }
      #header{
      overflow: hidden;
      width: 100%;
      }
      #left{
      padding-top: 10px;
      color: #fff;
      overflow: hidden;
      background-color: #1D55FF;
      float: left;
      width: 35%;
      height: 100%;
      border-bottom: 40px solid #fff;
      }
      #left #image{
      width: 200px;
      height: auto;
      border: 1px solid #eee;
      padding: 5px;
      margin: auto;
      margin-top: 10px;
      }
      #left #image img{
      width: 100%;
      height: 100%;
      object-fit: contain;
      }
      #right{
      color: #292929;
      padding: 10px;
      margin-right: 5px;
      float: right;
      width: 60%;
      }
      #left h1,h3{
      font-family: verdana;
      text-align: center;
      white-space: nowrap;
      margin: 2px;
      padding: 2px;
      }
      #left h2{
      text-align: center;
      background-color: blueviolet;
      color: #fff;
      padding: 10px 20px 10px 20px;
      }
      #left #list{
      border: 1px solid #fff;
      padding: 20px 10px 20px 20px;
      margin: 10px;
      }
      #left ul li{
      margin: 5px;
      }
      ul li{
      list-style: circle;
      }
      #right p{
      text-align: justify;
      }
      table{
      border-color: red !important;
      }
    </style>
    <style type="text/css">
    body {
        font-family: Arial, sans-serif;
        margin: 0; /* Reset the default margin */
        padding: 0; /* Reset the default padding */
        min-height: 100vh; /* Ensure the content spans at least the full viewport height */
        display: flex;
        flex-direction: column; /* Stack the container vertically */
    }

    #content-container {
        flex: 1; /* Allow the content to expand and fill available space */
        padding: 20px; /* Add padding around the content */
    }

    *{
    	margin: 0;
    	padding: 0;
    	font-family: verdana;
    }
    /*index page*/
    #cv_heading{
    	text-align: center;
    	color: #000;
    	text-shadow: 2px 2px 2px #fff;
    	font-weight: bold;
    }
    /*cv page*/
    * {
      box-sizing: border-box;
    }
    body{
    	background-color: #fff;
    	font-family: sans-serif;
    }
    #container{
    	position: relative;
    	width: 100%;
    	height: 100%;
    	margin: auto;
    	background-color: #fff;
    }
    #header{
    	overflow: hidden;
    	width: 100%;
    }
    #left{
    	padding-top: 10px;
    	color: #fff;
    	overflow: hidden;
    	background-color: #1D55FF;
    	float: left;
    	width: 35%;
    	height: 100%;
    	border-bottom: 40px solid #fff;
    }
    #left #image{
    	width: 200px;
    	height: auto;
    	border: 1px solid #eee;
    	padding: 5px;
    	margin: auto;
    	margin-top: 10px;
    }
    #left #image img{
    	width: 100%;
    	height: 100%;
    	object-fit: contain;
    }
    #right{
    	color: #292929;
    	padding: 10px;
    	margin-right: 5px;
    	float: right;
    	width: 60%;
    }
    #left h1,h3{
    	font-family: verdana;
    	text-align: center;
    	white-space: nowrap;
    	margin: 2px;
    	padding: 2px;
    }
    #left h2{
    	text-align: center;
    	background-color: blueviolet;
    	color: #fff;
    	padding: 10px 20px 10px 20px;
    }
    #left #list{
    	border: 1px solid #fff;
    	padding: 20px 10px 20px 20px;
    	margin: 10px;
    }
    #left ul li{
    	margin: 5px;
    }
    ul li{
    	list-style: circle;
    }
    #right p{
    	text-align: justify;
    }
    table{
    	border-color: red !important;
    }
    #footer{
    	position: bottom;
    	bottom: 0;
    	left: 0;
    	padding: 10px;
    	width: 100%;
    	text-align: center;
    	color: #fff;
    	background-color: #292929;
    	font-size: 17px;
    	font-family: Verdana;
    }
    li,p{
    	font-size: 16px;
    }

    /* Define other styles as needed */
  </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include your CSS stylesheets here -->
  <!--  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="cv.css">-->
    <!-- Add any other stylesheets as needed -->
</head>
<body>
<div id='header'>
    <div id='left'>
        <div id='image'>
            <img src='<?php echo $imageSrc; ?>'>
        </div>
        <div>
            <h1>
                <?php echo $fullname; ?>
            </h1>
            <h3>
                <?php echo $profession; ?>
            </h3>
        </div>
        <div>
            <h2>Contact</h2>
            <ul id='list'>
                <li><?php echo $address; ?></li>
                <li><?php echo $mobile; ?></li>
                <li><?php echo $email; ?></li>
            </ul>
            <h2>Skills</h2>
            <ul id='list'>
                <?php echo $skills; ?>
            </ul>
            <h2>Languages</h2>
            <ul id='list'>
                <li><?php echo $language1; ?></li>
                <li><?php echo $language2; ?></li>
                <li><?php echo $language3; ?></li>
            </ul>
        </div>
    </div>
    <div id='right'>
        <div>
            <h2>Objective</h2><br>
            <p>
                <?php echo $objective; ?>
            </p>
            <br>
            <h2>Personal Information</h2><br>
            <table cellspacing='0' cellpadding='7'>
                <tr>
                    <td><b>Father Name:  <b></td>
                    <td><?php echo $father; ?></td>
                </tr>
                <tr>
                    <td><b>Gender: <b></td>
                    <td><?php echo $gender; ?></td>
                </tr>
                <tr>
                    <td><b>DOB: <b></td>
                    <td><?php echo $dob; ?></td>
                </tr>
                <tr>
                    <td><b>Nationality: <b></td>
                    <td><?php echo $nationality; ?></td>
                </tr>
            </table><br>
            <h2>Education</h2><br>
            <p>
                <?php echo $education; ?>
            </p><br>
            <h2>Experience</h2><br>
            <p>
                <?php echo $experience; ?>
            </p><br>
            <h2>Certificates</h2><br>
            <ul>
                <li><?php echo $certificate1; ?></li>
                <li><?php echo $certificate2; ?></li>
                <li><?php echo $certificate3; ?></li>
            </ul>
        </div>
    </div>
</div>
<div id="content-container">
  <div id='footer'>
    <footer>
    Mobile: <?php echo $mobile; ?> / Email: <?php echo $email; ?>
  </footer>
</div>
</div>
<!-- Include the content generated from the form data here -->
<!-- Your generated content goes here -->
</body>
</html>
