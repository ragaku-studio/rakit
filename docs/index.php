<?php include 'header.php'; ?>
<div class="rk-docs-layout">
  <nav class="rk-docs-sidebar">
    <div class="rk-sidebar-brand">
      <a href="/" class="rk-brand-link">
        <div class="rk-brand-logo-wrapper">
          <img alt="Ragaku Logo" src="/assets/meaningful-colored.svg" class="rk-brand-logo">
        </div>
        <h3 class="rk-brand-title">RAKIT</h3>
        <div class="rk-brand-badge">Beta</div>
      </a>
    </div>
    <a href="#overview">Mukadimah</a>
    <a href="#warna">Warna</a>
    <a href="#button">Button</a>
    <a href="#card">Card</a>
    <a href="#form-group">Form group</a>
    <a href="#checkbox">Checkbox</a>
    <a href="#radio">Radio</a>
    <a href="#select">Select</a>
    <a href="#switch">Switch</a>
    <a href="#badge">Badge</a>
    <a href="#tooltip">Tooltip</a>
    <a href="#alert">Alert</a>
    <a href="#toast">Toast</a>
    <a href="#tabs">Tabs</a>
    <a href="#breadcrumb">Breadcrumb</a>
    <a href="#pagination">Pagination</a>
    <a href="#accordion">Accordion</a>
    <a href="#table">Table</a>
  </nav>
  <div class="rk-docs-content">
    <section id="overview">
      <h1>Mukadimah</h1>
      <div class="rk-docs-hero">
        <img alt="Ragaku Studio Design System Canvas Overview" src="/assets/hero.jfif" class="rk-hero-img">
      </div>
      <p class="rk-lead">
        Selamat datang di RAKIT (Ragaku Kit) — pusat dokumentasi resmi,
        <strong>tokens</strong>, dan komponen <strong>frontend</strong> terintegrasi untuk seluruh ekosistem produk digital Ragaku Studio.
      </p>
      Seiring berkembangnya produk digital di Ragaku Studio, konsistensi visual dan kecepatan pengembangan menjadi aspek yang sangat krusial.
      <strong>RAKIT</strong> hadir sebagai standar tunggal untuk membantu tim desainer dan pengembang menciptakan antarmuka yang cepat, ramah pengguna, dan inklusif.
      </p>
      <p> Sistem ini dibangun berdasarkan kebutuhan riil di lapangan, bukan sekadar asumsi teoretis sejak awal.
        Setiap elemen visual dilahirkan hanya ketika benar-benar dibutuhkan oleh sistem produksi nyata.
      </p>
      <ul>
        <li><strong>Design Tokens:</strong> Parameter dasar terkendali mulai dari skala warna brand (Nisesa, Mening, Subawa), sistem *spacing*, *border-radius*, hingga aturan tipografi global.</li>
        <li><strong>Komponen UI Dasar:</strong> Elemen siap pakai seperti tombol (*button*), kartu (*card*), *form groups*, *toasts*, hingga navigasi kompleks yang modular dan efisien.</li>
        <li><strong>Pola Tata Letak (Patterns):</strong> Kerangka dasar atau *layout* siap diimplementasikan untuk mempercepat penyusunan halaman web dokumentasi maupun aplikasi internal.</li>
        <li><strong>Agnostik Teknologi:</strong> Struktur kode murni berbasis Plain HTML dan CSS, memastikan fungsionalitasnya berjalan lancar di lingkungan CodeIgniter 3 saat ini maupun ekosistem Laravel di masa depan.</li>
      </ul>

      <h3>Mengapa Menggunakan RAKIT?</h3>
      <ul>
        <li><strong>Konsistensi Tanpa Batas:</strong> Seluruh produk Ragaku Studio akan memiliki identitas visual yang seragam, memperkuat pengenalan produk dan membangun kepercayaan pengguna.</li>
        <li><strong>Akselerasi Pengembangan (Rapid Development):</strong> Memotong waktu penulisan kode berulang dengan memanfaatkan komponen fungsional yang telah teruji reliabilitasnya.</li>
        <li><strong>Fokus pada Pengalaman Pengguna (UX):</strong> Tim *engineering* bisa mengurangi beban fokus dalam menyusun gaya *styling* mentah dan mengalihkan energi untuk merancang alur interaksi pengguna yang lebih bermutu.</li>
        <li><strong>Skalabilitas Tinggi:</strong> Seluruh arsitektur token dikunci menggunakan variabel CSS global, mempermudah adaptasi visual atau kustomisasi skala besar di masa depan tanpa merusak sistem.</li>
      </ul>
    </section>
    <section>
      <h2>Prinsip</h2>
      <p>RAKIT tidak dirancang berdasarkan asumsi abstrak.
        Setiap keputusan arsitektur dan komponen yang lahir di sini selalu berpegang teguh pada empat pilar utama:</p>
      <ul>
        <li>
          <strong>Design Tokens sebagai Fondasi.</strong>
          Seluruh parameter visual mulai dari warna, <strong>spacing</strong>, hingga <strong>border-radius</strong> wajib dikelola melalui variabel CSS global.
          Kami mengharamkan adanya angka yang di-<strong>hardcode</strong> secara mentah di dalam komponen individual.
        </li>
        <li>
          <strong>Lahir dari Kebutuhan Nyata.</strong>
          Kami tidak menciptakan komponen untuk kemungkinan yang belum pasti.
          Sebuah token atau pola komponen baru hanya akan diangkat ke dalam sistem RAKIT setelah terbukti digunakan secara berulang di kode produksi nyata.
        </li>
        <li>
          <strong>Agnostik dan Mandiri (Plain HTML & CSS).</strong>
          Arsitektur kami tidak terikat pada satu <strong>framework</strong> JavaScript tertentu.
          RAKIT dirancang menggunakan HTML dan CSS murni agar fleksibel digunakan pada lingkungan CodeIgniter 3 saat ini, Laravel di masa mendatang, maupun teknologi lainnya.
        </li>
        <li>
          <strong>Iteratif dan Bertahap.</strong>
          Sistem ini berkembang secara organik selangkah demi selangkah.
          Kami lebih memilih meluncurkan komponen kecil yang fungsional dan teruji dengan baik,
          daripada memaksakan sebuah sistem yang lengkap sejak hari pertama namun rentan <strong>bug</strong>.
        </li>
      </ul>
    </section>
    <section>
      <h2>Repositori & Dokumentasi</h2>
      <p>Sebagai sebuah UI Kit yang lahir dari kebutuhan nyata di lapangan, keterbukaan adalah fondasi utama kami.
        Setiap baris kode, arsitektur token warna, hingga struktur komponen dasar RAKIT dikembangkan secara transparan
        agar bisa dipelajari, diaudit, dan digunakan bersama di seluruh ekosistem produk digital Ragaku Studio.
        Kami percaya bahwa dokumentasi terbaik tidak hanya memberi tahu <strong>bagaimana</strong> sebuah komponen bekerja,
        tetapi juga <strong>mengapa</strong> komponen tersebut diciptakan dengan cara demikian.</p>
      <p class="rk-code">Seluruh kode sumber RAKIT dikelola secara terbuka di
        <a href="https://github.com/ragaku-studio/rakit">github.com/ragaku-studio/rakit</a>.
        Untuk memahami filosofi mendalam dan alasan di balik setiap keputusan desain kami,
        silakan pelajari panduan resmi di<code>PRINCIPLES.md</code>.
      </p>
    </section>
    <!----------------- Color Swatch ----------------->
    <section id="warna">
      <h2>Warna</h2>
      <p>Nisesa, Mening, dan Subawa bukan dipilih karena "keliatan bagus" doang.
        Namanya diambil dari filsuf Jawa kuno, dibawa ke era modern.
      </p>
      <p>Ketiganya, dari sudut beda, ngomongin hal yang sama: pengaruh yang gak maksa.
        Primary yang kuat tapi gak agresif, secondary yang menopang tapi gak dominan, accent yang narik perhatian lewat integritas, bukan sekadar mencolok.
        Dan "wibawa dari tindak, bukan tembung" itu juga persis semangat RAKIT sendiri — dibangun dari pemakaian nyata, bukan ditebak dari awal.
      </p>
      <!---------------- Nisesa ---------------->
      <div class="rk-card">
        <div class="rk-card-content ">
          <h3>Nisesa</h3>
          <p>Biru kekuasaan — warna pemimpin yang tenang dan penuh kontrol</p>
          <span>Nila dalam Sanskerta berarti biru tua, konteks warna kerajaan atau spiritualitas. Di budaya Jawa, dikaitkan dengan kedalaman dan ketenangan.
            Wisesa dari wisesaning manungsa: kekuasaan yang berbasis kebijaksanaan dan welas asih — bukan dominasi.
          </span>
        </div>
        <div class="rk-card-footer">
          <div class="rk-scale" id="rk-scale-nisesa"></div>
        </div>
      </div>
      <!---------------- Mening ---------------->
      <div class="rk-card">
        <div class="rk-card-content ">
          <h3>Mening</h3>
          <p>Awan tenang — sangat cocok buat ruang visual yang tidak mencolok</p>
          <span>Mega artinya awan — transisi, lembut, lapang dan Wening artinya jernih, bening, hening — konteks hening roso (kejernihan batin).
          </span>
        </div>
        <div class="rk-card-footer">
          <div class="rk-scale" id="rk-scale-mening"></div>
        </div>
      </div>
      <!---------------- Mening ---------------->
      <div class="rk-card">
        <div class="rk-card-content ">
          <h3>Subawa</h3>
          <p>Matahari yang punya pengaruh kuat — cocok untuk tombol dan elemen aksen</p>
          <span>Surya yang berarti matahari — sumber energi, penerangan. Sedangkan Prabawa berarti wibawa, daya pengaruh — aura tanpa perlu bicara.
          </span>
        </div>
        <div class="rk-card-footer">
          <div class="rk-scale" id="rk-scale-subawa"></div>
        </div>
      </div>
      <pre class="rk-code">background-color: var(--rk-color-primary);</pre>
    </section>

    <section id="button">
      <h2>Button</h2>
      <p>Tombol dasar dengan varian warna primary.</p>
      <div class="rk-example">
        <button type="button" class="rk-btn rk-btn--primary">Tombol RAKIT</button>
      </div>
      <pre class="rk-code">&lt;button class="rk-btn rk-btn--primary"&gt;Tombol RAKIT&lt;/button&gt;</pre>
    </section>

    <section>
      <h2 id="card">Card</h2>
      <p>Wadah generik buat konten — header & footer opsional, dipake produk manapun.</p>
      <div class="rk-example">
        <div class="rk-card" style="max-width: 280px;">
          <div class="rk-card-header">Judul Card</div>
          <div class="rk-card-content">Isi konten bebas di sini.</div>
          <div class="rk-card-footer">Footer opsional</div>
        </div>
      </div>
      <pre class="rk-code">&lt;div class="rk-card"&gt;
        &lt;div class="rk-card-header"&gt;Judul&lt;/div&gt;
        &lt;div class="rk-card-content"&gt;Isi&lt;/div&gt;
      &lt;/div&gt;</pre>
    </section>

    <section id="form-group">
      <h2>Form group</h2>
      <p>Kombinasi label, input, dan teks bantuan.</p>
      <div class="rk-example">
        <div class="rk-form-group">
          <label>Nama lengkap</label>
          <input class="rk-input" type="text" placeholder="Masukkan nama" />
          <span class="rk-help-text">Sesuai KTP</span>
        </div>
      </div>
      <pre class="rk-code">&lt;div class="rk-form-group"&gt;
        &lt;label&gt;Nama lengkap&lt;/label&gt;
        &lt;input class="rk-input" type="text"&gt;
        &lt;span class="rk-help-text"&gt;Sesuai KTP&lt;/span&gt;
      &lt;/div&gt;</pre>
    </section>

    <section id="checkbox">
      <h2>Checkbox</h2>
      <p>Checkbox bawaan browser, ditinting pake warna brand.</p>
      <div class="rk-example">
        <label class="rk-choice">
          <input type="checkbox" />
          <span>Setuju sama syarat &amp; ketentuan</span>
        </label>
      </div>
      <pre class="rk-code">&lt;label class="rk-choice"&gt;
        &lt;input type="checkbox"&gt;
        &lt;span&gt;Setuju...&lt;/span&gt;
      &lt;/label&gt;</pre>
    </section>

    <section id="radio">
      <h2>Radio</h2>
      <p>Radio button bawaan browser, ditinting pake warna brand. Dipake berkelompok lewat atribut <code>name</code> yang sama.</p>
      <div class="rk-example">
        <label class="rk-choice">
          <input type="radio" name="rk-demo-radio" value="a" checked />
          <span>Opsi A</span>
        </label>
        <label class="rk-choice">
          <input type="radio" name="rk-demo-radio" value="b" />
          <span>Opsi B</span>
        </label>
        <label class="rk-choice">
          <input type="radio" name="rk-demo-radio" value="c" />
          <span>Opsi C</span>
        </label>
      </div>
      <pre class="rk-code">&lt;label class="rk-choice"&gt;
  &lt;input type="radio" name="grup"&gt;
  &lt;span&gt;Opsi A&lt;/span&gt;
&lt;/label&gt;</pre>
    </section>

    <section id="select">
      <h2>Select</h2>
      <p>Dropdown pilihan — kotak luarnya ke-style, isi dropdown-nya masih tampilan asli browser.</p>
      <div class="rk-example">
        <select class="rk-select">
          <option value="">Pilih kota</option>
          <option value="jakarta">Jakarta</option>
          <option value="bogor">Bogor</option>
          <option value="yogyakarta">Yogyakarta</option>
        </select>
      </div>
      <pre class="rk-code">&lt;select class="rk-select"&gt;
  &lt;option value="jakarta"&gt;Jakarta&lt;/option&gt;
&lt;/select&gt;</pre>
    </section>

    <section id="switch">
      <h2>Switch</h2>
      <p>Checkbox yang disamarin jadi toggle — dibangun manual pake CSS, belum ada native yang cukup didukung browser.</p>
      <div class="rk-example">
        <label class="rk-switch">
          <input type="checkbox" />
          <span class="rk-switch-track"></span>
          <span class="rk-switch-label">Aktifkan notifikasi</span>
        </label>
      </div>
      <pre class="rk-code">&lt;label class="rk-switch"&gt;
  &lt;input type="checkbox"&gt;
  &lt;span class="rk-switch-track"&gt;&lt;/span&gt;
  &lt;span class="rk-switch-label"&gt;Aktifkan notifikasi&lt;/span&gt;
&lt;/label&gt;</pre>
    </section>

    <section id="badge">
      <h2>Badge</h2>
      <p>Label kecil buat status atau kategori. Baru 1 varian netral — varian warna status ("Aktif"/"Error"/dst) belum ada, nunggu warna brand status diputusin dulu.</p>
      <div class="rk-example">
        <span class="rk-badge">Draft</span>
      </div>
      <pre class="rk-code">&lt;span class="rk-badge"&gt;Draft&lt;/span&gt;</pre>
    </section>

    <section id="tooltip">
      <h2>Tooltip</h2>
      <p>Info tambahan yang muncul pas hover atau fokus keyboard. Belum ideal di layar sentuh — device touch gak punya state hover.</p>
      <div class="rk-example">
        <span class="rk-tooltip-wrap" tabindex="0">
          Info tambahan
          <span class="rk-tooltip">Ini contoh isi tooltip-nya</span>
        </span>
      </div>
      <pre class="rk-code">&lt;span class="rk-tooltip-wrap" tabindex="0"&gt;
  Info tambahan
  &lt;span class="rk-tooltip"&gt;Isi tooltip&lt;/span&gt;
&lt;/span&gt;</pre>
    </section>

    <section id="alert">
      <h2>Alert</h2>
      <p>Pesan inline yang nempel di halaman — beda dari Toast, ini gak ilang sendiri.</p>
      <div class="rk-example">
        <div class="rk-alert">Fitur ini masih dalam tahap pengembangan.</div>
      </div>
      <pre class="rk-code">&lt;div class="rk-alert"&gt;Pesan di sini&lt;/div&gt;</pre>
    </section>

    <section id="toast">
      <h2>Toast</h2>
      <p>Notifikasi sementara — muncul pas dipicu, ilang sendiri setelah 3 detik.</p>
      <div class="rk-example">
        <button type="button" class="rk-btn rk-btn--primary" onclick="rkShowToast('rk-toast-demo')">Tampilkan toast</button>
        <div class="rk-toast" id="rk-toast-demo">Perubahan berhasil disimpan</div>
      </div>
      <pre class="rk-code">&lt;button onclick="rkShowToast('id-nya')"&gt;Tampilkan&lt;/button&gt;
&lt;div class="rk-toast" id="id-nya"&gt;Pesan&lt;/div&gt;</pre>
    </section>

    <section id="tabs">
      <h2>Tabs</h2>
      <p>Ganti konten tanpa pindah halaman. Pake <code>role="tablist"</code>/<code>role="tab"</code> biar kebaca bener sama pembaca layar.</p>
      <div class="rk-example">
        <div class="rk-tabs">
          <div class="rk-tabs-list" role="tablist">
            <button type="button" class="rk-tab rk-tab--active" role="tab" aria-selected="true" onclick="rkSwitchTab(this, 'rk-tab-profil')">Profil</button>
            <button type="button" class="rk-tab" role="tab" aria-selected="false" onclick="rkSwitchTab(this, 'rk-tab-riwayat')">Riwayat</button>
            <button type="button" class="rk-tab" role="tab" aria-selected="false" onclick="rkSwitchTab(this, 'rk-tab-pengaturan')">Pengaturan</button>
          </div>
          <div class="rk-tab-panel" id="rk-tab-profil">Isi tab Profil.</div>
          <div class="rk-tab-panel" id="rk-tab-riwayat" hidden>Isi tab Riwayat.</div>
          <div class="rk-tab-panel" id="rk-tab-pengaturan" hidden>Isi tab Pengaturan.</div>
        </div>
      </div>
      <pre class="rk-code">&lt;button onclick="rkSwitchTab(this, 'id-panel')"&gt;Label&lt;/button&gt;
&lt;div class="rk-tab-panel" id="id-panel"&gt;Isi&lt;/div&gt;</pre>
    </section>

    <section id="breadcrumb">
      <h2>Breadcrumb</h2>
      <p>Jejak navigasi hierarki halaman.</p>
      <div class="rk-example">
        <nav class="rk-breadcrumb" aria-label="Breadcrumb">
          <a href="#">Beranda</a>
          <span class="rk-breadcrumb-sep">/</span>
          <a href="#">Produk</a>
          <span class="rk-breadcrumb-sep">/</span>
          <span aria-current="page">Detail</span>
        </nav>
      </div>
      <pre class="rk-code">&lt;nav class="rk-breadcrumb"&gt;
  &lt;a href="#"&gt;Beranda&lt;/a&gt;
  &lt;span class="rk-breadcrumb-sep"&gt;/&lt;/span&gt;
  &lt;span aria-current="page"&gt;Detail&lt;/span&gt;
&lt;/nav&gt;</pre>
    </section>

    <section id="pagination">
      <h2>Pagination</h2>
      <p>Navigasi antar halaman. Logic ganti halaman beneran nempel ke data produk nanti, ini cuma tampilannya.</p>
      <div class="rk-example">
        <nav class="rk-pagination" aria-label="Pagination">
          <button type="button" class="rk-page-btn" disabled aria-label="Sebelumnya">‹</button>
          <button type="button" class="rk-page-btn rk-page-btn--active" aria-current="page">1</button>
          <button type="button" class="rk-page-btn">2</button>
          <button type="button" class="rk-page-btn">3</button>
          <button type="button" class="rk-page-btn" aria-label="Berikutnya">›</button>
        </nav>
      </div>
      <pre class="rk-code">&lt;nav class="rk-pagination"&gt;
  &lt;button class="rk-page-btn rk-page-btn--active"&gt;1&lt;/button&gt;
  &lt;button class="rk-page-btn"&gt;2&lt;/button&gt;
&lt;/nav&gt;</pre>
    </section>

    <section id="accordion">
      <h2>Accordion</h2>
      <p>Buka-tutup konten. Pake elemen native <code>&lt;details&gt;</code>/<code>&lt;summary&gt;</code> — bukan bikinan sendiri, browser yang nanganin buka-tutupnya.</p>
      <div class="rk-example">
        <div class="rk-accordion">
          <details class="rk-accordion-item">
            <summary>Apa itu RAKIT?</summary>
            <div class="rk-accordion-content">RAKIT adalah fondasi frontend Ragaku Studio.</div>
          </details>
          <details class="rk-accordion-item">
            <summary>Kenapa token dulu?</summary>
            <div class="rk-accordion-content">Biar semua komponen konsisten dan gampang diubah dari satu tempat.</div>
          </details>
        </div>
      </div>
      <pre class="rk-code">&lt;details class="rk-accordion-item"&gt;
  &lt;summary&gt;Judul&lt;/summary&gt;
  &lt;div class="rk-accordion-content"&gt;Isi&lt;/div&gt;
&lt;/details&gt;</pre>
    </section>

    <section>
      <h2 id="table">Table</h2>
      <p>Nampilin data baris-kolom. Baris nge-hover pake warna Mening (secondary).</p>
      <div class="rk-example">
        <table class="rk-table">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Role</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Radhitia Dwijaya</td>
              <td>Founder</td>
              <td>Aktif</td>
            </tr>
            <tr>
              <td>Tim Ragaku</td>
              <td>Kontributor</td>
              <td>Aktif</td>
            </tr>
          </tbody>
        </table>
      </div>
      <pre class="rk-code">&lt;table class="rk-table"&gt;
        &lt;thead&gt;&lt;tr&gt;&lt;th&gt;Nama&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;
        &lt;tbody&gt;&lt;tr&gt;&lt;td&gt;Radhitia&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;
      &lt;/table&gt;</pre>
    </section>
    <?php include 'footer.php'; ?>
  </div>
</div>