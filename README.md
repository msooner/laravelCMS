# In客笔记后台管理系统

基于`Laravel5.4`的后台管理系统，实现最基本的后台框架：权限、角色、菜单、用户、日志功能.

![In客笔记后台管理系统](http://edu.inkebj.com/images/inkeadmin.png)

##登录界面

![In客笔记登录界面](http://edu.inkebj.com/images/login.png)

##注册界面

![In客笔记注册界面](http://edu.inkebj.com/images/signup.png)

##用户管理界面

![In客笔记用户管理界面](http://edu.inkebj.com/images/user.png)

## 安装


安装本项目跟普通安装一样

1. 下载本项目,然后在项目根目录执行 `composer install`
2. 包安装完成后,复制.env.example 文件为.env
3. 执行 `php artisan key:generate`
4. 迁移数据: `php artisan migrate`  And `php artisan db:seed`

OK,项目已经配置完成，不清楚的可以直接去看 `routes.php` 文件。默认管理员账号：`932356280@qq.com` , 密码：`admin1` 
如果你是在Linux或Mac下配置的请注意相关目录的权限，这里我就不多说了，enjoy！
```


如有什么错误的地方，请指点，非常感谢！也可以直接联系我：lizhonglin_melody@yeah.net 。基于这个后台的博客项目：[In客笔记](http://www.inkebj.com)
