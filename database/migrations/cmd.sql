            $table->integer('itemnumber');
            $table->string('orderitems');
            $table->integer('itemqty');
            $table->integer('freeitem');
            $table->decimal('itemprice', 8, 2);
            $table->timestamps();


    ALTER TABLE `parent` ADD CONSTRAINT `ref` FOREIGN KEY (`parent_data`) REFERENCES `parent`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
            $table->decimal('totalqtyprice', 8, 2)->nullable();         
    ALTER TABLE `orderitems` ADD CONSTRAINT `ref` FOREIGN KEY (`parent_data`) REFERENCES `parent`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE orderitems
  ADD askedprice DECIMAL(18,2);

ALTER TABLE orders
  ADD attachedpo VARCHAR(255) DEFAULT NULL;

ALTER TABLE orders
  ADD totalfree INT(255) DEFAULT NULL;

ALTER TABLE orders
  ADD discount  DECIMAL(18,2);

ALTER TABLE orders
  ADD processedby VARCHAR(255) DEFAULT NULL;


ALTER TABLE orders
  ADD totaloriginal DECIMAL(18,2);

ALTER TABLE orderitems
  ADD itemoldprice DECIMAL(18,2);
ALTER TABLE orderitems
  ADD itemnewprice DECIMAL(18,2);
            $table->decimal('itemoldprice', 18, 2)->nullable();
            $table->decimal('itemnewprice', 18, 2)->nullable();


              $table->integer('')->nullable();


            ALTER TABLE `orderitems` ADD CONSTRAINT `ref` FOREIGN KEY (`parent_data`) REFERENCES `parent`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

SELECT * FROM migrations;
DELETE FROM migrations WHERE id=46;

INSERT INTO migrations (id, migration, batch) Values ("49", "2019_03_27_193737_create_items_table", "16");

SELECT * FROM users;

INSERT INTO users 

update orders set status='Processed' where id=1;
update orders set status='Just Created' where id=1;
update orders set status='Completed' where id=30;

SELECT * FROM migrations;
DELETE FROM migrations WHERE id=62;
DELETE FROM migrations WHERE id=63;

drop table orders;
drop table orderitems;


CREATE TABLE `SGDB`.`items` ( 
        `id` INT(11) NOT NULL AUTO_INCREMENT ,
         `itemnumber` INT(255) NOT NULL ,
          `itemname` VARCHAR(255) NOT NULL ,
           `itemprice` VARCHAR(255) NOT NULL ,
            PRIMARY KEY (`id`),
             UNIQUE `itemnum` (`itemnumber`(255))) ENGINE = InnoDB;





/* Branches Updates */


INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303042", "PANDA #10013", "2409", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303063", "PANDA #136", "2409", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303655", "PANDA #10029", "1275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303026", "PANDA #131", "2745", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303305", "PANDA #10004", "1275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303334", "PANDA #10026", "1275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303452", "Danube Co. Limited - 136 Tital", "1275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303400", "Danube Co. Limited - 134 Yasmin", "1275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303835", "Al Motafawekah for processing food", "1275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303567", "PANDA #156", "4688", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303800", "Danube Co. Limited - 147 Aqiq", "1275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303511", "PANDA #170", "4688", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303310", "Danube Co. Limited - 132 Nakhla", "5275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303280", "Othaim Markets Co. 190", "3761", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302925", "Othaim Markets Co. 167", "4241", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303146", "Danube Co. Limited - 129 Hitteen", "1275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303477", "PANDA #146", "2409", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303951", "Danube Co. Limited - 154 Rawabi", "2409", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302969", "PANDA #102", "2745", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303566", "Danube Co. Limited - 138 Irqa", "1869", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303489", "PANDA #164", "4688", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303966", "Danube Co. Limited - 156 Mughrizat", "5275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303862", "Danube Co. Limited - 150 Waha", "5275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303936", "Danube Co. Limited - 155 Ghadeer", "5275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303777", "Danube Co. Limited - 144 Yarmuk", "5275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303918", "Danube Co. Limited - 148 Green Oasi", "5275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302964", "PANDA #129", "5275", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303961", "Othaim Markets Co. 328", "4639", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303816", "Lulu Saudi Hypermarkets LLC. Jamiye", "1621", "24", "CENQ");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302990", "PANDA #10014", "2409", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303603", "Othaim Markets Co. 194", "4401", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302918", "AlSADHAN Trading Co. 80 Sahafa", "1869", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302952", "PANDA #116", "2409", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303159", "PANDA #140", "2409", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303693", "PANDA #314", "2508", "24", "CENQ");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303035", "PANDA #132", "2745", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302984", "PANDA #128", "4401", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303277", "PANDA #139", "1171", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302960", "PANDA #127", "1171", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303083", "PANDA #155", "4688", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303871", "Othaim Markets Co. 317", "4401", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302912", "PANDA #10012", "2745", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303397", "PANDA #137", "2745", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303143", "PANDA #135", "2409", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303222", "PANDA #10003", "4688", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302938", "PANDA #104", "4688", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303889", "Danube Co. Limited - 152 Badiah", "2745", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303241", "Othaim Markets Co. 188", "3761", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302959", "Othaim Markets Co. 172", "3761", "24", "CENR");

INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("303935", "Saudi HypermarketsCo(LLC)-Riyadh Pa", "1869", "24", "CENR");
INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302803", "PANDA #34", "2508", "24", "CENQ");



302803	PANDA #34	2508	24	CENQ


130131401
3271165 f

40041718	EMPANADA DOUGH ( 12 X 360 G)	125



303935	Saudi HypermarketsCo(LLC)-Riyadh Pa	1869	24	CENR

302959	Othaim Markets Co. 172	3761	24	CENR
303241	Othaim Markets Co. 188	3761	24	CENR
303889	Danube Co. Limited - 152 Badiah	2745	24	CENR

302938	PANDA #104	4688	24	CENR

303222	PANDA #10003	4688	24	CENR

303143	PANDA #135	2409	24	CENR
303397	PANDA #137	2745	24	CENR
302912	PANDA #10012	2745	24	CENR
303871	Othaim Markets Co. 317	4401	24	CENR
303083	PANDA #155	4688	24	CENR
302960	PANDA #127	1171	24	CENR
303277	PANDA #139	1171	24	CENR
302984	PANDA #128	4401	24	CENR
303035	PANDA #132	2745	24	CENR
303693	PANDA #314	2508	24	CENQ
303159	PANDA #140	2409	24	CENR
302952	PANDA #116	2409	24	CENR
302918	AlSADHAN Trading Co. 80 Sahafa	1869	24	CENR
303603	Othaim Markets Co. 194	4401	24	CENR
302990	PANDA #10014	2409	24	CENR
303816	Lulu Saudi Hypermarkets LLC. Jamiye	1621	24	CENQ
303961	Othaim Markets Co. 328	4639	24	CENR
302964	PANDA #129	5275	24	CENR
303918	Danube Co. Limited - 148 Green Oasi	5275	24	CENR
303777	Danube Co. Limited - 144 Yarmuk	5275	24	CENR
303936	Danube Co. Limited - 155 Ghadeer	5275	24	CENR
303862	Danube Co. Limited - 150 Waha	5275	24	CENR
303063	PANDA #136	2409	24	CENR
303655  PANDA #10029	1275	24	CENR
303026	PANDA #131	2745	24	CENR
303391	PANDA #158	2745	24	CENR
303616	PANDA #144	2745	24	CENR
303305	PANDA #10004	1275	24	CENR
303334	PANDA #10026	1275	24	CENR
303452	Danube Co. Limited - 136 Tital	1275	24	CENR
303400	Danube Co. Limited - 134 Yasmin	1275	24	CENR
303835	Al Motafawekah for processing food	4761	21	CENR
303567	PANDA #156	4688	24	CENR
303800	Danube Co. Limited - 147 Aqiq	1275	24	CENR
303511	PANDA #170	4688	24	CENR
303310	Danube Co. Limited - 132 Nakhla	5275	24	CENR
303280	Othaim Markets Co. 190	3761	24	CENR
302925	Othaim Markets Co. 167	4241	24	CENQ
303146	Danube Co. Limited - 129 Hitteen	1275	24	CENR
303477	PANDA #146	2409	24	CENR
303951	Danube Co. Limited - 154 Rawabi	2409	24	CENR
302969	PANDA #102	2745	24	CENR
303566	Danube Co. Limited - 138 Irqa	1869	24	CENR
303489	PANDA #164	4688	24	CENR
303966	Danube Co. Limited - 156 Mughrizat	5275	24	CENR



/** DELETE RECORDS **/

DELETE FROM orders WHERE id=1;
DELETE FROM orders WHERE id=147;


DELETE FROM orders WHERE ponumber=40896073;
DELETE FROM orderitems WHERE ponumber=987888;
DELETE FROM orders WHERE ponumber=11596335;
DELETE FROM branches WHERE branchnumber=303603;

303603
DELETE FROM orderitems WHERE ponumber=11596335;
DELETE FROM orders WHERE ponumber="4433232 f";
DELETE FROM orderitems WHERE ponumber="4433232 f";
DELETE FROM orders WHERE ponumber=242333;
DELETE FROM orderitems WHERE ponumber=242333;
DELETE FROM orders WHERE ponumber='[{"ponumber":"test0"}]';

DELETE FROM orderitems WHERE ponumber="40861618 1";
DELETE FROM orders WHERE ponumber="40861618 1";


DELETE FROM orderitems WHERE ponumber="40861527 1";
DELETE FROM orders WHERE ponumber="40861527 1";

DELETE FROM orderitems WHERE ponumber="40861484 1";
DELETE FROM orders WHERE ponumber="40861484 1";


DELETE FROM orderitems WHERE ponumber="40856878 1";
DELETE FROM orders WHERE ponumber="40856878 1";


DELETE FROM orderitems WHERE ponumber="40856737 1";
DELETE FROM orders WHERE ponumber="40856737 1";

DELETE FROM orderitems WHERE ponumber="40861916 1";
DELETE FROM orders WHERE ponumber="40861916 1";


DELETE FROM items WHERE itemnumber ="56060006";
DELETE FROM items WHERE itemnumber ="56060106";
DELETE FROM items WHERE itemnumber ="56060506";


DELETE FROM orderitems WHERE ponumber="3271165 f1";
DELETE FROM orders WHERE ponumber="3271165 f";
3271165 f
56060006
56060106
56060506


UPDATE orders set totalprice=2090 where ponumber="240419 01f";
totalprice

240419 01f

240419 01f

"40861527 1"
"40861484 1"
"40856878 1"
"40856737 1"
"40861916 1"

DELETE FROM orderitems WHERE ponumber='[{"ponumber":"test0"}]';





DELETE FROM orders WHERE ponumber="11698226";
DELETE FROM orderitems WHERE ponumber="11698226";




DELETE FROM orders WHERE ponumber="156872";
DELETE FROM orderitems WHERE ponumber="156872";

DELETE FROM orders WHERE ponumber="156872 1";
DELETE FROM orderitems WHERE ponumber="156872 1";

DELETE FROM orders WHERE ponumber="240419 009";
DELETE FROM orderitems WHERE ponumber="240419 009";

DELETE FROM orders WHERE ponumber="240419 012f";
DELETE FROM orderitems WHERE ponumber="240419 012f";

DELETE FROM orders WHERE ponumber="111701 111";
DELETE FROM orderitems WHERE ponumber="111701 111";



DELETE FROM orders WHERE ponumber="270419 666663";
DELETE FROM orderitems WHERE ponumber="270419 666663";




START TRANSACTION;

BEGIN;


update orders;
ROLLBACK;

 --COMMIT; 

START TRANSACTION;
  UPDATE orders
set staffname="A. Shawky", staffid="1869"
  WHERE created_at BETWEEN  '2019-02-30 16:00:59' AND '2019-04-30 17:00:00'; 
ROLLBACK;



DELETE FROM orders WHERE ponumber="test";
DELETE FROM orderitems WHERE ponumber="test";

DELETE FROM orders WHERE ponumber="test0";
DELETE FROM orderitems WHERE ponumber="test0";

DELETE FROM orders WHERE ponumber="test1";
DELETE FROM orderitems WHERE ponumber="test1";

DELETE FROM orders WHERE ponumber="test2";
DELETE FROM orderitems WHERE ponumber="test2";

DELETE FROM orders WHERE ponumber="test3";
DELETE FROM orderitems WHERE ponumber="test3";

DELETE FROM orders WHERE ponumber="test4";
DELETE FROM orderitems WHERE ponumber="test4";

DELETE FROM orders WHERE ponumber="test5";
DELETE FROM orderitems WHERE ponumber="test5";

DELETE FROM orders WHERE ponumber="test6";
DELETE FROM orderitems WHERE ponumber="test6";

DELETE FROM orders WHERE ponumber="test7";
DELETE FROM orderitems WHERE ponumber="test7";

DELETE FROM orders WHERE ponumber="test8";
DELETE FROM orderitems WHERE ponumber="test8";

DELETE FROM orders WHERE ponumber="test9";
DELETE FROM orderitems WHERE ponumber="test9";

DELETE FROM orders WHERE ponumber="test10";
DELETE FROM orderitems WHERE ponumber="test10";

DELETE FROM orders WHERE ponumber="test11";
DELETE FROM orderitems WHERE ponumber="test11";

DELETE FROM orders WHERE ponumber="test12";
DELETE FROM orderitems WHERE ponumber="test12";

DELETE FROM orders WHERE ponumber="test13";
DELETE FROM orderitems WHERE ponumber="test13";

DELETE FROM orders WHERE ponumber="test14";
DELETE FROM orderitems WHERE ponumber="test14";

DELETE FROM orders WHERE ponumber="test15";
DELETE FROM orderitems WHERE ponumber="test15";

DELETE FROM orders WHERE ponumber="test16";
DELETE FROM orderitems WHERE ponumber="test16";

DELETE FROM orders WHERE ponumber="test17";
DELETE FROM orderitems WHERE ponumber="test17";

DELETE FROM orders WHERE ponumber="test18";
DELETE FROM orderitems WHERE ponumber="test18";

DELETE FROM orders WHERE ponumber="test19";
DELETE FROM orderitems WHERE ponumber="test19";

DELETE FROM orders WHERE ponumber="test20";
DELETE FROM orderitems WHERE ponumber="test20";

DELETE FROM orders WHERE ponumber="test21";
DELETE FROM orderitems WHERE ponumber="test21";

DELETE FROM orders WHERE ponumber="test22";
DELETE FROM orderitems WHERE ponumber="test22";

DELETE FROM orders WHERE ponumber="test23";
DELETE FROM orderitems WHERE ponumber="test23";

DELETE FROM orders WHERE ponumber="test24";
DELETE FROM orderitems WHERE ponumber="test24";

DELETE FROM orders WHERE ponumber="test25";
DELETE FROM orderitems WHERE ponumber="test25";

DELETE FROM orders WHERE ponumber="test26";
DELETE FROM orderitems WHERE ponumber="test26";

DELETE FROM orders WHERE ponumber="test27";
DELETE FROM orderitems WHERE ponumber="test27";

DELETE FROM orders WHERE ponumber="test28";
DELETE FROM orderitems WHERE ponumber="test28";

DELETE FROM orders WHERE ponumber="test29";
DELETE FROM orderitems WHERE ponumber="test29";

DELETE FROM orders WHERE ponumber="test30";
DELETE FROM orderitems WHERE ponumber="test30";

DELETE FROM orders WHERE ponumber="test31";
DELETE FROM orderitems WHERE ponumber="test31";

DELETE FROM orders WHERE ponumber="test32";
DELETE FROM orderitems WHERE ponumber="test32";

DELETE FROM orders WHERE ponumber="test33";
DELETE FROM orderitems WHERE ponumber="test33";

DELETE FROM orders WHERE ponumber="test34";
DELETE FROM orderitems WHERE ponumber="test34";

DELETE FROM orders WHERE ponumber="test35";
DELETE FROM orderitems WHERE ponumber="test35";

DELETE FROM orders WHERE ponumber="test36";
DELETE FROM orderitems WHERE ponumber="test36";

DELETE FROM orders WHERE ponumber="test37";
DELETE FROM orderitems WHERE ponumber="test37";

DELETE FROM orders WHERE ponumber="test38";
DELETE FROM orderitems WHERE ponumber="test38";

DELETE FROM orders WHERE ponumber="test39";
DELETE FROM orderitems WHERE ponumber="test39";

DELETE FROM orders WHERE ponumber="test40";
DELETE FROM orderitems WHERE ponumber="test40";


DELETE FROM orders WHERE status="JustCreated";
DELETE FROM orderitems WHERE orderstatus="JustCreated";


DELETE FROM orders WHERE status="Editing";
DELETE FROM orderitems WHERE orderstatus="Editing";


DELETE FROM orders WHERE status="Reviewing";
DELETE FROM orderitems WHERE orderstatus="Reviewing";






SELECT branchname, logo
FROM branches
WHERE `branchname` LIKE '%PANDA%';


SELECT branchname, logo
FROM branches
WHERE `branchname` LIKE '%Othaim%';


SELECT branchname, logo
FROM branches
WHERE `branchname` LIKE '%Tamimi%';


SELECT branchname, logo
FROM branches
WHERE `branchname` LIKE '%Carrefour%';

SELECT branchname, logo
FROM branches
WHERE `branchname` LIKE '%Danub%';

SELECT branchname, logo
FROM branches
WHERE `branchname` LIKE '%Lulu%';

SELECT branchname, logo
FROM branches
WHERE `branchname` LIKE '%Carrefour%';

            danub.png
            lulu.png

carrefour.jpg

/* SET LOGOS */
UPDATE branches SET logo="panda.png" WHERE `branchname` LIKE '%PANDA%';
UPDATE branches SET logo="othaim.png" WHERE `branchname` LIKE '%Othaim%';
UPDATE branches SET logo="tamimi.jpg" WHERE `branchname` LIKE '%Tamimi%';
UPDATE branches SET logo="carrefour.jpg" WHERE `branchname` LIKE '%PANDA%';
UPDATE branches SET logo="danub.png" WHERE `branchname` LIKE '%Danube%';
UPDATE branches SET logo="lulu.png" WHERE `branchname` LIKE '%Lulu%';
UPDATE branches SET logo="panda.png" WHERE `branchname` LIKE '%PANDA%';
UPDATE branches SET logo="panda.png" WHERE `branchname` LIKE '%PANDA%';


DELETE FROM orders WHERE ponumber="070519 00028";
DELETE FROM orderitems WHERE ponumber="070519 00028";
DELETE FROM orders WHERE ponumber="070519 00029";
DELETE FROM orderitems WHERE ponumber="070519 00029";



070519 00028
070519 00029


020519 440

020519 441




59003112	KERRYGOLD RED CHEDDAR CHEESE (4X5 KG)	880
59003212	KERRYGOLD WHITE CHEDDAR CHEESE (4X5 KG)	880


DELETE FROM orders WHERE ponumber="19013828";
DELETE FROM orderitems WHERE ponumber="19013828";




DELETE FROM orders WHERE ponumber="2329890 f";
DELETE FROM orderitems WHERE ponumber="2329890 f";


SELECT * FROM orders where ponumber=11631534;
SELECT * FROM orderitems where ponumber=11631534;

select * from orderitems where ponumber="7691971";
DELETE FROM orders WHERE ponumber="7691971";
DELETE FROM orderitems WHERE ponumber="7691971";

DELETE FROM orders WHERE ponumber="132377";
DELETE FROM orderitems WHERE ponumber="132377";

132377

7691971



11631534

11596335
4433232 f
987888
40896073
242333
DELETE FROM orders WHERE ponumber="2329890 f";
DELETE FROM orderitems WHERE ponumber="2329890 f";
2329890 f
DELETE FROM orders WHERE ponumber=8090998;
DELETE FROM orderitems WHERE ponumber=8090998;
8090998
DELETE FROM orders WHERE ponumber="454444 f";
DELETE FROM orderitems WHERE ponumber="454444 f";
454444 f

DELETE FROM orders WHERE ponumber="test0";
DELETE FROM orderitems WHERE ponumber="test0";
DELETE FROM orders WHERE ponumber="40842498";
DELETE FROM orderitems WHERE ponumber="40842498";
DELETE FROM orders WHERE ponumber="11659851 f";
DELETE FROM orderitems WHERE ponumber="11659851 f";
DELETE FROM orders WHERE ponumber="11659851 f1";
DELETE FROM orderitems WHERE ponumber="11659851 f1";


DELETE FROM orders WHERE ponumber="123123";
DELETE FROM orderitems WHERE ponumber="123123";


DELETE FROM orders WHERE ponumber="050519 0020";
DELETE FROM orderitems WHERE ponumber="050519 0020";




050519 0020


11659851 f1
11659851 f
40842498
23232323


/* Items Updates */














54000010	KETTLE SEA SALT 45GX50	77	77
54000110	KETTLE SALT & VINEGAR 45G*50	77	77
54000210	KETTLE HONEY MUSTARD 45GX50	77	77
54000410	KETTLE SEA SALT 170G*12	64	64
54000510	KETTLE SALT&VINEGAR 170G*12	64	64
54000610	KETTLE HONEY MUSTARD 170G*12	64	64
54001210	BUFFIES PEANUTS 30GX50	57	57
54001310	BUFFIES PEANUTS 65GX24	55	55


INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) Values ("302803", "PANDA #34", "2508", "24", "CENQ");



INSERT INTO itemsv2 (itemnumber, itemname, itemoldprice, itemnewprice) Values
 ("54000010", "KETTLE SEA SALT 45GX50", "77", "77");


50076012	SUNB ASIAN PARATHA (12X400G)	54


INSERT INTO itemsv2 (itemnumber, itemname, itemoldprice, itemnewprice) Values
 ("50076012", "SUNB ASIAN PARATHA (12X400G)", "54", "54");


INSERT INTO items (itemnumber, itemname, itemoldprice, itemnewprice) Values
 ("50076012", "SUNB ASIAN PARATHA (12X400G)", "54", "54");



INSERT INTO itemsv2 (itemnumber, itemname, itemoldprice, itemnewprice) Values
 ("54000110", "KETTLE SALT & VINEGAR 45G*50", "77", "77");


INSERT INTO itemsv2 (itemnumber, itemname, itemoldprice, itemnewprice) Values
 ("54000210", "KETTLE HONEY MUSTARD 45GX50", "77", "77");


INSERT INTO itemsv2 (itemnumber, itemname, itemoldprice, itemnewprice) Values
 ("54000410", "KETTLE SEA SALT 170G*12", "64", "64");


INSERT INTO itemsv2 (itemnumber, itemname, itemoldprice, itemnewprice) Values
 ("54000510", "KETTLE SALT&VINEGAR 170G*12", "64", "64");


INSERT INTO itemsv2 (itemnumber, itemname, itemoldprice, itemnewprice) Values
 ("54000610", "KETTLE HONEY MUSTARD 170G*12", "64", "64");

INSERT INTO itemsv2 (itemnumber, itemname, itemoldprice, itemnewprice) Values
 ("54001210", "BUFFIES PEANUTS 30GX50", "57", "57");

INSERT INTO itemsv2 (itemnumber, itemname, itemoldprice, itemnewprice) Values
 ("54001310", "BUFFIES PEANUTS 65GX24", "58", "58");



54000010	KETTLE SEA SALT 45GX50	77
54000110	KETTLE SALT & VINEGAR 45G*50	77
54000210	KETTLE HONEY MUSTARD 45GX50	77
54000410	KETTLE SEA SALT 170G*12	64
54000510	KETTLE SALT&VINEGAR 170G*12	64
54000610	KETTLE HONEY MUSTARD 170G*12	64
54001210	BUFFIES PEANUTS 30GX50	57
54001310	BUFFIES PEANUTS 65GX24	55



56060509	SUNBULAH SHREDDED MOZZARELLA (6X1 KG)	193
56060009	SUNBULAH SHREDDED MOZZARELLA (24X200 G)	180
56060109	SUNBULAH SHREDDED MOZZARELLA (12X500G)	209



/** Update Records **/
UPDATE orders
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="445725";

UPDATE orders
SET processedby = "5303"
WHERE status="Completed";

UPDATE orders
SET staffid = "3761", staffname = "Hesham"
WHERE ponumber="220419 02";


UPDATE orderitems
SET staffid = "3761", staffname = "Hesham"
WHERE ponumber="220419 02";
3761
220419 02


Select * from users;

/** Define REGULAR USERS */


UPDATE users
SET is_permission = "0";


/** Define SUPER USERS */

UPDATE users
SET is_permission = "2"
WHERE id="4";

UPDATE users
SET is_permission = "2"
WHERE id="6";

UPDATE users
SET is_permission = "2"
WHERE id="1";

/** Define ADMINS */


UPDATE users
SET is_permission = "1"
WHERE id="25";



UPDATE users
SET is_permission = "1"
WHERE id="20";


UPDATE users
SET is_permission = "1"
WHERE id="23";


UPDATE users
SET is_permission = "1"
WHERE id="24";

UPDATE users
SET is_permission = "1"
WHERE id="19";



UPDATE orders set status="Submitted"
WHERE ponumber="010519 2222";

UPDATE orders set status="Submitted"
WHERE ponumber="010519 2223";


UPDATE orderitems set orderstatus="Submitted"
WHERE ponumber="010519 2222";

UPDATE orderitems set orderstatus="Submitted"
WHERE ponumber="010519 2223";






UPDATE users
SET is_permission = "1"
WHERE id="28";

UPDATE orderitems
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="445725";

UPDATE orders
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="80597";

UPDATE orderitems
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="80597";


UPDATE orders
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="314616";

UPDATE orderitems
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="314616";




UPDATE orders
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="62202";

UPDATE orderitems
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="62202";


UPDATE orders
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="78354";

UPDATE orderitems
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="78354";


UPDATE orders
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="445726";

UPDATE orderitems
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="445726";





UPDATE orders
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="314617";

UPDATE orderitems
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="314617";



UPDATE orders
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="40847527";

UPDATE orderitems
SET staffid = "1275", staffname = "Michael Lanes"
WHERE ponumber="40847527";


SELECT * FROM orders where ponumber="40788687";


Select * FROM orderitems WHERE ponumber="445725";

/* sgdb0 Commands */

SELECT * FROM migrations;
DELETE FROM migrations WHERE id=49;
        DELETE FROM migrations WHERE id=82;
        DELETE FROM migrations WHERE id=83;
        drop table orders;
        drop table orderitems;

SELECT * FROM orders WHERE ponumber=11608607;
SELECT * FROM orders WHERE ponumber="test0";
SELECT * FROM orderitems WHERE ponumber="test0";



SELECT * FROM orders WHERE ponumber=11608607;
DELETE FROM orders WHERE ponumber="test0";
DELETE FROM orderitems WHERE ponumber="test0";

11608607

SELECT * from orders where ponumber="40845520 f";

/*drop table items;*/



-----+
| id | orderid  | ordernumber | staffname | staffid | ponumber  | branchname
| branchnumber | orderitems | itemnumber | itemqty | freeitem | itemprice | orderstatus | slug
| totalqty | totalfree | totalprice | created_at | updated_at |
+----+--------------------------------------------------------------------------
--+-------------+--------------------+---------+-----------+--------------------
------------+--------------+----------------------------------------------------
-+------------+---------+----------+-----------+-------------+------------------
-----+----------+-----------+------------+---------------------+----------------
-----+
|  1 | http://ipool.remotewebaccess.com/orders/order/00008550817-2329890 f/review
| 8550817 | Ahmed M. Sulaimani | 5303 | 2329890 f | 102303-AL TANNOOR PIZZA | 102303 | 
| NULL | NULL |  NULL |  NULL | Submitted | 00008550817-2329890 f | NULL | NULL | NULL | 2019-04-12 01:10:58 | 2019-04-12 01:16:52 |NULL