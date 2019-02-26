<?php
/**
 * Created by PhpStorm.
 * User: Norbi
 * Date: 2019. 02. 26.
 * Time: 14:36
 */

//[foobar]
function blue_circle($atts){
    $class =  (isset($atts['menu']))  ? $atts['menu'] : "" ;

    return "<div class=\"col-4\"> <div class=\"blue-circle $class \"></div></div>";
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


function container($atts){

    $class =  (isset($atts['class']))  ? $atts['class'] : "" ;

    return "<div class=\"container $class\">";
}
add_shortcode( 'container', 'container' );

function end_container(){
    return "</div>";
}
add_shortcode( 'endcontainer', 'end_container' );


function blue_row(){

    return "<div class=\"blue-sec m-5\"></div>";
}
add_shortcode( 'blue_row', 'blue_row' );

function col12(){

    return "<div class=\"col-md-12\">";
}
add_shortcode( 'col12', 'col12' );


function endcol(){

    return "</div>";
}
add_shortcode( 'endcol', 'endcol' );



