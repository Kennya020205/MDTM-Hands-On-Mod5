<?php
$caseString = "HOLY ANGEL UNIVERSITY";
$nameString = "Kendrick Neil Y. Aguarin";
$trimString = "   WEB DEV CODING   ";

$lower = strtolower($caseString);
$upper = strtoupper($caseString);
$capital = ucwords(strtolower($caseString));

$charCount = strlen($nameString);  
$wordCount = str_word_count($nameString);  
$ltrimmed = ltrim($trimString);
$rtrimmed = rtrim($trimString);
$trimmed = trim($trimString);

$replaced = str_replace("PHP", "PHP 8", "PHP String Processing");
$ireplaced = str_ireplace("php", "PHP", "php string processing");
$repeated = str_repeat("WEB ", 3);

$reverse = strrev("HAU");
$substring = substr("PHP String Processing", 0, 15);
$position = strpos("PHP", "P");
$shuffle = str_shuffle("ABC");
$ucfirst = ucfirst("holy angel");
$vowelCount = preg_match_all('/[aeiou]/i', "HAU");

$strLength = strlen("Hello");
$strToLower = strtolower("WEB DEVELOPMENT");  
$wordWrap = wordwrap("WEBDEVCODING", 3, " ", true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Built-in String Functions</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<table>
<caption>PHP Built-in String Functions</caption>

<tr><th colspan="2">Changing the Case of Characters</th></tr>
<tr><td>Lowercase</td><td><?= $lower ?></td></tr>
<tr><td>Uppercase</td><td><?= $upper ?></td></tr>
<tr><td>Capitalize</td><td><?= $capital ?></td></tr>

<tr><th colspan="2">Counting Characters and Words</th></tr>
<tr><td>Number of Characters</td><td><?= $charCount ?></td></tr>
<tr><td>Number of Words</td><td><?= $wordCount ?></td></tr>

<tr><th colspan="2">Removing and Replacing Characters</th></tr>
<tr><td>Remove whitespaces from left</td><td>"<?= $ltrimmed ?>"</td></tr>
<tr><td>Remove whitespaces from right</td><td>"<?= $rtrimmed ?>"</td></tr>
<tr><td>Remove whitespace from left and right</td><td>"<?= $trimmed ?>"</td></tr>
<tr><td>String replace</td><td><?= $replaced ?></td></tr>
<tr><td>String ireplace</td><td><?= $ireplaced ?></td></tr>
<tr><td>String repeat</td><td><?= $repeated ?></td></tr>

<tr><th colspan="2">Other Built-in Functions</th></tr>
<tr><td>Reverse String ("HAU")</td><td><?= $reverse ?></td></tr>
<tr><td>Substring (0,15)</td><td><?= $substring ?></td></tr>
<tr><td>Position of Word ("P" in "PHP")</td><td><?= $position ?></td></tr>
<tr><td>Shuffle String ("ABC")</td><td><?= $shuffle ?></td></tr>
<tr><td>Uppercase First Letter ("holy angel")</td><td><?= $ucfirst ?></td></tr>
<tr><td>Count Vowels ("HAU")</td><td><?= $vowelCount ?></td></tr>
<tr><td>String Length ("Hello")</td><td><?= $strLength ?></td></tr>
<tr><td>Convert to Lowercase ("WEB DEVELOPMENT")</td><td><?= $strToLower ?></td></tr>
<tr><td>Word Wrap (insert spaces)</td><td><?= $wordWrap ?></td></tr>

</table>

</body>
</html>