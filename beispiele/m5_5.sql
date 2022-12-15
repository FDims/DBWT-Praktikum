CREATE PROCEDURE anzahlanmeldungen (
    IN abteilung INTEGER,
    OUT gehalt INTEGER)
BEGIN
    SELECT MAX(m.gehalt)
    INTO gehalt
    FROM mitarbeitende m
    WHERE m.abteilung_id = abteilung;
END;