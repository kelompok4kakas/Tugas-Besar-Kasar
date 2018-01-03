<html>
<head>
    <title>Fungsi 1</title>
</head>
<body>
    <?php
        //fungsi mencari nilai terkecil
        function terkecil()
        {
            //menentukan variabel jum_arg secara global
            global $jum_arg;
            $jum_arg = func_num_args();
            
            //jika argumen tidak ada
            if ($jum_arg == 0)
            return 0;
            //tentukan minimum argumen yang pertama
            $minim = func_get_arg(0);
            
            //proses pencarian data minimum
            for ($i = 1; $i < $jum_arg; $i++)
            {
                $bilangan = func_get_arg($i);
                if ($minim > $bilangan)
                    $minim = $bilangan;
            }
            //nilai kembalian fungsi
            return $minim;
            }
            //fungsi mencari nilai terbesar
            function terbesar()
            {
                //menentukan variabel jum_arg secara global
                global $jum_arg;
                
                //mencari jumlah argumen
                $jum_arg = func_num_args();
                
                //jika jumlah argumen kosong
                if ($jum_arg == 0)
                return 0;
                
                //tentukan nilai maksimun argumen yang pertama
                $maks = func_get_arg(0);
                //proses mencarian data maksimum
                for ($i = 1; $i < $jum_arg; $i++)
                {
                    $bilangan = func_get_arg($i);
                    if ($maks < $bilangan)
                    $maks = $bilangan;
                }
                
                //nilai kembalian fungsi
                return $maks;
            }
            //cetak data untuk mainimum
            global $jum_arg;
            print("Data : 1, 2, 5, 9, 6 <br>");
            print("Data terbesar = ");
            print(terbesar(1, 2, 5, 9, 6));
            printf("<br>Jumlah Data = %d <br>",$jum_arg);
            
            print("<br><BR>\n");
            
            //cetak data untuk maksimum
            print("Data : 10, 20, 50, 5, 90, 7, 70 <br>");
            print("Data terkecil = ");
            print(terkecil(10, 20, 50, 5, 90, 7, 70));
            printf("<br>Jumlah Data = %d <br>",$jum_arg);
            
            ?>
        
</body>
</html>