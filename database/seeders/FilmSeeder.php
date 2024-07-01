<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $film = [
            [
                "image" => "Hnight.jpg",
                "judul" => "Night Swim",
                "j_episode" => 1,
                "referensi" => "Rebahin",
                "sutradara" => "Bryce McGuire",
                "tanggal" => Carbon::parse('2024-01-03'),
                "rating" => 51,
                "deskripsi" => "Eks atlet bisbol Ray Waller (Wyatt Russell) harus pensiun dini karena mengidap penyakit degeneratif. Ia lantas memutuskan pindah ke rumah baru yang lebih sunyi dari kehidupan perkotaan. Ray juga membawa istrinya, Eve Waller (Kerry Condon), serta kedua anaknya yang bernama Izzy Waller (Amelie Hoeferle) dan Elliott Waller (Gavin Warren). Momen pindah rumah itu menjadi awal baru bagi keluarga Waller. Mereka harus beradaptasi dan mengatur rumah barunya agar nyaman dihuni. Rumah yang dibeli Ray dan Eve itu ternyata memiliki kolam renang di taman belakang. Keberadaan kolam itu awalnya menjadi nilai plus bagi keluarga Waller. Masing-masing anggota keluarga Waller silih berganti diserang oleh makhluk mistis yang diduga menghuni kolam tersebut. Makhluk itu bahkan tak segan mengancam nyawa saat muncul tiba-tiba. Setelah diusut, kolam renang itu ternyata sudah tak dipakai selama 15 tahun. Rahasia kelam juga tersembunyi di balik masa lalu rumah yang baru ditempati keluarga Waller.",
                "id_kategori" => 1
            ],
            [
                "image" => "Hinsi.jpg",
                "judul" => "Insidious : The Red Door",
                "j_episode" => 1,
                "referensi" => "Netflix, Rebahin",
                "sutradara" => "Universal Pictures Russia",
                "tanggal" => Carbon::parse('2023-07-05'),
                "rating" => 68,
                "deskripsi" => "Insidious The Red Door dimulai pada 10 tahun setelah Josh (Patrick Wilson) dan Dalton (Ty Simpkins) Lambert ditutup mata batin mereka untuk bisa ingat dan mengakses dunia lain The Further pada Insidious: Chapter 2 (2013). Sedekade kemudian, keluarga Lambert berkumpul di pemakaman ibunda Josh, Lorraine. Lorraine selama ini tinggal bersama Josh setelah putranya bercerai dengan Renai (Rose Byrne). Usai pemakaman, Renai meminta Josh untuk menyediakan waktu bersama Dalton lantaran anak sulung mereka akan masuk kampus. Dalton akan masuk jurusan seni rupa, mengikuti bakat menggambarnya sejak anak-anak. Tak lama kemudian, Josh menghubungi Dalton dan menawarkan diri untuk mengantarnya ke kampus. Dalton pun setuju, meskipun sebenarnya ia enggan. Hubungan Dalton dan Josh mulai renggang setelah Josh dan Renai memutuskan untuk berpisah. Dalton bersama adik-adiknya ikut tinggal dengan Renai. Di perjalanan, Josh berusaha menjalin kedekatan dengan Dalton. Namun suasana canggung tak bisa hilang dari keduanya. Hingga saat masuk ke asrama pun, Josh dan Dalton kerap berselisih. Dalton sempat melontarkan ucapan yang menyakiti hati Josh. Josh pun pergi meninggalkan Dalton yang merasa kesal dengan sikap tidak peduli dari ayahnya itu. Sementara itu, ia mendapatkan teman sekamar perempuan bernama Chris Winslow (Sinclair Daniel). Dalton meneruskan kehidupannya dengan menjalani perkuliahan. Kali ini, ia mengikuti kelas filosofi seni dengan Profesor Armagan (Hiam Abbass). Di kelas tersebut, Dalton diminta untuk menyelami memori dan pengalaman dirinya. Tanpa Dalton duga, aksi menyelami memori dan pengalaman itu justru membuka akses yang sudah ditutup sejak sedekade lalu. Sementara itu di sisi lain, Josh yang merasa dirinya sering lupa dan berhalusinasi menjalani pemeriksaan MRI. Di sana, ia mulai merasakan gangguan makhluk halus yang secara perlahan membuka kenangan masa lalu. Bukan hanya itu, Dalton dan Josh akan menghadapi dedemit yang menjadi musuh mereka sejak lama dengan dendam yang masih tersimpan setelah 10 tahun lamanya.",
                "id_kategori" => 1
            ],
            [
                "image" => "Houija.jpg",
                "judul" => "Ouija: Origin of Evil",
                "j_episode" => 1,
                "referensi" => "Netflix, Bstation",
                "sutradara" => "Mike Flanagan",
                "tanggal" => Carbon::parse('2016-10-29'),
                "rating" => 62,
                "deskripsi" => "Kisah bermula ketika keluarga Zander tiba-tiba diteror oleh makhluk ghaib. Alice Zander (Elizabeth Reaser) beserta dua anak perempuannya, Lina dan Doris (Lulu Wilson), menjalankan bisnis gadungan pemanggilan arwah. Mereka terpaksa melakukannya demi bertahan hidup setelah ditinggal sang suami yang tewas akibat tertabrak. Agar praktik pemanggilan arwah telihat 'nyata', Alice memutuskan untuk membeli papan Ouija. Ternyata, keputusan tersebut justru membawa malam petaka bagi keluarganya hingga teror-teror mengerikan terus berdatangan. Lalu, bagaimana kisah keluarga Alice dalam menghadapi serangan makhluk ghaib? Akankah Alice dan kedua putrinya selamat dari serangan teror tersebut?",
                "id_kategori" => 1
            ],
            [
                "image" => "Hafter.jpg",
                "judul" => "Aftermath",
                "j_episode" => 1,
                "referensi" => "Netflix, Rebahin",
                "sutradara" => "Peter Winther",
                "tanggal" => Carbon::parse('2021-08-04'),
                "rating" => 55,
                "deskripsi" => "Elemen inti dari Aftermath adalah pasangan suami istri yang diperankan oleh Shawn Ashmore (Devils Gate) dan Ashley Greene (film Twilight). Namun, rumah tempat pembunuhan-bunuh diri terjadi juga memainkan peran kunci. Namun, ini juga bukan satu-satunya elemen, tetapi semuanya bekerja dengan baik dan menyatu dengan sangat baik. Hanya satu elemen adalah fakta bahwa sang suami (Shawn Ashmore) bekerja membersihkan TKP. Ini menghasilkan beberapa adegan mesum yang menampilkan berbagai adegan kriminal “kreatif” di sepanjang jalan. Dan kemudian ada saat-saat yang sangat menyeramkan di rumah, yang bekerja sangat baik dalam kesederhanaannya. ",
                "id_kategori" => 1
            ],
            [
                "image" => "Hevil.jpg",
                "judul" => "Evil Dead Rise",
                "j_episode" => 1,
                "referensi" => "Netflix, Amazon Prime Video",
                "sutradara" => "Lee Cronin",
                "tanggal" => Carbon::parse('2023-05-05'),
                "rating" => 65,
                "deskripsi" => "Cerita horor dalam Evil Dead Rise bermula dari penemuan Necronomicon (kitab orang mati). Ketika dibuka, kitab tersebut melepaskan roh jahat. Roh jahat itu memasuki tubuh Ellie (Alyssa Sutherland), seorang ibu dari tiga anak Bridget, Danny, dan Kassie. Roh jahat yang masuk ke tubuh Ellie bernama Deadites. Awalnya, pada hari itu, Ellie ingin berkemas untuk pindah ke hunian yang lebih baik. Beth, saudara Ellie pun datang ke apartemen Ellie untuk membantunya. Beth meminta Kassie untuk membeli pizza. Sementara itu, Danny dan Bridget berkeliling melihat benda-benda yang ada di rumahnya. Danny turun ke lantai bawah. Di sana dia menemukan piringan hitam dan sebuah kitab. Bridget sempat mengingatkan Danny untuk tak bermain-main dengan benda-benda itu. Namun, Danny diliputi penasaran. Danny menyetel piringan hitam. Sambil mendengar musik, dia membuka kitab itu. Ketika dia membuka kitab itu, kejadian janggal mulai terjadi. Kitab itu terbuka sendiri dan mengeluarkan iblis roh jahat bernama Deadites. Apartemen Ellie bergetar saat Deadites mulai memasuki tubuh Ellie. Beberapa konstruksi bangunan pun hancur. Hari-hari mereka mulai menegangkan. iblis yang masuk ke tubuh Ellie agresif dan membahayakan. Muncul dilema di antara anak-anaknya dan Beth. Di satu sisi Ellie adalah keluarga mereka. Namun, di sisi lain, Ellie juga mulai membahayakan. Ellie mulai melakukan hal hal aneh, mulai dari menghancurkan telur dengan sembarang sampai mencekik.",
                "id_kategori" => 1
            ],
            [
                "image" => "Hmangku.jpg",
                "judul" => "Mangkujiwo 2",
                "j_episode" => 1,
                "referensi" => "Vidio, Prime Video",
                "sutradara" => "Azhar Kinoi Lubis",
                "tanggal" => Carbon::parse('2023-01-26'),
                "rating" => 69,
                "deskripsi" => "Film Mangkujiwo 2 menyuguhkan kisah balas dendam dengan menyoroti kekejaman dan kejahatan manusia yang lebih sadis dan penuh darah. Mangkujiwo 2 melanjutkan kisah sebelumnya tentang misteri kematian Tjokro Kusumo (Roy Marten) yang misterius. Tjokro Kusumo dan Brotoseno adalah musuh yang saling memperebutkan loji pusaka hingga keduanya saling memendam dendam. Mangkujiwo 2 akan menceritakan kisah balas dendam Brotoseno karena dirinya masih menyimpan hasrat untuk membalaskan dendam, dia ingin membangkitkan Kuntilanak lewat medium pesugihan. Sekte Mangkujiwo diceritakan telah jadi organisasi besar dengan banyak sekali pengikut. Mangkujiwo adalah sekte yang memelihara kuntilanak sebagai medium pesugihan. Hingga kemudian Karmila (Karina Suwandi) memberi peringatan pada Brotoseno bahwa tanpa kunti, Mangkujiwo tidak memiliki senjata. Ditambah lagi dengan Nyi Kenangan (Djenar Maesa Ayu) yang menyarankan Brotoseno bersekutu dengan makhluk gaib agar mendapatkan kekuasaan. Perebutan kekuasaan begitu membabi buta dan mematikan dengan adanya berbagai teror dan ritual sadis yang mengakibatkan jatuhnya banyak korban. Penuh darah. Penuh kematian. Penuh pertanyaan. Siapkah kalian menerima kebenaran?",
                "id_kategori" => 1
            ],
            [
                "image" => "Hpsetan.jpg",
                "judul" => "Pengabdi Setan",
                "j_episode" => 1,
                "referensi" => "Netflix, Amazon Prime Video, Rebahin",
                "sutradara" => "Joko Anwar",
                "tanggal" => Carbon::parse('2017-09-28'),
                "rating" => 80,
                "deskripsi" => "Pengabdi Setan menceritakan tentang keluarga Rini (Tara Basro) dan dua adiknya yang sedang kesulitan mencari uang untuk pengobatan ibunya. Mawarni (Ayu Laksmi), sang ibu yang merupakan mantan penyanyi terkenal, menderita penyakit yang berat dan membutuhkan biaya pengobatan yang sangat besar. Keluarga Rini pun terpaksa menjual rumah mereka di kota dan pindah ke rumah nenek mereka di desa. Selama sakit, Mawarni hanya bisa berbaring di atas kasur dan membunyikan lonceng untuk meminta bantuan suami atau anak-anaknya. Hingga akhirnya Mawarni meninggal dunia setelah berjuang untuk sembuh selama 3,5 tahun. Sementara di rumah tersebut, seluruh anggota keluarga Rini mulai diganggu hal-hal mistis. Gangguan mistis tersebut membuat nenek mereka, Rahma Saidah (Elly D. Luthan), tewas tercebur sumur.  Rini dan kedua adiknya pun mulai mencari tahu apa yang sebenarnya terjadi pada keluarga mereka.",
                "id_kategori" => 1
            ], [
                "image" => "Hpsetan2.jpg",
                "judul" => "Pengabdi Setan 2 : Communion",
                "j_episode" => 1,
                "referensi" => "Netflix, Amazon Prime Video, Rebahin",
                "sutradara" => "Joko Anwar",
                "tanggal" => Carbon::parse('2022-08-09'),
                "rating" => 75,
                "deskripsi" => "Menceritakan keluarga Suwono yang terdiri dari Rini, Bapak, Tony, dan Bondi yang berusaha menjalani kehidupan mereka setelah lima tahun selamat dari kejadian horor pasca ibu meninggal dunia. Mereka mencoba membuka lembaran baru dengan tinggal di sebuah rumah susun tak terawat di Jakarta. Mereka mulai membangun kehidupan. Rini masih berusaha untuk menggapai mimpinya meski kini kehidupannya makin tak mudah karena harus mengurus Bapak dan adik-adiknya. Sedangkan Tony dan Bondi tumbuh sebagai remaja yang menghabiskan masa puber mereka di rumah susun yang jauh dari peradaban. Keduanya menjalani kehidupan seperti remaja pada umumnya, memiliki sahabat dan gadis yang ditaksir. Sementara itu, Bapak pergi bekerja nyaris tiap hari. Namun, Bapak tidak pernah menjelaskan pekerjaannya kepada anak-anaknya. Anehnya ia hanya pergi dengan membawa koper misterius dan ketika pulang langsung memasukkan koper itu ke lemari lalu menguncinya. Ketika mereka berusaha menjalani hidup dengan normal, tiba-tiba fenomena penembak misterius alias Petrus terus merajalela di jalanan ibukota. Berita soal Petrus menjadi heboh di media. Selain itu, kabar mengenai badai besar yang akan melanda Jakarta pada 16 April 1986 juga menjadi topik hangat. Badai tersebut diramalkan akan membuat banjir, terutama di kawasan daratan yang lebih rendah seperti lokasi rumah susun mereka. Di sisi lain, Rini berniat meninggalkan di rumah susun. Rencana ini ditentang oleh Bapak. Menurut Bapak, tinggal di rumah susun lebih aman. Jika terjadi sesuatu mereka tidak sendirian. Ternyata kehidupan normal yang berusaha mereka jalani tidak berjalan mulus. Badai melanda rusun tersebut. Elevator rumah susun jatuh dan menyebabkan sejumlah korban jiwa. Tidak hanya itu, badai membuat pelaksanaan pemakaman jenazah menjadi terhalang. Akhirnya jenazah tersebut harus disemayamkan terlebih dahulu di rumah susun itu. Sebagian besar penghuni rusun telah mengungsi karena tidak ingin terjebak badai. Sehingga bangunan tersebut menjadi begitu sepi dan menyeramkan. Di tengah momen sepi dan terjebak badai tersebut, listrik rumah susun mati karena gardu terendam banjir. Saat itulah, malam panjang penuh teror horor terjadi, termasuk kedatangan kembali Ibu dan kelompok misterius yang menghantui Rini dan keluarganya.",
                "id_kategori" => 1
            ],
            [
                "image" => "Hthe.jpg",
                "judul" => "The Conjuring",
                "j_episode" => 1,
                "referensi" => "Netflix, Rebahin",
                "sutradara" => "James Wan",
                "tanggal" => Carbon::parse('2013-03-20'),
                "rating" => 75,
                "deskripsi" => "Mengusung latar belakang tahun 1971, film The Conjuring 1 mengisahkan tentang keluarga pasangan Carolyn (Lili Taylor) dan Roger Perron (Ron Livingston) bersama 5 orang putri mereka. Keluarga Carolyn dan Roger pindah ke sebuah rumah tua di kota Harrisville. Saat mereka pindah, semua berjalan lancar dan tidak ada hal-hal aneh yang terjadi. Suasana rumah menjadi mencurigakan setelah hari kedua mereka pindah, yaitu saat Carolyn tiba-tiba memiliki memar misterius hingga anjing mereka mati tergeletak di luar rumah. Hal aneh yang terjadi lantas menjadi peristiwa yang mencekam saat Carolyn terkunci di ruang bawah tanah rumahnya, sosok makhluk gaib menyerupai wanita tua menyerang salah satu putrinya. Setelah mengalami berbagai peristiwa mistis, Carolyn kemudian menghubungi investigator paranormal, yaitu Ed dan Lorraine Warren. Pasangan paranormal tersebut kemudian mencari tahun tentang sejarah rumah tersebut dan menemukan fakta bahwa hunian itu dulunya merupakan milik seorang penyihir bernama Bathsheba. Mereka pun memberikan saran untuk melakukan ritual pengusiran setan, karena sang pemilik rumah terdahulu telah mengutuk tanah yang dimilikinya itu. Pasalnya, dalam penyelidikannya mereka juga menemukan bahwa banyak laporan pembunuhan dan bunuh diri terjadi di rumah-rumah yang dibangun di atas tanah yang dulu dimiliki Bathsheba. Dalam proses pengusiran setan yang harus mendapatkan izin dari Gereja Katolik, Carolyn tiba-tiba dirasuki oleh arwah Bathsheba dan berusaha untuk membunuh salah seorang dari putrinya. Namun, hal tersebut gagal terjadi karena pasangan Warren mencoba untuk mengalihkan Carolyn agar tidak mendekati putrinya sendiri. Ritual pengusiran setan yang berjalan cukup panjang dan penuh adegan mistis itu pada akhirnya berhasil dilalui dan menyelamatkan Carolyn beserta putrinya.",
                "id_kategori" => 1
            ], [
                "image" => "Hthe2.jpg",
                "judul" => "The Conjuring 2",
                "j_episode" => 1,
                "referensi" => "Netflix, Rebahin",
                "sutradara" => "James Wan",
                "tanggal" => Carbon::parse('2016-05-13'),
                "rating" => 72,
                "deskripsi" => "Kisahnya dimulai pada tahun 1976 di mana Ed dan Lorraine tengah menginvestigasi pembunuhan di Amityville yang membuat rumah itu menjadi berhantu. Saat mencoba berkomunikasi dengan dunia arwah, Lorraine mendapat penglihatan adanya iblis dengan wujud seperti suster. Ia juga mendapat penglihatan bahwa Ed bakal terbunuh gara-gara iblis tersebut. Setahun kemudian, diceritakan ada kejadian aneh di rumah keluarga Hodgson di London. Kejadian horor berawal dari anak kedua di keluarga itu, Janet, yang bermain papan ouija. Sejak saat itu, ia mengalami hal-hal horor dan melihat penampakan sosok kakek tua yang mengklaim rumah itu adalah rumahnya. Anggota keluarga Janet juga mulai mengalami kejadian-kejadian horor sampai mengungsi di rumah tetangga mereka. Kisah mengerikan itu diliput oleh media setempat, di mana terungkap bahwa sosok kakek itu adalah Bill Wilkins yang sebelumnya tinggal di rumah itu. Akhirnya kisah mengerikan itu sampai ke Ed dan Lorraine yang diberitahu adanya kemungkinan bahwa hal-hal horor itu hanyalah rekayasa. Lorraine kembali mendapat penglihatan sosok iblis suster itu sebelum mendatangi rumah keluarga Janet. Para pihak yang terlibat mendapati Janet merusak rumah dengan sengaja dan menyimpulkan bahwa kejadian horor itu memang rekayasa. Saat Ed dan Lorraine memutuskan untuk pulang, Lorraine mendapat penglihatan mengerikan yang membuatnya kembali ke rumah Janet.
                Apa yang terjadi pada keluarga Janet? Apa yang akan dilakukan Ed dan Lorraine?",
                "id_kategori" => 1
            ],
            [
                "image" => "Hring.jpg",
                "judul" => "The Ring",
                "j_episode" => 1,
                "referensi" => "Rebahin",
                "sutradara" => "Gore Verbinski",
                "tanggal" => Carbon::parse('2002-10-18'),
                "rating" => 66,
                "deskripsi" => "The Ring mengawali kisah dari Rachel Keller (Naomi Watts). Sebelumnya ia sempat menonton sebuah rekaman video horor yang menyeramkan. Awalnya Rachel mengira video tersebut hanya rekaman biasa, namun siapa sangka bahwa setelah menonton itu mulai muncul kejadian-kejadian aneh dalam kesehariannya. Kejadian ganjil pertama adalah kematian Katie (Amber Tamblyn) yaitu keponakan Rachel yang tewas secara misterius. Tewasnya Katie ini berlangsung selang 7 hari dari waktu Rachel selesai menonton rekaman video horor. Dalam sinopsis The Ring dikisahkan bahwa selain Katie, beberapa teman Rachel lain pun ada yang secara tiba-tiba meninggal setelah menonton video yang sama dengannya. Yang lebih menakutkan adalah kematian teman-temannya itu berlangsung secara bersamaan bahkan tanpa sebab-sebab yang jelas. Rachel sendiri dibuat bingung dan ketakutan sehingga ia berniat mengusut tuntas apa yang sebenarnya terjadi dengan melakukan serangkaian investigasi. Video horor tersebut menampilkan beberapa rekaman menyeramkan dan mengerikan. Tapi dari sana Rachel memutuskan pergi ke Shelter Mountain Inn untuk mencari petunjuk. Setelah 7 hari berlalu, tiba saatnya Rachel yang merasakan sendiri teror menyeramkan. Bermula dari sebuah panggilan telepon misterius yang memberitahu bahwa ajal kematiannya akan tiba 7 hari lagi. Parahnya, Aidan (David Dorfman) yaitu putra Rachel secara tidak sengaja juga menonton video tersebut dan langsung mengalami kejadian ganjil. Serangkaian teror menyeramkan kini terus mengikuti keseharian Rachel. Terlebih ia diancam bahwa nyawanya dalam bahaya karena sebentar lagi dirinya bisa segera mati.",
                "id_kategori" => 1
            ],
            [
                "image" => "Hsewu.jpg",
                "judul" => "Sewu Dino",
                "j_episode" => 1,
                "referensi" => "Amazon Prime Video, Rebahin",
                "sutradara" => "Kimo Stamboel",
                "tanggal" => Carbon::parse('2023-08-09'),
                "rating" => 78,
                "deskripsi" => "Film ini mengisahkan Sri (Mikha Tambayong), seorang perempuan muda yang hidup dengan keterbatasan. Ia hanya tinggal bersama ayahnya yang sakit parah dan butuh biaya pengobatan. Kehidupan sehari-hari Sri dihabiskan dengan bekerja pada Yu Minah (Maryam Supraba). Namun, penghasilan dari pekerjaan itu tidak dapat mencukupi biaya hidup maupun uang untuk obat-obatan ayahnya. Kesempatan baru akhirnya datang ketika keluarga Atmodjo datang menawarkan pekerjaan kepada Sri. Ia diminta bekerja untuk keluarga Atmodjo dengan bayaran tinggi. Keluarga Atmodjo menjelaskan Sri menjadi orang yang tepat karena dia lahir pada Jumat kliwon. Alasan itu sebenarnya mencurigakan, begitu pula dengan jenis pekerjaan yang masih menjadi misteri. Namun, situasi yang menyulitkan bagi Sri dan keluarga membuat dirinya menerima tawaran tersebut. Ia pun direkrut untuk bekerja bersama dua perempuan lainnya, Erna (Givina Lukita) dan Dini (Agla Artalidia). Mereka dibawa ke sebuah gubuk tersembunyi di tengah hutan. Di sana, mereka ditugaskan untuk memandikan Della Atmodjo (Gisellma Firmansyah), cucu dari Karsa Atmodjo (Karina Suwandi). Della tidak sadarkan diri dalam waktu yang cukup lama karena terkena kutukan sewu dino alias seribu hari. Hal ini membuat ketiga orang itu sadar bahwa keluarga Atmodjo menjebak mereka. Sebab, Sri tak lama dari itu menyadari bahwa Erna dan Dini ternyata juga lahir pada Jumat kliwon. Situasi pun menjadi semakin runyam karena mereka harus menjaga Della yang terkurung keranda. Sri, Dini, dan Ema kemudian menghadapi beragam teror penuh mistis selama berada di rumah tersebut. Mereka juga baru menyadari bahwa ketiganya terlibat sebuah perjanjian mistis. Nyawa ketiga orang itu bahkan terancam hilang jika berani kabur sebelum perjanjian itu berakhir, yakni pada hari ke-1.000.",
                "id_kategori" => 1
            ],
            [
                "image" => "Hdanur.jpg",
                "judul" => "Danur : I Can See Ghosts",
                "j_episode" => 1,
                "referensi" => "Amazone Prime Vidio, Rebahin",
                "sutradara" => "Awi Suryadi",
                "tanggal" => Carbon::parse('2017-03-27'),
                "rating" => 54,
                "deskripsi" => "Film ini berkisah tentang pertemuan seorang gadis indigo bernama Risa Saraswati dengan sahabat-sahabat hantunya. Risa adalah seorang gadis indigo, dia memiliki kemampuan untuk melihat makhluk gaib. Sejak kecil Risa merasa kesepian, ayahnya bekerja di luar negeri dan hanya berkunjung setiap enam bulan sekali, sementara ibunya, Elly, sibuk bekerja sebagai seorang guru. Ketika Risa genap usia delapan tahun, dia berdoa agar mendapatkan teman dan tidak merasa kesepian lagi. Namun tak disangka, tiga bocah laki-laki sebayanya bernama Janshen, Peter, dan William hadir secara tiba-tiba. Anehnya, hanya Risa yang dapat melihat mereka. Ketiganya akhirnya memberi tahu Risa bahwa mereka adalah hantu yang meninggal pada zaman penjajahan Jepang di Hindia Belanda. Sejak itulah, Elly sering melihat anaknya tertawa sendiri dan seolah-olah sedang bermain dengan banyak teman. Merasa aneh, Elly kemudian memanggil Asep, seorang dukun yang juga indigo. Dia menjelaskan bahwa Risa dapat melihat makhluk gaib karena dia dapat mencium bau danur, atau mayat. Asep kemudian memperlihatkan wujud asli Janshen, Peter, dan William kepada Risa untuk menakutinya sehingga dia lupa akan kemampuan melihat dan menjauhi mereka. Menyadari bahwa teman-teman Risa adalah hantu, Elly mencari jalan untuk memisahkan Risa dengan teman-teman gaibnya tersebut. Dengan terpaksa, Risa harus pindah dari rumah neneknya tersebut. Sembilan tahun kemudian, Risa kembali ke rumah masa kecilnya bersama dengan Elly dan adik perempuannya, Riri. Karena Elly akan dinas ke luar kota, Risa, Riri, dan sepupu mereka Andri ditugaskan untuk menemani nenek mereka di sana hingga pengasuhnya datang. Ketika Riri sedang bermain, dia menemukan sebuah sisir di pohon beringin yang ditanam dekat rumah. Pohon beringin tersebut sebelumnya adalah satu-satunya tempat yang ditakuti oleh Janshen, Peter, dan William, sehingga mereka mengingatkan Risa untuk tidak pernah ke sana. Malamnya, seorang wanita bernama Asih datang dan menyatakan bahwa dia adalah pengasuh yang dipanggil oleh ibu Andri. Namun, Risa merasakan ada hal yang tidak beres karena Asih langsung saja tertarik pada Riri. Kejadian-kejadian aneh pun mulai mengganggunya. Risa menyimpulkan bahwa Asih adalah hantu ketika dia menyadari bahwa Andri tidak dapat melihatnya.",
                "id_kategori" => 1
            ],
            [
                "image" => "Apaw.jpg",
                "judul" => "PAW Patrol : The Mighty Movie",
                "j_episode" => 1,
                "referensi" => " bstation, Rebahin",
                "sutradara" => "Cal Brunker",
                "tanggal" => Carbon::parse('2022-08-09'),
                "rating" => 90,
                "deskripsi" => "Menceritakan petualangan anak anjing dalam menyelamatkan kota. Suatu ketika, sebuah meteor ajaib jatuh dan mendarat di kota para anjing bernama Adventure City. Kejatuhan meteor ajaib tersebut pun memberikan efek kepada para anak anjing PAW Patrol hingga mempunyai kekuatan super. Kekuatan super tersebut pun mengubah anak anjing PAW Patrol menjadi superhero bernama The Mighty Pups. Mereka pun akan dihadapkan oleh musuh bebuyutan para anak anjing yang baru saja keluar dari penjara. Ditambah, ia bekerja sama dengan seorang ilmuwan gila yang terobsesi dengan meteor untuk mengubah mereka menjadi penjahat super. Dengan mempertaruhkan keamanan Adventure City, The Mighty Pups pun harus menghentikan para penjahat tersebut.
                Seperti apa kelanjutan kisahnya?
                Berhasilkah The Mighty Pups menyelamatkan Adventure City?",
                "id_kategori" => 2
            ],
            [
                "image" => "Apanda.jpg",
                "judul" => "Kung Fu Panda",
                "j_episode" => 1,
                "referensi" => "Vidio, Bstation, Rebahin",
                "sutradara" => "John Stevenson, Mark Osbborne",
                "tanggal" => Carbon::parse('2008-06-06'),
                "rating" => 76,
                "deskripsi" => "Cerita film ini mengisahkan tentang seekor panda besar, bernama Po, yang bercita-cita menjadi seorang pejuang kung fu terkenal. Po adalah seorang panda yang sangat gemuk dan malas, yang bekerja di restoran mie ayam keluarganya. Dia bermimpi menjadi seorang pejuang kung fu terkenal dan mengagumi Furious Five, sebuah kelompok elit pejuang kung fu yang dipimpin oleh Master Shifu. Namun, Po merasa tidak mungkin untuk mewujudkan mimpinya karena ia merasa kung fu hanya untuk orang-orang yang lebih kecil dan lincah. Namun, nasib Po berubah saat ia dipilih secara tidak sengaja oleh Master Oogway, penjaga kota yang bijaksana, untuk menjadi Dragon Warrior. Dragon Warrior adalah gelar yang diberikan kepada seorang pejuang kung fu yang dipilih untuk melindungi kota dari ancaman jahat. Furious Five dan Master Shifu tidak senang dengan keputusan ini karena mereka merasa Po tidak memiliki kemampuan yang diperlukan untuk menjadi pejuang kung fu yang baik. Namun, Po tidak menyerah dan terus berjuang untuk menjadi Dragon Warrior yang hebat. Dia mendapat bantuan dari Master Shifu, yang akhirnya menyadari bahwa Po memiliki potensi yang besar. Bersama-sama, mereka melatih Po untuk menjadi pejuang kung fu yang tangguh dan menghadapi penjahat jahat, Tai Lung, yang melarikan diri dari penjara dan ingin mengambil alih kota.",
                "id_kategori" => 2
            ],
            [
                "image" => "Aelemen.jpg",
                "judul" => "Elemental",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Peter Sohn",
                "tanggal" => Carbon::parse('2023-06-14'),
                "rating" => 75,
                "deskripsi" => "ELEMENTAL bercerita tentang kehidupan dari elemen-elemen antropomorfik alam. Elemen-elemen tersebut terdiri dari, elemen air, api, udara, dan tanah yang hidup berdampingan. Mereka hidup di sebuah kota yang disebut Elemen City. Dari keempat elemen tersebut, terdapat dua elemen yang ternyata sulit untuk bersatu. Kedua elemen tersebut, yaitu elemen api dan air. Elemen api memiliki karakter yang kuat, bersemangat, dan keras, sedangkan elemen air memiliki karakter yang tenang, menyenangkan, dan easy going. Perbedaan tersebutlah yang membuat mereka sulit untuk bersatu. Meskipun begitu, mereka berdua tetap mencoba untuk dapat bersatu dengan cara mencari kesamaan. Tantangan pun muncul ketika kota yang mereka huni mengalami kekacauan. Mereka yang sedang berusaha bersatu pun harus membagi waktu untuk membantu menyelesaikan kekacauan. Akankah kekacauan berakhir dan mereka dapat bersatu?",
                "id_kategori" => 2
            ],
            [
                "image" => "Asuzume.jpg",
                "judul" => "Suzume no Tojimari",
                "j_episode" => 1,
                "referensi" => "Bstation, Amazone Prime Video",
                "sutradara" => "Makoto Shinkai",
                "tanggal" => Carbon::parse('2023-03-08'),
                "rating" => 77,
                "deskripsi" => "Suzume, seorang gadis berumur 17 tahun, hidup di barat daya Jepang, tepatnya sebuah kota yang tenang bernama Kyūshū. Suatu waktu, ia bertemu dengan seorang pemuda bernama Souta yang sedang berkeliling mencari pintu. Suzume kemudian mengikuti langkah kaki Souta. Ia menemukan sebuah pintu lapuk yang berdiri tegak di tengah reruntuhan pegunungan. Seakan-akan pintu tersebut adalah satu-satunya benda yang tersisa dari reruntuhan. Karena penasaran, Suzume meraih pintu itu dan tiba-tiba tubuhnya tertarik ke dalam pintu tersebut. Pintu misterius ini menjadi awal cerita. Tak berselang lama, pintu-pintu lainnya mulai terbuka silih berganti di berbagai penjuru Jepang. Pintu yang terbuka akan mendatangkan bencana dari sisi lainnya dan menghancurkan seluruh Jepang, sehingga pintu tersebut harus ditutup. Souta yang membawa misi menutup pintu yang terbuka, gagal menjalankan tugas karena ia berubah wujud menjadi sebuah kursi. Melalui kehadiran Suzume, keduanya berpetualang ke seluruh Jepang untuk menutup pintu yang terbuka demi mencegah bencana terjadi.",
                "id_kategori" => 2
            ],
            [
                "image" => "Aback.jpg",
                "judul" => "Back To The Outback",
                "j_episode" => 1,
                "referensi" => "Netflix, Rebahin",
                "sutradara" => "Harry Cripps, Clare Knight",
                "tanggal" => Carbon::parse('2021-12-03'),
                "rating" => 65,
                "deskripsi" => "Back to the Outback mengisahkan kehidupan beberapa binatang di kebun binatang Australia. Di sana, terdapat satu koala bernama Pretty Boy (Tim Minchin) yang menjadi bintang utama kebun binatang tersebut. Koala abu-abu itu memiliki penampilan begitu menggemaskan yang membuatnya memiliki penggemar di seluruh dunia. Pihak kebun binatang juga memasang kamera di banyak sisi yang membuat fan bisa melihat Pretty Boy 24/7. Sementara itu, perlakuan berbeda dirasakan sejumlah binatang lainnya. Mereka adalah Maddie (Isla Fisher), ular berbisa yang disebut-sebut bisa membunuh 100 orang karena bisa beracun. Kemudian, Frank (Guy Pearce) laba-laba ungu beracun, Zoe (Miranda Tapsell), Nigel (Angus Imrie) kalajengking, serta Jackie (Jacki Weaver) buaya. Mereka diperlakukan seperti monster dan selalu ditampilkan untuk menakut-nakuti pengunjung kebun binatang. Padahal, mereka memiliki kepribadian yang hangat. Terutama Maddie yang sejak kecil rindu mendapatkan cinta dari pengunjung kebun binatang. Namun, Chaz (Eric Bana) pengelola kebun binatang selalu memperlakukan mereka sebagai monster. Sehingga, harapan Maddie mendapatkan cinta dari pengunjung langsung pupus. Hal tersebut membuat Maddie berencana kabur dari kebun binatang dan ke alam bebas setelah mendengarkan cerita Jackie mengenai dunia luar yang bisa membuat mereka menjadi diri sendiri. Maddie dengan bantuan Zoe, Frank, dan Nigel mulai menyiapkan rencana kabur. Tetapi, rencana itu sempat mengalami halangan karena Pretty Boy. Maksud hati menghalangi rencana tersebut, Pretty Boy malah dibawa Maddie Cs keluar dari kebun binatang dan berhadapan dengan dunia luar. Kondisi itu membuat Pretty Boy harus mengucapkan selamat tinggal dengan kenyamanan kebun binatang.",
                "id_kategori" => 2
            ],
            [
                "image" => "Asing.jpg",
                "judul" => "Sing",
                "j_episode" => 1,
                "referensi" => "Netflix, Vidio, Amazone Prime Vidio",
                "sutradara" => "Garth Jennings",
                "tanggal" => Carbon::parse('2016-12-08'),
                "rating" => 71,
                "deskripsi" => "Film Sing mengisahkan tentang seekor koala bernama Buster Moon (Matthew Mc Conaughey) yang mengadakan kompetisi menyanyi. Hal itu dilakukan Moon untuk mempertahankan gedung teater warisan ayahnya dan mewujudkan cita-citanya menjadi pengusaha sukses. Selama proses kompetisi tersebut, Moon bersama domba hitamnya, Eddie, selalu mengalami kendala hingga membuat mereka bingung. Terlebih lagi, Buster Moon tidak memiliki pengalaman dalam menjalankan bisnis teater seperti ayahnya. Ide mengadakan kompetisi itu semakin sulit karena tidak adanya dukungan dari para donatur yang berinvestasi. Ada beragam jenis hewan yang ikut kompetisi tersebut, mulai dari udang kecil, jerapah, gajah dan banyak lagi. Hewan-hewan yang ikut kompetisi menunjukan kebolehannya seperti menyanyi berbagai genre, dance bahkan ada menyanyi rap. Dari banyaknya hewan yang ikut, Buster Moon hanya memilih sebanyak enam hewan untuk mengisi teater dan membuka peluang baru menjalani bisnis.",
                "id_kategori" => 2
            ],
            [
                "image" => "Asing2.jpg",
                "judul" => "Sing 2",
                "j_episode" => 1,
                "referensi" => "Netflix, Vidio, Amazone Prime Vidio",
                "sutradara" => "Garth Jennings",
                "tanggal" => Carbon::parse('2022-01-07'),
                "rating" => 74,
                "deskripsi" => "Sing 2 masih melanjutkan aksi kelompok musikal milik Buster Moon (Matthew McConaughey) yang beranggotakan Ash (Scarlett Johansson), Johnny (Taron Egerton), Rosita (Reese Witherspoon), Meena (Tori Kelly), dan Gunter (Nick Kroll). Setiap tampil, tiket acara mereka selalu terjual habis. Hal tersebut rupanya masih belum cukup bagi Buster Moon. Ia bercita-cita untuk membawa kelompoknya tampil di Redshore City, sebuah kota megah yang memiliki ruang pertunjukan besar. Lolos audisi di Crystal Entertainment menjadi satu-satunya cara agar bisa tampil di sana. Segala upaya mereka lakukan agar dapat pergi ke Redshore City. Mereka bahkan rela berlatih semalam suntuk di dalam bus saat menuju ke lokasi tersebut. Saat tiba di Redshore City, Buster Moon dan kelompoknya segera menuju ke lokasi audisi dan langsung mempersembahkan penampilan yang telah dipersiapkan. Namun mereka dinyatakan tidak lolos oleh pemilik Crystal Entertainment, Jimmy Crystal (Bobby Cannavale). Jawaban itu membuat Buster Moon gusar dan meminta tambahan waktu untuk menampilkan pertunjukan yang lebih baik. Di tengah keributan itu, Gunter mencetuskan ide unik yang melibatkan Clay Calloway (Bono), seekor penyanyi rock legendaris yang sudah lama menghilang. Ide itu membuat Jimmy terkesan dan setuju untuk memberi mereka kesempatan tampil di Redshore City. Buster Moon dan kelompoknya lalu diberi waktu selama dua bulan untuk membuat pertunjukan tersebut. Apabila gagal, mereka akan dibinasakan dan diusir dari Redshore City untuk selama-lamanya.",
                "id_kategori" => 2
            ],
            [
                "image" => "Amini.jpg",
                "judul" => "Minions : The Rise of Gru",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Kyle Balda",
                "tanggal" => Carbon::parse('2022-06-29'),
                "rating" => 65,
                "deskripsi" => "Jauh sebelum menjadi penguasa kejahatan, Gru (Steve Carell) hanyalah seorang bocak lelaki berusia 12 tahun di pinggiran kota pada 1970-an. Ia berencana untuk mengambil alih dunia ruang bawah tanahnya. Ketika Gru berpapasan dengan Minion, termasuk Kevin, Stuart, dan Bob, mereka seketika menjadi keluarga. Mereka bersama-sama membangun markas, merancang senjata, dan berusaha keras untuk menjalankan misi pertamanya. Ketika supergrup supervillain yang terkenal, The Vicious 6, menggulingkan pemimpin mereka, pejuang seni bela diri legendaris Wild Knuckles (Alan Arkin), Gru sebagai fanboy yang paling setia, diwawancarai untuk menjadi anggota terbaru mereka. Namun, The Vicious 6 tidak terkesan oleh anak kecil yang ingin menjadi penjahat, tetapi kemudian Gru mengakalinya hingga membuat marah, dan dia menjadi musuh bebuyutan mereka. Dengan Gru dalam pelarian, para Minion berusaha menguasai seni kungfu untuk membantu menyelamatkannya. Gru menyadari bahwa bahkan orang jahat pun membutuhkan sedikit bantuan dari teman-teman mereka.",
                "id_kategori" => 2
            ],
            [
                "image" => "Abos.jpg",
                "judul" => "The Boss Baby",
                "j_episode" => 1,
                "referensi" => "Vidio",
                "sutradara" => "Tom McGrath",
                "tanggal" => Carbon::parse('2017-04-05'),
                "rating" => 63,
                "deskripsi" => "Film ini menceritakan tentang seorang anak laki-laki bernama Tim Templeton yang berusia 7 tahun dan sangat imajinatif. Tim sangat menikmati perhatian orang tuanya dan merasa takut akan kehilangan perhatian tersebut ketika memiliki seorang adik laki-laki. Adiknya, Theodore, terlihat sangat aneh dan sering mengenakan jas dan dasi layaknya seorang bos. Boss Baby pertama kali datang dengan taksi, mengenakan jas dan dasi, serta membawa tas kerja. Boss Baby berperilaku seperti bayi normal ketika orang dewasa ada di sekitarnya, namun berbicara dan berperilaku seperti orang dewasa ketika tidak ada orang dewasa di dekatnya. Ternyata, Boss Baby adalah seorang agen rahasia yang berasal dari sebuah perusahaan bernama Baby Corp. Boss Baby datang ke rumah Tim untuk melakukan sebuah misi rahasia dan meminta kerja sama dari Tim untuk keberlangsungan misi tersebut.",
                "id_kategori" => 2
            ],
            [
                "image" => "Aastro.jpg",
                "judul" => "Astro Boy",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "David Bowers",
                "tanggal" => Carbon::parse('2009-10-05'),
                "rating" => 62,
                "deskripsi" => "Ketika putra seorang ilmuwan meninggal, ilmuwan itu membuat robot anak-anak berkekuatan menakjubkan. Namun, karena tidak bisa memenuhi harapan sang ilmuwan, robot itu melakukan perjalanan untuk mencari penerimaan. Dalam perjalanannya, dia mengalami pengkhianatan dan memasuki dunia robot gladiator. Meski demikian, dia memutuskan kembali untuk menyelamatkan Metro City dari alien. Pada akhirnya, dia akur kembali dengan sang ayah yang pernah menolaknya.",
                "id_kategori" => 2
            ],
            [
                "image" => "Apony.jpg",
                "judul" => "My Little Pony : A New Generation",
                "j_episode" => 1,
                "referensi" => "Netflix, Bstation",
                "sutradara" => "Robert Cullen, Jose Ucha",
                "tanggal" => Carbon::parse('2021-09-24'),
                "rating" => 68,
                "deskripsi" => "Hal yang tak diduga-duga telah terjadi, yakni Equestria telah kehilangan sihirnya. Kuda Poni, Unicorn, dan Pegasi tidak lagi berteman dan kini hidup terpisah oleh spesies. Namun, Sunny Starscout (diperankan Vanessa Hudgens) yang idealis bertekad untuk menemukan cara agar mempersatukan kembali dunia mereka. Bekerja sama dengan Izzy Moonbow (diperankan Kimiko Glenn) yang berhati terbuka, keduanya melakukan perjalanan ke negeri yang jauh tempat mereka bertemu orang-orang seperti Pipp Petals (diperankan Sofia Carson) dan Zipp Storm (diperankan Liza Koshy) yang karismatik dan pemberani. Mereka bersama dengan Hitch Trailblazer (diperankan James Marsden) yang selalu bertanggung jawab. Perjalanan misi mereka dipenuhi dengan berbagai kesialan. Namun, persahabatan baru mereka ini memiliki keistimewaan sendiri yang mungkin dibutuhkan oleh ponyverse untuk memulihkan sihir dan membuktikan bahwa bahkan kuda poni kecil dapat membuat perbedaan besar.",
                "id_kategori" => 2
            ],
            [
                "image" => "Acars.jpg",
                "judul" => "Cars",
                "j_episode" => 1,
                "referensi" => "Disney+, LK21",
                "sutradara" => "John Lasseter",
                "tanggal" => Carbon::parse('2006-06-09'),
                "rating" => 72,
                "deskripsi" => "Sebuah mobil balap bernama Lighting McQueen pergi ke California untuk balap final di Piston Cup melawan The King dan Chick Hicks. Namun, McQueen secara tidak sengaja merusak jalan di sebuah kota bernama Radiator Springs. Sebagai hukuman, dia diwajibkan memperbaikinya. Ketika sedang memperbaiki, McQueen bertemu truk derek tua bernama Mater, sebuah Porsche bernama Sally, dan sebuah Hudson Hornet bernama Doc Hudson. Setelah berteman dengan mereka, McQueen akhirnya sadar bahwa ada hal yang lebih penting dari tropi, kemasyhuran, dan sponsor.",
                "id_kategori" => 2
            ],
            [
                "image" => "Atoy.jpg",
                "judul" => "Toy Story",
                "j_episode" => 1,
                "referensi" => "Disney+",
                "sutradara" => "John Lasseter",
                "tanggal" => Carbon::parse('1995-11-22'),
                "rating" => 83,
                "deskripsi" => "Seorang anak laki-laki bernama Andy Davis (John Moris) bersama dengan keluarganya akan segera pindah rumah. Andy sangat senang karena hari dimana ia akan pindah rumah bertepatan dengan hari ulang tahunnya. Mengingat jadwalnya sangat padat, Ibu Andy akhirnya memajukan acara ulang tahun Andy seminggu lebih awal. Andy mendapatkan banyak kado dari keluarganya. Hal ini membuat mainan-mainan Andy yang lain penasaran, apakah ada mainan lain yang akan menggantikan mereka. Hal tersebut membuat salah satu mainan favorit Andy, yakni boneka tarik koboi bernama Woody (Tom Hanks) memimpin mainan lain untuk jadi mata-mata. Woody menugaskan mainan tentara untuk pergi ke ruang keluarga guna memberikan informasi terkait pembukaan hadiah Andy. Ia memimpin komunikasi lewat monitor bayi. Mainan lain yang berada di dekat Woody yakni Mr. Potato Head (Don Rickles), Slinky Dog (Jim Varney), dan mainan dinosaurus bernama Rex (Wallace Shawn) ikut nervous. Tak hanya mereka berempat, ada juga si celengan babi bernama Hamm (John Ratzenberger), dan boneka porselen Bo Peep (Annie Potts) yang ikut mendengar hasil mata-mata para tentara. Mereka lega karena tidak ada mainan yang akan menggantikan mereka, sampai Ibu Andy memberikan kado kejutan, sebuah action-figure terbaru. Figur aksi itu merupakan sosok kadet ruang angkasa bernama Buzz Lightyear dan langsung mencuri perhatian Woody. Hal ini otomatis membuat Woody jadi cemburu karena merasa posisi dia sebagai mainan favorit Andy tergeser; sedangkan mainan yang lain senang-senang saja. Woody lantas memikirkan rencana supaya melenyapkan Buzz. Dua hari sebelum hari pindahan Andy sekeluarga, Ibu Andy mengajak anak-anaknya untuk makan malam di gerai Pizza Planet. Ibu Andy secara tegas mengingatkan Andy supaya hanya membawa 1 mainan saja, untuk memastikan Andy memilih Woody, koboi itu lantas berinisiatif untuk menyingkirkan Buzz, namun berujung kacau. Woody yang ingin Buzz ‘tak terlihat oleh Andy dengan menjatuhkannya ke belakang meja rias malah menjatuhkan Buzz ke luar jendela, hal ini terlihat oleh mainan lainnya yang lantas mengira Woody sengaja melakukannya untuk ‘membunuh’ Buzz. Membuktikan bahwa itu tidak sengaja, Woody segera menjemput Buzz namun kadet itu sudah hilang. Buzz yang marah ternyata bersembunyi di dalam mobil, Woody menemukannya ketika Andy yang tak bisa menemukan Buzz mengambil Andy untuk dibawa ke Pizza Planet. Saat keduanya bertemu di dalam mobil, mereka berkelahi habis-habisan. Naas, aksi perkelahian itu membuat mereka berdua terjatuh dari mobil dan tertinggal jauh. Woody dan Buzz pun bekerjasama untuk bisa pergi menyusul Andy ke Pizza Planet dengan menumpang mobil delivery. Begitu sampai di restoran dan akan bertemu Andy, Buzz tak sengaja melihat mainan derek dengan 3 alien hijau sebagai boneka hadiah dan salah kira kalau mereka adalah makhluk luar angkasa dan ingin menangkapnya. Hal ini membuat Woody ikut menyusul Buzz guna memperingati bahwa mereka harus kembali ke Andy. Terlambat, restoran yang ramai membuat mereka berdua harus pura-pura tak bernyawa. Sialnya, tetangga Andy yang super kejam, Sid Phillips (Erik von Detten) melihat mereka dan segera mengambil untuk diklaim miliknya. Woody dan 3 alien kecil juga Buzz panik bukan main begitu sampai di rumah Sid. Disana ada mainan mutan yang mengerikan mengamati mereka. Woody lantas meyakinkan Buzz untuk pergi dari sana, namun begitu melihat tayangan iklan di TV soal figur aksi Buzz, Buzz kaget dan tidak terima kenyataan, ia akhirnya mencoba terbang namun gagal. Alih-alih bisa terbang, Buzz malah jatuh dan membuat lengannya patah. Mainan mutan milik Sid yang dipikir Woody menyeramkan ternyata baik hati, mereka membantu memulihkan Buzz. Namun belum sempat kabur, Buzz diambil oleh Sid dan mengikatnya pada roket yang akan diterbangkan esok pagi. Buzz pasrah, ia kehilangan semangat hidup. Woody lantas memberitahu Buzz bahwa tujuan mereka menjadi mainan adalah untuk membuat pemilik mereka, yakni Andy bahagia, itu tugas utama mereka. Percakapan itu membuat semangat Buzz kembali, ia akhirnya bekerjasama dengan mainan mutan lainnya untuk keluar dari kediaman Sid yang kejam dan berhasil, Sid menyerah ketakutan. Saat berhasil meyakinkan Sid untuk tidak menyakiti mainannya lagi, Woody dan Buzz akhirnya pergi menyusul truk pindahan Andy. Sial, anjing milik Sid melihatnya dan menggigit pergelangan kaki Woody. Buzz mencoba melawan anjing itu sementara Woody berusaha naik ke truk dan mendorong mainan mobil RC keluar guna menjemput Buzz. Mainan lain yang ada di truk lantas mengira bahwa Woody lagi-lagi berbuat ulah dengan menyingkirkan RC. Mereka marah dan mendorong Woody kembali ke jalan. Saat Buzz berhasil lepas dari anjing milik Sid, mereka berdua menumpang RC untuk mengejar truk, mainan lain yang melihat itu sadar bahwa mereka ini salah duga terhadap Woody. Aksi pengejaran tersebut harus gagal akibat baterai mobil RC habis, saat harapan dirasa sudah tidak ada, Woody mendapatkan ide untuk menyalakan roket yang masih terikat pada Buzz. Roket itu lantas membantu Woody, Buzz dan RC melesat kencang. Saat mereka meluncur ke arah truk dan mulai terbang, Woody melempar RC ke dalam truk. Woody dan Buzz lantas mengudara. Sebelum roket meledak, Buzz melepaskan roketnya dan melebarkan sayapnya. Woody dan Buzz berhasil meluncur perlahan ke arah mobil Andy. Mereka berhasil masuk lewat celah sunroof dan mendarat di samping Andy. Anak itu lantas girang bukan main karena mengira mainannya hilang.",
                "id_kategori" => 2
            ],
            [
                "image" => "Aponyo.jpg",
                "judul" => "Ponyo",
                "j_episode" => 1,
                "referensi" => "Netflix, Bstation",
                "sutradara" => "Hayao Miyazaki",
                "tanggal" => Carbon::parse('2017-07-01'),
                "rating" => 76,
                "deskripsi" => "Film Ponyo mengisahkan tentang kisah persahabatan antara anak laki-laki bernama Sosuke (Hiroki Doi) dan seekor ikan  bernama Ponyo (Yuria Nara). Sosuke tinggal bersama ibunya di pinggir pantai dan kerap ditinggal oleh ayahnya yang merupakan seorang kapten kapal. Suatu hari, Sosuke menolong seekor ikan yang tersangkut di botol kaca dan memberikannya nama Ponyo. Rupanya, Ponyo tidak seperti ikan pada umumnya karena memiliki sihir untuk dapat berubah wujud menjadi manusia. Di hari ketika Ponyo diselamatkan oleh Sosuke, ternyata ia sedang melarikan diri dari ayahnya. Sejak kejadian itu, berbagai bencana seperti badai dan tsunami kerap terjadi lantaran ayah Ponyo yang murka. Meskipun demikian, Sosuke dengan tulus membantu dan menjaga teman kecilnya itu dari segala bahaya yang ada.",
                "id_kategori" => 2
            ],
            [
                "image" => "Atotoro.jpg",
                "judul" => "My Neighbor Totoro",
                "j_episode" => 1,
                "referensi" => "Netflix, Bstation",
                "sutradara" => "Hayao Miyazaki",
                "tanggal" => Carbon::parse('1988-04-16'),
                "rating" => 81,
                "deskripsi" => "Cerita bermula saat kepindahan keluarga Kusakabe Satsuki dan Kusakabe Mei. Ayah mereka yang bernama Tasuo Kusakabe adalah seorang profesor arkeologi. Tasuo dan kedua anaknya pindah ke desa kecil bernama Showa agar dekat dengan rumah sakit tempat istrinya, Yasuko dirawat. Tempat yang mereka tempati adalah sebuah rumah tua yang berada di dekat hutan dan ladang. Di samping rumah, terdapat sebuah pohon keramat. Suatu hari ketika Mei bermain sendirian, ia masuk ke dalam hutan dan bertemu dengan sesosok makhluk besar, bulat, dan berbulu. Makhluk tersebut menyerupai kelinci tetapi memiliki kumis seperti kucing. Mei kemudian berteman dengan makhluk aneh itu dan ia beri nama Totoro. Sepulang dari hutan, Mei menceritakan kepada ayah dan kakaknya, Satsuki tentang pertemuannya dengan Totoro. Suatu hari, Saksuki bertemu dengan Totoro saat ia dan Mei berada di halte bus. Lalu Totoro memanggil makhluk berbentuk kucing tetapi berkaki 12. Mereka kemudian menaiki kucing itu dan mengelilingi desa di malam hari. Pertemuan tersebut kemudian membawa Satsuki dan Mei pada petualangan yang menakjubkan bersama Totoro.",
                "id_kategori" => 2
            ],
            [
                "image" => "Ajimmy.jpg",
                "judul" => "Jimmy Neutron: Boy Genius",
                "j_episode" => 1,
                "referensi" => "Prime Video",
                "sutradara" => "John A. Davis",
                "tanggal" => Carbon::parse('2001-12-21'),
                "rating" => 61,
                "deskripsi" => "Boy Genius mengisahkan tentang seorang anak kecil yang bernama Jimmy Neutron yang memiliki sebuah kemampuan luar biasa. Kemampuan itu adalah otaknya yang sangat cerdas dan melebihi kemampuan otak dari anak-anak kecil sebayanya. Sehingga selain kecerdasannya yang juga ikut membesar akibat ukuran otaknya, juga ukuran kepalanya yang ikut membesar untuk bisa menampung otak tersebut. Satu penelitiannya berhasil menghasilkan sebuah anjing mekanik yang langsung menjadi sahabatnya. Jimmy Neutron juga terkenal menggunakan kecerdasannya untuk membantu teman-temannya yang membutuhkan. Sheen merasa bodoh karena selalu gagal dalam menghadapi ujian. Jimmy kemudian menciptakan sebuah helm yang dapat meningkatkan kecerdasan seseorang dengan berkali-kali lipat. Namun ternyata alat tersebut memberikan efek samping yang membuat Sheen memiliki kekuatan telepati sehingga mengubahnya menjadi orang jahat. Kemudian di sisi lain, ada sekelompok alien yang datang untuk menyerang bumi untuk mengeincar hasil penelitiannya. Mampukah Jimmy memperbaiki kesalahannya sekaligus melawan Alien jahat yang memburunya?",
                "id_kategori" => 2
            ],
            [
                "image" => "Adragon.jpg",
                "judul" => "How to Train Your Dragon: The Hidden World",
                "j_episode" => 1,
                "referensi" => "Bstation, Amazon Prime Video",
                "sutradara" => "Dean DeBlois",
                "tanggal" => Carbon::parse('2019-01-09'),
                "rating" => 74,
                "deskripsi" => "Setahun setelah menjadi Kepala Suku Berk, Hiccup dan teman-temannya aktif menyelamatkan naga-naga yang ditangkap perompak untuk dibawa ke Berk. Namun, semakin banyak naga yang diselamatkan, Berk pun menjadi penuh. Kondisi ini membuat Berk jadi target para perompak untuk mencuri dan menangkap naga. Hiccup lalu teringat bahwa mendiang ayahnya, Stoick (Gerard Butler), pernah bercerita tentang Hidden World, sebuah tempat persembunyian naga. Ia pun bertekad untuk menemukan tempat tersebut. Masalah mulai muncul seiring kehadiran seorang pemburu naga bernama Grimmel (F. Murray Abraham). Grimmel memiliki misi untuk membunuh seluruh naga berspesies Night Fury. Ia pun memancing Hiccup dan Toothless dengan Light Fury, naga dengan tampilan seperti Toothless, tapi dengan tubuh berwarna putih. Rencana tersebut sepertinya berhasil karena Toothless merasa tertarik dengan kehadiran Light Fury dan mendekatinya. Untungnya, Hiccup dan Tuffnut (Justin Rupple) menemukan jebakan yang dipasang Grimmel. Tak lama kemudian, Grimmel mendatangi Berk dan meminta Hiccup menyerahkan Toothless. Tanpa diketahui Grimmel, Hiccup telah menyiapkan rencana untuk menyerangnya. Sayangnya, Grimmel berhasil kabur dan naga Deathgripper miliknya justru membakar sebagian besar area Berk. Hiccup dan penduduk Berk pun harus meninggalkan Berk dan mencari Hidden World yang dimaksud Stoick. Di sisi lain, mereka juga harus bekerja sama untuk melawan Grimmel. Akankah Hiccup dan kawan-kawan mampu menemukan Hidden World untuk menyelamatkan para naga?",
                "id_kategori" => 2
            ],
            [
                "image" => "Adoraemon.jpg",
                "judul" => "Stand by Me Doraemon",
                "j_episode" => 1,
                "referensi" => "Netflix, Vidio ",
                "sutradara" => "Takashi Yamazaki, Ryūichi Yagi",
                "tanggal" => Carbon::parse('2014-12-18'),
                "rating" => 73,
                "deskripsi" => "Cerita diawali dengan kedatangannya Sewashi, cucu dari cucu Nobita yang berasal dari abad 22. Sewashi datang bersama Doraemon yang merupakan robot berbentuk kucing yang memiliki kantong Ajaib. Sewashi menjelaskan bahwa masa depan Nobita akan penuh dengan ketidak beruntungan. Karena nilai yang selalu jelek dan sifatnya yang ceroboh Nobita tidak mendapat pekerjaan. Kemudian Nobita membangun perusahaan sendiri yang pada akhirnya juga gagal. Hal tersebut menyebabkan keturunan-keturunan Nobita juga mengalami krisis keuangan. Maka dari itu Sewashi datang untuk mengubah nasib Nobita. Sewashi meminta Doraemon untuk membantu Nobita menemukan kebahagiaannya agar masa depan Nobita dapat berubah. Pada awalnya Doraemon menolak permintaan Sewashi yang membuat Sewashi harus menekan tombol di hidung Doraemon agar perintahnya menjadi misi yang harus diselesaikan Doraemon. Karena hal tersebut Doraemon tidak dapat kembali ke masa depan sebelum ia berhasil membuat Nobita bahagia. Dalam hari-hari berikutnya Doraemon menemukan hal yang membuat Nobita bahagia, yaitu menikahi Shizuka. Shizuka merupakan teman masa kecil Nobita yang disukai Nobita. Doraemon membantu Nobita dengan berbagai gadget ajaib yang ada di kantong empat dimensinya. Apakah Doraemon berhasil untuk membantu Nobita? Bagaimana perpisahan Nobita dan Doraemon pada akhirnya?",
                "id_kategori" => 2
            ],
            [
                "image" => "Ddeath.jpg",
                "judul" => "Death's Game : Season 1",
                "j_episode" => 8,
                "referensi" => "DrakorID, iQIYI",
                "sutradara" => "Ha Byung Hoon",
                "tanggal" => Carbon::parse('2023-12-15'),
                "rating" => 88,
                "deskripsi" => "Drama ini mengisahkan sosok Choi Yi Jae (diperankan oleh Seo In Guk), seorang pria yang dibesarkan dalam keluarga dengan keterbatasan ekonomi. Meskipun hidup dalam keterbatasan, Yi Jae memiliki kepribadian cerdas dan penuh kebaikan. Namun, setelah tujuh tahun gagal untuk mendapatkan pekerjaan yang layak, Yi Jae mengalami depresi dan putus asa. Pada titik terendahnya, ia memutuskan untuk mengakhiri hidupnya dengan bunuh diri. Ternyata ada harga yang harus ia bayar atas pilihannya tersebut. Setelah kematian, ia menemukan dirinya dihadapkan pada sosok Death (diperankan oleh Park So Dam) di gerbang neraka. Yi Jae diberi hukuman yang tak terduga yakni mengalami kematian 12 kali melalui tubuh yang berbeda. Untuk menghindari takdir buruk di neraka, Yi Jae harus bertahan hidup melalui serangkaian ujian yang mematikan. Ia pun harus menjelajahi kehidupan dan kematian melalui tubuh-tubuh yang berbeda demi mencari jalan keluar dari hukuman yang dijatuhkan kepadanya.",
                "id_kategori" => 3
            ],
            [
                "image" => "Dlaskar.jpg",
                "judul" => "Laskar Pelangi",
                "j_episode" => 1,
                "referensi" => "Netflix, Amazon Prime Video",
                "sutradara" => "Riri Riza",
                "tanggal" => Carbon::parse('2008-09-25'),
                "rating" => 79,
                "deskripsi" => "Film Laskar Pelangi bercerita tentang kehidupan anak-anak dari kalangan keluarga miskin di Desa Belitung. Mereka bersekolah di salah satu SD tertua di pulau tersebut yaitu SD Muhammadiyah. Sekolah ini hanya memiliki 10 siswa, sehingga terancam ditutup dan membuat anak-anak tersebut terpaksa tidak bisa melanjutkan sekolahnya lagi. Kesepuluh anak-anak tersebut yaitu Ikal, Lintang, Mahar, A Kiong, Syahdan, Borek, Sahara, Kucai, Trepani, dan Harun. Mereka giat ke sekolah demi mewujudkan impian dan cita-citanya. Ibu Muslimah yang diperankan Cut Mini, menjadi satu-satunya guru yang mengajar di SD tersebut. Sementara Pak Harfan diperankan oleh Ikranagara merupakan kepala sekolah SD Muhammadiyah. Bu Muslimah dan Pak Harfan terus berupaya mempertahankan SD tersebut agar tidak ditutup. Awalnya siswa SD Muhammadiyah hanya terdiri dari 9 siswa. Kemudian datanglah Harun, seorang anak keterbelakangan mental yang menjadi penyelamat di tengah kekhawatiran guru dan murid mengenai nasib sekolahnya yang akan ditutup. Harun adalah siswa ke 10 yang menjadikan SD Muhammadiyah tetap bisa bertahan dan melanjutkan aktivitas belajarnya seperti biasa. Sementara Ikal adalah pemeran utama film Laskar Pelangi uang memiliki ketertarikan pada dunia sastra, ia kerap kali menulis puisi dan membacakannya dihadapan guru dan teman-temannya. Ada pula Lintang, siswa dari keluarga nelayan miskin yang berprestasi. Ia bercita-cita menjadi seorang ahli matematika. Selain itu, ada satu siswa yang memiliki bakat dalam bidang seni, yaitu Mahar. Saat sekolah akan mengikuti perlombaan, Mahar menjadi pencetus ide menari dengan tumbuhan langka yang ada si Belitung. Saat perlombaan tiba, ternyata i tumbuhan tersebut membuat gatal sekujur tubuh siswa. Membuat mereka menari seperti orang kesetanan. Akan tetapi ide tersebut membuat SD Muhammadiyah menjadi pemenang lomba. Hari-hari yang telah dilalui semakin mengukir kenangan, kekeluargaan, kebahagiaan, dan penuh dengan canda tawa. Meskipun setiap hari mereka harus berjuang untuk sampai ke sekolah. Bahkan Lintang, siswa jenius harus menempuh perjalanan yang cukup terjal dengan melewati danau dan perbukitan. Suatu hari, siswa mendapatkan informasi mengenai lomba cerdas cernat. Kemudian Lintang Ikal, dan Sahara mengikuti perlombaan itu. Di tengah keterbatasan yang ada, ketiga siswa tersebut bisa membuktikan kemampuannya dengan mengalahkan Drs. Zulfikar, guru SD PN yang merupakan sekolah elit yang ada di Belitung. Mereka sangat gembira dan terus meningkatkan prestasinya.",
                "id_kategori" => 3
            ],
            [
                "image" => "Dmira.jpg",
                "judul" => "Miracle in Cell No. 7",
                "j_episode" => 1,
                "referensi" => "Netflix, WeTV",
                "sutradara" => "Hanung Bramantyo",
                "tanggal" => Carbon::parse('2022-09-08'),
                "rating" => 77,
                "deskripsi" => "Menceritakan tentang kisah Dodo Rozak (Vino G Bastian) yang memiliki keterbatasan mental. Ia memiliki anak perempuan yang cantik dan baik bernama Kartika (Graciella Abigail/Mawar De Jongh). Dodo memiliki kecerdasannya yang kurang, ia bertingkah dan berprilaku seperti anak-anak. Meski begitu, ia sangat menyayangi putrinya. Dodo tetap berusaha membahagiakan anak semata wayangnya. Sehari-hari ia berjualan balon untuk mendapatkan penghasilan. Kartika sebagai anak juga tidak malu terhadap kondisi sang ayah. Ia begitu bangga dengan ayahnya tersebut. Mereka menjalani hari-hari dengan penuh kebahagiaan meskipun dalam kondisi serba kekurangan. Hingga suatu ketika Dodo dituduh memperkosa dan membunuh seorang gadis kecil bernama, Melati. Karena tidak bisa membela diri akibat keterbatasannya, Dodo dijebloskan ke dalam penjara dan dijerat hukuman mati. Ia pun ditempatkan di sel nomor 7 bersama para napi yang kejam dan beringas. Di sel nomor 7 itu, Dodo menjalani berbagai peristiwa dengan para napi tersebut (Indro Warkop, Tora Sudiro, Bryan Domani, Indra Jegel dan Rigen). Suatu ketika, dengan bantuan para napi, Dodo berhasil menyelundupkan anaknya masuk ke dalam sel. Melihat kedekatan dan kasih sayang antara ayah dan anak ini, para napi tersebut menjadi tersentuh. Mereka pun ragu jika Dodo melakukan pembunuhan yang dituduhkan.",
                "id_kategori" => 3
            ],
            [
                "image" => "Dbeau.jpg",
                "judul" => "A Beautiful Day in the Neighborhood",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Marielle Heller",
                "tanggal" => Carbon::parse('2019-11-27'),
                "rating" => 72,
                "deskripsi" => "Mengisahkan persahabatan Fred Rogers (Tom Hanks) dan Lloyd Vogel (Matthew Rhys). Mengambil latar waktu pada 1998, Fred Rogers dikenal sebagai seorang pendeta Presbyterian dari Pittsburgh. Akrab dengan sebutan Mr. Rogers, ia juga merupakan seorang bintang film untuk salah satu program tayangan anak di PBS TV. Sementara Vogel adalah seorang jurnalis Esquire yang terkenal akan gaya penulisan cenderung sinis. Selama tampil di program anak, Mr. Rogers kerap menggunakan boneka dan nyanyian untuk menghibur para penonton. Sosoknya ditampilkan sebagai ayah yang sempurna. Suatu hari, majalah Esquire menugaskan salah satu wartawannya untuk mewawancarai Mr. Rogers. Vogel adalah wartawan yang mendapat tugas tersebut. Ia merasa aneh dan kurang senang saat ditugaskan meliput sosok Mr. Rogers. Menurutnya, ia tidak seharusnya mewawancarai bintang televisi yang penuh pencitraan. Saat itu, Vogel baru saja dikaruniai seorang bayi. Namun, ia sedang memiliki masalah dengan sang istri. Belum lagi konflik dengan ayahnya yang masih membekas. Ketika bertemu Mr. Rogers, Vogel bertanya apakah ia merasa bahwa dirinya seorang pahlawan. Tulisan dari hasil wawancara tersebut memang akan masuk ke tema pahlawan. Pertemuan dengan Mr. Rogers dapat menjadi jalan bagi Vogel untuk melihat dunia dari sudut pandang lain. Dari sinilah keduanya jadi sering berkomunikasi hingga menjalin hubungan pertemanan. Namun, akankah persahabatan mereka dapat membuka mata seorang Lloyd Vogel dalam melihat dunia?",
                "id_kategori" => 3
            ],
            [
                "image" => "Dperahu.jpg",
                "judul" => "Perahu Kertas",
                "j_episode" => 1,
                "referensi" => "Netflix, Amazon Prime Video",
                "sutradara" => "Hanung Bramantyo",
                "tanggal" => Carbon::parse('2012-08-16'),
                "rating" => 70,
                "deskripsi" => "Perahu Kertas mengisahkan pasang surut hubungan dua anak manusia, yaitu Kugy dan Keenan. Kisah bermula ketika mereka berdua kuliah di Bandung. Kugy, yang bercita-cita ingin menjadi penulis dongeng, kuliah di Fakultas Sastra. Ia punya kebiasaaan unik, yaitu suka membuat perahu kertas yang kemudian dilarungkannya di sungai. Keenan, pelukis muda berbakat, dipaksa untuk kuliah di Fakultas Ekonomi oleh ayahnya. Bersama dengan sahabat Kugy sejak kecil, Noni, serta pacar Noni, yakni Eko, yang juga adalah sepupu Keenan, mereka berempat menjadi geng kompak. Dari yang semula saling mengagumi, Kugy dan Keenan diam- diam saling jatuh cinta. Tapi berbagai hal menghalangi mereka. Tak hanya itu, persahabatan Kugy dan Noni pecah ketika Kugy, demi menjaga hatinya, tak datang pada pesta ulang tahun Noni yang diadakan di rumah Wanda. Keenan akhirnya pergi ke rumah Pak Wayan, seorang pelukis teman lama Lena, sekaligus mentor Keenan melukis. Dalam suasana hati yang gundah, kreatifitas melukis Keenan buntu. Luhde, keponakan Pak Wayan, berhasil mengembalikan semangat Keenan. Seorang kolektor langganan galeri Wayan bernama Remi menjadi pembeli pertama. Ingin cepat meninggalkan Bandung dan lingkungan lamanya, Kugy berjuang untuk lulus cepat. Begitu lulus sidang, kakak Kugy yang bernama Karel membantu agar Kugy magang di biro iklan bernama AdVocaDo milik temannya, yaitu Remi. Prestasi kerja Kugy cemerlang, dan menarik perhatian Remi.",
                "id_kategori" => 3
            ],
            [
                "image" => "Djalan.jpg",
                "judul" => "Jalan yang Jauh, Jangan Lupa Pulang",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Angga Dwimas Sasongko ",
                "tanggal" => Carbon::parse('2023-02-02'),
                "rating" => 66,
                "deskripsi" => "Di London, kota yang bagi Aurora penuh harapan dan berjuta kemungkinan untuk wujudkan impian, Ia menemukan tambatan hati yang memiliki visi yang sejalan dengannya, Jem (Ganindra Bimo). Seniman baru yang sedang naik daun sekaligus senior di kampusnya itu juga merupakan perantau dari Indonesia. Kehidupan Aurora terasa sempurna dan penuh gairah. Sampai ia menemukan sisi lain Jem yang terpaksa membuat Aurora mengorbankan kuliah serta meninggalkan mimpinya begitu saja. Dalam masa sulitnya, Aurora dibantu kedua sahabatnya; Honey (Lutesha Sadhewa) dan Kit (Jerome Kurnia) untuk tinggal bersama di apartemen mereka.",
                "id_kategori" => 3
            ],
            [
                "image" => "Dlike.jpg",
                "judul" => "Like & Share",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Ginanti S. Noer",
                "tanggal" => Carbon::parse('2022-12-08'),
                "rating" => 72,
                "deskripsi" => "Like & Share menceritakan kisah dua orang gadis yang tengah tertarik untuk mengeksplorasi dunia remajanya. Mereka berdua adalah Regina Lisa (Aurora Ribero) dan Sarah (Arawinda Kirana) yang sering menghabiskan waktu bersama. Dua gadis yang masih berusia 17 tahun ini pun sama-sama memiliki latar belakang yang pelik. Lisa hidup berdua bersama ibunya yang selalu mengatur dan menuntutnya hingga hubungan mereka menjadi tidak baik. Sementara itu, Sarah merupakan anak yatim piatu yang hanya tinggal berdua dengan kakak laki-lakinya, tetapi tidak pernah berbicara kepadanya. Mereka pun saling bersahabat dan memutuskan untuk saling jujur dan saling menerima kekurangan satu sama lain. Namun, semua berubah ketika Lisa terobsesi dengan pronografi yang membuat mereka akhirnya saling menjauh.",
                "id_kategori" => 3
            ],
            [
                "image" => "Dgie.jpg",
                "judul" => "Gie",
                "j_episode" => 1,
                "referensi" => "Netflix, Amazon Prime Video",
                "sutradara" => "Riri Riza ",
                "tanggal" => Carbon::parse('2005-07-14'),
                "rating" => 76,
                "deskripsi" => "Soe Hok Gie merupakan seorang aktivis mahasiswa yang lahir di keluarga keturunan Tionghoa dan menjalani kehidupan sederhana di Jakarta. Gie merupakan sosok yang jujur dan tidak kenal kompromi. Sejak usia remaja, Gie memiliki ketertarikan dengan konsep-konsep idealis yang dipaparkan oleh intelek-intelek kelas dunia. Ia memiliki semangat perjuangan dan rasa cintanya kepada Indonesia yang membentuk dirinya sebagai pribadi yang tidak toleran terhadap ketidakadilan. Hal ini membuat dirinya berjuang melawan rezim yang berkuasa saat itu, pada masa Presiden Soekarno. Ia menulis artikel yang berisikan kritikan terhadap pemerintah. Sejak saat itu, dirinya mendapatkan teror dari berbagai pihak. Gie berjuang hingga runtuhnya kekuasaan Presiden Soekarno yang kemudian digantikan oleh rezim baru dibawahi oleh Presiden Soeharto. Gie kecewa setelah mengetahui temannya yang bernama Tan Tjin Han terlibat dengan PKI dan Gie mendesaknya untuk meninggalkan PKI dan bersembunyi. Namun hal terjadi dengan Tan Tjin Han yang terbunuh dalam pembantaian orang yang dituduh komunis. Di balik perjuangan Gie menentang rezim kekuasaan Orde Lama dan Orde Baru, Gie merupakan seseorang yang mencintai alam. Ia diketahui merupakan pendiri dari Mapala UI yang sering kali mendaki gunung. Soe Hok Gie mengembuskan nafas terakhirnya ketika dirinya sedang mendaki Gunung Semeru.",
                "id_kategori" => 3
            ],
            [
                "image" => "Fhp1.jpg",
                "judul" => "Harry Potter and The Philosopher's Stone",
                "j_episode" => 1,
                "referensi" => "HBO GO, Vidio, Rebahin",
                "sutradara" => "Chris Columbus",
                "tanggal" => Carbon::parse('2001-12-19'),
                "rating" => 76,
                "deskripsi" => "Harry Potter adalah anak yatim piatu sekaligus keturunan penyihir bernama James dan Lily Potter. Setelah orang tuanya meninggal, Harry diasuh oleh satu-satunya kerabat yang ia miliki, yaitu keluarga Dursley. Kehidupan Harry jauh dari kata menyenangkan, namun menjelang ulang tahunnya yang ke-11, hal ajaib terjadi. Seorang penyihir bernama Hagrid datang pada Harry dan memberitahunya bahwa ia adalah seorang penyihir. Tak hanya itu, Hagrid juga memberitahu Harry tentang Lord Voldemort, penyihir kegelapan yang telah membunuh kedua orang tuanya. Pada akhirnya kedatangan Hagrid membuat hidup Harry berubah total, terutama ketika ia mulai bersekolah di sekolah sihir Hogwarts. Di sinilah ia bertemu dengan Ronald Weasley dan Hermione Granger yang kemudian menjadi sahabat dekatnya. Konflik utama dimulai ketika Harry, Ron, dan Hermione mengetahui bahwa ada sebuah batu bertuah yang disimpan di Hogwarts. Batu bertuah tersebut konon dapat memberikan kehidupan abadi pada pemiliknya. Harry kemudian curiga kalau guru ramuannya, Severus Snape, ingin mencuri batu tersebut. Snape sendiri dikenal sebagai guru killer yang sinis dan terang-terangan menunjukkan ketidaksukaannya pada Harry. Harry juga curiga kalau Snape sebenarnya masih setia pada Lord Voldemort. Karena itu ia berusaha mencuri batu bertuah untuk membangkitkan Voldemort agar penyihir jahat bisa kembali berkuasa. Harry pun berniat menggagalkan usaha Snape dan berusaha mendapatkan batu bertuah itu lebih dulu. Dalam menjalankan aksi ini, ia dibantu oleh kedua sahabatnya. Akan tetapi, Harry kemudian menemukan fakta mengejutkan tentang siapa sebenarnya orang yang menginginkan batu bertuah itu. Nyawa Harry pun terancam karena ternyata selama ini Voldemort ada di sekitarnya, bahkan lebih dekat dari perkiraannya.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fhp2.jpg",
                "judul" => "Harry Potter and The Chamber of Secrets",
                "j_episode" => 1,
                "referensi" => "HBO GO, Vidio, Rebahin",
                "sutradara" => "Chris Columbus",
                "tanggal" => Carbon::parse('2002-11-03'),
                "rating" => 74,
                "deskripsi" => "Sekuel kedua ini bercerita mengenai dibukanya slot gacor maxwin yang 50 tahun sebelumnya sempat menggemparkan Hogwarts. Para siswa diserang oleh mahluk yang tidak diketahui bentuknya dan setiap orang yang melihat matanya akan mati. Hal ini membuat Harry, Ron dan Hermione harus kembali berhadapan dengan berbagai bahaya yang melibatkan bangkitnya slot gacor maxwin. Menghabiskan musim panas bersama keluarga pamannya, Harry Potter tiba-tiba didatangi oleh seorang peri rumah bersama Dobby. Peri itu datang untuk memperingatkan Harry agar tidak kembali ke Hogwarts. Dobby sengaja mengambil semua surat dari teman-teman Harry dan menyabotase acara makan malam penting keluarga Dursley yang berakhir menjadi bencana. Paman Harry yang marah akhirnya mengurung Harry, namun bantuan datang saat Ron, Fred dan George Weasley datang. Harry akhirnya bisa kabur dari pamannya dan tinggal di kediaman Weasley sebelum mereka kembali ke sekolah. Harry, Hermione dan seluruh keluarga Weasley pergi ke Diagon Alley dan mendatangi peluncuran buku Gilderoy Lockhart. Saat itulah mereka tidak sengaja bertemu Lucius dan Draco Malfoy, saat itulah Harry melihat Lucius diam-diam menyelipkan buku ke barang Ginny. Sekolah pun dimulai, Harry kembali menjadi Seeker dan kini berhadapan dengan Draco yang juga menjadi Seeker. Harry berhasil membawa kemenangan bagi Griffindor tapi harus terluka karena Bludger yang dimantrai untuk mengejarnya. Malam itu Dobby tiba-tiba kembali datang, ia mengatakan bahwa ia telah menyabotase peron 9 ¾ dan membuat Bludger mengejarnya. Namun saat itu Harry mendengar para profesor dan perawat membawa seseorang yang membeku dan mengatakan penyerangan. Sejak kembali ke sekolah Harry memang kerap kali mendengar suara-suara aneh dari dinding. Dalam kelas duel, Draco mengucapkan mantra yang mengeluarkan ular dan Harry terlihat berbicara dengan ular tersebut. Sejak itulah orang-orang percaya bahwa Harry adalah keturunan Slytherine dan mungkin saja ia yang membuka kamar rahasia. Penasaran Ron, Harry dan Hermione membuat ramuan perubah wujud untuk mencari tahu kebenarannya dari mulut Draco sendiri. Saat mereka tahu bahwa bukan Draco yang membuka kamar rahasia, mereka di kagetkan dengan Hermione yang membeku. Sementara itu Harry menemukan buku harian milik Tom Riddle, buku itulah membawa Harry pada kejadian 50 tahun lalu. Dimana Riddle menuduh Hagrid yang sudah membuka ruang rahasia dan menyembunyikan monster itu. Karena serangan yang terus terjadi Dumbledore di paksa mundur dari jabatannya dan Hagrid akan di adili. Setelah mencari fakta, Ron dan Harry dikejutkan dengan berita Ginny yang diculik dan dibawa ke kamar rahasia. Keduanya bekerjasama untuk menemukan pintu masuk Chamber bersama profesor Lockhart, namun Lockhart kehilangan memorinya setelah memakai tongkat rusak Ron. Di sana lah mereka menemukan kulit ular yang besar, Ron dan Lockhart terjebak di sisi lain karena bebatuan yang runtuh. Harry terus maju hingga akhirnya menemukan Ginny, tak hanya itu Tom Riddle juga tiba-tiba muncul dihadapannya. Ternyata Tom lah yang merencanakan semua ini dan memanipulasi Ginny untuk berada dibawah pengaruhnya. Tom membeberkan bahwa ia adalah Voldemort dan akan kembali hidup setelah menyerap semua energi kehidupan Ginny. Harry sempat bertarung dengan ular Basilisk dan berkat bantuan burung Fawks, ia berhasil mengalahkan ular itu. Mengetahu bahwa Tom menyimpan sebagian dirinya dalam buku, Harry sengaja menusukkan taring Basilisk ke buku tersebut untuk membunuh Tom. Setelah itu Harry, Ron, Ginny dan Lockhart kembali dengan selamat ke Griffindors dengan batuan Fawks.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fhp3.jpg",
                "judul" => "Harry Potter and The Prisoner of Azkaban",
                "j_episode" => 1,
                "referensi" => "HBO GO, Vidio, Rebahin",
                "sutradara" => "Alfonso Cuaron",
                "tanggal" => Carbon::parse('2004-06-16'),
                "rating" => 79,
                "deskripsi" => "Selama musim panas, Harry Potter harus menghabiskan waktu bersama dengan keluarga pamannya, Dursley. Kejadian yang tidak menyenangkan di keluarga tersebut lalu membuatnya menjadi muak, dan ia tidak sengaja mengeluarkan ilmu sihirnya. Harry pun melarikan diri untuk pergi ke dunia sihir yang ada di Hogwarts. Setibanya di sana, Menteri Sihir yang bernama Cornelius Fudge mengampuni kesalahan Harry karena secara tidak sengaja menggunakan sihir di luar wilayah Hogwarts. Harry selanjutnya bertemu kembali dengan sahabat-sahabatnya, termasuk Ron Weasley dan Hermione Granger. Pada saat itu juga, Harry akhirnya mengetahui jika Sirius Black, seorang penyihir gelap dari komplotan Lord Voldemort, telah melarikan diri dari penjara Azkaban, dan berniat untuk membunuhnya. Harry, Ron, dan Hermione kemudian bergegas menuju sekolah Hogwarts untuk tahun ajaran ketiga. Hogwarts yang sekarang nampak berbeda karena ada penjaga hantu Dementor yang bertugas mencari Sirius. Di Hogwarts, kepala sekolah Albus Dumbledore mengumumkan bahwa Dementor akan menjaga sekolah sampai Sirius Black berhasil ditangkap. Pada momen itu, Dumbledore juga mengungkapkan jika Remus Lupin akan menjadi guru Pertahanan Terhadap Ilmu Hitam yang baru, serta Rubeus Hagrid diumumkan menjadi guru Pemeliharaan Makhluk Gaib yang baru. The Fat Lady alias Nyonya Gemuk, yang menjaga asrama Gryffindor, selanjutnya memberitahu kepada Dumbledore bahwa Sirius telah memasuki kastil Hogwarts. Sementara itu, Harry tiba-tiba diserang oleh Dementor saat dirinya tengah bertanding Quidditch melawan Hufflepuff. Ketika berada di Desa Hogsmeade, Harry akhirnya mengetahui jika Sirius adalah sahabat dekat ayahnya, dan ia telah mengkhianati Lord Voldemort. Harry juga menemukan fakta mengejutkan bahwa Sirius ternyata merupakan ayah baptisnya. Di sisi lain, Remus Lupin secara pribadi mengajari Harry Potter untuk membela diri dari dementor dengan menggunakan Mantra Patronus. Tikus peliharaan Ron, Scabbers, kemudian menggigitnya dan berlari ke arah pohon Whomping Willow. Saat Ron mengejar Scabbers, seekor anjing besar muncul dan menyeret Ron serta Scabbers ke lorong bawah tanah. Mereka akhirnya menemukan bahwa anjing itu sebenarnya adalah Sirius Black, yang merupakan sesosok Animagus. Lupin lalu memeluk Sirius sebagai sahabat lamanya. Lupin juga mengaku bahwa ia adalah seorang manusia serigala. Sirius lalu menjelaskan bahwa dirinya tidak bersalah karena dituduh mengkhianati keluarga Potter untuk bergabung dengan Voldemort, serta membunuh 12 orang Muggle. Terungkap juga jika Scabbers sebenarnya adalah Peter Pettigrew, seorang Animagus yang sebenarnya mengkhianati keluarga Potter, dan melakukan serangkaian aksi pembunuhan Severus Snape lalu datang untuk menangkap Sirius, tetapi Harry berhasil mencegahnya. Lupin dan Sirius kemudian bersiap untuk membunuh Pettigrew, namun Harry memilih membawanya ke Dementor untuk diadili. Situasi menjadi kacau ketika bulan purnama terbit, dan Lupin berubah menjadi manusia serigala, sirus berubah menjadi anjing untuk saling berhadapan. Sedangkan Pettigrew, ia kembali menjadi tikus dan berhasil melarikan diri.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fhp4.jpg",
                "judul" => "Harry Potter and The Goblet of Fire",
                "j_episode" => 1,
                "referensi" => "HBO GO, Vidio, Rebahin",
                "sutradara" => "Mike Newell",
                "tanggal" => Carbon::parse('2005-11-18'),
                "rating" => 77,
                "deskripsi" => "Film ini dimulai dengan munculnya tanda-tanda kembalinya Lord Voldemort, penyihir jahat yang sudah lama dikalahkan oleh Dumbledore dan Lily Potter, orangtua Harry Potter. Dalam turnamen Triwizard, tiga sekolah sihir bersaing untuk memenangkan Piala Triwizard, sebuah turnamen yang hanya diadakan setiap 100 tahun sekali. Namun, Harry Potter, seorang siswa Hogwarts, tiba-tiba dipilih oleh Goblet of Fire untuk mewakili Hogwarts di turnamen ini, meskipun aturan membatasi peserta harus berusia 17 tahun atau lebih. Harry Potter yang kaget dengan terpilihnya dirinya harus menghadapi tiga tugas yang berbeda dan berbahaya, bersama dengan siswa dari sekolah lain: Fleur Delacour dari Beauxbatons, Viktor Krum dari Durmstrang, dan Cedric Diggory dari Hogwarts. Tiga tugas ini sangat sulit dan berbahaya, dan harus diselesaikan dengan baik agar para peserta bisa mendapatkan poin. Namun, selama turnamen, Harry juga harus menghadapi tindakan misterius yang mengancam nyawanya, termasuk serangan dari Lord Voldemort sendiri. Selain itu, Harry juga memiliki masalah pribadi dengan Ron Weasley yang marah karena Harry mendapat pujian dari Hermione Granger yang dianggap Ron lebih pantas menerimanya. Harry juga mulai merasakan ketertarikan terhadap Cho Chang, seorang siswi Hogwarts yang menjadi pacar Cedric Diggory. Namun, ketika tiba saatnya untuk menyelesaikan tugas terakhir, Harry dan Cedric tiba-tiba berpindah ke sebuah kuburan di mana mereka diserang oleh Lord Voldemort dan pengikutnya. Cedric tewas di sana, dan Harry hampir mati sebelum Dumbledore dan guru-guru Hogwarts lainnya tiba untuk menyelamatkannya. Dalam akhir cerita, Harry mengetahui bahwa nama-nama penyihir yang meninggal dalam turnamen, termasuk Cedric, adalah bagian dari rencana Voldemort untuk kembali ke kekuasaan. Harry menunjukkan tanda-tanda kembalinya Voldemort kepada Dumbledore, yang akhirnya memperkuat kebenaran bahwa Lord Voldemort benar-benar kembali.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fhp5.jpg",
                "judul" => "Harry Potter and The Order of The Phoenix",
                "j_episode" => 1,
                "referensi" => "HBO GO, Vidio, Rebahin",
                "sutradara" => "David Yates",
                "tanggal" => Carbon::parse('2007-07-11'),
                "rating" => 75,
                "deskripsi" => "Cerita dimulai ketika Harry Potter kembali ke rumah keluarganya di Privet Drive setelah berakhirnya tahun ajaran di Hogwarts. Dia diserang oleh Dementor di depan bibi dan pamannya, tetapi kemudian diselamatkan oleh Anggota Order of Phoenix bernama Nymphadora Tonks. Setelah insiden ini, Harry mendapatkan surat dari Kementerian Sihir yang menginstruksikan dia untuk tidak kembali ke Hogwarts dan mengatakan bahwa Dumbledore telah memalsukan suratnya. Namun, setelah Harry dan pamannya diserang oleh sekelompok dementor, Dumbledore mengambil Harry ke Hogwarts di mana dia bertemu dengan teman-temannya Ron dan Hermione. Di Hogwarts, Harry menemukan bahwa dia tidak diizinkan untuk berbicara tentang kembalinya Voldemort dan bahwa kelas Pertahanan terhadap Ilmu Hitam diambil alih oleh profesor baru, Dolores Umbridge. Dia tidak mengajarkan kelas secara efektif dan hanya mempelajari teori, menyebabkan frustasi bagi Harry dan teman-temannya. Harry dan teman-temannya membentuk kelompok rahasia yang disebut Dumbledore's Army, dan mereka mulai mempelajari pertahanan terhadap ilmu hitam di bawah bimbingan Harry. Sementara itu, Voldemort dan pengikutnya semakin kuat dan mereka sedang mencari sebuah ramuan yang dikenal sebagai Prophecy yang berisi ramalan tentang kemenangan akhir. Harry mengetahui bahwa Prophecy terletak di Kementerian Sihir dan dia memutuskan untuk pergi ke sana bersama teman-temannya untuk melindungi ramalan tersebut. Aksi ini mengakibatkan pertempuran besar di mana banyak orang terluka dan Sirius Black, Ayah Baptis Harry, terbunuh oleh sepupunya yang merupakan pengikut Voldemort. Dalam pertempuran akhir melawan Voldemort, Dumbledore dan Harry bergabung untuk melawan Lord Voldemort dan akhirnya mengalahkannya. Harry akhirnya kembali ke Privet Drive, di mana dia disambut oleh teman-temannya. Meskipun kemenangan telah diraih, Harry tetap merasa sedih karena kehilangan Sirius Black.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fhp6.jpg",
                "judul" => "Harry Potter and The Half-Blood Prince",
                "j_episode" => 1,
                "referensi" => "HBO GO, Vidio, Rebahin",
                "sutradara" => "David Yates",
                "tanggal" => Carbon::parse('2009-07-15'),
                "rating" => 76,
                "deskripsi" => "Cerita dimulai dengan munculnya Lord Voldemort yang semakin kuat dan mengancam keberadaan dunia sihir dan manusia biasa. Dumbledore, kepala sekolah Hogwarts, membawa Harry untuk membantu menyusup ke dalam dunia Tom Riddle (nama asli Lord Voldemort) dan mencari kelemahan yang dapat membantu mengalahkannya. Dalam perjalanan ini, Harry menemukan buku yang diwariskan oleh Half-Blood Prince, yang membantunya dalam pelajaran sihir dan membuatnya semakin pintar. Harry juga mulai merasakan cinta untuk Ginny Weasley, adik dari sahabatnya Ron Weasley. Namun, situasi semakin buruk ketika Draco Malfoy diberikan tugas untuk membunuh Dumbledore oleh Voldemort. Harry dan Dumbledore berusaha untuk menggagalkan rencana tersebut, namun dalam prosesnya Dumbledore tewas. Sebelum kematiannya, Dumbledore memberikan beberapa petunjuk yang berguna untuk melawan Voldemort.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fhp7.jpg",
                "judul" => "Harry Potter and The Deathly Hallows : Part 1",
                "j_episode" => 1,
                "referensi" => "HBO GO, Vidio, Rebahin",
                "sutradara" => "David Yates",
                "tanggal" => Carbon::parse('2010-11-19'),
                "rating" => 77,
                "deskripsi" => "Cerita dimulai dengan kepergian Harry Potter (diperankan oleh Daniel Radcliffe), Hermione Granger (diperankan oleh Emma Watson), dan Ron Weasley (diperankan oleh Rupert Grint) dari Hogwarts. Mereka berusaha untuk menemukan dan menghancurkan Horcrux, artefak magis yang menyimpan kekuatan Voldemort (diperankan oleh Ralph Fiennes) dan memberinya keabadian. Pada awalnya, ketiganya mengunjungi Gringotts, bank yang dijaga ketat oleh para goblin. Mereka berhasil mengambil salah satu Horcrux, yaitu cangkir milik keluarga Lestrange, tetapi harus berhadapan dengan penjagaan ketat dan akhirnya melarikan diri dengan bantuan naga yang dulunya menjadi milik Voldemort. Setelah itu, Harry, Hermione, dan Ron menuju ke Godric's Hollow, tempat kelahiran Harry dan kedua orangtuanya dikuburkan. Di sana mereka menemukan petunjuk tentang makam Dumbledore dan Horcrux yang tersembunyi. Namun, mereka diserang oleh Nagini, ular peliharaan Voldemort, dan Ron meninggalkan mereka setelah bertengkar dengan Harry. Harry dan Hermione melanjutkan perjalanan mereka sendirian, sambil mencari cara untuk menghancurkan Horcrux. Mereka menemukan cincin milik Dumbledore dan memutuskan untuk menghancurkannya dengan pedang Gryffindor. Namun, Hermione terkena efek kutukan yang diberikan oleh cincin itu dan hampir mati. Harry kemudian menyelamatkan Hermione dengan bantuan Snitch emas yang diberikan Dumbledore kepadanya. Sementara itu, Ron yang merasa bersalah atas perbuatannya kembali dan membantu Harry dan Hermione menemukan Horcrux yang terakhir, yaitu kalung milik keluarga Black. Mereka berusaha menghancurkannya tetapi tidak berhasil karena kalung itu dilindungi dengan mantra. Akhirnya, mereka bertemu dengan seorang pria tua bernama Xenophilius Lovegood yang memberitahu mereka tentang keberadaan Deathly Hallows, artefak yang memberikan kekuatan luar biasa kepada pemiliknya. Harry menyadari bahwa salah satu Deathly Hallows, yaitu tongkat sihir legendaris milik Dumbledore, adalah kunci untuk mengalahkan Voldemort. Namun, Voldemort juga mencari tongkat itu dan akhirnya mengetahui keberadaannya. Film ini berakhir dengan Harry, Hermione, dan Ron harus melarikan diri dari tempat persembunyian mereka setelah Voldemort menemukan mereka. Mereka harus berjuang untuk bertahan hidup sambil terus mencari cara untuk mengalahkan Voldemort dan menghancurkan Horcrux yang tersisa.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fhp8.jpg",
                "judul" => "Harry Potter and The Deathly Hallows : Part 2",
                "j_episode" => 1,
                "referensi" => "HBO GO, Vidio, Rebahin",
                "sutradara" => "David Yates",
                "tanggal" => Carbon::parse('2011-07-15'),
                "rating" => 81,
                "deskripsi" => "Film dimulai dengan Harry, Ron, dan Hermione melanjutkan pencarian mereka untuk Horcrux, benda magis yang harus dihancurkan untuk mengalahkan Lord Voldemort (Ralph Fiennes) sekali dan untuk selamanya. Mereka menemukan pedang Gryffindor yang dapat menghancurkan Horcrux, dan kembali ke Hogwarts untuk mencari Horcrux terakhir, yang berada di sana. Di Hogwarts, mereka menemukan sekolah sihir itu telah berubah menjadi benteng yang dijaga ketat oleh pasukan Voldemort dan Death Eaters-nya. Dalam upaya untuk mencari Horcrux, Harry dan teman-temannya harus berhadapan dengan bahaya besar dan musuh-musuh yang sangat kuat. Mereka mendapat bantuan dari teman-teman mereka di Hogwarts, termasuk Neville Longbottom (Matthew Lewis), Ginny Weasley (Bonnie Wright), dan Luna Lovegood (Evanna Lynch). Sementara itu, Voldemort semakin kuat dan berencana untuk mengambil alih Hogwarts dan membunuh Harry Potter. Dia mendapatkan kekuatan dari Elder Wand, tongkat ajaib yang sangat kuat dan misterius, dan percaya bahwa hanya dengan menguasainya, dia akan menjadi tak terkalahkan. Namun, Harry dan teman-temannya mengetahui bahwa Elder Wand sebenarnya adalah bagian dari tiga Deathly Hallows, dan hanya seseorang yang memahami kekuatan ketiganya yang dapat menguasainya. Ketika pertempuran antara pasukan Voldemort dan pasukan Hogwarts semakin memanas, Harry dan teman-temannya menemukan Horcrux terakhir dan berjuang untuk menghancurkannya. Dalam pertempuran yang epik dan mendebarkan, Harry akhirnya berhadapan dengan Voldemort dalam duel yang menentukan nasib dunia sihir. Setelah pertempuran berakhir, Harry akhirnya mengetahui rahasia tentang Elder Wand dan memutuskan untuk menghancurkannya. Dia menyadari bahwa kekuatan tongkat ajaib itu hanya akan menyebabkan kehancuran dan bahwa siapapun yang mencoba menguasainya akan mengalami nasib yang sama seperti Voldemort. Harry mengucapkan selamat tinggal kepada Hogwarts dan teman-temannya, dan melanjutkan hidupnya sebagai seorang penyihir yang memerangi kejahatan dan membela kebenaran.",
                "id_kategori" => 4
            ],
            [
                "image" => "Ffb1.jpg",
                "judul" => "Fantastic Beasts and Where to Find Them",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "David Yates",
                "tanggal" => Carbon::parse('2016-11-16'),
                "rating" => 72,
                "deskripsi" => "Seorang penyihir sekaligus ahli zoologi bernama Newt Scamander (Eddie Redmayne) datang dari Inggris ke New York untuk menghadiri pertemuan kalangan penyihir. Newt pergi dengan membawa koper berisi binatang-binatang langka temuannya. Di perjalanan koper ini tak sengaja tertukar dengan koper milik Jacob Kowalski (Dan Fogler) seorang No-Maj yang bekerja sebagai pembuat roti. No-Maj adalah istillah yang dipakai masyarakat Amerika Serikat untuk menyebut para Muggle atau manusia non-penyihir. Di saat bersamaan dunia sihir Amerika Serikat tengah mengalami kegaduhan akibat hal-hal aneh yang diduga ada hubungannya dengan kekuatan sihir. Mereka juga tengah memburu penyihir hitam Gelert Grindelwald (Johnny Depp) yang diperkirakan jadi dalang dari semua kegaduhan. Jacob yang tidak mengetahui bahwa kopernya tertukar, tak sengaja mengeluarkan beberapa binatang milik Newt. Newt pun ditangkap oleh Tina (Katherine Waterson), Aurora dari Kementerian Sihir MACUSA namun kemudian dilepaskan ketika tahu kopernya hanya berisi roti. Namun Tina mengultimatum Newt agar segera mencari kopernya yang hilang sebelum para hewannya lepas dan merajalela di Kota New York. Belum selesai masalah koper yang hilang, Newt harus menghadapi tuduhan dari Mary Lou (Samantha Morton), ketua kelompok ekstrimis No-Maj yang terus berusaha menyebarkan berita bahwa penyihir adalah kalangan jahat. Berita ini jika dibiarkan dapat memicu perang antara kalangan No-Maj dan kalangan penyihir. Newt pun harus bergerak cepat mengumpulkan semua binatang peliharaannya dan juga membersihkan kembali nama baiknya. Mampukah Newt mengembalikan reputasi nama baiknya? Lalu siapakah sebetulnya biang dari kegaduhan yang terjadi di kota New York?",
                "id_kategori" => 4
            ],
            [
                "image" => "Ffb2.jpg",
                "judul" => "Fantastic Beasts : The Crimes of Grindelwald",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "David Yates",
                "tanggal" => Carbon::parse('2018-11-14'),
                "rating" => 65,
                "deskripsi" => "Fantastic Beasts 2 masih membawa obsesi Scamander mencari berbagai koleksi makhluk sihir. Namun kali ini, berlatar dekade 1920-an, ia kesulitan mendapatkan izin ke luar Inggris karena sempat mendapatkan catatan buruk kala berkunjung ke New York yang dikisahkan dalam Fantastic Beasts and Where to Find Them (2016). Newt sempat ditawari oleh Kementerian Sihir Inggris menjadi Auror untuk membantu menangkap penyihir hitam terhebat kala itu, Gellert Grindelwald (Johnny Depp) yang kabur dalam perpindahannya dari Amerika Serikat ke Inggris dan dimunculkan di awal film. Sebagai seorang magizoologis dan benci kerja kantoran, Newt menolak tawaran Kementerian. Akan tetapi, dirinya tak bisa menolak permintaan Albus Dumbledore (Jude Law) untuk mengejar Grindelwald sekaligus berkesempatan ke luar negeri secara ilegal. Kemauan Newt untuk menerima tawaran Dumbledore yang lebih mirip paksaan itu juga dipengaruhi peluang bertemu Tina Goldstein (Katherine Waterston), Auror yang menemaninya dalam Fantastic Beasts 1 (2016) dan membuatnya jatuh hati. Ditambah, secara kebetulan, ia ditemani oleh sahabat muggle-nya, Jacob Kowalski (Dan Fogler) yang mencari kekasihnya, Queenie Goldstein setelah mereka putus karena salah paham. Mereka kemudian berangkat ke Paris, sebagai lokasi yang diduga didatangi Grindelwald karena mencari Credence, seorang dengan Obscurus yang sempat didekati Grindelwald sebelumnya. Kejadian di Paris lebih dari sekadar petualangan. Di kota itu pula, ada banyak tokoh serta cerita yang baru terkuak dalam Wizarding World Harry Potter, seperti asal-usul Nagini yang ternyata ditemukan di Indonesia, hingga leluhur keluarga Lestrange. Lestrange merupakan nama yang tak asing bagi penggemar Harry Potter. Dalam saga Harry Potter, keluarga ini merupakan keturunan darah murni yang mengabdi kepada Lord Voldemort.",
                "id_kategori" => 4
            ],
            [
                "image" => "Ffb3.jpg",
                "judul" => "Fantastic Beasts : The Secrets of Dumbledore",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "David Yates",
                "tanggal" => Carbon::parse('2022-04-13'),
                "rating" => 62,
                "deskripsi" => "Film ini akan mengisahkan tentang petualangan Newt Scamander (Eddie Redmayne) yang terjebak dalam perang antara Albus Dumbledore (Jude Law) dan seorang penyihir jahat, Gellert Grindelwald (Mad Mikkelsen). Dalam film ini, Dumbledore menyadari bahwa kekuatannya sendiri tak mampu menghentikan rencana busuk Grindelwald. Ia pun memercayakan sebuah tugas kepada Newt Scamander untuk memimpin tim yang terdiri dari ahli sihir pemberani dan seorang muggle, Mr. Kowalski (Dan Fogler). Saat menjalankan misi berbahaya demi menyelamatkan dunia dari kejahatan Grindelwald, mereka justru menemukan hewan buas yang mistik dan eksotik, baik dari spesies baru maupun spesies yang telah mereka identifikasi sebelumnya. Hewan-hewan tersebut membantu mereka saat mendapat rintangan dari pengikut Grindelwald yang jumlahnya terus bertambah. Di tengah pertarungan yang sedang terjadi, Dumbledore harus menepati perjanjian yang sudah ia buat dengan Grindelwald. Apakah perjanjian tersebut? Akankah dunia bisa selamat dari kejahatan Grindelwald?",
                "id_kategori" => 4
            ],
            [
                "image" => "Fnar1.jpg",
                "judul" => "The Chronicles of Narnia : The Lion, The Witch and The Wardrobe",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Andrew Adamson",
                "tanggal" => Carbon::parse('2005-12-08'),
                "rating" => 69,
                "deskripsi" => "Film pertama dari rangkaian kisah Narnia ini mengisahkan awal mula dimulainya petualangan di negeri Narnia. Mulanya, empat orang kakak beradik harus mengungsi dari rumah mereka ke rumah Profesor Digory Kirke karena dampak Perang Dunia II. Mereka adalah Peter (William Moseley), Susan (Anna Popplewell), Edmund (Skandar Keynes), dan Lucy (Georgie Henley). Suatu hari, mereka bermain petak umpat dan Lucy ingin bersembunyi di dalam sebuah lemari. Ketika membuka pintu lemari tersebut, Lucy justru masuk ke Narnia. Ia bertemu dengan seorang faun bernama Mr. Tumnus (James McAvoy) yang menceritakan bahwa Narnia adalah sebuah negeri yang tengah dikutuk mengalami musim dingin selama 100 tahun oleh Penyihir Putih (Tilda Swinton). Setelah itu, Lucy kembali membuka pintu lemari dan masuk ke kehidupan nyata lagi. Ia menceritakan kisah Narnia kepada saudara-saudaranya. Setelah itu, mereka mengunjungi Narnia dan memulai petualangan bersama. Mulai dari berkemah di Narnia, diserang serigala, bertemu singa penguasa Narnia bernama Aslan (Liam Neeson), menyelamatkan Edmund dari Penyihir Putih, hingga akhirnya dinobatkan menjadi Raja dan Ratu Narnia.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fnar2.jpg",
                "judul" => "The Chronicles of Narnia : Prince Caspian",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Andrew Adamson",
                "tanggal" => Carbon::parse('2008-05-15'),
                "rating" => 65,
                "deskripsi" => "Pada film kedua ini, Peter, Susan, Edmund, dan Lucy beranjak dewasa. Suatu ketika, mereka berangkat sekolah menggunakan kereta, tapi tiba-tiba terowongan kereta lenyap dan berubah menjadi gerbang menuju Narnia. Rupanya, mereka terpanggil masuk ke Narnia karena terpanggil oleh Pangeran Caspian (Ben Barnes) yang meniup terompet Susan. Pangeran Caspian meminta bantuan Raja dan Ratu Narnia untuk melawan Lord Miraz, pengkhianat yang membunuh Raja Telmarine. Pangeran Caspian adalah anak dari Raja Telmarine yang seharusnya mewariskan tahta, tetapi direbut oleh Lord Miraz. Mereka pun berusaha membantu Pangeran Caspian untuk merebut kembali kekuasaan dari Lord Miraz. Mereka pun membuat kesepakatan untuk bertarung satu lawan satu dengan Lord Miraz. Peter yang maju melawan Lord Miraz dapat memenangi pertarungan, lalu memberikan pedangnya kepada Pangeran Caspian untuk membalas dendam. Namun, Pangeran Caspian tidak tega untuk membunuh Lord Miraz. Ketika Lord Miraz lolos, tangan kanannya Lord Sopespian justru menikamnya dan menuduh bangsa Narnia yang membunuh Lord Miraz. Pasukan mereka pun menyerang Peter dan kawan-kawan sampai akhirnya datang pertolongan dari Aslan yang menggerakkan seluruh pepohonan dan air sungai untuk melawan pasukan Lord Sopespian. Setelah itu, Aslan membuat pintu baru yang dapat mengantarkan Peter, Susan, Edmund, dan Lucy kembali ke dunia nyata.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fnar3.jpg",
                "judul" => "The Chronicles of Narnia : The Voyage of The Dawn Treader",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Michael Apted",
                "tanggal" => Carbon::parse('2010-12-03'),
                "rating" => 63,
                "deskripsi" => "Kisah petualangan di negeri Narnia berlanjut ketika Edmund dan Lucy sudah dewasa. Peter dan Susan sudah hidup terpisah dari mereka. Sementara Edmund dan Lucy tinggal di rumah sepupu mereka, Eustace (Will Poulter) yang menjengkelkan karena suka mengolok-olok mereka tentang Narnia. Suatu ketika, sebuah lukisan di rumah Eustace yang mirip dengan pemandangan Narnia mengeluarkan air hingga membuat Edmund, Lucy, dan Eustace tenggelam. Ketika mereka berusaha mencapai permukaan air tersebut, mereka justru muncul di lautan Narnia. Pangeran Caspian kemudian menyelamatkan mereka dan menceritakan kondisi terbaru Narnia. Rupanya, Pangeran Caspian tengah mencari tujuh bangsawan Telmarine yang hilang. Para bangsawan diduga hilang di Lone Island. Mereka pun memulai petualangan di Lone Island dengan menguak kisah misterius tentang asap hijau yang menghilangkan para bangsawan. Untuk mencari para bangsawan, mereka berusaha mengumpulkan pedang tujuh bangsawan yang menjadi penuntun mereka.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fthe.jpg",
                "judul" => "The School for Good and Evil",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Paul Feig",
                "tanggal" => Carbon::parse('2022-10-18'),
                "rating" => 59,
                "deskripsi" => "The School for Good and Evil mengikuti kisah dua sahabat, Sophie (Sophia Anne Caruso) dan Agatha (pemain Sofia Wylie) yang tinggal di desa Gavaldon. Sophie yang feminin memimpikan kehidupan seperti putri dongeng. Sedangkan Agatha ingin menyalurkan bakatnya sebagai penyihir. Suatu malam, Agatha melihat sahabatnya Sophie diculik oleh kekuatan tak dikenal. Dalam upaya menyelamatkannya, dia ikut terseret ke sekolah sihir yang memisahkan muridnya dalam dua kubu berbeda. Kedua sahabat pun tak menyangka akan berakhir di dua kubu yang berbeda. Sophie menjadi seorang Never dan dilatih menjadi penjahat di School for Evil. Sebaliknya Agatha menjadi seorang Ever alias murid School for Good untuk menjadi pahlawan. Alur cerita The School for Good and Evil semakin menegangkan saat sosok kelam dan berbahaya (pemain Kit Young) yang memiliki ikatan dengan Sophie muncul. Sophie pun merasa tersaingi dengan Agatha yang dekat dengan pangeran tampan Tedros (pemain Jammie Flatters) yang ditaksirnya.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fcharlie.jpg",
                "judul" => "Charlie and The Chocolate Factory",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Tim Burton",
                "tanggal" => Carbon::parse('2005-07-10'),
                "rating" => 67,
                "deskripsi" => "Charlie and the Chocolate Factory berkisah tentang Charlie Bucket (Freddie Highmore), bocah laki-laki yang hidup dalam kemiskinan bersama keluarganya di dekat pabrik cokelat Wonka. Pemilik perusahaan, Willy Wonka (Johnny Depp), telah lama menutup pabriknya karena masalah spionase yang dilakukan oleh saingannya. Hal itu membuat Willy memecat semua karyawannya, termasuk kakek Charlie, Joe (David Kelly). Suatu hari, Willy memulai kembali pabriknya dan mengadakan sebuah kontes. Willy telah menempatkan lima tiket emas di produk cokelatnya, Wonka Bar, secara acak. Nantinya, para pemenang yang berhasil mendapatkan tiket emas tersebut akan mendapatkan kesempatan tur ke pabrik cokelat Wonka. Sementara satu di antara pemenang tersebut akan menerima hadiah tambahan di akhir tur. Berkat kontes tersebut, penjualan cokelat Wonka kembali meroket. Orang-orang rela memborong cokelat Wonka demi bisa mendapatkan tiket emas. Empat tiket pertama ditemukan oleh Augustus Gloop (Philip Wiegratz) yang rakus, Veruca Salt (Julia Winter) yang manja, Violet Beauregarde (AnnaSophia Robb) yang arogan, dan si pemarah Mike Teavee (Jordan Fry). Keluarga Charlie pun mencoba peruntungan dengan menyisihkan sebagian uang mereka untuk membeli cokelat. Sayang, Charlie belum beruntung meski telah dua kali membeli. Hingga pada suatu hari, Charlie menemukan uang sepuluh dolar dan ia gunakan untuk membeli Wonka Bar ketiganya. Saat dibuka, Wonka Bar tersebut berisi tiket emas terakhir yang selama ini dicari orang-orang di seluruh dunia. Charlie sempat menerima tawaran uang untuk ditukar tiket tersebut. Dirinya pun segera berlari pulang dan meminta pendapat keluarganya. Meski uang yang akan didapat bisa membantu ekonomi keluarganya, kakek George (David Morris) meminta agar Charlie mempertahankan tiketnya. Beberapa hari kemudian, Charlie membawa kakek Joe untuk menemaninya dalam tur pabrik cokelat Wonka bersama empat pemenang lainnya. Di dalam pabrik tersebut, Charlie menemukan keajaiban yang mengubah hidupnya.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fwonka.jpg",
                "judul" => "Wonka",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Paul King",
                "tanggal" => Carbon::parse('2023-12-06'),
                "rating" => 73,
                "deskripsi" => "Willy Wonka (Timothée Chalamet) merupakan seorang pemilik pabrik cokelat raksasa yang sukses. Namun, jauh sebelum itu, ia berpetualang mengelilingi dunia selama 7 tahun demi ambisinya menyempurnakan kemampuannya meracik cokelat. Sebelum menjadi pemilik pabrik cokelat, Wonka hanyalah seorang pemuda biasa yang dikenal lewat kemampuan sulapnya. Di samping itu, ternyata ia memiliki mimpi untuk menjadi seorang pembuat coklat yang mempunyai toko sendiri. Tidak mudah bagi Wonka untuk bisa mewujudkan mimpinya sebab ada kartel cokelat yang ingin menguasai pasar. Namun, Wonka tidak bisa membiarkan mimpinya terhalang oleh para kartel itu. Wonka lantas berpikir keras untuk menciptakan inovasi baru cokelat sebagai upaya untuk menyaingi produk cokelat milik kartel itu. Suatu hari, ia menemukan ide untuk membuat cokelat dengan memanfaatkan kemampuan sulapnya. Wonka pun meracik cokelat dengan campuran bumbu-bumbu sihirnya. Akhirnya terciptalah cokelat ajaib yang akan menghasilkan efek unik tertentu ketika dimakan. Salah satunya adalah cokelat ajaib pertamanya memiliki efek yang dapat membuat orang melayang ketika memakannya. Lambat laun, cokelat-cokelat buatan Wonka mulai menyita perhatian masyarakat. Banyak orang akhirnya menyukai cokelat-cokelat ajaib ciptaan Wonka. Tak puas di situ, Wonka memulai perjalanan dengan berkelana mengelilingi dunia demi menyempurnakan cokelat buatannya sehingga dapat mewujudkan pabrik cokelat impiannya. Suatu ketika di tengah perjalanan, Wonka bertemu dengan kurcaci ajaib misterius bernama Oompa Loompa (Hugh Grant). Bersama Oompa Loompa, Wonka akan mewujudkan impiannya untuk membuat pabrik cokelat.",
                "id_kategori" => 4
            ],
            [
                "image" => "Falice.jpg",
                "judul" => "Alice in Wonderland",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Nick Willing",
                "tanggal" => Carbon::parse('2010-03-04'),
                "rating" => 64,
                "deskripsi" => "Alice (Mia Wasikowska) yang berusia 19 tahun mengalami permasalahan dengan mimpi-mimpi aneh yang berulang-ulang dan kenyataan bahwa ayahnya telah meninggal, kini ia kembali dihadapkan pada kenyataan yang tak ia inginkan yaitu menghadiri pesta di kediaman Lord Ascot. Sebuah perjamuan yang sebenarnya adalah untuk perjodohan Alice dengan Hamish Amscot, dengan setengah putus asa alice menangis dan menyendiri ditengah pesta, namun lamunannya terganggu oleh penampakan kelinci (Michael Sheen) yang berlarian kesana kemari dengan kesit, kelinci yang aneh seperti dalam mimpinya, ia mengikutinya sampai si kelinci masuk pada sebuah pohon, maksud hati alice ingin merogoh kelinci tersebut dengan tangannya namun ia malah terperosok masuk ke lubang pohon tua itu, jatuh sangat dalam saking dalamnya hingga ia sempat berpikir dunia apa ini, aneh seperti mimpinya, benda-benda aneh berjatuhan bersamaan dengannya. Setelah beberapa lama ia pun sampai ke dasar, ia melihat segalanya aneh dan disana tergeletak kunci yang sangat kecil serta pintu yang berukuran sesuai kunci itu, disana juga ada ramuan untuk membuat dia kecil bertuliskan “makan aku”, alice pun meminumnya dan menjadi kecil, kemudian masuk kedalam pintu itu, dia pun masuk di sebuah hutan di mana dia disambut oleh White Rabbit, para tikus, Dodo, Bunga, dan Tweedledee dan Tweedledum (Matt Lucas) yang semuanya pandai berbicara. Mereka berdebat tentang identitas alice sebagai “Alice yang ditunggu” yang diramalkan akan membunuh Ratu Merah Jabberwocky (Helena Bonham Carter) dan mengembalikan kekuasaan Ratu Putih (Anne Hathaway), seperti yang diramalkan oleh Absolem melalui gambar gulungan Caterpillar. Ditengah diskusi mereka diserang oleh Bandersnatch (semacam monster ganas) dan sekelompok tentara kartu remi yang dipimpin oleh Knave of Hearts (Crispin Glover). Alice melarikan diri ke hutan, Knave mencuri gulungan Caterpillar. Dormouse (Barbara Windsor) tertinggal dibelakang dan tertangkap tentara sang ratu.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fmale.jpg",
                "judul" => "Maleficent",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Robert Stromberg",
                "tanggal" => Carbon::parse('2014-06-04'),
                "rating" => 69,
                "deskripsi" => "Kisah dalam Maleficent diceritakan bertahun-tahun sebelum tragedi kutukan Putri Tidur terjadi. Seorang peri kecil bersayap dan baik hati bernama Maleficent (Ella Purnel) tinggal dan menjadi penjaga bagi negeri Moors. Maleficent kecil kemudian bertemu Stefan (Michael Higgins), seorang pria muda yang ditangkap warga Moors karena mencuri. Maleficent pun menyelamatkannya. Mereka akhirnya bersahabat dekat dan sering menghabiskan waktu bersama. Namun, seiring mereka tumbuh dewasa, Stefan (Sharlto Copley) mulai mengejar mimpinya untuk bisa bekerja di istana dan jarang mengunjungi hutan Moors. Sementara Maleficent (Angelina Jolie) juga tumbuh menjadi peri yang semakin kuat. Ketika Moors diserang pasukan Raja Henry (Kenneth Cranham), Maleficent pun dapat mengalahkan semua pasukan dengan kekuatannya. Raja Henry geram dan mengadakan sayembara, siapa pun yang bisa membunuh Maleficent akan diangkat menjadi menantunya. Singkat cerita, Stefan memutuskan ikut dalam sayembara ini dan berhasil menipu Maleficent dengan mengambil kedua sayapnya. Akibat peristiwa ini, Maleficent yang semula adalah peri baik hati berubah menjadi penyihir bengis. Berkat informasi dari siluman gagak bernama Diaval (Sam Riley) yang juga menjadi pelayannya, Maleficent tahu kini Stefan sudah menjadi raja dan baru saja memiliki putri. Raja Stefan juga berencana mengadakan acara pembaptisan untuk putri kesayangannya ini. Meski tak diundang, Maleficent memutuskan datang. Karena rasa sakit hatinya, Maleficent mengutuk putri Raja Stefan yang bernama Aurora. Aurora dikutuk akan tidur selamanya usai tangannya tertusuk jarum dan hanya bisa bangun ketika ada cinta sejati yang menciumnya. Raja Stefan memilih mengasingkan putrinya di tengah hutan demi menghindari kutukan. Aurora akan dirawat oleh tiga orang peri. Namun, diam-diam Maleficent mengikuti mereka ke dalam hutan. Tak disangka, karena sering mengamati tingkah lucu Aurora, Maleficent jadi tertarik ikut mengasuh dan menyayanginya. Aurora (Elle Fanning) tumbuh menjadi gadis cantik dan selalu menganggap Maleficent sebagai peri pelindungnya. Sayangnya, kutukan Maleficent tetap tidak bisa dipatahkan. Memasuki usia 16 tahun, ancaman kutukan untuk Aurora akan segera tiba. Maleficent yang kini sudah menganggap Aurora seperti putrinya menjadi menyesal karena telah memberi kutukan padanya. Apa yang akan dilakukan Maleficent untuk melindungi Aurora dari kutukan ini?",
                "id_kategori" => 4
            ],
            [
                "image" => "Fcinde.jpg",
                "judul" => "Cinderella",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Kenneth Branagh",
                "tanggal" => Carbon::parse('2015-03-11'),
                "rating" => 69,
                "deskripsi" => "Kisah Cinderella dibuka dengan bagaimana Ella kecil hidup bahagia bersama dengan ayah dan ibunya di rumah yang sudah ditinggali selama beberapa generasi. Kehidupan bahagia mereka harus berakhir dengan meninggalnya sang ibu, dan Ella serta ayahnya pun harus menerima hal tersebut dan melanjutkan hidupnya. Tak lupa juga Ella mengingat pesan sang ibu agar tetap hidup dengan keberanian dan hati penuh kasih sayang. Selang beberapa tahun kemudian, sang ayah kemudian menikah lagi dengan Lady Tremaine yang memiliki dua orang puteri, otomatis menjadi ibu dan saudari tiri Ella. Tidak lama setelah pernikahan sang ayah dengan ibu tirinya, ayah Ella harus pergi untuk berbisnis ke luar kota, memaksa gadis ini pun harus tinggal bersama dengan sang ibu dan kedua saudari tirinya selama sang ayah pergi. Malang bagi Ella ibu serta saudari tirinya memperlakukan Ella sebagai pembantu rumah. Dalam kesedihannya, Ella bertemu dengan Kit, seorang pemuda yang ia temui di hutan dan ia pun jatuh cinta pada pandangan pertama. Untuk bisa bertemu lagi, Ella bertekad untuk mengikuti pesta dansa istana, tetapi harapannya pupus ketika sang ibu tiri melarangnya dengan keras untuk datang ke pesta tersebut. Ella yang dilanda kesedihan itu pun bertemu dengan Peri Pelindungnya, yang membantu sang gadis abu untuk bisa pergi ke pesta dansa.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fbea.jpg",
                "judul" => "Beauty and The Beast",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Bill Condon",
                "tanggal" => Carbon::parse('2017-03-17'),
                "rating" => 71,
                "deskripsi" => "Sebuah kerajaan sedang mengadakan sebuah pesta. Tiba-tiba seorang pengemis tua datang dan menawarkan sesuatu kepada pangeran. Namun, pangeran langsung menolaknya. Pengemis tua tadi, merubah pangeran menjadi monster yang ditakuti dan merubah seluruh orang yang ada di istana itu menjadi perabotan rumah tangga. Monster ini kemudian disebut Beast. Ternyata pengermis tua itu adalah seorang penyihir. Ia kemudian mengatakan bahwa kutukan pangeran ini akan musnah jika Beast mendapatkan cinta tulus dari seorang wanita. Beberapa waktu berselang dan waktu Beast pun semakin menipis untuk menemukan cinta sejatinya. Suatu hari Maurice, ayah dari Belle, seorang gadis muda cantik tersesat di hutan. Maurice kemudian menemukan istana Beast dan mengambil mawar dari kebunnya untuk diberikan kepada Belle. Beast yang mengetahui hal tersebut marah dan kemudian menahan Maurice di istananya. Belle mencari ayahnya ke hutan dan sampai ke istana Beast. Namun, saat berada di kebun mawar, Belle dikejutkan dengan kehadiran sekelompok serigala. Beast kemudian datang dan bertarung untuk membuat para serigala itu pergi. Saat pertarungan terjadi, Beast mendapatkan luka. Belle mendekati Beast dan mengobatinya. Belle yakin bahwa Beast adalah sosok yang baik. Belle kemudian menjadi tawanan di istana Beast. Maurice yang sudah kembali ke desanya mencoba meyakinnkan penduduk jika Belle telah ditahan di istana Beast.",
                "id_kategori" => 4
            ],
            [
                "image" => "Flittle.jpg",
                "judul" => "The Little Mermaid",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Rob Marshall",
                "tanggal" => Carbon::parse('2023-05-24'),
                "rating" => 72,
                "deskripsi" => "Ariel (Halle Bailey) merupakan anak perempuan bungsu dari Raja Triton (Javier Bardem), penguasa kerajaan Atlantika yang juga dijuluki Raja Laut. Gadis itu merasa jengah dengan kehidupan di bawah laut. Ia pun memiliki ketertarikan yang tinggi terhadap dunia di atas permukaan laut. Suatu hari, Ariel dan sahabatnya, Flounder (Jacob Tremblay) mengunjungi kapal karam untuk mengumpulkan barang-barang yang ditinggalkan manusia. Ia pun bertanya kepada Scuttle (Awkwafina) tentang barang-barang yang ditemukan. Ariel mengabaikan peraturan dari Raja Triton yang menyatakan bahwa kaum duyung dilarang untuk mengeksplorasi dunia tersebut, termasuk Ariel. Suatu malam, Ariel melihat sebuah kapal melintas di atasnya dan menemukan bahwa ada perayaan ulang tahun yang sedang berlangsung. Ia pun jatuh hati pada pandangan pertama terhadap Eric (Jonah Hauer-King) yang berulang tahun malam itu. Tiba-tiba badai besar menghantam dan merusak kapal. Eric pun jatuh ke lautan akibat bencana tersebut. Ariel menyelamatkan Eric dengan membawanya ke permukaan. Ia pun bernyanyi kepada Eric dengan suaranya yang merdu. Sebelum Eric benar-benar sadar dan melihat sosok yang menyelamatkannya, Ariel kabur karena takut ketahuan pengawal kerajaan. Pertemuan dengan Eric membuat Ariel semakin penasaran dengan pria tersebut dan juga dunia di atas permukaan laut. Hal tersebut membawanya kepada Ursula (Melissa McCarthy). Ursula menawarkan sebuah perjanjian yang bisa membuat Ariel berubah menjadi manusia, asalkan ditukar dengan suara emasnya. Perjanjian Ariel dengan Ursula membuat kehidupannya, kerajaan ayahnya, Eric dan dunianya dalam bahaya.",
                "id_kategori" => 4
            ],
            [
                "image" => "Faladdin.jpg",
                "judul" => "Aladdin",
                "j_episode" => 1,
                "referensi" => "Disney+, Rebahin",
                "sutradara" => "Guy Ritchie",
                "tanggal" => Carbon::parse('2019-05-24'),
                "rating" => 69,
                "deskripsi" => "ALADDIN sendiri menceritakan tentang seorang pemuda miskin bernama Aladdin yang memiliki sebuah lampu ajaib. Lampu tersebut memiliki kekuatan untuk mengabulkan tiga permintaan dari tuannya. Namun, bukan hanya Aladdin yang menginginkan lampu itu, Jafar seorang penasihat sultan yang jahat dan haus akan kekuatan juga menginginkannya untuk mengabulkan permintaan terpendamnya. Lampu ajaib itu sendiri berada pada sebuah gua di gurun pasir yang berisi bermacam-macam harta karun. Jafar, yang menemukan jalan masuk ke dalamnya mengutus seorang pemuda pencuri yang miskin bernama Aladdin untuk mengambil lampu ajaib itu. Saat Aladdin berhasil mengambilnya dan berusaha untuk keluar dari gua itu, ia menggosok lampu ajaib dan keluarlah jin yang dapat mengabulkan tiga permintaan. Jin itulah nantinya yang akan membantu Aladdin keluar dari gua sekaligus membantunya mendapakan pujaan hatinya, Putri Jasmine. Tak sampai disana, jin dan Aladdin pun nantinya akan berteman baik. Film ini juga akan menceritakan kisah cinta antara Aladdin dengan sang puteri, Jasmine. Puteri Jasmine sendiri ialah puteri tunggal sang Sultan yang memiliki peliharaan seekor harimau. Sebelumnya, puteri Jasmine dan Aladdin telah mengenal satu sama lain saat Aladdin menjadi pemuda miskin yang gemar mecuri di pasar. Dengan dibantu jin dan karpet terbang yang juga Alladin temukan dalam gua harta karun itu, ia dan Puteri Jasmine menghabiskan hari-hari yang menyenangkan bersama. Ancaman bagi Alladin pun muncul. Jafar yang haus kekuatan mengetahui jika Aladdin memiliki lampu ajaib itu menghalalkan segala cara agar ia bisa mendapatkannya kembali. Tak hanya itu, rupanya Jafar juga menginginkan Puteri Jasmine. 
                Apa saja yang akan dilakukan Jafar demi mendapakan lampu ajaib itu? Apakah lampu ajaib itu nantinya akan jatuh ke tangan Jafar?",
                "id_kategori" => 4
            ],
            [
                "image" => "Fpeter.jpg",
                "judul" => "Peter Pan",
                "j_episode" => 1,
                "referensi" => "Bstation, Netflix ",
                "sutradara" => "P. J. Hogan",
                "tanggal" => Carbon::parse('2004-02-18'),
                "rating" => 68,
                "deskripsi" => "Kisah dalam Peter Pan diawali dari Wendy Darling (Rachel Hurd-Wood) yang mampu memukau saudara laki-lakinya, John (Freddie Popplewell) dan Michael Darling (Harry Newell), dengan dongeng setiap malam. Wendy menceritakan soal perang, pedang, dan Kapten Hook (Jason Isaac) yang menakutkan. Dongeng-dongeng itu seolah menjadi kenyataan saat Peter Pan (Jeremy Sumpter) mengunjungi kamar mereka suatu malam. Peter Pan menuntun anak-anak itu melewati atap-atap yang diterangi cahaya bulan melalui galaksi bintang-bintang, hingga akhirnya sampai ke hutan Neverland yang rimbun. Saat itu, mereka mendengar suara dentuman meriam yang menandakan keberadaan Kapten Hook, musuh bebuyutan Peter Pan. Kapten Hook menangkap Tiger Lily (Carsen Gray), Michael, dan John sebagai umpan untuk Peter. Ketiganya dibiarkan diikat di sebuah batu yang akan tenggelam saat air pasang naik. Untuk menyelamatkan mereka, Peter dan Hook terlibat dalam duet yang sengit. Sayangnya, Kapten Hook berhasil menang ketika ia menangkap Peter. Berhasilkah Peter Pan beserta teman-temannya kabur dari sergapan Kapten Hook? Lalu, bagaimana nasib Wendy?",
                "id_kategori" => 4
            ],
            [
                "image" => "Fgarden.jpg",
                "judul" => "The Secret Garden",
                "j_episode" => 1,
                "referensi" => "Vidio",
                "sutradara" => "Marc Munden",
                "tanggal" => Carbon::parse('2021-05-12'),
                "rating" => 56,
                "deskripsi" => "Mary Lennox (Dixie Egerickx) merupakan gadis berumur 10 tahun yang hidup sebatang kara setelh ditinggal kedua orang tua akibat wabah penyakit Kolera. Mary dibantu oleh seorang tentara Inggris yang berhasil menemukannya dan mengirimnya ke Yorkshire. Mary dibawa ke rumah pamannya, Archibald Ceven (Colin Firth) yang merupakan seorang bangsawan. Mary disambut oleh para penjaga masnion, salah satunya adalah Mrs Meddock. Mary langsung diberitahu mengenai peraturan di mansion tersebut, salaj satunya ke halam rumah. Mary yang terlahir sebagai anak yang manja dan suka menuntu kepada para penjaga mansion diberi izin untuk mengeksplor halaman rumah tersebut. Mary yang pergi ke halaman rumah terkejut melihat sebuah taman ajaib. Mary penasaran dan segera masuk ke tempat ajaib tersebut. Taman ajaib tersebut selalu terkunci, namun, Mary tidak kehabisan akal karena penasaran dengan isi dari tempat tersebut.",
                "id_kategori" => 4
            ],
            [
                "image" => "Fmonster.jpg",
                "judul" => "A Monster Calls",
                "j_episode" => 1,
                "referensi" => "Disney+, Netflix",
                "sutradara" => "J. A. Bayona",
                "tanggal" => Carbon::parse('2016-10-07'),
                "rating" => 74,
                "deskripsi" => "Film A Monster Call bercerita tentang seorang anak laki-laki, Conor (Lewis MacDougall), yang harus menghadapi kenyataan pahit di hidupnya. Pasalnya, Conor yang merupakan bocah pendiam kerap kali mendapat bullyan dari lingkungan sekitarnya. Tak cuma itu, Conor juga harus menerima kenyataan karena sang ibunda dinyatakan menderita penyakit keras. Melihat keadaan ibunya, Conor harus berjuang seorang diri. Semua pekerjaan rumah pun menjadi tanggung jawabnya. Tentunya hal ini bukanlah masalah yang besar bagi Cornor. Conor selalu berpikir jika masalah dalam hidupnya merupakan awal dari kebahagiaannya. Hingga akhirnya, pada suatu malam Conor bertemu monster raksasa menyerupai pohon. Monster itu datang lalu membacakan beberapa dongeng. Mulai dari saat itu, monster tersebut selalu membantu. Conor pun menjadi lebih bahagia. Ia lalu meminta bantuan kepada monster pohon itu untuk menangani ibunya yang sakit.",
                "id_kategori" => 4
            ],
            [
                "image" => "Rour.jpg",
                "judul" => "Our Beloved Summer",
                "j_episode" => 16,
                "referensi" => "Netflix, DrakorID",
                "sutradara" => "Kim Yoon-jin",
                "tanggal" => Carbon::parse('2021-12-06'),
                "rating" => 82,
                "deskripsi" => "Drama ini bercerita tentang Choi Ung (Choi Woo Shik) seorang murid peringkat akhir di sekolah yang terpaksa mengikuti proyek dokumenter bersama Kook Yeon Su (Kim Da Mi), seorang murid peringkat pertama yang ambisius. Meski dokumenter mereka diwarnai keributan, ternyata benih-benih cinta juga ikut muncul. Keduanya lalu memutuskan berpacaran usai dokumenter selesai digarap. Sayang, setelah lima tahun berpacaran Choi Ung dan Yeon Su memutuskan untuk putus. Namun, lima tahun setelah putus, mereka kembali dipertemukan dalam sebuah proyek dokumenter reuni yang digarap Kim Ji Ung (Kim Sung Cheol) yang tak lain teman sepermainan mereka. Proyek dokumenter yang membuka kembali memori masa lalu Choi Ung dan Yeon Su itu pun membuat cinta lama mereka bersemi kembali.",
                "id_kategori" => 5
            ],
            [
                "image" => "Rsecret.jpg",
                "judul" => "Our Secret Diary",
                "j_episode" => 1,
                "referensi" => "Bstation, Netflix",
                "sutradara" => "Kentaro Takemura",
                "tanggal" => Carbon::parse('2023-07-07'),
                "rating" => 84,
                "deskripsi" => "Kisah asmara yang manis ini bermula saat seorang siswa populer bernama Setoyama Jun yang meninggalkan sebuah surat cinta di meja kelas. Surat cinta tersebut ditemukan oleh Kuroda Nozomi yang mengira bahwa surat itu ditujukan untuknya. Nozomi pun membalas surat itu lalu meninggalkannya di loker. Sejak saat itulah Jun dan Nozomi saling bertukar cerita melalui buku diary. Sayangnya, prasangka Nozomi ternyata salah. Surat yang ditulis oleh Setoyama ternyata ditujukan untuk sang sahabat. Akan tetapi, lantaran perasaan sukanya, Nozomi tidak bisa mengatakan identitasnya kepada Setoyama Jun. Situasi kemudian semakin rumit usai kemunculan mantan Nozomi bernama Hiroto. Bagaimana nasib akhir cinta Nozomi dan Setoyama Jun yang berawal dari kesalahpahaman ini?",
                "id_kategori" => 5
            ],
            [
                "image" => "Ryou.jpg",
                "judul" => "You Made My Dawn",
                "j_episode" => 1,
                "referensi" => "Bstation, Netflix ",
                "sutradara" => "Mai Sakai",
                "tanggal" => Carbon::parse('2023-09-01'),
                "rating" => 79,
                "deskripsi" => "Film You Made My Dawn bercerita tentang kisah cinta yang terjalin antara dua siswa yang memiliki kepribadian yang berbeda. Niwa Akane (Rinka Kumada) adalah seorang siswa teladan yang selalu memakai masker setiap hari. Niwa tidak bisa melepas maskernya dan hanya bisa membaca suasana di sekitarnya.Di antara teman sekelasnya, Niwa mengagumi sosok Celadon Fukagawa (Ruki Shiroiwa). Celadon memiliki kepribadian yang lugas dan tertarik pada dunia menggambar. Namun, ketertarikan Niwa pada Celadon terbentur dengan tembok rahasia yang disembunyikan oleh masing-masing.",
                "id_kategori" => 5
            ],
            [
                "image" => "Rand.jpg",
                "judul" => "And Yet, You Are So Sweet",
                "j_episode" => 1,
                "referensi" => "Bstation, Netflix ",
                "sutradara" => "Takehiko Shinjō",
                "tanggal" => Carbon::parse('2023-03-03'),
                "rating" => 76,
                "deskripsi" => "Maaya Kisaragi berperan sebagai Mei Hata dalam And Yet You Are So Sweet, adalah siswa sekolah menengah tahun kedua. Dalam And Yet, You Are So Sweet, untuk pertama kali dalam hidupnya, dia mengungkapkan perasaannya kepada seorang siswa laki-laki yang disukainya. Namun, dia justru patah hati dan itu membuat hari-harinya berubah sangat suram. Pada saat itu, Sui Chigira (diperankan oleh Kyohei Takahashi) mendatanginya dan menyarankan agar mereka melakukan permainan cinta yang pura-pura tak berbalas. Sui Chigira adalah siswa di sekolah menengah yang sama dengan Maaya Kisaragi. Dia adalah atlet top di sekolah dan memiliki penampilan yang baik dan juga populer di kalangan mahasiswi. Sui Chigira dan Maaya Kisaragi memulai permainan cinta tak berbalas mereka, tapi ada aturan mainnya. Aturannya adalah jangan pernah suka dan jangan pernah ketahuan orang. Saat melakukan permainan cinta tak berbalas, patah hati Maaya Kisaragi disembuhkan oleh Sui Chigira. Ditambah lagi, dia mengaku ingin lebih dekat dengan Chigira, adakah muncul perasaan cinta terhadapnya?",
                "id_kategori" => 5
            ],
            [
                "image" => "Rpurple.jpg",
                "judul" => "Purple Hearts",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Elizabeth Alle Rosenbaum",
                "tanggal" => Carbon::parse('2022-07-29'),
                "rating" => 67,
                "deskripsi" => "Purple Hearts pada intinya mengambil kisah soal hubungan asmara antara pelayan bar bernama Cassie Salazar (Sofia Carson) yang bercita-cita menjadi penyanyi dengan Luke Morrow (Nicholas Galitzine) yang seorang marinir. Dalam Purple Hearts, keduanya bertemu di sebuah scene ketika Luke mengunjungi bar tempat Cassie bekerja. Hubungan asmara keduanya berawal dari alasan yang tak sebagaimana hubungan pasangan pada umumnya. Ketika memutuskan untuk menikah, Cassie dan Luke sepakat untuk menjalani pernikahan kontrak sejak awal. Hal itu dilakukan Luke untuk menolong Cassie agar mendapat asuransi seorang istri tentara AS guna mendukung mimpinya untuk menjadi penyanyi. Teman-teman Luke, termasuk di dalamnya pihak militer tempat ia bekerja, tak mengetahui motif Luke untuk menikahi Cassie itu. Orang-orang menganggap bahwa keduanya menikah atas dasar cinta. Namun, seiring waktu, cerita film Purple Hearts lantas sedikit demi sedikit menampakkan kejadian ketika orang-orang mulai menemukan rahasia di balik pernikahan Luke dan Cassie. Hal tersebut lantas menjadi alasan terjadinya perubahan serius pada hubungan Cassie dan Luke. Hingga pada akhirnya, singkat cerita, rahasia antara Cassie dan Luke akhirnya terbongkar oleh banyak pihak. Dalam sebuah persidangan militer, Luke dinyatakan bersalah dan dipecat dari profesinya sebagai marinir. Namun, setelah mengalami kejadian tersebut, ada semacam gejolak di hatinya untuk benar-benar ingin mencintai Cassie. Lantas, bagaimana kisah antara Cassie dan Luke bakal berakhir? Akankah pernikahan mereka berlanjut dan tak hancur?",
                "id_kategori" => 5
            ],
            [
                "image" => "Rlittle.jpg",
                "judul" => "Little Women",
                "j_episode" => 1,
                "referensi" => "Netflix, Amazon Prime Video",
                "sutradara" => "Greta Gerwig",
                "tanggal" => Carbon::parse('2020-02-07'),
                "rating" => 78,
                "deskripsi" => "Little Women mengisahkan tentang empat kakak beradik dari keluarga March, yang berbagi mimpi untuk menjalani hidup dengan cara mereka sendiri. Tanpa campur tangan orang lain. Kisah dimulai dari kehidupan Jo March (Saoirse Ronan) di tahun 1868. Saat itu, Joe tengah meniti karirnya sebagai guru dan penulis novel di New York. Amy March (Florence Pugh) juga mengikuti jejak sang kakak untuk meninggalkan Concord, Massachusetts, dan menetap di Perancis bersama bibi mereka. Sementara itu, sang kakak tertua, Meg March (Emma Watson) kini telah menikah dengan seorang guru bernama John Brooke (James Norton). Banyak peristiwa yang dialami kakak beradik March. Hingga akhirnya, mereka bisa menjalani hidup yang mereka pilih. Mulai dari kegagalan cinta, karir, serta konflik keluarga. Meski jarak memisahkan Jo, Amy, dan Meg, rasa cinta yang mereka bagi berhasil mengalahkan segala perbedaan yang mereka miliki. Kini, saat keadaan Beth March (Eliza Scanlen) semakin memburuk, empat kakak beradik March kembali berkumpul dan memberi kekuatan untuk satu sama lain.",
                "id_kategori" => 5
            ],
            [
                "image" => "Rbora.jpg",
                "judul" => "Bo-ra! Deborah",
                "j_episode" => 14,
                "referensi" => "Prime Video",
                "sutradara" => "Lee Tae-gon, Seo Min-jeong",
                "tanggal" => Carbon::parse('2023-04-12'),
                "rating" => 75,
                "deskripsi" => "Dalam drama ini, Yoo In Na (Yeon Bo Ra) seorang pakar pelatih asmara yang terkenal. Ia memiliki karir serta percintaan yang sangat mulus, sehingga kadang membuat para penggemarnya iri. Yeon Bo Ra mengeluarkan trik dan juga nasehat percintaan melalui media sosial dan bukunya. Ia juga kerap diundang di radio serta majalah. Bo Ra memiliki adik perempuan yang bernama Yeon Bo Mi (Kim Ye Ji). Ia hanya tinggal berdua dengan sang adik di sebuah rumah yang mewah dan luas. Noh Ju Wan (Chansung 2PM) pacar Bo Ra, seorang pengusaha waralaba restoran ayam goreng. Bo Ra dan Noh Ju Wan telah berlangsung selama tiga tahun. Lamanya pacaran ini membuat Bo Ra sangat berharap bawah percintaanya bisa berakhir bahagian setelah dilamar oleh sang kekasih. Namun, ternyata Ju Wan memiliki kekasih yang lain yang bernama Yu Ri (Kim Ji An). Lee Yoo Jung (Sojin) teman dari Bo Ra, melihat Ju Wan sedang berada di mall dan membeli sebuah perhiasan yang diduga adalah cicin untuk melamar Bo Ra. Mendengar hal tersebut, membuat Bo Ra senang dan gembira. Impian dirinya dilamar sang kekasih akan terwujud. Ju Wan pun akhirnya mengajak Bo Ra untuk bertemu dan makan malam bersama. Bahagia bukan main, Bo Ra pun langsung  mempercantik dirinya saat dilamar oleh sang kekasih. Setelah bertemu, ternyata  Bo Ra dan Ju Wan hanya melakukan kencan biasa saja. Pada saat yang sama Lee Su Hyeok (Yoon Hyun Min) sudah Bersiap mengutarakan cintanya ke Yuri. Karena pertemuan Yu Ri dan Su Hyeok yang intens namun tak ada kejelasan tentang hubungan mereka, Yu Ri akhirnya memutuskan untuk meminta Su Hyeok tak lagi bertemu dengannya. Akhirnya, Su Hyeok dan Yu Ri berpisah. Hal ini tentu saja membuat Su Hyeok sangat kesal dengan Bo Ra, ia merasa bahwa perkataan Bo Ra sudah menjadi kiblat asmara saat ini. Dan lucunya, Su Hyeok bekerja sama dengan Bo Ra dan benih-benih cinta pun muncul setelah Bo Ra berpisah dari Ju Wan.",
                "id_kategori" => 5
            ],
            [
                "image" => "Rdear1.jpg",
                "judul" => "Dear Nathan",
                "j_episode" => 1,
                "referensi" => "Vidio, Amazon Prime Video",
                "sutradara" => "Indra Gunawan",
                "tanggal" => Carbon::parse('2017-03-23'),
                "rating" => 67,
                "deskripsi" => "Dear Nathan menceritakan kisah cinta dua sejoli di masa SMA. Adalah Salma (Amanda Rawles), seorang murid pindahan di SMA Garuda yang bertemu dengan Nathan (Jefri Nichol) saat mereka terlambat mengikuti upacara bendera. Nathan yang dikenal sebagai murid nakal dan kerap terlibat tawuran, saat itu menyelamatkan Salma dari hukuman. Tetapi, Salma sudah bertekad untuk selektif memilih teman berusaha menjauhi Nathan. Namun, Nathan justru membuat heboh satu sekolah karena terang-terangan mengejar cinta Salma. Berbagai cara dilakukan Salma untuk menghindar dari Nathan, namun perlahan benih cinta mulai tumbuh di hati Salma. Namun, romansa yang baru dimulai itu langsung diuji dengan kehadiran mantan kekasih Nathan, Seli (Denira Wiraguna).",
                "id_kategori" => 5
            ],
            [
                "image" => "Rdear2.jpg",
                "judul" => "Dear Nathan: Hello Salma",
                "j_episode" => 1,
                "referensi" => "Vidio, Amazon Prime Video",
                "sutradara" => "Indra Gunawan",
                "tanggal" => Carbon::parse('2018-10-25'),
                "rating" => 69,
                "deskripsi" => "Dalam cerita film Dear Nathan Hello Salma, hubungan cinta Nathan dan Salma mengalami guncangan setelah Nathan dipindahkan sekolah karena insiden pukulan terhadap siswa lain. Tegangnya hubungan ini semakin diperburuk oleh tekanan yang Salma rasakan karena kegagalannya masuk ke universitas pilihannya. Keberanian Salma untuk menghadapi tantangan ini muncul ketika ia tak sengaja bertemu dengan Rebecca, seorang siswi yang memiliki perasaan terhadap Nathan. Rebecca, dengan baik hati, memberikan dukungan kepada Salma untuk melewati masa-masa sulit ini. Di sisi lain, Nathan terlibat dengan Ridho, seorang siswa dengan latar belakang kaya, yang diinginkan oleh orang tuanya untuk dijodohkan dengan Salma. Dalam upaya mempertahankan cinta mereka, Nathan dan Salma dihadapkan pada berbagai rintangan, termasuk tekanan dari Ridho dan perasaan Rebecca terhadap Nathan. Ini menjadi ujian nyata bagi hubungan mereka, dan mereka harus bersatu untuk mengatasi semua hambatan ini.",
                "id_kategori" => 5
            ],
            [
                "image" => "Rdear3.jpg",
                "judul" => "Dear Nathan: Thank You Salma",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Kuntz Agus",
                "tanggal" => Carbon::parse('2022-01-13'),
                "rating" => 70,
                "deskripsi" => "Di sekuel ini, kisah Nathan dan Salma mulai diwarnai dengan kesibukan dunia aktivisme sosial. Keduanya memiliki prinsip berbeda dalam bersuara. Nathan lebih menyukai turun ke jalan, sementara Salma lebih memilih berekspresi melalui digital. Perbedaan di antara keduanya justru membuat hubungan mereka renggang. Pada suatu hari, teman satu angkatan Nathan bernama Zanna menjadi korban pelecehan seksual. Kejadian tersebut membuat situasi Nathan serba sulit. Di satu sisi Nathan berusaha melindungi privasi Zanna dan merahasiakan kejadian tersebut, termasuk Salma. Namun di sisi lain, aksi diam Nathan membuat Salma curiga. Permasalahan semakin meruncing dengan hadirnya Afkar, musisi sekaligus kakak angkatan yang diidolakan Salma. Dalam kondisi ini Nathan dihadapkan antara dua pilihan, antara memperjuangkan cinta atau sebaliknya. Penasaran pilihan apa yang akan dipilih oleh Nathan?",
                "id_kategori" => 5
            ],
            [
                "image" => "Rdilan1.jpg",
                "judul" => "Dilan 1990",
                "j_episode" => 1,
                "referensi" => "Netflix, Vidio",
                "sutradara" => "Pidi Baiq, Fajar Bustomi",
                "tanggal" => Carbon::parse('2018-01-25'),
                "rating" => 70,
                "deskripsi" => "Film Dilan 1990 bercerita tentang pertemuan yang dialami oleh dua remaja yang masih sekolah di SMA. Film ini mengangkat sebuah kisah romansa remaja SMA di Bandung yang bernama Dilan (Iqbaal Ramadhan) dan Milea (Vanesha Prescilla). Awalnya, Dilan dan Milea bertemu di salah satu SMA di Bandung pada tahun 1990. Saat itu Milea merupakan anak pindahan dari Jakarta. Ketika Milea pergi ke sekolah, ia bertemu dengan teman yang satu sekolahnya. Teman laki-laki itu suka meramal. Teman laki-laki itu mengatakan jika nanti Milea dengan dirinya akan ketemu di kantin sekolah. Melia pun acuh dan tidak terlaku menggubrisnya. Justru Milea merasa terganggu karena selalu menghampirinya setiap hari. Ternyata laki-laki itu bernama Dilan. Dilan mendekati Milea dengan cara yang unik dan berbeda dengan laki-laki lainnya. Bahkan beda dengan Beni, pacar Milea di Jakarta. Hal itu membuat Milea terus memikirkannya. Setelah berkenalan, Milea mulai mengenal keunikan Dilan, pintar, baik hati dan romantis. Berbagai kisah unik pun dialami mereka berdua. Dilan memberikan hadiah berupa cokelat kepada Melia melalui POS. Dilan juga memanggilkan tukang pijat saat Milea jatuh sakit. Pada saat ulang tahun, Dilan memberi kado Milea berupa teka-teki silang (TTS). Di TTS itu Dilan menuliskan Selamat hari lahir Milea, Ini aku persembahkan hadiah untuk kamu. Hanya sebuah TTS, tapi semuanya sudah aku isi, aku cinta kamu, aku tidak ingin kamu jadi pusing karena mengisi TTS ini. Perjalanan hubungan mereka tidak selalu mulus. Pacar Dilan di Jakarta, Beni turut mewarnai perjalanan hubungan mereka berdua. Bahkan guru tes privat Milea, Kang Adi juga menaksir Milea. Bahkan mereka sempat berjalan keluar bareng. Suatu ketika Milea bertemu dengan ibunya Dilan. Ternyata ibunya Dilan orangnya asyik seperti Dilan. Ibunya Dilan senang dengan Milea, kemudian ia mendukung hubungan keduanya untuk jadian. Akhirnya, Dilan dan Milea resmi pacaran. Bahkan Dilan membuat surat resmi yang dilengkapi materai yang isinya seperti teks proklamasi.",
                "id_kategori" => 5
            ],
            [
                "image" => "Rdilan2.jpg",
                "judul" => "Dilan 1991",
                "j_episode" => 1,
                "referensi" => "Netflix, Vidio",
                "sutradara" => "Pidi Baiq, Fajar Bustomi",
                "tanggal" => Carbon::parse('2019-02-28'),
                "rating" => 65,
                "deskripsi" => "Masa-masa baru jadian memang selalu menjadi masa paling indah dalam menjalin sebuah hubungan. Namun di tengah hubungan yang sedang manis-manisnya muncul satu masalah yang mengharuskan pasangan serasi itu untuk mencari solusi dari masalah tersebut. Pada Dilan 1991, masalah mulai muncul saat Dilan dipercaya untuk memimpin geng motor. Tentunya hal ini mendapatkan larangan keras dari Milea dengan alasan keselamatan Dilan. Kemudian cerita berlanjut pada kondisi dimana Milea mendapatkan kabar bahwa Dilan sedang dikeroyok oleh sekelompok orang tak dikenal. Atas kejadian itu Milea sadar bahwa masalah tersebut akan berujung panjang. Milea sempat mengancam untuk memutuskan Dilan jika ia tidak segera keluar dari geng motor itu, dan benar saja apa yang ditakutkan Milea terbukti. Dilan dan geng motornya sudah menyiapkan rencana untuk balas dendam. Terlebih Dilan sudah mengetahui siapa dalang dibalik pengeroyokannya tersebut. Berangkat dari rasa cinta dan khawatir yang Milea rasakan, ia memberanikan diri untuk bertemu dengan Dilan ditemani dengan sang sepupu Yugo (Jerome Kurnia). Rupanya kekhawatiran Milea terbukti, Dilan benar-benar melancarkan balas dendam sesuai dengan yang ia rencanakan dan hasilnya adalah ia ditangkap oleh polisi. Milea merasa bersalah karena gagal dalam menahan Dilan melakukan balas dendam. Bahkan Milea sudah memberikan ancaman putus kepada Dilan. Namun masalah mereka berdua berhasil selesai dengan bantuan Bunda Hara (Ira Wibowo). Masalah kembali muncul saat Dilan mendapatkan kabar duka bahwa salah satu teman seperjuangannya pada klub motor Akew (Gusti Rayhan) yang kehilangan nyawa karena mengalami pengeroyokan oleh geng tak dikenal, pada saat ini Dilan dihadapkan pada pilihan yang berat yaitu solidaritasnya pada geng motornya atau hubungannya dengan Millea. Kemudian cerita berlanjut pada keadaan dimana Dilan dan Milea sudah tidak tinggal pada satu kota untuk mengejar cita-cita masing-masing, meskipun terpisah jarak hati Milea akan selalu untuk Dilan. Waktu berlalu kekosongan hati Milea kini diisi dengan sosok baru bernama Herdi, disaat yang sama kabarnya kini Dilan sudah memiliki kekasih baru.",
                "id_kategori" => 5
            ],
            [
                "image" => "Rmilea.jpg",
                "judul" => "Milea: Suara dari Dilan",
                "j_episode" => 1,
                "referensi" => "Netflix, Vidio",
                "sutradara" => "Pidi Baiq, Fajar Bustomi",
                "tanggal" => Carbon::parse('2020-02-13'),
                "rating" => 62,
                "deskripsi" => "Film ini menceritakan tentang Bandung di era 90-an. Dilan (Iqbaal Ramadhan) yang merupakan salah satu panglima dari gang motor menjalin asmara dengan seorang siswi pindahan dari Jakarta bernama Milea (vanesha Prescilla). Meski awalnya Milea merasa jika Dilan sedikit aneh, namun seiring berjalannya waktu, mereka berdua pun akhirnya saling jatuh cinta dan menjalin asmara. Setelah menjalin asmara dengan Milea, Dilan pun merasa hubungannya dengan rekan satu gang motornya mulai terasa jauh. Hingga suatu hari terjadi sebuah peristiwa yang menimpa salah satu teman Dilan, Akew (Gusti Rayhan) yang dikeroyok oleh sekelompok orang. Kejadian ini pun membuat Milea khawatir dengan keadaan Dilan. Milea pun memberikan ultimatum kepada Dilan dengan memutuskan berpisah agar Dilan menjauh dari dunia gang motor. Kejadian yang menimpa Akew ini juga membuat Dilan terlibat dengan pihak berwajib. Perpisahan yang semula hanyalah gertakan Milea, kini menjadi perpisahan yang berjalan sangat lama hingga mereka pun beranjak dewasa. Setelah perpisahan lama, Dilan dan Milea pun akhirnya bertemu kembali di reuni SMA. Keduanya pun masih saling terbawa perasaan satu sama lain, meski sudah memiliki pasangan masing-masing. Nah, kira-kira apakah Dilan dan Milea akan kembali bersatu?",
                "id_kategori" => 5
            ],
            [
                "image" => "Rsurat.jpg",
                "judul" => "Surat Cinta untuk Starla",
                "j_episode" => 1,
                "referensi" => "Vidio, Amazon Prime Video",
                "sutradara" => "Rudi Aryanto",
                "tanggal" => Carbon::parse('2017-12-27'),
                "rating" => 59,
                "deskripsi" => "Film Surat Cinta Untuk Starla bercerita tentang remaja 19 tahun bernama Hema Chandra (Jefri Nichol) yang menekuni hobinya di bidang seni. Setiap harinya ia membawa mesin tik warisan kakeknya yang merupakan seorang jurnalis. Hema menggunakan mesin tik tersebut untuk menciptakan gambar atau mural dan juga surat-surat cinta yang puitis. Ia juga senang membuat grafiti di pinggir jalan yang ia asah dengan baik. Suatu ketika Hema bertemu dengan seseorang bernama Starla (Caitlin Halderman), gadis remaja yang baru saja putus cinta dengan kekasihnya bernama Bimo (Kevin Royano). Hema dan Starla hanya membutuhkan waktu 6 jam untuk jatuh cinta satu sama lain. Diceritakan Hema dan Starla memiliki latar belakangan keluarga yang berbeda. Hema merupakan seseorang dengan finansial terbatas, sedangkan Starla merupakan anak dari keluarga berada. Untuk pertama kalinya Hema menyadari ada surat cinta yang lebih indah daripada surat cinta untuk alam, yaitu surat cinta untuk Starla. Namun di saat keduanya semakin dekat, tiba-tiba sikap Starla berubah. Hingga suatu ketika Hema menyadari penyebab perubahan sikap Starla padanya. Ternyata hal itu berhubungan dengan rahasia masa lalu keluarga Hema. Lalu, bagaimana nasib hubungan mereka?",
                "id_kategori" => 5
            ],
            [
                "image" => "Ksingle.jpg",
                "judul" => "Single",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Raditya Dika",
                "tanggal" => Carbon::parse('2015-12-12'),
                "rating" => 67,
                "deskripsi" => "Bercerita tentang sosok Ebi (Raditya Dika), seorang pemuda 27 tahun yang naif dan belum mempunyai pekerjaan. Ebi bahkan masih sering meminta uang dari ibunya setiap kali ibunya datang ke Jakarta. Ebi juga seorang single forever atau jomblo dari lahir yang belum pernah pacaran. Hal ini terjadi karena setiap kali Ebi mendekati perempuan, Ebi selalu saja ditolak. Intinya, kehidupan Ebi layak untuk dikasihani. Suatu hari, adik Ebi, Alva (Frederik Alexander) yang lebih ganteng dan sukses darinya mengumumkan kalau dia hendak menikah. Karena inilah, Ebi pun mencari pacar untuk dibawa ke kawinan Alva. Agar harga dirinya di depan ibunya masih bisa diselamatkan. Dibantu oleh kedua orang teman kosannya, Wawan (Pandji Pragiwaksono) yang paling sok tahu dan Victor (Babe Cabita) yang pesimistis, Ebi pun mulai mencari cewek satu per satu yang juga berujung pada kegagalan. Pertemuannya dengan cewek tercantik justru datang di kosannya sendiri. Cewek tersebut bernama Angel (Annisa Rawles), yang seperti namanya berhati seperti malaikat, cantik tentunya. Ebi pun berniat mendekatinya. Namun ketika Ebi hendak mendekati Angel, muncul sosok Joe (Chandra Liow), “abang-abangan” Angel yang sudah lama ada di dalam kehidupannya. Joe, diam-diam juga mengincar cinta Angel dan dengan segala tipu muslihatnya berusaha menjauhkan Ebi dari Angel. Angel tidak tahu soal ini sama sekali. Bisakah Ebi mendapatkan Angel? Bisakah Ebi menyingkirkan Joe, saingannya? Satu hal yang Ebi akan segera sadari, yaitu petualangannya dalam melepaskan status “Single” membuat dia menjadi lebih tahu lagi tentang apa yang dia butuhkan dalam hidupnya, bukan sekadar memenuhi apa yang dia inginkan.",
                "id_kategori" => 6
            ],
            [
                "image" => "Ksalmon.jpg",
                "judul" => "Manusia Setengah Salmon",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Herdanius Larobu",
                "tanggal" => Carbon::parse('2013-10-10'),
                "rating" => 57,
                "deskripsi" => "Film ini bercerita tentang Dika (Raditya Dika), seorang penulis yang gagal move on dari berbagai macam lika-liku kehidupan. Dimulai dari: mantannya Jessica (Erisca Rhein), Ibunya (Dewi Irawan) yang memutuskan untuk pindah dari rumah semasa dia kecil. Sekaligus hubungan dengan bapaknya (Bucek). Pengalaman lucu mereka dapatkan ketika rumah yang mereka kunjungi ternyata tidak ada yang cocok. Satu rumah ada yang jelek banget, rumah lainnya ada kuburan dan bekas orang gantung diri. Mereka sempat putus asa, sampai akhirnya Dika menemukan sebuah rumah, yang menurut ibunya sempurna. Di saat ini juga Dika bertemu dengan Patricia (Kimberly Ryder) seorang cewek cantik, dan mulai melakukan pendekatan. Masalah timbul ketika sudah pindah rumah, karena Dika tidak menyukai rumah barunya. Kenangan dengan rumah lama masih membekas. Sementara itu, hubungan Dika dengan Patricia juga terganggu, karena mantan Dika, Jessica tanpa dia sadari masih membayang-bayanginya. Hal menggelikan juga terjadi saat sopir lama Dika memutuskan untuk berhenti. Ia diganti dengan sopir baru bernama Sugiman (Insan Nur Akbar) yang ternyata bau ketek. Tak berhenti disitu saja, hubungan Dika dengan Papa Dika (Bucek) dirasa makin berjarak. Film ini adalah kisah perjalanan Dika. Selain pindah rumah juga merupakan perjalanan dia untuk berpindah dari hal-hal yang selama ini menahannya untuk tumbuh dewasa.",
                "id_kategori" => 6
            ],
            [
                "image" => "Kkardus.jpg",
                "judul" => "Cinta Dalam Kardus",
                "j_episode" => 1,
                "referensi" => "Netflix, Rebahin",
                "sutradara" => "Salman Aristo",
                "tanggal" => Carbon::parse('2013-06-13'),
                "rating" => 62,
                "deskripsi" => "Film ini berkisah tentang kehidupan cinta Miko (Raditya Dika) yang hidup bersama Rian (Ryan Adriandhy) dan pembantunya, Anca (Hadian Saputra). Di tengah rasa jenuh menjalani hubungan bersama Putri (Anizabella), Miko berusaha menghilangkan rasa jenuhnya dengan mengikuti stand up comedy. Rencana Miko tersebut pun sempat diragukan oleh Rian. Di sisi lain, Miko merasa yakin akan kemampuannya dan mengaku punya senjata andalan. Rupanya, ketika melakukan stand up comedy, Miko malah menjelaskan barang-barang peninggalan 21 mantan kekashihnya yang disimpannya di dalam kardus. Di saat yang bersamaan, Miko mulai belajar sesuatu yang penting tentang cinta.",
                "id_kategori" => 6
            ],
            [
                "image" => "Kkoala.jpg",
                "judul" => "Koala Kumal",
                "j_episode" => 1,
                "referensi" => "Netflix, Amazon Prime Video",
                "sutradara" => "Raditya Dika",
                "tanggal" => Carbon::parse('2016-07-05'),
                "rating" => 66,
                "deskripsi" => "Dika telah merencanakan pernikahan dengan Andrea, undangan pernikahan pun telah disebarluaskan ke berbagai pihak. Namun, tak disangka-sangka Andrea membatalkan rencana pernikahannya dengan Dika secara sepihak. Di luar dugaan Dika, percintaannya harus mengalami hal yang pahit ditambah denagn fakta bahwa sebenarnya Andrea telah berselingkuh dengan pria lain bernama James. Kenyataan itu membuat Dika frustasi, trauma, dan mengalami patah hati. Suatu hari, seorang perempuan bernama Trisna yang diperankan oleh Sheryl Sheinafia bertemu dengan Dika. Paras Trisna yang cantik, periang, dan mempunyai berbagai keunikan membuat Dika sedikit tertarik dan perlahan membuka ruang untuk Trisna menjadi sahabatnya. Dika yang merupakan seorang penulis buku, selama mengalami patah hati merasa sangat kesulitan untuk mengakhiri bab terakhir buku yang sedang ia tulis. Trisna yang memahami penyebab Dika kesulitan untuk menulis berusaha untuk membantunya agar bab terakhir dapat segera terselesaikan. Trisna yang ingin membantu Dika menyelesaikan segala masalahnya memberikan berbagai saran untuk dilakukan Dika. Salah satu ide yang diberikan Trisna adalah melakukan balas dendam terhadap Andrea karena telah membuat Dika mengalami patah hati yang begitu dalam. Dika yang masih mempunyai akal sehat tidak langsung menuruti perkataan Trisna. Ia tetap memikirkan baik dan buruknya bila melakukan saran dari Trisna. Selengkapnya hanya di film Koala Kumal.",
                "id_kategori" => 6
            ],
            [
                "image" => "Ksah.jpg",
                "judul" => "Insya Allah Sah",
                "j_episode" => 1,
                "referensi" => "Prime Vidio",
                "sutradara" => "Benni Setiawan",
                "tanggal" => Carbon::parse('2017-06-24'),
                "rating" => 53,
                "deskripsi" => "Insya Allah Sah mengisahkan sepasang kekasih, Silvi (Titi Kamal) dan Dion (Richard Kyle), yang ingin melanjutkan hubungan ke jenjang lebih serius. Suatu hari, Silvi datang mengunjungi Dion di kantornya. Sialnya, ia terjebak di dalam lift bersama seorang pria religius yang juga merupakan karyawan Dion, Raka (Pandji Pragiwaksono). Saat terjebak di dalam lift, Silvi bernazar akan menjadi seorang wanita muslimah jika dirinya selamat. Tak lama setelah Silvi bernazar, pintu lift tiba-tiba terbuka dan Dion langsung melamar Silvi. Lupa dengan nazar yang diucapkan, Silvi segera menerima pinangan Dion. Silvi pun mempertemukan Dion dengan ayah (Dedi Mizwar) dan ibunya (Lydia Kandou). Selama proses mengurus pernikahan, Silvi kerap menemui banyak masalah. Ia jadi terbayang ucapan Raka yang selalu mengingatkan dirinya untuk berubah menjadi seorang yang muslimah. Namun, Silvi memilih mengabaikan Raka dan tetap menjalani hari-harinya seperti biasa. Sejak saat itu, kesialan demi kesialan datang bertubi-tubi menimpa Silvi. Apakah Silvi bisa terbebas dari kesialan-kesialan tersebut? Akankah ia menepati janjinya sebagai seorang wanita muslimah?",
                "id_kategori" => 6
            ],
            [
                "image" => "Kguru.jpg",
                "judul" => "Guru-Guru Gokil",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Sammaria Simanjuntak",
                "tanggal" => Carbon::parse('2020-08-17'),
                "rating" => 62,
                "deskripsi" => "Guru-Guru Gokil tentang seorang bernama Taat Pribadi (Gading Marten) bermimpi menjadi orang kaya. Menurutnya orang sukses adalah orang yang memiliki uang banyak dan harta melimpah. Dirinya memilih untuk merantau ke Ibu kota daripada harus menjadi guru seperti ayahnya. Taat begitu membenci pekerjaan mulia itu karena dia merasa ajaran yang ayahnya berikan tak sesuai dengan prinsip hidupnya. Namun, nilai Taat ketika sekolah sangat jelek terlebih di mata pelajaran Bahasa Indonesia padahal ayahnya seorang guru Bahasa Indonesia. Menurutnya menjadi guru adalah hal yang membuang-buang waktu. Tuntutan yang berat terkadang tak sebanding gaji yang diberikan. Di perantauan Taat bekerja serabutan. Tak kunjung kaya, Taat malah selalu serba kekurangan. Setelah sepuluh Idhul Fitri Taat tak pernah pulang, akhirnya ia menyerah juga dan memilih untuk pulang. Bahkan sesampainya di rumah, kehadirannya tak dianggap oleh ayahnya. Taat mencari pekerjaan di mana-mana, mulai dari di internet hingga pekerjaan offline. Ia mencoba mencari informasi pekerjaan di biro lowongan pekerjaan. Ia mendapatkan lowongan pekerjaan menjadi seorang guru di SMA tempat ayahnya bekerja. Mau tidak mau dia mengambil pekerjaan ini. Dengan ijazah palsu Taat langsung diterima dan langsung bekerja di sana. Dia mendapat tanggung jawab mengajar sejarah untuk anak IPS, yang tentunya ia tak faham materinya. Di SMA itu ia bertemu dengan rekan-rekannya; Bu Rahayu (Faradina Mufti) sebagai guru Matematika, petugas TU, petugas perpustakaan, dan penjaga sekolah yang galak tapi manis, Bu Nirmala (Dian Sastrowardoyo) sebagai guru Kimia yang lemot, Pak Nelson (Boris Bokir) yang lugu dan setia kawan, dan muridnya yang cerdik Ipang (Kevin Ardilova) yang juga adik Bu Rahayu. Baru beberapa hari bekerja, sekolahan mengalami perampokan. Seluruh gaji guru termasuk uang pensiun ayah Taat raib dibawa perampok. Taat bersama Bu Rahayu dan Pak Gagah (Ibnu Jamil) sempat mengejar perampok itu. Namun, mereka gagal membawa uang-uang itu kembali. Berbekal ingatan tato yang ada di lengan perampok, Taat mencari bukti dan memata-matai tempat perampok itu berasal bersama Bu Nirmala dan Pak Nelson. Di masa penyusunan strategi mengambil kembali uang-uang yang dirampok, Taat dihadapkan dengan permasalahan baru. Ia harus mempertanggung jawabkan statusnya seorang guru kepada orang tua murid yang saat itu mempertanyakan mengapa anaknya membuat makalah tentang sejarah ganja. Akhirnya Taat berusaha semaksimal mungkin belajar menjadi seorang guru yang sesungguhnya. Ia mempelajari bagaimana cara mengajar masing-masing guru di sekolah itu. Hingga di kelas ayahnya sendiri, ia hanya berani melihat dari jendela. Ia sadar bahwa ayahnyalah sosok guru yang menjadi panutan semua orang. Dan ia sadar ia tak mampu menjadi seperti ayahnya atau menjadi siapapun. Dengan bantuan adik Bu Rahayu Ipang, yang juga muridnya di kelas IPS 1, ia mampu membuktikan bahwa ia layak menjadi seorang guru dengan caranya sendiri.",
                "id_kategori" => 6
            ],
            [
                "image" => "Kcomic.jpg",
                "judul" => "Comic 8",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Anggy Umbara",
                "tanggal" => Carbon::parse('2014-01-29'),
                "rating" => 68,
                "deskripsi" => "Di sebuah bank, delapan anak muda sedang berusaha merampok. Walaupun mereka datang secara hampir bersamaan, mereka terdiri dari tiga kelompok yang berbeda. Para perampok itu bukan satu tim. Tiga kelompok perampok memiliki tujuan masing-masing. Ada yang merampok karena galau, hobi, iseng, adrenaline sport, bahkan untuk menghidupi panti asuhan dan rakyat miskin. Jam terbang mereka juga beragam, dari yang masih amatir sampai sudah profesional. Saat sedang melakukan perampokan, mereka terkepung oleh polisi. Mereka hendak menangkap dan memenjarakan para perampok. Sayangnya perampok memiliki banyak sandera di dalam bank. Kini para perampok akan mencari jalan untuk keluar. Sementara polisi harus mencari strategi untuk bisa menangkap perampok tanpa harus kehilangan nyawa para sandera.",
                "id_kategori" => 6
            ],
            [
                "image" => "Korang.jpg",
                "judul" => "Orang Kaya Baru",
                "j_episode" => 1,
                "referensi" => "Prime Video",
                "sutradara" => "Ody Harahap",
                "tanggal" => Carbon::parse('2019-01-24'),
                "rating" => 66,
                "deskripsi" => "Film ini berfokus pada kehidupan keluarga miskin yang terdiri dari Bapak (Lukman Sadri), Ibu (Cut Mini), Tika (Raline Shah) sebagai anak pertama, Duta (Derby Romero) sebagai anak kedua, dan Dodi (Fatih Unru) sebagai anak terakhir. Akibat kemiskinan yang diderita keluarganya, Tika, Duta dan Dodi kerap kali mendapat permasalahan di kampus dan sekolahan. Tika kerap kali menjadi korban bully karena tidak memiliki gadget terkini dan berpenampilan pas-pasan. Sedangkan Duta sendiri mengalami kesulitan dana untuk pertunjukan teater yang akan ia adakan di kampusnya. Sementara si bungsu sendiri selalu dirundung teman-temannya karena keluarganya tidak mampu membelikan sepatu baru untuk menggantikan sepatu Dodi yang sudah bolong-bolong. Tak jarang, Duta, Tika dan Dodi datang ke kondangan orang tak dikenal untuk makan gratis. Awalnya semua itu tidak begitu menjadi masalah, karena mereka bertiga memiliki sosok Bapak yang selalu berpikiran positif dan senantiasa mengingatkan untuk bersyukur atas apa yang mereka miliki saat itu. Hingga akhirnya Bapak meninggal. Lebih mengejutkannya lagi, beberapa hari setelah bapak meninggal, datanglah seorang pengacara ke rumah mereka dan memberikan video peninggalan Bapak untuk keluarganya. Dalam video itu,Bapak mengungkapkan sebuah rahasia besar, bahwa sesungguhnya mereka adalah orang kaya raya dan meninggalkan banyak warisan. Dari sinilah, Tika, Duta, Dodi dan Ibunya menjadi orang kaya hanya dalam satu malam saja. Perubahan signifikan ini menimbulkan berbagai hal lucu nan menggelitik, karena mereka tidak terbiasa menjadi keluarga yang bergelimang harta. Namun bagai pisau bermata dua. Hal itu juga membuat mereka menjadi lebih mementingkan diri dan mulai mengabaikan keharmonisan dalam keluarga. Lantas mampukah mereka menghadapi permasalahan yang muncul sejak menjadi Orang Kaya Baru?",
                "id_kategori" => 6
            ],
            [
                "image" => "Kcek.jpg",
                "judul" => "Cek Toko Sebelah",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Ernest Prakasa ",
                "tanggal" => Carbon::parse('2016-12-20'),
                "rating" => 78,
                "deskripsi" => "Film Cek Toko Sebelah menceritakan tentang Koh Afuk (Chew Kin Wah), yang punya usaha toko kelontong. Ia merasa bahwa dirinya semakin hari semakin tua untuk mengurus bisnisnya ini, terlebih lagi setelah ditinggal oleh sang istri (Dayu Wijayanto). Koh Afuk pun memutuskan untuk mewariskan tokonya kepada Erwin (Ernest Prakasa). Mendengar keputusan tersebut, Yohan (Dion Wiyoko) sebagai anak sulung tidak menerima apabila tokonya tersebut diberikan kepada Erwin, si anak bungsu. Erwin pun tidak menerima keputusan untuk mewarisi toko tersebut, karena kariernya sedang naik daun dan kekasihnya Natalie (Gisella Anastasia) juga keberatan akan hal ini. Akan tetapi, Koh Afuk meyakinkan anaknya tersebut untuk mewarisi toko kelontong miliknya dengan memberikan masa percobaan selama satu bulan. Tak semulus yang dibayangkan, karena selalu muncul masalah-masalah di toko kelontong ini. Tidak hanya internal keluarga, tetapi juga oknum yang membeli toko kelontong untuk kepentingan lain. Lantas apa yang akan dilakukan Erwin? Apakah ia mampu meneruskan usaha ayahnya itu?",
                "id_kategori" => 6
            ],
            [
                "image" => "K20.jpg",
                "judul" => "Sweet 20",
                "j_episode" => 1,
                "referensi" => "WeTV, Netflix",
                "sutradara" => "Ody Harahap",
                "tanggal" => Carbon::parse('2017-06-16'),
                "rating" => 73,
                "deskripsi" => "Sweet 20 bercerita tentang seorang nenek berusia 70 tahun bernama Fatmawati. Awalnya, ia tinggal bersama anaknya, Aditya, dan keluarganya, tetapi mereka ingin mengirimnya ke panti jompo karena ia sering membuat masalah di rumah. Mendengar keluarganya berencana mengirimnya ke panti jompo, Fatmawati pun merasa sedih dan kecewa. Hingga suatu malam, Fatmawati pergi ke studio foto yang membuatnya terlihat 50 tahun lebih muda. Setelah keluar dari studio itu, ia menyadari bahwa tubuhnya kembali seperti gadis berusia 20 tahun. Senang dengan perubahan ini, Fatmawati memutuskan untuk menyewa kamar kos dan mengganti namanya menjadi Mieke Wijaya. Ia juga mulai bernyanyi dan menjadi penyanyi terkenal. Kehidupannya yang baru berjalan dengan seru. Apalagi, ada tiga orang lelaki yang terpikat dengannya yakni Hamzah yang selama ini mengaguminya, Alan produser musik, dan Juna cucunya sendiri yang ingin Mieke menjadi vokalis bandnya. Meski awalnya Fatmawati muda senang dengan perubahan ini,  tapi ia kemudian merasa kesulitan hidup dengan wujud muda.Masalah mulai muncul ketika keluarganya mencurigai orang yang mirip Mieke telah mengambil uang simpanan Fatmawati. Setelah beberapa peristiwa, Mieke akhirnya mengungkapkan jati dirinya kepada sahabatnya, Hamzah. Mereka juga menemukan bahwa Mieke bisa kembali jadi Fatmawati tua jika kehilangan darahnya. Ketika cucu Mieke mengalami kecelakaan dan membutuhkan transfusi darah, Mieke dengan sigap menawarkan darahnya dan mengembalikan dirinya menjadi Fatmawati berusia 70 tahun. Pada akhirnya, keluarga Aditya dan Mieke merasa bersyukur dan akur. Mieke telah belajar banyak tentang hidup dan keluarganya, dan semuanya berakhir dengan baik.",
                "id_kategori" => 6
            ],
            [
                "image" => "Xmencuri.jpg",
                "judul" => "Mencuri Raden Saleh",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Angga Dwimas Sasongko",
                "tanggal" => Carbon::parse('2022-08-25'),
                "rating" => 73,
                "deskripsi" => "Mulanya, Ucup (Angga Yunanda) membantu Piko (Iqbal Ramadhan) untuk mendapatkan uang dengan menjual lukisan palsu yang dibuat Piko ke Dini (Atiqah Hasiholan). Rupanya, Dini merupakan anak buah Permadi (Tio Pakusadewo) yang seorang mantan presiden. Setelah itu, Permadi memberi penawaran kepada Ucup dan Piko untuk membuat satu lukisan palsu lagi, yaitu lukisan Penangkapan Pangeran Diponegoro karya Raden Saleh. Namun kali ini, Permadi meminta Ucup dan Piko untuk menukar lukisan palsu itu dengan yang asli di Istana Negara.Ucup dan Piko yang tergiur dengan bayaran yang ditawarkan Permadi pun menyanggupi permintaan itu. Mereka kemudian merekrut Sarah (Aghniny Haque), Fella (Rachel Amanda), Tuktuk (Ari Irham), dan Gofar (Umay Shahab), lalu menyusun rencana. Namun rencana itu gagal, meski Permadi tetap berhasil mendapat lukisan Raden Saleh yang asli karena mengecoh aparat. Piko dan Ucup pun tak terima karena mereka menjadi kambing hitam. Akhirnya, mereka menyusun rencana lagi untuk merebut lukisan Raden Saleh yang asli dengan mendekati Rama (Muhammad Khan), anak Permadi.",
                "id_kategori" => 7
            ],
            [
                "image" => "Xhead.jpg",
                "judul" => "Headshot",
                "j_episode" => 1,
                "referensi" => "Netflix, Vidio",
                "sutradara" => "Timo Tjahjanto, Kimo Stamboel, The Mo Brother ",
                "tanggal" => Carbon::parse('2016-12-08'),
                "rating" => 63,
                "deskripsi" => "Seorang lelaki misterius terbangun dari siuman setelah mengalami kondisi koma cukup lama. Ailin (Chelsea Islan), seorang mahasiswi kedokteran, merawat sang pemuda dengan telaten. Ia ditemukan terdampar dalam kondisi sekarat dan terdapat luka tembakan di kepala. Ailin memberi nama pemuda tanpa identitas dan hilang ingatan itu dengan nama Ishmael (Iko Uwais). Ketika hubungan keduanya mulai dekat, tanpa disadari nyawa Ishmael justru terancam. Banyak pembunuh yang menginginkan kematiannya. Ailin pun terseret pusaran masalah yang dihadapi Ishmael. Bahaya dihadapi Ailin, ia diculik komplotan kriminal yang dipimpin oleh Lee (Sunny Pang), seorang bos mafia yang begitu misterius. Perlahan-lahan ingatan Ishmael kembali, seiring usahanya menyelamatkan Ailin. Semua konfrontasi kekerasan yang dialami Ishmael, perlahan membuka kembali ingatannya. Setiap kali menghadapi kawanan kriminal, Ishmael seakan menemukan kembali potongan memori, seperti menyatukan puzzle dalam bingkainya. Namun justru potongan-potongan puzzle itulah yang mengingatkan kembali Ishmael akan masa lalunya.",
                "id_kategori" => 7
            ],
            [
                "image" => "Xfast.jpg",
                "judul" => "Fast X",
                "j_episode" => 1,
                "referensi" => "Netflix, Amazon Prime Video",
                "sutradara" => "Louis Leterrier ",
                "tanggal" => Carbon::parse('2023-05-17'),
                "rating" => 58,
                "deskripsi" => "Dom Toretto dan keluarganya telah berkali-kali mengakali dan mengalahkan setiap musuh yang menghalangi mereka selama menjalankan misi maupun rintangan. Namun, kini mereka akan menghadapi lawan paling mematikan yang pernah ditemui. Ancaman mengerikan itu muncul dari bayang-bayang masa lalu yang dipicu dendam berdarah. Seseorang bertekad untuk menghancurkan keluarga dan semua orang yang dicintai Dom untuk selamanya. Dalam Fast Five 2011, Dom dan timnya mengalahkan gembong narkoba Brasil Hernan Reyes yang jahat di sebuah jembatan di Rio De Janeiro. Siapa sangka, ternyata putra Reyes yakni Dante menyaksikan semua peristiwa tersebut. Dante telah menghabiskan 12 tahun dalam menyusun rencana agar Dom membayar harga tertinggi atas semua perbuatannya. Dante akan membuat keluarga Dom menyebar dari Los Angeles ke katakombe Roma, dari Brasil ke London dan dari Portugal ke Antartika. Akan ada Sekutu baru yang ditempa dan musuh lama pun kembali bermunculan. Suatu fakta terungkap dan semuanya berubah saat Dom mengetahui bahwa target utama balas dendam Dante adalah putranya yang berusia 8 tahun.",
                "id_kategori" => 7
            ],
            [
                "image" => "X2012.jpg",
                "judul" => "2012",
                "j_episode" => 1,
                "referensi" => "Vidio, Amazon Prime Video",
                "sutradara" => "Roland Emmerich",
                "tanggal" => Carbon::parse('2009-11-13'),
                "rating" => 58,
                "deskripsi" => "Film 2012 menceritakan tentang penyelamatan diri dari bencana besar yang akan menggemparkan dunia. Jackson Curtis (John Cusack) adalah seorang penulis karya fiksi ilmiah asal Los Angeles. Suatu hari, Jackson mengajak kedua anaknya, Noah dan Lily yang tinggal bersama mantan istrinya, Kate (Amanda Peet), untuk berkemah di Taman Nasional Yellowstone. Di sana, mereka mengunjungi situs penelitian yang dibatasi oleh pemerintah dan bertemu dengan Adrian Helmsley, seorang ilmuwan yang memberi tahu tentang teori bencana 2012. Mereka juga bertemu dengan Charlie Frost (Woody Harrelson), seorang pembawa radio serta ahli teori konspirasi. Charlie memutar video teori konspirasi oleh Charles Hapgood yang menjelaskan tentang pergeseran kutub yang akan datang serta prediksi kalender Long Count Mesoamerika. Dalam prediksi tersebut, disebutkan bahwa fenomena 2012 akan segera terjadi. Curtis yang awalnya tidak percaya pun akhirnya khawatir karena tanda-tanda bencana yang mulai bermunculan. Ia kemudian memutuskan untuk segera menyelamatkan keluarganya dari bencana. Di sisi lain, para ilmuwan sedang membangun sebuah kapal selam raksasa untuk menampung masyarakat demi menghindari bencana yang akan terjadi. Sayangnya, kapal tersebut tidak muat menampung semua orang yang ada sehingga banyak orang yang harus ditinggalkan. Setelah melalui berbagai rintangan, Curtis dan keluarganya pun berhasil masuk ke dalam kapal selam tersebut. Saat bencana besar pada fenomena 2012 terjadi, peradaban dunia mulai hancur. Tanah mulai retak karena pergeseran yang terjadi. Masyarakat menggila berlarian kesana kemari. Untungnya, Curtis dan keluarganya serta para penumpang kapal selam raksasa dapat terselamatkan dari bencana besar yang terjadi.",
                "id_kategori" => 7
            ],
            [
                "image" => "Xmeg.jpg",
                "judul" => "The Meg",
                "j_episode" => 1,
                "referensi" => "Netflix, HBO GO",
                "sutradara" => "Jon Turteltaub",
                "tanggal" => Carbon::parse('2018-08-10'),
                "rating" => 57,
                "deskripsi" => "Jonas Taylor (Jason Statham) merupakan seorang mantan anggota pasukan khusus Amerika yang memiliki pengalaman kelam saat berada di bawah laut lantaran kehilangan kerabatnya. Masa suram itu menjadi trauma tersendiri bagi Jonas, hingga dirinya tak ingin kembali berurusan dengan dunia laut. Lima tahun berselang, sosok Jonas kembali dicari oleh James Mack Rides (Cliff Curtis) dan Dr. Minway Zhang (Winston Chao) untuk membantu misi penyelamatan. Kali ini, sekelompok ilmuwan yang salah satu anggotanya merupakan mantan istri Jonas, ikut terperangkap dalam kapal selam di palung Mariana usai diserang makhluk misterius. Jonas yang sempat berjanji pada dirinya sendiri untuk tak terlibat lagi dengan dunia penyelaman dasar laut akhirnya luluh dan bersedia membantu. Anggota tim dalam proyek Mana One, berada di bawah pimpinan Dr. Minway Zhang dan putrinya Suyin (Li Bingbing) yang merupakan seorang oseanografer. Misi mereka adalah untuk meneliti kehidupan di bagian terdalam Palung Mariana di dasar Samudera Pasifik. Penelitian tersebut dijalankan dengan kapal selam yang dipimpin oleh Lori Taylor (Jessica McNamee), mantan istri Jonas. Di tengah perjalanan menyusuri palung terdalam itu, kapal selam yang dikemudikan oleh Lori diserang makhluk misterius dan membuat Lori kehilangan kontak dengan tim di markas Mana One. Jonas kemudian berusaha untuk menyelamatkan para ilmuwan dari serangan makhluk misterius itu meski harus bertaruh nyawanya sendiri. Makhluk itu segera diketahui adalah Hiu Purba raksasa bernama Megalodon.",
                "id_kategori" => 7
            ],
            [
                "image" => "Xspi.jpg",
                "judul" => "Spider-Man",
                "j_episode" => 1,
                "referensi" => "Netflix, Vidio",
                "sutradara" => "Sam Raimi",
                "tanggal" => Carbon::parse('2002-05-22'),
                "rating" => 74,
                "deskripsi" => "Peter Parker adalah seorang remaja SMA yang kerap kali menjadi bahan bullying teman-temannya. Di samping itu, dia cukup beruntung memiliki sahabat bernama Harry Osborn. Hidup Peter lantas berubah 180 derajat ketika seekor laba-laba genetik lepas dan mengigitnya saat melakukan study tour di salah satu laboratorioum. Tanpa Peter sadari racun laba-laba yang masuk ke tubuhnya justru menghasilkan kekuatan yang tidak terduga. Menyadari kekuatan super ada pada dirinya membuat Peter memanfaatkan kekuatan tersebut melawan penjahat. Hal ini dia lakukan setelah pamannya Ben meninggal akibat ulah penjahat yang dia pernah ia tolong. Di sisi lain demi menyelamatkan perusahaan, Norman Osborn mengambil langkah nekat dengan menyuntikkan serum yang sudah dia kembangkan ke tubuhnya sendiri. Akibatnya, ia berubah menjadi sosok Green Goblin yang meneror Ibu Kota New York. Tidak tinggal diam, Spiderman kemudian berusaha menghentikan aksi jahat dari Green Goblin. Merasa terganggu dengan kehadiran Spiderman, dia pun memanfaatkan Bibi May dan kekasih Spiderman, M.J. Demi menyelamatkan keduanya Spiderman harus terlibat dalam pertarungan sengit antara Green Goblin. Sanggupkan Peter Parker menghentikan Green Goblin dan menyelamatkan warga dan kekasihnya?",
                "id_kategori" => 7
            ],
            [
                "image" => "Xiron.jpg",
                "judul" => "Iron Man",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Jon Favreau",
                "tanggal" => Carbon::parse('2008-04-30'),
                "rating" => 79,
                "deskripsi" => "Iron Man mengisahkan tentang Tony Stark, seorang rekayasawan dan industriawan terkemuka yang menjadi korban penyanderaan oleh kelompok teroris. Untuk melarikan diri, ia membangun baju besi mekanis yang dilengkapi dengan senjata dan kemampuan luar biasa. Setelah kembali ke Amerika Serikat, Tony memutuskan untuk menggunakan baju besi tersebut untuk melawan kejahatan dan menjadi pahlawan super Iron Man. Dalam perjalanan ini, Tony bertemu dengan Pepper Potts, asisten pribadinya yang menjadi sahabat dan sekutunya. Ia juga berkonflik dengan Obadiah Stane, rekan bisnisnya yang berusaha mengambil alih perusahaan Stark Industries. Iron Man menghadirkan aksi yang intens dan menggambarkan keberanian Tony dalam melawan kejahatan. Dalam setiap langkahnya, Tony belajar untuk menghadapi ketakutan, mempercayai diri sendiri, dan menemukan kekuatan dalam dirinya sendiri untuk melawan kejahatan.",
                "id_kategori" => 7
            ],
            [
                "image" => "Xave.jpg",
                "judul" => "Avengers : Endgame",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Joe Russo, Anthony Russo",
                "tanggal" => Carbon::parse('2019-04-24'),
                "rating" => 84,
                "deskripsi" => "Avengers : Endgame menceritakan kejadian setelah kekalahan Avengers melawan Thanos dimana Thanos berhasil melenyapkan setengah populasi alam semesta hanya dengan jentikan jarinya. film diawalai dengan scene dimana Clint/Hawk Eye sedang berekreasi bersama keluarganya. Namun kejadian pahit menimpa Clint karena keluarganya lenyap akibat jentikan jari Thanos. Scene berlanjut ke luar angkasa dimana Tony Stark/Iron Man dan Nebula tampak dalam keadaan kritis dimana pesawat mereka terombang ambing di luar angkasa dengan persediaan makanan dan bahan bakar mulai menipis dan dalam beberapa hari akan habis. Sadar akan keadaan yang tidak memungkinkanya selamat, Tony mebuat rekaman untuk Papper Potts dan terbaring dikursinya dalam keadaan kritis. Namun dalam keadaan krisis tersebut muncul harapan untuk kembali kebumi. Adegan beralih ke markas Avengers. Di markas anggota yang tersisa masih terhuyung-huyung akan kekalahan mereka dari Thanos sembari mencoba mencari tahu siapa saja orang dibumi yang menjadi korban jentikan Thanos. mereka menyusun rencana untuk mecari keberadaan Thanos dan mengalahkannya mengembalikan kembali orang-orang yang telah dilenyapkan dengan menggunakan Infinity Stones. Rencana pun dijalankan dimana para Avengers pergi ke tempat Thanos berada. Thanos diperlihatkan sedang berada di ladang membawa makanan yang dipanen dibawa kerumahnya. Thanos yang terlihat terluka dan sedang dalam kondisi lemah sedang memasak, namun ia dikejutkan oleh serangan dari para Avengers dan Thanos berhasil ditakhlukan. Namun Avengers dikejutkan karena menemukan bahwa Thanos tidak memiliki Infinity Stones. Thanos menjelaskan bahwa ia telah melenyapkan infinity stones sehingga rencananya tidak mungkin bisa dirusak. Marah akan hal itu Thor membunuh Thanos dan Avengers dengan putus asa kembali ke bumi. Lima tahun berlanjut setelah kematian Thanos. Dimarkas Natasha/Black Widow sedang berbicara dengan anggota Avengers dan sekutu melalui alat komunikasi sedang memantau kestabilan bumi dan alam semesta. di tempat lain terjadi hal mengejutkan dimana Scott Lang/Ant Man kembali dari alam kuantum dan ia terkejut akan kejadian yang menimpa bumi. Lang pergi kemarkas Avengers dimana anggota Avengers terkejut karena mereka mengira Lang sudah lenyap. Di markas Lang menceritakan apa yang menimpanya dan memberikan sebuah ide yang memungkinkan Avengers untuk mengembalikan orang-orang yang lenyap akibat jentikan jari Thanos. Ide tersebut dijalankan dan Avengers yang berada dimarkas sedang berusahan menyusun rencana dang mengumpulkan kembali beberapa anggota yang terpencar. Setelah anggota terkumpul para Avengers pergi menjalankan rencana mereka untuk mengembalikan kembali orang-orang yang telah lenyap.",
                "id_kategori" => 7
            ],
            [
                "image" => "Xkong.jpg",
                "judul" => "Godzilla vs. Kong",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Adam Wingard",
                "tanggal" => Carbon::parse('2021-03-24'),
                "rating" => 63,
                "deskripsi" => "Menceritakan tentang pertarungan dua mahkluk paling kuat di muka bumi. Adegan dibuka dengan scene dimana Kong sang raja gorila sedang dirantai dan terkulai tak berdaya di atas kapal induk. Kemudian Film Godzilla vs Kong dilanjutkan dengan adegan saat Kong bertemu dengan seorang ahli geologi dari salah satu badan riset Monarch, Nathan Lind (Alexander Skarsgard) adalah salah satu ilmuwan orang sangat tertarik dengan segala hal tentang monster. Sang peneliti takjub karena ada seorang anak yatim piatu, Jia (Kaylee Hottle) yang dapat berbicara dengan Kong. Anak itu diceritakan sebagai seorang anak yang memiliki bakat khsusus dimana ia dapat melakukan komunikasi dengan Kong, sang raja gorila. Sampai pada waktu dimana kapal induk yang mereka tumpangi mendapatkan serangan secara mendadak oleh sosok yang tidak lain adalah Godzilla, pertarungan diantara keduanya tidak dapat terelakkan bahkan banyak korban berjatuhan dari pihak militer. Pada saat itu kong berhasil memukul Godzilla yang akhirnya melarikan diri masuk ke dalam lautan lepas, sesaat manusia dapat merasakan aman ketika Godzilla pergi. Namun ternyata hal tersebut menjadi permulaan kemarahan Godzilla yang merasa terusik, ia melanjutkan serangan ke daerah padat penduduk dan merusak Gedung-gedung di sekitarnya. Dampak yang diakibatkan oleh pertarungan antara keduanya sangatlah masif, bahkan mengancam eksistensi umat manusia. Oleh karena itu ada sebuah rencana yang dibangun oleh Monarch untuk memusnahkan keduanya, karena dirasa dapat membahayakan umat manusia.",
                "id_kategori" => 7
            ],
            [
                "image" => "Xtarung.jpg",
                "judul" => "Tarung Sarung",
                "j_episode" => 1,
                "referensi" => "Netflix",
                "sutradara" => "Archie Hekagery",
                "tanggal" => Carbon::parse('2020-12-31'),
                "rating" => 59,
                "deskripsi" => "Film Tarung Sarung mengikuti kisah Deni Ruso (Panji Zoni), pemuda asal Jakarta yang berasal dari keluarga kaya raya. Deni adalah anak dari pemilik Ruso Corps, pengusaha properti terbesar di Indonesia. Ia menjalani kehidupan bergelimang materi sejak kecil hingga membuatnya kehilangan kepercayaan akan keberadaan Tuhan. Suatu ketika, Deni diminta untuk pulang ke kampung halaman ibunya di Makassar guna mengurus bisnis di sana. Keberadaan Deni di Makassar perlahan mengubah cara pandangnya terhadap hidup, terutama ketika ia bertemu dan jatuh cinta pada Tenri (Maizura). Tenri adalah gadis cantik asli Makassar yang juga seorang aktivis lingkungan. Deni berusaha mendekati Tenri, namun memilih menyembunyikan latar belakang keluarganya. Pasalnya, Tenri membenci Ruso Corps yang dinilai sebagai perusahaan kapitalis dan perusak lingkungan. Hubungan asmara mereka juga terhalang ketika ada pemuda asli Makassar bernama Sanrego (Cemal Faruk) yang juga menyukai Tenri. Tak hanya sekadar suka, tapi Sanrego juga memaksa Tenri menerima pinangannya. Mengetahui ada pria lain yang juga menyukai Tenri, Sanrego lantas menantang Deni untuk bertanding dalam turnamem Tarung Sarung. Pemenang turnamen inilah yang nantinya akan bisa meminang Tenri. Tarung Sarung adalah turnamen bela diri yang diadopsi dari tradisi dan budaya Suku Bugis di Makassar. Tradisi Tarung Sarung dulu kerap digunakan untuk menyelesaikan konflik antara dua orang yang tengah bermasalah. Menyadari dirinya tidak pandai bertarung, Deni kemudian menemui Pak Khalid (Yayan Ruhian), seorang penjaga masjid yang juga ahli bela diri, untuk melatihnya. Mampukah Deni memenangkan turnamen Tarung Sarung demi bisa meminang Tenri?",
                "id_kategori" => 7
            ]
        ];

        Film::insert($film);
        // $faker = Faker::create();

        // foreach (range(1, 100) as $index) {
        //     DB::table('films')->insert([
        //         'image' => $faker->imageUrl(), // Contoh untuk URL gambar
        //         'judul' => $faker->sentence,
        //         'penerbit' => $faker->company,
        //         'tanggal' => $faker->date,
        //         'rating' => $faker->randomFloat(1, 1, 5), // Angka acak antara 1 dan 5
        //         'deskripsi' => $faker->paragraph,
        //         'id_kategori' => $faker->numberBetween(1, 3),
        //     ]);
        // }
    }
}
