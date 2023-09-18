<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms_data
{
    public function generate_blog()
    {
        $arr_blog = array();
        $blog = new stdClass();

        if (time() > 1616173200 && time() <= 1617209999)
        {
            $blog->name = 'NORM SUMMER SEASON SALE. Discount 20% All Products plus free ongkos kirim ';
            $blog->category = 'Promo';
            $blog->date = '20 March 2021';
            $blog->image = 'https://www.norm.id/assets/images/main/blog/summer-season-sale.jpeg';
            $blog->url_name = 'summer-season-sale';
            $blog->subtitle = "Discount 15% All Products plus free ongkos kirim";
            $blog->description = '
                <p>Di penghujung semester 1 tahun ini, tentunya penampilan dan performa diri tetap harus ditingkatkan untuk mendapatkan kualitas hidup yang lebih baik. Sebagai brand yang memiliki misi untuk mensejahterakan hidup para pria, Norm akan terus mendukung kamu untuk mencapai <i>wellbeing goals</i> yang kamu inginkan. </p>
                <p>Norm menawarkan diskon <strong>20% all products plus free ongkos kirim up to Rp 15 ribu</strong> khusus pada promo <strong>Summer Season Sale</strong> periode <strong>20 - 31 Maret 2021</strong>. Hal ini merupakan bentuk dukungan Norm kepada pria untuk memiliki kesehatan dan penampilan prima demi kualitas hidup lebih baik. </p>
                <h2><b>Syarat & Ketentuan</b></h2>
                <p>
                    1. Promo berlaku pada tanggal 20 Maret 2021 (pukul <strong>00.00 WIB</strong>) – 31 Maret 2021 (pukul <strong>23:59 WIB</strong>)<br>
                    2. Promo diskon potongan ongkos kirim maksimal <strong>Rp 15 ribu (Khusus wilayah Luar Jabodetabek) dan free ongkos kirim untuk wilayah Jabodetabek</strong>.<br>
                    3. Diskon ongkos kirim hanya bisa mengurangi potongan ongkos kirim tidak mengurangi harga produk.<br>
                    4. Promo berlaku untuk semua pelanggan Norm baik pelanggan baru ataupun lama <br>
                    5. Potongan maksimal diskon adalah <strong>Rp 150 ribu</strong><br>
                    6. Diskon hanya berlaku pada <strong>1 (satu) kategori produk</strong> selama periode berlangsung<br>
                    7. Jika pembelian terdiri lebih dari satu kategori produk, maka diskon hanya berlaku pada produk dengan harga yang paling tinggi<br>
                    8. Promo berlaku untuk semua kategori produk yang harus melalui konsultasi dengan dokter di website dan telah mendapatkan rekomendasi produk dari dokter<br>
                    9. Promo berlaku untuk 1 (satu) kali transaksi dengan kode promo: <strong>NORM20</strong><br>
                    10. Promo ini tidak dapat digabungkan dengan promo lain yang tersedia di website Norm<br>
                    11. Promo berlaku untuk pemesanan melalui website ataupun pemesanan secara manual melalui customer service Norm<br>
                    12. Promo ini berlaku hanya untuk 100 pembeli pertama.
                    13. Contoh perhitungan diskon:<br>
                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 1</span><br>
                    - Customer Norm melakukan transaksi pertama untuk membeli produk 1 paket Complete Hair Loss Kit seharga Rp 469.000 dengan pengiriman ke wilayah Bogor dengan ongkos kirim Rp 12 ribu. Maka, ia berhak mendapatkan diskon Summer season sale sebesar 20% dengan menggunakan kode promo: <strong>NORM20</strong> serta mendapatkan free ongkos kirim sebesar 12 ribu.<br>
                    <strong>Potongan diskon yang ia terima yaitu Rp 93.800 dengan total harga produk menjadi Rp 375.200 plus free ongkos kirim/strong><br>
                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 2</span><br>
                    - Customer Norm melakukan transaksi pertama untuk membeli produk 2 paket Complete Hair Loss Kit seharga Rp 938.000 dengan pengiriman ke wilayah Makassar dengan ongkos kirim Rp 50 ribu. Maka, ia berhak mendapatkan diskon Summer season sale sebesar 20% dengan menggunakan kode promo: NORM20 serta mendapatkan potongan ongkos kirim sebesar Rp 15 ribu. <br>
                    <strong>Potongan diskon maksimal yang ia terima yaitu Rp 150.000 dan ongkos kirim menjadi Rp 35.000 dengan total harga produk menjadi Rp 788.000.</strong><br>
                    14. Norm secara sepihak dapat membatalkan pesanan apabila tidak sesuai dengan syarat & ketentuan yang berlaku dan/atau jika ditemukan adanya indikasi kecurangan pada masa promo ini.
                </p>
                <p>Jangan pernah lewatkan kesempatan untuk #JoinTheNorm dengan diskon khusus pada periode Summer Season Sale kali ini. Manfaatkan kesempatan ini untuk mencapai kesuksesan dengan konsistensi dan dedikasi, dedikasi penuh untuk pencapaian hasil yang maksimal. </p>
                <p><strong>#JoinTheNorm #DedicatedforMen</strong></p>
            ';
            $arr_blog[] = clone $blog;
        }

        $blog->name = 'Daging Kambing Meningkatkan Gairah Seksual. Mitos Atau Fakta?';
        $blog->category = 'Sex';
        $blog->date = '12 March 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/daging-kambing-meningkatkan-gairah-seksual.jpg';
        $blog->url_name = 'daging-kambing-meningkatkan-gairah-seksual';
        $blog->subtitle = "Katanya daging kambing bisa meningkatkan gairah seksual pria. Benarkah? Bagaimana efek daging kambing pada tubuh?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Afrodisiak atau makanan pembangkit gairah seksual sudah dimiliki tiap negara sejak zaman dahulu, termasuk Indonesia. Salah satu afrodisiak yang dipercaya masyarakat adalah daging dan torpedo kambing. Keduanya dipercaya bisa membuat pria lebih bergairah dan meningkatkan libido. Tapi, benarkah seperti itu adanya?</p>
                    <p>Perlu diketahui juga bahwa daging kambing memiliki tingkat kolesterol yang lebih rendah daripada daging sapi atau ayam. Namun, meski begitu, mengonsumsinya nggak boleh berlebihan karena tetap bisa membuat tekanan darah naik dan kolesterol.</p>
                </i>
            </div>

            <p>Banyak mitos yang beredar di tengah masyarakat, termasuk tentang manfaat daging kambing untuk meningkatkan gairah seksual. Anggapan itu sudah ada sejak zaman dahulu dan menjadi salah satu afrodisiak atau makanan untuk meningkatkan vitalitas pria. nggak sedikti yang mempercayai hal tersebut. </p>
            <p>Namun, yang menjadi pertanyaan adalah apakah betul bahwa daging kambing untuk meningkatkan gairah seksual? </p>
            <h2><b>Manfaat Daging Kambing Untuk Kesehatan Tubuh</b></h2>

            <table border="1" style="table-layout: fixed; width: 100%;">
                <tr>
                    <td style="text-align: center; font-weight: bold; padding: 7.5px;">Kandungan (/100 gr daging)</td>
                    <td style="text-align: center; font-weight: bold; padding: 7.5px;">Kambing</td>
                    <td style="text-align: center; font-weight: bold; padding: 7.5px;">Sapi</td>
                    <td style="text-align: center; font-weight: bold; padding: 7.5px;">Ayam</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Kalori</td>
                    <td style="padding: 7.5px; text-align: center;">109 kkal</td>
                    <td style="padding: 7.5px; text-align: center;">250 kkal</td>
                    <td style="padding: 7.5px; text-align: center;">237 kkal</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Lemak</td>
                    <td style="padding: 7.5px; text-align: center;">2,3 gr</td>
                    <td style="padding: 7.5px; text-align: center;">15 gr</td>
                    <td style="padding: 7.5px; text-align: center;">7.5 gr</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Kolesterol</td>
                    <td style="padding: 7.5px; text-align: center;">57 mg</td>
                    <td style="padding: 7.5px; text-align: center;">89 mg</td>
                    <td style="padding: 7.5px; text-align: center;">83 mg</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Protein Hewani</td>
                    <td style="padding: 7.5px; text-align: center;">20 gr</td>
                    <td style="padding: 7.5px; text-align: center;">25 gr</td>
                    <td style="padding: 7.5px; text-align: center;">30 gr</td>
                </tr>
            </table>
            <div style="margin-bottom: 15px;"><i>Sumber data : kompas.com</i></div>

            <p>Memang dibandingkan dengan daging merah lainnya, daging kambing memiliki lemak dan kolesterol yang lebih rendah. Tak hanya itu, daging kambing mengandung zat besi dan potassium yang mampu mengontrol kesehatan jantung.</p>
            <p>Namun, mengutip dari laman Kompas, menurut Journal of Food Protection, daging kambing mengandung beberapa patogen yang berbahaya bagi kesehatan sehingga harus diolah dengan tepat untuk meminimalisir risiko gangguan kesehatan yang timbul akibat mengonsumsi daging tersebut.</p>
            <p>Meski begitu, jika pengolahannya dilakukan dengan baik dan porsi yang tepat, daging kambing memiliki manfaat bagi tubuh, di antaranya adalah :</p>
            <p>
                <b>
                    1.  Mencegah kanker dan meminimalisir risiko peradangan<br>
                    2.  Kaya vitamin B yang mampu membantu tubuh membakar lemak<br>
                    3.  Mencegah anemia<br>
                    4.  Mengandung vitamin B12 untuk membantu meredakan stres<br>
                    5.  Mengandung kadar kalsium tinggi untuk kesehatan tulang<br>
                </b>
            </p>
            <p>Meski begitu, jika mengonsumsi daging kambing secara berlebihan, bisa menimbulkan kolesterol dan darah tinggi. </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/cabai-makanan-pembangkit-gairah-seksual/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/cabai-makanan-pembangkit-gairah-seksual.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Other</div>
                            <div class="title">Suka Pedas? Cabai Bisa Jadi Makanan Pembangkit Gairah Seksual</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Kabar gembira bagi penyuka pedas karena cabai merupakan salah satu afrodisiak untuk membangkitka gairah seksualmu.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Benarkah Daging Kambing Untuk Meningkatkan Gairah Seksual?</b></h2>
            <p>Makanan pembangkit gairah seksual memang sudah ada sejak zaman dahulu kala. Tiap negara punya afrodisiak yang berbeda, tergantung bagaimana nenek moyangnya memberikan adat. Di Indonesia, salah satu makanan yang masuk ke dalam daftar afrodisiak adalah daging kambing. </p>
            <p>Banyak yang berpikir bahwa dengan mengonsumsi daging kambing, gairah seksual bisa meningkat, bahkan bukan hanya daging kambingnya saja tapi juga torpedo atau testis kambing. </p>
            <p>Namun, pertanyaannya apakah benar daging kambing bisa meningkatkan gairah seksual pria? </p>
            <p>Menurut dr. Feni Nugraha, MARS, MGz, SpGK, hal itu adalah mitos. Daging kambing nggak meningkatkan libido, seperti yang diungkapkan laman World Today News. </p>
            <p>Sehubungan dengan hal itu, setelah mengonsumsi kambing, temperatur tubuh akan naik yang disebabkan oleh kandungan protein yang ada di dalam daging tersebut. Beberapa sumber protein hewani memiliki efek thermogenic atau efek panas. Hal itu karena energi yang dilepaskan ketika daging dicerna tubuh. Ia menambahkan bahwa daging kambing memiliki efek panas yang lebih tinggi dari daging merah lainnya. </p>
            <p>Selain itu, efek tersebut juga dipercaya disebabkan karena senyawa L-arginin atau asam amino yang dapat membantu melebarkan pembuluh darah.</p>
            <p>Meningkatnya aliran darah dari jantung ke testis bisa memicu produksi hormon testosteron lebih banyak. Nggak cuma itu, zat besi pada daging merah bisa membantu tubuh meningkatkan produksi testosteron pada tubuh. Testosteron pada pria berfungsi sebagai antioksidan yang bertugas menjaga produksi dan kualitas sperma tetap baik. </p>
            <p>Jadi, meningkatnya gairah seksual bukan semata-mata karena mengonsumsi daging atau torpedo kambing, tapi banyak faktor yang menjadi penyebabnya, termasuk psikologis.</p>
            <p>Jika ingin mengonsumsi daging kambing, maka konsumsi dengan porsi yang tepat, jangan berlebihan, dan masaklah dengan benar. Kamu bisa mengolahnya dengan sate, dibakar, atau dibuat sop.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Atasi Stres dan Insomnia Dengan Mindfulness';
        $blog->category = 'Other';
        $blog->date = '10 March 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/cara-mengatasi-stress-dan-insomnia.jpg';
        $blog->url_name = 'cara-mengatasi-stress-dan-insomnia';
        $blog->subtitle = "Hidup memang nggak jauh dari stres dan kadang bikin insomnia. Tapi, melalui mindfulness, kedua hal tersebut bisa diatasi.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Setiap manusia pasti punya masalah hidupnya masing-masing. Nggak jarang masalah-masalah tersebut menumpuk di kepala dan membuat stres. Ketika malam menjelang tidur pun mata sulit terpejam karena kepala selalu penuh dengan berbagai pertanyaan dan bayangan masalah yang ada.</p>
                    <p>Hal itu tentu akan mengganggu kehidupan, baik secara fisik maupun mental. Kurang istirahat dan stres berkepanjangan bisa membuat seseorang kesulitan mengendalikan emosi dan berakibat buruk pada kesehatan secara fisik. Cara mengatasi hal tersebut bisa dilakukan sendiri, salah satunya dengan mindfulness, yaitu kesadaran sepenuhnya akan diri sendiri.</p>
                </i>
            </div>

            <p>Pekerjaan yang menumpuk dan berbagai masalah hidup lainnya bisa menyebabkan seseorang menjadi stres dan kesulitan tidur saat malam hari. Ketika akan pergi tidur, berbagai pikiran muncul hingga tubuh terus terjaga padahal hari sudah berganti pagi sedangkan beberapa jam lagi kamu harus pergi bekerja.</p>
            <p>Hal itu tentu akan mengganggu produktivitas sehari-hari. Stres yang berkepanjangan juga akan menimbulkan hal yang lebih buruk, seperti fisik yang mudah sakit, kehilangan motivasi, insomnia parah, hingga depresi yang berujung pada keinginan untuk mengakhiri hidup.</p>
            <p>Hal seperti itu nggak bisa dibiarkan, harus segera diatasi. Jika kamu sudah mulai merasa stres dan terlebih menjadi mengalami sulit tidur atau insomnia, maka kamu bisa mulai melakukan mindfulness untuk meraih ketenangan hati dan pikiran. </p>
            <h2><b>Apa Itu Mindfulness dan Manfaatnya</b></h2>
            <p>Mindfulness merupakan kemampuan dasar manusia untuk hadir seutuhnya dan menyadari sepenuhnya di mana ia berada dan apa yang sedang dilakukan. </p>
            <p>Seringkali seseorang nggak mindful, tubuh ada di sini tapi pikiran berada di tempat lain, memikirkan hal-hal lain yang bukan sedang dilakukannya. Hal itu bisa menimbulkan kecemasan terhadap suatu hal, baik soal pekerjaan, keluarga, atau bahkan masa lalu.</p>
            <p>Mindfulness merupakan salah satu jenis meditasi yang membuat kamu fokus pada apa yang sedang dirasakan saat ini, tanpa interpretasi atau penilaian. Melakukan mindfulness mencakup metode pernapasan hingga praktik lain untuk membuat tubuh dan pikiran lebih rileks serta membantu mengurangi stres.  </p>
            <p>Ada tiga manfaat mindfulness untuk meningkatkan kesejahteraan hidup secara keseluruhan, yaitu :</p>
            <ol>
                <li><strong>Mindfulness meningkatkan wellbeing.</strong> Meningkatkan kesadaran secara keseluruhan untuk hidup yang lebih memuaskan. Sadar secara utuh di mana kamu berada saat ini bisa memberikan energi untuk aktivitasmu. Fokus pada apa yang sedang dilakukan di sini dan pada saat ini mampu mengurangi rasa cemas dan kekhawatiran yang akan berujung pada stres.</strong></li>
                <li><strong>Mindfulness meningkatkan kesehatan fisik.</strong> Jika wellbeing saja nggak cukup untuk menjadi sebuah hal yang didapatkan atas mindfulness, beberapa ilmuwan menemukan teknik mindful yang bisa meningkatkan kesehatan fisik. Manfaat mindful untuk kesehatan fisik di antaranya adalah membantu meredakan stres, menyehatkan jantung, menurunkan tekanan darah, mengurangi nyeri, hingga meningkatkan kualitas tidur.</strong></li>
                <li><strong>Mindfulness meningkatkan kesehatan mental.</strong> Beberapa tahun terakhir, para psikoterapis menjadikan meditasi mindfulness sebagai elemen penting untuk rangkaian treatment pada masalah, seperti depresi, penyalahgunaan obat terlarang, gangguan makan, konflik pasangan, gangguan kecemasan, hingga OCD. </strong></li>
            </ol>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/self-care-untuk-kesehatan-mental-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/self-care-untuk-kesehatan-mental-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Other</div>
                            <div class="title">Self-care Untuk Kesehatan Mental Pria</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Self-care atau merawat diri sendiri merupakan hal penting untuk meraih kebahagiaan dalam hidup. Berikut manfaat dan tipsnya untukmu', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Mindfulness Untuk Mengatasi Stres dan Insomnia</b></h2>
            <p>Gangguan tidur berkaitan erat dengan stres. Memikirkan masa lalu atau masa depan secara berlebihan bisa membuat seseorang mengalami insomnia karena kekhawatiran berlebihan terhadap masa depan atau ketakutan akan masa lalu. </p>
            <p>Hal itu akan membuat seseorang mengalami stres. Saat stres, tubuh melepaskan hormon adrenalin dan norepinefrin yang bisa menyebabkan detak jantung dan tekanan darah meningkat.</p>
            <p>Meditasi mindfulness merupakan teknik relaksasi yang bisa menenangkan pikiran dan tubuh sekaligus. Meditasi juga mampu mengontrol sistem saraf otonom yang berpengaruh pada pola tidur. Selain itu, hormon melatonin akan meningkat sehingga memicu rasa kantuk, menurunkan detak jantung dan tekanan darah. </p>
            <p>Saat melakukan meditasi mindfulness, kamu akan fokus pada pernapasan sehingga membawa perhatian dan fokus kamu pada masa sekarang. Membantu kamu mengurangi hal-hal negatif yang menyebabkan stres. Pikiran pun akan lebih tenang dari sebelumnya.</p>
            <p>Nggak hanya itu, meditasi juga dinilai mampu mengaktifkan gelombang gamma pada otak yang punya peran dalam proses belajar, konsentrasi, kesadaran, dan ingatan sehingga dipercaya bisa menghasilkan emosi positif yang menyebabkan perasaan bahagia. </p>
            <h2><b>Teknik Mindfulness</b></h2>
            <p>Meski banyak cara untuk mempraktikkan mindfulness, tapi tujuan dari teknik mindfulness tetap sama, yaitu meningkatkan kewaspadaan, fokus pada relaksasi dengan memperhatikan pikiran dan perasaan yang timbul tanpa ada penghakiman. Hal itu membuat pikiran kembali fokus pada saat ini. </p>
            <p>Meditasi mindfulness bisa dilakukan dengan pernapasan pada 10 hitungan, menahannya dalam 10 hitungan, kemudian membuangnya dalam 10 hitungan pula.</p>
            <p>Beberapa teknik mindfulness di antaranya adalah :</p>
            <ol>
                <li><strong>Body scan meditation.</strong> Bersandar dengan kaki lurus dan lengan di samping tubuh, telapak tangan menghadap ke atas. Fokuskan perhatian pada tubuh, dari kaki hingga kepala. Perhatikan sensasi yang muncul pada tubuh, emosi, atau pikiran yang muncul. Biarkan semua itu hadir kemudian lepaskan. </strong></li>
                <li><strong>Sitting meditation.</strong> Duduk dengan nyaman dan punggung lurus, telapak kaki menyentuh lantai dengan rata dan tangan berada di pangkuan. Bernafaslah melalui hidung, fokus pada nafas yang masuk dan keluar dari tubuh.</strong></li>
                <li><strong>Walking meditation.</strong> Temukan tempat yang tenang kemudian berjalan perlahan. Fokus pada langkah kaki dan sensasi selama kamu berjalan. Saat mencapai ujung jalan, putar arah dan kembali berjalan. Pertahankan fokus yang sudah kamu bangun di awal perjalanan. </strong></li>
            </ol>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Benarkah Rambut Rontok Pria Tanda Hormon Testosteron Rendah?';
        $blog->category = 'Hair Loss';
        $blog->date = '2 March 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/rambut-rontok-tanda-hormon-testosteron-rendah.jpg';
        $blog->url_name = 'rambut-rontok-tanda-hormon-testosteron-rendah';
        $blog->subtitle = "Pria bisa mengalami penurunan hormon testosteron dan menyebabkan gangguan kesehatan, salah satunya kerontokan. Benarkah?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Bukan hanya wanita yang bisa mengalami penurunan hormon saja saat menopause, pria pun bisa mengalami penurunan hormon testosteron dan hal itu bisa terjadi kapan saja. Padahal hormon memiliki fungsi penting dalam tubuh, menunjang kesehatan, dan juga membentuk tubuh pria.</p>
                    <p>Namun, jika pria sudah mengalami penurunan hormon, banyak gangguan kesehatan yang akan menyerang tubuh, salah satunya adalah kerontokan rambut. Apakah ada korelasi antara kadar testosteron rendah dengan rambut rontok?</p>
                </i>
            </div>

            <p>Hormon sangat berperan penting pada tubuh manusia, baik pria maupun wanita. Kamu mungkin pernah mengetahui ada orang yang mengalami gondong, gangguan menstruasi pada wanita, atau orang yang mengalami kencing manis. Penyakit-penyakit tersebut disebabkan karena gangguan hormon.</p>
            <p>Makanya, penting sekali peran hormon bagi tubuh manusia. Hormon dihasilkan di otak (hipotalamus dan hipofisis) dan luar otak (pankreas, adrenal, kelenjar tiroid, dan organ reproduksi). Organ-organ tersebut menghasilkan hormon dan masuk ke dalam aliran darah menuju tempatnya bekerja.</p>
            <h2><b>Manfaat Hormon Testosteron Bagi Tubuh Pria</b></h2>
            <p>Pada tubuh manusia, hormon sangat banyak jenisnya, termasuk hormon testosteron pada pria yang berperan sangat penting untuk kehidupan seorang pria hingga ia berusia lanjut.</p>
            <p>Sebagian besar hormon testosterone diproduksi di testis atas koordinasi dari hipotalamus dan kelenjar pituitari pada otak. Hormon ini juga dihasilkan oleh kelenjar adrenal yang berada di atas ginjal.</p>
            <p>Hormon testosteron bagi pria memiliki peran yang sangat penting, hampir di semua bagian tubuh. Berikut beberapa fungsi hormon testosteron pada tubuh pria :</p>
            <h3><strong>1.  Perkembangan sistem reproduksi</strong></h3>
            <p>Hormon testosteron memiliki peran penting dalam memproduksi sel sperma dan perkembangan alat reproduksi, seperti testis dan penis. </p>
            <p>Pada masa puber, hormon testosteron memengaruhi perubahan fisik dan psikologis. Perubahan tersebut meliputi hasrat seksual, perubahan suara, hingga munculnya rambut kemaluan. Selain itu, hormon ini juga memengaruhi tingkah laku, seperti sifat agresif, perilaku dominan, sifat kompetitif, dan sebagainya.  </p>
            <h3><strong>2.  Pertumbuhan tulang</strong></h3>
            <p>Hormon ini meningkatkan kepadatan tulang dan berpengaruh pada sumsum tulang untuk membentuk sel darah merah. </p>
            <h3><strong>3.  Pertumbuhan rambut dan kulit</strong></h3>
            <p>Saat puber, pria akan tumbuh kumis dan jenggot di wajah sebagai tanda bahwa ia telah menuju dewasa dan hormon testosteron yang bekerja. Selain itu, hormon ini juga memengaruhi pertumbuhan rambut di kemaluan, ketiak, kaki, serta dada. </p>

            <h2><b>Apakah Hormon Testosteron Rendah Menyebabkan Rambut Rontok?</b></h2>
            <p>Produksi testosteron akan menurun seiring pertambahan usia seseorang. Mengutip dari Healthline, berdasarkan data American Urological Association, menyebutkan bahwa 2 dari 10 pria dengan usia lebih dari 60 tahun mengalami penurunan testosteron. </p>
            <p>Kadar testosteron yang rendah bisa mengakibatkan gangguan kesehatan pada tubuh, salah satunya adalah kerontokan rambut. Seperti kita tahu bahwa pertumbuhan rambut dipengaruhi oleh hormon testosteron. Hormon tersebut memiliki peran penting dalam setiap siklus rambut. </p>
            <p>Kebotakan merupakan salah satu penuaan yang dialami oleh banyak pria. Meski faktor genetik juga menjadi salah satu penentu kerontokan rambut seseorang, namun pria dengan kadar testosteron yang rendah juga berpotensi untuk mengalami kerontokan rambut pada tubuh dan wajah mereka.</p>
            <p>Meski begitu, meningkatkan kadar testosteron nggak serta merta menjadikan rambut berhenti mengalami rontok. Tapi, kamu perlu mengatasinya dengan baik, seperti <a href="'. base_url() .'rambut-rontok/" style="text-decoration: underline;">berkonsultasi</a> dengan ahlinya untuk mendapatkan perawatan yang maksimal dan sesuai dengan kondisi yang dialami.</p>
            <p>Kadar testosteron yang rendah juga bisa menyebabkan gangguan kesehatan lain pada pria, di antaranya sebagai berikut :</p>
            <ol>
                <li>Penurunan dorongan seks atau libido</li>
                <li>Kesulitan ereksi dan volume air mani saat ejakulasi </li>
                <li>Penurunan energi dan menimbulkan kelelahan yang terus-menerus</li>
                <li>Tekanan darah rendah</li>
                <li>Meningkatkan lemak tubuh</li>
            </ol>
            <p>Nggak seperti wanita yang mengalami penurunan hormon saat menopause. Pada pria, penurunan hormon testosteron terjadi secara bertahap seiring berjalannya waktu. Pria dengan kdar testosteron di bawah 300 ng/dL akan mengalami gejala testosteron rendah seperti hal tersebut di atas. Maka, jika hal-hal tersebut kamu rasakan, maka sebaiknya periksakan diri ke dokter segera untuk mendapatkan penanganan yang tepat. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = '5 Jenis Olahraga Untuk Menjaga Kebugaran Tubuh ';
        $blog->category = 'Other';
        $blog->date = '26 February 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/olahraga-untuk-menjaga-kebugaran-tubuh.jpg';
        $blog->url_name = 'olahraga-untuk-menjaga-kebugaran-tubuh';
        $blog->subtitle = "Bukan hanya sehat, tubuh juga butuh kebugaran agar bisa melakukan aktivitas dengan maksimal. 5 jenis olahraga ini bisa jadi pilihan untuk tetap bugar. ";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Selama ini kita menganggap sehat saja cukup untuk bisa mendapatkan kesejahteraan hidup. Namun, nyatanya sehat saja nggak cukup untuk bikin kamu menjalani aktivitas dengan maksimal. Tubuh juga harus bugar agar tetap memiliki mood yang baik dan tentunya energi untuk beraktivitas.</p>
                    <p>Untuk mendapatkan tubuh yang bugar, kamu bisa melakukan olahraga yang bukan hanya baik untuk tubuh tapi juga mampu membangun mood dan menjaga kesehatan mental. Lakukan olahraga secara rutin untuk mendapatkan tubuh yang senantiasa sehat dan bugar. </p>
                </i>
            </div>

            <p>Tubuh yang sehat merupakan sebuah investasi jangka panjang harus terus dijaga. Hampir sebagian besar orang memiliki aktivitas padat sepanjang minggu. Namun, sepadat apapun aktivitas yang dijalankan, menyisihkan waktu untuk berolahraga adalah sebuah keharusan. </p>
            <p>Sama seperti saat berinvestasi, kamu nggak langsung merasakan manfaatnya, tapi setelah beberapa tahun ke depan. Pun sama dengan kesehatan tubuh, jika sekarang kamu nggak langsung merasakan manfaatnya, maka beberapa tahun ke depan kamu akan berterimakasih pada diri sendiri karena sudah menjalankan hidup sehat, kamu bisa menikmati hari tua tanpa penyakit dan tentunya hidup lebih bahagia. </p>
            <h2><b>Manfaat Aktivitas Fisik Bagi Kesehatan Tubuh</b></h2>
            <p>Untuk mendapatkan tubuh yang sehat, diperlukan aktivitas fisik yang rutin dan sesuai porsi. Jadi, jika kamu belum melakukan aktivitas fisik secara rutin, segera mulai kembali. Jika melakukannya secara rutin, maka kamu akan mendapatkan berbagai manfaat kesehatan bagi tubuh.</p>
            <p>Berikut beberapa manfaat aktivitas fisik bagi tubuh :</p>
            <h3><strong>1.  Hidup lebih lama</strong></h3>
            <p>Soal umur memang nggak ada yang bisa jamin, tapi setidaknya dengan olahraga maka kamu akan bisa membuat hidup lebih sehat dan jauh dari penyakit. Melansir dari SehatQ, beberapa penelitian mengemukakan bahwa aktivitas fisik bisa menurunkan risiko kematian akibat penyakit jantung dan kanker.</p>
            <h3><strong>2.  Menurunkan risiko penyakit</strong></h3>
            <p>Penyakit kardiovaskuler, diabetes tipe 2, metabolic syndrome, serta kanker bisa dihindari dengan melakukan aktivitas fisik rutin selama 150 menit per minggu. Selain itu, aktivitas fisik juga bisa meningkatkan kualitas hidup.</p>
            <h3><strong>3.  Menjaga berat badan</strong></h3>
            <p>Aktivitas fisik rutin selama 30 menit dalam seminggu bisa membantu menjaga berat badan ideal dan kesehatan secara menyeluruh.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/tips-menjaga-kesehatan-jantung/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/tips-menjaga-kesehatan-jantung.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Other</div>
                            <div class="title">SedTips Menjaga Kesehatan Jantung untuk Hidup Lebih Lama</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Semua tahu bahwa jantung berperan sangat penting untuk kehidupan. Ini tips untuk menjaganya tetap sehat.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h3><b>5 Jenis Olahraga Untuk Bantu Menjaga Kebugaran Tubuh</b></h3>
            <p>Agar bisa melakukan aktivitas sehari-hari dengan maksimal, tubuh bukan hanya perlu sehat saja, tapi juga bugar. Tubuh sehat belum tentu bugar, pasti ada saja keluhan, seperti pegal-pegal, nggak berenergi, dan sebagainya.</p>
            <p>Maka, untuk menjaga kebugaran tubuh, diperlukan aktivitas fisik yang dilakukan secara rutin, seperti olahraga. Berikut 5 jenis olahraga yang bisa menjadi pilihan untuk dilakukan secara rutin :</p>
            <h3><strong>1.  Jalan kaki</strong></h3>
            <p>Meski terdengar sepele, namun jalan kaki memberikan manfaat bagi tubuh dan otak. Jalan kaki bisa membantu menurunkan kolesterol, memperkuat tulang, serta mencegah penyakit jantung dan diabetes. </p>
            <p>Bukan cuma manfaat untuk fisik, jalan kaki juga terbukti bisa memperbaiki suasana hati, meningkatkan daya ingat, dan mencegah penyakit pikun saat tua nanti.   </p>
            <p>Lakukan jalan kaki setidaknya 30 menit selama empat hari. Atau kamu juga bisa menggunakan treadmill selama 30 menit. </p>
            <h3><strong>2.  Senam kegel</strong></h3>
            <p>Senam kegel baik untuk membantu menguatkan otot panggul yang menopang kandung kemih. Otot panggul yang kuat bisa menurunkan risiko inkontinensia urine, yaitu ketidakmampuan tubuh mengontrol keinginan buang air kecil.</p>
            <p>Manfaat senam kegel baik untuk pria dan wanita sangat bagus. Pada pria, senam kegel bisa mencegah ejakulasi dini dengan cara meningkatnya kemampuan untuk mengontrol ejakulasi.</p>
            <p>Cara melakukan senam kegel adalah seperti kamu sedang menahan buang air kecil. Tahan selama 2-3 detik kemudian lepaskan dan ulangi sampai 10 kali. Untuk mendapatkan hasil yang maksimal, lakukan senam kegel sebanyak 4-5 kali sehari. </p>
            <h3><strong>3.  Angkat beban</strong></h3>
            <p>Angkat beban membutuhkan kekuatan tangan sehingga manfaat olahraga yang satu ini adalah mengencangkan otot dan tubuh. Bukan hanya itu, angkat beban juga memberikan manfaat lain, seperti menurunkan berat badan dan meningkatkan kekuatan tulang. </p>
            <p>Kamu bisa melakukan angkat beban dengan menggunakan dumbel di rumah. Angkat beban juga mampu menguatkan otot punggung, bisep, dan trisep. </p>
            <h3><strong>4.  Berenang</strong></h3>
            <p>Renang bisa dikatakan sebagai salah satu olahraga yang sempurna. Saat berenang, seluruh tubuh bergerak dan hal itu baik juga untuk otot. </p>
            <p>Bagi penderita radang sendi (artritis), renang bisa menjadi pilihan untuk berolahraga. Manfaat renang bukan hanya untuk kesehatan fisik saja, tapi juga mental dan meningkatkan suasana hati. </p>
            <h3><strong>5.  Basket</strong></h3>
            <p>Hampir sama dengan renang, saat bermain basket, seluruh tubuh berkoordinasi dan bergerak saat melakukan basket. Manfaat yang didapatkan selain kebugaran adalah membantu meningkatkan kekuatan tulang dan kesehatan jantung. Secara mental, latihan basket bisa meningkatkan rasa percaya diri seseorang dan membangun hubungan sosial dengan baik saat kamu bermain dalam tim.  </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Tips Menjaga Kesehatan Jantung untuk Hidup Lebih Lama';
        $blog->category = 'Other';
        $blog->date = '23 February 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tips-menjaga-kesehatan-jantung.jpg';
        $blog->url_name = 'tips-menjaga-kesehatan-jantung';
        $blog->subtitle = "Semua tahu bahwa jantung berperan sangat penting untuk kehidupan. Ini tips untuk menjaganya tetap sehat.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Jantung merupakan organ vital yang menunjang kehidupan manusia. Fungsinya sangat penting untuk mengalirkan darah, oksigen, dan nutrisi ke seluruh tubuh. Perannya yang sangat penting tersebut mengharuskan setiap orang untuk menjaga kesehatannya. </p>
                    <p>Jika jantung mengalami gangguan, maka sirkulasi tubuh nggak akan bisa berjalan dengan baik. Selain itu, akan berisiko terkena penyakit jantung. Namun, meski gejalanya secara garis besar sama, penyakit jantung memiliki jenis masing-masing beserta gejala pengiringnya. Maka, penting untuk menjaga kesehatan jantung dengan gaya hidup sehat dan pola makan yang bergizi dan memenuhi kebutuhan nutrisi. </p>
                </i>
            </div>

            <p>Penyakit kardiovaskuler merupakan penyebab kematian terbesar di hampir seluruh dunia. Mengutip dari laman Kompas, berdasarkan data WHO, penyakit kardiovaskuler merenggut 17,7 juta jiwa per tahun. Setengah dari angka tersebut kematiannya disebabkan oleh penyakit jantung koroner dan stroke. Sedangkan penyakit jantung diperkirakan bakal terus meningkat mencapai 23,3 juta jiwa di tahun 2030.</p>
            <h2><b>Jenis dan Ciri-Ciri Penyakit Jantung</b></h2>
            <p>Penyakit jantung memiliki beragam jenis dengan gejala yang berbeda satu sama lain. Tiap jenis penyakit jantung punya risiko yang besar untuk menghentikan kinerja tubuh. </p>
            <p>Jenis dan gejala yang berbeda tersebut tergantung dari kondisi fisik seseorang. Meskipun berbeda, secara umum gejala penyakit jantung adalah nyeri dada, sesak napas, dan jantung berdebar-debar.</p>
            <h3><strong>1.  Penyakit jantung bawaan</strong></h3>
            <p>Sesuai dengan namanya, penyakit jantung bawaan ini tanda-tandanya sudah muncul sejak ia lahir. Gejala penyakit jantung bawaan pada bayi dan anak adalah kulit yang berwarna pucat atau kebiruan serta kaki, perut, dan sekitar mata bengkak.</p>
            <p>Saat masih bayi, anak sering mengalami sesak napas ketika sedang minum susu dan memiliki berat badan di bawah ukuran normal. Ketika tumbuh besar, anak akan mudah sesak napas dan kelelahan saat beraktivitas.</p>
            <h3><strong>2.  Penyakit jantung pada pembuluh darah</strong></h3>
            <p>Penyakit jantung di pembuluh darah ini disebabkan oleh aterosklerosis, penyempitan dan pengerasan pembuluh darah arteri akibat penumpukan plak pada dinding pembuluh darah.</p>
            <p>Kondisi tersebut menyebabkan penyakit jantung koroner dan serangan jantung. Ciri-ciri penyakit ini berbeda pada pria dan wanita. Pada pria, gejala berupa nyeri dada. Sedangkan pada wanita disertai dengan sesak napas, mual, dan kelelahan.</p>
            <p>
                Selain gejala tersebut, beberapa gejalanya adalah :<br>
                ●   Sakit atau mati rasa di kaki atau lengan<br>
                ●   Nyeri leher, rahang, tenggorokan, perut bagian atas, atau punggung<br>
            </p>
            <p>Penderita biasanya nggak menyadari hal tersebut sampai mengalami serangan jantung, angina (angin duduk), henti jantung, atau gagal jantung. </p>
            <h3><strong>3.  Penyakit jantung karena gangguan detak jantung (aritmia)</strong></h3>
            <p>Aritmia merupakan kondisi saat jantung mengalami gangguan detak jantung yang nggak normal. Detak jantung penderita aritmia bisa lebih cepat atau lebih lambat, bahkan nggak beraturan. Penderitanya pun akan mengalami sakit kepala, sesak napas, bahkan pingsan. </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/terapkan-tears-and-hope-untuk-mengatasi-stress/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/terapkan-tears-and-hope-untuk-mengatasi-stress.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Other</div>
                            <div class="title">Sedang Merasa Stres? Terapkan TEARS and HOPE untuk Mengatasinya</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Siapa pun bisa mengalami stres dan emosi negatif lainnya. Ini cara mengatasinya dan merasakan manfaatnya.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Tips Menjaga Kesehatan Jantung</b></h2>
            <p>Jantung merupakan organ tubuh yang bekerja tanpa henti saat seseorang masih hidup. Jantung berfungsi untuk memompa darah ke seluruh tubuh dan menjaga kelangsungan hidup. Maka dari itu, penting menjaga kesehatan jantung agar kamu bisa menikmati hidup lebih lama dan tubuh yang lebih sehat.</p>
            <h3><strong>1.  Menghentikan kebiasaan merokok</strong></h3>
            <p>Orang yang merokok lebih memiliki risiko tinggi untuk terkena penyakit jantung koroner. Orang yang berada di sekeliling perokok pun berisiko terkena penyakit jantung juga. </p>
            <p>Hal itu terjadi karena zat beracun pada rokok bisa menyebabkan kerusakan pada pembuluh darah jantung sehingga menghambat aliran darah pada jantung. Jantung pun terganggu fungsinya karena kekurangan oksigen dan nutrisi.</p>
            <h3><strong>2.  Batasi konsumsi makanan berkolesterol</strong></h3>
            <p>Menjaga tekanan darah sangat penting dilakukan agar jantung tetap sehat. Untuk menjaga tekanan darah tetap normal maka kendalikan asupan lemak jenuh dan kolesterol untuk menjaga kadar kolesterol tetap dalam batas normal. </p>
            <p>Batasi konsumsi makanan yang bisa meningkatkan kolesterol, yaitu daging berlemak, daging burger, krim, mentega, dan cokelat. Gantikan makan-makanan tersebut dengan makanan sehat berserat. </p>
            <h3><strong>3.  Mengelola Stres</strong></h3>
            <p>Hampir semua orang pernah mengalami stres sehingga hal itu menjadi wajar. Namun, masalahnya adalah respon seseorang terhadap stres. Saat dalam keadaan stres, tubuh akan memproduksi adrenalin secara berlebihan sehingga membuat jantung bekerja lebih keras dari biasanya. Di samping itu, tekanan darah pun meningkat. </p>
            <p>Stres yang berkepanjangan akan menyebabkan serangan jantung. Maka dari itu, untuk mencegah penyakit jantung yang disebabkan oleh stres, maka kamu harus pandai mengelola stres. Saat stres melanda, kamu bisa mengatasinya dengan berbagi cerita, liburan, atau melakukan hobi. </p>
            <h3><strong>4.  Olahraga secara rutin</strong></h3>
            <p>Aktif secara fisik dan olahraga rutin bisa meningkatkan kesehatan paru-paru dan jantung, menurunkan tingkat kolesterol, serta menjaga kesehatan tubuh secara keseluruhan. </p>
            <p>Kamu bisa melakukan olahraga seperti, jalan kaki, jogging, berenang, yoga, atau naik sepeda. Atur waktu selama 20 – 30 menit setiap harinya untuk berolahraga. </p>
            <h3><strong>5.  Konsumsi air putih, buah, dan sayur</strong></h3>
            <p>Air putih bisa membantu melancarkan aliran darah dan oksigen dalam tubuh. Bagi pengidap penyakit jantung, perlu konsultasi kepada dokter apakah perlu untuk membatasi jumlah cairan yang diminum.</p>
            <p>Selain itu, untuk pola makan, biasakan untuk mengonsumsi makanan yang memiliki tinggi serat untuk membantu menurunkan kolesterol dan tekanan darah. Kamu bisa mendapatkan serat dari brokoli, wortel, bayam, alpukat, apel, pisang, kacang merah, kacang kedelai. Untuk serat dari protein hewani, kamu bisa mengonsumsi daging tanpa lemak dan seafood.</p>
        ';
        $arr_blog[] = clone $blog;

        if (time() > 1613754000 && time() <= 1614531599)
        {
            $blog->name = 'NORM LOVE MONTH SALE. Discount 15% All Products plus free ongkos kirim ';
            $blog->category = 'Promo';
            $blog->date = '20 February 2021';
            $blog->image = 'https://www.norm.id/assets/images/main/blog/love-month-sale.jpg';
            $blog->url_name = 'love-month-sale';
            $blog->subtitle = "Discount 15% All Products plus free ongkos kirim";
            $blog->description = '
                <p>Dalam rangka bulan cinta di bulan februari, penampilan dan performa tetap harus ditingkatkan untuk mendapatkan kualitas hidup yang lebih baik. Sebagai brand yang memiliki misi untuk mensejahterakan hidup para pria, Norm akan terus mendukung kamu untuk mencapai <i>wellbeing goals</i> yang kamu inginkan. </p>
                <p>Norm menawarkan <strong>diskon 15% All Products plus free ongkos kirim up to Rp 15 ribu</strong> khusus pada tanggal <strong>20 - 28 Februari 2021</strong>. Hal ini merupakan bentuk dukungan Norm kepada pria untuk memiliki kesehatan dan penampilan prima demi kualitas hidup lebih baik. </p>
                <h2><b>Syarat & Ketentuan</b></h2>
                <p>
                    1. Promo berlaku pada tanggal 20 Februari 2021 (pukul <strong>00.00 WIB</strong>) – 28 Februari 2021 (pukul <strong>23:59 WIB</strong>)<br>
                    2. Promo diskon potongan ongkos kirim maksimal <strong>Rp 15 ribu (Khusus wilayah Luar Jabodetabek) dan free ongkos kirim untuk wilayah Jabodetabek</strong>.<br>
                    3. Diskon ongkos kirim hanya bisa mengurangi potongan ongkos kirim tidak mengurangi harga produk.<br>
                    4. Promo berlaku untuk semua pelanggan Norm baik pelanggan baru ataupun lama <br>
                    5. Potongan maksimal diskon adalah <strong>Rp 100 ribu</strong><br>
                    6. Diskon hanya berlaku pada <strong>1 (satu) kategori produk</strong> selama periode berlangsung<br>
                    7. Jika pembelian terdiri lebih dari satu kategori produk, maka diskon hanya berlaku pada produk dengan harga yang paling tinggi<br>
                    8. Promo berlaku untuk semua kategori produk yang harus melalui konsultasi dengan dokter di website dan telah mendapatkan rekomendasi produk dari dokter<br>
                    9. Promo berlaku untuk 1 (satu) kali transaksi dengan kode promo: <strong>LOVE15</strong><br>
                    10. Promo ini tidak dapat digabungkan dengan promo lain yang tersedia di website Norm<br>
                    11. Promo berlaku untuk pemesanan melalui website ataupun pemesanan secara manual melalui customer service Norm<br>
                    12. Promo ini berlaku hanya untuk 100 pembeli pertama.
                    13. Contoh perhitungan diskon:<br>
                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 1</span><br>
                    - - Customer Norm melakukan transaksi pertama untuk membeli produk 1 paket Complete Hair Loss Kit seharga Rp 469.000 dengan pengiriman ke wilayah Bogor dengan ongkos kirim Rp 12 ribu. Maka, ia berhak mendapatkan diskon love month sale sebesar 15% dengan menggunakan kode promo: <strong>LOVE15</strong> serta mendapatkan free ongkos kirim sebesar 12 ribu.<br>
                    <strong>Potongan diskon yang ia terima yaitu Rp 70.350 dengan total harga produk menjadi Rp 398.650 plus free ongkos kirim</strong><br>
                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 2</span><br>
                    -  -    Customer Norm melakukan transaksi pertama untuk membeli produk 2 paket Complete Hair Loss Kit seharga Rp 938.000 dengan pengiriman ke wilayah Makassar dengan ongkos kirim Rp 50 ribu. Maka, ia berhak mendapatkan diskon love month sale sebesar 15% dengan menggunakan kode promo: <strong>LOVE15</strong> serta mendapatkan potongan ongkos kirim sebesar Rp 15 ribu. <br>
                    <strong>Potongan diskon maksimal yang ia terima yaitu Rp 100.000 dan ongkos kirim menjadi Rp 35.000 dengan total harga produk menjadi Rp 838.000.</strong><br>
                    14. Norm secara sepihak dapat membatalkan pesanan apabila tidak sesuai dengan syarat & ketentuan yang berlaku dan/atau jika ditemukan adanya indikasi kecurangan pada masa promo ini.
                </p>
                <p>Jangan pernah lewatkan kesempatan untuk #JoinTheNorm dengan diskon khusus pada periode Love Month Sale kali ini. Manfaatkan kesempatan ini untuk mencapai kesuksesan dengan konsistensi dan dedikasi, dedikasi penuh untuk pencapaian hasil yang maksimal. </p>
                <p><strong>#JoinTheNorm #DedicatedforMen</strong></p>
            ';
            $arr_blog[] = clone $blog;
        }

        $blog->name = 'Self-care Untuk Kesehatan Mental Pria';
        $blog->category = 'Other';
        $blog->date = '17 February 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/self-care-untuk-kesehatan-mental-pria.jpg';
        $blog->url_name = 'self-care-untuk-kesehatan-mental-pria';
        $blog->subtitle = "Self-care atau merawat diri sendiri merupakan hal penting untuk meraih kebahagiaan dalam hidup. Berikut manfaat dan tipsnya untukmu.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Pernah merasakan penat dengan aktifitas sehari-hari? Atau mungkin justru nggak tau mau ke mana hidup akan dibawa? Dan sederet pertanyaan-pertanyaan lain soal kehidupan bisa sangat mengusik jika kamu nggak mengenali diri dengan baik, terlebih nggak tau apa yang kamu mau. </p>
                    <p>Itulah pentingnya setiap orang melakukan self-care. Self-care bukan hanya soal fisik saja tapi juga mental. Self-care untuk kesehatan tubuh dan jiwa secara menyeluruh penting adanya untuk meraih hidup yang lebih baik. </p>
                </i>
            </div>

            <p>Self-care merupakan upaya untuk fokus pada diri sendiri. Peduli pada diri sendiri bukan tanda keegoisan tapi justru sebuah bentuk penerimaan diri, rasa cinta pada diri sendiri. Hidup akan terasa lebih berat saat kamu bahkan tidak benar-benar mengenali siapa dirimu dan apa yang kamu inginkan.</p>
            <p>Semua manusia, baik pria maupun wanita pasti akan menemui hal-hal berat dalam hidup yang bisa menyebabkan stres, rasa cemas, hingga depresi. Pentingnya self-care adalah agar kamu bisa menata hidupmu menjadi lebih baik dan meminimalisir kemungkinan-kemungkinan tersebut. </p>
            <h2><b>Manfaat Self-care Untuk Kesehatan Mental </b></h2>
            <p>Bicara perawatan diri, bukan hanya soal tubuh secara fisik saja, tapi merawat mental pun sangat perlu agar hidup lebih baik dan tentunya lebih bahagia.</p>
            <p>Ada beberapa manfaat yang bisa kamu rasakan saat sudah melakukan self-care, terutama soal kesehatan mental. Berikut beberapa manfaatnya :</p>
            <h3><strong>1.  Membantu mengelola stres</strong></h3>
            <p>Kadang rutinitas sehari-hari bisa menimbulkan rasa bosan dan padatnya aktivitas bisa menimbulkan stres. Adanya self-care bisa menjaga suasana hati sehingga kamu bebas dari stres, kamu tetap memiliki energi untuk menjalani aktivitas sehari-hari. </p>
            <h3><strong>2.  Memberikan energi</strong></h3>
            <p>Setiap orang punya mimpi dan cara-cara untuk mewujudkan mimpi itu. Dalam perjalanan mewujudkan mimpi tersebut, kamu memerlukan gairah dan energi positif. Dengan self-care maka kamu akan memiliki energi lebih. </p>
            <h3><strong>3.  Membantu menemukan tujuan hidup</strong></h3>
            <p>Mengetahui tujuan hidupmu sangatlah penting. Begitu pula dengan apa yang kamu inginkan dalam hidup ini. Untuk mencapai hal tersebut, kamu bisa mulai dengan bersyukur atas apa yang telah kamu miliki. </p>
            <h3><strong>4.  Tubuh lebih rileks dan tenang</strong></h3>
            <p>Jika kamu meluangkan waktu untuk diri sendiri, seperti main game atau menikmati waktu luang dengan hal yang disukai, maka tubuhmu akan jauh lebih rileks dan tenang.  </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/tanda-pria-mengalami-burnout/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/tanda-pria-mengalami-burnout.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Other</div>
                            <div class="title">Pria Juga Bisa Mengalami Burnout. Kenali Tandanya!</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Lelah bekerja adalah hal wajar. Tapi jika sampai mengganggu kesehatan dan hidup, jangan-jangan itu tanda burnout', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Tips Menerapkan Self-care di Kehidupan Sehari-hari</b></h2>
            <h3><strong>1.  Tidur cukup</strong></h3>
            <p>Tidur sangat berperan penting untuk kesehatan dan mood kamu. Kurang tidur tentunya bisa menimbulkan masalah pada kesehatan dan juga emosi. Beberapa efek kurang tidur adalah mudah marah, sulit konsentrasi, hingga sakit kepala berkepanjangan. Pola tidur yang nggak teratur bisa disebabkan oleh berbagai macam, salah satunya adalah stres. </p>
            <p>Agar kamu memiliki pola tidur yang cukup, buat kebiasaan tidur pada jam yang sama setiap hari. Jangan minum kafein setelah jam 4 sore dan jauhkan gadget dan tv sejam sebelum tidur.</p>
            <h3><strong>2.  Olahraga setiap hari</strong></h3>
            <p>Olahraga bukan hanya menyehatkan secara fisik tapi juga dapat membangun mood menjadi lebih baik. Usahakan melakukan olahraga setiap hari. Bisa dimulai dengan olahraga ringan seperti jalan pagi setiap hari sebelum ke kantor atau yoga.</p>
            <h3><strong>3.  Berani berkata “tidak”</strong></h3>
            <p>Seringkali mengatakan kata “tidak” atau menolak permintaan orang lain merupakan hal yang sulit dilakukan sehingga lama kelamaan kamu menjadi kesulitan untuk menolak hal yang tidak kamu suka. Hal itu tentu nggak baik untuk kesehatan mental kamu. Kamu menjadi memaksakan diri untuk hal yang sebenarnya nggak kamu suka atau di luar batas kemampuanmu. </p>
            <p>Mulailah untuk belajar jujur terhadap diri sendiri dan jika kamu memang nggak bisa memenuhi undangan orang lain, maka katakan jika memang nggak bisa. Atau jika kamu merasa nggak mampu mengerjakan suatu hal, maka katakan bahwa kamu memang belum menguasai hal tersebut.</p>
            <h3><strong>4.  Lakukan hobi</strong></h3>
            <p>Waktu libur atau setelah beraktifitas seharian bisa kamu gunakan untuk melakukan hobi. Jika kamu hobi basket atau golf, bisa kamu lakukan saat akhir pekan untuk menyegarkan pikiran. Kamu jadi memiliki pikiran dan tubuh yang segar untuk kembali memulai aktivitas rutin.</p>
            <h3><strong>5.  Perhatikan penampilan</strong></h3>
            <p>Penampilan merupakan salah satu hal penting yang bisa membawamu pada kesuksesan. Maka, penting untuk merawat tubuh dan menjaga penampilan. Untuk mendapatkan penampilan yang prima, selalu jaga kebersihan wajah, konsumsi makanan bernutrisi, dan olahraga. Jika kamu memiliki kendala dalam hal penampilan, <a href="'. base_url() .'" style="text-decoration: underline;">konsultasi</a> dengan dokter ahli Norm dan dapatkan penampilan serta performa yang prima. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Inilah Alasan Mengapa Wajah Pria Mudah Berminyak dan Berjerawat';
        $blog->category = 'Acne';
        $blog->date = '12 February 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/alasan-wajah-pria-berminyak-dan-berjerawat.jpg';
        $blog->url_name = 'alasan-wajah-pria-berminyak-dan-berjerawat';
        $blog->subtitle = "Wajah pria cenderung lebih mudah berminyak dan berjerawat. Inilah alasan mengapa wajah pria lebih mudah berminyak dan berjerawat.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Kebanyakan pria memiliki kulit wajah yang berminyak dan berjerawat. Ternyata ada alasan khusus yang bisa menyebabkan hal itu terjadi. Kelenjar yang dimiliki pria di bawah kulit berbeda dengan wanita sehingga pria cenderung memiliki wajah yang lebih berminyak dan mudah berjerawat.</p>
                    <p>Namun, memiliki wajah berminyak juga nggak selamanya buruk karena ternyata wajah berminyak bisa memberikan berbagai keuntungan bagi kulit. Meski begitu, menjaga kebersihan dan kesehatan wajah tetap penting untuk mendapatkan penampilan yang lebih baik dan performa yang menunjang.</p>
                </i>
            </div>

            <p>Wajah yang mengkilap dan berjerawat tentunya sangat mengganggu penampilan. Belum lagi wajah menjadi terlihat kusam dan nggak segar, makin membuat penampilan jadi jauh dari kata sempurna. Padahal penampilan merupakan salah satu kunci untuk mendapatkan kesuksesan, seperti pekerjaan, relasi bisnis, hingga kehidupan pribadi.</p>
            <p>Iklim tropis yang banyak mendapat cahaya matahari bisa menyebabkan kulit wajah bermasalah. Ditambah dengan asap, debu, kotoran, dan keringat menyebabkan kulit wajah mengkilap dan berakhir dengan kemunculan jerawat.</p>
            <h2><b>Benefit Memiliki Kulit Wajah berminyak</b></h2>
            <p>Kulit wajah berminyak dan berjerawat memang akan mengganggu penampilan. Tapi, ternyata dibalik kekurangan wajah berminyak, terdapat beberapa keuntungan untuk kulit. Berikut beberapa manfaat yang dirasakan pria dengan kulit wajah berminyak :</p>
            <h3><strong>1.  Kulit lebih awet muda </strong></h3>
            <p>Kulit berminyak memproduksi sebum lebih banyak sehingga membuat kulit lebih kuat dan elastis, hal yang nggak dimiliki oleh kulit kering. Hal itu berlangsung lama sehingga kulitmu lebih sehat sampai tua dan nggak mudah mengalami keriput.</p>
            <h3><strong>2.  Kelembaban kulit terjaga</strong></h3>
            <p>Sebum yang dihasilkan oleh kelenjar sebasea memberikan kelembaban pada kulit sehingga kulit tetap terhidrasi. Selain itu, tingkat keasaman (pH) kulit lebih baik. Keseimbangan pH tersebut menghasilkan asam oleat yang lebih tebal sehingga melindungi kulit dari kuman dan bakteri.  </p>
            <h3><strong></strong></h3>
            <p>3.   Kulit lebih lembut</p>
            <p>Pemilik kulit kering akan merasakan sedikit kasar pada kulit, berbeda dengan kamu yang memiliki kulit berminyak. Sebum membuat kulit lebih lembut karena hidrasinya terjaga maka maka proses regenerasinya lebih optimal.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/mengenal-sebum-penyebab-jerawat-pada-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/penyebab-jerawat-pria-1.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Acne</div>
                            <div class="title">Mengenal Sebum Penyebab Jerawat Pada Wajah Pria</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Wajah berminyak bikin kulit terlihat mengkilap dan jadi gampang jerawatan. Minyak pada wajah sebetulnya punya peran penting untuk menjaga kelembaban. Tapi, kalau produksinya berlebihan, justru menimbulkan masalah. Jadi sebetulnya minyak di wajah itu apa sih?', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>5 Alasan Mengapa Wajah Pria Mudah Berminyak dan Berjerawat</b></h2>
            <p>Minyak pada wajah berasal dari kelenjar yang disebut dengan kelenjar sebasea. Kelenjar tersebut bertugas melindungi kulit dengan minyak alami yang disebut dengan sebum. </p>
            <p>Pada pria, kelenjar tersebut lebih besar dan memproduksi sebum lebih banyak dibanding wanita. Hal itu berarti kulit wajah berminyak dan berjerawat merupakan masalah yang umum bagi pria. </p>
            <p>Namun, seperti yang sudah dipaparkan sebelumnya, beruntungnya memiliki kulit berminyak adalah kulit lebih awet muda meski saat remaja mungkin kamu mengalami masalah jerawat.</p>
            <p>Selain hal di atas, apa saja yang bisa menyebabkan pria mengalami wajah berminyak dan berjerawat? Berikut ulasannya.</p>
            <h3><strong>1.  DHT</strong></h3>
            <p>Hormon DHT atau dihidrotestosteron merupakan hormon yang dihasilkan dari testosteron. Hormon DHT bukan hanya menyebabkan rambut rontok, tapi juga kulit wajah berminyak. DHT menjadi penyebab utama produksi minyak secara berlebih pada wajah. </p>
            <p>Minyak yang diproduksi secara berlebihan ini jika nggak dibersihkan dengan baik, maka akan bercampur dengan kotoran, debu, dan bakteri kemudian menyumbat pori-pori dan mengakibatkan jerawat.   </p>
            <h3><strong>2.  genetik</strong></h3>
            <p>Nggak bisa dipungkiri bahwa genetik merupakan penyebab kulitmu juga bermasalah. Jika orang tua kamu memiliki riwayat kulit wajah berminyak dan berjerawat, maka kamu pun akan mengalami hal yang sama. </p>
            <h3><strong>3.  Cuaca</strong></h3>
            <p>Hidup di daerah yang tropis dan mendapatkan cahaya matahari lebih banyak akan membuat kulit wajah mudah terpapar sinar UV secara langsung. Hal itu menyebabkan wajah mudah berminyak dan berjerawat. Makanya, penting sekali menggunakan sunscreen untuk melindungi kulit wajah dari pengaruh buruk sinar matahari.</p>
            <h3><strong>4.  Pola Makan</strong></h3>
            <p>What you put into your body will show on the outside. Istilah tersebut cocok untuk menggambarkan pola makan yang menjadi penyebab masalah kulit wajah. Jika kamu memiliki wajah yang mudah berjerawat, maka penting sekali untuk mengatur pola makan dan menghindari makanan-makanan yang menyebabkan wajah kelebihan minyak dan jerawat, seperti susu, mentega, keju, susu cokelat, dan lain sebagainya.</p>
            <h3><strong>5.  Gaya Hidup</strong></h3>
            <p>Gaya hidup yang nggak sehat turut menyumbang masalah pada wajah, seperti sering begadang, nggak rutin membersihkan wajah, hingga stres. Mulailah untuk melakukan gaya hidup sehat dengan tidur teratur, mengelola stres dengan baik, dan olahraga secara rutin.</p>
            <h3><strong>Tips Merawat Kulit Berminyak dan Berjerawat</strong></h3>
            <p>Meski memiliki keuntungan tersendiri dari kulit berminyak, tapi merawat kulit tetap diperlukan karena jika nggak dirawat, kulit wajah akan bermasalah dan bisa membuat penampilan buruk. </p>
            <p>Berikut beberapa tips untuk merawat kulit wajah yang berminyak dan berjerawat :</p>
            <h3><strong>1.  Rutin mencuci wajah</strong></h3>
            <p>Cuci wajah dua kali sehari saat pagi dan malam hari setelah beraktifitas. Pun setelah kamu berolahraga. Pilih pembersih wajah yang lembut dan mengandung salicylic acid.</p>
            <h3><strong>2.  Hindari pembersih wajah yang mengandung scrub</strong></h3>
            <p>Pembersih wajah yang mengandung scrub akan memperburuk kondisi jerawat. Maka, pilih yang lembut dan bisa mengontrol kelebihan minyak pada wajah.</p>
            <h3><strong>3.  Gunakan pelembab</strong></h3>
            <p>Jangan salah, wajah berminyak dan berjerawat pun tetap membutuhkan pelembab untuk menjaganya tetap terhidrasi dan bebas minyak berlebih. Gunakan pelembab yang mengandung Benzoyl Peroxide yang efektif mengatasi jerawat. Kamu bisa menggunakan krim anti jerawat Norm melalui <a href="'. base_url() .'rambut-rontok/" style="text-decoration: underline;">konsultasi</a> dengan dokter ahli Norm. formulanya disesuaikan dengan jenis kulitmu.  </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Tips Merawat Rambut Panjang Pria';
        $blog->category = 'Hair Loss';
        $blog->date = '06 February 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tips-merawat-rambut-panjang.jpg';
        $blog->url_name = 'tips-merawat-rambut-panjang';
        $blog->subtitle = "Punya rambut panjang atau ingin memanjangkan rambut? Ini tipsnya untuk kamu.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Memiliki rambut panjang bagi sebagain besar pria terasa rumit meski mereka menginginkannya. Kerumitan itu meliputi perawatannya yang menurut mereka sangat makan waktu, harus memakai berbagai produk perawatan yang bagus, dan lain sebagainya. Tips berikut bisa membantu kamu untuk memiliki rmabut panjang dan merawatnya tanpa membuatmu repot.</p>
                </i>
            </div>

            <p>Sebagian besar pria menyukai gaya rambut panjang, baik itu melewati telinga ataupun lebih panjang dari itu. Tahun ini tren rambut panjang kembali hype. Tapi, memiliki rambut panjang perawatannya nggak bisa sembarang karena jika nggak dirawat dengan baik rambut akan menjadi lepek, mudah rontok, dan bercabang.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/tips-cepat-menumbuhkan-rambut-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/tips-cepat-menumbuhkan-rambut-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Hair Loss</div>
                            <div class="title">Tips Menumbuhkan Rambut Pria Secara Cepat</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Mau rambut tumbuh lebih cepat? Berikut tips untuk membuat rambut pria tumbuh lebih cepat.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>3 Gaya Rambut Panjang Pria 2021</b></h2>
            <p>Rambut panjang bisa membuat pria tampil lebih trendy dan cool. Berbagai style dan potongan untuk gaya rambut panjang pria berikut bisa menjadi inspirasi untuk kamu yang ingin memanjangkan rambut.</p>
            <h3><strong>1.  Man Bun</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/manbun.jpg" style=" width: 250px; max-width: 100%;">
                <div><i>Image source : pinterest.com</i></div>
            </p>
            <p>Gaya rambut man bun sangat membantu pria yang memiliki rambut panjang. Bagi kamu yang memiliki rambut dengan panjang lebih dari 15cm bisa mengaplikasikan gaya man bun dengan cara mencepol rambut ke belakang menjadi sanggul. Gaya rambut ini juga masih bisa kamu aplikasikan untuk acara formal. </p>
            <h3><strong>2.  Long Curly</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/longcurly.jpg" style=" width: 250px; max-width: 100%;">
                <div><i>Image source : pinterest.com</i></div>
            </p>
            <p>Kamu yang memiliki rambut keriting juga tetap bisa memanjangkan rambut. Mungkin sebagain besar mereka yang memiliki rambut keriting akan mengeluhkan rambutnya yang sulit diatur. Namun, kamu tetap bisa memiliki rmabut panjang meski berambut keriting asalkan memiliki beberapa produk rambut untuk merawatnya agar tetap lembut dan mudah diatur.  </p>
            <h3><strong>3.  Shoulder Length</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/shoulderlength.jpg" style=" width: 250px; max-width: 100%;">
                <div><i>Image source : menhairstylesnow.com</i></div>
            </p>
            <p>Gaya rambut ini bisa menjadi pilihan bagi kamu yang ingin memiliki rambut dengan panjang medium hingga panjang. Rambut ini bisa dibiarkan begitu saja secara alami. Kamu bisa menatanya dengan membelahnya di samping untuk tampilan yang santai namun gaya. </p>
            <p>Perawatan rambut ini cenderung lebih mudah. Kamu juga bisa membuat gaya man bun untuk penampilan sehari-hari agar tetap rapi.  </p>
            <h2><b>Tips Merawat Rambut Panjang</b></h2>
            <p>Meski menginginkan rambut panjang, nggak jarang pria masih tetap merasa khawatir dengan kondisi rambutnya. Terlebih jika memiliki rambut panjang berarti harus melakukan usaha yang lebih rumit dalam merawatnya dibanding rambut pendek.</p>
            <p>Kamu nggak perlu khawatir karena jenis rambut apa pun, baik tebal, tipis, keriting atau lurus tetap bisa memiliki gaya rambut panjang. Perawatan yang tepat bisa membantu rambut tampil lebih indah dan mudah diatur.</p>
            <p>Kamu bisa coba beberapa tips berikut untuk menjaga rambut panjang tetap sehat dan mudah diatur tanpa perlu terlalu banyak usaha.</p>
            <h3><strong>1.  Rutin keramas dengan benar</strong></h3>
            <p>Jika saat kamu memiliki rambut pendek, kamu bisa keramas dua hari sekali atau lebih dari itu. Tapi, saat kamu sudah memiliki rambut melewati telinga atau bahu, maka disarankan untuk keramas setiap hari, apalagi jika rambut kamu berminyak.</p>
            <h3><strong>2.  Pilih sisir bergigi jarang</strong></h3>
            <p>Saat memiliki rambut pendek, mungkin kamu terhitung jarang menggunakan sisir atau bahkan menyisir dengan jari. Tapi, saat memiliki rambut panjang, kamu wajib memiliki sisir, namun pilih sisir bergigi jarang untuk menata rambut. </p>
            <p>Hal penting yang harus kamu perhatikan adalah jangan menyisir saat rambut masih basah karena bisa membuat rambut rontok. Sisir rambut saat sudah hampir kering.</p>
            <h3><strong>3.  Jangan keringkan rambut dengan menggosoknya</strong></h3>
            <p>Setelah keramas, keringkan rambut secara alami. Jangan menggosoknya terlalu kuat, cukup gosok perlahan untuk mengurangi tetesan airnya kemudian setelahnya keringkan secara alami. Hal itu untuk menjaga rambut agar nggak bercabang dan rapuh.</p>
            <h3><strong>4.  Trimming secara teratur</strong></h3>
            <p>Memiliki rambut panjang nggak perlu membuat kamu harus terus memotong rambut. Cukup trim rambut atau potong bagian ujung-ujung rambut saja untuk menghilangkan bagian yang bercabang.</p>
            <h3><strong>5.  Jangan mengikat rambut terlalu kencang</strong></h3>
            <p>Saat mengikat rambut, usahakan jangan terlalu kencang. Ikat agak longgar agar rambut nggak rontok dan rapuh. Biarkan rambut tergerai selama beberapa jam dalam sehari agar rambut tetap sehat. Jangan lupakan saat tidur tidak mengikat rambut.</p>
            <p>Apa pun jenis rambut kamu dan gaya rambut yang dimiliki, hal yang paling penting adalah kesehatan rambut. Jika kamu mengalami rambut rontok, maka atasi segera dengan <a href="'. base_url() .'rambut-rontok/" style="text-decoration: underline;">Norm</a> yang efektif mengatasi rambut rontok dan memicu pertumbuhan rambut agar lebat kembali. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Morning Sex : Manfaat dan Posisi Seks Untuk Dieksplorasi';
        $blog->category = 'Sex';
        $blog->date = '02 February 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/manfaat-dan-posisi-morning-sex.jpg';
        $blog->url_name = 'manfaat-dan-posisi-morning-sex';
        $blog->subtitle = "Mau mencoba morning sex esok pagi? Simak manfaat dan posisi yang tepat untuk kamu dan pasangan.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Morning sex? Yuckss…!</p>
                    <p>Mungkin kamu menganggap morning sex itu agak menjijikan karena kamu dan pasangan baru banget bangun tidur, belum gosok gigi, dan terlebih belum mandi. Jika hal-hal itu yang membuatmu menolak morning sex, maka kamu belum tahu tips dan manfaatnya. Kamu wajib baca artikel ini untuk ketahui manfaat dan tipsnya agar morning sex kamu lebih panas.</p>
                </i>
            </div>

            <p>Banyak orang yang lebih menyukai seks di malam hari dibanding pagi. Hal itu karena seks malam bisa lebih lama dan bebas melakukan eksplorasi. Memang benar adanya, tapi nyatanya seks di pagi hari juga punya manfaat yang nggak kalah dari seks di malam hari.</p>
            <p>Kamu bisa melakukan seks di pagi hari jauh sebelum melakukan aktifitas lain. Selain itu, kamu dan pasangan juga semakin dekat dan tak sabar untuk bertemu saat kalian sudah berpisah untuk melakukan pekerjaan masing-masing.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/teknik-foreplay-yang-menggairahkan/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/teknik-foreplay-yang-menggairahkan.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">5 Teknik Foreplay untuk Seks yang Bergairah</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Ini rahasia foreplay yang bikin seks kamu makin bergairah dan memuaskan.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Manfaat Morning Sex </b></h2>
            <p>Jika kamu selama ini memiliki kebiasaan meminum secangkir kopi di pagi hari dan merasakan manfaat yang nyata di tubuhmu, maka kamu memiliki alternatif lain untuk menambah energi di pagi hari, yaitu morning sex. </p>
            <p>Memang nggak banyak orang yang melakukan seks di pagi hari. Jika kamu salah satunya, maka kamu bisa mulai dengan mengenal manfaat seks di pagi hari berikut ini :</p>
            <h3><strong>1.  Tubuh lebih prima</strong></h3>
            <p>Saat bangun pagi, tubuh memiliki simpanan energi lebih banyak dibanding saat malam hari. Maka dari itu, pagi hari merupakan waktu yang sempurna untuk melakukan seks.</p>
            <p>Kamu dan pasangan bisa memulainya dengan memberikan pelukan hangat di pagi hari dan mengucapkan “selamat pagi” untuk membangun mood.</p>
            <h3><strong>2.  Lebih tahan lama</strong></h3>
            <p>Saat pagi hari, level esterogen dan testosteron berada pada titik tinggi. Tubuh masih segar dan tingkat hormon testosteron pria sedang tinggi sehingga bisa membuat pria lebih tahan lama dalam berhubungan. Jadi, jika kamu dan pasangan ingin berhubungan lebih lama, bisa mencobanya di pagi hari, tubuh masih segar dan tingkat hormon yang sedang tinggi merupakan perpaduan yang pas untuk mencapai seks yang memuaskan.</p>
            <h3><strong>3.  Memulai pagi dengan bahagia</strong></h3>
            <p>Morning sex melepas hormon endorfin yang bisa meredakan sakit dan membantu meningkatkan mood. Seks di pagi hari membuat kamu merasa lebih rileks dan merasa bahagia setelah kamu mendapatkan klimaks. </p>
            <h3><strong>4.  Meningkatkan sistem imun</strong></h3>
            <p>Seperti vitamin C yang bisa meningkatkan sistem imun, begitu juga dengan morning sex. Melansir dari <i>Healthline</i>, seks bisa meningkatkan sistem imun dengan memicu tubuh menghasilkan pertahanan alami dari bakteri, virus, dan kuman. </p>
            <h3><strong>5.  Wajah tampak lebih muda dan segar</strong></h3>
            <p>Seks merupakan kunci untuk membuat wajah tampak lebih muda. Hal itu karena seks melepaskan hormon oksitosin, beta-endorfin, dan molekul anti-inflamasi sehingga bisa membuat kamu lebih bahagia dan memiliki wajah yang lebih bersinar. </p>
            <p>Menurut laporan <i>BBC News</i> dalam <i>Healthline</i>, melakukan hubungan seks tiga kali seminggu bisa membuat seseorang tampak lebih muda daripada mereka yang jarang melakukannya. </p>
            <h2><b>Morning Sex Hacks Agar Lebih Nyaman</b></h2>
            <p>Mungkin kamu masih merasa ragu meski sudah mengetahui manfaat morning sex. Keraguan itu seputar bagaimana dengan nafas yang nggak segar, belum mandi, hingga nggak sempat waktu.</p>
            <p>Tips berikut ini bisa kamu coba untuk melakukan seks pagi hari dengan nyaman.</p>
            <h3><strong>1.  Atur waktu</strong></h3>
            <p>Jika kamu merasa takut terlambat berangkat kerja atau melakukan aktifitas lain, maka set alarm 20 menit dari jadwal bangun pagi kamu yang biasa. Jadi, kamu nggak perlu terlambat melakukan rutinitas pagi lainnya karena morning sex.</p>
            <h3><strong>2.  Kissable area : bagian tubuh</strong></h3>
            <p>Merasa khawatir dengan nafas yang kurang segar tapi ingin melakukan foreplay atau stimulasi dengan berciuman? Kamu bisa tetap melakukannya pada bagian tubuh selain bibir, seperti leher, belakang telinga, dada, atau perut. Hal itu juga bisa meningkatkan mood untuk bercinta.</p>
            <h3><strong>3.  Di bawah selimut</strong></h3>
            <p>Jika terbiasa melakukan hubungan seks di bawah lampu temaram atau kegelapan, kamu bisa mengakali seks pagi hari dengan melakukannya di bawah selimut. Kamu juga bisa menutup tirai jendela sehingga cahaya yang masuk sangat sedikit dan nggak mengganggu aktifitasmu.</p>
            <h2><b>Posisi Seks Untuk Menghangatkan Pagimu</b></h2>
            <p>Seks bisa selalu tepat dan nikmat jika kamu bisa memilih posisi yang nyaman bagi kamu dan pasangan. Berikut beberapa posisi seks yang bisa dieksplorasi, bahkan ada yang tanpa saling berhadapan dengan pasangan. </p>
            <h3><strong>1.  Spooning</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/spooning.png" style=" width: 250px; max-width: 100%;">
                <div><i>Image source : promescent.com</i></div>
            </p>
            <p>Posisi ini memungkinkan kamu dan pasangan merasa nyaman tapi juga tetap mesra. Kamu dan pasangan berbaring miring menghadap ke arah yang sama dengan kamu di belakang pasangan. Kamu bisa memberikan stimulasi dengan tangan atau mencium leher bagian belakang pasangan sementara kamu melakukan penetrasi dari belakang.</p>

            <h3><strong>2.  Doggy style</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/doggystyle.jpg" style=" width: 250px; max-width: 100%;">
                <div><i>Image source : bustle</i></div>
            </p>
            <p>Everyone love doggy style. Doggy style merupakan posisi klasik untuk mendapatkan penetrasi yang lebih dalam dan juga memberikan kesenangan antar pasangan. Kamu bisa meminta pasangan untuk posisi merangkak dan kamu melakukan penetrasi dari belakang. Posisi ini juga bisa ditambah variasi dengan pasangan pasangan meringkuk di atas tempat tidur dan kamu pada posisi berdiri.</p>

            <h3><strong>3.  Side 69</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/side69.png" style=" width: 250px; max-width: 100%;">
                <div><i>Image source : Men’s Health</i></div>
            </p>
            <p>Posisi ini bisa menjadi pilihan untuk memberikan kepuasan pada pasangan tanpa harus bertatap wajah. kamu dan pasangan berbaring saling menghadap dengan posisi miring. Wajah kamu berada di dekat kaki pasangan dan sebaliknya dengan pasangan.</p>

            <h3><strong>4.  Hot wrap</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/hotwrap.jpg" style=" width: 250px; max-width: 100%;">
                <div><i>Image source : Men’s Health</i></div>
            </p>
            <p>Posisi ini mungkin terdengar asing. Gaya ini mirip dengan Reverse cowgirl hanya saja punggung pasangan kamu menempel dengan tubuhmu. Kamu bisa memegang pinggulnya dan merangsang klitorisnya dengan jari atau bahkan vibrator. </p>

            <h3><strong>5.  Ankle choker</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/anklechocker.jpg" style=" width: 250px; max-width: 100%;">
                <div><i>Image source : bustle</i></div>
            </p>
            <p>Posisi ini dianggap sebagai salah satu gerakan terpanas. Pasangan pada posisi terlentang dengan kaki terangkat ke udara. Kemudian kamu berlutut menghadap pasangan dengan mengalungkan pergelangan kaki pasangan di leher. Kamu bisa menahan pergelangan kaki dengan tangan. Kamu juga bisa menempelkan bagian paha pasangan ke perutnya.</p>
            <p>Apa pun posisi dan bagaimana kamu dan pasangan saling mengeksplorasi, pastikan kenyamanan bagi kalian berdua. Bicarakan jika memang ada hal yang kurang pas karena seks tanpa komunikasi nggak akan memberikan kepuasan yang diinginkan. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Sedang Merasa Stres? Terapkan TEARS and HOPE untuk Mengatasinya';
        $blog->category = 'Other';
        $blog->date = '27 January 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/terapkan-tears-and-hope-untuk-mengatasi-stress.jpg';
        $blog->url_name = 'terapkan-tears-and-hope-untuk-mengatasi-stress';
        $blog->subtitle = "Siapa pun bisa mengalami stres dan emosi negatif lainnya. Ini cara mengatasinya dan merasakan manfaatnya.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Setiap orang pasti pernah mengalami stres dan merasakan berbagai emosi di dalam hidupnya. Emosi itu ada yang positif, ada juga yang negatif. Perasaan positif memang sangat menyenangkan, tapi ternyata emosi negatif juga perlu untuk dimiliki agar kita bisa mengetahui bahwa ada hal yang nggak baik yang harus segera diubah.</p>
                </i>
            </div>

            <p>Emosi yang muncul pada diri seseorang berasal dari pikiran. Kebahagiaan, rasa damai dan nyaman, serta perasaan menyenangkan lainnya muncul dari pikiran yang positif. Sedangkan, perasaan marah, benci, kesal, hingga stres merupakan perasaan yang muncul dari pikiran negatif.</p>
            <p>Semua perasaan positif maupun negatif pasti dirasakan oleh semua orang. Perasaan-perasaan itu bersumber dari pola pikir setiap orang. Jika merasakan perasaan negatif, berarti pikiran yang sedang muncul adalah pikiran yang negatif pula. Begitu pula sebaliknya. </p>
            <h2><b>Macam-macam Emosi Pada Manusia</b></h2>
            <p>Emosi bukan mengartikan rasa marah saja. Mungkin masih banyak orang yang menganggap emosi merupakan representasi rasa marah. Padahal emosi beragam jenisnya dan semua itu membuat manusia menjadi utuh. Emosi juga memiliki peran besar untuk membentuk persepsi dan tindakan.</p>
            <p>Menurut Paul Eckman, seorang Psikologis dari Amerika, ada enam macam emosi yang dimiliki oleh manusia, yaitu :</p>
            <h3><strong>1.  Emosi bahagia</strong></h3>
            <p>Bahagia adalah perasaan yang pasti dicari setiap orang, menjadi tujuan hidup yang terus diupayakan. Perasaan bahagia ditandai dengan senang, ceria, tawa, kepuasan, hingga kesejahteraan. Perasaan bahagia juga bisa membantu seseorang merasa rileks dan membantu memulihkan rasa sakit. Nggak hanya itu, rasa bahagia juga bisa menjauhkan seseorang dari penyakit. </p>
            <h3><strong>2.  Emosi sedih</strong></h3>
            <p>Perasaan yang muncul saat keadaan membuat seseorang merasa down, seperti kehilangan seseorang atau sesuatu. Kesedihan muncul bersamaan dengan wajah yang murung, kecewa, dan duka. Ketika merasa sedih, kamu tentu akan malas untuk beraktifitas dan kehilangan selera makan. </p>
            <h3><strong>3.  Emosi terkejut</strong></h3>
            <p>Emosi yang muncul saat kamu mendengar berita yang nggak menyenangkan atau melebihi ekspektasimu. Emosi yang muncul dari rasa terkejut bisa menjadi negatif, positif, dan juga netral. Saat merasa terkejut, kamu akan mengalami kenaikan adrenalin kemudian memutuskan untuk melawan atau melarikan diri. </p>
            <h3><strong>4.  Emosi jijik</strong></h3>
            <p>Emosi yang muncul karena adanya rasa, pemandangan, atau bau yang nggak menyenangkan. Rasa jijik juga bisa muncul terhadap perilaku seseorang yang dianggap menyimpang. </p>
            <h3><strong>5.  Emosi takut</strong></h3>
            <p>Rasa takut bisa dikaitkan dengan kecemasan, misalnya kecemasan sosial, yaitu ketakutan terhadap situasi sosial dan menganggap ia merasa nggak aman berada pada situasi tersebut. Rasa takut muncul untuk melindungi diri dan mempersiapkan diri untuk melawannya atau melarikan diri dari keadaan tersebut.</p>
            <h3><strong>6.  Emosi marah</strong></h3>
            <p>Marah bisa mengarah pada hal positif atau negatif tergantung dari seseorang. Jika diekspresikan dengan baik, maka rasa marah bisa menunjukkan emosinya terhadap orang lain tanpa merugikan. Namun, jika diekspresikan dnegan berlebihan bisa sangat berbahaya. </p>
            <h2><b>TEARS dan HOPE Untuk Mengatur Emosi Negatif</b></h2>
            <p>Sebetulnya emosi negatif juga penting untuk dirasakan, bukan langsung dihindari. Norm memahami bahwa sangat nggak nyaman memiliki emosi negatif. Namun, emosi negatif juga memiliki beberapa keuntungan bagi diri kita. Beberapa keuntungannya di anataranya adalah :</p>
            <ul>
                <li><strong>Rasa marah dan cemas</strong> untuk menunjukkan ada sesuatu yang harus diubah</li>
                <li><strong>Rasa takut</strong> bisa meningkatkan keamanan diri</li>
                <li><strong>Rasa benci</strong> bisa mengubah suatu hubungan dan memberikan jarak</li>
            </ul>
            <p>Pada dasarnya emosi negatif yang muncul bisa menjadi tanda ada sesuatu yang harus diubah. Hal itu juga bisa menjadi motivasi untuk mengembangkan diri menjadi lebih baik.</p>
            <p>Mengutip dari Verywellmind, untuk mengatasi emosi negatif, kamu bisa mencoba menerapkan pola TEARS dan HOPE untuk mengatasinya dan nggak membuat emosi negatif semakin memperburuk keadaan.</p>
            <ul>
                <li><strong>T : Teach and Learn.</strong> Hal ini bertujuan untuk meningkatkan self-awareness dan pengetahuan tentang diri sendiri. Teknik ini berguna saat kamu merasakan kecewa dan mengerti kenapa hal itu terjadi dan bisa kamu rasakan efeknya pada tubuhmu.</li>
                <li><strong>E : Express.</strong> Untuk mengaktifkan pengalaman sensorik dan mendorong kamu lebih terbuka dengan penerimaan diri atas perasaan yang muncul.</li>
                <li><strong>A : Accept.</strong> Menerima bisa menjadi keuntungan bagi kamu untuk berdamai dengan diri sendiri dan menoleransi atas rasa yang ada.</li>
                <li><strong>R : Re-appraise and re-framing.</strong> Menilai kembali perasaan yang muncul dan mengubah sudut pandang atas perasaanmu dan mengubah sudut pandang dari sisi yang berbeda. </li>
                <li><strong>S : Social Support.</strong> Dukungan sosial merupakan hal paling penting, sebegai pelengkap atas semua usaha yang dilakukan oleh diri sendiri. </li>
            </ul>
            <p>Selain itu, kamu bisa meningkatkan kebahagiaan diri dan manajemen emosi yang lebih baik dengan teknik HOPE.</p>
            <ul>
                <li><strong>H : Hedonic wellbeing / happiness.</strong> Kamu bisa menambahkan pengalaman positif dalam hidupmu, fokus pada hal yang menyenangkan dan usaha untuk meraih kesuksesan. </li>
                <li><strong>O : Observe and attend to.</strong> Cobalah melakukan observasi pada dirimu dengan Latihan maindfullness dan jangan menghakimi segala hal yang ada di hidupmu. Biarkan semua berjalan sebagaimana adanya, kamu hanya perlu untuk terus berusaha memanajemen hidupmu. </li>
                <li><strong>P : Physiology and behavioral changes.</strong> Lakukan perubahan pada fisik dan tingkah laku. Kamu bisa mulai dengan relaksasi, juga latihan pernapasan. Dengan begitu kamu mulai bisa mengontrol dirimu sendiri. </li>
                <li><strong>E : Eudaimonia</strong> yang artinya Ini memperjuangkan tujuan dalam hidup dengan dirimu yang sesungguhnya.</li>
            </ul>
        ';
        $arr_blog[] = clone $blog;

        if (time() > 1611421200 && time () < 1612026000)
        {
            $blog->name = 'Wellbeing Week Sale. Discount 15% all products plus free ongkos kirim';
            $blog->category = 'Promo';
            $blog->date = '24 january 2021';
            $blog->image = 'https://www.norm.id/assets/images/main/blog/wellbeing-week.jpg';
            $blog->url_name = 'wellbeing-week-promo';
            $blog->subtitle = "Wellbeing Week Sale. Discount 15% all products plus free ongkos kirim";
            $blog->description = '
                <p>Personal care bukan hanya tentang menjaga penampilan dan performa saja, tapi juga upaya untuk mendapatkan kualitas hidup yang lebih baik. Maka dari itu, Norm mendukung perubahan kamu ke arah yang lebih baik. </p>
                <p>Melalui <strong>>wellbeing week sale</strong> ini, kamu akan mendapatkan <strong>diskon 15%</strong> all products dan <strong>free ongkos kirim</strong> untuk wilayah Jabodetabek dan <strong>diskon ongkos kirim (maks. Rp 30 ribu)</strong> untuk wilayah luar jabodetabek pada periode promo</p>
                <h2><b>Syarat & Ketentuan</b></h2>
                <p>
                    1. Promo berlaku pada tanggal 24 Januari (pukul <strong>00.00 WIB</strong>) – 31 Januari (pukul <strong>23:59 WIB</strong>)<br>
                    2. Promo ini berlaku untuk semua kategori produk yang harus melalui konsultasi dengan dokter di website dan telah mendapatkan rekomendasi produk dari dokter<br>
                    3. Promo <strong>diskon ongkos kirim</strong> maksimal Rp 30 ribu (Khusus wilayah Luar Jabodetabek) dan <strong>free ongkos kirim</strong> untuk wilayah Jabodetabek.<br>
                    4. Promo free dan diskon ongkos kirim hanya mengurangi harga ongkos kirim tanpa mengurangi harga produk.<br>
                    5. Promo berlaku untuk semua pelanggan Norm baik pelanggan baru ataupun lama <br>
                    6. Potongan maksimal diskon harga produk adalah <strong>Rp 100 ribu</strong><br>
                    7. Diskon hanya berlaku pada <strong>1 (satu) kategori produk</strong> selama periode berlangsung<br>
                    8. Jika pembelian terdiri lebih dari satu kategori produk, maka diskon hanya berlaku pada produk dengan harga yang paling tinggi<br>
                    9. Promo berlaku untuk 1 (satu) kali transaksi dengan kode promo: <strong>NORM15</strong><br>
                    10. Promo ini <strong>tidak dapat digabungkan</strong> dengan promo lain yang tersedia di website Norm<br>
                    11. Promo berlaku untuk pemesanan melalui website ataupun pemesanan secara manual melalui customer service Norm<br>
                    12. Promo berlaku hanya untuk 100 pembeli pertama.<br>
                    13. Contoh perhitungan diskon:<br>
                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 1</span><br>
                    -   Customer Norm melakukan transaksi pertama untuk membeli produk 1 paket Complete Hair Loss Kit seharga Rp 469.000 dengan pengiriman ke wilayah Bogor dimana ongkos kirimnya sebesar Rp 12 ribu. Maka, ia berhak mendapatkan diskon sebesar 15% dan mendapatkan free ongkos kirim sebesar Rp 12 ribu.<br>
                    <strong>Potongan diskon harga produk yang ia terima sebesar Rp 70.350 dengan free ongkos kirim. Total harga produk menjadi Rp 398.650</strong><br>

                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 2</span><br>
                    -   Customer Norm melakukan transaksi pertama untuk membeli produk 2 paket Complete Hair Loss Kit seharga Rp 938.000 dengan pengiriman ke wilayah bogor dimana ongkos kirimnya sebesar Rp 12 ribu . Maka, ia berhak mendapatkan diskon sebesar 15% dan mendapatkan free ongkos kirim sebesar 12 ribu.<br>
                    <strong>Potongan diskon maksimal yang ia terima yaitu Rp 100.000 dengan free ongkos kirim. Total harga produk menjadi Rp 838.000.</strong><br>

                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 3</span><br>
                    -   Customer Norm melakukan transaksi pertama untuk membeli produk 2 paket Complete Hair Loss Kit seharga Rp 938.000 dengan pengiriman ke wilayah Makassar dimana ongkos kirimnya sebesar Rp 50 ribu. Maka, ia berhak mendapatkan diskon sebesar 15% dan mendapatkan free ongkos kirim sebesar Rp 30 ribu. <br>.
                    <strong>Potongan diskon maksimal yang ia terima yaitu Rp 100.000 dengan potongan diskon ongkos kirim sebesar Rp 30.000. Total harga produk menjadi Rp 838.000.</strong><br>

                    14. Norm secara sepihak dapat membatalkan pesanan apabila tidak sesuai dengan syarat & ketentuan yang berlaku dan/atau jika ditemukan adanya indikasi kecurangan pada masa promo ini. <br>
                </p>
                <p>Jangan pernah lewatkan kesempatan untuk #JoinTheNorm pada wellbeing week sale di waktu yang sangat terbatas. Manfaatkan kesempatan ini untuk mencapai kesuksesan dengan konsistensi dan dedikasi, dedikasi penuh untuk pencapaian hasil yang maksimal demi performa yang lebih baik.</p>
                <p><strong>#JoinTheNorm #DedicatedforMen</strong></p>
            ';
            $arr_blog[] = clone $blog;
        }

        $blog->name = 'Pria Juga Bisa Mengalami Burnout. Kenali Tandanya!';
        $blog->category = 'Other';
        $blog->date = '22 January 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tanda-pria-mengalami-burnout.jpg';
        $blog->url_name = 'tanda-pria-mengalami-burnout';
        $blog->subtitle = "Lelah bekerja adalah hal wajar. Tapi jika sampai mengganggu kesehatan dan hidup, jangan-jangan itu tanda burnout.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Merasa lelah dan jenuh merupakan hal yang pasti dirasakan setiap orang. Rasa itu timbul bisa disebabkan oleh berbagai macam faktor dan lini kehidupan, mulai dari pekerjaan, kehidupan pribadi, hingga kehidupan sosial.</p>
                    <p>Kelelahan kronis pada pekerjaan atau yang disebut burnout bisa terjadi pada siapa saja, termasuk para pria. Namun, sayangnya burnout seringnya nggak disadari oleh pria. Waspada dan kenali tandanya karena jika dibiarkan akan menimbulkan maalah yang lebih serius. </p>
                </i>
            </div>

            <p><i>Burnout</i> merupakan kondisi di mana seseorang mengalami stres yang berat karena pekerjaan. Stres di tempat kerja bikin pria kehilangan semangat kerja dan dalam jangka panjang dapat mengancam kesehatan fisik maupun mental. </p>
            <p>Pekerjaan memang nggak pernah benar-benar menyenangkan. Suatu saat, ada hal-hal yang membuat pria menjadi merasa terbebani dan nggak bisa menikmati pekerjaannya lagi. Dalam hidup ini memang semua hal memiliki risiko masing-masing untuk semua hal yang dijalani. </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/pengaruh-stigma-pada-kesehatan-mental-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/pengaruh-stigma-pada-kesehatan-mental-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Other</div>
                            <div class="title">Kesehatan Mental Pria: Antara Stigma Sosial dan Pengaruhnya Pada Hidupmu</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Stigma tentang kesehatan mental pria memang masih kuat di tengah masyarakat. Tapi, kamu sebagai pria nggak bisa begitu saja tenggelam dalam stigma itu.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Penyebab Burnout</b></h2>
            <p>Terkadang pekerjaan memang terasa sangat menyebalkan. Hal seperti itu memang tak terhindarkan, semua hal pasti akan berada pada fase up and down. Ada banyak penyebab yang membuat pekerjaan terasa nggak menyenangkan lagi. Terkadang rasa lelah hanya dianggap efek wajar atas sebuah pekerjaan. Namun, lelah seperti apa yang harus dipertimbangkan.</p>
            <p>Jika kamu selama dua minggu lebih mengalami rasa lelah saat akan berangkat kerja, kehilangan motivasi pekerjaan dan sebagainya, bisa jadi kamu sedang mengalami burnout.</p>
            <p>Menurut <i>Men’s Health</i>, pada Mei 2019, <i>World Health Organization</i> menambahkan “burnout” pada Klasifikasi Penyakit Internasional, yaitu sindrom akibat stres kronis di tempat kerja yang belum berhasil dikelola dengan baik. </p>
            <p>Berikut adalah penyebab burnout yang perlu kamu ketahui :</p>
            <ol>
                <li><strong>Ketidakmampuan mengontrol apa yang terjadi pada pekerjaan </strong></li>
                <li><strong>Dinamika atau budaya pekerjaan yang buruk </strong></li>
                <li><strong><i>Work life balance</i> yang nggak berjalan baik </strong></li>
                <li><strong>Pekerjaan yang terlalu menumpuk dan nggak punya waktu untuk berlibur </strong></li>
                <li><strong>Kurangnya dukungan sosial dari orang terdekat </strong></li>
            </ol>
            <p>Itu hanya beberapa dari sekian banyak penyebab yang dialami seseorang karena setiap orang bisa saja memiliki penyebab yang berbeda. Namun, ada baiknya jika kamu merasa pekerjaan mengambil porsi yang sangat besar di hidupmu, maka saatnya untuk istirahat sejenak dan ambil waktu berlibur. </p>
            <h2><b>Tanda Pria Mengalami Burnout</b></h2>
            <p>Kelelahan dalam bekerja memang wajar karena pikiran dan fisik terus bekerja. Namun, kelelahan yang dibiarkan akan semakin parah dan bisa menimbulkan burnout. </p>
            <p>Sebagian besar pria mungkin nggak sadar jika sedang dalam fase burnout. Beberapa ciri-ciri berikut merupakan tanda seseorang sedang mengalami burnout karena pekerjaan :</p>
            <ol>
                <li><strong>Penurunan performa pekerjaan </strong></li>
                <li><strong>Membenci pekerjaan yang sedang dijalani </strong></li>
                <li><strong>Mudah tersinggung </strong></li>
                <li><strong>Sering absen kerja karena sakit atau bolos </strong></li>
                <li><strong>Perubahan kebiasaan atau perilaku kea rah negatif </strong></li>
            </ol>
            <h2><b>Tips Untuk Mengatasi Burnout</b></h2>
            <p>Burnout bisa sangat mengganggu performa kerja dan juga mengancam kesehatan fisik juga mental. Maka dari itu, ada baiknya saat mengalami tanda-tanda burnout, kamu segera mengatasinya dengan melakukan hal-hal berikut ini :</p>
            <h3><strong>1.  Perbaiki pola tidur</strong></h3>
            <p>Kelelahan yang dibiarkan akan terus bertambah. Tidur bisa menjadi salah satu solusi untuk mengatasinya. Tidur yang cukup akan membuat energi bertambah dan pikiran lebih segar sehingga bisa memberikan aura positif bagi kamu. </p>
            <p>Atur jadwal tidur yang cukup dan pastikan tidur berkualitas yang ditandai dengan rasa segar saat bangun pagi, nyenyak tanpa gangguan, serta nyaman.</p>
            <h3><strong>2.  Tetapkan prioritas</strong></h3>
            <p>Buatlah skala prioritas atas pekerjaan kamu, mulai dari yang paling penting hingga yang tingkat prioritasnya rendah. Berdasarkan prioritas tersebut, maka kamu bisa memulai untuk mengerjakan secara teratur, sedikit demi sedikit, namun tepat sasaran tanpa membuatmu stres.</p>
            <h3><strong>3.  Rutin olahraga</strong></h3>
            <p>Olahraga terbukti mempunyai banyak manfaat, nggak cuma bikin badan sehat, juga menyegarkan pikiran. Rutin olahraga bisa membantu kamu meningkatkan daya tahan tubuh dan mood juga. Olahraga pagi di sekitar rumah bisa membantu menyegarkan sebelum kamu berangkat kerja. Kamu bisa mulai dengan berjalan atau lari pagi sambil menikmati udara segar dan matahari pagi. </p>
            <h3><strong>4.  Bicarakan dengan orang terdekat</strong></h3>
            <p>Ketika pikiran dipenuhi dengan berbagai hal negatif dan tubuh terasa penat, kamu bisa membicarakan dengan orang terdekat, seperti pasangan atau sahabat, bahkan orang tua. Berbagi apa yang kamu raakan bisa membuat perasaanmu jauh lebih ringan dan mereka pun bisa membantu memberikan solusi atas masalah yang kamu miliki.</p>
            <p>Selain itu, di tempat kerja juga kamu bisa membicarakannya dengan atasan atau HRD untuk mendapatkan solusi atas masalah yang kamu alami. Jangan biarkan masalah terus menumpuk tanpa kamu atasi. Jika kamu nggak bicara maka mereka nggak akan tahu kesulitan seperti apa yang sedang kamu alami. </p>
            <h3><strong>5.  Jaga keseimbangan hidup</strong></h3>
            <p>Jangan memaksakan diri untuk menyelesaikan semua pekerjaan sekaligus. Atur waktu dan porsi yang tepat untuk pekerjaanmu dan kehidupan di luar pekerjaan. Tetapkan waktumu untuk berlibur atau menikmati waktu santai dengan pasangan atau keluarga. Waktunya bekerja, maka kamu harus bekerja, tapi tetap adakan waktu untuk dirimu sendiri. </p>
            <p>Jika sudah berbagai cara kamu lakukan masih merasakan kelelahan yang parah dan motivasi hidup yang turun drastic, maka saatnya kamu menemui dokter ahli untuk berkonsultasi. Apabila pekerjaan merupakan sumber masalah yang sudah nggak bisa kamu selesaikan maka pikirkan kembali apa tujuan dan keinginanmu dari pekerjaan tersebut. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Ini Manfaat Seks Untuk Kulit Wajah Pria';
        $blog->category = 'Acne';
        $blog->date = '19 January 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/manfaat-seks-untuk-kulit-wajah.jpg';
        $blog->url_name = 'manfaat-seks-untuk-kulit-wajah';
        $blog->subtitle = "Manfaat seks untuk kesehatan kulit wajah, bukan hanya membuatnya lebih cerah tapi juga mengatasi jerawat.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Mungkin sebagian besar orang menganggap seks sebagai kegiatan fisik yang mampu membuat hubungan antar pasangan lebih intim. Tapi, nyatanya manfaat seks lebih dari itu. Bukan hanya membuat tubuh lebih sehat, juga kulit wajah yang lebih muda dan bisa membantu mengatasi jerawat. </p>
                </i>
            </div>

            <p>Kamu pasti udah nggak asing dengan kutipan “an apple a day keeps the doctor away” kan? Ternyata bukan cuma apel aja yang bikin kamu keep away dengan dokter karena menurut Dr. Gloria G. Bramer, seorang seksologis dari Georgia, Amerika Serikat, orgasme merupakan salah satu hal yang memberikan manfaat kesehatan bagi tubuh.  </p>
            <p>Salah satu manfaat yang bisa diperoleh dari seks adalah untuk kesehatan kulit wajah. Pria dewasa masih memiliki beberapa masalah kulit, seperti berminyak, kusam, hingga berjerawat. Jadi, jerawat bukan hanya dimiliki oleh remaja yang sedang puber saja, tapi pria dewasa juga bisa mengalaminya.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/masturbasi-sebabkan-jerawat-pada-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/masturbasi-sebabkan-jerawat-pada-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Acne</div>
                            <div class="title">Apakah Masturbasi Sebabkan Jerawat Pada Pria?</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Banyak mitos yang beredar bahwa masturbasi bisa menyebabkan jerawat. Mitos terjadi karena kemunculan jerawat yang hampir bersamaan waktu dengan pria melakukan masturbasi. Namun, apakah mitos tersebut benar adanya?', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Alasan Kenapa Wajah Pria Sering Bermasalah</b></h2>
            <p>Pria cenderung cuek dalam urusan penampilan. Tapi, hal itu nggak bisa jadi alasan untuk cuek juga dengan kebersihan wajah karena wajah yang sehat dan bebas masalah dimulai dari kebersihannya. Salah satu masalah yang sering timbul karena nggak menjaga kebersihan wajah adalah berjerawat. </p>
            <p>Mungkin sebagian dari kamu juga masih penasaran kenapa di usia yang sudah dewasa masih bisa mengalami masalah wajah berjerawat. Sedangkan yang kamu tahu jerawat hanya muncul pada wajah pria yang masih dalam masa puber. </p>
            <p>Hal-hal berikut menjadi alasan mengapa sampai dewasa, pria kerap mengalami masalah pada kulit wajah :</p>
            <h3><strong>1.  Kelebihan karbohidrat</strong></h3>
            <p>Tanpa disadari, mengonsumsi karbohidrat sehari-hari bisa menjadi pemicu munculnya masalah bagi kulit. Mengutip dari Men’s Health, kata Dr. Adnan Nasir, penasihat dermatologi, makanan dengan karbohidrat olahan seperti roti bisa memicu minyak berlebih pada wajah. minyak yang berlebihan itu akan membuat kulit jadi menumpuk sebum, belum lagi jika kamu nggak membersihakan wajah secara benar, maka wajah akan menjadi berinyak, berjerawat, dan kusam. </p>
            <h3><strong>2.  Nggak menggunakan moisturizer</strong></h3>
            <p>Moisturizer penting banget buat kulit untuk menjaga kelembaban kulit. Kulit yang terjaga kelembabannya akan lebih sehat dan nggak mudah berjerawat. Maka jika kamu melupakan pelembab dalam rangkaian perawatan wajahmu, bersiaplah untuk wajah yang bermasalah. Pilih pelembab yang sesuai dengan jenis kulitmu dan pakailah setelah mencuci wajah dengan bersih. </p>
            <h3><strong>3.  Genetik</strong></h3>
            <p>Ini merupakan hal yang nggak bisa dihindari tapi bukan berarti nggak bisa diatasi. Kamu bisa berkonsultasi dengan dokter ahli untuk mengatasi masalahmu. Lakukan juga upaya untuk membantu menjaga kulit dengan hidup sehat, olahraga, dan makan sehat. </p>
            <h2><b>Manfaat Seks Untuk Kulit Wajah Pria</b></h2>
            <p>Berhubungan seks bukan hanya menyalurkan emosi ke dalam kegiatas fisik, tapi juga mempererat hubungan antar pasangan. Berbagai manfaat seks juga sudah banyak dibahas, seperti meningkatkan mood, menghilangkan stres, hingga melawan kanker. </p>
            <p>Tapi, manfaat seks juga bukan hanya itu saja, lebih dari itu seks bisa membuat kulit wajah pria lebih sehat dan bercahaya, kamu cukup menjaga frekuensi berhubungan sekitar 2-3 kali seminggu untuk merasakan manfaatnya. Nggak percaya? Berikut manfaatnya untuk kulitmu. </p>
            <h3><strong>1.  Meningkatkan kolagen</strong></h3>
            <p>Saat pria sedang mengalami stres, tubuh akan memproduksi hormon kortisol secara berlebihan dan hal itu dapat merusak kolagen. Kolagen pada kulit berfungsi memberikan elastisitas pada kulit. Nah, hubungan seks secara teratur bisa meningkatkan hormone serotonin dan dopamin yang bisa menekan stres. Produksi kolagen pada tubuh pun meningkat dan menghasilkan kulit yang lebih baik dan awet muda. </p>
            <h3><strong>2.  Membersihkan pori-pori secara alami</strong></h3>
            <p>Selain membuat wajah lebih kenyal, berhubungan seks juga bisa membersihkan pori-pori wajah secara alami. Berhubungan seks secara rutin 2 – 3 kali seminggu bisa meningkatkan kadar antibodi yang disebut dengan imunoglobin. Imunoglobin bisa meningkatkan kekebalan tubuh dan membantu melawan peradangan serta membuka pori-pori untuk membuang kotoran yang ada pada kelenjar kulit. </p>
            <h3><strong>3.  Mencegah penuaan dini</strong></h3>
            <p>Cepat atau lambat, kulit pasti akan mengalami penuaan. Namun, sebaiknya pastikan merawat kulit untuk menjaganya tetap muda. Melansir dari Ask Men, menurut studi dari National Health Services, seks bisa mengurangi tingkat stres dan mencegah kerutan. Manfaatnya sama seperti olahraga, yaitu melancarkan darah sekaligus meningkatkan nutrisi kulit untuk menjaganya lebih muda. </p>
            <h3><strong>4.  Mengatasi jerawat</strong></h3>
            <p>Hal itu disebabkan karena saat melakukan hubungan seks, tubuh memproduksi hormon <i>beta-endorphin</i> yang mampu melawan hormon kortisol penyebab stres yang juga bisa memicu munculnya jerawat.</p>
            <p>Bagaimana pun seks bisa membantu kulit wajahmu lebih sehat dan bebas jerawat, namun jika pola hidupmu nggak sehat, maka hal itu nggak bisa bekerja maksimal. Imbangi dengan makanan sehat dna olahraga.</p>
            <p>Jika kamu mengalami masalah jerawat, segera <a href="'. base_url() .'jerawat/" style="text-decoration: underline;">konsultasi</a> dengan dokter ahli Norm untuk mendapatkan solusi jerawat kamu, sekaligus memudarkan bekas jerawat dan menjaga wajah tetap muda dan segar. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Tips Menumbuhkan Brewok Untuk Tampil Lebih Macho';
        $blog->category = 'Other';
        $blog->date = '14 January 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tips-menumbuhkan-brewok.jpg';
        $blog->url_name = 'tips-menumbuhkan-brewok';
        $blog->subtitle = "Menumbuhkan brewok bisa dilakukan siapa saja, bahkan mereka yang nggak punya gen brewok. ";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Memiliki brewok memang bikin pria terlihat lebih macho dan menawan. Namun, nggak semua pria memiliki genetik menumbuhkan brewok dengan mudah. Brewok juga memiliki banyak manfaat lain untuk kesehatan tubuh.</p>
                </i>
            </div>

            <p>Beberapa pria memiliki gen yang membuatnya mudah untuk menumbuhkan brewok. Tapi, nggak sedikit juga pria yang nggak memiliki gen brewok sehingga meski ingin tampil dengan brewok, ia merasa ragu apakah bisa menumbuhkan dengan baik dan sesuai yang diinginkan.</p>
            <p>Pertumbuhan brewok ditentukan oleh enzim 5-alpha reductase yang mengubah hormon testosterone menjadi dihidrotestosteron (DHT). DHT ini berada di setiap folikel rambut sehingga brewok bisa tumbuh. </p>
            <p>Hal itu bukan berarti semakin banyak hormon testosteron semakin lebat brewok tumbuh. Pertumbuhan brewok sebetulnya ditentukan oleh seberapa sensitif folikel rambut kamu terhadap DHT. Meski begitu, hormon DHT yang berlebihan juga nggak baik karena bisa menimbulkan masalah bagi tubuhmu, seperti rambut rontok, dan sebagainya.</p>
            <h2><b>Manfaat Brewok yang Luar Biasa Bagi Tubuh</b></h2>
            <p>Brewok sudah dimiliki banyak pria dari zaman dahulu, bahkan bisa dikatakan semua pria memiliki brewok. Pada zaman Yunani kuno, brewok sebagai tanda kehormatan sehingga makin panjang dan lebat, makin dihormati. Sedangkan di Turki dan India, brewok sebagai lambing kebijaksanaan dan martabat tinggi. Makanya, zaman dahulu, brewok penting banget perannya bagi status sosial.</p>
            <p>Tapi, ternyata manfaat punya brewok nggak cuma itu aja, ada beberapa manfaat brewok yang ternyata sangat baik bagi tubuhmu. Berikut manfaatnya :</p>
            <h3><strong>1.  Mencegah kanker</strong></h3>
            <p>Kanker merupakan penyakit yang mematikan. Memiliki brewok bisa membantu kamu terlindung dari kanker wajah. hal itu disebabkan karena kulit wajah terpapar sinar matahari secara langsung dan itu memiliki risiko tinggi untuk terkena kanker. Menurut Kings of Today, penelitian menunjukkan bahwa 95% sinar UV bisa diblok dengan brewok yang tumbuh tebal. </p>
            <h3><strong>2.  Menjaga kelembaban kulit wajah</strong></h3>
            <p>Sama seperti manfaat sebelumnya, brewok bisa melindungi kulit wajah dari pengaruh buruk sinar matahari. Ketika kamu memiliki brewok, maka kulit wajah menjadi terlindungi dan tetap terlihat lembab dibanding mereka yang nggak punya brewok. Wajah yang nggak [punya brewok akan terlihat kering atau kusam jika terkena paparan sinar matahari langsung. </p>
            <h3><strong>3.  Melindungi dari infeksi bakteri</strong></h3>
            <p>Banyak pria yang berpikiran bahwa mencukur brewok bisa mencegah infeksi bakteri, padahal hal itu nggak benar adanya. Ketika kamu bercukur, kulit menjadi lebih terbuka dan bisa saja terkena goresan pisau cukur, hal itu justru bisa membuat bakteri masuk ke dalam kulit dengan lebih mudah. Jadi, kamu bisa tetap memiliki brewok namun tetap menjaga kerapiannya. </p>
            <h3><strong>4.  Memperlambat penuaan</strong></h3>
            <p>Pria yang sehat akan terlihat lebih muda dan hot dalam waktu yang lama. Jadi, jika kamu ingin terlihat hot dalam waktu lama, mulailah untuk memiliki brewok. Ketika kamu memiliki brewok, kamu akan melakukan perawatan wajah dengan lebih baik, bukan hanya brewok tapi juga kulitmu.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/mengenali-kepribadian-pria-dari-jenis-brewok/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/mengenali-kepribadian-pria-dari-jenis-brewok.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Other</div>
                            <div class="title">Mengenali Kepribadian Pria dari Jenis Brewok</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Kaum pria percaya kalau brewok menambah tingkat ketampanan. Selain itu, tiap jenis brewok juga ada hubungannya dengan kepribadian pria.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Tips Menumbuhkan Brewok Untuk Tampil Lebih Macho</b></h2>
            <p>Menumbuhkan brewok bisa menjadi hal yang sangat mudah bagi mereka yan memiliki genetik. Tapi, nyatanya bukan hanya genetik saja yang bisa menjadi faktor dalam menumbuhkan brewok. Gaya hidup dan makanan yang dikonsumsi juga turut menyumbang faktor pertumbuhan brewok.</p>
            <p>Berikut adalah beberapa tips untuk kamu yang ingin menumbuhkan brewok :</p>
            <h3><strong>1.  Pahami bentuk dan garis wajah</strong></h3>
            <p>Brewok yang baru tumbuh bisa membuat ilusi wajah terlihat lebih bulat sehingga banyak pria yang  menyerah untuk menumbuhkan brewok. </p>
            <p>Garis wajah terbagi jadi 3 garis, yaitu garis atas yang berada di sepanjang pipi dari jambang sampai ke mulut. Kedua adalah garis yang berada di leher dari ujung rahang sampai garis bibir.</p>
            <h3><strong>2.  Konsumsi makanan penuh nutrisi</strong></h3>
            <p>Makanan juga menjadi faktor penentu tumbuhnya brewok karena beberapa vitamin membantu folikel rambut menjadi lebih aktif. Konsumsi vitamin D untuk mengaktifkan kembali reseptor pada folikel yang sudah nggak bisa menumbuhkan rambut. Kamu bisa mendapatkan vitamin D dari ikan, telur, dan susu. </p>
            <p>Selain itu, vitamin B juga bisa menyehatkan pertumbuhan rambut. Kamu bisa mendapatkan vitamin B dari Biotin pada roti whole grain, susu, dan kacang. Kemudian vitamin B12 dari daging dan ikan.</p>
            <h3><strong>3.  Merawat kulit dan brewok</strong></h3>
            <p>Merawat kulit wajah juga sangat penting untuk membuka pori-pori guna menghilangkan sel kulit mati dan kotoran pada folikel rambut. Hal itu bisa mengurangi pertumbuhan rambut ke dalam tempat brewok tumbuh. </p>
            <p>Kamu juga bisa mengaplikasikan pelembab brewok untuk menjaganya tetap halus dna lembut. Juga untuk mencegah munculnya ketombe. Pelembab brewok sangat beragam, mulai dari krim hingga minyak.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = '5 Teknik Foreplay untuk Seks yang Bergairah';
        $blog->category = 'Sex';
        $blog->date = '14 January 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/teknik-foreplay-yang-menggairahkan.jpg';
        $blog->url_name = 'teknik-foreplay-yang-menggairahkan';
        $blog->subtitle = "Ini rahasia foreplay yang bikin seks kamu makin bergairah dan memuaskan.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Wanita seringnya membutuhkan waktu lama untuk mendapatkan gairah seks sebelum penetrasi. Jika pria hanya sebentar memberikan sentuhan fisik, maka seks bisa jadi nggak memuaskan. Efeknya bukan hanya bagi wanita saja, tapi juga pria.</p>
                    <p>Beberapa wanita melakukan orgasme palsu karena nggak mendapatkan foreplay yang tepat dan kurangnya sentuhan fisik. Maka, penting adanya foreplay dalam kegiatan seks untuk mendapatkan kepuasan bersama. </p>
                </i>
            </div>

            <p>Hubungan seks seharusnya menjadi momen yang memuaskan bagi pria dan wanita. Namun, wanita cenderung sulit untuk turn on dengan cepat dibanding pria sehingga kepuasan wanita menjadi terhambat karena kurangnya stimulasi seksual di awal atau yang biasa dikenal dengan <i>foreplay</i>.</p>
            <p>Foreplay dapat diibaratkan sebagai hidangan pembuka sebelum beranjak ke menu utama. Peran foreplay bagi wanita sangat penting karena bisa membantu meningkatkan gairah seksual sehingga kegiatan seksual pun bisa lebih bergairah dan memuaskan bagi pria maupun wanita. </p>
            <h2><b>Manfaat Foreplay Dalam Hubungan Seks</b></h2>
            <p>Selama ini kebanyakan pria melakukan foreplay dengan menyentuh beberapa titik sensitif wanita seperti puting payudara atau vagina. Padahal, titik-titik sensitif tersebut nggak bisa disentuh secara langsung di awal tetapi pada akhir waktu foreplay sebelum melakukan penetrasi.</p>
            <p>Foreplay merupakan hal penting yang diinginkan wanita untuk membangkitkan gairah seks. Wanita butuh waktu lebih lama untuk mendapatkan gairah sebelum orgasme. </p>
            <p>Mengutip dari Alodokter, banyak pasangan yang merasa kurang puas dengan hubungan seks mereka dan memalsukan orgasme. Hal itu disebabkan oleh kurangnya sentuhan fisik, rangsangan seksual yang masih kurang maksimal, hingga ketakutan nggak bisa memuaskan pasangannya. </p>
            <p>Cara mengatasi hal tersebut adalah dengan melakukan foreplay. Hal itu bisa dilakukan dengan sentuhan-sentuhan fisik bahkan rayuan. Foreplay yang tepat bisa membantu wanita meningkatkan gairah, juga pria mendapatkan serta mempertahankan ereksi.</p>
            <p>Melansir dari Everyday Health, Debra Herbenick, PhD, MPH, direktur Center for Sexual Health Promotion at Indiana University in Bloomington mengungkapkan bahwa tubuh wanita yang terangsang akan membuat otot-otot vagina sedikit menarik rahim sehingga bisa membuat ruang lebih banyak di vagina. Hal itu membuat wanita merasa nyaman sehingga seks pun lebih menggairahkan. </p>
            <p>Lebih lanjut Herbenick menambahkan bahwa foreplay merupakan hal yang bisa membangun hubungan emosional dan semangat. Foreplay juga membantu pasangan lebih intim dan terangsang.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/mengenali-g-spot-wanita/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/mengenali-g-spot-wanita.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">Kenali G-Spot pada Wanita Untuk Mencapai Kepuasan Seksual</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Wanita dikenal cenderung lebih sulit “ON” dibanding pria. Ini tips kenali G-Spot wanita untuk membuatnya mencapai kepuasan.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Teknik Foreplay untuk Meningkatkan Gairah Seks</b></h2>
            <p>Gairah seks merupakan hal pertama yang harus dibangun sebelum melakukan hubungan seks, terebih penetrasi. Pria nggak bisa hanya menyentuh sesaat kemudian melakukan penetrasi. Hal pertama yang dilakukan adalah membangkitkan gairah dan membuat wanita merasa nyaman.</p>
            <p>Beberapa teknik berikut disukai wanita dan bisa dilakukan untuk mengawali kegiatan seks yang bergairah :</p>
            <h3><strong>1.  Bisikkan kata-kata mesra</strong></h3>
            <p>Wanita dikenal kelemahannya pada telinga sehingga bisikan kata-kata mesra dan pujian menjadi hal yang bisa dilakukan pria untuk membangun gairah seks wanita. </p>
            <p>Bisikkan kata-kata pujian sambil mencium belakang telinga atau lehernya, kamu bisa membisikkan kata “kamu cantik dan seksi” atau “wangi kamu enak banget” dan lain sebagainya. Tingkatkan kepercayaan dirinya sebelum mulai berhubungan.  </p>
            <h3><strong>2.  Pijatan atau sentuhan lembut</strong></h3>
            <p>Ingat, jangan langsung menyentuh titik sensitifnya. Berikan pijatan lembut pada bahu, tangan, atau kakinya, terlebih saat pasangan kamu sudah berbaring. Biarkan ia merasa rileks dan nyaman dengan sentuhanmu. Pastikan pasanganmu nggak ketiduran.</p>
            <p>Sambil memijatnya, selingi dengan menelusuri lekuk tubuhnya dengan ujung jarimu. Buat ia merasa terangsang dengan sentuhan yang diberikan. Setelah itu lanjutkan lagi pijatanmu. Lakukan pijatan yang lebih sensual dan menggoda. </p>
            <h3><strong>3.  Ciuman bergairah</strong></h3>
            <p>Ciuman yang lama dan basah disertai adanya jilatan bisa membuat wanita terangsang. Namun, pastikan bermain dengan rapi, jangan sampai basah ke seluruh wajah atau berlebihan air liur karena bisa-bisa justru menurunkan gairah. Nikmati ciuman dengan mendalam sembari mengatur kekuatan dan kecepatannya. </p>
            <p>Leher wanita lebih sensitif dibanding pria sehingga kamu bisa meneruskan ciuman ke leher. Lakukan dengan sensual dan perlahan atau bisa juga dikombinasikan dengan sedikit keras atau menghisapnya.</p>
            <p>Beralih ke bagian sisi lehernya kemudian naik ke telinganya. Hembuskan napas pada telinga pasanganmu dengan perlahan. Selain itu, ciuman mesra di leher bagian depan juga bisa membuat wanita terangsang. Lakukan sambil mendekapnya erat. Wanita sangat suka dipeluk oleh lengan pria yang besar dan kekar. </p>
            <h3><strong>4.  Tanya fantasi seks pasangan</strong></h3>
            <p>Selain menyentuh titik sensitifnya, tanyakan pada pasangan tentang seks seperti apa yang dia inginkan. Mungkin ia kurang menyukai seks yang selama ini dilakukan atau pasangan memiliki fantasi seks tertentu yang ingin diwujudkan. Melalui hal itu kamu dan pasangan bisa mendapatkan hubungan seks yang menggairahkan. </p>
            <h3><strong>5.  Coba sex toys</strong></h3>
            <p>Belum banyak pasangan yang mau menggunakan sex toys dalam kegiatan seksual mereka. Alasannya beragam, mulai dari malu, merasa nggak butuh, dan sebagainya. Namun, jika kamu mau mencoba seks yang lebih menantang dan menggairahkan, sex toys bisa menjadi salah satu pilihan untuk kegiatan foreplay. </p>
            <p>Kegiatan seks bisa berjalan dengan baik jika terbangun komunikasi yang baik antar pasangan. Jika sedang memiliki masalah rumah tangga, maka sebaiknya selesaikan dahulu sebelum melakukan hubungan seks agar tercipta seks yang nyaman dan memuaskan. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Diet Sehat Pria dan Porsi Makan yang Tepat Jaga Berat Badan';
        $blog->category = 'Other';
        $blog->date = '12 January 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/diet-sehat-dan-porsi-makan-pria.jpg';
        $blog->url_name = 'diet-sehat-dan-porsi-makan-pria';
        $blog->subtitle = "Diet sehat bisa dilakukan pria dengan porsi makan yang tepat dan tinggi protein. Ini batas kalori dan porsi makan yang tepat.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Menjaga atau mendapatkan berat badan ideal bukanlah hal yang sulit. Pria dan wanita memiliki kebutuhan asupan kalori yang berbeda. Pria membutuhkan asupan kalori yang lebih besar karena memiliki lebih banyak otot dan lebih besar. </p>
                    <p>Jika kamu ingin menjalankan diet, maka sebelumnya kamu harus mengetahui kebutuhan protein yang tepat bagi tubuh dan tentunya porsi makan seimbang untuk mendapatkan pola diet sehat. </p>
                </i>
            </div>

            <p>Selama ini diet menjadi hal yang identik dilakukan oleh wanita. Padahal, baik pria maupun wanita bisa melakukan diet untuk menjaga berat badan, baik menaikkan atau menurunkan berat badan. Diet juga berarti memilih makanan yang masuk ke dalam tubuh sesuai dengan kebutuhan kalori.</p>
            <p>Dibandingkan dengan wanita, pria memiliki kebutuhan kalori yang lebih tinggi. Hal itu karena pria memiliki proporsi nutrisi yang lebih banyak untuk membangun massa otot dan kesehatan. Meski begitu, setiap pria juga punya jumlah dan porsi yang berbeda untuk maintenance berat badan. </p>
            <h2><b>Diet Sehat Untuk Pria</b></h2>
            <p>Pria memiliki massa otot yang lebih tinggi dari wanita sehingga membutuhkan asupan kalori yang lebih tinggi pula. Bagi kamu yang ingin menrunkan berat badan, mungkin bisa mulai untuk mengurangi asupan karbohidrat agar lemak di dalam tubuh bisa lebih cepat dibakar. Asupan pengganti yang biasa dilakukan adalah dengan memperbanyak asupan protein.</p>
            <p>Protein memiliki banyak manfaat bagi tubuh, seperti mengganti sel yang sudah nggak bekerja efektif, mengalirkan berbagai zat ke tubuh, serta membantu pertumbuhan dan memperbaiki sel-sel yang rusak. </p>
            <p>Protein di dalam tubuh diubah menjadi asam amino. Asam amino berfungsi menghasilkan molekul penting, seperti enzim, hormon, neurotransmitter, dan antibodi. Maka dari itu jika kekurangan protein maka tubuh nggak akan bisa berfungsi dengan baik.</p>
            <p>Mengutip dari halodoc, berdasarkan Recommend Dietary Allowance (RDA), jumlah protein yang dibutuhkan untuk diet sehat sebanyak 0,8gr dari berat badan kamu. </p>
            <p>Jadi, untuk mengetahui kebutuhan protein yang tepat, kamu bisa menggunakan rumus berikut :</p>

            <ul>
                <li>Pria normal : 0,8 gr x Berat Badan (BB)/hari</li>
                <li>Diet : 1,8 gr x BB/hari dengan mengurangi asupan karbohidrat</li>
                <li>Penderita ginjal : 0,5 gr x BB/hari</li>
            </ul>

            <p>Kamu bisa menyesuaikan kebutuhan protein dengan kondisi kamu saat ini. Jangan lupa untuk selalu menyeimbangkan nutrisi harian kamu. Diet juga harus bisa membuat kamu semakin sehat dan bugar. </p>
            <h2><b>Porsi Makanan yang Tepat Untuk Diet Sehat</b></h2>
            <p>Pria memiliki otot lebih banyak dan lebih besar dari wanita sehingga membutuhkan lebih banyak kalori untuk kebutuhan hariannya. Diet juga bermanfaat untuk menjaga kesehatan tubuh dan melawan penyakit diabetes. </p>
            <p>Dalam melakukan diet, kunci untuk menjaga kesehatan adalah mengonsumsi makanan dengan porsi yang tepat. Jika berlebihan tentunya justru akan menjadi masalah bagi tubuh dan dietmu pun gagal.</p>
            <p>Berikut porsi makanan yang bisa menjadi guide diet sehat kamu :</p>

            <table border="1" style="table-layout: fixed; width: 100%;">
                <tr>
                    <td style="text-align: center; font-weight: bold; padding: 7.5px;">Makanan</td>
                    <td style="text-align: center; font-weight: bold; padding: 7.5px;">Porsi</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px;">
                        <div><b>Karbohidrat </b></div>
                        <div>(Sereal, nasi, pasta, kentang) termasuk 1 porsi saat makan. Pastikan nggak lebih dari ¼ piring.</div>
                    </td>
                    <td style="padding: 7.5px; font-weight: bold;">Satu kepalan tangan</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px;">
                        <div><b>Protein </b></div>
                        <div>(daging, ayam, ikan, tofu, dll)</div>
                    </td>
                    <td style="padding: 7.5px; font-weight: bold;">Satu telapak tangan</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px;">
                        <div><b>Keju </b></div>
                        <div>(pada snack atau makan utama)</div>
                    </td>
                    <td style="padding: 7.5px; font-weight: bold;">2x ibu jari</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px;">
                        <div><b>Kacang-kacangan / biji-bijian </b></div>
                        <div>(pada snack atau makan utama)</div>
                    </td>
                    <td style="padding: 7.5px; font-weight: bold;">Setangkup tangan</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px;">
                        <div><b>Butter </b></div>
                        <div>(nggak lebih dari 2 atau 3 kali sehari)</div>
                    </td>
                    <td style="padding: 7.5px; font-weight: bold;">Seujung ibu jari </td>
                </tr>
                <tr>
                    <td style="padding: 7.5px;">
                        <div><b>Makanan ringan</b></div>
                        <div>(popcorn, keripik)</div>
                    </td>
                    <td style="padding: 7.5px; font-weight: bold;">2 tangkup tangan</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px;">
                        <div><b>Makanan dipanggang</b></div>
                        <div>(brownies, flapjacks)</div>
                    </td>
                    <td style="padding: 7.5px; font-weight: bold;">2 jari</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px;">
                        <div><b>Susu</b></div>
                        <div>(low-fat milk)</div>
                    </td>
                    <td style="padding: 7.5px; font-weight: bold;">1 gelas</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px;">
                        <div><b>Roti</b></div>
                    </td>
                    <td style="padding: 7.5px; font-weight: bold;">1 slices</td>
                </tr>
            </table>
            <div style="margin-bottom: 15px;"><i>Sumber : BBC goodfood, everydayhealth </i></div>

            <p>Menjaga berat badan dibutuhkan konsistensi dan selalu menjaga track of calories untuk memastikan pembakaran kalori menjadi energi setiap harinya. </p>
            <p>Menurut Everydayhealth, American Heart Association menyarankan hal berikut untuk kebutuhan kalori harian :</p>

            <ul>
                <li>Pria dengan usia antara 19 dan 30 tahun memiliki batas asupan kalori sampai 2.400, jika kamu cukup aktif, maka batas kalori kamu adalah 2.600. Sedangkan untuk kamu yang sangat aktif, batas asupan kalori harian adalah 3.000.</li>
                <li>Pria dengan usia antara 31 sampai 50 tahun adalah 2.200 kalori, 2.400 kalori untuk yang aktif, dan 2.800 kalori untuk yang sangat aktif.</li>
                <li>Pria berusia 51 tahun ke atas memiliki Batasan asupan kalori sebesar 2.000, 2.200 untuk yang cukup aktif, dan 2.400 bagi yang sangat aktif. </li>
            </ul>

            <p>Atur porsi makan harian kamu sesuai dengan kebutuhan protein dan kalori agar tubuh dapat bekerja maksimal. Jika porsinya berlebihan namun kamu ingin melakukan diet, maka hasil akhirnya bisa nggak sesuai dengan yang kamu harapkan. </p>
        ';
        $arr_blog[] = clone $blog;

        if (time() > 1610211600 && time () < 1610384400)
        {
            $blog->name = 'Norm New Year Sale. FREE ONGKIR All Products';
            $blog->category = 'Promo';
            $blog->date = '10 january 2021';
            $blog->image = 'https://www.norm.id/assets/images/main/blog/new-year-sale.jpg';
            $blog->url_name = 'new-year-sale';
            $blog->subtitle = "Norm New Year Sale. FREE ONGKIR All Products";
            $blog->description = '
                <p>Awal tahun ini menjadi momen yang tepat untuk memulai hidup yang lebih sehat dan penampilan yang lebih baik. Untuk itu Norm dukung kamu untuk mempersiapkan diri menjadi lebih baik di tahun yang baru dengan <strong>Norm New Year Sale</strong>.</p>
                <p>Melalui <strong>Norm New Year Sale</strong> ini, setiap pembelian produk Norm, kamu akan mendapatkan <strong>free ongkos kirim untuk wilayah Jabodetabek dan diskon ongkos kirim (maks. Rp 30 ribu) untuk wilayah luar jabodetabek</strong> pada periode promo <strong>10 Januari – 12 Januari 2021.</strong></p>
                <h2><b>Syarat & Ketentuan</b></h2>
                <p>
                    1. Promo berlaku pada tanggal 10 Januari 2021 (pukul <strong>00.00 WIB</strong) – 12 Januari 2021 (pukul <strong>23:59 WIB</strong>).<br>
                    2. Promo <strong>diskon ongkos kirim</strong> berlaku untuk semua produk Norm<br>
                    3. Promo <strong>diskon ongkos kirim</strong> dengan minimum order 300 Ribu<br>
                    4. Promo <strong>diskon ongkos kirim</strong> maksimal Rp 30 ribu (Khusus wilayah Luar Jabodetabek) dan <strong>free ongkos kirim</strong> untuk wilayah Jabodetabek.<br>
                    5. Promo berlaku untuk semua pelanggan Norm baik pelanggan baru ataupun lama.<br>
                    6. Diskon ongkos kirim hanya mengurangi potongan ongkos kirim dan tidak mengurangi harga produk.<br>
                    7. Promo secara otomatis akan memotong ongkos kirim pada transaksi kamu.<br>
                    8. Promo ini <strong>dapat digabungkan</strong> dengan promo lainnya. <br>
                    9. Promo berlaku untuk pemesanan melalui website ataupun pemesanan secara manual melalui customer service Norm<br>
                    10. Setiap pembelian produk Norm harus melakukan konsultasi terlebih dahulu. <br>
                    11. Promo ini hanya berlaku untuk 100 pembeli pertama<br>
                    12. Contoh perhitungan diskon:<br>
                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 1</span><br>
                    - Customer Norm melakukan transaksi untuk membeli 1 paket Complete Hair Loss Kit seharga Rp 469.000, dengan pengiriman ke wilayah Bogor dan ongkos kirim sebesar Rp 12 ribu.  Maka, ia berhak mendapatkan <strong>free ongkos kirim</strong>.<br>

                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 2</span><br>
                    - Customer Norm melakukan transaksi pertama untuk membeli produk 3 paket Complete Hair Loss Kit seharga Rp 1.407.000 dengan pengiriman ke wilayah Makassar dan ongkos kirim sebesar Rp 50 ribu. Maka, ia berhak mendapatkan diskon ongkos kirim sebesar <strong>Rp 30 ribu</strong> dan ongkos kirim yang ditanggung sebesar Rp 20 ribu.<br>

                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 3</span><br>
                    -   Customer Norm melakukan transaksi pertama untuk membeli produk 3 paket Complete Hair Loss Kit seharga Rp 1.407.000 dengan pengiriman ke wilayah Jawa Timur dan ongkos kirim sebesar Rp 20 ribu. Maka, ia berhak mendapatkan diskon ongkos kirim sebesar <strong>Rp 20 ribu atau gratis ongkos kirim</strong><br>.

                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 4</span><br>
                    -   Customer Norm melakukan transaksi pertama untuk membeli produk 1 paket Started Hair Loss Kit seharga Rp 279.000 dengan pengiriman ke wilayah Makassar dan ongkos kirim sebesar Rp 50 ribu. Maka, ia tidak berhak mendapatkan diskon ongkos kirim karena pembelian produk <strong>dibawah Rp 300 ribu</strong>.<br>.

                    13. Norm secara sepihak dapat membatalkan pesanan apabila tidak sesuai dengan syarat & ketentuan yang berlaku dan/atau jika ditemukan adanya indikasi kecurangan pada masa promo ini. .
                </p>
                <p>Inilah waktu yang tepat untuk menyiapkan diri mendapatkan penampilan yang lebih baik di tahun yang baru. Gabung bersama 12,000+ pria yang telah membuktikan hasil nyata dengan Norm. </p>
                <p><strong>#JoinTheNorm #DedicatedforMen</strong></p>
            ';
            $arr_blog[] = clone $blog;
        }

        if (time() > 1610179200)
        {
            $blog->name = 'Manfaat Minum Kopi Hitam dan Porsi Idealnya Untuk Kesehatan';
            $blog->category = 'Other';
            $blog->date = '9 January 2021';
            $blog->image = 'https://www.norm.id/assets/images/main/blog/manfaat-kopi-hitam.jpg';
            $blog->url_name = 'manfaat-kopi-hitam';
            $blog->subtitle = "Kopi hitam memang minuman paling digandrungi untuk meningkatkan mood dan anti ngantuk. Ini manfaat dan porsi idel hariannya.";
            $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
            $blog->description = '
                <div class="blog-preview">
                    <i>
                        <p class="font-medium"><i>Preview 30 Seconds</i></p>
                        <p>Bagi sebagian besar masyarakat urban minum kopi sudah menjadi gaya hidup yang sulit untuk dilewatkan. Minum kopi menjadi solusi untuk menjaga tubuh tetap berenergi. Selain itu, minum kopi juga menjadi rutinitas pendamping kerja ataupun kegiatan santai.</p>
                        <p>Tahukah kamu bahwa di balik nikmatnya minum kopi ternyata ada manfaat menakjubkan yang membantu tubuh tetap sehat, asalkan masih dalam porsi yang tepat dan sesuai dengan batas yang dianjurkan dalam mengonsumsinya setiap hari.</p>
                    </i>
                </div>

                <p>Mengonsumsi secangkir kopi hitam di pagi hari merupakan kebiasaan bagi sebagian besar orang. Sebagian mengonsumsinya bersamaan dengan sarapan dan nggak sedikit juga yang meminumnya setelah sarapan untuk meningkatkan mood dan bikin ‘melek’.</p>
                <p>Bagi para orang urban, terutama pria, kegiatan minum kopi bukan hanya duduk di meja makan atau meja kantor, tapi juga menjadi kegiatan untuk pertemuan dengan kerabat atau rekan kerja setelah makan siang atau saat meeting. </p>
                <h2><b>Manfaat Minum Kopi Hitam Bagi Tubuh</b></h2>
                <p>Beberapa orang minum kopi hitam bukan hanya pagi hari, tapi siang atau sore pun kembali minum kopi. Kopi memang menjadi pilihan umum orang untuk mengusir rasa kantuk dan meningkatkan mood karena kandungan kafein di dalamnya. </p>
                <p>Namun, ternyata manfaat minum kopi hitam bukan cuma itu aja. Ada sederet manfaat mengonsumsi kopi hitam. Berikut beberapa manfaat minum kopi hitam dalam jumlah sedang bagi tubuh :</p>
                <h3><strong>1.  Mencegah penurunan fungsi otak</strong></h3>
                <p>Minum kopi hitam bisa membantu mengurangi risiko penyakit neurodegeneratif, seperti Alzheimer, demensia, dan Parkinson. Penyakit Alzheimer memengaruhi satu dari delapan orang berusia 65 tahun ke atas. </p>
                <p>Mengutip dari WebMD, para ilmuwan memperkirakan bahwa risikonya 16% lebih rendah untuk peminum kopi daripada peminum non-kopi, tetapi lebih banyak penelitian masih perlu dilakukan. Hal itu menunjukkan bahwa mengonsumsi kafein bisa memperlambat proses penurunan fungsi otak karena penuaan. </p>
                <h3><strong>2.  Mengurangi risiko kanker</strong></h3>
                <p>Minum kopi bisa membantu mencegah beberapa jenis kanker, di antaranya kanker mulut, kanker prostat, kanker hati, dan kanker kolorektal. Penelitian masih terus dilakukan untuk melihat hal tersebut, namun kemungkinan yang bisa diambil adalah kopi mengandung antioksidan tinggi yang menurut beberapa penelitian dapat membantu mencegah kanker.</p>
                <h3><strong>3.  Manajemen diabetes</strong></h3>
                <p>Mengonsumsi kopi secara teratur bisa mengurangi risiko terkena diabetes tipe 2. Penyakit ini berkembang ketika seseorang nggak bisa menggunakan insulin untuk mendistribusikan glukosa ke dalam sel sehingga gula menumpuk di dalam darah untuk menggantinya. </p>
                <p>Menurut WebMD, beberapa penelitian menunjukkan bahwa minum kopi bisa menurunkan risiko diabetes 35% lebih rendah bagi mereka yang minum 6 cangkir atau lebih kopi per hari dan 28% lebih rendah untuk mereka yang minum 4 – 6 cangkir. Selain itu juga, setiap cangkir kopi yang diminum seseorang per hari bisa menurunkan risiko diabetes sampai 7%. </p>
                <h3><strong>4.  Membersihkan perut</strong></h3>
                <p>Kopi merupakan kategori minuman diuretik yang bisa membuat kamu yang meminumnya menjadi sering buang air kecil. Saat kamu minum kopi hitam tanpa gula, racun dan bakteri akan keluar dalam bentuk urine.</p>
                <p>Minum kopi juga bisa meningkatkan fungsi organ pencernaan serta menjaga system pencernaan. Hal itu disebabkan karena kopi bekerja menstimulasi cairan di dalam lambung dan memengaruhi pemecahan zat makanan dan penyerapan nutrisi. </p>
                <h3><strong>5.  Menurunkan berat badan</strong></h3>
                <p>Bagi kamu yang sedang dalam program penurunan bera badan dan menjaga kestabilan berat badan, kopi bisa masuk ke dalam daftar diet harianmu. Kafein yang terkandung di dalam kopi memicu metabolisme tubuh sehingga bisa membantu proses pembakaran lemak. Selain itu, kopi hitam juga mampu menekan nafsu makan. </p>
                <h2><b>Batas Ideal Minum Kopi Dalam Satu Hari</b></h2>
                <p>Meski minum kopi menjadi hal lumrah bagi kebanyakan orang dan memiliki manfaat bagi tubuh, tapi dalam mengonsumsinya ada batasan dalam porsi hariannya.</p>
                <p>Melansir dari Mayo Clinic, batas aman orang dewasa yang sehat tanpa riwayat penyakit tertentu untuk mengonsumsi kafein adalah 400mg per hari atau setara dengan 4 cangkir kopi. </p>
                <p>Porsi tersebut juga aman untuk orang dewasa yang memiliki berat badan normal. Namun, bagi mereka yang termasuk ke dalam berat badan underweight, maka porsi kafein yang bisa dikonsumsi adalah kurang dari itu.</p>
                <p>Menurut <i>U.S. Food and Drug Administration</i>, satu sendok teh bubuk kafein setara dengan sekitar 28 cangkir kopi. Tingkat kafein yang begitu tinggi dapat menyebabkan masalah kesehatan yang serius dan kemungkinan kematian.</p>
                <h2><b>Nutrisi dan Porsi Harian Konsumsi Kopi </b></h2>
                <p>Kopi hitam kaya antioksidan yang dapat melawan kerusakan sel dan mengurangi risiko penyakit serius, seperti kanker dan penyakit jantung. Di Amerika, menurut WebMD, kopi merupakan sumber antioksidan utama yang dikonsumsi. </p>
                <p>Kopi mengandung beberapa zat penting bagi tubuh, yaitu Vitamin B2, Kafein, dan magnesium. </p>
                <p>
                    Satu porsi kopi hitam mengandung :<br>
                    Kalori: 2<br>
                    Protein: 0 gram<br>
                    Lemak: 0 gram<br>
                    Karbohidrat: 0 gram<br>
                    Serat: 0 gram<br>
                    Gula: 0 gram<br>
                    Sodium: 5 miligram
                </p>
                <p>Satu porsi kopi hitam adalah 8 ons dan mengandung sekitar 96 miligram kafein. Disarankan untuk nggak mengonsumsi lebih dari 400 miligram kafein per hari. Jika kamu peminum kopi berat, batasi hingga 4 cangkir saja sehari untuk mencegah efek samping negatif pada tubuh. </p>
            ';
            $arr_blog[] = clone $blog;
        }

        $blog->name = 'Tipe-Tipe Bekas Jerawat dan Cara Mengatasinya';
        $blog->category = 'Acne';
        $blog->date = '8 January 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tipe-tipe-jerawat.jpg';
        $blog->url_name = 'tipe-tipe-jerawat';
        $blog->subtitle = "Bekas jerawat bukan cuma dark spot tapi banyak tipenya. Berikut beberapa tipe bekas jerawat dan cara mengatasinya. ";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Selain jerawat, bekas jerawat juga menjadi masalah yang cukup memusingkan dan butuh perawatan khusus. Bekas jerawat juga bukan hanya dark spot atau red spot tapi lebih dari itu dan banyak tipenya. Setiap tipe memiliki cara tersendiri untuk mengatasinya. </p>
                </i>
            </div>

            <p>Masalah jerawat nggak berhenti cuma sampai jerawat itu sembuh. Pada beberapa kasus, bekas jerawat menjadi masalah lanjutan yang perawatannya cukup memakan waktu. </p>
            <p>Perubahan tekstur dan warna kulit akibat jerawat ini biasanya akan bertahan daam waktu yang lama walaupun jerawat itu sendiri sudah sembuh. Hal itu disebabkan oleh rusaknya dinding folikel yang terjadi karena peradangan jerawat. </p>
            <p>Saat proses penyembuhan, kulit memperbaiki diri dengan cara membentuk kolagen baru. Namun, saat proses tersebut berlangsung, perbaikan kulit tersebut nggak bisa sesempurna kulit sebelumnya. Meski proses regenerasi kulitnya serupa, namun bekas jerawat yang dihasilkan memiliki perbedaan.</p>
            <h2><b>Beberapa Tipe Jerawat dan Cara mengatasinya</b></h2>
            <p>Bekas jerawat memiliki tingkat keparahannya masing-masing, mulai dari yang ringan sampai yang paling sulit dihilangkan. Bekas jerawat nggak cuma yang muncul di permukaan saja, tapi juga ada yang berada di bawah kulit.</p>
            <p>Berikut beberapa tipe jerawat dan cara mengatasinya agar tepat perawatannya.</p>
            <h2><b>Atrophic Scars atau Bekas Jerawat yang Tertekan</b></h2>
            <p>Bekas jerawat atrophic atau bekas jerawat yang tertekan merupakan hal yang paling umum. Atrophic scars merupakan hasil dari peradangan jerawat papulopustular. Jerawat papulopustular adalah lesi yang terdiri dari noda merah, jerawat, papula dan pustula (jerawat) dan lesi bengkak yang lebih besar (nodul). Bekas luka yang tertekan berada di bawah kulit terbentuk ketika kolagen nggak cukup dibuat saat luka dalam penyembuhan. </p>
            <p>Ada tiga jenis bekas atrophic scars, yaitu :</p>
            <h3><strong>1.  Boxcar </strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/boxcar.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Healthline</i></div>
            </p>
            <p>Seperti kotak, bekas jerawat ini membentuk sudut sisi vertikal tajam. Bekas jerawat ini sebetulnya nggak terlalu dalam tetapi punya ukuran yang lebih lebar dengan batas-batas bekas jerawat yang cukup tajam membentuk box. </p>
            <p>Penyebab <i>boxcar</i> adalah rusaknya kolagen sehingga menyebabkan hilangnya jaringan tissue di sekitarnya sehingga kulit pada bagian tersebut nggak memiliki tumpuan dan masuk ke dalam membentuk lubang. Boxcar bisa diatasi dengan perawatan seperti <i>punch excision, dermal filler</i>, atau <i>laser resurfacing</i>.  </p>
            <h3><strong>2.  Ice Pick </strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/ice-pick.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Oliva clinic</i></div>
            </p>
            <p>Jenis bekas jerawat ice pick ini merupakan jenis yang paling sulit ditangani. Seperti Namanya, bentuk bekas jerawat ini seperti lubang yang dibuat menggunakan alat pemecah es. Lubangnya sangat dalam dan sempit sampai ke lapisan dermis sehingga memberi kesan pori-pori yang besar dan kosong. <i>Ice pick</i> menjadi bopeng yang terjadi karena adanya peradangan dari jerawat nanah yang menghancurkan jaringan di bawah dan permukaan kulit. </p>
            <p><i>Ice pick</i> yang memiliki bekas luka seperti luka tusukan ini bisa diatasi dengan perawatan khusus seperti <i>laser treatment, punch excusions</i>, atau bahkan cangkok kulit. </p>
            <h3><strong>3.  Rolling </strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/rolling-scars.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : slmdskincare</i></div>
            </p>
            <p>Merupakan bekas jerawat yang membuat tekstur kulit menjadi naik turun. <i>Rolling scars</i> lebih dangkal dan ngggak memiliki batas luka yang jelas, nggak seperti <i>boxcar</i>. Bekas jerawat ini biasanya terjadi setelah mengalami peradangan jerawat dalam jangka panjang. Seiring bertambahnya usia seseorang, rolling scars akan terlihat semakin jelas karena berkurangnya kekencangan kulit dan kolagen. </p>
            <p>Cara mengatasi bekas jerawat jenis ini adalah dengan melakukan <i>laser treatment</i> untuk meratakan permukaan kulit. <i>Facial filler</i> juga bisa menjadi alternatif lain yang dapat kamu lakukan untuk mengatasi <i>rolling scars</i> ini. </p>
            <h2><b>Bekas Jerawat Timbul</b></h2>
            <p>Bekas jerawat yang timbul di atas permukaan kulit ini disebabkan oleh terlau banyak kolagen selama masa penyembuhan. </p>
            <p>Bekas luka yang menonjol lebih jarang terjadi dibandingkan bekas jerawat atrofik, tetapi juga merupakan hasil dari peradangan jerawat. Dalam kebanyakan kasus, bekas jerawat yang timbul lebih jelas daripada bekas jerawat yang tertekan.</p>
            <p>Berikut beberapa tipe bekas jerawat timbul, yaitu :</p>
            <h3><strong>1.  Keloid</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/keloid.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : scarformula</i></div>
            </p>
            <p>Keloid bekas jerawat biasanya terjadi pada mereka yang memiliki kulit gelap. Bekas luka ini terbentuk ketika produksi kolagen berlebihan dan jaringan parut yang terbentuk pun berlebih. Proses pembentukan keloid ini terjadi ketika jerawat gagal melalui siklus penyembuhan dan kulit pun rusak. Ketika hal itu terjadi, kolagen berkumpul dan membangun jaringan kulit untuk menutup luka. Tapi, sayangnya produksi kolagen itu menyebar ke ,uar luka dan menciptakan bekas luka yang lebih besar dan menonjol. </p>
            <h3><strong>2.  Hypertrophic</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/hypertrophic.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : andreacatton</i></div>
            </p>
            <p><i>Hypertrophic</i> merupakan bekas jerawat yang tebal, lebar, dan biasanya berkembang di tempat terjadinya luka. Bekas jerawat biasanya terjadi saat kulit sedang dalam masa penyembuhan, namun berbeda dengan <i>hypertrophic</i> yang merupakan hasil respons abnormal terhadap luka karena banyaknya scar tissue.</p>
            <p>Bekas luka <i>hypertrophic</i> hampir mirip dengan keloid. Hanya saja <i>hypertrophic</i> lebih sering dialami orang daripada keloid. Awalnya benjolan tampak gelap atau merah (sedikit seperti darah kering yag menggumpal). Seiring berjalannya waktu, bekas luka menjadi rata dan pucat. </p>
            <p>Beberapa cara yang bisa dilakukan untuk mengatasi keloid dan <i>hypertrophic scars</i> adalah dengan perawatan kortikosteroid, <i>laser therapy, bleomycin</i>, atau operasi.</p>
            <p>Selain beberapa perawatan di atas, kamu juga bisa melakukan home treatment dengan perawatan yang mengandung bahan-bahan seperti AHA, Salicylic Acid, Retinoid, dan sebagainya. Namun, untuk lebih tepat lagi, kamu bisa <a href="'. base_url() .'questionaire/acne/start/" style="text-decoration: underline;">berkonsultasi</a> dengan dokter ahli Norm untuk mengatasi masalah jerawat dan bekas jerawat secara menyeluruh. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Tips Menumbuhkan Rambut Pria Secara Cepat';
        $blog->category = 'Hair Loss';
        $blog->date = '6 January 2021';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tips-cepat-menumbuhkan-rambut-pria.jpg';
        $blog->url_name = 'tips-cepat-menumbuhkan-rambut-pria';
        $blog->subtitle = "Mau rambut tumbuh lebih cepat? Berikut tips untuk membuat rambut pria tumbuh lebih cepat.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Pertumbuhan rambut seseorang nggak semua memiliki kecepatan waktu yang sama. Tiap orang akan mengalami masa pertumbuhan yang berbeda. Faktor yang memengaruhinya pun berbeda. Namun, kamu nggak perlu khawatir jika ingin menumbuhkan rambut dengan cepat. Ada beberapa cara yang bisa dilakukan untuk membuat rambut tumbuh lebih cepat. </p>
                </i>
            </div>

            <p>Rambut rontok menjadi masalah yang cukup mengganggu bagi sebagian besar orang, termasuk para pria. Pertumbuhan rambut pun cukup memakan waktu sehingga ketika terjadi kerontokan, rambut terlihat semakin tipis dan hal itu dapat menurunkan kepercayaan diri seseorang. </p>
            <p>Rambut sangat memengaruhi keseluruhan penampilan seorang pria. Jika awalnya kamu memiliki rambut gondrong, lalu memotongnya pendek atau cepak, maka wajah dan keseluruhan penampilan akan berbeda jauh dengan sebelumnya.</p>
            <p>Sebaliknya, untuk kamu yang mengalami masalah rambut rontok, belum lagi beberapa bagian sudah mengalami kebotakan dini dan mundurnya garis rambut bagian dahi, pasti ingin menumbuhkan kembali rambut yang rontok untuk memperbiki penampilan. </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/kesalahan-dalam-merawat-rambut/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/kesalahan-dalam-merawat-rambut.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Hair Loss</div>
                            <div class="title">Ukuran Penis Rata-Rata yang Pria Harus Ketahui. Berapa Ukuranmu?</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Ada beberapa kesalahan umum yang dilakukan pria dalam melakukan perawatan rambut. Ketahui kesalahannya dan mulai tinggalkan segera.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Menumbuhkan Rambut dengan Cepat Secara Alami</b></h2>
            <p>Cepat atau lambatnya pertumbuhan rambut seseorang salah satunya dipengaruhi oleh faktor gen. Ada yang pertumbuhan rambutnya cepat, namun ada pula yang memakan waktu lama. Tak hanya gen, cara seseorang merawat rambut juga bisa memengaruhi pertumbuhan rambut itu sendiri. </p>
            <p>Untuk alasan kedua, kamu nggak perlu khawatir karena kamu bisa menumbuhkan rambut dengan cepat melalui berbagai cara berikut yang bisa kamu lakukan.</p>
            <h3><strong>1.  Rutin keramas</strong></h3>
            <p>Merupakan persepsi yang salah jika menganggap rambut yang mengalami kerontokan dilarang sering keramas karena bisa menambah masalah kerontokan. Padahal, keramas secara rutin justru membantu rambut lebih sehat. Rambut yang bersih akan bebas minyak dan kotoran yang menimbulkan masalah rambut, terutama kerontokan. </p>
            <h3><strong>2.  Jangan menyisir rambut saat masih basah</strong></h3>
            <p>Kebanyakan pria setelah keramas akan merapikan rambut dengan sisir. Hal itu justru membuat rambut menjadi rontok karena saat rambut basah dan kusut kemudian kamu merapikannya dengan sisir, rambut akan tertarik dan menyebabkan kerontokan. Jadi, saat rambut masih basah, rapikan dengan menggunakan jari-jari tanganmu saja. </p>
            <h3><strong>3.  Biarkan kering secara alami</strong></h3>
            <p>Bukan hanya rambut wanita, beberapa pria mengeringkan rambut dengan hair dryer. Mulai sekarang hindari mengeringkan rambut dengan suhu yang tinggi. Lebih baik biarkan rambut kering secara alami. Jika kamu menggunakan pomade atau hair wax, gunakan setelah rambut kering dengan sendirinya untuk menghindari kerusakan dan kerontokan rambut.</p>
            <h3><strong>4.  Mengonsumsi protein dan vitamin</strong></h3>
            <p>Batang rambut tumbuh di folikel kemudian rambut mati didorong keluar dan menyebabkan rambut rontok secara alami. Pada fase tertentu, rambut akan mengalami rontok untuk mengeluarkan rambut mati dan menggantinya dengan rambut baru. </p>
            <p>Nah, untuk membuat sel baru, tubuh membutuhkan protein dan asam amino. Diet yang sehat dengan mengonsumsi makanan tinggi protein untuk merangsang reproduksi sel dan pertumbuhan rambut lebih cepat. Kamu bisa mengonsumsi vitamin A, B, C, dan E yang didapatkan dari bayam, kubis, wortel, apricot, strawberry, kiwi, dan nanas. Untuk sumber protein, kamu bisa mengonsumsi telur, ikan, ayam, kacang, kismis, dan susu. Vitamin dan protein tersebut bantu rambut kamu tumbuh lebih cepat secara alami. </p>
            <h3><strong>5.  Tidur cukup</strong></h3>
            <p>Jangan sepelekan masalah tidur karena porsi tidur juga memengaruhi pertumbuhan rambut. Saat tidur, tubuh meningkatkan sekresi hormone pertumbuhan yang dapat meningkatkan reproduksi sel, termasuk sirkulasi ke kulit dan rambut juga meningkat saat kamu tidur. Cukupi porsi tidur setidaknya 7 – 8 jam semalam untuk membantu rambut tumbuh lebih cepat. </p>
            <p>Selain itu, perhatikan juga bahan-bahan yang terkandung di dalam produk perawatan dan penataan rambut. Bahan-bahan tertentu bisa membuat rambut lebih kuat dan sehat. Sementara, beberapa bahan lainnya jsutru akan merusak rambut. </p>
            <p>Bahan-bahan yang baik untuk rambut :</p>
            <p>
                <ul>
                    <li>Protein</li>
                    <li>Keratin</li>
                    <li>Caffeine</li>
                    <li>Aloe vera</li>
                    <li>Essential oils</li>
                    <li>Shea butter</li>
                    <li>Fruit and seeds oil (kelapa, argan, zaitun, dan sebagainya)</li>
                </ul>
            </p>
            <p>Bahan-bahan yang harus dihindari :</p>
            <p>
                <ul>
                    <li>Sulfate</li>
                    <li>Alkohol</li>
                    <li>Peroxide</li>
                    <li>Bleach</li>
                    <li>Phthalates</li>
                </ul>
            </p>
            <p>Jika kamu mengalami rambut yang rontok berkepanjangan, segera  <a href="'. base_url() .'questionaire/hairloss/start/" style="text-decoration: underline;">konsultasikan</a> masalah kamu kepada dokter ahli Norm untuk mendapatkan perawatan yang tepat untuk mengatasi rontok dan menumbuhkan rambut secara cepat. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Wajib Tahu! Durasi Berhubungan Seks yang Ideal';
        $blog->category = 'Sex';
        $blog->date = '29 December 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/durasi-berhubungan-seks-ideal.jpg';
        $blog->url_name = 'durasi-berhubungan-seks-ideal';
        $blog->subtitle = "Masih penasaran durasi yang ideal dalam berhubungan seks itu berapa? Ini jawabannya!";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Meski hampir setiap orang melakukan hubungan seks, namun nggak sedikit yang masih bertanya-tanya berapakah durasi berhubungan seks yang ideal, misalkan durasi saat berhubungan dan seminggu mestinya berapa kali.</p>
                    <p>Beberapa ilmuwan bahkan melakukan penelitian untuk menjawab pertanyaan mengenai durasi yang ideal dalam berhubungan seks. Selain itu, berhubungan seks juga memiliki manfaat tersendiri bagi kesehatan tubuh.</p>
                </i>
            </div>

            <p>Bagi sebagian besar orang, durasi dalam berhubungan seks bisa menjadi salah satu syarat mendapatkan kepuasan seksual. Terlebih bagi pasangan muda yang baru menikah, durasi hubungan seksual menjadi hal yang paling dieksplorasi dengan berbagai posisi demi mendapatkan kepuasan.</p>
            <p>Namun, durasi hubungan seks setiap orang tentu akan berbeda-beda. Banyak faktor yang memengaruhi perbedaan durasi setiap orang. Usia juga menjadi salah satu faktor yang memengaruhi durasi dalam berhubungan seksual.</p>
            <h2><b>Manfaat Hubungan Seksual Untuk Kesehatan</b></h2>
            <p>Terlepas dari hakikat berhubungan untuk bereproduksi, hubungan seks memiliki manfaat yang baik bagi kesehatan tubuh. Beberapa manfaat hubungan seks bagi kesehatan tubuh adalah sebagai berikut :</p>
            <h3><strong>1.  Menjaga kekebalan tubuh</strong></h3>
            <p>Orang yang melakukan hubungan seks secara rutin memiliki daya tahan tubuh yang lebih kuat untuk melawan kuman, virus, dan bakteri penyebab penyakit. Hubungan seks juga dapat meningkatkan kadar antibodi yang melindungi tubuh dari infeksi. </p>
            <h3><strong>2.  Membakar kalori</strong></h3>
            <p>Hubungan seks merupakan kegiatan fisik yang bisa membakar kalori. Berhubungan seks selama 30 menit bisa membakar kalori sebanyak 200 kalori. </p>
            <h3><strong>3.  Menurunkan tekanan darah</strong></h3>
            <p>Tekanan darah tinggi bisa mnyebabkan penyakit jantung dan stroke. Saat berhubungan intim, pembuluh darah melebar dan membantu meningkatkan aliran oksigen dan nutrisi ke seluruh tubuh serta mengurangi tekanan darah.</p>
            <h3><strong>4.  Meredakan stres</strong></h3>
            <p>Selain meredakan stres, berhubungan seks juga bisa meredakan stress dan membuat tubuh lebih rileks. Tak hanya berhubungan seks, kegiatan fisik seperti berpelukan atau berpegangan tangan juga bisa memicu pelepasan oksitosin pada tubuh dan memicu rasa bahagia pada otak. </p>
            <h3><strong>5.  Membuat awet muda</strong></h3>
            <p>Berhubungan seks bisa membuat kamu lebih awet muda karena bisa mengurangi stress, meningkatkan perasaan senang, dan bikin tidur lebih nyenyak. Hal itu bisa membuat kamu tampak lebih muda dan sehat. </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/5-posisi-sex-pria-terbaik/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/5-posisi-sex-pria-terbaik.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">5 Posisi Seks Agar Pria Lebih Tahan Lama</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Tahan lama di ranjang selama berhubungan seks memang jadi hal yang diinginkan banyak pasangan. Inilah beberapa posisi seks yang bisa dipraktikkan agar seks lebih tahan lama.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Durasi Hubungan Seksual yang Ideal </b></h2>
            <p>Bicara soal durasi berhubungan, sebetulnya nggak ada durasi yang spesifik untuk menggambarkan idealnya kegiatan hubungan seksual. Namun, melansir dari Halodoc, menurut pakar <i>dating, sex, and relationship</i>, Tracey Cox, hubungan seksual yang dilakukan seminggu sekali terhitung sangat minim. Sedangkan durasi yang ideal dalam seminggu adalah 3 – 4 kali berhubungan seks. </p>
            <p>Pasangan yang melakukan hubungan seks hanya enam kali sebulan atau setara dengan 1 – 2 kali seminggu dapat menimbulkan mood yang kurang baik, cepat marah, mudha tersinggung dengan hal yang dilakukan pasangan hingga menurunnya semangat kerja. </p>
            <p>Seperti yang sudah disebutkan sebelumnya bahwa berhubungan seks selain bisa membangun kedekatan yang tinggi pada pasangan, juga dapat memperbaiki mood dan meningkatkan imunitas tubuh. Makanya, setiap pasangan disarankan untuk melakukan hubungan intim secara rutin untuk memperoleh manfaat yang baik bagi kesehatan tubuh. </p>
            <p>Namun, harap diingat pula bahwa manfaat kesehatan itu bisa didapatkan jika pasangan melakukan hubungan seks hanya dengan pasangan resminya saja. Berganti-ganti pasangan sangat tidak disarankan karena justru dapat memicu penyakit menular seksual. </p>
            <p>Hasil penelitian dari National Centre for Biotechnology Information (NCBI), seperti yang dituliskan dalam Kumparan Sains, menyebutkan bahwa variasi waktu rata-rata yang dibutuhkan pasangan dalam berhubungan seks berkisar 5,4 menit. </p>
            <p>Selain itu, mengutip dari Helathline, sebuah studi yang dilakukan oleh Society for Therapy and Research, menyepakati bahwa durasi ideal dalam berhubungan seks adalah 7 – 13 menit.</p>
            <h2><b>Faktor yang Memengaruhi Durasi Hubungan Seks </b></h2>
            <p>Durasi setiap orang tentunya akan berbeda-beda tergantung bagaimana keadaan orang tersebut. Banyak faktor yang memengaruhi, di antaranya adalah :</p>
            <h3><strong>1.  Usia</strong></h3>
            <p>Semakin bertambahnya usia seseorang, durasi yang dilalui dalam berhubungan seks akan menurun. Tapi, nggak menutup kemungkinan juga bagi pria yang masih berusia muda memiliki durasi yang pendek dalam berhubungan seks. Faktor yang memengaruhi durasi di usia muda biasanya adalah tingkat stres yang tinggi, gaya hidup nggak sehat, serta faktor lainnya.</p>
            <h3><strong>2.  Ejakulasi dini</strong></h3>
            <p>Ejakulasi dini merupakan gangguan kesehatan seksual yang membuat pria nggak mampu untuk mendapatkan atau mempertahankan ereksi sehingga dapat menyebabkan durasi hubungan seksual menjadi sangat pendek dan membutuhkan waktu lama untuk mencapai klimaks serta mendapatkan kepuasan seksual.</p>
            <p>Menjaga kesehatan dan kebugaran tubuh merupakan hal yang sangat dibutuhkan untuk mendapatkan durasi yang diinginkan oleh pasangan. Selain itu, durasi yang lama juga bisa didapatkan dengan kerjasama dari pasangan untuk membantu pria mendapatkan kepuasan seksual. </p>
            <p>Jika kamu mengalami kesulitan mendapatkan ereksi atau ingin mendapatkan durasi yang lebih lama dalam berhubungan, konsultasi segera dengan dokter ahli dari <a href="' . base_url() . '" style="text-decoration: underline;">norm</a> untuk mendapatkan solusi dan kehidupan seksual yang lebih baik. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = '5 Destinasi Bawah Laut Indonesia Paling Eksotis';
        $blog->category = 'Other';
        $blog->date = '23 December 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/destinasi-bawah-laut-eksotis.jpg';
        $blog->url_name = 'destinasi-bawah-laut-eksotis';
        $blog->subtitle = "Berencana liburan? Ini rekomendasi destinasi bawah laut paling eksotis yang wajib dicoba!";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Indonesia merupakan negara yang terdiri dari gugusan pulau-pulau indah nan kaya di setiap sudutnya. Mulai dari kekayaan alam hingga pesona alamnya yang mampu memikat hati siapa pun yang melihatnya, termasuk turis mancanegara.</p>
                    <p>Keindahan itu bukan di darat saja, tapi juga bawah laut yang eksotis dan mampu memberikan pengalaman diving yang menakjubkan. Beberapa wisata bawah laut ini merupakan wisata paling eksotis dan bisa menjadi pilihanmu untuk melakukan diving serta menikmati keindahan baharinya. </p>
                </i>
            </div>

            <p>Serupa dengan gadis remaja yang mempesona dan eksotis, Indonesia merupakan negara kepulauan terbesar di dunia yang memiliki hasil alam yang melimpah dan keindahan yang menakjubkan bagi siapa pun yang melihatnya. Keindahan itu juga sampai ke bawah laut Indonesia yang terkenal hingga ke seluruh dunia. Membuat semua orang berlomba ingin merasakan keindahannya.</p>
            <p>Bawah laut Indonesia menjadi destinasi surgawi bagi para wisatawan penggemar diving atau pun yang ingin mencoba diving dan berwisata bawah laut. Keindahan terumbu karang dan berbagai jenis ikan yang bahkan nggak bisa kita temui sehari-hari ini menawarkan pengalaman yang fantastis. </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/tips-bepergian-naik-pesawat-saat-pandemi/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/tips-bepergian-naik-pesawat-saat-pandemi.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Other</div>
                            <div class="title">Berencana Berpergian? Ini Tips Naik Pesawat Saat Pandemi COVID-19</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Ingin berpergian dengan jalur udara? Ini tips tetap aman naik pesawat selama pandemi COVID-19', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Destinasi Wisata Bawah Laut Indonesia yang Paling Eksotis dan Menawan</b></h2>
            <p>Wisata bahari Indonesia bukan tanpa alasan menjadi destinasi yang diminati turis lokal maupun mancanegara. Keindahan dan pesonanya menjadi candu bagi mereka yang sudah pernah melakukan wisata bawah laut dan menjadi destinasi baru bagi mereka yang belum pernah merasakannya.</p>
            <p>Berikut 5 destinasi wisata bawah laut paling eksotis dan menawan di Indonesia.</p>
            <h3><strong>1.  Raja Ampat, Papua</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/rajaampat.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : liveaboard.com</i></div>
            </p>
            <p>Bahkan kata “menakjubkan” saja rasanya nggak cukup untuk menggambarkan keindahan daerah yag punya 610 gugusan pulau ini. Raja Ampat menjadi incaran wisatawan, baik lokal maupun internasional karena keindahannya yang tiada tara. </p>
            <p>Raja Ampat merupakan surganya para penyelam karena keindahan dan pesona yang ditawarkan. Nggak heran kalau Raja Ampat masuk ke dalam daftar 10 situs diving terbaik dunia dan menjadi destinasi wajib bagi para penyelam dari berbagai belahan dunia. Raja Ampat juga mendapat julukan sebagai Maldives versi Indonesia. </p>
            <p>Jika kamu berlibur ke Raja Ampat, jangan sampai melewatkan kesempatan untuk mencoba diving dan menikmati wisata bawah laut. Kamu bisa menyelami perairan Pulau Misool, Batanta, atau Waigeo untuk pengalaman menyelam yang menakjubkan. Salah satu spot diving bernama Gua Tomolo yang menawarkan keindahan ekosistem yang jarang ada di tempat lain. </p>
            <h3><strong>2.  Bunaken, Sulawesi Utara</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/bunaken.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : wallpaperTip</i></div>
            </p>
            <p>Taman Laut Bunaken merupakan salah satu spot diving terbaik yang nggak boleh dilewatkan. Taman Laut Bunaken berada di Sulawesi Utara dan menjadi cagar alam dengan daya tarik yang memikat dengan pemandangan bawah laut yang eksotis. </p>
            <p>Kejernihan airnya membuatmu bebas menikmati berbagai terumbu karang, penyu, dan biota laut di bawahnya. Ada banyak tempat yang bisa kamu singgahi dalam penyelaman, namun ada tiga tempat favorit para penyelam lokal maupun mancanegara, yaitu Lekuan, Celah That, dan Fukui Point. </p>
            <p>Taman Laut Bunaken menjadi habitat sekitar 390 spesies terumbu karang, berbagai jenis ikan, mamalia laut, moluska, hingga hutan mangrove. Keindahan-keindahan tersebut membuat Bunaken masuk ke dalam daftar cagar biosfer oleh UNESCO. </p>
            <h3><strong>3.  Wakatobi, Sulawesi Tenggara</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/wakatobi.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : wakatobi.com</i></div>
            </p>
            <p>Wakatobi merupakan wisata bawah laut yang eksotis dengan keindahan dari berbagai terumbu karang berwarna-warni. Wakatobi dikenal dunia semenjak Ekspedisi Wallacea pada 1995 menyebutkan bahwa kawasan ini sangat kaya dengan spesies coral. Dari total 850 spesies coral dunia, 750 jenisnya berada di Wakatobi. Selain itu, ada lebih dari 112 jenis karang dengan 13 famili dapat kamu temukan di Wakatobi. </p>
            <p>Untuk titik selamnya sendiri, kamu bisa mendapatkan spot yang bagus-bagus karena ada sekitar 40 situs diving yang jarang diselami orang. Kalau kamu beruntung, dalam penyelamannya juga kamu bisa bertemu dengan lumba-lumba dan penyu. Salah satu spot diving menarik yang bisa dijelajahi adalah Pantai Sombu yang ada di Pulau Wangi-Wangi. Kamu juga bisa mencoba beberapa titik selam lain, yaitu House Reef, Cornucopia, Coral Garden, dan Roma. </p>
            <h3><strong>4.  Pulau Komodo, Flores</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/pulaukomodo.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Twisata</i></div>
            </p>
            <p>Pulau yang merupakan habitat asli Komodo ini memiliki pemandangan bawah laut yang menawan bagi para penyelam. Wisata bawah laut ini menjadi wisata bahari yang populer dan merupakan kawasan cagar alam langka di dunia dengan kekayaan terumbu karang tropis yang penuh warna dan eksotis. </p>
            <p>Ketika menyelam, kamu akan disuguhkan atraksi ikan-ikan kecil berwarna-warni, menambah keindahan bawah laut. Salah satu titik selam terfavorit adalah Pulau Kanawa yang terletak di tengah perairan Kepulauan Komodo. Pulau ini juga memiliki pemandangan pantai yang sangat cantik. Selain itu, ada beberapa titik lain yaitu, Pulau Tatawa Besar, Makassar Reef, Batu Bolong, dan Manta Point. </p>
            <h3><strong>5.  Karimunjawa, Jawa Tengah</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/karimunjawa.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : factsofindonesia</i></div>
            </p>
            <p>Taman Wisata Laut Karimunjawa terletak di Jepara, Jawa Tengah dan ditetapkan sebagai Tamn Nasional pada 2001. Pada kawasan wisata terdapat lima pulau, yaitu Karimunjawa, Kemujan, Parang, Nyamuk, dan Genting. </p>
            <p>Taman Wisata Laut Karimunjawa memiliki 242 jenis ikan hias dan 133 genera fauna akuatik. Keindahan perairannya dilengkapi dengan adanya terumbu karang, spons, karang lunak, akar bahar, kerang merah, penyu, dan ikan hias. </p>
            <p>Untuk kamu yang ingin menyelam, salah satu lokasi diving yang terkenal adalah Pulau Menjangan Kecil. Keindahan terumbu karang menjadi andalan di pulau ini. Selain itu, ada Tanjung Gelam dan Cemara Kecil untuk kegiatan diving. Jika kamu ingin berjemur, bisa dilakukan di Pulau Menjangan Besar dan Cemara Kecil. </p>
        ';
        $arr_blog[] = clone $blog;

        if (time() > 1608570000 && time() <= 1609520399)
        {
            $blog->name = 'Norm Holiday Season Sale. Discount 20% All Products';
            $blog->category = 'Promo';
            $blog->date = '22 December 2020';
            $blog->image = 'https://www.norm.id/assets/images/main/blog/holiday-sale-banner.jpg';
            $blog->url_name = 'end-year-sale';
            $blog->subtitle = "Norm Holiday Season Sale. Discount 20% All Products";
            $blog->description = '
                <p>Akhir tahun merupakan waktu yang tepat untuk mempersiapkan diri sebelum beranjak ke tahun yang baru. Untuk itu Norm dukung kamu untuk mempersiapkan diri menjadi lebih baik di tahun yang baru dengan Norm <b>Holiday Season Sale</b>.</p>
                <p>Melalui Year End Super Sale ini, kamu berhak mendapatkan diskon <b>20% All Products plus Free Gift</b> mulai transaksi pada periode 22 Desember 2020 – 01 Januari 2021.</p>
                <h2><b>Syarat & Ketentuan</b></h2>
                <p>
                    1. Promo berlaku pada tanggal 22 December 2020 (pukul <strong>00.00 WIB</strong>) – 1 January 2021 (pukul <strong>23:59 WIB</strong>)<br>
                    2. Promo <strong>diskon 20%</strong> berlaku untuk semua produk Norm<br>
                    3. Promo berlaku untuk semua pelanggan Norm baik pelanggan baru ataupun lama <br>
                    4. Potongan maksimal diskon adalah <strong>Rp 150 ribu</strong><br>
                    5. Diskon hanya berlaku pada <strong>1 (satu) kategori produk</strong> selama periode berlangsung<br>
                    6. Jika pembelian terdiri lebih dari satu kategori produk, maka diskon hanya berlaku pada produk dengan harga yang paling tinggi<br>
                    7. Promo berlaku untuk semua kategori produk yang harus melalui konsultasi dengan dokter di website dan telah mendapatkan rekomendasi produk dari dokter<br>
                    8. Promo berlaku untuk 1 (satu) kali transaksi dengan kode promo: <strong>NORM20</strong><br>
                    9. Promo ini tidak dapat digabungkan dengan promo lain yang tersedia di website Norm<br>
                    10. Promo berlaku untuk pemesanan melalui website ataupun pemesanan secara manual melalui customer service Norm<br>
                    11. Promo ini berlaku hanya untuk 100 pembeli pertama<br>
                    12. Contoh perhitungan diskon:<br>
                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 1</span><br>
                    - Customer Norm melakukan transaksi pertama untuk membeli produk 1 paket Complete Hair Loss Kit seharga Rp 469.000. Maka ia berhak mendapatkan diskon special sebesar 20% dan 1 pc masker.<br>
                    <strong>Potongan diskon yang ia terima yaitu Rp 93.800 dan total harga produk menjadi Rp 375.200</strong><br>
                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 2</span><br>
                    -  Customer Norm melakukan transaksi pertama untuk membeli produk 2 paket Complete Hair Loss Kit seharga Rp 938.000. Maka, ia berhak mendapatkan diskon sebesar 20% dan 1 pc masker.<br>
                    <strong>Potongan diskon maksimal yang ia terima yaitu Rp 150.000 dan total harga produk menjadi Rp 788.000.</strong><br>
                    13. Norm secara sepihak dapat membatalkan pesanan apabila tidak sesuai dengan syarat & ketentuan yang berlaku dan/atau jika ditemukan adanya indikasi kecurangan pada masa promo ini.
                </p>
                <p>Inilah waktu yang tepat untuk menyiapkan diri mendapatkan penampilan yang lebih baik di tahun yang baru. Gabung bersama 12,000+ pria yang telah membuktikan hasil nyata dengan Norm. </p>
                <p>Selamat Natal dan Tahun Baru 2021.</p>
                <p><strong>#JoinTheNorm #DedicatedforMen</strong></p>
            ';
            $arr_blog[] = clone $blog;
        }

        $blog->name = 'Berencana Berpergian? Ini Tips Naik Pesawat Saat Pandemi COVID-19';
        $blog->category = 'Other';
        $blog->date = '18 December 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tips-bepergian-naik-pesawat-saat-pandemi.jpg';
        $blog->url_name = 'tips-bepergian-naik-pesawat-saat-pandemi';
        $blog->subtitle = "Ingin berpergian dengan jalur udara? Ini tips tetap aman naik pesawat selama pandemi COVID-19";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Perjalanan dengan jalur udara sempat ditutup karena pandemi COVID-19 dan berimbas pada melemahnya sektor wisata dan bisnis perjalanan. Namun, kini pemerintah sudah mulai membuka jalur perjalanan keluar kota dan luar negeri, terutama melalui jalur udara. </p>
                    <p>Mungkin kamu pun akan melakukan penerbangan ke suatu tempat menggunakan pesawat. Meski begitu, kamu harus tetap memperhatikan protokol kesehatan agar terhindar dari virus corona serta tetap aman dan nyaman selama perjalanan.</p>
                </i>
            </div>

            <p>Pandemi COVID-19 membuat perubahan besar di seluruh dunia. Setiap orang wajib melakukan protokol kesehatan di mana pun dan kapan pun, seperti menggunakan masker, mencuci tangan, dan menjaga jarak. </p>
            <p>Setiap orang juga wajib melakukan isolasi mandiri di rumah dan mulai muncul budaya baru <i>work from home</i> karena hampir sebagian besar kantor nggak membuka kantornya dan mewajibkan karyawan untuk bekerja dari rumah. </p>
            <p>Namun, kini Indonesia sudah memasuki masa new normal di mana setiap orang sudah bisa beraktifitas di luar rumah tapi tetap harus memperhatikan protokol kesehatan. Jalur penerbangan pun sudah mulai banyak dibuka dengan syarat harus menerapkan protokol kesehatan.</p>
            <h2><b>Ini Tips Naik Pesawat dengan Aman dan Nyaman Selama Pandemi COVID-19</b></h2>
            <p>Sebelum pandemi, banyak orang yang memiliki rencana untuk menghabiskan masa libur akhir tahun dengan berpergian ke luar kota atau ke luar negeri. Naik pesawat jadi solusi moda perjalanan yang dipilih karena paling cepat dan hemat waktu.</p>
            <p>Tapi, saat pandemi seperti ini, ada yang memutuskan untuk tetap di rumah selama liburan. Namun, nggak sedikit juga yang tetap berpergian dengan menggunakan pesawat. </p>
            <p>Jika kamu ingin berpergian menggunakan pesawat, sebaiknya tetap berhati-hati agar terhindar dari virus corona. Bebebapa tips berikut bisa membantu kamu tetap aman dan nyaman selama berpergian dengan menggunakan pesawat. </p>
            <h3><strong>1.  Gunakan masker</strong></h3>
            <p>Menggunakan masker merupakan hal utama yang wajib dilakukan selama masa pandemi. Terlebih selama di luar rumah, kamu tetap harus menggunakan masker untuk menjaga diri dari penularan virus. </p>
            <p>Menggunakan masker saat berada di pesawat bisa melindungi kamu dari kuman dan virus di udara, terutama saat ada orang di sekitarmu yang sedang batuk atau bersin. </p>
            <h3><strong>2.  Pilih kursi dekat jendela</strong></h3>
            <p>Ada beberapa maskapai penerbangan yang menerapkan protokol kesehatan dengan memberikan jarak pada kursi pesawat, yaitu kursi bagian tengah nggak boleh diduduki dan menjadi pemisah antara penumpang satu dengan di sebelahnya. </p>
            <p>Kamu bisa memilih duduk di kursi dekat jendela. Mengapa begitu? Karena kursi dekat jendela nggak kena orang yang lalu-lalang sehingga bisa meminimalisir penyebaran virus di kursi yang kamu tempati. Selain itu, kamu juga lebih aman karena nggak dilewati oleh orang lain. </p>
            <h3><strong>3.  Bawa tisu pembersih dan hand sanitizer</strong></h3>
            <p>Sudah banyak merk yang menyediakan tisu basah yang bisa digunakan sebagai pembersih alat makan, gagang trolley, bahkan pegangan tangga atau kursi. Ketika sampai di dalam pesawat, bersihkan kursi dengan desinfektan dan lap hand rest dengan tisu pembersih. Sediakan selalu hand sanitizer dan gunakan kapan pun setelah kamu menyentuh benda-benda.</p>
            <h3><strong>4.  Pastikan tubuh tetap terhidrasi</strong></h3>
            <p>Siapkan air minum di dalam tas sebelum kamu berpergian sehingga kamu bisa minum kapan saja tanpa harus membeli minuman di luar. Kamu harus menjaga tubuh tetap terhidrasi. Saat tubuh kamu dehidrasi, tingkat risiko tertular virus atau bakteri bisa meningkat. Udara kering di dalam pesawat saat take off bisa menyebabkan selaput lendir di dalam hidung mengering sehingga kamu lebih mudah terserang virus atau bakteri.  </p>
            <h3><strong>5.  Bawa perlengkapan sendiri</strong></h3>
            <p>Beberapa maskapai penerbangan biasanya menyediakan bantal dan selimut untuk penerbangan jarak jauh. Jika kamu melakukan perjalanan jarak jauh, sebaiknya siapkan peralatan, seperti selimut dan bantal sendiri untuk menghindari penggunaan bersamaan dengan orang lain. Selain itu, peralatan milikmu juga membuatmu lebih nyaman selama di perjalanan. </p>
            <h2><b>Sebagai Syarat Naik Pesawat, Ini Beda Test Antibodi, Test Antigen, dan PCR</b></h2>
            <p>Kini setiap penumpang yang akan melakukan perjalanan menggunakan pesawat, wajib melampirkan hasil rapid test antibodi, swab antigen, atau swab PCR. Jenisnya tergantung syarat dan ketentuan dari setiap maskapai. </p>
            <p>Ada juga maskapai yang memasukkan paket tes usap pada tiket yang dibeli calon penumpang. Test biasanya dilakukan di gate sebelum check in. </p>
            <p>Nah, biar kamu paham, berikut perbedaan antara test antibodi, antigen, dan PCR serta bagaimana keakurasiannya.</p>
            <h3><strong>1.  Test Antibodi</strong></h3>
            <p>Pemeriksaan rapid test antibodi menggunakan darah yang sample nya diambil dari ujung jari. Rapid test antibodi untuk mencari antibodi terhadap virus corona. Tubuh manusia menghasilkan antibodi sebagai sebuah respon terhadap infeksi, misal virus. Antibodi ini umumnya muncul setelah terjadi infeksi di hari ke empat hingga seminggu lebih.  Hasil test antibodi biasanya keluar sekitar 10-15 menit setelah tes dilakukan. </p>
            <h3><strong>2.  Test Antigen</strong></h3>
            <p>Antigen merupakan zat atau benda asing, seperti racun, kuman, atau virus yang bisa masuk ke dalam tubuh. Sebagian antigen dianggap berbahaya bagi tubuh sehingga muncul sistem imunitas yang membentuk kekebalan tubuh.</p>
            <p>Antigen ini dapat dideteksi melalui pemeriksaan tes antigen. Rapid test antigen ini dilakukan dengan pengambilan sampel lendir hidung atau tenggorokan melalui swab. Tes antigen virus corona punya tingkat akurasi yang lebih baik dari rapid test antibodi, meski tidak seakurat PCR test dalam mendiagnosis virus COVID-19. </p>
            <h3><strong>3.  PCR</strong></h3>
            <p><i>Polymerase Chain Reaction</i> (PCR) merupakan mekanisme pembacaan kode genetik pada sampel untuk mengetahui keberadaan COVID-19. Tes PCR ini merujuk pada Reverse Transcriptase-Polymerase Chain reaction (RT-PCR). Tes PCR dilakukan dengan swab pada pangkal hidung dan tenggorokan untuk pengambilan sampel. </p>
            <p>Tes PCR ini mendeteksi pola genetic (DNA dan RNA) dari suatu sel, kuman, hingga virus. PCR juga merupakan tes yang direkomendasikan WHO untuk diagnosis COVID-19. Tingkat akurasinya terlbilang tinggi meski hasil tesnya cukup lama, sekitar 1-7 hari. </p>
            <p>Ke mana pun kamu pergi, jangan lupa untuk selalu mengenakan masker, mencuci tangan, dan menjaga jarak untuk mengurangi angka penularan virus COVID-19. Jaga selalu imun tubuh dengan olahraga, makan teratur, dan istirahat cukup serta mengelola stres dengan baik.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Tingkatkan Gairah Seks Dengan Latihan Yoga';
        $blog->category = 'Sex';
        $blog->date = '17 December 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/yoga-meningkatkan-gairah-seks.jpg';
        $blog->url_name = 'yoga-meningkatkan-gairah-seks';
        $blog->subtitle = "Yoga adalah latihan fisik dan mental untuk mengendalikan pikiran dan tubuh pria. Yoga memiliki manfaat salah satunya adalah meningkatkan gairah seksual dan mengatasi disfungsi ereksi.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Yoga adalah aktivitas fisik dan mental untuk mengendalikan pikiran dan tubuh pria dalam kehidupan sehari-hari. Latihan yoga memiliki manfaat yang sangat banyak, mulai dari membentuk dan meningkatkan massa otot tubuh, membakar lemak, menyembuhkan berbagai penyakit, menguatkan tulang dan sendi hingga dapat meningkatkan gairah seksual. Selain itu, yoga dapat menjadi salah satu cara untuk mengatasi masalah disfungsi ereksi. Terdapat sejumlah posisi yang dapat dipraktekkan untuk meningkatkan  gairah seksual dengan pasangan.</p>
                </i>
            </div>

            <p>Latihan yoga memiliki manfaat yang sangat banyak, mulai dari meningkatkan massa otot tubuh, membakar lemak, menyembuhkan berbagai penyakit, menguatkan tulang dan sendi hingga dapat meningkatkan gairah seksual pria dengan pasangannya. Selain itu, yoga dapat menjadi salah satu cara untuk mengatasi masalah disfungsi ereksi. </p>
            <p>Yoga adalah aktivitas fisik dan mental untuk mengendalikan pikiran dan tubuh dalam kehidupan sehari-hari. Sejumlah posisi dan gerakan yoga tak hanya baik bagi tubuh saja namun juga bisa meningkatkan gairah dalam hubungan seksual. Menurut penelitian terbaru dari <i>Journal of Sexual Medicine</i>, terdapat hubungan positif yang berkorelasi antara intensitas latihan yoga dan peningkatan gairah seks, bahkan pada pria yang telah mencapai umur 50 tahun ke atas. Berikut sejumlah posisi dan gerakan yoga yang dapat dipraktekkan untuk meningkatkan gairah seksual kamu dengan pasangan.</p>
            <h3><strong>1. Reclining Pigeon</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/reclining-pigeon.jpg" style=" width: 500px; max-width: 100%;">
            </p>
            <p><i>Reclining Pigeon</i> bisa dilakukan dalam keadaan berbaring terlentang dengan lutut kaki kiri ditekuk, taruh kaki kanan di atas paha kaki kiri, kemudian angkat kaki kiri sekitar 20-30 cm dari lantai. Secara perlahan, tarik kedua kaki ke arah dada, sampai kamu merasakan adanya otot-otot kaki tertarik, kemudian tahan selama 45 detik hingga 2 menit. Setelah itu, ganti dengan menaruh kaki kiri ke atas paha kaki kanan dan ulangi gerakannya.</p>
            <p>Teknik ini sangat baik bagi pria untuk meningkatkan gairah bercinta dan khususnya pada posisi <i>men on top</i> ketika berhubungan seks, karena dapat membuat sudut penetrasi yang tepat. </p>
            <h2><strong>2. Reclining Bound Angle</strong></h2>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/reclining-angel.jpeg" style=" width: 500px; max-width: 100%;">
            </p>
            <p>Jenis teknik <i>reclining bound angle</i> akan membuat kamu tahan lama ketika melakukan posisi misionaris saat berhubungan seksual. Teknik ini dapat dilakukan dengan berbaring terlentang, letakkan tangan kiri dan kanan menyamping serta selanjutnya tekuk kedua kaki hingga telapak kaki saling bertemu. Pertahankan posisi tersebut hingga 10 menit kemudian atur nafas secara teratur.</p>
            <h2><strong>3.  Pelvic Tilts</strong></h2>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/pelvic-tilts.jpg" style=" width: 500px; max-width: 100%;">
            </p>
            <p>Salah satu gerakan yoga untuk meningkatkan gairah bercinta adalah <i>pelvic tilts</i>. Teknik ini berguna untuk  mengurangi sakit pada bagian panggul dan juga untuk memperkuat panggul. Kamu cukup berbaring telentang dengan lutut ditekuk, dan telapak kaki mendatar. Kemudian letakkan tangan di samping tubuh. Naik-turunkan panggul sehingga tubuh membentuk posisi jembatan. Tahan otot perut sementara panggul naik, kemudian perlahan-lahan turunkan kaki ke lantai. Kamu dapat mengulangi teknik gerakan pelvic tilts hingga 30 kali dalam 1 hari. </p>
            <h3><strong>4.  Happy Baby Pose </strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/happy-baby-pose.jpg" style=" width: 500px; max-width: 100%;">
            </p>
            <p>Gerakan <i>happy baby pose</i> dapat membuat kamu lebih lincah saat berhubungan seksual dan selain itu berfungsi untuk mengurangi rasa sakit pada bagian tubuh tertentu seperti punggung ataupun kaki. Kamu dapat berbaring telentang, tekuk lutut ke arah dada, kemudian pegang ujung kaki dengan kedua tangan. Sejajarkan pergelangan kaki dengan lutut sehingga punggung tegak lurus di lantai. Lakukan terus menerus dengan menahan selama 3 sampai 5 menit.</p>
            <h3><strong>5.  Downward Facing Dog</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/downward-facing-dog.png" style=" width: 500px; max-width: 100%;">
            </p>
            <p>Teknik <i>downward facing dog</i> paling umum dan banyak dilakukan. Gerakan teknik ini berfungsi untuk meningkatkan kemampuan otot pinggul dan kontraksi otot perut. Kamu dapat melakukan dengan berlutut di atas matras, rentangkan kedua tangan ke atas hingga kedua telapak tangan menyatu, lalu turunkan tangan di depan dada. Kemudian taruh kedua telapak tangan di atas matras, lalu dorong tubuh naik sehingga membentuk pose downward facing dog. Pastikan posisi punggung lurus, tidak melengkung, untuk menghindari cedera. Tarik napas sekurang-kurangnya tiga kali saat kamu sedang melakukan teknik ini. </p>
            <h3><strong>6.  Dead Bug</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/dead-bug.jpg" style=" width: 500px; max-width: 100%;">
            </p>
            <p>Teknik <i>dead Bug</i> dapat dilakukan dengan cara berbaring terlentang dengan posisi tulang ekor dibawah. Kemudian, angkat kedua kaki ke atas dan pegang bagian telapak kaki dengan tangan hingga dengkul menempel ke perut. Setelah itu, gerakan kedua kaki seperti posisi sedang mengayuh sepeda dan kedua tangan digerakkan ke arah kepala secara bergantian satu sama lain. Jenis teknik ini membuat daerah sekitar pinggul terbuka, sehingga tidak menyebabkan rasa sakit saat berhubungan berhubungan seksual. </p>
            <p>Kamu bisa melakukan berbagai jenis teknik yoga tersebut untuk meningkatkan gairah dan hasrat seksual. Dengan merelaksasi tubuh, yoga dapat membuat pikiran menjadi tenang dan tidak stress serta membantu pria untuk mengatasi gangguan kesehatan seksual termasuk diantaranya masalah disfungsi ereksi.</p>
            <p>Selain itu, kamu bisa berkonsultasi secara medis dengan dokter ahli norm untuk mengatasi <a href="' . base_url() . 'ed/" style="text-decoration: underline;">disfungsi ereksi</a>. Dokter akan memberikan rekomendasi produk yang tepat dan efektif sehingga kamu dapat memiliki hubungan seksual yang berkualitas bersama pasangan.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Makanan yang Harus Dihindari Pria yang Mudah Berjerawat';
        $blog->category = 'Acne';
        $blog->date = '16 December 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/makanan-untuk-pria-berjerawat.jpg';
        $blog->url_name = 'makanan-untuk-pria-berjerawat';
        $blog->subtitle = "Punya wajah gampang berjerawat memang cukup menyulitkan. Salah satu cara untuk menyiasatinya adalah dengan menghindari makanan yang bisa memicu jerawat.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Masalah jerawat merupakan masalah umum yang hampir semua orang mengalaminya. Setiap pria punya masalahnya sendiri, mulai dari penyebab, hormon, dan sebagainya. Ada yang berjerawat hanya saat puber saja, ada pula yang hingga usia sudah bertambah masih saja jerawatan sampai sekarang.</p>
                    <p>Nggak sedikit pula yang memiliki wajah gampang jerawatan. Salah makan sedikit bisa timbul jerawat, stres sedikit langsung jerawatan, sampai lupa cuci muka saja sudah muncul jerawat di hampir seluruh wajah. Punya wajah mudah berjerawat memang cukup memusingkan, namun pria bisa menyiasatinya dengan beberapa hal, salah satunya adalah menghindari makanan yang memicu jerawat.</p>
                </i>
            </div>

            <p>Faktor penyebab jerawat sangat beragam. Mulai dari gaya hidup, makanan, hingga tingkat stres. Selain itu, banyak juga pria yang mengalami masalah bukan hanya jerawat semata tapi juga kulit yang berminyak, kering, bahkan kombinasi.</p>
            <p>Bukan hanya faktor dari luar saja yang bisa menyebabkan jerawat, seperti debu dan kotoran, tapi juga dari dalam, seperti makanan dan pengaruh gaya hidup yang nggak sehat. Perawatan dari luar tubuh saja nggak cukup untuk bisa mengatasi wajah yang mudah berjerawat, harus dari luar dan dalam agar lebih maksimal.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/minum-alkohol-bikin-jerawatan/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/minum-alkohol-bikin-jerawatan.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Acne</div>
                            <div class="title">Ternyata Kebiasaan Minum Alkohol Bisa Bikin Jerawatan</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Mengonsumsi alkohol bukan hanya berpengaruh pada organ tubuh saja, tapi juga kesehatan kulit. Bagaimana alkohol bisa membuat kulit berjerawat?', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Makanan yang Wajib Dihindari Pria dengan Wajah Mudah Berjerawat</b></h2>
            <p>Makanan memang punya peran yang signifikan untuk kesehatan tubuh dan kulit. Namun, nggak semua makanan baik untuk kesehatan kulit, ada juga makanan yang harus dihindari karena memiliki potensi menyebabkan jerawat.</p>
            <p>Berikut beberapa makanan yang harus dihindari agar jerawat nggak mudah timbul.</p>
            <h3><strong>1. Makanan Pedas</strong></h3>
            <p>Bagi sebagian besar orang Indonesia, makan tanpa sambal rasanya kurang mantap. Namun, ternyata jika kamu terlalu banyak makan pedas, maka bisa menimbulkan jerawat, terlebih jika kamu memiliki wajah yang mudah berjerawat. Rasa pedas dari cabai bisa membuat kulit lebih mudah mengalami peradangan sehingga dapat memicu jerawat. Kamu bisa mengganti rasa pedas dari cabai dengan merica.</p>
            <h3><strong>2. Makanan Manis</strong></h3>
            <p>Makanan atau minuman manis yang mengandung gula tinggi bisa memperparah kondisi jerawat. Orang yang mengonsumsi gula dalam makanan dan minuman secara berlebihan memiliki kondisi kulit yang buruk sehingga mudah mengalami peradangan kulit dan keriput.</p>
            <p>Beberapa efek samping yang ditimbulkan dari mengonsumsi gula terlalu banyak pada tubuh adalah gula darah dan level insulin tubuh akan naik serta meningkatnya produksi minyak yang mengakibatkan pori-pori wajah tersumbat dan berjerawat.</p>
            <h3><strong>3. Produk Olahan Susu</strong></h3>
            <p>Jenis susu skim bisa menyebabkan munculnya jerawat. Termasuk olahan susu, seperti keju, es krim, dan sebagainya. Kamu bisa mengganti jenis susu dengan susu yang berbahan dasar tumbuhan, seperti kedelai atau almond untuk mengurangi risiko munculnya jerawat.</p>
            <p>Produk susu dan olahannya juga bisa menimbulkan produksi minyak berlebih pada wajah sehingga bisa menyebabkan tersumbatnya pori-pori dan munculnya jerawat.</p>
            <h3><strong>4. Makanan Berlemak</strong></h3>
            <p>Makanan yang mengandung tinggi asam lemak omega 6 bisa memicu timbulnya jerawat. Melansir dari sehatq.com, hal tersebut berkaitan dengan gaya makanan <i>western</i> yang banyak mengandung minyak jagung dan kedelai yang tinggi asam lemak omega 6.</p>
            <p>Asam lemak omega 6 yang nggak seimbang dengan porsi omega 3 pada tubuh bisa menyebabkan peradangan dan membuat kondisi jerawat makin parah. Selain itu, makanan cepat saji, seperti burger, nugget, atau kentang goreng juga mengandung lemak tinggi sehingga bisa menyebabkan kondisi kulit makin parah.</p>
            <h3><strong>5. karbohidrat Olahan</strong></h3>
            <p>Roti, crackers, sereal, dan pasta merupakan makanan yang termasuk ke dalam karbohidrat olahan. Makanan jenis ini bisa meningkatkan kadar gula darah dan insulin karena masuk ke dalam aliran darah dengan cepat. Kadar insulin yang tinggi ini nggak bagus untuk kamu yang memiliki wajah mudah berjerawat karena bisa mendorong hormon androgen lebih aktif dan menyebabkan produksi sebum atau minyak secara berlebih.</p>
            <p>Seimbangkan juga dengan gaya hidup sehat, seperti rutin berolahraga dan mengelola stres dengan baik untuk menjaga tubuh tetap sehat. </p>
            <p>Jika mengalami masalah jerawat, <a href="'. base_url() .'jerawat/" style="text-decoration: underline;">konsultasi</a> segera dengan dokter ahli untuk mengatasi masalah jerawat untuk mendapatkan penampilan yang lebih baik dan wajah yang sehat.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Gaya Rambut yang Tepat untuk Pria Berambut Tipis';
        $blog->category = 'Hair Loss';
        $blog->date = '15 December 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/gaya-rambut-pria-berambut-tipis.jpg';
        $blog->url_name = 'gaya-rambut-pria-berambut-tipis';
        $blog->subtitle = "Bingung cari gaya rambut untuk rambut tipis? Ini pilihan gaya rambut untuk si rambut tipis!";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Memiliki rambut tipis memang bikin pria jadi serba salah. Rambut tipis juga bikin kepercayaan diri pria menurun karena penampilan jadi nggak oke. Padahal pria dengan rambut tipis tetap bisa tampil trendi dan gaya rambut yang oke. Beberapa gaya rambut dari aktor dan musisi Hollywood ini bisa jadi isnpirasi untuk kamu yang ingin mengubah penampilan.  </p>
                </i>
            </div>

            <p>Gaya rambut jadi hal yang penting bagi pria. Selain membuat pria lebih percaya diri, juga penampilan menjadi lebih maksimal. Apalagi jika gaya rambut sesuai dengan tren terkini.</p>
            <p>Namun, terkadang gaya rambut juga bisa jadi hal yang tricky, terutama jika kamu memiliki rambut yang tipis. Jika salah memilih gaya rambut maka  bisa dipastikan akan merusak penampilan secara keseluruhan. </p>
            <h2><p>5 Gaya Rambut untuk Pria yang Memiliki Rambut Tipis</p></h2>
            <p>Memiliki rambut tipis dan halus memang susah-susah gampang. Satu sisi, pria nggak perlu repot untuk menggunakan produk yang terlalu banyak seperti pada pria yang memiliki rambut tebal. Namun, satu sisi hal itu menjadi sebuah dilema karena jika salah produk atau teknik perawatan bisa membuat rambut makin tipis dan menyebabkan kebotakan.</p>
            <p>Hal yang merepotkan lagi adalah masalah pemilihan gaya rambut, pria dengan rambut tipis nggak bisa mengaplikasikan gaya rambut yang digunakan oleh para pria yang berambut tebal karena justru bisa membuat penampilan nggak oke. Belum lagi, jika salah pemilihan gaya rambut bisa menyebabkan rambut makin tipis dan terlihat lepek serta nggak menarik.</p>
            <p>Pria dengan rambut tipis bisa mengikuti 5 gaya rambut berikut untuk membuat rambut lebih bervolume dan menarik.</p>
            <h3><strong>1.  Very High and Thight</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/very-high-and-tight.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Men`s Health</i></div>
            </p>
            <p>Memiliki rambut tipis bukan berarti kamu nggak bisa pergi ke barber shop dan mengikuti trend. Kamu bisa memilih potongan rambut seperti David Beckham dengan potongan cepak dan dibuat spike. Potongan ini tipis dibagian samping dan tebal di bagian atas. Cocok untuk kamu yang mengalami penipisan rambut dan kebotakan di beberapa sisi.</p>
            <h3><strong>2. Slicked Back</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/slick-back.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Man of Many</i></div>
            </p>
            <p>Slicked back merupakan gaya rambut klasik yang bisa diaplikasikan untuk jenis rambut dengan ketebalan rendah hingga sedang. Menyisir rambut ke belakang seperti Zac Efron nggak semudah itu karena kamu harus memastikan rambut masih lembab dan menggunakan produk styling rambut untuk menjaganya tetap rapi. Kamu harus ekstra sabar dan hati-hati dalam menatanya karena bisa saja rambut akan turun lagi.</p>
            <h3><strong>3.  Butch Cut</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/butch-cut.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Pinterest</i></div>
            </p>
            <p>Butch cut merupakan potongan rambut yang dikenal dengan potongan a la tentara karena merupakan potongan rambut wajib di dunia militer. Gaya rambut seperti Channing Tatum ini merupakan potongan yang sangat pendek tapi nggak sampai botak, menyisakan potongan rambut yang seperti rambut baru tumbuh. </p>
            <p>Bagian kanan dan kiri biasanya akan memiliki panjang yang sama sedangkan untuk bagian tengah sedikit lebih panjang dan bagian belakang rambut juga dibuat lebih pendek. Gaya rambut ini cocok bagi kamu yang berambut tipis dan ingin potongan rambut yang praktis. </p>
            <h3><strong>4.  Short Spike</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/short-spike.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Pinterest</i></div>
            </p>
            <p>Potongan rambut model Justin Timberlake ini memberikan efek rambut seolah tebal dan mengembang dari gaya spike. Potongan gaya rambut ini mirip seperti butch cut yang pendek di bagian samping rambut dan agak lebih panjang dan tebal di bagian tengah. Kamu bisa menatanya dengan menarik bagian tengah rambut ke atas dibantu oleh styling gel atau wax. Gunakan jari dalam penataannya untuk hasil yang maksimal.  </p>
            <h3><strong>5.  Ivy League</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/ivy-league.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Haircut Inspiration</i></div>
            </p>
            <p>Gaya rambut ivy league seperti Liam Payne ini sangat klasik dan stylish. Gaya rambut ini juga membantu penampilanmu tampak smart dan maskulin. Cocok diaplikasikan pada rambut yang tipis. Potongannya tebal di bagian tengah dan tipis pada bagian samping kanan dan kiri. Potongan seperti ini membuat rambut kamu terlihat stand out pada bagian tengah sehingga rambut tampak lebih tebal dan bervolume. </p>
            <h2><b>Tips Merawat Rambut Tipis </b></h2>
            <p>Seiring bertambahnya usia, nggak sedikit pria yang mengalami penipisan rambut bahkan kebotakan. Hal itu bisa menurunkan kepercayaan diri seorang pria dan kesulitan untuk merawat rambutnya, terutama membuatnya lebih tebal. </p>
            <p>Jangan khawatir, beberapa tips berikut bisa membantu kamu merawat rambut tipis menjadi lebih bervolume dan tentunya mudah untuk dilakukan.</p>
            <h3><strong>1.   Hindari merapikan rambut dengan sisir</strong></h3>
            <p>Jika kamu merapikan rambut dengan sisir, rambut akan tampak lebih tipis karena nggak ada volume rambut yang timbul setelahnya. Berbeda dengan menyisir menggunakan jari-jari tangan, efek yang dihasilkan lebih messy dan bervolume sehingga rambut tampak lebih tebal.  </p>
            <h3><strong>2.  Rutin mencuci rambut</strong></h3>
            <p>Mungkin kamu merasa mencuci rambut tipis terlalu sering bis amembuatnya makin rontok dan tipis. Padahal jika kamu rutin mencuci rambut, maka rambut bebas lepek dan lebih mengembang karena rambut nggak mengandung minyak berlebih. Rutin mencuci rambut juga bisa membuat rambut dan kulit kepala lebih sehat sehingga bebas masalah.  </p>
            <h3><strong>3.  Gunakan hair tonic</strong></h3>
            <p>Pria cenderung menyadari adanya penipisan rambut tanpa menyadari bahwa penipisan rambut disebabkan oleh kerontokan rambut. Kamu bisa menggunakan <a href="' . base_url() . 'rambut-rontok/" style="text-decoration: underline;">hair tonic</a> untuk merangsang pertumbuhan rambut baru sehingga rambut lebih tebal dan daerah yang mengatasi kebotakan dini dapat tumbuh lagi. </p>
            <p>Jangan lupakan gaya hidup sehat dan makanan penuh gizi untuk menjaga tubuh tetap sehat dan bugar.  Selain itu, makanan yang mengandung banyak nutrisi yang dibutuhkan rambut juga bisa membantu rambut tetap sehat dari dalam. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Suka Pedas? Cabai Bisa Jadi Makanan Pembangkit Gairah Seksual';
        $blog->category = 'Sex';
        $blog->date = '12 December 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/cabai-makanan-pembangkit-gairah-seksual.jpg';
        $blog->url_name = 'cabai-makanan-pembangkit-gairah-seksual';
        $blog->subtitle = "Kabar gembira bagi penyuka pedas karena cabai merupakan salah satu afrodisiak untuk membangkitka gairah seksualmu.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Kehidupan seksual bersama pasangan seperti angkasa yang bisa diekplorasi seluas-luasnya. Setiap pasangan menginginkan kehidupan seksual yang bergairah dan membara. Namun, sayangnya untuk mencapai hal itu, selalu ada saja hal-hal yang menjadi penghambat.</p>
                    <p>Salah satu hambatannya adalah menurunnya gairah seksual. Hal itu tentunya sangat berpengaruh besar terhadap keselarasan kehidupan seksual seseorang. Makanya, sejak zaman dahulu, hal-hal seperti makanan, minuman, jamu, dan sejenisnya untuk meningkatkan gairah seksual sudah dicari banyak orang. Selain untuk meningkatkan gairah seksual, afrodisiak juga dipercaya dapat mempertahankan kehidupan seksual yang bergairah. </p>
                </i>
            </div>

            <p>Sejak zaman dahulu, istilah afrodisiak sudah dikenal banyak orang. Afrodisiak berasal dari nama Aphrodite, yaitu dewi kecantikan dan seksualitas dari Yunani. Afrodisiak merupakan istilah untuk makanan, minuman, ramuan, atau hal-hal yang dapat membangkitkan gairah seksual. </p>
            <p>Hal itu menunjukkan bahwa kehidupan seksual sejak zaman dahulu nggak selalu mulus, ada saja halangan yang membuat manusia kesulitan untuk mendapatkan gairah seksual yang maksimal sehingga mereka mencari cara bagaimana untuk mempertahankan gairah seksual agar lebih panas di ranjang. Pun bagi mereka yang sudah bergairah di ranjang ingin selalu menjaga dan memaksimalkan gairah seksual dan keperkasaannya. </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/tips-lebih-percaya-diri-dan-panas-di-ranjang/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/tips-lebih-percaya-diri-dan-panas-di-ranjang.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">Tips Agar Pria Lebih Percaya Diri dan Panas di Ranjang</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Sebelum melakukan hubungan seks malam ini, pria wajib tahu tips untuk tampil lebih pede dan panas di ranjang. ', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Afrodisiak Teraneh di Beberapa Negara</b></h2>
            <p>Uniknya, setiap negara sudah memiliki budaya afrodisiak sejak zaman dulu. Salah satunya Asia yang memercayai ginseng sebagai afrodisiak untuk meningkatkan gairah dan stamina pria di ranjang. Lalu ada suku Aztec yang percaya bahwa cokelat bisa menjadi makanan peningkat gairah seksual. </p>
            <p>Namun, nggak semua afrodisiak adalah makanan atau minuman yang wajar. Melansir dari kompas.com, ada beberapa negara memiliki afrodisiak aneh yang dapat membuat orang merasa heran namun tetap dilakukan oleh beberapa negara berikut.</p>
            <h3><strong>1.  Balut di Filipina dan Vietnam</strong></h3>
            <p>Balut merupakan street food yang populer di Filipina dan Vietnam dan dianggap sebagai afrodisiak. Balut merupakan makanan yang berisi telur bebek dengan janin yang berumur sekitar 20 hari dan belum menetas. Telur itu diolah dengan direbus. Cairan yang berasal dari proses rebusan tersebut diminum kemudian telur dikupas. </p>
            <h3><strong>2.  Kadal di Afrika Utara</strong></h3>
            <p>Kadal Afrika Utara yang memakan dedaunan kecil dipercaya oleh masyarakat sebagai makanan afrodisiak sejak zaman Yunani kuno. Meski sekarang kadal lebih sering dipelihara daripada di konsumsi, namun suku asli Afrika Utara masih mengonsumsinya. </p>
            <h3><strong>3.  Daging Serigala di Filipina</strong></h3>
            <p>Pada musim dingin, banyak serigala yang diburu oleh bangsa Mongolia untuk dimakan dagingnya sebagai afrodisiak. Orang Filipina biasanya mengonsumsi daging serigala dengan olahan sebagai adobo, yaitu makanan khas Filipina yang menggunakan daging sebagai bahan utama dan memasaknya dengan cuka serta sayuran. </p>
            <h2><b>Cabai Sebagai Makanan Pembangkit Gairah Seksual</b></h2>
            <p>Jika ditanya siapa yang suka pedas, maka hampir sebagian besar masyarakat Indonesia akan mengaangkat tangan. Memang sudah bukan hal yang aneh jika makanan pedas sangat digemari, terutama oleh orang Indonesia. </p>
            <p>Jika selama ini orang Indonesia mengenal darah atau daging ular sebagai afrodisiak, maka ada makanan yang sebetulnya dikonsumsi sehari-hari yang ternyata bisa menjadi sumber pembangkit gairah seksual, yaitu cabai. </p>
            <p>Cabai memiliki kandungan capsaicin yang sangat tinggi. Selain meningkatkan nafsu makan, cabai juga bisa meningkatkan aliran darah dan memicu pelepasan endorfin. </p>
            <p>Endorfin merupakan hormon yang bisa membantu meningkatkan suasana hati sehingga memberikan efek senang atau bahagia. Endorfin ini jika dilepaskan oleh tubuh bisa memompa gairah seksual seseorang. Makanya, selain cabai, cokelat yang diklaim dapat meningkatkan mood dan melepas endorfin juga disebut-sebut sebagai salah satu makanan afrodisiak.</p>
            <p>Kamu bisa mengonsumsi cabai secara langsung atau mengolahnya dengan menu utama saat makan. Namun, kamu tetap harus memperhatikan porsi konsumsinya, terutama jika kamu memiliki riwayat gangguan lambung atau pencernaan.</p>
            <h2><b>Cabai Juga Dapat Membantu Mengatasi Disfungsi Ereksi</b></h2>
            <p>Disfungsi ereksi merupakan gangguan kesehatan seksual yang ditandai dengan ketidakmampuan pria mendapatkan atau mempertahankan ereksi. Gangguan tersebut salah satunya disebabkan karena kurangnya aliran darah ke penis sehingga penis nggak mampu untuk ereksi. </p>
            <p>Menurut WebMD, capsaicin mampu merelaksasi arteri sehingga meningkatkan tekanan darah ke organ-organ tubuh, termasuk ke penis sehingga cabai bisa membantu pria mengatasi disfungsi ereksi secara alami. </p>
            <p>Capsaicin berada pada bagian tengah cabai dan merupakan bagian paling pedas. Biji cabai nggak mengandung capsaicin, tetapi batang tempat biji cabai melekat. </p>
            <p>Cabai dapat meningkatkan denyut jantung, membuat wajah memerah, berkeringat, dan tentunya dapat meningkatkan gairah. </p>
            <p>Maka dari itu, cabai yang mengandung capsaicin bisa menjadi alternatif alami untuk membantu mengatasi disfungsi ereksi karena khasiat capsaicin yang mampu memompa aliran darah ke seleruh organ dengan baik. </p>
            <p>Namun, bukan cabai satu-satunya hal yang dilakukan untuk mengatasi disfungsi ereksi. Kamu juga harus menyeimbangkan dengan olahraga rutin yang dapat membantu melancarkan aliran darah. Selain itu, dibantu dengan gaya hidup sehat, seperti tidur cukup, nggak merokok dan minum minuman beralkohol. </p>
            <p>Jika kamu mengalami disfungsi ereksi dan mengganggu kehidupan seksual, maka segera lakukan <a href="'. base_url() .'" style="text-decoration: underline;">konsultasi</a>. dengan dokter ahli dari Norm. </p>
        ';
        $arr_blog[] = clone $blog;

        if (time() > 1607706000 && time() <= 1607965199)
        {
            $blog->name = '12.12 NORM SALE DAY | Discount 12% All Item & Mystery Gifts';
            $blog->category = 'Promo';
            $blog->date = '12 December 2020';
            $blog->image = 'https://www.norm.id/assets/images/main/blog/norm-12-12-promo.jpg';
            $blog->url_name = 'norm-12-12-promo';
            $blog->subtitle = "Norm 12.12 Discount promo & mystery Gift.";
            $blog->description = '
                <p>Masalah dalam hidup datang silih berganti tanpa kompromi. Pria yang memiliki kepercayaan diri dan pantang menyerah tahu kapan saatnya bertindak untuk menaklukkan tantangan. Norm percaya kalau pria berhak untuk memiliki kontrol penuh atas penampilannya untuk membangun kepercayaan diri yang lebih baik.</p>
                <p>Norm menawarkan diskon <strong>12% All Items plus Mystery Gift</strong> khusus pada tanggal <strong>12-14 December 2020</strong>. Hal ini merupakan bentuk dukungan Norm kepada pria untuk memiliki kesehatan dan penampilan prima demi kualitas hidup lebih baik. </p>
                <h2><b>Syarat & Ketentuan</b></h2>
                <p>
                    1. Promo berlaku pada tanggal 12 December (pukul <strong>00.00 WIB</strong>) – 14 December (pukul <strong>23:59 WIB</strong>)<br>
                    2. Promo <strong>diskon 12%</strong> berlaku untuk semua produk Norm<br>
                    3. Promo berlaku untuk semua pelanggan Norm baik pelanggan baru ataupun lama <br>
                    4. Potongan maksimal diskon adalah <strong>Rp 100 ribu</strong><br>
                    5. Diskon hanya berlaku pada <strong>1 (satu) kategori produk</strong> selama periode berlangsung<br>
                    6. Jika pembelian terdiri lebih dari satu kategori produk, maka diskon hanya berlaku pada produk dengan harga yang paling tinggi<br>
                    7.  Promo berlaku untuk semua kategori produk yang harus melalui konsultasi dengan dokter di website dan telah mendapatkan rekomendasi produk dari dokter<br>
                    8. Promo berlaku untuk 1 (satu) kali transaksi dengan kode promo: <strong>NORM12</strong><br>
                    9. Promo ini tidak dapat digabungkan dengan promo lain yang tersedia di website Norm<br>
                    10. Promo berlaku untuk pemesanan melalui website ataupun pemesanan secara manual melalui customer service Norm<br>
                    11. Promo ini berlaku hanya untuk 100 pembeli pertama<br>
                    12. Contoh perhitungan diskon:<br>
                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 1</span><br>
                    - Customer Norm melakukan transaksi pertama untuk membeli produk 1 paket Complete Hair Loss Kit seharga Rp 469.000. Maka ia berhak mendapatkan diskon special 11.11 secara otomatis sebesar 11% dan mystery gift.<br>
                    <strong>Potongan diskon yang ia terima yaitu Rp 51.590 dan total harga produk menjadi Rp 412.720</strong><br>
                    <span style="text-decoration: underline; font-weight: bold;">Simulasi 2</span><br>
                    -  Customer Norm melakukan transaksi pertama untuk membeli produk 2 paket Complete Hair Loss Kit seharga Rp 938.000 Maka ia berhak mendapatkan diskon special 11.11 secara otomatis sebesar 11% dan mystery gift<br>
                    Potongan diskon yang ia terima yaitu Rp 51.590 dan total harga produk menjadi Rp 417.410<br>
                    <strong>Potongan diskon maksimal yang ia terima yaitu Rp 100.000 dan total harga produk menjadi Rp 838.000.</strong><br>
                    13. Norm secara sepihak dapat membatalkan pesanan apabila tidak sesuai dengan syarat & ketentuan yang berlaku dan/atau jika ditemukan adanya indikasi kecurangan pada masa promo ini.
                </p>
                <p>Penasaran dengan mystery gift yang akan kamu dapatkan? Jangan pernah lewatkan kesempatan untuk #JoinTheNorm dengan diskon khusus pada waktu yang sangat terbatas. Manfaatkan kesempatan ini untuk mencapai kesuksesan dengan konsistensi dan dedikasi, dedikasi penuh untuk pencapaian hasil yang maksimal demi performa yang lebih baik.</p>
                <p><strong>#JoinTheNorm #DedicatedforMen</strong></p>
            ';
            $arr_blog[] = clone $blog;
        }

        $blog->name = 'Tips Wajah Bersih dan Sehat dari Para Aktor Hollywood';
        $blog->category = 'Acne';
        $blog->date = '4 December 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tips-perawatan-wajah-aktor-hollywood.jpg';
        $blog->url_name = 'tips-perawatan-wajah-aktor-hollywood';
        $blog->subtitle = "Bagi para aktor Hollywood, wajah bersih dan sehat merupakan aset yang penting untuk dijaga. Mereka berbagi tips untuk menjaga wajah tetap sehat.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Pria dengan wajah bersih dan sehat terlihat lebih menarik dan enak dipandang. Selain itu, wajah juga merupakan salah satu hal utama yang mempengaruhi keseluruhan penampilan. Makanya, merawat wajah itu penting banget. Begitu pula dengan para aktor Hollywood berikut ini yang selalu melakukan perawatan wajah rutin untuk menjaga wajah bersih dan awet muda.</p>
                </i>
            </div>

            <p>Menjaga wajah tetap bersih dan sehat bukan cuma kewajiban wanita saja, pria pun wajib menjaga kebersihan dan kesehatan wajah. Kulit juga merupakan investasi penting yang harus dijaga untuk masa depan. Jika kulit sudah dijaga sejak dini maka pada masa tua nanti kulit akan tetap sehat dan bebas masalah. </p>
            <p>Pria biasanya paling malas melakukan perawatan wajah dengan alasan ribet dan nggak praktis. Padahal ada beberapa hal mudah yang bisa dilakukan untuk perawatan wajah harian tanpa perlu ke salon seperti wanita, cukup dilakukan sendiri di rumah. </p>
            <h2><b>Tips Wajah Sehat dan Bersih a la Aktor Hollywood</b></h2>
            <p>Tubuh merupakan aset yang harus terus dirawat. Sudah banyak pria yang menyadari hal itu sehingga merawat dan menjaga tubuh senantiasa sehat dan bugar merupakan kewajiban yang harus dilakukan. Wajah merupakan salah satu bagian tubuh yang juga penting untuk dijaga kesehatannya. </p>
            <p>Para aktor Hollywood juga senantiasa menjaga kesehatan dan kebersihan kulit wajahnya dengan perawatan wajah rutin. Mereka menyadari bahwa kulit wajah merupakan aset yang harus dijaga untuk menunjang penampilan dan demi karir mereka selama di dunia hiburan.</p>
            <p>Kamu juga bisa mengutip beberapa tips dari aktor-aktor Hollywood berikut untuk diaplikasikan ke dalam kegiatan rutin harianmu dalam perawatan wajah.</p>
            <h3><strong>1.  David Beckham</strong></h3>
            <p>Jika kamu melihat David Beckham mungkin akan berpikir bahwa dia memang sudah tampan dari lahir. Padahal menurut pemain bola asal Inggris ini, nggak mudah untuk terlihat keren, terlebih ia seorang atlet yang rutin bertanding sepakbola.</p>
            <p>Namun, untuk menjaga wajahnya tetap bersih, ia rutin melakukan perawatan wajah harian dengan <strong>cleansing</strong> dan <strong>moisturizing</strong>. Membersihkan wajah dan menjaga kelembabannya merupakan perawatan wajah yang harus dilakukan oleh Beckham setiap hari. Selain itu, ia juga selalu menyediakan shaving cream, moisturizer, dan beard oil untuk menjaga jenggot selalu rapi dan terawat. </p>
            <h3><strong>2.  Chris Pratt</strong></h3>
            <p>Christopher Michael Pratt atau yang lebih dikenal dengan Chris Pratt, aktor Hollywood terkenal pemeran Star-Lord dalam Avengers: Endgame ini senantiasa terlihat segar, bahkan saat sedang syuting.</p>
            <p>Ia nggak pernah meninggalkan perawatan wajah rutinnya. Chris juga selalu melakukan <strong>face massage</strong> untuk mencegah penuaan dan menutrisi kulit serta mencegah timbulnya jerawat. Tak hanya itu, Chris rutin melakukan eksfoliasi untuk mengangkat sel kulit mati dan mencerahkan wajah. </p>
            <h3><strong>3.  Zac Efron</strong></h3>
            <p>Bintang High School Musical ini terlihat sempurna kapanpun ia melangkah. Zac Efron memang memiliki genetik kulit yang bagus, tapi itu aja nggak cukup karena harus ada perawatan yang dilakukan agar kulit senantiasa sehat dan bersih.</p>
            <p>Zac rutin merawat kerapian dan kebersihan jenggotnya dengan rutin bercukur. Meski terlihat sepele tapi kerapian jenggot sangat berpengaruh terhadap penampilan wajah secara keseluruhan. Sedangkan untuk kulit, Zac nggak pernah meninggalkan <strong>sunscreen</strong> setiap hari untuk melindungi kulit dari efek buruk sinar matahari yang dapat membuat kulit cepat mengalami penuaan dan kering. </p>
            <h3><strong>4.  George Clooney</strong></h3>
            <p>Clooney merupakan salah satu aktor yang berpenampilan menarik bahkan hingga sekarang dengan rambut abu-abu dan jenggotnya. Hal yang menunjang penampilannya hingga kini adalah perawatan rutin.</p>
            <p>Mengutip dari medium.com, dalam wawancaranya pada tahun 2010, bintang “The Descendants” dan “Ocean’s 11” ini mengatakan bahwa ia sangat menyukai saat sedang melakukan spa. Untuk kesehatan kulitnya, ia mempercayakan pada <strong>ivory bar soap</strong>. </p>
            <p>Clooney sangat menyukai sabun yang nggak mengandung parfum atau pewarna. Selain itu, ia juga rutin mengoleskan <strong>eye cream</strong> untuk mencerahkan area mata dan membuat wajahnya lebih segar. </p>
            <p>Bagaimana pun pria tersebut, perawatan kulit secara rutin itu penting, meski hanya perawatan sederhana saja tapi bisa membuat kulit lebih sehat. </p>
            <h3><strong>5.  Ryan Gosling</strong></h3>
            <p>Aktor asal Kanada yang membintangi film La La Land ini selalu merawat wajahnya agar senantiasa segar dan awet muda. Makanya meski kini usianya sudah menginjak 40 tahun namun wajahnya tetap terlihat muda.</p>
            <p>Ryan selalu menggunakan <strong>serum wajah</strong> untuk perawatan kulitnya secara rutin. Selain itu, ia juga menerapkan gaya hidup sehat dengan tidur cukup dan minum air putih 8 gelas sehari. Ryan pun terlihat selalu prima dan fit meski kegiatannya sebagai aktor dan musisi sangat padat. </p>
            <p>Ryan selalu menggunakan serum wajah untuk perawatan kulitnya secara rutin. Selain itu, ia juga menerapkan gaya hidup sehat dengan tidur cukup dan minum air putih 8 gelas sehari. Ryan pun terlihat selalu prima dan fit meski kegiatannya sebagai aktor dan musisi sangat padat. </p>
            <p>Jika kamu mengalami masalah dengan jerawat di wajah, atasi segera dengan <a href="' . base_url() . 'jerawat/" style="text-decoration: underline;">Essential Acne Kit</a> yang efektif mengatasi jerawat, memperbaiki tekstur kulit, dan membuat wajah tampak lebih muda. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Jenis Produk Hair Styling Pria. Mana yang Paling Cocok?';
        $blog->category = 'Hair Loss';
        $blog->date = '1 December 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/jenis-produk-hair-styling-pria.jpg';
        $blog->url_name = 'jenis-produk-hair-styling-pria';
        $blog->subtitle = "Rambut merupakan hal yang paling diperhatikan pria dalam hal penataan. Untuk mendapatkan penampilan rambut yang tepat, pilih produk yang sesuai dengan kebutuhan dan jenis rambutmu.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Bagi pria, rambut pada kepala nggak cuma melindungi kulit kepala saja, tapi juga dapat menunjang penampilan pria. Maka dari itu, pria sangat memperhatikan gaya rambut dan menjadikan produk hair styling sebagai item utama dalam urusan penampilan.</p>
                    <p>Namun, menggunakan produk penataan rambut nggak bisa asal pilih karena harus memperhatikan beberapa hal, seperti jenis rambut dan gaya apa yang diinginkan serta hasil akhir apa yang dipilih. Jika kamu nggak menyesuaikan produk dengan kebutuhan rambut maka rambut bisa timbul masalah. </p>
                </i>
            </div>

            <p>Dibanding wanita yang dapat melakukan penataan penampilan di berbagai bagian tubuh, pria hanya bisa memperbaiki penampilan di bagian tertentu saja. Salah satu bagian tubuh yang paling mendapat perhatian dalam menunjang penampilan adalah rambut.</p>
            <p>Salah satu hal yang sering dilakukan pria untuk menata rambut adalah dengan gel rambut. Setelah potong rambut, pria akan menggunakan gel rambut, saat ke kantor, acara resmi, dan sebagainya, pria akan mengaplikasikan gel rambut dan menatanya sebaik mungkin untuk membuat penampilan lebih menarik dan rapi. </p>
            <h2><b>Tips Memilih Produk Styling Rambut yang Tepat</b></h2>
            <p>Produk styling rambut memang menjadi favorit para pria untuk urusan penampilan. Pria sangat memperhatikan gaya rambut agar terlihat lebih menarik. Namun, nggak sedikit pria yang tahu cara memilih produk perawatan rambut yang tepat agar rambut tetap sehat. Jika asal memilih produk tanpa memperhatikan beberapa hal, maka rambut bisa menjadi rusak.</p>
            <p>Berikut beberapa tips untuk membantu pria memilih produk hair styling yang tepat :</p>
            <h3><strong>1.  Ketahui jenis rambut</strong></h3>
            <p>Hal pertama yang perlu diperhatikan dari memilih produk styling rambut adalah jenis rambut yang kamu miliki. Jika rambut kamu tergolong memiliki tekstur halus, maka produk yang berbahan ringan seperti spray atau krim bisa menjadi pilihan yang bagus. Namun, jika rambut kamu tebal, pilih produk dengan tekstur yang lebih padat seperti pasta, pomade, atau wax. </p>
            <p>Kalau pilihanmu adalah bentuk gel, maka pilih gel yang ringan untuk rambut tipis dan gel yang strong untuk rambut tebal. Jangan gunakan produk dengan label strong jika rambutmu tipis. Sebaliknya, jika rambut kamu tebal, maka jangan memilih produk berbahan ringan karena nggak akan bekerja menahan rambutmu.</p>
            <h3><strong>2.  Gaya rambut apa yang diinginkan</strong></h3>
            <p>Kalau kamu menginginkan gaya rambut kasual seperti spike, pilih produk yang <i>matte</i> karena akan bekerja dengan baik dan dapat memberikan look yang diinginkan. Sedangkan untuk pecinta gaya rambut klasik atau yang sedang trend seperti <i>pompadour</i>, maka pilihlah produk berbentuk pomade atau gel.  </p>
            <h3><strong>3.  Pilih tatanan yang hard atau natural</strong></h3>
            <p>Produk hair styling biasanya memiliki dua jenis hasil akhir, yaitu hard (biasanya gel atau hair spray) dan natural (seperti pomade atau wax). Jika kamu menginginkan hasil akhir yang tahan angin dan keras, maka pilih produk dengan label hard atau strong. Namun, jika kamu memilih rambut tetap dapat diatur ulang, maka pilih pomade atau wax.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/cara-merawat-rambut-tipis-pada-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/rambut-tipis.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Hair Loss</div>
                            <div class="title">Cara Merawat Rambut Tipis Pada Pria</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Penipisan rambut membuat pria khawatir dan mampu menurunkan kepercayaan diri. Banyak faktor yang menjadi penyebab penipisan rambut. Namun, rambut tipis masih tetap bisa diatasi dan dirawat.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Jenis-Jenis Produk Hair Styling yang Dapat Kamu Pilih</b></h2>
            <p>Jika kamu sudah mengetahui apa saja hal-hal mendasar untuk memilih produk styling rambut, maka sekarang waktunya mengenali jenis-jenis produk tatanan rambut yang sesuai dengan kebutuhanmu. </p>
            <h3><strong>1. Gel</strong></h3>
            <p>Gel rambut punya berbagai macam bahan dasar. Gel rambut yang dijual di pasaran, umumnya mengandung <i>Cationic Polymer</i> yang berfungsi untuk memberikan fleksibilitas pada gel. Kini sudah banyak gel yang dibuat dengan bahan dari gelatin.</p>
            <p>Gel merupakan salah satu produk hair styling yang memiliki daya kuat dalam penataan rambut. Produk jenis ini cocok untuk yang ingin membuat model kaku seperti <i>mohawk</i> atau <i>spike</i>. Buat kamu yang berambut keriting, kamu tetap bisa menggunakan produk jenis ini untuk membuat rambut lebih rapi.</p>
            <h3><strong>1. Pomade</strong></h3>
            <p>Pomade merupakan jenis produk hair styling yang paling populer dan sering dicari oleh pria. Produk jenis ini juga mudah ditemukan, baik di supermarket maupun di barber shop. Pomade biasanya dipakai untuk mendapatkan rambut yang klimis atau rapi. Tingkat kilaunya juga beragam, mulai dari yang sedang hingga tinggi. Produk ini cocok untuk kamu yang memiliki rambut lurus dan senang dengan gaya rambut yang klimis.</p>
            <p>Pomade terdiri dari dua jenis, yaitu :</p>
            <p><i>a.    Oil Based Pomade</i></p>
            <p>Berbahan dasar minyak, pomade dengan jenis ini memberikan tampilan yang lebih mengilap daripada yang berbahan dasar air. Pomade tipe ini agak sulit dibersihkan dan memiliki harga yang lebih murah tapi memiliki daya tahan yang lebih kuat seharian. </p>
            <p><i>b.    Water Based Pomade</i></p>
            <p>Tipe ini lebih nyaman karena nggak memberikan ekstra minyak di rambut. Rambut kamu nggak akan terlalu mengilap dibanding dengan oil based. Kamu hanya perlu sekali keramas untuk membersihkan produk dari rambut. Kekurangan jenis ini adalah daya tahannya nggak sekuat <i>oil based</i>. </p>
            <h3><strong>3.  Wax</strong></h3>
            <p>Produk styling hair satu ini berbahan dasar minyak lilin. Wax membuat rambut cukup kaku dan tegak tanpa memberikan efek berminyak layaknya pomade. Produk jenis ini mudah ditemukan.</p>
            <p>Meski wax memberikan kesan rambut yang basah tapi akan kering setelah beberapa jam sehingga nggak fleksible seperti pomade jika kamu ingin menata rambut lagi dalam satu hari yang sama. Wax ini cocok digunakan untuk untuk kamu yang berambut pendek.  </p>
            <h3><strong>4.  Clay</strong></h3>
            <p>Sesuai dengan namanya, clay berbahan dasar tanah liat sehingga teksturnya lengket seperti pasta. Produk tatanan rambut ini akan mengembang jika terkena air sehingga cocok untu kamu yang ingin memiliki tampilan rambut bervolume. </p>
            <p>Untuk kamu yang menginginkan rambut terlihat natural atau nggak terlihat menggunakan produk styling rambut, maka clay menjadi pilihan yang cocok. Produk ini mudah diaplikasikan dan dicuci sehingga menjadi favorit banyak pria.  Selain sebagai penata rambut, ternyata clay </p>
            <p>
                juga memiliki manfaat lain, seperti :<br>
                a.  Mengandung mineral yang baik untuk kesehatan kulit kepala<br>
                b.  Menjaga kelembaban rambut<br>
                c.  Dapat merangsang pertumbuhan rambut
            </p>
            <p>Apa pun jenis rambut dan pilihan produk penata rambut, utamakan kesehatan rambut kamu. Rutin bersihkan rambut dua hari sekali atau setiap hari, bahkan setelah kamu menggunakan produk penata rambut. Jika rambut mengalami kerontokan, maka atasi segera dengan <a href="' . base_url() . 'rambut-rontok/complete-kit/" style="text-decoration: underline;"><i>Hair Loss Kit</i></a> yang bekerja efektif mengatasi rontok dan memicu pertumbuhan rambut baru. Rambut yang sehat dan bebas masalah akan semakin memudahkan kamu menata rambut semaumu. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = '5 Cara Memperbesar Ukuran Penis Secara Alami';
        $blog->category = 'Sex';
        $blog->date = '27 November 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/cara-memperbesar-ukuran-penis.jpg';
        $blog->url_name = 'cara-memperbesar-ukuran-penis';
        $blog->subtitle = "Banyak pria yang menginginkan pertambahan ukuran penis sehingga bisa lebih panjang dan lebih besar. Inilah cara alami menambah ukuran penis. ";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Setiap orang memiliki ukuran penis yang berbeda-beda meski tiap negara memiliki ukuran rata-rata. Namun, hal itu nggak bikin pria merasa aman dengan ukuran yang dimilikinya. Sebagian dari mereka masih menginginkan ukuran penis yang lebih panjang dan lebih besar untuk menunjang kepercayaan diri pria di hadapan pasangannya, terutama saat sedang melakukan ativitas seksual. </p>
                </i>
            </div>

            <p>Bicara ukuran penis, nggak semua pria secara utuh merasa percaya diri dengan ukurannya. Meski nggak bisa membandingkan ukuran secara gamblang dengan pria lain, namun nyatanya banyak studi ilmiah yang memaparkan tentang ukuran penis di setiap negara. Hal itu tentu menjadi salah satu kecemasan pria tentang ukuran yang dimiliki, apakah cukup memuaskan bagi pasangannya.</p>
            <h2><b>Mengukur Panjang dan Ketebalan Penis</b></h2>
            <p>Melansir dari <i>Healthline</i>, menurut sebuah penelitian yang diterbitkan dalam British Journal of Urology International (BJUI), rata-rata panjang penis yang lembek adalah 3,61 inci (9,16 cm), sedangkan rata-rata panjang penis yang sedang ereksi adalah 5,16 inci (13,10 cm).</p>
            <p>Ketebalan rata-rata adalah 3,66 (9,29 cm) inci untuk penis lembek dan 4,59 inci (11,65 cm) untuk penis yang sedang ereksi. Ketebalan adalah lingkar penis pada bagian terluasnya.</p>
            <p>Pria mungkin bertanya-tanya berapa tepatnya ukuran penisnya. Jika hanya mengikuti indeks ukuran penis tiap negara, bisa jadi tiap orang pun akan memiliki ukuran yang berbeda karena ukuran yang dipublikasikan merupakan ukuran rata-rata.</p>
            <p>Jika kamu merasa penasaran dengan ukuran penis, maka kamu bisa mengukurnya menggunakan pita pengukur.</p>
            <p>Tempatkan ujung pita pengukur pada bagian pangkal penis yang berada di tulang kemaluan, kemudian Tarik pita pengukur ke ujungnya. Jika kamu ingin mengukur ketebalannya, maka lilitkan pita pengukur di bagian badan penis bagian tengah. </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/ukuran-penis-ratarata-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/ukuran-penis-ratarata-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">Ukuran Penis Rata-Rata yang Pria Harus Ketahui. Berapa Ukuranmu?</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Pernahkah terpikirkan tentang berapa tepatnya ukuran penismu? Apakah termasuk pada ukuran rata-rata? Semua hal tentang ukuran penis bisa kamu dapatkan di sini.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Ini Cara Alami Memperbesar Ukuran Penis</b></h2>
            <p>Ada berbagai cara untuk memperbesar ukuran penis, mulai dari penggunaan obat, operasi, hingga secara alami. Semua memiliki kelebihan dan kekurangannya masing-masing. Namun, asalkan dilakukan sesuai porsi atau dosisnya, maka kamu akan tetap aman.</p>
            <p>Nah, salah satu cara memperbesar ukuran penis adalah dengan cara alami, tanpa obat, dan tentunya bisa kamu lakukan sendiri.</p>
            <p>Berikut 5 cara untuk menambah ukuran penis secara alami :</p>
            <h3><strong>1.  Jelqing</strong></h3>
            <p>Merupakan teknik memperbesar penis yang menggunakan cara mengurut penis dengan ibu jari dan jari telunjuk secara berulang-ulang. </p>
            <p>Urut penis seperti saat sedang masturbasi, hanya saja ini lebih lambat dan teratur. Cara ini bekerja dengan melatih jaringan fungsi sehingga bisa membuat penis tampak lebih panjang dan besar.</p>
            <p>
                Menurut Healthline, caranya adalah :<br>
                •   Letakkan jari telunjuk dan ibu jari dalam bentuk O.<br>
                •   Tempatkan gerakan berbentuk O di pangkal penis.<br>
                •   Buat O lebih kecil sampai jarimu memberi tekanan ringan pada batang penis.<br>
                •   Perlahan gerakkan jari dan ibu jari ke arah kepala penis hingga mencapai ujungnya.<br>
                •   Kurangi tekanan jika terasa nyeri.<br>
                •   Ulangi ini sekali sehari selama sekitar 20 hingga 30 menit<br>
            </p>
            <h3><strong>2.  Olahraga secara teratur</strong></h3>
            <p>Membangun otot dan menurunkan berat badan bukanlah satu-satunya alasan untuk membuat kamu pergi ke gym dan melakukan olahraga rutin. Jika kamu menginginkan penis yang panjang dan sehat, lakukan olahraga secara teratur untuk membersihkan arteri dan meningkatkan aliran darah ke penis. Saat kamu rutin berolahraga, aliran darah ke penis akan lebih lancar dan membantu penis lebih besar karena ereksi yang maksimal. </p>
            <h3><strong>3.  Kurangi lemak di perut</strong></h3>
            <p>Perut yang besar bisa mengurangi tingkat penampilan penis. Meskipun kamu memiliki penis yang besar, penis akan terlihat lebih kecil kalau kamu punya perut yang besar. Lakukan diet sehat dan olahraga untuk membantu mengurangi lemak perut dan mendapatkan perut rata yang sehat. Jika kamu ingin mengecilkan perut, lakukan diet sehat dan jangan berlebihan agar kamu tetap bugar dan nggak kurang nutrisi.</p>
            <h3><strong>4.  Mencukur rambut di sekitar penis</strong></h3>
            <p>Salah satu cara untuk membuat penis terlihat lebih besar adalah dengan melakukan grooming pada penis. Cukur rambut-rambut di sekitaran penis dengan hati-hati. Saat rambut-rambut tersebut nggak ada, maka penis akan semakin menonjol dan terlihat lebih besar dari sebelumnya. </p>
            <h3><strong>5.  Kelola stres dengan baik</strong></h3>
            <p>Stres merupakan hal yang pasti dialami oleh setiap orang. Namun, bukan berarti kamu tenggelam dalam rasa stres tersebut. Stres selain membuat imun tubuh kamu menurun, juga dapat mengurangi ukuran penis karena emosi negatif menghambat aliran darah ke penis sehingga penis kesulitan mendapatkan pasokan darah untuk membuatnya lebih besar.</p>
            <p>Selain mendapatkan ukuran penis yang lebih besar, para pria juga mengingingkan durasi berhubungan seksual yang lebih lama untuk mendapatkan atau memberikan kepuasan pada pasangan. Jika kamu mengalami masalah dengan durasi berhubungan akibat ejakulasi dini, kamu bisa berkonsultasi dengan dokter ahli Norm yang dapat membantu kamu mengatasi <a href="' . base_url() . 'ejakulasi-dini/" style="text-decoration: underline;">ejakulasi dini</a> untuk mendapatkan hubungan seksual yang lebih tahan lama. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Kesalahan Umum yang Sering Dilakukan Pria Dalam Merawat Rambut';
        $blog->category = 'Hair Loss';
        $blog->date = '26 November 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/kesalahan-dalam-merawat-rambut.jpg';
        $blog->url_name = 'kesalahan-dalam-merawat-rambut';
        $blog->subtitle = "Ada beberapa kesalahan umum yang dilakukan pria dalam melakukan perawatan rambut. Ketahui kesalahannya dan mulai tinggalkan segera. ";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Nggak bisa dipungkiri bahwa penampilan merupakan hal yang pasti diperhatikan oleh setiap orang, termasuk pria. Maka dari itu kini sudah banyak pria yang memahami bahwa menjaga penampilan merupakan suatu keharusan.</p>
                    <p>Banyak pria yang yang mulai menggunakan produk-produk perawatan penunjang penampilan, termasuk perawatan rambut. Namun, sayangnya nggak sedikit pria yang masih melakukan kesalahan dalam merawat rambut. Kesalahan dalam perawatan tersebut bisa menimbulkan dampak yang kurang baik bagi kesehatan rambut. </p>
                </i>
            </div>

            <p>Merawat tubuh untuk memiliki penampilan yang prima dan optimal merupakan hal yang wajib dilakukan, terutama bagi pria. Bukan hanya tubuh atau wajah saja, tapi rambut juga merupakan salah satu faktor penting dalam keseluruhan penampilan pria yang wajib dirawat. </p>
            <p>Rambut nggak hanya berfungsi sebagai pelindung kepala saja tapi juga memberikan tampilan yang lebih menarik. Makanya menjaga rambut untuk bersih dan sehat merupakan hal penting yang nggak boleh dilewatkan.</p>
            <h2><b>5 Kesalahan Pria Dalam Merawat Rambut</b></h2>
            <p>Meski pria sudah banyak yang rutin melakukan perawatan rambut, namun ada beberapa hal yang dilakukan pria dalam merawat rambut ternyata merupakan hal yang salah dan sayangnya hal itu dianggap lumrah dan nggak berisiko.</p>
            <p>Padahal merawat rambut harus dengan aturan yang benar dan tepat agar rambut nggak hanya rapi tapi juga sehat. Jika kamu terus melakukan kesalahan dalam perawatan rambut maka dampak yang akan timbul adalah masalah kesehatan rambut, seperti rontok, rapuh, bahkan kusam dan tipis.</p>
            <p>Berikut lima kesalahan yang dilakukan pria dalam merawat rambut :</p>
            <h3><strong>1.  Terlalu sering keramas</strong></h3>
            <p>Keramas merupakan hal paling dasar dan utama yang harus dilakukan dalam merawat rambut. Keramas berfungsi sebagai pembersih rambut dan kulit kepala sehingga keringat, debu, dan polusi yang menempel pada kepala akan dibersihkan.</p>
            <p>Namun, meski hal mendasar, bukan berarti kamu dapat menyepelekan kegiatan satu ini.  Keramas dengan waktu yang konsisten. Jangan terlalu sering tapi juga jangan terlalu lama nggak keramas. Keramas setidaknya dua hari sekali atau sehari sekali tiap pagi atau sore hari.</p>
            <p>Keramas yang terlalu sering bisa mengurangi kadar minyak alami rambut sehingga dapat menyebabkan rambut kering. Sedangkan jika kamu jarang keramas maka rambut akan menjadi lepek dan berminyak. </p>
            <h3><strong>2.  Mengaplikasikan produk saat rambut masih basah</strong></h3>
            <p>Saat kamu selesai keramas dan nggak mengeringkan rambut sampai sisa air benar-benar hilang, kamu nggak bisa mengaplikasikan produk ke rambut. Hal itu karena saat kamu mengaplikasikan produk ke rambut yang basah, produk akan turun ke kulit kepala sehingga dapat menyebabkan rambut menjadi berminyak dan membuat kulit kepala bermasalah.</p>
            <p>Produk-produk seperti wax rambut, gel rambut, dan sejenisnya sebenarnya dikhususkan untuk pengaplikasian pada rambut kering agar produk dapat bekerja denga efektif. </p>
            <h3><strong>3.  Gaya rambut yang nggak sesuai bentuk wajah</strong></h3>
            <p>Banyak pria yang memotong rambut dengan dasar untuk menjaganya tetap ringkas. Padahal gaya rambut yang dipilih juga harus disesuaikan dengan bentuk wajah dan tentunya karakter kamu. Gaya rambut yang cocok akan menambah kerapian penampilan pria dan makin menonjolkan kepribadian pria tersebut. </p>
            <h3><strong>4.  Menggunakan produk rambut terlalu banyak</strong></h3>
            <p>Banyak dari pria yang mudah termakan dengan janji produk sehingga membeli produk apa pun yang menurutnya dibutuhkan. Misalnya, kamu merasa rambutmu kering, maka kamu akan membeli produk yang melembabkan rambut. Pada lain waktu kamu melihat ada produk yang bisa menumbuhkan rambut, kamu pun tergerak untuk membelinya. Semua produk tersebut kemudian dipakai bersamaan.</p>
            <p>Nah, hal itu nggak bisa kamu lakukan lagi. Cukup kenali masalah dan kebutuhan rambutmu kemudian pilih salah satu produk yang mampu memenuhi kebutuhan rambut dan gunakan secara konsisten tanpa mencoba produk lain yang mempunyai fungsi berbeda dengan yang saat ini sedang kamu gunakan. Hal itu membuat produk nggak bekerja maksimal dalam mengatasi masalah rambut.</p>
            <h3><strong>5.  Menggosok rambut terlalu kencang</strong></h3>
            <p>Nah, ini yang paling sering dilakukan oleh para pria, mengeringkan rambut dengan handuk dan menggosoknya dengan kencang. Mungkin terlihat sepele, tapi nyatanya mengeringkan rambut dengan menggosoknya secara kencang dapat membuat rambut menjadi mudah rusak dan rontok. Hal ini jika dilakukan secara terus-menerus dapat menimbulkan kebotakan. </p>
            <p>Jika kamu mengalami masalah rambut rontok, maka atasi segera dengan <a href="' . base_url() . 'rambut-rontok/complete-kit/" style="text-decoration: underline;"><i>Hair Loss Kit</i></a> yang efektif mengatasi rontok dan mencegah kebotakan. Selain itu, hair tonic Norm juga dapat memicu pertumbuhan rambut baru sehingga rambutmu akan kembali tebal. </p>
            <p>Jangan lupa untuk selalu menerapkan gaya hidup sehat dan pola makan seimbang yang penuh nutrisi. Hindari kebiasaan-kebiasaan di atas yang dapat memicu masalah pada rambutmu.  </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Mengenali Kepribadian Pria dari Jenis Brewok';
        $blog->category = 'Other';
        $blog->date = '24 November 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/mengenali-kepribadian-pria-dari-jenis-brewok.jpg';
        $blog->url_name = 'mengenali-kepribadian-pria-dari-jenis-brewok';
        $blog->subtitle = "Kaum pria percaya kalau brewok menambah tingkat ketampanan. Selain itu, tiap jenis brewok juga ada hubungannya dengan kepribadian pria.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Kebanyakan kaum pria juga percaya kalau brewok dapat menambah tingkat ketampanan. Memang ada benarnya, pria yang memiliki brewok biasanya memang terlihat macho, jantan, garang, meskipun ketampanan itu sebetulnya masuk pada ranah yang relatif. </p>
                    <p>Pria juga beranggapan bahwa dengan brewok yang dimiliki, akan mudah baginya untuk menaklukkan hati lawan jenis. Namun, sebenarnya tergantung dari jenis brewok yang ada pada kamu. Beberapa jenis brewok seperti contohnya goatee, hipster, full face, stubble, chinstrap ataupun van dyke beard memilikii karakteristik tersendiri yang dapat menggambarkan kepribadian dan karakter kamu sebagai seorang pria. </p>
                </i>
            </div>

            <p>Sebuah mitos mengemuka soal tradisi menyapu, khususnya bagi para anak wanita. Para orang tua biasanya mengatakan jika anak wanitanya menyapu dan menyisakan kotoran, maka suaminya akan brewokan. Kalimat itu seakan menjadi hal menakutkan bagi sebagian wanita. Sebab pria brewok dianggap berantakan dan tidak merawat diri. Ternyata, hal itu berbanding terbalik dengam kondisi sekarang. Brewok menjadi tren mode. Pria berjenggot kini dianggap keren, bahkan terkesan berkelas di mata wanita.</p>
            <p>Kebanyakan kaum pria juga percaya kalau brewok dapat menambah tingkat ketampanan. Memang ada benarnya, pria yang memiliki brewok biasanya memang terlihat macho, jantan, garang, meskipun ketampanan itu sebetulnya masuk pada ranah yang relatif. Pria juga beranggapan bahwa dengan brewok yang dimiliki, akan mudah baginya untuk menaklukkan hati lawan jenis. Namun, sebenarnya tergantung dari jenis brewok yang ada pada kamu. Tiap jenis brewok memiliki karakteristik tersendiri yang dapat menggambarkan kepribadian dan karakter kamu sebagai seorang pria.</p>
            <h2><b>Jenis brewok dan hubungannya dengan kepribadian pria</b></h2>
            <h3><strong>1.  Goatee beard</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/goatte.jpg" style=" width: 500px; max-width: 100%;">
            </p>
            <p>Goatee disebut karena bentuknya yang memang menyerupai rambut wajah kambing. Jenis brewok ini sempat popular pada tahun 90an dan goatee merupakan brewok yang dibiarkan tumbuh rapi mengelilingi mulut. Areanya terbatas hanya dari kumis dan melengkung ke bawah sampai ke bagian dagu. Brewok jenis goatee ini dianggap memiliki kepribadian yang sensitif dan mudah merenung. Pria yang memakai jenis ini juga dapat dikategorikan sebagai pria yang maskulin dan melodramatis. </p>
            <h3><strong>2.  Hipster beard</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/hipster.jpg" style=" width: 500px; max-width: 100%;">
            </p>
            <p>Jenis brewok hipster ini dianggap cukup unik dan anti <i>mainstream</i>. Kumis dan brewok tumbuh panjang meruncing dan menukik dari area dagu. Brewok jenis ini sangat cocok bagi kamu yang ingin terlihat smart dimana hipster juga menggambarkan kepribadian pria yang cerdas, kreatif dan mudah bergaul dengan sesama. Pria dengan brewok ini juga biasanya agak cerewet dan pemilih dalam urusan kepentingannya sendiri. </p>
            <h3><strong>3.  Full face beard</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/fullface.jpg" style=" width: 500px; max-width: 100%;">
            </p>
            <p>Brewok jenis <i>full face</i> adalah model yang paling umum dan banyak dipelihara oleh kaum pria. Brewok yang tumbuh pada area pipi sampai ke bawah dagu akan membuat para pria semakin terlihat keren dan dewasa. Full face adalah pertanda kalau pria memiliki komitmen dan rasa tanggung jawab yang tinggi pada dirinya dan lingkungan sekitarnya. Meskipun jenis brewok ini perlu banyak perawatan dari mulai <i>trimming</i>, sampai mencucinya agar tetap bersih, brewok jenis <i>full face</i> juga bisa menambah kualitas pria dari segi aspek maskulinitas, intelektual dan ketampanan.</p>
            <h3><strong>4.  Stubble beard</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/stubble.jpg" style=" width: 500px; max-width: 100%;">
            </p>
            <p>Stubble adalah jenis brewok tipis dan halus yang didesain sedemikian rupa dan panjangnya hanya sepanjang pangkal brewok. Jika jenis brewok ini dirapikan secara berkala, semua orang tentu akan menyukai tipe brewok seperti ini. Bahkan jenis brewok ini dipakai oleh beberapa aktor <i>Hollywood</i> seperti Ryan Gosling, Adam Levine maupun George Clooney. Stubble cocok untuk dipakai oleh bentuk wajah apapun. Pria yang memakai jenis brewok ini adalah tipe pria progresif yang peduli penampilan dan tentunya adalah seorang pria yang modern. </p>
            <h3><strong>5.  Chinstrap beard</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/chinstrap.jpg" style=" width: 500px; max-width: 100%;">
            </p>
            <p>Brewok <i>chinstrap</i> adalah jenis brewok yang ditata layaknya garis sebagai pembatas antara pipi dan rahang dimana bentuknya seakan-akan nyempil di daerah pinggiran wajah saja. Brewok ini menggambarkan kepribadian yang memiliki tendensi untuk congkak namun juga teliti dan tekun dalam melakukan sesuatu. Meskipun bentuknya minimalis, brewok ini perlu maintenance dan perawatan ekstra yang cukup memakan waktu dan energi. </p>
            <h3><strong>6.  Van Dyke Beard</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/vandyke.jpg" style=" width: 500px; max-width: 100%;">
            </p>
            <p>Kesan ‘gentleman’ terpancar dari jenis brewok ini. Van Dyke diperoleh dengan menumbuhkan janggut dan kumis serta mencukur semua area bulu lainnya di wajah. Jadi, tidak ada kumis dan brewok yang terhubung. Penampilan brewok jenis ini menggambarkan kepribadian yang tegas dan berani akan tetapi penuh perhatian pada lingkungan sekitar. </p>
            <p>Selain itu, jenis brewok van dyke cocok untuk gaya rambut ’slickback’ yang sampai dengan saat ini masih <i>hype</i> digunakan oleh para pria.</p>
            <p>Apapun jenis brewok kamu, menjaga kebersihannya adalah hal yang penting. Rutin mencuci muka dan brewok serta mengonsumsi makanan penuh nutrisi untuk menjaga kesehatan wajah. Jika tidak dirawat dengan baik, kotoran pada wajah dan sekitar brewok sangat mungkin untuk menimbulkan jerawat.</p>
            <p>Kamu dapat konsultasi online dengan dokter melalui platform <a href="' . base_url() . 'jerawat/" style="text-decoration: underline;"><i>norm</i></a> untuk mendapatkan rangkaian produk yang diformulasikan khusus untuk mengatasi jerawat dan memperbaiki tekstur kulit pada bekas jerawat. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = '10 Jenis Aroma Maskulin yang Memikat Hati Wanita';
        $blog->category = 'Other';
        $blog->date = '20 November 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/aroma-maskulin-yang-memikat-hati-wanita.jpg';
        $blog->url_name = 'aroma-maskulin-yang-memikat-hati-wanita';
        $blog->subtitle = "Jangan sepelekan wangi parfum yang dipilih karena parfum nggak cuma bikin wangi tapi juga bisa memikat hati wanita. Ini pilihan wanginya!";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Aroma wangi seseorang bisa menjadi sebuah representasi kepribadian. Selain itu, wangi parfum juga punya banyak manfaat yang selama ini nggak banyak orang tahu. Salah satunya adalah menjadi pemicu ingatan seseorang sehingga ketika orang lain mencium wangi yang kamu gunakan di mana pun maka ia akan mengingat kamu.</p>
                    <p>Nah, maka dari itu, jangan sembarangan menggunakan aroma parfum. Pilih aroma yang sesuai kepribadianmu dan siap untuk memikat hati wanita idaman. </p>
                </i>
            </div>

            <p>Setiap orang pasti ingin tampil menarik dan wangi, terlebih para pria yang ingin menarik hati wanita. Aroma wewangian seseorang memang bisa menjadi daya tarik tersendiri bagi kaum hawa. Hal itu karena wangi seseorang juga menunjukkan kepribadiannya dan bisa bikin wanita betah berlama-lama berada di dekat pria.</p>
            <h2><b>Manfaat Menggunakan Parfum</b></h2>
            <p>Bagi sebagian orang mungkin menganggap menggunakan parfum hanyalah sebagai wewangian biasa dengan pilihan aroma terbaik. Nggak sedikit juga yang menggunakannya hanya agar tercium wangi dan menarik orang lain. </p>
            <p>Namun, nyatanya parfum juga memiliki beberapa manfaat yang bisa didapatkan. Melansir dari <i>medium.com</i>, berikut beberapa manfaat menggunakan parfum :</p>
            <h3><strong>1.  Aromaterapi</strong></h3>
            <p>Parfum merupakan salah satu elemen dari aromaterapi. Manfaat yang didapatkan adalah efek relaksasi atau menenangkan. Bahan yang dapat digunakan sebagai aromaterapi bisa seperti rempah-rempah, jeruk, atau bunga. Mungkin kamu nggak menyadarinya, tapi banyak parfum yang bisa membantu kamu meredakan stres. </p>
            <h3><strong>2.  Meningkatkan mood</strong></h3>
            <p>Parfum bisa memengaruhi mood seseorang. Itulah mengapa parfum didesain berbeda-beda untuk kebutuhan acara tertentu. Ada juga bahan yang bisa membangkitkan semangat. Maka perlu sekali bagi kamu untuk memilih aroma yang tepat. </p>
            <h3><strong>3.  Mengatasi insomnia</strong></h3>
            <p>Jika kamu penderita insomnia, parfum bisa menjadi salah satu terapi untuk mengatasinya. Minyak esensial bisa menjadi pilihan yang membuat kamu merasa rileks dan mengantuk sehingga kamu bis amenikmati waktu tidur dengan nyaman dan bebas insomnia. </p>
            <h3><strong>4.  Mengobati sakit kepala</strong></h3>
            <p>Wangi yang lembut dan enak bisa menyembuhkan sakit kepala. Hal ini merupakan sifat aroma sebagai terapeutik yang dapat menyembuhkan rasa sakit. Kamu bisa memakai wewangian tersebut saat sedang merasakan sakit kepala yang mengganggu. </p>
            <h3><strong>5.  Membuatmu terlihat menarik</strong></h3>
            <p>Feromon pada parfum bisa membuatmu terlihat menarik. Mungkin kamu pernah menyukai atau tertarik dengan seseorang karena aromanya? Hal itu juga bisa kamu lakukan jika ingin menarik hati wanita pujaanmu. Pengaruhi ia dengan indera penciumannya dan biarkan ia mengingat wangi ini sebagai diirimu di mana saja. </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/bukan-cuma-penampilan-pria-dengan-kepribadian-ini-sangat-disukai-wanita/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/kepribadian-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Other</div>
                            <div class="title">Bukan Cuma Penampilan, Pria dengan Kepribadian Ini Sangat Disukai Wanita!</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Bukan hanya tampilan aja yang dinilai para wanita, tapi kepribadian juga jadi salah satu faktor yang dipertimbangkan wanita dari seorang pria. Kepribadian seperti apa sih yang disukai wanita?. ', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Jenis Aroma Maskulin yang Memikat</b></h2>
            <p>Soal urusan indera penciuman, wanita memiliki kepekaan yang lebih tinggi dibanding pria. Maka dari itu sangat mudah bagi pria untuk menarik hati wanita melalui aroma tubuh. Cukup memilih aroma yang tepat dan sesuai karaktermu, maka kamu bisa membuat wanita menyukaimu. </p>
            <p>Buat kamu yang sedang mencari wangi yang pas untuk digunakan sehari-hari, berikut beberapa jenis aroma yang bisa memikat hati wanita. </p>
            <h3><strong>1.  Spicy</strong></h3>
            <p>Spicy notes dalam parfum, seperti kayu manis (cinnamon), jahe (ginger), kemenyan, dan mur (myrrh) bisa menjadi pilihan wangi bagi kamu yang ingin tampil penuh energi. Wanginya yang kuat bisa membangkitkan gairah seksual yang memikat pada pria maupun wanita. </p>
            <h3><strong>2.  Citrus</strong></h3>
            <p>Parfum dengan aroma citrus merupakan komposisi dari lemon, jeruk, grapefruit, bergamot atau jeruk mandarin. Wanginya yang segar membuat kamu terlihat bersih dan segar seperti habis mandi. Aroma yang menarik bagi banyak wanita. </p>
            <p>Tapi, saat menggunakan wewangian dengan aroma citrus, sebaiknya jangan berlebihan kalau kamu nggak mau tercium seperti wangi pengharum ruangan.   </p>
            <h3><strong>3.  Clean</strong></h3>
            <p>Wangi dengan aroma seperti cucian segar yang baru dikeluarkan dari lemari, seperti wangi sabun atau shampoo juga bisa memberikan dampak yang kuat bagi indera penciuman wanita. Aroma bersih bisa memberikan energi dan semangat serta perasaan tenang pada wanita. Wangi ini juga bisa meningkatkan ketertarikan seksual. </p>
            <h3><strong>4.  Musk</strong></h3>
            <p>Musk merupakan aroma yang kaya, seksi, dan sensual sehingga bisa membuat wanita terpikat. Musk juga memberikan kesan lembut dan bersahaja namun tetap maskulin. Makanya, musk menjadi aroma yang banyak digunakan oleh berbagai merk. </p>
            <p>Awalnya aroma musk ini didapatkan dari kantung kelenjar rusa kesturi jantan. Kantung ini memiliki cairan yang disemprotkan untuk menarik rusa betina. Ketika rusa mati, kantung tersebut diambil dan dikeringkan. Saat kantung itu dipecah, keluarlah butiran harum yang direndam alkohol dan menghasilkan aroma musk.</p>
            <p>Namun, kini aroma musk sudah nggak lagi menggunakan kantung rusa jantan, tapi dengan rekayasa kimia sintetik. /p>
            <h3><strong>5.  Earthyy</strong></h3>
            <p>Aroma kayu cendana (sandalwood), patchouli, dan rosewood merupakan aroma yang kuat dan dikaitkan dengan kejantanan pria. Aroma ini juga dinilai dapat meningkatkan hasrat wanita untuk melakukan hubungan seksual. Menurut data dari Swiss Arabian, kayu cendana menyerupai andosteron, yaitu bahan kimia yang disekresikan dari ketiak manusia. Studi ilmiah menyimpulkan bahwa wanita secara tidak sadar mengaitkan aroma cendana dengan andosteron, sehingga meningkatkan daya tarik dan hasrat seksual pria yang memakai aroma tersebut.</p>
            <h3><strong>6.  Chocolate</strong></h3>
            <p>Pria dengan tipe cool dan gaya casual cocok menggunakan parfum dengan aroma cokelat. Aroma ini terkesan casual dan membuat pemakainya terkesan easy going. Wangi cokelat bisa membuat wanita tergoda dan merasa nyaman serta membuat moodnya lebih baik. </p>
            <h3><strong>7.  Woody</strong></h3>
            <p>Beberapa pria menyukai aroma kayu-kayuan aromatic seperti sandalwood (cendana), pinus, vetiver, atau patchouli. Mereka yang menyukai aroma kayu-kayuan cenderung sederhana dalam penampilan, nggak suka mengikuti mode terbaru, bahkan lebih menyukai penampilan yang klasik dan nyaman.  </p>
            <h3><strong>8.  Peppermint</strong></h3>
            <p>Aroma peppermint berkesan bersih dan menyegarkan. Peppermint bisa menyatu dengan aroma lain, terutama herba, floral, dan citrus sehingga menjadikannya aroma paling populer pada produk tubuh pria. </p>
            <h3><strong>9.  Sandalwood</strong></h3>
            <p>Cendana punya aroma kayu dengan sedikit rasa manis yang jarang ditemukan pada roma kayu lainnya. Aroma ini juga memberikan kesan eksotis dan berkharisma namun memiliki sisi lembut. Pria yang menyukai aroma sandalwood cenderung perfeksionis. </p>
            <h3><strong>10. Coffee</strong></h3>
            <p>Wangi kopi juga hampir banyak dipakai sebagai parfum karena baunya yang nikmat. Aroma ini berkesan hangat dan tenang sehingga membuat wanita yang dekat denganmu merasa nyaman dan betah berlama-lama. </p>
            <p>Semua aroma tersebut akan sangat pas jika digunakan secukupnya saja dengan memilih merk parfum yang tahan lama. Jangan lupa untuk selalu menjaga kebersihan tubuh karena sejatinya aroma parfum nggak bisa menutupi aroma asli tubuhmu, justru ia akan bercampur setelah beberapa jam setelah penggunaan.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = '5 Posisi Seks Agar Pria Lebih Tahan Lama';
        $blog->category = 'Sex';
        $blog->date = '19 November 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/5-posisi-sex-pria-terbaik.jpg';
        $blog->url_name = '5-posisi-sex-pria-terbaik';
        $blog->subtitle = "Tahan lama di ranjang selama berhubungan seks memang jadi hal yang diinginkan banyak pasangan. Inilah beberapa posisi seks yang bisa dipraktikkan agar seks lebih tahan lama.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Memiliki performa yang prima di ranjang saat berhubungan seks merupakan hal yang diimpikan para pria untuk menunjukkan kejantanan dan keperkasaannya. Namun, sayangnya ada saja kendala yang dapat menghambat pria untuk tahan lama saat berhubungan seksual. </p>
                    <p>Tapi, kamu nggak perlu khawatir karena ada beberapa hal yang dapat dilakukan untuk membantu pria lebih tahan lama saat berhubungan seks, salah satunya adalah posisi seks. Lima posisi seks berikut bisa membuat pria lebih tahan lama dan mendapatkan kepuasan seksual bersama pasangan. </p>
                </i>
            </div>

            <p>Berhubungan seksual merupakan momen sakral yang dilakukan bukan hanya untuk kepuasan belaka, tapi juga salah satu representasi rasa cinta. Maka dari itu dalam hubungan seksual harus ada komunikasi yang baik agar tercapai momen yang diinginkan bersama.</p>
            <p>Ketika berhubungan, hampir setiap orang menginginkan aktivitas seksual yang tahan lama dan terpuaskan. Bagi pria, tampil prima dan tahan lama di ranjang merupakan sebuah keharusan untuk menunjukkan kejantanan dan keperkasaannya.</p>
            <h2><b>Hal yang Membuat Ereksi Tak Bertahan Lama</b></h2>
            <p>Keinginan pria untuk memiliki performa yang hebat di ranjang kadang nggak berjalan mulus. Ada beberapa faktor yang bisa menjadi penghambat pria untuk bertahan lama, terutama soal ereksi. Faktor tersebut di antaranya adalah sebagai berikut :</p>
            <h3><strong>1. Lemahnya otot panggul</strong></h3>
            <p>Otot panggul yang nggak kuat bisa bikin pria kesulitan untuk mendapatkan ereksi bahkan ejakulasi. Saat melakukan aktivitas seksual, otot panggul merupakan bagian yang juga bekerja selama kegiatan itu berlangsung. Maka, ketika otot panggul pria nggak cukup kuat selama aktivitas seksual, pria akan kesulitan mendapatkan kepuasan saat orgasme.</p>
            <h3><strong>2. Stimulasi seks yang nggak sesuai</strong></h3>
            <p>Pria yang mendapatkan kenikmatan melalui masturbasi dengan cara-cara tertentu kadang membuatnya kesulitan mendapatkan kenikmatan yang sama saat bercinta dengan pasangannya. Kendalanya adalah pria nggak mau mengungkapkan hal itu pada pasangannya. Pun dengan pasangannya yang nggak tahu cara untuk membuat pria mendapatkan stimulasi seks yang diinginkannya sehingga pria kesulitan mendapatkan ereksi yang lama.</p>
            <h3><strong>3. Masalah psikologis</strong></h3>
            <p>Hidup memang kadang membuat pria menjadi rentan mengalami stres bahkan depresi. Hal itu juga sangat berpengaruh terhadap performa seksual pria sehingga ia kesulitan untuk bertahan lama dengan ereksinya.</p>
            <h3><strong>4. Ejakulasi dini</strong></h3>
            <p>Satu dari tiga pria dalam hidupnya mengalami ejakulasi dini. Kondisi ini merupakan situasi di mana pria nggak bisa mempertahankan ereksinya selama satu menit sebelum atau setelah penetrasi seksual. Hal itu tentu membuat pria jadi nggak bsia bertahan lama di ranjang dan nggak bisa mendapatkan atau memberikan kepuasan selama kegiatan seksualnya.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/senam-kegel-tingkatkan-performa-seksual/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/senam-kegel-tingkatkan-performa-seksual.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">Tingkatkan Performa Seksual Dengan Senam Kegel</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Senam kegel melatih kekuatan otot PC (pubococcygeus) atau dikenal dengan otot dasar panggul yang berfungsi untuk mencegah disfungsi ereksi dan mengatasi ejakulasi dini. ', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Posisi Seks yang Dapat Membuat Pria Bertahan Lama</b></h2>
            <p>Bertahan lama di ranjang merupakan hal yang diinginkan pria maupun wanita saat berhubungan seks. Mengatasi faktor-faktor tersebut di atas yang membuat pria nggak bisa bertahan lama adalah dengan rutin melakukan senam kegel untuk melatih otot panggul dan mengatasi ejakulasi dini. </p>
            <p>Selain itu, posisi seks juga memengaruhi pria untuk dapat bertahan lebih lama di ranjang dan mendapatkan kepuasan bagi keduanya.</p>
            <p>Berikut beberapa posisi seks yang dapat dilakukan agar pria bertahan lama dan cocok dipraktikkan untuk pria yang mengalami ejakulasi dini :</p>
            <h3><strong>1. Woman on Top</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/wot.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Bustle</i></div>
            </p>
            <p><strong>How to do : </strong></p>
            <p>Pria cukup berbaring dan biarkan wanita mengambil kendali. Kamu berbaring dengan membuka kedua kaki atau bisa juga diluruskan. Posisikan wanita berada di atas dan membuka kedua kakinya melewati pinggulmu. </p>
            <p>Kamu juga bisa mencondongkan tubuh dengan membebankan berat tubuh pada di lengan yang berfungsi sebagai penyangga. Kamu bisa menggerakan pinggul bergantian dengan pasangan. </p>
            <p><strong>Why it works : </strong></p>
            <p>Wanita memegang kendali di posisi ini sehingga ketika akan mencapai klimaks, pasangan bisa mencondongkan tubuhnya agar penetrasi nggak terlalu dalam dan aktivitas seksual bisa diteruskan kembali. Posisi ini juga membuat pria bisa tetap merasakan nikmat tanpa membuatnya ejakulasi telalu cepat.</p>

            <h3><strong>2. Spooning</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/spooning.png" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Bustle</i></div>
            </p>
            <p><strong>How to do : </strong></p>
            <p>Kamu dan pasangan berbaring miring ke arah yang sama dengan posisi memeluk dari belakang, seperti sendok yang diposisikan berjajar. Usahakan pinggul pasangan lebih rendah dan kaki ditekuk agar penetrasi lebih mudah. Saat melakukan posisi ini, kamu bisa memainkan payudara pasanganmu. </p>
            <p><strong>Why it works : </strong></p>
            <p>Posisi ini memungkinkan penetrasi yang dangkal sehingga mengurangi sensitivitas penis dan pria nggak akan cepat ejakulasi. </p>

            <h3><strong>3. Side by side</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/side-by-side.png" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Promescent</i></div>
            </p>
            <p><strong>How to do : </strong></p>
            <p>Posisi ini mirip dengan spooning, hanya saja pada posisi ini kamu dan pasangan saling berhadapan. Kaki pasangan kamu lebih bebas, bisa diangkat atau dilingkarkan pada pinggulmu. </p>
            <p><strong>Why it works : </strong></p>
            <p>Posisi ini memungkinkan pria untuk dapat menunda ejakulasi karena kamu dan pasangan dapat mengontrol seberapa dalam penetrasi dan kecepatan dorongan.</p>

            <h3><strong>4. The Yab Yum</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/yabyum.png" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Bustle</i></div>
            </p>
            <p><strong>How to do : </strong></p>
            <p>Jika kamu pernah melihat sampul buku seks tantra, posisi ini pasti sangat familiar. Ini juga dianggap sebagai posisi seks tantra tertinggi karena sangat intim seperti bunga lotus.</p>
            <p>Pria duduk bersila di lantai atau tempat tidur. Kemudian pasangan duduk di pangkuan pria, menghadap ke wajah pria. </p>
            <p>Saat penetrasi, kamu dan pasangan bisa saling bertatapan atau berpelukan. Posisi ini juga bisa dieksplorasi dengan pasangan memiringkan panggulnya untuk mendapatkan titik G-spot.</p>
            <p><strong>Why it works : </strong></p>
            <p>Pada posisi ini pria akan lebih sulit untuk memberikan dorongan sehingga pria bisa lebih mengontrol ejakulasi dan durasi berhubungan bisa lebih lama.</p>
            <h3><strong>5. The Cross</strong></h3>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/the-cross.png" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Love Position</i></div>
            </p>
            <p><strong>How to do : </strong></p>
            <p>Pasangan seperti duduk di pangkuan kamu sambil berbaring namun dengan posisi saling menyilang. Minta pasangan untuk berbaring telentang kemudian posisikan tubuhmu agak miring ke arah pasangan. Kaki kamu dan pasangan saling bergantian menumpuk.</p>
            <p>Saat awal, mungkin kamu merasa agak kesulitan tetapi begitu sudah penetrasi maka kamu dan pasangan bisa saling mendorong dengan lembut.</p>
            <p><strong>Why it works : </strong></p>
            <p>Posisi ini membuat gerakanmu menjadi terbatas sehingga ejakulasi bisa lebih terkontrol.</p>
            <h2><b>Gunakan Teknik Kama Sutra untuk Mengendalikan Orgasme</b></h2>
            <p>Selain posisi seks, aplikasikan pula teknik Kama Sutra untuk mengendalikan orgasme agar kamu bisa lebih tahan lama. Cara ini dinilai ampuh sejak dulu untuk menahan keinginan orgasme.   </p>
            <p>Kamu cuma butuh waktu kurang dari 30 detik untuk melakukan hal ini.  Saat penetrasi dan sudah merasakan orgasme ingin mencapai puncak, cabut penis dari vagina. Kemudian genggam batang penis, lalu tempatkan jempol di bagian bawah kepala penis dan tekan dengan perlahan. </p>
            <p>Jika kamu kerap mengalami gejala ejakulasi dini, temukan solusi tepat untuk mengatasinya dengan <a href="' . base_url() . 'ejakulasi-dini/" style="text-decoration: underline;">Stamina Cream</a> dari Norm yang mampu membantu kamu mengatasi ejakulasi dini sehingga kamu bisa bertahan lebih lama. Jadi, sebelum melakukan posisi seks di atas, gunakan dulu Stamina Cream selama 30 menit sebelum berhubungan. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Fakta Unik Rambut Manusia yang Jarang Diketahui';
        $blog->category = 'Hair Loss';
        $blog->date = '17 November 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/fakta-unik-rambut-manusia.jpg';
        $blog->url_name = 'fakta-unik-rambut-manusia';
        $blog->subtitle = "Ada beberapa fakta menarik tentang rambut yang perlu kamu tahu agar kamu makin rajin menjaga kesehatan rambut.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Rambut nggak cuma tumbuh di bagian kepala saja tapi juga tumbuh di beberapa bagian tubuh lainnya, seperti tangan, kaki, ketiak, kemaluan, dan berbagai tempat lainnya. Rambut yang ada pada tubuh memiliki banyak fungsi, di antaranya adalah sebagai pengatur suhu dan mengurangi gesekan kulit. Selain itu, rambut juga ternyata memiliki jenis tersendiri. Ada beberapa fakta seputar rambut yang perlu kamu ketahui. </p>
                </i>
            </div>

            <p>Rambut merupakan bagian tubuh yang ada pada setiap orang, baik di kepala, tubuh, ketiak, kemaluan, bahkan hidung. Rambut juga mempunyai banyak fungsi bagi tubuh. Selain untuk melindungi bagian tubuh, rambut juga memiliki fakta lain yang jarang diketahui.</p>
            <h2><b>Fungsi Rambut di Beberapa Bagian Tubuh</b></h2>
            <p>Saat memasuki fase puber, rambut pada tubuh manusia akan tumbuh di beberapa bagian tubuh, seperti ketiak dan kemaluan. Pada wanita, rambut ini akan muncul di usia 10 – 12 tahun, sedangkan pria pada usia 11 – 14 tahun. </p>
            <p>Fungsi rambut ini juga bukan hanya sebagai tanda seseoarang telah memasuki masa pubertas tapi juga melindungi dari bakteri dan mengurangi gesekan yang dapat menimbulkan luka atau goresan.</p>
            <h2><b>Manfaat rambut pada tangan</b></h2>
            <h3><strong>1. Mengatur suhu tubuh</strong></h3>
            <p>Jika kamu pernah merasa merinding atau bulu kuduk naik saat dingin, di situlah fungsi rambut pada kulit bekerja. Salah satu fungsi rambut adalah sebagai pengatur suhu tubuh.</p>
            <p>Saat kamu kedinginan, rambut secara otomatis akan meremang untuk menangkap suhu panas sehingga menjaga tubuh dari rasa dingin.</p>
            <h3><strong>2. Fungsi sensori</strong></h3>
            <p>Kamu bisa merasakan semut merambat di tangan juga karena adanya bulu di tangan. Folikel rambut bisa merasakan ketika ada perubahan. Akar rambut akan merasakan adanya gangguan atau benda asing, kemudian mengirimkan sinyal ke sistem saraf pusat untuk merespons. Nah, adanya rambut ini, kamu bisa merasakan temperatur, rasa sakit, hingga sentuhan.</p>
            <h2><b>Manfaat rambut pada kemaluan</b></h2>
            <h3><strong>1. Mengurangi gesekan</strong></h3>
            <p>Area kelamin merupakan tempat yang sensitif sehingga keberadaan rambut menjadi hal yang penting untuk menguragi adanya gesekan, baik saat beraktifitas maupun saat melakukan aktivitas seksual.</p>
            <h3><strong>2. Melindungi dari bakteri</strong></h3>
            <p>Rambut kemaluan melindungi kemaluan dari kotoran dan mikroorganisme berbahaya. Rambut kemaluan juga memproduksi sebum untuk mencegah bakteri berkembang biak. Selain itu, rambut pada kemaluan juga melindungi dari infeksi. </p>
            <h2><b>Manfaat rambut ketiak</b></h2>
            <h3><strong>1. Membuat seseorang atraktif</strong></h3>
            <p>Bulu ketiak bisa melepaskan aroma yang mengandung feromon, hormon alami yang berperan membuat seseorang terlihat menarik secara seksual. Rambut ketiak juga dapat memberikan kelembaban. Namun, kebersihannya juga harus dijaga supaya kuman nggak berkumpul dan menimbulkan bau yang nggak sedap.</p>
            <h3><strong>2. Mengurangi gesekan</strong></h3>
            <p>Adanya bulu ketiak bisa mengurangi gesekan pada kulit, terutama saat kamu sedang berlari atau berjalan.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/mitos-penyebab-rambut-rontok-bener-nggak-sih/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/penyebab-rambut-rontok-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Hair Loss</div>
                            <div class="title">Mitos Penyebab Rambut Rontok. Benar Nggak Sih?</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Banyak orang beranggapan penyebab rambut rontok hanya terjadi pada mereka yang sudah tua. Nyatanya mitos tersebut tidak selalu benar adanya. Simak faktanya agar tidak salah informasi dan bisa mendapatkan penanganan yang tepat.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Fakta Unik Rambut Manusia</b></h2>
            <p>Kamu mungkin menyadari bahwa rambut di tubuhmu memiliki dua jenis yang berbeda, yaitu rambut yang tipis dan tebal. Nah, ternyata jenis rambut tersebut juga punya nama, yaitu terminal dan vellus.</p>
            <p>Rambut jenis terminal merupakan rambut tebal yang berada di ketiak, kemaluan, serta jenggot dan kumis. Sedangkan vellus adalah rambut tipis yang terdapat pada tangan atau kaki.</p>
            <p>Selain itu, ada beberapa fakta menarik lain seputar rambut yang jarang diketahui. Berikut beberapa faktanya!</p>
            <h3><strong>1. Ada tungau yang hidup di bulu mata</strong></h3>
            <p>Tungau atau binatang kecil semacam parasit hidup di bulu mata. Tungau dengan genus <i>Demodex</i> ini berukuran sangat kecil sehingga nggak bisa dilihat dengan mata telanjang. Dalam jumlah normal, kehadiran tungau ini justru bermanfaat.</p>
            <p>Tungau ini memakan kulit mati yang ada di sekitar bulu mata dan kelopak mata. Namun, jika jumlah tungau ini berlebihan maka akan menimbulkan iritasi seperti kemerahan dan gatal. </p>
            <h3><strong>2. Rambut mengatur suhu tubuh</strong></h3>
            <p>Seperti yang sudah disebutkan sebelumnya bahwa salah satu fungsi rambut adalah mengatur suhu tubuh. Saat kamu sedang berolahraga atau beraktifitas berat dan kamu berkeringat maka fungsi rambut adalah sebagai penahan keringat dan mendinginkan tubuhmu.</p>
            <p>Sebaliknya, sata udara dingin, rambut berfungsi sebagai penahan suhu panas tubuh untuk menghangatkan tubuhmu. </p>
            <h3><strong>3. Rambut membawa minyak</strong></h3>
            <p>Mungkin kamu pernah berada pada kondisi rambut lepek dan berminyak? Hal itu dapat terjadi karena saat tumbuh rambut akan melewati kelenjar minyak. Kelenjar minyak tersebut memberikan rambut minyak untuk membuatnya lembut dan berkilau.</p>
            <p>Mungkin kamu pernah berada pada kondisi rambut lepek dan berminyak? Hal itu dapat terjadi karena saat tumbuh rambut akan melewati kelenjar minyak. Kelenjar minyak tersebut memberikan rambut minyak untuk membuatnya lembut dan berkilau.</p>
            <h3><strong>4. Bentuk folikel menentukan jenis rambut</strong></h3>
            <p>Tiap orang punya jenis rambut yang berbeda-beda, ada yang lurus, keriting, bergelombang, halus, kasar, bahkan tipis. Perbedaan jenis rambut pada tiap orang ditentukan oleh folikel, yaitu tempat rambut tumbuh. Folikel tersebut juga dipengaruhi oleh gen.</p>
            <h3><strong>5. Rambut di tubuh lebih pendek dari rambut kepala disebabkan oleh fase rambut</strong></h3>
            <p>Rambut memiliki siklus hidup, seperti fase anagen (tumbuh), katagen (transisi), dan telogen (istirahat). Pada rambut di tubuh, fase anagen hanya berlangsung dalam hitungan minggu sehingga fasenya pendek dan menyebabkan rambut pada tubuh nggak bisa tumbuh panjang. Berbeda dengan rambut di kepala yang memiliki fase anagen sampai tahunan sehingga dapat tumbuh panjang. </p>
            <p>Menjaga kesehatan rambut sangatlah penting. Rutin mencuci rambut dan mengonsumsi makanan penuh nutrisi juga merupakan salah satu cara untuk menjaga kesehatan rambut. Seperti yang kita tahu bahwa jika rambut dibiarkan tanpa dirawat akan menimbulkan masalah yang tentunya dapat mengganggu penampilan.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Kenali G-Spot pada Wanita Untuk Mencapai Kepuasan Seksual';
        $blog->category = 'Sex';
        $blog->date = '12 November 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/mengenali-g-spot-wanita.jpg';
        $blog->url_name = 'mengenali-g-spot-wanita';
        $blog->subtitle = "Wanita dikenal cenderung lebih sulit “ON” dibanding pria. Ini tips kenali G-Spot wanita untuk membuatnya mencapai kepuasan.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Memberikan kepuasan bagi pasangannya merupakan hal yang ingin dicapai pria, terlebih urusan hubungan seks. Namun, sayangnya kepuasan wanita merupakan hal yang susah-susah gampang untuk diberikan oleh pria.</p>
                    <p>Salah satu kendalanya adalah wanita yang cenderung enggan untuk memberikan informasi pada pria, titik mana yang ia sukai untuk dieksplorasi dan memberikan kepuasan. Juga pria yang belum mengenali bagian pada tubuh wanita yang bisa mendatangkan kepuasan. Padahal ada titik bernama G-Spot pada wanita yang bisa membuat wanita mencapai orgasme hebat.</p>
                </i>
            </div>

            <p>Salah satu kendalanya adalah wanita yang cenderung enggan untuk memberikan informasi pada pria, titik mana yang ia sukai untuk dieksplorasi dan memberikan kepuasan. Juga pria yang belum mengenali bagian pada tubuh wanita yang bisa mendatangkan kepuasan. Padahal ada titik bernama G-Spot pada wanita yang bisa membuat wanita mencapai orgasme hebat.</p>
            <p>Wanita cenderung malu atau segan untuk menyampaikan di mana titik yang ingin dieksplorasi oleh pasangan agar mencapai kepuasan seksual. Padahal, nggak sedikit wanita yang sulit dibangun moodnya untuk berhubungan dan mencapai klimaks.</p>
            <p>Salah satu titik pada tubuh wanita yang bisa menjadi kunci kepuasan adalah G-Spot. Titik ini jarang diketahui oleh pria bahkan oleh wanita itu sendiri. Hal ini karena letaknya yang tersembunyi di dalam vagina, tak seperti klitoris ataupun labia yang terlihat. Saat bercinta, wanita nggak hanya ingin mendapatkan orgasme pada klitoris tapi juga pada G-Spot. Sayangnya, nggak semua wanita bisa mendapatkan puncak kenikmatan seksual pada titik itu. </p>
            <p>Menurut dr. Haekal Anshari yang juga merupakan seksolog, wanita pada dasarnya memang lebih mudah mengalami orgasme klitoris ketimbang G-Spot. Hal itu terjadi karena lokasi dari klitoris yang lebih mudah teraba saat menerima rangsangan berupa sentuhan dari pasangannya. </p>
            <p>Nah, pria juga perlu mengetahui apa arti dari G-Spot dan juga cara menemukan titik G-Spot pada wanita. </p>
            <h2><b>Apa itu G-Spot dan di Mana Letaknya?</b></h2>
            <p><i>GrafenberG-Spot</i> atau lebih dikenal dengan G-Spot adalah salah satu bagian dari organ intim wanita di mana lokasinya terletak beberapa sentimeter dari liang vagina. G-Spot dapat tersentuh pada saat pria melakukan penetrasi seksual ataupun saat fingering, yaitu saat pria memasukkan jari lebih dalam ke liang vagina. </p>
            <p>Banyak pria yang merasa takut melukai bagian kewanitaan pasangannya dengan melakukan fingering terlalu dalam. Namun, apabila pria berhasil mengenai area G-Spot, maka pasangannya akan mengalami sensasi yang begitu hebat, bahkan sampai orgasme. </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/tips-lebih-percaya-diri-dan-panas-di-ranjang/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/tips-lebih-percaya-diri-dan-panas-di-ranjang.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">Tips Agar Pria Lebih Percaya Diri dan Panas di Ranjang</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Sebelum melakukan hubungan seks malam ini, pria wajib tahu tips untuk tampil lebih pede dan panas di ranjang. ', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Kenali Tanda-Tanda Orgasme Pada Wanita</b></h2>
            <p>Tujuan pasangan melakukan hubungan seksual adalah untuk mendapatkan kepu asan atau yang sering disebut orgasme. Orgasme juga nggak hanya memberikan rasa puas dalam hubungan intim, namun juga memiliki berbagai macam manfaat kesehatan baik secara fisik maupun psikologis. Nah, penting bagi pria untuk mengenali tanda-tanda orgasme pada wanita agar hubungan bersama pasangan semakin harmonis.</p>
            <h3><strong>1. Wajah memerah dikarenakan aliran darah meningkat</strong></h3>
            <p>Pada saat wanita mengalami orgasme, aliran darah pada seluruh tubuh wanita meningkat sehingga menimbulkan kontraksi yang cukup hebat di area vagina. Hal ini membuat wajahnya memerah yang menandakan kepuasan seksual yang dirasakannya.</p>
            <h3><strong>2. Puting payudara mengeras</strong></h3>
            <p>Nggak hanya mengalami kontraksi di area vagina, orgasme juga ditandai dengan puting payudara yang mengeras. Hal ini wajar terjadi karena pada saat wanita mengalami ereksi, otot-otot pada bagian kulit juga mengalami kontraksi, termasuk pada bagian puting. Selain itu, puting juga merupakan area eksotis yang sangat peka pada saat pria melakukan penetrasi atau memberikan sentuhan di area tersebut. </p>
            <h3><strong>3. Frekuensi napas yang semakin cepat</strong></h3>
            <p>Hubungan seksual adalah aktivitas yang berpacu dengan frekuensi napas. Saat mengalami orgasme, napas wanita mengalami percepatan dan terengah-engah dikarenakan terdapat pelebaran pembuluh darah di dalam tubuh wanita serta kontraksi di beberapa bagian tubuh seperti tangan dan kaki.</p>
            <h3><strong>4. Terjadi gerakan refleks seperti mendesah, mengerang, atau mencengkeram</strong></h3>
            <p>Orgasme dapat menyebabkan otak kehilangan kendali selama beberapa saat. Hal ini dikarenakan bagian otak yang mengendalikan tindakan nggak bekerja saat orgasme sehingga secara refleks wanita mendesah, mengerang, dan juga mencengkeram dengan keras. </p>
            <h3><strong>5. Kontraksi otot sekitar organ intim</strong></h3>
            <p>Wanita akan mengalami kontraksi otot di sekitar panggul dan dinding rahim saat orgasme. Selain itu, wanita akan merasakan dinding vagina berdenyut pada saat orgasme, tentunya dengan intensitas berbeda-beda.</p>
            <h2><b>Posisi Bercinta Untuk Menemukan G-Spot</b></h2>
            <p>Agar pria dapat menemukan G-Spot, terdapat beberapa posisi bercinta yang disarankan agar orgasme dengan pasangan dapat terjadi lebih mudah. </p>
            <h3><strong><i>1.  Spooning</i></strong></h3>
            <p>Posisi spooning atau posisi miring dimana pasangan berbaring dan menghadap ke arah yang sama dengan posisi pria berada di belakang wanita. Spooning membuat wanita dapat mengangkat salah satu kakinya ke atas sehingga memungkinkan pria melakukan penetrasi lebih dalam dan juga mampu mencapai G-Spot wanita dengan mudah. Selain itu, penis juga akan bergesekkan dengan kulit vagina sehingga dapat membangkitkan gairah wanita.</p>
            <h3><strong><i>2.  Modified cowgirl</i></strong></h3>
            <p><i>Modifield cowgirl</i> adalah posisi di mana wanita duduk di atas pria seperti koboy wanita dan mengontrol hubungan seksual. Pria merebahkan dirinya dan dapat menikmati setiap tindakan yang dilakukan oleh pasangannya.</p>
            <p>Ada dua jenis posisi terbaik dalam cowgirl. Pertama, wanita menghadap ke arah pria dan yang lain adalah posisi terbalik dengan membelakangi wajah pasangannya. Wanita dapat mencapai orgasme yang memuaskan dikarenakan mengontrol setiap tindakan seksualnya.</p>
            <p>Untuk mencapai orgasme yang maksimal, dr. Haekal Anshari juga menambahkan bahwa penis harus mencapai ereksi yang sempurna agar dapat menggesek bagian G-Spot secara optimal. Maka dari itu, pria harus memiliki Kesehatan yang prima, bukan hanya soal tubuh tapi juga performa penis yang bebas masalah. </p>
            <p>Jika pria mengalami gangguan kesehatan seksual, seperti kesulitan untuk mendapatkan atau mempertahankan ereksi, maka dapat menemui dokter ahlinya atau bisa berkonsultasi dengan mudah hanya melalui website di <a href="'. base_url() .'" style="text-decoration: underline;">norm</a>. Jaga selalu gaya hidup sehat dengan konsumsi makanan sehat gizi seimbang dan olahraga teratur. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Jerawat Batu : Penyebab dan Cara Mengatasinya';
        $blog->category = 'Acne';
        $blog->date = '10 November 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/cara-mengatasi-jerawat-batu.jpg';
        $blog->url_name = 'cara-mengatasi-jerawat-batu';
        $blog->subtitle = "Wajah yang berjerawat cukup membuat pemilik wajah menjadi nggak pede. Terlebih jika jerawat yang muncul adalah jerawat batu yang sulit dihilangkan.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Wajah berjerawat seperti masalah yang nggak kunjung berakhir. Apalagi jika jerawat yang muncul di wajah adalah jenis jerawat kistik atau yang biasa dikenal dengan jerawat batu. </p>
                    <p>Jerawat batu merupakan jerawat yang tergolong cukup parah dan timbul karena adanya bakteri, minyak, dan sel kulit mati yang terjebak di bawah kulit sehingga meradang dan sulit sembuhnya. Sebetulnya apakah penyebabnya dan bagaimana cara mengatasinya?</p>
                </i>
            </div>

            <p>Memiliki wajah berjerawat bisa membuat seseorang menjadi stres dan nggak percaya diri. Terlebih jika jerawat yang muncul di wajah adalah jerawat batu. Jerawat yang meradang membuat banyak tonjolan kemerahan di beberapa titik wajah, belum lagi jika sudah memiliki nanah, tentu akan mengganggu penampilan. Selain itu, efek gatal dan sakit yang dating bersamaan membuat pemilik wajah menjadi serba salah karena jika disentuh tentu akan menambah parah jerawat.</p>
            <h2><b>Apa itu Jerawat Batu?</b></h2>
            <p>Pada dasarnya jerawat timbul karena adanya peradangan pada kulit akibat sumbatan yang disebabkan oleh bakteri dan kotoran. Namun, jerawat kistik atau yang dikenal dengan jerawat batu timbul karena penumpukan bakteri, minyak, dan sel kulit mati yang meradang namun berada jauh di bawah lapisan kulit sehingga yang muncul ke permukaan kulit adalah tonjolan merah yang besar dan kadang berisi nanah. </p>
            <p>Jerawat batu merupakan jerawat yang cukup parah sehingga kalau nggak segera diatasi, peradangan bisa menyebar di lapisan kulit dan menyebabkan pori-pori pecah. Nah, jika peradangan itu menyebar, maka akan timbul jerawat batu yang baru di daerah yang terinfeksi. </p>
            <p>Menurut <i>Healthline</i>, siapa pun bisa mengalami jerawat kistik, terutama mereka yang memiliki tipe wajah berminyak. Jerawat kistik juga umum terjadi pada remaja, wanita, dan orang tua dengan hormon tidak seimbang. </p>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/jerawat-batu.PNG" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : Healthline</i></div>
            </p>
            <h2><b>Penyebab Jerawat Batu</b></h2>
            <p>Sebetulnya belum ada penyebab pasti munculnya jerawat batu. Tapi, hormon androgen bisa dikatakan sebagai pemicu. Meningkatnya hormon androgen bisa menyebabkan pori-pori tersumbat. Orang yang memiliki tingkat hormon androgen tinggi adalah remaja dan wanita yang sedang mengalami siklus menstruasi, menopause, atau kehamilan.</p>
            <p>Namun, pada pria usia dewasa juga bisa mengalami hal tersebut jika hormon pada tubuh nggak seimbang. Selain itu, bisa disebabkan juga oleh faktor genetik. Jika orangtua kamu pernah mengalami jerawat batu yang parah, maka kamu juga berpotensi untuk mengalami hal yang sama. </p>
            <p>Ada faktor-faktor yang menyebabkan pori-pori kulit tersumbat, di antaranya adalah :</p>
            <h3><strong>1. Genetik</strong></h3>
            <p>Keturunan dari orangtua yang bermasalah dengan kulit berjerawat</p>
            <h3><strong>2. Mudah berkeringat</strong></h3>
            <p>Jika seseorang mudah berkeringat maka kelembaban kulitnya akan tinggi sehingga bakteri lebih gampang untuk berkembang</p>
            <h3><strong>3. Penggunaan produk</strong></h3>
            <p>Penggunaan produk yang nggak cocok, seperti produk kosmetik atau jenis produk untuk kulit lainnya bisa menjadi masalah bagi pemilik wajah berminyak</p>
            <p>Meski sama-sama disebabkan oleh bakteri dan sel kulit mati, jerawat kistik berbeda dengan jerawat jenis lain. Jerawat kistik atau jerawat batu sangat dipengaruhi oleh keseimbangan hormon. </p>
            <p>Hormon androgen merupakan hormon yang mempengaruhi fungsi organ seksual. Hormon tersebut juga dapat merangsang kelenjar sebasea atau kelenjar minyak yang dapat menghasilkan sebum.</p>
            <p>Nah, kadar hormon androgen yang berlebihan bisa mengakibatkan kelenjar sebasea lebih aktif dan produksi sebum pun menjadi lebih banyak. Sebum yang berlebihan tadi membuat pri-pori mudah tersumbat dan akhirnya menyebabkan timbulnya jerawat. Ditambah lagi jika wajah nggak dibersihkan secara teratur dan menyeluruh, maka sebum yang berlebihan tadi akan bercampur dengan kotoran dan membuat jerawat yang muncul makin parah.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/mengenal-sebum-penyebab-jerawat-pada-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/penyebab-jerawat-pria-1.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Acne</div>
                            <div class="title">Mengenal Sebum Penyebab Jerawat Pada Wajah Pria</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Wajah berminyak bikin kulit terlihat mengkilap dan jadi gampang jerawatan. Minyak pada wajah sebetulnya punya peran penting untuk menjaga kelembaban. Tapi, kalau produksinya berlebihan, justru menimbulkan masalah. Jadi sebetulnya minyak di wajah itu apa sih?', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Cara Mengatasi Jerawat Batu</b></h2>
            <p>Jerawat batu bisa dihilangkan dengan berbagai cara, mulai dari hal yang bisa dilakukan sendiri di rumah hingga menggunakan obat-obatan medis berdasarkan resep dokter.</p>
            <p>Untuk mengatasi jerawat batu, kamu bisa melakukan hal-hal berikut ini :</p>
            <h3><strong>Perawatan di rumah </strong></h3>
            <p><strong>1.  Cuci wajah secara rutin</strong></p>
            <p>Cuci wajah dua kali sehari atau setelah berkeringat. Cuci wajah dengan sabun pembersih yang sesuai dengan kondisi kulit.</p>
            <p>Jangan lupa saat mencuci wajah, pijat wajah dengan lembut selama 60 detik. Rasakan manfaat pada wajah jika kamu mencuci wajah selama 60 detik.</p>
            <p><strong>2.  Jangan melakukan eksfoliasi</strong></p>
            <p>Saat wajah berjerawat, hindari penggunaan scrub wajah atau eksfoliasi. Jika dilakukan maka kondisi jerawat bisa makin parah dan menimbulkan luka.</p>
            <p><strong>3.  Hindari pencet jerawat</strong></p>
            <p>Jangan sekali-kali kamu memencet jerawat batu. Jerawat batu bukanlah jerawat kecil yang mudah dikeluarkan. Jerawat batu tersimpan pada sel darah putih sehigga jika kamu pencet maka akan memperparah kondisinya.</p>
            <p><strong>4.  Kompres dengan es batu</strong></p>
            <p>Jerawat batu merupakan jerawat yang berada jauh di bawah kulit sehingga saat jerawat mulai muncul, kamu bisa merasakannya seperti rasa nyeri. Jika sudah mulai merasakan atau timbul tonjolan, kamu bisa mengompresnya untuk mengurangi pembengkakan dan kemerahan. </p>
            <h3><strong>Pengobatan dengan bahan aktif   </strong></h3>
            <p>Mengatasi jerawat nggak bisa dilakukan sembarangan. Pengobatan harus dilakukan secara tuntas untuk menghilangkan jerawat kistik. </p>
            <p>Dokter akan memberikan beberapa jenis obat-batan sesuai dengan masalah kulit yang dihadapi. Bagi kamu yang mengalami masalah jerawat batu, maka dokter biasanya akan memberikan antibiotik.</p>
            <p>Antibiotik berguna untuk mengontrol pertumbuhan bakteri dan meringankan peradangan pada jerawat. Bahan aktif yang direkomendasikan dokter salah satunya adalah <i>benzoyl peroxide</i>. Obat oles tersebut membantu mengatasi jerawat.</p>
            <p>bahan aktif tersebut juga terkandung dalam <a href="' . base_url() . 'jerawat/" style="text-decoration: underline;"><i>Norm Night Cream</i></a> yang efektif mengatasi jerawat dan membantu menghilangkan bekas jerawat serta memperbaiki tekstur kulit.</p>
            <p>Kamu bisa konsultasi dengan dokter melalui platform <a href="' . base_url() . '" style="text-decoration: underline;"><i>norm</i></a>. Kamu nggak perlu datang ke klinik, cukup lewat ponsel maka kamu bisa berkonsultasi dan mendapatkan rangkaian produk untuk mengatasi jerawat. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Tips Agar Pria Lebih Percaya Diri dan Panas di Ranjang';
        $blog->category = 'Sex';
        $blog->date = '6 November 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tips-lebih-percaya-diri-dan-panas-di-ranjang.jpg';
        $blog->url_name = 'tips-lebih-percaya-diri-dan-panas-di-ranjang';
        $blog->subtitle = "Sebelum melakukan hubungan seks malam ini, pria wajib tahu tips untuk tampil lebih pede dan panas di ranjang. ";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Apakah kamu merasa khawatir ketika akan melakukan hubungan seksual? Apakah kamu merasa cemas dengan performa seksualmu? Apakah kamu khawatir dengan ukuran penismu?</p>
                    <p>Jika jawabanmu kebanyakan adalah iya, maka kamu memiliki kepercayaan diri yang kurang untuk aktivitas seksual di ranjang. Maka kamu perlu untuk mendapatkan tips yang dapat membantu meningkatkan kepercayaan diri saat melakukan hubungan seksual.</p>
                </i>
            </div>

            <p>Setiap pasangan pasti menginginkan kegiatan seksual yang memuaskan dan sesuai dengan apa yang mereka inginkan. Namun, sayangnya banyak juga pasangan yang merasa kehidupan seksualnya terasa hambar dan nggak memberikan kepuasan sesuai yang mereka harapkan, baik dari sisi wanita maupun pria. </p>
            <p>Terlebih bagi pria, terlihat gagah dan memuaskan di ranjang merupakan suatu impian yang akan dilakukan untuk mewujudkannya. Pria akan merasa bangga jika pasangannya terpuaskan dan memuji setiap sentuhan yang diberikan. </p>
            <h2><strong>Kecemasan Pria yang Membuatnya Tidak Percaya diri</strong></h2>
            <p>Sayangnya, nggak semua pria bisa mendapatkan kepercayaan diri yang tinggi untuk bisa memberikan kepuasan bagi pasangannya di ranjang. Berbagai faktor dapat menjadi penyebab rendahnya kepercayaan diri pria. </p>
            <p>Beberapa faktor yang menyebabkan pria merasa cemas dan nggak percaya diri di ranjang adalah:</p>
            <h3><strong>1. Ukuran penis</strong></h3>
            <p>Ini adalah hal pertama yang paling dicemaskan oleh para pria. Apakah ukuran penisnya sudah terbilang besar dan panjang? Apakah ukuran penisnya terlalu kecil dibanding pria lain? Serta berbagai jenis pertanyaan lain yang terlintas di benak pria.</p>
            <p>Pria cenderung kompetitif dalam banyak hal, termasuk urusan penis sehingga hal itu juga menjadi salah satu faktor yang menyebabkan pria menjadi insecure dengan miliknya dan membandingkan diri dengan pria lain.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/ukuran-penis-ratarata-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/ukuran-penis-ratarata-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">Ukuran Penis Rata-Rata yang Pria Harus Ketahui. Berapa Ukuranmu?</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Pernahkah terpikirkan tentang berapa tepatnya ukuran penismu? Apakah termasuk pada ukuran rata-rata? Semua hal tentang ukuran penis bisa kamu dapatkan di sini.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h3><strong>2. Penampilan penis</strong></h3>
            <p>Selain ukuran, penampilan penis juga menjadi salah satu pertimbangan pria yang menyebabkan dirinya menjadi merasa khawatir. Penampilan yang dikhawatirkan tersebut terkait rambut kemaluan yang apakah sudah cukup terlihat rapi dan nggak mengganggu pasangan, bahkan bentuk dari penis itu sendiri. </p>
            <h3><strong>3. Bentuk badan</strong></h3>
            <p>Melansir dari <i>Men’s Health</i>, 40% pria merasa minder dan nggak bahagia dengan bentuk badannya. Bahkan seperempatnya lebih menyukai melakukan hubungan seksual dengan lampu padam dibanding suasana yang terang penuh lampu.</p>
            <p>Pria dengan tubuh gemuk dan perut buncit cenderung kurang percaya diri untuk tampil gagah di ranjang. Mereka menganggap tubuhnya nggak cukup menarik perhatian wanita.</p>
            <h3><strong>4. Kecemasan terhadap harapan pasangan</strong></h3>
            <p>Pria menginginkan pasangannya merasakan orgasme yang hebat karena dirinya. Hal itu membuat pria merasa lebih maskulin dan membangkitkan kepercayaan diri. Namun, terkadang kenyataannya justru pria menjadi ketakutan nggak bisa membuat pasangannya orgasme dan merasakan kenikmatan. </p>
            <p>Selain itu, pria juga takut pasangannya memiliki harapan seksual pada dirinya tapi ia nggak mampu untuk memenuhi harapan tersebut. </p>
            <h2><strong>Inilah Cara Agar Pria Lebih Percaya Diri dan Panas di Ranjang</strong></h2>
            <p>Ada stigma yang muncul bahwa pria harus lebih jago di ranjang dibandingkan pasangannya untuk menunjukkan kejantanannya. Hal itu tentunya membuat pria menjadi merasa khawatir sendiri, takut nggak bisa memenuhi stigma tersebut. </p>
            <p>Padahal masalah kejantanan bukan hanya diukur dari seberapa hebat pria saat melakukan aktifitas seksual. Aktifitas seksual yang menggairahkan tentunya bukan hanya beban bagi pria semata, tapi juga bagaimana kerjasama dan komunikasi yang baik antara pria dengan pasangannya.</p>
            <p>Nah, bagi kamu yang merasa belum memiliki kepercayaan diri yang utuh terkait performa di ranjang, tips berikut bisa membantu mengembalikan rasa pede kamu.</p>
            <h3><strong>1. Percaya bahwa kamu hebat di ranjang</strong></h3>
            <p>Hal utama yang harus dibangun pria di atas semua hal adalah rasa percaya pada diri sendiri. Percaya bahwa kamu bisa menjadi lebih hebat di ranjang. Kehebatan itu bukan semata dari seberapa kamu bisa memuaskan pasangan, tapi bagaimana kamu membangun sebuah hubungan yang bisa kamu kendalikan bersama pasangan untuk mencapai tujuan bersama.</p>
            <p>Langkah pertama yang dapat kamu lakukan adalah komunikasikan dengan pasangan. Katakan apa yang kamu inginkan dan dengarkan pendapatnya tentang apa yang dia inginkan. Bagian mana saja yang ingin disentuh atau posisi apa yang disukai. </p>
            <h3><strong>2. Eksperimen foreplay</strong></h3>
            <p>Setiap orang memiliki titik sensitif tersendiri yang disukai untuk dieksplorasi oleh pasangan. Zona sensitif itu nggak semuanya berada di bawah pinggang. </p>
            <p>Ada beberapa orang yang terangsang ketika bagian belakang telinga mereka dibelai atau dicumbu. Ada juga yang lebih suka dirangsang pada bagian leher dengan kecupan-kecupan yang dibumbui gigitan kecil atau saat bagian cuping telinga dijilat oleh pasangannya. Serta berbagi daftar zona di beberapa titik tubuh.</p>
            <p>Lakukan eksperimen foreplay di tempat yang mungkin belum pernah dieksplorasi sebelumnya. Berikan sentuhan dan kecupan yang menggairahkan pada tubuh pasangan. Dijamin mereka akan langsung menganggap kamu hebat meski belum melakukan penetrasi.</p>
            <h3><strong>3. Perbaiki penampilan</strong></h3>
            <p>Meski merupakan kegiatan yang biasa dilakukan sehari-hari, tapi sikat gigi atau mandi sebelum berhubungan seksual bisa meningkatkan kepercayaan diri pria. </p>
            <p>Bersihkan tubuh, wajah, dan mulut agar tubuh lebih segar dan wangi sebelum berhubungan seksual. Pastikan semua rambut rapi, termasuk rambut di sekitar penis. Penampilan yang rapi dan wangi akan membuat wanita lebih tertarik dan merasa senang.</p>
            <h3><strong>4. Lakukan seks secara perlahan</strong></h3>
            <p>Jangan sampai rasa khawatir mengambil kendali aktifitas seksualmu. Lantaran merasa takut nggak bisa memberikan kepuasan, kamu pun menjadi terburu-buru dan akhirnya kegiatan seksual hanya berlangsung sebentar.</p>
            <p>Ketika kamu terlalu cepat, wanita justru akan merasa kurang puas karena biasanya wanita membutuhkan waktu untuk bisa mencapai orgasme.</p>
            <p>Awali dengan foreplay yang menggairahkan dan biarkan pasanganmu menikmati sentuhan-sentuhan lembutmu. Setelah itu kamu pun bisa melakukan penetrasi dan mencapai klimaks yang memuaskan bersama-sama dengan pasangan. </p>
            <h3><strong>5. Kegiatan di ranjang bukan hanya tentang sex</strong></h3>
            <p>Jangan jadikan kegiatan di ranjang hanya tetang hubungan seksual saja. Tapi, kamu bisa melakukan pillow talk sebelum tidur atau bahkan setelah berhubungan seksual. </p>
            <p>Kamu bisa saling berpelukan dengan pasangan setelah selesai berhubungan seksual dan mengucapkan terima kasih. Hal sepele seperti itu justru bisa membuat hubungan kamu dan pasangan semakin erat dan tentunya kamu semakin percaya diri.</p>
            <p>Meski demikian, hal yang harus kamu ubah adalah pola pikir. Hubungan seksual bukanlah sebuah kinerja yang hanya ditanggung oleh pria saja, tapi merupakan kerjasama yang baik antar pasangan. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Tips Merawat Wajah Pria Agar Awet Muda';
        $blog->category = 'Acne';
        $blog->date = '5 November 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tips-merawat-wajah-agar-awet-muda.jpg';
        $blog->url_name = 'tips-merawat-wajah-agar-awet-muda';
        $blog->subtitle = "Menjaga kulit wajah pria untuk tetap awet muda bukan hal yang sulit. Ada banyak cara yang sangat mudah untuk dilakukan. ";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Terlihat awet muda bukan hanya diinginkan oleh wanita saja, para pria pun pasti menginginkan penampilan yang tampak muda dan segar. </p>
                    <p>Tapi, memiliki kulit wajah yang awet muda nggak cukup hanya dengan cuci wajah sehari sekali. Ada hal lain yang harus dilakukan secara rutin untuk mendapatkan hasilnya. Jangan menganggap sulit cara untuk mendapatkan kulit wajah yang awet muda. Tips berikut membantu kamu mendapatkan wajah dan penampilan yang lebih muda.</p>
                </i>
            </div>

            <p>Kebanyakan pria cuek dengan penampilannya sehingga sering mengabaikan perawatan wajah. Nggak sedikit yang beranggapan kalau perawatan wajah cuma dilakukan oleh wanita. Padahal kenyataannya semua orang membutuhkan perawatan wajah, baik pria maupun wanita karena kulit wajah perlu dijaga agar tetap sehat dan awet muda saat usia tua.</p>
            <p>Sebetulnya merawat wajah nggak serumit yang dibayangkan oleh para pria. Banyak hal simple yang bisa dilakukan untuk merawat wajah tetap bersih dan segar. Bonusnya, jika pria melakukan perawatan wajah sejak dini, wajah akan terjaga dan tampak awet muda meski sudah berusia matang.</p>
            <h2><b>Karakteristik Kulit Pria</b></h2>
            <p>Pria mungkin menganggap kulit wajah tiap orang sama saja dan nggak ada perbedaan secara spesifik antara pria dan wanita. Namun, nyatanya kulit wajah pria memiliki karakteristik yang berbeda dengan wanita.</p>
            <p>Beberapa karakteristik kulit wajah pria di antaranya adalah :</p>
            <h3><strong>1. Kulit wajah pria lebih tebal dan berminyak</strong></h3>
            <p>Mengutip dari <i>facetofeet</i>, kulit wajah pria lebih tebal, berminyak, dan hangat karena pria memiliki lebih banyak pembuluh darah dibanding wanita.</p>
            <p>Kulit pria memiliki ketebalan 20% lebih tinggi dari kulit wanita. Hal itu terjadi karena kulit pria memiliki kadar kolagen yang lebih tinggi dari wanita. Makanya, wanita akan lebih gampang mengalami kerutan dan keriput dibandingkan pria.</p>
            <h3><strong>2. Rambut di wajah lebih banyak</strong></h3>
            <p>Ada sekitar lima juta rambut di seluruh tubuh pria. Rambut tersebut terbagi dua jenis, yaitu rambut vellus yang berkarakter tipis dan rambut terminal yang berkarakter kasar dan lebih tebal.</p>
            <p>Pada saat puber, hormon testosterone mengubah rambut vellus menjadi lebih kasar dan tebal. Rambut tersebut tumbuh di lengan, kaki, ketiak, kemaluan, dan dagu. Pria memiliki rambut di wajah lebih banyak dan tebal karena dipengaruhi oleh hormon testosteron. </p>
            <h3><strong>3. Kelembaban kulit lebih tinggi</strong></h3>
            <p>Seperti yang sudah disebutkan di awal bahwa kulit pria lebih hangat dibanding wanita karena pembuluh darah pria lebih banyak dibanding wanita. Hal itu juga membuat suhu tubuh pria meningkat sehingga keringat yang dihasilkan pun lebih banyak untuk menyeimbangkan suhu. Produksi keringat yang berlebihan membuat kulit, termasuk wajah menjadi lebih lembab dan nggak mudah kering. Berbeda dengan kulit wanita yang mudah kering. </p>
            <h3><strong>4. Pori-pori wajah pria lebih besar</strong></h3>
            <p>Dibandingkan wanita, pria memiliki pori-pori yang lebih besar dari wanita sehingga wajah pria akan lebih mudah berjerawat ketika kebersihan wajah nggak dijaga. </p>
            <h3><strong>5. Tesktur kulit wajah pria lebih kasar</strong></h3>
            <p>Kulit wajah pria mengandung stratum corneum, yaitu lapisan yang terbentuk dari keratin. Lapisan ini merupakan lapisan terluar dari lapisan kulit pertama atau epidermis. <i>Stratum corneum</i> berfungsi menyerap cairan dan melindungi lapisan kulit yang ebrada di bawahnya. Nah, ketebalan kulit wajah pria juga dipengaruhi oleh tebalnya lapisan <i>stratum corneum</i> ini.</p>
            <p>Setelah mengenali karakteristik wajah, pria bisa melakukan berbagai cara untuk selalu menjaga kesehatan wajah agar tetap segar dan awet muda.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/wah-ternyata-kulit-wajah-pria-beda-loh-dengan-wanita/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/kulit-wajah-pria-berminyak.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Acne</div>
                            <div class="title">Wah, Ternyata Kulit Wajah Pria Beda Loh dengan Wanita</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Sudah pakai produk perawatan wajah tapi masih sharing product dengan pasangan? Jangan salah, kulit wajahmu beda dengan kulit wajah wanita loh!', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Inilah Tips Mudah Merawat Wajah Pria Agar Awet Muda</b></h2>
            <p>Merawat wajah nggak sesulit yang dibayangkan pria. Ada cara yang mudah dilakukan untuk menjaga kulit tetap muda dan bebas masalah. Berikut beberapa tips untuk wajah muda dan sehat :</p>
            <h3><strong>1. Senyum</strong></h3>
            <p>Ya, senyum. Kamu nggak salah baca kok. Hal utama dan paling mudah untuk menjaga wajah tetap muda adalah dengan tersenyum. Senyum membuat kamu terlihat lebih segar dan bahagia.</p>
            <p>Jika kamu terlalu sering marah, tubuh akan menghasilkan hormon noradrenalin yang dapat mempercepat proses penuaan dan memperburu sistem imun tubuh sehingga kamu jadi mudah sakit. Itulah mengapa kamu disarankan untuk sering tersenyum. </p>
            <p>Saat kamu tersenyum, tubuh akan mengeluarkan neurotransmitter bernama endorphin yang memiliki efek menenangkan dan meningkatkan mood. Nah, endorphin ini kebalikan dengan hormon sebelumnya. Endorfin justru bisa memperlambat penuaan dan membantu mempercepat penyembuhan saat sakit.</p>
            <h3><strong>2. Cukupi waktu tidur</strong></h3>
            <p>Meski terdengar sepele tapi pola tidur sangat memengaruhi kondisi kulitmu. Saat tubuhmu kurang tidur, maka kulit wajah akan kelelahan dan timbul masalah.</p>
            <p>Umumnya orang dewasa membutuhkan waktu tidur sekitar 6 – 8 jam sehari. Jika kurang dari itu, kulit pada mata bagian bawah akan menghitam dan membuat kantung sehingga menyebabkan wajah menjadi kusam dan lebih tua. </p>
            <h3><strong>3. Rutin bersihkan wajah dan gunakan masker</strong></h3>
            <p>Cuci wajah secara teratur 2x sehari, sebelum dan setelah beraktifitas untuk menjaga wajah senantiasa bersih dan bebas dari kotoran dan minyak. Pilih sabun pencuci wajah yang sesuai dengan jenis kulitmu.</p>
            <p>Selain itu, gunakan masker wajah, baik bahan alami ataupun sheet mask, satu atau dua kali seminggu untuk menjaga kelembaban wajah. Pria nggak salah kok pakai masker demi menjaga kesehatan dan kelembaban kulit. </p>
            <h3><strong>4. Ubah penampilan</strong></h3>
            <p>Penampilan juga bisa berpengaruh terhadap wajahmu. Ubah penampilan mulai dari gaya rambut. Pilih potongan rambut yang segar dan rapi serta mencerminkan karakter kamu. </p>
            <p>Berikan perawatan lebih pada rambut di wajah, seperti jenggot, kumis, dan bulu hidung. Rapikan rambut di wajah secara rutin dan pastikan nggak mencuat ke mana-mana dan memberikan kesan berantakan dan lebih tua.</p>
            <p>Setelah itu, perhatikan gaya berpakaian kamu, apakah sudah cukup mendukung tujuanmu untuk terlihat lebih muda? Sesuaikan juga dengan usia dan kepribadianmu.</p>
            <h3><strong>5. Pakai pelembab setiap hari</strong></h3>
            <p>Hal ini sangat penting untuk menjaga dan merawat kulit. Bagi kamu yang memiliki kulit normal, bisa memilih krim untuk menjaga elastisitas kulit. Sedangkan kamu yang memiliki wajah berminyak, dapat menggunakan pelembab yang mampu mengurangi kadar minyak.</p>
            <p>Nah, bagi kamu yang mengalami masalah jerawat, gunakan rangkaian <a href="' . base_url() . 'jerawat/" style="text-decoration: underline;"><i>Essential Acne Kit</i></a> yang terdiri dari Day Cream dan Night Cream. Day Cream mengandung bahan aktif yang mampu mengatasi jerawat. Sedangkan Night Cream selain untuk mengatasi jerawat, juga dapat mencerahkan wajah dan menghilangkan bekas jerawat. Tak hanya itu, Essential Acne Kit juga disesuaikan dengan kondisi kulitmu sehingga perawatan wajah berjerawat kamu lebih maksimal dan hasilnya sesuai yang diinginkan.</p>
            <p>Selain semua hal di atas, kamu juga harus melakukan olahraga secara rutin serta mengonsumsi buah dan sayur yang kaya akan nutrisi untuk menunjang kesehatan sel-sel tubuh untuk tetap sehat dan muda. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Kenapa Kebotakan Seringnya Dimulai dari Atas Kepala?';
        $blog->category = 'Hair Loss';
        $blog->date = '3 November 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/kebotakan-dimulai-dari-atas-kepala.jpg';
        $blog->url_name = 'kebotakan-dimulai-dari-atas-kepala';
        $blog->subtitle = "Kebotakan pada pria umumnya memiliki pola, salah satunya adalah kebotakan dengan pola M. Kenapa ya kebotakan seringnya dimulai dari bagian atas kepala?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Kebotakan berpola atau male pattern baldness merupakan kondisi penipisan rambut yang berujung pada kebotakan yang membentuk pola tersendiri. Awalnya rambut mengalami penipisan pada bagian mahkota atau puncak kepala dan sekitaran pelipis yang kemudian disusul dengan mundurnya garis rambut sehingga membentuk pola huruf M.</p>
                    <p>Kira-kira kenapa ya kebotakan berpola pda pria seringnya dimulai dari kepala bagian atas sebelum menyerang bagian lainnya?</p>
                </i>
            </div>

            <p>Rambut rontok bisa terjadi pada siapa saja dengan berbagai alasan. Pada pria kerontokan rambut terjadi karena tiga faktor, yaitu genetik, hormon, dan usia. Biasanya semakin bertambah usia seorang pria maka akan mengalami penipisan rambut. Namun, kini pria di bawah usia 40 tahun juga sudah banyak yang mengalami masalah rambut rontok, khususnya penipisan rambut yang berujung pada kebotakan. </p>
            <p>Berdasarkan data dari <i>American Hair Loss Association</i>, 95% pria mengalami kebotakan disebabkan oleh genetik, yaitu <i>androgenetic alopecia</i>. Selain genetik, kerontokan juga bisa disebabkan oleh gaya hidup nggak sehat, bahkan kerontokan rambut yang terjadi secara tiba-tiba bisa mengindikasikan gangguan kesehatan pada tubuh.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/rambut-rontok-genetik/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/rambut-rontok-genetik.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Hair Loss</div>
                            <div class="title">Androgenetic Alopecia : Rambut Rontok Karena Genetik</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Androgenetic alopecia terjadi karena produksi hormon DHT pada pria yang berlebihan. Androgentic alopecia merupakan gejala kerontokan rambut akibat faktor genetik.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <p>Sadar atau nggak, kebotakan berpola pada pria biasanya dimulai dari atas kepala yang ditandai dengan penipisan rambut pada mahkota atau puncak kepala. Berlanjut dengan kemunduran garis rambut bagian depan yang kemudian membentuk pola huruf “M”. </p>
            <p>Namun, pernahkah kamu bertanya-tanya kenapa kebotakan berpola seringnya dimulai dari atas kepala?</p>
            <h2><b>Kenapa Kebotakan Seringnya Dimulai dari Atas Kepala?</b></h2>
            <p>Dari beberapa penyebab, kebotakan berpola pada pria paling besar dipengaruhi oleh faktor genetik. Pria yang mengalami kebotakan dari atas kepala umumnya memiliki sensitivitas secara genetik pada salah satu hormon yang dihasilkan oleh testosteron, yaitu dihidrotestosteron (DHT).</p>
            <p>Hormon DHT inilah yang menjadi penyebab terjadinya kerontokan. Hormon ini juga yang menyebabkan kebotakan jika produksinya berlebihan. </p>
            <p>Seiring berjalannya waktu, folikel rambut yang sensitif terhadap hormon DHT akan menyusut dan mengecil. Nah, kecilnya folikel rambut ini yang membuat siklus rambut menjadi lebih pendek sehingga rambut nggak bisa bertumbuh kembali karena terhambat oleh hormon DHT. </p>
            <p>
                Pada kebotakan berpola, kerontokan rambut akan berada pada dua bagian, yaitu :<br>
                1. Penipisan rambut pada bagian puncak kepala dan sekitar pelipis<br>
                2. Garis rambut pada dahi akan mundur, bahkan hingga ke belakang kepala
            </p>
            <p>Kerontokan dan penipisan rambut akan semakin parah jika nggak dihentikan dan dilakukan perawatan untuk mengatasinya.</p>
            <h3><strong>Siklus Rambut </strong></h3>
            <p>Tubuh memiliki siklus yang secara alamiah akan terjadi, begitu pula dengan rambut. Rambut memiliki siklus pertumbuhan yang akan terus berulang. Siklus rambut terbagi menjadi tiga, yaitu :</p>
            <h3><strong>Anagen</strong></h3>
            <p>Tahap awal rambut tumbuh aktif sebagai sel-sel yang dapat menghasilkan materi baru. Rambut baru akan tumbuh dengan pori-pori bukaan yang disebut dengan folikel. Rambut yang sudah mencapai siklus akhir akan didorong keluar dari folikel dan menyebabkan rambut menjadi rontok. Sekitar 90% dari rambut sehat biasanya merupakan rambut yang sedang berada di fase anagen. </p>
            <h3><strong>Catagen</strong></h3>
            <p>Sekitar 3% dari keseluruhan rambut berada dalam fase transisi yang disebut dengan catagen. Fase ini berlangsung singkat, yaitu sekitar 2 – 3 minggu. Pada fase ini pula, rambut berhenti tumbuh dan akar rambut akan menyusut dan di akhir fase ini, rambut mulai membentuk tonjolan pada titik-titik kulit kepala. </p>
            <h3><strong>Telogen</strong></h3>
            <p>Sekitar 6 – 8% rambut kamu berada dalam fase terakhir siklus hidup yg disebut dengan telogen. Fase ini berlangsung selama 100 hari dan rambut menghentikan seluruh aktivitas pertumbuhan atau transisi kemudian menjadi tidak aktif. Pada saat siklus rambut memasuki fase anagen, maka rambut yang berada pada fase telogen akan terdorong dengan sendirinya dan lepas dari kulit kepala. </p>
            <h2><b>Pada Usia Berapa Pria Akan Mengalami Kebotakan?</b></h2>
            <p>Melansir dari laman kompas.com, ada tiga fase usia pria mengalami kebotakan, yaitu :</p>
            <h3>1. Sebelum usia 21 tahun</h3>
            <p>Sebanyak 25% pria memiliki pola kebotakan yang disebabkan oleh faktor genetik atau keturunan. Pada usia ini, pria akan mengalami rambut rontok.</p>
            <h3>2. Usia 35 tahun</h3>
            <p>Pada usia ini, sebanyak 66% pria mengalami rambut rontok yang mengarah pada penipisan rambut.</p>
            <h3>3. Usia 50 tahun  </h3>
            <p>Sekitar 85% pria memiliki rambut yang lebih tipis, bahkan sudah mengalami kebotakan. </p>
            <h2><b>Tips untuk Menyelamatkan Kepala dari Kebotakan?</b></h2>
            <p>Nggak perlu terlalu khawatir jika rambut mengalami masalah. Kamu bisa melakukan beberapa hal berikut untuk menyelamatkan kepala dari kebotakan.</p>
            <h3><strong>1. Pilih shampoo sesuai kondisi rambut</strong></h3>
            <p>Membersihkan rambut merupakan perkara mudah yang seringnya justru disepelekan padahal memiliki pengaruh yang cukup besar untuk kondisi rambut selanjutnya.</p>
            <p>Beberapa shampoo bisa mengatasi rontok tapi membuat rambut menjadi kering. Pilih produk shampoo yang bukan hanya mengatasi rontok tapi juga mampu membuatnya tetap lembab dan nggak bikin kering. </p>
            <h3><strong>2. Lakukan perawatan rambut</strong></h3>
            <p>Jika mengalami masalah rambut rontok, lakukan perawatan yang tepat dan menyeluruh untuk mendapatkan hasil yang maksimal.</p>
            <p><a href="' . base_url() . 'rambut-rontok/complete-kit/" style="text-decoration: underline;"><i>Hair Loss Kit</i></a> merupakan rangkaian perawatan rambut yang bekerja efektif mengatasi rontok dan mencegah kebotakan. Rangkaian perawatan terdiri dari Anti DHT Shampoo yang mengandung Ketoconazole yang mampu mengurangi kadar hormon DHT penyebab rambut rontok. Perawatan ditambah dengan Hair Tonic yang mengandung Minoxidil 5% untuk merangsang pertumbuhan rambut baru dan melebatkan rambut.<br>Selain itu, kamu juga bisa dianjurkan untuk mengonsumsi Finasteride yang berfungsi untuk menghambat hormon DHT sehingga dapat mencegah kebotakan.</p>
            <h3><strong>3. Gaya hidup sehat</strong></h3>
            <p>Pendukung dari keseluruhan perawatan rambut adalah gaya hidup sehat. Jangan lewatkan buah dan sayur pada menu harian kamu untuk memenuhi kebutuhan nutrisi yang dibutuhkan rambut karena salah satu penyebab rambut rontok juga karena kamu kekurangan nutrisi. </p>
            <p>Lakukan olahraga ringan untuk melancarkan peredaran darah, bisa dengan jalan kaki atau lari pagi. Kamu juga bisa melakukan olahraga di rumah. Seimbangkan dengan mengelola stres. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Tingkatkan Performa Seksual Dengan Senam Kegel';
        $blog->category = 'Sex';
        $blog->date = '30 October 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/senam-kegel-tingkatkan-performa-seksual.jpg';
        $blog->url_name = 'senam-kegel-tingkatkan-performa-seksual';
        $blog->subtitle = "Senam kegel melatih kekuatan otot PC (pubococcygeus) atau dikenal dengan otot dasar panggul yang berfungsi untuk mencegah disfungsi ereksi dan mengatasi ejakulasi dini. ";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Senam kegel melatih kekuatan otot PC (pubococcygeus) atau dikenal dengan otot dasar panggul Senam kegel dapat memperkuat otot PC yang mengelilingi daerah alat vital dan memastikan darah mengalir ke alat vital sehingga dapat membantu memperlambat orgasme. Senam kegel terdiri dari 2 teknik yaitu slow kegel dan fast kegel. Kamu cukup kontraksikan dan tahan otot pc tersebut selama 5 hingga 20 detik, lalu lepaskan. Ulangi gerakan sederhana ini secara berturut-turut dengan jumlah latihan sebanyak 3-4 kali sehari. Setelah cukup mahir dengan latihan slow kegel, maka tantang diri untuk melakukan latihan fast kegel dengan lebih cepat. Selain itu, terdapat banyak manfaat dari latihan senam kegel yang salah satunya untuk pencegahan disfungsi ereksi dan mengatasi ejakulasi dini.</p>
                </i>
            </div>

            <p>Selama ini senam kegel sering diidentikan dengan jenis olahraga yang dilakukan oleh wanita. Memang benar bahwa pada awalnya senam kegel dikembangkan untuk membantu wanita untuk mengatasi masalah kontrol kandung kemih setelah melahirkan. Namun, senam kegel juga dapat dilakukan oleh pria untuk mendapatkan manfaat yang baik bagi tubuhnya, terutama untuk meningkatkan performa seksualnya. </p>
            <h2><b>Apa itu senam kegel?</b></h2>
            <p>Senam kegel adalah senam yang melatih kekuatan otot PC <i>(pubococcygeus)</i> atau dikenal dengan otot dasar panggul. Berbeda dengan kebanyakan senam, kegel tidak membutuhkan gerakan yang masif. Menjaga kekuatan otot panggul dengan senam kegel adalah hal penting karena bagian tubuh tersebut memiliki keterkaitan dengan kandung kemih yang menyimpan urin. Otot panggul yang sehat dapat mengoptimalkan kinerja uretra, penghubung kandung kemih dengan saluran kencing. </p>
            <p>Selain melatih otot PC, latihan ini bisa memperkuat otot yang mengelilingi daerah alat vital sehingga ejakulasi dini bisa diatasi. Ketika pria ereksi, otot PC yang memastikan darah mengalir ke alat vital dan memperkuat otot tersebut serta membantu memperlambat orgasme. Beberapa penelitian ilmiah menemukan bahwa senam kegel efektif untuk mencegah disfungsi ereksi dan membantu pria bertahan lebih lama dalam berhubungan dengan pasangan. Menurut studi dari <i>British Journal of General Practice</i>, setidaknya terdapat 75 persen pria telah berhasil mengatasi <u>ejakulasi dini</u> dengan senam kegel. </p>
            <h2><b>Apa itu senam kegel?</b></h2>
            <p>Cara melakukan senam kegel</p>
            <p>Untuk melakukan senam kegel, kamu perlu tahu dimana letak posisi dari otot PC atau otot dasar panggul tersebut. Cara untuk mengetahui posisi otot PC tersebut yaitu pada saat buang air kecil, letakkan dua jari pada di belakang testikel dan hentikan proses buang air kecil kemudian lanjutkan lagi. Pada waktu menahan proses buang air kecil, dua jari kamu pasti bisa merasakan kontraksi otot PC yang dimaksud. Terdapat 2 jenis senam kegel yaitu <i>slow kegel</i> dan <i>fast kegel</i>. Untuk melakukan kedua jenis senam kegel ini, kenakan pakaian yang longgar. Kamu dapat duduk, berdiri, atau berbaring tergantung pada preferensi dan kenyamanan. </p>
            <p>Berikut teknik slow kegel dan fast kegel yang perlu kamu ketahui. </p>
            <p>1. Teknik <i>slow kegel</i></p>
            <p>Senam kegel dapat dimulai dengan simple squeeze. Kamu cukup kontraksikan dan tahan otot pc tersebut selama 5 hingga 20 detik, lalu lepaskan. Ulangi gerakan sederhana ini secara berturut-turut dengan jumlah latihan sebanyak 3-4 kali sehari. Seiring waktu, latihan sederhana ini dapat membantu memperkuat otot PC. Perlahan-lahan, kamu akan mendapatkan kemampuan untuk mengendalikan kandung kemih dan fungsi seksual.</p>
            <p>1. Teknik <i>fast kegel</i></p>
            <p>Setelah cukup mahir dengan latihan <i>slow kegel</i>, maka tantang diri untuk melakukan latihan senam kegel dengan lebih cepat dan lebih lama. Kamu hanya perlu melenturkan dan mengistirahatkan otot tersebut dengan tempo yang lebih cepat sehingga kesannya seperti `berdenyut`. Lakukan kontraksi otot PC sebanyak 10 hingga 20 kali setiap harinya dengan meningkatkan jumlah waktu untuk setiap kontraksi. Semakin sering melakukan kegel, semakin cepat kamu akan melihat hasilnya pada peningkatan performa seksual kamu.</p>
            <h2><b>Manfaat senam kegel bagi pria</b></h2>
            <p>1. Melatih otot PC untuk menahan rasa buang air kecil</p>
            <p>Senam kegel dapat meningkatkan sensitivitas otot PC untuk menahan urin. Apa maksudnya? Seringkali, pria terjebak pada situasi yang mengharuskannya untuk menahan buang air kecil. Nah, di saat-saat seperti ini, otot PC atau otot panggul bagian bawah sangat dibutuhkan untuk menahan urin agar tidak keluar. Tapi, jangan terlalu sering melakukannya karena sering menahan kencing juga bisa memunculkan penyakit lain.</p>
            <p>2. Mengatasi buang air kecil yang tidak tuntas</p>
            <p>Manfaat dari senam kegel berikutnya adalah mengatasi buang air kecil yang tidak tuntas. Kondisi ini disebabkan oleh melemahnya otot PC untuk berkontraksi. Akibatnya, dorongan untuk mengeluarkan urin juga berkurang. Kondisi ini biasanya menjadi tanda dari beberapa penyakit, salah satunya adalah prostatitis atau radang prostat.</p>
            <p>3. Mengatasi ejakulasi dini</p>
            <p>Menurut penelitian <i>British Journal of General Practice</i>, senam kegel dapat membantu pria dalam mengatasi ejakulasi dini. Ejakulasi dini adalah kondisi saat pria mengalami orgasme yang cepat saat berhubungan seks. Seperti yang telah dijelaskan, teknik utama dari senam kegel adalah mengencangkan otot PC untuk menciptakan kontraksi. Saat kontraksi ini terjadi, otot bisa menahan keluarnya sperma di awal-awal waktu hubungan seks/</p>
            <p>4. Mencegah disfungsi ereksi</p>
            <p>Sebuah publikasi di Perpustakaan Kedokteran Nasional Amerika Serikat mengatakan bahwa senam kegel yang dilakukan secara rutin selama beberapa minggu dapat menurunkan risiko disfungsi ereksi. Salah satu pemicu disfungsi ereksi adalah terdapat gangguan pada sirkulasi darah. Alat vital yang tidak mendapatkan cukup aliran darah akan sulit ereksi. Oleh karena itu, otot PC yang sehat dan sudah dilatih dengan senam kegel bisa menjaga dan melancarkan sirkulasi tersebut.</p>
            <p>Selain melakukan senam kegel, kamu juga dapat melakukan konsultasi online dengan menjawab beberapa pertanyaan dari dokter ahli untuk mengatasi gangguan disfungsi ereksi dan juga ejakulasi dini. Konsumsi <a href="' . base_url() . 'ed/" style="text-decoration: underline;">sildenafil</a> untuk atasi disfungsi ereksi atau s<a href="' . base_url() . 'ejakulasi-dini/" style="text-decoration: underline;">Stamina Cream</a> yang bekerja secara efektif untuk mengurangi sensitivitas pada alat vital sehingga mampu membuat kamu bertahan dengan durasi yang optimal pada saat melakukan aktivitas seksual dengan pasangan.</p>
            <p>Pria yang kuat bukan mereka yang selalu menang. Tapi pria yang mampu menjawab tantangan yang ada dengan mencari solusi untuk mengatasi masalahnya. Lakukan hal terbaik, komunikasikan secara transparan dengan pasangan dan berani ambil peluang demi kualitas hidup dan performa yang lebih baik. </p>

        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Mitos dan Fakta Mengejutkan Tentang Disfungsi Ereksi';
        $blog->category = 'Sex';
        $blog->date = '27 October 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/mitos-dan-fakta-disfungsi-ereksi.jpg';
        $blog->url_name = 'mitos-dan-fakta-disfungsi-ereksi';
        $blog->subtitle = "Banyak mitos yang beredar di masyarakat, termasuk mitos tentang disfungsi ereksi yang sering dipertanyakan kebenarannya. Cek faktanya!";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Disfungsi ereksi merupakan kondisi di mana pria nggak mampu untuk mendapatkan atau mempertahankan ereksi saat melakukan aktivitas seksual. Hal itu tentu menjadi momok yang menakutkan bagi pria. </p>
                    <p>Terlebih banyak mitos yang beredar di masyarakat tentang disfungsi ereksi yang kebenarannya belum tentu bisa dipertanggungjawabkan. Berikut beberapa fakta dan mitos mengejutkan seputar disfungsi ereksi yang nggak banyak orang menyadarinya.</p>
                </i>
            </div>

            <p>Disfungsi ereksi merupakan masalah kesehatan pria yang terjadi karena penis nggak bisa mendapatkan atau mempertahankan ereksinya. Gejala dari disfungsi ereksi adalah menurunnya gairah seksual, kesulitan mencapai ereksi, dan sulit untuk mempertahankan ereksi.</p>
            <p>Disfungsi ereksi juga merupakan hal yang sangat menakutkan bagi pria karena membuat pria nggak bisa mencapai kepuasan seksual. Begitu pula dengan pasangannya yang nggak bisa merasakan kepuasan. Hal itu tentu menjadi pemicu masalah dalam sebuah hubungan.</p>
            <h2><b>Mitos dan Fakta Disfungsi Ereksi</b></h2>
            <p>Banyak mitos yang beredar di tengah masyarakat seputar disfungsi ereksi sehingga membuat para pria bertanya-tanya mengenai kebenaran dari mitos tersebut. Nggak sedikit juga pria yang nggak mengerti kenapa disfungsi ereksi bisa terjadi padanya.</p>
            <p>Belum lagi, banyak mitos yang beredar bahwa disfungsi ereksi hanya dapat terjadi pada mereka yang berusia lanjut sehingga pria yang berusia muda dan mengalami gangguan kesehatan seksual menjadi segan untuk berkonsultasi dengan dokter. </p>
            <p>Berikut beberapa mitos yang muncul tentang disfungsi ereksi dan fakta yang mengungkap kebenarannya.</p>
            <h3><strong>1. Mitos : Disfungsi ereksi nggak bisa terjadi pada pria usia muda</strong></h3>
            <p><strong>Fakta: </strong></p>
            <p>Meski disfungsi ereksi biasanya terjadi pada pria berusia 75 tahun ke atas, tapi bukan berarti pria dengan usia lebih muda nggak akan terkena disfungsi ereksi. Melansir dari <i>YesDok</i>, disfungsi ereksi bisa terjadi pada pria usia 20 – 29 tahun sebanyak 8% dan pria dengan usia 30 – 39 tahun sebanyak 11%.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/gaya-hidup-sebabkan-disfungsi-ereksi/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/gaya-hidup-sebabkan-disfungsi-ereksi.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">Waspadai Gaya Hidup Bisa Sebabkan Disfungsi Ereksi di Masa Muda</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Disfungsi ereksi sering dianggap hanya menyerang pria yang sudah lanjut usia. Nyatanya, sudah banyak pria di bawah usia 40 tahun yang mengalami disfungsi ereksi. Ini penyebabnya.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h3><strong>2. Mitos : Penis bisa patah karena posisi <i>woman on top</i></strong></h3>
            <p><strong>Fakta: </strong></p>
            <p>Betul. Penis bisa patah. Namun, bukan patah yang diartikan seperti tulang yang patah. Patah di sini yang dimaksud adalah robeknya pembuluh <i>tunica albuginea</i> yang menghasilkan ereksi yang kuat. Robeknya jaringan tersebut menimbulkan pembengkakan dan rasa sakit. Menurut <i>UK National Health Service</i>, sepertiga dari kasus patah tulang penis dikaitkan dengan hubungan seksual di mana posisi berhubungannya adalah pasangannya berada di atas. Pada posisi ini wanita bergerak terlalu keras dan berat badan wanita memberikan beban pada penis sehingga penis bisa patah.</p>
            <h3><strong>3. Mitos : Nggak bisa ereksi bukan selalu tanda disfungsi ereksi</strong></h3>
            <p><strong>Fakta: </strong></p>
            <p>Banyak hal yang menyebabkan seseorang kesulitan mengalami ereksi. Bisa terjadi karena pria sedang mengalami stres atau kelelahan sehingga pria nggak bisa mendapatkan ereksi. Sementara itu, disfungsi ereksi adalah kondisi ketidakmampuan yang persisten untuk mendapatkan atau mempertahankan ereksi.</p>
            <h3><strong>4. Disfungsi ereksi bisa menjadi tanda masalah kesehatan yang serius</strong></h3>
            <p><strong>Fakta: </strong></p>
            <p>Masalah kesehatan seksual bisa menjadi salah satu tanda bahwa kesehatan tubuh seseorang juga sedang dalam masalah. Menukil dari Healthline, data dari <i>Mayo Clinic</i> menyebutkan bahwa disfungsi ereksi bisa terjadi karena adanya penyakit lain dai tubuh, seperti penyakit jantung, diabetes, Parkinson, multiple sclerosis, kolesterol tinggi, dan lain sebagainya. </p>
            <h3><strong>5. Disfungsi ereksi bisa disembuhkan sendiri dengan pengobatan herbal</strong></h3>
            <p><strong>Fakta: </strong></p>
            <p>Ketika mengalami gengguan kesehatan seksual, hal pertama yang perlu dilakukan adalah konsultasi dengan dokter ahli. Saat kamu ngeonsumsi pengobatan tanpa resep dokter, kamu nggak akan mengetahui apa kandungan, dosis tepat, dan efek sampingnya bagi tubuhmu. Kamu harus melakukan konsultasi ke dokter terlebih dahulu untuk mendapatkan perawatan. Selain itu juga untuk mendeteksi apakah kamu memiliki gangguan kesehatan lainnya.</p>
            <h2><b>Mengatasi Disfungsi Ereksi</b></h2>
            <p>Ada mitos yang menyebutkan bahwa sekali pria mengalami disfungsi ereksi maka selamanya ia akan mengalami hal tersebut dan nggak bisa disembuhkan. Nyatanya hal itu salah. Disfungsi ereksi dapat disembuhkan dan pastinya seseorang bisa sembuh sepenuhnya dari gangguan kesehatan tersebut. </p>
            <p>Langkah pertama yang bisa dilakukan untuk mengatasi disfungsi ereksi adalah melakukan konsultasi dengan dokter ahli. Selanjutnya kamu akan mendapatkan rekomendasi pengobatan yang tepat. </p>
            <p>Kamu juga disarankan untuk mengubah gaya hidup menjadi lebih sehat, seperti menjaga berat badan ideal, mengurangi konsumsi alkohol, dan menghentikan kebiasaan merokok. </p>
            <p>Jika kamu mengalami masalah disfungsi ereksi terkait kondisi psikologis seperti stres atau gangguan kecemasan, maka kamu dianjurkan untuk melakukan konseling dengan terapis professional. Perubahan hidup atau stres memang dapat memicu pria mengalami disfungsi ereksi. Disfungsi ereksi juga dapat membuat pria kehilangan kepercayaan dirinya sehingga hal tersebut justru dapat memperparah kondisi kesehatan seksual pria.</p>
            <p>Pengobatan yang akan diberikan dokter biasanya berupa <a href="' . base_url() . 'disfungsi-ereksi/" style="text-decoration: underline;">sildenafil</a> yang bisa dikonsumsi maksimal satu jam sebelum melakukan hubungan seksual. Anjuran mengonsumsi pil tersebut hanya sekali sehari saja. dari WebMD, pil ini bekerja pada 80% pria yang meminumnya.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Androgenetic Alopecia : Rambut Rontok Karena Genetik';
        $blog->category = 'Hair Loss';
        $blog->date = '23 October 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/rambut-rontok-genetik.jpg';
        $blog->url_name = 'rambut-rontok-genetik';
        $blog->subtitle = "Androgenetic alopecia terjadi karena produksi hormon DHT pada pria yang berlebihan. Androgentic alopecia merupakan gejala kerontokan rambut akibat faktor genetik.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Rambut rontok bisa terjadi kapan saja dan dialami oleh siapa saja. Penyebabnya pun bermacam-macam, bisa dari faktor luar tubuh, seperti penataan rambut berlebihan atau gaya hidup yang nggak sehat, stres, hingga faktor keturunan.</p>
                    <p>Banyak orang yang masih ragu, apakah rambut rontok akibat genetic masih bisa diatasi atau nggak. Cara apa yang bisa digunakan untuk mengatasinya?</p>
                </i>
            </div>

            <p>Rambut rontok merupakan masalah yang banyak dialami oleh pria, mungkin termasuk kamu. Berbagai cara mungkin sudah kamu lakukan untuk mengatasinya, namun masih juga mengalami kerontokan. </p>
            <p>Agar perawatan rambut rontok lebih maksimal, kenali dulu apa penyebab kerontokan yang kamu alami karena masalah rambut rontok berbeda-beda penyebabnya. Setelah kamu memahami apa penyebab kerontokan, maka kamu bisa mengambil langkah yang tepat untuk bisa mengatasinya dnegan maksimal. </p>
            <h2><b>Jenis Rambut Rontok</b></h2>
            <p>Seperti yang sudah disebutkan sebelumnya bahwa penyebab rambut rontok sangat beragam. Rambut rontok bisa muncul dengan berbagai cara, tergantung penyebabnya. Ini bisa datang tiba-tiba atau bertahap dan hanya memengaruhi kulit kepala atau seluruh tubuhmu.</p>
            <p>Melansir dari <i>Mayo Clinic</i>, berikut beberapa jenis masalah yang mungkin muncul saat mengalami rambut rontok:</p>
            <h3><strong>1. Penipisan bertahap di atas kepala</strong></h3>
            <p>Ini adalah jenis kerontokan rambut yang paling umum, memengaruhi orang-orang seiring bertambahnya usia. Pria mulai mengalami kemunduran garis rambut pada bagian dahi.</p>
            <h3><strong>2. Kebotakan yang melingkar dan nggak merata</strong></h3>
            <p>Beberapa pria mengalami kebotakan dengan bentuk melingkar atau nggak merata di kulit kepala, jenggot, atau alis. Kulit kamu mungkin menjadi gatal atau nyeri sebelum rambut rontok.</p>
            <h3><strong>3. Rambut rontok secara tiba-tiba</strong></h3>
            <p>Ini adalah jenis kerontokan rambut yang paling umum, memengaruhi orang-orang seiring bertambahnya usia. Pria mulai mengalami kemunduran garis rambut pada bagian dahi.</p>
            <p>Stres dan kelelahan secara fisik bisa menyebabkan rambut rontok. Kerontokan akibat hal ini ditandai dengan kerontokan saat menyisir atau mencuci rambut. Jenis kerontokan ini menyebabkan rambut menipis secara keseluruhan tapi hanya bersifat sementara. </p>
            <h3><strong>4. Rambut rontok di seluruh tubuh</strong></h3>
            <p>Rambut pada tubuh manusia bukan hanya bagian kepala saja yang bisa rontok, tapi juga rambut di seluruh tubuh. Kerontokan ini bisa karena efek samping dari perawatan medis, seperti kemoterapi kanker. Rambut bisa tumbuh kembali.</p>
            <h3><strong>5. Kerak yang menyebar di kulit kepala</strong></h3>
            <p>Ini merupakan tanda kurap di kulit kepala. Biasanya akan disertai dengan rambut patah, kemerahan, bengkak, dan terkadang keluar cairan. </p>
            <p>Normalnya rambut akan rontok sebanyak 50 – 100 helai per hari dan akan tumbuh kembali pada saat yang sama. Namun, rambut rontok bisa terjadi saat rambut baru nggak tumbuh menggantikan rambut yang sudah mengalami fase rontok. </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/kenali-dht-hormon-penyebab-rambut-rontok-pada-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/hormon-dht-penyebab-rambut-rontok-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Hair Loss</div>
                            <div class="title">Kenali DHT, Hormon Penyebab Rambut Rontok Pada Pria</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Rambut rontok memang selalu berhasil jadi perkara yang cukup memusingkan. Terlebih jika sudah dimulai di bawah usia 30 tahun. Pasti makin pusing kan, guys?', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b><i>Alopecia Androgenetic</i>, Penyebab Rambut Rontok Karena Faktor Genetik</b></h2>
            <p>
                Penyebab rambut rontok sangat beragam, di antaranya yaitu :<br>
                1. Perubahan hormon<br>
                2. Stres<br>
                3. Obat-obatan<br>
                4. Terapi radiasi<br>
                5. Penataan rambut
            </p>
            <p>Selain kelima hal tersebut, ada faktor penyebab rambut rontok lain, yaitu faktor genetik atau <i>male androgenetic alopecia. Male androgenetic alopecia (MAA)</i> merupakan kerontokan rambut yang paling umum pada pria. Menurut <i>National Center for Biotechnology Information (NCBI)</i>, kerontokan jenis ini memengaruhi 30-50% pria pada usia 50 tahun. </p>
            <p>Sebenarnya androgenetic alopecia ini juga terjadi pada wanita. Pada pria hal ini disebut dengan <i>male pattern baldness</i>. Rambut rontok akan membentuk pola yang jelas, biasanya dimulai dari bagian atas pelipis. Kemudian seiring berjalannya waktu akan membentuk pola huruf ‘M’. </p>
            <p>Nah, penipisan rambut pada bagian mahkota atau dekat dengan bagian atas kepala biasanya akan berkembang menjadi kebotakan sebagian atau seluruhnya. </p>
            <p><i>Male androgenetic alopecia</i> terjadi dalam pola yang masih bisa untuk tumbuh kembali dan memengaruhi pelipis, verteks, dan kulit kepala bagian depan tengah. Meskipun <i>Male androgenetic alopecia</i> sering dianggap sebagai kondisi dermatologis yang nggak berbahaya, tapi kerontokan ini berdampak pada kepercayaan diri dan menjadi penyebab kecemasan pada pria. </p>
            <p><i>Male androgenetic alopecia</i> dianggap sebagai faktor risiko masalah pada arteri dan penyakit kardiovaskuler. Faktor genetik penyumbang <i>alopecia androgenetic</i> sebesar 80%. </p>
            <p><i>Male androgenetic alopecia</i> juga dikaitkan dengan kondisi medis lain, seperti penyakit jantung koroner dan pembesaran prostat. Selain itu juga dihubungkan dengan gangguan resistensi insulin, seperti diabetes dan obesitas, serta tekanan darah tinggi (hipertensi). </p>
            <h2><b>Finasteride Sebagai Terapi Rambut Rontok Akibat <i>Alopecia Androgenetic</i></b></h2>
            <p>Rambut rontok akibat <i>alopecia androgenetic</i> masih bisa diatasi. Kamu bisa memulainya dengan mengubah gaya hidup lebih sehat, makan asupan yang mengandung vitamin dan mineral yang dibutuhkan rambut, hingga melakukan olahraga teratur.</p>
            <p>Kamu bisa menemui dokter yang ahli di bidangnya untuk mendapatkan perawatan yang tepat. Biasanya dokter akan menyarankan untuk melakukan terapi dengan <a href="' . base_url() . 'rambut-rontok/" style="text-decoration: underline;">finasteride</a>.</p>
            <p>Finasteride adalah komponen 4-azasteroid, merupakan kompetitif dan spesifik inhibitor dari enzim 5-α-reductase tipe II, enzim interselular yang mengubah testosteron menjadi DHT.</p>
            <p>Finasteride nggak punya afinitas pada reseptor androgen dan nggak memiliki efek androgenetik, anti-androgenetik, estrogenik, anti-estrogenik atau progestasional. </p>
            <p>Finasteride bekerja menghambat enzim <i>5-α-reductase</i> tipe II. Finasteride menurunkan konsentrasi DHT sampai 65% dalam 24 jam.</p>
            <p>DHT memiliki peranan penting sebagai penyebab terjadinya <i>androgenetic alopecia</i>. Maka dari itu, selain finasteride, kamu juga dianjurkan untuk menggunakan shampoo yang bekerja menghambat hormon DHT. Lengkapi perawatanmu dengan hair tonic yang mengandung minoxidil untu merangsang pertumbuhan rambut baru sehingga dapat mencegah terjadinya kebotakan. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Berapa Durasi Ejakulasi yang Dinilai Sebagai Ejakulasi Dini?';
        $blog->category = 'Sex';
        $blog->date = '22 October 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/durasi-ejakulasi-dini.jpg';
        $blog->url_name = 'durasi-ejakulasi-dini';
        $blog->subtitle = "Ejakulasi dini merupakan masalah seksual yang hampir dialami semua pria. Tapi, sebenarnya berapakah durasi yang ejakulasi yang dinilai sebagai ejakulasi dini?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Meski ejakulasi dini adalah masalah yang wajar dialami para pria, tapi bukan berarti hal itu dibiarkan saja. Ejakulasi dini bisa mengganggu kehidupan seksual seseorang karena merasa gagal dalam mendapatkan kepuasan seksual. Meski tiap pria memiliki durasi yang berbeda dalam ejakulasi. Tapi, ada durasi tertentu yang dianggap terlalu dini dibandingkan ejakulasi pada normalnya. </p>
                </i>
            </div>

            <p>Ejakulasi dini merupakan kondisi ketidakmampuan pria untuk mengontrol ejakulasi dan kesulitan untuk menunda ejakulasi. Ejakulasi dini terjadi ketika sperma keluar dalam waktu singkat sebelum atau sesaat setelah penetrasi. </p>
            <p>Melansir dari data NCBI Journal, ejakulasi dini adalah salah satu gangguan seksual pria yang paling umum dan diperkirakan terjadi pada 4% - 39% pria. Ejakulasi dini merupakan hal yang wajar terjadi pada pria. Namun, meski begitu ejakulasi dini tetap akan mengganggu kehidupan seksual pria dan pasangannya. </p>
            <h2><b>Tanda Pria Mengalami Ejakulasi Dini</b></h2>
            <p>Meski ejakulasi dinilai wajar terjadi pada pria, tapi masalah ejakulasi dini kadang masih membingungkan bagi pria itu sendiri. Masih sering menebak apakah ia benar mengalami ejakulasi dini dan faktor apakah yang menyebabkan ia mengalami ejakulasi dini.</p>
            <p>Kamu harus menemui praktisi kesehatan yang ahli di bidangnya untuk memastikan hal tersebut. Namun, kamu masih bisa mengetahui tanda-tandanya. Berdasarkan Mayo Clinic, berikut tanda kamu mengalami ejakulasi dini :</p>
            <p>
                <ul>
                    <li>Selalu atau hampir selalu ejakulasi dalam satu menit setelah penetrasi</li>
                    <li>Tidak dapat menunda ejakulasi selama hubungan intim sepanjang waktu atau hampir sepanjang waktu</li>
                    <li>Merasa tertekan dan frustrasi, serta cenderung menghindari keintiman seksual sebagai hasilnya</li>
                </ul>
            </p>
            <p>Faktor psikologis dan biologis juga dapat berperan dalam ejakulasi dini. Meski banyak pria merasa malu membicarakannya, ejakulasi dini adalah kondisi yang umum dan bisa diobati. Pengobatan, konseling, dan teknik seksual yang menunda ejakulasi atau kombinasi dari semuanya dapat membantu meningkatkan kehidupan seks kamu dan pasangan.</p>
            <h2><b>Tipe Ejakulasi Dini</b></h2>
            <p>Menukil dari nhs.uk, ejakulasi dini terbagi menjadi dua tipe, yaitu :</p>
            <h3><strong>1. Ejakulasi dini primer</strong></h3>
            <p>Ejakulasi yang terjadi secara sering sehingga kamu selalu memiliki masalah dengan ejakulasi dini. Pada ejakulasi jenis ini kamu terbilang sering mengalami ejakulasi dini.</p>
            <p>Penyebab ejakulasi dini primer biasanya dari faktor psikologis, seperti pengalaman seksual traumatis pada usia dini.</p>
            <h3><strong>2. Ejakulasi dini sekunder</strong></h3>
            <p>Ejakulasi yang terjadi baru-baru ini, kamu belum lama mengalami ejakulasi dini. Ejakulasi dini sekunder dapat disebabkan oleh faktor psikologis dan fisik. Penyebab fisik bisa termasuk terlalu banyak minum alkohol dan radang kelenjar prostat (prostatitis).</p>
            <p>Sedangkan mengutip dari health.detik.com, ada empat jenis ejakulasi dini yang dialami oleh pria. Berikut tipe ejakulasi dini yang didasarkan dari Between Us Clinic :</p>
            <h3><strong>1. Lifelong premature ejaculation</strong></h3>
            <p>Kondisi di mana ejakulasi dini terjadi pada pria selama hidupnya, bahkan sejak pengalaman seksual pertamanya. Ejakulasi jenis ini disebabkan oleh faktor genetik.</p>
            <h3><strong>2. Acquired premature ejaculation</strong></h3>
            <p>Pada kondisi ini, pria memiliki kehidupan seks yang normal, tapi ada saat di mana ia mengalami ejakulasi dini. Faktor penyebabnya bisa karena stres atau kecemasan yang berkaitan dengan pekerjaan, keuangan, bahkan hubungan intim itu sendiri. </p>
            <h3><strong>3. Subjective premature ejaculation</strong></h3>
            <p>Pria mengira ia mengalami ejakulasi dini sehingga ia akan mendatangi dokter untuk mencari kepastian. Namun, meski dokter sudah memberikan pernyataan bahwa ia nggak mengalami masalah waktu dalam ejakulasi tapi ia tetap merasa ada masalah dan berkeinginan untuk memiliki durasi yang lebih lama.</p>
            <h3><strong>4. Variable premature ejaculation</strong></h3>
            <p>Ejakulasi yang terjadi secara nggak teratur dan nggak konsisten, di mana pria mengalami ejakulasi standar. Ia akan mengalami ejakulasi sebelum waktunya dalam beberapa momen tertentu saat berhubungan. </p>
            <h2><b>Berapa Durasi Ejakulasi yang Dinilai Terlalu Cepat?</b></h2>
            <p>Ejakulasi dini merupakan kondisi di mana orgasme terjadi lebih cepat dan di luar keinginan, baik sebelum atau sesaat setelah penetrasi. Orgasme pada pria terjadi dengan keluarnya sperma saat berhubungan, bahkan saat masturbasi. </p>
            <p>Sebetulnya nggak ada patokan khusus terkait waktu finish seorang pria dalam berhubungan seksual. Tiap pria memiliki wkatu orgasme yang berbeda, tergantung kondisi pria tersebut dan situasi yang terjadi pada saat ia berhubungan seksual. </p>
            <p>Mengutip dari HealthGuide, sebuah penelitian meminta 500 pasangan untuk menekan stopwatch saat melakukan penetrasi. Durasi yang dilaporkan berkisar dari 33 detik hingga 44 menit. Tetapi rata-rata untuk seks vaginal adalah tiga sampai tujuh menit — tepatnya 5,4 menit. </p>
            <p>Waktu rata-rata yang dibutuhkan untuk melakukan ejakulasi secara normal berada di 4 – 5 menit. Sedangkan untuk waktu ejkaluasi bagi penderita ejakulasi dini berada pada waktu 30 – 60 detik atau kurang dari dua menit setelah penetrasi seksual. </p>
            <p>Selain itu, ejakulasi dini juga terjadi bahkan ketika baru mendapatkan rangsangan yang minim dan membuat pria merasa nggak bisa memuaskan pasangannya sehingga gairah seksual dapat menurun dalam waktu yang lama.  </p>
            <p>Ejakulasi dini masih bisa diatasi dengan terapi seksual, olahraga rutin, dan menerapkan gaya hidup sehat dengan menghindari minuman beralkohol, rokok, dan menjaga pola makan dengan nutrisi tepat.</p>
            <p>Kamu juga bisa berkonsultasi dengan dokter ahli untuk mendapatkan penanganan yang lebih baik. Selain itu, kamu juga bisa menggunakan <a href="' . base_url() . 'ejakulasi-dini/" style="text-decoration: underline;">Stamina Cream</a> yang bekerja mengatasi sensitivitas alat vital untuk menunda ejakulasi sehingga dapat berhubungan lebih lama. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Ternyata Kebiasaan Minum Alkohol Bisa Bikin Jerawatan';
        $blog->category = 'Acne';
        $blog->date = '21 October 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/minum-alkohol-bikin-jerawatan.jpg';
        $blog->url_name = 'minum-alkohol-bikin-jerawatan';
        $blog->subtitle = "Mengonsumsi alkohol bukan hanya berpengaruh pada organ tubuh saja, tapi juga kesehatan kulit. Bagaimana alkohol bisa membuat kulit berjerawat?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Jerawat bukan hanya dialami oleh mereka yang masih berada pada masa puber. Orang dewasa juga mengalami masalah jerawat. Pada orang dewasa, masalah jerawat bukan hanya disebabkan oleh hormon saja, tapi juga gaya hidup yang nggak sehat.</p>
                    <p>Salah satu gaya hidup nggak sehat yang bisa menyebabkan gangguan kesehatan adalah minuman beralkohol. Konsumsi minuman beralkohol secara berlebihan bisa menyebabkan gangguan kesehatan kulit dan menyebabkan jerawat.</p>
                </i>
            </div>

            <p>Masalah jerawat bisa terjadi pada siapa saja dan berbagai lapisan usia. Penyebab jerawat pun bermacam-macam, baik dari dalam maupun luar tubuh, bahkan gaya hidup nggak sehat pun turut menyumbang kemunculan jerawat. Tapi, tahukah kamu kalau minuman beralkohol juga bisa menyebabkan jerawat?</p>
            <h2><b>Ganggu Kesehatan Akibat Minuman Beralkohol</b></h2>
            <p>Mengonsumsi minuman beralkohol bisa memengaruhi gangguan kesehatan pada tubuh, seperti gangguan hormon dan sistem kekebalan tubuh. Bukan hanya itu, konsumsi alkohol berlebihan juga bisa memengaruhi mental seseorang.</p>
            <p>Melansir dari WebMD, batas minum alkohol untuk pria berbeda dengan wanita. Batas untuk pria mengonsumsi alkohol adalah 4 gelas per hari atau 14 gelas per minggu. Sedangkan untuk wanita, 3 gelas per hari atau 7 gelas per minggu.</p>
            <p>Batas asupan harian untuk bir dan wine juga berbeda. Batas asupan bir adalah 59,1471 ml, sedangkan untuk wine 147.868 ml.</p>
            <p>Jika mengonsumsi lebih dari itu, maka dokter akan menganggap seseorang adalah pecandu. Selain itu juga, jika mengonsumsi lebih dari itu maka tubuh akan lebih mudah untuk mendapatkan masalah kesehatan yang serius.</p>
            <p>Berikut beberapa gangguan kesehatan yang mungkin terjadi jika kamu mengonsumsi alkohol secara terus-menerus :</p>
            <h3><strong>1. Masalah pada lambung</strong></h3>
            <p>Minuman beralkohol jika dikonsumsi secara berlebihan bisa menimbulkan masalah pada lambung, seperti asam refluks, maag, tukak lambung, bahkan radang selaput perut. Hal itu terjadi karena pelepasan racun dari alkohol yang ditelan.</p>
            <p>Selain itu, zat beracun dari alkohol juga bisa memicu pendarahan internal yang parah karena terjadinya pembengkakan pembuluh darah di sekitar kerongkongan. Bersamaan dengan itu juga proses sekresi asam lambung ikut terganggu. </p>
            <h3><strong>2. Gangguan kardiovaskuler</strong></h3>
            <p>Gangguan kesehatan paling serius yang terjadi akibat minuman beralkohol adalah penyakit pada kardiovaskuler. Penyakit kardiovaskular meliputi stroke, serangan jantung, angina pectoris (nyeri dada akibat jantung koroner), dan lain sebagainya. </p>
            <p>Alkohol bisa meningkatkan tekanan pada aliran darah jadi lebih tinggi sehingga menyebabkan penyempitan arteri. Otot-otot jantung akan bermasalah dan meningkatkan risiko kardiomiopati, yaitu kelainan otot jantung yang membuat jantung bekerja lebih keras. Jika terus-terusan terjadi maka fungsi jantung akan menurun dan menyebabkan serangan jantung.</p>
            <h3><strong>3. Kerusakan Hati</strong></h3>
            <p>Alkohol mengandung racun, dan tugas hati adalah mengeluarkannya dari tubuh. Tubuh akan mengubah alkohol menjadi asetaldehida, yaitu zat beracun yang bersifat karsinogenik. Kinerja hati akan terganggu jika terlalu banyak mengonsumsi alkohol. </p>
            <p>Alkohol bisa menyebabkan sirosis dan penyakit hati berlemak alkoholik sehingga hati nggak bisa bekerja sebagaimana mestinya. Jika hal itu sudah terjadi pada hati, maka hati akan kesulitan untuk membuang racun dari tubuh sehingga racun akan menumpuk.</p>
            <p>Tak hanya itu, gangguan kesehatan tubuh akibat alkohol bisa berupa kerusakan pada otak, gangguan fungsi pankreas, anemia, gangguan tidur, hingga kanker. </p>
            <h2><b>Konsumsi Alkohol Menyebabkan Jerawat</b></h2>
            <p>Meski alkohol nggak punya hubungan langsung dengan jerawat, tapi alkohol punya pengaruh yang cukup besar bagi tubuh, apalagi jika dikonsumsi secara berlebihan. Bukan hanya berpengaruh pada bagian dalam tubuh saja, tetapi juga memengaruhi kondisi kesehatan kulit. </p>
            <p>Berikut beberapa kondisi kulit yang terjadi jika mengonsumsi alkohol melebihi batas :</p>
            <h3><strong>1. Kulit kering</strong></h3>
            <p>Alkohol membuat kulit menjadi kering dan dehidrasi. Kulit sehat adalah kulit yang terhidrasi sehingga kelembaban alaminya tetap terjaga. Mengonsumsi alkohol justru menyebabkan dehidrasi karena meningkatnya produksi urin. Hal itu menyebabkan kulit wajah juga menjadi kering dan dapat memicu timbulnya jerawat.</p>
            <h3><strong>2. Memicu peradangan kulit wajah</strong></h3>
            <p>Alkohol bisa mengganggu keseimbangan hormon sehingga kadar testosteron dan estrogen pada tubuh nggak stabil. Alkohol juga bisa meningkatkan kadar estradiol, salah satu bentuk hormon yang merangsang produksi kelenjar minyak.</p>
            <p>Nah, peningkatan produksi kelenjar minyak tersebut menyebabkan minyak berlebih pada wajah. Minyak tersebut bisa menyumbat pori-pori dan terjadi peradangan sehingga menyebabkan jerawat pada wajah. </p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/mengenal-sebum-penyebab-jerawat-pada-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/penyebab-jerawat-pria-1.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Acne</div>
                            <div class="title">Mengenal Sebum Penyebab Jerawat Pada Wajah Pria</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Wajah berminyak bikin kulit terlihat mengkilap dan jadi gampang jerawatan. Minyak pada wajah sebetulnya punya peran penting untuk menjaga kelembaban. Tapi, kalau produksinya berlebihan, justru menimbulkan masalah. Jadi sebetulnya minyak di wajah itu apa sih?', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h3><strong>3. Penuaan kulit</strong></h3>
            <p>Kelembaban kulit yang menurun menyebabkan kulit jadi mudah berkerut dan munculnya garis-garis halus. Kulit wajah menjadi tampak nggak sehat dan berkerut di beberapa bagian, terutama di smile line dan ujung mata. </p>
            <h3><strong>4. Jerawat</strong></h3>
            <p>Seperti yang sudah dijelaskan sebelumnya, minum alkohol bisa mengganggu keseimbangan hormon dan memicu timbulnya jerawat. Jerawat terjadi karena adanya peradangan pada kulit akibat penumpukan kotoran dan sebum pada pori-pori. Jerawat akan makin parah jika ditambah dengan stres dan pola makan yang nggak seimbang serta kurangnya nutrisi.</p>
            <h2><b>Cara Mengatasi Jerawat Akibat Alkohol</b></h2>
            <p>Cara utama yang bisa kamu lakukan adalah menghentikan kebiasaan mengonsumsi minuman beralkohol secara berlebihan. Jika kamu masih ingin mengonsumsi minuman beralkohol maka jangan melebihi batas yang sudah disebutkan sebelumnya. </p>
            <p>Lakukan olahraga secara teratur tiap pagi minimal 30 menit dengan berjalan kaki atau lari pagi di sekitar rumah sebelum beraktifitas. Imbangi juga dengan diet harian sehat yang penuh nutrisi dan gizi seimbang. </p>
            <p>Lengkapi perawatan dengan <a href="' . base_url() . 'jerawat/" style="text-decoration: underline;">Essential Acne Kit</a> untuk mengatasi jerawat dan menghilangkan bekas jerawat. Bonusnya, Essential Acne Kit juga bisa memperbaiki tekstur kulitmu dan menyamarkan kerutan pada wajah. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Ukuran Penis Rata-Rata yang Pria Harus Ketahui. Berapa Ukuranmu?';
        $blog->category = 'Sex';
        $blog->date = '15 October 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/ukuran-penis-ratarata-pria.jpg';
        $blog->url_name = 'ukuran-penis-ratarata-pria';
        $blog->subtitle = "Pernahkah terpikirkan tentang berapa tepatnya ukuran penismu? Apakah termasuk pada ukuran rata-rata? Semua hal tentang ukuran penis bisa kamu dapatkan di sini.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Beberapa pria mungkin mencemaskan tentang ukuran penis. Apakah ukurannya termasuk pada ukuran standar atau terlalu kecil. Selain itu, nggak sedikit juga pria yang kerap merasa kurang bisa memuaskan pasangannya karena terbentur ukuran yang menurutnya kecil itu.</p>
                    <p>Beberapa peneliti sebetulnya nggak punya ukuran konkrit mengenai ukuran penis standar. Tapi, hal itu nggak cukup bikin pria merasa aman dengan ukurannya dan masih terus bertanya-tanya mengenai ukuran standar. Namun, ada beberapa ukuran yang dianggap rata-rata dan tiap negara juga memiliki ukuran rata-rata tersendiri.</p>
                </i>
            </div>

            <p>Mungkin kamu pernah bertanya-tanya berapa ukuran penis rata-rata manusia di bumi ini? Atau bahkan kamu sendiri nggak betul-betul yakin berapa tepatnya ukuran penismu?</p>
            <p>Nggak sedikit pria yang mengalami kecemasan atas ukuran penisnya sendiri. Apakah cukup besar dan bisa memuaskan pasangannya? Belum lagi di beberapa situs dewasa dan iklan-iklan yang menawarkan stigma tentang besar dan panjangnya ukuran penis membuat pria semakin khawatir atas kejantanannya.</p>
            <h2><b>Sebuah Fakta Tentang Ukuran Penis</b></h2>
            <p>Mungkin kamu nggak tahu kalau ukuran penis bisa berubah seiring usia bertambah. Ukuran saat ereksi dan tidak ereksi memiliki ukuran yang nggak jauh beda. Meski sulit untuk menentukan ukuran rata-rata yang konkrit dan disetujui para ahli namun hal itu nggak bikin beberapa pria mengurangi obsesi dan kecemasannya terhadap ukuran penis.</p>
            <p>Beberapa pria mungkin nggak terlalu peduli dengan besar dan panjangnya penis. Tapi, nggak sedikit juga pria yang cuek dengan hal itu. Kegelisahan itu terkait banyak hal, mulai dari representasi sebuah kejantanan hingga kepuasan yang mampu diberikan pria terhadap pasangannya.</p>
            <h2><b>Jenis Penis</b></h2>
            <p>Penis memiliki jenis tertentu, yaitu grower dan shower. Grower merupakan kondisi di mana penis terlihat kecil saat nggak ereksi. Namun, bisa membesar, bahkan secara dramatis saat ereksi. Jenis selanjutnya adalah shower. Kondisi penis yang senantiasa terlihat besar bahkan saat nggak ereksi. Tapi, untuk jenis satu ini saat ereksi nggak memiliki pertambahan ukuran yang dramatis seperti grower.</p>
            <p>Berdasarkan data hellosehat.com, 79 pria memiliki penis grower. Sedangkan 21 persen lainnya memiliki jenis shower. </p>
            <p>Warna kulit juga bisa beda dengan kulit di bagian tubuh lainnya. Hal itu terjadi karena pigmen kulit penis lebih kaya dibanding kulit lainnya. Itulah sebabnya kenapa penis umumnya satu atau dua tingkat lebih gelap daripada kulit bagian lainnya.</p>
            <h2><b>Proses Ejakulasi Saat Orgasme</b></h2>
            <p>
                <img src="' . base_url() . 'assets/images/main/blog/anatomi-pria.jpg" style=" width: 500px; max-width: 100%;">
                <div><i>Image source : MedicalNewsToday</i></div>
            </p>
            <p>Penis memiliki beberapa pekerjaan yang dilakukan saat proses ejakulasi. Beberapa fasenya adalah sebagai berikut :</p>
            <h3><strong>1. Stimulasi</strong></h3>
            <p>Hal pertama dalam seluruh proses ejakulasi adalah stimulasi. Penis nggak akan bisa melakukan ejakulasi ketika nggak menerima stimulasi, baik berupa stimulasi visual maupun secara langsung.</p>
            <p>Pada tahap stimulasi ini penis akan mengeluarkan cairan pre-ejakulasi. Cairan ini umumnya nggak mengandung sperma. Tapi, hal itu juga nggak menutup kemungkinan membawa sperma yang tersisa pada saluran urethra dari ejakulasi sebelumnya.</p>
            <h3><strong>2. Ejakulasi</strong></h3>
            <p>Ejakulasi merupakan puncak proses orgasme pria. Ejakulasi terjadi karena menerima sinyal otak yang mengirimkan pesan pada sumsum tulang belakang menuju penis kemudian menyebabkan Corpus covernomus melemas agar aliran darah mengalir masuk ke dalamnya.</p>
            <p>Aliran darah yang deras menyebabkan pembengkakan pada Corpus covernomus dan menyebabkan penis membengkak dan keras sehingga hal ini disebut dengan ereksi. Nah, jika pria mengalami disfungsi ereksi, maka bagian ini sulit dialami oleh penis sehingga nggak bisa mengeras atau nggak tahan lama.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/5-kebiasaan-sehari-hari-penyebab-disfungsi-ereksi/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/penyebab-disfungsi-ereksi.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">5 Kebiasaan Sehari-Hari Penyebab Disfungsi Ereksi</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Jangan sepelekan kebiasaan sehari-hari yang ternyata dapat memicu gangguan kesehatan seksual pria', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <p>Saat pria mengalami ereksi, testis tertarik ke dalam tubuh untuk mempersiapkan cairan semen yang mengandung mani dan otot-otot pada tubuh akan menegang.</p>
            <p>Sebelum ejakulasi terjadi, sperma yang sudah matang dibawa keluar dari epididymis melalui saluran vas deferens dan dikumpulkan di ujung saluran urethra di bagian kepala penis.</p>
            <p>Selama orgasme, pria akan mengalami kontraksi sebanyak 10 – 15 kali, pada saat kontraksi, saluran urethra akan menyemprotkan cairan sperma. Volume cairan yang keluar bisa beragam antara 1 mil – 10 mil.</p>
            <h3><strong>3. Masa refrakter</strong></h3>
            <p>Merupakan masa di mana pria nggak bisa mengalami ereksi lagi. Durasi masa ini bervariasi pada pria. Umumnya pria yang berusia muda lebih cepat memasuki masa refrakter dibanding yang sudah berumur. Masa ini selesai hingga 15 menit. </p>
            <h2><b>Berapa Ukuran Rata-Rata Penis?</b></h2>
            <p>Menurut studi Journal of Urology menyatakan bahwa ukuran penis rata-rata 8,8 cm saat tidak ereksi dan 12,9 cm saat ereksi. </p>
            <p>Sedangkan data AverageHeight mengatakan bahwa semua penelitian yang dilakukan pada pengukuran penis memiliki indikasi kuat bahwa rata-rata ukuran penis di seluruh dunia berada pada kisaran 12,9 hingga 15 cm atau 5,1 hingga 5,9 inci.</p>
            <p>Berdasarkan data-data tersebut, kita bisa menarik kesimpulan bahwa ukuran rata-rata penis adalah sebagai berikut :<br>
                •   8,8 cm saat tidak ereksi<br>
                •   12,9 – 15 cm saat ereksi <br>
            </p>
            <p>Setiap negara memiliki ukuran penis rata-rata yang berbeda. Berikut 5 ukuran teratas dan terbawah di beberapa negara :</p>
            <table border="1" style="table-layout: fixed; width: 100%;">
                <tr>
                    <td colspan="2" style="text-align: center; font-weight: bold; padding: 7.5px;">Top 5 (cm)</td>
                    <td colspan="2" style="text-align: center; font-weight: bold; padding: 7.5px;">Bottom 5 (cm)</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Congo</td>
                    <td style="padding: 7.5px; text-align: center;">17.93</td>
                    <td style="padding: 7.5px; text-align: center;">India</td>
                    <td style="padding: 7.5px; text-align: center;">10.24</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Ecuador</td>
                    <td style="padding: 7.5px; text-align: center;">17.77</td>
                    <td style="padding: 7.5px; text-align: center;">Thailand</td>
                    <td style="padding: 7.5px; text-align: center;">10.16</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Ghana</td>
                    <td style="padding: 7.5px; text-align: center;">17.31</td>
                    <td style="padding: 7.5px; text-align: center;">Cambodia</td>
                    <td style="padding: 7.5px; text-align: center;">10.04</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Colombia</td>
                    <td style="padding: 7.5px; text-align: center;">17.03</td>
                    <td style="padding: 7.5px; text-align: center;">South Korea</td>
                    <td style="padding: 7.5px; text-align: center;">9.66</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Venezuela</td>
                    <td style="padding: 7.5px; text-align: center;">17.03</td>
                    <td style="padding: 7.5px; text-align: center;">North Korea</td>
                    <td style="padding: 7.5px; text-align: center;">9.66</td>
                </tr>
            </table>
            <p class="margin-top-15px">Data dari penissizes.org mengelompokkan ukuran rata-rata penis berdasarkan etnis. Mereka menggunakan prinsip matematika mean dan deviasi standar untuk menilai kisaran ukuran penis untuk etnis yang berbeda.</p>
            <p>Berikut daftar ukuran dan lingkar penis berdasarkan etnis di dunia.</p>

            <table border="1" style="table-layout: fixed; width: 100%;">
                <tr>
                    <td style="text-align: center; font-weight: bold; padding: 7.5px;">Etnis</td>
                    <td style="text-align: center; font-weight: bold; padding: 7.5px;">Panjang (cm)</td>
                    <td style="text-align: center; font-weight: bold; padding: 7.5px;">Lingkar (cm)</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Kaukasian</td>
                    <td style="padding: 7.5px; text-align: center;">14.5</td>
                    <td style="padding: 7.5px; text-align: center;">12.25</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Latin</td>
                    <td style="padding: 7.5px; text-align: center;">14.45</td>
                    <td style="padding: 7.5px; text-align: center;">12.3</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Asia Amerika</td>
                    <td style="padding: 7.5px; text-align: center;">14.15</td>
                    <td style="padding: 7.5px; text-align: center;">12.1</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Afrika Amerika</td>
                    <td style="padding: 7.5px; text-align: center;">14.75</td>
                    <td style="padding: 7.5px; text-align: center;">12.3</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Timur Tengah</td>
                    <td style="padding: 7.5px; text-align: center;">13.9</td>
                    <td style="padding: 7.5px; text-align: center;">11.9</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Asia Timur</td>
                    <td style="padding: 7.5px; text-align: center;">12.9</td>
                    <td style="padding: 7.5px; text-align: center;">10.5</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Asia Selatan</td>
                    <td style="padding: 7.5px; text-align: center;">13</td>
                    <td style="padding: 7.5px; text-align: center;">11.46</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Asia Tenggara</td>
                    <td style="padding: 7.5px; text-align: center;">13.65</td>
                    <td style="padding: 7.5px; text-align: center;">11.2</td>
                </tr>
                <tr>
                    <td style="padding: 7.5px; text-align: center;">Rata-Rata Dunia</td>
                    <td style="padding: 7.5px; text-align: center;">13.71</td>
                    <td style="padding: 7.5px; text-align: center;">11.25</td>
                </tr>
            </table>
            <p class="margin-top-15px">Sebetulnya, seberapa panjang dan besar lingkar penis, hal utama yang paling penting adalah kesehatan organ itu sendiri. Jangan sampai terlalu fokus dengan ukuran penis hingga melupakan hal terpentingnya. </p>
            <p>Selalu menerapkan gaya hidup sehat dan pola makan dengan gizi seimbang adalah langkah yang harus kamu lakukan untuk mendapatkan kesehatan organ intim yang prima dan bisa bekerja maksimal. </p>
            <p>Jika kamu mengalami masalah disfungsi ereksi, lakukan konsultasi segera dengan ahlinya <a href="' . base_url() . '" style="text-decoration: underline;">di sini</a> dan jangan biarkan masalahmu terus berlarut-larut. Gangguan kesehatan seksual masih bisa diatasi. Nggak perlu takut privasimu terancam karena Norm menjaga dengan baik privasi setiap customer. </p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Gaya Rambut Ternyata Bisa Tunjukkan Kepribadian Pria';
        $blog->category = 'Other';
        $blog->date = '13 October 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/gaya-rambut-tunjukkan-kepribadian-pria.jpg';
        $blog->url_name = 'gaya-rambut-tunjukkan-kepribadian-pria';
        $blog->subtitle = "Bukan cuma cara bicara dan bahasa tubuh aja yang bisa mengungkapkan kepribadian kamu. Tapi, gaya rambutmu juga mencerminkan siapa dirimu.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Pria biasanya memiliki gaya rambut tersendiri yang membuat mereka tampil lebih pede dan menarik, mulai dari potongan gaya klasik, belah samping, hingga gondrong. Tapi, tahu nggak sih kalau di balik pilihan gaya rambut, ternyata ada kepribadian yang tercermin lewat rambut yang dimilikinya.</p>
                    <p>Namun, hal paling prnting di atas semua pilihan gaya rambut adalah kesehatannya. Jangan sampai terlalu fokus pada pilihan gaya rambut tapi lupa untuk menjaga kesehatannya yang sebetulnya lebih penting karena bisa menyokong penampilan yang lebih prima.</p>
                </i>
            </div>

            <p>Pria biasanya memilih gaya rambut yang sedang tren atau memang merasa cocok dengan potongan tersebut, mulai dari bisa membuat wajah terlihat lebih segar atau membingkai wajah lebih tegas. Pria juga mempunyai varian potongan rambut yang bisa dipilih.</p>
            <p>Nggak sedikit juga pria yang suka mencoba berbagai gaya potongan rambut hanya untuk mencari yang pas dengan wajah atau sesuai kesukaannya. Tapi, ada juga yang selalu memakai gaya rambut yang sama dari waktu ke waktu dan nggak mau mengubahnya karena sudah merasa nyaman.</p>
            <p>Tahu ngak sih kalau ternyata rambut bisa menunjukkan kepribadian pemiliknya juga?</p>
            <p>Beberapa gaya potongan rambut berikut mencerminkan kepribadiannya masing-masing. Ada yang sesuai dengan kamu?</p>
            <h3><strong>1. Belah samping</strong></h3>
            <p>Gaya rambut satu ini merupakan gaya rambut klasik yang hampir dimiliki oleh banyak orang. Tatanannya adalah dengan menyisir rambut menjadi dua bagian dengan belahan di bagian tepi kanan atau pun kiri rambut.</p>
            <p><strong>Apa kata rambutmu?</strong></p>
            <p>Pria dengan gaya rambut ini merupakan orang yang bisa diandalkan. Kamu mungkin terlihat kuno tapi kamu dikagumi atas kejujuran, kesederhanaan, dan kesetiaanmu. Tapi, kamu juga merupakan orang yang cenderung menghindari risiko.</p>
            <h3><strong>2. Undercut</strong></h3>
            <p>Potongan rambut <i>undercut</i> merupakan potongan yang dicukur rapi pada bagian samping dan bawah rambut dengan menyisakan bagian atas rambut lebih lebat. Gaya rambut ini juga bisa divariasikan dengan man bun dan juga <i>fauxhawk</i>.</p>
            <p><strong>Apa kata rambutmu?</strong></p>
            <p>Pria dengan gaya rambut ini merupakan orang yang bisa diandalkan. Kamu mungkin terlihat kuno tapi kamu dikagumi atas kejujuran, kesederhanaan, dan kesetiaanmu. Tapi, kamu juga merupakan orang yang cenderung menghindari risiko.</p>
            <h3><strong>3. Rambut panjang</strong></h3>
            <p>Rambut dibiarkan panjang tanpa model tertentu. Gaya rambutnya hanya dibiarkan tergerai atau mengikatnya.</p>
            <p><strong>Apa kata rambutmu?</strong></p>
            <p>Pria dengan rambut panjang dinilai mencintai kebebasan dan mengerti bagaimana mengekspresikan apa yang ada di kepalanya. Kamu juga pandai untuk menentukan jalan hidupmu sendiri tanpa pusing dengan apa yang orang lain katakan tentangmu.</p>
            <h3><strong>4. Slicked back</strong></h3>
            <p>Gaya rambut ini cenderung berpotongan pendek dan menyisirnya ke belakang sehingga menampilkan tatanan rambut yang formal dan rapi. Gaya rambut ini biasanya disukai oleh mereka yang senang pada kerapian namun tetap ingin tampil trendi.</p>
            <p><strong>Apa kata rambutmu?</strong></p>
            <p>Gaya rambut ini menunjukkan kepribadian pemiliknya yang ramah, canggih, dan cenderung santai meski berada di bawah tekanan. Meski bertanggungjawab, namun pemilik rambut dengan gaya ini cenderung agak keras kepala dan mereka akan sangat passionate jika bisa menyelesaikan masalah sesuai dengan kehendaknya.</p>
            <h3><strong>5. Rambut spiky</strong></h3>
            <p>Gaya rambut ini terlihat old school dan biasanya dimiliki oleh mereka yang lahir di antara tahun 90an. Gaya rambut ini simple dengan penataan rambut bagian depan pendek dan ditarik ke atas membentuk spike.</p>
            <p><strong>Apa kata rambutmu?</strong></p>
            <p>Pria dengan rambut spiky ini cenderung cuek dan sedikit pemberontak. Kamu yang memiliki rambut dengan gaya ini adalah orang yang memikat dan memiliki jalan keluar dari setiap masalah yang dimiliki.</p>
            <h2><b>Hal Sederhana yang Berpengaruh Terhadap Kesehatan Rambut</b></h2>
            <p>Gimana pun gaya rambut kamu, hal utama yang paling penting dari keseluruhannya adalah kesehatan rambut itu sendiri. Percuma rambut trendi kalau bermasalah, seperti rontok, berketombe, dan sebagainya.</p>
            <p>Makanya, jaga kesehatan rambut itu penting banget untuk tampilan yang lebih prima. Tiga hal berikut meski terdengar sepele tapi bermanfaat bagi kesehatan rambutmu.</p>
            <h3><strong>1. Mencuci rambut secukupnya</strong></h3>
            <p>Kebiasaan yang sering dilakukan pria adalah keramas kapan pun mereka mau. Apalagi setiap mandi rasanya kurang segar kalau nggak keramas.</p>
            <p>Tapi, ternyata keramas terlalu sering nggak dianjurkan karena bisa mengurangi minyak alami rambut yang berfungsi menjaga kelembaban rambut. Hal itu membuat rambut menjadi kering dan rapuh sehingga mudah rontok.</p>
            <p>Cuci rambut cukup sehari sekali dengan shampoo yang cocok dan nggak bikin rambut atau kulit kepala jadi kering dan bermasalah. Kamu bisa cuci rambut saat mandi pagi dan cuci rambut lagi di esok harinya.</p>
            <h3><strong>2. Keringkan rambut dengan lembut, jangan digosok</strong></h3>
            <p>Pria biasanya mengeringkan rambut setelah keramas dengan menggosok-gosoknya. Hal itu justru membuat rambutmu jadi mudah bercabang dan rontok. Selain itu, setelah keramas, kulit kepala sedang dalam kondisi lembab sehingga saat kamu menggosoknya dengan keras, hal itu bisa melukai kulit kepalamu.</p>
            <p>Cukup keringkan rambut dengan cara ditepuk pelan atau mengelapnya dengan perlahan untuk menghindari luka pada kulit kepala. Selain itu, pilih sisir bergigi jarang untuk menghindari rambut kusut dan rontok.</p>
            <h3><strong>3. Gunakan hair tonic</strong></h3>
            <p>Inilah hal yang luput diperhatikan pria, penggunaan hair tonic. Hair tonic penting banget untuk menjaga kekuatan akar rambut. Apalagi untuk kamu yang mengalami rambut rontok, penting banget menggunakan hair tonic untuk merangsang pertumbuhan rambut baru dan mencegah kerontokan, seperti <a href="' . base_url() . 'rambut-rontok/" style="text-decoration: underline">Hair Tonic</a> dari Norm.</p>
            <p>Selain menjaga kesehatan rambut dari luar, kamu juga perlu memperhatikan asupan makanan dari dalam tubuh. Nutrisi seimbang untuk menjaga kesehatan rambut, seperti salmon, alpukat, telur, almond, hingga buah-buahan yang banyak mengandung vitamin A, C, D, dan E yang menutrisi rambut.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Wajib Nonton! Rekomendasi Serial Netflix Terbaik 2020';
        $blog->category = 'Other';
        $blog->date = '9 October 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/serial-netflix-terbaik-2020.jpg';
        $blog->url_name = 'serial-netflix-terbaik-2020';
        $blog->subtitle = "Serial Netflix terbaik di tahun 2020 ini rugi banget buat dilewatkan. Mulai dari Money Heist hingga Dark siap bikin kamu penasaran dan pastinya menghibur.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Pandemi emang bikin kita lebih sering berdiam diri di rumah dan melakukan banyak hal di rumah, termasuk nonton. Jika dulu kita bisa nonton di bioskop kapan aja, maka sekarang kita hanya bisa mengandalkan layanan streaming film. Salah satu layanan streaming yang paling banyak diakses adalah Netflix.</p>
                    <p>Nah, buat menemani masa karantina kamu, berikut beberapa rekomendasi serial Netflix di tahun 2020 yang nggak boleh dilewatkan. Sebelum nonton, simak dulu reviewnya!</p>
                    <ol>
                        <li>
                            <div>Money Heist</div>
                            <p>Genre: Thriller, Drama Kriminal</p>
                        </li>
                        <li>
                            <div>Peaky Blinders</div>
                            <p>Genre: Drama Kriminal</p>
                        </li>
                        <li>
                            <div>The Umbrella Academy</div>
                            <p>Genre: Black Comedy, Drama, Sci-Fi</p>
                        </li>
                        <li>
                            <div>Stranger Things</div>
                            <p>Genre: Misteri, Sci-Fi</p>
                        </li>
                        <li>
                            <div>Dark</div>
                            <p>Genre: Misteri</p>
                        </li>
                    </ol>
                </i>
            </div>

            <p>Semenjak pandemi, kita nggak bisa untuk menikmati hiburan film di bioskop untuk mencegah penularan virus Covid-19. Selama pandemi juga, kebanyakan orang lebih sering menghabiskan waktu di rumah dan mencari alternatif hiburan yang bisa dinikmati dari rumah.</p>
            <p>Salah satu layanan streaming film yang sedang digemari banyak orang adalah Netfilx. Layanan streaming asal Amerika Serikat ini menyajikan ragam tontonan dari berbagai genre yang mudah untuk diakses. Selain itu, kualitas audio dan visual yang disajikan juga mempunyai standar seperti film bioskop sehingga penonton merasakan pengalaman yang sebanding dengan nonton di bioskop.</p>
            <p>Selain menyajikan film, Netflix juga menyediakan TV Series Netflix Original yang bisa kamu tonton. Berikut beberapa rekomendasi serial Netflix terbaik di tahun 2020 yang wajib kamu tonton.</p>
            <h3><strong>1. Money Heist</strong></h3>
            <div><i><strong>Genre: Thriller, Drama Kriminal</strong></i></div>
            <div><i><strong>Episode: 4 Seasons</strong></i></div>
            <div style="padding-bottom: 7.5px;"><i><strong>Rating: 8.4/10 IMDb, 93% Rotten Tomatoes</strong></i></div>
            <p>Serial Netflix satu ini sudah dikenal banyak orang dan bahkan mungkin kamu sudah pernah mendengarnya. Money Heist bercerita tentang aksi perampokan yang dilakukan oleh sekelompok orang yang didalangi seorang profesor jenius sehingga kisah yang muncul bukanlah kisah kriminal biasa.</p>
            <p>Alih-alih mengambil uang di brankas Royal Mint of Spain, sebuah gedung untuk memproduksi uang di Spanyol, ia punya rencana yang lebih besar dari sekadar perampokan uang. The Profesor dan 8 anak buahnya serta 67 sandera bekerjasama untuk mencetak uang sejumlah 2,4 juta euro.</p>
            <p>Berkat kejeniusan sang profesor, rencana berjalan sangat baik dan polisi seperti nggak berdaya di hadapan mereka, sampai hal-hal di luar kendali terjadi dan membuat mereka terpojok.</p>
            <p>Serial asal Spanyol ini dibintangi oleh aktor dan aktris kenamaan Spanyol seperti Ursula Corbero, Alvaro Morte, Jaime Lorente, dan Alba Flores. Money Heist sebelumnya sudah sempat tayang di Spanyol pada tahun 2017 namun mengalami rating yang rendah sampai akhirnya diakuisisi oleh Netflix, serial garapan Alex Pina ini pun melejit dan menarik perhatian banyak penonton.</p>
            <p>Bukan cuma alur ceritanya yang menarik dan menegangkan, tapi karakter dalam serial ini juga menjadi alasan lain mengapa banyak orang menjadikan Money Heist sebagai tontonan favorit mereka.</p>
            <h3><strong>2. Peaky Blinders</strong></h3>
            <div><i><strong>Genre: Drama Kriminal</strong></i></div>
            <div><i><strong>Episode: 5 Seasons</strong></i></div>
            <div style="padding-bottom: 7.5px;"><i><strong>Rating: 8.8/10 IMDb, 93% Rotten Tomatoes</strong></i></div>
            <p>Serial Netflix satu ini banyak mendapatkan pujian karena menghadirkan pengalaman yang seru bagi penontonnya. Film ini membawa penonton pada situasi setelah perang di Birmingham, Inggris, tahun 1919.</p>
            <p>Serial ini bercerita tentang sebuah geng berkuasa bernama Peaky Blinders dipimpin oleh Tommy Shelby yang berkharisma, cerdik, dan sangat ambisius yang ingin memperluas kekuasaan. Peaky Blinders mendapatkan tantangan ketika Chester Campbell, seorang Detective Chief Inspector Royal Irish Constabulary yang dikirim oleh Winston Churchill untuk memberantas kriminal di kota Birmingham.</p>
            <p>Serial ini menghadirkan kehidupan bangsawan Inggris yang kental dipadu dengan gaya Amerika sehingga mampu membawa serial ini jadi sangat unik dengan taste politik dan kehidupan nyata pasca perang di Inggris.</p>
            <p>Serial ini menghasilkan cerita yang unik dan menawan sehingga menarik hati para penonton untuk terus menontonnya. Serial ini diprediksi bakal berakhir pada 2021 dengan berbagai kejutan yang bisa membuatmu berdecak kagum.</p>
            <h3><strong>3. The Umbrella Academy</strong></h3>
            <div><i><strong>Genre: Black Comedy, Drama, Sci-Fi</strong></i></div>
            <div><i><strong>Episode: 2 Seasons</strong></i></div>
            <div style="padding-bottom: 7.5px;"><i><strong>Rating: 8/10 IMDb, 82% Rotten Tomatoes</strong></i></div>
            <p>The Umbrella Academy merupakan serial superhero Netflix asal Kanada yang diadaptasi dari komik Dark Horse. Cerita dimulai saat terjadi kelahiran yang aneh ada suatu kota. Ada 43 bayi yang lahir dari wanita yang bahkan nggak melakukan hubungan seksual serta nggak ada tanda-tanda mengandung sama sekali.</p>
            <p>Tujuh dari 43 bayi tersebut diadopsi oleh Sir Reginald Hargreeves yang merupakan seornag pengusaha dan miliarder di kota tersebut. Hargreeves kemudian menciptakan Umbrella Academy untuk mempersiapkan anak-anaknya menjadi superhero kelak dan bertugas untuk menyelamatkan dunia. Namun, sayangnya rencana tersebut nggak berjalan lancar. Saat anak-anak tumbuh menjadi remaja, terjadilah konflik internal dan tim dibubarkan.</p>
            <p>Pada season 2, serial mengangkat tentang anak-anak tersebut yang melakukan perjalanan ke masa lalu untuk mengungkap kematian sang ayah. Mereka berupaya untuk menyelamatkan diri dari pembunuh bayaran seklaigus mencari cara untuk kembali ke masa sekarang.</p>
            <h3><strong>4. Stranger Things</strong></h3>
            <div><i><strong>Genre: Misteri, Sci-Fi</strong></i></div>
            <div><i><strong>Episode: 3 Seasons</strong></i></div>
            <div style="padding-bottom: 7.5px;"><i><strong>Rating: 8.8/10 IMDb, 93% Rotten Tomatoes</strong></i></div>
            <p>Serial Netflix yang dibintangi oleh Millie Bobby Brown, Winona Ryder, Finn Wolfhard, Gaten Matarazzo, dan Caleb McLaughlin ini bercerita tentang hilangnya seorang anak bernama Will Byers di Hawkins, Indiana. Hal tersebut membuat sang ibu, Joyce dan kakaknya, Jonathan mencari-cari Will.</p>
            <p>Pada saat pencarian tersebut terjadi hal-hal supranatural, termasuk munculnya seorang anak bernama Eleven. Di sisi lain, tiga sahabat dekat Will, yaitu Mike, Lucas, dan Dustin dibantu oleh Eleven berusaha untuk mengungkap misteri hilangnya Will. Mereka juga mengungkap keberadaan dunia paralel yang disebut dengan ‘The Upside Down’ serta sebuah riset berbahaya yang dilakukan oleh Departemen Energi Amerika Serikat.</p>
            <p>Stranger Things yang digarap oleh Duffer bersaudara merupakan salah satu serial Netflix paling sukses yang mendapatkan nominasi dan penghargaan bergengsi, seperti Oscar dan Golden Globe. Sebuah pencapaian yang layak untuk film yang mendapatkan banyak perhatian penonton.</p>
            <h3><strong>5. Dark</strong></h3>
            <div><i><strong>Genre: Misteri</strong></i></div>
            <div><i><strong>Episode: 3 Seasons</strong></i></div>
            <div style="padding-bottom: 7.5px;"><i><strong>Rating: 8.8/10 IMDb, 95% Rotten Tomatoes</strong></i></div>
            <p>Dark merupakan serial original Netflix berbahasa Jerman yang bercerita tentang kiamat waktu. Sebuah kehancuran dunia yang terjadi karena manusia bisa menembus batas-batas yang sesungguhnya nggak mungkin dilalui.</p>
            <p>Dark mengisahkan tentang sebuah kota kecil yang memiliki warga hanya sedikit. Kota tersebut bernama Winden yang mempunyai ciri khas sebuah pembangkit tenaga listrik di antara hutan dan di dalamnya terdapat terowongan.</p>
            <p>Kisah bermula ketika Erik, seorang anak SMA hilang secara misterius. Lalu, Jonas, salah satu tokoh utama pergi bersama teman-temannya untuk mencari paket narkoba yang mungkin ditinggalkan oleh Erik di sebuah goa. Setelah mereka berhasil mendapatkan paket tersebut, suatu kejadian aneh muncul dan mereka kehilangan satu anggota mereka yang paling kecil, Mikkel, yang juga hilang dengan misterius. Merasa bertanggung jawab, Jonas berusaha mencari keberadaan Mikkel yang membawanya kepada fakta yang mengejutkan tentang kota Winden.</p>
            <p>Serial besutan Baran bo Odar dan Jantje Friese yang menceritakan tentang perjalanan waktu ini diramu secara rumit sehingga penonton akan dibuat cukup bingung namun membuat penasaran akan kelanjutan ceritanya.</p>
            <p>Nah, sederet serial tersebut bisa kamu nikmati lewat layanan streaming Netflix. Kamu bisa menonton bersama pasangan atau keluarga di rumah. Selamat menonton!</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Kesehatan Mental Pria: Antara Stigma Sosial dan Pengaruhnya Pada Hidupmu';
        $blog->category = 'Other';
        $blog->date = '8 October 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/pengaruh-stigma-pada-kesehatan-mental-pria.jpg';
        $blog->url_name = 'pengaruh-stigma-pada-kesehatan-mental-pria';
        $blog->subtitle = "Stigma tentang kesehatan mental pria memang masih kuat di tengah masyarakat. Tapi, kamu sebagai pria nggak bisa begitu saja tenggelam dalam stigma itu.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Kesadaran terhadap kesehatan mental di Indonesia masih cenderung rendah. Hal itu ditandai dengan masih kuatnya stigma terhadap gangguan pada mental, terutama bagi pria.</p>
                    <p>Namun di balik semua itu, ada harga yang harus dibayar, yaitu munculnya jerawat akibat penggunaan masker, maskne. Maskne adalah istilah baru yang digunakan untuk menggambarkan jerawat yang muncul akibat penggunaan masker dalam jangka waktu yang lama.</p>
                    <p>Jika ada pria yang mengalami masalah pada kesehatan mental, seperti depresi, maka dianggap lemah. Pandangan itu menjadikan pria percaya bahwa hal itu benar adanya dan membuat pria merasa enggan untuk mendatangi ahlinya untuk menyelesaikan masalah. Ada hal penting yang harus dipahami pria tentang kesehatan mental.</p>
                </i>
            </div>

            <p>Bicara soal kesehatan mental mungkin belum banyak orang yang menyadari tentang makna dan pengaruhnya bagi kehidupan. Kebanyakan masyarakat Indonesia sendiri belum sepenuhnya sadar tentang pentingnya kesehatan mental, terutama pria.</p>
            <p>Stigma yang muncul di tengah masyarakat tentang pria yaitu pria adalah makhluk yang harus kuat dan mandiri untuk mengatasi masalahnya sendiri, serupa dengan stigma sosial masyarakat adaptasi dari tradisi lokal. Pria memang harus menjadi makhluk yang kuat dan mandiri, namun secara kejiwaan, tiap orang punya hak yang sama untuk memperoleh kebahagiaan, terlepas ia berjenis kelamin pria maupun wanita.</p>
            <h2><b>Pria dan Kesehatan Mental</b></h2>
            <p>Menurut laporan dari WHO tahun 2018, di negara-negara dengan penghasilan tinggi, pria yang meninggal karena bunuh diri tiga kali lebih banyak dari wanita.</p>
            <p>Melansir dari <i>healthline.com, National Institute on Alcohol Abuse and Alcoholism</i> menyebutkan angka tahunan pria yang meninggal karena alkohol sebanyak 62.000 orang, dibandingkan dengan wanita yang berada pada angka 26.000 orang.</p>
            <p>Jika pria terlihat lebih mudah untuk tampil tenang, berbanding dengan wanita yang lebih mudah untuk mengungkapkan apa yang dirasakan. Tampilan tersebut yang pada akhirnya menjadikan pria dianggap lebih kuat menghadapi masalah, bahkan saat ia sendiri sedang mengalami masalah pada jiwanya.</p>
            <p>Kesehatan mental bisa dipengaruhi oleh peristiwa dalam kehidupan seseorang yang memengaruhi kepribadian dan perilaku. Peristiwa tersebut bisa berupa kekerasan, masalah dalam keluarga, seperti pertengkaran hebat orangtua yang terjadi secara terus-menerus, pelecehan seksual, dan sebagainya.</p>
            <p>Peristiwa-peristiwa tersebut akan terekam di dalam otak dan memengaruhi kepribadian serta tingkah laku. Apalagi jika hal tersebut terjadi di saat seseorang masih kecil, maka ingatan peristiwa tersebut akan terus terbawa sampai ia dewasa dan membentuk perilakunya.</p>
            <h2><b>Gangguan Kesehatan Mental</b></h2>
            <p>Sebelum masuk ke pembahasan lebih lanjut, kita pahami dulu mengenai penyebab yang menjadi gangguan pada kesehatan mental. Berikut beberapa gangguan yang umum terjadi:</p>
            <ul>
                <li>Stres berat</li>
                <li>Trauma kecelakaan</li>
                <li>Kekerasan rumah tangga</li>
                <li>Kekerasan pada masa kecil</li>
                <li>Faktor genetik</li>
                <li>Cedera kepala </li>
                <li>Mengalami diskriminasi atau stigma</li>
                <li>Kehilangan pekerjaan</li>
            </ul>
            <p>Melansir dari <i>mayoclinic</i>, tanda seseorang mengalami gangguan kesehatan mental, di antaranya:</p>
            <ul>
                <li>Merasa sedih atau terpuruk</li>
                <li>Konsentrasi menurun</li>
                <li>Ketakutan atau khawatir berlebihan</li>
                <li>Perubahan suasana hati yang ekstrem</li>
                <li>Mengalami gangguan tidur, halusinasi, paranoia, atau delusi</li>
                <li>Keinginan bunuh diri </li>
                <li>Perubahan perilaku, gairah seksual menurun, dan perubahan pola makan</li>
            </ul>
            <p>Nggak cuma secara perilaku dan emosi saja yang mengalami gangguan, tapi secara fisik pun kamu juga bisa mengalami beberapa gejala fisik, seperti sakit perut, maag, sakit punggung, sakit kepala, atau nyeri yang nggak bisa dijelaskan.</p>
            <p>Namun, meski kamu merasa mengalami beberapa tanda tersebut, nggak disarankan untuk melakukan <i>self-diagnostic</i>. Kamu tetap perlu untuk mendatangi ahlinya untuk mendapatkan diagnosis yang sesuai dan penanganannya secara tepat.</p>
            <h2><b>Stigma Kesehatan Mental Pria</b></h2>
            <p>Stigma yang muncul di masyarakat adalah pria harus menjadi makhluk yang kuat dan macho sehingga jika seseorang mengalami masalah pada kejiwaannya dan mendatangi ahlinya untuk menyelesaikan masalah, pria akan dianggap lemah dan hal itu menjadi sebuah keengganan bagi pria sehingga sebagian besar pria menanggap depresi atau gangguan mental adalah tanda kelemahan.</p>
            <p>Padahal kesehatan mental juga sama pentingnya dengan kesehatan fisik. Pria harus mengubah pandangan itu dan nggak perlu segan untuk mengatasinya karena lemah atau kuatnya seseorang bukan ditandai dengan sehat atau tidaknya mental seseorang.</p>
            <p>Kedang, secara nggak sadar, pria kerap mengalami kelelahan mental yang menimbulkan gejala, seperti menjadi pemarah, agresif, dan mudah tersinggung. Namun, saat mengalami hal-hal tersebut, pria lama kelamaan mungkin akan sadar bahwa ia mengalami masalah namun lebih memilih untuk menyembunyikannya. Padahal jika terus menerus terjadi maka akan menimbulkan hal yang lebih parah, seperti stres berkepanjangan dan depresi.</p>
            <p>Kesehatan mental sama pentingnya dengan kesehatan fisik sehingga keduanya perlu dirawat dan dijaga kesehatannya. Menjaga kesehatan mental hampir sama dengan menjaga kesehatan fisik. Jika kesehatan fisik dijaga dengan makan makanan bergizi dan minum vitamin serta olahraga, maka kesehatan mental nggak cuma itu.</p>
            <p>Apa yang kamu makan dan lakukan, nggak cuma berpengaruh pada kesehatan fisik saja, tapi juga memengaruhi mental. Contohnya, jika kamu sering begadang, maka akan timbul gangguan secara fisik, seperti mata lelah, mengantuk berlebihan, sakit kepala, hingga obesitas. Nah, kurang tidur juga ternyata memengaruhi kesehatan mental juga. Kamu akan menjadi mudah marah, bahkan untuk hal-hal yang sepele, hingga munculnya stres.</p>
            <h2><b>Langkah-Langkah untuk Mengatasi Stigma</b></h2>
            <p>Stigma tentang kesehatan mental masih bisa kamu atasi demi kesehatan dan kebahagiaan dirimu. Beberapa hal berikut dapat kamu lakukan, yaitu:</p>
            <h3><strong>1. Mendapatkan perawatan</strong></h3>
            <p>Hal pertama yang bisa kamu lakukan adalah dengan mendapatkan perawatan yang tepat. Jangan biarkan stigma menghalangi kamu mendapatkan perawatan dan pertolongan. Perawatan bisa membantu kamu mendapatkan solusi untuk diri kamu dan hidupmu sehingga kamu bisa menjalani kehidupan dengan lebih ringan.</p>
            <h3><strong>2. Jangan biarkan stigma membuatmu ragu dan malu</strong></h3>
            <p>Sebetulnya stigma nggak datang dari diri kamu. Secara tidak sadar, kamu yang mempercayai stigma tersebut sehingga menghalangi diri sendiri untuk mencari pertolongan. Kamu terlalu berharga untuk membiarkan dirimu terkurung dalam stigma yang merugikan.</p>
            <h3><strong>3. Jangan mengisolasi diri</strong></h3>
            <p>Jika kamu sadar bahwa kamu mengalami gangguan pada mental, maka jangan menjadi rendah diri dan mengisolasi dari lingkungan sosial di sekitar. Percayalah bahwa akan selalu ada orang terdekat yang mendukung dan mampu membantumu.</p>
            <h3><strong>4. Dukung dirimu sendiri</strong></h3>
            <p>Sebaik apa pun perawatan yang kamu dapatkan, jika kamu nggak menerima keadaanmu, maka kamu nggak bisa menjalani perawatan dengan maksimal. Orang yang paling memahami kamu adalah dirimu sendiri, maka dukungan dari dalam dirimu sendiri adalah hal utama yang paling penting.</p>
            <p>Ingat hidupmu adalah milikmu sendiri. Jadi, kamulah yang bertanggungjawab atas kebahagiaanmu. Gangguan mental bukanlah tanda kelemahan karena setiap orang bisa saja mengalami hal tersebut, bahkan tanpa disadarinya.</p>
            <p>Selalu berikan waktu untuk dirimu dan cintai dirimu sepenuhnya. Jangan memaksakan diri jika kamu sudah lelah secara fisik, istirahat sejenak dan nikmati waktu santaimu melakukan hobi yang kamu suka. Atur waktu sebaik mungkin untuk bekerja, beristirahat, dan olahraga.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Cara Atasi Maskne, Jerawat Akibat Penggunaan Masker';
        $blog->category = 'Acne';
        $blog->date = '6 October 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/cara-atasi-maskne.jpg';
        $blog->url_name = 'cara-atasi-maskne';
        $blog->subtitle = "Pandemi COVID-19 membuat semua orang harus menggunakan masker demi keselamatan bersama. Tapi, di balik itu ada masalah yang mengintai, yaitu maskne. Jerawat akibat menggunakan masker.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Sekarang masker merupakan must have item yang digunakan setiap orang. Setiap hari dan setiap waktu selama berkegiatan di luar rumah, wajib menggunakan masker. Bahkan di dalam ruangan pun wajib menggunakan masker.</p>
                    <p>Namun di balik semua itu, ada harga yang harus dibayar, yaitu munculnya jerawat akibat penggunaan masker, maskne. Maskne adalah istilah baru yang digunakan untuk menggambarkan jerawat yang muncul akibat penggunaan masker dalam jangka waktu yang lama.</p>
                </i>
            </div>

            <p>Sejak pandemi COVID-19, memakai masker merupakan hal yang wajib dilakukan saat keluar rumah, bahkan saat berada di dalam ruangan atau kendaraan. Namun, bagi sebagian orang, memakai masker dalam waktu yang lama bisa menimbulkan jerawat pada area penggunaan masker.</p>
            <p>Jerawat yang timbul akibat menggunakan masker ini disebut dengan maskne atau mask acne. Jerawat maskne terbentuk di area yang tertutup oleh masker, seperti hidung, pipi, dagu, serta area jambang dan sekitar rahang. Selayaknya jerawat pada umumnya, maskne bisa menimbulkan jerawat membandel dan meninggalkan bekas jerawat.</p>
            <h2><b>Penyebab Timbulnya Maskne</b></h2>
            <p>Menggunakan masker terus menerus dalam jangka waktu yang lama tentu akan membuat kulit bergesekan dengan permukaan masker. Hal itu bisa memicu timbulnya iritasi dan peradangan pada lapisan kulit.</p>
            <p>Penggunaan masker kini nggak bisa ditinggalkan karena bahaya yang lebih besar mengintai kapan saja. Hal tersebut menjadikan kulit jadi semakin mudah untuk timbul jerawat dan jerawat yang sudah tumbuh pun semakin meradang.</p>
            <p>Selain itu, saat kita berbicara dan menghela nafas, hawa panas akan terjebak dan membuat kulit menjadi lebih lembab dan kulit bagian yang ditutupi dengan masker menjadi kesulitan untuk bernafas seperti area kulit lainnya. Nah, hal itu menyebabkan kuman dan bakteri semakin mudah untuk tumbuh dan berkembang.</p>
            <p>Sebetulnya, istilah maskne ini bukanlah hal yang baru. Dulu maskne hanya dialami oleh para tenaga kesehatan yang mana penggunaan masker dalam waktu lama hanya dilakukan oleh mereka. Namun, kini setiap orang sudah menggunakan masker sehingga maskne pun semakin dikenal khalayak umum dan dialami oleh banyak orang pula. Istilah medis untuk maskne adalah acne mechanica, yaitu kondisi kulit yang mengalami jerawat disebabkan karena pemakaian alat pelindung wajah, seperti masker, dalam waktu yang lama.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/tips-merawat-wajah-berjerawat-pada-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/perawatan-wajah-berjerawat-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">Tips Merawat Wajah Berjerawat Pada Pria</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Wajah berjerawat emang ganggu penampilan. Tapi, merawat wajah berjerawat juga ngga bisa cuma bermodal facial wash aja. Butuh beberapa hal yang harus dilakukan supaya wajah bebas jerawat dan sehat.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Cara Mengatasi Jerawat Maskne</b></h2>
            <p>Pada dasarnya, cara mengatasi jerawat itu sama saja, yaitu menjaga kebersihan wajah dan kelembaban kulit. Namun, praktiknya, mengatasi jerawat nggak semudah itu karena kondisi kulit dan tingkat keparahan jerawat tiap orang berbeda-beda.</p>
            <p>Meski begitu, bukan berarti jerawat nggak bisa diatasi. Berikut beberapa hal yang bisa dilakukan untuk mengatasi jerawat maskne:</p>
            <h3><strong>1. Gunakan masker dengan baik</strong></h3>
            <p>Ini adalah hal pertama yang wajib kamu perhatikan untuk memulai langkah dalam mengatasi jerawat. Pastikan penggunaan masker dilakukan dengan baik.</p>
            <p>Jika kamu menggunakan masker bedah, ganti masker jika sudah terasa lembab. Jangan gunakan masker berkali-kali, apalagi jika kamu pakai seharian penuh, wajib mengganti masker sesegera mungkin. Sediakan masker cadangan di dalam tas untuk kamu ganti di mana saja.</p>
            <p>Sedangkan untuk masker kain, cucilah masker dengan bersih supaya nggak meninggalkan kotoran yang bisa menempel ke kulit wajah. Cuci masker menggunakan air panas untuk membunuh kuman.</p>
            <h3><strong>2. Bersihkan wajah sebelum dan sesudah menggunakan masker</strong></h3>
            <p>Menjaga kebersihan wajah adalah hal utama yang harus kamu lakukan dengan rutin. Bersihkan wajah dengan sabun pencuci wajah sebelum menggunakan masker.</p>
            <p>Begitu pula saat kamu pulang dari berpergian, lepas masker dengan baik, jangan sampai bagian luar masker menyentuh permukaan wajahmu. Setelah itu, bersihkan wajah dengan menyeluruh, termasuk bagian bawah rahang yang tertutup masker.</p>
            <h3><strong>3. Jangan menyentuh wajah saat menggunakan masker</strong></h3>
            <p>Secara nggak sengaja, kadang kita menyentuh bagian depan masker. Bagian tersebut sudah menyerap banyak kotoran dan debu serta jika kamu sentuh maka kuman akan berpindah ke tangan. Ditambah jika setelahnya kamu juga menyentuh wajah, maka otomatis kuman dan kotoran akan berpindah ke kulit wajah.</p>
            <p>Jangan menyentuh bagian depan masker. Jika kamu nggak sengaja menyentuhnya, segera cuci tangan atau gunakan hand <i>sanitizer</i>. Hentikan kebiasaan menyentuh kulit wajah, terutama saat kamu sedang bekerja atau kondisi tangan nggak bersih.</p>
            <h3><strong>4. Rutin gunakan pelembab</strong></h3>
            <p>Selama ini banyak yang masih menganggap menggunakan pelembab pada kulit berjerawat bisa memperparah kondisi jerawat. Padahal kenyataannya adalah sebaliknya. Penggunaan pelembab justru membantu menjaga kulit tetap sehat. Hanya saja yang menjadi perhatian adalah penyesuaian pada jenis kulitmu.</p>
            <p>Menurut <i>Journal of the American Academy of Dermatology</i>, perawatan untuk kulit berjerawat karena penggunaan masker, disarankan menggunakan pelembab perawatan jerawat yang salah satunya mengandung clindamycin, zat yang juga terkandung dalam <a href="' . base_url() . 'jerawat/" style="text-decoration: underline;">Norm Day Cream</a> dari rangkaian Essential Acne Kit yang efektif mengatasi jerawat dan memudarkan noda bekas jerawat.</p>
            <p>Selain mengatasi jerawat dengan hal-hal di atas, kamu juga bisa selingi dengan melepas masker setiap beberapa jam sekali. Namun, jangan sembarangan untuk melepas masker, pilih tempat yang sesuai dan aman serta jauh dari keramaian.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Waspadai Gaya Hidup Bisa Sebabkan Disfungsi Ereksi di Masa Muda';
        $blog->category = 'Sex';
        $blog->date = '2 October 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/gaya-hidup-sebabkan-disfungsi-ereksi.jpg';
        $blog->url_name = 'gaya-hidup-sebabkan-disfungsi-ereksi';
        $blog->subtitle = "Disfungsi ereksi sering dianggap hanya menyerang pria yang sudah lanjut usia. Nyatanya, sudah banyak pria di bawah usia 40 tahun yang mengalami disfungsi ereksi. Ini penyebabnya.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Disfungsi ereksi merupakan gangguan seksual pria yang bukan hanya menyerang pria yang lanjut usia saja, tapi juga pria yang masih berusia muda. Penyebabnya bukan hanya pada organ tubuh dan sistem sirkulasi tubuh saja, tapi juga gaya hidup yang nggak sehat yang seringnya dianggap sepele.</p>
                    <p>Secara umum penyebab disfungsi ereksi terbagi menjadi dua, yaitu faktor fisik dan psikologi. Namun, pada usai muda, penyebabnya nggak cuma itu aja, tapi juga pada gaya hidup yang nggak sehat dan pola makan yang nggak diatur.</p>
                </i>
            </div>

            <p>Disfungsi ereksi adalah ketidakmampuan pria untuk mendapatkan atau mempertahankan ereksi saat berhubungan seksual. Kondisi tersebut bisa muncul berulang dan dapat mengganggu kehidupan seksual seseorang, baik penderitanya maupun pasangannya.</p>
            <p>Masalah disfungsi ereksi biasanya dialami oleh pria yang sudah lanjut usia. Tapi, sayangnya hal itu nggak selalu berlaku karena sekarang mulai banyak pria yang mengalami disfungsi ereksi meski usianya masih muda.</p>
            <h2><b>Penyebab Disfungsi Ereksi di Masa Muda</b></h2>
            <p>Disfungsi ereksi umumnya terjadi pada pria yang sudah berusia lanjut. Namun, kini sudah banyak pria di bawah usia 40 tahun yang mengalami disfungsi ereksi.</p>
            <p>Ereksi merupakan sebuah proses yang melibatkan kinerja otak, hormon, saraf, dan sistem peredaran darah serta otot. Hal-hal tersebut bekerja bersamaan untuk membuat penis ereksi. Nah, jika salah satu hal tersebut ada yang terganggu fungsinya, maka seorang pria nggak akan bisa mendapatkan atau mempertahankan ereksinya atau yang disebut dengan disfungsi ereksi.</p>
            <p>Pada usia yang sudah lanjut, gangguan disfungsi ereksi biasanya disebabkan karena menurunnya kualitas organ-organ dan fungsi-fungsi yang dibutuhkan untuk mendapatan atau mempertahankan ereksi.</p>
            <p>Secara garis besar penyebab disfungsi ereksi di masa muda dikelompokkan dalam dua faktor.s</p>
            <h3><strong>1. Faktor fisik</strong></h3>
            <p>Kondisi fisik sangat memengaruhi kemampuan ereksi pria karena untuk mendapatkan atau mempertahankan ereksi membutuhkan kondisi fisik yang sehat dan sirkulasi yang normal. Jika sirkulasi darah terhambat, maka aliran darah ke penis juga terganggu dan otomatis penis akan kesulitan untuk mendapatkan atau mempertahankan ereksi karena kekurangan aliran darah.</p>
            <p>Penyakit darah tinggi juga membuat pembuluh darah mengalami penyempitan sehingga aliran darah kesulitan untuk masuk ke penis. Selain itu, pada faktor fisik terdapat beberapa penyebab lain, di antaranya :</p>
            <ul>
                <li>Hormon yang nggak seimbang</li>
                <li>Peyronie, yaitu mengembangnya jaringan parut fibrosa pada penis yang menyebabkan penis melengkung dan kesakitan ketika mengalami ereksi</li>
                <li>Mengalami masalah pada prostat, panggul, sumsum tulang belakang, dan kandung kemih. Masalah pada organ dan bagian tersbut bisa berpengaruh terhadap gangguan ereksi</li>
            </ul>
            <h3><strong>2. Faktor psikologis</strong></h3>
            <p>Jika pada pria yang sudah lanjut usia, penurunan fungsi organ tubuh menjadi penyebab paling besar pada kasus disfungsi ereksi. Namun, pada pria yang masih berusia muda kebanyakan disebabkan oleh faktor psikologis, seperti stres atau cemas.</p>
            <p>Stres atau depresi bisa menurunkan libido atau gairah seksual yang menyebabkan kesulitan untuk mendapatkan atau mempertahankan ereksi. Selain itu, masalah pada hubungan dengan pasangan juga turut andil dalam menciptakan emosi yang nggak seimbang sehingga menjadi penyebab penurunan gairah seksual.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/alasan-gairah-seksual-bisa-menurun/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/alasan-gairah-seksual-bisa-menurun.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">Hati-Hati! Ini Alasan Kenapa Gairah Seksual Bisa Menurun</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Gairah seksual seseorang bisa saja menurun karena banyak faktor, mulai dari fisik hingga psikis. Penurunan gairah seksual tentu akan menjadi masalah bagi keharmonisan rumah tangga. Namun, apa sajakah penyebabnya?', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h2><b>Gaya Hidup Menjadi Pemicu Disfungsi Ereksi di Masa Muda</b></h2>
            <p>Faktor psikis bukan menjadi satu-satunya penyebab disfungsi ereksi di masa muda. Gaya hidup juga menyumbang faktor penyebab disfungsi ereksi. Gaya hidup yang nggak sehat menjadi hal yang tampak sepele namun memberikan dampak cukup besar terhadap gangguan kesehatan seksual.</p>
            <h3><strong>1. Merokok </strong></h3>
            <p>Hal yang sering dan umum dilakukan para pria di Indonesia, apalagi merokok sejak remaja. Hal itu memang terlihat biasa, tapi diam-diam menjadi tabungan masalah di kemudian hari, terutama untuk organ vital pria.</p>
            <h3><strong>2. Minuman beralkohol</strong></h3>
            <p>Konsumsi minuman beralkohol secara berlebihan juga berpengaruh pada kesehatan seksual. Alkohol bisa mengurangi aliran darah ke penis dan menghambatnya mengeras secara optimal. Minuman beralkohol memang bisa membuat rileks, namun jika pada porsi yang cukup. Tapi, jika berlebihan dalam mengonsumsinya maka akan menimbulkan masalah.</p>
            <h3><strong>3. Kelelahan psikis</strong></h3>
            <p>Banyaknya kegiatan yang dilakukan atau beban selama pandemi bisa menyebabkan sesorang kelelahan secara fisik dan mental sehingga dapat mengakibatkan seseorang mengalami stres. Ketika stres, kadar kortisol dalam tubuh akan meningkat dan memblokir efek testosteron yang sangat berpengaruh terhadap seksualitas pria.</p>
            <h3><strong>4. Obesitas</strong></h3>
            <p>Gaya hidup yang nggak memperhatikan asupan gizi dan lemak seimbang akan menyebabkan tubuh kelebihan lemak dan menjadi obesitas. Kegemukan dinilai memiliki kadar testosteron yang rendah dan mempengaruhi pengerasan pembuluh darah sehingga pria kesulitan untuk mendapatkan ereksi.</p>
            <p>Jika kamu mengalami gangguan ereksi berkali-kali, maka sebaiknya segera berkonsultasi dengan dokter untuk mendapatkan penanganannya. Kamu juga bisa berkonsultasi dengan aman dan terjamin kerahasiaannya di norm.id dan mendapatkan solusi secara medis dari dokter ahli tanpa perlu dating ke klinik atau rumah sakit. Cukup lewat ponsel, kamu sudah bisa berkonsultasi dan mendapatkan solusi <a href="' . base_url() . 'ed/" style="text-decoration: underline;">disfungsi ereksi</a> secara mudah dan praktis.</p>
            <p>Bersamaan dengan itu, kamu juga wajib mengubah gaya hidup lebih sehat dan memperhatikan pola makan serta olahraga teratur untuk menjaga aliran darah tetap normal. Jaga pikiran untuk tetap positif dan rileks serta mencukupi kebutuhan istirahat kamu.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = '3 Masalah Rambut yang Paling Sering Dialami Pria';
        $blog->category = 'Hair Loss';
        $blog->date = '1 October 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/masalah-rambut-yang-paling-sering-dialami-pria.jpg';
        $blog->url_name = 'masalah-rambut-yang-paling-sering-dialami-pria';
        $blog->subtitle = "Pria dan permasalahan rambut yang sering dialami. Ada 3 masalah yang sering banget dialami pria.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Jika wanita mengalami rambut rontok akibat hormone atau styling rambut yang berlebihan, maka penyebab rambut rontok pada pria akan berbeda. Namun, bukan cuma rontok aja masalah rambut yang dialami pria, beberapa masalah rambut lain juga sering dialami dan nggak bisa disepelekan meski nggak berbahaya.</p>
                </i>
            </div>

            <p>Setiap orang pasti pernah mengalami masalah pada rambut. Namun, masalah pada rambut pria berbeda dengan wanita, begitu pula dengan penyebabnya.</p>
            <p>Seringkali pria mengalami masalah pada rambut namun mengabaikannya dan menganggap sepele masalah tersebut. Mengatasi rambut bermasalah nggak cukup kalau hanya dirawat dengan shampoo saja karena rambut juga butuh nutrisi dan vitamin ekstra, baik dari luar maupun dalam tubuh.</p>
            <h2><b>Masalah Rambut Pria Paling Sering Dialami</b></h2>
            <p>Pria cenderung memiliki masalah rambut yang disebabkan oleh hormon dihidrotestosteron (DHT) yang berlebihan. Hormon DHT diproduksi oleh testosteron yang mana kadarnya lebih banyak terdapat pada pria dibanding wanita.</p>
            <p>Beberapa permasalahan rambut pria di antaranya adalah:</p>
            <h3><strong>1. Kebotakan</strong></h3>
            <p>Kebotakan seringnya menjadi masalah yang cukup menakutkan bagi sebagian besar pria karena bisa menurunkan tingkat kepercayaan diri. Kebotakan biasanya terjadi pada usia 50 tahun ke atas, namun nggak sedikit juga yang mengalami kebotakan di usia muda atau yang sering disebut dengan kebotakan dini.</p>
            <p>Faktor yang menyebabkan kebotakan bisa karena penuaan atau hormonal dari hormon DHT dan sirkulasi darah yang kurang baik ke kulit kepala dan rambut. Faktor genetik juga bisa menjadi pemicu kebotakan.</p>
            <p>Jangan lupakan makanan yang masuk ke tubuhmu juga memberikan pengaruh terhadap masalah rambut. Nutrisi yang tepat untuk rambut bisa membantu menguatkan rambut dan tentunya menjadikan rambut lebih sehat.</p>
            <h3><strong>2. Penipisan rambut</strong></h3>
            <p>Rambut menipis merupakan bagian dari pertambahan usia dan pria juga berpotensi mengalami penipisan rambut lebih cepat dari wanita. Penipisan rambut berkaitan era dengan hormon androgen, hormon yang memengaruhi proses tubuh pada masa pubertas dan juga pertumbuhan rambut.</p>
            <p>Kadar hormon DHT yang tinggi bisa menyebabkan siklus rambut menjadi bermasalah sehingga rambut bisa menjadi tipis karena pertumbuhannya terhambat.</p>
            <p>Siklus rambut terdiri dari 3 fase, yaitu :</p>
            <ul>
                <li style="margin-bottom: 7.5px;">
                    <div><b>Fase Anagen</b></div>
                    <div>Setiap folikel mendukung pertumbuhan satu rambut sedikit di bawah setengah inci per bulan selama sekitar 2 hingga 6 tahun.</div>
                </li>
                <li style="margin-bottom: 7.5px;">
                    <div><b>Fase Katagen</b></div>
                    <div>Folikel akhirnya mengerut dan memotong rambut dari suplai darah di bawahnya, mendorong rambut keluar secara permanen.</div>
                </li>
                <li>
                    <div><b>Fase Telogen</b></div>
                    <div>Folikel menghabiskan beberapa bulan untuk beristirahat dan akhirnya menghasilkan rambut baru.</div>
                </li>
            </ul>
            <p>Saat rambut terjadi penipisan, pada fase telogen, siklus rambut seharusnya berlanjut ke anagen namun terhenti atau lambat sehingga pertumbuhan rambut baru menjadi terkendala dan rambut menjadi tipis.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/cara-merawat-rambut-tipis-pada-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/rambut-tipis.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Hair Loss</div>
                            <div class="title">Cara Merawat Rambut Tipis Pada Pria</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Penipisan rambut membuat pria khawatir dan mampu menurunkan kepercayaan diri. Banyak faktor yang menjadi penyebab penipisan rambut. Namun, rambut tipis masih tetap bisa diatasi dan dirawat.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h3><strong>3. Rambut rontok</strong></h3>
            <p>Masalah rambut rontok menjadi masalah yang paling sering dialami pria. Jika kamu merasa rambut mengalami kerontokan, jangan khawatir dulu. Rambut rontok merupakan hal yang wajar selama masih berada pada batas normal, yaitu antara 50 – 100 helai per hari. Rambut rontok bisa terjadi saat kamu menyisir rambut, saat keramas, bahkan saat tidur.</p>
            <p>Rambut rontok bisa disebabkan oleh berbagai hal, di antaranya adalah homron DHT yang berlebihan, stres, hingga konsumsi makanan yang kurang sehat semacam fast food. Mulai beralih ke pola hidup sehat dengan konsumsi makanan yang penuh vitamin dan nutrisi serta olahraga teratur.</p>
            <h2><b>Solusi untuk Mengatasi Masalah Rambut</b></h2>
            <p>Ketika kamu mengalami masalah rambut di atas, nggak perlu khawatir. Kamu bisa mengatasinya dengan beberapa hal berikut yang pastinya mudah untuk dilakukan.</p>
            <h3><strong>1. Mengatur pola makan</strong></h3>
            <p>Percaya atau nggak, pola makan bisa memengaruhi kondisi kesehatan kamu. Jika kamu terlalu sering mengonsumsi <i>fast food</i> maka tubuhmu akan mengalami gangguan kesehatan karena <i>fast food</i> merupakan makanan yang mengandung tinggi lemak.</p>
            <p>Mulai ubah pola makan secara teratur 3x sehari yang diselingi dengan camilan sehat. Jangan lupa untuk memasukkan sayur dan buah pada menu diet harian kamu untuk memenuhi nutrisi yang dibutuhkan tubuh, terutama rambut.</p>
            <h3><strong>2. Rutin olahraga</strong></h3>
            <p>Olahraga bisa meningkatkan fungsi otak, menjaga kesehatan tubuh, dan pastinya menjaga aliran darah bekerja dengan lancar. Bila sebelumnya kamu nggak rutin berolahraga, maka mulai dari sekarang kamu harus rutin untuk olahraga.</p>
            <p>Lakukan olahraga tiap pagi, setidaknya 30 menit. Kamu bisa melakukannya sebelum memulai aktivitas sambil berjemur pagi. Kamu dapat memilih olahraga rigan seperti jalan kaki atau lari. Selain itu, kamu juga bisa melakukan yoga atau meditasi.</p>
            <h3><strong>3. Hindari begadang</strong></h3>
            <p>Nah, para pria nih sering banget melakukan kegiatan satu ini, apalagi jika sudah ada agenda yang berkaitan dengan hobi yang mengharuskan begadang, pasti akan dilakukannya. Kita tahu bahwa tubuh sudah memiliki jam biologis yang harus dipenuhi porsinya setiap hari.</p>
            <p>Jika kamu sering begadang, maka tubuh pasti akan mengalami gangguan. Porsi tidur umumnya 7 – 8 jam sehari. Apabila tubuh kurang istirahat maka akan kelelahan dan memicu gangguan pada kesehatan, seperti serangan jantung, kegemukan, hingga masalah pada kulit dan rambut. Atur pola tidur sebaik mungkin dan cukupi kebutuhan istirahat secukupnya.</p>
            <h3><strong>4. Perawatan rambut rontok</strong></h3>
            <p>Masalah rambut seperti rontok dan penipisan rambut harus diatasi sesegera mungkin untuk mencegah kebotakan terjadi. Norm menawarkan rangkaian produk perawatan rambut rontok, <a href="' . base_url() . 'rambut-rontok/complete-kit/" style="text-decoration: underline;">Complete Hair Loss Kit</a> yang bekerja efektif menghentikan kerontokan dan merangsang pertumbuhan rambut sehingga penyebab rambut rontok dapat diatasi.</p>
            <p>Gunakan perawatan secara rutin selama 3 bulan untuk mendapatkan hasil yang maksimal. Lakukan perawatan secara konsisten. Jika kamu nggak melakukan perawatan secara konsisten maka obat nggak akan bekerja maksimal dan pastinya hasil yang kamu inginkan nggak akan tercapai. Maka, lakukan perawatan dengan konsisten dan teratur sesuai petunjuk.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Makna Letak Jerawat Pada Wajah Pria';
        $blog->category = 'Acne';
        $blog->date = '29 September 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/makna-letak-jerawat-pada-pria.jpg';
        $blog->url_name = 'makna-letak-jerawat-pada-pria';
        $blog->subtitle = "Siapa bilang jerawat nggak punya arti. Letak jerawat pada wajah bisa menunjukkan kondisi kesehatan kamu. Cek letak jerawat di wajahmu dan cocokkan dengan penjelasan berikut.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Jerawat merupakan hal biasa yang terjadi pada setiap orang. Adanya jerawat pada wajah bisa disebabkan karena kotoran dan sebum yang menyumbat pori-pori kulit dan menimbulkan peradangan dan membengkak.</p>
                    <p>Munculnya jerawat pada wajah ternyata nggak cuma karena kurangnya kebersihan kulit saja. Tapi, juga karena menunjukkan kondisi kesehatan pada bagian dalam tubuhmu.</p>
                </i>
            </div>

            <p>Jerawat merupakan masalah yang sering dialami banyak orang, baik pria maupun wanita. Jerawat bukan hanya disebabkan karena wajah yang kurang terjaga kebersihannya, tapi bisa juga karena ada yang nggak beres dengan tubuhmu.</p>
            <p>Jerawat pada wajah juga menimbulkan kemerahan dan nyeri jika disentuh. Selain itu, kamu juga nggak boleh sembarangan memencet jerawat karena ternyata letak jerawat bisa menunjukkan arti kesehatan kamu.</p>
            <h2><b>Letak Jerawat di Wajah dan Artinya</b></h2>
            <p>Ketika mengalami wajah berjerawat, sebaiknya jangan dibiasakan untuk memencetnya karena dapat memperparah kondisi jerawat itu sendiri. Jerawat di wajah juga bisa menunjukkan kondisi kesehatanmu sesuai letaknya. Berikut ulasannya:</p>
            <h3><strong>1. Jerawat di dahi dan sekitar garis rambut</strong></h3>
            <p>Jerawat yang muncul pada wajah bagian dahi dan garis rambut bisa terjadi jika kamu sering menggunakan penutup kepala atau topi. Jerawat pada garis kepala juga bisa jadi karena shampoo yang kamu gunakan nggak cocok atau saat membilasnya kurang bersih sehingga residu shampoo menumpuk dan menghambat pori-pori kulit kepala.</p>
            <p>Nah, jerawat pada dahi dan garis rambut ini juga menandakan ada masalah dengan pencernaan kamu. Perbanyak konsumsi sayur dan buah serta kurangi makanan yang mengandung lemak tinggi, seperti <i>fast food</i>. Konsumsi air mineral secara teratur dan memenuhi kebutuhan harian.</p>
            <h3><strong>2. Jerawat di hidung</strong></h3>
            <p>Apakah kamu sering mengalami jerawat di wajah bagian hidung? Jika iya berarti kamu harus meninjau kembali pola hidup dan makanan yang dikonsumsi karena jerawat di hidung berkaitan dengan masalah kesehatan jantung. Bisa juga karena kamu sering mengonsumsi daging dan makanan pedas.</p>
            <p>Mulai kurangi konsumsi daging dan makanan pedas. Makan dengan porsi secukupnya dan mulai rutin berolahraga serta menerapkan pola hidup sehat.</p>
            <h3><strong>3. Jerawat di dagu</strong></h3>
            <p>Jerawat yang muncul di dagu dan rahang terkait dengan masalah ketidakseimbangan hormon. Hormon yang nggak seimbang memang hal yang susah untuk dihindari. Tapi, kamu tetap bisa mengatasi jerawat di area dagu dan rahang dengan mudah. Cukup penuhi kebutuhan istirahat yang cukup dan konsumsi air putih, buah, serta sayur. Tentunya kamu juga harus menjaga kebersihan kulit wajah.</p>
            <h3><strong>4. Jerawat di pipi</strong></h3>
            <p>Area pipi sepertinya menjadi area yang paling sering berjerawat dan dialami oleh banyak orang. Area pipi berhubungan dengan sistem pernapasan. Jerawat di pipi juga bisa mengindikasikan sistem pernapasanmu kurang sehat karena terlalu sering mengirup polusi udara atau merokok.</p>
            <p>Penggunaan ponsel yang kotor dan sarung bantal yang jarang diganti juga menjadi penyebab timbulnya jerawat di pipi. Maka, kamu harus rajin membersihkan ponsel dengan tisu khusus untuk menghilangkan bakteri dan ganti sarung bantal dua minggu sekali agar kotoran dan sel kulit mati pada bantal nggak menempel di kulit wajahmu.</p>
            <p>Lakukan olahraga tiap pagi antara pukul 7 – 9 pagi. Pada jam tersebut udara pagi masih segar sehingga sangat baik untuk paru-paru. Jika kamu berpergian atau menggunakan motor, sebaiknya selalu gunakan masker untuk melindungi wajah dan saluran pernafasanmu dari debu dan polusi.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/polusi-udara-bisa-merusak-kesehatan-kulit-lho/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/asap-polusi-udara.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Acne</div>
                            <div class="title">Polusi Udara Bisa Merusak Kesehatan Kulit, lho. Ini Buktinya!</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Baru-baru ini Jakarta menjadi kota dengan tingkat udara terburuk di dunia. Sebesar 70% polusi udara tersebut disumbang oleh kendaraan bermotor.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h3><strong>5. Jerawat di antara alis</strong></h3>
            <p>Pernahkah mengalami jerawat yang terletak di antara kedua alis? Jerawat pada area tersebut bukan hanya karena kurangnya kebersihan kulit wajah saja. Tapi, juga menunjukkan adanya masalah pada organ hati.</p>
            <p>Selain itu, jerawat di antara kedua alis juga merupakan zona alergi makanan. Intoleransi laktosa merupakan faktor pemicu makanan yang sulit dicerna.</p>
            <p>Cara untuk mengatasinya adalah dengan menghentikan kebiasaan begadang dan tidur cukup. Hindari juga minuman beralkohol, susu, atau makanan yang banyak mengandung lemak, seperti makanan cepat saji. Seimbangkan dengan rutin olahraga dan perbanyak makan sayur dan buah.</p>
            <p>Mengatasi jerawat sebaiknya dilakukan secara konsisten untuk mendapatkan hasil yang optimal. Pengobatan dari dalam wajib banget kamu lakukan. Selain bisa membantu mengatasi jerawat, juga memberikan tambahan gizi serta menyehatkan tubuh.</p>
            <p>Pengobatan dari luar bisa kamu jalani dengan rangkaian <a href="' . base_url() . 'jerawat/" style="text-decoration: underline;">Essential Acne Kit</a> yang mengandung formula khusus dan disesuaikan dengan kondisi kulit kamu sehingga bukan hanya bekerja mengatasi jerawat saja tapi juga memperbaiki tekstur kulit dan menjaga kelembabanya.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Hati-Hati! Ini Alasan Kenapa Gairah Seksual Bisa Menurun';
        $blog->category = 'Sex';
        $blog->date = '28 September 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/alasan-gairah-seksual-bisa-menurun.jpg';
        $blog->url_name = 'alasan-gairah-seksual-bisa-menurun';
        $blog->subtitle = "Gairah seksual seseorang bisa saja menurun karena banyak faktor, mulai dari fisik hingga psikis. Penurunan gairah seksual tentu akan menjadi masalah bagi keharmonisan rumah tangga. Namun, apa sajakah penyebabnya?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Hubungan seksual merupakan kebutuhan manusia. Namun, nggak selamanya hubungan seksual bisa berjalan mulus tanpa kendala. Salah satu kendala yang dihadapi adalah penurunan gairah seksual sehingga kepuasan sulit dicapai.</p>
                    <p>Penurunan gairah seksual juga bukan hanya dialami oleh wanita saja, tapi juga pria, terutama jika sudah mengalami pertambahan usia. Tapi, penurunan gairah seksual pada pria bukan hanya karena faktor usia, tapi juga fisik dan psikis.</p>
                </i>
            </div>

            <p>Melakukan hubungan seksual merupakan kebutuhan manusia. Apalagi bagi mereka yang sudah menikah, hubungan seksual menjadi rutinitas yang sering dilakukan dan membuat hubungan makin mesra.</p>
            <p>Rutinitas seksual setiap orang tentunya berbeda sesuai dengan kondisi masing-masing. Hubungan seksual juga bisa memberikan manfaat bagi tubuh, baik fisik maupun mental.</p>
            <p>Tapi, dalam hubungan seksual juga nggak selamanya berjalan mulus karena gangguan pasti ada saja yang muncul. Kadang seseorang bisa merasa jenuh dan mengalami penurunan gairah (libido) sehingga aktivitas seksual pun terganggu.</p>
            <h2><b>Penyebab Gairah Seksual Menurun</b></h2>
            <p>Bukan hanya wanita, gairah seksual pria pun bisa menurun kapan saja. Nggak bisa dipungkiri, kadang ada rasa jenuh, hilang minat, atau rasa enggan yang bisa disebabkan oleh berbagai hal yang mungkin salah satunya dipengaruhi oleh kondisi psikis seseorang.</p>
            <p>Norm merangkum beberapa penyebab yang menjadi pemicu turunnya gairah seksual pria. Berikut ulasannya!</p>
            <h3><strong>1. Hubungan yang bermasalah</strong></h3>
            <p>Keharmonisan rumah tangga juga menjadi salah satu faktor dari kondisi gairah seksual seorang pria. Jika kamu mengalami penurunan gairah seksual, maka kamu perlu dipertimbangkan lagi apakah kamu sudah bahagia dalam hubungan bersama pasangan atau sedang bermasalah.</p>
            <p>Beberapa masalah dalam sebuah hubungan biasanya meliputi:</p>
            <ul>
                <li>Komunikasi yang buruk</li>
                <li>Rendahnya kepercayaan di antara keduanya</li>
                <li>Menurunnya ketertarikan seksual</li>
            </ul>
            <p>Serta berbagai jenis masalah lainnya di dalam sebuah hubungan. Jika kamu mengalami hal ini dan ke dokter maka kamu akan disarankan untuk konseling. Kamu juga bisa mulai membuka diri bersama pasangan untuk saling jujur dan percaya serta memperbaiki pola komunikasi. Kunci utama dari keberhasilan sebuah hubungan adalah komunikasi yang baik di antara keduanya.</p>
            <p>Cobalah untuk saling terbuka dan katakan pada pasangan jika ada masalah atau sesuatu yang kurang dalam hubungan itu. Kamu juga bisa untuk liburan berdua bersama pasangan, lho.</p>
            <h3><strong>2. Depresi</strong></h3>
            <p>Depresi adalah hal yang berbeda dengan kepenatan atau jenuh dengan hal-hal di kehidupan sehari-hari. Saat seseorang mengalami depresi, biasanya akan kehilangan minat terhadap banyak hal, termasuk pada hal yang sebelumnya sangat diminati. Depresi juga berimbas pada kehidupan seksual seseorang.</p>
            <p>Melansir dari <i>Mayo Clinic</i>, gejala yang menunjukkan bahwa seseorang sedang mengalami depresi, di antaranya yaitu</p>
            <ul>
                <li>Perasaan sedih, menangis, hampa atau putus asa</li>
                <li>Ledakan amarah, mudah tersinggung atau frustrasi, bahkan karena hal-hal kecil</li>
                <li>Kehilangan minat atau kesenangan dalam sebagian besar atau semua aktivitas normal, seperti seks, hobi, atau olahraga</li>
                <li>Gangguan tidur, termasuk insomnia atau terlalu banyak tidur</li>
                <li>Kelelahan dan kekurangan energi, sehingga tugas-tugas kecil membutuhkan usaha ekstra</li>
                <li>Mengurangi nafsu makan dan penurunan berat badan atau meningkatnya keinginan untuk makan dan berat badan</li>
            </ul>
            <p>Jadi, depresi nggak bisa disepelekan karena bisa berakibat pada banyak hal, baik kehidupan sehari-hari, kesehatan, maupun fisik seseorang.</p>
            <h3><strong>3. Pertambahan usia</strong></h3>
            <p>Saat usia seseorang bertambah, mereka nggak bisa dihindarkan dari penurunan gairah seksual. Beberapa hal yang dapat memengaruhi penurunan gairah seksual saat pertambahan usia adalah: </p>
            <ul>
                <li>Kadar hormon seks yang lebih rendah dibanding usia produktif</li>
                <li>Masalah kesehatan</li>
                <li>Efek samping konsumsi obat-obatan tertentu</li>
            </ul>
            <h3><strong>4. Disfungsi ereksi</strong></h3>
            <p>Gangguan seksual juga bisa menyebabkan gairah seksual pria menurun. Disfungsi ereksi sendiri adalah kondisi ketidakmampuan pria untuk mendapatkan atau mempertahankan ereksi saat mendapatkan rangsangan seksual.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/memahami-faktor-risiko-dan-penyebab-disfungsi-ereksi/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/rokok-penyebab-disfungsi-ereksi.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">Memahami Faktor Risiko dan Penyebab Disfungsi Ereksi</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Masalah seksual merupakan topik yang masih sulit atau memalukan untuk dibicarakan secara terbuka, terutama bagi seorang pria di masa puncak hidupnya.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <p>Masalah fisik tersebut bisa membuat hubungan seksual terganggu dan sulit dipenuhi sehingga bisa menciptakan masalah lainnya juga, seperti gangguan keharmonisan dalam rumah tangga dan sebagainya.</p>
            <h2><b>Solusi Kembalikan Gairah Seksual Pria</b></h2>
            <p>Penurunan gairah seksual harus segera diatasi supaya nggak berlarut-larut. Cara mengembalikan gairah seksual juga beragam dan kamu pun bisa rutin menjalani terapinya. Pemulihannya juga bisa dibantu dengan pasangan, misal dengan pasangan menggunakan lingerie untuk membangkitkan gairah seksualmu.</p>
            <p>Beberapa cara berikut bisa dilakukan untuk mengembalikan gairah seksual pria, yaitu:</p>
            <h3><strong>1. Olahraga</strong></h3>
            <p>Hal paling sederhana dan mudah yang dapat dilakukan adalah olahraga. Jika sebelumnya kamu belum rutin berolahraga, maka mulai sekarang harus mengubah gaya hidup menjadi lebih sehat. Kamu bisa mulai dari olahraga ringan, seperti jalan kaki pagi hari atau lari. Olahraga bisa memperlancar aliran darah, termasuk aliran darah ke alat genital.</p>
            <p>Selain itu juga, kamu harus mengatur pola makan teratur dengan gizi seimbang. Jangan lupa juga untuk mengelola stres dengan benar.</p>
            <h3><strong>2. Mengonsumsi afrodiasiak</strong></h3>
            <p>Afrodiasiak adalah istilah yang berasal dari nama <i>Aphrodite</i>, dewi Yunani lambang kecantikan dan seksualitas. Afrodiasiak merupakan makanan atau minuman yang dipercaya dapat meningkatkan gairah seksual.</p>
            <p>Afrodiasiak di antaranya adalah apel, maca, cabai, teh hijau, cokelat, hingga kacang-kacangan yang mempunyai manfaat dalam meningkatkan gairah seksual.</p>
            <h3><strong>3. Atasi secara klinis</strong></h3>
            <p>Jika kamu mengalami gangguan yang menyebabkan gairah seksual menurun, seperti <a href="' . base_url() . 'ed/sildenafil/" style="text-decoration: underline;">disfungsi ereksi</a> atasi secara klinis dengan Norm. Norm memberikan kemudahan untuk berkonsultasi dengan dokter. Kamu nggak perlu mengantri dan hanya lewat ponsel saja, produk bisa sampai di tanganmu.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Fakta Tentang Jerawat yang Sering Dianggap Mitos';
        $blog->category = 'Acne';
        $blog->date = '24 September 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/fakta-tentang-jerawat.jpg';
        $blog->url_name = 'fakta-tentang-jerawat';
        $blog->subtitle = "Masalah jerawat sering menimbulkan mitos yang simpang siur kebenarannya. Ada yang dianggap fakta padahal hanya mitos belaka. Tapi, nggak sedikit juga yang sebenarnya fakta tapi dianggap mitos.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Jerawat adalah hal umum yang sering dialami oleh banyak orang. Berbagai hal bisa menjadi faktornya dan nggak sedikit juga cara yang dilakukan untuk mengatasinya. Tapi, nggak jarang juga mitos tentang jerawat dipercaya masyarakat. Nah, kalau fakta yang sering dianggap mitos sudah kah kamu tahu?</p>
                </i>
            </div>

            <p>Kemunculan jerawat sering menjadi bahan pertanyaan setiap orang. Apalagi jika jerawat yang muncul nggak cuma satu atau dua, tapi hampir memenuhi beberapa bagian wajah. Hal itu tentu bikin kamu jadi bertanya-tanya kenapa jerawat muncul begitu banyak di wajah, padahal usiamu bukan remaja lagi atau mungkin kamu sudah melakukan banyak hal untuk mengatasi jerawat pada wajah.</p>
            <p>Jerawat memang hal yang umum dialami setiap orang. Namun, hal itu tetap menjadi masalah yang mengganggu, baik penampilan maupun kepercayaan diri seseorang.</p>
            <p>Jerawat timbul karena adanya peradangan pada kulit yang disebabkan oleh kotoran dan minyak yang menumpuk lalu menyumbat pori-pori kulit. Penyebabnya berbagai macam, mulai dari faktor dari dalam tubuh hingga faktor dari luar tubuh.</p>
            <h2><b>Mitos dan Fakta Tentang Jerawat</b></h2>
            <p>Mungkin kamu sudah nggak asing dengan banyaknya asumsi tentang jerawat di kalangan masyarakat. Asumsi masyarakat nggak jarang jadi mitos yang dipercaya, seperti cuci muka sesering mungkin untuk menghindari jerawat, jangan makan cokelat agar wajah nggak jerawatan, sampai menggunakan pasta gigi untuk mengempiskan jerawat.</p>
            <p>Jangan sampai salah, beberapa hal yang kelihatannya seperti mitos justru sebetulnya fakta dan bisa juga sebaliknya, terlihat benar tapi ternyata hanya mitos belaka.</p>
            <p>Berikut beberapa fakta tentang jerawat yang sering dianggap mitos:</p>
            <h3><strong>1. Jangan terlalu sering cuci muka</strong></h3>
            <p>Selama ini banyak orang yang menganggap jarang cuci muka justru akan menimbulkan jerawat. Padahal cuci muka terlalu sering juga nggak menjamin wajah bebas jerawat.</p>
            <p>Faktanya adalah terlalu sering cuci muka justru akan mengurangi kadar sebum pada wajah sehingga kulit menjadi kering dan mudah menimbulkan jerawat.</p>
            <p>Sebaiknya cuci wajah sehari 2x saja untuk menjaga wajah tetap bersih dan bebas sumbatan pada pori-pori kulit.</p>
            <p>Kamu juga bisa menggunakan masker satu sampai dua kali seminggu yang disesuaikan dengan kondisi kulit. Tapi, jika wajah kamu sedang berjerawat parah, jangan menggunakan masker terlebih dahulu agar jerawat nggak makin memburuk.</p>
            <h3><b>2. Stres bisa memicu jerawat</b></h3>
            <p>Nggak sedikit orang yang menyangkal bahwa stres bisa menimbulkan jerawat. Saat stres, tubuh biasanya akan memproduksi sebum secara berlebihan. Sebum akan bercampur dengan kotoran dan sel kulit mati yang menyumbat folikel rambut sehingga menimbulkan komedo dan jerawat.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/mengenal-sebum-penyebab-jerawat-pada-pria/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/penyebab-jerawat-pria-1.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Acne</div>
                            <div class="title">Mengenal Sebum Penyebab Jerawat Pada Wajah Pria</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Wajah berminyak bikin kulit terlihat mengkilap dan jadi gampang jerawatan. Minyak pada wajah sebetulnya punya peran penting untuk menjaga kelembaban. Tapi, kalau produksinya berlebihan, justru menimbulkan masalah. Jadi sebetulnya minyak di wajah itu apa sih?', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <h3><strong>3. Jerawat bisa dialami oleh semua usia</strong></h3>
            <p>Banyak yang beranggapan jika jerawat hanya akan dialami oleh mereka yang masih berada di masa pubertas. Namun, kenyataannya jerawat bisa datang kapan saja bahkan di saat usia dewasa.</p>
            <p>Jerawat memang hal umum yang bisa terjadi kapan saja tanpa memandang usia. Faktor penyebab jerawat di masa dewasa biasanya dari gaya hidup yang nggak sehat, pola makan yang nggak tepat, hingga stres.</p>
            <p>Nggak jarang juga pria mengalami jerawat di masa dewasa karena kurangnya menjaga kebersihan dan kesehatan wajah.</p>
            <h3><strong>4. Makanan memengaruhi jerawat</strong></h3>
            <p>Makanan dianggap mitos penyebab jerawat. Padahal makanan yang masuk ke tubuh sangat berpengaruh terhadap kemunculan jerawat.</p>
            <p>Makanan yang sering disalahkan sebagai penyebab jerawat, salah satunya adalah cokelat. Cokelat dianggap membawa pengaruh buruk bagi kesehatan kulit wajah. Melansir dari <i>halodoc.com</i>, faktanya adalah kandungan cokelat sangat baik untuk kesehatan kulit, terutama dark chocolate. Cokelat mengandung antioksidan dua kali lebih banyak dibandingkan buah anggur dan tiga kali lebih banyak daripada teh hijau. Cokelat bisa berpengaruh terhadap kenaikan kalori pada tubuh namun nggak memengaruhi timbulnya jerawat.</p>
            <p>Kita tahu bahwa antioksidan sangat dibutuhkan tubuh, terutama kulit untuk menangkal radikal bebas penyebab kulit kusam, menjadikan kulit lebih kenyal, dan sehat.</p>
            <h3><strong>5. Wajah berjerawat butuh pelembab</strong></h3>
            <p>Pria dengan wajah berjerawat cenderung memiliki kulit yang berminyak. Produksi minyak yang berlebih pada wajah menjadikan beberapa pria menjadi enggan untuk menggunakan pelembab wajah karena menganggap wajah berjerawat dan berminyak nggak perlu menggunakan pelembab agar kulit nggak makin berminyak.</p>
            <p>Bagaimana pun wajah tetap butuh pelembab agar kelembaban kulit terjaga. Kulit yang lembab akan memiliki kadar air yang cukup di dalam kulit sehingga mengurangi kemungkinan produksi minyak berlebih dan jerawat.</p>
            <p>Jika kamu menganggap atau pernah menggunakan pelembab namun wajah makin berminyak, berarti pelembab yang kamu gunakan nggak tepat. Waktunya beralih ke <a href="' . base_url() . 'jerawat/" style="text-decoration: underline;">Essential Acne Kit</a> yang pelembabnya diformulasi khusus sesuai kondisi kulitmu sehingga nggak menimbulkan minyak berlebih atau kulit kering.</p>
            <p>Pernyataan-pernyataan tersebut sering dipercaya sebagai mitos. Padahal hal itu justru fakta yang benar tentang jerawat. Hal paling essential dari perawatan wajah adalah menjaga kebersihan wajah dengan rutin cuci wajah sehari 2x dan menggunakan pelembab tiap pagi dan malam hari agar wajah selalu sehat dan segar serta bebas jerawat.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Waspadai 3 Hal ini Sebagai Tanda Penuaan Dini Pada Rambut Pria';
        $blog->category = 'Hair Loss';
        $blog->date = '22 September 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tanda-penuaan-dini-pada-rambut.jpg';
        $blog->url_name = 'tanda-penuaan-dini-pada-rambut';
        $blog->subtitle = "Penuaan dini bukan hanya dialami oleh kulit saja, tapi juga rambut. Ubanan menjadi salah satu tanda yang kerap dianggap sebagai penuaan, padahal penuaan dini bukan hanya ditandai dengan ubanan saja, tapi juga hal yang umum terjadi, yaitu penipisan rambut.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Penuaan bisa terjadi pada siapa saja, termasuk pria yang masih muda. Faktor yang menyebabkan terjadinya penuaan juga beragam, baik faktor internal maupun eksternal tubuh.</p>
                    <p>Tapi, penuaan terjadi bukan hanya pada kulit saja, tapi juga rambut. Tanda penuaannya sendiri juga dialami hampir sebagian besar orang, yaitu penipisan rambut, rambut kering dan rapuh.</p>
                </i>
            </div>

            <p>Seiring bertambahnya usia, penuaan merupakan hal yang lumrah terjadi pada sebagian besar orang. Penuaan juga bukan hanya soal kulit, tapi juga rambut.</p>
            <p>Mungkin selama ini, kebanyakan orang, terutama pria, menganggap penuaan dini hanya terjadi pada kulit saja. Padahal penuaan juga bisa terjadi pada bagian tubuh lain, termasuk rambut.</p>
            <p>Jika kamu menebak tanda penuaan pada rambut adalah uban, maka kamu harus mempelajari lebih lanjut melalui artikel ini tentang penuaan pada rambut pria. Tanda penuaan dini pada rambut bukan hanya uban. Berikut beberapa tanda penuaan dini yang perlu kamu ketahui.</p>
            <h2><b>Tanda Penuaan Dini Pada Rambut Pria</b></h2>
            <p>Penuaan pada rambut pria bukan hanya munculnya uban saja karena faktor yang menentukan rambut beruban pada masa muda bukan hanya karena gaya hidup yang nggak sehat tapi bisa juga karena keturunan.</p>
            <p>Berikut beberapa tanda penuaan pada rambut pria yang wajib kamu ketahui untuk mendapatkan pencegahan atau pengobatan yang sesuai.</p>
            <h3><strong>1. Rambut Kering</strong></h3>
            <p>Rambut kering menjadi salah satu tanda penuaan dini. Saat mengalami penuaan, rambut akan semakin kering. Hal itu terjadi karena menyusutnya kelenjar minyak pada kulit kepala sehingga kadar minyak pada rambut pun menurun dan nggak mengaliri folikel rambut secara efisien.</p>
            <p>Selain itu, menurunnya kadar minyak pada kelenjar rambut juga bisa disebabkan oleh <i>styling</i> rambut yang berlebihan, seperti pewarnaan rambut, menggunakan pengering rambut dengan suhu tinggi, dan tidak menggunakan produk perawatan rambut yang tepat.</p>
            <h3><strong>2. Rambut Rapuh</strong></h3>
            <p>Rambut rapuh bisa terjadi karena berbagai faktor, di antaranya adalah pewarnaan rambut dan kurangnya vitamin rambut. Namun, secara alami semakin bertambahnya usia seseorang, maka elastisitas rambut pun berkurang.</p>
            <p>Rambut yang rapuh juga disebabkan karena kondisi rambut yang kering sehingga mudah patah dan kehilangan elastisitasnya. Kondisi tersebut juga akan semakin parah jika ditambah dengan penggunaan zat kimia yang keras dan berlebihan.</p>
            <h3><strong>3. Penipisan Rambut</strong></h3>
            <p>Penipisan rambut yang berujung pada kebotakan dini merupakan tanda penuaan dini yang paling menyita perhatian. Gimana nggak, saat usia masih muda tapi rambut sudah tipis dan parahnya botak di beberapa bagian, tentunya akan menurunkan kepercayaan diri.</p>
            <p>Sebetulnya rambut rontok adalah hal yang wajar dialami pria. Porsi harian kerontokan rambut yang normal adalah sekitar 100 helai. Namun, hal yang menjadi masalah adalah jika kerontokan rambut terjadi lebih dari 100 helai dan menimbulkan penipisan rambut. Hal itu menjadi salah satu tanda penuaan dini pada rambut pria.</p>
            <h2><b>Cara Mengatasi Penuaan Dini Pada Rambut Pria</b></h2>
            <p>Siapa pun pasti enggan jika rambutnya mengalami masalah, terlebih penuaan dini. Kondisi yang sangat mengganggu penampilan dan kesehatan rambut.</p>
            <p>Penuaan pada rambut harus segera diatasi sebelum terlambat dan nggak menimbulkan masalah yang lebih parah lagi.</p>
            <p>Hal yang harus dilakukan untuk mengatasi rambut rontok dari luar adalah dengan mengurangi pemakaian alat <i>styling</i> dan pewarnaan rambut. Kamu juga bisa melakukan perawatan rambut dengan menggunakan produk yang tepat, terutama untuk mengatasi masalah penipisan dan kerontokan rambut.</p>
            <p>Gunakan perawatan rambut rontok secara konsisten dan efektif agar masalah rambut dapat diatasi dengan benar. Selain menggunakan shampoo khusus rambut rontok, kamu juga disarankan untuk menggunakan <a href="' . base_url() . 'hairloss/minoxidil/" style="text-decoration: underline;">hair tonic</a> yang bekerja merangsang pertumbuhan rambut dan menghentikan kerontokan sehingga rambut bisa kembali tebal dan bebas rontok.</p>
            <p>Selain itu, dukung perawatan rambut dengan olahraga teratur yang dilakukan secara rutin, seperti jalan kaki setiap pagi selama 30 menit atau lari pagi. Kamu juga harus memperhatikan asupan makanan yang dikonsumsi untuk memenuhi kebutuhan vitamin yang diperlukan rambut agar senantiasa sehat.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/5-makanan-ini-berkhasiat-mengatasi-rambut-rontok/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/lima-makanan-mengatasi-rambut-rontok-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Hair Loss</div>
                            <div class="title">5 Makanan Ini Berkhasiat Mengatasi Rambut Rontok</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Rambut rontok kerap jadi masalah yang dihadapi para pria. Makanya, perlu banget untuk mengatasi rambut rontok. Perawatan bukan cuma dari luar, tapi juga dari dalam, seperti memenuhi kebutuhan nutrisinya.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <p>Menjaga kesehatan rambut juga menjadi bagian penting dalam rangka menjaga kesehatan tubuh. Kamu bisa mengatasi tanda penuaan dini dengan produk perawatan rambut yang sesuai dan pola hidup sehat serta gizi yang cukup dan seimbang.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Tisu Magic Bukan Solusi Ejakulasi Dini. Kenali Fakta dan Efek Sampingnya!';
        $blog->category = 'Sex';
        $blog->date = '21 September 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tisu-magic-bukan-solusi-ejakulasi-dini.jpg';
        $blog->url_name = 'tisu-magic-bukan-solusi-ejakulasi-dini';
        $blog->subtitle = "Masih banyak pria yang menggunakan tisu magic untuk mendapatkan ereksi lebih tahan lama. Parahnya lagi, nggak sedikit yang percaya bahwa tisu magic juga bisa membantu mengatasi ejakulasi dini. Padahal tisu tersebut adalah tisu antiseptic yang punya efek samping berbahaya untuk penggunanya.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Sudah sejak lama tisu magic dijual bebas di pasaran dan digunakan para pria dewasa untuk membantu mendapatkan ereksi lebih lama dan mendapatkan kepuasan seksual. Nggak hanya itu, tisu basah satu ini juga digadang-gadang sebagai solusi ejakulasi dini.</p>
                    <p>Tapi, nyatanya nggak sedikit pengguna tisu magic yang mendapatkan efek samping buruk terkait penggunaan produk tersebut. Selain itu, belum ada penelitian secara medis yang menyebutkan keamanan dan keabsahan tisu tersebut untuk mengtasi ejakulasi dini.</p>
                </i>
            </div>

            <p>Tisu magic merupakan tisu basah yang sudah dikenal di kalangan pria dewasa. Benda ini diklaim mampu mengatasi ejakulasi dini dan membuat ereksi lebih lama.</p>
            <p>Pernyataan tersebut dipercayai hampir sebagian besar pria sehingga nggak sedikit yang menggunakannya untuk mendapatkan kepuasan seksual dan mengatasi gangguan ejakulasi.</p>
            <p>Sebaiknya jangan sembarangan menggunakan tisu magic, terlebih jika kamu mendapatkan opini dari orang di sekitar yang menggunakannya. Hal itu karena kondisi genital seseorang berbeda-beda. Apalagi jika penggunaannya berlebihan, tentu akan memberikan efek samping yang nggak main-main.</p>
            <p>Kenali lebih jauh tentang tisu magic dan efek sampingnya, terutama jika kamu mempercayai pernyataan bahwa ejakulasi dini dapat disembuhkan dengan tisu magic. Ini fakta sebenarnya!</p>
            <h2><b>Tisu Magic = Tisu Antiseptic?</b></h2>
            <p>Mungkin banyak pria yang belum memahami betul bahwa tisu magic mengandung efek antiseptic yang juga terdapat pada hand sanitizer atau tisu antiseptic umum.</p>
            <p>Ada baiknya kamu mengetahui dan memahami kandungan tisu magic apakah tisu magic terbukti ampuh dalam mengatasi ejakulasi dini. Adapun kandungan yang tertera pada kemasannya adalah sebagai berikut :
                <ul>
                    <li><strong>Ethyl alcohol atau Etanol</strong></li>
                    <li><strong>Polyethylene oxide</strong></li>
                    <li><strong>Benzalkonium chloride</strong></li>
                    <li><strong>Parfum</strong></li>
                </ul>
            </p>

            <p>Beberapa jenis tisu magic memili kandungan tambahan berupa ektrak lidah buaya, <i>triclosan</i>, dan <i>cocamidopropyl betaine</i>.</p>
            <p>Mari kita bahas beberapa kandungan pada tisu magic :</p>
            <h3><strong>1. <i>Ethyl alcohol</i> atau <i>Etanol</i></strong></h3>
            <p>Etanol (C2H5OH) merupakan salah satu jenis alkohol yang juga digunakan sebagai desinfektan untuk membersihkan luka atau mencegah terjadinya infeksi. Sedangkan pada industri digunakan sebagai zat pelarut non-polar (zat yang tidak larut dalam air).</p>
            <h3><strong>2. <i>Benzalkonium chloride</i></strong></h3>
            <p>Benzalkonium cloride termasuk adalah zat ammonium yang masuk ke dalam golongan antiseptic dan desinfektan pada produk shampoo atau sabun. Zat ini bekerja menghentikan pertumbuhan bakteri, virus, dan jamur pada tubuh.</p>
            <h3><strong>3. Triclosan</strong></h3>
            <p>Triclosan merupakan zat yang terkandung pada produk-produk deterjen, sabun mandi, hingga pembersih alat medis rumah sakit yang bersifat anti-bakteri dan anti-jamur. Meski termasuk ke dalam golongan antibakteri, keampuhan triclosan masih menjadi kontroversi sebagai anti-mikroba.</p>
            <p>Penggunaan triclosan juga dikatakan dapat mengganggu perkembangan hormon dan memicu resistensi atau adaptasi bakteri pada zat ini sehingga triclosan nggak bisa membunuh bakteri.</p>
            <p>Berdasarkan kandungan-kandungan tersebut bisa ditarik kesimpulan bahwa sebagian besar kandungannya adalah golongan antiseptic yang berfungsi membunuh bakteri.</p>
            <h2><b>Apakah Penggunaan Tisu Magic Aman?</b></h2>
            <p>Belum ada penelitian yang mengesahkan bahwa tisu magic aman digunakan. Tisu magic ini mengandung beberapa zat yang memberikan efek samping merugikan bagi tubuh.</p>
            <p>Alkohol yang terkandung di dalam tisu dikenal sebagai pembunuh kuman tapi dapat menimbulkan iritasi pada kulit, serta rasa perih dan menyengat.</p>
            <p>Kandungan <i>Benzalkonium chloride</i> juga memberikan efek samping yang bisa membuat penis mati rasa karena merupakan anestesi lokal. Zat ini memang membuat ereksi lebih tahan lama karena menghambat inisiasi dan konduksi impuls saraf. Nah, kinerja zat inilah yang membuat penis mati rasa. Parahnya, jika kamu menggunakan zat ini pada penis, ketika berhubungan dengan pasangan tanpa menggunakan kondom, area genital pasangan pun akan menjadi mati rasa pula sehingga kamu dan pasangan nggak bisa menikmati hubungan seksual dengan maksimal.</p>
            <p>Triclosan juga membuat kulit rentan mengalami kerusakan karena alergi dan iritasi. Seperti yang Sudha disebutkan sebelumnya bahwa triclosan bisa memicu resistensi bakteri sehingga bakteri kebal terhadap antibiotik.</p>
            <p>Parfum yang ada di dalam tisu magic juga bisa terserap ke dalam kulit dan saat kamu menghirup aromanya. Parfum juga diketahui dapat menjadi salah satu penyebab munculnya gejala dermatitis kontak, yaitu peradangan berupa ruam gatal kemerahan pada kulit.</p>
            <h2><b>Tisu Magic Bukan Solusi untuk Ejakulasi Dini</b></h2>
            <p>Meski banyak yang sudah membahas tentang penggunaan tisu magic untuk mengatasi ejakulasi dini dan nggak sedikit juga pria yang mempercayai bahwa tisu magic dapat membantu mengatasi ejakulasi dini karena membuat ereksi tahan lama.</p>
            <p>Seperti yang sudah disebutkan di atas bahwa ereksi tahan lama yang ditimbulkan dari penggunaan tisu magic tidaklah terjadi secara aman karena dapat menimbulkan kerusakan saraf.</p>
            <p>Selain itu belum ada penelitian medis yang menyatakan tisu magic untuk mengatasi ejakulasi dini secara aman. Tisu magic pun dapat menyebabkan ketergantungan dan tentunya akan menimbulkan efek samping yang lebih buruk lagi.</p>
            <p>Jika mengalami masalah ejakulasi dini, sebaiknya periksakan diri ke dokter agar mendapat penanganan yang aman. Kamu juga bisa berkonsultasi dengan dokter Norm yang ahli di bidangnya. Kamu bisa mendapatkan solusi untuk mengatasi ejakulasi dini dengan aman dan privasimu juga terjaga. <a href="' . base_url() . 'questionaire/pe/start/" style="text-decoration: underline;">Konsultasi sekarang juga!</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/penyebab-dan-cara-mengatasi-ejakulasi-dini/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/cara-mengatasi-ejakulasi-dini-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Sex</div>
                            <div class="title">Penyebab dan Cara Mengatasi Ejakulasi Dini</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Ejakulasi dini merupakan hal yang bisa saja terjadi pada setiap orang. Faktornya pun bermacam-macam. Tapi, hal tersebut masih bisa diatasi.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <p>Kamu juga bisa melakukan pola hidup sehat untuk membantu meminimalisir potensi ejakulasi dini. Gaya hidup sehat bisa dimulai dengan memperhatikan asupan gizi yang masuk ke dalam tubuh, olahraga, mengelola stres, dan menghentikan kebiasaan merokok.</p>
            <p>Jangan ambil risiko untuk mengatasi ejakulasi dini dengan cara yang nggak aman. Mulai beralih ke yang aman dan direkomendasikan dokter.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Apakah Masturbasi Sebabkan Jerawat Pada Pria?';
        $blog->category = 'Acne';
        $blog->date = '17 September 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/masturbasi-sebabkan-jerawat-pada-pria.jpg';
        $blog->url_name = 'masturbasi-sebabkan-jerawat-pada-pria';
        $blog->subtitle = "Banyak mitos yang beredar bahwa masturbasi bisa menyebabkan jerawat. Mitos terjadi karena kemunculan jerawat yang hampir bersamaan waktu dengan pria melakukan masturbasi. Namun, apakah mitos tersebut benar adanya?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Masturbasi dan jerawat. Dua hal yang sering dikaitkan sebab akibatnya. Pria beranggapan bahwa masturbasi menjadi penyebab munculnya jerawat.</p>
                    <p>Jerawat adalah kondisi yang terjadi karena adanya peradangan pada pori-pori kulit akibat penumpukan kotoran, minyak, dan debu yang nggak dibersihkan secara maskimal. Kadar minyak pada wajah juga disebabkan oleh peningkatan hormon seksual pria. Saat masturbasi, kadar hormon juga meningkat. Lalu apakah benar masturbasi adalah penyebab jerawat?</p>
                </i>
            </div>

            <p>Masih banyak orang, terutama pria yang percaya bahwa masturbasi bisa menyebabkan jerawat. Apalagi pada remaja yang sedang memasuki masa pubertas.</p>
            <p>Jerawat pada pria memang dipengaruhi oleh hormon seksual, yaitu hormon testosteron. Tapi, apakah benar mitos yang beredar bahwa masturbasi bisa menyebabkan jerawat pada pria?</p>
            <h2><b>Apakah Masturbasi Menyebabkan Jerawat?</b></h2>
            <p>Anggapan soal masturbasi bisa menyebabkan jerawat memang menjadi mitos umum yang dipercaya hampir sebagian besar pria. Pada beberapa kasus, pria mengalami wajah berjerawat di sekitar waktu yang bersamaan dengan masturbasi. Hal itu menjadi sebuah persepsi bahwa masturbasi dapat menyebabkan jerawat.</p>
            <p>Pada masa pubertas, perubahan hormon bisa menyebabkan tubuh memproduksi minyak secara berlebih yang dapat menimbulkan jerawat. Nah, pada masa pubertas ini juga, nggak sedikit pria yang melakukan masturbasi sehingga menjadi pemicu kepercayaan terhadap mitos tersebut.</p>
            <p>Melansir dari <i>Medical News Today</i>, meski masturbasi dapat menyebabkan perubahan kadar hormon pada tubuh, namun perubahannya juga sangat kecil. Saat pria melakukan masturbasi, kadar testosteron meningkat dan akan kembali normal setelah ejakulasi.</p>
            <p>Pada remaja, peningkatan kadar hormon testosteron bisa menyebabkan naiknya sebum atau minyak pada pori-pori kulit, termasuk wajah. Hal inilah yang menjadi penyebab munculnya jerawat pada remaja.</p>
            <p>Sedangkan pada pria dewasa, jerawat bisa saja terjadi, bukan hanya saat pubertas karena banyak faktor yang memengaruhi. Jadi, nggak peduli pria sering melakukan masturbasi, sudah melakukan hubungan seksual atau belum, jerawat pasti akan tetap muncul kapan saja.</p>
            <h2><b>Penyebab Jerawat Pada Pria</b></h2>
            <p>Seperti diketahui bahwa jerawat muncul saat terjadi perdangan pada pori-pori kulit akibat kotoran, minyak, dan debu yang menumpuk. Tapi, faktor yang menyebabkan jerawat juga beragam, bukan hanya satu sebab saja.</p>
            <p>Ada kalanya juga tubuh mengalami fase gagal membuang sel kulit mati sehingga sel kulit mati tersebut menumpuk di sela-sela pori-pori sehingga menimbulkan jerawat, komedo, hingga flek hitam pada wajah. Kondisi tersebut tentunya menjadi masalah dan bisa membuat kepercayaan diri pemilik wajah menjadi menurun.</p>
            <p>Maka, kamu perlu mengetahui penyebab jerawat secara mendalam agar bisa melakukan pencegahan atau penanganan jerawat yang ada pada wajah.</p>
            <p>Beberapa hal berikut menjadi penyebab munculnya jerawat pada pria:</p>
            <p>
                1. Kurangnya merawat kebersihan wajah<br>
                2. Stres yang nggak dikelola dengan baik<br>
                3. Aktivitas di luar ruangan<br>
                4. Makanan yang dikonsumsi
            </p>
            <p>Selain itu, ada juga hal-hal sepele yang biasa dilakukan setiap hari yang menjadi faktor penyumbang munculnya jerawat pada kulit wajah, seperti penggunaan ponsel yang jarang dibersihkan.</p>

            <div style="width: 480px; max-width: 100%; margin: 30px auto;">
                <a href="' . base_url() . 'code/4-hal-sepele-ini-ternyata-jadi-penyebab-jerawat-di-pipi/">
                    <div class="display-flex width-full">
                        <div class="related-blog-image">
                            <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/penyebab-jerawat-di-pipi-pria.jpg);"></div>
                        </div>
                        <div class="related-blog-content">
                            <div class="category">Acne</div>
                            <div class="title">4 Hal Sepele Ini Ternyata Jadi Penyebab Jerawat di Pipi</div>
                            <div class="margin-top-15px subtitle">' . character_limiter('Sering dianggap sepele, beberapa hal yang sering dilakukan sehari-hari ini ternyata berpotensi menyebabkan jerawat di pipi.', 75) . '</div>
                        </div>
                    </div>
                </a>
            </div>

            <p>Hal utama yang bisa kamu lakukan untuk merawat jerawat adalah menjaga kebersihannya dengan rutin membersihkan wajah dan menggunakan produk yang sesuai dengan kondisi kulitmu.</p>
            <p>Selama ini kebanyakan pria cenderung menggunakan produk untuk merawat kulit berjerawat tanpa peduli dengan kesesuaian produk terhadap kondisi kulit. Padahal perawatan wajah yang tepat bisa membantu mengatasi jerawat dengan efektif, seperti <a href="' . base_url() . 'jerawat/" style="text-decoration: underline;">Essential Acne Kit</a> yang diformulasi khusus untuk menyesuaikan kondisi kulitmu.</p>
            <p>Nggak cuma jerawat aja yang diatasi, tapi juga menjaga kesehatan kulit serta memperbaiki tekstur kulit yang juga cenderung bermasalah saat mengalami jerawat.</p>
            <h2><b>Lalu Bagaimana Hubungan Antara Masturbasi dengan Jerawat Pada Pria?</b></h2>
            <p>Masturbasi nggak menyebabkan jerawat.</p>
            <p>Perubahan hormon dapat menyebabkan timbulnya jerawat. Masturbasi juga dapat menyebabkan perubahan kadar hormon, tetapi hal itu bisa kembali normal setelah ejakulasi.</p>
            <p>Perubahan hormon saat masturbasi sangat minim dan nggak berkontribusi pada perkembangan jerawat.</p>
            <p>Masturbasi dan timbulnya jerawat bisa terjadi pada waktu yang hampir bersamaan. Keduanya biasanya terjadi selama masa pubertas. Hal inilah yang mungkin menjadi sumber kebingungan dan mitos bahwa masturbasi menyebabkan jerawat.</p>
            <p>Jadi, bagi pria yang sudah nggak berada pada masa pubertas, sebaiknya pahami penyebab jerawat dan rutin menjaga kebersihan dan kesehatan wajah secara konsisten karena jerawat bisa muncul kapan saja dengan berbagai penyebab.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Bersepeda Bisa Sebabkan Disfungsi Ereksi Bagi Pria. Mitos atau Fakta?';
        $blog->category = 'Sex';
        $blog->date = '16 September 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/bersepeda-menyebabkan-disfungsi-ereksi.jpg';
        $blog->url_name = 'bersepeda-menyebabkan-disfungsi-ereksi';
        $blog->subtitle = "Bersepeda kini sedang menjadi tren di kalangan masyarakat Indonesia, baik tua maupun muda, pria atau wanita. Meski bersepeda itu menyehatkan, tapi ternyata bisa menimbulkan masalah gangguan kesehatan seksual pada pria, seperti disfungsi ereksi.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Sejak pandemi kehidupan masyarakat kini menjadi lebih sehat, salah satunya adalah rutin berolahraga atau tepatnya bersepeda. Bersepeda merupakan salah satu olahraga yang mudah dan menyenangkan serta menyehatkan sehingga sering menjadi pilihan.</p>
                    <p>Namun, siapa sangka di balik sehatnya bersepeda ternyata ada bahaya yang mengintai, khususnya bagi pria karena dapat menyebabkan gangguan kesehatan seksual, seperti disfungsi ereksi.</p>
                </i>
            </div>

            <p>Kegiatan bersepeda kini sedang menjadi tren olahraga yang banyak dilakukan orang, baik mereka yang masih muda maupun tua, pria dan wanita. Bersepeda memang salah satu kegiatan olahraga yang mudah dan dapat dilakukan bersama anggota keluarga sambil menikmati udara segar.</p>
            <p>Sayangnya kegiatan bersepeda juga dianggap bisa menimbulkan efek negatif, terutama bagi pria. Banyak yang menganggap bersepeda bisa menyebabkan pria mengalami gangguan kesehatan seksual seperti disfungsi ereksi. Kondisi ini menyebabkan penis kesulitan untuk mendapatkan atau mempertahankan ereksi.</p>
            <h2><b>Bersepeda Dapat Menyebabkan Disfungsi Ereksi</b></h2>
            <p>Bersepeda dengan frekuensi yang terbilang tinggi dalam seminggu memiliki kemungkinan besar untuk menjadi penyebab gangguan kesehatan seksual pria, seperti disfungsi ereksi.</p>
            <p>Melansir dari laman <a href="https://www.alodokter.com/" target="_blank"><i>alodokter.com</i></a>, secara medis anggapan tersebut benar adanya, namun tidak bersifat permanen. Ketika seseorang duduk, normalnya berat tubuh akan dibebankan pada tulang duduk (<i>tuberositas iskia</i>) yang hanya dikelilingi lemak dan otot-otot saja, tidak ada organ, saraf, atau arteri.</p>
            <p>Namun, sebagian besar pengendara sepeda justru membebankan berat tubuh pada jok atau sadel sepeda yang nggak cukup lebar untuk menopang tulang duduk. Beban tersebut diberikan kepada area yang terletak di sekitar samping perineum. Area tersebut berbentuk kanal sepanjang <i>ischiopubic rami</i> atau struktur penghubung antara tulang duduk dengan tulang kemaluan.</p>
            <p>Nah, pada area itu terdapat jaringan ereksi, arteri, dan saraf yang terhubung ke penis. Jika duduk terlalu lama pada pedal sepeda yang keras bisa menyebabkan tekanan yang dapat merusak arteri dan saraf yang berperan penting dalam proses ereksi.</p>
            <p>Gejala yang bisa kamu rasakan ketika arteri dan saraf yang rusak adalah munculnya sensasi mati rasa atau kesemutan pada organ intim. Selain itu, akibat yang dirasakan adalah gangguan yang disebut dengan <i>pudendal nerve entrapment (PNE)</i> atau <i>Alcock canal syndrome</i>, yaitu nyeri kronis karena saraf pudendal terjepit. Saraf pudendal adalah saraf besar yang berfungsi sebagai pengirim sinyal dari organ genital ke otak.</p>
            <p>Risiko tersebut bisa muncul dan lebih tinggi jika kamu melakukan kegiatan bersepeda dalam waktu yang lama, lebih dari tiga jam tiap minggunya.</p>
            <h2><b>Tips Bersepeda dengan Aman</b></h2>
            <p>Meski memiliki risiko disfungsi ereksi, tapi kamu masih tetap bisa melakukan kegiatan bersepeda dengan aman jika sesuai dengan porsi dan nggak berlebihan.</p>
            <p>Beberapa cara berikut bisa diterapkan untuk mendapatkan kenyamanan dalam bersepeda dan meminimalisir gangguan kesehatan seksual.</p>
            <h3><strong>1. Pilih sadel yang nyaman</strong></h3>
            <p>Saat memilih sepeda sebaiknya pilih yang memiliki sadel nyaman dan nggak menimbulkan tekanan. Kamu bisa berkonsultasi dengan professional yang memahami sadel bagus. Sadel yang nyaman nggak melulu mahal karena yang terpenting nyaman dan menopang duduk dengan baik.</p>
            <h3><strong>2. Pilih sadel jenis <i>“no-nose”</i> atau <i>“split-nose”</i></strong></h3>
            <p>Sadel jenis ini memiliki dudukan yang lebar sehingga mengurangi penekanan pada penis. Setelah itu, pasang sadel dengan posisi condong ke depan dan atur ketinggian sadel sesuai dengan kenyamanan kamu supaya nggak mengganggu pergerakan saat mengayuh sepeda.</p>
            <h3><strong>3. Selingi dengan berdiri pada pedal</strong></h3>
            <p>Saat mengayuh sepeda, terutama untuk jarak yang jauh, jangan duduk pada sadel terus menerus. Tapi, selingi dengan berdiri pada pedal, misalnya saat jalanan menurun atau setelah mengayuh dengan kuat. Posisi ini bisa memperbaiki aliran darah ke bagian genital.</p>
            <h3><strong>4. Jangan terlalu lama bersepeda</strong></h3>
            <p>Atur waktu untuk berhenti dan lakukan peregangan. Jangan lebih dari 3 jam setiap minggunya. Kamu juga bisa mencoba olahraga lain yang nggak mengakibatkan tekanan pada genital, seperti berenang atau berlari.</p>
            <h3><strong>5. Gunakan celana khusus pesepeda</strong></h3>
            <p>Pesepeda yang sudah sering melakukan tur dengan sepeda atau intesitas tinggi, biasanya akan menggunakan celana khusus yang memiliki bantalan pada bagian duduknya untuk mendapatkan perlindungan ekstra dan meminimalisir tekanan.</p>
            <p>Faktor penyebab disfungsi ereksi sebetulnya beragam, namun salah satunya adalah terlalu sering bersepeda dengan intensitas yang tinggi. Jika kamu mengalami gejala atau gangguan yang mengindikasikan disfungsi ereksi, kamu harus segera menemui dokter yang ahli di bidangnya untuk mendapatkan solusinya. Kamu bisa melakukan konsultasi langsung dengan dokter Andrologi Norm melalui <a href="' . base_url() . 'ed/" style="text-decoration: underline;">tautan ini</a> untuk mendapatkan solusi secara aman dan praktis.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Benarkah Pria Lebih Rentan Alami Kebotakan?';
        $blog->category = 'Hair Loss';
        $blog->date = '1 September 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/pria-rentan-alami-kebotakan.jpg';
        $blog->url_name = 'benarkah-pria-lebih-rentan-alami-kebotakan';
        $blog->subtitle = "Pria lebih rentan mengalami kebotakan dibanding wanita. Benarkah pernyataan tersebut? Apakah hal yang menyebabkan pria lebih rentan mengalami kebotakan dibanding wanita?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Kebotakan bukan hanya terjadi pada mereka yang sudah berada pada usia 50 tahun ke atas tapi juga yang masih berusia 20 – 30 tahun. Dibandingkan wanita, pria lebih rentan mengalami masalah rambut rontok yang dapat berujung pada kebotakan. Hal itu disebabkan oleh banyak hal, salah satunya adalah produksi hormon DHT yang berlebihan. Bagaimana hormon DHT bisa memicu kebotakan pada pria dan apa saja cara untuk mengatasinya?</p>
                </i>
            </div>

            <p>Rambut rontok yang berujung pada kebotakan merupakan hal yang lumrah dialami sebagian orang, baik pria maupun wanita. Namun, dibanding wanita, pria yang mengalami rambut rontok dan kebotakan cenderung lebih banyak.</p>
            <p>Masalah kebotakan umumnya dialami oleh pria dengan usia 50 tahun ke atas. Tapi, masalah rambut rontok juga dialami hampir semua kalangan umur, termasuk yang masih berusia 20 tahun. Pada usia tersebut, ada sebagian pria yang juga mengalami kebotakan atau yang biasa disebut dengan kebotakan dini.</p>
            <h2><b>Penyebab Kebotakan Dini</b></h2>
            <p>Rambut yang rontok sebanyak 50 – 100 helai per hari masih dikatakan normal karena nggak menyebabkan kebotakan. Rambut memiliki siklus yang terbagi menjadi tiga fase, yaitu fase pertumbuhan (anagen), fase peralihan (katagen), dan fase istirahat (telogen).</p>
            <p>Pada siklus tersebut rambut mengalami tahap tumbuh dan rontok sesuai dengan fasenya. Nah, hal yang dapat menyebabkan kebotakan dini adalah ketika salah satu fase tersebut terganggu dan rambut menegalami kerontokan yang berlebihan dan folikel rambut menjadi kecil sehingga rambut menajdi berhenti tumbuh.</p>
            <p>Melansir dari <a href="https://www.mayoclinic.org/diseases-conditions/hair-loss/symptoms-causes/syc-20372926" target="_blank">Mayoclinic</a> penyebab kebotakan dini sangat beragam, beberapa di antaranya</p>
            <h3><strong>1. Faktor Genetik</strong></h3>
            <p>Faktor genetik memberikan sumbangsih seseorang mengalami kebotakan dan sebagai faktor yang paling sering ditemui. Faktor tersebut tentunya sudah menjadi warisan dari keluarga. Kamu bisa melihatnya dari orang tua. Apakah mereka mengalami kebotakan atau tidak. Hal itu biasanya juga akan dialami oleh kamu nantinya.</p>
            <h3><strong>2. Perubahan Hormon</strong></h3>
            <p>Pria memiliki porsi hormon androgen lebih banyak daripada wanita. Hormon tersebut sebagai pemicu hormon dihidrotestosteron (DHT) yang dapat menyebabkan rambut rontok. jika hormon tersebut diproduksi secara berlebihan, tentunya akan menyebabkan kerontokan rambut yang parah dan bisa berujung pada kebotakan.</p>
            <h3><strong>3. Kondisi Medis Tertentu</strong></h3>
            <p>Efek samping dari kemoterapi atau obat-obatan tertentu bisa menyebabkan rambut rontok. radiasi dari terapi juga bisa menjadi penyebabnya.</p>
            <h3><strong>4. Stres</strong></h3>
            <p>Stres merupakan hal yang nggak bisa dihindari siapa pun. Stres yang nggak dikelola dengan baik bisa menyebabkan rambut menjadi rontok. Kamu pasti nggak mau kan stres bikin kamu jadi botak? Makanya, kamu harus mengelola stres dengan baik, ya.</p>
            <h2><b>Pria Lebih Rentan Alami Kebotakan</b></h2>
            <p>Seperti yang diungkapkan sebelumnya tentang penyebab kebotakan dini, pria memang cenderung lebih rentan mengalami kebotakan. Hal itu salah satunya dipicu oleh hormon yang berada pada tubuh pria.</p>
            <p>Pada pria dan wanita hormon androgen memiliki fungsi yang berbeda. Hormon androgen pada pria memiliki peran dalam masa pubertas, mempengaruhi suara, dan menjaga kesehatan reproduksi pria.</p>
            <p>Hormon testosteron merupakan salah satu jenis hormon androgen. Pada pria, hormon testosteron lebih tinggi. Maka, hormon dihidrotestosteron(DHT) yang berasal dari testosterone juga akan tinggi. Hormon dihidrotestosteron (DHT) merupakan hormon yang memengaruhi pertumbuhan rambut.</p>
            <p>Inilah yang menyebabkan pria lebih rentan mengalami rambut rontok dan kebotakan daripada wanita.</p>
            <p>Pria memiliki kadar testosteron yang lebih banyak di dalam tubuhnya. Sekitar 10 persen dari testosteron akan dikonversi menjadi DHT oleh enzim yang disebut <i>5-alpha reductase (5-AR)</i>.</p>
            <p>Hormon DHT inilah yang jika kadarnya berlebihan akan menyebabkan rambut rontok yang dapat mengakibatkan kebotakan. Selain itu, kdar DHT yang tinggi pada tubuh juga dapat memperlambat penyembuhan kulit setelah cedera, kanker prostat, hingga penyakit jantung coroner.</p>
            <h2><b>Apakah Kebotakan Dini Bisa Diatasi?</b></h2>
            <p>Jawabannya tentu bisa. Kebotakan dini bisa menurunkan tingkat kepercayaan diri dan bisa berpengaruh ke dalam produktivitas sehari-hari serta hubungan sosial. Maka dari itu, kamu bisa mengatasi kebotakan dini sebelum bertambah luas dengan beberapa hal berikut :</p>
            <h3><strong>1. Menerapkan Gaya Hidup Sehat</strong></h3>
            <p>Hal pertama yang bisa kamu lakukan adalah menerapkan gaya hidup sehat. Mulai dari rutin berolahraga, mencukupi jam tidur, serta mengelola stres dengan baik.</p>
            <h3><strong>2. Memenuhi Nutrisi Rambut</strong></h3>
            <p>Jika selama ini belum teratur mengonsumsi makanan sehat, maka mulai skearang kamu harus mengatur pola makan sehat. Penuhi kebutuhan gizi harian kamu, terutama nutrisi yang dibutuhkan rambut untuk memicu pertumbuhannya.</p>
            <h3><strong>3. Konsumsi Obat Tertentu</strong></h3>
            <p>Kamu bisa mengatasi rambut rontok dengan mengonsumsi Finasteride. Kapsul yang bekerja efektif menghambat hormon dihidrotestosteron yang menyebabkan rambut rontok. kamu bisa mendapatkan obat tersebut melalui konsultasi dengan dokter ahli.</p>
            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/finasteride-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Mau tumbuh rambut? Yup, ada pill nya lho!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Finasteride</a>
                        </div>
                    </div>
                </div>
            </div>
            <p>Selain itu kamu juga bisa melengkapi perawatan rambut rontok untuk mengatasi atau mencegah kebotakan dengan perawatan dari luar. Kamu bisa menggunakan shampoo khusus yang mampu mengurangi kadar DHT serta tonic yang berfungsi merangsang pertumbuhan rambut baru.</p>

        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Bagaimana Cara Kerja Sildenafil atau Viagra?';
        $blog->category = 'Sex';
        $blog->date = '28 August 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/pesawat-lepas-landas.jpg';
        $blog->url_name = 'bagaimana-cara-kerja-sildenafil-atau-viagra';
        $blog->subtitle = "Sildenafil adalah bahan aktif dalam viagra yang dapat membantu pria dalam mengatasi disfungsi ereksi sehingga dapat mempertahankan ereksi ketika mendapatkan rangsangan";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Sildenafil (atau yang sering disebut obat viagra) adalah obat yang paling umum digunakan untuk mengatasi disfungsi ereksi. Sildenafil adalah bahan aktif dalam Viagra yang dapat membantu pria yang terkena disfungsi ereksi untuk mendapatkan dan mempertahankan ereksi ketika terangsang. Ereksi pada pria bisa terjadi dengan adanya stimulus seksual yang dapat berupa stimulus visual atau rangsangan langsung. Disfungsi ereksi dapat terjadi ketika enzim fosfodiesterase tipe 5 (PDE5) menghentikan jumlah darah yang cukup dari mengalir ke korpus kavernosum ketika kamu terangsang. Oleh karena itu, sildenafil sering digunakan sebagai perawatan yang mampu mengatasi disfungsi ereksi guys. Sildenafil bekerja dengan menghambat enzim yang bertanggung jawab membuat darah mengalir keluar dari penis ketika kamu terangsang secara seksual. Secara khusus, sildenafil menghambat enzim PDE5.</p>
                </i>
            </div>

            <p>Tidak bisa dipungkiri Sildenafil (atau yang sering disebut obat viagra) adalah obat yang paling umum digunakan untuk mengatasi disfungsi ereksi. Sildenafil adalah bahan aktif dalam Viagra yang dapat membantu pria yang terkena disfungsi ereksi untuk mendapatkan dan mempertahankan ereksi ketika terangsang.</p>
            <p>Meskipun sildenafil tampak seperti tombol “on/off” untuk penis kamu, proses pengobatannya cukup rumit. Berikut kami jelaskan mengenai Sildenafil yang bekerja untuk mengatasi disfungsi ereksi, serta proses yang dilalui tubuh kamu untuk mendapatkan dan mempertahankan ereksi selama aktivitas seksual.</p>
            <h2><b>Bagaimana Ereksi Bisa Terjadi?</b></h2>
            <p>Ereksi pada pria bisa terjadi dengan adanya stimulus seksual yang dapat berupa stimulus visual atau rangsangan langsung.</p>
            <p>Secara fisik, ereksi merupakan bagian dari proses biologis panjang yang dimulai dari otak. Prosesnya melibatkan banyak hal dari otak hingga tulang belakang, vena, paru-paru, dan jaringan ereksi penis.</p>
            <p>Ketika kamu dirangsang secara seksual, otak kamu mengirimkan sinyal ke saraf penis. Setelah saraf penis menerima sinyal tersebut, mereka melepaskan <i>oksida nitrat</i> yang melemaskan <i>korpus kavernosum</i>. <i>Korpus kavernosum</i> adalah jaringan yang berada di sepanjang batang penis yang dapat diisi dengan darah untuk memberi kamu ereksi.</p>
            <p>Setelah <i>korpus kavernosum</i> dipenuhi dengan darah, sebuah lapisan berserat yang disebut <i>tunica albuginea</i> mengencang di sekitar jaringan ereksi. Ini membantu menjaga darah di penis dan menghasilkan ereksi.</p>
            <p>Proses ini berlanjut selama kamu terangsang, dengan darah di dalam <i>korpus kavernosum</i> dan penis kamu dalam keadaan ereksi yang kuat.</p>
            <p>Setelah kamu mengalami orgasme dan ejakulasi, tubuh mulai membalikkan proses ini. Tubuhmu mulai melepaskan sejumlah besar hormon stress yang memperlambat aliran darah ke <i>korpus kavernosum</i>.</p>
            <p>Pada saat yang sama, <i>tunica albuginea</i> yang mengontrol aliran darah keluar dari penis menjadi rileks dan membiarkan darah mengalir kembali dari penis kamu.</p>
            <p>Nah guys, disfungsi ereksi dapat terjadi ketika enzim fosfodiesterase tipe 5 (PDE5) menghentikan jumlah darah yang cukup dari mengalir ke <i>korpus kavernosum</i> ketika kamu terangsang. Oleh karena itu, sildenafil sering digunakan sebagai perawatan yang mampu mengatasi disfungsi ereksi guys.</p>
            <h2><b>Bagaimana Sildenafil Bekerja?</b></h2>
            <p>Sildenafil bekerja dengan menghambat enzim yang bertanggung jawab membuat darah mengalir keluar dari penis ketika kamu terangsang secara seksual. Secara khusus, sildenafil menghambat enzim PDE5. Dengan menghambat enzim tersebut, sildenafil memudahkan aliran darah ke penis dan memungkinkanmu untuk mendapatkan kenikmatan saat berhubungan seks. Selain itu, sildenafil juga mengurangi risiko darah mengalir keluar dari penis saat berhubungan seks. Dengan meningkatkanya aliran darah pada penis, maka ereksi bisa bertahan lama.</p>
            <p>Dengan dosis yang tepat, sildenafil sangat efektif sehingga mampu membantu pria dari segala usia. Jika kamu mengalami disfungsi ereksi dan ingin coba sildenafil, jangan lupa untuk konsultasi dengan dokter terlebih dahulu.</p>
            <p>Kamu bisa berkonsultasi melalui <a href="https://norm.id/">norm.id</a> dengan aman dan mudah. Dokter dapat meninjau kondisi kamu dan menentukan perawatan terbaik. Selamat mencoba dan semoga berhasil!</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Cara Merawat Rambut Tipis Pada Pria';
        $blog->category = 'Hair Loss';
        $blog->date = '25 August 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/rambut-tipis.jpg';
        $blog->url_name = 'cara-merawat-rambut-tipis-pada-pria';
        $blog->subtitle = "Penipisan rambut membuat pria khawatir dan mampu menurunkan kepercayaan diri. Banyak faktor yang menjadi penyebab penipisan rambut. Namun, rambut tipis masih tetap bisa diatasi dan dirawat.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Penipisan rambut tentu menjadi hal yang sangat dihindari oleh pria. Tapi, bagaimana jika rambut sudah terlanjur tipis?</p>
                    <p>Kamu masih tetap bisa mengatasi rambut tipis dengan melakukan perawatan dan menggunakan produk yang tepat untuk rambut. Beberapa hal dapat dilakukan untuk menjaga rambut tetap terawat dan tentunya menambah volume.</p>
                </i>
            </div>

            <p>Banyak pria mengalami penipisan rambut seiring berjalannya waktu, baik disebabkan oleh faktor genetik maupun karena usia yang makin bertambah. Hal itu tentu sangat mengganggu penampilan secara keseluruhan dan dapat menurunkan rasa percaya diri. Sebenarnya, baik pria maupun wanita akan mengalami penipisan rambut jika rambut terus menerus rontok dan tidak segera diatasi. Maka dari itu, harus dilakukan perawatan yang sesuai agar rambut senantiasa terjaga kesehatannya.</p>
            <h2><b>Penyebab Penipisan Rambut</b></h2>
            <p>Penipisan rambut bisa terjadi karena banyak faktor yang mendukung hal tersebut. Ada yang mengalami penipisan rambut karena faktor genetik, namun ada pula yang disebabkan oleh gaya hidup yang nggak sehat atau kombinasi dari kedua hal tersebut.</p>
            <p>Sebagian pria juga tanpa sadar mengalami penipisan rambut karena penggunaan produk rambut yang nggak sesuai dan ditambah dengan cara perawatan yang nggak tepat.</p>
            <p>Beberapa hal berikut juga menjadi penyebab rambut menipis, yaitu:</p>
            <p>
                1. Kurang mineral, zat besi, dan berbagai vitamin yang dapat menjaga kesehatan rambut<br>
                2. Stres berlebihan<br>
                3. Styling rambut berlebihan, seperti pewarnaan atau penggunaan pengering rambut dengan suhu yang terlalu panas
            </p>
            <p>Selain itu, gaya hidup yang nggak sehat juga turut menyumbang penipisan rambut, seperti kebiasaan merokok, begadang, dan makan makanan yang nggak sehat.</p>
            <h2><b>Perawatan Rambut Tipis</b></h2>
            <p>Jika kamu sudah mengalami penipisan rambut, kamu masih tetap bisa mengatasinya dan merawatnya dengan baik agar rambut nggak makin parah dan tentunya tetap terjaga kesehatannya.</p>
            <p>Beberapa cara berikut bisa kamu lakukan untuk menjaga rambut dari penipisan yang makin parah.</p>
            <h3><strong>1. Rutin Mencuci Rambut</strong></h3>
            <p>Selama ini mungkin sebagian dari kamu menganggap terlalu sering mencuci rambut justru menjadikan rambut makin tipis. Hal itu justru nggak tepat karena nyatanya mencuci rambut secara rutin justru menambah volume rambut. Bagi kamu yang memiliki masalah rambut berminyak, justru akan semakin kelihatan lepek dan tipis.</p>
            <p>Cuci rambut secara rutin setiap hari atau minimal dua hari sekali. Bilas rambut menggunakan air hangat, bukan air yang dengan suhu panas.</p>
            <h3><strong>2. Hindari Penggunaan Sisir</strong></h3>
            <p>Menyisir menggunakan sisir secara terus-menerus biasanya menyebabkan rambut menjadi lebih lemas dan jatuh sehingga membuat rambut tampak makin tipis. Maka dari itu, hindari penggunaan sisir dan kamu bisa mulai untuk menggunakan jari-jari tangan untuk merapikan rambut.</p>
            <p>Mungkin sebagian pria sudah selalu menggunakan jari-jari untuk menggantikan sisir dalam merapikan rambut. Lebih mudah dan simple juga, ya.</p>
            <h3><strong>3. Jaga Potongan Rambut Pendek</strong></h3>
            <p>Menjaga potongan rambut tetap pendek dan memberikan vitamin rambut secara berkala dapat membantu rambut tampak lebih tebal dan sehat.</p>
            <p>Kamu bsia membiarkan rambut pada bagian atas tumbuh lebih panjang agar menambah volume dan mudah diatur.</p>
            <h3><strong>4. Pijat Kepala</strong></h3>
            <p>Cara termudah dan paling murah untuk mendapatkan rambut lebih tebal adalah dengan memijit kulit kepala. Saat kamu keramas atau menggunakan tonic rambut, pijat kepala secara perlahan agar produk dapat menyerap dengan sempurna.</p>
            <p>Pijatan pada kulit kepala juga memperlancar aliran darah pada akar rambut sehingga dapat membantu pertumbuhan rambut dengan lebih cepat.</p>
            <h3><strong>5. Gaya Hidup Sehat</strong></h3>
            <p>Gaya hidup sehat merupakan hal yang harus dilakukan setiap orang. Manfaatnya bukan hanya untuk rambut tapi juga untuk kesehatan tubuhmu. Menerapkan gaya hidup sehat sangatlah penting.</p>
            <p>Kamu bisa memulainya dengan rutin berolahraga secara ringan di pagi hari sebelum beraktifitas. Mengubah menu diet harian dengan makanan yang mengandung gizi dan mineral tinggi serta mengelola stres dengan baik. Jangan lupa juga untuk mencukupi jam tidur kamu ya.</p>
            <h3><strong>6. Menggunakan Shampoo Khusus</strong></h3>
            <p>Gunakan perawatan rambut yang sesuai dan tepat agar rambut senantiasa terjaga kesehatannya. Rambut rontok juga menyebabkan penipisan rambut yang harus segera diatasi supaya nggak semakin parah dan menyebabkan kebotakan.</p>
            <p>Kamu bisa menggunakan shampoo khusus yang bekerja efektif menghambat hormon DHT penyebab kerontokan serta merangsang pertumbuhan rambut.</p>
            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/anti-dht-shampoo-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Anti-DHT SHampoo</a>
                        </div>
                    </div>
                </div>
            </div>
            <p>Merawat rambut tipis memang nggak bisa sembarangan ya. Selain menggunakan produk dan melakukan perawatan, kamu juga harus menerapkan gaya hidup sehat untuk membantu menjaga kesehatan rambut dari dalam.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Masalah Kulit Wajah yang Paling Sering Dialami Pria';
        $blog->category = 'Acne';
        $blog->date = '20 August 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/masalah-kulit-wajah-pria.jpg';
        $blog->url_name = 'masalah-kulit-wajah-yang-paling-sering-dialami-pria';
        $blog->subtitle = "Masalah kulit memang dihadapi oleh hampir semua orang, tapi para pria juga rentan mengalami masalah kulit wajah yang nggak bisa dihindari. Apa saja masalah kulit wajah yang ternyata bisa merusak keseluruhan penampilan?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Kulit adalah organ tubuh yang paling luar dan rentan terhadap berbagai jenis hal berbahaya yang dapat merusak kulit. Masalah kulit, terutama wajah bukan cuma punya wanita karena nyatanya para pria pun punya sederet masalah terkait kulit wajah.</p>
                    <p>Hobi begadang ternyata bisa bikin masalah kulit. Bercukur juga bisa menimbulkan masalah bagi kulit bekas cukuran. Lalu, jerawat juga jadi salah satu masalah yang nggak hanya dialami mereka yang masih puber karena jerawat juga bisa menyerang kulit kapan saja.</p>
                </i>
            </div>

            <p>Masalah pada kulit wajah sebetulnya dialami oleh siapa saja, baik pria maupun wanita. Masalahnya pun bermacam-macam sesuai kondisi kulit seseorang. Namun, bedanya antara pria dan wanita untuk masalah kesehatan kulit adalah kepedulian. Jika wanita akan sesegera mungkin mencari cara untuk mengatasi masalah kulit wajah, maka pria cenderung acuh dan menganggapnya hal sepele sampai masalah pada kulit wajah menjadi lebih parah.</p>
            <p>Padahal menjaga kesehatan kulit itu penting banget karena peran kulit sebagai benteng yang menjaga kamu dari berbagai macam hal yang membahayakan tubuh. Pada wajah, kulit berperan menjaga wajah dari debu, kotoran, kuman, dan sebagainya. Makanya, wajib untuk menjaga kesehatan kulit wajah secara menyeluruh.</p>
            <h2><b>Masalah Kulit Wajah yang Sering Dialami Pria</b></h2>
            <p>Meski nggak pakai make up setiap hari seperti wanita, tapi bukan berarti pria bebas dari masalah kulit wajah. terlebih bagi kamu yang memiliki rambut pada wajah, seperti brewok atau kumis. Butuh perawatan ekstra untuk menjaga kulit tetap bersih dan bebas masalah.</p>
            <p>Apa saja sih masalah pada kulit wajah yang paling sering dialami para pria?</p>
            <h3><strong>1. Mata Panda</strong></h3>
            <p>Kamu para pria yang suka begadang dengan berbagai alasan, mata panda jadi hal sudah biasa terjadi sehingga nggak terlalu khawatir soal itu. Mata panda atau lingkaran hitam pada area sekitar mata identik dengan kurang tidur atau kebiasaan begadang.</p>
            <p>Kebiasaan yang bisa menyebabkan mata panda adalah begadang. Begadang membuatmu kurang tidur sehingga area sekitar mata menjadi lebih gelap. Kebiasaan begadang membuat kulit mata menjadi lebih tipis dan kekurangan kolagen, makanya pembuluh darah di area mata jadi lebih kelihatan.</p>
            <p>Nggak cuma itu aja, stres dan asupan yang kurang nutrisi juga bisa berpengaruh terhadap mata panda, guys. Hal itu tentu merusak penampilan wajahmu karena jadi terlihat lelah dan nggak segar.</p>
            <p>Mata panda bisa diatasi dengan rutin olahraga, menjaga jam tidur cukup, dan mengompres area mata dengan irisan timun dingin atau masker mata yang sekarang sudah banyak dijual di pasaran.</p>
            <h3><strong>2. Razor Bump</strong></h3>
            <p>Buat kamu yang memiliki jenggot atau brewok biasanya akan rutin mencukur rambut pada wajah. Namun, nggak jarang hal itu menimbulkan masalah, seperti iritasi atau bahkan <i>razor bump</i>. <i>Razor Bump</i> atau <i>pseudofolliculitis barbae</i> adalah kondisi ketika rambut terperangkap ke dalam folikel rambut.</p>
            <p>Nah, ketika rambut yang melengkung ini tumbuh kembali ke dalam kulit, terjadilah peradangan dan reaksi terhadap benda asing. Kondisi ini kemudian menyebabkan jaringan parut mirip keloid yang berbentuk benjolan keras di daerah brewok dan leher.</p>
            <p>
                Gejala yang dialami akibat <i>razor bump</i> adalah benjolan kemerahan yang disertai dengan gejala pendamping, seperti :<br>
                a. Gatal<br>
                b. Rasa sakit<br>
                c. Papula kecil (benjolan padat dan bundar)<br>
                d. Pustula (berisi nanah)<br>
                e. Luka pada bekas cukuran<br>
            </p>
            <p>Kamu bisa mengatasi <i>razor bump</i> dengan memilih alat cukur yang pas dan menggunakan lidah buaya sebagai pereda gejala di atas. Lidah buaya merupakan antibakteri dan anti inflamasi alami yang mampu mengatasi kemerahan dan peradangan pada area bekas cukuran.</p>
            <h3><strong>3. Jerawat</strong></h3>
            <p>Pada pria, masalah jerawat bisa disebabkan oleh berbagai hal, mulai dari homon seks hingga gaya hidup nggak sehat. Kamu yang rajin berolahraga juga tetap memiliki kemungkinan untuk mengalami wajah berjerawat jika nggak dirawat secara maksimal.</p>
            <p>Saat olahraga, produksi keringat berlebih bisa menyebabkan wajah berminyak sehingga bisa menambah jumlah jerawat. Bukan berarti kamu nggak perlu berolahraga, hanya saja harus diimbangi dengan perawatan wajah yang tepat dan maksimal.</p>
            <p>
                Beberapa jenis jerawat yang umumnya dialami oleh banyak orang adalah :<br>
                a. Blackhead atau komedo hitam (komedo terbuka)<br>
                b. Whitehead atau komedo putih (komedo tertutup)<br>
                c. Papula (tonjolan kemerahan dan nyeri)<br>
                d. Pustula (benjolan besar dan lunak berisi nanah)<br>
                e. Nodul (mirip papula namun bengkak di bawah tapi tidak memiliki nanah)<br>
                f. Jerawat kistik atau jerawat batu (terletak jauh di bawah kulit namun terasa nyeri)<br>
            </p>
            <p>Untuk mengatasi masalah jerawat, kamu bisa menerapkan gaya hidup sehat, dan menjaga kebersihan wajah dengan rutin mencuci wajah dua kali sehari, serta menggunakan krim untuk wajah berjerawat yang efektif mengatasi jerawat serta memperbaiki tektur kulit.</p>
            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/night-cream-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Lawan jerawatmu dengan Night Cream Elio!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'jerawat/">Lihat Night Cream</a>
                        </div>
                    </div>
                </div>
            </div>
            <p>Jadi, para pria sebaiknya lebih memperhatikan kesehatan kulit wajah untuk menjaga kesehatan dan penampilan. Kalau penampilanmu oke, pasti makin pede kan buat melakukan banyak hal?</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Biotin untuk Perawatan Rambut Rontok Pada Pria';
        $blog->category = 'Hair Loss';
        $blog->date = '18 August 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/perawatan-rambut-rontok-pria.jpg';
        $blog->url_name = 'biotin-untuk-perawatan-rambut-rontok-pada-pria';
        $blog->subtitle = "Para pria pasti nggak asing lagi dengan kata biotin. Beberapa produk penumbuh brewok mengandung biotin yang berfungsi untuk merangsang pertumbuhan rambut. Tapi, tahu nggak sih apa sebenarnya biotin dan bagaimana memperoleh manfaat biotin secara maksimal bagi tubuh?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Siapa pun pasti jengkel dengan masalah kerontokan rambut. Termasuk pria. Perawatan rambut rontok sangat diperlukan agar rambut dapat tumbuh dengan baik dan sehat serta bebas dari masalah. Salah satu kandungan yang mampu menguatkan rambut rontok adalah biotin.</p>
                    <p>Apakah biotin itu dan bagaimana mendapatkan biotin yang cukup di dalam tubuh?</p>
                </i>
            </div>

            <p>Rambut rontok jadi salah satu masalah rambut yang hampir sering dialami oleh banyak orang, baik pria maupun wanita. Penyebabnya pun berbagai macam, mulai dari faktor internal dari dalam tubuh maupun eksternal seperti pemakaian produk untuk rambut, styling, hingga perawatannya yang nggak maksimal.</p>
            <p>Kita tahu bahwa tubuh, termasuk rambut, membutuhkan vitamin yang dapat menunjang kesehatan dan menjaganya agar tetap terawat. Salah satu vitamin yang dibutuhkan untuk menunjang pertumbuhan rambut adalah biotin atau Vitamin B7.</p>
            <h2><b>Apa Itu Biotin?</b></h2>
            <p>Para pria mungkin sudah nggak asing dengan biotin. Beberapa produk penumbuh jenggot atau brewok biasanya mengandung biotin.</p>
            <p>Biotin merupakan vitamin yang terkenal untuk menjaga kesehatan dan pertumbuhan rambut. Selain itu, biotin juga membantu menjaga kesehatan mata, sistem saraf pusat, dan ginjal. Suplemen biotin juga biasanya digunakan untuk mengatasi masalah insomnia dan kelelahan akibat kekurangan biotin.</p>
            <p>Biotin juga dikenal dengan vitamin H atau Haar dan Haut yang dalam Bahasa Jerman artinya Kulit dan Rambut. Biotin berfungsi menjaga kesehatan kulit, rambut, dan kuku. Pada rambut, biotin dipercaya mampu menguatkan dan menebalkan rambut serta mengurangi kerontokan. Vitamin ini berperan dalam proses terjadinya metabolisme pada tubuh, terutama saat mengubah makanan menjadi energi.</p>
            <p>Secara alami, biotin terkandung dalam makanan, seperti kuning telur, hati, kacang-kacangan, kedelai, jamur, almond, kembang kol, serta biji-bijian. Biotin juga dihasilkan tubuh oleh bakteri yang ada di usus. Ketika tubuh kamu sehat, maka produksi biotin akan meningkat dan maksimal.</p>
            <h2><b>Biotin untuk Perawatan Rambut Rontok</b></h2>
            <p>Meski belum banyak penelitian medis yang fokus pada kandungan biotin sehingga belum mencukupi data penelitian secara pasti, tapi dalam sebuah riset menyebutkan bahwa partisipan yang mengalami kerontokan rambut terbukti kekurangan biotin dalam tubuhnya. Namun, hal tersebut masih memerlukan riset lebih lanjut.</p>
            <p>Biotin merupakan vitamin B kompleks yang berperan penting dalam perawatan rambut karena perannya dalam sintesis keratin. Zat tersebut merupakan protein utama dalam pembentukan struktur rambut dan memiliki kontribusi dalam kesehatan serta kekuatan batang rambut.</p>
            <p>Pada pria, kerontokan rambut, terlebih kebotakan atau male androgenetic alopecia adalah kondisi di mana rambut mengalami kerontokan secara bertahap di beberapa bagian kepala sehingga menimbulkan kebotakan yang berpola. Kebotakan ini juga bukan hanya dialami oleh orang yang berusia 50 tahun saja, tapi juga pada pria yang masih muda dengan berbagai faktor pendukung.</p>
            <p>Kadar biotin pada tubuh yang terlalu rendah bisa menyebabkan rambut sulit tumbuh dan menyebabkan kerontokan. Pada tubuh, biotin bereaksi pada enzim khusus yang berfungsi sebagai produsen asam amino yang bekerja untuk memproduksi protein. Zat utama pada rambut adalah keratin yang merupakan protein sehingga biotin dipercaya sebagai vitamin pendukung pertumbuhan rambut yang sehat dan kuat.</p>
            <p>Beberapa makanan yang mengandung biotin juga mengandung beberapa vitamin pendukung lain yang juga membantu memelihara kesehatan rambut, salah satunya adalah vitamin A dan B6.</p>
            <h2><b>Makanan Sumber Biotin</b></h2>
            <p>Seperti yang sudah dijelaskan sebelumnya bahwa ada beberapa makanan yang mengandung biotin yang dapat dikonsumsi untuk menjaga kadar biotin dalam tubuh untuk merawat rambut rontok. Beberapa makanan tersebut adalah :</p>
            <h3><strong>1. Kuning Telur Ayam</strong></h3>
            <p>Pada kuning telur ayam, terdapat sejumlah kandungan biotin. Biotin pada kuning telur berfungsi dalam perkembangan embrio ayam. Kamu bisa mengonsumsi telur dengan memasaknya secara matang terlebih dahulu.</p>
            <h3><strong>2. Keju</strong></h3>
            <p>Pada sebagian besar produk yang terbuat dari susu mengandung biotin di dalamnya. Gorgonzola dan Camembert merupakan Sebagian jenis keju yang mengandung biotin paling banyak dibanding jenis keju lainnya.</p>
            <h3><strong>3. Daging atau Hati Hewan</strong></h3>
            <p>Hati ayam atau sapi mengandung tinggi biotin, yaitu sebanyak 27 sampai 35 mikrogram dalam 3 ons hati yang dimasak matang. Pada ikan, biotin ditemukan pada salmon dan sarden. 3 ons salmon yang direbus mengandung 4 sampai 5 mikrogram biotin.</p>
            <h3><strong>4. Ubi Jalar</strong></h3>
            <p>Dari sekian makanan jenis sayuran, ubi jalar menjadi salah satu makanan yang mengandung biotin tertinggi. Ubi jalar juga mengandung beta karoten yang bagus untuk kesehatan kulit. Ubi jalar bisa dikonsumsi dengan cara dipanggang atau direbus agar kandungan biotin di dalamnya tidak berkurang banyak.</p>
            <h3><strong>5. Kacang-Kacangan</strong></h3>
            <p>Kacang-kacangan, terutama almond, baik mentah, asin, atau dipanggang mengandung kadar biotin yang tinggi. Selain itu, ada kacang polong yang mengandung biotin. Mengonsumsi kacang-kacangan seperti kedelai, kacang tanah, kenari, dan kacang hijau, secara rutin bisa memberikan protein, vitamin E, dan biotin yang cukup untuk tubuh.</p>
            <p>Kekurangan biotin bisa menimbulkan masalah, khususnya rambut. Maka, untuk kamu yang mengalami rambut rontok, perlu sekali untuk melakukan perawatan rambut rontok secara maksimal, baik dari dalam maupun dari luar. Selain mengonsumsi makanan yang mengandung kadar biotin, juga memilih produk perawatan rambut rontok secara rutin dan konsisten agar hasil maksimal dan bebas dari masalah rambut rontok.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Mengenal Sebum Penyebab Jerawat Pada Wajah Pria';
        $blog->category = 'Acne';
        $blog->date = '13 August 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/penyebab-jerawat-pria-1.jpg';
        $blog->url_name = 'mengenal-sebum-penyebab-jerawat-pada-pria';
        $blog->subtitle = "Wajah berminyak bikin kulit terlihat mengkilap dan jadi gampang jerawatan. Minyak pada wajah sebetulnya punya peran penting untuk menjaga kelembaban. Tapi, kalau produksinya berlebihan, justru menimbulkan masalah. Jadi sebetulnya minyak di wajah itu apa sih?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Masalah kulit wajah berminyak cukup menjadi teka-teki. Minyak pada wajah disebabkan karena apa dan bagaimana cara mengatasinya? Ternyata minyak atau sebum pada wajah bukan hanya seperti minyak pada umumnya karena sebum ternyata memiliki komposisi yang cukup kompleks. Kamu yang punya wajah berminyak harus mengenal tentang sebum dan apa saja penyebab produksinya meningkat. Sebum nggak cuma musuh kulitmu tapi punya manfaat juga.</p>
                </i>
            </div>

            <p>Kulit wajah berminyak merupakan salah satu masalah kulit yang cukup memusingkan. Belum lagi jika ditambah masalah jerawat yang sering banget muncul. Rasanya satu perawatan aja nggak cukup untuk mengatasi kedua masalah kulit wajah tersebut.</p>
            <p>Kebanyakan orang yang memiliki masalah kulit berminyak, juga punya masalah dengan jerawat. Hal itu disebabkan karena produksi minyak berlebih yang bercampur dengan kotoran dan keringat yang menyebabkan sumbatan pada pori-pori wajah.</p>
            <p>Tau nggak sih kalau ternyata yang ada di wajah kamu itu bukan minyak seperti minyak pada umumnya, melainkan sebum? Lalu apakah sebum punya manfaat buat kulit wajah?</p>
            <h2><b>Apa Itu Sebum? </b></h2>
            <p>Sebum merupakan zat yang mirip dengan lilin dan diproduksi oleh sebaceous glands. Sebetulnya sebum tersebut berfungsi sebagai pelembab alami kulit. Minyak di wajah bukan hanya berisi sebum tapi juga sel kulit mati, keringat, dan kotoran. Jadi, saat produksi sebum berlebihan, tentunya akan menyebabkan sumbatan di pori-pori dan menimbulkan jerawat. </p>
            <p>Komponen yang ada pada sebum terdiri dari trigliserida, asam lemak, ester lilin, squalene, ester kolesterol, dan kolesterol. Kelenjar sebasea ditemukan di hampir semua area tubuh, kecuali telapak tangan dan telapak kaki. Hal itu karena sebum berada di folikel rambut sebelum keluar ke permukaan kulit. </p>
            <p>Nah, saat proses tersebut terjadi secara berlebihan, maka rambut dan kulit akan terlihat berminyak. Tapi, sebaliknya jika sebum kurang, maka kulit dan rambut justru akan menjadi kering. </p>
            <p>Saat produksi sebum berlebihan dan menyumbat pori-pori, bakteri di permukaan kulit juga bertambah di sekitar folikel rambut dan menyebabkan peradangan. Jerawat pun muncul di kulit kamu. Seringnya sumbatan terjadi pada area kening, hidung, dan dagu. </p>
            <h2><b>Manfaat Sebum untuk Kulit</b></h2>
            <p>Seperti yang sudah dijelaskan sebelumnya, bahwa sebum sebetulnya berfungsi untuk menjaga kelembaban alami pada kulit agar kulit terasa lembab dan tidak kering.</p>
            <p>Pada kelenjar  <i>sebaceous</i>, sebum diproduksi dan dikeluarkan ke kantong kelenjar pori-pori kemudian dialirkan ke seluruh permukaan kulit. Sebum tersebut bertugas melapisi kulit sehingga membuat kulit terasa lembab dan lembut. Selain itu, sebum juga melindungi kulit dari mikroorganisme, bahan kimia, hingga polusi dari udara. </p>
            <h2><b>Penyebab Meningkatnya Produksi Sebum</b></h2>
            <p>Produksi sebum bisa meningkat sehingga menghasilkan sebum yang berlebih. Faktor yang memicunya pun berbagai macam, seperti hormon saat pubertas, keturunan, kondisi kesehatan, hingga penggunaan obat-obatan tertentu. </p>
            <p>Meski sebum dihasilkan oleh kelenjar sebasea, tapi bukan berarti kebiasaan kamu sehari-hari nggak berpengaruh di dalamnya. Hal-hal yang tampak sepele ternyata justru bisa menambah masalah bagi kulit, yaitu memperparah kelebihan produksi sebum.</p>
            <p>Hal-hal berikut dapat menjadi penyebab produksi sebum berlebih :</p>
            <h3><strong>1. Tidak Menggunakan Pelembab</strong></h3>
            <p>Kebanyakan orang berpikir menggunakan pelembab pada kulit wajah berminyak dan berjerawat justru membuat wajah semakin berminyak. Nyatanya, jika kamu nggak menggunakan pelembab, justru kulit akan semakin bermasalah.</p>
            <p>Pilih pelembab yang sesuai dengan jenis kulitmu. Untuk masalah kulit berjerawat tetap perlu menggunakan pelembab supaya kulit tetap terjaga kelembabannya. Selain itu, pilih pelembab yang mampu membunuh bakteri penyebab jerawat.</p>
            <div class="product-blog container-fluid" style="width: 400px; max-width: 100%;">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/day-cream-norm.jpg); width: 100%; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height">
                        <div class="font-bold">Mau tampil PD? Yuk pakai Day Cream Elio!</div>
                        <a href="'. base_url() .'jerawat/">
                            <div class="main-button margin-top-30px text-center font-12px">Lihat Day Cream</div>
                        </a>
                    </div>
                </div>
            </div>
            <h3><strong>2. Mengonsumsi Gorengan</strong></h3>
            <p>Siapa yang nggak tertarik untuk menjadikan gorengan seperti bakwan, tahu goreng, french fries,dan ayam goreng sebagai kudapan? </p>
            <p>Tapi, makanan enak tersebut memberikan sumbangsih untuk gangguan kesehatan kulit wajahmu. Makanan yang digoreng memiliki kandungan lemak jenuh yang tinggi sehingga bisa mempengaruhi produksi sebum yang berlebihan pada wajah.</p>
            <h3><strong>3. Stres</strong></h3>
            <p>Kita memang nggak bisa menghindari stres, tapi masih bisa untuk mengelolanya. Stres soal pekerjaan, masalah hidup, hingga hal-hal di luar kendali memang nggak bisa kita hindari. Jangan sampai stres nggak dikelola, guys.</p>
            <p>Stres bisa bikin hormon nggak seimbang dan bikin kelenjar sebasea memproduksi sebum secara berlebihan dan memicu minyak makin banyak di wajah dan tentunya bisa menimbulkan jerawat pula. </p>
            <p>Sebum pada wajah memang wajar, jadi kamu nggak perlu khawatir selama keseimbangan produksinya terjaga. Kamu bisa menjaga keseimbangan tersebut dengan gaya hidup sehat, seperti olahraga teratur, rajin makan sayur dan buah, serta mengurangi kebiasaan begadang.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Vitamin dari Bahan Alami untuk Rambut Rontok';
        $blog->category = 'Hair Loss';
        $blog->date = '11 August 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/vitamin-untuk-rambut-rontok.jpg';
        $blog->url_name = 'vitamin-dari-bahan-alami-untuk-rambut-rontok';
        $blog->subtitle = "Penyebab rambut rontok memang banyak faktor namun kamu harus bisa mengatasinya. Kamu nggak perlu khawatir karena untuk mengatasi rambut rontok, kamu bisa mendapatkan bahannya secara alami, seperti nutrisi-nutrisi dari alam, tumbuhan, dan hewani.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Mengatasi rambut rontok memang nggak bisa instan. Kamu perlu konsisten dan mencukupi nutrisi yang dibutuhkan tubuh untuk menjaga kesehatan rambut. Masalah rambut seperti kerontokan memang cukup pelik karena penyebabnya bisa dari berbagai macam. Kamu bisa mengatasi rambut rontok dengan vitamin yang memiliki nutrisi penunjang pertumbuhan dan kesehatan rambut.</p>
                </i>
            </div>

            <p>Punya rambut sehat dan kuat pasti jadi impian semua orang, termasuk para pria. Meski terkesan cuek, tapi pria pasti tetap menginginkan rambut yang sehat dan bebas masalah. Maka dari itu, penting banget untuk melakukan perawatan rambut rontok.</p>
            <p>Perawatan rambut rontok sebetulnya nggak terlalu sulit, guys. Hal pertama yang dibutuhkan adalah konsistensi. Sebagus apapun jenis perawatan rambut rontok, jika kamu nggak konsisten maka nggak akan memberikan hasil maksimal. Jadi, mulai dari sekarang kamu harus lebih peduli terhadap kesehatan tubuhmu, termasuk rambut.</p>
            <h2><b>Penyebab Rambut Rontok</b></h2>
            <p>Rambut rontok disebabkan oleh banyak hal, baik dari dalam maupun dari luar. Salah satu penyebabnya adalah hormon DHT yang berlebihan. Hormon DHT berasal dari hormon testosteron. Hormon testosteron ada pada pria dan wanita, namun pada pria lebih banyak. Nah, jika hormon tersebut berlebihan maka dapat mengecilkan folikel rambut sehingga menyebabkan rambut rontok.</p>
            <p>Selain itu, gaya hidup juga mempengaruhi rambut rontok, seperti pola makan, kebiasaan begadang, kurang olahraga, dan sebagainya.</p>
            <p>Kebiasaan buat bereksperimen rambut, seperti diwarnai atau mengeringkan rambut dengan hair dryer yang bersuhu tinggi.</p>
            <h2><b>Mengatasi Penyebab Rambut Rontok</b></h2>
            <p>Tahu nggak sih kalau ternyata bukan cuma tubuh saja yang butuh vitamin tapi rambut juga?</p>
            <p>Berikut beberapa vitamin yang dibutuhkan rambut agar tetap kuat dan sehat. Berita baiknya lagi, vitamin-vitamin berikut juga gampang didapatkan.</p>
            <h3><strong>1. Biotin</strong></h3>
            <p>Biotin atau vitamin B7 merupakan vitamin yang membantu pertumbuhan rambut. Nutrisi di dalam biotin mampu membuat rambut tumbuh lebih panjang dan lebat.</p>
            <p>Manfaat tersebut bisa kamu dapatkan dengan mengatur pola makan yang mengandung nutrisi biotin. Meski perawatan rambut yang mengandung biotin dapat membantu pertumbuhan rambut, namun kamu tetap membutuhkan nutrisi tersebut dari dalam, tepatnya dari makanan yang kamu konsumsi.</p>
            <p>Kamu bisa memenuhi kebutuhan vitamin B7 atau biotin dari makanan alami dan mudah didapatkan, seperti jamur, salmon, alpukat, telur, almond, kacang tanah, susu, keju, dan yogurt.</p>
            <h3><strong>2. Vitamin A</strong></h3>
            <p>Vitamin A bukan hanya punya khasiat untuk menjaga kesehatan mata, tapi juga menghasilkan sebum pada kulit kepala yang berfungsi menjaga kelembaban dan menutrisi rambut. Makanya, vitamin A bagus banget untuk kamu yang juga punya permasalahan rambut kering.</p>
            <p>Vitamin A bisa didapatkan dari bayam, wortel, persik, tomat, ubi jalar, susu, telur, mangga, pepaya, dan semangka. Sayur dan buah tersebut mudah didapatkan, bukan?</p>
            <p>Tapi, perlu diingat bahwa nggak dianjurkan untuk berlebihan dalam mengkonsumsi vitamin A karena bisa menimbulkan masalah baru bagi rambutmu.</p>
            <h3><strong>3. Vitamin C</strong></h3>
            <p>Jika selama ini kamu tahu bahwa vitamin C baik untuk menjaga sistem kekebalan tubuh, kamu perlu membaca artikel ini lebih jauh.</p>
            <p>Vitamin C kaya antioksidan yang dapat melawan radikal bebas yang dapat menyebabkan masalah pada tubuh, terutama menghambat pertumbuhan rambut. Maka, dengan rutin mengkonsumsi vitamin C, kamu bisa terbebas dari masalah rambut, seperti kerontokan.</p>
            <p>Selain itu, vitamin C juga merupakan sumber kolagen yang merupakan salah satu elemen penting dalam proses pertumbuhan rambut. Kolagen menjaga rambut tetap sehat dan tidak patah. Kamu bisa mendapatkan nutrisi vitamin C dari makanan, seperti kubis, stroberi,jeruk, kangkung, brokoli, jambu biji, bayam, dan paprika merah.</p>
            <h3><strong>4. Vitamin D</strong></h3>
            <p>Kekurangan vitamin D bisa menyebabkan rambut rontok karena nutrisi dari vitamin tersebut membantu membentuk folikel rambut baru yang bekerja pada pertumbuhan helai rambut yang baru.</p>
            <p>Selain menjaga kesehatan tulang, vitamin D juga mampu membantu menjaga kesehatan rambut sehingga dapat mengatasi kerontokan.</p>
            <p>Kamu bisa mendapatkan vitamin D dengan rutin berjemur di bawah sinar matahari pagi selama 15 – 20 menit.</p>
            <p>Selain itu, kamu juga bisa mendapatkan sumber vitamin D dari kuning telur, gandum, susu kedelai, ikan salmon, jamur, dan tahu.</p>
            <h3><strong>5. Vitamin E</strong></h3>
            <p>Vitamin E juga merupakan sumber antioksidan untuk mencegah kerusakan rambut dan stres oksidatif. Vitamin E membantu tubuh memproduksi keratin secara alami yang berfungsi menghentikan kerusakan pada rambut.</p>
            <p>Asupan vitamin E untuk rambut bisa didapatkan dari produk perawatan rambut yang mengandung vitamin E. sedangkan, untuk sumber vitamin dari dalam tubuh, kamu bisa mengkonsumsi bayam, hazelnut, mangga, kiwi, kacang almond, gandum, alpukat, dan brokoli.</p>
            <p>Nutrisi-nutrisi tersebut sangat mudah untuk kamu dapatkan dan bisa menjadi daftar menu dan gaya hidup sehat sehari-hari. Ditambah dengan mengurangi styling rambut berlebihan dan rutin menggunakan perawatan rambut rontok.</p>
            <p>Kamu juga bisa menggunakan minoxidil untuk merangsang pertumbuhan rambut dari luar.</p>
            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/hair-tonic-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Minoxidil</a>
                        </div>
                    </div>
                </div>
            </div>
            <p>Terapkan selalu gaya hidup sehat dan makanan seimbang yang kaya akan nutrisi untuk menjaga kesehatan tubuh dan rambut kamu.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Must Have Item Pria untuk Wajah Sehat dan Segar';
        $blog->category = 'Acne';
        $blog->date = '6 August 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/produk-perawatan-wajah-pria.jpg';
        $blog->url_name = 'must-have-item-pria-untuk-wajah-sehat-dan-segar';
        $blog->subtitle = "Perawatan wajah pada pria merupakan hal penting yang harus dilakukan. Kamu harus punya beberapa produk yang bisa digunakan untuk mendukung perawatan wajah. Kenali juga jenis kulit wajah supaya perawatannya sesuai.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Bukan cuma wanita, pria juga harus punya kulit wajah yang sehat dan bersih. Meski pria cenderung malas untuk perawatan wajah yang ribet, tapi menjaga kesehatan kulit wajah itu wajib banget.</p>
                    <p>Sebelum melakukan perawatan, ada baiknya kamu memahami jenis kulit wajah agar perawatan yang didapatkan juga tepat. Perawatan yang salah justru akan membuat kulit bermasalah. Makanya, penting banget untuk pria punya produk-produk perawatan wajah berikut ini.</p>
                </i>
            </div>

            <p>Kebersihan wajah bukan cuma punya wanita karena nyatanya masalah kulit juga dialami oleh hampir semua orang, termasuk pria. Kulit pria juga membutuhkan perawatan yang tepat untuk menjaga kulit tetap sehat dan segar, apa pun jenis kulit wajahnya.</p>
            <p>Meskipun perawatan wajah diperlukan, namun pria cenderung enggan untuk melakukan perawatan yang terlalu rumit. Nggak seperti wanita yang punya rutinitas perawatan wajah dengan berbagai jenis dan urutan. Pria lebih menyukai perawatan wajah yang tepat namun praktis dan mudah digunakan.</p>
            <h2><b>Kenali Jenis Kulit Wajah</b></h2>
            <p>Sebelum melakukan perawatan wajah dan memutuskan jenis produk apa yang digunakan, kenali dulu jenis kulit wajahmu. Pria biasanya menggunakan perawatan wajah ketika sudah muncul masalah, seperti jerawat.</p>
            <p>Namun, di luar masalah kulit yang sedang dialami, kamu harus mengenali lebih dulu jenis kulit wajah agar perawatan yang digunakan sesuai dan benar sehingga nggak menimbulkan masalah baru, seperti kering atau berminyak.</p>
            <p>Berikut beberapa jenis kulit wajah, yaitu :</p>
            <h3><strong>1. Kulit normal</strong></h3>
            <p>Jenis kulit ini memiliki keseimbangan yang baik untuk kadar minyak dan air di dalam kulit. Nggak berminyak, tapi juga nggak kering sehingga terlihat halus dan pori-pori pun hampir nggak nampak.</p>
            <p>Kulit normal cenderung nggak punya masalah yang berarti. Perawatannya juga mudah dan nggak membutuhkan perawatan khusus seperti jenis kulit lainnya.</p>
            <h3><strong>2. Kulit kering</strong></h3>
            <p>Kulit kering punya kelembaban yang rendah pada lapisan terluar kulit sehingga bikin kulit jadi gampang pecah-pecah dan retak. Permukaan kulit menjadi terlihat kasar dan kusam serta nggak elastis. Jenis kulit ini lebih mudah mengalami kemerahan, gatal, dan bersisik.</p>
            <h3><strong>3. Kulit kombinasi</strong></h3>
            <p>Kulit kombinasi merupakan perpaduan antara kulit berminyak dan kering. Jadi, pada T Zone (dahi, hidung, dan dagu) memiliki kondisi kulit berminyak. Sedangkan, pada area pipi kulit cenderung kering. Jenis kulit ini biasanya dipengaruhi oleh faktor genetik dan peningkatan hormon pada masa puber.</p>
            <h3><strong>4. Kulit berminyak</strong></h3>
            <p>Wajah dengan kulit berminyak biasanya akan lebih mengkilap dan licin permukaannya. Jenis kulit wajah ini mengalami kelebihan produksi minyak atau sebum sehingga mengakibatkan wajah lebih mengkilap.</p>
            <p>Jenis kulit ini juga cenderung memiliki masalah jerawat karena kelebihan sebum yang dapat menyumbat pori-pori.</p>
            <h3><strong>5. Kulit sensitif</strong></h3>
            <p>Kulit sensitif mudah mengalami iritasi terhadap beberapa faktor, seperti udara, air, makanan, atau penggunaan produk wajah tertentu.</p>
            <h2><b><i>Must Have Item</i> untuk Kulit Wajah</b></h2>
            <p>Berbagai jenis kulit wajah yang dimiliki oleh setiap pria tetap harus dijaga kesehatan dan kebersihannya agar wajah selalu segar dan sehat.</p>
            <p>Kamu harus punya beberapa item yang digunakan untuk merawat kulit wajah. Meski misalnya kulit wajahmu berminyak atau kombinasi sekalipun, menjaga kelembaban dan kesegaran kulit itu tetap perlu. Jangan sampai kulit wajah jadi makin kusam dan dehidrasi gara-gara kamu nggak menggunakan perawatan wajah.</p>
            <p>Apa aja <i>item</i> yang kamu perlu gunakan? Simak ulasannya berikut!</p>
            <h3><strong>1. Facial wash</strong></h3>
            <p>Sabun cuci muka merupakan produk perawatan wajah mendasar yang wajib dimiliki setiap orang. Kenapa? Karena sabun cuci muka biasanya mengandung bahan yang dikhususkan untuk membersihkan kotoran dan debu yang dapat memicu timbulnya jerawat.</p>
            <p>Makanya, pria juga harus rajin membersihkan wajah, setidaknya 2 kali sehari, terutama setelah berolahraga dan dari luar ruangan.</p>
            <h3><strong>2. Pelembab</strong></h3>
            <p>Siapa bilang pelembab cuma dibutuhkan oleh kulit wanita saja?! Pria juga butuh pelembab untuk menjaga wajah tetap terhidrasi dan sehat.</p>
            <p>Pakai pelembab setelah kamu mencuci wajah. untuk kamu yang memiliki masalah kulit berjerawat, kamu bisa menggunakan pelembab yang mengandung clindamycin yang efektif mengatasi jerawat dan bakteri penyebab jerawat.</p>
            <div class="product-blog container-fluid" style="width: 400px; max-width: 100%;">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/day-cream-norm.jpg); width: 100%; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height">
                        <div class="font-bold">Mau tampil PD? Yuk pakai Day Cream Elio!</div>
                        <a href="'. base_url() .'jerawat/">
                            <div class="main-button margin-top-30px text-center font-12px">Lihat Day Cream</div>
                        </a>
                    </div>
                </div>
            </div>
            <h3><strong>3. Face Scrub</strong></h3>
            <p>Pria juga butuh scrub wajah, lho. Scrub wajah ini berfungsi untuk mengangkat sel kulit mati yang bisa menyebabkan kulit wajah menjadi kusam. Produk ini bisa digunakan maksimal 2 kali saja dalam seminggu. Jika penggunaan lebih dari itu, kulit wajahmu akan iritasi dan mengelupas.</p>
            <h3><strong>4. Alat cukur jenggot</strong></h3>
            <p>Alat pencukur jenggot diperlukan untuk kamu yang memiliki rambut di wajah. Meski kamu punya brewok yang lebat, kamu harus tetap menjaga kerapian dan kebersihannya supaya nggak menimbulkan jerawat.</p>
            <p>Berlaku juga untuk kamu yang punya kumis. Rapikan kumis setiap kali kamu merasa kumisnya sudah nggak teratur atau mencuat melewati garis bibir.</p>
            <p>Praktis dan mudah kan, guys? Kamu cuma perlu lakukan secara rutin dan konsisten agar mendapatkan hasil yang maksimal. Pilih produk yang sesuai dengan jenis kulit wajah.</p>
            <p>Selain mendapatkan kulit yang bersih, wajah kamu juga lebih segar. Jangan lupakan rambut di wajahmu yang akan lebih rapi dan menarik.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Rutin Konsumsi 5 Makanan Ini untuk Cegah Ejakulasi Dini';
        $blog->category = 'Sex';
        $blog->date = '4 August 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/ejakulasi-dini-pria.jpg';
        $blog->url_name = 'rutin-konsumsi-5-makanan-ini-untuk-cegah-ejakulasi-dini';
        $blog->subtitle = "Ejakulasi dini merupakan gangguan kesehatan seksual yang umumnya terjadi hampir pada sebagian besar pria. Namun, hal itu bisa diatasi dengan gaya hidup sehat dan makanan yang kaya nutrisi juga, lho. Apa saja sih makanan yang bisa mencegah ejakulasi dini?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Ejakulasi dini adalah kondisi di mana pria kesulitan untuk mendapatkan dan/atau mempertahankan ereksi saat berhubungan seksual. Hal itu tentu mengganggu momen romantis dengan pasangan dan membuat pria menjadi stress. Namun, hal itu bisa diatasi. Kamu bisa mengonsumsi makanan yang kaya nutrisi untuk kesehatan organ intim pria.</p>
                </i>
            </div>

            <p>Setiap pria selalu ingin memberikan kepuasan terhadap pasangannya, tapi nyatanya nggak semudah itu untuk memenangkan situasi. Kendala bisa saja terjadi di tengahnya, seperti ejakulasi dini.</p>
            <p>Ejakulasi dini merupakan kondisi di mana pria kesulitan mengalami dan/atau menjaga ereksi saat menerima rangsangan seksual. Situasi tersebut tentu saja sangat mengganggu keharmonisan kamu dengan pasangan.</p>
            <p>Kamu nggak sendirian karena menurut Asosiasi Seksologi Indonesia sebanyak 15% pria dewasa pernah mengalami gangguan seksual. Kasus ejakulasi dini juga dialami oleh 26-40% pria dewasa di Indonesia. Meski begitu, bukan berarti kamu menyepelekan dan menutup diri untuk mengatasinya dan mencegah terulang kembali.</p>
            <h2><b>Makanan untuk Cegah Ejakulasi Dini</b></h2>
            <p>Selain berolahraga dan menerapkan gaya hidup sehat, makanan yang masuk ke tubuhmu juga mempengaruhi kesehatan tubuh, termasuk pada Mr. P. Maka, kamu harus memperhatikan makanan dan penuhi gizi harian untuk mengatasi ejakulasi dini.</p>
            <p>Berikut 5 makanan yang bisa mengatasi ejakulasi dini jika dikonsumsi secara rutin:</p>
            <h3><strong>1. Telur</strong></h3>
            <p>Telur merupakan makanan yang kaya akan protein. Kamu bisa mengonsumsi 2 butir telur setiap hari secara rutin. Telur dapat meningkatkan dorongan seksual pada pria sehingga jika rutin dikonsumsi dapat mengatasi ejakulasi dini.</p>
            <h3><strong>2. Asparagus</strong></h3>
            <p>Asparagus punya banyak manfaat buat tubuh, terutama bagi para pria. Sejak lama asparagus sudah dikenal sebagai makanan yang berkhasiat untuk meningkatkan gairah seksual.</p>
            <p>Asparagus juga mengandung vitamin A dan C, serat, kromium, folat, dan vitamin E esensial yang dikenal sebagai vitamin yang efektif meningkatkan fungsi hormon pria. Makanan yang kaya akan nutrisi ini bisa masuk ke dalam daftar menu diet kamu karena bonusnya bukan hanya meningkatkan performa seksual tapi juga manfaat lain yang sangat baik bagi tubuh.</p>
            <h3><strong>3. Wortel</strong></h3>
            <p>Makanan yang berwarna jingga ini mengandung tinggi beta-karoten sehingga masuk ke dalam daftar makanan sehat yang sangat baik untuk kita konsumsi.</p>
            <p>Wortel mengandung banyak antioksidan, mangan, zat besi, kalium, folat, Vitamin A, Vitamin B8, asam pantotenat, Vitamin K, dan Vitamin C. Mineral dan vitamin tersebut membantu menguatkan otot Mr. P serta meningkatkan aliran darah ke Mr. P.</p>
            <h3><strong>4. Ginseng</strong></h3>
            <p>Jika membicarakan masalah gangguan kesehatan seksual, maka ginseng sering disebut-sebut sebagai tumbuhan yang berkhasiat untuk mengatasinya. Ginseng memiliki jenis yang berbeda-beda dan tentunya dengan khasiat yang berbeda pula. Namun, secara umum ginseng mempunyai senyawa aktif yang sama yaitu, <i>ginsenosides</i> yang berperan dalam khasiat tumbuhan ini.</p>
            <p>Ginseng berkhasiat untuk menenangkan otot Mr. P dan bisa membangkitkan mood yang sangat berpengaruh pada saat berhubungan seksual. Selain itu, ginseng juga dapat meningkatkan aliran darah ke Mr. P dan membuat ereksi bisa bertahan lama.</p>
            <h3><strong>5. Pisang</strong></h3>
            <p>Buah yang satu ini sangat mudah di dapatkan di mana saja. Pisang mengandung enzim bromelain yang merangsang produksi hormon testosteron. Selain itu, kalium dan vitamin B pada pisang memberi energi untuk meningkatkan stamina.</p>
            <p>Pisang juga bisa meningkatkan libido dan stamina seksual sehingga baik untuk mengonsumsi pisang sebelum berhubungan seksual. Buah satu ini juga efektif meningkatkan jumlah sperma.</p>
            <p>Kamu bisa mengonsumsi makanan-makanan tersebut secara rutin untuk mendapatkan manfaat yang maksimal. Seimbangkan dengan rutin olahraga dan gaya hidup sehat.</p>
            <p>Jangan lupa untuk selalu menjaga kondisi tubuh selalu sehat dan pikiran yang tenang dengan mengelola stres dengan baik dan menjaga kebiasaan hidup sehat.</p>
            <p>Jika sudah melakukan hal-hal tersebut kamu jadi bisa membangun situasi yang romantis dengan istri tanpa khawatir akan terganggu dengan ejakulasi dini.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Tips Merawat Wajah Berjerawat Pada Pria';
        $blog->category = 'Acne';
        $blog->date = '30 July 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/perawatan-wajah-berjerawat-pria.jpg';
        $blog->url_name = 'tips-merawat-wajah-berjerawat-pada-pria';
        $blog->subtitle = "Wajah berjerawat emang ganggu penampilan. Tapi, merawat wajah berjerawat juga ngga bisa cuma bermodal facial wash aja. Butuh beberapa hal yang harus dilakukan supaya wajah bebas jerawat dan sehat.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Wajah merupakan bagian tubuh yang paling pertama diperhatikan orang. Makanya merawat wajah itu sangat penting agar senantiasa terjaga kebersihan dan kesehatannya. Namun, nyatanya nggak semua orang memiliki kondisi wajah yang bersih.</p>
                    <p>Masalah jerawat menjadi salah satu hal yang sering dialami pria. Merawat wajah berjerawat pun nggak cukup cuma dengan cuci muka saja. Lantas bagaimana merawat wajah yang sudah berjerawat? Apa saja yang harus dilakukan?</p>
                </i>
            </div>

            <p>Rambut merupakan bagian tubuh manusia yang mempunyai peran penting untuk melindungi kepala. Namun, rambut juga nggak selalu sehat karena masalah kerontokan dan kebotakan menjadi ancaman bagi setiap orang.</p>
            <p>Rambut juga merupakan salah satu bagian dari tubuh yang mengalami siklus sehingga meski mengalami rontok, rambut tetap akan bisa bertumbuh. Siklus rambut terbagi menjadi tiga fase, yaitu :
                <ol>
                    <li>Fase anagen atau pertumbuhan, yaitu fase di mana rambut akan mengalami pertumbuhan. Lamanya fase ini adalah 2 – 6 tahun.</li>
                    <li>Fase katagen atau peralihan, di mana rambut sedang mengalami transisi setelah fase anagen terjadi. Pada fase ini rambut akan berhenti tumbuh. Biasanya berlangsung selama 1 – 2 minggu.</li>
                    <li>Fase telogen atau istirahat. Pada masa ini rambut akan mengalami kerontokan dan akan digantikan dengan rambut baru. Fase ini berlangsung selama 5 – 12 minggu.</li>
                </ol>
            </p>
            <p>Wajah yang bersih, bebas jerawat, dan sehat merupakan dambaan setiap orang, termasuk para pria. Wajah juga merupakan hal pertama yang akan dilihat orang lain. Tentunya kondisi wajah juga bisa mempengaruhi tingkat kepercayaan diri seseorang.</p>
            <p>Merawat wajah menjadi salah satu hal penting yang nggak boleh dilewatkan agar senantiasa terjaga kebersihan dan kesehatannya. Namun, bagaimana jika wajah sudah terlanjur bermasalah, misalnya berjerawat? Apakah bisa diatasi dan bagaimana cara merawatnya?</p>
            <h2><b>Cara Merawat Wajah Berjerawat</b></h2>
            <p>Merawat wajah berjerawat tentu akan berbeda dengan merawat wajah tanpa jerawat. Ada beberapa hal yang harus dilakukan untuk dapat mengatasi jerawat, bukan hanya soal menjaga kulit untuk tetap segar.</p>
            <p>Perawatan wajah untuk kulit berjerawat nggak bisa sembarangan karena efeknya justru bisa memperburuk kondisi jerawat, seperti bengkak, nyeri, bahkan noda hitam bekas jerawat. Wajahmu akan makin bermasalah dan butuh waktu lama lagi untuk memperbaikinya.</p>
            <p>Meski merawat wajah berjerawat nggak bisa sembarangan, kamu tetap bisa menjaga kulit untuk tetap segar sekaligus mengempeskan jerawat.</p>
            <p>Berikut beberapa tips yang bisa kamu lakukan untuk merawat kulit berjerawat :</p>
            <h3><b>1. Jangan Memencet Jerawat</b></h3>
            <p>Inilah hal yang sering menjadi godaan seseorang ketika berjerawat, memencet jerawat. Hal itu sangat tidak disarankan karena justru akan memperparah kondisi jerawat, seperti infeksi dan jika pecah pun akan meninggalkan bekas noda hitam yang lama hilangnya. Kamu bisa mengompres jerawat dengan es batu untuk mengurangi pembengkakan dan meredakan nyeri pada area yang berjerawat.</p>
            <h3><b>2. Kurangi Menyentuh Wajah</b></h3>
            <p>Menyentuh wajah juga bisa menjadi penyebab munculnya jerawat. Maka, kurangi menyentuh wajah saat kamu beraktifitas. Tangan yang kurang bersih bisa membawa bakteri dan kotoran yang bisa menempel pada wajah, termasuk dari ponsel yang kau gunakan sehari-hari.</p>
            <p>Rajin cuci tangan dan kurangi menyentuh wajah, terlebih setelah kamu memegang barang-barang di sekitarmu. Jangan lupa untuk cuci wajah secara rutin 2x sehari.</p>
            <h3><b>3. Penuhi Kebutuhan Air Putih</b></h3>
            <p>Jangan sepelekan air putih karena kekurangan air putih juga sangat berpengaruh kepada kondisi kulit. Kurangnya asupan air putih bisa memicu dehidrasi pada kulit.</p>
            <p>Selain itu, kulit juga menjadi mudah berjerawat dan kusam karena kulit kehilangan kelembabannya. Maka, penuhi kebutuhan air putih yang cukup, jangan sampai berlebihan, apalagi kurang.</p>
            <h3><b>4. Gunakan Pelembab Khusus Kulit Berjerawat</b></h3>
            <p>Selain mencuci wajah, kamu juga harus menggunakan krim pelembab wajah yang mengandung clindamycin untuk melengkapi perawatan wajah berjerawatmu.</p>
            <div class="product-blog container-fluid" style="width: 400px; max-width: 100%;">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/product-day-cream.jpg); width: 100%; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height">
                        <div class="font-bold">Mau tampil PD? Yuk pakai Day Cream Elio!</div>
                        <a href="'. base_url() .'jerawat/">
                            <div class="main-button margin-top-30px text-center font-12px">Lihat Day Cream</div>
                        </a>
                    </div>
                </div>
            </div>
            <p>Clindamycin bekerja efektif melawan bakteri penyebab jerawat sehingga mampu mengatasi jerawat pada wajahmu. Pakai secara teratur untuk mendapatkan hasil yang maksimal dan manfaat pada wajah.</p>
            <h3><b>5. Atur Pola Makan</b></h3>
            <p>Makanan menjadi hal yang berpengaruh pada kondisi kulit. Makanan yang kamu konsumsi harus mengandung gizi dan vitamin yang cukup untuk memenuhi kebutuhan kulit dalam memerangi jerawat di wajah.</p>
            <p>Makanan yang bisa kamu konsumsi untuk mengatasi jerawat adalah kacang-kacangan, wortel, bawang putih, mentimun, brokoli, jeruk, dan pisang.</p>
            <p>Merawat kulit berjerawat memang nggak gampang. Tapi, bukan berarti nggak bisa dilakukan. Asalkan kamu konsisten dan menerapkan pola hidup sehat serta perawatan wajah yang sesuai untuk kulit berjerawatmu, bukan nggak mungkin kamu bisa punya wajah yang bersih dan bonusnya bukan cuma wajah yang sehat, tapi tubuh juga sehat karena asupan gizi yang seimbang dan tepat porsi.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Mitos Penyebab Rambut Rontok. Benar Nggak Sih?';
        $blog->category = 'Hair Loss';
        $blog->date = '28 July 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/penyebab-rambut-rontok-pria.jpg';
        $blog->url_name = 'mitos-penyebab-rambut-rontok-bener-nggak-sih';
        $blog->subtitle = "Banyak orang beranggapan penyebab rambut rontok hanya terjadi pada mereka yang sudah tua. Nyatanya mitos tersebut tidak selalu benar adanya. Simak faktanya agar tidak salah informasi dan bisa mendapatkan penanganan yang tepat.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Katanya rambut rontok itu cuma terjadi sama mereka yang sudah berusia lanjut. Tapi, apakah hal itu benar adanya atau hanya mitos saja?</p>
                    <p>Masalah rambut rontok bukan hanya dialami sebagian orang. Bisa dikatakan hampir semua orang pernah mengalami rambut rontok. Maka dari itu banyak informasi yang simpang siur soal penyebab rambut rontok. Cek faktanya berikut ini!</p>
                </i>
            </div>

            <p>Rambut merupakan bagian tubuh manusia yang mempunyai peran penting untuk melindungi kepala. Namun, rambut juga nggak selalu sehat karena masalah kerontokan dan kebotakan menjadi ancaman bagi setiap orang.</p>
            <p>Rambut juga merupakan salah satu bagian dari tubuh yang mengalami siklus sehingga meski mengalami rontok, rambut tetap akan bisa bertumbuh. Siklus rambut terbagi menjadi tiga fase, yaitu :
                <ol>
                    <li>Fase anagen atau pertumbuhan, yaitu fase di mana rambut akan mengalami pertumbuhan. Lamanya fase ini adalah 2 – 6 tahun.</li>
                    <li>Fase katagen atau peralihan, di mana rambut sedang mengalami transisi setelah fase anagen terjadi. Pada fase ini rambut akan berhenti tumbuh. Biasanya berlangsung selama 1 – 2 minggu.</li>
                    <li>Fase telogen atau istirahat. Pada masa ini rambut akan mengalami kerontokan dan akan digantikan dengan rambut baru. Fase ini berlangsung selama 5 – 12 minggu.</li>
                </ol>
            </p>
            <p>Setiap hari folikel aktif akan memproduksi sel rambut. Normalnya, rambut rontok 50 – 100 helai per hari. Jika melebihi dari itu maka sebaiknya berkonsultasi ke dokter untuk mengatasinya. Penyebab rambut rontok pun bervariasi, ada yang berasal dari faktor psikologis, ada pula yang dari faktor biologis.</p>
            <h2><b>Mitos Penyebab Rambut Rontok</b></h2>
            <p>Hampir setiap orang pernah mengalami masalah rambut rontok. Penyebab rambut rontok masing-masing orang pun berbeda. Makanya, banyak orang yang akhirnya mendapatkan berbagai informasi seputar penyebab rambut rontok yang kebenarannya belum tentu.</p>
            <p>Berikut beberapa mitos penyebab rambut rontok:</p>
            <h3><b>1. Stres bisa menyebabkan rambut rontok</b></h3>
            <p><strong>Mitos</strong>: Stres dapat menjadi penyebab rambut rontok.</p>
            <p><strong>Fakta</strong>: Rambut rontok yang disebabkan oleh stres biasanya terjadi pada stres jangka panjang, contoh trauma, depresi, gangguan tidur, atau setelah melahirkan. Stres jangka pendek seperti menghadapi kemacetan, terlambat masuk kerja, dan sebagainya, umumnya nggak menyebabkan rambut rontok.</p>
            <h3><b>2. Rambut rontok hanya terjadi pada orang tua</b></h3>
            <p><strong>Mitos</strong>: Rambut rontok hanya terjadi pada orang yang bertambah usia atau sudah berada di usia 40 tahun ke atas.</p>
            <p><strong>Fakta</strong>: Seiring bertambahnya usia, manusia akan mengalami kerontokan rambut. Namun, nyatanya kerontokan rambut nggak memandang usia. Tua maupun muda bisa mengalami masalah rambut rontok. Pada usia muda, penyebab rambut rontok bisa karena perubahan hormon, asupan nutrisi yang kurang untuk proses pertumbuhan rambut, hingga <i>styling</i> rambut berlebihan.</p>
            <h3><b>3. Kadar testosteron yang berlebihan bisa menyebabkan rambut rontok</b></h3>
            <p><strong>Mitos</strong>: Kadar testosteron yang berlebihan bisa menyebabkan rambut rontok.</p>
            <p><strong>Fakta</strong>: Kadar testosteron yang berlebihan tidak menyebabkan rambut rontok. namun, hormon testosteron akan diubah menjadi dihidrotestosteron (DHT) yang jika berlebihan akan menimbulkan kerontokan rambut. Jika kamu berkonsultasi ke dokter dan penyebab rambut rontok adalah karena hormon DHT yang berlebihan, maka kamu akan disarankan untuk mengonsumsi obat yang bekerja efektif menghambat hormon DHT.</p>
            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/finasteride-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Mau tumbuh rambut? Yup, ada pill nya lho!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Finasteride</a>
                        </div>
                    </div>
                </div>
            </div>
            <h3><b>4. Terlalu sering keramas</b></h3>
            <p><strong>Mitos</strong>: Terlalu sering keramas bisa membuat rambut rapuh dan menjadi rontok.</p>
            <p><strong>Fakta</strong>: Belum ada fakta ilmiah yang membenarkan hal tersebut. Rutin keramas justru akan membersihkan kulit kepala sehingga terjaga kebersihan dan kesehatannya. Jika jarang keramas, justru akan membuat kulit kepalamu menjadi berketombe dan akhirnya menghambat pertumbuhan rambut. Lakukan keramas secara rutin, setidaknya dua hari sekali untuk menjaga rambut tetap bersih.</p>
            <h3><b>5. Bersifat permanen</b></h3>
            <p><strong>Mitos</strong>: Kerontokan rambut bersifat permanen dan tidak dapat diatasi.</p>
            <p><strong>Fakta</strong>: Rambut memiliki fase tersendiri sehingga rambut rontok tidak akan permanen. Saat rambut mengalami rontok maka selanjutnya akan tumbuh rambut baru. Untuk membantu pertumbuhan rambut, kamu bisa mengonsumsi makanan yang kaya akan protein dan biotin, nutrisi yang dibutuhkan rambut untuk menghasilkan rambut baru. Nutrisi tersebut bsa didapatkan dari makanan, seperti telur, kacang-kacangan, dan salmon.</p>
            <p>Kamu nggak perlu terlalu khawatir ketika mengalami rambut rontok. Hal itu bisa diatasi dengan perawatan rambut rontok yang tepat dan menerapkan pola hidup sehat, seperti rutin berolahraga dan memperhatikan asupan yang kaya akan nutrisi yang baik bagi pertumbuhan rambut. Jangan lupa untuk selalu mengelola stres dan cukup istirahat agar tubuh senantiasa fit serta mendapatkan kesehatan yang prima.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Penyebab dan Cara Mengatasi Ejakulasi Dini';
        $blog->category = 'Sex';
        $blog->date = '24 July 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/cara-mengatasi-ejakulasi-dini-pria.jpg';
        $blog->url_name = 'penyebab-dan-cara-mengatasi-ejakulasi-dini';
        $blog->subtitle = "Ejakulasi dini merupakan hal yang bisa saja terjadi pada setiap orang. Faktornya pun bermacam-macam. Tapi, hal tersebut masih bisa diatasi.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Menurut penelitian, 1 dari 3 pria pernah mengalami ejakulasi dini. Kondisi itu juga terjadi pada pria di segala usia. Penyebabnya pun bermacam-macam, baik psikologis maupun biologis. Sebetulnya apa sih yang dimaksud dengan ejakulasi dini? Apa penyebabnya dan bagaimana cara mengatasinya?</p>
                </i>
            </div>

            <p>Secara sederhana, ejakulasi dini terjadi ketika kamu ejakulasi terlalu cepat saat berhubungan intim. Ejakulasi dini dapat terjadi karena berbagai alasan, mulai dari penyebab psikologis hingga penyebab biologis.</p>
            <p>Kali ini kita akan memahami bagaimana ejakulasi dini terjadi dan seberapa sering itu terjadi pada pria serta beberapa pilihan paling efektif untuk mengatasinya.</p>
            <p>Kali ini kita akan memahami bagaimana ejakulasi dini terjadi dan seberapa sering itu terjadi pada pria serta beberapa pilihan paling efektif untuk mengatasinya.</p>
            <h2><b>Apa itu Ejakulasi Dini?</b></h2>
            <p>Ejakulasi dini merupakan kondisi ketidakmampuan mengontrol ejakulasi sehingga terjadi dalam waktu yang lebih cepat daripada yang diinginkan. Kamu mungkin didiagnosis dengan ejakulasi dini jika kamu:
                <ul>
                    <li>Selalu atau hampir selalu ejakulasi dalam 1 menit setelah penetrasi</li>
                    <li>Tidak dapat menunda ejakulasi selama hubungan intim</li>
                    <li>Merasa tertekan dan frustrasi serta cenderung menghindari keintiman seksual karena kekhawatiran ejakulasi dini</li>
                </ul>
            </p>
            <p>Hampir semua pria pernah mengalami ejakulasi lebih awal dari yang diharapkan. Kejadian ini normal dan bukan alasan untuk khawatir! Namun, jika kamu sering ejakulasi lebih cepat dari yang kamu atau pasangan kamu inginkan, kamu mungkin menderita ejakulasi dini.</p>
            <h2><b>Apakah Ejakulasi Dini Kondisi yang Umum?</b></h2>
            <p>Ejakulasi dini adalah kondisi yang <strong>sangat umum</strong>. Sebagian besar <a href="https://www.mayoclinic.org/diseases-conditions/premature-ejaculation/symptoms-causes/syc-20354900" target="_blank">penelitian</a> menunjukkan bahwa sebanyak 1 dari 3 pria pernah mengalami ejakulasi dini.</p>
            <p>Sebuah <a href="https://www.nhs.uk/conditions/ejaculation-problems/" target="_blank">penelitian</a> yang mengamati 500 pasangan dari 5 negara menemukan bahwa rata-rata waktu yang dibutuhkan untuk ejakulasi selama hubungan seks adalah sekitar 5 setengah menit. Namun, terserah masing-masing pasangan untuk memutuskan apakah mereka puas dengan waktu yang durasi tersebut.</p>
            <p>Singkatnya, jika kamu mengalami ejakulasi dini secara sekali atau terus-menerus, tidak ada alasan untuk khawatir. Kondisi ini terjadi pada pria dari segala usia.</p>
            <h2><b>Apa Penyebab Ejakulasi dini?</b></h2>
            <p>Sebenarnya, para peneliti belum sepenuhnya mengerti apa yang menyebabkan ejakulasi dini pada pria. Walaupun dulunya penyebab ejakulasi dini dianggap hanya faktor psikologis, dokter sekarang tahu bahwa ejakulasi dini melibatkan interaksi kompleks antara faktor psikologis dan biologis.</p>
            <p>Dari sisi psikologis, para peneliti percaya bahwa kekhawatiran tentang ejakulasi dini dan kesenangan pasangan kamu dapat memainkan peran dalam ejakulasi dini. Masalah depresi, stres, dan hubungan juga dapat berperan sebagai penyebab.</p>
            <p>Dari perspektif biologis, para ahli percaya bahwa masalah prostat, masalah tiroid dan penggunaan obat-obatan rekreasi semua berpotensi memainkan peran dalam menyebabkan ejakulasi dini. Beberapa pria mungkin juga lebih sensitif daripada yang lain terhadap kontak seksual.</p>
            <p>
                <u>Faktor-faktor psikologis yang mungkin berperan termasuk:</u>
                <ul>
                    <li>Pelecehan seksual</li>
                    <li>Citra tubuh yang buruk</li>
                    <li>Depresi</li>
                    <li>Khawatir tentang ejakulasi dini</li>
                    <li>Perasaan bersalah yang meningkatkan kecenderungan kamu untuk mempercepat hubungan seksual</li>
                    <li>Masalah dalam hubungan</li>
                    <li>Kecemasan dan kegelisahan</li>
                </ul>
            </p>
            <p>
                <u>Faktor-faktor biologis yang mungkin berperan termasuk:</u>
                <ul>
                    <li>Kadar hormon abnormal</li>
                    <li>Tingkat zat kimia otak yang abnormal disebut neurotransmiter</li>
                    <li>Peradangan dan infeksi pada prostat atau uretra</li>
                    <li>Keturunan</li>
                </ul>
            </p>
            <p>Meskipun banyak pria merasa malu membicarakannya, ejakulasi dini adalah kondisi umum dan dapat diatasi. Perawatan, konseling, dan teknik seksual yang menunda ejakulasi - atau kombinasi dari semuanya - dapat membantu meningkatkan seks untuk kamu dan pasangan.</p>
            <h2><b>Cara Mengatasi Ejakulasi Dini</b></h2>
            <p>Sebagian besar dokter menggunakan berbagai pilihan perawatan untuk membantu pasien mereka mengatasi ejakulasi dini.</p>
            <p>Saat ini, perawatan yang paling populer untuk mengatasi ejakulasi dini adalah teknik relaksasi dan komunikasi, yang dirancang untuk membantu kamu dan pasangan meningkatkan kontrol atas stimulasi seksual yang dapat menyebabkan ejakulasi.</p>
            <p>Dalam beberapa kasus, dokter juga dapat meresepkan obat tertentu untuk menurunkan tingkat sensitivitas dari hubungan seks. Dokter juga dapat merekomendasikan krim dan gel topikal, yang dirancang untuk mengurangi sensitivitas pada tingkat lokal.</p>
            <p>Dalam kasus lain, perawatan terbaik untuk ejakulasi dini adalah waktu. Banyak kasus ejakulasi dini dapat diatasi ketika pria menjadi lebih nyaman dengan pasangan mereka dan mendapatkan kontrol psikologis yang lebih baik atas kinerja seksual.</p>
            <p>Panduan kami untuk mengatasi ejakulasi dini membahas lebih lengkap teknik dan perawatan yang kamu bisa coba untuk membantu menunda ejakulasi dan meningkatkan performa seksual kamu!</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = '4 Hal Sepele Ini Ternyata Jadi Penyebab Jerawat di Pipi';
        $blog->category = 'Acne';
        $blog->date = '23 July 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/penyebab-jerawat-di-pipi-pria.jpg';
        $blog->url_name = '4-hal-sepele-ini-ternyata-jadi-penyebab-jerawat-di-pipi';
        $blog->subtitle = "Sering dianggap sepele, beberapa hal yang sering dilakukan sehari-hari ini ternyata berpotensi menyebabkan jerawat di pipi.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Jerawat. Satu kata yang bikin kepala pusing dan bisa menurunkan kepercayaan diri seseorang. Apalagi kalau jerawat terletak di wajah, makin pusing pastinya, guys.</p>
                    <p>Tahu nggak sih guys kalau ternyata ada kebiasaan sehari-hari yang dianggap sepele tapi ternyata punya dampak cukup besar dalam menciptakan jerawat di wajah, terutama di pipi. Apa saja sih hal sepele yang bisa menyebabkan jerawat di pipi?</p>
                </i>
            </div>

            <p>Masalah jerawat memang sering banget jadi hal yang cukup memusingkan. Letak jerawat pun bisa timbul di berbagai area wajah, bahkan ada pula yang bukan hanya di satu area tertentu, tapi di hampir seluruh area wajah.</p>
            <p>Jerawat terjadi ketika terjadi penyumbatan pada folikel rambut. Penyumbatan disebabkan karena kotoran yang menumpuk pada pori-pori, produksi minyak (sebum) yang berlebihan, hingga bakteri.</p>
            <h2><b>Penyebab Jerawat di Pipi</b></h2>
            <p>Letak jerawat bukan hanya di wajah, tapi juga leher, dada, dan punggung. Jerawat yang berada di wajah bisa semakin parah jika perawatan kurang maksimal dan tidak didukung dengan gaya hidup yang sehat.</p>
            <p>Jerawat pada wajah, terutama pipi pastinya bikin kamu resah dan nggak pede, guys.</p>
            <p>Tahu nggak sih kalau ternyata ada kebiasaan sehari-hari yang terdengar sepele tapi ternyata memicu timbulnya jerawat di pipi. Apa aja sih? Berikut pembahasannya!</p>
            <h3><strong>1. Sering Menyentuh Wajah</strong></h3>
            <p>Selama beraktifitas sehari-hari, kamu pasti secara nggak sengaja akan menyentuh wajah dan itu bisa terjadi selama berkali-kali.</p>
            <p>Dari kebiasaan yang seringnya nggak disadari itulah yang ternyata mengundang bakteri pada wajah dan akhirnya menyebabkan jerawat pada pipi. Jika sudah ada jerawat di pipi, tentunya akan semakin parah.</p>
            <p>Mulai sekarang hindari menyentuh wajah terlalu sering karena kuman dan bakteri pada tangan bisa berpindah ke wajah.</p>
            <h3><strong>2. Sarung Bantal yang Jarang Diganti</strong></h3>
            <p>Hal satu ini bisa dikatakan jauh dari perhatian pria. Tapi, justru jadi hal yang menyumbang jerawat pada pipi.</p>
            <p>Sel-sel kulit mati, kotoran, dan bakteri berkumpul di sarung bantal. Saat kamu menggunakan bantal, otomatis kotoran dan bakteri akan menempel pada kulit wajah dan dapat menyumbat pori-pori wajah.</p>
            <p>Rutin ganti sarung bantal beberapa hari sekali atau seminggu sekali untuk menghindari penumpukan kotoran. Selain itu, pilih bahan katun lembut yang menyerap supaya nggak menimbulkan jerawat.</p>
            <h3><strong>3. Layar Ponsel yang Kotor</strong></h3>
            <p>Ponsel yang biasa kamu gunakan bisa jadi sarang kuman, guys. Kenapa gitu? Sehari-hari kamu pasti pegang ponsel berkali-kali. Kamu nggak sadar setelah menyentuh apa pun lalu menyentuh ponsel. Alhasil bakteri dan kotoran dari tempat lain bisa berpindah ke ponsel.</p>
            <p>Sudah bisa dipastikan kuman yang ada di ponsel akan menempel di wajah saat kamu menggunakan ponsel untuk menelpon. Makanya, dianjurkan untuk rajin membersihkan layar dan sisi ponsel lainnya.</p>
            <h3><strong>4. Terlalu Banyak Konsumsi Gula</strong></h3>
            <p>Makanan dan minuman manis dapat memicu tumbuhnya jerawat di pipi. Makanan yang berkarbohidrat, seperti nasi putih, roti, atau pasta serta minuman manis bisa menyebabkan peningkatan hormon androgen lebih aktif.</p>
            <p>Peningkatan hormon androgen dapat menyebabkan produksi sebum yang berlebihan sehingga dapat menyumbat pori-pori dan menyebabkan kulit berjerawat.</p>
            <p>Kurangi konsumsi makanan dan minuman yang mengandung gula. Seimbangkan dengan olahraga teratur dan makanan sehat yang kaya gizi dan nutrisi.</p>
            <p>Selain mengantisipasi hal-hal di atas, atur pola hidup sehat dan perhatikan jenis makanan yang masuk ke tubuhmu. Jangan sampai kamu sudah mengatasi hal-hal sepele di atas tapi gaya hidup dan makananmu nggak sehat. Penyebab jerawat nggak cuma dari luar aja, tapi juga dari dalam, terutama asupan ke tubuhmu.</p>
            <p>Maksimalkan perawatan wajah agar terhindar dari jerawat. Namun, jika wajahmu sudah mengalami masalah jerawat, atasi dengan <a href="' . base_url() . 'jerawat/">Essential Acne Kit</a></p>
            <p>Rangkaian Complete Acne Kit secara efektif dapat mengatasi jerawat dan memperbaiki tekstur kulit. Selain itu, kamu bisa melakukan konsultasi online dengan dokter ahli norm secara gratis melalui website norm.</p>
            <p>Jadi, nggak perlu antri ke dokter dan pastinya bisa dilakukan kapan pun dan di mana pun.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Tips Grooming Bagi Pria untuk Tampil Menarik';
        $blog->category = 'Hair Loss';
        $blog->date = '21 July 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tips-grooming-pria.jpg';
        $blog->url_name = 'tips-grooming-bagi-pria-untuk-tampil-menarik';
        $blog->subtitle = "Pria juga wajib memperhatikan penampilan, terlebih soal grooming. Grooming yang tepat bisa bikin penampilanmu lebih menarik dan eye catching. Gimana caranya? Simak ulasannya berikut!";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Penampilan yang menarik jadi hal yang diinginkan bukan cuma wanita, tapi juga pria. Makanya grooming juga penting buat pria biar penampilan lebih bersih, rapi, dan harum. Meski grooming pria lebih simple tapi kamu wajib tahu poin penting apa saja yang diperlukan untuk grooming yang tepat nggak berlebihan biar nggak berakhir bikin malas dekat-dekat kamu.</p>
                </i>
            </div>

            <p>Meski pria, kamu wajib memperhatikan penampilan, terlebih soal grooming. Grooming pria memang lebih simple dibandingkan wanita. Tapi, kamu harus tetap harus peduli soal grooming biar lebih rapi dan tentunya menarik.</p>
            <p>Jangan salah guys, grooming merupakan hal dasar yang penting untuk diperhatikan. Bayangkan jika kamu nggak grooming, apa kabar dengan brewokmu? Apa kabar dengan aroma tubuh dan mulut? Kalau nggak diperhatikan tentunya bakal bikin orang di sekitar kita malas mendekat. Wah, gawat juga kalau si dia sang pujaan hati juga ikutan malas dekat-dekat.</p>
            <p>Makanya, penting banget kan buat grooming?</p>
            <p>Buat wanita, bertemu degan pria yang bersih, rapi, dan harum pastinya merupakan hal yang menyenangkan. Apalagi buat kamu dengan pekerjaan yang mengharuskan bertemu dengan banyak orang, udah wajib banget melakukan grooming.</p>
            <p>Nah, melakukan grooming juga nggak bisa sembarangan. Ada poin-poin penting yang harus diperhatikan guys biar nggak salah tatanan. Berikut tipsnya untuk kamu!</p>
            <h2><b>1. Aroma Tubuh</b></h2>
            <p>Aroma tubuh jadi hal yang dinilai wanita jika bertemu pria. Aroma yang nyaman dan tidak menyengat di hidung tentunya bikin wanita atau orang di sekitarmu betah dekat-dekat.</p>
            <p>Gunakan deodorant anti-perspirant setelah mandi untuk mengontrol keringat berlebih. Jangan sampai deh baju udah rapi dan oke eh ketiakmu malah basah kuyup.</p>
            <p>Selain itu, pilih parfum dengan aroma yang ringan tapi tahan lama agar selama beraktifitas kamu tetap harum dan segar.</p>
            <h2><b>2. Rambut Kuat dan Rapi</b></h2>
            <p>Rambut sangat memengaruhi keseluruhan tampilanmu, terutama wajah. Apa pun jenis rambutmu dan bagaimana gaya potongannya, utamakan kebersihan dan kekuatannya.</p>
            <p>Rambut yang bersih, bebas ketombe, dan pastinya nggak rontok tentunya akan menunjang penampilanmu dan lebih percaya diri. Jika kamu sedang mengadakan pertemuan dengan rekan kerja atau wanita, lalu rambutmu rontok atau berketombe dan tiba-tiba rambut atau ketombemu jatuh di bahu, hilang sudah fokus pada wajah tampanmu.</p>
            <p>Nggak mau dong hal itu kejadian?</p>
            <p>Kalau rambutmu mulai rontok, rawat dengan produk yang sesuai untuk mengatasi kerontokan rambutmu.</p>
            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/hair-tonic-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Minoxidil</a>
                        </div>
                    </div>
                </div>
            </div>
            <p>Elio hair loss kit efektif mengatasi kerontokan rambutmu dengan cara menghambat hormon DHT yang menyebabkan kerontokan rambut dan merangsang pertumbuhan rambut baru. Rambut bebas rontok, grooming makin oke.</p>
            <h2><b>3. Kebersihan Wajah</b></h2>
            <p>Hal utama grooming adalah kebersihan wajah. Kamu bisa melakukan perawatan wajah sesuai dengan kondisi kulit. Jaga kulit wajah untuk tidak kusam, terhidrasi, dan nggak berminyak. Jika kamu mengalami kulit berjerawat, jangan sampai salah produk ya.</p>
            <p>Lakukan perawatan khusus pria untuk kulit berjerawat. Jangan cuma pakai facial wash aja, tapi juga lengkapi dengan krim anti jerawat yang mengandung <strong>clindamycin</strong> yang efektif mengatasi jerawat.</p>
            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/day-cream-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Mau tampil PD? Yuk pakai Day Cream Elio!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'jerawat/">Lihat Day Cream</a>
                        </div>
                    </div>
                </div>
            </div>
            <p>Selain itu, kamu juga bisa melengkapi perawatan dari dalam dengan konsumsi makanan yang mengandung vitamin A dan C, serta ikan dan sayur-sayuran yang mengandung omega-3 dan anti bakteri yang mampu melawan bakteri penyebab jerawat.</p>
            <h2><b>4. Aroma Tubuh</b></h2>
            <p>Wajah sudah bersih dan aroma tubuh sudah oke, tapi kuku tangan dan kaki lupa dirapikan? Waduh… Jangan sampai ya, guys! Kuku tangan yang kotor tentunya nggak indah dipandang dan pastinya mengganggu grooming kamu.</p>
            <p>Meski kuku kaki nggak tentu dilihat orang, tapi jangan salah, kuku kaki yang kotor bisa menimbun kuman dan pastinya bisa menyebabkan bau kaki.</p>
            <h2><b>5. Brewok dan Kumis yang Rapi</b></h2>
            <p>Buat kamu yang punya rambut di wajah, seperti brewok dan kumis, rapikan setiap hari ya biar terjaga kerapiannya. Rambut di wajah yang dirapikan secara rutin bukan hanya bikin kamu terlihat menarik tapi juga membentuk wajah yang tegas.</p>
            <p>Nggak hanya brewok dan kumis, bulu hidung juga mesti dijaga kerapiannya. Meski terdengar sepele, tapi merapikan bulu hidung juga menambah estetika wajah dan pastinya menjaga hidung tetap bersih dan sehat.</p>
            <h2><b>6. Gigi dan Mulut yang Bersih</b></h2>
            <p>Nah ini grooming yang yang nggak boleh terlewat, kebersihan gigi dan mulut. Sikat gigi secara rutin dan lakukan flossing setiap habis makan untuk mencegah sisa makanan terselip pada gigi. Nggak mau kan ada sisa cabai atau sayuran yang merusak keindahan gigimu?</p>
            <p>Kamu bisa menyediakan permen karet atau permen penyegar mulut yang bisa kamu konsumsi kapan pun saat kamu merasa nafasmu kurang segar.</p>
            <p>Wajib banget kan buat pria melakukan grooming agar penampilan tetap terjaga dan pastinya semakin menarik. Grooming juga termasuk ke dalam upaya menjaga kebersihan dan kesehatan tubuhmu. Jadi, hal itu penting banget untuk kamu lakukan ya, guys!</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = '5 Makanan Ini Berkhasiat Mengatasi Rambut Rontok';
        $blog->category = 'Hair Loss';
        $blog->date = '16 July 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/lima-makanan-mengatasi-rambut-rontok-pria.jpg';
        $blog->url_name = '5-makanan-ini-berkhasiat-mengatasi-rambut-rontok';
        $blog->subtitle = "Rambut rontok kerap jadi masalah yang dihadapi para pria. Makanya, perlu banget untuk mengatasi rambut rontok. Perawatan bukan cuma dari luar, tapi juga dari dalam, seperti memenuhi kebutuhan nutrisinya.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Perawatan rambut rontok emang nggak bisa sembarangan, guys. Kalo cuma perawatan dari luar, pasti tubuh juga butuh nutrisi untuk proses pertumbuhan rambut. Kalau nutrisinya kurang, kerontokan rambutmu bisa parah, lho.</p>

                    <p>Perawatan dari dalam bisa kamu lakukan dengan memenuhi kebutuhan nutrisi dari makanan berikut ini. Nggak susah kok merawat rambut rontok, asal kamu maksimalkan perawatannya dari luar maupun dari dalam.</p>
                </i>
            </div>

            <p>Merawat rambut rontok harus dilakukan secara maksimal, bukan cuma dari luar aja, tapi juga perlu memperhatikan asupan yang masuk ke tubuhmu.</p>
            <p>Rambut yang tumbuh membutuhkan banyak nutrisi yang tentunya diambil dari apa yang kita makan. Maka, supaya sel-sel dalam tubuhmu bertumbuh dengan baik dan sehat, kamu pun harus mengonsumsi makanan-makanan yang bernutrisi dan dibutuhkan oleh rambutmu untuk tumbuh dengan baik.</p>
            <p>Jadi, mulai dari sekarang kamu harus memperhatikan apa saja jenis makanan yang masuk ke tubuhmu. Makanan yang baik dan penuh nutrisi bisa membantu mengatasi rambut rontok dari dalam.</p>
            <p>Berikut 5 makanan yang punya khasiat untuk mengatasi rambut rontok dari dalam. Simak ulasannya berikut!</p>
            <h2><b>1. Salmon</b></h2>
            <p>Salmon kaya akan asam lemak omega 3 yang juga sebagai sumber protein tinggi. Ikan laut satu ini juga mengandung vitamin B12 dan zat besi yang efektif meningkatkan pertumbuhan rambut dan menjaga kesehatan kulit kepala.</p>
            <h2><b>2. Telur</b></h2>
            <p>Kandungan telur kaya protein dan biotin. Dua nutrisi tersebut sangat penting dalam proses pertumbuhan rambut. Protein berperan menjaga kesehatan folikel rambut. Sedangkan, biotin membantu produksi keratin yang mendorong pertumbuhan rambut. Nah, kalau kamu kekurangan salah satu dari nutrisi tersebut, rambut pastinya akan rontok, guys.</p>
            <h2><b>3. kacang-kacangan</b></h2>
            <p>Kacang merah atau kacang polong bisa menjadi sumber protein yang kaya akan zat besi, seng, dan biotin yang mampu merangsang pertumbuhan rambut. Selain itu, kamu juga bisa konsumsi walnut yang mengandung omega-3. Omega-3 baik untuk memperbaiki kondisi rambut.</p>
            <h2><b>4. Gandum</b></h2>
            <p>Gandum mengandung mineral seng, serat, dan asam lemak omega-6 yang mampu merangsang pertumbuhan rambut dan juga membantu menjaga kekuatan rambut. Kamu bisa jadikan gandum sebagai sarapan sehatmu tiap hari. Kenyangnya dapat, sehatnya juga dapat, guys.</p>
            <h2><b>5. Bayam</b></h2>
            <p>Sayuran hijau satu ini dikenal dengan kandungannya yang nggak main-main. Bayam mengandung vitamin B, C, dan E serta kalium, kalsium, zat besi, magnesium, hingga asam lemak omega-3. Semua nutrisi itu membantu menjaga kesehatan rambut. Jadi, jangan ragu untuk memasukkan bayam dalam menu harianmu.</p>
            <p>Semua nutrisi tadi memang sangat dibutuhkan untuk kesehatan dan proses pertumbuhan rambut sehingga untuk memenuhi kebutuhan nutrisinya, sebaiknya konsumsi secara teratur dalam diet harianmu.</p>
            <p>Selain itu, lengkapi perawatan untuk mengatasi rambut rontok dengan <a href="' . base_url() . 'rambut-rontok/">Hair Loss Kit</a> dari Elio</p>
            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/finasteride-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Mau tumbuh rambut? Yup, ada pill nya lho!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Finasteride</a>
                        </div>
                    </div>
                </div>
            </div>
            <p>Kandungan di dalam produk perawatan rambut dari Elio efektif membantu mengatasi rambut rontok.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Bukan Cuma Penampilan, Pria dengan Kepribadian Ini Sangat Disukai Wanita!';
        $blog->category = 'Other';
        $blog->date = '14 July 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/kepribadian-pria.jpg';
        $blog->url_name = 'bukan-cuma-penampilan-pria-dengan-kepribadian-ini-sangat-disukai-wanita';
        $blog->subtitle = "Bukan hanya tampilan aja yang dinilai para wanita, tapi kepribadian juga jadi salah satu faktor yang dipertimbangkan wanita dari seorang pria. Kepribadian seperti apa sih yang disukai wanita?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="font-medium"><i>Preview 30 Seconds</i></p>
                    <p>Memahami wanita memang bukan perkara mudah ya, guys. Tapi, bicara soal pria di mata wanita, bukan hanya fisik semata karena wanita nggak cuma memandang penampilanmu aja, tapi juga kepribadianmu.</p>

                    <p>Dari sekian banyak kepribadian pria, ternyata 5 kepribadian berikut menjadi hal yang disukai wanita, lho!</p>
                </i>
            </div>

            <p>Bicara kriteria pria yang disukai wanita, tentu mereka akan punya jawaban yang berbeda. Namun, hampir semua wanita setuju dengan karakter pria yang perhatian, setia, dan dewasa.</p>
            <p>Pada dasarnya setiap wanita ingin dibuat nyaman dan bahagia oleh pria. Tapi, nggak jarang pria sering salah terka soal hal apa yang disukai wanita.</p>
            <p>Nah, berikut ada beberapa kepribadian pria yang umumnya disukai wanita. <i>Let’s check this out!</i></p>
            <h2><b>1. Humoris</b></h2>
            <p>Pernah nggak kepikiran kenapa pria-pria komedian lebih banyak menarik perhatian wanita? Jawabannya adalah karena mereka lebih asik dan mampu membuat wanita merasa terhibur. Pria humoris biasanya pandai mencairkan suasana sehingga wanita betah berada di dekatnya. Selama humornya nggak berlebihan, wanita pasti akan menyukainya.</p>
            <h2><b>2. Cerdas</b></h2>
            <p>Pria yang cerdas terlihat seksi di mata wanita. Mereka akan lebih mudah diajak ngobrol berbagai hal, bukan cuma soal perasaan. Pria yang cerdas bisa memecahkan masalah sehingga menciptakan rasa aman bagi wanita.</p>
            <h2><b>3. Hangat dan Penyayang</b></h2>
            <p>Wanita mana yang nggak menyukai pria yang hangat, terlebih lagi penyayang? Karena dasarnya wanita adalah makhluk yang selalu ingin disayang, makanya ketika ada pria yang berkepribadian hangat dan penyayang akan lebih mudah bagi mereka untuk menyukainya, bahkan bisa membuat jatuh cinta.</p>
            <h2><b>4. Optimis</b></h2>
            <p>Pria optimis dan pantang menyerah akan mampu untuk berjuang mengalahkan rintangan. Hal itu jadi nilai tersendiri bagi wanita kerna menunjukkan kekuatannya dalam berjuang, bukan hanya untuk hidup tapi juga hati si wanita pujaannya. Jadi, para pria wajib banget nih punya sifat yang satu ini.</p>
            <h2><b>5. Pendengar yang Baik</b></h2>
            <p>Nah ini dia yang paling wanita suka, guys. Kita tahu bahwa dalam sehari wanita mampu mengeluarkan ribuan kata. Para pria harus memahami bahwa wanita ingin didengarkan karena dengan begitu mereka akan merasa nyaman dan dimengerti. Apalagi buat kamu yang sudah menikah, wajib banget menjadi pendengar yang baik untuk sang istri.</p>
            <p>Semua kepribadian di atas akan semakin lengkap kalau kamu juga punya perhatian ekstra kepada pasangan saat di tempat tidur. Tentunya kamu akan punya nilai tambah yang membuat wanita semakin jatuh cinta.</p>
            <p>Jadi, kalau kamu punya masalah dengan si ‘teman’, jangan ragu buat konsultasi di <a href="' . base_url() . '">norm.id</a></p>
            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/sildenafil-50mg-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Atasi disfungsi ereksi dengan Sildenafil!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'ed/">Lihat Sildenafil</a>
                        </div>
                    </div>
                </div>
            </div>
            <p>Nggak perlu khawatir karena privasimu dijamin aman dan konsultasimu akan dijawab oleh dokter yang ahli di bidangnya.</p>
            <p>Jangan sampai deh masalah itu mengganggu nilai diri kamu yang udah oke hanya karena si ‘teman’ yang nggak bisa diajak kerjasama saat udah bersama pasangan.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Hati-Hati! Begadang Ternyata Bisa Jadi Penyebab Rambut Rontok';
        $blog->category = 'Hair Loss';
        $blog->date = '09 July 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/begadang-penyebab-rambut-rontok.jpg';
        $blog->url_name = 'hati-hati-bergadang-ternyata-bisa-jadi-penyebab-rambut-rontok';
        $blog->subtitle = "Suka begadang? Jangan sepelekan kebiasan itu ya guys karena kebiasaan begadang nggak cuma mengganggu kesehatan fisik dan mental aja, tapi juga bisa menyebabkan rambut rontok.";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="preview-title"><i>Preview 30 Seconds</i></p>
                    <p>Pekerjaan yang banyak bikin kamu keseringan begadang? Hati-hati guys karena kebiasaan begadang ternyata bisa jadi penyebab rambut rontok, lho.</p>

                    <p>Kita tahu bahwa saat tidur, tubuh memperbaiki kondisi fisik dan mental. Jadi, jika kamu kekurangan waktu tidur yang cukup tentunya akan sangat berpengaruh ke kesehatan fisik dan mental. Nggak cuma itu, kurang tidur juga bikin kinerja hormon pertumbuhan di tubuh menurun sehingga mengganggu kesehatan rambut, salah satunya adalah kerontokan.</p>

                    <p>Nah, biar nggak salah produk lagi, kenali dulu yuk karakteristik kulit wajahmu!</p>
                </i>
            </div>

            <p>Siapa nih para pria yang hobi begadang? Jangan disepelekan ya, karena begadang bisa menimbulkan berbagai macam masalah dan penyakit. Salah satunya adalah kerontokan rambut.</p>
            <p>Mungkin sebagian besar pria nggak sadar kalau ternyata kebiasaan yang terlihat sepele ini nyatanya punya efek yang besar bagi tubuh. Selain mengganggu kesehatan tubuh, juga menyebabkan masalah rambut rontok.</p>
            <h2><b>Kurang Tidur Bisa Sebabkan Rambut Rontok?</b></h2>
            <p>Kebutuhan jam tidur tiap orang berbeda-beda, tergantung usia. Pada orang dewasa, porsi tidur dikatakan cukup jika mencapai 6 – 8 jam sehari. Saat tidur, tubuh memperbaiki kondisi fisik dan mental. Jadi, bisa dibayangkan jika kamu kekurangan jam tidur. Selain akan mengantuk sepanjang hari, kondisi tubuh dan mental kamu pun bisa terganggu.</p>
            <p>Pernah kan kamu mengalami mood yang kurang bagus lantaran waktu tidurmu kurang? Selain itu juga menurunkan konsentrasi sehingga bisa berpengaruh ke performa kerja.</p>
            <p>Nggak cuma itu aja, pola tidur yang nggak teratur alias kebiasaan begadang ataupun mengalami kesulitan tidur di malam hari juga ternyata bisa menyebabkan rambut rontok, lho.</p>
            <p>Seperti yang kita tahu bahwa saat manusia tidur, tubuh bekerja melakukan regenerasi sel-sel serta memperbaiki mood kamu. Nah, hal itu juga berlaku bagi hormon pertumbuhan ya, guys.</p>
            <p>Saat kurang tidur, hormon pertumbuhan jadi terganggu dan rambut akan menjadi tipis serta menjadi rapuh. Jika kebiasaan begadang kamu lakukan terus-menerus maka rambut pun akan menjadi tidak sehat dan menimbulkan kerontokan. Nggak mau dong saat usiamu makin bertambah, efek dari kebiasaan saat ini malah terbawa terus?!</p>
            <h2><b>Cara Mengatasi Rambut Rontok</b></h2>
            <p>Kamu nggak perlu terlalu khawatir karena rambut rontok bisa diatasi, kok. Kamu perlu mengubah gaya hidup menjadi lebih sehat dan mengatur waktu tidur secukupnya.</p>
            <p>Kamu bisa melakukan hal-hal berikut ini untuk menunjang kesehatan dari dalam:</p>
            <p>
                1. Asupan nutrisi yang cukup dan mengandung gizi yang seimbang<br>
                2. Tidur teratur 6 – 8 jam sehari<br>
                3. Rutin berolahraga<br>
                4. Kurangi rokok dan alkohol sebelum tidur
            </p>
            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/hair-tonic-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Minoxidil</a>
                        </div>
                    </div>
                </div>
            </div>
            <p>Selain mengubah gaya hidup lebih sehat, kamu juga perlu mendukungnya dari luar, seperti perawatan rambut rontok khusus pria dari Elio. Selain menggunakan Anti DHT Shampoo, lengkapi perawatan rambut rontok dengan <a href="' . base_url() . 'rambut-rontok/">Minoxidil</a> yaitu tonic yang bekerja merangsang pertumbuhan dan menghentikan kerontokan rambut.</p>
            <p>Jika sudah menjalani pola hidup sehat dan perawatan rambut rontok secara rutin, maka rambut sehat dan bebas rontok bisa kamu miliki. So, bukan cuma wanita aja yang butuh perawatan, para pria juga wajib menjaga kesehatan tubuh dan penampilannya.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Wah, Ternyata Kulit Wajah Pria Beda Loh dengan Wanita!';
        $blog->category = 'Acne';
        $blog->date = '07 July 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/kulit-wajah-pria-berminyak.jpg';
        $blog->url_name = 'wah-ternyata-kulit-wajah-pria-beda-loh-dengan-wanita';
        $blog->subtitle = "Sudah pakai produk perawatan wajah tapi masih sharing product dengan pasangan? Jangan salah, kulit wajahmu beda dengan kulit wajah wanita loh!";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="preview-title"><i>Preview 30 Seconds</i></p>
                    <p>Mau punya wajah bersih dan bebas jerawat tapi bingung harus mulai dari mana? Atau udah pakai produk perawatan wajah tapi masih sharing product dengan pasangan?</p>

                    <p>Kalau kamu masih pakai skin care product punya pasanganmu, you must stop it right now!</p>

                    <p>Karena nyatanya karakter kulit wajah pria dengan wanita itu berbeda lho, guys. Beberapa perbedaan tersebut di antaranya adalah :</p>

                    <p>
                        1. Rambut pada Wajah<br>
                        2. Kadar Kolagen<br>
                        3. Ketebalan Kulit<br>
                        4. Pori-Pori Wajah
                    </p>

                    <p>Nah, biar nggak salah produk lagi, kenali dulu yuk karakteristik kulit wajahmu!</p>
                </i>
            </div>

            <p>Perawatan wajah bukan hanya pada wanita, tapi juga untuk pria. Merawat kulit wajah juga merupakan bagian dari perawatan tubuh, makanya penting banget untuk melakukan perawatan wajah pada pria secara rutin agar kesahatan kulit tetap terjaga.</p>
            <p>Tapi, perawatan wajah pria juga harus diperhatikan. Nggak bisa sharing skincare product bareng pasanganmu karena kulit wajah pria dan wanita berbeda ya, guys.</p>
            <p>Berikut beberapa sifat kulit pria yang berbeda dengan wanita :</p>
            <h2><b>1. Rambut Pada Wajah</b></h2>
            <p>Perawatan wajah pada pria bukan hanya untuk kulit saja, tapi juga rambut pada wajah. Berbeda dengan wanita yang tak memiliki rambut pada wajah. Pria harus memperhatikan sabun pembersih wajah untuk menjaga wajah tetap bersih agar saat bercukur tidak membawa kotoran masuk ke dalam pori-pori. Selain itu, perawatan pada jenggot dan kumis juga menjadi tambahan untuk menjaga kebersihannya.</p>
            <h2><b>2. Kadar Kolagen</b></h2>
            <p>Pada wajah pria, kadar kolagen kulit cenderung lebih tinggi daripada kulit wanita sehingga penuaan pada kulit pria cenderung lambat meski kamu dan pasanganmu mungkin berada pada usia yang sama. Makanya, produk anti-aging kebanyakan ditujukan kepada wanita.</p>
            <h2><b>3. Ketebalan Kulit</b></h2>
            <p>Konsentrasi hormon yang berbeda pada pria dan wanita mempengaruhi tingkat ketebalan kulit. Kulit pria sekitar 20% lebih tebal daripada kulit wanita sehingga kulit pria lebih kuat dan tentunya produk perawatan yang digunakan pun akan berbeda dengan wanita.</p>
            <h2><b>4. Pori-Pori Wajah</b></h2>
            <p>Pria memiliki pori-pori yang lebih lebar dibanding wanita sehingga memproduksi sebum lebih banyak. Hal inilah yang membuat kulit wajah pria lebih berminyak dan rentan berjerawat.</p>
            <p>Meski pria cenderung lebih rentan terhadap jerawat, bukan berarti nggak bisa diatasi. Perawatan jerawat pada pria bisa dimulai dengan <a class="animate blue" href="'. base_url() .'jerawat/complete-kit/">Complete Acne Kit dari norm</a>. Beberapa produk di Complete Acne Kit seperti Facial Wash bekerja secara efektif untuk mengangkat kotoran sehingga wajah kamu pun bebas dari minyak dan kotoran yang berpotensi menyumbat pori-pori wajah.</p>
            <p><a class="animate blue" href="'. base_url() .'jerawat/">Day Cream</a> dan <a class="animate blue" href="'. base_url() .'jerawat/">Night Cream</a> terbukti efektif mengatasi jerawat, bekas jerawat, memperbaiki tekstur kulit dan juga menyamarkan kerutan. Selain itu juga dilengkapi dengan produk <a class="animate blue" href="'. base_url() .'jerawat/complete-kit/">Spot Cream</a> berfungsi untuk menghambat pertumbuhan bakteri penyebab jerawat.</p>
            <p>Nggak mau kan kalau gara-gara wajah nggak terawat, kesempatan emas untuk deketansama si dia bisa hilang karena doi keburu ilfeel?</p>
            <p>Makanya, mulai perawatan wajah khusus pria dari sekarang. Kamu juga bisa konsultasi gratis dengan dokter norm yang ahli di bidangnya.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = '5 Kebiasaan Sehari-Hari Penyebab Disfungsi Ereksi';
        $blog->category = 'Sex';
        $blog->date = '06 July 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/penyebab-disfungsi-ereksi.jpg';
        $blog->url_name = '5-kebiasaan-sehari-hari-penyebab-disfungsi-ereksi';
        $blog->subtitle = "Jangan sepelekan kebiasaan sehari-hari yang ternyata dapat memicu gangguan kesehatan seksual pria";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="preview-title"><i>Preview 30 Seconds</i></p>
                    <p>Gangguan kesehatan seksual pria seperti disfungsi ereksi dapat menjadi ancaman, bukan hanya pria yang sudah berusia 40 tahun ke atas tapi juga pria muda.</p>

                    <p>Penyebab gangguan disfungsi ereksi bisa berbagai macam, di antaranya adalah gaya hidup yang kurang sehat dan kebiasaan sehari-hari yang sering dilakukan tapi ternyata cukup berbahaya bagi kesehatan seksual.</p>

                    <p>Kebiasaan sehari-hari yang berpotensi memicu disfungsi ereksi adalah:</p>

                    <p>
                        1. Konsumsi Alkohol<br>
                        2. Merokok<br>
                        3. Asupan Gula<br>
                        4. Pola Tidur<br>
                        5. Porsi Olahraga
                    </p>
                </i>
            </div>

            <p>Salah satu ancaman gangguan kesehatan seksual pria adalah disfungsi ereksi. Kondisi ini adalah ketidakmampuan pria untuk mempertahankan ereksi untuk berhubungan seksual meski sudah mendapatkan rangsangan seksual. Hal itu tentunya dapat mengganggu keharmonisan kamu dan pasangan.</p>
            <p>Umumnya, disfungsi ereksi dialami oleh pria usia 40 tahun ke atas. Tapi, belakangan mulai banyak pria di bawah usia 40 tahun yang sudah mengalami gangguan tersebut. Penyebab yang dapat memicu gangguan ereksi tersebut berasal dari gaya hidup atau kebiasaan sehari-hari.</p>
            <p>Lantas apa saja sih kebiasaan sehari-hari yang menjadi penyebab disfungsi ereksi?</p>
            <h2><b>1. Konsumsi Alkohol</b></h2>
            <p>Kebiasaan mengonsumsi alkohol bukan hanya memicu terjadinya gangguan fungsi hati aja, lho. Tapi, juga bisa mengganggu fungsi seksual kamu. Alkohol punya sifat depresan system saraf yang bisa memblokir impuls saraf dan menjadi penghalang komunikasi otak dengan tubuh. Nah, hal inilah yang kemudian mempengaruhi kinerja system saraf saat ereksi.</p>
            <h2><b>2. Merokok</b></h2>
            <p>Merokok memang sulit dijauhkan dari kehidupan pria. Namun, tumpukan nikotin pada tubuh dapat mengganggu aliran darah, termasuk pada aliran darah ke penis. Hal itulah yang menyebabkan penis menjadi sulit untuk mempertahankan ereksi karena kurangnya aliran darah.</p>
            <h2><b>3. Asupan Gula</b></h2>
            <p>Asupan gula yang masuk ke tubuh secara berlebihan dapat meningkatkan glukosa dalam darah. Bukan hanya akan membuat darah lebih kental, tapi juga dapat mengganggu peredaran darah serta memicu timbulnya risiko diabetes.</p>
            <h2><b>4. Pola Tidur</b></h2>
            <p>Pola tidur yang nggak teratur seperti kebiasaan begadang akan menimbulkan berbagai keluhan karena mengganggu kinerja organ tubuh. Selain kesehatan secara fisik dan emosional bisa terganggu, Kesehatan seksual kamu juga tentunya akan menurun.</p>
            <h2><b>5. Porsi Olahraga</b></h2>
            <p>Olahraga memang disarankan demi menjaga kesehatan dan kebugaran tubuh. Tapi, olahraga yang berlebihan atau berat tentunya dapat menimbulkan cedera dan menjadi penyebab disfungsi ereksi. Olahraga berlebihan bisa menyebabkan kadar testosteron menurun. Kurang olahraga pun bisa meningkatkan risiko disfungsi ereksi. Jadi, olahraga secukupnya saja sesuai dengan kebutuhan tubuh kamu.</p>
            <p>Selain kebasaan sehari-hari, faktor psikologis juga dapat mempengaruhi kesehatan fungsi seksual seseorang, seperti stress, depresi, dan lain sebagainya.</p>
            <p>Namun, kamu bisa mengatasi gangguan ini dengan mengubah gaya hidup dan memperhatikan konsumsi asupan yang masuk ke dalam tubuh.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/sildenafil-50mg-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Atasi disfungsi ereksi dengan Sildenafil!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'ed/">Lihat Sildenafil</a>
                        </div>
                    </div>
                </div>
            </div>

            <p>Untuk mengatasi penyebab disfungsi ereksi, kamu bisa mengonsumsi <a class="animate blue" href="'. base_url() .'ed/">Sildenafil</a> yang bekerja melancarkan aliran darah ke penis agar dapat mempertahankan ereksi saat akan berhubungan seksual.</p>
            <p>Kamu bisa <a style="font-weight: bold;" href="'. base_url() .'">berkonsultasi secara gratis</a> dengan dokter ahli norm untuk mengatasi penyebab disfungsi ereksi.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Kenali DHT, Hormon Penyebab Rambut Rontok Pada Pria';
        $blog->category = 'Hair Loss';
        $blog->date = '02 July 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/hormon-dht-penyebab-rambut-rontok-pria.jpg';
        $blog->url_name = 'kenali-dht-hormon-penyebab-rambut-rontok-pada-pria';
        $blog->subtitle = "Rambut rontok memang selalu berhasil jadi perkara yang cukup memusingkan. Terlebih jika sudah dimulai di bawah usia 30 tahun. Pasti makin pusing kan, guys?";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="preview-title"><i>Preview 30 Seconds</i></p>
                    <p>Semakin bertambahnya usia, salah satu masalah yang sering muncul adalah kerontokan rambut. Penyebab rambut rontok adalah hormon dihidrotestosteron atau hormon DHT yang punya peran penting bagi tubuh pria, seperti merangsang pertumbuhan rambut dada, jenggot, dan karakter suara berat. Tapi, bagaimana jika hormon tersebut justru menjadi penyebab rambut rontok?</p>

                    <p>Sebenarnya apakah yang dimaksud dengan hormon DHT dan apa fungsinya bagi tubuh? Dan yang utama dalah hubungannya dengan kerontokan rambut?</p>
                </i>
            </div>

            <p>Rambut rontok memang selalu berhasil jadi perkara yang cukup memusingkan. Terlebih jika sudah dimulai di bawah usia 30 tahun. Pasti makin pusing kan, guys?</p>
            <p>Rambut rontok bisa menyebabkan kebotakan dan tentunya dapat menurunkan kepercayaan diri pria atas penampilannya. Berbagai cara pun dilakukan untuk mengatasi penyebab rambut rontok, baik perawatan dari luar maupun dari dalam.</p>
            <p>Tahukah kamu apa penyebab rambut rontok? Salah satunya adalah hormon dihidrotestosteron (DHT) yang dapat memicu kebotakan.</p>
            <h2><b>Apakah Hormon Dihidrotestosteron (DHT) itu?</b></h2>
            <p>Dihidrotestosteron atau yang bisa disebut DHT adalah hormon androgen yang memiliki peran dalam membentuk karakteristik pria, seperti suara yang berat, pertumbuhan rambut dada, dan peningkatan massa otot.</p>
            <p>DHT berasal dari hormon testosteron yang ada pada pria dan wanita. Namun pada pria, hormon testosteron lebih banyak dibanding wanita. Sekitar 10% hormon testosteron diubah oleh enzim yang disebut dengan 5-alpha reductase menjadi DHT.</p>
            <h2><b>Fungsi Hormon DHT Pada Tubuh</b></h2>
            <p>Hormon DHT sudah ada pada tubuh manusia sejak masih janin. Pada janin hormon DHT berfungsi membentuk genitalia pria dan kelenjar prostat. Saat masa pubertas, DHT memicu perkembangan genital, pertumbuhan rambut, dan peningkatan massa otot.</p>
            <p>Seiring pertambahan usia, hormon DHT juga memiliki fungsi lain bagi tubuh, seperti meningkatkan kesehatan dan kesuburan seksual.</p>
            <p>Hormon DHT mengalir pada aliran darah yang kemudian terhubung dengan reseptor pada folikel rambut di kulit kepala. DHT menyebabkan folikel menyusut dan menjadi kurang mampu menciptakan rambut yang sehat.</p>
            <h2><b>Hubungan DHT dengan Rambut Rontok</b></h2>
            <p>Hormon DHT sebenarnya memiliki peran penting bagi tubuh, yaitu memicu pertumbuhan rambut pada tubuh. Tapi, hormon ini juga membawa masalah bagi sebagian orang.</p>
            <p>Rambut mengalami siklus pertumbuhan selama 2-6 tahun. Ketika kamu memotong rambut, maka rambut yang tumbuh pun akan berada di folikel yang sama. Pada akhir siklus tersebut, rambut memasuki fase yang disebut dengan ‘fase istirahat’ sebelum akhirnya rontok pada beberapa bulan kemudian. Setelah itu, folikel akan menghasilkan rambut baru dan siklus pertumbuhan rambut pun akan dimulai lagi.</p>
            <p>Hormon androgen yang berlebihan dapat memicu DHT, mengecilkan folikel rambut dan mempersingkat siklus tersebut sehingga rambut menjadi lebih tipis dan cepat rontok. DHT juga membuat folikel rambut butuh waktu lama untuk menumbuhkan rambut baru.</p>
            <p>Nah, kadar hormon DHT yang nggak seimbang ini bisa menyebabkan kebotakan, lho. Semakin banyak hormon testosteron yang diubah menjadi DHT, maka akan semakin besar risiko kamu mengalami kebotakan.</p>
            <h2><b>Cara Mengatasi Rambut Rontok</b></h2>
            <p>Meski hormon DHT yang nggak seimbang bisa jadi penyebab rambut rontok, kamu tetap bisa mengatasi kerontokannya. Jadi, kamu nggak perlu khawatir berlebihan kalau rambut udah mulai rontok dan menipis.</p>
            <p>Kamu harus memperhatikan asupan yang masuk ke tubuhmu, menjalani gaya hidup sehat, serta mengatasinya dengan terapi produk yang dapat mencegah kerontokan rambut agar lebih maksimal.</p>
            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/anti-dht-shampoo-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Anti-DHT SHampoo</a>
                        </div>
                    </div>
                </div>
            </div>
            <p>Untuk mengatasi penyebab rambut rontok, kamu bisa menggunakan <a href="'. base_url() .'rambut-rontok/complete-kit">anti-DHT shampoo</a> yang mengurangi kadar hormon DHT. Selain itu ada <a href="'. base_url() .'rambut-rontok/complete-kit">minoxidil</a> yang berfungsi merangsang pertumbuhan rambut baru dan mengurangi rontok. Perawatan rambut rontok kamu akan lebih maksimal dengan <a href="'. base_url() .'rambut-rontok/complete-kit">finasteride</a> yang bekerja secara efektif menghambat hormon DHT.</p>
            <p>norm menghadirkan layanan konsultasi online gratis bagi kamu dalam mengatasi rambut rontok. Kamu bisa menjawab beberapa pertanyaan kuisioner yang dirancang dan dievaluasi oleh dokter ahli di bidangnya. Produk <a href="'. base_url() .'rambut-rontok/complete-kit">complete hair loss kit</a> norm juga sudah teruji klinis dan telah direkomendasikan oleh dokter.</p>
            <p>Jadi, kamu nggak perlu ragu lagi untuk mulai mengatasi penyebab rambut rontok secara maksimal dengan norm.</p>
            <p><i>Sumber: <a href="https://www.klikdokter.com/info-sehat/read/3634188/ketahui-hubungan-dihidrotestosteron-dan-kebotakan" target="_blank">klikdokter.com</a></i></p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Wajib Baca! Ini Loh Penyebab Jerawat pada Pria';
        $blog->category = 'Acne';
        $blog->date = '30 June 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/penyebab-jerawat-pria-2.jpg';
        $blog->url_name = 'ini-loh-penyebab-jerawat-pada-pria';
        $blog->subtitle = "Sebagian besar orang mengalami masalah jerawat. Kemunculannya bukan cuma saat pubertas aja, tapi bisa muncul lagi saat dewasa. ";
        $blog->approved = 'Medically Approved by Dr. Rahmaputri Maharani.';
        $blog->description = '
            <div class="blog-preview">
                <i>
                    <p class="preview-title"><i>Preview 30 Seconds</i></p>
                    <p>Sebagian besar orang mengalami masalah jerawat. Kemunculannya bukan cuma saat pubertas aja, tapi bisa muncul lagi saat dewasa. Pria juga kerap mengalami masalah kulit berjerawat. Hanya saja penyebab masalah jerawat pada pria berbeda dengan wanita. </p>

                    <p>Berikut yang dapat menyebabkan kulit pria bermasalah :</p>

                    <p>
                        1. Kurangnya Kebersihan<br>
                        2. Stress<br>
                        3. Aktivitas dan Lingkungan<br>
                        4. Makanan
                    </p>
                    <p>Namun, penyebab jerawat bisa diatasi dengan perawatan wajah pria yang tepat dan konsisten.</p>
                </i>
            </div>

            <p>Sebagian besar orang pernah mengalami masalah jerawat. Meski saat pubertas seseorang akan mengalami masalah jerawat, tapi bukan berarti jerawat itu nggak akan muncul lagi saat dewasa. Masalah jerawat memang nggak pandang usia.</p>
            <p>Selain itu, jerawat juga nggak cuma dialami wanita aja. Pria juga kerap mengalami masalah jerawat. Jadi, penting banget melakukan perawatan wajah pria agar terhindar dari masalah jerawat.</p>
            <p>Tapi, sebelum melakukan perawatan wajah, pria harus mengenali apa aja penyebab jerawat agar bisa mendapatkan perawatan yang tepat untuk kulit berjerawat.</p>
            <h2><b>Penyebab Jerawat Pada Pria</b></h2>
            <p>Umumnya jerawat atau dalam dunia medis dikenal dengan acne vulgaris disebabkan oleh peradangan pada kulit yang sampai pada kelenjar sebum dan folikel rambut akibat dari tersumbatnya pori-pori kulit. Jadi, selama terdapat kelenjar sebum dan folikel rambut, maka jerawat bisa muncul kalau kamu nggak melakukan perawatan wajah.</p>
            <p>Sumbatan pori-pori itu bisa disebabkan oleh kotoran dan sebum yang menumpuk dan nggak rutin dibersihkan. Makanya, wajib banget melakukan perawatan wajah.</p>
            <p>Yuk, kenalan dengan beberapa penyebab jerawat pada pria yang berpotensi bikin wajah bermasalah.</p>
            <h3 style="font-weight: bold;"><i>1. Kurangnya Kebersihan</i></h3>
            <p>Pria yang cenderung cuek dengan kebersihan wajah menjadi pemicu masalah jerawat karena kotoran serta minyak yang menumpuk pastinya akan menyebabkan pori-pori tersumbat dan menimbulkan peradangan.</p>
            <h3 style="font-weight: bold;"><i>2. Stress</i></h3>
            <p>Banyaknya pekerjaan atau masalah bisa membuat seseorang rentan stress, termasuk pada pria. Misalkan kamu udah berkeluarga, tentunya akan ada banyak hal yang ditanggung sebagai kepala keluarga sehingga membuatmu stress dan terjadinya ketidakseimbangan hormon yang bisa memicu timbulnya jerawat.</p>
            <h3 style="font-weight: bold;"><i>3. Aktivitas dan Lingkungan </i></h3>
            <p>Aktivitas pria biasanya berhubungan dengan dunia luar seperti naik motor atau olahraga di luar ruangan. Wajah akan terkontaminasi oleh debu, asap kendaraan, dan panas sehingga menimbulkan kotoran dan minyak.</p>
            <h3 style="font-weight: bold;"><i>4. Makanan</i></h3>
            <p>Sebenarnya, bagi pria ataupun wanita, makanan yang mengandung lemak dan susu bisa menimbulkan jerawat. Jadi, asupan yang masuk ke tubuh pun harus diperhatikan dan melakukan diet seimbang agar tubuh selalu sehat dan kulit terbebas dari masalah. </p>
            <p>Selain itu, masalah kulit pada pria juga disebabkan karena kurangnya kedisiplinan melakukan perawatan wajah. Perawatan wajah pria memang tidak serumit perawatan pada wanita karena hanya menggunakan satu atau dua jenis komposisi pada produk.</p>
            <p>Perawatan wajah pria dapat dilakukan secara rutin dan berkelanjutan agar mendapatkan hasil yang optimal. Wajah yang bersih dan sehat tentunya akan memberikan kepercayaan diri lebih bagi pria.</p>
            <p>Perawatan wajah pria bisa dimulai dari sekarang dengan facial wash norm yang efektif mengangkat kotoran dan debu sehingga menjadikan wajah kamu lebih bersih dan pastinya bebas masalah jerawat.</p>
            <p>Kamu juga berkesempatan untuk <a style="font-weight: bold;" href="'. base_url() .'questionaire/acne/start/">konsultasi gratis</a>, lho. Makanya, jangan tunda lagi buat mulai perawatan wajah pria dari norm.</p>
        ';
        $arr_blog[] = clone $blog;

        $blog->name = 'Memahami Faktor Risiko dan Penyebab Disfungsi Ereksi';
        $blog->category = 'Sex';
        $blog->date = '8 April 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/rokok-penyebab-disfungsi-ereksi.jpg';
        $blog->url_name = 'memahami-faktor-risiko-dan-penyebab-disfungsi-ereksi';
        $blog->subtitle = "Masalah seksual merupakan topik yang masih sulit atau memalukan untuk dibicarakan secara terbuka, terutama bagi seorang pria di masa puncak hidupnya.";
        $blog->description = '<h2><b>Apa sih disfungsi ereksi itu?</b></h2>
            <p>Ketika kamu mendengar kata-kata yang menakutkan "disfungsi ereksi," apakah kamu menganggapnya sebagai kondisi yang hanya memengaruhi pria yang lebih tua? Walaupun usia jelas merupakan faktor dalam menentukan risiko DE, risiko ini dapat memengaruhi pria dari segala usia.</p>
            <p>Masalah seksual merupakan topik yang masih sulit atau memalukan untuk dibicarakan secara terbuka, terutama bagi seorang pria di masa puncak hidupnya. Sebenarnya masalah seksual seperti disfungsi ereksi cukup umum dan mempengaruhi lebih banyak orang daripada yang mungkin kamu sadari. Jika kamu pernah mengalami masalah dengan disfungsi ereksi, kamu tidak sendirian!</p>
            <p>Banyak sebagian pria yang sangat terganggu dalam melakukan hubungan intim, enggak cuma itu banyak juga yang menjadi tidak percaya diri, hingga akhirnya malas untuk berhubungan intim lagi. Sebenarnya apa sih yang dimaksud disfungsi ereksi?</p>
            <p>Disfungsi ereksi adalah ketika kamu tidak bisa ereksi secara optimal pada saat berhubungan intim.Pria dikatakan mengalami disfungsi ereksi apabila:</p>
            <ol>
                <li>Mengalami ereksi kadang-kadang saja</li>
                <li>Mengalami ereksi, tapi tidak cukup lama untuk berhubungan intim</li>
                <li>Sama sekali tidak mengalami ereksi</li>
            </ol>
            <h2><b>Faktor yang dapat menyebabkan disfungsi ereksi?</b></h2>
            <ol>
                <li style="margin-bottom: 15px;"><h3><b>Kondisi Medis</b></h3> Kondisi medis yang memengaruhi sirkulasi tubuh dapat meningkatkan risiko DE. Disfungsi ereksi dapat disebabkan penyakit tertentu seperti diabetes, jantung, hipertensi dan perawatan medis tertentu, seperti operasi prostat atau pengobatan radiasi untuk kanker</li>
                <li style="margin-bottom: 15px;"><h3><b>Konsumsi Tembakau</b></h3> Penggunaan tembakau tidak hanya memengaruhi kesehatan kamu secara keseluruhan, tetapi bahan kimia yang ditemukan dalam asap rokok dapat merusak lapisan pembuluh darah kamu, menghambat sirkulasi yang sehat. Penelitian yang diterbitkan dalam American Journal of Epidemiology menunjukkan bahwa merokok adalah faktor risiko utama impotensi pada pria muda dan bahwa berhenti merokok dapat membantu mengurangi gejala DE.</li>
                <li style="margin-bottom: 15px;"><h3><b>Obesitas </b></h3> Kelebihan berat badan atau obesitas dapat meningkatkan risiko kamu untuk banyak masalah kesehatan, termasuk disfungsi ereksi. Penelitian menunjukkan bahwa hampir 80% pria dengan disfungsi ereksi memiliki BMI 25 atau lebih tinggi. Memiliki BMI dalam kisaran 25 hingga 30 meningkatkan risiko DE sebanyak 1,5 kali dan BMI di atas 30 meningkatkan risiko kamu tiga kali lipat. </li>
                <li style="margin-bottom: 15px;"><h3><b>Obat-obatan </b></h3> Beberapa jenis obat yang mungkin dapat memicu disfungsi ereksi sebagai efek samping seperti antidepresan, antihistamin, dan obat-obatan untuk mengobati kondisi tekanan darah tinggi, nyeri, atau prostat.</li>
                <li style="margin-bottom: 15px;"><h3><b>Kondisi Psikologis </b></h3> Masalah kesehatan mental seperti kecemasan atau depresi dapat memengaruhi kemampuan kamu untuk berhubungan seksual. Stres juga dapat meningkatkan risiko DE karena merangsang produksi hormon seperti adrenalin yang mengalihkan aliran darah dari penis ke jantung dan paru-paru.</li>
                <li style="margin-bottom: 15px;"><h3><b>Penggunaan narkoba dan alcohol </b></h3> Obat-obatan rekreasional dan alcohol dapat meningkatkan risiko kamu untuk DE. Narkoba dan alkohol dapat menjadi sensasi fisik dan meningkatkan masalah psikologis yang mungkin berkontribusi pada DE.</li>
            </ol>
            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/sildenafil-50mg-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Atasi disfungsi ereksi dengan Sildenafil!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'ed/">Lihat Sildenafil</a>
                        </div>
                    </div>
                </div>
            </div>
            <h2><b>Pengobatan</b></h2>
            <p>Pengobatan bisa dilakukan dengan konsultasi dokter untuk mendiagnosa disfungsi ereksi untuk mengetahui penyebab disfungsi ereksi.</p>
            <p>Penanganan disfungsi ereksi bisa dengan pemberian obat-obatan, konseling, rutin berolahraga, hingga tindakan operasi jika diperlukan. Dokter juga dapat meresepkan obat meliputi: sildenafil (viagra), vardenafil (levitra, staxyn), tadalafil (cialis), avanafil (stendra). Jika kesehatan kamu secara umum masih baik, dokter mungkin meresepkan salah satu obat-obatan ini.</p>
            <p>Kamu bisa berkonsultasi melalui <a href="'. base_url() .'">norm.id</a> dengan aman dan mudah. Dokter akan meninjau kondisi kamu dan merekomendasikan perawatan untuk mengatasi masalah disfungsi ereksi. Selamat mencoba dan semoga berhasil!</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Polusi Udara Bisa Merusak Kesehatan Kulit, lho. Ini Buktinya!';
        $blog->category = 'Acne';
        $blog->date = '10 January 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/asap-polusi-udara.jpg';
        $blog->url_name = 'polusi-udara-bisa-merusak-kesehatan-kulit-lho';
        $blog->subtitle = "Baru-baru ini Jakarta menjadi kota dengan tingkat udara <b>terburuk</b> di dunia. Sebesar 70% polusi udara tersebut disumbang oleh kendaraan bermotor.";
        $blog->description = '<p>Baru-baru ini Jakarta menjadi kota dengan tingkat udara <strong>terburuk</strong> di dunia. Sebesar 70% polusi udara tersebut disumbang oleh kendaraan bermotor.</p>
            <p>Tentunya, kondisi ini sangat mengkhawatirkan bagi warganya karena dapat berdampak buruk pada kesehatan. Namun, sadarkah kamu kalau polusi udara juga bisa merusak kesehatan kulit?</p>
            <p>Komposisi polusi udara yang berterbangan bebas terdiri dari, kuman, asap kendaraan, debu, ataupun partikel-partikel kecil lainnya. Saat komposisi tersebut terbang bebas di udara dan kemudian menempel pada kulit, mereka tak hanya &ldquo;singgah&rdquo; di permukaan kulit saja, melainkan bisa masuk dan tinggal di dalam pori-pori kulit. Efeknya, muncul flek hitam pada kulitmu, jerawat, beruntus, kerutan, bahkan kanker kulit.</p>

            <p>Oleh karena itu, lindungi kesehatan kulitmu dari paparan polusi udara dengan cara berikut:</p>
            <ol>
                <li><h3><strong>Rajin membersihkan kulit</strong></h3>Seusai aktivitas di luar ruangan, biasakan dirimu untuk mencuci muka atau mandi, ya. Hal ini karena mencuci muka atau mandi dapat membersihkan kulitmu dari kotoran, debu, atau partikel-partikel lain yang menempel ketika beraktivitas di ruangan, sehingga kulit tampak lebih bersih dan segar.</li>
                <li><h3><strong>Konsumsi buah dan sayur</strong></h3>Kamu harus rajin mengonsumsi buah dan sayur karena keduanya mengandung banyak vitamin, mineral, serat, dan antioksidan yang baik untuk kesehatan kulitmu.</li>
                <li><h3><strong>Minum cukup air putih</strong></h3>Jangan malas untuk minum air putih, guys! Air putih sangat bermanfaat untuk kesehatan kulit antara lain mengeluarkan racun, merangsang regenerasi kulit, menjaga kelembaban kulit, dan sebagai anti-aging.</li>
                <li><h3><strong>Gunakan Tabir Surya</strong></h3>Jika kamu melakukan aktivitas di luar ruangan, jangan lupa gunakan tabir surya, ya. Sebab, kulit kamu harus dilindungi dari polusi udara dan sinar matahari yang bisa menyebabkan risiko kanker kulit dan penuaan dini. Gunakan tabir surya dengan kandungan SPF minimal 15 atau lebih, lho.</li>
                </ol>
            <p>Kalau kamu sudah paham tentang bahaya dan dampak buruk dari polusi udara untuk kesehatan kulit, maka dari itu mulai sekarang jaga dan rawat kulitmu ya, guys!</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Merokok Menyebabkan Disfungsi Ereksi Pada Pria, Benarkah?';
        $blog->category = 'Sex';
        $blog->date = '3 January 2020';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/rokok-menyebabkan-disfungsi-ereksi.jpg';
        $blog->url_name = 'merokok-menyebabkan-disfungsi-ereksi';
        $blog->subtitle = "Kamu perokok aktif? Atau sekedar ikut-ikutan agar terlihat gaul? Mulai sekarang stop merokok jika tidak ingin mengalami masalah kesehatan yang satu ini. ";
        $blog->description = '<p>Merokok menyebabkan disfungsi ereksi, lho. Menurut sebuah studi yang dilakukan oleh Millet, C. Wen L.M., dan tim yang dimuat dalam jurnal <em>Tobacco Control</em> tahun 2006, &ldquo;Semakin lama kamu merokok, semakin tinggi juga risiko yang didapatkan.&rdquo;</p>
            <h2><span style="text-decoration: underline;"><strong>Apa sih disfungsi ereksi itu?</strong></span></h2>
            <p>Disfungsi ereksi merupakan ketidakmampuan untuk mencapai dan mempertahankan ereksi yang cukup untuk menjaga kinerja seksual yang memuaskan. </p>
            <p>Akibatnya, kamu dan pasangan tak mendapat kepuasan seks yang diimpikan.</p>
            <p>Nah, salah satu penyebab disfungsi ereksi ialah merokok. Mau tau alasannya? <em>Check this out</em>!</p>
            <h2><b>Nikotin rokok yang menjadi sumber racun</b></h2>
            <p>Guys, setiap batang rokok yang kamu hisap dapat mengeluarkan lebih dari 4000 bahan kimia beracun lho, salah satunya nikotin. </p>
            <p>Akibatnya, kamu akan mengalami aterosklerosis, yaitu pengerasan pembuluh darah yang terjadi ketika ada penyempitan dan penyumbatan arteri. Selain itu, nikotin dalam asap rokok juga menyebabkan vasospasme (penyempitan sementara arteri penis) yang memengaruhi aliran darah ke penis.</p>
            <p>Nah, aterosklerosis & vasospasme ini yang menjadi pemicu disfungsi ereksi tersebut.</p>
            <h2><b>Gangguan pada jalur Nitrit Oxide</b></h2>
            <p>Jalur <i>Nitrit Oxide (NO)</i> merupakan mekanisme yang bertanggung jawab terhadap ereksi pada penismu, guys. </p>
            <p>Apabila jalur ini terganggu, akibatnya terjadi dilatasi pembuluh darah yang memungkinkan darah tidak mengisi corpus cavernosum (batang penis) yang kinerjanya mirip dengan spons yang berfungsi untuk menjebak darah pada saat ereksi dibutuhkan. Akibatnya, rusaknya fungsi seksual sehingga disfungsi ereksi terjadi.</p>
            <h2><b>Efek Dose-Dependent</b></h2>
            <p>Kamu yang sudah terkena candu nikotin dan sulit menghilangkan kebiasaan merokok nantinya akan mengalami efek dose-dependent. </p>
            <p>Artinya, semakin banyak rokok yang dihisap, maka semakin besar pula kemungkinanmu mengalami disfungsi ereksi.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/sildenafil-50mg-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Atasi disfungsi ereksi dengan Sildenafil!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'ed/">Lihat Sildenafil</a>
                        </div>
                    </div>
                </div>
            </div>

            <p>Nah, mulai sekarang stop merokok ya! Kamu bisa kok menglaihkan kebiasaan burukmu itu dengan menjaga pola hidup sehat, seperti berolahraga, makan makanan sehat, dan menjaga pola tidur agar terhindar dari disfungsi ereksi.</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Pria Wajib Baca! Inilah 4 Tips Menata Rambut Agar Tampil Keren Setiap Hari';
        $blog->category = 'Hair Loss';
        $blog->date = '30 December 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/model-rambut-pria.jpg';
        $blog->url_name = 'tips-menata-rambut-agar-makin-keren-setiap-hari';
        $blog->subtitle = "Kamu bosan dengan tatanan rambutmu? Atau bosan dengan tampilanmu yang itu-itu saja setiap harinya?";
        $blog->description = '<p><i>“Ini pertama kali Jimmy dipromosikan menjadi seorang manager di salah satu perusahaan di Jakarta. Dengan jabatan baru, kini saatnya ia mengubah penampilannya. Model rambutnya diubah sedemikian rupa ditambah dengan produk penata rambut dan disisir rapi, sehingga lebih stylish dan keren. Promosi jabatan yang didapatnya ternyata juga menarik perhatian lawan jenis di kantornya.”</i></p>
            <p>Sebaiknya kamu jangan putus asa, guys. Hal ini karena tatanan rambut yang rapi dan bersih menjadi salah satu daya pikat untuk memperlancar first impression, baik untuk karir atau untuk menarik perhatian lawan jenis.</p>
            <p>Namun, banyak pria kerap melakukan kesalahan menata rambut demi menunjang penampilannya.</p>
            <p>Oleh karena itu, untuk tampil keren setiap hari, kamu cukup menata rambutmu dan ikuti tips-tips di bawah ini. Check this out, guys!</p>
            <h2><b>1. Keramas</b></h2>
            <p>Keramas itu penting lho guys untuk menjaga kebersihan rambutmu. Namun, kamu jangan terlalu sering keramas ya, sebab rambutmu juga butuh minyak alaminya. </p>
            <p>Mulai sekarang, atur frekuensi keramas misalnya untuk rambut tipis cukup dua hari sekali, sedangkan untuk rambut tebal cukup tiga kali sehari agar kadar minyak alami rambutmu tetap terjaga dan tampil keren setiap harinya.</p>
            <h2><b>2. Penggunaan Produk Penata Rambut</b></h2>
            <p>Kalau kamu ingin tampil keren setiap harinya, kamu juga bisa lho menggunakan produk penata rambut, seperti pomade, wax, hair gel, dan lain sebagainya. </p>
            <p>Guys, sesuaikan dengan kondisi ya, sebab produk-produk penata rambut tersebut memiliki sifat yang berbeda, misalnya untuk menghadiri acara formal kamu bisa menggunakan pomade agar rambutmu tampil lebih rapi dan mengkilap.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/hair-tonic-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Minoxidil</a>
                        </div>
                    </div>
                </div>
            </div>

            <h2><b>3. Manfaatkan Sisir</b></h2>
            <p>Setelah menggunakan pomade, kamu bisa lho memanfaatkan sisir untuk menata rambut agar bisa tampil keren seharian.</p>
            <p>Jika biasanya kamu tampil dengan gaya messy, maka mulai sekarang cobalah manfaatkan sisir dan sisirlah rambutmu dengan model yang berbeda dari sebelumnya. </p>
            <p>Mungkin kamu akan tercengang dengan penampilan barumu yang lebih rapi dan keren dari sebelumnya.</p>
            <h2><b>4. Pilih Potongan Rambut Sesuai dengan Wajahmu</b></h2>
            <p>Untuk tampil keren, kamu bisa datang ke barbershop dan tanyakan kepada barberman potongan rambut apa yang cocok dengan wajahmu</p>
            <p>Sebab, gaya potongan rambut sangat mempengaruhi tampilanmu, guys. Jika dia bilang kamu bisa tampil keren dengan gaya undercut, maka kamu bisa mengombinasikannya menggunakan pomade dan sisir agar lebih maksimal.</p>
            <p>Itulah beberapa tips menata rambut agar kamu bisa tampil keren seharian. Nah, kamu bisa lho menerapkannya mulai dari sekarang, guys. Selamat mencoba!</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Inilah Hubungan Hormon Seks dengan Jerawat dan Cara Mengatasinya';
        $blog->category = 'Acne';
        $blog->date = '28 December 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/wajah-berjerawat-pria.jpg';
        $blog->url_name = 'inilah-hubungan-hormon-seks-dengan-jerawat-dan-cara-mengatasinya';
        $blog->subtitle = 'Jerawat tersebut terjadi karena aktivitas hormon seks atau testosteron yang muncul ketika kamu mengalami masa pubertas.';
        $blog->description = '<p>Jerawat tersebut terjadi karena aktivitas hormon seks atau testosteron yang muncul ketika kamu mengalami masa pubertas. </p>
            <p>Lantas, apa sih hormon seks atau testosteron? Adakah hubungannya dengan jerawat?</p>
            <p>Hormon seks atau testosteron adalah hormon seks streroid pada pria yang diproduksi oleh gonad (sel Leydig pada testis) dan sejumlah kecil diproduksi oleh kelenjar adrenal yang merangsang berkembangnya sistem endokrin, sistem reproduksi, perubahan fisik & gairah seksual, dan membentuk kebiasaan tertentu, seperti halnya dominasi dan agresi dalam berkompetisi.</p>
            <p>Salah satu dampak dari tingginya hormon seks yakni memicu produksi minyak berlebih. </p>

            <p>Guys, masalah inilah yang menyebabkan penyumbatan minyak dan sel-sel kulit mati pada folikel rambut dan peradangan yang mengakibatkan pertumbuhan bakteri pemicu timbulnya jerawat di daerah wajah, punggung, area dada, dan lainnya.</p>
            <p>Untuk itu guys, jika kamu sudah mengidap jerawat hormonal tersebut, maka atasi dengan cara berikut:</p>
            <h2><b>Mengonsumsi obat-obatan</b></h2>
            <p>Kamu bisa loh mengobati jerawat dengan obat-obatan tertentu, seperti obat topikal, misalnya benzoil peroksida atau dengan retinoid, namun harus menggunakan resep dokter ya.</p>
            <h2><b>Jaga pola makan</b></h2>
            <p>Sebisa mungkin kamu harus menghindari guys makanan yang mengandung insulin tinggi, seperti cokelat dan junk food agar tidak memicu atau memperparah kondisi jerawatmu.</p>
            <h2><b>Konsumsi Suplemen</b></h2>
            <p>Untuk mengatur kelenjar minyak berlebih, kamu boleh mencoba untuk konsumsi suplemen dengan kandungan spirulina, zinc, dan minyak ikan untuk memperbaiki kondisi kulit dan menyeimbangkan hormon penyebab jerawat tersebut.</p>
            <p>Jika kamu memiliki kondisi kulit dengan minyak berlebih dan tumbuh jerawat, bisa jadi itu jerawat hormon dan coba terapkan cara di atas ya!</p>';
        $arr_blog[] = clone $blog;

        $blog->name = '4 Kebiasaan Buruk Ini Bisa Merusak Kulit Wajah Pria';
        $blog->category = 'Acne';
        $blog->date = '23 December 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/kebiasaan-buruk-makan-pria.jpg';
        $blog->url_name = '4-kebiasaan-buruk-ini-bisa-merusak-kulit-wajah-pria';
        $blog->subtitle = "Kondisi kulit yang bersih dan sehat menjadi idaman setiap orang, tak terkecuali pria. Para pria biasanya jauh lebih cuek dalam hal mengurus kesehatan kulit wajah dibanding wanita.";
        $blog->description = '<p>Aktivitasnya yang kebanyakan berada di luar ruangan dan ditambah kebiasaan buruk lainnya yang bisa merusak kulit wajah, sehingga bukan tak mungkin berbagai masalah kesehatan kulit wajah muncul, mulai dari timbulnya jerawat, flek hitam, pori-pori membesar, dan lain sebagainya.</p>
            <p>Nah, coba perhatikan guys apakah kebiasaan buruk yang bisa merusak kulit wajah di bawah ini yang masih kamu lakukan?</p>
            <h2><b>Kebiasaan Merokok</b></h2>
            <p>Sebagian besar pria mengonsumsi rokok saat penat dengan kerjaan atau saat berkumpul dengan teman. Ternyata merokok memiliki dampak buruk bagi kulit, loh salah satunya efek penuaan yang sangat cepat.</p>
            <p>Kandungan nikotin dalam rokok dapat melemahkan aliran darah ke kulit yang menyebabkan serat elastis dan pembentukan kolagen dapat terganggu.</p>
            <h2><b>Kurang Tidur</b></h2>
            <p>Inilah kebiasaan pria yang sulit ditinggalkan. Kebanyakan pria lebih suka menghabiskan waktu dengan teman untuk kongkow, bermain game, dan lain sebagainya. </p>
            <p>Akibatnya, pola tidur jadi terganggu dan tubuh tidak dapat meregenerasi sel kulit dengan sempurna</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/night-cream-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold"></div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'jerawat/">Lihat Night Cream</a>
                        </div>
                    </div>
                </div>
            </div>

            <h2><b>Faktor dari Makanan dan Minuman</b></h2>
            <p>Boleh-boleh saja kamu mengonsumsi makanan yang mengandung gula, garam, makanan cepat saji, kafein, dan sebagainya. Namun ingat, terlalu banyak mengonsumsinya justru dapat merusak kulit wajah, loh. </p>
            <p>Salah satu dampaknya yakni timbulnya kerutan pada kulit yang mengakibatkan penuaan dini. Lebih baik konsumsi air putih untuk menjaga kulit agar tetap lembab dan tidak mudah rusak.</p>
            <h2><b>Malas Membersihkan Wajah</b></h2>
            <p>Tidak seperti wanita, pria cenderung lebih malas untuk membersihkan wajah. Sepadat apapun akivitasmu usahakan untuk selalu mencuci muka untuk membersihkan debu dan kotoran yang menempel di wajah, agar tak mengundang masalah pada kulit wajahmu.</p>
            <p>Adakah salah satu kebiasaan buruk di atas yang sering kamu lakukan? Jika ada, mulai dari sekarang jauhi kebiasaan buruk tersebut agar kulit wajahmu sehat dan terjaga.</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Catat, 5 Rekomendasi Barbershop Terbaik di Jakarta Untuk Tampilan yang Berkelas!';
        $blog->category = 'Hair Loss';
        $blog->date = '17 December 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/rambu-barbershop.jpg';
        $blog->url_name = '5-rekomendasi-barbershop-terbaik-jakarta-untuk-tampilan-yang-berkelas';
        $blog->subtitle = "Ingin tampil berkelas? Mulai perbaiki penampilan gaya rambutmu!";
        $blog->description = '<p>Tampil rapi dan berkelas menjadi first impression orang lain dalam mendeskripsikan dirimu, khususnya bagian rambut.</p>
            <p>Gaya rambut yang rapi akan menambah rasa percaya dirimu dan mengikuti style anak muda zaman sekarang.</p>
            <p>Di Jakarta, menjamur berbagai barbershop yang akan mengubah penampilanmu rapi dan berkelas. </p>
            <p>Tarifnya pun beragam, mulai dari <strong>Rp 35.000 - Rp 100.000</strong>. Simak guys, di bawah ini ada 5 rekomendasi barbershop terbaik di Jakarta untukmu. <i>Check this out</i>!</p>
            <h2><b>Manhattan Coffee & Cuts</b></h2>
            <p><a href="https://www.instagram.com/manhattanjkt/?hl=en" target="_blank">Manhattan Coffee & Cuts</a> sangat dikenal di kalangan pemuda di Jakarta Selatan sejak tahun 2013</p>
            <p><i>Barbershop</i> ini memanfaatkan sosial media untuk pemasarannya, sehingga tak jarang foto pengunjung yang sedang dicukur diposting dalam instagram. Selain itu, kamu bisa nongkrong sambil menikmati kopi, lho.</p>
            <h2><b>Di Bawah Pohon Barbershop</b></h2>
            <p>Terinspirasi dari tukang cukur tradisional, <a href="https://www.instagram.com/dibawahpohon_/?hl=en" target="_blank">Di Bawah Pohon</a> hanya sebuah nama saja, namun kualitas dan hasil cukuran akan membuatmu tampil rapi dan berkelas, guys. </p>
            <p><i>Barbershop</i> daerah Menteng ini memiliki desain interior ruangan yang bernuansa kayu yang pastinya akan membuatmu betah berlama-lama memangkas rambut di sana.</p>
            <h2><b>Chief Barbershop</b></h2>
            <p>Kamu pernah mendengar atau menggunakan pomade dengan brand <i>barbershop</i> ini? Ya, <a href="https://www.chiefbarbersupplies.co/" target="_blank">Chief <i>Barbershop</i></a> merupakan produsennya. Tak hanya membuat gaya rambutmu rapi dan berkelas, namun juga menjadikanmu lebih <i>stylish</i> dan klimis. </p>
            <p>Chief memiliki 4 gerai, antara lain di Senopati, Ciragil, Cipete, dan Kemang, serta kamu akan dibuat nyaman dengan desain interior dan coffee shop di dalamnya untuk mengisi waktu luang selama menunggu antrian. </p>
            <h2><b>Frank’s Barbershop</b></h2>
            <p><a href="https://www.instagram.com/franksjkt/?hl=en" target="_blank">Frank’s <i>Barbershop</i></a> harus dimasukan dalam list rekomendasi barbershopmu, sebab menawarkan cukuran gaya rambut kekinian dan cocok untuk kamu yang ingin tampil beken sepanjang hari. </p>
            <p>Selain itu, tema interiornya juga bergaya industrial dan rustic, serta tarifnya pun murah sehingga banyak dari pelanggannya berasal dari semua kalangan, mulai dari anak sekolah, dewasa, hingga ekspatriat. </p>
            <p>Kamu bisa lho mengunjunginya di daerah Kemang Raya untuk mendapatkan pengalaman baru untuk style-mu.</p>
            <h2><b>BarberBox</b></h2>
            <p>Terakhir, salah satu <i>barbershop</i> terbaik di Jakarta, yakni <a href="https://www.barberbox.id/" target="_blank">Barberbox</a> yang cabangnya sudah tersebar di seluruh Indonesia.</p>
            <p>Selain tarif yang murah, kamu bisa lho berdiskusi dengan <i>barberman</i> untuk tampilan rambut yang cocok dengan gayamu</p>
            <p>So, dari 5 rekomendasi <i>barbershop</i> di atas, mana yang jadi favoritmu?</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Ingin Tampil Maskulin, Inilah 5 Rekomendasi Produk Rambut Pria';
        $blog->category = 'Hair Loss';
        $blog->date = '14 December 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/wax-rambut-pria.jpg';
        $blog->url_name = 'inilah-5-rekomendasi-produk-rambut-pria';
        $blog->subtitle = "Ingin tampil maskulin? Tapi bingung bagaimana caranya?";
        $blog->description = '<p>Setiap pria pasti ingin tampil maskulin di depan orang lain, bahkan pasangannya. Tak seperti wanita, sedikit dari bagian tubuh pria yang mesti dirawat untuk menunjang penampilan, salah satunya rambut. </p>
            <p>Banyak produk rambut yang tersedia, namun tak semua cocok dengan tipe rambutmu.</p>
            <p><i>Guys</i>, kalau bingung untuk memilih produk rambut yang cocok untuk tipe rambutmu, kamu harus baca 5 rekomendasi produk rambut di bawah ini yang pastinya akan menunjang tampilanmu untuk tampil maskulin. <i>Check this out!</i></p>
            <h2><b>Pomade</b></h2>
            <p>Produk rambut ini sangat digandrungi banyak pria saat ini. </p>
            <p><i>Pomade</i> terbagi menjadi dua jenis, lho yaitu <i>oil based</i> yang berbahan dasar minyak dengan daya tahan seharian dan sulit untuk dibersihkan meskipun kamu sudah keramas, sedangkan <i>water based</i> terbuat dari bahan dasar air dengan daya tahan normal dan mudah dibersihkan. </p>
            <p>So, cocok untuk kamu yang memiliki rambut lurus dengan gaya undercut untuk terlihat klimis dan maskulin.</p>
            <h2><b>Wax</b></h2>
            <p><i>Wax</i> merupakan produk rambut yang terbuat dari bahan dasar minyak lilin yang akan membuat rambutmu menjadi kaku. </p>
            <p>Meskipun rambut menjadi kaku, namun wax dapat dibersihkan dengan mudah, lho kamu cukup membilasnya dengan air saja guys. </p>
            <p>Jika kamu memiliki rambut pendek, maka produk rambut ini cocok untukmu dan kamu pun bisa mengatur gaya rambutmu dengan tampilan slick back, spiky, atau klimis sehingga kamu tetap tampil maskulin. </p>
            <h2><b>Hair Gel</b></h2>
            <p>Agak berbeda sedikit dengan <i>wax</i>, <i>hair gel</i> memberikan kesan kaku dan keras dalam jangka waktu yang lama. Produk rambut ini biasanya diaplikasikan pada rambut yang basah agar menjaga rambutmu tetap rapi dan mengkilap tanpa harus meninggalkan sisi masukilnnya. </p>
            <p>Untuk membersihkannya, cukup dengan keramas maka pengaruh hair gel akan hilang dari rambutmu. </p>
            <h2><b>Mousse</b></h2>
            <p>Jika kamu memiliki rambut lurus dan keriting, serta ingin menciptakan gaya rambut mengembang yang awet dari pangkal hingga ujung, maka kamu pilih produk rambut yang satu ini. </p>
            <p>Mousse memiliki tekstur berupa busa yang tebal yang cocok untuk menambah volume rambut dan tidak menimbulkan banyak residu sehingga tidak membuat rambutmu kaku.</p>
            <h2><b>Clay</b></h2>
            <p>Produk rambut ini juga mirip dengan mousse, namun berbeda dari bahan dasar pembuatannya. Clay terbuat dari tanah liat yang kaya akan nutrisi dan mineral untuk rambut kamu. </p>
            <p>Selain itu, kamu juga dapat mengatur gaya rambutmu sesuai dengan keinginanmu dan cocok sekali untuk tipe rambut bergelombang dan keriting.</p>
            <p>Nah guys, dari 5 rekomendasi produk rambut di atas, mana yang cocok untuk diaplikasikan agar menunjang penampilanmu tetap maskulin?</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Agar Tak Keliru, Inilah 3 Perbedaan Obat Generik dengan Obat Paten';
        $blog->category = 'Other';
        $blog->date = '9 December 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/tablet-obat-biru.jpg';
        $blog->url_name = 'perbedaan-obat-generik-dan-obat-paten';
        $blog->subtitle = "Persepsi yang berkembang di masyarakat beranggapan bahwa obat generik menjadi obat kualitas nomor dua dengan harga murah dibanding dengan obat paten yang bermerek.";
        $blog->description = '<p>Persepsi yang berkembang di masyarakat beranggapan bahwa obat generik menjadi obat kualitas nomor dua dengan harga murah dibanding dengan obat paten yang bermerek, sehingga tak jarang pasien meminta untuk diresepkan obat paten oleh dokter. </p>
            <p>Nah, kamu harus tahu guys bahwa pandangan seperti ini keliru, lho. Sebaiknya, kamu pelajari terlebih dahulu apa itu obat generik dan obat paten. Yuk, kita bahas selengkapnya!</p>
            <h2><b>Obat Generik</b></h2>
            <p>Obat generik adalah obat yang telah habis masa patennya. Bila masa patennya telah habis, yakni selama 20 tahun maka dapat diproduksi oleh semua perusahaan-perusahaan farmasi tanpa perlu membayar royalti.</p>
            <p>Obat ini pun terbagi menjadi dua jenis lho, yakni obat generik berlogo dan obat generik bermerek.</p>
            <p>Selain itu, juga dijual dengan harga murah karena hanya memerlukan biaya produksi saja tanpa harus mengeluarkan biaya riset dan pematenan obat tersebut. </p>
            <p>Salah satu contohnya, yakni sildenafil yang merupakan obat untuk menangani disfungsi ereksi yang banyak diproduksi oleh perusahaan-perusahaan farmasi.</p>
            <h2><b>Obat Paten</b></h2>
            <p>obat paten adalah obat baru yang diproduksi serta dipasarkan oleh sebuah perusahaan farmasi yang sudah melakukan hak paten terhadap produksi obat baru tersebut berdasarkan serangkaian uji klinis yang dilakukan perusahaan tersebut sesuai dengan aturan internasional.</p>
            <p>Misalnya saja sildenafil Pfizer yang menjadi obat viagra bermerek dan berkualitas, serta telah dijual di berbagai website dan media online lainnya.</p>
            <p>Ada 3 perbedaan antara obat generik dan obat paten yang harus kamu ketahui guys. <i>Check this out!</i></p>
            <h3><b>1. Penamaan dan Produsen</b></h3>
            <p>Dari sisi penamaan dan produsen, obat generik menyesuaikan dengan kandungan zat aktif dan dapat diproduksi oleh semua perusahaan farmasi.</p>
            <p>Sedangkan, obat paten menyesuaikan dengan keinginan perusahaan farmasi dan hanya dapat diproduksi oleh perusahaan yang memiliki hak paten.</p>
            <h3><b>2. Kemasan</b></h3>
            <p>Desain kemasan untuk obat generik yakni sederhana dan diberi logo “Generik”.</p>
            <p>Untuk obat paten, desain kemasan sesuai dengan keinginan produsen yang memiliki hak paten.</p>
            <h3><b>3. Harga</b></h3>
            <p>Harga obat generik tergolong murah karena dikemas sederhana dan tidak membutuhkan biaya promosi.</p>
            <p>Sedangkan, obat paten dipatok dengan harga mahal karena membutuhkan biaya untuk pematenan, penelitian, promosi, dan kemasan.</p>
            <p>Obat generik maupun obat paten memang memiliki beberapa perbedaan, namun dari sisi efektivitas keduanya sama.</p>
            <p>Walaupun harganya murah, namun untuk mendapatkannya tidak sembarangan. Kamu harus mendapat petunjuk dokter terlebih dahulu ya guys dan jangan asal mengonsumsinya. </p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Tretinoin, Efektif Mengatasi Masalah Jerawat';
        $blog->category = 'Acne';
        $blog->date = '18 November 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/night-cream-eliocare.jpg';
        $blog->url_name = 'tretinonin-efektif-mengatasi-masalah-jerawat';
        $blog->subtitle = "Kulit yang sehat menjadi dambaan setiap orang. Tak hanya wanita, lelaki pun kini sudah mulai memperhatikan penampilan.";
        $blog->description = '<p class="font-12px">Artikel blog ini ditinjau oleh Dr. Wenny Tan<br>Ditulis oleh tim editor Elio</p>
            <p>Kulit yang sehat menjadi dambaan setiap orang. Tak hanya wanita, lelaki pun kini sudah mulai memperhatikan tampilan dengan menggunakan berbagai obat atau skin care untuk menjaga dan membersihkan kulit dari kotoran dan noda penyebab jerawat, kulit kusam, flek hitam, bahkan penuaan dini. </p>
            <p>Salah satu obat yang banyak digunakan ialah tretinoin. Tapi, tahukah kamu apa itu tretinoin? Untuk lebih tahu selengkapnya, <i>check this out</i>, guys!</p>
            <h2><b>Apa itu Tretinoin?</b></h2>
            <p>Tretinoin adalah obat retinoid yang awalnya dikembangkan pada akhir 1950-an untuk mengobati masalah jerawat lho, namun mulai disetujui untuk penggunaan medis pada tahun 1962. </p>
            <p>Obat ini bertindak cepat dan efektif untuk menghilangkan dan mencegah timbulnya jerawat dari wajah dengan membersihkan pori-pori kulit dari kotoran dan sel-sel kulit mati.</p>
            <p>Selain untuk mengobati jerawat, tretinoin juga aman dan efektif digunakan sebagai obat anti-penuaan karena telah disetujui oleh <i>FDA (Food and Drug Administration)</i> dan telah memiliki ratusan ribu pengguna setiap tahunnya.</p>
            <p>Obat ini memiliki bentukan yang berbeda, seperti berbentuk larutan cair, gel, dan yang paling umum dijual berbentuk krim.</p>
            <h2><b>Bagaimana Tretinoin Bekerja?</b></h2>
            <p>Tretinoin bekerja dengan cara mematikan sel-sel cacat dan memacu pergantian sel baru sehingga membatasi pembentukan jerawat baru. </p>
            <p>Dilansir dari Instyle.com, menurut Dr. Terrasse, tretinoin meratakan area kulit dan mengurangi munculnya garis-garis halus serta kerutan. </p>
            <p>Sel-sel kulit akan membelah, tumbuh, dan mati lebih cepat sehingga proses regenerasi sel yang baru dapat menjaga komponen kolagen kulit.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/day-cream-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Mau tampil PD? Yuk pakai Day Cream Elio!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'jerawat/">Lihat Day Cream</a>
                        </div>
                    </div>
                </div>
            </div>

            <p>Tretinoin memiliki efek samping yang bersifat sementara dan masih dalam kategori minor, bahkan kasusnya jarang terjadi. </p>
            <p>Oleh karena itu, kamu dapat mengatasinya sendiri dengan menggunakan produk pelembab wajah.</p>
            <h2><b>Perlukah Resep Untuk Menggunakannya?</b></h2>
            <p>Penggunaan tretinoin harus menggunakan resep dokter ya, guys. Ikuti anjuran dan kadar dosis yang telah diberikan dokter atau apoteker dan baca juga informasi yang tertera pada kemasan sebelum menggunakannya. </p>
            <p>Biasanya kadar tretinoin memiliki beberapa tingkatan mulai dari 0,01%, 0,025%, 0,05%, hingga 0,1%. Semakin besar kadar yang kamu gunakan, maka semakin cepat hasil yang akan kamu dapatkan.</p>
            <p>Sekarang kamu gak perlu bingung bagaimana cara mendapatkan obat yang telah diresepkan seperti tretinoid ini, karena kandungannya terdapat pada <a href="'. base_url() .'jerawat/night-cream">Night Cream Elio</a> loh. </p>
            <p>Kamu bisa berkonsultasi melalui <a href="https://norm.id">norm.id</a> dengan aman dan mudah. Dokter akan merekomendasikan perawatan dalam mengatasi masalah jerawatmu. Selamat mencoba dan semoga berhasil!</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Clindamycin Ampuh Untuk Mengatasi Jerawat';
        $blog->category = 'Acne';
        $blog->date = '11 November 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/day-cream-eliocare.jpg';
        $blog->url_name = 'clindamycin-ampuh-untuk-mengatasi-jerawat';
        $blog->subtitle = "Jerawat bukan kondisi yang berbahaya, namun kehadirannya kerap mengganggu psikologis beberapa individu.";
        $blog->description = '<p class="font-12px">Artikel blog ini ditinjau oleh Dr. Wenny Tan<br>Ditulis oleh tim editor Elio</p>
            <p>Jerawat bukan kondisi yang berbahaya, namun kehadirannya kerap mengganggu psikologis beberapa individu. Banyak titik-titik kemunculan jerawat, seperti di wajah, dada, leher, punggung, atau bagian tubuh lainnya. </p>
            <p>Berbagai macam obat penghilang jerawat pun banyak dijual di pasaran, tetapi belum benar-benar terbukti keampuhannya. Oleh karena itu, ada obat yang ampuh menghilangkan jerawat yang telah direkomendasikan para dokter. </p>
            <p>Ya, clindamycin jawabannya. Apakah kamu tahu apa itu clindamycin? Yuk, kita bahas selengkapnya!</p>
            <h2><b>Apa itu Clindamycin?</b></h2>
            <p>Jadi guys, clindamycin adalah obat antibiotik yang digunakan untuk mengobati jerawat dan menghentikan perkembangan bakteri yang terperangkap di dalam pori-pori yang tersumbat. </p>
            <p>Penyumbatan tersebut dapat terjadi karena adanya produksi sebum/minyak berlebih, sel-sel kulit mati, lingkungan, atau faktor lainnya. </p>
            <p>Obat ini mampu mengatasi bakteri P. Acnes yang menyebabkan komedo, jerawat biasa, dan jerawat meradang.</p>
            <p>Selain itu, clindamycin tersedia dalam beberapa bentuk lho, antara lain ada yang berbentuk obat oral yang dikemas dalam kemasan kapsul atau gel dan bentuk topikal atau krim.</p>
            <h2><b>Bagaimana cara kerja Clindamycin?</b></h2>
            <p>Clindamycin bekerja dengan membunuh bakteri yang dapat menyebabkan timbulnya jerawat. </p>
            <p>Mekanismenya, sintesis protein bakteri dihambat dan diikat secara reversibel subunit ribosom 50S, sehingga menghalangi reaksi translokasi organisme yang rentan yang mengakibatkan pertumbuhan sel terhambat.</p>
            <p>Untuk mendapatkan hasil yang optimal, clindamycin akan lebih efektif menghilangkan jerawat bila digunakan bersama exfoliating agent. </p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/day-cream-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Mau tampil PD? Yuk pakai Day Cream Elio!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'jerawat/">Lihat Day Cream</a>
                        </div>
                    </div>
                </div>
            </div>

            <p>Seperti kebanyakan obat jerawat lainnya, clindamycin dapat memberikan efek nyata setelah rata-rata 6 hingga 12 minggu pemakaian.</p>
            <p>Clindamycin aman digunakan dan atau di konsumsi karena telah terbukti melalui banyak penelitian dan memiliki efek samping paling kecil dari setiap obat antibiotik topikal. </p>
            <p>Efek samping tersebut, antara lain kulit kering, gatal, dan iritasi kulit, serta biasanya masih dalam skala ringan dan akan berhenti setelah kamu terbiasa menggunakannya.</p>
            <h2><b>Apakah Perlu Resep untuk Menggunakannya?</b></h2>
            <p>Pastikan sebelum menggunakan obat ini, kamu harus berkonsultasi atau dengan petunjuk dari dokter. </p>
            <p>Perhatikan pula petunjuk penggunaan yang tertera pada label kemasan. Kamu juga harus mengetahui cara penggunaanya yang benar ya, guys. Berikut langkah-langkahnya:</p>
            <p>
                <ol>
                    <li>Cuci area yang terdampak jerawat secara menyeluruh menggunakan air dan sabun sebelum</li>
                    <li>Keringkan kulit dengan handuk lembut dan pastikan benar-benar bersih dari sabun</li>
                    <li>Oleskan krim clindamycin secara merata</li>
                    <li>Segera bersihkan tangan dengan air setelah menggunakan clindacymin</li>
                </ol>
            </p>
            <p>Nah, beberapa informasi di atas semoga dapat membantu mengatasi masalah jerawatmu. </p>
            <p>Kandungan Clindamicyn terdapat dalam <a href="'. base_url() .'jerawat/">Day Cream Elio</a>, so kamu juga bisa berkonsultasi di <a href="https://norm.id">norm.id</a> untuk mendapat perawatan tepat dan mudah yang direkomendasikan dokter dalam membantu mengatasi masalah jerawatmu. Selamat mencoba dan semoga berhasil!</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Shampo Ketoconazole Menjadi Solusi Kesehatan Rambut Pria';
        $blog->category = 'Hair Loss';
        $blog->date = '6 November 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/anti-dht-shampoo-eliocare.jpg';
        $blog->url_name = 'shampoo-ketoconazole-menjadi-solusi-kesehatan-rambut-pria';
        $blog->subtitle = "Ada banyak shampo yang dijual di pasaran untuk membantu mengatasi masalah kesehatan rambut, seperti ketombe dan kerontokan rambut.";
        $blog->description = '<p class="font-12px">Artikel blog ini ditinjau oleh Dr. Wenny Tan<br>Ditulis oleh tim editor Elio</p>
            <p>Ada banyak shampo yang dijual di pasaran untuk membantu mengatasi masalah kesehatan rambut, seperti ketombe dan kerontokan rambut. </p>
            <p>Namun, ada shampo yang telah direkomendasikan oleh dokter dan ampuh untuk mengatasi masalah tersebut. Apa itu? Yuk, kita bahas selengkapnya.</p>
            <p><a href="'. base_url() .'rambut-rontok/">Ketoconazole</a> merupakan shampo obat yang dirancang untuk mengobati penyakit kulit dan kuku, seperti kandidiasis, kurap, dermatitis seboroik, psoriasis, dan penyakit kulit lainnya. </p>
            <p>Namun, secara ilmiah banyak digunakan untuk mencegah kerontokan rambut, mengobati kebotakan, dan membantu perbaikan pertumbuhan rambut.</p>
            <h2><b>Apa saja manfaatnya?</b></h2>
            <h3><b>1. Mengatasi jamur & rasa gatal pada kulit kepala</b></h3>
            <p>Jamur pada kulit kepala memang sangat mengganggu kenyamanan dan penampilan kamu. Belum lagi dengan rasa gatal yang tak tertahankan membuat kamu harus menggaruknya. </p>
            <p><a href="'. base_url() .'rambut-rontok/">Ketoconazole</a> menjadi salah satu pilihan untuk mengatasi jamur dan rasa gatal tak tertahankan, guys.</p>
            <h3><b>2. Membersihkan ketombe dan mencegahnya kembali</b></h3>
            <p>Ketombe kamu bisa hilang dan tak kembali lho guys dengan ketoconazole shampo sehingga kamu tidak usah resah dengan ketombe yang tiba-tiba muncul di kulit kepala bahkan hingga rontok ke pakaianmu.</p>
            <h3><b>3. Merawat kerontokan rambut</b></h3>
            <p>Banyak studi yang telah menunjukan bahwa shampo ketoconazole sama efektifnya dengan <a href="'. base_url() .'code/minoxidil-ampuh-mengatasi-rambut-rontok/">minoxidil</a> untuk merawat kerontokan rambut pada tingkatan pemakaian yang sama. </p>
            <p>Jika kamu ingin mengurangi kerontokan rambut, shampo ini bisa menjadi solusinya.</p>
            <h3><b>4. Menghambat perkembangan hormon DHT</b></h3>
            <p><a href="'. base_url() .'code/inilah-5-penyebab-sepele-kerontokan-rambut-pada-pria/">Hormon DHT</a> menjadi salah satu penyebab rusaknya folikel rambut dan kebotakan pada pria.</p>
            <p>Ketoconazole setidaknya bisa menjadi salah satu solusi untuk menghambat perkembangan hormon tersebut, dan kamu dapat menggunakannya jika keadaan rambut mulai menipis.</p>
            <h3><b>5. Membantu menyembuhkan dari dermatitis seboroik</b></h3>
            <p>Dermatitis seboroik menyebabkan rambut kamu rontok dan kebotakan karena kulit kepala bersisik, berminyak, dan meradang yang mengakibatkan jumlah sebun meningkat sehingga rambut baru sulit tumbuh. Nah, dengan menggunakan Ketoconazole, Dermatitis seboroik besar kemungkinannya untuk sembuh.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/anti-dht-shampoo-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Anti-DHT SHampoo</a>
                        </div>
                    </div>
                </div>
            </div>

            <h2><b>Bagaimana cara penggunaannya?</b></h2>
            <p>Cara penggunaannya mudah, guys. Yuk, ikuti langkah-langkah di bawah ini:</p>
            <p>
                <ol>
                    <li>Basahkan rambut dan kulit kepala dengan air</li>
                    <li>Oleskan shampo Ketoconazole secukupnya pada rambut dan kulit kepala yang telah dibasahkan</li>
                    <li>Pijat lembut ke seluruh bagian kulit kepala</li>
                    <li>Bilas dengan air hangat</li>
                    <li>Ulangi proses ini hingga beberapa kali pemakaian sesuai arahan dokter</li>
                </ol>
            </p>
            <p>Penggunaan shampo Ketoconazole lebih baik dengan petunjuk dokter ya, guys. Ikuti pula petunjuk penggunaan yang ada pada bagian kemasan. Konsultasikan dengan dokter mengenai keadaan sebelum dan sesudah pemakaian shampo tersebut agar keefektifannya dapat terlihat.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/hair-tonic-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Lengkapi dengan Minoxidil sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Minoxidil</a>
                        </div>
                    </div>
                </div>
            </div>

            <p>Itulah informasi mengenai shampo <a href="'. base_url() .'rambut-rontok/">Ketoconazole</a>, semoga dapat kamu terapkan dan membantu mengatasi masalah kesehatan rambut yang kamu alami. </p>
            <p>Atau, kamu juga bisa konsultasi di <a href="'. base_url() .'">norm.id</a> karena ada banyak dokter expert yang siap menjawab setiap keluhan mengenai masalah kesehatanmu.</p>';
        $arr_blog[] = clone $blog;

        $blog->name = '</i>First Impression</i> Menjadi Kunci Menarik Perhatian Lawan Jenis';
        $blog->category = 'Other';
        $blog->date = '30 October 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/pria-menarik-perhatian.jpg';
        $blog->url_name = 'first-impression-menjadi-kunci-menarik-perhatian-lawan-jenis';
        $blog->subtitle = "Bertemu dengan orang baru di lingkungan baru pasti membuat sikap kita lebih hati-hati dan ingin menampilkan kesan pertama yang baik.";
        $blog->description = '<p>Bertemu dengan orang baru di lingkungan baru pasti membuat sikap kita lebih hati-hati dan ingin menampilkan kesan pertama yang baik, terlebih di hadapan lawan jenis.</p>
            <p>Hal ini sah-sah saja karena keadaan seseorang untuk mengenal seseorang lainnya bisa dinilai dari <a href="https://www.briantracy.com/blog/leadership-success/the-importance-of-a-first-impression-everything-counts-personal-statement/" target="_blank"><i>first impression</i></a>-nya. Tapi, apakah <i>first impression</i> itu? Apa itu penting?</p>
            <p>Menurut Wikipedia, dalam ilmu psikologi, <i>first impression</i> merupakan peristiwa ketika satu orang pertama kali bertemu orang lain dan membentuk citra mental orang tersebut. </p>
            <p>Kesan pertama didasarkan pada berbagai karakteristik, antara lain usia, ras, budaya, bahasa, jenis kelamin, penampilan fisik, aksen, postur, dan suara.</p>
            <p>Oleh karena itu, ada yang menganggap <i>first impression</i> itu penting dan ada yang menganggap tidak. Untuk mendapatkan <i>first impression</i> positif di mata lawan jenis, sebisa mungkin kamu menjadi diri sendiri ya guys karena wanita lebih suka pria yang terlihat natural. </p>
            <p>Nah, bagaimana cara membuat lawan jenismu terkesan saat pertama kali bertemu? <i>Check this out</i>, guys!.</p>
            <h2><b>1. Ajak bicara mengenai topik “emosional”</b></h2>
            <p>Kamu bisa lho mengobrol kepada lawan jenismu mengenai topik yang memiliki unsur emosional, seperti membahas masa kecilnya, cita-citanya, atau hal lain mengenai kehidupannya yang dapat mencairkan suasana.</p>
            <h2><b>2. Bersikap seolah kamu tahu segalanya tentang lawan jenismu</b></h2>
            <p>Wanita suka mendengar opini pria tentangnya, sebisa mungkin kamu bisa menebak atau bahkan mencari tahu dan menceritakannya di depannya agar lawan jenismu merasa tertarik dan diperhatikan.</p>
            <h2><b>3. Bersikap terbuka</b></h2>
            <p>Ceritakan semua tentang kehidupanmu di depan lawan jenismu, mulai dari kegiatan yang kamu sukai, keluarga, atau apapun agar lawan jenismu tertarik dan ingin lebih dalam mengenal tentangmu.</p>
            <h2><b>4. Cari kesempatan untuk memamerkan keahlianmu</b></h2>
            <p>Guys, kamu boleh lho memamerkan keahlianmu di depan lawan jenis untuk menarik perhatiannya, seperti bermain gitar di depannya dan menyanyi bersama. Tapi, jangan terkesan berlebihan dan menjadi sok jago ya!</p>
            <h2><b>5. Berikan pujian</b></h2>
            <p>Sudah kodratnya bahwa wanita ingin dipuji. Nah, oleh karena itu, sesekali puji dia, seperti rambut kamu indah, penampilanmu cantik hari ini, dan sebagainya agar ia merasa diperhatikan.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/anti-dht-shampoo-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Anti-DHT SHampoo</a>
                        </div>
                    </div>
                </div>
            </div>

            <p>Setelah kamu membuat kesan pertama yang positif, selanjutnya perhatikan situasinya. Situasi inilah yang nantinya akan menunjang <i>first impression</i> ketika kamu bertemu dengan lawan jenismu. Apa saja sih situasi yang biasa pria lakukan untuk membuat kesan pertama?</p>
            <h2><b>1. Tepat Waktu</b></h2>
            <p>Guys, usahakan tepat waktu dalam segala situasi ketika berjanjian dengan lawan jenismu. Sebab, wanita tak pernah mau menunggu dan sedikit keterlambatan akan membuatmu menjadi negatif di matanya.</p>
            <h2><b>2. Gaya Berpakaian</b></h2>
            <p>Gaya berpakaianmu juga harus dikondisikan dengan kegiatan yang dijalani. Misalnya, ketika ingin menonton bioskop kamu bisa berpakaian casual atau ketika menghadiri pesta kamu berpenampilan rapi. Jangan terbalik ya guys, situasikan sesuai dengan kondisinya.</p>
            <h2><b>3. Jadi Diri Sendiri</b></h2>
            <p>Tak usah membuat hal-hal yang memang bukan dari dirimu, ya. Wanita lebih suka dengan pria yang terlihat natural dari segi tampiilan atau pun sikap. Menghadirkan identitas sendiri akan membuat kamu percaya diri dan membangun integritas dirimu sendiri, guys.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/day-cream-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Mau tampil PD? Yuk pakai Day Cream Elio!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'jerawat/">Lihat Day Cream</a>
                        </div>
                    </div>
                </div>
            </div>

            <h2><b>4. Attitude atau Sikap</b></h2>
            <p>Memang terlihat sepele, namun attitude sangat penting, lho. Situasikan hal-hal kecil kepada lawan jenismu, seperti menjabat tangan terlebih dulu, memberikan senyuman, dan bersikap ramah saat pertemuan pertama bakal menjadi nilai plus di mata lawan jenis.</p>
            <h2><b>5. Bahasa Tubuh</b></h2>
            <p>Guys, riset menunjukan 60-90% persen komunikasi terjadi dalam bentuk nonverbal. Kamu harus menunjukan bahasa tubuh yang luwes, terbuka, dan positif seperti kontak mata saat berbicara, menyimak pembicaraan, tidak sering melihat arloji di tangan, dan sebagainya.</p>
            <p>Itulah kunci menarik perhatian lawan jenis lewat <i>first impression</i>. Kamu bisa lho menerapkannya saat kencan pertamamu dan pastikan kamu telah memahaminya, ya. Ingat, jangan berikan <i>first impression</i> yang buruk jika kamu tak ingin gagal!</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Inilah 5 Penyebab Sepele Kerontokan Rambut Pada Pria';
        $blog->category = 'Hair Loss';
        $blog->date = '15 October 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/pria-berambut-tebal.jpg';
        $blog->url_name = 'inilah-5-penyebab-sepele-kerontokan-rambut-pada-pria';
        $blog->subtitle = "Rambut sudah menjadi mahkota bagi para pria. Oleh karena itu, banyak banget bisnis barbershop menjamur dimana-mana dengan berbagai macam teknik dan model rambut kekinian yang digandrungi anak muda.";
        $blog->description = '<p>Rambut sudah menjadi mahkota bagi para pria. Oleh karena itu, banyak banget bisnis barbershop menjamur dimana-mana dengan berbagai macam teknik dan model rambut kekinian yang digandrungi anak muda.</p>
            <p>Tetapi, model rambut saja tak cukup jika tak memperhatikan kesehatannya juga, lho. Dalam batas wajar, manusia bisa mengalami kerontokan rambut 50 hingga 100 helai rambut per hari. </p>
            <p>Namun, kamu wahai kaum pria harus tahu apa aja sih penyebab kerontokan rambut. <i>Check this out!</i></p>
            <h2><b>1. Hormon</b></h2>
            <p>Menurut penelitian, hampir 50 persen pria mengalami kerontokan rambut saat mereka berusia 50 tahun, namun tak menutup kemungkinan bagi anak muda terutama yang cenderung memiliki genetik kerontokan rambut. </p>
            <p>Hal yang paling sering menjadi penyebab kerontokan rambut pada pria yakni hormon dihidrotestosteron (DHT). Sebenarnya hormon DHT pada pria masih wajar karena setiap manusia mengalami pubertas. </p>
            <p>Nah, hormon dihidrotestosteron dapat memicu kerontokan rambut karena berperan dalam mengatur folikel rambut yang sensitif. Oleh karena itu, kamu harus menghindari berbagai penyebab yang dapat meningkatkan hormon DHT, seperti merokok, stres, kekurangan gizi, dan lain sebagainya. </p>
            <p>Hati-hati juga ya guys karena kerontokan rambut tak mengenal usia!</p>
            <h2><b>2. Stress</b></h2>
            <p>Kerontokan rambut juga bisa dipicu oleh <a href="https://www.mayoclinic.org/healthy-lifestyle/stress-management/expert-answers/stress-and-hair-loss/faq-20057820" target="_blank">stres</a>. Meskipun terdengar sepele, namun stres dapat menyebabkan kerontokan yang parah pada rambut karena tekanan psikologi pada seseorang dapat membuat akar rambut melemah. </p>
            <p>Nah, ketika stres melanda, sebisa mungkin kamu harus tenangkan pikiran dan rileks nih agar menstimulasi otak untuk <a href="https://www.mayoclinic.org/healthy-lifestyle/stress-management/in-depth/positive-thinking/art-20043950" target="_blank">berpikiran positif</a>. </p>
            <p>Atau, kamu juga bisa melakukan kegiatan, seperti <a href="https://www.mayoclinic.org/healthy-lifestyle/stress-management/in-depth/yoga/art-20044733" target="_blank">yoga dan meditasi</a> yang akan menciptakan efek tenang, tidur yang cukup, dan minum air putih yang cukup.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/hair-tonic-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Minoxidil</a>
                        </div>
                    </div>
                </div>
            </div>

            <h2><b>3. Merokok</b></h2>
            <p>Merokok banyak menyebabkan berbagai penyakit bagi tubuh. Tapi, tahukah kamu kalau merokok juga bisa menjadi salah satu faktor pemicu kerontokan rambut? </p>
            <p>Kandungan nikotin pada rokok dapat mempersempit pembuluh darah sehingga peredaran nutrisi ke kulit kepala akan terganggu. Sebuah <a href="http://www.frontlinemed.co.uk/Smoking.htm" target="_blank">studi</a> di Harvard University telah meneliti 1.241 pria paruh baya dengan membandingkan antara perokok dan non perokok. </p>
            <p>Hasilnya, mereka yang merokok mengalami peningkatan dihidrotestosteron (DHT) sebesar 13 persen dan 9 persen hormon testosteron. Seperti diketahui, hormon DHT merupakan penyebab utama kerontokan rambut pada pria. </p>
            <p>So guys, bagi kamu yang masih merokok sebaiknya berhenti agar kerontokan rambut bisa dicegah sejak dini.</p>
            <h2><b>4. Mengonsumsi Minuman Beralkohol</b></h2>
            <p>Minuman beralkohol tak hanya merusak organ dalam tubuh, tetapi juga merusak kesehatan rambut kamu, lho. </p>
            <p>Hasil studi dari Universitas Maryland mengungkapkan bahwa alkohol serta stimulan lainnya seperti kopi dan rokok mengambil peranan penting dalam masalah kerontokan rambut. </p>
            <p>Terlalu banyak mengonsumsi alkohol dapat menghambat penyerapan zat besi dan zinc ke tubuh. Jadi, kamu akan mengalami dehidrasi dan penyerapan nutrisi pun terganggu sehingga menghilangkan kelembaban rambut, membuat rambut kering, rapuh, dan rontok. </p>
            <p>Mulai sekarang, kamu coba deh mengurangi atau berhenti mengonsumsi minuman beralkohol jika tak mau kesehatan rambutmu terganggu dan menyebabkan kerontokan dalam jangka waktu yang lama.</p>
            <h2><b>5. Menggunakan Gel Rambut</b></h2>
            <p>Penggunaan gel sudah menjadi kewajiban untuk pria. Namun, gel memiliki efek samping merusak rambut jika digunakan berlebihan, bahkan hingga kerontokan rambut. </p>
            <p>Guys, penggunaan gel berlebihan dapat membuat akar rambut melemah lho, sehingga menyebabkan rambut rontok dan menghambat pertumbuhan rambut. </p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/anti-dht-shampoo-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Anti-DHT Shampoo</a>
                        </div>
                    </div>
                </div>
            </div>

            <p>Tak hanya itu, malah menumbuhkan uban yang semestinya belum waktunya tumbuh. Jadi, mulai dari sekarang kamu harus membatasi penggunaan gel dan atur waktu dalam menggunakannya, ya. </p>
            <p>Ketika kamu beraktivitas di rumah usahakan tak usah menggunakan gel agar kulit kepala mengeluarkan minyak alami untuk kelembaban dan pertumbuhan rambut secara alami.</p>
            <p>Nah, itulah beberapa penyebab sepele kerontokan rambut. Jadi, para pria sebaiknya harus lebih peduli terhadap “mahkotanya” jika tak ingin penampilan kamu menjadi kurang mengesankan, terlebih di hadapan lawan jenis. Ya gak?</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Finasteride, Solusi Untuk Kebotakan Rambut Pria';
        $blog->category = 'Hair Loss';
        $blog->date = '12 October 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/finasteride-solusi-kebotakan-rambut-pria.jpg';
        $blog->url_name = 'finasteride-solusi-untuk-kebotakan-rambut-pria';
        $blog->subtitle = "Kamu memiliki masalah dengan kebotakan rambut? Tidak percaya diri karena rambut sering rontok? Nah, coba kamu gunakan Finasteride untuk mengatasinya.";
        $blog->description = '<p><i>Kamu memiliki masalah dengan kebotakan rambut? Tidak percaya diri karena rambut sering rontok? Nah, coba kamu gunakan Finasteride untuk mengatasinya.</i></p>
            <h2><b>Tapi, tahukah kamu apa itu Finasteride?</b></h2>
            <p>Digunakan oleh jutaan pria di seluruh dunia, Finasteride adalah salah satu obat yang terbukti dapat mencegah dan mengobati kerontokan rambut pada pria.</p>
            <p>Awalnya, Finasteride dikembangkan untuk mengatasi Benign Prostatic Hyperplasia (pembesaran prostat jinak), lho.</p>
            <p>Obat ini mampu meredam senyawa <a href="'. base_url() .'code/inilah-5-penyebab-sepele-kerontokan-rambut-pada-pria/">dihydrotestosteron</a> (DHT) dalam tubuh, yang juga berpengaruh terhadap kebotakan rambut pria dengan dosis optimal 1 mg per hari.Jika kamu mengonsultasikan masalah kebotakan rambut pada dokter, biasanya ia akan meresepkan <a href="'. base_url() .'rambut-rontok/">Finasteride</a> 1mg sebagai solusi ampuh. Obat ini berbentuk pil dan dapat diminum setiap hari. </p>
            <p>Hasilnya, banyak pria setelah meminum <a href="'. base_url() .'rambut-rontok/">Finasteride</a> mengalami perlambatan rambut rontok, dan beberapa menunjukan pertumbuhan rambut baru. </p>
            <p>Untuk mengatasi kebotakan rambut, kamu cukup mengonsumsi Finasteride 1 mg per hari dan dalam jangka waktu tiga bulan kamu akan melihat perubahan positif dari pengobatan tersebut.</p>
            <p>Ketika kamu mengonsumsi <a href="'. base_url() .'rambut-rontok/">Finasteride</a>, pastikan harus dengan pengawasan dokter, ya.</p>
            <h2><b>Apa saja manfaat dari Finasteride?</b></h2>
            <p>Finasteride telah teruji klinis dan banyak memiliki manfaat, lho diantaranya mencegah dari kebotakan, menghentikan kebotakan dari sumbernya, dan menstimulasi pertumbuhan rambut baru. </p>
            <p>Sebuah <a href="https://www.ncbi.nlm.nih.gov/pubmed/10495374" target="_blank">penelitian</a>, Drake (1999), mengungkapkan hormon dihidrotestosteron menurun sebanyak 64% setelah 42 hari pengobatan dengan dosis 1 mg. </p>
            <p><a href=https://www.ncbi.nlm.nih.gov/pubmed/9951956"" target="_blank">Pertumbuhan rambut</a> juga terjadi pada 48% dalam setahun dan meningkat dalam dua tahun menjadi 66% setelah menggunakan Finasteride. </p>
            <p>Dalam masa pengobatan, kamu harus berkomitmen penuh untuk mendapatkan manfaat dan hasil yang maksimal, guys.</p>
            <h2><b>Lantas, adakah efek samping dari penggunaan Finasteride?</b></h2>
            <p>Seperti kebanyakan obat medis lainnya, Finasteride juga memiliki efek samping, guys. </p>
            <p>Sebuah <a href="https://www.ncbi.nlm.nih.gov/pubmed/11809594" target="_blank">penelitian</a> mengungkapkan bahwa di bawah 2% pria mengalami efek samping seperti libido rendah dan sulit mempertahankan ereksi saat mengonsumsi obat tersebut.</p>
            <p>Finasteride memang menyebabkan beberapa efek samping pada sebagian kecil orang yang memakainya, tetapi bagi sebagian besar pria lainnya mendapatkan banyak manfaat dari perawatan rambut rontok yang sukses tanpa mengalami hasil yang tidak diinginkan. </p>
            <p>Penting untuk berbicara dengan dokter kamu dan mengungkapkan riwayat medis apapun sebelum memulai Finasteride. Dan jika kamu mengalami salah satu efek samping, pastikan untuk bertemu dengan dokter untuk menentukan rencana tindakan yang terbaik.</p>
            <h2><b>Bagaimana cara yang aman untuk menggunakan Finasteride?</b></h2>
            <p>Caranya gampang banget! Untuk mengonsumsi Finasteride yakni kamu cukup ikuti aturan yang telah diberikan dokter atau apoteker sebelum memulai pengobatan. Jika kamu memiliki pertanyaan, konsultasikanlah ke dokter atau apoteker. </p>
            <p>Obat ini dapat kamu konsumsi dengan atau tanpa makanan, biasanya sekali sehari, atau seperti yang telah diarahkan oleh dokter. Gunakan obat ini secara teratur setiap harinya di waktu yang sama untuk mendapatkan hasil yang paling baik.</p>
            <p>Kamu juga harus memperhatikan keamanan lainnya, seperti cara penyimpanan Finasteride itu sendiri. Agar tetap terjaga, sebaiknya obat ini disimpan pada suhu ruangan dan jauhkan dari cahaya langsung, serta tempat yang lembab. </p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/hair-tonic-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Minoxidil</a>
                        </div>
                    </div>
                </div>
            </div>

            <p>Pastinya, kamu harus memperhatikan instruksi penyimpanan pada kemasan produk atau tanyakan pada apoteker. Jauhkan dari jangkauan anak-anak dan hewan peliharaan karena berbahaya.</p>
            <p>Untuk kamu yang memiliki masalah dengan kebotakan rambut, ada baiknya jangan langsung mengonsumsi Finasteride tanpa pengawasan dokter, ya. Sebaiknya, konsultasikan terlebih dahulu kepada dokter agar pengobatan berjalan aman dan sesuai prosedur untuk mendapatkan hasil yang maksimal. </p>
            <p>Ada baiknya mengetahui hal-hal berikut sebelum mengonsumsinya:</p>
            <p>
                <ul>
                    <li>Beritahu dokter tentang obat resep dan obat non-resep, vitamin, suplemen gizi, dan produk herbal yang kamu gunakan agar dokter tahu dosis dan bisa memantau untuk meminimalisir efek samping</li>
                    <li>Finasteride tidak boleh digunakan untuk orang yang mengalami hipersensitivitas atau alergi terhadap kandungan obat ini, karena bisa memicu alergi dan berakibat fatal</li>
                    <li>Pemakaian Finasteride juga dikontradiksikan terhadap anak-anak dan para wanita termasuk ibu hamil dan ibu menyusui</li>
                    <li>Penderita uropati obstruktif juga tidak dapat menggunakan Finasteride untuk mengatasi pembengkakan prostat ringan atau kebotakan rambut</li>
                </ul>
            </p>
            <p>Atau, kamu bisa berkonsultasi di <a href="https://norm.id">norm.id</a> tentang informasi selengkapnya mengenai Finasteride dan masalah kerontokan rambut yang dialami, sebab banyak dokter expert yang siap membantu menjawab semua keluhanmu. Selamat mencoba dan semoga berhasil!</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Minoxidil Ampuh Mengatasi Rambut Rontok';
        $blog->category = 'Hair Loss';
        $blog->date = '4 October 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/minoxidil-mengatasi-rambut-rontok.jpg';
        $blog->url_name = 'minoxidil-ampuh-mengatasi-rambut-rontok';
        $blog->subtitle = "Minoxidil menjadi obat yang digunakan untuk mengatasi rambut rontok dan kebotakan, namun tidak boleh digunakan sembarangan tanpa petunjuk dan pengawasan dokter.";
        $blog->description = '<p>Banyak orang yang sudah mengetahui apa itu Minoxidil, namun banyak dari mereka pula yang tidak mengetahui manfaat dan efek sampingnya lebih jauh lagi. </p>
            <p>Minoxidil menjadi obat yang digunakan untuk mengatasi rambut rontok dan kebotakan, namun tidak boleh digunakan sembarangan tanpa petunjuk dan pengawasan dokter, lho. </p>
            <p>Tapi, apa benar Minoxidil itu ampuh mengatasi rambut rontok? Yuk, kita bahas selengkapnya!</p>
            <h2><b>Apa sih Minoxidil itu?</b></h2>
            <p>Minoxidil adalah obat yang digunakan untuk mengatasi kerontokan rambut yang masuk ke dalam golongan vasodilator, yakni obat yang mampu memperlancar aliran darah dengan cara memperlebar pembuluh darah. </p>
            <p>Awalnya, di tahun 1960-an, obat ini digunakan untuk mengatasi tekanan darah tinggi dan uniknya penderitanya memiliki efek samping dengan bertumbuhnya bulu-bulu di badan dengan cepat. </p>
            <p>Nah, di tahun 1990-an, dilakukanlah penelitian oleh para ilmuan. Hasil penelitian tersebut diketahui bahwa penggunaan Minoxidil denganjumlahtertentu membantu membuka folikel rambut. </p>
            <p>Obat ini berbentuk cairan seperti hair tonic dan busa yang digunakan dengan cara diteteskan dan digosokkan di kulit kepala, lho.</p>
            <p><i>US Food and Drug Administration (FDA)</i> memberikan persetujuan bahwa obat ini dapat digunakan untuk mengobati rambut rontok dan membantu pertumbuhannya kembali. </p>
            <p>Minoxidil mendorong pertumbuhan rambut dengan membawa lebih banyak oksigen dan nutrisi ke folikel rambut. </p>
            <p>Kamu cukup menerapkannya secara rutin dua kali sehari di kulit kepala. Maka, keefektifannya akan terlihat ketika kamu telah menggunakannya selama tiga bulan.</p>
            <h2><b>Apa saja manfaat Minoxidil?</b></h2>
            <p>Manfaat Minoxidil benar-benar sangat terasa. Sebuah <a href="https://www.jaad.org/article/S0190-9622(19)32737-9/fulltext" target="_blank">penelitian</a> mengungkapkan bahwa lebih dari 80% pria yang menggunakan minoxidil mengalami peningkatan pertumbuhan rambut baru. Penelitian tersebut juga menemukan bahwa lebih dari 60% pria yang menggunakan minoxidil mengalami rambut rontok berkurang.</p>
            <p>Sementara tidak ada <a href="https://www.jaad.org/article/S0190-9622(19)32737-9/fulltext" target="_blank">penelitian</a> ilmiah yang menunjukkan bahwa Minoxidil dapat merangsang pertumbuhan jambang, jenggot, brewok, atau kumis.</p>
            <p>Tetapi, kemampuan Minoxidil untuk memperluas pembuluh darah dan membuka saluran kalium mendukung kemungkinan itu. </p>
            <p>Ketika ini dikombinasikan dengan bukti dari testimoni internet, saya tidak dapat mengesampingkan gagasan bahwa seseorang dapat menumbuhkan jenggot dengan aplikasi Minoxidil yang konsisten.</p>
            <h2><b>Bagaimana cara yang aman menggunakan Minoxidil?</b></h2>
            <p>Jika kamu ingin menggunakan Minoxidil sebaiknya harus dalam pengawasan dan petunjuk dokter, ya! </p>
            <p>Untuk dosis penggunaan, pada obat cair, dimana 5% dapat digunakan oleh pria sementara wanita hanya 2% saja. </p>
            <p>Untuk penggunaanya, pastikan kulit kepala dan rambut kamu dalam keadaan kering sebelum menggunakan Minoxidil. </p>
            <p>Kemudian, oleskan pada kulit kepala sesuai dosis yang dianjurkan dokter dan jangan keramas setidaknya selama 4 jam. </p>
            <p>Hindari penggunaan hairdryer pada bagian kulit kepala yang telah diolesi. </p>
            <p>Jangan lupa untuk selalu cuci tangan setelah menggunakannya, ya!</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/hair-tonic-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Minoxidil</a>
                        </div>
                    </div>
                </div>
            </div>

            <h2><b>Lantas adakah efek samping dari Minoxidil?</b></h2>
            <p>Guys, sebagaimana obat-obat medis lainnya, Minoxidil juga memiliki beberapa efek samping, diantaranya kulit memerah, masalah pencernaan, alergi, iritasi kulit, gatal-gatal atau kemerahan, sensasi terbakar, mual, dan muntah. </p>
            <p>Namun, tidak semua orang mengalami efek samping seperti yang disebutkan tadi, lho. </p>
            <p>Sebaiknya, kamu konsultasikan terlebih dahulu sebelum menggunakannya pada dokter atau apoteker agar proses pengobatan berjalan aman dan lancar, serta dapat meminimalisir terjadinya efek samping. </p>
            <p>Apabila ragu dalam penggunaan Minoxidil, kamu bisa berkonsultasi dulu melalui <a href="https://norm.id">norm.id</a>, karena ada para dokter yang akan membantu masalah kerontokan rambutmu.</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Yuk, Kenali Hormon Penyebab Kebotakan Rambut Pada Pria';
        $blog->category = 'Hair Loss';
        $blog->date = '29 September 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/kerontokan-rambut-pria.jpg';
        $blog->url_name = 'yuk-kenali-hormon-penyebab-kebotakan-rambut-pada-pria';
        $blog->subtitle = "Kebotakan rambut bisa terjadi pada siapa saja tak terkecuali kaum pria.";
        $blog->description = '<p>Kebotakan rambut bisa terjadi pada siapa saja tak terkecuali kaum pria. </p>
            <p>Nah, kamu harus tahu nih kalau manusia bisa mengalami kerontokan rambut 50 hingga 100 helai rambut per hari. Jika sudah melebihi itu dan intensitasnya tinggi, kamu harus hati-hati ya guys bisa jadi itu gejala awal kebotakan rambut.</p>
            <p>Kebotakan rambut dapat disebabkan oleh banyak hal, namun pengaruh besarnya dipicu oleh hormon dihidrostestoren. Nah, untuk kamu yang belum mengetahui apa itu hormon dihidrotestosteron, yuk kita bahas!</p>
            <h2><b>Tahukah kamu apa itu hormon dihidrotestosteron itu?</b></h2>
            <p>Dihidrotestosteron (DHT) adalah salah satu hormon dengan sifat androgenik kuat yang memicu perkembangan karakteristik pria, seperti pembentukan alat kelamin pria selama kehamilan. </p>
            <p>Hormon ini penting lho untuk pertumbuhan rambut, tapi di lain sisi juga menyebabkan kebotakan. Tubuh kamu akan menghasilkan hormon DHT dengan bantuan 5α-Reductase enzyme. </p>
            <p>Umumnya, kadar testosteron yang diubah menjadi DHT di dalam tubuh yakni kurang dari 10 persen. Namun, jika presentasenya meningkat maka kamu berisiko mengalami kebotakan rambut, lho.</p>
            <h2><b>Mengapa hormon dihidrotestosteron memicu kebotakan rambut?</b></h2>
            <p>Sebuah <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6223099/" target="_blank">penelitian</a> mengungkapkan bahwa kandungan kadar hormon dihidrotestosteron pada folikel kepala pria yang botak lebih tinggi dibanding pria yang tidak botak. </p>
            <p>Jadi guys, ketika hormon testosteron bereaksi dengan enzim 5-alpha-reductase, yaitu enzim yang ditemukan dalam sel-sel folikel rambut kulit kepala, maka testosteron akan dikonversi menjadi dehidrotestosteron (DHT). </p>
            <p>Nah, semakin banyak testosteron yang diubah menjadi dihidrotestosteron, maka semakin besar resiko kebotakan yang akan kamu alami.</p>
            <p>Hormon DHT dapat mengecilkan folikel rambut di kepala, lho. Rambut sehatmu mungkin tidak akan bisa bertahan karena hormon ini dan berakibat pada kerontokan. </p>
            <p>Meski kebotakan dipengaruhi oleh hormon testosterone dalam tubuh, tapi DHT bisa dianggap sebagai penyebab utama kebotakan.</p>
            <h2><b>Bagaimana cara mengatur hormon dihidrotestosteron agar tidak berlebihan?</b></h2>
            <p>Guys, langkah awal yang efektif untuk memblokir DHT yakni langsung dari sumbernya, salah satunya menggunakan obat <a href="'. base_url() .'blog/details/finasteride-solusi-untuk-kebotakan-rambut-pria/">Finasteride</a> dan <a href="'. base_url() .'blog/details/minoxidil-ampuh-mengatasi-rambut-rontok/">Minoxidil</a>.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/hair-tonic-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Minoxidil</a>
                        </div>
                    </div>
                </div>
            </div>

            <p>Data dari <a href="https://www.ncbi.nlm.nih.gov/pubmed/28396101" target="_blank">studi</a> yang diterbitkan dalam Journal of American Academy of Dermatology menunjukkan bahwa kombinasi finasteride dan minoxidil adalah pengobatan yang paling efektif untuk memperlambat dan menghentikan kebotakan pada pria. </p>
            <p><a href="'. base_url() .'code/finasteride-solusi-untuk-kebotakan-rambut-pria/">Finasteride</a> dapat kamu konsumsi dalam bentuk pil dengan dosis satu miligram (mg) per hari, tentunya dengan petunjuk dan pengawasan dokter.</p>
            <p>Meskipun <a href="'. base_url() .'code/finasteride-solusi-untuk-kebotakan-rambut-pria/">Finasteride</a> dan <a href="'. base_url() .'code/minoxidil-ampuh-mengatasi-rambut-rontok/">Minoxidil</a> merupakan cara yang ampuh untuk mengatasi kebotakan, tetapi kamu juga harus melakukan hal-hal pendukung lainnya, seperti mengubah pola makan dengan membiasakan mengonsumsi buah-buahan yang mengandung antioksidan, zat besi, dan seng.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/finasteride-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Mau tumbuh rambut? Yup, ada pill nya lho!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Finasteride</a>
                        </div>
                    </div>
                </div>
            </div>

            <p>Ubah pula gaya hidupmu, ya! Biasakan berolahraga rutin tiga hingga lima kali seminggu, istirahat yang cukup, dan berhenti merokok dan mengonsumsi minuman beralkohol.</p>
            <p>Jika kamu sudah paham mengenai dihidrotestosteron, penyebab dan cara mengatasi kebotakan rambut, tak usah cemas ya, guys! </p>
            <p>Atau kamu bisa berkonsultasi di <a href="https://norm.id">norm.id</a> karena ada banyak dokter expert yang siap membantu masalah kamu jika mengalami masalah kerontokan dan kebotakan rambut.</p>';
        $arr_blog[] = clone $blog;

        $blog->name = '5 Jenis Minyak Alami ini Ampuh Mengatasi Rambut Rontok';
        $blog->category = 'Hair Loss';
        $blog->date = '24 September 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/minyak-alami.jpg';
        $blog->url_name = '5-jenis-minyak-alami-ini-ampuh-mengatasi-rambut-rontok';
        $blog->subtitle = "Rambut sehat menjadi dambaan setiap orang. Namun, rambut yang sehat tidak didapat dengan cara yang instan. Perawatan dan penanganan yang salah justru membuat rambut rusak hingga rontok.";
        $blog->description = '<p>Rambut sehat menjadi dambaan setiap orang. Namun, rambut yang sehat tidak didapat dengan cara yang instan. </p>
            <p>Perawatan dan penanganan yang salah justru membuat rambut rusak hingga rontok.</p>
            <p>Banyak penyebab rambut menjadi rusak dan rontok, diantaranya kekurangan zat besi, perubahan hormon dalam tubuh, kulit kepala bermasalah, hingga akibat mengonsumsi obat-obatan.</p>
            <p>Guys, ada cara mudah mengatasi rambut rontok yang bisa kamu lakukan sendiri di rumah, lho. Kamu bisa menggunakan berbagai jenis minyak alami untuk merawatnya. </p>
            <p>Mau tahu apa saja minyak alami yang bisa digunakan untuk merawat rambut rontok. <i>Check this out!</i></p>
            <p>Berikut ini 5 jenis minyak alami yang ampuh mengatasi rambut rontok :</p>
            <h2><b>1. Minyak Kelapa</b></h2>
            <p>Minyak kelapa ampuh untuk mengatasi rambut rontok karena mengandung rantai asam lemak (asam laurat, asam kaprat, asam oleat, dan linoleat) dan memiliki sifat anti mikroba, anti jamur, dan anti virus. </p>
            <p>Selain itu, mampu melawan radikal bebas, meningkatkan kelembaban kulit kepala, dan membuat rambut berkilau. </p>
            <p>Cara penggunaannya cukup mudah, lho. Kamu bisa menggunakannya satu jam sebelum keramas, dengan memijat kulit kepala perlahan-lahan dan pastikan merembes di kulit kepala.</p>
            <p>Lakukan setidaknya selama dua kali dalam seminggu. Kemudian diamkan selama 45 menit. Setelah itu, bilas rambut menggunakan shampoo hingga bersih.</p>
            <h2><b>2. Minyak Jojoba</b></h2>
            <p>Minyak jojoba berasal dari ekstrak tumbuhan Simmondsia chinensis yang mengandung vitamin A, B1, B2, B6, E, dan asam lemak tak jenuh. </p>
            <p>Minyak ini mampu memberikan nutrisi hingga ke batang rambut. </p>
            <p>Cara menggunakannya juga mudah, lho. Ambil minyak jojoba secukupnya dan masukan ke dalam panci kecil atau mangkuk, kemudian panaskan di atas kompor atau microwave hingga hangat. </p>
            <p>Setelah hangat, ambil minyak dan usapkan secara merata pada setiap helai rambut hingga ke ujung. </p>
            <p>Kemudian, diamkan selama 20 menit dan bilas dengan menggunakan shampoo.</p>
            <h2><b>3. Minyak Zaitun</b></h2>
            <p>Minyak zaitun dapat membantu kamu mengatasi rambut rontok. Kandungan asam lemak, asam oleat, dan linoleat berkhasiat untuk melapisi batang helai rambut agar tetap sehat dan terlindungi. </p>
            <p>Selain itu, kaya akan antioksidan yang membantu memerangi radikal bebas dan melindungi folikel rambut agar tetap sehat dan kuat.</p>
            <p>Nah, untuk menggunakannya, kamu cukup siapkan minyak zaitun 2 sdm dan 5 hingga 10 tetes minyak lavender, kemudian campurkan keduanya dalam wadah yang sama. </p>
            <p>Lalu, aduk hingga merata dan oleskan pada permukaan sampai akar rambut. Diamkan selama 30 menit agar meresap sempurna. </p>
            <p>Jika sudah, bilas dengan air bersih dan lakukan cara ini secara rutin 2 kali dalam seminggu.</p>
            <h2><b>4. Minyak Kemiri</b></h2>
            <p>Minyak kemiri berasal dari kemiri yang kaya akan sumber minyak. </p>
            <p>Di dalamnya terdapat kandungan protein, karbohidrat, vitamin (A, B1, dan B9), mineral (fosfor, kalium, kalsium, dan magsenium), dan beberapa zat lainnya, seperti saponin, flavonoid, polifenol, dan fitosterol. </p>
            <p>Oleh sebab itu, banyak dijual di pasaran sebagai solusi untuk mengatasi rambut rontok.</p>
            <p>Cara penggunaannya pun mudah. Pertama-tama kamu rebus/panggang/sangrai kemiri hingga keluar minyaknya.</p>
            <p>Oleskan minyak tadi di rambut dan kulit kepala. </p>
            <p>Pijat perlahan lalu diamkan selama 1 jam atau 1 malam. Jika sudah, bilaslah rambut dengan shampoo. </p>
            <p>Lakukan perawatan ini secara rutin seminggu sekali atau dua kali.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/hair-tonic-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Tumbuhkan rambut di kepalamu sekarang!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'rambut-rontok/">Lihat Minoxidil</a>
                        </div>
                    </div>
                </div>
            </div>

            <h2><b>5. Minyak Urang Aring</b></h2>
            <p>Urang aring telah lama digunakan untuk menjaga kesehatan rambut, salah satunya mengatasi rambut rontok. Tumbuhan ini mudah ditemukan di wilayah tropis hingga subtropis.</p>
            <p>Untuk penggunaannya, ambil sedikit daun urang aring lalu rendam dalam air. Kamu bisa remas atau haluskan untuk mendapatkan minyaknya. </p>
            <p>Setelah itu, gunakan sehabis mandi pada permukaan hingga akar rambut. Pijat perlahan dan gunakan sehari sekali untuk mendapatkan hasil yang maksimal.</p>
            <p>Nah, guys, itulah beberapa jenis minyak alami yang dapat kamu gunakan untuk mengatasi rambut rontok. </p>
            <p>Atau, jika ingin informasi lebih banyak lagi, kamu bisa berkonsultasi di <a href="https://norm.id">norm.id</a> karena ada banyak dokter expert yang siap membantu masalah kamu mengatasi rambut rambut.</p>';
        $arr_blog[] = clone $blog;

        $blog->name = 'Pria Merawat Kulit Wajah - Perlukah?';
        $blog->category = 'Acne';
        $blog->date = '19 September 2019';
        $blog->image = 'https://www.norm.id/assets/images/main/blog/merawat-kulit-wajah-pria.jpg';
        $blog->url_name = 'pria-merawat-kulit-wajah-perlukah';
        $blog->subtitle = "Merawat kulit wajah masih menjadi hal tabu bagi kaum pria. Mereka cenderung lebih cuek dibandingkan wanita dalam hal rawat-merawat.";
        $blog->description = '<p>Merawat kulit wajah masih menjadi hal tabu bagi kaum pria. Mereka cenderung lebih cuek dibandingkan wanita dalam hal rawat-merawat.</p>
            <p>Padahal merawat kulit wajah juga penting lho buat kalian kaum pria agar terhindar dari berbagai masalah kulit, salah satunya jerawat.</p>
            <p>Jerawat atau acne vulgaris terjadi karena peradangan kulit yang mengenai kelenjar sebum dan folikel rambut akibat tersumbatnya pori-pori kulit. </p>
            <p>Tentunya, jerawat tidak muncul begitu saja. Ada beberapa penyebab munculnya jerawat pada pria. Apa saja? Yuk, kita bahas!</p>
            <h2><b>1. Hormon</b></h2>
            <p>Hormon menjadi salah satu penyebab munculnya jerawat pada pria. Pria cenderung memproduksi lebih banyak minyak di wajah dibanding wanita. </p>
            <p>Hal ini karena kelenjar minyak dirangsang pengeluarannya oleh hormon seks androgen. </p>
            <p>Hasilnya, kulit menghasilkan minyak lebih banyak sehingga menyumbat pori-pori kulit yang menimbulkan jerawat.</p>
            <h2><b>2. Aktivitas</b></h2>
            <p>Kebanyakan pria lebih banyak melakukan aktivitas di luar rumah. Hal inilah yang memicu timbulnya jerawat, sebab kulit akan terkontaminasi keringat, polusi, dan kotoran lainnya. </p>
            <p>Belum lagi, setelah seharian beraktivitas biasanya kaum pria malas membersihkan wajah atau sekedar cuci muka. Benar begitu, guys?</p>
            <h2><b>3. Merokok</b></h2>
            <p>Sejumlah <a href="https://www.nhs.uk/news/lifestyle-and-exercise/are-smokers-more-likely-to-have-acne/" target="_blank">penelitian</a> telah membuktikan bahwa merokok memiliki kemungkinan 4 kali lebih besar terserang jerawat. </p>
            <p>Selain itu, dapat menyempitkan pembuluh darah dari dalam dan asapnya merusak sel-sel kulit, sehingga memicu penyumbatan di pori-pori yang menyebabkan munculnya komedo dan jerawat.</p>
            <p>Guys, wajah berjerawat tak sedap dipandang mata, lho. Jerawat juga bisa menjadi kendala di hidup kamu, salah satu contohnya ketika melamar pekerjaan.</p>
            <p>Banyak perusahaan memiliki kriteria <a href="https://www.urbanhire.com/blog/mengapa-berpenampilan-menarik-jadi-point-plus-saat-melamar-kerja/" target="_blank">“berpenampilan menarik”</a> untuk merekrut karyawan baru. </p>
            <p>Kriteria tersebut bukan hanya dari segi kerapihan pakaian dan rambut, namun perusahaan juga mempertimbangkan “kebersihan” seseorang. Anggapannya, seseorang yang berjerawat tidak bisa menjaga penampilannya, tidak bersih, atau jorok. </p>
            <p>Nah, hal ini yang akan membuat kamu merasa cemas dan tidak percaya diri, bahkan dalam kasus yang lebih ekstrim lagi hingga depresi.</p>
            <p>Oleh karena itu, ada beberapa tips untuk kamu merawat kulit wajah agar terhindar dari jerawat:</p>
            <h2><b>1. Rajin Membersihkan Wajah</b></h2>
            <p>Membersihkan wajah secara teratur menjadi sebuah keharusan. Sebab, seharian beraktivitas di luar ruangan memicu timbulnya jerawat.</p>
            <p>Membersihkan wajah 2 kali sehari dengan air atau sabun pencuci wajah akan membuat kulit menjadi segar kembali dan membersihkan sisa minyak & kotoran yang menempel.</p>

            <h2><b>2. Kendalikan Stres</b></h2>
            <p>Stres juga memicu timbulnya jerawat. Ketika kamu mengalami stres, maka sebum atau zat berminyak akan lebih cepat terbentuk dan menimbulkan jerawat. </p>
            <p>Oleh karena itu, kendalikan pikiranmu untuk selalu berpikiran positif dan sebisa mungkin atur waktu untuk beristirahat dari pekerjaan atau pikiran lainnya.</p>
            <h2><b>3. Mengonsumsi Makanan Sehat</b></h2>
            <p>Kamu juga harus mengonsumsi makanan sehat bila ingin menjaga kulit wajahmu tetap sehat. </p>
            <p>Makanan tersebut harus mengandung vitamin (A, C, dan E), seng, selenium, dan omega 3 yang bisa kamu dapatkan pada sayuran hijau, biji-bijian, kacang-kacangan, buah-buahan, daging, dan ikan.</p>
            <h2><b>4. Atur Pola Tidur</b></h2>
            <p>Kurang tidur dapat meningkatkan hormon glukokortikoid muncul sehingga memicu timbulnya jerawat. </p>
            <p>Dengan mengatur pola tidur, tubuh kamu akan melakukan detoksifikasi. Tidur yang cukup membutuhkan waktu sekitar 7-8 jam dan situasikan kamar tidurmu senyaman mungkin untuk mendapatkan manfaat yang optimal.</p>

            <div class="product-blog container-fluid">
                <div class="row row-eq-height">
                    <div class="col-xs-5 no-padding col-eq-height">
                        <div class="bg-cover" style="background-image: url('. base_url() .'assets/images/main/blog/night-cream-norm.jpg); width: 100%; min-height: 120px; height: 100%;"></div>
                    </div>
                    <div class="col-xs-7 col-eq-height product-blog-detail">
                        <div class="font-bold">Lawan jerawatmu dengan Night Cream Elio!</div>
                        <div class="margin-top-30px">
                            <a class="animate blue margin-top-30px product-blog-cta" href="'. base_url() .'jerawat/">Lihat Night Cream</a>
                        </div>
                    </div>
                </div>
            </div>

            <h2><b>5. Asupan Air Putih yang Cukup</b></h2>
            <p>Air putih membantu proses detoksifikasi dan menjaga kelembaban kulit dari dalam. </p>
            <p>Menurut penelitian, mengonsumsi cukup air putih akan membantu memperlancar aliran darah yang mungkin dapat menjadi penyebab timbulnya jerawat.</p>
            <p>So, bagi kamu kaum pria, mulai dari sekarang sebaiknya lebih peduli terhadap perawatan kulit wajah jika ingin berpenampilan bersih dan fresh.</p>
            <p>Tak usah seperti wanita, kamu cukup melakukannya dengan cara sederhana seperti yang telah dijelaskan di atas. </p>
            <p>Atau kalau ingin lebih mudah lagi, mungkin kamu harus mencoba melalui <a href="https://norm.id">norm.id</a>. Disana kamu bisa mendapat perawatan yang dibutuhkan wajah berjerawat berdasarkan rekomendasi dokter. Tertarik mencoba?</p>';
        $arr_blog[] = clone $blog;

        return $arr_blog;
    }

    public function generate_media()
    {
        $arr_media = array();
        $media = new stdClass();

        $media->name = "Norm, Produk Perawatan untuk Pria yang Ingin Tampil Lebih Baik";
        $media->url = 'https://lifestyle.kompas.com/read/2020/09/16/213000720/norm-produk-perawatan-untuk-pria-yang-ingin-tampil-lebih-baik';
        $media->date = '16 September 2020';
        $media->image = base_url() . 'assets/images/main/media/kompas.jpg';
        $arr_media[] = clone $media;

        $media->name = "Elio Berubah Jadi Norm, Inilah Platform Digital yang Fokus Kesehatan Pria";
        $media->url = 'https://autotekno.sindonews.com/read/166246/207/elio-berubah-jadi-norm-inilah-platform-digital-yang-fokus-kesehatan-pria-1600236589';
        $media->date = '16 September 2020';
        $media->image = base_url() . 'assets/images/main/media/sindonews.jpg';
        $arr_media[] = clone $media;

        $media->name = "Aplikasi Ini Cocok untuk Cowok yang Doyan Jaga Penampilan";
        $media->url = 'http://www.24berita.com/tekno/aplikasi-ini-cocok-untuk-cowok-yang-doyan-jaga-penampilan/360385-berita';
        $media->date = '13 September 2020';
        $media->image = base_url() . 'assets/images/main/media/24berita.jpg';
        $arr_media[] = clone $media;

        $media->name = "Aplikasi Ini Cocok untuk Cowok yang Doyan Jaga Penampilan";
        $media->url = 'https://id.berita.yahoo.com/aplikasi-ini-cocok-untuk-cowok-061734877.html';
        $media->date = '13 September 2020';
        $media->image = base_url() . 'assets/images/main/media/yahoo.jpg';
        $arr_media[] = clone $media;

        $media->name = "Aplikasi Ini Cocok untuk Cowok yang Doyan Jaga Penampilan";
        $media->url = 'https://www.viva.co.id/digital/startup/1301779-aplikasi-ini-cocok-untuk-cowok-yang-doyan-jaga-penampilan?medium=home&link=terbaru';
        $media->date = '13 September 2020';
        $media->image = base_url() . 'assets/images/main/media/viva.jpg';
        $arr_media[] = clone $media;

        $media->name = "Takut Dicap Tak Maskulin, Banyak Pria Masih Ogah Lakukan Perawatan";
        $media->url = 'https://www.klikbabel.com/2020/09/12/takut-dicap-tak-maskulin-banyak-pria-masih-ogah-lakukan-perawatan';
        $media->date = '12 September 2020';
        $media->image = base_url() . 'assets/images/main/media/klikbabel.jpg';
        $arr_media[] = clone $media;

        $media->name = "Norm Bikin Pria Tampil Lebih Baik";
        $media->url = 'https://mediaindonesia.com/read/detail/343968-norm-bikin-pria-tampil-lebih-baik';
        $media->date = '11 September 2020';
        $media->image = base_url() . 'assets/images/main/media/media-indonesia.jpg';
        $arr_media[] = clone $media;

        $media->name = "Norm Khusus untuk Membantu Masalah Kesehatan dan Penampilan Pria";
        $media->url = 'https://www.jpnn.com/news/norm-khusus-untuk-membantu-masalah-kesehatan-dan-penampilan-pria';
        $media->date = '11 September 2020';
        $media->image = base_url() . 'assets/images/main/media/jpnn.jpg';
        $arr_media[] = clone $media;

        $media->name = "Norm Hadir sebagai Solusi Utama Kesehatan dan Penampilan Pria";
        $media->url = 'https://indopos.co.id/read/2020/09/11/251530/norm-hadir-sebagai-solusi-utama-kesehatan-dan-penampilan-pria/';
        $media->date = '11 September 2020';
        $media->image = base_url() . 'assets/images/main/media/indopos.jpg';
        $arr_media[] = clone $media;

        $media->name = "Platform 'Norm' Tawarkan Solusi Masalah Kesehatan dan Penampilan Kaum Pria";
        $media->url = 'https://jakartainsight.com/platform-norm-tawarkan-solusi-masalah-kesehatan-dan-penampilan-kaum-pria';
        $media->date = '11 September 2020';
        $media->image = base_url() . 'assets/images/main/media/jakartainsight.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Rebranding Platform Digital Elio, Norm Tingkatkan Kualitas Hidup Pria Lewat Beragam Produk Kesehatan';
        $media->url = 'https://wartakota.tribunnews.com/2020/09/11/rebranding-platform-digital-elio-normtingkatkan-kualitas-hidup-pria-lewat-beragam-produk-kesehatan';
        $media->date = '11 September 2020';
        $media->image = base_url() . 'assets/images/main/media/tribunnews.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Norm Khusus untuk Membantu Masalah Kesehatan dan Penampilan Pria';
        $media->url = 'https://halloindo.com/jpnn/2020/09/10/norm-khusus-untuk-membantu-masalah-kesehatan-dan-penampilan-pria';
        $media->date = '11 September 2020';
        $media->image = base_url() . 'assets/images/main/media/halloindo.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Takut Dicap Tak Maskulin, Banyak Pria Masih Ogah Lakukan Perawatan';
        $media->url = 'https://www.suara.com/lifestyle/2020/09/10/144000/takut-dicap-tak-maskulin-banyak-pria-masih-ogah-lakukan-perawatan';
        $media->date = '10 September 2020';
        $media->image = base_url() . 'assets/images/main/media/suara.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Saatnya Pria Ubah Stigma dan Proaktif Selesaikan Tiga Masalah Kesehatannya';
        $media->url = 'https://www.tribunnews.com/kesehatan/2020/09/10/saatnya-pria-ubah-stigma-dan-proaktif-selesaikan-tiga-masalah-kesehatannya';
        $media->date = '10 September 2020';
        $media->image = base_url() . 'assets/images/main/media/tribunnews.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Norm Khusus untuk Membantu Masalah Kesehatan dan Penampilan Pria';
        $media->url = 'https://headtopics.com/id/norm-khusus-untuk-membantu-masalah-kesehatan-dan-penampilan-pria-15562426';
        $media->date = '10 September 2020';
        $media->image = base_url() . 'assets/images/main/media/head-topics.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Fokus Produk Kesehatan Pria, Elio Ganti Nama Jadi Norm';
        $media->url = 'https://www.wartaekonomi.co.id/read303350/fokus-produk-kesehatan-pria-elio-ganti-nama-jadi-norm';
        $media->date = '9 September 2020';
        $media->image = base_url() . 'assets/images/main/media/warta-ekonomi.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Fokus Produk Kesehatan Pria, Elio Ganti Nama Jadi Norm';
        $media->url = 'http://wartaegov.com/berita303350/fokus-produk-kesehatan-pria-elio-ganti-nama-jadi-norm.html';
        $media->date = '9 September 2020';
        $media->image = base_url() . 'assets/images/main/media/warta-egov.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Fokus Produk Kesehatan Pria, Elio Ganti Nama Jadi Norm';
        $media->url = 'https://id.investing.com/news/economy/fokus-produk-kesehatan-pria-elio-ganti-nama-jadi-norm-2021534';
        $media->date = '9 September 2020';
        $media->image = base_url() . 'assets/images/main/media/investing.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Pria Melakukan Perawatan Wajah, Kenapa Tidak?';
        $media->url = 'https://www.siana.com/danielkevink/5f1181e6d541df13d11913e2/pria-melakukan-perawatan-wajah-kenapa-tidak';
        $media->date = '17 July 2020';
        $media->image = base_url() . 'assets/images/main/media/kompasiana.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Ejakulasi Dini Yang Mesti Dipangkas Sejak  Dini';
        $media->url = 'https://www.kompasiana.com/danielkevink/5f084860d541df17ca50a6a2/ejakulasi-dini-hal-yang-mesti-dipangkas-sejak-dini?page=all';
        $media->date = '10 July 2020';
        $media->image = base_url() . 'assets/images/main/media/kompasiana.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Gojek Xcelerate Latih 11 Startup dengan Model Bisnis Direct-to-Consumer';
        $media->url = 'https://tribunjogjawiki.tribunnews.com/2020/06/23/gojek-xcelerate-latih-11-startup-dengan-model-bisnis-direct-to-consumer';
        $media->date = '23 June 2020';
        $media->image = base_url() . 'assets/images/main/media/tribun-jogja.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Gojek Xcelerate Konsisten Bina Startup Akselerasi Bisnis';
        $media->url = 'https://swa.co.id/swa/listed-articles/gojek-xcelerate-konsisten-bina-startup-akselerasi-bisnis';
        $media->date = '1 July 2020';
        $media->image = base_url() . 'assets/images/main/media/swa.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Gojek Xcelerate Latih 11 Startup Beradaptasi di Tengah Pandemi COVID-19';
        $media->url = 'https://media.skyegrid.id/gojek-xcelerate-latih-11-startup-beradaptasi-di-tengah-pandemi-covid-19/';
        $media->date = '21 June 2020';
        $media->image = base_url() . 'assets/images/main/media/skye-grid.jpg';
        $arr_media[] = clone $media;

        $media->name = '11 start-ups graduate Gojek’s business accelerator program';
        $media->url = 'https://www.thejakartapost.com/news/2020/06/19/11-start-ups-graduate-gojeks-business-accelerator-program.html';
        $media->date = '19 June 2020';
        $media->image = base_url() . 'assets/images/main/media/the-jakarta-post.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Gojek Xcelerate Latih 11 Startup dengan Model Bisnis Direct-to-Consumer';
        $media->url = 'https://siar.com/gojek-xcelerate-latih-11-startup-dengan-model-bisnis-direct-to-consumer/';
        $media->date = '18 June 2020';
        $media->image = base_url() . 'assets/images/main/media/siar.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Adaptasi Bisnis di Tengah Pandemi, 11 Startup Dapat Pelatihan dari Gojek Xcelerate';
        $media->url = 'https://money.kompas.com/read/2020/06/17/204000426/adaptasi-bisnis-di-tengah-pandemi-11-startup-dapat-pelatihan-dari-gojek';
        $media->date = '17 June 2020';
        $media->image = base_url() . 'assets/images/main/media/kompas.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Gojek Xcelerate Bawa 11 Startup Sukses di Masa Pandemi';
        $media->url = ' https://www.jpnn.com/news/gojek-xcelerate-bawa-11-startup-sukses-di-masa-pandemi';
        $media->date = '17 June 2020';
        $media->image = base_url() . 'assets/images/main/media/jpnn.jpg';
        $arr_media[] = clone $media;

        $media->name = '11 Startup Dapat Bimbingan Gojek Xcelerate untuk Beradaptasi dengan Pandemi';
        $media->url = 'https://www.liputan6.com/tekno/read/4281742/11-startup-dapat-bimbingan-gojek-xcelerate-untuk-beradaptasi-dengan-pandemi';
        $media->date = '17 June 2020';
        $media->image = base_url() . 'assets/images/main/media/liputan-6.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Compasslist - More Asian men are into skincare and health products, and Elio is here to help (discreetly)';
        $media->url = 'https://www.compasslist.com/insights/more-asian-men-are-into-skincare-and-health-products-and-norm-is-here-to-help-discreetly';
        $media->date = '17 May 2020';
        $media->image = base_url() . 'assets/images/main/media/compasslist.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Gojek Xcelerate Latih 11 Startup Kembangkan Model Bisnis Sesuaikan Pandemi';
        $media->url = 'https://www.wartaekonomi.co.id/read290486/gojek-xcelerate-latih-11-startup-kembangkan-model-bisnis-sesuaikan-pandemi';
        $media->date = '17 June 2020';
        $media->image = base_url() . 'assets/images/main/media/warta-ekonomi.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Gojek bimbing 11 "startup" lokal lewat Gojek Xcelerate Batch 4';
        $media->url = ' https://www.antaranews.com/berita/1559244/gojek-bimbing-11-startup-lokal-lewat-gojek-xcelerate-batch-4';
        $media->date = '17 June 2020';
        $media->image = base_url() . 'assets/images/main/media/antara-news.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Dukung Adaptasi Bisnis Di Tengah Pandemi, Gojek Xcelerate latih 11 startup dengan model bisnis direct to consumer';
        $media->url = 'https://pressrelease.kontan.co.id/release/dukung-adaptasi-bisnis-di-tengah-pandemi-gojek-xcelerate-latih-11-startup-dengan-model-bisnis-direct-to-consumer';
        $media->date = '17 June 2020';
        $media->image = base_url() . 'assets/images/main/media/press-release-id.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Tips Memotong Rambut di Rumah Saat Karantina';
        $media->url = 'https://www.liputan6.com/lifestyle/read/4231421/tips-memotong-rambut-di-rumah-saat-karantina';
        $media->date = '19 April 2020';
        $media->image = base_url() . 'assets/images/main/media/liputan-6.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Merubah Stigma Perawatan Diri Pria Bersama Elio';
        $media->url = 'https://male.co.id/detail/9720/mengubah-stigma-perawatan-diri-pria-bersama-norm-digest-0';
        $media->date = '15 April 2020';
        $media->image = $media->image = base_url() . 'assets/images/main/media/male-indonesia.jpg';
        $arr_media[] = clone $media;

        $media->name = 'Merubah Stigma Perawatan Diri Pria';
        $media->url = 'https://djakarta.id/merubah_stigma_perawatan_diri_pria_berita2445.html';
        $media->date = '14 April 2020';
        $media->image = $media->image = base_url() . 'assets/images/main/media/djakarta.jpg';
        $arr_media[] = clone $media;

        return $arr_media;
    }

    public function generate_reviews()
    {
        $arr_reviews = array();
        $reviews = new stdClass();

        $reviews->name = 'Indra K';
        $reviews->subtitle = 'Bener bener jadi solusi banget deh';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'indra-kurniawan';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Sempet sedih bgt mikirin kulit kepala gwe ini. Tapi semenjak coba produk hair care dari norm, masalah terpecahkaann. Apalagi pakai produk norm gak perlu lagi berlama2 pergi ke dokter.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'Rifky';
        $reviews->subtitle = 'Produk kesukaan gua!';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'rifky';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Gua memilih norm karena disitu gua bisa langsung direkomendasi produk oleh dokter yang professional. Alhasil gua bisa PD beraktivitas lagi!';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'Akbar';
        $reviews->subtitle = 'Mantep banget deh';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'akbar';
        $reviews->category = 'Acne';
        $reviews->review = 'Untungnya sekarang gua tau ada produk skincare buat pria yang oke banget, Elio. Elio bikin kulit gua bersih, cerah dan lembab lagi ditambah Elio memfasilitasi gua untuk konsul online, cocok banget untuk gua yang kerja dari senin sampai jumat dan suka ga sempet buat pergi ke dokter kulit.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'Vindy';
        $reviews->subtitle = 'Langsung cobain deh';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'vindy';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Jadi belakangan ini gwe ngalamin yang namanya masalah di kulit kepala gue mulai dari kulit kepala yang gatel banget sampe rambut rontok. Tapi sekarang ga lagi karna uda pake norm yang menyediakan produk direkomendasi dokter.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'Reviko Y';
        $reviews->subtitle = 'Punya wajah sehat jadi gampang';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'reviko-yohanma';
        $reviews->category = 'Acne';
        $reviews->review = 'Product dari norm sangat bagus banget buat menjaga kesehatan wajah. Punya wajah sehat jadi gampang, ga perlu ke klinik atau rumah sakit buat ketemu dokter.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'Vincent S';
        $reviews->subtitle = 'Udah ga khawatir lagi';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'vincent-simbolon';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Belakangan ini gue sering banget nerasain rambut rontok. Tapi gue udah ga khawatir lagi karena gwe udah coba produk dari norm.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'Andreas B';
        $reviews->subtitle = 'Elio bener-bener breakthrough bgt';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'andreas-bunda';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Konsultasi bisa online, cukup sediain waktu 5-10 menit gk pake antri kyk ke dokter, terus obatnya sesuai bgt sm problem gw dan juga cepet dianternya. Semua simple dan Really helpful bgt buat cowo-cowo yg sibuk & gak mau ribet tapi maksimal.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'Rinaldi I';
        $reviews->subtitle = 'Terimakasih ya Elio';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'rinaldi-ibrahim';
        $reviews->category = 'Acne';
        $reviews->review = 'Produk Elionya memang sesuai dengan kondisi kulit ku saat ini, jerawat dan bruntusannya pun sudah tak terlihat lagi. Pas mau pesan produknya, memang Nggk ribet juga sih, karena dikirim gitu setelah konsultasi via online jadi simple gitu.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'Anthony Y';
        $reviews->subtitle = 'Simple banget!';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'anthony-yaputra';
        $reviews->category = 'Acne';
        $reviews->review = 'Produknya sesuai dengan kondisi kulit aku, masalah kulit jadi teratasi. Pemesanan dan konsultasinya simple banget.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'Muhammad K';
        $reviews->subtitle = 'Gua percaya pakai norm';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'muhammad-kurniawan';
        $reviews->category = 'Acne';
        $reviews->review = 'Setelah pakai Elio, Muka gua jadi lebih bersih dan minyak jadi berkurang, Enaknya bisa konsultasi terlebih dahulu sebelum beli produknya, itu yang bikin gua percaya pakai norm';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'Andrew Y';
        $reviews->subtitle = 'Super Simple!';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'andrew-yap';
        $reviews->category = 'Acne';
        $reviews->review = 'Produknya sesuai dengan kondisi kulit aku, masalah kulit jadi teratasi. Pemesanan dan konsultasinya simple banget.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'Jason W';
        $reviews->subtitle = 'Hasilnya kelihatan oke!';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'jason-widjojo';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Baru beberapa minggu sih tapi perubahan sudah mulai tampak. Rambut rontok sudah berkurang. Care Specialist norm juga sangat mendukung!';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'Billy S';
        $reviews->subtitle = 'Fast & easy';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = 'billy-son';
        $reviews->category = 'Acne';
        $reviews->review = 'The interface is very simple and fast. Product arrived quickly and is nicely packaged. Excited to try the treatment!';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'AR';
        $reviews->subtitle = 'Ini emang bagus';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Kulit wajah menjadi lebih halus dan cerah, bekas-bekas jerawat ikut berkurang bersamaan dengan jerawat yang timbul.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'TM';
        $reviews->subtitle = 'Recommend!';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Sudah tidak banyak rambut yang rontok di bantal. Pelayanan sangat bagus';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'JS';
        $reviews->subtitle = 'Thank you norm!';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Process was easy and customer service was very professional. Much more affordable than other treatments I\'ve tried so hopefully just as effective';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'HM';
        $reviews->subtitle = 'Suka sama produk ini';
        $reviews->star = '4';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Yg saya rasakan saat pemakaian produk ini adalah redness jerawat berkurang & menyamaratakan bekas jerawat.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'NA';
        $reviews->subtitle = 'Top';
        $reviews->star = '4';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Kulit lebih halus, bekas jerawat memudar';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'DA';
        $reviews->subtitle = 'Good job norm!';
        $reviews->star = '5';
        $reviews->icon = 2;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Jelas ya semua orang mempunyai jenis kulit yang sangat berbeda, namun di norm selain kita berkonsultasi secara online dan praktis terlebih dahulu kita pastinya lebih leluasa dalam menentukan apa yang harus kita butuhkan, terlebih terdapat dokter yg handal dalam menangani kasus kulit atau kerontokan rambut, ini menurut saya merupakan suatu kemudahan tersendiri dari produk norm';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'AB';
        $reviews->subtitle = 'Simple dan efektif';
        $reviews->star = '5';
        $reviews->icon = 2;
        $reviews->image = '';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Rambut terasa ringan dan tidak beminyak serta tambah PD aja. Mungkin selain dari produk tersebut ada juga conditioner';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'DM';
        $reviews->subtitle = 'Produk cocok';
        $reviews->star = '4';
        $reviews->icon = 2;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Sebelum mencoba muka agak kusam dan agak kering, tp stelah memakai produknya muka jdi agak lebih bersih dan tidak kering lagi..';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'AH';
        $reviews->subtitle = 'Bagus juga';
        $reviews->star = '4';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Muka terasa lebih cerah dan bersih';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'RF';
        $reviews->subtitle = 'Wajah lebih rata';
        $reviews->star = '4';
        $reviews->icon = 2;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Saya rasakan noda hitam bekas jerawat berkurang.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'EK';
        $reviews->subtitle = '';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Menurut istri, wajah saya terlihat lebih bersih';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'YA';
        $reviews->subtitle = 'Cocok sama kulit saya';
        $reviews->star = '4';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Pas pake acne spotnya jadi lebih cepet kering dan kempes';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'AG';
        $reviews->subtitle = 'Menurut aku bagus';
        $reviews->star = '5';
        $reviews->icon = 2;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Wajah bersih, flek hitam memudar, minyak lebih terkontrol dan wajah jadi cerah.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'SF';
        $reviews->subtitle = 'Lumayan ni';
        $reviews->star = '4';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Kadar minyak diwajah berkurang. Saya mengapresiasi norm dalam menciptakan produknya dngn kualitas baik';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'MR';
        $reviews->subtitle = 'Kayaknya bakal repurchase';
        $reviews->star = '4';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Jerawat saya dalam keadaan merah dan terlihat memerah, tapi setelah pemakaian, saya merasa jerawat saya terasa lebih kering dan tidak memerah dan spot cream membuat jerawat saya kempes.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'KA';
        $reviews->subtitle = 'Berfungsi seperti deskripsi produk';
        $reviews->star = '5';
        $reviews->icon = 2;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Kulit lebih halus dan cerah. Packagingnya keren, dr Dus, Botol Day cream / Night Cream yg tinggal tekan, spot Cream yg bs sesuai kebutuhan, semua keren sesuai fungsinya. Saya juga bisa konsultasi secara online Krn sebagai pria, saya susah untuk datang ke klinik kecantikan. Bagus sekali';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'ALK';
        $reviews->subtitle = 'Bikin muka jadi cerah sama halus';
        $reviews->star = '4';
        $reviews->icon = 2;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Sebelumnya wajah saya berminyak dan ada jerawat yang cukup besar. Sekarang sudah mengecil dan hampir menghilang. Ini pertama kali saya menggunakan produk perawatan. Sungguh pengalaman pertama yang mengesankan. Layanan sudah sangat baik dan produknya juga bagus.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'BM';
        $reviews->subtitle = 'Produk sangat praktis';
        $reviews->star = '4';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Setelah pemakaian norm, rambut saya lebih terasa lebat dan tidak mudah rontok. Dari yang sebelumnya sering rontok dan sering lepek';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'UU';
        $reviews->subtitle = 'Very worth it sih';
        $reviews->star = '4';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Begitu mengusap kepala rambut ada rambut-rambut kecil yang tumbuh. Itu dah bisa dirasakan pada minggu kedua. Begitu lihat di cermin memang terlihat agak rapat Pertumbuhannya. Jadi lebih gelap. Sepertinya kalau pemakaian dilanjutkan, rambut akan tumbuh di bagian botak.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'BD';
        $reviews->subtitle = 'It works!';
        $reviews->star = '5';
        $reviews->icon = 2;
        $reviews->image = '';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Sebelum memakai norm rambut saya sering rontok dan terasa tipis. Setelah pemakaian norm, rambut saya terasa lebat dan kuat. Tidak mudah rontok';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'HS';
        $reviews->subtitle = 'Ada perubahan';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Setelah pemakaian kurang lebih 2 minggu rambut rontok saya sedikit berkurang, sebelumnya waktu keramas banyak yg rontok, tapi kmrn sedikit berkurang rambut yg rontok.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'HAS';
        $reviews->subtitle = 'Harus rutin untuk lihat hasil';
        $reviews->star = '5';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Saat pemakaian rangkaian produk semua rutin, jerawat mulai kurang.';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'DW';
        $reviews->subtitle = 'Wajah lebih rata';
        $reviews->star = '4';
        $reviews->icon = 1;
        $reviews->image = '';
        $reviews->category = 'Acne';
        $reviews->review = 'Sebelumnya flek hitam begitu terlihat. Sesudahnya mulai menghilang atau samar2';
        $arr_reviews[] = clone $reviews;

        $reviews->name = 'NM';
        $reviews->subtitle = 'Tumbuh rambut!';
        $reviews->star = '5';
        $reviews->icon = 2;
        $reviews->image = '';
        $reviews->category = 'Hair Loss';
        $reviews->review = 'Tumbuh rambut halusnya kelihatan.';
        $arr_reviews[] = clone $reviews;

        return $arr_reviews;
    }

    public function generate_video()
    {
        $arr_video = array();
        $video = new stdClass();

        if (time() > 1605850200)
        {
            $video->name = 'VOICE OF CITIZEN (Eps. 2) : Sex Education | Dianggap Tabu Tapi Penting';
            $video->subtitle = "<p>Voice of Citizen adalah segmen yang berisi suara dari citizen tentang isu-isu kehidupan pria.</p><p>Sex merupakan hal yang tabu untuk dibicarakan secara gamblang di Indonesia. Namun seiring perkembangan zaman, arus informasi kian padat sehingga orang pun makin gencar mencari hal-hal yang berkaitan dengan sex.</p><p>Di sini mulai terlihat pentingnya sebuah sex education untuk bekal seseorang di masa depan supaya nggak salah jalan.</p><p>Nah, gimana sih pendapat mereka tentang sex education?  Dari mana generasi sekarang belajar tentang sex education?</p>";
            $video->url_embed = 'https://www.youtube.com/embed/mf7TYmnPUD0';
            $video->url = 'https://www.youtube.com/watch?v=mf7TYmnPUD0';
            $video->date = '20 November 2020';
            $video->image = base_url() . 'assets/images/main/blog/voice-of-citizen-2.jpg';
            $arr_video[] = clone $video;
        }

        $video->name = 'VOICE OF CITIZEN : Zona Privasi Cowok | Antara Aku, Kamu, dan Dia';
        $video->subtitle = "<p>Voice of Citizen merupakan segmen yang berisi suara para citizen terkait isu-isu seputar kehidupan pria.</p><p>Setiap orang pasti punya privasi, bahkan mereka yang sudah punya pasangan. Tapi, sebetulnya gimana sih pandangan cowok dan cewek tentang privasi, terutama privasinya cowok?</p><p>Inilah suara mereka.</p>";
        $video->url_embed = 'https://www.youtube.com/embed/m6umXUB6uNc';
        $video->url = 'https://www.youtube.com/watch?v=m6umXUB6uNc';
        $video->date = '13 November 2020';
        $video->image = base_url() . 'assets/images/main/blog/voice-of-citizen-1.jpg';
        $arr_video[] = clone $video;

        $video->name = 'NORM CODE : A Channel for Urban Men';
        $video->subtitle = "<p>Introducing NORM CODE, a channel for urban men.Norm Code adalah channel yang membahas semua hal tentang pria, mulai dari kesehatan & penampilan pria, komunitas, urban lifestyle hingga hobi. Norm Code berisi playlist video yang terdiri dari video Social Experiment dan Podcast. Norm Code berdedikasi untuk memberikan informasi dan ruang bagi pria untuk berbicara dan mencapai kualitas hidup yang lebih baik.</p>";
        $video->url_embed = 'https://www.youtube.com/embed/Y93UBvXZpAE';
        $video->url = 'https://www.youtube.com/watch?v=Y93UBvXZpAE';
        $video->date = '6 November 2020';
        $video->image = base_url() . 'assets/images/main/blog/normcode-introduction-thumbnail.jpg';
        $arr_video[] = clone $video;

        return $arr_video;
    }
}