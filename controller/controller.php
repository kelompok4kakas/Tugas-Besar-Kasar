<?php

    include "model/model.php";
    
    class controller{
        
        public $model;
        
        function __construct(){
            $this->model = new model();
        }
        
        function index(){
            $data = $this->model->selectAll();
            include "view/view.php";
        }
        
        function viewEdit($nim){
            $data = $this->model->selectMhs($nim);
            $row = $this->model->fetch($data);
            include "view/view.php";
        }
        
        function viewInsert(){
            include "view/view_add.php";
        }
        
        function viewFunct(){
            include 'view/view_function.php';
        }
         function viewForm(){
            include 'view/view_form.php';
        }
        
        function update(){
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $angkatan = $_POST['angkatan'];
            $fakultas = $_POST['fakultas'];
            $prodi = $_POST['prodi'];
            
            $update = $this->model->updateMhs($nim, $nama, $angkatan, $fakultas, $prodi);
            header("location:index.php");
        }
        
        function delete($nim){
            $delete = $this->model->deleteMhs($nim);
            header("location:index.php");
        }
        
        function insert(){
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $angkatan = $_POST['angkatan'];
            $fakultas = $_POST['fakultas'];
            $prodi = $_POST['prodi'];
            
            $insert = $this->model->insertMhs($nim, $nama, $angkatan, $fakultas, $prodi);
            header("location:index.php");
        }
        
        function __destruct(){
        }
    }


?>