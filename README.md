## WordPress主题开发学习
### WordPress 专业术语：
- **Template（模板**） — 其实就是一个代码集，主题中很多地方会利用到这个代码集，所以把它们整合成一个模板，这样就就不必一遍遍输入这些重复代码。
- **Template file（模板文件**） — 一个包含一个或者多个代码集（模板）文件。每个主题是由多个模板文件组成的，比如：index.php，style.css，sidebar.php 等等。
- **Theme（主题**）或者 **WordPress theme（WordPress 主题）** — 所有你正在使用的文件：文本，图像，代码等等。注意： WordPress theme（主题）和 WordPress template(s)（模板）是两个不同的东西，尽管有些人认为他们一样。
- **Post（日志或者文章）** — 现在你读的就是一篇日志。此外，它是你 blog 的一个简单的条目，如：一个页面或者一篇日记。
- **Page（静态页面）** — 一种特殊的 post，它不是以分类组织的。它有别于你其他的日志。注意：在 WordPress，page（页面）和 Page（静态页面）是两种不同的东西。## WordPress 主题的层次结构
### WordPress 主题的层次结构
一旦你主题中的某个文件丢失了，WordPress 主题系统将会使用其他什么模板文件来代替。
![main-hierarchy.gif](https://cdn.wpjam.com/2007/06/main-hierarchy.gif?imageMogr2/auto-orient/thumbnail/1200x/quality/70/interlace/1|watermark/1/image/aHR0cHM6Ly9jZG4ud3BqYW0uY29tL3dwamFtL3dhdGVybWFyay5wbmc=/dissolve/100/gravity/SouthEast/dx/10/dy/10#)
**越靠左越重要**。