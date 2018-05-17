<?php

    include_once  '../include/connection.php';

   

    if(isset($_POST['action']) && !empty($_POST['action'])){
        
        if($_POST['action'] == 'insert'){
            if(isset($_POST['tweet']) && !empty($_POST['tweet'])){
                $tweet = mysqli_real_escape_string($connection, $_POST['tweet']);
                $insertSql = "INSERT INTO `tweets` (tweet, created_at, modified_at) VALUES ('$tweet', NOW(), NOW())";
                mysqli_query($connection, $insertSql);
                echo "inserted";
            }
        }


        if($_POST['action'] === 'retrive'){
            $sql = "SELECT * FROM tweets ORDER BY `id` DESC";
            $tweets = mysqli_query($connection, $sql);
            $hashtagTweets = array();
            while($tweet = mysqli_fetch_assoc($tweets)){
                $singleHashTagedTweet = [
                    'id' => $tweet['id'],
                    'tweet' => hashtag($tweet['tweet']),
                    'created_at' => $tweet['created_at'],
                    'modified_at'=> $tweet['modified_at']
                ];
                array_push($hashtagTweets, $singleHashTagedTweet);
            }
            echo json_encode($hashtagTweets);
        }



    }

 



    if(isset($_POST['hashtag']) && !empty($_POST['hashtag'])){
        $hashtag = mysqli_real_escape_string($connection, substr( $_POST['hashtag'], 1));
        $checkSQl = "SELECT * FROM `tweets` WHERE `tweet` REGEXP '^#$hashtag' OR `tweet` REGEXP ' #$hashtag'";
        $tweets = mysqli_query($connection, $checkSQl);
        $hashtagTweets = array();
        while($tweet = mysqli_fetch_assoc($tweets)){
            $singleHashTagedTweet = [
                'id' => $tweet['id'],
                'tweet' => hashtag($tweet['tweet']),
                'created_at' => $tweet['created_at'],
                'modified_at'=> $tweet['modified_at']
            ];
            array_push($hashtagTweets, $singleHashTagedTweet);
        }
        echo json_encode($hashtagTweets);
    }