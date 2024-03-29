# selfphp
独習PHP 第4版の学習用のリポジトリ  
![独習PHP第4版](https://www.seshop.com/static/images/product/24485/L.png "独習PHP第4版ロゴ")

---
## MariaDBにサンプルデータベースを作成する
　サンプルデータベースの作成  
`mysql -u root -p`   
`CREATE DATABASE selfphp CHARACTER SET utf8;`   
`USE selfphp;`   
`source selfphp.sql;`   
　データベースアクセス専用の新規ユーザーを作成する  
`GRANT ALL PRIVILEGES ON selfphp.* TO selfusr@"%" IDENTIFIED BY 'selfpass';`  

## PHPの変数定義
 ・ 変数は*$変数名*として宣言する  
 例 `$msg`  

変数の命名規則   
|No.|規則|良い例|悪い例|
|:---|:---|:---|:---|
|1|「$名称」の形式であること|$name, $msg|str, msg|
|2|名前の先頭は、任意の文字がアンダースコアー(_)であること|$data, $_name|$123, $fdata|
|3|名前の2文字目以降は、2に加えて数値を利用してもよい|$name_11, $_test10|$name-11|
|4|大文字/小文字は区別される|$val, $Val|-|   

 ・名前の主な記法   
 |記法|概要|例|
 |:---|:---|:---|
 |camelCase記法|先頭文字は小文字、その後、単語の区切りを大文字で表記|$userName|
 |Pascal記法|先頭文字も含めて、すべての単語の頭文字を大文字で表記|$UserName|
 |アンダースコア記法|すべての文字列は小文字/大文字で表し、単語の区切りはアンダースコア(_)で表記(スネークケース記法とも言う)|user_name|

## 定数
 入れ物と中身がワンセットになっていて、途中で中身を変更できない入れ物の事を言う。  
 例1 `const 定数名 = 値;`   
 例2 `define(定数名, 値);`   
 const/defineの相違点  
 |No.|項目|const|define|
 |:---|:---|:---|:---|
 |1|トップレベル以外での宣言|×|○|
 |2|クラス定数の宣言|○|×|
 |3|変数、関数の戻り値を設定|×|○|
 |4|実行速度|○|△|

 ## ヒアドキュメント   
 |開始文字列|意味|
 |:---|:---|
 |<<<EOD|文字列に含まれる変数やエスケープシーケンスを展開|
 |<<<"EOD"| 〃 |
 |<<<'EOD'|文字列に含まれる変数やエスケープシーケンスを展開しない|

## 配列
 - 配列の生成   
 `$配列 = [値1, 値2, ・・・]`   
 - print_r()関数  
 配列をはじめ、オブジェクトなどの複合型の変数を見やすい形で出力する。  
 `print_r($data);`   
 - 連想配列の生成   
 `$配列名 = [キー1 => 値1, キー2 => 値2, ・・・]`   

## 明示的な変換(キャスト)
 - キャストという仕組みを利用することで、値を特定の型に強制的に変換できる。  
 `(データ型)値`   

## アドレスの代入(&変数)  
  `$x = 1;`  
  `$y = &$x;  // $xのアドレスを代入`  

## Composer
- Composer経由で提供されるパッケージは、Packagist(https://packagist.org/)から確認が可能。
- Guzzleをインストール
  - `composer require guzzlehttp/guzzle "~7.3.0"`
- composer.jsonを編集した場合、以下のコマンドを実行することで、ライブラリの更新を行ってくれる
  - `composer update`

## memberテーブルの追加
`CREATE TABLE member( `  
`    id INT PRIMARY KEY AUTO_INCREMENT`  
`    , nam VARCHAR (255) NOT NULL`  
`    , sex CHAR (1) DEFAULT '男'`  
`    , old INT NOT NULL`  
`    , enter DATE NOT NULL`  
`    , memo VARCHAR (255) DEFAULT NULL`  
`);`  

- memberテーブルにデータを追加
  - `INSERT INTO member (id, nam, sex, old, enter, memo) VALUES (1, '山田太郎', '男', 20, '2021-04-01', NULL);`
  - `INSERT INTO member (nam, sex, old, enter, memo) VALUES ('斉藤花子', '女', 22, '2021-04-10', '紹介割引適用');`
  - `INSERT INTO member (nam, old, enter, memo) VALUES ('鈴木次郎', 30, '2021-04-21', '再入会');`
  - `INSERT INTO member (nam, old, enter) VALUES ('佐藤和夫', 40, '2021-05-07');`
  - `INSERT INTO member VALUES (5, '山本和美', '女', 20, '2021-05-11', NULL);`

## ドキュメントの生成
- [phpDoc](https://phpdoc.org/)  
  - `wget https://phpdoc.org/phpDocumentor.phar`  
  - `chmod +x phpDocumentor.phar`
  - `php phpDocumentor.phar -d doc -t out`

## 参考URL
- [VSCodeでPHPの構文チェックとフォーマットを自動化する](https://e-joint.jp/blog/2237)
- [PHPマニュアル](https://www.php.net/manual/ja/)

## サンプルのロカール環境表示
- [chap01](http://localhost/selfphp/chap01/)   
- [chap01#practice](http://localhost/selfphp/chap01/practice)   
- [chap02](http://localhost/selfphp/chap02/)   
- [chap02#practice](http://localhost/selfphp/chap02/practice)   
- [chap03](http://localhost/selfphp/chap03/)   
- [chap03#practice](http://localhost/selfphp/chap03/practice)   
- [chap04](http://localhost/selfphp/chap04/)   
- [chap04#practice](http://localhost/selfphp/chap04/practice)   
- [chap05](http://localhost/selfphp/chap05/)   
- [chap05#practice](http://localhost/selfphp/chap05/practice)   
- [chap06](http://localhost/selfphp/chap06/)   
- [chap06#practice](http://localhost/selfphp/chap06/practice)   
- [chap07](http://localhost/selfphp/chap07/)   
- [chap07#practice](http://localhost/selfphp/chap07/practice)   
- [chap08](http://localhost/selfphp/chap08/)   
- [chap08#practice](http://localhost/selfphp/chap08/practice)   
- [chap09](http://localhost/selfphp/chap09/)   
- [chap09#practice](http://localhost/selfphp/chap09/practice)   
- [chap10](http://localhost/selfphp/chap10/)   
- [chap10#practice](http://localhost/selfphp/chap10/practice)   
- [chap11](http://localhost/selfphp/chap11/)   
- [chap11#practice](http://localhost/selfphp/chap11/practice)   

