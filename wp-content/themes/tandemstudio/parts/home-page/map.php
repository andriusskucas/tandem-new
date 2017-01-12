<?php
/*
* Renders google map with location marker
*/

define('LOAD_GOOGLE_MAPS',true);
?>


<div id="main-map" class="map main-map"
   data-center-latitude="54.9069776"
   data-center-longitude="23.877047"
   data-markers='
   [{
   "latitude":"54.9069776",
   "longitude":"23.877047",
   "icon":"<?php echo get_template_directory_uri()."/assets/img/tandempin.png"; ?>"
   }]'
   data-zoom="17" >

</div>

