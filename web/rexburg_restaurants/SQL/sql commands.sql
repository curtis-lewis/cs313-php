-- psql %DATABASE_URL%

INSERT INTO _user  (username, password, user_score) VALUES ('admin', 'admin', 0);

INSERT INTO restaurant (name, address_street, address_city, address_state, address_zip, description) VALUES ('The Burg', '110 W 4th S', 'Rexburg', 'Idaho', 83440, 'placeholder' );

INSERT INTO review (user_id, restaurant_id, title, content, rating, post_date) VALUES (1, 1, 'Review of the Burg', 'Great food, great atmosphere, a little bit pricey.', 7, '2018-02-10');

-- Database Updates
ALTER TABLE review DROP COLUMN review_url RESTRICT;

INSERT INTO restaurant (name, address_street, address_city, address_state, address_zip, description) VALUES ('Fresco Kitchen and Grill', ' 1181 S Yellowstone Hwy', 'Rexburg', 'Idaho', 83440, 'placeholder');
INSERT INTO restaurant (name, address_street, address_city, address_state, address_zip, description) VALUES ('Taqueria El Rancho', '312 W 4th S', 'Rexburg', 'Idaho', 83440, 'placeholder');
INSERT INTO restaurant (name, address_street, address_city, address_state, address_zip, description) VALUES ('Original Thai', '10 E Main St', 'Rexburg', 'Idaho', 83440, 'placeholder');
INSERT INTO review (user_id, restaurant_id, title, content, rating, post_date) VALUES (1, 2, 'Review of Fresco Kitchen and Grill', 'Tasty American cuisine and a great date spot. A little expenisve but worth it.', 8, '2018-02-20');
INSERT INTO review (user_id, restaurant_id, title, content, rating, post_date) VALUES (1, 3, 'Taqueria El Rancho', 'Cheap and authentic. The bext Mexican food in town.', 9, '2018-02-20');

ALTER TABLE _user ALTER COLUMN password TYPE varchar(255);
ALTER TABLE _user ALTER COLUMN username TYPE varchar(255);