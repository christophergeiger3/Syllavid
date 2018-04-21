<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Syllavid</title>
        <!--<link rel="icon" type="image/png" href="assets/icon.png">-->
        <link rel="stylesheet" type="text/css" href="/stylesheet.css">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script>
            $("#add-topic").click(function () {
                $('<input type="text" class="form-control" id="topics[]"><button type="button" class="close">&times;</button>').clone(true).insertBefore("button");
                return false;
            });

            $(".close").click(function () {
                $(this).parent().remove();
            });
        </script>
    </head>
    <body>
        <?php include_once('navbar.php'); ?>
        <section>
            <h2 class="text-center my-5">Add a Course</h2>
            <div class="container mt-3">
                <form method="POST" action="add-course.php">
                    <div class="form-group row">
                        <label for="school" class="col-sm-2 col-form-label">School:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="school" name="school" placeholder="School">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="course_name" class="col-sm-2 col-form-label">Course Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="course_name" name="course_name" placeholder="Course Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="course_code" class="col-sm-2 col-form-label">Course Code:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="course_code" name="course_code" placeholder="Course Code">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="professor" class="col-sm-2 col-form-label">Professor:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="professor" name="professor" placeholder="Professor">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="topics" class="col-sm-1 col-form-label">Topics:</label>
                        <label for="topics" class="col-sm-1 col-form-label"><span class="float-right">1:</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="topics[]" placeholder="Topic 1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="topics" class="col-sm-2 col-form-label"><span class="float-right">2:</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="topics[]" placeholder="Topic 2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="topics" class="col-sm-2 col-form-label"><span class="float-right">3:</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="topics[]" placeholder="Topic 3">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-primary float-right" id="add-topic">Add Topic</button>
                </form>
            </div>
        </section>
    </body>
</html>