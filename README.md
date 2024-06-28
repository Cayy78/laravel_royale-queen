-- R O Y A L E   Q U E E N --
-----------------------------
Royale Queen merupakan website toko sepatu yang terinspirasi dari salah satu toko yang berada di Ruteng (NTT) bernama Royal-Queen

Installation
------------
1. clone repositori ke visual studio code
2. buka 'Terminal' visual studio code
3. ketik "composer install" untuk menginstall package yang dipakai oleh website ini
4. kemudian ketik "npm install" untuk menginstall package nodejs yang dipakai oleh website ini
5. download file .env dan folder product_images di link ini: https://drive.google.com/drive/folders/1i-Dda1SRYyzN__fDgXPN1NoaFr0YYeGD?usp=sharing
6. letakkan file .env di /app
7. kemudian di 'Terminal ketik "php artisan storage:link"
8. letakkan folder 'product_images' di public/storage
9. setelah itu di'Terminal' ketik "php artisan db:seed --class=(namafileseeder)"
10. setelah itu di'Terminal' ketik "php artisan migrate"
11. jika sudah jalankan localhost menggunakan "php artisan serve" di 'Terminal'

    (---TERIMA KASIH---) 
    --------------------
