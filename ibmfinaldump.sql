-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2011 at 05:06 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `bluebattle`
--

-- --------------------------------------------------------

--
-- Table structure for table `quizcontent`
--

CREATE TABLE IF NOT EXISTS `quizcontent` (
  `qID` int(11) NOT NULL AUTO_INCREMENT,
  `qData` text NOT NULL,
  `ch1` text NOT NULL,
  `ch2` text NOT NULL,
  `ch3` text NOT NULL,
  `ch4` text NOT NULL,
  `correctch` text NOT NULL,
  PRIMARY KEY (`qID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `quizcontent`
--

INSERT INTO `quizcontent` (`qID`, `qData`, `ch1`, `ch2`, `ch3`, `ch4`, `correctch`) VALUES
(1, 'What is a trackback?', 'A type of backlink', 'A spam method', 'An warez site', 'A method of getting fake visits to your site', 'A type of backlink'),
(2, 'Which of the following is not an acronym for RSS?', 'Really simple syndication', 'Really simple site', 'Rich site summary', 'RDF site summary', 'Really simple site'),
(3, 'What do you understand by the term "Wisdom of the crowds" and how it applies to web 2.0?', 'Collective knowledge from many is of greater value than that of a single expert', 'An expert opinion always outweighs that from a group', 'Experts can seek opinions from others to increase their wisdom', 'Diverse collections of independently-deciding individuals requires an expert to resolve conflicts', 'Collective knowledge from many is of greater value than that of a single expert'),
(4, 'Which of the following technologies was not present in web 1.0?', 'Flash', 'HTML', 'PHP', 'Ajax', 'Ajax'),
(5, 'Which of the following is true about Blogs and Wikis?', 'Blogs have comments while Wiki does not', 'Blog is advanced form of a wiki', 'Blog is usually centered around one person, while wiki is many to many', 'Wiki is usually centered around one person, while Blog is many to many', 'Blog is usually centered around one person, while wiki is many to many'),
(6, 'What is a tag?', 'It is used to indicate ownership of content.', 'It is used to flag inappropriate content.', 'It refers to keyword that users attach to content.', 'It is used to indicate featured content on a website.', 'It refers to keyword that users attach to content.'),
(7, 'When compared to the compiled program, PHP scripts run?', 'Faster.', 'Slower.', 'The execution speed is similar.', 'All of above.', 'Slower.'),
(8, 'Global variables that are declared static are ____________ in C.\r\nWhich one of the following correctly completes the sentence above?', 'Internal to the current translation unit.', 'Visible to all translation units.', 'Read-only subsequent to initialization.', 'Allocated on the heap.', 'Allocated on the heap.'),
(9, 'OpenSocial is Google''s Social Networking API. It was created along with the collaboration of MySpace, hi5, LinkedIn, etc. It primarily supports HTML and JS. It also facilitates containers to support server-to-server communication via the Client Libraries such as OpenSocial PHP, Java, .Net Libraries. Which of the following might not be suitable for developing with this API?', 'Porting a profile from one social network to another.', 'Create a commerce website that allows the user to know how many friends have bought the same product?', 'Build a social application that can be embedded in social networks.', 'None of the above.', 'None of the above.'),
(10, 'In PHP the difference between include() and require()?', 'Are different how they handle failure.', 'Both are same in every aspects.', 'Is include() produced a Fatal Error while require results in a Warning.', 'None of above.', 'Are different how they handle failure.'),
(11, 'Paypal, one of the world''s largest e-commerce business, allows payments, money transfers throught the internet. Paypal claims itself to make secure transactions with many online stores, transfer  money across many countries, etc. PayPal has been a huge success transferring currencies in bits and bytes & yet making huge profit too. Who are the other existing competitors for PayPal in this domain?', 'Amazon.', 'Google.', 'Microsoft.', 'Both 1 & 2.', 'Both 1 & 2.'),
(12, 'Study following steps and determine the correct order to execute a SQL query\r\n(1) Open a connection to MySql server\r\n(2) Execute the SQL query\r\n(3) Fetch the data from query\r\n(4) Select database\r\n(5) Close Connection', '4, 1, 3, 2, 5.', '4, 1, 2, 3, 5.', '1, 5, 4, 2, 1.', '4, 1, 3, 2, 5.', '4, 1, 3, 2, 5.'),
(13, 'What is the correct syntax of the declaration which defines the XML version?', '<xml version="1.0" />', '<?xml version="1.0"?>', '<?xml version="1.0" />', 'None of the above.', '<?xml version="1.0"?>'),
(14, 'A template engine is one that can help web designers in processing web templates and content information to output as web documents. A typical scenario with template engines is as follows. The web template already designed by the designer is combined with the values from the Database in Template Engine. The Template Engine, replaces the placeholders and creates unique documents for every user who requests a page. The Template Engine is generally a part of web template system or application framework. In case of PHP frameworks, which of the following framework is shipped with a template engine?', 'Zend Framework.', 'Code Igniter.', 'CakePHP.', 'Symfony.', 'Code Igniter.'),
(15, 'Cross Browser Compatibilities have been a major issue in web development for long. A CSS or a JS written for one browser may not run in the same way in another. To settle this issue, many web designers, choose to use JavaScript libraries. Some of the famous ones are JQuery, YUILibrary, Dojo, MooTools, etc. One major disadvantage of using these libraries is that, once a support for library is stopped, you need to write all your client side code once again. Yet many use it for different purposes. One of the famous uses of these frameworks have been theming the website. Which of the following in JQuery API, will help you in theming?', 'JQuery Core.', 'JQuery CSS.', 'JQuery UI.', 'JQuery Effects.', 'JQuery UI.'),
(16, 'Well formed XML document means?', 'it contains a root element.', 'it contains an element.', 'it contains one or more elements.', 'must contain one or more elements and root element must contain all other elements.', 'must contain one or more elements and root element must contain all other elements.'),
(17, 'Application Server = Web Container +____________.', 'Web-Services Container.', 'EJB Container.', 'Legacy Application.', 'Web Client.', 'EJB Container.'),
(18, 'Which one of the following is NOT a valid identifier in C?', '__ident', 'auto', 'bigNumber', 'g42277', 'auto'),
(19, 'Read the source code in C\r\n    int x[] = { 1, 4, 8, 5, 1, 4 }; \r\n    int *ptr, y; \r\n    ptr  = x + 4; \r\n    y = ptr - x;\r\nWhat does y in the sample code above equal?', '-3', '0', '4', '4 + sizeof( int )', '4'),
(20, 'In a typical native AJAX code, a developer creates a XMLHttpRequest Object. Using this object, she invokes open and setRequestHeader to activate communication with the page being requested. On invoking send, the page is called with the parameters passed with send. Once this is done, she writes an onreadystatechange functionality to know if any responses have come from the server. In this function, she also includes a condition to check if the status is 200. Why does she do so? What will happen if she doesn''t check it?', '200 denotes that 200 bytes have been transferred. They contain the information regarding the headers and responses that server sent.', '200 means that the communication was successful. She checks to make sure that the next step happens only when the communication was a success.', '200 means that the communication was OK. The code would behave the same way, if she hadn''t included it in the condition.', '200 refers to the time taken to communicate. If the time taken is more, it means a timeout has occured.', '200 means that the communication was successful. She checks to make sure that the next step happens only when the communication was a success.'),
(21, 'My Name is X. I optimize Y''s source by converting it into Z programming lanuguage. That''s like almost half in reduction of CPU Cycles as used by Y. Why was I created? Some important and highly complicated code are written as extensions of Y in Z. So, I can help everyone to code in Y and get the rewriting to Z done. Hence, all programmers of a company can work on Y alone, without bothering to write complex codes alone in Z. Who am I? And my friends Y and Z?', 'JQuery, Javascript, AJAX.', 'Enterprise Java Beans, J2EE, Optimised Javascript.', 'HipHop, PHP, C++', 'Hadoop, PHP, C', 'HipHop, PHP, C++'),
(22, 'Which of the following strings are a correct XML name?', '_myElement', 'my Element', '#myElement', 'None of the above.', '_myElement'),
(23, 'What are the predefined attributes i XML?', 'xml:lang', 'xml:space', 'both', 'none', 'both'),
(24, 'Which of the following method sends input to a script via a URL?', 'Get', 'Post', 'Both', 'None', 'Get'),
(25, 'Help Zuckerberg Out! Zuckerberg when starting Facebook, set his database servers at a single location. This was OK until he had plans to expand Facebook''s User Base. Also, the amount of data being collected by Facebook increased at a rapid pace. Inspite of this, he had to always secure his user''s data from catastrophies. Even a little loss of data may drive his users to some other social networking site. Hence, he has to decide on replication, distributed networking, high availability and removing SPOF. To a certain extent, he could achieve this within US. But as he decided to serve worldwide, he had to upgrade his infrastructure further! Which of these would you suggest him to use in this scenario?', 'Apache Qpid', 'Apache Hive', 'Apache Cassandra', 'MySQL Community Server', 'Apache Cassandra'),
(26, 'Few instances, wherein we wait the server to send us a huge amount of information say, a very big image or a huge blog post, we quite get irritated. And the amount of data transfered by the servers are also huge adding to the cost of server maintenance. So it was important to introduce compression techniques which could substantially reduce the amount of data transferred. Many servers such as the Microsoft IIS, Apache HTTP Server, Zeus Web Server, Nginx support standard compression techniques. Now, out of the following HTTP Compression techniques, which is not used/supported?', 'GZip', 'bzip2', 'Compress', '7Zip', '7Zip'),
(27, 'Want to improve your page''s loading time? Then you''ve reached the right person! I can help you with some of the best techniques to optimize page loads. To start with, the typical bottlenecks are caused in resolving DNS Names, setting up TCP connections, transmitting HTTP Requests, resource downloads, cache fetches, parsing scripts, etc. All these, add upto the rendering of the page. It is important we parallelize them and make sure they complete quick. Now, which of the following is not a best practice?', 'Making sure that Cache is intact!', 'Managing the Cycle response times so that the round trip delay is reduced', 'Minimizing the JS and CSS to keep the overhead less.', 'Letting images display in a size lesser than they actually are.', 'Letting images display in a size lesser than they actually are.'),
(28, 'What is garbage collection in the context of Java?', 'The operating system periodically deletes all of the java files available on the system.', 'Any package imported in a program and not used is automatically deleted.', 'When all references to an object are gone, the memory used by the object is automatically reclaimed.', 'The JVM checks the output of any Java program and deletes anything that doesn''t make sense.', 'When all references to an object are gone, the memory used by the object is automatically reclaimed.'),
(29, 'There is a way of describing XML data, how?', 'XML uses a DTD to describe the data.', 'XML uses XSL to describe data.', 'XML uses a description node to describe data.', 'Both 1 and 3', 'Both 1 and 3'),
(30, 'Which of the following data type is not seal or datatype supported by PHP?', 'Array', 'String', 'Float', 'Boolean', 'String'),
(31, 'When is HTTP GET method typically used?', 'To retrieve a representation of a resource', 'To update a new resource', 'To delete a resources', 'To refresh a resource', 'To retrieve a representation of a resource'),
(32, 'In PHP if a boolean variable $alive= 5 ?', '$alive is false', '$alive is true', '$alive is overflow', 'the statement is snot valid', '$alive is true'),
(33, 'Which of the following may be part of a class definition in Java?', 'instance variables', 'instance methods', 'constructors', 'all of the above', 'all of the above'),
(34, 'In Java a constructor _______?', 'must have the same name as the class it is declared within.', 'is used to create objects.', 'may be declared private', 'A, B and C', 'A, B and C'),
(35, 'Which of the following is TRUE?', 'In java, an instance field declared public generates a compilation error.', 'int is the name of a class available in the package java.lang', 'Instance variable names may only contain letters and digits.', 'A class has always a constructor (possibly automatically supplied by the java compiler).', 'A class has always a constructor (possibly automatically supplied by the java compiler).'),
(36, 'How can we make attributes have multiple values in XML?', '<myElement myAttribute="value1 value2"/>', '<myElement myAttribute="value1" myAttribute="value2"/>', '<myElement myAttribute="value1, value2"/>', 'Attributes cannot have multiple values', 'Attributes cannot have multiple values'),
(37, 'Comment in XML document is given by?', '<?-- -->', '<!-- --!>', '<!-- -->', '</-- -->', '<!-- -->'),
(38, 'Which statement is true?', 'All the statements are true', 'All XML elements must have a closing tag', 'All XML elements must be lower case', 'All XML documents must have a DTD', 'All XML elements must have a closing tag'),
(39, 'Which of the following method is suitable when you need to send larger form submissions?', 'Get', 'Post', 'Both Get and Post', 'There is no direct way for larger form. You need to store them in a file and retrieve', 'Post');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` mediumint(12) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--


-- --------------------------------------------------------

--
-- Table structure for table `usr_content`
--

CREATE TABLE IF NOT EXISTS `usr_content` (
  `username` varchar(30) NOT NULL,
  `qID` int(11) NOT NULL,
  `cData` text NOT NULL,
  `skipped` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`,`qID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_content`
--


-- --------------------------------------------------------

--
-- Table structure for table `usr_result`
--

CREATE TABLE IF NOT EXISTS `usr_result` (
  `username` varchar(30) NOT NULL,
  `totscore` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_result`
--


-- --------------------------------------------------------

--
-- Table structure for table `usr_session`
--

CREATE TABLE IF NOT EXISTS `usr_session` (
  `username` varchar(30) NOT NULL,
  `starttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `endtime` timestamp NULL DEFAULT NULL,
  `curqID` int(11) NOT NULL,
  `numq` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_session`
--

