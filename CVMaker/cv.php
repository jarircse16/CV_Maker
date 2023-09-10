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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/generate_pdf.js"></script>
    <script src="js/download_as_html.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Generated CV</title>
</head>
<body>
    <?php
    error_reporting(0);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullname"];
        $profession = $_POST["profession"];
        $picture = $_FILES["picture"]["name"];
        $objective = $_POST["objective"];
        $father = $_POST["father"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $nationality = $_POST["nationality"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $education = $_POST["education"];
        $experience = $_POST["experience"];
        $skills = $_POST["skills"];
        $certificate1 = $_POST["certificate1"];
        $certificate2 = $_POST["certificate2"];
        $certificate3 = $_POST["certificate3"];
        $language1 = $_POST["language1"];
        $language2 = $_POST["language2"];
        $language3 = $_POST["language3"];

        // Move uploaded picture to a folder (you should create this folder)
        move_uploaded_file($_FILES["picture"]["tmp_name"], "images/" . $picture);

        // Encode the image in base64
        $imageData = base64_encode(file_get_contents("images/" . $picture));
        $imageSrc = 'data:' . mime_content_type("images/" . $picture) . ';base64,' . $imageData;
    }
    ?>
    <div id="container">
        <!-- Include the content generated from the form data here -->
        <?php include 'cv_content.php'; ?>
        <!-- Display the image with base64 encoding -->
    </div>
    <?php
    session_start(); // Start the session
    ob_start(); // Start output buffering
    include 'cv_content.php'; // Include the content generated from the form data
    $html = ob_get_clean(); // Get the buffered output as a string

    // Create a unique filename for the generated CV, e.g., based on timestamp
    $timestamp = time();
    $filename = "generated_cvs/CV_" . $timestamp . ".html";

    // Save the filename in a session variable
    $_SESSION['cv_filename'] = $filename;

    // Initialize a variable to track CV generation success
    $cvGenerated = false;

    // Check if the HTML content is empty or incomplete
    if (strlen($html) > 7603) {
        // Save the generated CV content to the file
        if (file_put_contents($filename, $html)) {
            // Mark CV generation as successful
            $cvGenerated = true;
        } else {
            echo 'Error saving CV to file.';
        }
    }

    // Provide a link to download the generated CV if successful
    if ($cvGenerated) {
        echo '<script src="js/success.js"></script>';
        echo '<center><p>CV generated successfully. <br><br><a href="' . $filename . '" download onclick="loadScript(\'js/download_success.js\');">Download CV as HTML</a></p></center><br>';
        // Add this JavaScript function to load the script
        echo '<script>
            function loadScript(src) {
                var script = document.createElement("script");
                script.src = src;
                document.head.appendChild(script);
            }
        </script>';

    } else {
        // Load failure.js if CV generation fails
        echo '<script src="js/failure.js"></script>';
    }

    // Provide a link to download the CSS file
    //$cssFilename = "style.css"; // Replace with the correct path to your CSS file
    //  echo '<center><p><a href="' . $cssFilename . '" download>Download CSS</a></p></center>';
    ?>


    <!-- Add this button to trigger PDF generation -->
    <!--<br> Add this button or link to cv.php -->

    <!--<center><button><a href="generate_pdf.php">Generate PDF</button></center><br>-->
    <center><button><a href="index.html">Go Back</button></center>
    <!--<center><button id="downloadHtmlButton">Download as HTML</button></center>
    <br><br>-->
    <!-- Add a button or link to trigger the download -->
</body>
</html>
