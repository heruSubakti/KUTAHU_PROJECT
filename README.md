cara penggunaan aplikasi 
1. buka terminal 
    a. composer install
    b. npm run dev 
    c. php artisan migrate 
2. buat file baru dengan nama .env
3. set up smtp dengan kode berikut :
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=465
    MAIL_USERNAME=viqrifadhillah77@gmail.com
    MAIL_PASSWORD='lpiw nmys toyk fgkq'
    MAIL_ENCRYPTION=ssl
    MAIL_FROM_ADDRESS="hello@example.com"
    MAIL_FROM_NAME="${APP_NAME}"
4. php artisan serve
5. enjoyyy