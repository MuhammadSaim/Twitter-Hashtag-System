$(document).ready(function(){
    $('#tweetBtn').on('click', function(e){
        e.preventDefault();
        var tweet = $('#tweet').val();
        $('#tweet').val('');
        $.post('./backend/Tweet.php', {tweet: tweet, action:'insert'}, function(data){
            console.log(data);
            updateAndShow();
        });
    });
});

window.onload = updateAndShow;

function updateAndShow(){
    $.post('./backend/Tweet.php', {action: 'retrive'}, function(data){
        if(data != null){
            //console.log(data);
            var tweets = JSON.parse(data);
            var allTweets = '';
            for(var i=0; i<tweets.length; i++){
            allTweets += `<div class="card "><div class="card-content"><p>${tweets[i].tweet}</p></div></div>`;
            }
            $('.all-tweets').html(allTweets);
       }
    });
}