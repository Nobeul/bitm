<?php
    // FOR
    // WHILE 
    // DO WHILE 
    // FOREACH 
    // for($x=10;$x>=5;$x--){
    //     // echo 'Munmun';
    //     echo $x.'<br/>';
    // }

    // $x = 10;
    // while ($x<=20) {
    //     echo $x.'<br/>';
    //     $x++;
    // }
    
    // $x;
    // $x=10;
    // echo '<br/>';

    // $data=array('10','20','30');
    // $data=array('name'=>'BITM','city'=>'Dhaka','country'=>'Bangladesh');
    // $data=array();

    // $data[0]=10;
    // $data[1]=20;
    // $data[2]=30;

    // $data['name']='BITM';
    // $data['city']='Dhaka';
    // $data['country']='Bangladesh';


    // echo $data[1];
    // echo '<br/>';
    // echo $data['country'];

    // foreach($data as $x){
    //     // echo $x; 
    //     echo $x.'<br/>';
    // }

        // echo '<pre>';
        // print_r($data);
        // var_dump($data); 

    
        
        $data=array();
        $data[0][0]=10;
        $data[0][1]=20;
        $data[0][2]=30;

        $data[1][0]=40;
        $data[1][1]=50;
        $data[1][2]=60;

        $data[2][0]=70;
        $data[2][1]=80;
        $data[2][2]=90;
        
        $data[3][0]=100;
        $data[3][1]=110;
        $data[3][2]=120;

        foreach($data as $v_data){
            // echo $v_data[0].''.$v_data[2].'<br/>';
            foreach($v_data as $v_v_data){
                echo $v_v_data.'';
            }
            echo '<br/>';
        }




        






    






?>