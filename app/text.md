## 关于 json
1. ajax 请求返回
2. app 接口

## 解析 json
JS 
```
JSON.parse('{"name":"xiaoja","age":32}');
$.parseJSON('{"name":"xiaoja","age":32}');
```
PHP
```
$arr = json_decode('{"name":"xiaoja","age":32}',true);
```

## 如果网站无法打开 
1. 检测域名解析是否正常  ping 域名 
```
ping baidu.com
```
2. 检测服务器的服务

## 修改数据库的字符集
```
alter database lamp207 CHARACTER set utf8;
```

## 创建数据库文件  文件位置 app/database/migrations
1. 命令行 创建生成文件
```
php artisan make:migration create_table_tiezi
```
2. 更改文件   复制 调整 up    

3. 命令行  
```
php artisan migrate
```
4.  第一次运行数据库命令迁移时 出现错误   SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was t
  oo long; max key length is 1000 bytes (SQL: alter table `users` add unique
  `users_email_unique`(`email`))

    SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was t
  oo long; max key length is 1000 bytes

5. 回滚
```
php artisan migrate:rollback
```

