## 目录

* [横线](#横线)
* [标题](#标题)
* [文字](#文字)
    * [普通文字](#普通文字)
    * [单行文字](#单行文字)
    * [多行文字](#多行文字)
    * [文字高亮](#文字高亮)
    * [换行](#换行)
    * [斜体](#斜体)
    * [粗体](#粗体)
    * [删除线](#删除线)
    * [混合使用](#混合使用)
* [图片](#图片)
    * [网络图片](#网络图片)
    * [仓库图片](#仓库图片)
* [链接](#链接)
    * [锚点](#锚点)
    * [文字链接](#文字链接)
        * [外部链接](#外部链接)
        * [仓库链接](#仓库链接)
    * [图片链接](#图片链接)
* [列表](#列表)
    * [无序列表](#无序列表)
    * [有序列表](#有序列表)
    * [复选框列表](#复选框列表)
* [块引用](#块引用)
* [代码高亮](#代码高亮)
* [表格](#表格)
* [表情](#表情)



## 横线

语法：

<pre>---</pre>

效果：

---



## 标题

语法：

<pre># 一级标题</pre>

效果：

# 一级标题

语法：

<pre>## 二级标题</pre>

效果：

## 二级标题

语法：

<pre>### 三级标题</pre>

效果：

### 三级标题

语法：

<pre>#### 四级标题</pre>

效果：

#### 四级标题

语法：

<pre>##### 五级标题</pre>

效果：

##### 五级标题

语法：

<pre>###### 六级标题</pre>

效果：

###### 六级标题



## 文字

### 普通文字

语法：

<pre>普通文字</pre>

效果：

普通文字

### 单行文字

语法：

<pre>    单行文字</pre>

效果：

    单行文字

### 多行文字

语法：

<pre>
    多行
    文字
</pre>

效果：

    多行
    文字

### 文字高亮

语法：

<pre>`文字高亮`</pre>

效果：

`文字高亮`

### 换行

语法：

<pre>
第一行  
第二行
</pre>

效果：

第一行  
第二行

### 斜体

语法：

<pre>*斜体*</pre>

效果：

*斜体*

### 粗体

语法：

<pre>**粗体**</pre>

效果：

**粗体**

### 删除线

语法：

<pre>~~删除线~~</pre>

效果：

~~删除线~~

### 混合使用

语法：

<pre>***斜粗体***</pre>

效果：

***斜粗体***

语法：

<pre>~~***斜粗体删除线***~~</pre>

效果：

~~***斜粗体删除线***~~



## 图片

### 网络图片

语法：

<pre>![Google](https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png "Google")</pre>

效果：

![Google](https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png "Google")

### 仓库图片

语法：

<pre>![](https://raw.githubusercontent.com/kuriv/kuriv.github.io/master/.cloud/kuriv.github.io/Google.png)</pre>

效果：

![](https://raw.githubusercontent.com/kuriv/kuriv.github.io/master/.cloud/kuriv.github.io/Google.png)



## 链接

### 锚点

语法：

<pre>[返回目录](#目录)</pre>

效果：

[返回目录](#目录)

### 文字链接

#### 外部链接

语法：

<pre>[Google](https://www.google.com/ "Google")</pre>

效果：

[Google](https://www.google.com/ "Google")

#### 仓库链接

语法：

<pre>[查看图片](https://raw.githubusercontent.com/kuriv/kuriv.github.io/master/.cloud/kuriv.github.io/Google.png)</pre>

效果：

[查看图片](https://raw.githubusercontent.com/kuriv/kuriv.github.io/master/.cloud/kuriv.github.io/Google.png)

### 图片链接

语法：

<pre>
[![Google][Google-image]][Google-url]

[Google-image]: https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png "Google"
[Google-url]: https://www.google.com/ "Google"
</pre>

效果：

[![Google][Google-image]][Google-url]

[Google-image]: https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png "Google"
[Google-url]: https://www.google.com/ "Google"



## 列表

### 无序列表

语法：

<pre>
* 列表一
* 列表二
* 列表三
</pre>

效果：

* 列表一
- 列表二
* 列表三

语法：

<pre>
* 列表一
    * 列表二
        * 列表三
</pre>

效果：

* 列表一
    * 列表二
        * 列表三

### 有序列表

语法：

<pre>
1. 列表一
2. 列表二
3. 列表三
</pre>

效果：

1. 列表一
2. 列表二
3. 列表三

语法：

<pre>
1. 列表一
    1. 列表二
        1. 列表三
</pre>

效果：

1. 列表一
    1. 列表二
        1. 列表三

### 复选框列表

语法：

<pre>
- [x] 复选框一
- [x] 复选框二
- [x] 复选框三
- [ ] 复选框四
- [ ] 复选框五
- [ ] 复选框六
</pre>

效果：

- [x] 复选框一
- [x] 复选框二
- [x] 复选框三
- [ ] 复选框四
- [ ] 复选框五
- [ ] 复选框六



## 块引用

语法：

<pre>
> 第一层
>> 第二层
>>> 第三层
>>>> ...
</pre>

效果：

> 第一层
>> 第二层
>>> 第三层
>>>> ...



## 代码高亮

语法：

<pre>
```c
int main(int argc, char *argv[])
```
</pre>

效果：

```c
int main(int argc, char *argv[])
```



## 表格

语法：

<pre>
| 字段1 | 字段2 |
| ---- | ---- |
| 单元1 | 单元1 |
| 单元2 | 单元2 |
</pre>

效果：

| 字段1 | 字段2 |
| ---- | ---- |
| 单元1 | 单元1 |
| 单元2 | 单元2 |

语法：

<pre>
| 左对齐 | 居中对齐 | 右对齐 |
| :--------- | :--------: | ---------: |
| $1         | $100000000 |      $1000 |
| $10        | $10000     |        $10 |
| $1000      | $1         |         $1 |
</pre>

效果：

| 左对齐 | 居中对齐 | 右对齐 |
| :--------- | :--------: | ---------: |
| $1         | $100000000 |      $1000 |
| $10        | $10000     |        $10 |
| $1000      | $1         |         $1 |



## 表情

语法：

<pre>:blush:</pre>

效果：

:blush:

更多的表情符号：[http://www.emoji-cheat-sheet.com](http://www.emoji-cheat-sheet.com)