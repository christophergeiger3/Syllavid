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
        <?php
        include_once('navbar.php');
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "id5480287_syllavid";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        if (isset($_GET["c"])) {
            $course_id = $_GET["c"];
            $sql = "SELECT * FROM courses WHERE id='" . $course_id . "';";
            $course_result = $conn->query($sql);
            if ($course_result->num_rows > 0) {
                while ($course_row=mysqli_fetch_row($course_result)) {
                    ?>
                    <section>
                        <div class="container">
                        </div>
                        <br></br>
                        <div class="container">
                            <table class="table table-bordered">
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM coures_topics WHERE course_id='" . $course_id . "';";
                                    $topic_result = $conn->query($sql);
                                    $unit_ctr = 0;
                                    while ($topic_row = $topic_result->fetch_assoc()) {
                                        $unit_ctr++;
                                        ?>
                                        <tr>
                                            <td>Unit <?php echo $unit_ctr . ": " . $row["topic"] ?></td>
                                            <td>
                                                <?php
                                                    $sql = "SELECT * FROM topic_vids WHERE topic_id='" . $topic_row["id"] . "';";
                                                    $vid_result = $conn->query($sql);
                                                    while ($vid_row = $vid_result->fetch_assoc()) {
                                                        echo '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' . $vid_row["vid_link"] . '"></iframe>';
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    <tr>
                                        <td>Unit 1: Decision making tools</td>
                                        <td>Resources: videos, texts, websites, links to documentaries, books</td>
                                    </tr>
                                    <tr>
                                        <td>Unit 2: Forecasting</td>
                                        <td><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Wo5YWXDRXv8"></iframe></td>
                                        <!-- <td>YouTube videos</td> -->
                                    </tr>
                                    <tr>
                                        <td>Unit 3: Project Management</td>
                                        <td>YouTube videos</td>
                                    </tr>
                                    <tr>
                                        <td>Exam Review: Units 1, 2 and 3</td>
                                        <td>Student notes, study guides, price questions</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <?php
                }
            }
            else {
                die("Page Not Found");
            }
        }
        else {
            die("Page Not Found");
        }
        ?>
    </body>
</html>
