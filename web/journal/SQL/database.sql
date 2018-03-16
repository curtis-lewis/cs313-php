CREATE DATABASE journal;

\c journal;

CREATE TABLE _user 
(
	user_id SERIAL NOT NULL PRIMARY KEY,
	admin BOOLEAN NOT NULL,
	username VARCHAR(20) UNIQUE NOT NULL,
	password VARCHAR(20) NOT NULL
);

CREATE TABLE entry
(
	entry_id SERIAL NOT NULL PRIMARY KEY,
	user_id SERIAL NOT NULL REFERENCES _user(user_id),
	post_date DATE NOT NULL,
	rating INTEGER NOT NULL,
	content TEXT NOT NULL
);

INSERT INTO _user(admin, username, password) VALUES
(false, 'admin', 'admin');

INSERT INTO entry(user_id, post_date, rating, content) VALUES
(1, '03-16-2018', 10, 'This is a test entry.');

CREATE USER j_user WITH PASSWORD 'j_pass';
GRANT SELECT, INSERT, UPDATE ON _user TO j_user;
GRANT SELECT, INSERT, UPDATE ON entry TO j_user;
GRANT USAGE, SELECT ON SEQUENCE _user_user_id_seq TO j_user;
GRANT USAGE, SELECT ON SEQUENCE entry_entry_id_seq TO j_user;