CREATE TABLE note
(
	note_ID 	  serial  NOT NULL PRIMARY KEY,
	user_ID 	  integer NOT NULL REFERENCES _user(user_ID),
	talk_ID 	  integer NOT NULL REFERENCES talk(talk_ID),
	note_content  varchar(300) 
);

CREATE TABLE _user
(
	user_ID        serial NOT NULL PRIMARY KEY,
	username       varchar(20),
	password       varchar(20)
);

CREATE TABLE speaker
(
	speaker_ID     serial NOT NULL PRIMARY KEY,
	name 	       varchar(20),
	position       varchar(20)
);

CREATE TABLE conference
(
	conference_ID  serial NOT NULL PRIMARY KEY,
	month          integer,
	year	       integer
);

CREATE TABLE talk
(
	talk_ID        serial  NOT NULL PRIMARY KEY,
	speaker_ID     integer NOT NULL REFERENCES speaker(speaker_ID),
	conference_ID  integer NOT NULL REFERENCES conference(conference_ID)
);