use emensawerbeseite;

create table if not exists bewertung(
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
