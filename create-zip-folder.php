<?php 
if(is_dir('demo')==''){
 echo mkdir('demo');
}else{
	$file_path ='demo';
}
$path='http://media.santabanta.com/newsite/cinemascope/feed/prdp-poster.jpg';
$base_name=basename($path);
//$base_name=pathinfo($path);
//$ch=fopen($path,'w');
//fwrite('myfolder/',$ch);
//fclose($ch);
$savqe_path=$file_path .'/'.$base_name;
$ch=file_get_contents($path);
file_put_contents($savqe_path,$ch);






die;
?>









<?php 
$archive_name = "archive.zip"; // name of zip file
$archive_folder = "myfolder"; // the folder which you archivate

$zip = new ZipArchive; 
if ($zip -> open($archive_name, ZipArchive::CREATE) === TRUE) 
{ 
    $dir = preg_replace('/[\/]{2,}/', '/', $archive_folder."/"); 
    
    $dirs = array($dir); 
    while (count($dirs)) 
    { 
        $dir = current($dirs);
		
        $zip -> addEmptyDir($dir); 
        
        $dh = opendir($dir); 
        while($file = readdir($dh)) 
        { 
            if ($file != '.' && $file != '..') 
            { 
                if (is_file($file))
                    $zip -> addFile($dir.$file, $dir.$file); 
				
                elseif (is_dir($file)) 
                    $dirs[] = $dir.$file."/"; 
            } 
        } 
        closedir($dh); 
        array_shift($dirs); 
    } 
    
    $zip -> close(); 
    echo 'Archiving is sucessful!'; 
} 
else 
{ 
    echo 'Error, can\'t create a zip file!'; 
} 
?>