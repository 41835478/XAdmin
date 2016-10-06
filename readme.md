## Laravel5-Backend - base Laravel5.1(LTS)

[![Build Status](https://travis-ci.org/qloog/laravel5-backend.svg?branch=master)](https://travis-ci.org/qloog/laravel5-backend)

此项目主要目的是为了搭建一套基本常用的后台系统,减少重复劳动,从而可以专注于自己业务的开发。  
Theme已从原来的 [ACE](http://responsiweb.com/themes/preview/ace/1.3.3/) 升级为 [AdminLTE](https://almsaeedstudio.com/themes/AdminLTE/index2.html)  
[部分截图](#ScreenShot)

## Requirements

 - A web server: Nginx
 - PHP 5.6.4+ with the following extensions: mbstring, pdo_mysql
 - MySQL
 - Composer
 - NPM
 - Bower
 - Gulp

## Installation

```shell
git clone https://github.com/qloog/laravel5-backend.git
cd laravel5-backend
composer install -vvv   //根据composer.json下载vendor包目录
npm install     // install bower, gulp, laravel-elixir
bower install -V//安装前端组件
gulp //copy js/css/img 到public下
php artisan vendor:publish --provider='Ender\UEditor\UEditorServiceProvider' //copy ueditor to public
cp .env.example .env    //这里需要修改下数据库信息: host port database user password
php artisan migrate //生成表结构
php artisan db:seed //填充测试数据
php artisan serve --port 8001   //运行server
open http://localhost:8001/admin/login  //用户名: admin@test.com, 密码: 12345678
```

## Features

 - 用户登录
    * [x] 后台登录
    * [x] 增加验证码

 - 用户权限管理 RBAC (Role-Based Access Control)
   * [x] 用户管理：新建、修改用户；
   * [x] 角色管理：角色查看，角色分配权限；
   * [x] 权限管理：权限查看、修改，增删（待增加）

 - 新闻管理
   * [x] 新闻列表
   * [x] 添加新闻
       - [x] 增加 Ueditor

 - 相册管理
  * [x] 相册列表

 - 活动管理
  * [x] 活动列表
  * [x] 添加活动

 - 评论管理
  * [ ] 评论列表
  * [ ] 评论审核：先发后审、先审后发

## 开发规范

 * PHP：遵循[PSR](http://www.php-fig.org/psr/)规范

   - [PSR1](http://www.php-fig.org/psr/psr-1/) Basic Coding Standard
   - [PSR2](http://www.php-fig.org/psr/psr-2/) Coding Style Guide
   - [PSR3](http://www.php-fig.org/psr/psr-3/) Logger Interface
   - [PSR4](http://www.php-fig.org/psr/psr-4/) Autoloading Standard
   - [PSR6](http://www.php-fig.org/psr/psr-6/) Caching Interface
   - [PSR7](http://www.php-fig.org/psr/psr-7/) HTTP Message Interface


遵循PSR标准的代码格式化工具[php-cs-fixer](http://cs.sensiolabs.org/)。
可通过composer安装：`composer require fabpot/php-cs-fixer`

## 代码文档

   按照phpdoc规范写注释，自动生成代码文档 [phpDoc文档](https://www.phpdoc.org/docs/latest/getting-started/your-first-set-of-documentation.html)

## Command

* 生成User model: `php artisan make:model Models/User`
* 生成User Repository: `php artisan make:repository User`

## 二次开发提示

   - 尽量使用依赖注入,尤其在控制器里,具体如Laravel文档中：[依赖注入和控制器](http://laravel-china.org/docs/5.1/controllers), [php依赖注入简介](http://www.dahouduan.com/2015/05/26/php-dependency-injection/)
   - [Laravel 5.1 LTS 中文文档](http://laravel-china.org/docs/5.1/)

参看：[PHP之道](http://laravel-china.github.io/php-the-right-way/)


## 上线部署

   可通过[Walle](https://walle-web.io/) 工具来部署


## ScreenShot

* UI: [AdminLTE](https://almsaeedstudio.com/themes/AdminLTE) (基于Bootstrap)

![登录页面](http://lnmp100.com/static/uploads/2016/10/screenshot-login.jpg)
![角色页面](http://lnmp100.com/static/uploads/2016/10/screenshot-role.jpg)
![添加新闻页面](http://lnmp100.com/static/uploads/2016/10/screenshot-newadd.jpg)
...


## issue

 - 欢迎发 [issues](https://github.com/qloog/laravel5-backend/issues) 交流讨论
 - QQ交流群：32649336

## License

The laravel5-backend is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
