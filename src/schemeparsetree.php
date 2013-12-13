<?php

/* C language Parse Tree class */

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
include("parsetree.php");

class SchemeParseTree extends ParseTree {

	public function __construct( /* */ ) {
	}

	// contruct a parsetree for rows of code as an element from this array
	public function load($progarray) {
	
		for ($i = 0; $i < count($progarray); $i++) {
			schemeparse($progarray[$i]);
		}
	}

	public function schemeparse($linec) {	
	
		if (strcmp($linec, "(+") >= 0) {
			schemeadd();
		}	
	}

}

?>
