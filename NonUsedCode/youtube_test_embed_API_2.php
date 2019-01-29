<?php
$api_key = 'AIzaSyCbI_FZd166sWyTuOL38FFYDlPoFB-uVwU';
$playlist_id =  'PLFTLI0BO_Z5mApPiwRLCVrbP1hFqzuOdi'; //

//https://www.youtube.com/watch?v=3p8EBPVZ2Iw&list=PLFTLI0BO_Z5mApPiwRLCVrbP1hFqzuOdi
$api_url1 = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId='. $playlist_id . '&key=' . $api_key;
echo $api_url1;
$playlist = json_decode(file_get_contents($api_url1));


//deze code haalt uit de Youtube API alle JSON data en worden via foreach loop uitgelezen in html
//

//$title = "6 PACK ABS For Beginners… Can Do Anywhere | 2018";


//ERROR FIXEN
//maxResults !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

$keyword = "Party";
$api_url2 = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $keyword . '&maxResults=' . MAX_RESULTS . '&key=' . $api_key;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <ul>
        <?php foreach($playlist->items AS $item): ?>
          <li><img src="<?php echo $item->snippet->thumbnails->default->url; ?>">
              <h4><?php echo $item->snippet->title;  ?></h4>
          </li>
        <?php endforeach; ?>
        </ul>

        <div>
        <?php
            for ($i = 0; $i < MAX_RESULTS; $i++) {
                $videoId = $value['items'][$i]['id']['videoId'];
                $title = $value['items'][$i]['snippet']['title'];
                $description = $value['items'][$i]['snippet']['description'];
            }
        ?>
        </div>
    </body>
</html>
