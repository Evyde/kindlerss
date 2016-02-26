# kindlerss
kindlerss订阅
- 目的
  
  目前可以进行RSS推送的网站基本都要收费，而开源的软件都需要GAE或者VPS，所以我产生了用PHP写一个可以运行在虚拟主机上的Kindle RSS自动推送软件。
- 思路
  
  主页面（配置参数） -> 主程序（后台运行，抓取HTML网页） -> 文本处理（各RSS站文章内容处理方式） -> 主程序（将所有RSS源汇总到一个HTML界面中） -> 格式转换（转换为PDF或者EPUB或者WORD等） -> 发送邮件（SMTP服务器发送邮件）
- 进展
  
  其他的都好说，只是格式转换这方面有点问题，如果是虚拟主机肯定不能运行kindlegen，然而http://cn.office-converter.com 转换出来的东西不知道为什么没有图片，转成PDF的话又需要太多依赖，所以我现在卡在这里，还希望大神帮忙。
- 名字
  
  这个目前还没有想好，就暂时用kindlerss这个名字吧。
- 其他
  
  [本人联系方式](mailto:life.app.hanfeng@hotmail.com)
    
  QQ：907247545
