<?php

function remove_directory($dir) {
    $files = array_diff(scandir($dir), array('.', '..'));
    foreach ($files as $file) {
        $path=$dir."/".$file;
        if (is_dir($path)) {
            remove_directory($path);
        } else {
            @unlink($path);
        }
    }

    return @rmdir($dir);   
}

/*清空缓存*/
class Clear extends AdminBase{

    public final function rmfile(){
        $dir =$GLOBALS['conf']['cache']['dir'];
        if (!is_dir($dir))
            throw new Exception('非法目录: '.$dir);

        remove_directory($dir);
     }
	 
    public final function rmfileqiantai(){
        $dir =$GLOBALS['conf']['cache']['dirqiantai'];
        if (!is_dir($dir))
            throw new Exception('非法目录: '.$dir);

        remove_directory($dir);
     }
	 
    public final function rmfilewap(){
        $dir =$GLOBALS['conf']['cache']['dirwap'];
        if (!is_dir($dir))
            throw new Exception('非法目录: '.$dir);

        remove_directory($dir);
     }
}
