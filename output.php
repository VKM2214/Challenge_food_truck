
<?php
    $mysongs = simplexml_load_file('test.xml');
    $tit = $_POST['name'];
    foreach ($mysongs as $songinfo):
    	if ($songinfo->title == $tit){
        $title=$songinfo->title;
        $artist=$songinfo->artist;
        $date=$songinfo['dateplayed'];
        echo '<li><div class="title">',$title,'</div><div class="artist">by ',$artist,'</div><time>',$date,'</time></li>n';
    }
    endforeach;
    echo "</ul>";
?>