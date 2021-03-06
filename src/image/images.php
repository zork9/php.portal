<?php

/* images piece */

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
include('../include/root.php');
include(utilDir("util.php"));
//FIX Postgressql function also
function printImagesNamesMySQL($connection)
{
$rows = mysqli_query($connection, "SELECT * FROM Images");

echo '
	<ul>
	';
	while ($row = mysqli_fetch_array($result)) {
		echo '<li>' . $row['Name'] . '</li>';
	}
echo '	
	</ul>
	';	
}

function showImage($imagefilename)
{
	echo '<img src="$imagefilename" alt="Image">';
}

//FIX e.g. for png in SVG

function putImageBin($binfile, $imagedata)
{

	$fp = fopen($binfile, "wb+");
	
	fwrite($fp, $imagedata);

	fclose($fp);		

}

?>
