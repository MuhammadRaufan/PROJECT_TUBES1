<?php include "connection.php"; ?>
<html>
<head>
<title>JURUSAN TEKNIK INFORMATIKA UNIVERSITAS TASIKMALAYA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<table width="798" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3" align="center" valign="top" bgcolor="#24A2D3" height="150"><img src="images/banner.jpg" width="798" height="148"></td>
  </tr>
  <tr>
    <td colspan="3" align="center" valign="top" bgcolor="#24A2D3" height="30"><?php include "topmenu.php"; ?></td>
  </tr>
  <tr>
    <td width="170" height="435" valign="top"><?php include "leftmenu.php"; ?></td>
    <td width="468" align="center" valign="top" background="images/bg_center.gif"><table width="96%"  border="0" cellpadding="0" cellspacing="0" class="mini-font">
        <tr>
          <td height="39" valign="top" background="images/bg_header.gif"><h3>TENTANG LAYANAN WEB</h3></td>
        </tr>
        <tr>
          <td><div align="justify">
 
2.1	Web Service
Web service adalah suatu sistem perangkat lunak yang dirancang untuk mendukung interaksi antar sistem pada suatu jaringan. Web service digunakan sebagai suatu fasilitas yang disediakan oleh suatu web site untuk menyediakan layanan (dalam bentuk informasi) kepada sistem lain, sehingga sistem lain dapat berinteraksi dengan sistem tersebut melalui layanan-layanan (service) yang disediakan oleh suatu sistem yang menyediakan web service. Web service menyimpan data informasi dalam format XML, sehingga data ini dapat diakses oleh sistem lain walaupun berbeda platform, sistem operasi, maupun bahasa compiler. 
Web service bertujuan untuk meningkatkan kolaborasi antar pemrogram dan perusahaan, yang memungkinkan sebuah fungsi di dalam Web Service dapat dipinjam oleh aplikasi lain tanpa perlu mengetahui detil pemrograman yang terdapat di dalamnya.
Beberapa alasan mengapa digunakannya web service  adalah sebagai berikut:
1.	Web service dapat digunakan untuk mentransformasikan satu atau beberapa bisnis logic atau class dan objek yang terpisah dalam satu ruang lingkup yang menjadi satu, sehingga tingkat keamanan dapat ditangani dengan baik.
2.	Web service memiliki kemudahan dalam proses deployment-nya, karena tidak memerlukan registrasi khusus ke dalam suatu sistem operasi. Web service cukup di-upload ke web server dan siap diakses oleh pihak-pihak yang telah diberikan otorisasi.
3.	Web service berjalan di port 80 yang merupakan protokol standar HTTP, dengan demikian web service tidak memerlukan konfigurasi khusus di sisi firewall.


2.1.1 Arsitektur Web Service
Web service memiliki tiga entitas dalam arsitekturnya, yaitu: 
1.	Service Requester (peminta layanan)
2.	Service Provider (penyedia layanan)
3.   Service Registry (daftar layanan)






•	Service Provider: Berfungsi untuk menyediakan layanan/service dan mengolah sebuah registry agar layanan-layanan tersebut dapat tersedia.
•	Service Registry: Berfungsi sebagai lokasi central yang mendeskripsikan semua layanan/service yang telah di-register.
•	Service Requester: Peminta layanan yang mencari dan menemukan layanan yang dibutuhkan serta menggunakan layanan tersebut.

2.1.2 Operasi-Operasi Web Service
Secara umum, web service memiliki tiga operasi yang terlibat di dalamnya, yaitu:
1.	Publish/Unpublish: Menerbitkan/menghapus layanan ke dalam atau dari registry.
2.	Find: Service requestor mencari dan menemukan layanan yang dibutuhkan.
3.	Bind: Service requestor setelah menemukan layanan yang dicarinya, kemudian melakukan binding ke service provider untuk melakukan interaksi dan mengakses layanan/service yang disediakan oleh service provider.


2.1.3	Komponen-Komponen Web Service
 
Web service secara keseluruhan memiliki empat layer komponen seperti pada gambar di atas, yaitu:
1.	Layer 1: Protokol internet standar seperti HTTP, TCP/IP
2.	Layer 2: Simple Object Access Protocol (SOAP), merupakan protokol akses objek berbasis XML yang digunakan untuk proses pertukaran data/informasi antar layanan.
3.	Layer 3: Web Service Definition Language (WSDL), merupakan suatu standar bahasa dalam format XML yang berfungsi untuk mendeskripsikan seluruh layanan yang tersedia.
4.	Layer 4: Universal Description, Discovery, and Integration (UDDI), merupakan bagian yang berfungsi untuk memusatkan services ke dalam common registry dan menyediakan kemudahan untuk mempublikasikan interface dan kemudahan dalam pencarian method.

2.2 XML
Sebelum mulai mempelajari teknik membangun web service, ada baiknya kita memahami konsep dasar XML. Pemahaman tentang XML akan membantu kita untuk lebih mudah memahami apa yang terjadi dibalik web service. Bagi pembaca yang telah memahami konsep dasar XML, dapat melewati bahasan pada bab ini.
XML terletak pada inti web service, yang digunakan untuk mendeskripsikan data. Fungsi utama dari XML adalah komunikasi antar aplikasi, integrasi data, dan komunikasi aplikasi eksternal dengan partner luaran. Dengan standarisasi XML, aplikasi-aplikasi yang berbeda dapat dengan mudah berkomunikasi antar satu dengan yang lain. 
XML adalah singkatan dari Extensible Markup Language. Bahasa markup adalah sekumpulan aturan-aturan yang mendefinisikan suatu sintaks yang digunakan untuk menjelaskan, dan mendeskripsikan teks atau data dalam sebuah dokumen melalui penggunaan tag. Bahasa markup lain yang populer seperti HTML, menggambarkan kepada browser web tentang bagaimana menampilkan format teks, data, dan grafik ke layar komputer ketika sedang mengunjungi sebuah situs web. XML adalah sebuah bahasa markup yang digunakan untuk mengolah meta data (informasi tentang data) yang menggambarkan struktur dan maksud/tujuan data yang terdapat dalam dokumen XML, namun bukan menggambarkan format tampilan data  tersebut. XML adalah sebuah standar sederhana yang digunakan untuk medeskrippsikan data teks dengan cara self-describing (deskripsi diri). XML juga dapat digunakan untuk mendefinisikan domain tertentu lainnya, seperti musik, matematika, keuangan dan lain-lain yang menggunakan bahasa markup terstruktur. 
Berikut ini adalah contoh sebuah dokumen XML untuk informasi contact person:
<?xml version="1.0" encoding="ISO-8859-1"?><contact>
<contact>
<name>Yadi Utama</name>
<company>PT. Gamatechno Indonesia</company>
<address>Jl. Cik Di Tiro No.34</address>
<city>Yogyakarta</city>
<state>Indonesia</state>
<zip>55284</zip>
<phone>081328462499</phone>
<email>yadi@gamatechno.com</email>
</contact>
Perhatikan bagaimana mudahnya untuk mengerti tentang makna informasi dan strukturnya pada dokumen XML di atas, sehingga juga akan mudah bagi komputer untuk mengerti dokumen XML ini.
Seperti halnya HTML, XML juga menggunakan elemen yang ditandai dengan tag pembuka (diawali dengan ‘<’ dan diakhiri dengan ‘>’), tag penutup(diawali dengan ‘</ ‘diakhiri ‘>’) dan atribut elemen(parameter yang dinyatakan dalam tag pembuka misal <form name=”isidata”>). Hanya bedanya, HTML medefinisikan dari awal tag dan atribut yang dipakai didalamnya, sedangkan pada XML kita bisa menggunakan tag dan atribut sesuai kehendak kita. Berikut ini adalah tampilan dokumen XML di atas apabila dijalankan pada sebuah browser:
 
Gambar: Tampilan dokumen XML pada browser

2.2.1 Struktur Penulisan Dokumen XML
Berikut ini adalah contoh sebuah struktur dokumen XML:

<?xml version="1.0" encoding="ISO-8859-1"?>

<email>	
<to>Andi </to>
<from>Yadi Utama</from>
<subject>Hallo</subject>
<message>Selamat Pagi…</message>
</email>

Baris pertama pada dokumen XML di atas adalah deklarasi standar header yang mendefinisikan versi XML dan karakter encoding yang digunakan dalam dokumen XML. Dalam dokumen ini, XML mengacu pada versi 1.0 dan menggunakan standar encoding karakter set  ISO-8859-1 (Latin-1/West European). 
Baris selanjutnya menggambarkan elemen induk (root) dokumen “<email>..</email>”, sebagaimana kita menyebut bahwa “Dokumen ini adalah sebuah Email”. Kemudian baris ke 3-6 menggambarkan elemen anak (child) dari elemen induk dokumen.
Tag pada dokumen XML bersifat case sensitif di mana tag pembuka dan tag penutup harus ekivalen. Seperti contoh tag pembuka “<email>” harus ditutup dengan tag “</email>”. 
Berikut ini adalah contoh penulisan dokumen XML yang tidak benar:
“<email>….</Email>”
“<email>….</EMAIL>”
“<Email>….</email>”
	Berikut ini adalah contoh penulisan dokumen XML yang benar:
“<email>….</email>”
“<EMAIL>….</EMAIL>”
“<Email>….</Email>”

2.2.2 Penggunaan XML
Pada penjelasan sebelumnya, diberikan contoh sebuah dokumen XML yang berisi data contact person yang terdiri dari elemen “name”, “company”, “address”, “city”, “state”, “zip”, “phone”, dan “email”. Tidak seperti HTML, data-data dalam dokumen XML tidak dapat ditampilkan dalam format tampilan tertentu yang kita inginkan dalam browser web. Namun XML dapat dimanipulasi sebagai “pulau data” untuk ditampilkan pada browser web melalui HTML sesuai dengan format tampilan yang diinginkan:
<xml id="contact-person">
<contact>
<name>Yadi Utama</name>
<company>PT. Gamatechno Indonesia</company>
<address>Jl. Cik Di Tiro No.34</address>
<city>Yogyakarta</city>
<state>Indonesia</state>
<zip>55284</zip>
<phone>081328462499</phone>
<email>yadi@gamatechno.com</email>
</contact>
</xml>


Dokumen XML ini dapat digabungkan dengan HTML untuk ditampilkan dalam sebuah browser web dengan membangun sebuah tabel dalam kode HTML dan mengasosiasikan nilai pada kolom-kolomnyaa dengan data dari elemen-elemen XML tersebut:
<html>
<body>

<xml id="contact-person">
<contact>
<name>Yadi Utama</name>
<company>PT. Gamatechno Indonesia</company>
<address>Jl. Cik Di Tiro No.34</address>
<city>Yogyakarta</city>
<state>Indonesia</state>
<zip>55284</zip>
<phone>081328462499</phone>
<email>yadi@gamatechno.com</email>
</contact>
</xml>

<table border="1" datasrc="#contact-person">
<tr><th>Name</th> <td><span datafld="name"></span></td></tr>
<tr><th>Company</th> <td><span datafld="company"></span></td></tr>
<tr><th>Address</th> <td><span datafld="address"></span></td></tr>
<tr><th>City</th> <td><span datafld="city"></span></td></tr>
<tr><th>State</th> <td><span datafld="state"></span></td></tr>
<tr><th>ZIP</th> <td><span datafld="zip"></span></td></tr>
<tr><th>Phone</th> <td><span datafld="phone"></span></td></tr>
<tr><th>Email</th> <td><span datafld="email"></span></td></tr>
</table>

</body>
</html>
Ketika ditampilkan melalui browser web, Anda akan melihat tampilannya sepeti ini:
 
Gambar  Dokumen XML yang digabung dalam HTML
XML untuk saat ini bukan merupakan pengganti HTML. Masing-masing dikembangkan untuk tujuan yang berbeda. Kalau HTML digunakan untuk menampilkan informasi dan berfokus pada bagaimana informasi terlihat, XML mendeskripsikan susunan informasi dan berfokus pada informasi itu sendiri. XML terutama dibutuhkan untuk menyusun dan menyajikan informasi dengan format yang tidak mengandung format standard layaknya heading, paragraph, table dan lain sebagainya.
Sama dengan HTML, File XML berbentuk teks sehingga bila diperlukan kita bisa membacanya tanpa memerlukan bantuan software khusus. Hal ini memudahkan pengembang aplikasi yang menggunakan XML untuk mendebug programnya. XML lebih fleksible dibanding HTML dalam hal kemampuannya menyimpan informasi dan data. Pada XML kita bisa menyimpan data baik dalam atribut maupun sebagai isi elemen yang diletakkan diantara tag pembuka dan tag penutup. 
Kelebihan lain yang dimiliki XML adalah bahwa informasi bisa di pertukarkan dari satu system ke system lain yang berbeda platform. Misalnya dari Windows ke Unix, atau dari PC ke Machintosh bahkan dari internet ke handphone dengan teknologi WAP.
2.2.3 Bagian-Bagian dari Dokumen XML 
Sebuah dokumen XML terdiri dari bagian bagian yang disebut dengan node. Node-node itu adalah: 
•	Root node yaitu node yang melingkupi keseluruhan dokumen. Dalam satu dokumen XML hanya ada satu root node. Node-node yang lainnya berada di dalam root node. 
•	Element node yaitu bagian dari dokumen XML yang ditandai dengan tag pembuka dan tag penutup, atau bisa juga sebuah tag tunggal elemen kosong seperti <anggota nama=”budi”/> . Root node biasa juga disebut root element 
•	Attribute note termasuk nama dan nilai atribut ditulis pada tag awal sebuah elemen atau pada tag tunggal. 
•	Text node, adalah text yang merupakan isi dari sebuah elemen, ditulis diantara tag pembuka dan tag penutup 
•	Comment node adalah baris yang tidak dieksekusi oleh parser 
•	Processing Instruction node, adalah perintah pengolahan dalam dokumen XML. Node ini ditandai awali dengan karakter <? Dan diakhiri dengan ?>. Tapi perlu diingat bahwa header standard XML <?xml version=”1.0” encoding=”iso-8859-1”?> bukanlah processing instruction node. Header standard bukanlah bagian dari hirarki pohon dokumen XML. 
•	NameSpace Node, node ini mewakili deklarasi namespace 
	

<?xml version=”1.0” encoding=”iso-8859-1”?> 
<!--Dokumen ini menjelaskan tentang isi buku--> 
<Buku 
Judul=”Teknik Membangun Web Service Dengan Menggunakan SOAP dan WSDL” 
Penulis=”Yadi Utama”> 
<pengantar/> 
<Bab No=”1”>Pengantar XML</Bab> 
<Bab No=”2”>Web Service</Bab> 
<Bab No=”3”>SOAP</Bab> 
. 
. 
. 
</Buku>

	

</td>
              </tr>
            </table>
			</div></td>
        </tr>
    </table></td>
    <td width="160" valign="top"><?php include "rightmenu.php"; ?></td>
  </tr>
  <tr align="center">
    <td colspan="3"><?php include "footer.php"; ?></td>
  </tr>
</table>
</body>
</html>
