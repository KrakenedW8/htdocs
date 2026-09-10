
    <?php
        for ($i = 0; $i < 10; $i++) {
            echo "Perulangan pada PHP ";
        }

        # 0 adalah kondisi awal (pertama)
        # < 10 adalah kondisi akan berhenti bila mencapai 10 (tidak bisa lebih)
        # I++ Increment
    ?>

    
    <br>

    
    <?php
    # Contoh perulangan while pada php*/
    #while ($angka <= 5)hal yang harus terpenuhi
    #echo $angka . "\n"; garis baru agar kebawah

    $angka =  1;
    while ($angka <= 5) {
        echo $angka . "\n";
        $angka++;
    }
    ?>

    <?php

        ## Function PHP
        # Function adalah blok kode yang dapat digunakan kembali untuk
        ## melakukan tugas tertentu. FUngsi dapat menerima parameter dan 
        ##mengembalikan nilai.
        echo "<h1>FUNCTION DI PHP</h1>";
        function luasSegitiga($alas=0, $tinggi=0) {
            $hasil = 0.5 * $alas * $tinggi;
            return $hasil;
        }

        #($alas=0, $tinggi=0) namanya adalah parameter
        #Kegunaannya yaitu variable kosong untuk menerima dari argumen luasSegitiga(10, 5)
        echo "<p>Luas segitiga dengan alas 10 dan tinggi 5 adalah: " .
        luasSegitiga(10, 5) . "</p>";

    ?>