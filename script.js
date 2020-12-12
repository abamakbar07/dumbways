// #1 SOAL PERTAMA 
function hitungDenda(x) {
   var bukuPelajaran = 1000;
   var bukuNovel = 2000;
   var bukuCerpen = 1500;
   var telat = x-10;
   if ( x > 10 ) {
      // denda
      dendaBukuPelajaran = bukuPelajaran * telat;
      dendaBukuNovel = bukuNovel * telat;
      dendaBukuCerpen = bukuCerpen * telat;
      var total = dendaBukuPelajaran+dendaBukuNovel+dendaBukuCerpen;
   }
   console.log("Meminjam selama : " + x + " hari")
   console.log("Telat mengembalikan : " + telat + " hari")
   console.log("Denda buku mata pelajaran: " + dendaBukuPelajaran)
   console.log("Denda buku Novel: " + dendaBukuNovel)
   console.log("Denda buku Cerpen: " + dendaBukuCerpen)
   console.log("Total: "+total)
}



// ======================================================================
// #2 SOAL KEDUA
function cekHuruf(a, b) {
   return a.split(b).length-1;
}



// ======================================================================
// #3 SOAL KETIGA 
function cetakPola(p) {
   document.getElementById("soal3").innerHTML = "*";
   for ( i = 1; i <= p+1; i+=2 ) {
      for ( j = 2; j <= i; j++ ) {
         document.getElementById("soal3").innerHTML += "*";
      }
      document.getElementById("soal3").innerHTML += "<br>";
   };  
   document.getElementById("soal3").innerHTML += "DUMBWAYSID<br>";
   for ( k = 0; k < p ; k+=2 ) {
      for ( l = k+1; l <= p; l++ ) {
         document.getElementById("soal3").innerHTML += "*";
      }
      document.getElementById("soal3").innerHTML += "<br>";
   }
   document.getElementById("soal3").innerHTML += "*";
}



