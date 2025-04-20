# TP7DPBO2025C1
Saya Alifa Salsabila dengan NIM 2308138 mengerjakan soal Tugas Praktikum 7 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

## Deskripsi
Program ini adalah sistem manajemen produk untuk skincare yang memungkinkan pengelolaan data brands, categories, dan products.

### Fitur:
- Menambah, mengedit, menghapus brand, category, dan product.
- Menampilkan daftar brand, category, dan product.
- Menghapus otomatis Produk yang terkait jika ada brand atau category yang dihapus.

## Desain Program
Berikut desain program dari web yang saya buat:

### Config Database
Pertama, pada file config/db.php, kita mendefinisikan kelas Database yang akan menangani koneksi ke database MySQL. Program menggunakan PDO untuk melakukan query ke database. Konfigurasi database seperti host, username, dan password disesuaikan.

### Model Classes
- Brand: Kelas untuk menangani data terkait brand skincare. Menyediakan metode seperti mengambil semua brand dan mengelola data brand.
- Category: Kelas untuk menangani kategori produk skincare. Menyediakan metode untuk mengambil semua kategori dan mengelola data kategori.
- Product: Kelas untuk menangani data produk skincare. Memiliki metode untuk mengambil semua produk dan mengelola data produk.

### View
- **Halaman Utama (index.php):** Halaman utama (index.php) adalah pusat navigasi untuk seluruh aplikasi. Pada halaman ini, pengguna dapat memilih untuk mengelola produk, brand, dan kategori melalui tautan yang ada di bagian atas halaman. Setelah memilih salah satu menu, aplikasi akan menampilkan daftar yang relevan (seperti produk, brand, atau kategori) dengan opsi untuk menambah, mengedit, atau menghapus entri.

- **Halaman Edit:** Halaman untuk mengedit data brand, category, atau product. Setiap data yang ingin diedit akan diambil berdasarkan id dari URL, kemudian ditampilkan pada form untuk diedit dan disubmit.

- **Halaman Delete:** Data yang dipilih untuk dihapus akan dihapus melalui query string menggunakan parameter id. Ketika pengguna mengklik tautan "Delete", ID dari data yang akan dihapus dikirimkan melalui URL, dan proses penghapusan dilakukan di backend (class). Setelah penghapusan berhasil, pengguna akan diarahkan kembali ke halaman utama (brands, products, atau categories) untuk melihat perubahan.

## Alur Penggunaan
Berikut alur penggunaan:

### Halaman Index: Ketika aplikasi pertama kali diakses melalui index.php, halaman utama akan menampilkan pilihan menu untuk menampilkan daftar product, brand, atau category.
- Data brands ditampilkan dalam satu tabel dengan tombol untuk mengedit atau menghapus.
- Data categories dan products ditampilkan dengan cara yang sama.

### Menambah Data:
- Pada halaman brands, categories, atau products, pengguna dapat menambahkan data baru dengan menggunakan form yang sudah disediakan.

### Mengedit Data:
- Ketika pengguna memilih untuk mengedit data (misalnya, mengklik tombol edit di samping nama brand), aplikasi akan menampilkan halaman brand_edit.php. Halaman ini akan memuat form yang berisi data yang sudah ada, dan pengguna bisa mengubahnya. Setelah disubmit, data yang sudah diperbarui akan disimpan ke database. Lalu akan kembali ke laman untuk menampilkan seluruh daftar brands (jika tadi mengedit brand).

### Menghapus Data:
- Pengguna dapat menghapus data seperti brand, category, atau product. Sebelum penghapusan dilakukan, akan ada konfirmasi pop-up untuk memastikan pengguna benar-benar ingin menghapus data tersebut. Penghapusan data brand atau category juga akan otomatis menghapus produk yang terkait dengan brand atau category tersebut.
