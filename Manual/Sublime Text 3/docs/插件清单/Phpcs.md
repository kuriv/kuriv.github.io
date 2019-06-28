# Phpcs

推荐使用 Composer 来安装，执行下面的命令，安装依赖包到全局的 `vendor/bin` 目录下。

```shell
composer global require squizlabs/php_codesniffer
```

打开包管理器，输入 `Phpcs` 并安装，安装完成后选择 `Preferences` - `Package Settings` - `PHP Code Sniffer` - `Settings - User` ，添加下面的内容。

```json
{
    "phpcs_php_prefix_path": "当前环境中 PHP 的执行路径",
    "phpcs_executable_path": "当前环境中 phpcs 的执行路径",
    "phpcbf_executable_path": "当前环境中 phpcbf 的执行路径",
    "phpcbf_on_save": true
}
```

重启 Sublime Text 3 ，每次保存 PHP 文件时就会自动修复不符合规范的代码。