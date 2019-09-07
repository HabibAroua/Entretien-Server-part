create table users(login varchar(50) PRIMARY Key , nom varchar(50), prenom varchar(50) , PASSWORD varchar(255));

create table zone(nomzone varchar(100) primary key);

create table carrefour (id int AUTO_INCREMENT PRIMARY key , nomCarefour varchar(50) UNIQUE);

create table entretien (num_prog int PRIMARY Key , type varchar(15));

create table annee(val int PRIMARY Key);

create table mois(id int AUTO_INCREMENT PRIMARY Key , val int);

create table semaine(id int AUTO_INCREMENT PRIMARY Key , val int);

alter table users add nomzone varchar(100);

alter table users add CONSTRAINT fk1 FOREIGN key(nomzone) REFERENCES zone(nomzone);

alter table carrefour add nomzone varchar(100);

alter table carrefour add CONSTRAINT fk2 FOREIGN key(nomzone) REFERENCES zone(nomzone);

alter table entretien add id_carrefour int;

alter table entretien add CONSTRAINT fk3 FOREIGN key(id_carrefour) REFERENCES carrefour(id);

alter table mois add val_annee int;

alter table mois add CONSTRAINT fk4 FOREIGN key(val_annee) REFERENCES annee(val);

alter table semaine add id_mois int;

alter table semaine add CONSTRAINT fk5 FOREIGN key(id_mois) REFERENCES mois(id);

create table semaine_entretien (id int , id_semaine int , num_prog int , date_entretien date);

alter table semaine_entretien add CONSTRAINT fk6 PRIMARY key(id,id_semaine,num_prog);

ALTER TABLE semaine_entretien MODIFY COLUMN id INT auto_increment;

alter table semaine_entretien add CONSTRAINT fk7 FOREIGN key(id_semaine) REFERENCES semaine(id);

alter table semaine_entretien add CONSTRAINT fk8 FOREIGN key(num_prog) REFERENCES entretien(num_prog);

alter table semaine_entretien add est_vrai int ;