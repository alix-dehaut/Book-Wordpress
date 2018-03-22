<?php 

//[foo]
function aj_foo(){
	return "<p style=\"color:red\">foo shortcode</p>";
}
add_shortcode('foo', 'aj_foo');