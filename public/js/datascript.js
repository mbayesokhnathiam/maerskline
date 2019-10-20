(function (window, doc) {
    window.addEventListener('DOMContentLoaded', (event) => {
        form = doc.getElementById('form-upload');
        btnUpload = doc.getElementById('btn-upload');
        fileInput = doc.getElementById('gainde-file');

        btnUpload.addEventListener('click', function (e) {
            if (fileInput) {
                fileInput.click();
            }
            e.preventDefault();
        }, false);

        fileInput.addEventListener('change', function () {
            form.submit();
        }, false);
    });
})(window, document);
