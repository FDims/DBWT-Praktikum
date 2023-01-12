create table bewertung
(
    gericht_id          int                                                   not null,
    bemerkung           varchar(500)                                          not null,
    sternebewertung     enum ('Sehr Gut', 'Gut', 'Schlecht', 'Sehr Schlecht') not null,
    bewertungszeitpunkt datetime                                              null,
    benutzer_id         int(10)                                               null,
    hervorgehoben       tinyint(1)                                            null,
    id                  int auto_increment
        primary key,
    constraint bemerkung
        check (octet_length('bemerkung') >= 5)
);

INSERT INTO emensawerbeseite.bewertung (gericht_id, bemerkung, sternebewertung, bewertungszeitpunkt, benutzer_id, hervorgehoben, id) VALUES (3, 'Schemkt sehr gut', 'Sehr Gut', '2023-01-12 16:19:14', 4, 1, 1);
INSERT INTO emensawerbeseite.bewertung (gericht_id, bemerkung, sternebewertung, bewertungszeitpunkt, benutzer_id, hervorgehoben, id) VALUES (10, 'Einfach Beispiele', 'Gut', '2023-01-12 16:19:24', 4, 0, 2);
INSERT INTO emensawerbeseite.bewertung (gericht_id, bemerkung, sternebewertung, bewertungszeitpunkt, benutzer_id, hervorgehoben, id) VALUES (3, 'gefaellt mir gut', 'Gut', '2023-01-12 16:19:51', 5, 1, 3);
