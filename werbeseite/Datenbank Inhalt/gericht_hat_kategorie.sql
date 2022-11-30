create table gericht_hat_kategorie
(
    gericht_id   bigint not null,
    kategorie_id bigint not null,
    constraint gericht_hat_kategorie_gericht_null_fk
        foreign key (gericht_id) references gericht (id),
    constraint gericht_hat_kategorie_kategorie_null_fk
        foreign key (kategorie_id) references kategorie (id)
);

INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (1, 3);
INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (3, 3);
INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (4, 3);
INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (5, 3);
INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (6, 3);
INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (7, 3);
INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (9, 3);
INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (16, 4);
INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (17, 4);
INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (18, 4);
INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (16, 5);
INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (17, 5);
INSERT INTO emensawerbeseite.gericht_hat_kategorie (gericht_id, kategorie_id) VALUES (18, 5);
