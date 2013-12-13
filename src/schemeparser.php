<?php

/* Scheme language parser */

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
include("schemeparsetree.php");

class SchemeParser {
	protected $tree = new SchemeParseTree;	

	public function __construct( /* */ ) {
	}

	// contruct a parsetree for rows of code as an element from this array
	public function load($progarray) {
	
		for ($i = 0; $i < count($progarray); $i++) {
			$tree->schemeparse($progarray[$i]);
		}
	}

	public function schemeparse($linec) {
		$i = 0;		

		$i = $tree->skipWhiteSpace($linec, $i);
		$i = $tree->searchForOpeningParens($linec);
		$i = $tree->skipWhiteSpace($linec, $i);

		if ($tree->cmpAndYield("+", $linec) != "") {
			$i = skipWhiteSpace($linec, 2);
			schemeadd(getSubstringN($linec, $i);
		}	
		else if ($tree->cmpAndYield("-", $linec) != "") {
			$i = skipWhiteSpace($linec, 2);
			schememinus(getSubstringN($linec, $i);
		}	
		else if ($tree->cmpAndYield("*", $linec) != "") {
			$i = skipWhiteSpace($linec, 2);
			schememul(getSubstringN($linec, $i);
		}	
		else if ($tree->cmpAndYield("(/", $linec) != "") {
			$i = skipWhiteSpace($linec, 2);
			schemedivide(getSubstringN($linec, $i);
		}	
	}

	public function schemeadd($subline) {
		$tree->scheme2opertree("+", $subline);
	}

	public function schememinus($subline) {
		$tree->scheme2opertree("-", $subline);
	}

	public function schememul($subline) {
		$tree->scheme2opertree("*", $subline);
	}

	public function schemedivide($subline) {
		$tree->scheme2opertree("/", $subline);
	}

	//heavy utility function
	public function scheme2opertree($operstr, $line) {
		$opnd1 = $tree->getNextSubString($line);
		$opnd2 = $tree->getNextSubStringN($line, strlen($opnd1));

		$tn = new TreeNode(); 
		$tn->addData("operand1", $opnd1);
		
		$tn2 = new TreeNode(); 
		$tn2->addData("operand2", $opnd2);
		
		$tree->addNodeRec($operstr, $tn1, $tn2);	
	}
	
}

?>
