<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Bagaimana memilih Universitas yang tepat?',
                'image' => 'artikel_terbaru.png',
                'content' => 'Memilih jurusan kuliah merupakan salah satu keputusan paling penting dalam hidup yang akan menentukan arah karir dan masa depan seseorang. Di era digital yang terus berkembang pesat ini, pemilihan jurusan tidak hanya harus mempertimbangkan minat dan bakat, tetapi juga prospek kerja dan kebutuhan pasar di masa mendatang.
                Langkah pertama dalam memilih jurusan adalah mengenali diri sendiri dengan baik. Setiap individu memiliki keunikan tersendiri dalam hal minat, bakat, dan kepribadian. Penting untuk melakukan introspeksi mendalam mengenai apa yang benar-benar diminati dan dikuasai. Seseorang yang memiliki ketertarikan tinggi terhadap teknologi dan pemecahan masalah mungkin cocok untuk jurusan teknik atau ilmu komputer, sementara mereka yang senang berinteraksi dengan orang lain bisa mempertimbangkan jurusan komunikasi atau psikologi.
                Setelah mengenali minat dan bakat, langkah selanjutnya adalah melakukan riset mendalam tentang berbagai pilihan jurusan. Riset ini mencakup kurikulum yang akan dipelajari, metode pembelajaran, fasilitas yang tersedia, serta track record alumni dari universitas tersebut. Informasi ini dapat diperoleh melalui website resmi universitas, pameran pendidikan, atau berkonsultasi langsung dengan mahasiswa dan alumni jurusan yang diminati.
                Pertimbangan prospek karir juga sangat krusial dalam pemilihan jurusan. Dalam era digital ini, banyak pekerjaan tradisional yang mulai tergantikan oleh teknologi, sementara profesi-profesi baru bermunculan. Oleh karena itu, penting untuk memilih jurusan yang memiliki relevansi tinggi dengan kebutuhan pasar kerja masa depan dan memberikan peluang pengembangan karir yang luas.
                Aspek finansial juga perlu dipertimbangkan secara realistis. Biaya pendidikan, lokasi universitas, dan potensi penghasilan setelah lulus harus diperhitungkan dengan matang. Namun, jangan sampai pertimbangan finansial mengalahkan passion dan minat yang sesungguhnya, karena kepuasan dalam berkarir akan sangat berpengaruh terhadap kesuksesan jangka panjang.',
                'upload_date' => '2025-01-15',
                'category_id' => 1,
            ],
            [
                'title' => 'Profesi yang Paling Dibutuhkan di Tahun 2025',
                'image' => 'artikel_bekerja1.png',
                'content' => 'Dunia kerja mengalami transformasi besar-besaran seiring dengan perkembangan teknologi dan perubahan gaya hidup masyarakat. Berdasarkan laporan World Economic Forum (WEF), diperkirakan sebanyak 85 juta pekerjaan akan hilang di tahun 2025 karena otomatisasi, namun sebanyak 98 juta pekerjaan baru akan tercipta.
                Profesi seperti big data specialist, renewable energy engineer, dan AI specialist diproyeksikan menjadi karier yang paling diminati. Di sisi lain, posisi seperti data entry clerks dan teller bank diprediksi akan tergeser. Perubahan ini menunjukkan bahwa pekerjaan yang bersifat repetitif dan dapat diotomatisasi akan berkurang, sementara pekerjaan yang membutuhkan kreativitas, analisis kompleks, dan interaksi manusia akan semakin dibutuhkan.
                Di era yang serba data, profesi sebagai data analyst akan terus menjadi primadona. Perusahaan mengandalkan data untuk memahami perilaku konsumen, memantau tren pasar, hingga meningkatkan efisiensi operasional. Kemampuan dalam menganalisis data menggunakan tools seperti Python, SQL, atau Tableau menjadi kunci utama untuk sukses di bidang ini.
                Dengan meningkatnya penggunaan AI dalam berbagai sektor, permintaan terhadap ahli AI dan machine learning terus meningkat. Profesi ini akan menjadi salah satu yang paling dicari di tahun 2025, terutama di sektor teknologi, perbankan, kesehatan, dan manufaktur.
                Beberapa bidang yang menunjukkan pertumbuhan paling tinggi antara lain teknologi dan digital, dengan posisi seperti data analyst, software developer, hingga cybersecurity specialist semakin dibutuhkan karena banyak perusahaan beralih ke sistem digital.',
                'upload_date' => '2025-01-10',
                'category_id' => 2,
            ],
            [
                'title' => 'Ekspektasi Gaji Fresh Graduate',
                'image' => 'artikel_bekerja2.png',
                'content' => 'Salah satu pertimbangan penting bagi fresh graduate adalah ekspektasi gaji yang realistis. Gaji awal sangat bervariasi tergantung pada industri, lokasi, ukuran perusahaan, dan tentunya skill yang dimiliki. Untuk lulusan bidang teknologi, khususnya yang memiliki kemampuan programming dan data analysis, biasanya memiliki starting salary yang lebih tinggi dibanding bidang lainnya.
                Fresh graduate perlu memahami bahwa gaji awal bukanlah segalanya. Yang lebih penting adalah pengalaman, networking, dan skill development yang bisa didapatkan dari pekerjaan pertama. Banyak profesional sukses yang memulai dengan gaji modest namun kemudian berkembang pesat karena terus belajar dan mengasah kemampuan.
                Strategi negosiasi gaji juga penting dikuasai. Fresh graduate sebaiknya melakukan riset tentang standar gaji di industri yang dituju, mempersiapkan portofolio yang kuat, dan dapat menunjukkan value yang bisa diberikan kepada perusahaan. Jangan ragu untuk menanyakan benefit lain selain gaji, seperti asuransi kesehatan, program training, atau flexible working arrangement.',
                'upload_date' => '2025-01-08',
                'category_id' => 2,
            ],
            [
                'title' => 'Peran Generasi Milenial dalam Ekonomi Kreatif',
                'image' => 'artikel_bekerja3.png',
                'content' => 'Generasi milenial memiliki peran strategis dalam menggerakkan ekonomi kreatif Indonesia. Sebagai digital native, mereka memiliki pemahaman intuitif tentang teknologi dan tren digital yang dapat dimanfaatkan untuk menciptakan inovasi dalam berbagai bidang kreatif.
                Karakteristik milenial yang cenderung entrepreneurial dan tidak takut mengambil risiko membuat mereka menjadi motor penggerak startup dan bisnis kreatif. Mereka juga lebih terbuka terhadap kolaborasi lintas disiplin ilmu, yang sangat dibutuhkan dalam industri kreatif yang memadukan seni, teknologi, dan bisnis.
                Platform digital dan media sosial memberikan kesempatan tak terbatas bagi milenial untuk mengekspresikan kreativitas dan mengmonetisasinya. Dari content creator, graphic designer, hingga digital marketer, banyak profesi baru yang lahir dari ekosistem digital ini.
                Pemerintah dan industri perlu memberikan support yang tepat untuk memaksimalkan potensi generasi milenial dalam ekonomi kreatif. Hal ini termasuk penyediaan infrastruktur digital, program inkubasi bisnis, serta kebijakan yang mendukung pertumbuhan industri kreatif.',
                'upload_date' => '2025-01-05',
                'category_id' => 2,
            ],
            [
                'title' => 'Sistem Kerja Hybrid: Kelebihan dan Kekurangannya',
                'image' => 'artikel_bekerja4.png',
                'content' => 'Pandemi COVID-19 telah mengakselerasi adopsi sistem kerja hybrid yang menggabungkan work from office (WFO) dan work from home (WFH). Sistem ini kini menjadi standar baru di banyak perusahaan global dan diperkirakan akan terus berlanjut hingga tahun 2025 dan seterusnya.
                Kelebihan sistem kerja hybrid sangat signifikan bagi karyawan maupun perusahaan. Dari sisi karyawan, fleksibilitas waktu dan lokasi kerja memberikan work-life balance yang lebih baik. Mereka dapat menghemat waktu dan biaya transportasi, serta memiliki keleluasaan untuk mengatur lingkungan kerja yang paling produktif. Bagi perusahaan, sistem hybrid dapat mengurangi biaya operasional seperti sewa kantor dan utilitas, sekaligus memperluas talent pool karena tidak terbatas pada lokasi geografis tertentu.
                Namun, sistem kerja hybrid juga memiliki tantangan yang perlu diatasi. Komunikasi dan kolaborasi tim bisa menjadi lebih sulit, terutama untuk proyek yang membutuhkan brainstorming intensif atau mentoring junior staff. Risiko isolasi sosial dan menurunnya company culture juga perlu diwaspadai.
                Untuk mengoptimalkan sistem kerja hybrid, perusahaan perlu berinvestasi pada teknologi collaboration tools yang memadai, menetapkan protokol komunikasi yang jelas, dan menciptakan program team building virtual maupun offline secara berkala.',
                'upload_date' => '2025-01-03',
                'category_id' => 2,
            ],
            [
                'title' => 'Pertimbangan Penting dalam Memilih Jurusan Lanjutan',
                'image' => 'artikel_studi1.png',
                'content' => 'Keputusan untuk melanjutkan studi ke jenjang yang lebih tinggi memerlukan pertimbangan matang dari berbagai aspek. Motivasi menjadi faktor utama yang harus jelas, apakah untuk pengembangan karir, peningkatan salary, atau murni karena passion terhadap ilmu tertentu.
                Relevansi program studi dengan tujuan karir jangka panjang sangat penting dipertimbangkan. Pastikan program yang dipilih dapat memberikan skill dan knowledge yang dibutuhkan untuk mencapai posisi atau industri yang dituju. Riset tentang kurikulum, faculty, dan alumni network dari program tersebut akan membantu dalam pengambilan keputusan.
                Aspek finansial juga tidak bisa diabaikan. Perhitungkan tidak hanya biaya kuliah, tetapi juga opportunity cost dari waktu yang diinvestasikan. Jika sudah bekerja, pertimbangkan apakah ada program part-time atau executive program yang memungkinkan tetap berkarir sambil kuliah.
                Timing juga crucial dalam keputusan melanjutkan studi. Bagi fresh graduate, melanjutkan studi langsung mungkin ideal untuk membangun fondasi ilmu yang kuat. Namun bagi yang sudah bekerja, pengalaman kerja beberapa tahun terlebih dahulu bisa memberikan perspektif yang lebih matang dalam memahami materi perkuliahan.',
                'upload_date' => '2024-12-28',
                'category_id' => 1,
            ],
            [
                'title' => 'Peran Teknologi dalam Perkembangan Kurikulum Pendidikan',
                'image' => 'artikel_studi2.png',
                'content' => 'Era globalisasi dan digitalisasi telah merevolusi dunia pendidikan secara fundamental. Teknologi tidak lagi sekadar menjadi alat bantu pembelajaran, tetapi telah menjadi bagian integral dari proses pendidikan modern yang membentuk cara kita belajar, mengajar, dan mengakses informasi.
                Implementasi teknologi dalam kurikulum pendidikan memungkinkan pendekatan pembelajaran yang lebih interaktif dan personal. Platform e-learning, virtual reality, dan artificial intelligence memungkinkan setiap siswa belajar dengan kecepatan dan gaya yang sesuai dengan kemampuan masing-masing. Hal ini sangat berbeda dengan pendekatan one-size-fits-all yang selama ini mendominasi sistem pendidikan tradisional.
                Akses terhadap informasi yang tak terbatas melalui internet telah mengubah peran pendidik dari sumber utama informasi menjadi fasilitator dan mentor dalam proses pembelajaran. Kurikulum modern harus mengajarkan tidak hanya konten, tetapi juga critical thinking skills untuk menyaring dan mengevaluasi informasi yang tersedia secara online.
                Keterampilan digital literacy kini menjadi basic requirement yang harus dikuasai setiap lulusan. Kurikulum pendidikan perlu mengintegrasikan pembelajaran tentang coding, data analysis, digital marketing, dan cybersecurity sebagai bagian dari core curriculum, bukan hanya sebagai mata pelajaran pilihan.
                Kolaborasi global menjadi lebih mudah dengan teknologi. Siswa dapat berpartisipasi dalam proyek internasional, mengikuti kelas dari universitas top dunia, dan berinteraksi dengan peers dari berbagai negara. Hal ini memperluas wawasan dan mempersiapkan mereka untuk berkompetisi di pasar global.',
                'upload_date' => '2024-12-25',
                'category_id' => 1,
            ],
            [
                'title' => 'Persiapan Mental untuk Kuliah S2',
                'image' => 'artikel_studi3.png',
                'content' => 'Melanjutkan pendidikan ke jenjang S2 membutuhkan persiapan mental yang matang karena berbeda signifikan dengan pengalaman kuliah S1. Tingkat kompleksitas materi, expectation dari dosen, dan tanggung jawab akademik yang lebih besar memerlukan mental fortitude yang kuat.
                Time management menjadi skill krusial yang harus dikuasai. Mahasiswa S2 sering kali harus menyeimbangkan antara coursework, research project, dan commitments lainnya. Kemampuan untuk memprioritaskan tugas dan mengelola deadline yang ketat akan sangat menentukan kesuksesan dalam program.
                Self-directed learning adalah karakteristik utama pendidikan S2. Mahasiswa diexpect untuk proaktif dalam mencari referensi, mengembangkan critical thinking, dan berkontribusi dalam diskusi akademik. Mindset harus berubah dari passive learner menjadi active contributor dalam knowledge creation.
                Networking dengan sesama mahasiswa, dosen, dan profesional di bidang yang sama sangat penting untuk pengembangan karir jangka panjang. Manfaatkan kesempatan seminar, conference, dan academic events untuk membangun relasi yang berkualitas.
                Persiapkan mental untuk menghadapi intellectual challenges dan criticism yang konstruktif. Research dan thesis writing process sering kali penuh dengan trial and error, revision, dan feedback yang harus disikapi dengan positif sebagai bagian dari learning process.',
                'upload_date' => '2024-12-20',
                'category_id' => 1,
            ],
            [
                'title' => 'Tips Strategis Lolos Masuk Universitas Top',
                'image' => 'artikel_studi4.png',
                'content' => 'Kompetisi masuk universitas terbaik semakin ketat setiap tahunnya. Persiapan yang strategis dan sistematis menjadi kunci utama untuk meraih kesuksesan. Mulailah persiapan jauh-jauh hari, idealnya minimal satu tahun sebelum pendaftaran dibuka.
                Pahami dengan detail sistem seleksi yang digunakan universitas target. Setiap universitas memiliki kriteria dan bobot penilaian yang berbeda. Ada yang lebih menekankan pada nilai akademik, ada yang memberikan porsi besar untuk prestasi non-akademik, dan ada pula yang mengutamakan esai atau wawancara.
                Konsistensi dalam prestasi akademik sangat penting. Jangan hanya focus pada satu atau dua mata pelajaran saja, tetapi pertahankan performa yang baik di semua mata pelajaran. GPA yang konsisten tinggi menunjukkan kemampuan dan dedikasi yang berkelanjutan.
                Kembangkan soft skills melalui berbagai kegiatan ekstrakurikuler, volunteering, atau leadership positions. Universitas top tidak hanya mencari academic achievers, tetapi juga future leaders yang memiliki karakter dan kemampuan interpersonal yang baik.
                Persiapkan diri untuk tes standar dengan serius. Ikuti try out secara berkala, analisis kelemahan, dan fokuskan waktu belajar pada area yang perlu diperbaiki. Jangan lupa untuk menjaga kesehatan fisik dan mental selama masa persiapan intensif.',
                'upload_date' => '2024-12-20',
                'category_id' => 1,
            ],
            [
                'title' => 'Digital Marketing untuk UMKM',
                'image' => 'artikel_wirausaha1.png',
                'content' => 'Era digital telah membuka peluang luas bagi Usaha Mikro, Kecil, dan Menengah (UMKM) untuk berkembang dan bersaing di pasar yang lebih luas. Digital marketing menjadi kunci utama dalam transformasi ini, memungkinkan UMKM menjangkau customer base yang lebih besar dengan investasi yang relatif terjangkau.
                Platform media sosial seperti Instagram, Facebook, dan TikTok telah menjadi channel marketing yang powerful untuk UMKM. Melalui content yang engaging dan consistent posting, bisnis kecil dapat membangun brand awareness dan customer loyalty yang kuat. Visual storytelling melalui foto dan video produk yang menarik dapat mengkomunikasikan value proposition dengan efektif kepada target audience.
                Search Engine Optimization (SEO) dan Google My Business optimization sangat crucial untuk UMKM yang ingin ditemukan oleh potential customers. Local SEO khususnya sangat penting untuk bisnis yang memiliki physical location, membantu mereka muncul di hasil pencarian ketika customer mencari produk atau layanan di area tertentu.
                E-commerce platforms seperti Shopee, Tokopedia, dan Lazada memberikan kesempatan bagi UMKM untuk berjualan online tanpa harus membangun website sendiri. Namun, memiliki website sendiri tetap penting untuk building brand credibility dan mengurangi dependency pada platform pihak ketiga.
                Email marketing dan WhatsApp Business dapat digunakan untuk nurturing customer relationships dan driving repeat purchases. Automation tools memungkinkan UMKM mengirimkan personalized messages kepada customers berdasarkan behavior dan preferences mereka.
                Data analytics menjadi komponen penting dalam digital marketing strategy. UMKM perlu belajar menggunakan tools seperti Google Analytics untuk memahami customer behavior, measuring campaign effectiveness, dan making data-driven decisions untuk optimizing marketing efforts.',
                'upload_date' => '2024-12-20',
                'category_id' => 3,
            ],
            [
                'title' => 'Strategi Crowdfunding untuk Startup',
                'image' => 'artikel_wirausaha2.png',
                'content' => 'Crowdfunding telah menjadi alternatif financing yang menarik bagi startup, terutama di tahap early-stage ketika akses ke traditional funding masih terbatas. Platform seperti Kitabisa, Wujudkan, dan berbagai equity crowdfunding platforms memberikan kesempatan untuk raising capital dari masyarakat luas.
                Persiapan campaign yang matang adalah kunci sukses crowdfunding. Startup perlu menyiapkan business plan yang compelling, prototype atau MVP yang demonstrable, dan video pitch yang engaging untuk meyakinkan potential backers. Storytelling yang emosional dan relatable dapat significantly meningkatkan conversion rate dari visitors menjadi contributors.
                Penetapan funding target harus realistic dan well-calculated. Target yang terlalu tinggi dapat membuat campaign terlihat unreachable, sementara target yang terlalu rendah mungkin tidak cukup untuk mencapai business objectives. Research tentang similar campaigns di industri yang sama dapat memberikan benchmark yang berguna.
                Building momentum pre-launch sangat crucial untuk kesuksesan campaign. Startup perlu membangun email list, engaging dengan potential customers di social media, dan securing commitment dari early supporters sebelum campaign officially launched. First 48 hours biasanya menentukan trajectory keseluruhan campaign.
                Reward structure untuk contributors harus attractive dan deliverable. Oferkan incentives yang valuable namun tidak memberatkan cash flow atau operation startup. Early bird discounts, exclusive products, atau recognition dapat menjadi motivator yang efektif.
                Post-campaign execution dan communication dengan backers sama pentingnya dengan campaign itu sendiri. Transparency dalam progress updates, timely delivery of rewards, dan maintaining relationship dengan supporters dapat membangun foundation untuk future fundraising efforts.',
                'upload_date' => '2024-12-20',
                'category_id' => 3,
            ],
            [
                'title' => 'Kesalahan Bisnis yang Wajib Dihindari',
                'image' => 'artikel_wirausaha3.png',
                'content' => 'Dunia bisnis penuh dengan challenges dan potential pitfalls yang dapat menghancurkan even the most promising ventures. Memahami dan menghindari common mistakes dapat significantly meningkatkan peluang kesuksesan dalam berbisnis.
                Lack of market research adalah kesalahan fundamental yang sering dilakukan entrepreneur pemula. Banyak yang terlalu excited dengan ide bisnis mereka tanpa memvalidasi apakah ada genuine market demand. Penting untuk conduct thorough market analysis, understand target customers, dan test product-market fit sebelum full-scale launch.
                Poor financial management merupakan penyebab utama kegagalan bisnis. Banyak entrepreneur yang tidak memiliki clear separation antara personal dan business finances, tidak melakukan proper bookkeeping, atau underestimate capital requirements. Cash flow management yang buruk dapat membuat bisnis collapse meskipun secara fundamental profitable.
                Hiring the wrong people atau expanding team terlalu cepat dapat menguras resources dan mengganggu company culture. Penting untuk hire slowly dan fire quickly, memastikan setiap team member aligned dengan company values dan memiliki skills yang dibutuhkan.
                Neglecting customer feedback adalah mistake yang costly. Customers adalah source of valuable insights untuk product improvement dan business development. Entrepreneur yang arrogant dan resistant terhadap criticism sering kali missed opportunities untuk pivoting atau improving offerings.
                Over-commitment dan trying to do everything dapat mengakibatkan execution yang poor di semua areas. Focus adalah key to success, especially untuk startup dengan limited resources. Better to excel in one area daripada mediocre di multiple fronts.
                Legal compliance sering kali diabaikan oleh small business owners. Tidak memiliki proper business registration, intellectual property protection, atau employment contracts dapat menimbulkan serious legal issues di kemudian hari.',
                'upload_date' => '2024-12-20',
                'category_id' => 3,
            ],
            [
                'title' => 'Pentingnya Branding untuk Bisnis UMKM',
                'image' => 'artikel_wirausaha4.png',
                'content' => 'Branding bukan lagi luxury yang hanya bisa afford oleh big corporations. Dalam era digital yang kompetitif ini, strong branding menjadi necessity untuk UMKM yang ingin sustainable dan berkembang. Brand yang kuat dapat menjadi diferensiator utama dalam pasar yang crowded dan membangun emotional connection dengan customers.
                Brand identity yang consistent across all touchpoints membantu building recognition dan trust. Mulai dari logo, color palette, typography, hingga tone of voice dalam communication, semua elements harus cohesive dan reflecting brand personality yang ingin dikomunikasikan kepada target audience.
                Storytelling menjadi powerful tool dalam building brand equity. UMKM memiliki advantage dalam hal personal story dan authentic journey yang dapat resonate dengan customers. Sharing founders story, mission behind the business, dan values yang diperjuangkan dapat menciptakan emotional bond yang sulit ditiru competitors.
                Brand positioning yang clear membantu customers understand unique value proposition dan mengapa mereka harus memilih produk atau layanan tersebut dibanding alternatives. Positioning harus based on genuine strengths dan sustainable competitive advantages.
                Customer experience adalah manifestasi nyata dari brand promise. Setiap interaction point dengan customers, dari website navigation hingga after-sales service, harus consistent dengan brand image yang ingin dibangun. Poor customer experience dapat merusak brand reputation yang sudah dibangun susah payah.
                Digital branding melalui social media dan online platforms memungkinkan UMKM reach audience yang lebih luas dengan cost yang reasonable. Content marketing, influencer partnerships, dan user-generated content dapat significantly amplify brand awareness dan engagement.
                Measuring brand performance melalui metrics seperti brand awareness, customer loyalty, dan brand sentiment penting untuk understanding effectiveness dari branding efforts dan identifying areas for improvement. Regular brand audit dapat membantu ensuring that brand remains relevant dan resonant dengan evolving market conditions.',
                'upload_date' => '2024-12-20',
                'category_id' => 3,
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}