/**
 * ownCloud - owntweetly
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author ELExG <elexgspot@gmail.com>
 * @copyright ELExG 2016
 */

(function ($, OC) {

	$(document).ready(function () {
        var url = OC.generateUrl('/apps/owntweetly/json');

        $.get(url).success(function (response) {
            $.each(response['statuses'], function() {
                $('#echo-result').append(this['created_at'] + ' ' + this['text'] + '<br>');
            });
        });
	});

})(jQuery, OC);