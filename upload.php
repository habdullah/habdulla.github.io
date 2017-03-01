<?php
define('UPLOAD_DIR', 'uploads/');
// get the temporary name that PHP gave to the uploaded file
$tmp_filename=$_FILES["test.wav"]["tmp_name"];
// rename the temporary file (because PHP deletes the file as soon as it's done with it)
rename($tmp_filename,"/tmp/uploaded_audio.wav");
chmod("/tmp/uploaded_audio.wav",0755);
?>