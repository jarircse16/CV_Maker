<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your PHP code to retrieve form data here (same as before)
}

// Define the HTML content as a string (you may need to adjust this based on how your content is structured)
// Define the HTML content as a string (you may need to adjust this based on how your content is structured)
$htmlContent = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    position: absolute;
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

  #footer {
      text-align: center;
      padding: 10px;
      background-color: #292929;
  }

  /* Define other styles as needed */
</style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="cv.css">
    <title>Generated CV</title>
</head>
<body>
    <!-- Include the content generated from the form data here -->
';

// Append the generated content from the form data (you may need to adjust this based on your CV structure)
$htmlContent .= include 'cv_content.php';

// Complete the HTML content
$htmlContent .= '
</body>
</html>
';

// Replace any absolute image URLs with relative paths
$htmlContent = str_replace('src="http://127.0.0.1/cvMaker/images/', 'src="images/', $htmlContent);

// Set the HTTP headers for downloading as an HTML file with the desired filename
header('Content-Type: text/html');
header('Content-Disposition: attachment; filename="Generated_CV.html"');

// Output the HTML content for download
echo $htmlContent;
?>
