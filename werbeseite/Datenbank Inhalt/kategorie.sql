create table kategorie
(
    id        bigint       not null
        primary key,
    name      varchar(80)  not null,
    eltern_id bigint       null,
    bildname  varchar(200) null,
    constraint kategorie_kategorie__fk
        foreign key (eltern_id) references kategorie (id)
);

INSERT INTO emensawerbeseite.kategorie (id, name, eltern_id, bildname) VALUES (1, 'Aktionen', null, 'kat_aktionen.png');
INSERT INTO emensawerbeseite.kategorie (id, name, eltern_id, bildname) VALUES (2, 'Menus', null, 'kat_menu.gif');
INSERT INTO emensawerbeseite.kategorie (id, name, eltern_id, bildname) VALUES (3, 'Hauptspeisen', 2, 'kat_menu_haupt.bmp');
INSERT INTO emensawerbeseite.kategorie (id, name, eltern_id, bildname) VALUES (4, 'Vorspeisen', 2, 'kat_menu_vor.svg');
INSERT INTO emensawerbeseite.kategorie (id, name, eltern_id, bildname) VALUES (5, 'Desserts', 2, 'kat_menu_dessert.pic');
INSERT INTO emensawerbeseite.kategorie (id, name, eltern_id, bildname) VALUES (6, 'Mensastars', 1, 'kat_stars.tif');
INSERT INTO emensawerbeseite.kategorie (id, name, eltern_id, bildname) VALUES (7, 'Erstiewoche', 1, 'kat_erties.jpg');
