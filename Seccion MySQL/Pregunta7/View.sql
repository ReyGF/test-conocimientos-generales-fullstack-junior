CREATE VIEW high_earning_employees AS
SELECT *
FROM employees
WHERE salary > 70000.00;