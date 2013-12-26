<?php

/* db functionality */

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
include(dbDir("dbinterface.php");
include(dbDir("dbdata.php");
include(dbDir("dbbase.php");
include(dbDir("dbfield.php");

class phpHPdb extends phpHPdbBase 
{
	public function __construct() {

		$_dbarray = array();	

	}

	public function addFieldRow($fieldrow) {
		//check that fields compare in the fieldrow
			//overruns different size fieldrows
		$i = 0;
		while ($i < count($_dbarray) {
			if (strncmp($_dbarray($i)->getFieldN(0)->get(0),
				$fieldrow->getFieldN(0)->get(0),
				strlen($fieldrow->getFieldN(0)->get(0)))) {
				return NULL;		
			}	
			$i++;	
		}
		array_push($fieldrow, $_dbarray);
	}

	private $_dbarray;
		
}	
