<?php
        $location = './csv-data/';
        $file_name = 'wtp_data.csv';
        $path = $location.$file_name;

        $allow_ext = array('csv');

        $file_ext = pathinfo($path);

        if (file_exists($path)) {
            
                $data = array(
                    'msg' => 'File exists',
                    'status' => false
                );
                

            if(in_array($file_ext['extension'], $allow_ext)){
                
                $data = array(
                    'msg'    => 'File is exists and file extension is valid.',
                    'dataFile' => $path,
                    'status' => true
                );
                
            }else {
                $data = array(
                    'msg'    => 'File is exists but file extension is invalid.',
                    'status' => false
                );
                
            }
        }else {
            $data = array(
                'msg' => 'File not exists',
                'status' => false
            );
            
        }
        echo json_encode($data);
    ?>
