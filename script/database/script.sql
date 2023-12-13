    CREATE TABLE personne (   
    id INT PRIMARY KEY AUTO_INCREMENT,  
    firstname VARCHAR(250),  
    lastname VARCHAR(250),    
    username VARCHAR(250), 
    password VARCHAR(250),  
    email VARCHAR(250),  
    type ENUM('admin', 'users') NOT NULL,  
    UNIQUE (id, type) ); 


    CREATE TABLE admin (    
    id INT PRIMARY KEY,  
    phone VARCHAR(250),    
    CIN VARCHAR(250),  
    FOREIGN KEY (id) REFERENCES personne (id) ) ;



    CREATE TABLE users (    
    id INT PRIMARY KEY,   
    FOREIGN KEY (id) REFERENCES personne (id) ) ; 
    

    CREATE TABLE article (    
    id INT PRIMARY KEY AUTO_INCREMENT,   
    titre VARCHAR(250),
    contenu VARCHAR(250),  
    date_de_creation DATETIME,
    personne_id INT, 
    FOREIGN KEY (personne_id) REFERENCES personne (id) );