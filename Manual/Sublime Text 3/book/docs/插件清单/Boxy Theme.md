# Boxy Theme

访问 [GitHub](https://github.com/balthild/boxy-theme-backup) 下载压缩包并解压，打开 Sublime Text 3 ，选择 `Preferences` - `Browse Packages...` ，返回上级目录，复制解压后的 `*.sublime-package` 文件到 `Installed Packages` 目录。然后选择 `Preferences` - `Package Settings` - `Package Control` - `Settings - User` ，添加下面的内容。

```json
{
	"installed_packages": [
		"Boxy Theme"
	]
}
```

最后选择 `Preferences` - `Settings` ，添加下面的内容。

```json
{
	"theme": "Boxy Tomorrow.sublime-theme"
}
```