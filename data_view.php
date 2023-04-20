<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>View Details
                            <a href="index.php"" class=" btn btn-primary float-end">BACK</a>

                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $presentation_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM presentation WHERE id='$presentation_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $presentation = mysqli_fetch_array($query_run);
                                // print_r($presentation);
                                ?>


                                <div class="mb-3">
                                    <label for="name">Ad format:</label>
                                    <p class="form-control">
                                        <?= $presentation['ad_format']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="email">Template:</label>
                                    <p class="form-control">
                                        <?= $presentation['template']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="phone">Category:</label>
                                    <p class="form-control">
                                        <?= $presentation['category']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="course">Average CTR:</label>
                                    <p class="form-control">
                                        <?= $presentation['average_ctr']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="course">Dimensions:</label>
                                    <p class="form-control">
                                        <?= $presentation['dimensions']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="course">Duration:</label>
                                    <p class="form-control">
                                        <?= $presentation['duration']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="course">Functionality:</label>
                                    <p class="form-control">
                                        <?= $presentation['functionality']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="course">Review:</label>
                                    <p class="form-control">
                                        <?= $presentation['reviews']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="course">Description:</label>
                                    <p class="form-control">
                                        <?= $presentation['description']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="course">Demo Link:</label>
                                    <p class="form-control">
                                        <?= $presentation['demo_link']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="course">Meta keywords:</label>
                                    <p class="form-control">
                                        <?= $presentation['meta_keywords']; ?>
                                    </p>
                                </div>
                                <?php
                            } else {
                                echo "<h4>No such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>