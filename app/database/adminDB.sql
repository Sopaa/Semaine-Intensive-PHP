$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

CREATE TABLE login_admin
(
  id INT PRIMARY KEY,
  pseudo VARCHAR (20),
  password VARCHAR (20)
);

INSERT INTO login_admin (pseudo, password)
VALUES
(
  'admin', ('MeatADMIN')
);
