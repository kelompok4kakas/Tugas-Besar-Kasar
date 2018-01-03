<html>
<head>
    <title>Fungsi Rekursi</title>
</head>
<body>
    <?php
        function faktorial ($m)
        {
            if ($m == 0)
                return 1;
            else 
                return $m * faktorial ($m - 1);
        }
        
        $combinasi=faktorial (6) / (faktorial(4)*faktorial(2));
        printf("2! = %d <BR>\n", faktorial(2));
        printf("6! = %d <BR>\n", faktorial(6));
        printf("4! = %d <br>",faktorial(4));
        printf("Combinasi dari 6 dan 2 = %d <br>", $combinasi);
?>
</body>
</html>