# phpdemo  -----php+mysql+html+js+css

1.数据库结构
数据库名字 company
  表名字 admin,config,article
    admin对应字段名字:1.id;2	admin_name;3	admin_pass
    config对应字段名字:1	id;2	site_title;3	site_url;4	site_logo;5	site_keyword;6	site_description;7	site_copyright;8	company_name;9	company_phone;10	company_fax;11	company_email;12	company_weixin;13	company_ewm;14	company_address;15	company_ewn
    article对应字段名字:1.id;2	title;3	comefrom;4	pubdate;5	keywords;6	description	7	content;8	posid

2.前端
    首页简单效果:轮播,点击
    管理平台前端:框架标签（Frame）
      <frameset cols="25%,75%">
         <frame src="frame_a.htm">
         <frame src="frame_b.htm">
      </frameset>

3.后端
  登录验证,符合身份的提供有效session
  新闻展示,分页展示新闻标题,点击显示新闻内容
