<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ders1</title>
</head>
<body>
    <!-- Yorum Satırı -->

    <?php 
    /* Açıklama satırı bloğu 
    (Çoklu satır kullanılabilir) Kısayol: Shift + Alt + a
     */

    //Tek satır açıklama için kullanılır.
    
    /* Kullanılan Komut:
    echo: Ekrana yazdırma işlemi yapar.
         Komut  içerisinde html etiketleri kullanılabilir.
         Çift veya tek tırnak kullanılabilir.
         Çift tırnak ile kullanıldığında içerisindeki değişkenlerin
         içeriğini ekrana yazar.
         Nokta operatörü ile birleştirme işlemi yapılabilir.
         Ters slash (\) kaçış karakteridir. Özel ifadelerden önce 
         kullanılır.
         
    
    */
    
     echo "<h3> Adnan Menderes Üniversitesi</h3>";
     echo "<h4>Aydın Meslek Yüksekokulu</h4>";
     echo "Bilgisayar Programcılığı" . " Aymes";
     echo "<br> Bilgisayar Programcılığı" . "<br> Aymes";

     echo "<hr> <hr4> Değişken Tanımlama </hr4>";

     echo "<ol>
          <li> Değişken isimleri $ ile başlar. </li>
          <li> Değişken isimleri sayısal ifadeler ile başlayamaz. </li>
          <li> Değişken isimlerinde boşluk kullanılmaz. İki kelime ise 
          birinci_sinif biriinciSinif birinci-sinif kullanılabilir. </li>
          <li> Değişken isimleri küçük-büyük harfe duyarlıdır. \$sayi != \$sayi   </li>
          <li> Değişken ismi, değişkenin taşıdığı içeriği ifade etmeli.  </li>
          <li> Değişken içeriğinde metinsel ifade varsa çift tırnak (\) veya tek 
          tırnak kullanılabilir. </li>
          <li> Değişken içeriğinde sayısal bir ifade varsa tırnak kullanmak gerekli değildir.</li>
          <li> Değişken içerikleri ekrana echo komutu ile yazdırılabilir.</li>
     </ol>";

     echo "<hr> <h4> Değişken Tanımlama Örnekleri </h4>";
     $isim    = "Ahmet";
     $soyisim = "Erimez";
     $gsm     = "123123123";

     echo $isim."<br>";
     echo "$isim $soyisim $gsm";

     /* Uygulama 
          Üniversite-myo-ad-soyad-numara değişkenlerini tanımlayınız.
          Bu değişkenlerin içerikleri tablo veya form içeriğinde ekrana yazdırınız.
     */
     
     $uni="Adü";
     $myo="Aymes";
     $ad="Nazlı";
     $soyad="Gül";
     $numara="123";




    ?>



    <form action="">

         <label for="universite">Üni:</label>
         <input type="text" name="" value="<?php echo $uni; ?>" id="universite" disabled><br>
         

         <label for="myo">Myo:</label>
         <input type="text" name="" value="<?php echo $myo; ?>" id="myo" disabled><br>
         

         <label for="ad">Öğrenci Adı:</label>
         <input type="text" name="" value="<?php echo $ad; ?>" id="ad" disabled><br>
         

         <label for="soyad">Öğrenci Soyadı:</label>
         <input type="text" name="" value="<?php echo $soyad; ?>" id="soyad" disabled><br>


         <label for="numara">Öğrenci Numara:</label>
         <input type="text" name="" value="<?php echo $numara; ?>" id="numara" disabled><br>
</body>
</html>