<?php 
    require "functions.php";

    //ambil data (query) dari tabel mahasiswa
    $query = query("SELECT * FROM watchlist;");
?>
<style><?php include 'styles.css'; ?></style>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
		integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>
<body>
    <div style="margin-top: 30px">
        <p id="title">My Watchlist</p>
        <div class="container">
            <table class="table table-striped">
                <thead class="table-head">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Year</th>
                        <th scope="col">Director</th>
                        <th scope="col">Type</th>
                        <th scope="col">Production House</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach( $query as $row ) : ?>
                    <tr>
                        <th scope="row"> <?= $i ?> </th>
                        <td> <?= $row["title"] ?> </td>
                        <td><?= $row["year"] ?></td>
                        <td><?= $row["director"] ?></td>
                        <td><?= $row["type"] ?></td>
                        <td><?= $row["prod_house"] ?></td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            
            <center><button type="button" id="form-btn" class="btn btn-primary btn-lg text-center" onclick="location.href='form.php'">Add New Watchlist</button></center>
                
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
		crossorigin="anonymous"></script>
</body>
</html>