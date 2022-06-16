drop table if exists demo;
create table demo (
  id integer not null auto_increment,
  name text,
  PRIMARY KEY (id)
);

insert into demo (name) values ('jeder'),('name');
delete from demo where name= 'name';
update demo set name='jede' where name='jeder';
select * from demo;
