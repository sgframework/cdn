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


DELETE FROM orders WHERE id=1;
















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
DELETE FROM migrations WHERE id=74;
DELETE FROM migrations WHERE id=75;

drop table orders;
drop table orderitems;
/*drop table items;*/