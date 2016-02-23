<?php $files = array(
    'Desert.jpeg',
    'Hydrangeas.jpeg',
    'Jellyfish.jpeg',
	'new.txt',
	'file.php'
);
 
$valid_files = array();
if(is_array($files)) {
    foreach($files as $file) {
        if(file_exists($file)) {
            $valid_files[] = $file;
        }
    }
	
}

if(count($valid_files > 0)){
    $zip = new ZipArchive();
	
	
    $zip_name = "zipfile.zip";
	
	//$path="New folder/".$zip_name;//Save Zip File in pertucular 'New Folder'
	$path=$zip_name; //Random Save
	
    if($zip->open($path, ZIPARCHIVE::CREATE)!==TRUE){
        $error .= "* Sorry ZIP creation failed at this time";
    }
 
    foreach($valid_files as $file){
        $zip->addFile($file);
    }
    $zip->close();
    if(file_exists($zip_name)){
        // force to download the zip
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private",false);
        header('Content-type: application/zip');
        header('Content-Disposition: attachment; filename="'.$zip_name.'"');
        readfile($zip_name);
		
        // remove zip file from temp path
        unlink($zip_name);
    }
 
} else {
    echo "No valid files to zip";
    exit;
}
?>