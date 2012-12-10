# himekuri_tw

日めくりカレンダーの画像とメッセージ、それに対するコメントを登録しておく。
投稿用のスクリプトを叩くと、その日の画像とメッセージ、コメントがtwitterに投稿される。

### 開発環境

- PHP5.3ぐらい
- CakePHP 2.2.4
- MySQL5.5 とか MariaDB5.5とか

### セットアップ

* DDL.sqlをMySQLで実行
* CakePHP2系を準備し、appの中にファイルを展開する
* Config/twapp.php.skel をコピーして Config/twapp.php を作る
* Config/twapp.php には自分のアプリのキーとかをセットする

### 投稿内容の登録

* 頑張ってcalendarsテーブルに画像データを放り込む
* http://example.com/authors/ でメッセージの作者を登録
* http://example.com/calendars/ でメッセージとコメントを登録

### cronのセット

    ＃例えば
    0 8 * * * /path/to/cake/app/Console/cake calendar post_tweet

と登録しておけば毎朝8時に投稿されます