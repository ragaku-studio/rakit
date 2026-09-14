<?php include 'header.php'; ?>
	<div class="rk-docs-layout">
    <nav class="rk-docs-sidebar">
      <a href="#overview">Muqqodimah</a>
      <a href="#warna">Warna</a>
      <a href="#button">Button</a>
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
        <h1>Muqqodimah</h1>
        <p class="rk-lead">Fondasi frontend Ragaku Studio —
          token dan komponen dasar yang dipakai bareng di seluruh produk digital.</p>
        <p>
          RAKIT (Ragaku Kit) dibangun dari pemakaian nyata, bukan ditebak dari awal.
          Tiap token dan komponen lahir pas beneran dibutuhin di kode, bukan disiapkan
          duluan buat kemungkinan yang belum tentu kepake.
        </p>
        <h2>Prinsip</h2>
        <ul>
          <li><strong>Token dulu.</strong> Warna, spacing, radius — semua lewat variable, gak ada angka hardcode di
            component.</li>
          <li><strong>Lahir dari pemakaian.</strong> Token &amp; pattern baru diangkat begitu kepake berulang di kode
            nyata.
          </li>
          <li><strong>Plain HTML &amp; CSS.</strong> Gak keiket satu framework — jalan di CI3 sekarang, Laravel dan
            lainnya
            nanti.</li>
          <li><strong>Kecil &amp; bertahap.</strong> Berkembang selangkah demi selangkah, bukan lengkap sejak hari
            pertama.
          </li>
        </ul>
        <h2>Sumber</h2>
        <p>Kode ada di <a href="https://github.com/ragaku-studio/rakit">github.com/ragaku-studio/rakit</a>. Alasan di
          balik
          tiap keputusan ada di <code>PRINCIPLES.md</code>.</p>
      </section>

      <section id="warna">
        <h2>Warna</h2>
        <p>Tiga skala warna brand: Nisesa (primary), Mening (secondary), Subawa (accent).</p>
        <div class="rk-example">
          <div class="rk-swatch-group">
            <div class="rk-swatch rk-swatch--primary"></div>
            <div class="rk-swatch rk-swatch--secondary"></div>
            <div class="rk-swatch rk-swatch--accent"></div>
          </div>
        </div>
        <div class="rk-example">
          <div class="rk-scale">
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-nisesa-50)"></div><span class="rk-scale-label">50</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-nisesa-100)"></div><span class="rk-scale-label">100</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-nisesa-200)"></div><span class="rk-scale-label">200</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-nisesa-300)"></div><span class="rk-scale-label">300</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-nisesa-400)"></div><span class="rk-scale-label">400</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-nisesa-500)"></div><span class="rk-scale-label">500</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-nisesa-600)"></div><span class="rk-scale-label">600</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-nisesa-700)"></div><span class="rk-scale-label">700</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-nisesa-800)"></div><span class="rk-scale-label">800</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-nisesa-900)"></div><span class="rk-scale-label">900</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-nisesa-950)"></div><span class="rk-scale-label">950</span></div>
          </div>
          <div class="rk-scale">
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-mening-50)"></div><span class="rk-scale-label">50</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-mening-100)"></div><span class="rk-scale-label">100</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-mening-200)"></div><span class="rk-scale-label">200</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-mening-300)"></div><span class="rk-scale-label">300</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-mening-400)"></div><span class="rk-scale-label">400</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-mening-500)"></div><span class="rk-scale-label">500</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-mening-600)"></div><span class="rk-scale-label">600</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-mening-700)"></div><span class="rk-scale-label">700</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-mening-800)"></div><span class="rk-scale-label">800</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-mening-900)"></div><span class="rk-scale-label">900</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-mening-950)"></div><span class="rk-scale-label">950</span></div>
          </div>
          <div class="rk-scale">
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-subawa-50)"></div><span class="rk-scale-label">50</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-subawa-100)"></div><span class="rk-scale-label">100</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-subawa-200)"></div><span class="rk-scale-label">200</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-subawa-300)"></div><span class="rk-scale-label">300</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-subawa-400)"></div><span class="rk-scale-label">400</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-subawa-500)"></div><span class="rk-scale-label">500</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-subawa-600)"></div><span class="rk-scale-label">600</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-subawa-700)"></div><span class="rk-scale-label">700</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-subawa-800)"></div><span class="rk-scale-label">800</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-subawa-900)"></div><span class="rk-scale-label">900</span></div>
            <div class="rk-scale-step"><div class="rk-scale-swatch" style="background:var(--rk-subawa-950)"></div><span class="rk-scale-label">950</span></div>
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
              <tr><th>Nama</th><th>Role</th><th>Status</th></tr>
            </thead>
            <tbody>
              <tr><td>Radhitia Dwijaya</td><td>Founder</td><td>Aktif</td></tr>
              <tr><td>Tim Ragaku</td><td>Kontributor</td><td>Aktif</td></tr>
            </tbody>
          </table>
        </div>
        <pre class="rk-code">&lt;table class="rk-table"&gt;
  &lt;thead&gt;&lt;tr&gt;&lt;th&gt;Nama&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;
  &lt;tbody&gt;&lt;tr&gt;&lt;td&gt;Radhitia&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;
&lt;/table&gt;</pre>
      </section>

    </div>
  </div>
<?php include 'footer.php'; ?>