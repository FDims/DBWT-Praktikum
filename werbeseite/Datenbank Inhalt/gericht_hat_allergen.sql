create table gericht_hat_allergen
(
    code       char(4) null,
    gericht_id bigint  not null,
    constraint gericht_hat_allergen_allergen_code_fk
        foreign key (code) references allergen (code)
            on update cascade,
    constraint gericht_hat_allergen_gericht__fk
        foreign key (gericht_id) references gericht (id)
            on delete cascade
);

INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h', 1);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a3', 1);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a4', 1);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('f1', 3);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a6', 3);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('i', 3);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a3', 4);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('f1', 4);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a4', 4);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h3', 4);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('d', 6);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h1', 7);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a2', 7);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h3', 7);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('c', 7);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a3', 8);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h3', 10);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('d', 10);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('f', 10);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('f2', 12);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h1', 12);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a5', 12);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('c', 1);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a2', 9);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('i', 14);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('f1', 1);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a1', 15);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a4', 15);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('i', 15);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('f3', 15);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h3', 15);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h', 1);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a3', 1);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a4', 1);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('f1', 3);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a6', 3);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('i', 3);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a3', 4);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('f1', 4);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a4', 4);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h3', 4);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('d', 6);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h1', 7);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a2', 7);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h3', 7);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('c', 7);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a3', 8);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h3', 10);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('d', 10);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('f', 10);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('f2', 12);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h1', 12);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a5', 12);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('c', 1);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a2', 9);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('i', 14);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('f1', 1);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a1', 15);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('a4', 15);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('i', 15);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('f3', 15);
INSERT INTO emensawerbeseite.gericht_hat_allergen (code, gericht_id) VALUES ('h3', 15);
