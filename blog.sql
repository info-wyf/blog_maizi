/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50718
Source Host           : localhost:3306
Source Database       : blog_maizi

Target Server Type    : MYSQL
Target Server Version : 50718
File Encoding         : 65001

Date: 2017-05-18 13:22:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE "blog" (
  "id" int(11) NOT NULL AUTO_INCREMENT,
  "title" varchar(100) NOT NULL DEFAULT '',
  "blog_type" tinyint(4) NOT NULL DEFAULT '0',
  "show" tinyint(4) NOT NULL DEFAULT '0',
  "audit" tinyint(4) NOT NULL DEFAULT '0',
  "blog" varchar(20000) NOT NULL,
  "user_id" int(11) NOT NULL DEFAULT '0',
  "is_deleted" tinyint(4) NOT NULL DEFAULT '0',
  "create_time" int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY ("id"),
  KEY "user_id" ("user_id")
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES ('2', '我的第二篇博文', '1', '0', '0', '<p>哈哈啊哈</p><p>年桑暗黑破产ASOb按上次阿时候从as</p><p>撒曾表示从爱是从哦啊是hasba</p><p>擦世博噶搜爱搜女包</p>', '1', '0', '1464921864');
INSERT INTO `blog` VALUES ('3', '撒大声地是A', '2', '0', '0', '<p>ASD ASDASD SAASD</p>', '1', '0', '1464922364');
INSERT INTO `blog` VALUES ('4', 'ASDSA SA', '3', '1', '0', '<p>ASD ASASD SA<br/></p>', '1', '0', '1464922376');
INSERT INTO `blog` VALUES ('5', 'ASSCAS', '1', '0', '0', '<p>A ASA</p>', '1', '0', '1464922443');
INSERT INTO `blog` VALUES ('6', 'ASCSA', '1', '0', '0', '<p>ASCASCAS</p>', '1', '0', '1464922449');
INSERT INTO `blog` VALUES ('7', 'TEST', '1', '0', '0', '<p>ASASFSA&nbsp;</p>', '1', '0', '1464923203');
INSERT INTO `blog` VALUES ('8', 'ASDASD', '1', '0', '0', '<p>ADSADASSA</p>', '1', '0', '1464923207');
INSERT INTO `blog` VALUES ('9', 'AAA', '1', '0', '0', '<p>AAAAA</p>', '1', '0', '1464923212');
INSERT INTO `blog` VALUES ('10', 'SSSS', '1', '0', '0', '<p>SSSSS</p>', '1', '0', '1464923215');
INSERT INTO `blog` VALUES ('11', 'ASASFASFAS', '1', '0', '0', '<p>ASFASFASFA</p>', '1', '0', '1464923222');
INSERT INTO `blog` VALUES ('12', '这是one1的第一篇博文', '1', '0', '0', '', '2', '1', '1464923397');
INSERT INTO `blog` VALUES ('13', '我是AAS', '1', '0', '0', '<p>asfafasvs</p>', '2', '0', '1464923405');
INSERT INTO `blog` VALUES ('14', 'ASdasas', '1', '0', '0', '<p>sasdasdasds</p>', '2', '0', '1464923409');
INSERT INTO `blog` VALUES ('15', '这是我的第二次写博客', '3', '0', '0', '<p>写的还行</p>', '1', '0', '1464951827');
INSERT INTO `blog` VALUES ('16', '实打实大师的', '1', '0', '0', '<p>asdasd</p>', '1', '0', '1465020434');
INSERT INTO `blog` VALUES ('17', '121313', '1', '0', '0', '<p>qwewqe</p>', '2', '1', '1465020570');
INSERT INTO `blog` VALUES ('18', '这是two2的第一篇博文', '1', '0', '0', '<p>我是two2大家好</p>', '3', '0', '1465025149');
INSERT INTO `blog` VALUES ('19', 'adas', '1', '0', '0', '<p>asdasdas</p>', '3', '0', '1465025158');
INSERT INTO `blog` VALUES ('20', 'asdasd', '1', '0', '0', '<p>asdasdasda</p>', '3', '0', '1465025162');
INSERT INTO `blog` VALUES ('21', 'dfgdsf', '1', '0', '0', '<p>ehatae</p>', '3', '0', '1465025167');
INSERT INTO `blog` VALUES ('22', '试验图片', '1', '0', '0', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0015.gif\"/>按时打算阿达</p>', '3', '0', '1465090903');
INSERT INTO `blog` VALUES ('23', '是自己可见吗', '4', '1', '0', '<p>测试自己可见<br/></p>', '3', '0', '1465090995');
INSERT INTO `blog` VALUES ('25', '21321', '1', '0', '0', '<p>qweqwe</p>', '5', '0', '1465114903');
INSERT INTO `blog` VALUES ('26', '这是wyf3的第一篇帖子', '1', '0', '0', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 5px 0px; font-size: 14px; font-family: tahoma, arial, 宋体; line-height: 25.2px; white-space: normal; background-color: rgb(255, 255, 255);\">unset ($_SESSION[&#39;xxx&#39;]) 删除单个session，unset($_SESSION[&#39;xxx&#39;]) 用来unregister一个已注册的session变量。其作用和session_unregister()相同。session_unregister()在PHP5中不再使用，可将之打入冷宫。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 5px 0px; font-size: 14px; font-family: tahoma, arial, 宋体; line-height: 25.2px; white-space: normal; background-color: rgb(255, 255, 255);\">unset($_SESSION) 此函数千万不可使用，它会将全局变量$_SESSION销毁，而且还没有可行的办法将其恢复。用户也不再可以注册$_session变量。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 5px 0px; font-size: 14px; font-family: tahoma, arial, 宋体; line-height: 25.2px; white-space: normal; background-color: rgb(255, 255, 255);\">2、$_SESSION=array() 删除多个session</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 5px 0px; font-size: 14px; font-family: tahoma, arial, 宋体; line-height: 25.2px; white-space: normal; background-color: rgb(255, 255, 255);\">3、session_destroy()结束当前的会话，并清空会话中的所有资源。。该函数不会unset(释放)和当前session相关的全局变量(globalvariables),也不会删除客户端的session cookie.PHP默认的session是基于cookie的，如果要删除cookie的话，必须借助setcookie()函数。</p><p><br/></p>', '8', '0', '1465890307');
INSERT INTO `blog` VALUES ('27', '这是wyf3的第二篇帖子', '1', '0', '0', '<pre id=\"best-content-1160722602\" accuse=\"aContent\" class=\"best-text mb-10\" style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; font-family: arial, &quot;courier new&quot;, courier, 宋体, monospace, &quot;Microsoft YaHei&quot;; white-space: pre-wrap; word-wrap: break-word; font-size: 14px; color: rgb(51, 51, 51); line-height: 24px; background-color: rgb(243, 255, 236);\">楼下的都回答的啥乱七八糟的！！！？？？=&nbsp;=\r\n一般上传三千字才能审核，一般一天就好了，如果两天还不能找到你的小说，那么就是审核没有通过，不过貌似好像很少有不通过的了没关系，再等等吧，昨天我的还都是每章贴个“审”呢，今天一看全好了。你的应该也快审好了，放心放心&nbsp;&nbsp;&nbsp;这种刊物&nbsp;时间难说哈</pre><p><br/></p>', '8', '0', '1465892467');
INSERT INTO `blog` VALUES ('28', 'aaa', '1', '0', '0', '<p>a</p>', '8', '1', '1465892566');
INSERT INTO `blog` VALUES ('29', '阿萨德adas', '1', '0', '0', '<p>&nbsp;阿打算打算的撒</p>', '6', '0', '1466044019');
INSERT INTO `blog` VALUES ('30', '这是测试', '1', '0', '0', '<p>测试啊 ASOS还是是&nbsp;</p>', '6', '0', '1466044045');
INSERT INTO `blog` VALUES ('31', 'qqwe', '1', '0', '0', '<p>qweqweqwew</p>', '10', '0', '1466062104');
INSERT INTO `blog` VALUES ('32', 'assdas', '1', '0', '0', '<p>adsadasd</p>', '10', '0', '1466063101');
INSERT INTO `blog` VALUES ('33', '这是用来测试审核的', '1', '0', '0', '<p>成功吗？？？</p>', '10', '0', '1466063200');
INSERT INTO `blog` VALUES ('34', '这是用来测试审核的2222', '1', '0', '0', '<p>成功了吧！！！</p>', '10', '0', '1466063268');
INSERT INTO `blog` VALUES ('35', 'aa', '1', '0', '0', '<p>aaaaa</p>', '10', '1', '1466063372');
INSERT INTO `blog` VALUES ('36', 'asasdas', '1', '0', '0', '<p>asdasdasd</p>', '1', '1', '1466065826');
INSERT INTO `blog` VALUES ('37', '这是验证审核的1', '1', '0', '0', '<p>这是验证审核的1这是验证审核的1</p><p>这是验证审核的1</p><p>这是验证审核的1</p><p>这是验证审核的1</p><p>这是验证审核的1</p>', '1', '0', '1466066627');
INSERT INTO `blog` VALUES ('38', '这是用来测试审核的2', '1', '0', '0', '<p>伺服器我认识的个 个电饭锅电饭锅丰东股份</p>', '1', '0', '1466079256');
INSERT INTO `blog` VALUES ('39', '这是用来测试审核的3', '1', '0', '0', '<p>爱谁谁发顺丰对的嘎达发动过放大</p>', '1', '0', '1466079570');
INSERT INTO `blog` VALUES ('40', 'Asasd', '1', '0', '1', '<p>dasdasdasd</p>', '1', '0', '1466216975');
INSERT INTO `blog` VALUES ('41', 'Asasd', '1', '0', '1', '<p>dasdasdasd</p>', '1', '1', '1466217164');
INSERT INTO `blog` VALUES ('42', 'asas', '1', '0', '1', '<p>asasasa</p>', '1', '1', '1466217366');
INSERT INTO `blog` VALUES ('43', 'asas', '1', '0', '1', '<p>asasasa</p>', '1', '1', '1466217387');
INSERT INTO `blog` VALUES ('44', 'as das', '1', '0', '1', '<p>asdas a</p>', '1', '1', '1466217560');
INSERT INTO `blog` VALUES ('45', 'asdas ', '1', '0', '0', '<p>asdasdasd</p>', '1', '1', '1466217584');
INSERT INTO `blog` VALUES ('46', 'gdsdsg', '1', '0', '1', '<p>sdgsdgds</p>', '1', '1', '1466217653');
INSERT INTO `blog` VALUES ('47', ' 这是用来测试审核的4', '1', '0', '0', '<p>发案发时爱上</p>', '1', '1', '1466219498');
INSERT INTO `blog` VALUES ('48', '按时打算', '1', '0', '0', '<p>阿萨德阿打算按时打算</p>', '1', '0', '1466219506');
INSERT INTO `blog` VALUES ('49', '阿萨德asdasd', '1', '0', '0', '<p>&nbsp;啊飒飒的按时打算的</p>', '1', '1', '1466219512');
INSERT INTO `blog` VALUES ('50', '这是用来测试审核的5', '1', '0', '1', '<p>阿萨德啊飒飒大师大赛</p>', '1', '1', '1466219962');
INSERT INTO `blog` VALUES ('51', '这是用来测试审核的6', '1', '0', '0', '<p>按时打算打算打算</p>', '1', '0', '1466220026');
INSERT INTO `blog` VALUES ('52', '这是用来测试审核的7', '1', '0', '0', '<p>发阿斯蒂芬啊</p>', '1', '0', '1466220142');
INSERT INTO `blog` VALUES ('53', '阿萨德爱上', '1', '0', '0', '<p>阿萨德按时打算</p>', '1', '1', '1466220167');
INSERT INTO `blog` VALUES ('54', '这是用来测试审核的8', '1', '0', '1', '<p>按时打算爱上</p>', '1', '1', '1466220534');
INSERT INTO `blog` VALUES ('55', '这是用来测试审核的9', '1', '0', '0', '<p>发顺丰啊爱上</p>', '9', '1', '1466221354');
INSERT INTO `blog` VALUES ('56', '这是用来测试审核的11', '1', '0', '0', '<p>大赛啊飒飒的阿萨德爱上&nbsp;</p>', '9', '0', '1466221977');
INSERT INTO `blog` VALUES ('57', '这是2016年6月18日的审核1', '1', '0', '0', '<p>这是我第一次好好的写一篇帖子</p>', '10', '0', '1466222179');
INSERT INTO `blog` VALUES ('58', '测试删除不显示贴as', '1', '0', '1', '<p>的手势阿阿斯顿按时打算阿萨德的啊飒飒的按时打算</p>', '10', '1', '1466222373');
INSERT INTO `blog` VALUES ('59', '只是kerwin5用来测试的', '1', '0', '0', '<p>阿萨德阿萨德阿萨德</p>', '9', '0', '1466222617');
INSERT INTO `blog` VALUES ('60', '继续测试', '1', '0', '0', '<p>阿萨德阿萨德</p>', '9', '0', '1466222634');
INSERT INTO `blog` VALUES ('61', '我是kerwin4', '1', '0', '0', '<p>恩 啊</p><p><br/></p>', '10', '0', '1466223826');
INSERT INTO `blog` VALUES ('62', '这是wyf4写的帖子', '1', '0', '0', '<p>去玩儿推欧赔</p>', '10', '0', '1466223858');
INSERT INTO `blog` VALUES ('63', '能分页吗啊', '1', '0', '0', '<p>&nbsp;&nbsp;&nbsp;&nbsp; 轻松的<br/></p>', '7', '0', '1466224012');
INSERT INTO `blog` VALUES ('64', '呢个杀毒阿萨德阿萨斯', '1', '0', '1', '<p>阿萨德爱上爱上啊</p>', '7', '1', '1466224021');
INSERT INTO `blog` VALUES ('65', 'ASD阿萨德啊', '1', '0', '0', '<p>阿萨德阿萨德撒打</p>', '7', '0', '1466224029');
INSERT INTO `blog` VALUES ('66', '龙应台', '1', '0', '1', '<p>1952年生于台湾，自小在台湾<a target=\"_blank\" href=\"http://baike.baidu.com/view/358404.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">苗栗</a><a target=\"_blank\" href=\"http://baike.baidu.com/view/10614183.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">苑里</a>长大。<span style=\"font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; margin-left: 2px; color: rgb(51, 102, 204); cursor: default; padding: 0px 2px;\">[7]</span><a style=\"color: rgb(19, 110, 194); position: relative; top: -50px; font-size: 0px; line-height: 0;\" name=\"ref_[7]_49270\"></a>&nbsp;</p><p>1974年毕业于国立成功大学外文系后，赴美国求学，后获<a target=\"_blank\" href=\"http://baike.baidu.com/view/1033681.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">堪萨斯州立大学</a>英美文学博士。毕业后，曾任教于<a target=\"_blank\" href=\"http://baike.baidu.com/view/1747071.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">纽约市立大学</a>、梅西学院、<a target=\"_blank\" href=\"http://baike.baidu.com/view/292516.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">国立中央大学</a>英文系、<a target=\"_blank\" href=\"http://baike.baidu.com/view/164609.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">淡江大学</a>、德国<a target=\"_blank\" href=\"http://baike.baidu.com/view/47935.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">海德堡大学</a>等。<span style=\"font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; margin-left: 2px; color: rgb(51, 102, 204); cursor: default; padding: 0px 2px;\">[7]</span><a style=\"color: rgb(19, 110, 194); position: relative; top: -50px; font-size: 0px; line-height: 0;\" name=\"ref_[7]_49270\"></a>&nbsp;</p><p><a class=\"image-link\" nslog-type=\"9317\" href=\"http://baike.baidu.com/pic/%E9%BE%99%E5%BA%94%E5%8F%B0/897735/0/cc506c8b67102b2bc8fc7a1e?fr=lemma&ct=single\" target=\"_blank\" title=\"龙应台\" style=\"color: rgb(19, 110, 194); text-decoration: none; display: block; width: 220px; height: 179px;\"><img class=\"\" src=\"/ueditor/php/upload/image/20160620/1466384776393439.jpg\" alt=\"龙应台\" style=\"border: 0px; display: block; margin: 0px auto; width: 220px; height: 179px;\"/></a><span class=\"description\" style=\"display: block; color: rgb(85, 85, 85); font-size: 12px; text-indent: 0px; font-family: 宋体; word-wrap: break-word; word-break: break-all; line-height: 15px; padding: 8px 7px; min-height: 12px; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(224, 224, 224);\">龙应台</span></p><p>1982年获得<a target=\"_blank\" href=\"http://baike.baidu.com/view/1033681.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">堪萨斯州立大学</a>英文系博士学位后，一度在<a target=\"_blank\" href=\"http://baike.baidu.com/view/1747071.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">纽约市立大学</a>及<a target=\"_blank\" href=\"http://baike.baidu.com/view/141988.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">梅西大学</a>外文系任副教授。<span style=\"font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; margin-left: 2px; color: rgb(51, 102, 204); cursor: default; padding: 0px 2px;\">[7]</span><a style=\"color: rgb(19, 110, 194); position: relative; top: -50px; font-size: 0px; line-height: 0;\" name=\"ref_[7]_49270\"></a>&nbsp;</p><p>1983年回台湾，先在“中央大学”外文系任副教授，后去<a target=\"_blank\" href=\"http://baike.baidu.com/view/164609.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">淡江大学</a>外国文学所任研究员。</p><p>1984年，龙于<a target=\"_blank\" href=\"http://baike.baidu.com/view/39029.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">中国时报</a>撰写“<a target=\"_blank\" href=\"http://baike.baidu.com/view/770603.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">野火集</a>”专栏，引起热烈回响；隔年出版，一上市即告罄，一个月内印刷24次，印行100版，销售20万册，<a target=\"_blank\" href=\"http://baike.baidu.com/view/517178.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">风靡</a>台湾，是1980年代对台湾民主发展极具影响的一本书。<a target=\"_blank\" href=\"http://baike.baidu.com/view/5363.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">余光中</a>称其为“龙卷风”。同年出版《<a target=\"_blank\" href=\"http://baike.baidu.com/view/11120329.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">龙应台评小说</a>》震动台湾文坛。而在台湾《<a target=\"_blank\" href=\"http://baike.baidu.com/view/39029.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">中国时报</a>》等报刊发表大量杂文、小说评论，掀起轩然大波，成为知名度极高的报纸专栏作家；她的杂文<a target=\"_blank\" href=\"http://baike.baidu.com/view/560867.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">针砭时弊</a>，切中民意。在<a target=\"_blank\" href=\"http://baike.baidu.com/view/420857.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">海峡两岸</a>及海外华人界都产生了一定的影响。<span style=\"font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; margin-left: 2px; color: rgb(51, 102, 204); cursor: default; padding: 0px 2px;\">[2]</span><a style=\"color: rgb(19, 110, 194); position: relative; top: -50px; font-size: 0px; line-height: 0;\" name=\"ref_[2]_49270\"></a>&nbsp;</p><p>1986年至1988年龙应台因家庭因素旅居<a target=\"_blank\" href=\"http://baike.baidu.com/view/2773.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">瑞士</a>两年，专心育儿。<span style=\"font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; margin-left: 2px; color: rgb(51, 102, 204); cursor: default; padding: 0px 2px;\">[2]</span><a style=\"color: rgb(19, 110, 194); position: relative; top: -50px; font-size: 0px; line-height: 0;\" name=\"ref_[2]_49270\"></a>&nbsp;</p><p>1988年迁居德国，在<a target=\"_blank\" href=\"http://baike.baidu.com/view/191929.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">法兰克福大学</a>任教授，兼台湾《<a target=\"_blank\" href=\"http://baike.baidu.com/view/39029.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">中国时报</a>》驻法国、瑞士特派员。还在<a target=\"_blank\" href=\"http://baike.baidu.com/view/47935.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">海德堡大学</a>汉学系任教，讲授台湾文学课程，并为学生导演戏剧。同年，北京作家出版社出版《龙应台评小说》，<a target=\"_blank\" href=\"http://baike.baidu.com/view/162164.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">湖南文艺出版社</a>出版《野火集》。<span style=\"font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; margin-left: 2px; color: rgb(51, 102, 204); cursor: default; padding: 0px 2px;\">[8]</span><a style=\"color: rgb(19, 110, 194); position: relative; top: -50px; font-size: 0px; line-height: 0;\" name=\"ref_[8]_49270\"></a>&nbsp;</p><p>1988年底，作为第一个台湾女记者，应苏联政府邀请，赴莫斯科访问十天。</p><p>1994年，北京三联书店出版《<a target=\"_blank\" href=\"http://baike.baidu.com/view/8059380.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">人在欧洲</a>》。</p><p>1995年，湖南文艺出版社出版《<a target=\"_blank\" href=\"http://baike.baidu.com/view/5551893.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">孩子，你慢慢来</a>》；自这一年起，龙应台在上海《<a target=\"_blank\" href=\"http://baike.baidu.com/view/58782.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">文汇报</a>》“笔会”副刊写“龙应台专栏”，与大陆读者及文化人的接触，使她开始更认真地关心大陆的文化发展。</p><p>1996年，<a target=\"_blank\" href=\"http://baike.baidu.com/view/1032671.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">上海文艺出版社</a>出版《龙应台自选集》5种。1996年以后龙应台不断在欧洲报刊上发表作品，对欧洲读者呈现一个中国知识分子的视野和见解，颇受注目。</p><p>1997年，湖南文艺出版社出版《魂牵》。<a class=\"lemma-album layout-right nslog:10000206\" title=\"龙应台\" href=\"http://baike.baidu.com/pic/%E9%BE%99%E5%BA%94%E5%8F%B0/897735/15021943/4075890a440b085095ca6bb1?fr=lemma&ct=cover\" target=\"_blank\" nslog-type=\"10000206\" style=\"color: rgb(19, 110, 194); text-decoration: none; display: block; width: 167px; border-bottom-width: 0px; margin: 10px 0px; position: relative; float: right; clear: right;\"></a></p><p><a class=\"lemma-album layout-right nslog:10000206\" title=\"龙应台\" href=\"http://baike.baidu.com/pic/%E9%BE%99%E5%BA%94%E5%8F%B0/897735/15021943/4075890a440b085095ca6bb1?fr=lemma&ct=cover\" target=\"_blank\" nslog-type=\"10000206\" style=\"color: rgb(19, 110, 194); text-decoration: none; display: block; width: 167px; border-bottom-width: 0px; margin: 10px 0px; position: relative; float: right; clear: right;\"><img class=\"picture\" alt=\"龙应台\" src=\"/ueditor/php/upload/image/20160620/1466384777613073.jpg\" style=\"border: 0px; width: 165px; height: 220px; position: absolute; display: block;\"/></a></p><p><a class=\"lemma-album layout-right nslog:10000206\" title=\"龙应台\" href=\"http://baike.baidu.com/pic/%E9%BE%99%E5%BA%94%E5%8F%B0/897735/15021943/4075890a440b085095ca6bb1?fr=lemma&ct=cover\" target=\"_blank\" nslog-type=\"10000206\" style=\"color: rgb(19, 110, 194); text-decoration: none; display: block; width: 167px; border-bottom-width: 0px; margin: 10px 0px; position: relative; float: right; clear: right;\">龙应台&nbsp;<span class=\"number\" style=\"display: inline; color: gray;\">(8张)</span></a></p><p></p><p>1998年，她的三部书《<a target=\"_blank\" href=\"http://baike.baidu.com/view/1731317.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">啊，上海男人</a>》、《<a target=\"_blank\" href=\"http://baike.baidu.com/view/6912747.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">这个动荡的世界</a>》、《故乡异乡》分别在上海、汕头、陕西出版，再次在大陆文坛和书市被称为“龙卷风”。</p><p>1999年，应台北市长马英九邀请，龙应台出任<a target=\"_blank\" href=\"http://baike.baidu.com/view/49323.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">台北市</a>首任文化局局长，期间推动本土文化及保护树木等政策措施。</p><p>1999-2003年，当时的台北市长<a target=\"_blank\" href=\"http://baike.baidu.com/view/2723.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">马英九</a>亲自前往德国<a target=\"_blank\" href=\"http://baike.baidu.com/view/24690.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">法兰克福</a>，龙应台受邀出任台北市的文化局局长，为期四年，龙遂从德返台，任期内推动本土文化及保护树木等政策措施。</p><p>2003年8月，赴香港，第一年在<a target=\"_blank\" href=\"http://baike.baidu.com/view/255258.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">香港城市大学</a>，其后任<a target=\"_blank\" href=\"http://baike.baidu.com/view/8891.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">香港大学</a>访问教授。先后任香港城市大学及香港大学的客座教授，香港大学担任杰出人文学者（香港大学第一位<a target=\"_blank\" href=\"http://baike.baidu.com/view/2590357.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">终身教授</a>）、<a target=\"_blank\" href=\"http://baike.baidu.com/view/1233432.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">新竹清华大学</a>讲座教授。此外，龙也积极参与到关于香港公众议题的辩论中。在政制改革、文化保育和国际交流等话题上，都不乏龙的声音，其专门讨论香港问题的《龙应台的香港笔记》，在香港与新加坡的畅销榜上停留长达半年。</p><p>2005年7月，在<a target=\"_blank\" href=\"http://baike.baidu.com/view/2884225.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">大成集团</a>、普讯融悟文教基金会、诚品股份有限公司、<a target=\"_blank\" href=\"http://baike.baidu.com/view/3350172.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">蒋震</a>工业慈善基金支持下，与一群主张社会参与的文化人及企业家共同创成立<a target=\"_blank\" href=\"http://baike.baidu.com/view/7767745.htm\" style=\"color: rgb(19, 110, 194); text-decoration: none;\">龙应台文化基金会</a>。<span style=\"font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; margin-left: 2px; color: rgb(51, 102, 204); cursor: default; padding: 0px 2px;\">[2]</span><a style=\"color: rgb(19, 110, 194); position: relative; top: -50px; font-size: 0px; line-height: 0;\" name=\"ref_[2]_49270\"></a>&nbsp;</p><p><br/></p>', '6', '0', '1466384780');
INSERT INTO `blog` VALUES ('67', '不兼容php5.4,产生\"Illegal string offset\"的错误', '1', '0', '1', '<p><span style=\"color: rgb(68, 68, 68); font-family: Tahoma, Helvetica, SimSun, sans-serif; font-size: 14px; line-height: 21px; background-color: rgb(255, 255, 255);\">每次编辑和新增内容时均会产生&quot;Illegal string offset &#39;enablehits&#39; | phpcms\\modules\\poster\\index.php | 104&quot;的错误,网上查询是不兼容php5.4版本导致,希望官方尽快修复兼容php5.4版本</span></p>', '9', '0', '1466386348');
INSERT INTO `blog` VALUES ('68', '我是five5', '1', '0', '0', '<p>这是我第一次发一篇帖子</p><p><span style=\"font-size: 18px;\">这是我第一次发一篇帖子</span></p><p><span style=\"font-size: 20px;\">这是我第一次发一篇帖子</span></p><p><span style=\"font-size: 24px;\">这是我第一次发一篇帖子</span></p><p><span style=\"font-size: 36px;\">这是我第一次发一篇帖子</span></p><p><span style=\"font-size: 36px; color: rgb(147, 137, 83);\">这是我第一次发一篇帖子</span></p><p><span style=\"font-size: 36px; color: rgb(255, 0, 0);\">这是我第一次发一篇帖子</span></p><p><span style=\"font-size: 36px; color: rgb(0, 176, 80);\">这是我第一次发一篇帖子</span></p><p><span style=\"font-size: 18px;\">这是我第一次发一篇帖子</span></p>', '11', '0', '1466411782');
INSERT INTO `blog` VALUES ('69', '这是用来测试审核的11', '1', '0', '0', '<p>啊啊啊</p>', '8', '0', '1466413062');
INSERT INTO `blog` VALUES ('70', '我是wyf3', '0', '0', '0', '<p>很高兴能发贴</p>', '8', '1', '1466476166');
INSERT INTO `blog` VALUES ('71', '我是wyf3', '1', '0', '0', '<p>啊啊啊啊啊的</p>', '8', '0', '1466477521');
INSERT INTO `blog` VALUES ('72', '现在是6月21日13:56', '1', '0', '0', '<p>我刚刚睡醒，现在可以编辑了阿萨德爱上</p>', '8', '0', '1466488612');
INSERT INTO `blog` VALUES ('73', '现在是6月21日14:21', '1', '0', '0', '<p>我去接了一杯水个个个S撒是AAS</p>', '8', '0', '1466490082');
INSERT INTO `blog` VALUES ('74', '爱擦拭', '1', '0', '1', '<p>阿萨德</p>', '8', '0', '1466490387');
INSERT INTO `blog` VALUES ('75', 'php查询数据库后，显示出来的表格具有填写和更改功能，而且点击发送按钮后，更新数据库中的数据', '1', '0', '1', '<pre id=\"best-content-1615662699\" accuse=\"aContent\" class=\"best-text mb-10\" style=\"margin-top: 0px; margin-bottom: 10px; padding: 0px; font-family: arial, &quot;courier new&quot;, courier, 宋体, monospace, &quot;Microsoft YaHei&quot;; white-space: pre-wrap; word-wrap: break-word; font-size: 14px; color: rgb(51, 51, 51); line-height: 24px; background-color: rgb(243, 255, 236);\">一个简单的方法，把每一行的数据放在一个form表单里面，action链接为update.php?id=,发送按钮为submit，每行的数据都放在input表单里面，这样你可以直接在里面修改值，点发送获取id用update语句更新每行的数据。\r\n当然，把数据都放在表单input&nbsp;text里面不好看，可以用一个编辑按钮使用javascript控制</pre><p><br/></p>', '10', '0', '1466492612');
INSERT INTO `blog` VALUES ('76', 'AS D', '1', '0', '1', '<p>ASD ASDS</p>', '1', '0', '1467616182');
INSERT INTO `blog` VALUES ('77', '审核', '1', '0', '0', '<p>能显示audit吗</p>', '1', '0', '1468902956');
INSERT INTO `blog` VALUES ('78', 'asd', '1', '0', '1', '<p>qw</p>', '1', '0', '1468904062');
INSERT INTO `blog` VALUES ('79', 'ASd ', '1', '0', '1', '<p>asd asda</p>', '1', '0', '1470125412');
INSERT INTO `blog` VALUES ('80', 'das ds', '1', '0', '0', '<p>asd asd</p>', '1', '1', '1470125542');
INSERT INTO `blog` VALUES ('81', '这是更新服务器后的第一篇博文', '1', '0', '1', '<p>&nbsp;&nbsp;&nbsp;&nbsp;将服务器更新后真不容易。。有各种bug需要调整，mysql，apache,php各种设置，晕。<br/></p>', '1', '0', '1495014446');
INSERT INTO `blog` VALUES ('82', '我是one1', '1', '1', '1', '<p>这篇文章只有自己可见？</p>', '2', '0', '1495014490');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE "comment" (
  "id" int(11) NOT NULL AUTO_INCREMENT,
  "user_id" int(11) NOT NULL DEFAULT '0',
  "blog_id" int(11) NOT NULL DEFAULT '0',
  "comment" varchar(500) NOT NULL DEFAULT '',
  "create_time" int(11) NOT NULL DEFAULT '0',
  "is_deleted" tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY ("id"),
  KEY "user_id" ("user_id","blog_id")
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '2', '10', '你好', '1464923433', '0');
INSERT INTO `comment` VALUES ('2', '2', '10', '我是one1', '1464923445', '0');
INSERT INTO `comment` VALUES ('3', '1', '14', '你好，我是kerwin_info', '1464999780', '0');
INSERT INTO `comment` VALUES ('4', '2', '15', '你好kerwin_info，我是one1', '1465009070', '0');
INSERT INTO `comment` VALUES ('5', '2', '15', '你好啊', '1465009079', '0');
INSERT INTO `comment` VALUES ('6', '2', '11', 'sd ', '1465009209', '0');
INSERT INTO `comment` VALUES ('7', '1', '15', '你好，one1', '1465009524', '0');
INSERT INTO `comment` VALUES ('8', '1', '15', '很高兴你能评论我', '1465009536', '0');
INSERT INTO `comment` VALUES ('9', '3', '21', 'asd ', '1465025175', '0');
INSERT INTO `comment` VALUES ('10', '3', '16', 'qwwqq', '1465090848', '0');
INSERT INTO `comment` VALUES ('11', '3', '22', '额', '1465090917', '0');
INSERT INTO `comment` VALUES ('12', '3', '24', 'dxkxtxt', '1465091385', '0');
INSERT INTO `comment` VALUES ('13', '3', '12', 'seiekks', '1465091513', '0');
INSERT INTO `comment` VALUES ('14', '5', '22', 'asd ', '1465114947', '0');
INSERT INTO `comment` VALUES ('15', '1', '25', '你好A ', '1465887446', '0');
INSERT INTO `comment` VALUES ('16', '6', '30', '阿萨德ad', '1466044051', '0');
INSERT INTO `comment` VALUES ('17', '10', '34', 'aa', '1466063378', '0');
INSERT INTO `comment` VALUES ('18', '10', '35', 'aascascas', '1466063388', '0');
INSERT INTO `comment` VALUES ('19', '9', '60', 'asdsa', '1466386475', '0');
INSERT INTO `comment` VALUES ('20', '8', '68', '你好啊，five5，我是info3，我有权限5，你是权限0', '1466411920', '0');
INSERT INTO `comment` VALUES ('21', '8', '71', 'asd', '1466482168', '0');
INSERT INTO `comment` VALUES ('22', '8', '71', '是的', '1466482792', '0');
INSERT INTO `comment` VALUES ('23', '8', '72', 'SAD AS', '1466489478', '0');
INSERT INTO `comment` VALUES ('24', '8', '73', '杀毒阿萨德AAS', '1466490278', '0');
INSERT INTO `comment` VALUES ('25', '1', '73', 'sda ', '1467614741', '0');
INSERT INTO `comment` VALUES ('26', '1', '73', 'sda ', '1467614742', '0');
INSERT INTO `comment` VALUES ('27', '2', '77', 'yykd ', '1470300887', '0');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE "user" (
  "user_id" int(11) NOT NULL AUTO_INCREMENT,
  "user_name" varchar(20) NOT NULL DEFAULT '',
  "nick_name" varchar(50) NOT NULL DEFAULT '',
  "password" varchar(32) NOT NULL DEFAULT '',
  "tips" varchar(200) NOT NULL DEFAULT '',
  "create_time" int(11) NOT NULL DEFAULT '0',
  "is_deleted" tinyint(4) NOT NULL DEFAULT '0',
  "priority" tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY ("user_id"),
  KEY "user_id" ("user_id")
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'kerwin', 'info', '202cb962ac59075b964b07152d234b70', '我是wyf', '1464921806', '0', '5');
INSERT INTO `user` VALUES ('2', 'one1', 'i\'m one', '202cb962ac59075b964b07152d234b70', '我是one', '1464923352', '0', '0');
INSERT INTO `user` VALUES ('3', 'two2', 'i\'m two', '202cb962ac59075b964b07152d234b70', '我是two2', '1465024905', '0', '0');
INSERT INTO `user` VALUES ('4', 'three3', 'i\'m three', '202cb962ac59075b964b07152d234b70', 'i\'m three,dajiahao', '1465093455', '0', '0');
INSERT INTO `user` VALUES ('5', 'four4', 'i\'m four', '202cb962ac59075b964b07152d234b70', '我是four4', '1465114877', '0', '0');
INSERT INTO `user` VALUES ('6', 'kerwin1', 'info1', '202cb962ac59075b964b07152d234b70', '我是wyf1', '1465717233', '0', '5');
INSERT INTO `user` VALUES ('7', 'kerwin2', 'info2', '202cb962ac59075b964b07152d234b70', '我是wyf2', '1465717400', '0', '5');
INSERT INTO `user` VALUES ('8', 'kerwin3', 'info3', '202cb962ac59075b964b07152d234b70', '我是wyf3', '1465866672', '0', '5');
INSERT INTO `user` VALUES ('9', 'kerwin5', 'wyf5', '202cb962ac59075b964b07152d234b70', '我是info5', '1466041072', '0', '5');
INSERT INTO `user` VALUES ('10', 'kerwin4', 'wyf4', '202cb962ac59075b964b07152d234b70', '我是info4', '1466041141', '0', '5');
INSERT INTO `user` VALUES ('11', 'five5', 'i\'m five', '202cb962ac59075b964b07152d234b70', '我是five5，很高兴见到你们', '1466411495', '0', '0');
