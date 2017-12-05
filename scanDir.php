<?php

/**
 * 遍历文件夹下的所有的文件和子文件夹
 */
function my_scandir($dir)
{
    $files = array();
    if (is_dir($dir)) {
        if ($handle = opendir($dir)) {
            while (($file = readdir($handle)) !== false) {
                if ($file != '.' && $file != '..') {
                    if (is_dir($dir . '/' . $file)) {
                        $files[$file] = my_scandir($dir . '/' . $file);
                    } else {
                        $files[] = $dir . '/' . $file;
                    }
                }
            }
            closedir($handle);
            return $files;
        }
    }
}

$path = '/usr/share/fonts/';
print_r(my_scandir($path));
