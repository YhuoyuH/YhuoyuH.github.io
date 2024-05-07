-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2024-04-05 15:21:14
-- 服务器版本： 5.5.62-log
-- PHP 版本： 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `1`
--

-- --------------------------------------------------------

--
-- 表的结构 `zyyo_data`
--

CREATE TABLE `zyyo_data` (
  `id` int(1) NOT NULL,
  `user` varchar(250) NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `sitename` varchar(50) NOT NULL,
  `keywords` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `ico` text NOT NULL,
  `logo` text NOT NULL,
  `beian` varchar(20) NOT NULL,
  `title1` text NOT NULL,
  `title2` text NOT NULL,
  `des` mediumtext NOT NULL,
  `theme` int(11) NOT NULL,
  `header` text NOT NULL,
  `footer` text NOT NULL,
  `tag` text NOT NULL,
  `time` text NOT NULL,
  `infor` text NOT NULL,
  `indexlogo` int(11) NOT NULL,
  `leftzyyo` int(11) NOT NULL,
  `skill` int(11) NOT NULL,
  `maxwidth` text NOT NULL,
  `tcs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `zyyo_data`
--

INSERT INTO `zyyo_data` (`id`, `user`, `pwd`, `sitename`, `keywords`, `description`, `ico`, `logo`, `beian`, `title1`, `title2`, `des`, `theme`, `header`, `footer`, `tag`, `time`, `infor`, `indexlogo`, `leftzyyo`, `skill`, `maxwidth`, `tcs`) VALUES
(1, 'admin', '123456', 'Zyyo', 'zyyo,张扬YO,ZYYO,张扬主页,ZYYO引导页,zhangyang', '整天半吊子和不学无术的坏孩子,梦想成为庄稼地里的读书人.....', './static/img/favicon.ico', './static/img/logo.png', '豫ICP备2023015852号-1', 'Hello I\' m                                                                                                                        ', 'Zyyo', '👦 {Full Stack} Developer\r\n📝 The only way to do [great] is to [love] what you do.                                                                                                                                                                           ', 5, '                                                                                          ', '<script charset=\"UTF-8\" id=\"LA_COLLECT\" src=\"//sdk.51.la/js-sdk-pro.min.js\"></script> <script>LA.init({ id: \"KFqltKSkJgQTGD9l\", ck: \"KFqltKSkJgQTGD9l\" })</script>                                                                                                ', '网瘾\r\n小学生\r\n大一\r\n网页\r\nlinux\r\n跑者\r\n前端\r\n骑行                                                                                                                        ', '2024.1|敬请期待\r\n2023.8|ICP备案成功\r\n2023.3|注册域名zyyo.net\r\n2021.2|出来后洗心革面\r\n...|...\r\n2018.1|搭建第一个网站', '<svg t=\"1705773709627\" class=\"icon\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" p-id=\"1478\" ><path d=\"M512 249.976471c-99.388235 0-180.705882 81.317647-180.705882 180.705882s81.317647 180.705882 180.705882 180.705882 180.705882-81.317647 180.705882-180.705882-81.317647-180.705882-180.705882-180.705882z m0 301.17647c-66.258824 0-120.470588-54.211765-120.470588-120.470588s54.211765-120.470588 120.470588-120.470588 120.470588 54.211765 120.470588 120.470588-54.211765 120.470588-120.470588 120.470588z\" p-id=\"1479\"></path><path d=\"M512 39.152941c-216.847059 0-391.529412 174.682353-391.529412 391.529412 0 349.364706 391.529412 572.235294 391.529412 572.235294s391.529412-222.870588 391.529412-572.235294c0-216.847059-174.682353-391.529412-391.529412-391.529412z m0 891.482353C424.658824 873.411765 180.705882 686.682353 180.705882 430.682353c0-183.717647 147.576471-331.294118 331.294118-331.294118s331.294118 147.576471 331.294118 331.294118c0 256-243.952941 442.729412-331.294118 499.952941z\" p-id=\"1480\"></path></svg>|China-Henan\r\n<svg t=\"1705773906032\" class=\"icon\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" p-id=\"2474\" ><path d=\"M729.6 234.666667H294.4V157.866667a51.2 51.2 0 0 1 51.2-51.2h332.8a51.2 51.2 0 0 1 51.2 51.2v76.8z m179.2 51.2a51.2 51.2 0 0 1 51.2 51.2v512a51.2 51.2 0 0 1-51.2 51.2H115.2a51.2 51.2 0 0 1-51.2-51.2v-512a51.2 51.2 0 0 1 51.2-51.2h793.557333z m-768 172.032c0 16.384 13.312 29.696 29.696 29.696h683.008a29.696 29.696 0 1 0 0-59.392H170.410667a29.696 29.696 0 0 0-29.696 29.696z m252.416 118.784c0 16.384 13.312 29.696 29.696 29.696h178.176a29.696 29.696 0 1 0 0-59.392H422.912a29.738667 29.738667 0 0 0-29.696 29.696z\"  p-id=\"2475\"></path></svg>|Sias                              ', 0, 0, 0, '1100px', 0);

-- --------------------------------------------------------

--
-- 表的结构 `zyyo_icon`
--

CREATE TABLE `zyyo_icon` (
  `id` int(11) NOT NULL,
  `tip` varchar(30) NOT NULL,
  `icon` text NOT NULL,
  `href` text NOT NULL,
  `onclick` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `zyyo_icon`
--

INSERT INTO `zyyo_icon` (`id`, `tip`, `icon`, `href`, `onclick`) VALUES
(1, 'Github', '<svg t=\"1704870335945\" class=\"icon\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" p-id=\"2487\">\r\n                            <path d=\"M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9 23.5 23.2 38.1 55.4 38.1 91v112.5c0.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z\" p-id=\"2488\"></path>\r\n                        </svg>', 'https://github.com/ZYYO666', ''),
(2, 'Mail', '<svg t=\"1704870588438\" class=\"icon\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" p-id=\"3174\">\r\n                            <path d=\"M926.47619 355.644952V780.190476a73.142857 73.142857 0 0 1-73.142857 73.142857H170.666667a73.142857 73.142857 0 0 1-73.142857-73.142857V355.644952l304.103619 257.828572a170.666667 170.666667 0 0 0 220.745142 0L926.47619 355.644952zM853.333333 170.666667a74.044952 74.044952 0 0 1 26.087619 4.778666 72.704 72.704 0 0 1 30.622477 22.186667 73.508571 73.508571 0 0 1 10.678857 17.67619c3.169524 7.509333 5.12 15.652571 5.607619 24.210286L926.47619 243.809524v24.380952L559.469714 581.241905a73.142857 73.142857 0 0 1-91.306666 2.901333l-3.632762-2.925714L97.52381 268.190476v-24.380952a72.899048 72.899048 0 0 1 40.155428-65.292191A72.97219 72.97219 0 0 1 170.666667 170.666667h682.666666z\" p-id=\"3175\"></path>\r\n                        </svg>', 'mailto:i@zyyo.net', ''),
(3, 'wechat', '<svg t=\"1705322844467\" class=\"icon\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" p-id=\"2925\">\r\n                            <path d=\"M816.551274 248.167103C697.80273 131.500986 553.294498 97.66946 394.437467 140.52757 114.716718 215.994356 28.163433 506.98887 169.479973 696.646394c6.853082 9.198499 8.147564 26.164916 5.545296 38.09769-7.601118 34.868135-18.714224 68.958558-28.000728 103.474676-4.965082 18.455327-7.90504 37.21253 8.632611 52.019771 17.777899 15.921621 36.82572 12.654204 56.258305 2.777253 31.879058-16.200984 64.335261-31.314193 95.763041-48.336892 20.469194-11.086499 38.847773-11.658528 61.942771-5.240351 46.063105 12.799514 93.717452 19.872606 117.992321 24.74866 144.317896-2.603291 249.610988-41.736567 333.958024-129.489166C955.8826 594.966597 954.903296 384.090818 816.551274 248.167103zM763.498988 681.878039C658.864906 785.728268 531.49603 810.562886 393.782551 764.371868c-45.408189-15.229866-82.686211-19.207457-122.088616 7.493671-3.576455 2.423189-8.448416 2.934842-26.51284 8.852622 36.271088-62.917982 9.41851-102.273315-21.181415-146.894581-67.886133-98.989525-54.03773-226.624461 26.78197-318.740438 132.026966-150.480246 390.603139-150.382009 522.634198 0.196475C869.144096 424.455131 867.098507 579.054185 763.498988 681.878039z\" p-id=\"2926\"></path>\r\n                            <path d=\"M640.32976 377.432165c-26.245757-0.961908-47.457872 18.594497-48.955992 45.13906-1.532913 27.1565 16.636912 48.230468 43.304272 50.227961 26.571169 1.989307 48.850591-16.263405 51.568493-42.247196C689.112814 403.14478 667.75846 378.439098 640.32976 377.432165z\" p-id=\"2927\"></path>\r\n                            <path d=\"M385.221572 377.38714c-27.757181 0.205685-48.88743 23.684422-46.821375 52.023864 1.940189 26.610054 23.154349 44.910862 50.212612 43.317575 26.505677-1.560542 46.149063-22.886243 45.152363-49.02046C432.798147 398.345474 410.636405 377.198851 385.221572 377.38714z\" p-id=\"2928\"></path>\r\n                        </svg>', 'javascript:void(0)', 'pop(\'./static/img/wx.jpg\')'),
(4, '赞助', '<svg t=\"1705247464964\" class=\"icon\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" p-id=\"4987\">\r\n                            <path d=\"M995.575172 725.451034c-12.358621-26.835862-38.488276-64.794483-92.689655-94.27862-62.146207-33.721379-136.297931-40.96-208.860689-20.303448l-99.928276 28.424827-279.304828-126.057931H22.775172v489.401379h509.704828l432.375172-195.266207c15.006897-6.708966 26.835862-19.42069 32.662069-34.957241 5.649655-15.36 4.943448-31.955862-1.942069-46.962759z m-482.162758 188.910345H111.051034V601.688276h184.673104l166.664828 75.387586-3.354483 0.882759h-170.372414v88.275862H471.393103l246.819311-70.267586c49.434483-14.124138 101.517241-9.357241 142.653793 12.888275 18.184828 9.886897 30.72 20.833103 39.371034 30.896552l-386.824827 174.609655z\" p-id=\"4988\"></path>\r\n                            <path d=\"M695.437241 163.486897l58.615173-142.30069h-397.24138l66.736552 143.36c-121.82069 53.142069-207.095172 174.433103-207.095172 315.674483 0 28.601379 3.531034 57.202759 10.593103 84.744827l85.627586-21.715862c-5.12-20.48-7.768276-41.666207-7.768275-63.028965 0-141.241379 114.758621-256 256-256s256 114.758621 256 256c0 51.023448-14.830345 100.104828-43.078621 142.300689l73.268965 49.08138c37.958621-56.673103 58.085517-122.88 58.085518-191.382069-0.176552-141.947586-86.686897-264.121379-209.743449-316.733793zM467.508966 91.983448h180.965517l-21.009655 50.846897a348.16 348.16 0 0 0-66.913104-6.708966c-23.834483 0-46.962759 2.471724-69.384827 7.062069l-23.657931-51.2z\" p-id=\"4989\"></path>\r\n                            <path d=\"M683.431724 427.431724v-70.62069h-38.311724l30.190345-30.190344-49.964138-49.964138-62.49931 62.49931h-6.002759L494.344828 276.656552l-49.787587 49.964138 30.013793 30.190344h-38.311724v70.62069h88.275862v35.310345h-88.275862v70.62069h88.275862v52.965517h70.62069v-52.965517h88.275862v-70.62069h-88.275862v-35.310345z\" p-id=\"4990\"></path>\r\n                        </svg>', 'javascript:void(0)', 'pop(\'./static/img/wxzsm.jpg\')');

-- --------------------------------------------------------

--
-- 表的结构 `zyyo_item`
--

CREATE TABLE `zyyo_item` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `des` text NOT NULL,
  `icon` text NOT NULL,
  `project` text NOT NULL,
  `href` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `zyyo_item`
--

INSERT INTO `zyyo_item` (`id`, `name`, `des`, `icon`, `project`, `href`) VALUES
(1, '博客', '记录摆烂日常', './static/img/i1.png', '1', 'https://blog.zyyo.net'),
(2, '云盘', '存储收集文件', './static/img/i2.png', '1', 'https://i.zyyo.net'),
(3, '实验室', '收集有趣html作品', './static/img/i3.png', '1', 'https://zyyo.cc'),
(4, 'GPT', 'chatgpt next web', './static/img/i4.png', '1', 'https://ai.zyyo.net'),
(5, 'ZYYO主页', '本站同款', './static/img/i5.png', '2', 'https://github.com/ZYYO666/homepage'),
(6, 'ZYYO主题', '一款ty主题', './static/img/i6.png', '2', 'https://github.com/ZYYO666/ZYYO');

-- --------------------------------------------------------

--
-- 表的结构 `zyyo_project`
--

CREATE TABLE `zyyo_project` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `icon` text NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `zyyo_project`
--

INSERT INTO `zyyo_project` (`id`, `name`, `icon`, `type`) VALUES
(1, 'site', '<svg t=\"1705257422086\" class=\"icon\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" p-id=\"1891\">\r\n                        <path d=\"M629.333333 202.666667v213.333333h277.333334v448h-512v-213.333333h-277.333334v-448h512z m213.333334 277.333333h-213.333334v170.666667h-170.666666v149.333333h384v-320z m-277.333334-213.333333h-384v320h213.333334v-170.666667h170.666666v-149.333333z m0 213.333333h-106.666666v106.666667h106.666666v-106.666667z\" p-id=\"1892\"></path>\r\n                    </svg>', '0'),
(2, 'project', '<svg t=\"1705257422086\" class=\"icon\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" p-id=\"1891\">\r\n                        <path d=\"M629.333333 202.666667v213.333333h277.333334v448h-512v-213.333333h-277.333334v-448h512z m213.333334 277.333333h-213.333334v170.666667h-170.666666v149.333333h384v-320z m-277.333334-213.333333h-384v320h213.333334v-170.666667h170.666666v-149.333333z m0 213.333333h-106.666666v106.666667h106.666666v-106.666667z\" p-id=\"1892\"></path>\r\n                    </svg>', '1');

-- --------------------------------------------------------

--
-- 表的结构 `zyyo_theme`
--

CREATE TABLE `zyyo_theme` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `main_bg_color` text NOT NULL,
  `main_text_color` varchar(30) NOT NULL,
  `gradient` text NOT NULL,
  `purple_text_color` varchar(30) NOT NULL,
  `text_bg_color` varchar(30) NOT NULL,
  `item_bg_color` varchar(30) NOT NULL,
  `item_hover_color` varchar(30) NOT NULL,
  `item_left_title_color` varchar(30) NOT NULL,
  `item_left_text_color` varchar(30) NOT NULL,
  `footer_text_color` varchar(30) NOT NULL,
  `left_tag_item` text NOT NULL,
  `card_filter` varchar(30) NOT NULL,
  `back_filter` varchar(30) NOT NULL,
  `back_filter_color` varchar(30) NOT NULL,
  `fill` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `zyyo_theme`
--

INSERT INTO `zyyo_theme` (`id`, `name`, `main_bg_color`, `main_text_color`, `gradient`, `purple_text_color`, `text_bg_color`, `item_bg_color`, `item_hover_color`, `item_left_title_color`, `item_left_text_color`, `footer_text_color`, `left_tag_item`, `card_filter`, `back_filter`, `back_filter_color`, `fill`) VALUES
(1, '主题1', 'url(../img/background.jpg)', '#eeeeee', 'linear-gradient(120deg, #bd34fe, #e0321b 30%, #41d1ff 60%)', '#747bff', '#00000040', '#00000028', '#33333338', '#ffffff', '#ffffff', '#ffffff', 'rgb(27 42 57 / 20%)', '15px', '0px', '#00000050', '#ffffff'),
(2, '主题2', 'url(../img/background.jpg)', '#000000', 'linear-gradient(120deg, #bd34fe, #e0321b 30%, #41d1ff 60%)', '#747bff', 'rgb(121 163 231)', 'rgba(249, 250, 251, 0.42)', 'rgba(244, 245, 246, 0.8)', '#000000', '#494949', '#ffffff', '#c7e1fa', '0px', '20px', '#00000030', '#000000'),
(3, '主题3', 'linear-gradient(50deg, #a2d1ff, #ffffff)', '#000000', 'linear-gradient(120deg, #bd34fe, #e0321b 30%, #41d1ff 60%)', '#747bff', 'rgb(196 217 251)', 'rgba(249, 250, 251, 0.5)', 'rgba(244, 245, 246, 0.8)', '#000000', '#494949', '#222222', 'linear-gradient(50deg, #a2d1ff, #ffffff)', '0px', '0px', '#00000000', '#000000'),
(4, '主题3', '#ffffff', '#000000', 'linear-gradient(120deg, #bd34fe, #e0321b 30%, #41d1ff 60%)', '#747bff', 'rgb(240 243 247)', 'rgb(247 247 247)', 'rgba(244, 245, 246, 0.5)', '#000000', '#494949', '#222222', '#ffffff', '0px', '0px', '#00000000', '#000000'),
(5, '主题3', 'url(../img/background.jpg)', '#eeeeee', 'linear-gradient(120deg, #bd34fe, #e0321b 30%, #41d1ff 60%)', '#747bff', '#00000040', '#00000038', '#33333338', '#ffffff', '#ffffff', '#ffffff', 'rgb(27 42 57 / 20%)', '0px', '39px', '#00000030', '#ffffff');

--
-- 转储表的索引
--

--
-- 表的索引 `zyyo_data`
--
ALTER TABLE `zyyo_data`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `zyyo_icon`
--
ALTER TABLE `zyyo_icon`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `zyyo_item`
--
ALTER TABLE `zyyo_item`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `zyyo_project`
--
ALTER TABLE `zyyo_project`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `zyyo_theme`
--
ALTER TABLE `zyyo_theme`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `zyyo_data`
--
ALTER TABLE `zyyo_data`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `zyyo_icon`
--
ALTER TABLE `zyyo_icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `zyyo_item`
--
ALTER TABLE `zyyo_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `zyyo_project`
--
ALTER TABLE `zyyo_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `zyyo_theme`
--
ALTER TABLE `zyyo_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
