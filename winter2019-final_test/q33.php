UPDATE comment
SET is_banned = '1';
WHERE id = 3;


DELETE FROM comment
WHERE is_banned ='1';