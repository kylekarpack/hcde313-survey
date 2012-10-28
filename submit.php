<?php

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q6 = $_POST["q6"];
$q7 = $_POST["q7"];
$q8 = $_POST["q8"];
$q9 = $_POST["q9"];
$q10 = $_POST["q10"];
$q11 = $_POST["q11"];

$q6 =  implode(", ", $q6);
$q7 =  implode(", ", $q7);
$q10 =  implode(", ", $q10);

$array = array(
			1 => $q1,
			2 => $q2,
			3 => $q3,
			4 => $q4,
			5 => $q5,
			6 => $q6,
			7 => $q7,
			8 => $q8,
			9 => $q9,
			10 => $q10,
			11 => $q11);
			
$con = mysql_connect("vergil.u.washington.edu:7468", "USERNAME", "PASSWORD");
if (!$con) {
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("survey_results", $con);

// Get the user number. This is an awful way to do it.
$uid = mysql_num_rows(mysql_query("SELECT * FROM results"));
$uid = ($uid / 11) + 1; //start at 1, not 0

// Get the number of rows and increment it to get the new primary key
$result = mysql_query("SELECT * FROM results");
$aid = mysql_num_rows($result);
$aid = $aid + 1;

$count = 1; // Track the question number

foreach ($array as $el) {
	$el = mysql_real_escape_string($el);
	$sql = "INSERT INTO results (answer_id, user_id, question_number, answer)
			VALUES ('$aid', '$uid', '$count', '$el');";
	if (!mysql_query($sql,$con)) { // Else runs it?
		die('Error: ' . mysql_error());
	}
	$count++;
	$aid++;
}

mysql_close($con);


/***********************HTML*********************/
include("common.html"); ?>
	<h2>Thank you!</h2>
	<p>Your responses have been recorded successfully. Your participation in this study is greatly appreciated. Please <a href="mailto:kkarpack@uw.edu"> let me know </a> if you have any concerns or suggestions for me.</p><br>
	<p>Link to this study: </span> <a href="http://students.washington.edu/kkarpack/survey/">http://students.washington.edu/kkarpack/survey/</a></p><br>&nbsp;
	<a class="fb" target="_blank" href="http://www.facebook.com/sharer.php?s= 100&amp;p[title]=HCDE 313 Survey&amp;p[url]=http://students.washington.edu/kkarpack/survey&amp;p[images][0]=http://students.washington.edu/kkarpack/survey/survey1.jpg&amp;p[summary]=Take a brief survey to help out Kyle in his research and tell us what you know about the skills gap in the current job market"><img src='http://static.ak.facebook.com/images/share/facebook_share_icon.gif?6:26981' />&nbsp;&nbsp;Share on Facebook</a>