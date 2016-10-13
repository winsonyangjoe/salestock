1. Bikin vhost supaya bisa dibuka di salestock.dev

2. Bikin database schema kosong di mysql mu

3. Km copy application/config/production/database.php ke application/config/development/database.php dan km set credentials database sesuai database local mu dan database yg km bikin di step #2

4. Run di command line
php index.php cli/migration run

5. Run di command line
php index.php cli/util create_first_super_admin

6. Untuk akses admin add produk bisa dari salestock.dev/admin
