CREATE TABLE TravelOffers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    destination VARCHAR(255) NOT NULL,
    date_depart DATE NOT NULL,
    date_retour DATE NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    disponible BOOLEAN NOT NULL,
    categorie VARCHAR(100) NOT NULL
);
