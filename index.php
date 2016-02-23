<!DOCTYPE html>
<html>
<head>

	<title>xkcd Password Generator</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link href='http://netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css' rel="stylesheet">
	<link href='css/style.css' rel='stylesheet'>
    <?php require('logic.php'); ?>

</head>

<body>
	<div class='container'>
		<h1>xkcd Password Generator</h1>
            <p class ="displayPassword">
				<!-- using a for loop to generate password based on customer's "number of words" input -->
                <?php
                for ($i = 0; $i < $numOfWords-1; $i++) {
                    echo $wordArray[$randWordArrayIndex];
                    $randWordArrayIndex = rand(0, $wordArrayLength-1);
                    echo "-";
                }
                echo $wordArray[$randWordArrayIndex];

				if ($_GET['add_number'] == 'addNumber') { # if checkbox is marked for "add a number" option;
					echo rand(0, 99); # generate a random number between 0 and 99;
				}

				if ($_GET['add_symbol'] == 'addSymbol') { # if checkbox is marked for "add a symbol" option;
					echo $symbolArray[$randSymbolArrayIndex]; # generate a '@' symbol;
				}
                ?>
            </p>


		<form action ='index.php' method='GET'>
			<p class='options'>

				<label for='number_of_words'># of Words</label>
				<input maxlength=1 type='text' name='number_of_words' id='number_of_words' >  (Max 9)
				<br>

				<input type='checkbox' name='add_number' id='add_number' value='addNumber'>
				<label for='add_number'>Add a number</label>
				<br>
				<input type='checkbox' name='add_symbol' id='add_symbol' value='addSymbol' >
				<label for='add_symbol'>Add a symbol</label>
			</p>

            <div class='buttonHolder'>
    			<input type='submit' class='btn btn-default' value='Gimme Another'>
				<br>

				<p style ="color: red;">
					<!-- Question: if a user types a character, this function doesn't work though. Any suggestions? -->
					<?php
						if ($_GET['number_of_words'] != ('1' || '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9') ) {
							echo "Invalid symbol entered. Please enter a number between 1 and 9";
						}
					?>
				</p>
                <br><!--Question: not sure whether this is good practice. But I want to separate the 'Gimme Another button with the comics' -->
				<!-- so besides the <br> tag, what else could give me some space between a paragraph and a comic? -->
            </div>

		</form>

		<p class='details'>
			<a href='http://xkcd.com/936/'>xkcd password strength</a><br>

			<a href='http://xkcd.com/936/'>
				<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
			<br>
		</p>

	</div> <!--div class container -->

	<script src='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>

</body>
</html>
