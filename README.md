# 勤怠管理アプリ
## 環境構築
- git clone git@github.com:hatakeyamadan/attendance-app.git
- cd attendance-app
- docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
- code .
- cp .env.example .env
- .env ファイルを開き、データベース接続情報を以下に変更してください。  
    
  DB_CONNECTION=mysql  
  DB_HOST=mysql  
  DB_PORT=3306  
  DB_DATABASE=laravel  
  DB_USERNAME=sail  
  DB_PASSWORD=password  
    
  MAIL_MAILER=smtp  
  MAIL_HOST=mailpit  
  MAIL_PORT=1025  
- ./vendor/bin/sail up -d
- ./vendor/bin/sail artisan key:generate
- ./vendor/bin/sail artisan migrate --seed
- ./vendor/bin/sail npm install
- ./vendor/bin/sail npm run dev
## 使用技術
- PHP 8.5.7
- Laravel 10.50.3
- MySQL 8.4.10
## ER図
## URL
- ログイン画面 : http://localhost/login
- phpMyAdmin : http://localhost:8080