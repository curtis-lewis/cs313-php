CREATE TABLE _user 
(
	user_id SERIAL NOT NULL PRIMARY KEY,
	admin BOOLEAN NOT NULL,
	username VARCHAR(20) UNIQUE NOT NULL,
	password VARCHAR(20) NOT NULL,
	user_score INTEGER NOT NULL
);

CREATE TABLE restaurant 
(
	restaurant_id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	address_street VARCHAR(100),
	address_city VARCHAR(50),
	address_state VARCHAR(30),
	address_zip INTEGER,
	description TEXT
);

CREATE TABLE review 
(
	review_id SERIAL NOT NULL PRIMARY KEY,
	user_id SERIAL NOT NULL REFERENCES _user(user_id),
	restaurant_id SERIAL NOT NULL REFERENCES restaurant(restaurant_id),
	title VARCHAR(100) NOT NULL,
	content TEXT NOT NULL,
	rating INTEGER NOT NULL,
	post_date DATE NOT NULL,
	review_url VARCHAR(40)
);

CREATE TABLE comment 
(
	comment_id SERIAL NOT NULL PRIMARY KEY,
	user_id SERIAL NOT NULL REFERENCES _user(user_id),
	content TEXT NOT NULL,
	comment_score INTEGER NOT NULL,
	post_date DATE NOT NULL
);

CREATE TABLE review_comment
(
	review_comment_id SERIAL NOT NULL PRIMARY KEY,
	review_id SERIAL NOT NULL REFERENCES review(review_id),
	comment_id SERIAL NOT NULL REFERENCES comment(comment_id)
);