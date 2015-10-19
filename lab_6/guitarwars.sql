ALTER TABLE guitarwars
ADD COLUMN approved TINYINT;

SELECT * FROM guitarwars
WHERE approved = 1
ORDER BY score DESC, date ASC;

ALTER TABLE guitarwars
ADD COLUMN approved TINYINT
DEFAULT 0;
