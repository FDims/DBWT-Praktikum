CREATE VIEW view_suppengerichte AS
    SELECT g.id,g.name FROM gericht g WHERE g.name like '%Suppe%';

CREATE VIEW view_anmeldungen AS
    SELECT b.id,b.name,b.anzahlanmeldungen FROM benutzer b ORDER BY anzahlanmeldungen DESC;

CREATE VIEW view_kategoriegerichte_vegetarisch AS
SELECT g.id gericht_id,g.name gericht_name,g.vegetarisch,k.name kategorie_name FROM gericht g RIGHT JOIN gericht_hat_kategorie ghk on g.id = ghk.gericht_id RIGHT JOIN kategorie k on ghk.kategorie_id = k.id WHERE g.vegetarisch = '1' OR g.vegetarisch IS null;
