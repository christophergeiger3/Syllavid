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

<div class="container" style="margin-left: 2%">
	<div class="row">
      <div class="col-md-6">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Contact us</legend>

            <!-- Name input-->
            <div class="form-group">
              <label class="control-label" for="name">Name</label>
              <div class="">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
              <label class="control-label" for="email">Your E-mail</label>
              <div class="">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>

            <!-- Message body -->
            <div class="form-group">
              <label class="control-label" for="message">Your message</label>
              <div class="">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>

            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
    </body>
</html>
