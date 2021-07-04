<?php
// koneksi ke database
    $conn = mysqli_connect("localhost","root", "", "ihkeyaphp");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);

        //cek berhasil atau tidak
        if(!$result){
            echo mysqli_error($result);
        }

        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data){
        global $conn;
        $nama = htmlspecialchars($_POST["nama"]);
        $deskripsi = htmlspecialchars($_POST["deskripsi"]);
        $kategori = htmlspecialchars($_POST["kategori"]);
        $tipe = htmlspecialchars($_POST["tipe"]);
        $harga = htmlspecialchars($_POST["harga"]);
        
        //upload gambar
        $gambar = upload();
        if( !$gambar){
            return false;
        }

        //query insert
        $query = "INSERT INTO item
        VALUES ('', '$nama','$deskripsi','$kategori','$tipe','$harga','$gambar')";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);

    }

    function upload(){
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile =  $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        //cek apakah gambar sudah di upload
        if($error === 4){
            echo "<script>
                alert('pilih gambar dahulu');
            </script>";
        }

        //cek tipe gambar yang di upload
        $ektensiGambarValid = ["jpg","jpeg","png"];
        $ekstensiGambar = pathinfo($namaFile,PATHINFO_EXTENSION);
        if( !in_array(strtolower($ekstensiGambar), $ektensiGambarValid)){
            echo "<script>
                alert('tipe gambar tidak valid');
            </script>";
            return false;
        }

        //cek ukuran gambar yang di upload
        if($ukuranFile > 10000000){
                echo "<script>
                    alert('size gambar terlalu besar max 10mb');
                </script>";
                return false;
        }

        //generate nama baru agak tidak terduplicate
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;


        //mulai upload
        move_uploaded_file($tmpName, "img/".$namaFileBaru);
        return $namaFileBaru;
    }


    function ubah($id){
        global $conn;
        $nama = htmlspecialchars($_POST["nama"]);
        $deskripsi = htmlspecialchars($_POST["deskripsi"]);
        $kategori = $_POST["kategori"];
        $tipe = htmlspecialchars($_POST["tipe"]);
        $harga = htmlspecialchars($_POST["harga"]);
        $gambarLama = htmlspecialchars($_POST["gambarLama"]);

        if($_FILES ['gambar']['error'] === 4){
            $gambar = $gambarLama;
        }else{
            $gambar = upload();
        }

        // $gambar = htmlspecialchars($_POST["gambar"]);

        //query update
        $query = "UPDATE item
                SET nama = '$nama', deskripsi = '$deskripsi', kategori = '$kategori', harga = '$harga',tipe = '$tipe', gambar = '$gambar'
                WHERE id = $id";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM item WHERE id = $id");


        return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        $query = "SELECT * FROM item 
                WHERE nama LIKE '%$keyword%' OR deskripsi LIKE '%$keyword%' OR kategori LIKE '%$keyword%' OR tipe LIKE '%$keyword%' ";
        return query($query);
    }

    function registrasi($data){
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data["password"]);
        $cpassword = mysqli_real_escape_string($conn,$data["cpassword"]);


        //cek username agak tidak double
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        
        if(mysqli_fetch_assoc($result)){
            echo "<script>
            alert('username sudah terdaftar!');
        </script>";
            
            return false;
        }

        //cek konfirmasi password
        if($password !== $cpassword){
            echo "<script>
                alert('password tidak sesuai!');
            </script>";

            return false;
        }

        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        //tambahkan user baru
        mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

        return mysqli_affected_rows($conn);
    }

?>

