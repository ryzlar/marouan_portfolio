CREATE TABLE IF NOT EXISTS projects
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
    vak VARCHAR
(
    100
) NOT NULL,
    description TEXT NOT NULL
    );


INSERT INTO projects (name, vak, description)
VALUES ('Website Portfolio', 'Web Development', 'Een portfolio website voor mijn projecten en vaardigheden.'),
       ('Inventory Manager', 'Software Engineering', 'Een applicatie om voorraden in magazijnen te beheren.'),
       ('Weather App', 'Data Science', 'Een app die de weersvoorspellingen van meerdere steden toont.'),
       ('ChatBot AI', 'Machine Learning', 'Een chatbot die antwoord kan geven op basis van gebruikersinvoer.'),
       ('E-commerce Store', 'E-commerce', 'Een webwinkelplatform voor online verkoop van producten.'),
       ('Fitness Tracker', 'Mobile Development', 'Een app om workouts en calorie-inname bij te houden.'),
       ('Budget Planner', 'Finance', 'Een hulpmiddel om persoonlijke financiën en budgetten te beheren.'),
       ('Task Organizer', 'Productivity', 'Een taakbeheerder om taken en deadlines te organiseren.'),
       ('VR Tour', 'Virtual Reality', 'Een virtuele tour voor het ontdekken van nieuwe plaatsen via VR.'),
       ('Social Media Analyzer', 'Data Analysis', 'Een tool voor analyse van gebruikersinteracties op sociale media.')
