# Course Recommendation System
# Introduduction
- Overview:  
Course Recommendation System is a system which recommends users courses based on their preference and also to manage and keep track of all their courses in this system. A user creates an account using general requirements and can login using this specifications. Based on the choice of their field/preference in courses they can search and register for courses and keep track of all the registered courses. 
- Architecture:  
In this project we are integrating two-tier architecture. A two-tier architecture is a software architecture which constitutes of:
•	Data Tier (Database)
•	Client Tier (Client Application)
It is a client server application. There is direct communication between client and server and no intermediate body is required. 
# System Analysis
System Requirements System requirements are the configuration that a system must have in order for a hardware or software application to run smoothly and efficiently. Failure to meet these requirements can result in installation problems or performance problems. The former may prevent a device or application from getting installed, whereas the latter may cause a product to malfunction or perform below expectation or even to hang or crash.
# Hardware Requirements:
The hardware requirements are the requirements of a hardware device. Most hardware only has operating system requirements or compatibility. For example, a printer may be compatible with Windows XP but not compatible with newer versions of Windows like Windows 10, Linux, or the Apple macOS. 

•	System : 

•	Hard Disk : 

•	Floppy Drive : 

•	Monitor : 

•	Mouse : 

•	Ram : 
# Software Requirements:
The software requirements are description of features and functionalities of the target system. Requirements convey the expectations of users from the software product. The requirements can be obvious or hidden, known or unknown, expected or unexpected from client’s point of view. 

•	Operating system : Windows 10 

•	Languages and Frameworks used in the project : ➢ Front-end - React ➢ Database - MySQL ➢ Back-end - NodeJS 

•	Tool Kit : 

•	IDE :

# DBMS Architecture:
This project is based on two tier Architecture.
# Two Tier Architecture
A two tier architecture in DBMS is a databse architecture where the presentation layer runs on client (PC, mobile, tablet, etc) and the data is stored in the second layer known as server.  Two tier architecture provides added security to the DBMS as it is not exposed to the end-user directly. It also provides direct and faster 
communication.

2-	tier DBMS architecture includes an Application layer between the user and the DBMS, which is responsible to communicate the user's request to the database management system and then send the response from the DBMS to the user.
This interaction between client and server uses Application Program Interface like ODBC and JDBC.

•	ODBC − Open Database Connectivity

•	JDBC − Java Database Connectivity

When there are a large number of users at client side to access the database, this architecture gives a poor performance.The server side is responsible for delivering the functionalities like query processing and management of transactions.For example − Oracle, Sybase, Microsoft SQL Server etc. 

# Justification for two-tier Architecture
This Course Recommendation System is based on two-tier DBMS architecture as this application on client-end can directly communicate with the database i.e the server side. As the user will be able to see the application which is the application layer of the architecture. While using this application the information related to the courses selected like the name of the course, date of purchasing the course, user details, payments details will be stored in the database directly and from that database we will know how to recommend other courses to the user. 

It is a simple Architecture where user will see this app which is the application layer of our project so whatever the user will see in the website, it will come in application layer of 2-tier architecture. Then the information stored in database is database layer i.e server side which will provide the information whenever user will ask for the particular data.

# Data Modelling
# ER Model:
![image](https://user-images.githubusercontent.com/67796632/156896468-cb60b1b8-c05c-40f6-9f03-be8cedd1ad17.png)

# Database Design
# Functional Requirements:
- Database: CourseRecommendation
# Required Entities:
- Register for New User
- Login
- Register For Courses
- My Courses
- Payment
# Register for New User
- Description:
•	This feature can be used to register new users information used for creating account in the system.

•	System must be able to validate information in the registration form

•	These information is then stored in the ‘Register’ table in the ‘CourseRecommendation’ database.
# Login
- Description:

•	This feature can be used to login existing users and save the data in the ‘login’ table of the database.

•	This takes the users to their personal account.

•	The user can only access their account only using their registered data. 

# Register For Course
- Description:

•	This feature is used to enroll the user to various courses available 

•	This stores the data information of all the courses in the database of a particular user

# Payment:
- Description:

•	This feature is used to store the payment details of the user after they register for a course.

# Snapshots:
- Register For User Database:

![Screenshot (404)](https://user-images.githubusercontent.com/67796632/156896955-df6740f7-eb1d-47fc-be72-82b698a8463c.png)

- Register For Course

![Screenshot (405)](https://user-images.githubusercontent.com/67796632/156896972-629506a4-833d-4250-bd39-177bdc5efb69.png)

-  Courses

![Screenshot (406)](https://user-images.githubusercontent.com/67796632/156896985-f35e592c-e67a-41f6-824f-a76253217443.png)

-  Payment Method

![Screenshot (407)](https://user-images.githubusercontent.com/67796632/156896992-bf8cdb09-bd89-447c-a5ee-2e2b920f0540.png)

- Frontend of the website:

![Screenshot (408)](https://user-images.githubusercontent.com/67796632/156897087-b44bc406-bb49-4a6b-b8a1-3c14408b1104.png)

![Screenshot (409)](https://user-images.githubusercontent.com/67796632/156897104-d2ad2567-2be7-4d0e-a26f-487436213897.png)

![Screenshot (410)](https://user-images.githubusercontent.com/67796632/156897108-a05a095f-1137-4473-b151-1ec37b4dfad9.png)

![Screenshot (411)](https://user-images.githubusercontent.com/67796632/156897112-05c42b38-54a8-47b9-815e-f72ae79346ad.png)

![Screenshot (412)](https://user-images.githubusercontent.com/67796632/156897115-30e21050-98ff-4c8e-9dfe-2339de71a3c7.png)

![Screenshot (413)](https://user-images.githubusercontent.com/67796632/156897078-944de824-677f-435b-8418-3331f16341ba.png)







