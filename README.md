# Smart-Methods-internship-IOT-week-5  
This is the work of week 5 of the internship for internet of things track which include:  
1- create a webpage that control the robot directions  
&emsp;1.1- it will use POST method  
&emsp;1.2- the value is the direction of the robot  
2- create a database of any type  
&emsp;2.1- to create mySQL database table for the control:  
&emsp;&emsp;CREATE TABLE `control` (  
&emsp;&emsp;&emsp;`id` int NOT NULL AUTO_INCREMENT,  
&emsp;&emsp;&emsp;`value` varchar(45) NOT NULL,  
&emsp;&emsp;&emsp;`date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,  
&emsp;&emsp;&emsp;PRIMARY KEY (`id`));  
3- create a webpage that save the direction from the POST in a database  
&emsp;3.1- will get the value from the the control page with POST method  
&emsp;3.2- the value will be in $_POST and only the first latter will be saved and then displayed in the page if saved successfully  
4- create an algorithm to ling the motors to the control page
&emsp;4.1- 
