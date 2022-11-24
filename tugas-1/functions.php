<?php 
    //connect ke database
    $db = mysqli_connect("localhost", "root", "", "basisdata");
    
    function query( $query ){
        global $db;
        $result = mysqli_query($db, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    function insert( $data ){
        global $db;
            //ambil data dari tiap elemen dalam form
        $title = htmlspecialchars($data["title"]);
        $year = htmlspecialchars($data["year"]);
        $director = htmlspecialchars($data["director"]);
        $type = htmlspecialchars($data["type"]);
        $prod_house = htmlspecialchars($data["prod_house"]);

        //query insert data
        $insert = "INSERT INTO watchlist (title, year, director, type, prod_house)
                    VALUES
                    ('$title', '$year', '$director', '$type', '$prod_house') ";
        mysqli_query($db, $insert);
        return mysqli_affected_rows($db);
    }

    function hapus($id) {
        global $db;
        mysqli_query($db, "DELETE FROM watchlist WHERE id=$id");
        return mysqli_affected_rows($db);
    }
?>