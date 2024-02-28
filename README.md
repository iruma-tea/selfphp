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
