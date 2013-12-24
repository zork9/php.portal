<?php

/* draw pixel art page */

/*
 Copyright (C) Johan Ceuppens 2013

 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>

<?php
include("/php.portal/src/include/include.std.php");
include(utilDir("util.php"));
include(miscDir("css/cssutil.php"));
include(miscDir("css/cssjs.php"));
include('pixelart.util.php');

printHeader("PixelArt Studio", 
	
	//CSS link
	"<style>" . colorizePixel() . 
			loadCSSFile("pixelart.start.css") . 
			loadCSSFile("pixelart.start.2.css") . 
	"</style>");
printBodyInit();

echo '<div onclick="colorize(this.children[0])" id="pixelwindow">
	<div></div>
</div>';

printBodyHTMLClose();

?>