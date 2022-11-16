SELECT products.id, products.name, orders.date
FROM products
INNER JOIN orders ON products.id=orders.product_id;
