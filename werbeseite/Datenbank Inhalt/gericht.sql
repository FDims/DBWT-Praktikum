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
    bildname     varchar(200) null,
    constraint name
        unique (name),
    constraint preis_extern
        check (`preis_extern` > `preis_intern`),
    constraint preis_intern
        check (`preis_intern` > 0)
);

create index Name_indexiert
    on gericht (name);

INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (1, 'Bratkartoffeln mit Speck und Zwiebeln', 'Kartoffeln mit Zwiebeln und gut Speck', '2020-08-25', 0, 0, 2.3, 4, '01_bratkartoffel.jpg');
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (3, 'Bratkartoffeln mit Zwiebeln', 'Kartoffeln mit Zwiebeln und ohne Speck', '2020-08-25', 1, 1, 2.3, 4, '03_bratkartoffel.jpg');
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (4, 'Grilltofu', 'Fein gewürzt und mariniert', '2020-08-25', 1, 1, 2.5, 4.5, '04_tofu.jpg');
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (5, 'Lasagne', 'Klassisch mit Bolognesesoße und Creme Fraiche', '2020-08-24', 0, 0, 2.5, 4.5, null);
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (6, 'Lasagne vegetarisch', 'Klassisch mit Sojagranulatsoße und Creme Fraiche', '2020-08-24', 1, 0, 2.5, 4.5, '06_lasagne.jpg');
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (7, 'Hackbraten', 'Nicht nur für Hacker', '2020-08-25', 0, 0, 2.5, 4, null);
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (8, 'Gemüsepfanne', 'Gesundes aus der Region, deftig angebraten', '2020-08-25', 1, 1, 2.3, 4, null);
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (9, 'Hühnersuppe', 'Suppenhuhn trifft Petersilie', '2020-08-25', 0, 0, 2, 3.5, '09_suppe.jpg');
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (10, 'Forellenfilet', 'mit Kartoffeln und Dilldip', '2020-08-22', 0, 0, 3.8, 5, '10_forelle.jpg');
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (11, 'Kartoffel-Lauch-Suppe', 'der klassische Bauchwärmer mit frischen Kräutern', '2020-08-22', 1, 0, 2, 3, '11_soup.jpg');
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (12, 'Kassler mit Rosmarinkartoffeln', 'dazu Salat und Senf', '2020-08-23', 0, 0, 3.8, 5.2, '12_kassler.jpg');
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (13, 'Drei Reibekuchen mit Apfelmus', 'grob geriebene Kartoffeln aus der Region', '2020-08-23', 1, 0, 2.5, 4.5, '13_reibekuchen.jpg');
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (14, 'Pilzpfanne', 'die legendäre Pfanne aus Pilzen der Saison', '2020-08-23', 1, 0, 3, 5, null);
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (15, 'Pilzpfanne vegan', 'die legendäre Pfanne aus Pilzen der Saison ohne Käse', '2020-08-24', 1, 1, 3, 5, '15_pilze.jpg');
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (16, 'Käsebrötchen', 'schmeckt vor und nach dem Essen', '2020-08-24', 1, 0, 1, 1.5, null);
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (17, 'Schinkenbrötchen', 'schmeckt auch ohne Hunger', '2020-08-25', 0, 0, 1.25, 1.75, '17_broetchen.jpg');
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (18, 'Tomatenbrötchen', 'mit Schnittlauch und Zwiebeln', '2020-08-25', 1, 1, 1, 1.5, null);
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (19, 'Mousse au Chocolat', 'sahnige schweizer Schokolade rundet jedes Essen ab', '2020-08-26', 1, 0, 1.25, 1.75, '19_mousse.jpg');
INSERT INTO emensawerbeseite.gericht (id, name, beschreibung, erfasst_am, vegetarisch, vegan, preis_intern, preis_extern, bildname) VALUES (20, 'Suppenkreation á la Chef', 'was verschafft werden muss, gut und günstig', '2020-08-26', 0, 0, 0.5, 0.9, '20_suppe.jpg');
