<?php

function fibonacci($n){
    if ($n <= 2){
        return 1;
    }else{
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}


for($i = 0; $i <= 10; $i++){
    echo(fibonacci($i).'<br>');
}



?>