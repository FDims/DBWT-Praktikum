create table wunschgericht
(
    Name         varchar(100) null,
    Email        varchar(200) null,
    Gerict       varchar(100) null,
    Beschreibung text         null,
    date         char(15)     null,
    id           bigint auto_increment
        primary key
);

INSERT INTO emensawerbeseite.wunschgericht (Name, Email, Gerict, Beschreibung, date, id) VALUES ('Anonym', 'fachrialdimaspp15@gmail.com', 'Spaghetti bolognese mit Räucherspeck', 'Ein bisschen Sorgfalt und Geduld braucht sie schon, die Sauce bolognese: eine würzige Sauce, die sich unnachahmlich sämig um Pasta legt.', '27.11.2022', 1);
INSERT INTO emensawerbeseite.wunschgericht (Name, Email, Gerict, Beschreibung, date, id) VALUES ('jericho Jordan', 'jericho.jordan@gmail.com', 'Pfannkuchen', '1.Das Mehl und die Milch mit den Quirlen des Handrührgerätes gründlich verschlagen, damit keine Klümpchen im Pfannkuchenteig entstehen.
2.Dann die Eier in eine separate Schüssel aufschlagen und einzeln zum Teig geben und verrühren, bis der Pfannkuchenteig schon glatt und dickflüssig ist. Salz hinzufügen.
3.Für süße Varianten das Grundrezept mit Zucker und/oder Zitrusschale ergänzen.
4.Nach Belieben den Teig abdecken und etwa 30 Min. quellen lassen.
5.Anschließend Pfannkuchen in einer heißen Pfanne mit etwas Öl oder Butter ausbacken.

Tipp: Da es ja immer etwas dauert, bis alle Pfannkuchen fertig gebacken sind, stellt man sie am besten bis zum Servieren im Backofen bei 80° warm. Den Backofen dafür nur kurz zuvor vorheizen!', '28.11.2022', 2);
INSERT INTO emensawerbeseite.wunschgericht (Name, Email, Gerict, Beschreibung, date, id) VALUES ('Max Mustermann', 'Mas.Mustermann@email.com', 'Rouladen', 'Die Rinderroulade ist ein Klassiker unter den Fleisch-Gerichten. Mit würzigem Speck und einer aromatischen Sauce ein Highlight auf jedem Teller.', '29.11.2022', 3);
INSERT INTO emensawerbeseite.wunschgericht (Name, Email, Gerict, Beschreibung, date, id) VALUES ('Example', 'Example@mail.com', 'Bayerische Semmelknödel', '1.Die Semmeln in dünne Scheiben schneiden und in eine große Schüssel geben. Die Milch erhitzen und darüber gießen, 20 Min. quellen lassen.
2.Die Petersilie waschen und trockenschütteln, die Blätter fein hacken. Die Zwiebel schälen und in kleine Würfel schneiden. Die Butter erhitzen, die Zwiebel darin glasig andünsten. Petersilie kurz mitdünsten und beiseite stellen.
3.In einem großen, weiten Topf reichlich Salzwasser zum Kochen bringen.
4.Die eingeweichten Semmeln mit Eiern und Zwiebelmischung gut vermengen. Mit Salz, Pfeffer, Muskat und Zitronenschale würzen.
5.Mit angefeuchteten Händen kleine Knödel formen und im siedenden Wasser 20 Min. ziehen (nicht kochen!) lassen.', '29.11.2022', 4);
INSERT INTO emensawerbeseite.wunschgericht (Name, Email, Gerict, Beschreibung, date, id) VALUES ('jemand', 'jemand@gmail.com', 'Pesto', 'Pesto – Die wohl beliebteste ungekochte Sauce der italienischen Küche. Diese selbst zu machen ist zudem gar nicht schwer. Von Basilikum über aromatischem Bärlauch bis hin zu getrockneten Tomaten: der Geschmacks-Vielfalt sind keine Grenzen gesetzt!', '01.12.2022', 5);
