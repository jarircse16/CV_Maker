document.addEventListener('DOMContentLoaded', function () {
    // Find the "Download as HTML" button
    const downloadHtmlButton = document.getElementById('downloadHtmlButton');

    // Add a click event listener to trigger the download
    downloadHtmlButton.addEventListener('click', function () {
        // Define the HTML content (you may need to adjust this based on your CV structure)
        const htmlContent = `
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="style.css">
            <link rel="stylesheet" type="text/css" href="cv.css">
            <title>Generated CV</title>
        </head>
        <body>
            <!-- Include the content generated from the form data here -->
            ${document.getElementById('container').innerHTML}
        </body>
        </html>
        `;

        // Create a Blob containing the HTML content
        const blob = new Blob([htmlContent], { type: 'text/html' });

        // Create a URL for the Blob
        const url = URL.createObjectURL(blob);

        // Create an anchor element to trigger the download
        const a = document.createElement('a');
        a.href = url;
        a.download = 'Generated_CV.html';
        a.style.display = 'none';

        // Append the anchor element to the document and trigger a click event
        document.body.appendChild(a);
        a.click();

        // Clean up
        URL.revokeObjectURL(url);
        document.body.removeChild(a);
    });
});
