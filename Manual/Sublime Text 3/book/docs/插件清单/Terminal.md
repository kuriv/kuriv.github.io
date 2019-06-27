# Terminal

打开包管理器，输入 `Terminal` 并安装，安装完成后选择 `Preferences` - `Package Settings` - `Terminal` - `Settings - User` ，添加下面的内容。

```json
{
    "terminal": "当前环境中 命令提示符 的执行路径",
    "parameters": ["/START","%CWD%"]
}
```

重启 Sublime Text 3 后，使用快捷键 `Ctrl + Shift + T` 即可打开命令提示符。