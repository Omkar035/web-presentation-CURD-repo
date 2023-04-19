<?php
session_start();
?>
<?php require('includes/header.php'); ?>
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
                            <label for="name">Student Name:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Student Email:</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="phone">Student Phone No:</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="course">Student course:</label>
                            <input type="text" name="course" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_student" class="btn btn-danger"> Save student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('includes/footer.php'); ?>