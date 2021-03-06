<pre><?php
    /*
      rail fence cipher
      --> 'zig-zag' between the letters of all words

      tvifafwawehes hsesoonvtlimaeloemtcagmen irnoerrldony
      t
                    h
                                              i
                     s
       v
                      e
                                               r
                       s
        i
      ... and so on

      https://en.wikipedia.org/wiki/Rail_fence_cipher
     */
    $orig = 'tvifafwawehes hsesoonvtlimaeloemtcagmen irnoerrldony';
    $noSpaces = str_replace(' ', '', $orig);
    $wordArray = explode(' ', $orig);

    $numberOfWords = count($wordArray);

    $currentPositionInWord = array();
    for($i=0; $i<$numberOfWords; $i++) {
        $currentPositionInWord[$i] = 0;
    }

    $takeFromWord = 0;
    $countDirection = 'up';

    for($j=0; $j<strlen($noSpaces); $j++) {
        echo $wordArray[$takeFromWord][$currentPositionInWord[$takeFromWord]];
        $currentPositionInWord[$takeFromWord] ++;

        if($takeFromWord == ($numberOfWords-1)) {
            $countDirection = 'down';
        } elseif($takeFromWord == 0) {
            $countDirection = 'up';
        }

        if($countDirection == 'up') {
            $takeFromWord ++;
        } else {
            $takeFromWord --;
        }
    }

    ?>


<hr /><hr />
solution:
    this version of novatel firmware allowed me to change my esn

answer to the solution:
    1.05
</pre>