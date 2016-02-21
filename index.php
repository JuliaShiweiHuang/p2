
<!DOCTYPE html>
<html>
<head>

	<title>xkcd Password Generator</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link href='http://netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css' rel="stylesheet">
	<link href='css/style.css' rel='stylesheet'>
    <style>
	h1, h3 {text-align:center;}
	p {text-align:center;}
	p.displayPassword {
		font-size:3rem;
		color:#f39c12;
		background-color:#eee;
		font-weight:800;
		padding:15px;
		font-family:consolas,courier;
		margin-bottom:25px;
		text-align:center;
	}

	</style>
    <?php require('logic.php'); ?>

    <!-- <?php echo $wordArrayLength ?> -->
</head>

<body>
	<div class='container'>
		<h1>xkcd Password Generator</h1>
		<!-- <p class='password'>
        	treated-proper-later-fox		</p> -->
            <p class ="displayPassword">
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
					// $randSymbolArrayIndex = rand(0, $symbolArrayLength-1);
					// echo $symbolArray[$randSymbolArrayIndex];
					echo "@";
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

                <br></br> <!--Question: not sure whether this is good practice. But I want to separate the 'Gimme Another button with the comics' -->

    							<div class='error'>
    									</div>
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
