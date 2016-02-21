<?php
  $wordArray = array("extant", "ephemeral", "capricious", "corroborate", "loquacious", "erudite", "pragmatic", "ambivalent", "soporific", "prolific", "auspicious", "sanguine", "enervate", "magnanimous", "mercurial", "belligerent", "fastidious", "reticent", "inculpate");
  $wordArrayLength = count($wordArray);

  $symbolArray = array("!","@", "#", "$", "%", "^", "&", "*", "(", ")", "<", ">", "?");
  $symbolArrayLength = count($symbolArray);


  # get the data from index.php;
  // if(isset($_POST['number_of_words'])) {
      $numOfWords = $_GET['number_of_words'];
    //   $passWordArray = []; #password array to store all the random generated strings;
    //   for ($i = 0; $i < $numOfWords-1; $i++) {
          $randWordArrayIndex = rand(0, $wordArrayLength-1);
          # echo $randWordArrayIndex;
          $wordArray[$randWordArrayIndex];

          $randSymbolArrayIndex = rand(0, $symbolArrayLength-1);
          $symbolArray[$randSymbolArrayIndex];
        //   echo $wordArray[$randWordArrayIndex];
        //   echo "-";
        // $passWordArray[$numOfWords] = $wordArray[$randWordArrayIndex];
    //   }
    //   $randWordArrayIndex = rand(0, $wordArrayLength-1);
    //   echo $wordArray[$randWordArrayIndex];
  // }

 ?>
