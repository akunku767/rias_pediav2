**Cara menggunakan project ini :**
1. Download repository ini
2. Buat database db_riaspedia
3. Import file .sql
4. Sesuaikan configurasi database pada file .env

**Cara menggunakan API :**
1. Login dahulu menggunakan method POST, dengan perintah => http://localhost:8000/api/login?email=emailmu@gmail.com&password=passwordnya
2. tersedia 8 tabel, diantaranya: **days, hours, photos, reviews, roles, services, users, vendor**
3. Untuk CRUD ialah
   **A. Read**
      _GET_    | http://localhost:8000/api/namatable (Read keseluruhan)
      _GET_    | http://localhost:8000/api/namatable/{id_table} (Read berdasarkan ID)
   **B. Create**
      _POST_   | http://localhost:8000/api/namatable?parameter=value
   **C. Update**
      _PUT_    | http://localhost:8000/api/namatable/{id}?parameter=valueBaru
   **D. Delete**
      _DELETE_ | http://localhost:8000/api/namatable/{id}?

