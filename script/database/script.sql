    CREATE TABLE personne (   
    id INT PRIMARY KEY AUTO_INCREMENT,  
    firstname VARCHAR(250),  
    lastname VARCHAR(250),    
    username VARCHAR(250), 
    password VARCHAR(250),  
    email VARCHAR(250)  
   ); 


    CREATE TABLE admin (    
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(250),  
    lastname VARCHAR(250),    
    username VARCHAR(250), 
    password VARCHAR(250),  
    email VARCHAR(250) ,  
    phone VARCHAR(250),    
    CIN VARCHAR(250),  
    FOREIGN KEY (id) REFERENCES personne (id) ) ;



    CREATE TABLE users (    
    id INT PRIMARY KEY AUTO_INCREMENT,  
    firstname VARCHAR(250),  
    lastname VARCHAR(250),    
    username VARCHAR(250), 
    password VARCHAR(250),  
    email VARCHAR(250)  
     ); 
    

    CREATE TABLE article (    
    id INT PRIMARY KEY AUTO_INCREMENT,   
    titre VARCHAR(250),
    contenu TEXT,  
    date_de_creation DATETIME,
    personne_id INT, 
    FOREIGN KEY (personne_id) REFERENCES personne (id) );