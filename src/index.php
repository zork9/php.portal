<?php

/* start page */

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
include("include/root.php");

include(utilDir("util.php"));
include(miscDir("css/cssutil.php"));
include(fileDir("file.php")); 

printHeader("Hacker Portal", "<style>" . loadCSSFile(miscDir("css/current.css")) . "</style>");

printBodyInit();

$idgen = 0;
function generateId()
{
	$idgen += 1;
}

//include scripts in body
include(includeDir("include.js.php"));
echo '<script>
	function printinnerHTML() {
		return \'<form> <input type="text"></form>\';	
	}
	</script>';
 

//echo '<h1 onclick="this.innerHTML=\'Ooops!\'">Click on this text!</h1>';
//echo '<p onclick="this.innerHTML=JSEditPostWithText()">

echo '<p onclick="this.innerHTML=printinnerHTML()">
		Click this text to Edit</p>';

//FIX generate id for each post on the webpage
//FIX get number (key/id) of post out of a db
/******
echo '
<p id=\"';

generateId();
echo $idgen;

echo '
"\>
	Edit here
	<button type="button" onclick="ChangePostAndEdit("';

echo	"$idgen";

echo '
")>Click</button>
</p>


';
*******/

printBodyAndHTMLClose();

?>
