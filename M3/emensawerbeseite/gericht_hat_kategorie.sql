create table gericht_hat_kategorie
(
    gericht_id   bigint not null,
    kategorie_id bigint not null,
    constraint gericht_hat_kategorie_gericht_null_fk
        foreign key (gericht_id) references gericht (id),
    constraint gericht_hat_kategorie_kategorie_null_fk
        foreign key (kategorie_id) references kategorie (id)
);

