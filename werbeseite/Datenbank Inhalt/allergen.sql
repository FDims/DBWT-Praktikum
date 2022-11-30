create table allergen
(
    code char(4)      not null
        primary key,
    name varchar(800) not null,
    typ  varchar(20)  not null
);

INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('a', 'Getreideprodukte', 'Getreide (Gluten)');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('a1', 'Weizen', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('a2', 'Roggen', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('a3', 'Gerste', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('a4', 'Dinkel', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('a5', 'Hafer', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('a6', 'Dinkel', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('b', 'Fisch', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('c', 'Krebstiere', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('d', 'Schwefeldioxid/Sulfit', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('e', 'Sellerie', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('f', 'Milch und Laktose', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('f1', 'Butter', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('f2', 'Käse', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('f3', 'Margarine', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('g', 'Sesam', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('h', 'Nüsse', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('h1', 'Mandeln', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('h2', 'Haselnüsse', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('h3', 'Walnüsse', 'Allergen');
INSERT INTO emensawerbeseite.allergen (code, name, typ) VALUES ('i', 'Erdnüsse', 'Allergen');
