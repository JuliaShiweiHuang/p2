<?php
// word array purpose: to pick up a random word for the password generator function
  $wordArray = array("extant", "ephemeral", "capricious", "corroborate", "loquacious", "erudite", "pragmatic", "ambivalent", "soporific", "prolific", "auspicious", "sanguine", "enervate", "magnanimous", "mercurial", "belligerent", "fastidious", "reticent", "inculpate");
  $wordArrayLength = count($wordArray);

// this is my symbol array
  $symbolArray = array("!","@", "#", "$", "%", "^", "&", "*", "(", ")", "<", ">", "?");
  $symbolArrayLength = count($symbolArray);

  # get the data from index.php;
  $numOfWords = $_GET['number_of_words'];
  $randWordArrayIndex = rand(0, $wordArrayLength-1);
  $wordArray[$randWordArrayIndex];

  $randSymbolArrayIndex = rand(0, $symbolArrayLength-1);
  $symbolArray[$randSymbolArrayIndex];

 ?>
