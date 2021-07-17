<?php
session_start();

//ERRORS DISPLAY
	//error_reporting(E_ALL);
	//ini_set('display_errors', 'On');
	
	//include '../v/loginAlert.php';	
	include '../v/structure.php';	
	
	$headerDisplay = new documentHeader();
	$headerDisplay->displayContent();
	
	$subjectDisplay = new subjectHeader('קורס 44 שעות למשיט 60');
	$subjectDisplay->displayContent();
	
	include 'questionFiles/001-004.php';	
	
	$middleDisplay = new middlePart();
	$middleDisplay->displayContent();
	
	//QUESTIONS
	//001 on page
	$questionDisplay = new question($solution_array_01->displaySolutionArray());
	$questionDisplay->displayContent();
	
	//002 on page
	$questionDisplay = new question($solution_array_02->displaySolutionArray());
	$questionDisplay->displayContent();
	
	//003 on page
	$questionDisplay = new question($solution_array_03->displaySolutionArray());
	$questionDisplay->displayContent();
	
	//004 on page
	$questionDisplay = new question($solution_array_04->displaySolutionArray());
	$questionDisplay->displayContent();
	
	$footerDisplay = new footer(1);
	$footerDisplay->displayContent();
?>
			


	



