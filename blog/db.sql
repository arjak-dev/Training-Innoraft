-- create database 
create database blog_db;

-- change database--
use blog_db;

-- create user table 
create table user (user_name char(20),first_name char(20), last_name char(20), email_id char(20), phone_no int);
-- adding password feild
alter table user add column password char(20);

-- add primary key
alter table user add primary key(user_name,password);

-- CREATE TABLE BLOG
create table blog(user_name char(20),blog_title char(40), time timestamp, image char(30));

-- ADD PRIMARY KEY
 alter table blog add primary key(user_name, blog_title);

-- ADD FOREIGN KEY 
alter table blog add foreign key(user_name) references user(user_name);

