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

INSERT INTO users VALUES (NULL, 'André', '38cdf27676f087182b048ebe05160f35bbc515b8');
INSERT INTO users VALUES (NULL, 'Bernardo', 'b198ac8dc42e07c306f4330a3521c517c8ba03dc');
INSERT INTO users VALUES (NULL, 'Carlos', '76e24c2ab1ebee0aad95804cb02e2c95224bce0c');
INSERT INTO users VALUES (NULL, 'Daniel', '714ebf9904c149c76804befcda808974f3b8ccc6');
INSERT INTO users VALUES (NULL, 'Eduardo', '0d0e407964576f2de3206450552dac79e2f1088b');
INSERT INTO users VALUES (NULL, 'Fátima', '81f1def83b63ef24acd5a78b1eda63c723fdb344');
INSERT INTO users VALUES (NULL, 'Guilherme', '911595b43ee185461eaa9e300649168d392e581c');
INSERT INTO users VALUES (NULL, 'Hugo', '925805ca2e0a9ee93153d027bec49da53c301bdd');
INSERT INTO users VALUES (NULL, 'Inês', '048814fa714c38194f3ef7895486454535a20ed5');

INSERT INTO events VALUES (NULL, 'Jantar de Curso', '2015-12-12', 'Um jantar para conviver com os amigos!', 'Fun', 'Restaurante X', '20:30', '23:00', 'false');
INSERT INTO events VALUES (NULL, 'Festa de Anos', '2015-12-18', 'Uma festa para comemorar o meu nascimento!', 'Birthday', 'Casa do Bernardo', '14:00', '18:00', 'true');
INSERT INTO events VALUES (NULL, 'Festa na Piscina', '2016-07-03', 'Uma festa numa piscina!', 'Fun', 'Piscina Pública', '12:00', '17:00', 'false');

INSERT INTO events_users VALUES (1, 1, 1, 'owner');
INSERT INTO events_users VALUES (2, 2, 2, 'owner');
INSERT INTO events_users VALUES (2, 2, 1, 'invited');
INSERT INTO events_users VALUES (2, 2, 3, 'invited');
INSERT INTO events_users VALUES (2, 2, 4, 'invited');
INSERT INTO events_users VALUES (2, 2, 5, 'invited');
INSERT INTO events_users VALUES (2, 2, 6, 'invited');
INSERT INTO events_users VALUES (2, 2, 7, 'invited');
INSERT INTO events_users VALUES (2, 2, 8, 'invited');
INSERT INTO events_users VALUES (2, 2, 9, 'invited');
INSERT INTO events_users VALUES (3, 3, 3, 'owner');

INSERT INTO images VALUES (1, 1, '1-restaurante6.jpg');
INSERT INTO images VALUES (2, 2, '2-GFB_13_SCA6AMERBTY_CH1837_W1_SQ.jpg');
INSERT INTO images VALUES (3, 3, '3-pool-06');

INSERT INTO comments VALUES (1, 3, 2, 'Um evento para daqui a tanto tempo?');
INSERT INTO comments VALUES (2, 3, 1, 'Há pessoas que têm pressa...');
INSERT INTO comments VALUES (3, 3, 3, 'Mais vale cedo do que tarde!!');