/**
 * @file
 * Init navbar-search.
 */

(function ($) {

    'use strict';

    Drupal.behaviors.navbarSearch = {
        attach: function (context, settings) {
            new UISearch(document.getElementById('navbar-search'));

            $('#content').on('click', function(){
              $('.navbar-toggle:not(.collapsed)').click();
            });
        }
  };

})(jQuery);
;
/**
 * @file
 * Update the notification bell badge.
 */

(function ($) {
    /**
     * Behaviors.
     */
    Drupal.behaviors.notificationUpdate = {
        attach: function (context, settings) {
            // TODO Implement this with a no-js fallback.
            var notification_count = $('.notification-bell .badge');

          if (notification_count.val() != "0") {
              $('.notification-bell').click(function(e) {
                  $.ajax({
                      method: 'POST',
                      url: '/ajax/notifications-mark-as-read',
                      data: { },
                      success: function(result) {
                          // Update the notification bell.
                          var remaining_notifications = result['remaining_notifications'];

                          notification_count.html(remaining_notifications);
                      }
                    });
              });
          }
        }
  };
})(jQuery);
;
