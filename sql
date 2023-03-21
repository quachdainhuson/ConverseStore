//product

SELECT product_id,product_name,product_price,product_image,product_description,product_description, 
categories.cate_name,
color.color_name,
style.style_name,
size.size_number
FROM  product 
INNER JOIN categories ON product.cate_id = categories.cate_id
INNER JOIN size ON product.size_id = size.size_id
INNER JOIN style ON product.style_id = style.style_id
INNER JOIN color ON product.color_id = color.color_id
;