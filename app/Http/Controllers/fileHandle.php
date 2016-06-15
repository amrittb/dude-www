<?php

namespace App\Http\Controllers;



class fileHandler extends Controller{


    /**
     * appends contents to python files
     * @param $filename
     * @param $content
     */
    public function appendToFile($filename, $content){
        if(file_put_contents($filename, $content . PHP_EOL, FILE_APPEND)){
            return true;
        } else {
            return false;
        }


    }

    public function undoChange($filename, $change)
    {
        $out = array();
        $data = file($filename);

        foreach ($data as $line) {
            if (trim($line) != $change) {
                $out[] = $line;
            }
        }

        $fp = fopen($filename, "w+");
        flock($fp, LOCK_EX);
        foreach ($out as $line) {
            fwrite($fp, $line);
        }

        flock($fp, LOCK_UN);
        fclose($fp);
    }
}