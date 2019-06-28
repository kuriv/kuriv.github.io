# Color Highlighter

打开包管理器，输入 `Color Highlighter` 并安装，安装完成后选择 `Preferences` - `Package Settings` - `Color Highlighter` - `Settings - User` ，添加下面的内容。

```json
{
    "search_colors_in": {
        "all_content": {
            "enabled": true,
            "color_highlighters": {
                "color_scheme": {
                    "enabled": true,
                    "highlight_style": "filled"
                }
            }
        }
    }
}
```

重启 Sublime Text 3 ，即可显示颜色代码的视觉效果。