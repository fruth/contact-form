var CONTACTUS = CONTACTUS || {};

$(function() {

  // Fire AJAX call when user submits form
  $('button#contact_submit').click(function(event) {

    event.preventDefault();

    var name      = $('#contact-name').val();
    var email     = $('#contact-email').val();
    var interest  = $('#contact-interest option:selected').val();
    var message   = $('#contact-message').val();

    // Call AJAX message handler
    CONTACTUS.formSender.setButtonStatus('<i class="fa fa-circle-o-notch fa-spin"></i>', true);
    CONTACTUS.formSender.sendMessage(name, email, message, interest);

  });

});
