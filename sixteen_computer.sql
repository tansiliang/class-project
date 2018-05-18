-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 05 月 18 日 12:01
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `sixteen_computer`
--

-- --------------------------------------------------------

--
-- 表的结构 `gj_admin_user`
--

CREATE TABLE IF NOT EXISTS `gj_admin_user` (
  `ad_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `ad_username` varchar(100) NOT NULL COMMENT '用户名',
  `ad_userpass` varchar(32) NOT NULL COMMENT '用户密码',
  `ad_email` varchar(50) NOT NULL COMMENT '用户邮箱',
  `ad_salt` varchar(20) DEFAULT NULL,
  `ad_addtime` int(11) NOT NULL COMMENT '创建时间',
  `ad_lasttime` int(11) NOT NULL COMMENT '最后登录时间',
  `ad_lastip` varchar(15) NOT NULL COMMENT '最后登录ip',
  `ad_actionlist` text,
  `ad_navlist` text COMMENT '权限',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `gj_admin_user`
--

INSERT INTO `gj_admin_user` (`ad_id`, `ad_username`, `ad_userpass`, `ad_email`, `ad_salt`, `ad_addtime`, `ad_lasttime`, `ad_lastip`, `ad_actionlist`, `ad_navlist`) VALUES
(14, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1398599250@qq.com', '2123941759', 1524876055, 1526637374, '127.0.0.1', NULL, NULL),
(17, 'root', 'e10adc3949ba59abbe56e057f20f883e', '1398599250@qq.com', '2044710195', 1525267064, 1525267064, '127.0.0.1', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `gj_album`
--

CREATE TABLE IF NOT EXISTS `gj_album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `album_name` varchar(100) DEFAULT NULL COMMENT '相册名称',
  `album_content` text COMMENT '相册描述',
  `album_motif` varchar(50) DEFAULT NULL COMMENT '相册主题，普通、校友',
  `album_addtime` int(11) DEFAULT NULL COMMENT '创建的时间',
  `album_updatetime` int(11) DEFAULT NULL COMMENT '更新的时间',
  PRIMARY KEY (`album_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `gj_album`
--

INSERT INTO `gj_album` (`album_id`, `album_name`, `album_content`, `album_motif`, `album_addtime`, `album_updatetime`) VALUES
(1, '高技', '哈哈，有缘千里来相聚', '校友', 123456789, 123456789);

-- --------------------------------------------------------

--
-- 表的结构 `gj_arrondi`
--

CREATE TABLE IF NOT EXISTS `gj_arrondi` (
  `arrondi_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `arrondi_type` varchar(100) DEFAULT NULL COMMENT '资料类型',
  `arrondi_title` varchar(100) DEFAULT NULL COMMENT '资料标题',
  `arrondi_content` text COMMENT '内容',
  `arrondi_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `arrondi_show` int(11) DEFAULT '0' COMMENT '是否显示',
  `arrondi_groom` int(11) DEFAULT '0' COMMENT '是否推荐',
  `arrondi_memberid` int(11) DEFAULT NULL COMMENT '会员id',
  PRIMARY KEY (`arrondi_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `gj_arrondi`
--

INSERT INTO `gj_arrondi` (`arrondi_id`, `arrondi_type`, `arrondi_title`, `arrondi_content`, `arrondi_time`, `arrondi_show`, `arrondi_groom`, `arrondi_memberid`) VALUES
(1, '前端', '前端页面的规范', '<h2 style="text-align:center;">\r\n	规范介绍：<span></span> \r\n</h2>\r\n<p class="MsoPlainText">\r\n	1、什么是设计规范<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	适用于<span>WEB</span>产品线的人机交互界面设计方面的指导手册。贯穿以用户为中心的设计指导方向，根据<span>WEB</span>产品的特点指定除的一套规范，以达到提升用户体验，控制产品设计质量，提高设计效率的目的。<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	2、谁去读设计规范<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	该设计规范适合界面设计师，用户体验师，前台技术工程师，发布支持人员，运营编辑人员的参照。<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	标准意义：<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	1、统一识别：规范能使页面相同属性单元识别统一，放止混乱，甚至出现严重的错误，避免用户在浏览时理解困难。<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	2、节约资源：除活动推广等个性页面外，设计其他页面使用本规范标准能极大的减少设计时间，达到节约资源的目的。<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	3、重复利用：相同属性单元、页面新建时课执行此标准重复使用，减少无关信息，就是减少对主题信息传达的干扰，利于阅读<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	与信息传递。<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	4、上手简单：在招收、加入新设计师或前端时，查看标准能使工作上手时间更快，减少出错。<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	指导标准<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	字体颜色：<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	页面布局：<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	板块排版在视觉上要符合纵向分割，横向模块间距统一，纵向可根据页面需求适当区分。<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	网页栅格：<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	产品栅格：<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	表单：<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	通用样式<span>Tab</span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	留白<span>:</span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	Button\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	阴影<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	容器：<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	图文：<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoPlainText">\r\n	图标：<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	命名：<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	图片输出：<span></span> \r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	Banner\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n<!--[endif]-->\r\n</p>\r\n<p class="MsoPlainText">\r\n	<br />\r\n</p>\r\n<p class="MsoNormal">\r\n	<span> </span> \r\n</p>', 123456789, 1, 1, 1),
(4, 'HTML专区', 'HTML标签', '&lt;strong&gt;&nbsp; &nbsp;&lt;/strong&gt;&nbsp; &nbsp; &nbsp;加粗<br />\r\n<br />\r\n&lt;h1&gt; &lt;/h1&gt;&nbsp; &nbsp; &nbsp; &nbsp;<br />\r\n&lt;h2&gt; &lt;/h2&gt;<br />\r\n&lt;h3&gt; &lt;/h3&gt;<br />\r\n&lt;h4&gt; &lt;/h4&gt;<br />\r\n&lt;h5&gt; &lt;/h5&gt;<br />\r\n&lt;h6&gt; &lt;/h6&gt;<br />\r\n<br />\r\n&lt;hr /&gt;&nbsp; &nbsp; &nbsp;水平直线<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n&nbsp; &nbsp; &lt;li&gt;&lt;/li&gt;<br />\r\n&lt;/ul&gt;&nbsp; &nbsp; &nbsp; &nbsp; 无序列表<br />\r\n<br />\r\n&lt;ol&gt;<br />\r\n&nbsp; &nbsp; &nbsp;&lt;li&gt;&lt;/li&gt;<br />\r\n&lt;/ol&gt;&nbsp; &nbsp; &nbsp; &nbsp; 有序列表<br />\r\n<br />\r\n<br />\r\n*****定义列表<br />\r\n&lt;dl &gt;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;******可用来定义图片和图片解释（或用于标题+正文的）<br />\r\n&lt;dt&gt;图片（标题）&lt;/dt&gt;<br />\r\n&lt;dd&gt;解释（正文）&lt;/dd&gt;<br />\r\n&lt;/dl&gt;<br />\r\n<br />\r\n1.插入图片<br />\r\n&lt;img src="图片路径"&nbsp; alt="图片不显示的时候，显示的文字" title=“鼠标点击的时候显示文字”/&gt;<br />\r\n<br />\r\n空格 &amp;nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 版权号 &amp;copy；&nbsp; &nbsp; 注册商标&nbsp; &amp;reg；&nbsp; &nbsp; &nbsp; &nbsp; “&nbsp; &nbsp;&amp;quot；<br />\r\n&amp;&nbsp; &nbsp; &amp;amp；&nbsp; &nbsp; &nbsp; &lt;&nbsp; &nbsp; &nbsp;&amp;It;&nbsp; &nbsp; &nbsp; &nbsp;&gt;&nbsp; &nbsp; &nbsp; &amp;gt;<br />\r\n<br />\r\n2.表格标签<br />\r\n&lt;table&gt;……&lt;/table&gt;&nbsp; &nbsp; &nbsp;定义表格<br />\r\n&lt;th&gt;……&lt;/th&gt;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;定义表格标题<br />\r\n&lt;tr&gt;……&lt;/tr&gt;<span> </span>定义表格行<br />\r\n&lt;td&gt;……&lt;/td&gt;<span> </span>定义表格列<br />\r\n<br />\r\n属性<br />\r\ncellspacing=“数值+单位”&nbsp; &nbsp; <span> </span>单元格间距离<br />\r\nwidth=“数值+单位”<span> </span>单元格宽度<br />\r\nheight=“数值+单位”<span> </span>单元格高度<br />\r\ncellpadding=“数值+单位”<span> </span>表格边框与内容的距离<br />\r\n<br />\r\nbordercolordark="颜色"<span> </span>（单元格上边和左边）设置边框暗部分颜色<br />\r\n<br />\r\n在&lt;td&gt;&lt;/td&gt;标签里书写<br />\r\nrowspan="数值"&nbsp; &nbsp; &nbsp;行合并数目<br />\r\ncolspan="数值"&nbsp; &nbsp; &nbsp;列合并数目&nbsp;<br />\r\n<br />\r\n<br />\r\n合并表格的思想：当将多个内容合并时，就会有多余的东西，所以要删除。<br />\r\n例如：有三列就有三个td，合并时就需要删除2个才行。<br />\r\n表格的立体效果，其实 就是将表格的亮边框瑶瑟和暗边框颜色，进行对边<br />\r\n<br />\r\n<br />\r\n&lt;table&gt;……&lt;/table&gt; 标签下的边框设置<br />\r\nframe（但标签）&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; void&nbsp; &nbsp; &nbsp;不要显示表格的边线<br />\r\n<span> </span>&nbsp; above&nbsp; &nbsp; &nbsp;只要显示出表格的上边线<br />\r\n<span> </span>&nbsp; below&nbsp; &nbsp; &nbsp;只显示出表格的下边线<br />\r\n<span> </span>&nbsp; hsides&nbsp; &nbsp; 只显示表格的上下边线<br />\r\n<span> </span>&nbsp; vsides&nbsp; &nbsp; 只显示表格的左右边线<br />\r\n<span> </span>&nbsp; lhsides&nbsp; &nbsp;只显示表格的左边线<br />\r\n<span> </span>&nbsp; rhsides&nbsp; &nbsp;只显示表格的右边线<br />\r\nrules<span> </span>格框线<br />\r\n<span> </span>&nbsp; rows&nbsp; &nbsp; &nbsp; 只显示出横行的格框线<br />\r\n<span> </span>&nbsp; cols&nbsp; &nbsp; &nbsp; 显示出直行下的格框线<br />\r\n<span> </span>&nbsp; all&nbsp; &nbsp; &nbsp;显示出直行的格框线<br />\r\n<span> </span>&nbsp; groups&nbsp; &nbsp; &nbsp; 表示列组合水平部分<br />\r\n<span> </span>&nbsp; none&nbsp; &nbsp;不显示任何格线框<br />\r\n<br />\r\n一个网页的设计水平，看代码的精简程度&nbsp;<br />\r\n<br />\r\n3.链接&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;超链接--就是人体血液--是互联网血液。<br />\r\n<br />\r\n&lt;a href="链接路径" title="注释" target="打开链接窗口的形式"&gt;内容&lt;/&gt;<br />\r\n<br />\r\n属性<br />\r\ntarget&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;打开窗口形式<br />\r\n&nbsp;<span> </span>_blank&nbsp; &nbsp; &nbsp; &nbsp;在新窗口中打开<br />\r\n<span> </span>_self<span> </span>在自身窗口中打开<br />\r\n<span> </span>_parent<span> </span>在上一级窗口中打开，框架会经常使用<br />\r\n<span> </span>_top<span> </span>在浏览器的整个窗口中打开，忽略任何框架<br />\r\n<br />\r\n<br />\r\n布局的核心思想：<br />\r\n1.分析页面结构图<br />\r\n2.选择合适标签来规划我们内容<br />\r\n3.再通过CSS来控制这些内容样式<br />\r\n*****布局分析：先从大的区域再到局部的区域<br />\r\n<br />\r\n<br />\r\n<br />\r\n4.表单<br />\r\n表单-作用、传递信息：将我们的信息提交给服务器<br />\r\n表单的作用：从访问你的web站点的用户那里获得信息。访问者可以使用诸如文本域，列表框、复选框、以及单选按钮类的表单元素输入信息，然后单击某个按钮提交这些信息。<br />\r\n*****客户端与服务器端进行信息交流的途径<br />\r\n<br />\r\n&lt;form action=url(传送目标，处理表单信息的服务器端应用程序) method=处理表单数据的方法（posT/GET）如果不写method，则默认提交方式为get&gt;&lt;/form&gt;<br />\r\n属性：action="传送的目标，处理表单的信息"<br />\r\n<span> </span>method="规定如何发送表单"&nbsp; 值=get、post<span> </span>；<br />\r\n<span> </span>name="规定表单的名称"<br />\r\n<span> </span>target="规定在何处打开action URL"<span> </span>值=_brank(在新窗口打开)/_parent（在上一级窗口中打开）/_top（在浏览器整个窗口大开，忽略任何框架）/_self（在自身窗口打开）<br />\r\n<span> </span>accept=""<span> </span>属性规定能够通过文件上传进行提交的文件类型,可以规定多个文件，用逗号隔开<br />\r\n<br />\r\n&lt;input type="表单元素类型" value="表单元素的值" name="表单元素名称" class="类别名"&nbsp; placeholder="默认表单的文字" /&gt;&nbsp; &nbsp; &nbsp;(单标签)&nbsp; &nbsp; 输入标签<br />\r\n&nbsp;<br />\r\n属性<br />\r\nchecked="checked"<span> </span>（规定此 input 元素首次加载时应当被选中）<br />\r\n<br />\r\ndisabled="disabled"<span> </span>(当 input 元素加载时禁用此元素)<br />\r\n<br />\r\nsize="数值+px"<span> </span>（定义输入字段的宽度）<br />\r\n<br />\r\nreadonly="readonly"<span> </span>(规定输入的字段为只读)<br />\r\n<br />\r\ntype=""&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;元素类型<span> </span><br />\r\n<span> </span>="text"&nbsp; &nbsp;文本框<span> </span>（一般用来输入用户名、姓名、地址之类的文字信息）<br />\r\n<span> </span>="checkbox"&nbsp; &nbsp; 复选框<span> </span><br />\r\n<span> </span>="file"<span> </span>文件选择框<br />\r\n<span> </span>="hidden"<span> </span>隐藏域<span> </span>（代码书写与普通的文本框相同，但隐藏域不会显示在页面上，通常只应用于页面向后台传值）<br />\r\n<span> </span>="image" <span> </span>图片框<br />\r\n<span> </span>="password"<span> </span>密码框<span> </span>（用来输入密码类需要保密的文字信息）<br />\r\n<span> </span>="radio"<span> </span>单选按钮<br />\r\n<span> </span>="button"<span> </span>普通按钮<span> </span>（其value属性值会显示为按钮上面的文字）<br />\r\n<span> </span>="reset"<span> </span>重置按钮<span> </span>（单击按钮后，会清空其所在表单中输入的全部数据，回到初始状态）<br />\r\n<span> </span>="submit"<span> </span>提交按钮<span> </span>（在表单中单击submit按钮会提交表单数据到指定的位置）<br />\r\n<br />\r\n<br />\r\n<br />\r\n下拉列表标签<br />\r\n&lt;select&gt;……&lt;/select&gt;<span> </span>定义下拉列表<br />\r\n&lt;option value="值"&gt;……&lt;/option&gt;<span> </span>定义下拉列表中的选项<br />\r\n属性：selected="selected"<span> </span>设置默认<br />\r\n<br />\r\n文本域标签<br />\r\n&lt;textarea cols="数值" rows="数值"&gt;……&lt;/textarea&gt;<span> </span>文本域标签，相当于一个多行的文本框，可以让用户输入大量数据<br />\r\ndisabled="disabled" <span> </span>(当此文本区首次加载时禁用此文本区)<br />\r\n&nbsp; &nbsp;name<span> </span>=""<span> </span>定义名称<br />\r\n&nbsp; &nbsp;readonly="readonly"<span> </span>指明用户无法修改文本区内的内容<br />\r\n<br />\r\n<br />\r\n列表框<br />\r\na.菜单式<br />\r\n&lt;select name="列表框名称"&gt;<br />\r\n&lt;option selected="selected(哪个为初始选择，就添加selected语句【只有一个】)" value="提交值"&gt;列表1&lt;/option&gt;<br />\r\n&lt;option value="提交值"&gt;列表2&lt;/option&gt;<br />\r\n&lt;/select&gt;<br />\r\n<br />\r\n分组<br />\r\n&lt;optgroup label="分组名称"&gt;&lt;/optgroup&gt;<br />\r\n<br />\r\nb.列表框<br />\r\n&lt;select name="列表框名称" size="显示的行数" multiple（如果允许多选，则有该命令；否则没有此命令）&gt;<br />\r\n<br />\r\n&lt;fieldset&gt;……&lt;/fieldset&gt;&nbsp; &nbsp; &nbsp; 定义围绕表单中元素的边框&nbsp; &nbsp; 放在&lt;form&gt;标签外<br />\r\n&lt;legend&gt;……&lt;/legend&gt;<span> </span>元素为fieldset元素定义标题<br />\r\n<br />\r\n<br />\r\nFLASH动画<br />\r\n&lt; embed&gt; ……&lt;/embed&gt;<br />\r\n属性<br />\r\nsrc="url"<span> </span>路径<br />\r\nwidth="px/%"<span> </span>flash亮度<br />\r\nhidth="px/%"<span> </span><br />\r\nwmode="trasparent"&nbsp; 使flash背景部分透明<br />\r\n<br />\r\n****两个块级元素之间距离不再是margin-bottom与margin-top的和，而是两者中的较大者<br />\r\n<br />\r\n<br />\r\n在网页中插入flash的方式有两种<br />\r\n1.embed标签<br />\r\n2.通过DW自动生成代码&lt;object&gt;<br />\r\n<br />\r\n*****现在流行的，插入多媒体方式将多媒体文件上传到一些视频网站。flash本身的播放，是需要插件（播放器），有播放器也看不了网页中flash动画，可能是你的浏览器安全设置。<br />\r\n<br />\r\n<br />\r\n<br />\r\n5.&lt;marquee&gt;&lt;/marquee&gt;<span> </span>滚动文字<br />\r\n属性<br />\r\ndirection="left、right、up、down"<span> </span> <span> </span>滚动方向<br />\r\nbehavior="滚动方式"<span> </span> scroll（一圈圈绕着走，预设卷动） slide（只走一次，滑动） altemate（来回走）<br />\r\nloop="滚动的循环次数"&nbsp; <span> </span>若未指定则循环不止<br />\r\n&nbsp; &nbsp; ="infinite"<br />\r\n<br />\r\nscrollamount="速度"&nbsp; 数值越大速度越快<br />\r\nscrolldelay="设定卷动的时间"&nbsp; &nbsp;（走一步，停一停）<br />\r\n<br />\r\nonmouseover="this.stop()"&nbsp; &nbsp; 鼠标经过上面时停止滚动<br />\r\nonmouseOut="this.start()"<span> </span>鼠标离开时开始滚动<br />\r\n<br />\r\n&lt;frameset rows="控制行数及行高" framespacing="框架间距" frameborder="是否显示框架边框（yes,no/1,0）" border="边框宽度" bordercolor="边框颜色"&gt;<br />\r\n&lt;frame src="被包含的文件路径及名称" name="框架名称" noresize="是否允许改变框架尺寸（true/false）" scrolling="滚动条显示控制"&gt;<br />\r\n<br />\r\n<br />\r\n设置页面的元素不可复制<br />\r\n&lt;html onselectstart="return false"&gt;&lt;/html&gt;<br />\r\n<br />\r\n<br />\r\n******HTML5********<br />\r\n1.a&nbsp; (在 HTML 4.01 中，&lt;a&gt; 标签既可以是超链接，也可以是锚。这取决于是否描述了 href 属性。<br />\r\n在 HTML 5 中，&lt;a&gt; 是超链接，但是假如没有 href 属性，它仅仅是超链接的一个占位符。)<br />\r\n<br />\r\n2.acronym 标签定义首字母缩写词（当您把鼠标移至缩略词语上时，title 可被用来展示表达的完整版本。）<br />\r\n<span> </span>示例：&lt;acronym title="World Wide Web"&gt;WWW&lt;/acronym&gt;<br />\r\n<br />\r\n<br />\r\n<br />\r\nHTML属性<br />\r\n属性<span> </span>属性值<br />\r\n1、class=""<span> </span>元素的类名<br />\r\n<br />\r\n2、contenteditable="true(false)"<span> </span>设置是否允许用户编辑元素。<br />\r\n<br />\r\n3、contentextmenu="id(of,a,menu,element)"<span> </span>给元素设置一个上下文菜单<br />\r\n<br />\r\n4、dir="ltr(rtl)"<span> </span>设置文本方向<br />\r\n<br />\r\n5、draggable="true(false,auto)"<span> </span>设置是否允许用户拖动元素<br />\r\n<br />\r\n6、id<br />\r\n<br />\r\n7、irrelevant="true(false)"<span> </span>设置元素是否相关。不显示非相关的元素。<br />\r\n<br />\r\n<br />\r\n<br />\r\n&lt;iframe src="xxx.html"&gt;&lt;/iframe&gt;<span> </span>--- 元素会创建包含另外一个文档的内联框架（即行内框架<br />\r\n<span> </span><br />\r\n<br />\r\n<br />\r\n<a class="ke-insertfile" href="/app/view/admin/js/kindeditor/attached/file/20180518/20180518040826_55439.docx" target="_blank">下载</a><br />\r\n<br />\r\n<br />', 1526617307, 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `gj_discuss`
--

CREATE TABLE IF NOT EXISTS `gj_discuss` (
  `discuss_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `discuss_content` text COMMENT '评论内容',
  `discuss_addtime` int(11) DEFAULT NULL COMMENT '发表时间',
  `discuss_updatetime` int(11) DEFAULT NULL COMMENT '当前的时间',
  `discuss_laud` int(11) DEFAULT '0' COMMENT '评论点赞',
  `discuss_visits` int(11) DEFAULT '0' COMMENT '点赞次数',
  `discuss_forumid` int(11) DEFAULT NULL COMMENT '内容类型id',
  `discuss_memberid` int(11) DEFAULT NULL COMMENT '评论用户的id',
  PRIMARY KEY (`discuss_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `gj_discuss`
--

INSERT INTO `gj_discuss` (`discuss_id`, `discuss_content`, `discuss_addtime`, `discuss_updatetime`, `discuss_laud`, `discuss_visits`, `discuss_forumid`, `discuss_memberid`) VALUES
(1, '确实是好小子', 1524836492, 1524836492, 0, 0, 1, 4);

-- --------------------------------------------------------

--
-- 表的结构 `gj_forum`
--

CREATE TABLE IF NOT EXISTS `gj_forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '论坛id',
  `forum_content` text COMMENT '论坛内容',
  `forum_title` text COMMENT '论坛标题',
  `forum_images` varchar(100) DEFAULT NULL COMMENT '论坛图片',
  `forum_laud` int(11) DEFAULT '0' COMMENT '论坛点赞',
  `forum_addtime` int(11) DEFAULT NULL COMMENT '文章发布的时间,用来排序',
  `forum_visits` int(11) DEFAULT '0' COMMENT '点赞的次数',
  `forum_skim` int(11) DEFAULT '0' COMMENT '浏览的次数',
  `forum_show` int(11) DEFAULT '0' COMMENT '状态',
  `forum_memberid` int(11) DEFAULT NULL COMMENT '会员id',
  PRIMARY KEY (`forum_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `gj_forum`
--

INSERT INTO `gj_forum` (`forum_id`, `forum_content`, `forum_title`, `forum_images`, `forum_laud`, `forum_addtime`, `forum_visits`, `forum_skim`, `forum_show`, `forum_memberid`) VALUES
(1, '好小子呀', '论小伙子', NULL, 0, 1524836492, 0, 0, 0, 4),
(2, '哈哈', '论哈哈', NULL, 0, 1524936492, 0, 0, 0, 3),
(3, '高新', '高新', NULL, 0, 1524936492, 0, 0, 0, 2),
(4, '高坑', '高坑', NULL, 0, 1524936492, 0, 0, 0, 2),
(5, '丑不要脸', '臭不要脸', NULL, 0, 1524936492, 0, 0, 0, 5);

-- --------------------------------------------------------

--
-- 表的结构 `gj_member`
--

CREATE TABLE IF NOT EXISTS `gj_member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '会员信息的id',
  `member_name` varchar(50) NOT NULL COMMENT '会员名',
  `member_studentid` int(16) NOT NULL COMMENT '学号',
  `member_pass` varchar(32) NOT NULL COMMENT '会员密码md5',
  `member_email` varchar(50) NOT NULL COMMENT '邮箱',
  `member_truename` varchar(20) DEFAULT NULL COMMENT '真实姓名',
  `member_sex` int(11) DEFAULT '0' COMMENT '性别,1为男，0为女',
  `member_hobby` varchar(50) DEFAULT NULL COMMENT '爱好',
  `member_content` text COMMENT '自我介绍',
  `member_phone` varchar(20) DEFAULT NULL COMMENT '联系方式',
  `member_images` varchar(50) DEFAULT NULL COMMENT '个人图片',
  `member_addtime` int(11) NOT NULL COMMENT '注册时间',
  `member_updatetime` int(11) NOT NULL COMMENT '最近登录时间',
  `member_ip` varchar(11) DEFAULT NULL COMMENT '会员登录的ip地址',
  `member_imgthumn` varchar(100) DEFAULT NULL COMMENT '用户头像',
  `member_navlist` text COMMENT '用户的权限',
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `gj_member`
--

INSERT INTO `gj_member` (`member_id`, `member_name`, `member_studentid`, `member_pass`, `member_email`, `member_truename`, `member_sex`, `member_hobby`, `member_content`, `member_phone`, `member_images`, `member_addtime`, `member_updatetime`, `member_ip`, `member_imgthumn`, `member_navlist`) VALUES
(1, '管理员', 20162343, '21232f297a57a5a743894a0e4a801fc3', '1398599250@qq.com', '谭思良', 1, '运动、啊哈', '反正就系好靓仔，就系好靓仔', '18318181935', 'Member/20180517/member_5afd39a0723c9_thumb.jpg', 1524835492, 1524835492, '127.0.0.1', 'Member/20180517/member_5afd3bb5ca01c_thumb.jpg', NULL),
(2, '李四', 20162516, 'e10adc3949ba59abbe56e057f20f883e', '1398599250@qq.com', '李四', 1, '打球', '好，很好，非常好', '123456789', 'Member/20180514/member_5af8fa0999068_thumb.png', 1526266377, 1526266377, '127.0.0.1', NULL, NULL),
(3, '王二', 20165234, 'e10adc3949ba59abbe56e057f20f883e', '123456789@qq.com', '小样', 0, '跳舞', '反正我就系好犀利啊', '123456789', 'Member/20180514/member_5af8fa875a540_thumb.jpg', 1526266503, 1526266503, '127.0.0.1', 'Member/20180514/member_5af8fa872e9fe_thumb.jpg', NULL),
(5, '老王', 20162315, 'e10adc3949ba59abbe56e057f20f883e', '123456789@qq.com', '帅哥、靓女', 1, '打球、踢球、玩游戏', '反正就系好犀利', '110120119114', 'Member/user.png', 1526564872, 1526564872, NULL, 'Member/user.png', NULL),
(6, '张三', 20162323, 'e10adc3949ba59abbe56e057f20f883e', '123456789@qq.com', '李二', 1, '打球、踢球、玩游戏', '反正就系好犀利', '11012011911', 'Member/user.png', 1526622565, 1526622565, NULL, 'Member/user.png', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `gj_naviga`
--

CREATE TABLE IF NOT EXISTS `gj_naviga` (
  `naviga_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '导航id',
  `naviga_name` varchar(20) NOT NULL COMMENT '导航名',
  `naviga_url` varchar(100) NOT NULL COMMENT '导航链接地址',
  `naviga_bar` int(11) NOT NULL DEFAULT '0' COMMENT '是否在导航栏上显示',
  `naviga_order` int(11) NOT NULL DEFAULT '1' COMMENT '排序',
  `naviga_parent` int(11) NOT NULL COMMENT '父类',
  PRIMARY KEY (`naviga_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `gj_naviga`
--

INSERT INTO `gj_naviga` (`naviga_id`, `naviga_name`, `naviga_url`, `naviga_bar`, `naviga_order`, `naviga_parent`) VALUES
(1, '首页', 'index.php?p=font&c=Index&a=list', 1, 1, 0),
(2, '荣誉专区', 'index.php?p=font', 1, 2, 0),
(8, '班级相册', 'index.php?p=font&c', 1, 3, 0),
(9, '班级论坛', 'index.php?p=font&c', 1, 4, 0),
(10, '下载专区', 'index.php?p=font&c=Download&a=list', 1, 5, 0),
(11, '昔日风采', 'index.php?p=font&c=Mien&a=list', 1, 6, 0),
(12, '通讯录', 'index.php?p=font&c=Address&a=list', 1, 7, 0),
(13, '关于我们', 'index.php?p=font&c=Message&a=list', 1, 8, 0),
(14, '个人中心', 'index.php?p=font&c=Personal&a=list', 1, 9, 0);

-- --------------------------------------------------------

--
-- 表的结构 `gj_reply`
--

CREATE TABLE IF NOT EXISTS `gj_reply` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '回复id',
  `reply_discussid` int(11) DEFAULT NULL COMMENT '评论id',
  `reply_content` text COMMENT '回复内容',
  `reply_formid` int(11) DEFAULT NULL COMMENT '回复用户id',
  `reply_toid` int(11) DEFAULT NULL COMMENT '目标用户id',
  `reply_time` int(11) DEFAULT NULL COMMENT '回复时间',
  PRIMARY KEY (`reply_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `gj_reply`
--

INSERT INTO `gj_reply` (`reply_id`, `reply_discussid`, `reply_content`, `reply_formid`, `reply_toid`, `reply_time`) VALUES
(2, 1, '小样', 4, 5, 1524836492),
(3, 1, '小样', 4, 3, 1524836492),
(4, 1, '小样', 2, 3, 1524836492),
(5, 1, '小样', 2, 5, 1524836492),
(6, 1, '小样', 4, 5, 1524836492);

-- --------------------------------------------------------

--
-- 表的结构 `gj_session`
--

CREATE TABLE IF NOT EXISTS `gj_session` (
  `sess_name` varchar(32) NOT NULL,
  `sess_data` text COMMENT '入库信息',
  `expact` int(11) DEFAULT NULL COMMENT '获得入库的时间戳',
  PRIMARY KEY (`sess_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `gj_session`
--

INSERT INTO `gj_session` (`sess_name`, `sess_data`, `expact`) VALUES
('6imu5t1iftgvddo23scjnsda40', 'is_captcha|s:4:"94RO";id|s:2:"14";is_name|s:3:"yes";', 1526637374);

-- --------------------------------------------------------

--
-- 表的结构 `gj_switchable`
--

CREATE TABLE IF NOT EXISTS `gj_switchable` (
  `switchable_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '图片轮播id',
  `switchable_name` varchar(50) DEFAULT NULL COMMENT '轮播图名称',
  `switchable_images` varchar(100) DEFAULT NULL COMMENT '轮播图',
  `switchable_thumn` varchar(100) DEFAULT NULL COMMENT '轮q播图缩略图',
  `switchable_content` text COMMENT '图片描述',
  `switchable_time` int(11) DEFAULT NULL COMMENT '时间',
  `switchable_show` int(11) DEFAULT '0' COMMENT '是否显示',
  `switchable_order` int(11) DEFAULT '1' COMMENT '排序',
  PRIMARY KEY (`switchable_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `gj_switchable`
--

INSERT INTO `gj_switchable` (`switchable_id`, `switchable_name`, `switchable_images`, `switchable_thumn`, `switchable_content`, `switchable_time`, `switchable_show`, `switchable_order`) VALUES
(3, '16计算机高技的帅哥，靓女', 'Switchable/20180512/switchable_5af6782bd4d0a.jpg', 'Switchable/20180512/switchable_5af6782bd4d0a_thumb.jpg', '反正就系好犀利咯', 1525306292, 1, 1),
(4, '帅哥、靓女', 'Switchable/20180512/switchable_5af6785f2c191.jpg', 'Switchable/20180512/switchable_5af6785f2c191_thumb.jpg', '不错的年纪，遇上不错的你们', 1525306313, 1, 3),
(5, '反正就系好犀利', 'Switchable/20180512/switchable_5af6788c20464.jpg', 'Switchable/20180512/switchable_5af6788c20464_thumb.jpg', '哈哈哈哈哈哈', 1525306325, 1, 4),
(6, '相遇16计算机高技', 'Switchable/20180512/switchable_5af678b7726c2.jpg', 'Switchable/20180512/switchable_5af678b7726c2_thumb.jpg', '啊哈啊哈哈哈', 1526102199, 1, 5);

-- --------------------------------------------------------

--
-- 表的结构 `gj_webset`
--

CREATE TABLE IF NOT EXISTS `gj_webset` (
  `webset_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '网站设置id',
  `webset_name` varchar(50) DEFAULT '' COMMENT '网站名称',
  `webset_title` varchar(100) DEFAULT '' COMMENT '网站标题',
  `webset_title_ico` varchar(50) DEFAULT NULL COMMENT '标题图标',
  `webset_url` varchar(50) DEFAULT 'www.16jsjgj.com' COMMENT '网站网址',
  `webset_seo` text COMMENT 'seo 关键字',
  `webset_bewrite` text COMMENT '描述',
  `webset_show` int(11) DEFAULT '0' COMMENT '是否显示',
  `web_foot_content` text COMMENT '页脚设置',
  PRIMARY KEY (`webset_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `gj_webset`
--

INSERT INTO `gj_webset` (`webset_id`, `webset_name`, `webset_title`, `webset_title_ico`, `webset_url`, `webset_seo`, `webset_bewrite`, `webset_show`, `web_foot_content`) VALUES
(2, '16计算机高技', '16计算机高技 ', 'Webset/20180512/webset_5af66f2c73387.png', 'www.16jsjgj.com', '班级网站，16计算机高技的网站', '班级网站', 1, '<p style="text-align:center;">\r\n	16计算机高技网站&nbsp; &nbsp; &nbsp; &nbsp;www.16jsjgj.com\r\n</p>\r\n<p style="text-align:center;">\r\n	地址：广东省高新技术技工学校综合楼3楼&nbsp; &nbsp; 微信：16jsjgj\r\n</p>\r\n<div style="text-align:center;">\r\n	<a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=c13a038e00d418e798156ab85a8602169a64af60365d83ff7c10138843b23090"></a><a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=c13a038e00d418e798156ab85a8602169a64af60365d83ff7c10138843b23090"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="16计算机高技" title="16计算机高技" /></a>\r\n</div>');

-- --------------------------------------------------------

--
-- 表的结构 `gj_work`
--

CREATE TABLE IF NOT EXISTS `gj_work` (
  `work_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `work_release` int(11) DEFAULT NULL COMMENT '发布时间',
  `work_update` int(11) DEFAULT NULL COMMENT '更新时间',
  `work_content` text COMMENT '文章内容',
  `work_title` text COMMENT '文章标题',
  `work_subtitle` varchar(100) DEFAULT NULL COMMENT '小标题',
  `work_hot` int(11) DEFAULT '0' COMMENT '热门,0表示不热门，1表示热门',
  `work_order` int(11) DEFAULT '1' COMMENT '排序',
  `work_show` int(11) DEFAULT '0' COMMENT '发布',
  `work_images` varchar(50) DEFAULT NULL COMMENT '上传图片',
  `work_thumn` varchar(50) DEFAULT NULL COMMENT '缩略图',
  `work_categoryid` int(11) DEFAULT NULL COMMENT '文章类别',
  PRIMARY KEY (`work_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `gj_work`
--

INSERT INTO `gj_work` (`work_id`, `work_release`, `work_update`, `work_content`, `work_title`, `work_subtitle`, `work_hot`, `work_order`, `work_show`, `work_images`, `work_thumn`, `work_categoryid`) VALUES
(1, 1524835492, 1526113925, '这是关于我们的介绍，想详细了解吗？想也不告诉你', '班级介绍', NULL, 0, 1, 1, 'Work/20180512/work_5af6a68563b28.jpg', 'Work/20180512/work_5af6a68563b28_thumb.jpg', 1),
(9, 1526192716, 1526193313, '你想了解我们是一个怎么样的集体吗？欢迎加入我们<img src="http://www.16jsjgj.com/app/view/admin/js/kindeditor/plugins/emoticons/images/21.gif" border="0" alt="" />', '关于我们', NULL, 0, 5, 1, 'Work/20180513/work_5af7da4ce9db5.jpg', 'Work/20180513/work_5af7da4ce9db5_thumb.jpg', 13),
(3, 1526108963, 1526636431, '<h2 style="text-align:center;">\r\n	芙蓉山烧烤\r\n</h2>\r\n<p style="text-align:center;">\r\n	关于我们的详细内容你想知道吗？想知道就找我们了解吧\r\n</p>', '昔日风采', '芙蓉山烧烤', 1, 2, 1, 'Work/20180512/work_5af69323adf77.jpg', 'Work/20180512/work_5af69323adf77_thumb.jpg', 1),
(4, 1526109072, 1526636489, '<h2 style="text-align:center;">\r\n	野炊\r\n</h2>\r\n<p style="text-align:center;">\r\n	感觉还不错，挺哈奥玩的的，这魔法教师节佛挡杀佛克隆是范德萨发送到发送到范德萨发生的黑寡妇会覆盖黑寡妇是发个即可浪费国家大事六块腹肌三大类加福禄寿放假时间率达到快放假了圣诞节方法论富家大室了福建省地方了减肥了圣诞节福建省代理费见识到了房间里的数据副书记的浪费了坚实的浪费绝对是龙卷风类似的福建省据了解放暑假了的减肥三大类福建省了打飞机的李开复记录但是\r\n</p>', '昔日风采', '野炊', 1, 3, 1, 'Work/20180512/work_5af69390984b4.jpg', 'Work/20180512/work_5af69390984b4_thumb.jpg', 1),
(5, 1526109295, 1526636411, '<h2 style="text-align:center;">\r\n	爬芙蓉山\r\n</h2>\r\n<p style="text-align:left;">\r\n	冒雨爬山，还玩的听嗨的今飞凯达卢萨卡九分裤劳动竞赛浪费了几十块了方式的方式发送到范德萨发送到发送到jklgjflsad荆防颗粒打开数据弗兰克斯顶级分类快圣诞节疯狂的少女可能是佛诶我就覅类似耳机哦放假掉机减肥了的设计费ISO理解近代史及佛教都发世纪东方拉拉地方卡死了副书记的联发科骄傲的烦恼款未付是的发送到发送到<img src="/app/view/admin/js/kindeditor/attached/image/20180512/20180512063115_81776.jpg" alt="" /> \r\n</p>\r\n<p style="text-align:left;">\r\n	<img src="/app/view/admin/js/kindeditor/attached/image/20180518/20180518075953_64113.jpg" alt="" /> \r\n</p>', '昔日风采', '爬芙蓉山', 1, 5, 1, 'Work/20180512/work_5af6946feeaa3.jpg', 'Work/20180512/work_5af6946feeaa3_thumb.jpg', 1),
(6, 1526109367, 1526636444, '<h2 style="text-align:center;">\r\n	你好码号\r\n</h2>\r\n<p style="text-align:center;">\r\n	jfddklakjflsdj附加费了的卡斯加的罚款了圣诞节疯狂了圣诞节快乐分开交施蒂利克发链接圣诞快乐\r\n</p>', '昔日风采', '小样', 1, 4, 1, 'Work/20180512/work_5af694b7d4d03.jpg', 'Work/20180512/work_5af694b7d4d03_thumb.jpg', 1),
(7, 1526109447, 1526636463, '<h2 style="text-align:center;">\r\n	反正就系好犀利咯\r\n</h2>\r\n<p style="text-align:center;">\r\n	打开刘放假啊开了房看见了撒娇分开发了多少九分裤历史记录\r\n</p>', '昔日风采', '反正就系好犀利咯', 1, 6, 1, 'Work/20180512/work_5af69507d997c.jpg', 'Work/20180512/work_5af69507d997c_thumb.jpg', 1),
(8, 1526109503, 1526636477, '<h2 style="text-align:center;">\r\n	你好吗朋友\r\n</h2>\r\n<p>\r\n	偶皮浮动法减肥了坚实的浪费计算机的老师傅了健康快乐山东矿机分开了速度快荆防颗粒\r\n</p>', '昔日风采', '你好吗朋友', 1, 7, 1, 'Work/20180512/work_5af6953f9026e.jpg', 'Work/20180512/work_5af6953f9026e_thumb.jpg', 1),
(10, 1526212119, 1526636422, '<h2 style="text-align:center;">\r\n	校运会\r\n</h2>\r\n<p>\r\n	地方撒家乐福了坚实的法兰克福健康的洛杉矶分开老实交代快疯了讲述了对方就死定了九分裤就是独立发链接施蒂利克 解放路上的看见的分开了的数据\r\n</p>', '昔日风采', '校运会', 0, 10, 1, 'Work/20180513/work_5af8261773936.jpg', 'Work/20180513/work_5af8261773936_thumb.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
