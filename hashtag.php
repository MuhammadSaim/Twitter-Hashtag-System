<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bulma.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div class="columns" style="margin-top:20px;">
        <div class="column is-half is-offset-one-quarter">
            <h1 class="is-size-1 hast-head" style="margin-bottom: 20px;"></h1> <a href="index.php" style="margin-bottom: 20px;" class="button is-info">Back</a>
            <div class="all-tweets"></div>
        </div>
    </div>

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/script.js"></script>
</body>
<script>
    window.onload = getHashTagTweets;
    function getHashTagTweets(){
        var hashTag = window.location.hash;
        $.post('./backend/Tweet.php', {hashtag: hashTag}, function(data){
            if(data != ""){
                console.log(data);
                $(".hast-head").text(hashTag);
                   var tweets = JSON.parse(data);
                   console.log(tweets);
                    var allTweets = '';
                    for(var i=0; i<tweets.length; i++){
                        allTweets += `<div class="card "><div class="card-content"><p>${tweets[i].tweet}</p></div></div>`;
                    }
                    $('.all-tweets').html(allTweets);
            }
        });
    }
</script>
</html>