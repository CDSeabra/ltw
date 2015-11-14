CREATE TABLE users (
  id_user INTEGER PRIMARY KEY AUTOINCREMENT,
  username VARCHAR,
  password VARCHAR
);

CREATE TABLE events (
	id_event INTEGER PRIMARY KEY AUTOINCREMENT,
	name VARCHAR NOT NULL,
	dat VARCHAR NOT NULL,
	image INTEGER REFERENCES images,
	description TEXT,
	tipo VARCHAR NOT NULL,
	privado BOOLEAN
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
	name VARCHAR NOT NULL,
	image BLOB
);