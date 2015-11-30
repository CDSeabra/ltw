CREATE TABLE users (
  id_user INTEGER PRIMARY KEY AUTOINCREMENT,
  username VARCHAR UNIQUE,
  password VARCHAR
);

CREATE TABLE events (
	id_event INTEGER PRIMARY KEY AUTOINCREMENT,
	name VARCHAR NOT NULL,
	dat VARCHAR NOT NULL,
	description TEXT,
	tipo VARCHAR NOT NULL,
	privado VARCHAR
);

CREATE TABLE events_users (
	id_host INTEGER REFERENCES users,
	id_event INTEGER REFERENCES events,
	id_user INTEGER REFERENCES users, 
	status VARCHAR
);

create table comments (
	id_comments INTEGER PRIMARY KEY AUTOINCREMENT,
	id_event INTEGER REFERENCES events,
	id_user INTEGER REFERENCES users, 
	texto TEXT
);

create table images (
	id_imagem INTEGER PRIMARY KEY AUTOINCREMENT,
	id_event REFERENCES events,
	name VARCHAR NOT NULL	
);

INSERT INTO users VALUES (NULL, 'aaaa', '8aed1322e5450badb078e1fb60a817a1df25a2ca');

INSERT INTO users VALUES (NULL, 'cccc', '01464e1616e3fdd5c60c0cc5516c1d1454cc4185');