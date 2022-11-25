-- Eliminar la base de datos si existe:
DROP DATABASE IF EXISTS `gestionempleados`;

-- Crear la base de datos gestionempleado
CREATE DATABASE gestionempleados;

USE gestionempleados;

-- Tabla que representa los datos de un empleado:
CREATE TABLE IF NOT EXISTS `empleado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(32) NOT NULL,
  `apellidos` VARCHAR(32) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `direccion` VARCHAR(128) NOT NULL,
  `casado` TINYINT(1) NOT NULL,
  `hijos` INT(11) NOT NULL,
  `salario` DOUBLE NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (1, 'Evelyn', 'Zellner', '2022-06-02', 'Calle 1', 1, 4, 5000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (2, 'Austine', 'Dunn', '2022-06-01', 'Calle 2', 1, 0, 5000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (3, 'Ky', 'Mapholm', '2022-10-01', 'Calle 3', 0, 2, 5000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (4, 'Cher', 'Woodard', '2022-07-30', 'Calle 4', 1, 0, 3000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (5, 'Vittoria', 'Wreak', '2022-09-04', 'Calle 5', 0, 4, 2000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (6, 'Winonah', 'Mennear', '2022-10-04', 'Calle 6', 1, 4, 4000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (7, 'Montague', 'Christoffe', '2022-05-16', 'Calle 7', 0, 1, 4000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (8, 'Torin', 'Hundall', '2022-01-13', 'Calle 8', 1, 0, 5000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (9, 'Ottilie', 'Culbard', '2022-01-22', 'Calle 9', 0, 1, 5000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (10, 'Cirstoforo', 'Capozzi', '2021-12-13', 'Calle 10', 1, 4, 3000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (11, 'Dayna', 'Guitton', '2022-03-14', 'Calle 11', 0, 3, 3000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (12, 'Luther', 'Pullinger', '2022-01-07', 'Calle 12', 1, 3, 2000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (13, 'Isahella', 'Conkie', '2022-01-10', 'Calle 13', 1, 1, 4000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (14, 'Joyann', 'MacVean', '2022-01-06', 'Calle 14', 1, 3, 3000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (15, 'Catriona', 'Gogarty', '2022-04-28', 'Calle 15', 1, 4, 4000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (16, 'Ilario', 'Cricket', '2021-12-26', 'Calle 16', 1, 1, 1000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (17, 'Marcile', 'Pindell', '2021-12-22', 'Calle 17', 0, 0, 4000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (18, 'Anny', 'Normansell', '2022-09-13', 'Calle 18', 0, 2, 2000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (19, 'Rollin', 'Wase', '2022-03-06', 'Calle 19', 0, 4, 4000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (20, 'Marilyn', 'Januszkiewicz', '2022-09-17', 'Calle 20', 1, 2, 3000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (21, 'Olivia', 'Cay', '2022-02-14', 'Calle 21', 0, 3, 5000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (22, 'Vaughn', 'Flux', '2021-12-29', 'Calle 22', 1, 3, 2000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (23, 'Roze', 'Scotcher', '2022-07-11', 'Calle 23', 1, 4, 1000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (24, 'Madelene', 'Farmar', '2022-07-04', 'Calle 24', 0, 1, 3000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (25, 'Renae', 'Mabbott', '2022-04-13', 'Calle 25', 1, 0, 1000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (26, 'Nomi', 'Dran', '2022-07-04', 'Calle 26', 1, 3, 2000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (27, 'Nerta', 'Mayow', '2022-03-23', 'Calle 27', 0, 0, 1000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (28, 'Herman', 'Misken', '2022-02-06', 'Calle 28', 0, 2, 3000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (29, 'Albert', 'Benian', '2022-02-12', 'Calle 29', 1, 3, 4000000);
INSERT INTO empleado (id, nombres, apellidos, fecha_nacimiento, direccion, casado, hijos, salario) VALUES (30, 'Nicolina', 'Millyard', '2021-12-02', 'Calle 30', 1, 1, 4000000);
