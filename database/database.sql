CREATE DATABASE master_store;
USE master_store;

CREATE TABLE users(
    id          int(255) auto_increment not null,
    name        varchar(100) not null,
    lastname    varchar(255),
    email       varchar(100) not null,
    password    varchar(255) not null,
    rol         varchar(100) not null,
    image       varchar(255),
    CONSTRAINT  pk_users    PRIMARY KEY(id),
    CONSTRAINT  uq_email    UNIQUE(email)
)ENGINE=InnoDb;

INSERT INTO user VALUES(NULL, 'Andres', 'Roma', 'admin@admin.com', '123', 'admin', null );

CREATE TABLE orders(
    id              int(255)    auto_increment  not null,
    user_id         int(255)    not null,
    city            varchar(100)    not null,
    zip_code        varchar(255),
    cel_number      int(255),
    address         varchar(255) not null,
    price           float(100,2)    not null,
    order_state     varchar(100),
    date            date,
    hour            time,
    CONSTRAINT  pk_orders   PRIMARY KEY(id),
    CONSTRAINT  fk_orders_users FOREIGN KEY(user_id) REFERENCES  users(id)
)ENGINE=InnoDb;

CREATE TABLE categories(
    id int(255) auto_increment not null,
    name    varchar(100)
    CONSTRAINT  pk_categories   PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO categories VALUES(null, 'sports');
INSERT INTO categories VALUES(null, 'gym');
INSERT INTO categories VALUES(null, 'sunday');

CREATE TABLE products(
    id  int(255) auto_increment not null,
    category_id int(255)  not null,
    name    varchar(100)    not null,
    description text,
    price   float(100,2)    not null,
    stock   int(255)    not null,
    offer   varchar(2),
    date    date    not null,
    image   varchar(255),
    CONSTRAINT  pk_products PRIMARY KEY(id),
    CONSTRAINT  fk_product_category   FOREIGN KEY(category_id) REFERENCES   categories(id)
)ENGINE=InnoDb;

CREATE TABLE line_orders(
    id int(255) auto_increment not null,
    order_id int(255) not null,
    product_id int(255) not null,
    amount  int(255),
    CONSTRAINT pk_line_orders PRIMARY KEY(id),
    CONSTRAINT fk_line_orders_order FOREIGN KEY(order_id) REFERENCES orders(id),
    CONSTRAINT fk_line_orders_product FOREIGN KEY(product_id) REFERENCES products(id)
)ENGINE=InnoDb;