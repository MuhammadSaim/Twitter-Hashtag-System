<?php

    $connection = mysqli_connect('localhost', 'muhammadsaim', 'muhammadsaim', 'twitterhashtag');

    function hashtag($string){
        return preg_replace('/#+([a-zA-Z0-9_])+/', '<a href="hashtag.php?hashtag=$0">$0</a>', $string);
    }