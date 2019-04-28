# CSRF 保护

在路由文件中，所有请求方式为 PUT 、 POST 或 DELETE 的路由对应的 HTML 表单都必须包含一个 `_token` 令牌字段，否则，请求会被拒绝。

```html
<form action="/action" method="post">
    @csrf
</form>
```

