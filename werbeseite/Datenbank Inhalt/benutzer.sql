create table benutzer
(
    id           bigint       not null
        primary key,
    name                varchar(200)  not null,
    email               varchar(100) not null unique ,
    passwort            varchar(200)   not null,
    admin               boolean   not null,
    anzahlfehler        int   not null,
    anzahlanmeldungen   int   not null,
    letzteanmeldung     date,
    letztefehler        date
    constraint name
        unique (name),
    constraint email
        unique (email),
);