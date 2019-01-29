<?php

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Youtube Convertor</title>
         <link rel="stylesheet" href="YT.css">
    </head>
    <body>
        <div>Enter a YouTube URL:
            <input id="myUrl" type="text" value="" />
        </div>
        <div>
            <button id="myBtn">Go</button>
        </div>
        <div>YouTube ID: <span id="myId"></span>

        </div>
        <div>Embed code: <pre id="myCode"></pre></div>
        <script type="text/javascript" src="YT_conv.js"></script>
        <script type="text/javascript" src="jquery-2.2.4.js"></script>

    </body>
</html>
