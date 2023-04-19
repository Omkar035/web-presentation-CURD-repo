<?php
session_start();
require 'dbcon.php';
?>

<?php require('includes/header.php'); ?>
<div class="container mt-5">

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>DATA UPDATE
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
                            <form action="code.php" method="POST">
                                <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                <div class="mb-3">
                                    <label for="name">Student Name:</label>
                                    <input type="text" name="name" value="<?= $student['name']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="email">Student Email:</label>
                                    <input type="text" name="email" value="<?= $student['email']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="phone">Student Phone No:</label>
                                    <input type="text" name="phone" value="<?= $student['phone']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="course">Student course:</label>
                                    <input type="text" name="course" value="<?= $student['course']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_student" class="btn btn-danger">
                                        Update student

                                    </button>
                                </div>
                            </form>
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