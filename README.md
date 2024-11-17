MOGITATE

##環境構築
Dockerビルド
1. git clone リンク
2. docker compose up -d --build
   
*MySQLは、OSによって起動しない場合があるため、それぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。

##Laravel環境構築
1. docker compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更する
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

##使用技術
・php 8.0
・laravel 8
・MySQL 8.0

##ER図
![Uploading image.png…]()

##URL
環境開発：http://localhost/products
phpMyAdmin:http://localhost:8080/
