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
    </head>
    <body>
        <?php include_once('navbar.php'); ?>
        <section>
            <div class="container">
                <h2 class="text-primary my-4 text-center">Syllavids</h2>
                <div class="row mt-6 mx-5">
                    <div class="col-sm-3">
                        <a href="new-course" class="btn btn-secondary btn-lg my-2 float-right">New Course</a>
                    </div>
                    <div class="col-sm-9 pr-5">
                        <?php
                        $servername = "localhost";
                        $username = "id5480287_admin";
                        $password = "ChrisPatChris1";
                        $database = "id5480287_syllavid";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $database);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT school, course_code, course_name, professor FROM courses";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>School</th>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Professor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr class="clickable-row" data-href='example'>
                                            <td><?php echo $row["school"]; ?></td>
                                            <td><?php echo $row["course_code"]; ?></td>
                                            <td><?php echo $row["course_name"]; ?></td>
                                            <td><?php echo $row["professor"]; ?></td>
                                        </tr>
                                    <script>
                                        jQuery(document).ready(function ($) {
                                            $(".clickable-row").click(function () {
                                                window.location = $(this).data("href");
                                            });
                                        });
                                    </script>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <?php
                        } else {
                            ?>
                            <h3 class="text-center">No Courses Available</h3>
                            <?php
                        }
                        $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
