-- create database 
create database blog_db;

-- change database--
use blog_db;

-- create user table 
create table user (user_id int auto_increment primary key, user_name char(20),first_name char(20), last_name char(20),password char(20), email_id char(40), phone_no char(12),image char(100));

-- CREATE TABLE BLOG
create table blog(user_id int,blog_id int auto_incement primary key, blog_title char(40),blog_body text, time long, image char(30));

-- ADD FOREIGN KEY 
alter table blog add foreign key(user_id) references user(user_id);

