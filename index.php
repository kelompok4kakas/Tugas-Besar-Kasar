<?php
    //include class controller
    include "controller/controller.php";
    //include
    //variabel main merupakan objek baru yang di buat dari class controller
    $main = new controller();
    
    //kondisi untuk menampilkan halaman web yang di minta
    if(isset($_GET['e'])){ //kondisi untuk akses halaman edit
        $nim = $_GET['e'];
        $main->viewEdit($nim);
    }else if(isset($_GET['d'])){ //kondisi untuk menghapus data mengakses fungsi delete
        $nim = $_GET['d'];
        $main->viewInsert(); // kondisi untuk mengakses halaman add
        
        
    }else if (isset($_GET['f'])){
        $main->viewFunct();
    }
    else if (isset($_GET['v'])){
        $main->viewForm();
    }
    else{
        $main->index(); //kondisi awal(menampilkan seluruh data)
    }

?>