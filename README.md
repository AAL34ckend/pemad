index(): Metode ini digunakan untuk menampilkan halaman indeks yang berisi daftar data manajemen. Ini mengambil semua data manajemen terbaru dari database dan mengirimkannya ke view src.index.

create(): Metode ini menampilkan formulir untuk membuat entri manajemen baru. Ini mengarahkan pengguna ke view src.create di mana mereka dapat mengisi detail baru untuk entri manajemen.

store(Request $request): Metode ini digunakan untuk menyimpan data yang dimasukkan oleh pengguna dari formulir create ke dalam database. Sebelum menyimpan data, validasi dilakukan untuk memastikan bahwa input yang diberikan sesuai dengan aturan yang ditentukan. Jika validasi berhasil, data disimpan dalam database dan pengguna diarahkan kembali ke halaman indeks dengan pesan sukses.

show(string $id): Metode ini menampilkan detail dari entri manajemen tertentu berdasarkan ID yang diberikan. Ini mengambil data manajemen yang sesuai dari database dan mengirimkannya ke view src.show.

edit(string $id): Metode ini menampilkan formulir untuk mengedit entri manajemen yang ada. Ini mengambil data manajemen yang sesuai berdasarkan ID yang diberikan dan mengirimkannya ke view src.edit.

update(Request $request, string $id): Metode ini digunakan untuk memperbarui data entri manajemen yang ada di database berdasarkan ID yang diberikan. Validasi dilakukan untuk memastikan input yang diberikan sesuai dengan aturan yang ditentukan. Jika validasi berhasil, data diperbarui dalam database dan pengguna diarahkan kembali ke halaman indeks dengan pesan sukses.

destroy(string $id): Metode ini digunakan untuk menghapus entri manajemen tertentu dari database berdasarkan ID yang diberikan. Setelah penghapusan berhasil, pengguna diarahkan kembali ke halaman indeks dengan pesan sukses.
