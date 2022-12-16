CREATE PROCEDURE anzahlanmeldungen (
    IN searchid INTEGER)
BEGIN
    UPDATE benutzer SET anzahlanmeldungen= anzahlanmeldungen+1 WHERE id = searchid;
END;