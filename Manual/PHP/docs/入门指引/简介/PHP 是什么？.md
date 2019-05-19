# PHP 是什么？

PHP 是一种被广泛应用的开源脚本语言，可以嵌入到 HTML 文档中去执行，主要适用于 Web 开发领域。

```php
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <p><?php echo 'Hello, World!'; ?></p>
    </body>
</html>
```

和客户端的 JavaScript 不同的是， PHP 代码是运行在服务端的。如果在服务器上建立了类似上例的代码，则在运行该脚本后，客户端就能接收到其结果，但他们无法得知其背后的代码是如何运作的。甚至可以将 Web 服务器设置成让 PHP 来处理所有的 HTML 文件，这么一来，用户就无法得知服务端到底做了什么。尽管 PHP 的开发是以服务端脚本为目的，但事实上其功能远不局限与此。