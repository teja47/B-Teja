
-- Table structure for table `search_engine`

CREATE TABLE `search_engine` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `blurb` text NOT NULL,
  `url` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_engine`
--

INSERT INTO `search_engine` (`id`, `title`, `blurb`, `url`, `keywords`) VALUES
(1, 'webdeveloper', 'webdevelopment: to create the webpages,develop and manage  ', 'http://learnitanytime.com/5431/web-design-theory-tutorial-must-know-principles-and-best-practices/', 'web development data base javascript '),
(2, 'HR', 'human resources manager', 'https://study.com/articles/How_to_Become_a_Human_Resource_Manager_Education_and_Career_Roadmap.html', 'HR human resources english communicationskills leadership'),
(3, 'software engineer', 'software engineering', 'https://www.indeed.co.in/cmp/Tata-Consultancy-Services-%28tcs%29/salaries/Software-Engineer', 'software engineer '),
(4, 'java developer', 'java development for projects', 'https://www.naukri.com/tcs-java-jobs', 'java coding javascript');
(5, 'python ', 'python development', 'https://www.glassdoor.co.in/Jobs/Infosys-python-developer-Jobs-EI_IE7927.0,7_KO8,24.htm?countryRedirect=true', ' coding python');
(6, 'app developer', 'application development', 'https://www.tcs.com/tcs-leader-mobile-application-development-testing-idc', 'java coding javascript python android application ');
(7, 'frontend developer', 'frontend development', 'https://www.naukri.com/tcs-ui-jobs', 'java c cpp python  ');
(8, 'backend developer', 'backend development', 'https://www.naukri.com/backend-jobs-in-jalandhar', 'java coding c cpp python');
(9, 'team manager', 'team management', 'https://www.monsterindia.com/search/team-manager-jobs', 'leadership communicationskills ');
(10, 'testing engineer', 'testing the code ', 'https://www.naukri.com/test-engineer-jobs', 'coding javascript python ');
(11, 'data science','data analyser', 'https://www.naukri.com/data-scientist-jobs', 'data coding mangoDB bigdata');



--
-- Indexes for table `search_engine`
--
ALTER TABLE `search_engine`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT for table `search_engine`
--
ALTER TABLE `search_engine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

