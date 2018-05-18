-- 创建数据库
create database sixteen_computer;
set names gbk;
use sixteen_computer;
-- 管理员表
create table gj_admin_user(
ad_id int unsigned not null primary key auto_increment comment '管理员id',
ad_username varchar(100) not null comment '用户名',
ad_userpass varchar(32) not null comment '用户密码',
ad_email varchar(50) not null comment '用户邮箱',
ad_salt varchar(20) ,
ad_addtime int(11) not null comment '创建时间',
ad_lasttime int(11) not null comment '最后登录时间',
ad_lastip varchar(15) not null comment '最后登录ip',
ad_actionlist text,
ad_navlist text comment '权限'
)charset=utf8;
insert into gj_admin_user values(null,'admin',md5('admin'),'139859950@qq.com','sixteencomputer','1524306374','1524306374','100.100.100.1',null,null);

-- session入库
CREATE TABLE IF NOT EXISTS `gj_session` (
  `sess_name` varchar(32) NOT NULL,
  `sess_data` text COMMENT '入库信息',
  `expact` int(11) DEFAULT NULL COMMENT '获得入库的时间戳',
  PRIMARY KEY (`sess_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 导航数据表
create table gj_naviga(
naviga_id int not null primary key auto_increment comment "导航id",
naviga_name varchar(20) not null comment '导航名',
naviga_url varchar(100) not null comment '导航链接地址',
naviga_bar int not null default '0' comment '是否在导航栏上显示',
naviga_order int not null default '1' comment '排序',
naviga_parent int not null comment '父类'
)charset=utf8;
insert into gj_naviga values(1,'首页','index.php','0',5,0),
(2,'荣誉专区','index.php','0',5,0);

-- 文章数据表
create table gj_work(
work_id int not null primary key auto_increment comment '文章id',
work_release int (11) comment '发布时间',
work_update int(11) comment '更新时间',
work_content text comment '文章内容',
work_title text comment "文章标题",
work_hot int default '0' comment '热门,0表示不热门，1表示热门',
work_order int default '1' comment '排序',
work_show int default '0' comment '发布',
work_images varchar(50) comment '上传图片',
work_thumn varchar(50) comment '缩略图',
work_categoryid int comment '文章类别'
)charset=utf8;
alter table gj_work add column work_subtitle varchar(100) comment '小标题' after work_title;
insert into gj_work values(1,'1524835492','1524835492','小样的积分卡士大夫鲁大师','班级活动',1,5,1,null,null,1);

-- 网站设置
create table gj_webset(
webset_id int not null primary key auto_increment comment '网站设置id',
webset_name varchar(50) default '' comment '网站名称',
webset_title varchar(100) default '' comment '网站标题',
webset_title_ico varchar(50) comment '标题图标',
webset_url varchar(50) default 'www.16jsjgj.com' comment "网站网址",
webset_seo text comment 'seo 关键字',
webset_bewrite text comment '描述',
webset_show int default '0' comment '是否显示',
webset_order int default '0' comment "排序",
web_foot_content text comment '页脚设置'
)charset=utf8;
insert into gj_webset values(null,'16计算机高技','16计算机高技-666',null,null,null,null,1,null,null);

-- 图片轮播列表
create table gj_switchable(
switchable_id int not null primary key auto_increment comment '图片轮播id',
switchable_name varchar(50) comment '轮播图名称',
switchable_images varchar(100) comment '轮播图',
switchable_thumn varchar(100) comment "轮播图缩略图",
switchable_content text comment '图片描述',
switchable_time int(11) comment '时间',
switchable_show int default '0' comment '是否显示',
switchable_order int default '1' comment '排序'
)charset=utf8;
insert into gj_switchable values(null,'首页',null,null,'首页轮播图','1524835492',0,1);

-- 会员列表
create table gj_member(
member_id int not null primary key auto_increment comment '会员信息的id',
member_name varchar(50) not null comment '会员名',
member_studentid int(16) not null comment '学号',
member_pass varchar(32) not null comment '会员密码md5',
member_email varchar(50) not null comment '邮箱',
member_truename varchar(20) comment "真实姓名",
member_sex int default '0' comment '性别,1为男，0为女',
member_hobby varchar(50) comment '爱好',
member_content text comment '自我介绍',
member_phone varchar(20) comment '联系方式',
member_images varchar(50) comment '个人图片',
member_addtime int(11) not null comment '注册时间',
member_updatetime int(11) not null comment "最近登录时间",
member_ip varchar(11) comment '会员登录的ip地址',
member_imgthumn varchar(100) comment '用户头像',
member_navlist text comment '用户的权限'
)CHARSET=utf8;
insert into gj_member values(null,'admin',20162343,md5('admin'),'1398599250@qq.com','张三','女','运动','反正就系好靓仔','1234567890',null,'1524835492','1524835492','127.0.0.1',null,null);

-- 论坛
create table gj_forum(
forum_id int not null primary key auto_increment comment "论坛id",
forum_content text comment '论坛内容',
forum_title text comment '论坛标题',
forum_images varchar(100) comment "论坛图片",
forum_laud int default '0' comment "论坛点赞",
forum_addtime int(11) comment '文章发布的时间,用来排序',
forum_visits int DEFAULT '0' comment '点赞的次数',
forum_skim int DEFAULT '0' comment '浏览的次数',
forum_show int default '0' comment '状态',
forum_memberid int comment "会员id"
)charset=utf8;
insert into gj_forum values(null,'好小子呀','论小伙子',null,0,'1524936492',0,0,0,4);
insert into gj_forum values(null,'哈哈','论哈哈',null,0,'1524936492',0,0,0,3);
insert into gj_forum values(null,'高新','高新',null,0,'1524936492',0,0,0,2);
insert into gj_forum values(null,'高坑','高坑',null,0,'1524936492',0,0,0,1);
insert into gj_forum values(null,'丑不要脸','臭不要脸',null,0,'1524936492',0,0,0,5);

-- 评论表
create table gj_discuss(
discuss_id int not null primary key auto_increment comment "评论id",
discuss_content text comment '评论内容',
discuss_addtime int(11) comment '发表时间',
discuss_updatetime int(11) comment '当前的时间',
discuss_laud int default '0' comment '评论点赞',
discuss_visits int default '0' comment '点赞次数',
discuss_forumid int comment '内容类型id',
discuss_memberid int comment '评论用户的id'
)charset=utf8;
insert into gj_discuss values(null,'确实是好小子','1524836492','1524836492','0',0,1,4);

-- 回复表
create table gj_reply(
reply_id int not null primary key auto_increment comment '回复id',
reply_discussid int comment '评论id',
reply_content text comment '回复内容',
reply_formid int comment '回复用户id',
reply_toid int comment '目标用户id',
reply_time int(11) comment '回复时间'
)charset=utf8;
insert into gj_reply values(null,1,'小样',4,5,'1524836492');
insert into gj_reply values(null,1,'小样',4,3,'1524836492');
insert into gj_reply values(null,1,'小样',2,3,'1524836492');
insert into gj_reply values(null,1,'小样',2,1,'1524836492');


-- 相册表
create table gj_album(
album_id int not null primary key auto_increment comment 'id',
album_name varchar(100) comment '相册名称',
album_content text comment '相册描述',
album_motif varchar(50) comment '相册主题，普通、校友',
album_addtime int(11) comment '创建的时间',
album_updatetime int(11) comment '更新的时间'
)charset=utf8;
insert into gj_album values(null,'高技','哈哈，有缘千里来相聚','校友','123456789','123456789');

-- 相片表
create table gj_album_photo(
photo_id int not null primary key auto_increment comment 'id',
photo_addtime int(11) comment '添加时间',
photo_updatetime int(11) comment '更新时间',
photo_name varchar(50) comment '相片名称，路径',
photo_laud int comment '点赞',
photo_albumid int comment '相册id'
)charset=utf8;
insert into gj_album__photo values();
-- 下载专区
create table gj_arrondi(
arrondi_id int not null primary key auto_increment comment 'id',
arrondi_type varchar(100) comment '资料类型',
arrondi_title varchar(100) comment '资料标题',
arrondi_content text comment '内容',
arrondi_time int(11) comment '添加时间',
arrondi_show int default '0' comment '是否显示',
arrondi_groom int default '0' comment '是否推荐',
arrondi_memberid int comment '会员id'
)charset=utf8;
insert into `gj_arrondi` values(null,'前端','前端页',null,'123456789','1','1','1');