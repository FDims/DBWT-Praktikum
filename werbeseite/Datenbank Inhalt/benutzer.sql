create table benutzer
(
    id                bigint auto_increment
        primary key,
    name              varchar(200)  not null,
    email             varchar(100)  not null,
    passwort          varchar(200)  not null,
    admin             tinyint(1)    not null,
    anzahlfehler      int default 0 not null,
    anzahlanmeldungen int default 0 not null,
    letzteanmeldungen datetime      null,
    letztefehler      datetime      null,
    constraint email
        unique (email)
);

INSERT INTO emensawerbeseite.benutzer (id, name, email, passwort, admin, anzahlfehler, anzahlanmeldungen, letzteanmeldungen, letztefehler) VALUES (1, 'admin', 'admin@emensa.example', '1e384a9e4a3a1e7b0ab1b7e0bddc5ebfd7d713b1', 1, 0, 7, '2022-12-16 10:50:06', null);
INSERT INTO emensawerbeseite.benutzer (id, name, email, passwort, admin, anzahlfehler, anzahlanmeldungen, letzteanmeldungen, letztefehler) VALUES (4, 'User1', 'user1@gmail.com', 'c2b1839aed110a65c9b7932275c23c195eb4c60b', 0, 0, 1, null, null);
INSERT INTO emensawerbeseite.benutzer (id, name, email, passwort, admin, anzahlfehler, anzahlanmeldungen, letzteanmeldungen, letztefehler) VALUES (5, 'User2', 'user2@gmail.com', 'a594eec88425cf75f9748fe86f7a68955b4c84aa', 0, 0, 1, null, null);
