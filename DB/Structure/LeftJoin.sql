SELECT products.id, products.name, orders.date
FROM products
LEFT JOIN orders ON products.id=orders.product_id;