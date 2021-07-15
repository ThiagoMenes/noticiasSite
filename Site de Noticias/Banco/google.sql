 create database google;
 use google;
 
 CREATE TABLE noticias(
	titulo varchar(130) not null primary key,
    corpo varchar(10000) not null,
    fonte varchar(80) not null);
    
    create table likes(
    like_id int not null primary key auto_increment,
    user_id int not null,
    noticia_id int not null);
    
    create table users(
    id_user int primary key not null auto_increment,
    nome varchar(200) not null);
    

ALTER TABLE noticias DROP PRIMARY KEY;
alter table noticias add id_noticia int not null primary key auto_increment first;
    
alter table noticias drop column id_noticia ;
rename table tbgoogle to noticias;
Select * From noticias;

Insert into users (id_user,nome) VALUES (NULL,'Thiago Meneses');

select * from noticias where id_noticia = 1;

SELECT * FROM noticias WHERE id_noticia=(SELECT max(id_noticia) FROM noticias);


SELECT * FROM noticias WHERE id_noticia ORDER BY RAND() LIMIT 5;