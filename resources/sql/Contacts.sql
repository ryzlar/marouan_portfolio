CREATE TABLE IF NOT EXISTS contacts
(
    id
    INT
    AUTO_INCREMENT
    PRIMARY
    KEY,
    name
    VARCHAR
(
    100
) NOT NULL,
    email VARCHAR
(
    100
) NOT NULL,
    onderwerp VARCHAR
(
    150
) NOT NULL,
    bericht TEXT NOT NULL
    );


INSERT INTO contacts (name, email, onderwerp, bericht)
VALUES ('Sophie Jansen', 'sophie.jansen@example.com', 'Vraag over portfolio',
        'Hallo, ik zou graag meer informatie willen over je project.'),
       ('Tom de Vries', 'tom.vries@example.com', 'Samenwerkingsverzoek',
        'Zou je geïnteresseerd zijn in een samenwerking voor een nieuw project?'),
       ('Emma Bakker', 'emma.bakker@example.com', 'Feedback op website',
        'Ik wilde wat feedback geven op de gebruikerservaring van je website.'),
       ('Lucas Smits', 'lucas.smits@example.com', 'Vacature software developer',
        'Zijn er vacatures voor de rol van junior software developer?'),
       ('Lotte Visser', 'lotte.visser@example.com', 'Project aanvraag',
        'Ik ben geïnteresseerd in je werk en wil graag een project met je bespreken.'),
       ('Daan van Dijk', 'daan.dijk@example.com', 'Onderhoud website',
        'Kun je helpen bij het onderhoud van mijn website?'),
       ('Eline Jansen', 'eline.jansen@example.com', 'Nieuwe functies',
        'Heb je plannen om nieuwe functies toe te voegen aan je applicatie?'),
       ('Milan Smeets', 'milan.smeets@example.com', 'Vraag over technologieën',
        'Welke technologieën gebruik je in je projecten?'),
       ('Sara de Boer', 'sara.boer@example.com', 'Bezoek afspraak',
        'Ik wil graag een afspraak maken om je werk te bespreken.'),
       ('Noah Willems', 'noah.willems@example.com', 'Portfolio presentatie',
        'Kun je je portfolio presenteren aan ons team?')
