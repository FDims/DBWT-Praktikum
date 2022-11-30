create table gericht_hat_allergen
(
    code       char(4) null,
    gericht_id bigint  not null,
    constraint gericht_hat_allergen___fk
        foreign key (gericht_id) references gericht (id),
    constraint gericht_hat_allergen_allergen_code_fk
        foreign key (code) references allergen (code)
);

