CREATE TABLE cards(
    card_id  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    card_balance DECIMAL(6,3) NOT NULL,
    card_category VARCHAR(150) NOT NULL,
    card_image VARCHAR(500) NOT NULL,
    card_status INT NOT NULL
);


-- default cards
INSERT INTO cards (card_balance, card_category, card_image, card_status)
VALUES (50, 'FOODDINING', 'CARD_ONE', 1);
INSERT INTO cards (card_balance, card_category, card_image, card_status)
VALUES (10, 'TRANSPORT', 'CARD_TWO', 1);
INSERT INTO cards (card_balance, card_category, card_image, card_status)
VALUES (30, 'GROCERY', 'CARD_THREE', 1);
INSERT INTO cards (card_balance, card_category, card_image, card_status)
VALUES (100, 'FURNITURE', 'CARD_FOUR', 1);


-- adding additional funds for food and dining
UPDATE cards  set card_balance = 50 WHERE card_id = '1';

-- adding additional funds for Transport
UPDATE cards  set card_balance = 10 WHERE card_id = '2';


-- adding additional funds for Grocery
UPDATE cards  set card_balance = 30 WHERE card_id = '3';

-- adding additional funds for furniture
UPDATE cards  set card_balance = 100 WHERE card_id = '4';

