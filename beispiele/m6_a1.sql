use emensawerbeseite;

create table if not exists bewertung(
                                        gericht_id int not null,
                                        bemerkung varchar(500) NOT NULL,
                                        sternebewertung int check(sternebewertung<=5),
                                        sternebewertung_opt varchar(15) NOT NULL,
                                        bewertungszeitpunkt datetime,
                                        benutzer_id int(10),
                                        hervorgehoben boolean
);