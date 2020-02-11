<?php
    require "vendor/autoload.php";

    use Abraham\TwitterOAuth\TwitterOAuth;

    $consumer_key = 'QdBanYqxM8RzWOpJolFIdVW5V';
    $consumer_secret = '5bzJB6U8hkHnvcx3nzHc1SPUNpL7wbC5rG8qz447GsdAhMjev7';
    $access_token = '1216944596262895616-l33xxrdsCkxjJO84XS0pMCZ26YPTZZ';
    $access_token_secret = 'kPYBioyeQN4h20qvguUisNpAgDbFCDuiWSfVij87eiif0';
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
