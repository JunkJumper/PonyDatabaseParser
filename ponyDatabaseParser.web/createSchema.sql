# Create schemas

# Create tables
CREATE TABLE IF NOT EXISTS ponies_Kind
(
    id INT NOT NULL,
    name VARCHAR(500),
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS ponies_Place
(
    id INT NOT NULL,
    name VARCHAR(500),
    PRIMARY KEY(id)
);


CREATE TABLE IF NOT EXISTS ponies_Character
(
    id INT NOT NULL,
    name VARCHAR(500),
    description VARCHAR(500),
    image VARCHAR(500),
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
    
ALTER TABLE ponies_assocCharacterKind
    ADD    FOREIGN KEY (Character_id)
    REFERENCES ponies_Character(id)
;
    
ALTER TABLE ponies_assocCharacterKind
    ADD    FOREIGN KEY (Kind_id)
    REFERENCES ponies_Kind(id)
;
    
ALTER TABLE ponies_assocCharacterPlace
    ADD    FOREIGN KEY (Character_id)
    REFERENCES ponies_Character(id)
;
    
ALTER TABLE ponies_assocCharacterPlace
    ADD    FOREIGN KEY (Place_id)
    REFERENCES ponies_Place(id)
;
    

# Create Indexes
