+CREATE TABLE marko_loomaaed
 ( id INT NOT NULL AUTO_INCREMENT,
   nimi VARCHAR(50),
   vanus INT,
   liik VARCHAR(50),
   CONSTRAINT id PRIMARY KEY (id)
 );

 ALTER TABLE marko_loomaaed
   ADD puur INT AFTER liik;

 INSERT INTO marko_loomaaed (nimi, vanus, liik, puur)
 VALUES ('Miisu',1,'kass',1),
 	   ('Kõuts',1,'kass',1),
 	   ('Simba',1,'kass',1),
 	   ('Aston',1,'koer',1),
 	   ('Bosse',1,'koer',1),
       ('Nässu',17,'koer',2);

SELECT puur, COUNT( id ) AS puuris_loomi FROM  `marko_loomaaed`
 GROUP BY puur

 SELECT nimi, puur FROM  `marko_loomaaed`
 WHERE puur =1

 SELECT MIN( vanus ) AS Noorim, MAX( vanus ) AS Vanim
 FROM  `marko_loomaaed`

 UPDATE `marko_loomaaed`
 SET vanus = vanus + 1;