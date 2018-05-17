<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitter Hashtag System</title>
    <link rel="stylesheet" href="./css/bulma.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <form action="" id="tweetForm">
                <div class="field">
                    <label for="tweet" class="lable">Tweet</label>
                    <div class="control">
                    <textarea class="textarea" id="tweet" name="tweet"></textarea>
                    </div>
                </div>
                <div class="filed">
                    <button id="tweetBtn" class="button is-info">Tweet</button>
                </div>
            </form>
        </div>
    </div>

    <div class="columns">
        <div class="column is-half is-offset-one-quarter all-tweets">
           
        </div>
    </div>

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>