CREATE TABLE users (
  id_user INTEGER PRIMARY KEY AUTOINCREMENT,
  username TEXT UNIQUE,
  password TEXT
);

CREATE TABLE events (
	id_event INTEGER PRIMARY KEY AUTOINCREMENT,
	name TEXT NOT NULL,
	dat TEXT NOT NULL,
	description TEXT,
	tipo TEXT NOT NULL,
	place TEXT NOT NULL,
	time_init TEXT NOT NULL,  
	time_end TEXT NOT NULL,
	privado TEXT
);

CREATE TABLE events_users (
	id_host INTEGER REFERENCES users,
	id_event INTEGER REFERENCES events,
	id_user INTEGER REFERENCES users, 
	status TEXT
);

create table comments (
	id_comments INTEGER PRIMARY KEY AUTOINCREMENT,
	id_event INTEGER REFERENCES events,
	id_user INTEGER REFERENCES users, 
	texto TEXT
);

create table images (
	id_imagem INTEGER PRIMARY KEY AUTOINCREMENT,
	id_event INTEGER REFERENCES events,
	name TEXT NOT NULL	
);