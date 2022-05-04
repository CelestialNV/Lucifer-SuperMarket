Create Table users (user_name VARCHAR(10), username VARCHAR(10), password VARCHAR(20));
CREATE TABLE product (productID int(11) PRIMARY KEY AUTO_INCREMENT, ProductNum VARCHAR(20), Brand VARCHAR(20), Expiration DATE, ProductName VARCHAR(20), Discount FLOAT, UnitPrice FLOAT, stock INT(10), Description TEXT);
CREATE TABLE provider (ProviderID int(11) PRIMARY KEY AUTO_INCREMENT, ProviderName VARCHAR(20), Brand VARCHAR(20), PhoneNumber INT(20), Email VARCHAR(20), City VARCHAR(20), District VARCHAR(20));
CREATE TABLE purchase (PurchaseID int(11) PRIMARY KEY AUTO_INCREMENT, PurchaseDate DATE, ProductName VARCHAR(20), Quantity INT(10), VendorName VARCHAR(20));
CREATE TABLE vendor (VendorID int(11) PRIMARY KEY AUTO_INCREMENT, FullName VARCHAR(20), PhoneNumber INT(20), Email VARCHAR(30), Address VARCHAR(30), Address2 VARCHAR(30), City VARCHAR(10), District VARCHAR(15));

INSERT INTO users VALUES ('admin', 'admin', 'admin');

INSERT INTO product(ProductNum, Brand, Expiration, ProductName, Discount, UnitPrice, stock, Description) VALUES('213','gillette',null, 'King G razor', 5 , 30 , 150, 'These are some really good Razors' );
INSERT INTO product(ProductNum, Brand, Expiration, ProductName, Discount, UnitPrice, stock, Description) VALUES('203','Colgate',null, 'Max White toothpaste', 10 , 7 , 230, 'That’s a Some good toothpaste' );
INSERT INTO product(ProductNum, ProductName , Expiration, Brand , Discount, UnitPrice, stock, Description) VALUES('147','Chicken', STR_TO_DATE('30-5-2022', '%d-%m-%Y') , 'Pilgrim’s', 0, 6 , 300, 'That’s some really good chicken' );
INSERT INTO product(ProductNum, ProductName , Expiration, Brand , Discount, UnitPrice, stock, Description) VALUES('105','Meat', STR_TO_DATE('1-6-2022', '%d-%m-%Y') , ' ButcherBox' , 8, 5 , 310, 'That’s some really good meat' );
INSERT INTO product(ProductNum, ProductName , Expiration, Brand , Discount, UnitPrice, stock, Description) VALUES('96','Cheese', STR_TO_DATE('10-4-2022', '%d-%m-%Y') , 'Arla' , 30 , 5 , 120, 'That’s some bad cheese' );
INSERT INTO product(ProductNum, Brand, Expiration, ProductName, Discount, UnitPrice, stock, Description) VALUES('81','Lenovo',null, 'Yoga Creator 7i Laptop', 50 , 5000 , 30, 'These are some really good Laptops' );

INSERT INTO provider(ProviderName,Brand,PhoneNumber,Email,City,District) VALUES('Joe becker','gillette',0687452312,'joe@becker.com','NYC', null);
INSERT INTO provider(ProviderName,Brand,PhoneNumber,Email,City,District) VALUES('Lucy Lindsey','Colgate',0630302387,'lucy@Lindsey.com','Chicago', null);
INSERT INTO provider(ProviderName,Brand,PhoneNumber,Email,City,District) VALUES('Alan Strongarm','Pilgrim’s',0639830255,'Alan@Strongarm.com','Washington', null);
INSERT INTO provider(ProviderName,Brand,PhoneNumber,Email,City,District) VALUES('Jason Mamoa','ButcherBox',06941033002,'Jason@Mamoa.com','Seattle', 'federal way');
INSERT INTO provider(ProviderName,Brand,PhoneNumber,Email,City,District) VALUES('Ben Atlete','Arla',0652148796,'Ben@Atlete.com','Chicago', 'Oak Park');
INSERT INTO provider(ProviderName,Brand,PhoneNumber,Email,City,District) VALUES('Lindsey Mcflurry','Lenovo',0647965123,'Lindsey@Mcflurry.com','Las Vegas', 'Clark County');

INSERT INTO vendor(FullName, PhoneNumber, Email, Address, Address2, City, District) VALUES('Khaldi Achraf',0636785148,'Achraf@Khaldi.com','3rd avenue',null,'Orlando','orange Conty');
INSERT INTO vendor(FullName, PhoneNumber, Email, Address, Address2, City, District) VALUES('Kabou Taoufik',0630201047,'Taoufik@Kabou.com','2nd avenue',null,'Las Vegas','Henderson');





