-- Create the database
CREATE DATABASE pemoweb_database;
GO
USE pemoweb_database;
GO

-- Create the 'products' table
CREATE TABLE dbo.products (
  id INT IDENTITY(1,1) PRIMARY KEY,   -- Auto-incrementing primary key
  name VARCHAR(255) NOT NULL,          -- Product name
  price DECIMAL(10,2) NOT NULL,        -- Price (with two decimal points)
  image VARCHAR(255) NULL,             -- Image path (optional)
  created_at DATETIME NOT NULL DEFAULT GETDATE(), -- Created timestamp
  updated_at DATETIME NULL            -- Updated timestamp (optional)
);
GO

-- Insert sample data into the 'products' table
INSERT INTO dbo.products (name, price, image, created_at, updated_at)
VALUES
('sabun', 5000, '/upload/img.1jpg', NULL),
('detergen', 5000, '/upload/img.2.jpg', NULL),
('detergen', 5000, '/upload/img.4.jpg', NULL),
('so klin', 10000, '/upload/img5.jpg', '2023-11-02 13:42:30', NULL);
GO

-- Create the 'users' table
CREATE TABLE users (
  id INT IDENTITY(1,1) PRIMARY KEY,   -- Auto-incrementing primary key
  name VARCHAR(255) NOT NULL,          -- User name
  email VARCHAR(255) NOT NULL UNIQUE,  -- Unique email
  role VARCHAR(10) NOT NULL DEFAULT 'user', -- Role of user (instead of ENUM)
  password VARCHAR(255) NOT NULL,      -- User password
  photo VARCHAR(255) NULL,             -- Photo (optional)
  created_at DATETIME NOT NULL DEFAULT GETDATE(),  -- Created timestamp
  updated_at DATETIME NULL            -- Updated timestamp (optional)
);
GO

-- Insert sample data into the 'users' table
INSERT INTO users (name, email, role, password, photo, created_at, updated_at)
VALUES
('Yusuf Eka Wicaksana', 'ekayusuf.wicaksana@gmail.com', 'user', '$2y$10$rLNoxFGQoNddoiWy/ebYdOkjhU0ff14xHdXPc2yJIi2APAWvQ.Cra', NULL, '2023-10-26 13:45:09', NULL),
('Admin', 'admin@example.com', 'admin', '$2y$10$e6RkmgxIZHo.Oy/lRk1isOGNd3nNIMgYmBbr.IbnBmm4MUb2hv61e', NULL, GETDATE(), NULL);
GO
