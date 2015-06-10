var CONTACTUS = CONTACTUS || {};

/**
 * formSender
 *
 * object for sending an AJAX record for the user message to ajaxHandler.php
 * page.
 */
 CONTACTUS.formSender = {

  // UI Selectors
  buttonSelector: '#contact_submit',
  alertSelector: '#alert-container',

  /**
   * Main function for sending a record to ajaxHandler.php
   * @param {String} name
   * @param {String} email
   * @param {String} message
   * @param {String} interest
   */
  sendMessage: function(name, email, message, interest) {
    this.sendAjaxMessage(name, email, message, interest);
  },

  /**
   * AJAX call to send record to backend, and for handling data returning
   * from the server
   * @param {String} name
   * @param {String} email
   * @param {String} message
   * @param {String} interest
   */
  sendAjaxMessage: function(providedName, providedEmail, providedMessage, providedInterest) {

    var data = {
      name: providedName,
      email: providedEmail,
      message: providedMessage
    }, sender = this;

    if (typeof providedInterest !== 'undefined') {
      data.interest = providedInterest;
    }

    $.ajax({
      type: "POST",
      timeout: 120000,
      url: 'php/ajaxHandler.php',
      data: data
    }).done(function(responseText){
      sender.success(JSON.parse(responseText));
    }).fail(function(jqXHR, textStatus){
      sender.failed(textStatus);
    });
  },

  /**
   * Success method to run if AJAX message was successfully saved
   * @param {String} AJAXresponse
   */
  success: function(response) {
    if (response.success === true) {
      this.displayAlert('Email Sent Successfully', 'success');
      this.setButtonStatus('Message Sent!', true);
    } else {
      this.displayAlert(response.msg, 'error');
      this.setButtonStatus('Submit', false);
    }
  },

  /**
   * Fail function to run if AJAX message was unsuccessful, and alert user
   * @param {String} textStatus
   */
  failed: function(textStatus) {
    this.displayAlert('Error Sending Email: ' + textStatus, 'error');
    this.setButtonStatus('Submit', false);
  },

  /**
   * Displays an alert div with a provided message in HTML and CSS class
   * @param {String} content
   * @param {String} displayClass
   */
  displayAlert: function(content, displayClass) {
    var alert = $('<div class="alert ' + displayClass + '">' + content +'</div>').appendTo(this.alertSelector);
    setTimeout(function() {
      $(alert).fadeOut('fast',function() {
        $(alert).remove();
      });
    }, 3000);
  },

  /**
   * Sets the button content in HTML, along with setting 'disabled' attribute
   * to prevent double-click sending
   * @param {String} content
   * @param {Boolean} disabled
   */
  setButtonStatus: function(content, disabled) {
    $(this.buttonSelector).html(content).attr('disabled', disabled === true);
  }

};
