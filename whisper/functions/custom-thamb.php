<?php

if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'counseling-thumb', 610, 435, true ); // 300 в ширину и без ограничения в высоту
add_image_size( 'testimonials-thumb', 100, 100, true ); // 300 в ширину и без ограничения в высоту
add_image_size ('practis-thambnail', 600, 300, true);
//	add_image_size( 'homepage-thumb', 220, 180, true ); // Кадрирование изображения
add_image_size ('attorneys-thamb', 200, 200, true);
add_image_size ('mainpage-thamb', 360, 256, true);
add_image_size ('singlepage-thamb', 1920, 1000, true);
}


?>