<?php
error_reporting(E_ALL);
// Set session timeout to 1 hour
session_set_cookie_params(3600);
session_start();

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// Debugging: Check if the session variable is set
if (isset($_SESSION['cv_filename'])) {
    echo 'CV filename found: ' . $_SESSION['cv_filename'];
} else {
    echo 'CV filename not found in session.';
}


if (isset($_SESSION['cv_filename'])) {
    $cvFilename = $_SESSION['cv_filename'];

    // Create a new Dompdf instance
    $pdf = new Dompdf();

    // Set paper size and orientation (optional)
    $pdf->setPaper('A4', 'portrait');

    // Load HTML content from the specified file
    $html = file_get_contents($cvFilename);

    // Load the HTML into Dompdf
    $pdf->loadHtml($html);

    // Render the PDF (you can also save it to a file)
    $pdf->render();

    // Output the PDF to the browser for download
    $pdf->stream('Generated_CV.pdf', array('Attachment' => 0));
} else {
    echo 'CV file not found.';
}
?>
