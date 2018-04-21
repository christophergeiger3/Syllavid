<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Syllavid</title>
        <!--<link rel="icon" type="image/png" href="assets/icon.png">-->
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php include_once('navbar.php'); ?>
        <br></br>
        <div class="modal-body row">
          <div class="col-md-6">
            <div class="container about-text">
              <h2>Mission:</h2>
              <div id="mission">
                <h5>Democratize education by creating free courses for anyone's curriculum.</h5>
                <h5>Anyone can contribute, by linking YouTube videos, readings, Quizlets, games, and more.</h5>
              </div>
            </div>
            <br></br>
            <div class="container about-text" id="about-video">
              <h2>Values:</h2>
              <ul>
                <h5>
                <li>Accessible to everyone</li>
                <li>Collaborative environment</li>
                <li>Dynamic resources</li>
                <li>Emphasize purpose</li>
                <li>Gamification of learning</li>
                </h5>
            </ul>
            </div>
          </div>
          <div class="col-md-6">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/O-QbVkyi8yc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
    </body>
</html>
