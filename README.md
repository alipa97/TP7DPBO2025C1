# TP7DPBO2025C1
Saya Alifa Salsabila dengan NIM 2308138 mengerjakan soal Tugas Praktikum 7 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

## Deskripsi
Program ini adalah sistem manajemen produk untuk skincare yang memungkinkan pengelolaan data brands, categories, dan products.

### Fitur:
- Menambah, mengedit, menghapus brand, category, dan product.
- Menampilkan daftar brand, category, dan product.
- Menghapus otomatis Produk yang terkait jika ada brand atau category yang dihapus.

## Desain Program
1. Config Database (config/db.php)
Pada file ini, kita mendefinisikan kelas Database yang akan menangani koneksi ke database MySQL. Program menggunakan PDO untuk melakukan query ke database. Konfigurasi database seperti host, username, dan password dapat disesuaikan dengan pengaturan server lokal.

2. Model Classes
Brand: Kelas untuk menangani data terkait brand skincare. Menyediakan metode seperti getAllBrands(), createBrand(), updateBrand(), dan deleteBrand().

Category: Kelas untuk menangani kategori produk skincare. Menyediakan metode untuk mengambil semua kategori dan mengelola data kategori.

Product: Kelas untuk menangani data produk skincare. Memiliki metode untuk mengambil, menambah, mengedit, dan menghapus produk.

3. View (Halaman):
Halaman Index (index.php): Menampilkan semua brands, categories, dan products dalam bentuk tabel. Tabel ini juga menyediakan tautan untuk mengedit dan menghapus data.

Halaman Edit: Halaman untuk mengedit data brand atau category. Setiap data yang ingin diedit akan diambil berdasarkan id dari URL, kemudian ditampilkan pada form untuk diedit dan disubmit.

Halaman Delete: Menghapus data yang dipilih melalui link dengan konfirmasi sebelum penghapusan dilakukan.

Alur Penggunaan
Halaman Index: Ketika aplikasi pertama kali diakses melalui index.php, halaman utama akan menampilkan tabel yang berisi data dari brands, categories, dan products.

Data brands ditampilkan dalam satu tabel dengan tombol untuk mengedit atau menghapus.

Data categories dan products ditampilkan dengan cara yang sama.

Menambah Data:

Pada halaman brands, categories, atau products, admin dapat menambahkan data baru dengan menggunakan form yang sudah disediakan.

Mengedit Data:

Ketika admin memilih untuk mengedit data (misalnya, mengklik tombol edit di samping nama brand), aplikasi akan menampilkan halaman brand_edit.php. Halaman ini akan memuat form yang berisi data yang sudah ada, dan admin bisa mengubahnya. Setelah disubmit, data yang sudah diperbarui akan disimpan ke database.

Menghapus Data:

Admin dapat menghapus data seperti brand atau product. Sebelum penghapusan dilakukan, akan ada konfirmasi pop-up untuk memastikan admin benar-benar ingin menghapus data tersebut. Penghapusan data brand juga akan otomatis menghapus produk yang terkait dengan brand tersebut (karena ada relasi di database dengan foreign key).

Penjelasan Alur Program
Koneksi Database:

Pada setiap halaman yang membutuhkan akses ke database (seperti halaman index, edit, delete), pertama-tama aplikasi akan menghubungkan ke database menggunakan kelas Database yang ada di config/db.php.

Menampilkan Daftar Brand, Category, dan Product:

Pada index.php, aplikasi akan memanggil fungsi getAllBrands() dan getAllCategories() untuk mendapatkan daftar brand dan category yang ada di database, dan menampilkannya dalam bentuk tabel.

Edit dan Hapus Brand/Category/Products:

Pada saat admin memilih untuk mengedit brand atau category, aplikasi akan mengambil data berdasarkan id yang dikirim melalui URL, dan menampilkannya pada form edit.

Jika admin memilih untuk menghapus data, aplikasi akan menampilkan konfirmasi dan menghapus data tersebut setelah konfirmasi diterima.

