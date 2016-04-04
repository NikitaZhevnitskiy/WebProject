/**
 * Created by NIK on 04.04.16.
 */

// event on load
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
});