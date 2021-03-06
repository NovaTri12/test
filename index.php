<?php

echo "pattern 1 <dl>";

for ($i=0; $i <= 5; $i++) { 
    for ($j=0; $j < $i+1; $j++) { 
        echo "*";
    }
    echo "<br>";
}

echo "pattern 2 <dl>";

for ($i=0; $i <= 5; $i++) { 
    for ($j=5 - $i; $j >= 1 ; $j--) { 
        echo "*";
    }
    echo "<br>";
}

