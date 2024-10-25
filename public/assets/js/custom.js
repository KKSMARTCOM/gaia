/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$(function () {
    $('.menu-toggle-open').on('click', function () {
        $('.main-sidebar').css({
            'left': '0'
        });
        $('.menu-toggle-close').css({
            'display': 'block'
        });
    })

    $('.menu-toggle-close').on('click', function () {
        $('.main-sidebar').css({
            'left': '-250px'
        });
    })
})
