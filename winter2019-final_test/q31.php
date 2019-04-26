SELECT * 
FROM (SELECT * FROM table 
ORDER BY * ASC LIMIT 10) 
ORDER BY * DESC ;

SELECT *
        FROM `comment`
        WHERE date < '2016-12-12 00:00:00';
        ORDER BY created_at ASC 
        LIMIT 10