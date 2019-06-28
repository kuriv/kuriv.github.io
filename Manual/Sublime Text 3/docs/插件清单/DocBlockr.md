# DocBlockr

打开包管理器，输入 `DocBlockr` 并安装，安装完成后选择 `Preferences` - `Package Settings` - `DocBlockr` - `Settings - User` ，添加下面的内容。

```json
{
    "jsdocs_extend_double_slash": false
}
```

重启 Sublime Text 3 ，在代码的前一行输入 `/**` ，然后单击 `Tab` 键，就会自动生成代码注释，还可以在代码注释块中输入 `@` 展开关键词。