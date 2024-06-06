-- Use the blogger database
USE blogger;

-- Insert data into the person table
INSERT INTO person (fullName, email, psw, image, address) VALUES
('John Doe', 'johndoe@example.com', 'password123', 'john_doe.png', '123 Main St, Anytown, USA'),
('Jane Smith', 'janesmith@example.com', 'password456', 'jane_smith.png', '456 Oak St, Othertown, USA'),
('Alice Johnson', 'alicej@example.com', 'password789', 'alice_johnson.png', '789 Pine St, Sometown, USA');

-- Insert data into the article table
INSERT INTO article (person_id, categorie, title, content, image, created_at, updated_at) VALUES
(1, 'Technology', 'The Rise of AI', 'Artificial Intelligence is transforming the world.', 'ai_rise.png', '2024-06-01 12:00:00', '2024-06-02 14:00:00'),
(2, 'Health', 'Benefits of Yoga', 'Yoga offers numerous health benefits.', 'yoga_benefits.png', '2024-06-03 09:30:00', '2024-06-03 11:00:00'),
(3, 'Travel', 'Exploring the Alps', 'The Alps are a breathtaking mountain range.', 'alps_explore.png', '2024-06-05 15:45:00', '2024-06-06 10:00:00');

-- Insert data into the comment table
INSERT INTO comment (person_id, article_id, content) VALUES
(1, 1, 'Great article! AI is indeed changing the world.'),
(2, 2, 'I love practicing yoga! It helps me stay fit and relaxed.'),
(3, 3, 'The Alps are on my travel bucket list!'),
(1, 3, 'Wonderful read! I can\'t wait to visit the Alps.');


