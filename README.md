# travel
`Simple travel website`
# instructions for the database
`create database if not exists book_db
default character set utf8
default collate utf8_general_ci;`


# table creation
`create table if not exists cursos(
id int not null auto_increment, 
nome varchar(255) not null,
email	varchar(255) not null,
phone	int(11)	not null,
address	varchar(255) not null,
location varchar(255) not null,
guests	int(255) not null,
arrivals date not null,
leaving	date not null,
primary key (id)
)default charset = utf8;`