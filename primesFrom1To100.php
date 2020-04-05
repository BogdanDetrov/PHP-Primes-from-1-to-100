<?php
for($i=2; $i<101; $i++) {
    if ($i % 2 == 0 and $i != 2 ) {
        continue;
    }
    else if($i % 3 == 0 and $i != 3) {
        continue;
    }
    else if ($i%5==0 and $i != 5) {
        continue;
    }
    else if($i % 7 ==0 and $i!=7) {
        continue;
    }
    else {
        echo $i ."<br>";
    }

}