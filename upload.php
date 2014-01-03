<?php
$file_name = $_FILES['fupload']['name'];

$file_type = $_FILES['fupload']['type'];

print "Path: ".$_FILES['fupload']['tmp_name']."<br />";

print "Name: $file_name <br />";

print "Size: ".$_FILES['fupload']['size']."<br />";

print "Type: $file_type <br />";

if(copy($_FILES['fupload']['tmp_name'], "$file_name"))
{
    print "Upload Success";
}
else
{
    print "Error occur";
}
?>
