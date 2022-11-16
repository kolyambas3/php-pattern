SELECT products.id, products.name, orders.date
FROM products
RIGHT JOIN orders ON products.id=orders.product_id;