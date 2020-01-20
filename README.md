laravel vue admin wangeditor扩展
## 安装
```shell script
composer require laravel-vue-admin/wangeditor
```
## 使用
```php
$form->item('content','文章内容')->displayComponent(Wangeditor::make());
```
## 属性
编辑器相关属性设置
### 自定义菜单
```php
Wangeditor::make()->menus([
        'head',  // 标题
        'bold',  // 粗体
        'fontSize',  // 字号
        'fontName',  // 字体
        'italic',  // 斜体
        'underline',  // 下划线
        'strikeThrough',  // 删除线
        'foreColor',  // 文字颜色
        'backColor',  // 背景颜色
        'link',  // 插入链接
        'list',  // 列表
        'justify',  // 对齐方式
        'quote',  // 引用
        'emoticon',  // 表情
        'image',  // 插入图片
        'table',  // 表格
        'video',  // 插入视频
        'code',  // 插入代码
        'undo',  // 撤销
        'redo'  // 重复
]);
```
### 编辑区域的 z-index
```php
Wangeditor::make()->zIndex(10);
```
### 使用 base64 保存图片
```php
Wangeditor::make()->uploadImgShowBase64();
```
### 配置服务器端地址
```php
Wangeditor::make()->uploadImgServer(route('upload'));
```

