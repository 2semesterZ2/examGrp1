<?php 
    $f = new FilesystemIterator("gallery/", FilesystemIterator::SKIP_DOTS);  

    echo "<p id='nbr'>" . iterator_count($f) . "</p>";
?>
    
