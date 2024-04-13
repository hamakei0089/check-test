# check-test

お問い合わせフォーム

環境構築

Dockerビルド

1.git clone git@github.com:hamakei0089/check-test.git
2.docker-compose up -d -build

Laravel環境構築

1.docker-compose exec php
2.compose install
3..env.exampleから.envを作成し、環境変数を変更
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed

使用技術

・php 8.0
・Laravel　8.83.27
・MySQL 8.0

URL
・開発環境:http://localhost/
・phpMyAdmin:http://localhost:8080/
