<?php
session_start();
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
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>DATA ADD
                            <a href="index.php"" class=" btn btn-primary float-end">BACK</a>

                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label for="ad_format">Ad format:</label>
                                <input type="text" name="ad_format" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="template">Template:</label>
                                <input type="text" name="template" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="category">Category:</label>
                                <input type="text" name="category" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="average_ctr">Average CTR:</label>
                                <input type="text" name="average_ctr" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="dimensions">Dimensions:</label>
                                <input type="text" name="dimensions" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="duration">Duration:</label>
                                <input type="text" name="duration" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="functionality">Functionality:</label>
                                <input type="text" name="functionality" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="reviews">Review:</label>
                                <input type="text" name="reviews" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="description">Description:</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="demo_link">Demo Link:</label>
                                <input type="text" name="demo_link" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="meta_keywords">Meta keywords:</label>
                                <input type="text" name="meta_keywords" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_data" class="btn btn-danger">Save Data</button>
                            </div>
                        </form>
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