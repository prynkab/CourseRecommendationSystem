# CourseRecommendationSystem
#Introduction 
Overview:
Course Recommendation System is a system which recommends users courses based on their preference and also to manage and keep track of all their courses in this system. A user creates an account using general requirements and can login using this specifications. Based on the choice of their field/preference in courses they can search and register for courses and keep track of all the registered courses.
Architecture:
In this project we are integrating two-tier architecture. A two-tier architecture is a software architecture which constitutes of:
•	Data Tier (Database)
•	Client Tier (Client Application)
It is a client server application. There is direct communication between client and server and no intermediate body is required. 


PROBLEM DEFINITION 
Make a Mini Project on Course Recommendation System that recommends users courses based on their preference and also to manage and keep track of all their courses in this system.


AIM 
To create an Event Reminder App that will notify users regarding any special events like Birthdays, Anniversaries, etc. of their friends and family according to the time set by the user and user can also share greeting cards and can save the interests of a particular person which will help him to find a perfect gift. There will be one section of contacts in which user can save all his/her contacts and information related to them


Chapter 2: System Analysis
System Requirements System requirements are the configuration that a system must have in order for a hardware or software application to run smoothly and efficiently. Failure to meet these requirements can result in installation problems or performance problems. The former may prevent a device or application from getting installed, whereas the latter may cause a product to malfunction or perform below expectation or even to hang or crash.
 Hardware Requirements : 
The hardware requirements are the requirements of a hardware device. Most hardware only has operating system requirements or compatibility. For example, a printer may be compatible with Windows XP but not compatible with newer versions of Windows like Windows 10, Linux, or the Apple macOS. 
•	System : 
•	Hard Disk : 
•	Floppy Drive : 
•	Monitor : 
•	Mouse : 
•	Ram : 
Software Requirements : 
The software requirements are description of features and functionalities of the target system. Requirements convey the expectations of users from the software product. The requirements can be obvious or hidden, known or unknown, expected or unexpected from client’s point of view. 
•	Operating system : Windows 10 
•	Languages and Frameworks used in the project : ➢ Front-end - React ➢ Database - MySQL ➢ Back-end - NodeJS 
•	Tool Kit : 
•	IDE :








CHAPTER 4 : DBMS ARCHITECTURE


Our project is based on 2-Tier DBMS Architecture.

Two Tier Architecture

A 2-Tier Architecture in DBMS is a Database architecture where the presentation layer runs on a client (PC, Mobile, Tablet, etc.), and data is stored on a server called the second tier. Two tier architecture provides added security to the DBMS as it is not exposed to the end-user directly. It also provides direct and faster communication.
2-	tier DBMS architecture includes an Application layer between the user and the DBMS, which is responsible to communicate the user's request to the database management system and then send the response from the DBMS to the user.

Fig 1. 2-Tier Architecture
This interaction between client and server uses Application Program Interface like ODBC and JDBC.

•	ODBC − Open Database Connectivity

•	JDBC − Java Database Connectivity
When there are a large number of users at client side to access the database, this architecture gives a poor performance.The server side is responsible for delivering the functionalities like query processing and management of transactions.
For example − Oracle, Sybase, Microsoft SQL Server etc.
 
The Tier-2 architecture of DBMS is diagrammatically represented as follows –
Fig 2. DBMS 2-Tier Architecture


Justification for 2-Tier Architecture :

Remi Application is based on 2-tier DBMS Architecture as this application on client-end can directly communicate with the database i.e. server side. As user will able to see the application which is the application layer for the architecture. While using the app the information related to event which is added by user like Event Name, Event Type, Event Date, Event Time, etc. so this information will get stored in Database Directly and from that database only we will come to know at what time user want reminder. So according to that time user will get the notification.

For Client-Server Architecture or 2-Tier Architecture, Client is the user who will use the Remi app for setting the reminder for a particular event. Database or server side will be MySql Database in which all the information realted to the Events, Contacts will be stored so that whenever client need any information about a particular person like events related to that person or interests of that person then that information will directly come from the database or server.
It is a simple Architecture where user will see this app which is the application layer of our project so whatever the user will see in the Remi app, it will come in application layer of 2-tier architecture. Then the information stored in database is database layer i.e server side which will provide the information whenever user will ask for the particular data.
 
Our project is totally based on Client-Server or 2-Tier Architecture as it uses only two layers one is client i.e user and other is server or simply a database system which will fulfill the client request by collecting the information from the database and sending it to the user or client-side.

