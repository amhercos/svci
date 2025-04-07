CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password TEXT NOT NULL,
    role VARCHAR(20) NOT NULL CHECK (role IN ('admin', 'teacher'))
);

-- Use PHP's password_hash() to insert real hashed passwords
-- Example (placeholders here):
INSERT INTO users (username, password, role) VALUES
('adminUser',   '$2y$10$abcdefghijklmnopqrstuv', 'admin'),
('teacherUser', '$2y$10$qrstuvabcdefghijklmnop', 'teacher');
