<?php
    define ('DB_HOST', 'localhost');
    define ('DB_USER', 'root');
    define ('DB_PASS', '');
    define ('DB_NAME', 'inventaris_barang');
    $koneksi=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Gagal terhubung dengan Database: " . mysqli_error($dbconnect));
    
    function tampildata()
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"SELECT barang.id, barang.kode_brg, barang.nama_brg, barang.kategori, barang.merk, barang.jumlah from barang;");
        $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;
    }

    function user()
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"SELECT user.id, user.no_identitas,user.nama, user.status, user.username, user.password, user.role from user;");
        $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;

    }

    function peminjaman()
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"SELECT peminjaman.id, peminjaman.tgl_pinjam, peminjaman.tgl_kembali, peminjaman.no_identitas, peminjaman.kode_barang, peminjaman.jumlah, peminjaman.keperluan, peminjaman.status, peminjaman.id_login from peminjaman;");
        $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;
    }

    function inputdata($inputdata)
    {
        global $koneksi;
        $sql=mysqli_query($koneksi,$inputdata);
        return $sql;
    }

    function Editdata($tablename,$id)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"select * from $tablename where id='$id'");
        return $hasil;
    }

    function updatePeminjaman($table, $id, $tglPinjam, $tglKembali, $no_identitas, $kodeBrg, $jumlah)
    {
        global $koneksi;
        $sql = "UPDATE $table SET tgl_pinjam = '$tglPinjam', tgl_kembali = '$tglKembali', no_identitas = '$no_identitas', kode_barang = '$kodeBrg', jumlah = '$jumlah' WHERE id = '$id'";
        $hasil=mysqli_query($koneksi,$sql);
        return $hasil;
    }
    function updateBarang($table, $id, $kodeBrg, $namaBrg, $kategori, $merk, $jumlah)
    {
        global $koneksi;
        $sql = "UPDATE $table SET kode_brg ='$kodeBrg', nama_brg ='$namaBrg', kategori ='$kategori', merk = '$merk', jumlah ='$jumlah' WHERE id = '$id'";
        $hasil=mysqli_query($koneksi,$sql);
        return $hasil;
    }

    function updateUser($table, $id, $No_identitas, $nama, $status, $username, $password, $role)
    {
        global $koneksi;
        $sql = "UPDATE $table SET no_identitas ='$No_identitas', nama ='$nama', status ='$status', username = '$username', password ='$password', role = '$role' WHERE id = '$id'";
        $hasil=mysqli_query($koneksi,$sql);
        return $hasil;
    }

   function Delete($tablename,$id)
    {
        global $koneksi;
        $hasil=mysqli_query($koneksi,"delete from $tablename where id='$id'");
        return $hasil;
    }

    function cek_login($username,$password){
		global $koneksi; 
		$uname = $username;
		$upass = $password;		
		$hasil = mysqli_query($koneksi,"select * from user where username='$uname' and password=md5('$upass')");
		$cek = mysqli_num_rows($hasil);
		if($cek > 0 ){
            $query = mysqli_fetch_array($hasil);
            $_SESSION['id_user'] = $query['id_user'];
            $_SESSION['username'] = $query['username'];
            $_SESSION['role'] = $query['role'];
			return true;		
        }
		else {
			return false;
		}	
	}
?>