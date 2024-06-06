CREATE DATABASE IF NOT EXISTS blogger;
use blogger;

CREATE TABLE person (
	id int not null auto_increment,
    fullName varchar(255),
    email varchar(255),
    psw varchar(255),
    image varchar(255),
    address varchar(255),
    primary key (id)
);

CREATE TABLE article (
	id int not null auto_increment,
    person_id int not null,
    categorie varchar(255),
    title varchar(255),
    content varchar(255),
    image varchar(255),
    created_at varchar(255),
    updated_at varchar(255),
    primary key (id),
    foreign key (person_id) references person(id)
);

CREATE TABLE comment (
	id int not null auto_increment,
    person_id int not null,
    article_id int not null,
    content text(255),
    primary key (id),
    foreign key (person_id) references person(id),
    foreign key (article_id) references article(id)
);