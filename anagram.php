<?php
function anagramCheck($a,$b){
	if(count_chars($a,1)== count_chars($b,1)){
		return "These two strings are anagram";
	}
	else{
		return "These two strings are not anagram";
	}
    
    }
    print_r(anagramCheck('polo','pool')); 
    echo  "<br>";
	print_r(anagramCheck('cat','rat'));

?>