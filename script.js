// #1 SOAL PERTAMA      =======================================================
function checkout(x=[a,b,c,d],y) {
   document.getElementById('soal1').innerHTML = '<br>';
   var error = 0;
   var total = 0;
   var prod1 = 0;
   var hargaprod1 = 0;
   var prod2 = 0;
   var hargaprod2 = 0;
   var prod3 = 0;
   var hargaprod3 = 0;
   var prod4 = 0;
   var hargaprod4 = 0;
   var chartProduk = [];
   var chartHarga = [];
   for ( i = 0; i < x.length; i++ ) {
      switch ( x[i] ) {
         case 'KD0023' : 
            chartProduk[i] = 'Laptop Asus ROG';
            chartHarga[i] = 15000000;
            total++;
            prod1++;
            hargaprod1 = hargaprod1 + 15000000;
            break;
         case 'C42212' : 
            chartProduk[i] = 'Iphone 12';
            chartHarga[i] = 12000000;
            total++;
            prod2++;
            hargaprod2 = hargaprod2 + 12000000;
            break;
         case 'D90312' : 
            chartProduk[i] = 'Xiaomi Pocophone';
            chartHarga[i] = 7000000;
            total++;
            prod3++;
            hargaprod3 = hargaprod3 + 7000000;
            break;
         case 'H12020' : 
            chartProduk[i] = 'Playstation 5';
            chartHarga[i] = 15000000;
            total++;
            prod4++;
            hargaprod4 = hargaprod4 + 15000000;
            break;
         default :
            error = 1;         
      }
   }
   var hartot = hargaprod1+hargaprod2+hargaprod3+hargaprod4;
   var diskon = hartot*y/100;
   if ( error === 1 ) {
      document.getElementById('soal1').innerHTML = 'MOHON MAAF NIH, KODE PRODUK YANG ANDA MASUKKAN ADA YANG TIDAK SESUAI :(<br>';
   } else {      
      document.getElementById('soal1').innerHTML += '<br>Item yang dibeli';
      document.getElementById('soal1').innerHTML += '<br>==========================';
      if ( prod1 >= 1 ) {document.getElementById('soal1').innerHTML += '<br>Laptop Asus ROG | ' + prod1 + ' pc(s) | ' + hargaprod1;}
      if ( prod2 >= 1 ) {document.getElementById('soal1').innerHTML += '<br>Laptop Asus ROG | ' + prod2 + ' pc(s) | ' + hargaprod2;}
      if ( prod3 >= 1 ) {document.getElementById('soal1').innerHTML += '<br>Laptop Asus ROG | ' + prod3 + ' pc(s) | ' + hargaprod3;}
      if ( prod4 >= 1 ) {document.getElementById('soal1').innerHTML += '<br>Laptop Asus ROG | ' + prod4 + ' pc(s) | ' + hargaprod4;}
      document.getElementById('soal1').innerHTML += '<br>==========================';
      document.getElementById('soal1').innerHTML += '<br>Sub Total: ' + hartot;
      document.getElementById('soal1').innerHTML += '<br>Diskon: ' + diskon;
      document.getElementById('soal1').innerHTML += '<br>==========================';
      document.getElementById('soal1').innerHTML += '<br>Total ' + (hartot-diskon);
   }
}


// #2 SOAL KEDUA      =======================================================
function cekNilai(x=[]) {
   document.getElementById("soal2").innerHTML = '<br>'
   var lulus = 0;
   var nilai = 0.0;
   for ( i = 0; i < x.length ; i++ ) {
      lulusga = x[i] >= 65? 'Lulus' : 'Tidak Lulus';
      document.getElementById("soal2").innerHTML += '<br>Nilai ' + x[i] + ' => ' + lulusga;
      nilai = nilai + x[i];
      if ( lulusga === 'Lulus' ) {
        lulus++; 
      }
   }
   document.getElementById("soal2").innerHTML += '<br>========================';
   document.getElementById("soal2").innerHTML += '<br>Jumlah Nilai yang disubmit: ' + x.length;
   document.getElementById("soal2").innerHTML += '<br>Rata-rata Nilai: ' + (nilai/x.length).toFixed(1);
   document.getElementById("soal2").innerHTML += '<br>Lulus: ' + lulus;
   document.getElementById("soal2").innerHTML += '<br>Tidak Lulus: ' + (x.length - lulus);
}


// #3 SOAL KETIGA      =======================================================
function cetakPola(x) {
   document.getElementById("soal3a").innerHTML = '<br>';
   document.getElementById("soal3b").innerHTML = '<br>';
   var a = '*'
   for ( i = 1; i <= x; i++ ) {
      for ( j = 1; j <= i; j++ ) {
         document.getElementById("soal3a").innerHTML += a;
         document.getElementById("soal3b").innerHTML += a;
      };
      document.getElementById("soal3a").innerHTML += '<br>';
      document.getElementById("soal3b").innerHTML += '<br>';
   }
}