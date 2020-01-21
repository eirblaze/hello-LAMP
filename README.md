# Docker つかいかた

## はじめに

Docker 本体アプリを起動し、  
ログインしておく

## コマンド

### 初回起動

`$ docker login`

- user : cbtlinks
- pass : b7Q6vA-8Sn

`$ docker-compose up -d --build`

### 2回目以降の起動

`$ docker-compose start`

### 終了

`$ docker-compose stop`

### もう使わないときの終了

`$ docker-compose down`

### 起動してるかどうか確認

`$ docker-compose ps`

## アドレス

### PHP本体の動作チェック

http://127.0.0.1:8080/

### メールの動作チェック

http://127.0.0.1:1080

## コンテナに入る

### コマンド継続実行

`docker exec -i -t phpのコンテナ名 /bin/sh`

#### 例

`docker exec -it hello-mysql_php_1 bash`

### コマンド単発実行

`docker exec phpのコンテナ名 /bin/sh -c "php -v"`

#### 例

`docker exec hello-mysql_php_1 /bin/sh -c "php -i" | grep xdebug`
`docker exec hello-mysql_php_1 /bin/sh -c "tail /tmp/xdebug.log"`
