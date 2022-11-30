create table gericht
(
    id           bigint       not null
        primary key,
    name         varchar(80)  not null,
    beschreibung varchar(800) not null,
    erfasst_am   date         not null,
    vegetarisch  tinyint(1)   not null,
    vegan        tinyint(1)   not null,
    preis_intern double       not null,
    preis_extern double       not null,
    constraint name
        unique (name),
    constraint preis_extern
        check (`preis_extern` > `preis_intern`),
    constraint preis_intern
        check (`preis_intern` > 0)
);

