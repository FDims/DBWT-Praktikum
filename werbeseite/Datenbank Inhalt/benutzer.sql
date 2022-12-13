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

