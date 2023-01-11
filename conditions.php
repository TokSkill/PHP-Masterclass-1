<?php
//if condition

$x='car';

if($x=='car'){
    echo ' its a car';
}


//if else

$x='truck';

if($x=='car'){
    echo ' its a car';
}else{
    echo ' its not a car';

}


//if else if else


$x='truck';

if($x=='car'){
    echo ' its a car';
}elseif($x=='truck'){
    echo 'its a truck';
}else{
    echo ' its not a car';
}

//switch statement

$x='bike';

switch($x){

    case 'car': echo 'its a car'; break;
    case 'truck': echo 'its a truck'; break;
    case 'bike': echo 'its a bike'; break;
    default: 'none of the veichle';

}