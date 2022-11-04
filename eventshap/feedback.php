<!DOCTYPE html>
<html>
    <head>
        <title>Feedback Form Design </title>
        <link rel="stylesheet" type="text/css" href="css/feedback.css">
            <script src="hhtps://kit.fontawesome.com/67c66657c7.js"></script>
    </head>
    <body>
        <section></section>
        <div class="container">
            <form method="post" action="feed_val.php">
                <h1>Give your Feedback</h1>
                <div class="id">
                    <input type="text" placeholder="Full name" name="name" autofocus>
                    <i class="far fa-user"></i>
                </div>
                <div class="id">
                    <input type="email" placeholder="Email address" name="email">
                    <i class="far fa-envelope"></i>
                </div>
                <textarea cols="15" rows="5" placeholder="Enter your opinions here.." name="feed"></textarea>
                <button name="submit">Send</button>
            </form>
        </div>
    </body>
</html>