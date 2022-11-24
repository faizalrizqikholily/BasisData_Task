<?php 
    require "functions.php";
    if( isset($_POST["submit"])) {
        if( insert($_POST) > 0) {
            echo "
            <script>
                alert('Data berhasil ditambahkan!');
            </script>
            ";
        }
        else {
            echo "
            <script>
                alert('Data gagal ditambahkan!');   
            </script>";
            echo mysqli_error($db);
        }
    }
    // if( isset($_POST["submit"])) {
    //     var_dump($_POST);
    // }
?>

<!DOCTYPE html>
<html>
<head>
    <title>New Watchlist</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
		integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
</head>

<body id="form">
    <div style="margin-top: 30px">
        <h2 id="form-header">Add a new watchlist!</h2>
        <div class="container">
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input name="title" placeholder="Input show title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="inputYear">Year</label>
                    <input name="year" placeholder="Input show release year" type="text" class="form-control" id="inputYear">
                </div>
                <div class="form-group">
                    <label for="inputDirector">Director</label>
                    <input name="director" placeholder="Input show director" type="text" class="form-control" id="inputDirector">
                </div>
                <div class="form-group">
                    <label for="showType">Show Type</label>
                    <select name="type" class="form-control" id="showType">
                        <option>Movie</option>
                        <option>TV Series</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputHouseProd">Production House</label>
                    <input name="prod_house" placeholder="Input production house" type="text" class="form-control" id="inputHouseProd">
                </div>
                <div class="d-flex justify-content-center">
                    <div class="row">
                        <div class="col-4">
                            <button class="btn btn-primary" id="cancel-btn" onclick="document.location.href='index.php'">Cancel</button>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-4">
                            <button name="submit" type="submit" class="btn btn-primary" id="submit-btn">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>