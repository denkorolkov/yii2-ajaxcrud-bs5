yii2-ajaxcrud-bs5
=============

Gii CRUD template for Single Page Ajax Administration for yii2

Based on **johnitvn/yii2-ajaxcrud**

![yii2 ajaxcrud extension screenshot](https://c1.staticflickr.com/1/330/18659931433_6e3db2461d_o.png "yii2 ajaxcrud extension screenshot")


Features
------------
+ Create, read, update, delete in onpage with Ajax
+ Bulk delete suport
+ Pjax widget suport
+ Export function(pdf,html,text,csv, excel,json)
+ Bootstrap5 support

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist denkorolkov/yii2-ajaxcrud-bs5 "@dev"
```

or add

```
"denkorolkov/yii2-ajaxcrud": "@dev"
```

to the require section of your `composer.json` file.


Usage
-----
For first you must enable Gii module Read more about [Gii code generation tool](http://www.yiiframework.com/doc-2.0/guide-tool-gii.html)

Because this extension used [kartik-v/yii2-grid](https://github.com/kartik-v/yii2-grid) extensions so we must config gridview module before

Let 's add into modules config in your main config file
```php
'modules' => [
    'gridview' =>  [
        'class' => \kartik\grid\Module::class,
        'bsVersion' => '5.x', 
        // 'downloadAction' => 'gridview/export/download',
        // 'i18n' => [],
        // 'exportEncryptSalt' => 'tG85vd1',
    ]       
]
```
Note: Font Awesome icons not required! See [Bootstrap icons](https://demos.krajee.com/grid#bootstrap-icons)!

You can then access Gii through the following URL:

http://localhost/path/to/index.php?r=gii

and you can see <b>Ajax CRUD Generator</b>


Lets contibute to keep it updated and make it useful for all friends.
