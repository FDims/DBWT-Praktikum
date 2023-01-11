use emensawerbeseite;

create table if not exists bewertung(
                                        gericht_id int not null,
                                        bemerkung varchar(500) NOT NULL CHECK ( octet_length('bemerkung')>=5 ),
                                        sternebewertung enum('Sehr Gut','Gut','Schlecht','Sehr Schlecht') NOT NULL,
                                        bewertungszeitpunkt datetime,
                                        benutzer_id int(10),
                                        hervorgehoben boolean
);