create table anmelder
(
    name    varchar(200) null,
    email   varchar(200) null,
    sprache char(8)      null,
    id      int auto_increment
        primary key
);

INSERT INTO emensawerbeseite.anmelder (name, email, sprache, id) VALUES ('Fachrial+Dimas+Putra+Perdana', 'fachrialdimaspp15@gmail.com', 'English', 1);
INSERT INTO emensawerbeseite.anmelder (name, email, sprache, id) VALUES ('Max+Mustermann', 'Max.Mustermann@email.com', 'Deutsch', 2);
INSERT INTO emensawerbeseite.anmelder (name, email, sprache, id) VALUES ('jericho+Jordan', 'jericho.jordan@gmail.com', 'Deutsch', 3);
