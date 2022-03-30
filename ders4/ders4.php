<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Php'de Diziler</h3>
    <ol>
        <li>Dizi oluşturmak için array() fonksiyonu veya [] kullanılabilir.</li>
        <li>Dizi içerisinde farklı türden birçok değer bulunabilir.(int, string, double, obje)
            (1,2,3, "Ali", "Ahmet", "125,20")</li>
        <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversion hatası verir.
            Fakat dizinin örneğin 3 indisine sahip elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir.</li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak ("") içerisinde yazılır</li>
        <li>Dizinin içerisindeki int ifadeler direkt yazılabilir.</li>
        <li>Dizinin elemanları birbirinden virgül (,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>

    </ol>


    <?php 

    $dizi1= array(1,2,3,"Alican" , "Ocak" , "Şubat");
    $dizi2=[1,2,3,"Alican"];

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "Dizinin 1.elemanı: " .$dizi1[1] . "<br>";
    echo "Dizinin 1.elemanının türü: " . gettype($dizi1[1]) . "<br>";


    echo "Dizinin 5.elemanı:" . $dizi1[4] . "<br>";
    echo "Dizinin 5. elemanının türü:" . gettype($dizi1[4]) . "<br>";


    echo "Dizinin 0. inidisi: <b> $dizi1[0]</b><br>";
    echo "Dizinin 1. inidisi: <b> $dizi1[1]</b><br>";
    echo "Dizinin 2. inidisi: <b> $dizi1[2]</b><br>";
    echo "Dizinin 3. inidisi: <b> $dizi1[3]</b><br>";
    echo "Dizinin 4. inidisi: <b> $dizi1[4]</b><br>";
    echo "Dizinin 5. inidisi: <b> $dizi1[5]</b><br>";


    /* Dizinin içeriğinin foreach döngüsü ile yazdırılması. */
    echo "<h4>Dizinin içeriğinin Foreach Döngüsü ile Yazdırılması</h4>";
    foreach ($dizi1 as $eleman) {
        echo "$eleman <br>";
    }

    echo "<h4>Dizinin İçeriğinin Foreach Döngüsü ile Yazdırılması-2</h4>";
    foreach ($dizi1 as $anahtar => $deger) {
        echo " $anahtar - $deger <br>";
    }

    /* Dizinin içeriğinin for döngüsü ile yazdırılması. */
    echo "<h4>Dizinin içeriğinin For Döngüsü ile Yazdırılması</h4>";
    for ($i =0; $i < count($dizi1); $i++) {
        echo "$i: $dizi1[$i] <br>";
    }

    $sayilar = array(1,2,3,4,5);

    $sayilar = array (
        array(1 , 2 , 3 , 4 , 5),
        array(10.5 , 3.2 , 1.7)
    );

    echo"<pre>";
    print_r($sayilar);
    echo"</pre>";

    echo "Sayılar Dizisinin İçerisindeki İkinci Dİzinin İkinci Elemanı:".$sayilar[1][1] ."<br>";
    echo "Sayılar Dizisinin İçerisindeki İkinci Dİzinin Üçüncü Elemanı:".$sayilar[0][2] ."<br>";

    $sayilar = array(
        "Integer"   => array(1, 2, 3, 4, 5),
        "Double"    => array(10.5, 3.2, 1.7) 
    );

    echo"<pre>";
    print_r($sayilar);
    echo"</pre>";

    $bilgiler=array(
        "id"       => 1,
        "Adi"      => "Ahmet",
        "Soyadi"   => "Erimez",
        "gsm"      => "5342026807",
        "Cinsiyet" => "Erkek",
        "Yas"      => "30"
    );
     echo "$bilgiler[Adi] $bilgiler[Soyadi] Hoşgeldiniz.<br>";
     echo  $bilgiler["Adi"] . " " . $bilgiler["Soyadi"] . " Hoşgeldiniz.";

     echo "<pre>";
     print_r($bilgiler);
     echo "</pre>";

     foreach ($bilgiler as $bilgi) {
         echo $bilgi . " - ";
     }


    





     ?>
</body>
</html>