/**
 * Created by NIK on 04.04.16.
 */


/* LOAD MAP and SLIDE RENDER
 * event on load
 * choose all elements with class task-preview, on click do function
 * taskInfo = casting current elements to jQueryObject, find neighbours with class task-info
 * switch on slide
 * map = value from task info
 * map load only on click. Save resources.
 * check status, find neighbours, take value (address)
 * create object map.gMap with description
 * map status set active
 */
$(document).ready(function(){
    $('.task-preview').on('click', function(){
        var taskInfo = $(this).siblings('.task-info');
        taskInfo.slideToggle();

        var map = taskInfo.find('.google-map');

        if(map.data('status') !== 'active') {
            map.attr('style', 'display: block');
            var description = map.siblings(".map-description");

            map.gMap({
                address: description.html(),
                zoom: 16,
                scrollwheel: false,
                markers: [
                    {'address': description.html()}
                ]
            });
            map.attr('data-status', 'active');
        }
    });

    /*  LOG OUT
    *   find element with id logout. Create event on click. Put paremeter event
    *   override of standard event to null.
    *
    *       ps. Because element with id logout locates in tag <a>,
    *       which has standard event
    *
    *   call removeCookie with name('PHPSESSID') for all pages in root
    *   redirect to index.php
    */
    $('#logout').on('click', function(event){
        event.preventDefault();
        $.removeCookie('PHPSESSID', { path: '/' });
        document.location.href = '/index.php';
    });
});
