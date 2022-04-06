# Create schemas

# Create tables
CREATE TABLE IF NOT EXISTS ponies_Kind
(
    id INT NOT NULL,
    name VARCHAR(30),
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS ponies_Place
(
    id INT NOT NULL,
    name VARCHAR(30),
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS ponies_Gender
(
    id INT NOT NULL,
    name VARCHAR(15),
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS ponies_Character
(
    id INT NOT NULL,
    name VARCHAR(50),
    description VARCHAR(0),
    image VARCHAR(0),
    Gender_id INT,
    Kind_id INT,
    Place_id INT,
    Gender_id INT,
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS ponies_AssocCharacterKind
(
    Character_id INT NOT NULL,
    Kind_id INT NOT NULL,
    PRIMARY KEY(Character_id, Kind_id)
);

CREATE TABLE IF NOT EXISTS ponies_AssocCharacterPlace
(
    Character_id INT NOT NULL,
    Place_id INT NOT NULL,
    PRIMARY KEY(Character_id, Place_id)
);


# Create FKs
ALTER TABLE Character
    ADD    FOREIGN KEY (Gender_id)
    REFERENCES ponies_Gender(id)
;
    
ALTER TABLE Character
    ADD    FOREIGN KEY (Kind_id)
    REFERENCES ponies_Kind(id)
;
    
ALTER TABLE Character
    ADD    FOREIGN KEY (Place_id)
    REFERENCES ponies_Place(id)
;
    
ALTER TABLE Character
    ADD    FOREIGN KEY (Gender_id)
    REFERENCES ponies_Gender(id)
;
    
ALTER TABLE AssocCharacterKind
    ADD    FOREIGN KEY (Character_id)
    REFERENCES ponies_Character(id)
;
    
ALTER TABLE AssocCharacterKind
    ADD    FOREIGN KEY (Kind_id)
    REFERENCES ponies_Kind(id)
;
    
ALTER TABLE AssocCharacterPlace
    ADD    FOREIGN KEY (Character_id)
    REFERENCES ponies_Character(id)
;
    
ALTER TABLE AssocCharacterPlace
    ADD    FOREIGN KEY (Place_id)
    REFERENCES ponies_Place(id)
;
    

# Create Indexes
