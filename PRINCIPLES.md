# Prinsip RAKIT

RAKIT bukan cuma kumpulan CSS — ini kesepakatan kerja. Dokumen ini nyimpen KENAPA di balik keputusan yang udah dibikin, biar keputusan berikutnya konsisten sama yang sebelumnya, bukan tebakan baru tiap kali.

## 1. Token dulu, bukan angka langsung

Component gak pernah nulis hex color atau angka px langsung — selalu lewat `var(--rk-*)`. Kalau butuh nilai baru yang belum ada tokennya, itu tanda buat nambah token, bukan alasan buat hardcode.

## 2. Token lahir dari pengulangan, bukan tebakan

Nilai baru gak masuk `tokens.css` sampe dia kepake di 2 tempat berbeda. `--rk-radius-sm` gak ada sampe border-radius 6px muncul di `button.css` DAN `input.css`. `--rk-font-semibold` sama ceritanya.

Pengecualian: warna (Nisesa/Mening/Subawa) dan font family (Outfit + DM Sans) itu keputusan brand, bukan pola yang ditemuin — itu diputusin di depan, sekali, bukan ditunggu dari pemakaian berulang.

## 3. Kecil dulu, bukan lengkap dari awal

RAKIT belum selengkap MYDS, dan itu gak masalah. Bootstrap juga gak lahir lengkap — dia jadi style guide internal Twitter dulu lebih dari setahun sebelum dirilis publik. Tailwind mulai dari project pribadi Adam Wathan. RAKIT ngikutin pola yang sama: dibangun dari pemakaian nyata, bukan didesain lengkap di ruang kosong dulu.

## 4. Token itu universal, component itu enggak

Token (warna, spacing, radius, font) boleh dipake di produk manapun — CI3, Laravel, bahkan situs marketing kayak ragakustudio.com. Component dashboard (sidebar, table, admin layout) cuma buat produk internal berbasis data (RainHub, Sokola, RAGIE). Situs marketing & personal punya layout sendiri, cuma minjem warna & font dari sini.

## 5. Plain HTML/CSS, bukan sintaks framework

Component ditulis pake HTML & CSS polos — gak ada Blade, gak ada JSX nempel di file inti. Ini yang bikin token & component yang sama bisa jalan di CI3 sekarang, Laravel nanti, dan framework lain kalau emang dibutuhin.

## 6. Selalu diliat, bukan diasumsiin

Tiap perubahan, sekecil apapun, dicek langsung di browser sebelum lanjut ke langkah berikutnya. Kalau gak keliatan, dianggap belum kelar.
