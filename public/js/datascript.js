(function (window, doc, $) {

    window.addEventListener('DOMContentLoaded', (event) => {

        // Upload file
        form = doc.getElementById('form-upload');
        btnUpload = doc.getElementById('btn-upload');
        fileInput = doc.getElementById('gainde-file');

        if (btnUpload) {
            btnUpload.addEventListener('click', function (e) {
                if (fileInput) {
                    fileInput.click();
                }
                e.preventDefault();
            }, false);
        }

        if (fileInput) {
            fileInput.addEventListener('change', function () {
                form.submit();
                $('#loading-spinner').removeClass('d-none')
                $('#btn-upload').attr('disabled',true)
                $('#loading-text').text('Importation en cours...')
                $('#btn-upload i').addClass('d-none')
            }, false);
        }

        // Save user
        btnSaveUser = doc.getElementById('save-user');

        if (btnSaveUser) {
            btnSaveUser.addEventListener('click', function (e) {
                doc.getElementById('user-add-modal').submit();
            });
        }
        $('#daterangepicker').val('');
        $('#daterangepicker').daterangepicker({
            opens: 'left'
        });

        $('#daterangepicker').on('apply.daterangepicker', function(ev, picker) {
            doc.getElementById('start-date').value = picker.startDate.format('YYYY-MM-DD');
            doc.getElementById('end-date').value = picker.endDate.format('YYYY-MM-DD');
            // doc.getElementById('daterangepicker').value =
        });
    });

})(window, document, jQuery);
