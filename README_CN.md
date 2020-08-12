# php-interpreter
[English](README.md)

一个用php实现的PHub Premium解释器

## PHub Premium
PHub Premium是一门受到[Ook!](https://www.dangermouse.net/esoteric/ook.html)语言~~和P站~~启发而设计的编程语言。

它只有三个语法基本元素：`P`、`Hub`和`Premium`。

### 命令
将上述基本元素两两组合，形成命令。总共有8种可用的组合：

PHub Premium|描述
:----------:|----
`PHub`      |指针右移一个单位。
`HubP`      |指针左移一个单位。
`PP`        |指针指向的位置的值加一。
`HubHub`    |指针指向的位置的值减一。
`PPremium`  |接受输入，将输入内容存储到指针指向的位置。
`PremiumP`  |输出指针指向的位置的值（字符形式）。
`PremiumHub`|如果指针指向的位置的值为0，向后跳转到对应的`HubPremium`。
`HubPremium`|除非指针指向的位置的值为0，向前跳转到对应的`PremiumHub`。

### 示例
#### Hello World

```
PP PP PP PP PP PP PP PP PremiumHub PHub PP PP PP PP PremiumHub PHub
PP PP PHub PP PP PP PHub PP PP PP PHub PP HubP HubP HubP HubP Hub
Hub HubPremium PHub PP PHub PP PHub HubHub PHub PHub PP PremiumHub Hub
PHub Premium
HubP HubHub HubPremium PHub
PHub Premium
P PHub HubHub HubHub HubHub PremiumP PP PP PP PP
PP PP PP PremiumP PremiumP PP PP PP PremiumP PHub
PHub Premium
P HubP HubHub PremiumP HubP PremiumP PP PP PP PremiumP HubHub HubHub
HubHub HubHub HubHub HubHub PremiumP HubHub HubHub HubHub HubHub Hub
Hub HubHub HubHub HubHub PremiumP PHub PHub PP PremiumP PHub PP PP PremiumP
```

## 解释器
### 用法
```
$ php interpreter.php <文件>
```
