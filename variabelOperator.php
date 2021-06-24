<?php

/*Beberapa Cara untuk menampilkan output ke layar dengan:
* echo
* print
* var_dump(menampilkan tipe data dan ukuran data biasanya untuk array )
* print_r (biasanya untuk array)
*/

  echo "Cici Oktaviani<br>";
  print "Xl Rekayasa Perangkat Lunak<br>";
  var_dump ('11th Oct  2003');
  echo "<br>";
  print_r ('Tasikmalaya City, West Java');

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
/* Aturan penulisan Variabel dalam php
* Penulisan di awali dengan tanda '$'
* Tidak boleh diawali dengan angka tapi bisa menggunakan angka
* Bersifat case sensitif
* Tidak boleh menggunakan spasi
* etc.
*/

/*Penulisan syntax php
* Php didalam html
* Htmml didalam Php
*/

// Contoh Penulisan Variabel

   $name = "Oka";
   echo "Hello My Name is $name <br>";

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
/* Operator
* Operator Aritmatika
* Operator Penugasan atau Assignment
* Operator Increment & Decrement
* Operator Relasi atau pembanding
* Operator Logika
* Operator Bitwise
* Operator Ternary.
*/

  $x = 10;
  $y = 20;
  echo $x * $y + $X;
  echo "<br>";

//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Concatenation/contat/penggabung string ." ".

  $f_n = 'Cici';
  $l_n = 'Oktaviani';
  echo $f_n." ".$l_n;

?>
