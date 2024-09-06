<?php
$filename = 'ira.txt';

if(file_exists($filename)) {
    $content = file_get_contents($filename);
    echo "Previous content of the file:\n";
    echo $content . "\n";

    $newcontent = $content . "\nadding new content.";
    file_put_contents($filename, $newcontent);
    echo "Updated content added to the file.\n";

    $filearray = file($filename);
    echo "Content as an array:\n";
}
else {
    $initialcontent = "Initial content of the file.";
    file_put_contents($filename, $initialcontent);
    echo "File does not exist. It has been created with initial content.\n";
}

?>
