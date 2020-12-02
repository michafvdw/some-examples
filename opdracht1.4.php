<!--  Opdracht 1.4 voor programmeren 2
      Bepaalt aan de hand van je verjaardag welk sterrenbeeld je bent-->

<?php

//hardcoded birthday
$day = 22;
$month = 9;

//checks date and month and displays sign
if ( ($month == 1 && $day < 20) || ($month == 12 && $day > 22) ){
    echo "Je bent een steenbok";
}

else if ( ($month == 1 && $day > 20) || ($month == 2 && $day < 19) ){
    echo "Je bent een waterman";
}

else if ( ($month == 2 && $day > 18) || ($month == 3 && $day < 20) ){
    echo "Je bent vissen";
}

else if ( ($month == 3 && $day > 19) || ($month == 4 && $day < 20) ){
    echo "Je bent een ram";
}

else if ( ($month == 4 && $day > 19) || ($month == 5 && $day < 21) ){
    echo "Je bent een stier";
}

else if ( ($month == 5 && $day > 20) || ($month == 6 && $day < 21) ){
    echo "Je bent Tweelingen";
}

else if ( ($month == 6 && $day > 20) || ($month == 7 && $day < 23) ){
    echo "Je bent een Kreeft";
}

else if ( ($month == 7 && $day > 22) || ($month == 8 && $day < 23) ){
    echo "Je bent een leeuw";
}

else if ( ($month == 8 && $day > 22) || ($month == 9 && $day < 23) ){
    echo "Je bent een maagd";
}

else if ( ($month == 9 && $day > 22) || ($month == 10 && $day < 23) ){
    echo "Je bent een weegschaal";
}

else if ( ($month == 10 && $day > 22) || ($month == 11 && $day < 22) ){
    echo "Je bent een Schorpioen";
}

else if ( ($month == 11 && $day > 21) || ($month == 12 && $day < 22) ){
    echo "Je bent een boogschutter";
}