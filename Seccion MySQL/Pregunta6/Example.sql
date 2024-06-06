START TRANSACTION;
UPDATE employees SET salary = salary - 10000 WHERE id = 1;
UPDATE employees SET salary = salary + 10000 WHERE id = 2;
COMMIT;