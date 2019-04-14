            $table->integer('itemnumber');
            $table->string('orderitems');
            $table->integer('itemqty');
            $table->integer('freeitem');
            $table->decimal('itemprice', 8, 2);
            $table->timestamps();


    ALTER TABLE `parent` ADD CONSTRAINT `ref` FOREIGN KEY (`parent_data`) REFERENCES `parent`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;


            ALTER TABLE `orderitems` ADD CONSTRAINT `ref` FOREIGN KEY (`parent_data`) REFERENCES `parent`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

SELECT * FROM migrations;
DELETE FROM migrations WHERE id=46;

INSERT INTO migrations (id, migration, batch) Values ("49", "2019_03_27_193737_create_items_table", "16");

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



DELETE FROM orders WHERE id=1;


DELETE FROM orders WHERE ponumber=40896073;
DELETE FROM orderitems WHERE ponumber=987888;
DELETE FROM orders WHERE ponumber=11596335;
DELETE FROM orderitems WHERE ponumber=11596335;
DELETE FROM orders WHERE ponumber="4433232 f";
DELETE FROM orderitems WHERE ponumber="4433232 f";
DELETE FROM orders WHERE ponumber=242333;
DELETE FROM orderitems WHERE ponumber=242333;
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





/* Items Updates */

INSERT INTO items (itemnumber, itemname, itemprice) Values
 ("56060509", "SUNBULAH SHREDDED MOZZARELLA (6X1 KG)", "193"),
("56060009", "SUNBULAH SHREDDED MOZZARELLA (24X200 G", "180"),
("56060109", "SUNBULAH SHREDDED MOZZARELLA (12X500G)", "209");


56060509	SUNBULAH SHREDDED MOZZARELLA (6X1 KG)	193
56060009	SUNBULAH SHREDDED MOZZARELLA (24X200 G)	180
56060109	SUNBULAH SHREDDED MOZZARELLA (12X500G)	209










/* sgdb0 Commands */

SELECT * FROM migrations;
DELETE FROM migrations WHERE id=49;
DELETE FROM migrations WHERE id=76;
DELETE FROM migrations WHERE id=77;

drop table orders;
drop table orderitems;
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