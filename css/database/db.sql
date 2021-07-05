CREATE TABLE product (
  productID CHAR(4) NOT NULL,
  productName VARCHAR(60) NOT NULL,
  image VARCHAR(50) NULL,
  category VARCHAR(30) NOT NULL,
  PRIMARY KEY(productID)
);

INSERT INTO product VALUES
("1200", "BigTel 1200", "../images/1200.jpg", "cordless phones"),
("1201", "BigTel 1201", "../images/1201.jpg", "cordless phones"),
("1202", "BigTel 1202", "../images/1202.jpg", "cordless phones"),
("1280", "BigTel 1280", "../images/1280.jpg", "cordless phones"),
("1480", "BigTel 1480", "../images/1480.jpg", "cordless phones"),
("2700", "PowerTel 2700", "../images/2700.jpg", "cordless phones"),
("2701", "PowerTel 2701", "../images/2701.jpg", "cordless phones"),
("2702", "PowerTel 2702", "../images/2702.jpg", "cordless phones"),
("2780", "PowerTel 2780", "../images/2780.jpg", "cordless phones"),
("2880", "PowerTel 2880", "../images/2880.jpg", "cordless phones");
