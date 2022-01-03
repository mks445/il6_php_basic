<?php
//$products = [
//
//    [
//
//        'name' => 'Siulai',
//
//        'price' => 12.4,
//
//        'img' => 'https://siulupinkles.lt/wp-content/uploads/2021/01/Mezgimo-siulai-ritese-italiski-siulai-kasmyras-kasmyro-siulai-silko-siulai-silkas.jpg'
//
//    ],
//
//    [
//
//        'name' => 'adata',
//
//        'price' => 1.99,
//
//        'img' => 'https://www.vle.lt/uploads/_CGSmartImage/70839_3-26c56fce05f1ac6e0247f6daa86648aa.jpg'
//
//    ],
//
//    [
//
//        'name' => 'virbalai',
//
//        'price' => 3.99,
//        'specialPrice'=> 1.99,
//
//        'img' => 'https://mezgimomanija.lt/wp-content/uploads/2019/02/3397.jpg'
//
//    ],
//
//    [
//
//        'name' => 'vaselai',
//
//        'price' => 3.99,
//        'specialPrice'=> 2.99,
//
//        'img' => 'https://mezgimomanija.lt/wp-content/uploads/2019/02/3397.jpg'
//
//    ],
//
//];
//
//
//
//
//foreach($products as $product){
//
//        echo '<img width="60" src="'. $product['img'] .'"/>';
//
//        echo '<h2>'. $product["name"] . '</h2>';
//
//        if($product["specialPrice"]){
//            echo '<del>'.$product ['price'].'</del>'. $product['specialPrice'];
//
//        }else{
//            echo '<h3>'. $product["price"] . '</h3>';
//
//        }
//
//        //echo '<h3>'. $product["price"] . '</h3>';
//
//        echo '<hr>';
//
//        for($i=0; $i<10; $i++){
//            echo '<br>';
//            echo $i;
//
//        }

for($y = 0; $y < 10; $y++){

    for($x = 0; $x < 10; $x++){

        echo '.';

    }

    echo '<br>';

}


for ($y = 0; $y < 10; $y++) {
    for ($x = 0; $x < 10; $x++) {
        if ($y % 2 == 1) {
            echo '#';
        } else {
            if ($x % 2 == 1) {
                echo '#';
            } else {
               // echo '.';
            }
        }
    }
    echo '<br>';
}
