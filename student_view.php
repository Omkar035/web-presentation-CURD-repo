<?php
require 'dbcon.php';
?>
<?php require('includes/header.php'); ?>
<div class="container mt-5">


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>DATA View Details
                        <a href="index.php"" class=" btn btn-primary float-end">BACK</a>

                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $student_id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM students WHERE id='$student_id' ";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $student = mysqli_fetch_array($query_run);
                            // print_r($student);
                            ?>


                            <div class="mb-3">
                                <label for="name">Student Name:</label>

                                <p class="form-control">
                                    <?= $student['name']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label for="email">Student Email:</label>
                                <p class="form-control">
                                    <?= $student['email']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label for="phone">Student Phone No:</label>
                                <p class="form-control">
                                    <?= $student['phone']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label for="course">Student course:</label>
                                <p class="form-control">
                                    <?= $student['course']; ?>
                                </p>
                            </div>
                            <div class="mb-3">

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
<?php require('includes/footer.php'); ?>