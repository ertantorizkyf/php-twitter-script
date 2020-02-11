<?php
    require "vendor/autoload.php";

    use Abraham\TwitterOAuth\TwitterOAuth;

    $consumer_key = 'CONSUMER_API_KEY';
    $consumer_secret = 'CONSUMER_API_SECRET';
    $access_token = 'ACCESS_TOKEN';
    $access_token_secret = 'ACCESS_TOKEN_SECRET';
    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
    $content = $connection->get("account/verify_credentials");
    
    $message = $_POST['message'];

    $new_tweet = $connection->post("statuses/update",["status" => $message]);

    if($new_tweet){
        echo 'Tweet posted successfully';
        echo '<br><a href="index.php">back to main page</a>';
    }
    else {
        echo 'Failed to post new tweet';
        echo '<br><a href="index.php">back to main page</a>';
    }
