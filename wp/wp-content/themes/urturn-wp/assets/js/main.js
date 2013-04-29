/* Author:

*/

;(function($, window, undefined) {

    $(function() {
        $('.newsletter-form').submit(function (e) {
            var $form = $(this);
            var $message = $('#message-newsletter');

            e.preventDefault();
            $.getJSON(
                this.action + "?callback=?",
                $form.serialize(),
                function (data) {
                    if (data.Status === 400) {
                        $message.removeClass('alert-success').addClass('alert-error').html(data.Message).show();
                    } else { // 200
                        $message.removeClass('alert-error').addClass('alert-success').html(data.Message).show();
                        // reset form
                        $form.find('input[type="email"]').val('');
                    }
                }
            );
        });
    });

})(jQuery, this);


