drop table if exists demo;
create table demo (
  demo_id int not null auto_increment,
  name varchar(100),
  primary key(demo_id));

insert into demo (name) values ('peter'),('paul'),('mary');
select * from demo;
