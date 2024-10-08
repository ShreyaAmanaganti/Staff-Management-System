SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `desg` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `email`, `password`, `birthday`, `gender`,`desg`, `dept`, `degree`, `pic`)VALUES
(1, 'Dr.K.Venu Gopal', 'Rao', 'kvgrao_cse@mvsrec.edu.in', '1234', '2021-09-08', 'Male','Professor','IT', 'Ph.D', 'images/no.jpg'),
(2,'Dr Jayasree','Hanumantha Rao','jayasree_cse@mvsrec.edu.in','1234','2015-09-28','Female','Professor','IT','Ph.D','images/no.jpg'),
(3,'Dr Chepuri','Samson','samson_cse@mvsrec.edu.in','1234','2015-07-08','Female','Professor','IT','Ph.D','images/no.jpg'),
(4,'D.B.V.Ravi','Shankar','ravishankar_it@mvsrec.edu.in','1234','2001-07-16','Male','Associate Professor','IT','ME,(Ph.D)','images/no.jpg'),
(5,'Dr A V Krishna','Prasad','krishnaprasad_cse@mvsrec.edu.in','1234','2016-10-13','Male','Associate Professor','IT','Ph.D','images/no.jpg'),
(6,'Dr Dumpala','Shanthi','shanthi_it@mvsrec.edu.in','1234','2021-07-01','Female','Associate Professor','IT','Ph.D','images/no.jpg'),
(7,'Dr Vasavi','Bande','vasavi_it@mvsrec.edu,.in','1234','2022-11-25','Female','Associate Professor','IT','M.Tech','images/no.jpg'),
(8,'Jindam','Sowjanya','sowjanya_it@mvsrec.edu.in','1234','2002-08-26','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(9,'Kuthadi','Devaki','devaki_it@mvsrec.edu.in','1234','2004-02-16','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(10,'Seelam Ch','Vijaya Bhaskar','vijayabhaskar_it@mvsrec.edu.in','1234','2005-03-11','Male','Assistant Professor','IT','M.Tech,(Ph.D)','images/no.jpg'),
(11,'Addagala','Vijaya Vahini','vahini_it@mvsrec.edu.in','1234','2006-03-13','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(12,'Gumpally','Usha Sri','ushasri_it@mvsrec.edu.in','1234','2006-07-22','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(13,'Chikkela','Srujana','srujana_it@mvsrec.edu.in','1234','2007-08-13','Female','Assistant Professor','IT','M.Tech,(Ph.D)','images/no.jpg'),
(14,'Kakara','Sri Lakshmi','srilaxmi_it@mvsrec.edu.in','1234','2008-12-22','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(15,'Pisupati','Karthik','karthik_itmvsrec.edu.in','1234','2010-08-20','Male','Assistant Professor','IT','M.Tech','images/no.jpg'),
(16,'Kintali','Chandra Sekhar','chandrasekhar_it@mvsrec.edu.in','1234','2010-08-26','Male','Assistant Professor','IT','M.Tech','images/no.jpg'),
(17,'Korukonda','Ramya Madhavi','ramyamadhavi_it@mvsrec.edu.in','1234','2011-05-25','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(18,'Durgam','Muninder','muninder_it@mvsrec.edu.in','1234','2014-07-01','Male','Assistant Professor','IT','M.Tech','images/no.jpg'),
(19,'Annapureddy','Manasa','manasa_it@mvsrec.edu.in','1234','2014-07-02','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(20,'Parlakula','Amba Bhavani','bhavani_it@mvsrec.edu.in','1234','2015-07-01','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(21,'N.Nithya','Lakshmi','nithya_it@mvsrec.edu.in','1234','2021-11-01','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(22,'P.Kavitha',' ','kavitha_it@mvsrec.edu.in','1234','2021-08-02','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(23,'B.Kalpana',' ','kalpana_it@mvsrec.edu.in','1234','2021-08-02','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(24,'P.Sita','Sowjanya','sitasowjanya_it@mvsrec.edu.in','1234','2021-08-02','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(25,'V.Swarna','Kamalam','swarna_it@mvsrec.edu.in','1234','2022-03-28','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(26,'T.Shashi','Kumar','shashikumar_it@mvsrec.edu.in','1234','2022-08-23','Male','Assistant Professor','IT','M.Tech','images/no.jpg'),
(27,'Medishetty','Swapna','mswapna_it@mvsrec.edu.in','1234','2022-08-29','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(28,'Maya B.','Dhone','mayadhone_it@mvsrec.edu.in','1234','2022-09-05','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(29,'M.Prathyusha',' ','prathyusha_it@mvsrec.edu.in','1234','2022-11-25','Female','Assistant Professor','IT','M.Tech','images/no.jpg'),
(30,'N.Hanumantha','Rao','hanumantharao_it@mvsrec.edu','1234','2022-11-28','Male','Assistant Professor','IT','M.Tech','images/no.jpg'),
(31,'Dr.Ganapavarapu','Kanaka Durga','kanakadurga_ece@mvsrec.edu.in','1234','1991-12-16','Female','Professor','ECE','Ph.D','images/no.jpg'),
(32,'Dr.Beeram','Sarala','sarala_ece@mvsrec.edu.in','1234','1999-09-30','Female','Professor','ECE','Ph.D','images/no.jpg'),
(33,'Dr.Sripathi Panditharadhyula','Venu Madhav Rao','spvmrao_ece@mvsrec.edu.in','1234','2018-06-25','Male','Professor','ECE','Ph.D','images/no.jgp'),
(34,'Dr.Kamle','Usha','usha_ece@mvsrec.edu.in','1234','2005-11-28','Female','Professor','ECE','Ph.D','images/no.jpg'),
(35,'Dr.S','Suryanarayana','suryanarayana_ece@mvsrec.edu.in','1234','2022-06-13','Male','Professor','ECE','Ph.D','images/no.jpg'),
(36,'Nuli','Namassivaya','nnamassivaya@mvsrec.edu.in','1234','1995-04-25','Male','Associate Professor','ECE','M.Tech,(Ph.D)','images/no.jpg'),
(37,'Dr.Srikurmam V.R.','Manimala','svrmanimala_ece@mvsrec.edu.in','1234','2000-03-10','Female','Associate Professor','ECE','Ph.D','images/no.jpg'),
(38,'Tatikonda','Kavitha','tkavitha_ece@mvsrec.edu.in','1234','2000-03-13','Female','Associate Professor','ECE','M.Tech,(Ph.D)','images/no.jpg'),
(39,'Dr.S Swapna','Rani','sswapnarani_ece@mvsrec.edu.in','1234','2011-09-12','Female','Associate Professor','ECE','Ph.D','images/no.jpg'),
(40,'Dr.Sharath Kumar','D R V A','drvask_ece@mvsrec.edu.in','1234','2020-08-17','Female','Associate Professor','ECE','Ph.D','images/no.jpg'),
(41,'Gudipudi V','Chalapathi Rao','chalapathirao_ece@mvsrec.edu.in','1234','1990-08-22','Male','Assistant Professor','ECE','M.E,(Ph.D)','images/no.jpg'),
(42,'Devalraju','V S R Sesidhar','sesidhar_ece@mvsrec.edu.in','1234','2004-01-22','Male','Assistant Professor','ECE','M.E,(Ph.D)','images/no.jpg'),
(43,'Eranki V','Nagalakshmi','nagalakshmi_ece@mvsrec.edu.in','1234','2006-04-03','Male','Assistant Professor','ECE','M.E,(Ph.D)','images/no.jpg'),
(44,'Shilpa B','Darvesh','shilpadarvesh_ece@mvsrec.edu.in','1234','2006-09-08','Female','Assistant Professor','ECE','M.Tech,(Ph.D)','images/no.jpg'),
(45,'Gugulothu Sravan','Kumar','gsravankumar_ece@mvsrec.edu.in','1234','2006-09-08','Male','Assistant Professor','ECE','M.Tech','images/no.jpg'),
(46,'Komaraneni','Narasimha Rao','narasimharao_ece@mvsrec.edu.in','1234','2007-05-07','Male','Assistant Professor','ECE','M.E','images/no.jpg'),
(47,'Nathala','Kavitha','nkavitha_ece@mvsrec.edu.in','1234','2008-07-21','Female','Assistant Professor','ECE','M.Tech','images/no.jpg'),
(48,'Dakey','Sudhir','sudhir_ece@mvsrec.edu.in','1234','2008-07-2008','Male','Assistant Professor','ECE','M.Tech,(Ph.D)','images/no.jpg'),
(49,'Boddu','Bhavani','bhavanib_ece@mvsrec.edu.in','1234','2008-11-17','Female','Assistant Professor','ECE','M.Tech,(Ph.D)','images/no.jpg'),
(50,'Veluguri','Suresh Kumar','vsureshkumar_ece@mvsrec.edu.in','1234','2012-01-04','Male','Assistant Professor','ECE','M.Tech,(Ph.D)','images/no.jpg'),
(51,'S','Aruna','saruna_ece@mvsrec.edu.in','1234','2012-09-28','Female','Assistant Professor','ECE','M.Tech,(Ph.D)','images/no.jpg'),
(52,'M Sarat','Chandra','sarathchandra_ece@mvsrec.edu.in','1234','2013-04-25','Male','Assistant Professor','ECE','M.E','images/no.jpg'),
(53,'K V B L','Deepthi','deepthikvbl_ece@mvsrec.edu.in','1234','2013-07-19','Female','Assistant Professor','ECE','M.Tech,(Ph.D)','images/no.jpg'),
(54,'S','Sreehari','sreehari_ece@mvsrec.edu.in','1234','2014-07-14','Male','Assistant Professor','ECE','M.Tech','images/no.jpg'),
(55,'Syva','Srinivas','syva_ece@mvsrec.edu.in','1234','2014-07-14','Male','Assistant Professor','ECE','M.Tech','images/no.jpg'),
(56,'Smitashree','Mohapatra','smitashree_ece@mvsrec.edu.in','1234','2014-07-14','Female','Assistant Professor','ECE','M.Tech,(Ph.D)','images/no.jpg'),
(57,'Gajula','Mahendar','mahendar_ece@mvsrec.edu.in','1234','2014-07-22','Male','Assistant Professor','ECE','M.Tech,(Ph.D)','images/no.jpg'),
(58,'Mallela','Deepthi','deepthim_ece@mvsrec.edu.in','1234','2016-07-05','Female','Assistant Professor','ECE','M.Tech','images/no.jpg'),
(59,'Gaddam','Vishnu Kanth','vishnukanth_ece@mvsrec.edu.in','1234','2017-07-03','Male','Assistant Professor','ECE','M.Tech','images/no.jpg'),
(60,'Chigullapalli','Laxmana Sai','claxmanasai_ece@mvsrec.edu.in','1234','2017-07-03','Male','Assistant Professor','ECE','M.Tech','images/no.jpg'),
(61,'Velupuri','Vijayalakshmi','vijayalakshmi_ece@mvsrec.edu.in','1234','2017-07-03','Female','Assistant Professor','ECE','M.Tech','images/no.jpg'),
(62,'Sreepada','Ravi Kumar','sravikumar_ece@mvsrec.edu.in','1234','2017-07-03','Male','Assistant Professor','ECE','M.Tech,(Ph.D)','images/no.jpg'),
(63,'Kavya','Kavali','kavya_ece@mvsrec.edu.in','1234','2017-09-27','Female','Assistant Professor','ECE','M.E','images/no.jpg'),
(64,'Vanguri Sundara','Siva Kumar Sarma','ssivakumarsarma_ece@mvsrec.edu.in','1234','2022-11-28','Male','Assistant Professor','ECE','M.Tech','images/no.jpg');

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY (`email`);


--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

CREATE TABLE `UG`(
  `year` int(11) NOT NUll,
  `dept` varchar(100) NOT NUll,
  `n` int(11) NOT NUll,
  `n1` int(11) NOT NUll,
  `n2` int(11) NOT NUll,
  `n3` int(11) NOT NUll
)