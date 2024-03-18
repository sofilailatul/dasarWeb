<?php
    // soal no 1
    // function tampilkanHaloDunia(){
    //     echo "Halo dunia! <br>";
    //     tampilkanHaloDunia();
    // }
    // tampilkanHaloDunia();

    // soal no 2 
    // for($i=1; $i <= 25; $i++){
    //     echo "Perulangan ke-($i) <br>";
    // }

    // function tampilkanAngka(int $jumlah, int $indeks = 1){
    //     echo "Perulangan ke-{$indeks} <br>";

    //     // panggil diri sendiri selama $indeks <= jumlah
    //     if($indeks < $jumlah){
    //         tampilkanAngka($jumlah, $indeks + 1);
    //     }
    // }
    // tampilkanAngka(20);

    // Soal No 3 
    // $menu = [
    //     [
    //         "nama" => "Beranda"
    //     ],
    //     [
    //         "nama" => "Berita",
    //         "subMenu" => [
    //             [
    //                 [
    //                     "nama" => "Wisata",
    //                     "subMenu" => [
    //                         [
    //                             "nama" => "Pantai"
    //                         ],
    //                         [
    //                             "nama" => "Gunung"
    //                         ]
    //                     ]
    //                 ],
    //                 [
    //                     "nama" => "Kuliner"
    //                 ],
    //                 [
    //                     "nama" => "Hiburan"
    //                 ]
    //             ]
    //         ]
    //     ],
    //     [
    //         "nama" => "Tentang"
    //     ],
    //     [
    //         "nama" => "Kontak"
    //     ],
    // ];
    // function tampilkanMenuBertingkat(array $menu){
    //     echo "<ul>";
    //     foreach ($menu as $key => $item){
    //         echo "<li>{$item['nama']}</li>";
    //     }
    //     echo "</ul>";
    // }
    // tampilkanMenuBertingkat($menu);

    // soal no 4
    $menu = [
        [
            "nama" => "Beranda"
        ],
        [
            "nama" => "Berita",
            "subMenu" => [
                [
                    "nama" => "Wisata",
                    "subMenu" => [
                        [
                            "nama" => "Pantai"
                        ],
                        [
                            "nama" => "Gunung"
                        ]
                    ]
                ],
                [
                    "nama" => "Kuliner"
                ],
                [
                    "nama" => "Hiburan"
                ]
            ]
        ],
        [
            "nama" => "Tentang"
        ],
        [
            "nama" => "Kontak"
        ],
    ];
    function tampilkanMenuBertingkat(array $menu){
        echo "<ul>";
        foreach ($menu as $key => $item){
            echo "<li>{$item['nama']}";
            
            // Periksa apakah ada submenu dan apakah submenu tersebut adalah array
            if (isset($item['subMenu']) && is_array($item['subMenu'])) {
                // Panggil fungsi rekursif untuk menampilkan submenu
                tampilkanMenuBertingkat($item['subMenu']);
            }
            
            echo "</li>";
        }
        echo "</ul>";
    }
    
    tampilkanMenuBertingkat($menu);

?>