BargainBag
==========

A website that compares prices for products from Amazon and Bestbuy but we would like to extend functionality to include more stores and sites.

Bargain Bag will assist with the one activity that most budget­conscious individuals perform before executing a transaction ­ price comparison. We understand that searching through countless web pages to find the most affordable price can be both tedious and time­consuming; Bargain Bag will provide simplification to this process. End ￼￼ users will be pleased with the effectiveness of the website, as it is intended to allow customers to do what our tagline explicitly states “click. compare. consume.”

For Bargain Bag's front end HTML, CSS, JQuery, Ajax, and Bootstrap was used.
Generally Sublime Text was used for editting our front-end documents.

For JQuery and Ajax you will need to download Jquery from here: http://jquery.com/download/
This file will need to placed in the same folder where your Bargain Bag code is saved.

Bootstrap was used for theme implementation where the Business Casual theme was used. One will need to download bootstrap and bootstrap business casual, where those css files should be placed in the Bargain Bag code folder.

Bootstrap can be downloaded here: http://getbootstrap.com/
Bootstrap Business Casual can be downloaded here: http://startbootstrap.com/template-overviews/business-casual/

---------------------------------------------------------------------------------------------------------------------------
Database and Php files
The Database is MySQL and it can be hosted on any linux server or any webserver running apache. The database name is “bargainbag” and it has three tables (amazon, bestbuy, members). Two of the tables are the products tables. One table contains products from amazon and the other table has information about products from other retail websites especially bestbuy. The contents that were fielded into the database tables are stored in two files namely: amazon.txt and bestbuy.txt.
There is a file called products.sql which contains the sql DDL commands for creating the database and the tables.
The data definition Language (DDL) file can be loaded from the root public directory on the server by running the following command within MySQL:
source ./products.sql

The above command will create the database and tables.

mysql> show tables
    -> ;
+-----------------------------+
| Tables_in_iegbor_bargainbag |
+-----------------------------+
| amazon                      |
| bestbuy                     |
| members                     |
+-----------------------------+
5 rows in set (0.00 sec)
The following command will load the data into the amazon product table:
 
INSERT INTO amazon (product_num, product_name, description, inventory, price, image, link) VALUES 
  (10501,'Macbookpro','Apple MacBook Pro MGXA2LL/A 15.4-Inch Laptop with Retina Display-(NEWEST VERSION)',5,1899.99,'http://ecx.images-amazon.com/images/I/41Gv---9StL._AA160_.jpg','http://www.amazon.com/s/ref=a9_sc_1?rh=i%3Acomputers%2Ck%3Amacbook+pro+15+inch&keywords=macbook+pro+15+inch&ie=UTF8&qid=1412292120'),
  (10502,'Hp','Hp 15 Series 15-F009Wm Laptop Amd:E1-2100/E1X2-1.0Glv 4Gb/1-Dimm 500Gb/5400Rpm-M',4,268.77,'http://ecx.images-amazon.com/images/I/41jypz7tMwL._AA160_.jpg','http://www.amazon.com/s/ref=sr_nr_p_n_operating_system_2?rh=n%3A541966%2Ck%3Alaptops%2Cp_n_operating_system_browse-bin%3A5945862011&keywords=laptops&ie=UTF8&qid=1412256131&rnid=562215011'),
  (10503,'Sony PlayStation','PlayStation 4 Console',5,399.00,'http://ecx.images-amazon.com/images/I/41omR-LTnaL._AA160_.jpg','http://www.amazon.com/PlayStation-4-Console/dp/B00BGA9WK2/ref=sr_1_1/181-0041055-8610107?ie=UTF8&qid=1412292158&sr=8-1&keywords=ps4'),
  (10504,'iPhone6','AppleÆ iPhoneÆ 6 - Sprint - 64GB Gold',3,277.99,'http://membershipwireless.com/index.cfm/go/shop/do/PhoneDetails/productid/$277.99','http://membershipwireless.com/index.cfm/go/shop/do/PhoneDetails/productid/27728'),
  (10507,'Samsung Galaxy S5','Verizon Samsung Galaxy S5 with New 2-year Contract - Black',5,199.99,'http://scene7.targetimg1.com/is/image/Target/15275804?wid=410&hei=410','http://www.target.com/p/verizon-samsung-galaxy-s5-with-new-2-year-contract-black/-/A-15275804?reco=Rec|pdp|15275804|ClickCP|item_page.vertical_1&lnk=Rec|pdp|ClickCP|item_page.vertical_1');

The third table is for members who register using the form on the registration page. Upon registration each member is auto-assigned a customer ID that is displayed to the user along side the message indicating a successful registration.
When the user tries to login using his/her email and password those credentials are checked against the email and password columns in the members database. If the information is correct the user will be taking directly to the product page where search for products would occur.
The same principle applies to the product search. Once a user enters the name of a product it is checked against the product_name field in both product tables (amazon and bestbuy) in the database. If found, those tuples are returned and displayed to the user on the screen.
---------------------------------------------------------------------------------------------------------------------------
Sign Up Page

The form on the signup page is processed by a php file called (register.php) which is also link to a javascript file (register.js)
The Login Page is processed by the php script embedded in the page.
The product search page is processed by a php file called (results2.php). the products page and the php file that processes the request are within the gridster_test directory. Also within this directory is the gethint.php. This file helps to aid the user with suggested words from the dictionary based on the letters typed into the search box. This is to ensure the user types in the search word in a way that it would correlate with what is in the database.
In some of the pages the code for the database connection is embedded on the page while in other pages it is linked to an external file called mysql_connect.php

