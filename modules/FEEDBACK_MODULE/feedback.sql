CREATE TABLE IF NOT EXISTS feedback (`id` INT NOT NULL PRIMARY KEY AUTOINCREMENT, `charid` int not null, `reputation` text not null, `comment` text not null, `by` text not null, `by_charid` int not null, `dt` INT NOT NULL);
