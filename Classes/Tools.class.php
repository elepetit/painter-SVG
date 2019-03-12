<?php

class Tools {

    static function get_txt($fileName){

        if (($handle = fopen($fileName, "a+")) !== FALSE) {
            $shapes = [];

            while (($data = fgets($handle)) !== FALSE) {

                array_push($shapes,$data);

            }
            fclose($handle);
        }
        return $shapes;
    }


    static function save_txt($fileName,$data){

        $fp = fopen($fileName,'a');

        foreach ($data as $fields) {

            fwrite($fp, $fields."\n");

        }

        fclose($fp);
    }

    static function clear_txt($fileName){

        $fp = fopen($fileName,'w');
        fclose($fp);
    }

}
