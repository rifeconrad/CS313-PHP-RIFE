-- remove tables
DROP TABLE Stock;
DROP TABLE Products;
DROP TABLE Cart;
DROP TABLE Users;

-- create stock table
CREATE TABLE Stock (
	id          SERIAL PRIMARY KEY,
	name        VARCHAR NOT NULL,
	price       MONEY NOT NULL,
	quantity    INT NOT NULL,
	description VARCHAR NOT NULL
);

-- create a user's table
CREATE TABLE Users (
	id       SERIAL PRIMARY KEY,
	username VARCHAR(80) NOT NULL,
	password VARCHAR(80) NOT NULL
);

-- create a cart table
CREATE TABLE Cart (
	id       SERIAL PRIMARY KEY,
	user_id  INT NOT NULL,

	FOREIGN KEY (user_id) REFERENCES Users(id)
);

-- create a products table
CREATE TABLE Products (
	id       SERIAL PRIMARY KEY,
	name     VARCHAR(80) NOT NULL,
	price    MONEY NOT NULL,
	quantity INT NOT NULL,
	cart_id  INT NOT NULL,

	FOREIGN KEY (cart_id) REFERENCES Cart(id)
);

-- insert a generic username and passwword into the user's table
INSERT INTO Users (username, password)
VALUES           ('username', 'password');

-- create a cart with the user's id
INSERT INTO Cart (user_id)
SELECT id FROM Users
WHERE username='username' AND password='password';

-- insert a product to the matching cart_id and user_id
INSERT INTO Products (name, price, quantity, cart_id)
VALUES              ('Fruit Bowl', 12.34, 2, (SELECT id FROM Users
                                                WHERE username='username' AND password='password'));

-- delete the above product
DELETE FROM Products
WHERE name='Fruit Bowl' AND price='12.34' 
						AND quantity='2' 
						AND cart_id=(SELECT id FROM Cart
                                     WHERE user_id=(SELECT id FROM Users
                                     WHERE username='username' AND password='password'));


INSERT INTO Stock (name, price, quantity, description) VALUES ('toolkit', 14.99, 50, 'An organized toolkit to keep your hobby organized!');
INSERT INTO Stock (name, price, quantity, description) VALUES ('model plan', 9.99, 150, 'A fun and detailed plane to model alone or with your friends!');
INSERT INTO Stock (name, price, quantity, description) VALUES ('model car', 9.99, 150, 'A fun and detailed car to model alone or with your friends!');
INSERT INTO Stock (name, price, quantity, description) VALUES ('trading cards', 6.99, 250, 'Compete, trade, win!');
INSERT INTO Stock (name, price, quantity, description) VALUES ('DVD', 4.99, 500, 'movie/series');
INSERT INTO Stock (name, price, quantity, description) VALUES ('Blueray', 14.99, 500, 'movie/series');
