# TP10DPBO2025C2
Saya Meisya Amalia dengan NIM 2309357 berjanji mengerjakan TP 10 dengan keberkahan-Nya, maka saya tidak akan melakukan kecurangan sesuai yang telah di spesifikasikan, Aamiin.

# Desain Program
![image](https://github.com/user-attachments/assets/1a61008a-30fb-4399-85d3-2faf093f8e90)

Saya membuat 3 tabel untuk produk makeup yang terdiri dari: category, product, dan brand. Tabel product menyimpan informasi produk seperti nama, harga, dan stok, serta memiliki relasi many-to-one ke tabel category dan brand melalui foreign key category_id dan brand_id. Tabel category menyimpan informasi kategori produk, sedangkan tabel brand menyimpan data merek dan asal negaranya.

Program Makeup Store ini dibangun menggunakan arsitektur MVVM (Model-View-ViewModel) dengan PHP dan PDO. Struktur dibagi menjadi tiga layer utama: Model sebagai data access layer yang menangani operasi CRUD ke database menggunakan prepared statements untuk keamanan, ViewModel sebagai business logic layer yang menangani validasi input, format data, dan aturan bisnis, serta View sebagai presentation layer untuk menampilkan interface pengguna. Setiap entitas (Category, Brand, Product) memiliki model dan viewmodel tersendiri yang saling berinteraksi untuk mengelola data toko makeup. Fitur Data Binding diimplementasi melalui ViewModel dengan melakukan validasi input secara otomatis seperti trim whitespace, validasi required fields, format URL, dan validasi numerik. ViewModel melakukan formatting data seperti format harga rupiah dan status ketersediaan stok.

# Alur

Saat awal akan langsung ditunjukkan Halaman list produk, dibagian kanan atas ada pilihan Produk, Kategori, dan Brand yang bisa kita pilih dan lihat listnya satu persatu. Di kiri atas terdapat Tambah Produk, Kategori, dan Brand yang akan menampilkan form tambah untuk menambah produk/kategori/brand di halaman masing-masing. Lalu di bagian aksi setiap list terdapat hapus dan edit.



https://github.com/user-attachments/assets/e0b51343-6131-4e19-a600-a3caf630331e

