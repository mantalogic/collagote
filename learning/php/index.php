<?php

    $a = "arif setyawan";
    
    $arr = array(
        'nama' => 'bayu',
        'departure' => array(
            'tujuan' => 'malang',
            'asal' => 'surabaya',
        ),
        'umur'  => '9',
    );
    
    $arr2 = array('bayu','malang','10');
    
    $b=9;
    include 'util.php'; 
    
    $c = add(2,3);
    $d = multiply(4,50);
    
    /*for($i=0;$i<10;$++){
        
    }
    
    while(true){
        
    }*/
    
    foreach($arr2 as $joko => $yuk){
        echo $yuk;
    }
    
?>

<html>
    <body>
    <p>variable = <?=a?></p>
    <p>array1 = <?php print_r($arr);?></p>
    <p>array2 = <?php print_r($arr2);?></p>
    <p><?php echo $b;?></p>
    <p><?php echo $c;?></p>
    <p><?php echo $d;?></p>
        
    </body>
</html>