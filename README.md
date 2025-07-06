# Laravel Docker 開発環境

このプロジェクトは、Docker を使用した Laravel 開発環境です。

## 構成

- **PHP 8.2** + **Laravel** (アプリケーション)
- **Nginx** (Web サーバー)
- **MySQL 8.0** (データベース)
- **phpMyAdmin** (データベース管理ツール)

## セットアップ

### 1. 環境変数の設定

プロジェクトルートに`.env`ファイルを作成し、以下の内容を追加してください：

```env
cp src/.env.example src/.env
```

### 2. Docker コンテナの起動

```bash
# コンテナをビルドして起動
docker-compose up -d --build

# ログを確認
docker-compose logs -f
```

### 3. データベースの設定

```bash
# マイグレーションを実行
docker-compose exec app php artisan migrate

# シーダーを実行（オプション）
docker-compose exec app php artisan db:seed
```

## アクセス方法

- **Laravel アプリケーション**: http://localhost:8000
- **phpMyAdmin**: http://localhost:8888
  - ユーザー名: `root`
  - パスワード: `root`

## 便利なコマンド

```bash
# コンテナの停止
docker-compose down

# コンテナの再起動
docker-compose restart

# 特定のコンテナのログを確認
docker-compose logs app
docker-compose logs webserver
docker-compose logs db

# コンテナ内でコマンドを実行
docker-compose exec app php artisan migrate
docker-compose exec app composer install
docker-compose exec app php artisan tinker
```

## トラブルシューティング

### 権限エラーが発生する場合

```bash
# ストレージディレクトリの権限を修正
docker-compose exec app chmod -R 777 storage bootstrap/cache
```

### データベースに接続できない場合

```bash
# データベースコンテナの状態を確認
docker-compose ps db

# データベースコンテナのログを確認
docker-compose logs db
```

### コンテナが起動しない場合

```bash
# すべてのコンテナを停止して削除
docker-compose down -v

# イメージを再ビルド
docker-compose up -d --build
```
