<?php

    $path = 'database.txt';
    $handle = fopen($path, 'r');
    $datas = [];
    $handledDatas = [];

    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $row = $line;
            $datas[] = explode('|', $line);
        }
        fclose($handle);
    }

    else {
        echo 'Algum erro ocorreu!';
    }

    foreach($datas as $data) {
        $handledDatas[] = [
            "id" => $data[0],
            "nome" => $data[1],
            "sobrenome" => $data[2],
            "email" => $data[3]
        ];
    }

    print_r($handledDatas);