# PHP

将 PHP 添加至环境变量，打开 Sublime Text 3 ，选择 `Tools` - `Build System` - `New Build System...` ，然后添加下面的内容。

```json
{
    "cmd": ["php", "$file"],
    "file_regex": "php$",
    "selector": "source.php"
}
```

将文件保存在默认的目录并命名为 `PHP.sublime-build` ，重启 Sublime Text 3 ，打开一个 PHP 文件，使用快捷键 `Ctrl + B` 即可看到运行结果。