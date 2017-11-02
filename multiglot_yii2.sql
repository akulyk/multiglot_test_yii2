/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : multiglot_yii2

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2017-11-02 15:38:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for author
-- ----------------------------
DROP TABLE IF EXISTS `author`;
CREATE TABLE `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of author
-- ----------------------------
INSERT INTO `author` VALUES ('1', 'Lourdes Braun', '31/12/97');
INSERT INTO `author` VALUES ('2', 'Floy Armstrong', '28/09/1982');
INSERT INTO `author` VALUES ('3', 'Gayle Braun', '09/04/1991');
INSERT INTO `author` VALUES ('4', 'Coleman Trantow', '05/04/1998');
INSERT INTO `author` VALUES ('5', 'Adeline Green', '02/07/1988');
INSERT INTO `author` VALUES ('6', 'Jayne Steuber', '06/11/1994');
INSERT INTO `author` VALUES ('7', 'Chris Kemmer', '13/02/1979');
INSERT INTO `author` VALUES ('8', 'Annabelle Borer', '09/12/1997');
INSERT INTO `author` VALUES ('9', 'Darius Schaden', '22/12/1996');
INSERT INTO `author` VALUES ('10', 'Lemuel Ebert', '15/02/1997');
INSERT INTO `author` VALUES ('11', 'Carleton Weimann', '10/08/1991');
INSERT INTO `author` VALUES ('12', 'Blanche Donnelly', '16/09/1982');
INSERT INTO `author` VALUES ('13', 'Davonte Zieme', '05/01/1980');
INSERT INTO `author` VALUES ('14', 'Spencer Gulgowski', '12/09/1978');
INSERT INTO `author` VALUES ('15', 'Nicolette Barton', '25/05/1982');
INSERT INTO `author` VALUES ('16', 'Cali Schinner', '24/02/1999');
INSERT INTO `author` VALUES ('17', 'Kennedi Schmitt', '01/05/1998');
INSERT INTO `author` VALUES ('18', 'Jazmyn Weimann', '26/12/1995');
INSERT INTO `author` VALUES ('19', 'Candace Ullrich', '31/12/1983');
INSERT INTO `author` VALUES ('20', 'Vicenta Doyle', '07/10/1979');
INSERT INTO `author` VALUES ('21', 'Duncan Bogan', '22/11/1996');
INSERT INTO `author` VALUES ('22', 'Michale Parker', '07/11/1989');
INSERT INTO `author` VALUES ('23', 'Sibyl Wunsch', '17/01/1980');
INSERT INTO `author` VALUES ('24', 'Aimee Marquardt', '12/02/1982');
INSERT INTO `author` VALUES ('25', 'Liam Cremin', '17/09/1981');
INSERT INTO `author` VALUES ('26', 'Laura Nicolas', '30/01/1988');
INSERT INTO `author` VALUES ('27', 'Christine Langosh', '18/01/1992');
INSERT INTO `author` VALUES ('28', 'Rosario Blanda', '12/06/1986');
INSERT INTO `author` VALUES ('29', 'Theresa Bergnaum', '09/06/1994');
INSERT INTO `author` VALUES ('30', 'Antwan Rutherford', '29/09/1998');
INSERT INTO `author` VALUES ('31', 'Emie Morissette', '27/10/1980');
INSERT INTO `author` VALUES ('32', 'fdfdfsdf', '01/12/12');
INSERT INTO `author` VALUES ('34', 'Bonus Bolonus', '01/01/01');

-- ----------------------------
-- Table structure for book
-- ----------------------------
DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `date_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of book
-- ----------------------------
INSERT INTO `book` VALUES ('1', 'Sit et doloribus doloribus.', '3', '2017-11-12 04:42:38');
INSERT INTO `book` VALUES ('2', 'Esse velit est.', '2', '2017-11-06 21:08:59');
INSERT INTO `book` VALUES ('3', 'Perspiciatis asperiores alias.', '3', '2017-11-16 03:58:05');
INSERT INTO `book` VALUES ('4', 'Omnis consectetur adipisci.', '4', '2017-11-17 11:27:16');
INSERT INTO `book` VALUES ('5', 'Odit vitae sed.', '5', '2017-11-12 16:59:59');
INSERT INTO `book` VALUES ('6', 'Deserunt amet ducimus.', '6', '2017-11-08 03:24:50');
INSERT INTO `book` VALUES ('7', 'Voluptatem quia expedita.', '7', '2017-11-13 21:12:08');
INSERT INTO `book` VALUES ('8', 'Dolor earum nesciunt.', '8', '2017-11-08 13:03:26');
INSERT INTO `book` VALUES ('9', 'Sequi dolor dolor.', '9', '2017-11-06 08:06:42');
INSERT INTO `book` VALUES ('10', 'Numquam cum neque.', '10', '2017-11-19 11:17:03');
INSERT INTO `book` VALUES ('11', 'Delectus nobis blanditiis.', '11', '2017-11-14 01:35:54');
INSERT INTO `book` VALUES ('12', 'Eum quia ad.', '12', '2017-11-12 09:13:49');
INSERT INTO `book` VALUES ('13', 'Corrupti deserunt expedita.', '13', '2017-11-15 09:02:30');
INSERT INTO `book` VALUES ('14', 'Dolor est alias.', '14', '2017-11-01 19:44:06');
INSERT INTO `book` VALUES ('15', 'Reiciendis dicta qui.', '15', '2017-11-11 10:55:32');
INSERT INTO `book` VALUES ('16', 'Excepturi corporis dolor.', '16', '2017-11-18 20:54:36');
INSERT INTO `book` VALUES ('17', 'Natus aut id.', '17', '2017-11-13 16:22:15');
INSERT INTO `book` VALUES ('18', 'Quo nihil dolorem.', '18', '2017-10-27 15:15:07');
INSERT INTO `book` VALUES ('19', 'Minus eligendi sunt.', '19', '2017-11-12 21:23:12');
INSERT INTO `book` VALUES ('20', 'Quis quo voluptate.', '20', '2017-10-25 14:40:07');
INSERT INTO `book` VALUES ('21', 'Sint et quia.', '21', '2017-11-02 18:03:08');
INSERT INTO `book` VALUES ('22', 'Minima est qui.', '22', '2017-10-30 14:11:58');
INSERT INTO `book` VALUES ('23', 'Repellendus hic aut.', '23', '2017-10-23 15:07:54');
INSERT INTO `book` VALUES ('24', 'Nemo voluptatum ea.', '24', '2017-11-15 04:35:46');
INSERT INTO `book` VALUES ('25', 'Dolorem ex optio.', '25', '2017-11-18 16:17:58');
INSERT INTO `book` VALUES ('26', 'Quos aut ea.', '26', '2017-11-18 00:32:07');
INSERT INTO `book` VALUES ('27', 'Rerum nulla dolores.', '27', '2017-11-11 02:56:41');
INSERT INTO `book` VALUES ('28', 'Perspiciatis magnam eum.', '28', '2017-11-07 20:53:41');
INSERT INTO `book` VALUES ('29', 'Corrupti ipsa natus.', '29', '2017-11-12 18:16:55');
INSERT INTO `book` VALUES ('30', 'Expedita aliquam autem.', '30', '2017-10-31 02:37:32');
INSERT INTO `book` VALUES ('31', 'Voluptate et sed.', '31', '2017-11-11 21:04:59');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1509551640');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1509551644');
INSERT INTO `migration` VALUES ('m171101_154354_add_author_table', '1509551645');
INSERT INTO `migration` VALUES ('m171101_154411_add_book_table', '1509551645');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', null, '-xwVS3-jxUjvnU-EQwqvTZotUpoM8BDI', '$2y$13$XQX8guJktc8a0plJaSrHweymIEZ1iQtMg0J8UELehZTVb11wp3OIi', null, 'urobel@wisoky.info', '10', '1509559304', '1509559304');
INSERT INTO `user` VALUES ('2', null, '-IPB8iyrAeffE_DP4Vos1ihipHXcHMwQ', '$2y$13$Hn8.4NMjckgeLAit0pqKVejfFDsqci2kTkdE9goPADPTA5Rc/1iYG', null, 'ycollins@gmail.com', '10', '1509559305', '1509559305');
INSERT INTO `user` VALUES ('3', null, 'zczv6YfzyvLRg6YR3ErKqn7ER4IrShdu', '$2y$13$HrXAqI/IhKNxibbtmU1uX.XdsrDm/ocIB24r1l4Bi96SY8thxIGDa', null, 'corkery.margarita@fisher.com', '10', '1509559465', '1509559465');
INSERT INTO `user` VALUES ('4', null, 'bvqwRAQSpP9LTMfs8nN-2zLRyFnAE1r8', '$2y$13$/HVi0qI00oeQZ8IXoqElduQOj2VXYqqQsQrgG8MdrxB1Sg5w3d6aO', null, 'jakayla.pagac@hotmail.com', '10', '1509559540', '1509559540');
INSERT INTO `user` VALUES ('5', null, 'aNPj2M5s8qGKkpXa7lWn2jUS8LXonwye', '$2y$13$O9dcqAZTiP2h1YzJ2xaRO.DzyJbFxAVW..gBc2aeKgav91RQrvNm2', null, 'colten.doyle@gmail.com', '10', '1509559618', '1509559618');
INSERT INTO `user` VALUES ('6', null, 'mbWykOm6QdU3Slwd_XVvf4d9pDePGi4V', '$2y$13$PakFtPydelwburE0SJNcFOtEUdncWZDifcNkVuqWQI.63NTh4ZiUu', null, 'wolff.jeramy@bechtelar.org', '10', '1509559619', '1509559619');
INSERT INTO `user` VALUES ('7', null, 'bEBBJ2GdOqBrF34KoSRLwjZVc07MRLYr', '$2y$13$JTOgqGrLqK/VC42oc9/jUe5T4SjfHAMkIBz./t4.jlALraWyr6e2a', null, 'dherman@rohan.com', '10', '1509559620', '1509559620');
INSERT INTO `user` VALUES ('8', null, 'fL4lylD7foc8uCTh0PxY_ZmmYYEjm1dW', '$2y$13$VYHSWGvrwBf8ZtneuC96r.ehQJYG6kI2k.HGkUFH3Lb.8PJ6iK2GC', null, 'gennaro.reichel@yahoo.com', '10', '1509559620', '1509559620');
INSERT INTO `user` VALUES ('9', null, 'AuVEXg2oyWNxD2uAH8MmxW3B8WkqWez5', '$2y$13$./9WFzzaghvXw3lRhvrvm.lilG2WG838UfXxP5aGmz3hw6T5DMsB.', null, 'bortiz@yahoo.com', '10', '1509559621', '1509559621');
INSERT INTO `user` VALUES ('10', null, '2hpk5ldhS2lvj07O688iVa8fXJ3IHMAG', '$2y$13$mN5KRIpAOTcD3s.pjOO/h.gd0tdo.q8HQWwnU4UAcGgE7q2ExBIJa', null, 'janick65@hotmail.com', '10', '1509559621', '1509559621');
INSERT INTO `user` VALUES ('11', null, 'wt9iVEbuFY5Db6AiPx7gPyEmDarhb6-X', '$2y$13$Vb9QNw3iMzFaQGYU0biN3urbrTuRnElkdfeyPZF5RxiHjzwCvCniK', null, 'priscilla.rau@hills.com', '10', '1509559622', '1509559622');
INSERT INTO `user` VALUES ('12', null, 'QzKeFi6uTuS3XEoOVQzdgKu7DmdCTHJt', '$2y$13$zuwCgnMxv3u8UOAQoQsXHuILkDp/75.71rWCBpXN8svlfokN2.qka', null, 'russel.madalyn@yundt.com', '10', '1509559623', '1509559623');
INSERT INTO `user` VALUES ('13', null, 'AvX2S5QLvbdax4mLMCnFTJCFoAGM0xi6', '$2y$13$FRLGJVSTtv.r3n/a0zo8ceS3oCTrRqk/kVBQyJ/lZSbEiDDK.m24q', null, 'leslie.vonrueden@johns.com', '10', '1509559623', '1509559623');
INSERT INTO `user` VALUES ('14', null, 'f_-UKxLQOFx_lFDkJAsLbmeuhlwJqd8i', '$2y$13$ujAh4Vc5uCt8oDXlavORVuJf1UOITvy2lbYrCXrVIFTzXR9S4l64m', null, 'ilene.wolf@gmail.com', '10', '1509559624', '1509559624');
INSERT INTO `user` VALUES ('15', null, 'zSwYPyi1q8NpKg6CJUsstP-LU_xi5D1A', '$2y$13$mRKiFw8V.fipBJWgHErQD.JNgmVMaEHDUDw58vE5he4ed7rP8O996', null, 'palma.reichert@cremin.com', '10', '1509559668', '1509559668');
INSERT INTO `user` VALUES ('16', null, 'BBFJNho0GRgfEt9Il36PYeMZCBHqhEzJ', '$2y$13$i9TcoAWpYjlMAq1fr1d0sOzSxFkSzFT5l9YlGXU9UWHBM4cXyga1O', null, 'nbosco@schuppe.org', '10', '1509559669', '1509559669');
INSERT INTO `user` VALUES ('17', null, 'UCn9NnqZjYg-BL8Lp1Lm92wTjQwcvOZD', '$2y$13$XJLD2do2iO.wQF6f.C5C6OwWwBAYdwibwyjQp3uTdStygt2ZE2tYW', null, 'gjerde@hotmail.com', '10', '1509559669', '1509559669');
INSERT INTO `user` VALUES ('18', null, 'Th1KsXSocOW4840UAzV8V4h4qQ66RhDx', '$2y$13$r0hME1WIqAmhPBJuYV/HPu5D848FWv8m8S8UjFLZ85kySlIL0nmy2', null, 'fkirlin@yahoo.com', '10', '1509559670', '1509559670');
INSERT INTO `user` VALUES ('19', null, 'synHaoSkkt5GkHVAg2jJSEjcfmgQeOx-', '$2y$13$t4VRyxvEZm/TL7SX/Xrx.eshLsm032BnvGp3zlqt7nAmAaoXUCEcO', null, 'tstehr@yahoo.com', '10', '1509559671', '1509559671');
INSERT INTO `user` VALUES ('20', null, 'xZMbdxBivY53XKXtGm8v_WDTN8_BwAIL', '$2y$13$Tf3q/vkKTj188l8Ylen8X.jgtcq32VXHVQ2ZcmH.lOAecJ/MF60xS', null, 'baumbach.fernando@rosenbaum.info', '10', '1509559671', '1509559671');
INSERT INTO `user` VALUES ('21', null, 'qGJoaExxluKjsl5girYbX793iqRxFiH5', '$2y$13$RyET4riqZUvLT2/EXt40I.sLIKeVt9r7r0FJSlCq1j4oLIIV5SrMO', null, 'halvorson.earlene@casper.com', '10', '1509559672', '1509559672');
INSERT INTO `user` VALUES ('22', null, 'yAv9CsjJ08Vo9PDnmDAomAwmGWpgrcN_', '$2y$13$K005OR5Rrv8AQHiX8nVcf.FJcT6.kpEsGYIqlUIYW7OIvhu8O2KeG', null, 'jensen18@bauch.net', '10', '1509559672', '1509559672');
INSERT INTO `user` VALUES ('23', null, '2hMnXaZZOt0prwUQXQnWe60HfptoPPDg', '$2y$13$BYuCMUzwlHstfHAgJC7xp.SAsRC2x49yX9y0NDBCKyJM9.Nwk4j2K', null, 'oma53@purdy.com', '10', '1509559673', '1509559673');
INSERT INTO `user` VALUES ('24', null, 'Aq8iPdndtV8ubXgWvk9e-qTZe1bhQ3DY', '$2y$13$n43IkDJd1HwJCVfizLFEPedp8y1wDA.PTpU/1oX/beLbIBN4jR0IC', null, 'crona.esta@koelpin.info', '10', '1509559673', '1509559673');
INSERT INTO `user` VALUES ('25', null, '3LuhYuWJuHzw1KvMkZBZwLwmpnalmKC7', '$2y$13$n1dXRjGoGtr01fl1urxeaO8AyMU/FSnkCCc.KshLSYuRfZNIa3HNK', null, 'dboyle@schaden.net', '10', '1509559696', '1509559696');
INSERT INTO `user` VALUES ('26', null, 's8nkx7M40337Cgqcfs0FDsIR4xe7cgvy', '$2y$13$49RJGZZLUMkmnWAvO7snDepU7inOjbryITuYuTMLKaeXeZ7coE9je', null, 'zulauf.mallory@yahoo.com', '10', '1509559697', '1509559697');
INSERT INTO `user` VALUES ('27', null, '8SFK6HBAPEpQkxwIXp9k_4CDlMiyP286', '$2y$13$SxIw.VsYo1vYL3OyA2gd1.x3ZKT2qCFwqoTvaO87/FcGmbotxbTRa', null, 'zack.hermann@gmail.com', '10', '1509559697', '1509559697');
INSERT INTO `user` VALUES ('28', null, 'QQO40yfguetohvq_isW-szyrGX95Tnvm', '$2y$13$QIqb.DBT4xCXn8FCkARWw.kGSTc8zghw0Ln0J37qn3LXR8NoXAG1W', null, 'nitzsche.colleen@casper.com', '10', '1509559698', '1509559698');
INSERT INTO `user` VALUES ('29', null, '6wfpelAjnSyH4UYvQxo-vnEGMxtj-saP', '$2y$13$PqL0XTpUoCMzu84r.inxkeHQD/CoUI5RtiewecOR2SluFKfETMsVq', null, 'nschaden@lebsack.com', '10', '1509559699', '1509559699');
INSERT INTO `user` VALUES ('30', null, 'wmQ_SvfpaasbAnLEI771bDC-SwqtucEI', '$2y$13$8jhgVrn1SXj1uTorf7rfheOBew4l49b7KprWTds0dCz/XHCTgwYSK', null, 'kailyn.oberbrunner@will.com', '10', '1509559699', '1509559699');
INSERT INTO `user` VALUES ('31', null, 'ATMCSdUYp7WnASFJlwnm5uP9rxH5RGmA', '$2y$13$ObYjVzINXjyC2..sFfjbYurpiHwUF97EJf6Je8zNxaXZwYCqEqiHG', null, 'dayna.mueller@ward.com', '10', '1509559700', '1509559700');
INSERT INTO `user` VALUES ('32', null, 'K6R6UTVAOy5uAewjYuwx4MMGJWE-ja8S', '$2y$13$2XFSq.7uXeqpNdy9lK3e8OHubwoebd8jPKZXQeC9etk67XqLexvAO', null, 'kuhn.elsa@yahoo.com', '10', '1509559700', '1509559700');
INSERT INTO `user` VALUES ('33', null, '8VOID-AdPh6D1Zr8sf6EMxuqX79mHg_n', '$2y$13$J6BgGOfmswkWP6cnOBg0Jed6mW82VfbvIhT5T0kF/F.nDSDM.VKB2', null, 'fkrajcik@gmail.com', '10', '1509559701', '1509559701');
INSERT INTO `user` VALUES ('34', null, 'fYvAuJiDhDEh8AGzDowT3sPZV0XOKkJP', '$2y$13$tYAhu.gx4.rczQIOVTCB1.1wBUyTuB3EM4R5Xk5nNNeL9gFw4eTFO', null, 'marquise86@kuhlman.com', '10', '1509559702', '1509559702');
