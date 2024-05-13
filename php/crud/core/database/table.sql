CREATE TABLE product (
	id	INTEGER NOT NULL,
	name	TEXT NOT NULL,
	stock	INTEGER DEFAULT 0,
	price	INTEGER DEFAULT 0,
	PRIMARY KEY(id)
);

CREATE TABLE users (
	id	INTEGER,
	username	TEXT NOT NULL UNIQUE,
	password	TEXT NOT NULL,
	added	INTEGER NOT NULL,
	access TEXT NOT NULL DEFAULT 'users',
	money	INTEGER NOT NULL DEFAULT 0,
	PRIMARY KEY(id AUTOINCREMENT)
);