document.addEventListener('DOMContentLoaded', function () {
    var generatePdfButton = document.getElementById('generatePdfButton');

    if (generatePdfButton) {
        generatePdfButton.addEventListener('click', function () {
            // Capture the current HTML content of the page
            var htmlContent = document.documentElement.outerHTML;

            // Create a form element to send the HTML content
            var form = document.createElement('form');
            form.method = 'post';
            form.action = 'generate_pdf.php';

            // Create an input field to hold the HTML content
            var htmlInput = document.createElement('input');
            htmlInput.type = 'hidden';
            htmlInput.name = 'html';
            htmlInput.value = htmlContent;

            // Append the input field to the form
            form.appendChild(htmlInput);

            // Append the form to the document and submit it
            document.body.appendChild(form);
            form.submit();
        });
    }
});
