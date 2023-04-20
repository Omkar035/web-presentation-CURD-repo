<?php
session_start();
require 'dbcon.php';
?>


<?php require('template/header.php'); ?>
<div class="container mt-4">

    <?php require('message.php'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Web Presentation Details
                        <a href="presentation_create.php" class="btn btn-primary float-end"> Add Data</a>

                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered table-striped text-wrap">
                            <thead class=" w-25">
                                <tr>
                                    <th>ID</th>
                                    <th>Ad Format</th>
                                    <th>Template</th>
                                    <th>Category</th>
                                    <th>Average CTR</th>
                                    <th>Dimensions</th>
                                    <th>Duration</th>
                                    <th>Functionality</th>
                                    <th>Reviews</th>
                                    <th>Description</th>
                                    <th>Demo Link</th>
                                    <th>Meta Key</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM presentation";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $presentation) {
                                        // echo $student['name'];
                                        ?>
                                        <tr class="overflow-auto">

                                            <td class="text-wrap">
                                                <?= $presentation['id']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['ad_format']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['template']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['category']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['average_ctr']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['dimensions']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['duration']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['functionality']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['reviews']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['description']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['demo_link']; ?>
                                            </td>
                                            <td class="text-wrap">
                                                <?= $presentation['meta_keywords']; ?>
                                            </td>

                                            <td>
                                                <a href="data_view.php?id=<?= $presentation['id']; ?> "
                                                    class="btn btn-info btn-sm">View</a>
                                                <a href="data_edit.php?id=<?= $presentation['id']; ?> "
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_data" value="<?= $presentation['id']; ?>"
                                                        class="btn btn-danger btn-sm" disabled >Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "<h5> No records Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('template/footer.php'); ?>
