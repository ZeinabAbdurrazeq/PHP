<?php

const DSN= "mysql:dbname=rackitdb; host=localhost";
const USER = "root";
const PASS= "";

try {
    $connection = new PDO(DSN, USER,PASS);
    $connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $select = 'SELECT * FROM products';
    $query = $connection->prepare($select);
    $query->execute();
    $products =$query->fetchAll();
} catch (PDOException $ex) {
    die("Connection Failed:" . $ex->getMessage());
}

// CREATE TABLE users (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     fullname VARCHAR(100) NOT NULL,
//     username VARCHAR(50) UNIQUE NOT NULL,
//     password VARCHAR(255) NOT NULL, 
//     email VARCHAR(100) NOT NULL
// );

// CREATE TABLE products (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(100) NOT NULL,     
//     brand VARCHAR(50) NOT NULL,      
//     quantity INT DEFAULT 0,         
//     image VARCHAR(255) DEFAULT NULL  
// );

// INSERT INTO products (name, brand, quantity, image) VALUES
// ('Cisco Router 2901', 'Cisco', 5, 'router.jpg'),
// ('TP-Link Switch Catalyst 2960', 'TP-Link', 8, 'switch.jpg'),
// ('Ubiquiti UniFi Access Point', 'Ubiquiti', 10, 'accesspoint.jpg'),
// ('Cisco ASA Firewall', 'Cisco', 3, 'firewall.jpg'),
// ('Dell PowerEdge Server', 'Dell', 2, 'server.jpg'),
// ('24-Port Patch Panel', 'Generic', 6, 'patchpanel.jpg'),
// ('Cat6 Ethernet Cable (Blue)', 'Generic', 50, 'cable.jpg'),
// ('APC UPS 1500VA', 'APC', 4, 'ups.jpg'),
// ('42U Rack Cabinet', 'Generic', 1, 'rack.jpg'),
// ('Cisco IP Phone 8800', 'Cisco', 12, 'ipphone.jpg'),
// ('Intel Gigabit Network Card', 'Intel', 7, 'nic.jpg'),
// ('Cisco Wireless LAN Controller', 'Cisco', 2, 'controller.jpg');
//PDO PART



?>