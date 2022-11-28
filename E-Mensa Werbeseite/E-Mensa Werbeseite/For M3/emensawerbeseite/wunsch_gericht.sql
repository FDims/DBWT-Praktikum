create table wunsch_gericht
(
    id           bigint       not null
        primary key,
    name         varchar(80)  not null,
    beschreibung varchar(800) not null,
    erstellungsdatum   date         not null,
    name_ersteller varchar(80) not null ,
    email   varchar(200) null

);