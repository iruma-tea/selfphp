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