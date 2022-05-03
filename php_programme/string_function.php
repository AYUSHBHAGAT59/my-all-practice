<!DOCTYPE html>
<html>
<head>
	<title>php programming</title>
</head>
<body>
	<?php
	$var = 'my name is ayush';
	echo var_dump($var);
	// 1. string function: strlen($variable-name);
	// is used to show the given string length
	echo "<br>".strlen($var);

	// 2. str_word_count()
	//is used to counting the word
	echo "<br>".str_word_count($var);

	// 3. strrev()
	//isused to reverse the word
	echo "<br>".strrev($var);

	// 4. strpos()
	// is used to find something in the string
	echo "<br>".strpos($var,"ayush");

	// 5. str_replace(search, replace, subject);
	// is used to replace the string or word
	echo "<br>".str_replace("ayush", "soni", $var);

	 // 6.str_repeat()
	 // is used to repeat things
	 echo "<br>".str_repeat($var, 100);

	 // 7. rtrim(str)
	  // is used to trim the blank spaces from right side
	  echo "<br>". rtrim("<pre>     ayush bhagat     </pre>"); 

	  // 8. ltrim(str)
	  // is used to trim left side blank spaces
	  echo "<br>". ltrim("<pre>     ayush bhagat     </pre>"); 

	?>
</body>
</html>