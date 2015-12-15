## Laravel5-Backend

基于Laravel5.1(LTS) 开发

## 使用说明
* clone目录结构到本地： git clone https://github.com/qloog/laravel5-backend.git
* 根据composer.json下载vendor包目录：composer update
* 生成表结构: php artisan migrate
* 访问后台地址：http://local.app/admin/login

## 常用命令
* 生成Repository: php artisan make:repository Role

## 功能列表

### 用户登录
* [✓]后台登录
* [x]增加验证码

### 用户权限管理
* [x] RBAC (Role-Based Access Control) 
    * [✓]用户管理：主要用来查看已注册用户信息；
    * [✓]角色管理：角色查看，角色分配权限；
    * [✓]权限管理：权限查看、修改，增删（待增加）

### 新闻管理
* 新闻管理
    - [✓]新闻列表
    - [✓]添加新闻
        - [✓]增加Ueditor
        - [✓]补齐表单字段及验证处理
* [✓]分类管理： 支持无限分类    
* [x]标签管理

### 单页管理
* [x]分类管理
* [✓]内容管理   待完善

### 相册管理
* [x]相册列表

### 活动管理
* [✓]活动列表  
* [✓]添加活动

### 评论管理
* [x]评论列表
* [x]评论审核：先发后审、先审后发

## 技术栈

### 前端

#### 组件安装方法
 * bower install jquery --save
 * bower install bootstrap --save
 * bower install react --save
 
#### 其他 
 * React
    * [Amaze UI React](http://amazeui.org/react/)
        bower install amazeui-react
    * [react-datagrid](https://github.com/zippyui/react-datagrid)
 * Bootstrap

### 后端
 * Laravel

## License

The Laravel5-backend is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
