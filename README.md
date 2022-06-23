Link coba : https://laravel.grabahanberzakat.site/

**Cara menggunakan project ini :**
1. Download repository ini
2. Buat database db_riaspedia
3. Import file .sql
4. Sesuaikan configurasi database pada file .env

**Cara menggunakan API :**
1. Login dahulu menggunakan method POST, dengan perintah => http://localhost:8000/api/login?email=emailmu@gmail.com&password=passwordnya
2. tersedia 8 tabel, diantaranya: **days, hours, photos, reviews, roles, services, users, vendor**

**Isian CRUD ialah**
   **1. Read**
      _GET_    | http://localhost:8000/api/namatable (Read keseluruhan)
      _GET_    | http://localhost:8000/api/namatable/{id_table} (Read berdasarkan ID)
   **2. Create**
      _POST_   | http://localhost:8000/api/namatable?parameter=value
   **3. Update**
      _PUT_    | http://localhost:8000/api/namatable/{id}?parameter=valueBaru
   **4. Delete**
      _DELETE_ | http://localhost:8000/api/namatable/{id}?

