# kindlerss
kindlerss订阅
- 目的
  
  目前可以进行RSS推送的网站基本都要收费，而开源的软件都需要GAE或者VPS，所以我产生了用PHP写一个可以运行在虚拟主机上的Kindle RSS自动推送软件。
- 思路
  
  主页面（配置参数） -> 主程序（后台运行，抓取HTML网页） -> 文本处理（各RSS站文章内容处理方式） -> 主程序（将所有RSS源汇总到一个HTML界面中） -> 格式转换（转换为PDF或者EPUB或者WORD等） -> 发送邮件（SMTP服务器发送邮件）
  如果想加入推送源，在下面按格式加即可，<br />
  但是注意必须有相应的文本处理文件，<br />
  主程序会调用文本处理文件的函数：<br />
  (String) getXxxContent ($html)<br />
  函数说明：主程序调用此函数，获得文章内容。<br />
  Xxx为PHP源文件名，同时为\<input\>中的value名，首字母大写<br />
  参数说明：html：主程序通过推送源得到的HTML源码<br />
  返回值：需要一个String类型的返回值，主程序<br />
  不进行校验，如果检测不到建议返回“抓取内容失败”等明文内容<br />
  (String) getXxxItemURL (void)<br />
  函数说明：主程序调用此函数，获得RSS源地址<br />
  参数：无<br />
  返回值：RSS源地址<br />

- 进展
  
  其他的都好说，只是格式转换这方面有点问题，如果是虚拟主机肯定不能运行kindlegen，然而http://cn.office-converter.com 转换出来的东西不知道为什么没有图片，转成PDF的话又需要太多依赖，所以我现在卡在这里，还希望大神帮忙。
- 名字
  
  这个目前还没有想好，就暂时用kindlerss这个名字吧。
- 其他
  
  [本人联系方式](mailto:life.app.hanfeng@hotmail.com)
    
  QQ：907247545
