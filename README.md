# お問い合わせフォーム
## 環境構築
### Dockerビルド
1. docker-compose up -d --build
### Laravel環境構築
1. docker-compose exec php bash
2. composer -v
3. composer create-project "laravel/laravel=8.*" . --prefer-dist
4. app.phpを編集して時刻設定
5. データベースの存在を確認後、.envを編集してデータベース接続
## 使用技術(実行環境)
PHP 7.4.9,
Laravel Framework 8.83.29,
MySQL 8.0.26
## ER図
<img width="413" alt="image" src="https://github.com/user-attachments/assets/6c6ca413-6d1f-4d4a-9075-988a482b2b28" />

## URL
開発環境：http://localhost/ ,
pypMyAdmin：http://localhost:8080/

##補足
申し訳ありません。
コミットした場所がmainではなくmasterブランチになっています。
