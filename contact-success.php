<?php
    $page_title = "freecodez.com | Contact Success!";
    header("refresh:10;url=index.php", true, 303);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Message Sent Successfully</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
        box-sizing: border-box;
        overflow: hidden;
        background-color: black;
    }

    h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }

    p {
        color: #fff;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size: 20px;
        margin: 0;
    }

    i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }
    a{
        color:blue;
    }

    .card {
        background: rgba(255, 255, 255, 0.15);
        padding: 60px;
        border-left: 1px solid rgba(255, 255, 255, 0.5);
        border-top: 1px solid rgba(255, 255, 255, 0.5);
        border-radius: 4px;
        box-shadow: 2px 2px 3px #C8D0D8;
        margin:10px;
        margin-right: 25px;
        width: 400px;
    }
</style>

<body>
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:auto;">
            <i class="checkmark">✓</i>
        </div>
        <h1>Success</h1>
        <p>Your Message has bee sent successfully!<br> You are redirecting to Homepage <br> OR <a href="index.php">Click Here</a></p>
    </div>
</body>

</html>