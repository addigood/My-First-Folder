<?php
$MYSQL_HOST="localhost";
$MYSQL_USERNAME="root";
$MYSQL_PASSWORD="";
$MYSQL_DATABASE="join";
$MYSQL_TABLE="first";
mysql_connect( "$MYSQL_HOST", "$MYSQL_USERNAME", "$MYSQL_PASSWORD" ) or die( mysql_error( ) );
mysql_select_db( "$MYSQL_DATABASE") or die( mysql_error( $conn ) );


$filename="gautam";
$csv_filename = $filename."_".date("Y-m-d_H-i",time()).".csv";

header("Content-Type: application/vnd.ms-excel");

$sql = "SELECT * FROM $MYSQL_TABLE";

$result=mysql_query($sql);

if(mysql_num_rows($result)>0){

$fileContent="Beneficiary Name,Beneficiary Account No,Beneficiary Bank Code\n";
    while($data=mysql_fetch_array($result))
    {
    $fileContent.= "".$data['id'].",".$data['name'].",".$data['address']."\n";
}


$fileContent=str_replace("\n\n","\n",$fileContent);
    echo $fileContent;
}
header("content-disposition: attachment;filename=$csv_filename"); ?>