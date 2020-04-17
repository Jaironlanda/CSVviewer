<?php
    //set path 
    $location = './csv-data/';
    // File name
    $file_name = 'wtp_data.csv';
    // full path and file name
    $path = $location.$file_name;
    //set extension name
    $allow_ext = array('csv');
    //check file extension 
    $file_ext = pathinfo($path);

    if (file_exists($path)) {
            $data = array(
                'msg'       => 'File exists',
                'status'    => false
            );
        if(in_array($file_ext['extension'], $allow_ext)){
            $data = array(
                'msg'       => 'File is exists and file extension is valid.',
                'dataFile'  => $path,
                'status'    => true
            );
        }else {
            $data = array(
                'msg'    => 'File is exists but file extension is invalid.',
                'status' => false
            );
            
        }
    }else {
        $data = array(
            'msg'       => 'File not exists',
            'status'    => false
        );
        
    }

    // return value
    echo json_encode($data);
?>
