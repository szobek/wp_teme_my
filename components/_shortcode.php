<?php
/**
 * Created by PhpStorm.
 * User: Norbi
 * Date: 2019. 02. 26.
 * Time: 14:36
 */

//[foobar]
function blue_circle(){
    return "
        <div class=\"col-4\">
            <div class=\"blue-circle hour\"></div>

        </div>";
}
add_shortcode( 'bc', 'blue_circle' );


function row(){
    return "<div class=\"row\">";
}
add_shortcode( 'row', 'row' );




function end_row(){
    return "</div>";
}
add_shortcode( 'endrow', 'end_row' );




function container(){
    return "<div class=\"container\">";
}
add_shortcode( 'container', 'container' );

function end_container(){
    return "</div>";
}
add_shortcode( 'endcontainer', 'end_container' );




