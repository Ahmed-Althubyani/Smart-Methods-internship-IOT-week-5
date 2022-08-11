# Smart-Methods-internship-IOT-week-5  
This is the work of week 5 of the internship for internet of things track which include:  
1- create a webpage that control the robot directions  
&emsp;1.1- it will use POST method  
&emsp;1.2- the value is the direction of the robot and it will be saved in a database  
2- create a database of any type  
&emsp;2.1- to create mySQL database table for the control:  
&emsp;&emsp;CREATE TABLE `control` (  
&emsp;&emsp;&emsp;`id` int NOT NULL AUTO_INCREMENT,  
&emsp;&emsp;&emsp;`value` varchar(45) NOT NULL,  
&emsp;&emsp;&emsp;`date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,  
&emsp;&emsp;&emsp;PRIMARY KEY (`id`));  
3- create a webpage that show the direction of the robot from the last POST in a database  
&emsp;3.1- will get the value from the the database with $_GET variable   
&emsp;3.2- the value will be the last value in the database   
4- create an algorithm to link the motors to the control page  
&emsp;4.1- the control page will save the direction choosen for the robot in a database  
&emsp;4.2- the motors will be connected to an arduino and the arduino to the ESP32  
&emsp;4.3- in the ESP32 we use HTTPClient library to use GET method in a loop and connect to showValue.php  
&emsp;4.4- showValue.php will get the latest value in the database  
&emsp;4.5- that value will be used for controlling the motors
