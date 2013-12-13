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
include('util.php');
include('file.php'); 

printHeader("Open Portal");
printBodyInit();

$idgen = 0;
function generateId()
{
	$idgen += 1;
}

//include scripts in body
include('include.js.php'); 

echo '
<p onmousedown="JSEditPost()">
	You can write something here when you click this section
	</p>';

//FIX generate id for each post on the webpage
//FIX get number (key/id) of post out of a db
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

printBodyAndHTMLClose();

?>
