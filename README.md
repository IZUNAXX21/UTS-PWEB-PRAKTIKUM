Langkah install:
1. Composer Install
2. cp .env.example .env (sesuaikan databse)
3. php artisan key:generate
4. php artisan storage:link (opsional,jika storage gabisa dipanggil)
5. git add -f public/storage/asset (opsional jika /public/stprage belum muncul)
6. php artisan serve
