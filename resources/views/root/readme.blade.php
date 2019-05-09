@extends('layouts.review')
@section('content')

<style>
body {

    font-size:32px;
}
</style>

<div class="container">
    <div class="row justify-content-center">
        @if ( Auth::user()->is_permission == '0')

        

<strong><i class="fa fa-book"></i><span style="font-size:16px" id="manual"><a class="header-link" href="#manual"></a> SunbulahGroup Framework Manual</span></strong>
<hr />

<article class="markdown-body">



<h3 id="order-create"><a class="header-link" href="#order-create"></a>Creating Orders</h3>

@markdown

#### Steps Overview
* Step One
    - Insert PO Number, _can't be duplicated_ and Coustomer Number, _can't be empty_.

> Alphnumric syntax is accepted & allowed. ``` A-Z0-9 ```

> Coustomers are shown by SalesGroup only.

* Step Two
    - Inserting items into that same entered PO Number.

##### Step 1

![{{ asset('/images/assests/readme-order-create.png') }}]({{ asset('/images/assests/readme-order-create.png') }})

> Note that Frico po's should be marked with f letter after po number as shown in above img.


![{{ asset('/images/assests/unique-po.png') }}]({{ asset('/images/assests/unique-po.png') }})

> Also note that PO number **MUST** be unique and never duplicated as shown in above img.



##### Step 2

Confirmation page.

![{{ asset('/images/assests/confirmation.png') }}]({{ asset('/images/assests/confirmation.png') }})

    All you have to do is proceed to next page.

![{{ asset('/images/assests/edit-order.png') }}]({{ asset('/images/assests/edit-order.png') }})

Warnings & Alerts

    Can't review & submit an empty order !
    Your item have been inserted successfully.

Requierd fields

    The Item field is required.
    The Qty field is required.

![{{ asset('/images/assests/items-insert.png') }}]({{ asset('/images/assests/items-insert.png') }})

    You can delete an item by clicking on the x of the corresponding item row.

##### Please note that as soon as you press review you CAN'T make any changes to the order. Neither delete nor insertion are allowed.
@endmarkdown


<h3 id="order-review"><a class="header-link" href="#order-review"></a>Reviewing Order</h3>


@markdown

Don't forget to upload original po copy.

![{{ asset('/images/assests/order-review.png') }}]({{ asset('/images/assests/order-review.png') }})

![{{ asset('/images/assests/upload-po.png') }}]({{ asset('/images/assests/upload-po.png') }})

Warnings & Alerts

    Your PO has been attached to this order => You can submit now.
        
![{{ asset('/images/assests/submitted-success.png') }}]({{ asset('/images/assests/submitted-success.png') }})

@endmarkdown





<h3 id="order-status"><a class="header-link" href="#order-status"></a>Orders Statuses</h3>

@markdown

![{{ asset('/images/assests/order-status.png') }}]({{ asset('/images/assests/order-status.png') }})


#### Orders Timeline By Status

![{{ asset('/images/assests/timeline-by-status.png') }}]({{ asset('/images/assests/timeline-by-status.png') }})

@endmarkdown













<h3 id="profile-dashboard"><a class="header-link" href="#profile-dashboard"></a>Profile, Dashboard & Reports</h3>

@markdown

##### Dashboard View

![{{ asset('/images/assests/dashboard.png') }}]({{ asset('/images/assests/dashboard.png') }})

You can extract reports and create a piviot tables easely.

![{{ asset('/images/assests/export.png') }}]({{ asset('/images/assests/export.png') }})

It will generate a CSV format file, which you can drag and drop into excel sheet.

![{{ asset('/images/assests/exported-report.png') }}]({{ asset('/images/assests/exported-report.png') }})

**Note that only completed orders are generated.**

![{{ asset('/images/assests/piviot-table-create0.png') }}]({{ asset('/images/assests/piviot-table-create0.png') }})

![{{ asset('/images/assests/piviot-table-created0.png') }}]({{ asset('/images/assests/piviot-table-created0.png') }})


@endmarkdown

</article>


<br />
<br />
<br />

<hr />

@elseif ( Auth::user()->is_permission == '1')



                    <strong><i class="fa fa-book"></i><span style="font-size:16px" id="manual"><a class="header-link" href="#manual"></a> SunbulahGroup Framework Manual</span></strong>

                    <hr />




                    <article class="markdown-body">



<h3 id="order-create"><a class="header-link" href="#order-create"></a>Creating Orders</h3>

@markdown

#### Steps Overview
* Step One
    - Insert PO Number, _can't be duplicated_ and Coustomer Number, _can't be empty_.

> Alphnumric syntax is accepted & allowed. ``` A-Z0-9 ```

> Coustomers are shown by SalesGroup only.

* Step Two
    - Inserting items into that same entered PO Number.

##### Step 1

![{{ asset('/images/assests/readme-order-create.png') }}]({{ asset('/images/assests/readme-order-create.png') }})

> Note that Frico po's should be marked with f letter after po number as shown in above img.


![{{ asset('/images/assests/unique-po.png') }}]({{ asset('/images/assests/unique-po.png') }})

> Also note that PO number **MUST** be unique and never duplicated as shown in above img.



##### Step 2

Confirmation page.


This page is important, it is saving confirmed data in session and reset it with every new order.

```
    cdn\Http\Controllers\OrdersController
        $slug = $request['ordernumber'] . "-" . $request['ponumber'];
        session_reset();
        $request->session()->put('ordernumber', $request->ordernumber);
        $request->session()->put('staffid', $request->staffid);
        $request->session()->put('ponumber', $request->ponumber);
        $request->session()->put('branchnumber', $request->branchnumber);
        $request->session()->put('branchname', $request->branchname);
        $request->session()->put('status', $status);
        $request->session()->put('slug', $slug);
        $request->session()->put('created_at', $request->created_at);

```



![{{ asset('/images/assests/confirmation.png') }}]({{ asset('/images/assests/confirmation.png') }})


All you have to do is proceed to next page.

![{{ asset('/images/assests/edit-order.png') }}]({{ asset('/images/assests/edit-order.png') }})

Warnings & Alerts

    Can't review & submit an empty order !
    Your item have been inserted successfully.

Requierd fields

    The Item field is required.
    The Qty field is required.

![{{ asset('/images/assests/items-insert.png') }}]({{ asset('/images/assests/items-insert.png') }})

    You can delete an item by clicking on the x of the corresponding item row.

##### Please note that as soon as you press review you CAN'T make any changes to the order. Neither delete nor insertion are allowed.
@endmarkdown


<h3 id="order-review"><a class="header-link" href="#order-review"></a>Reviewing Order</h3>


@markdown

Don't forget to upload original po copy.

![{{ asset('/images/assests/order-review.png') }}]({{ asset('/images/assests/order-review.png') }})

![{{ asset('/images/assests/upload-po.png') }}]({{ asset('/images/assests/upload-po.png') }})

Warnings & Alerts

    Your PO has been attached to this order => You can submit now.
        
![{{ asset('/images/assests/submitted-success.png') }}]({{ asset('/images/assests/submitted-success.png') }})

@endmarkdown





<h3 id="order-status"><a class="header-link" href="#order-status"></a>Orders Statuses</h3>

@markdown

![{{ asset('/images/assests/order-status.png') }}]({{ asset('/images/assests/order-status.png') }})


#### Orders Timeline By Status

![{{ asset('/images/assests/timeline-by-status.png') }}]({{ asset('/images/assests/timeline-by-status.png') }})

@endmarkdown













<h3 id="profile-dashboard"><a class="header-link" href="#profile-dashboard"></a>Profile, Dashboard & Reports</h3>

@markdown

##### Dashboard View

![{{ asset('/images/assests/dashboard.png') }}]({{ asset('/images/assests/dashboard.png') }})

You can extract reports and create a piviot tables easely.

![{{ asset('/images/assests/export.png') }}]({{ asset('/images/assests/export.png') }})

It will generate a CSV format file, which you can drag and drop into excel sheet.

![{{ asset('/images/assests/exported-report.png') }}]({{ asset('/images/assests/exported-report.png') }})

**Note that only completed orders are generated.**

![{{ asset('/images/assests/piviot-table-create0.png') }}]({{ asset('/images/assests/piviot-table-create0.png') }})

![{{ asset('/images/assests/piviot-table-created0.png') }}]({{ asset('/images/assests/piviot-table-created0.png') }})


@endmarkdown

</article>


<h2 id="admins"><a class="header-link" href="#admins"></a>Only admins and higher can see below section</h2>




@elseif ( Auth::user()->is_permission == '2')


<h2 id="superadmins"><a class="header-link" href="#superadmins"></a>Only super admins can see below section</h2>
<h3 id="permissions"><a class="header-link" href="#permissions"></a>Permissions and access levels</h3>

@markdown

    is_permission [ 
                    '0' => 'User', 011, 021, 031, 041
                    '1' => 'Admin', 010, 020, 030, 040
                    '2' => 'SuperAdmin' 000000
                ];
    -------------------------------------

    Tree [SG]

            * byDistriputionChannel
                -> HASSAN M. RABAH 000000
                    - Retail
                        -> BASHAR AL DALAA  / KA MANAGER 001010
                            -> FIRAS / KA SUPERVISOR  CSZ 001020
                                -> Michael 001021
                                -> Fahad 001022
                                -> Abdalla Naser 001023
                                -> M. Sayed 001024
                                -> A. Medhat 001025
                                -> Wail 001026
                            -> Hazem / KA SUPERVISOR  CSL 001030
                                -> Noufal 001031
                                -> Ruben M. 001032
                                -> Samsudin 001033
                                -> Osama M.R. 001034
                            -> M. Awaden  / KA SUPERVISOR CTK 001040
                                -> A. Shawky 001041
                                -> Hassan Fathi 001042
                                -> Hesham 001043
                                -> M. Hassan 001044
                            -> WAEL GHAZI / KA SUPERVISOR Qaseem 001110
                                -> Suneer 001111
                                -> Fahad Hussein 001112
                                -> Sultan Salman 001113
                                -> Medhat 001114
                    - Whole Sale 
                        -> Odeh Hersh 002010
                            -> Elsayed M. Ibrahim 002011
                            -> Anas 002012
                            -> Mujahed Radwan 002013
                            -> Amr M. Eisa 002014

                        -> WS channel Qaseem 002110
                            -> Moneer 002111
                            -> Nasser Ahmed 002112
                        
                    - Food Service
                    - Van

    -------------------------------------
    
                6 digits structre

                    001 = Retail
                        010 = MANAGER
                            011 = User
                    002 = WS
                        020 = MANAGER
                            021 = User    
                    003 = FS
                        030 = MANAGER
                            031 = User
                    004 = VAN
                        040 = MANAGER
                            041 = User



-------------------

```
    PHP Code:
        $suaccesslevel = User::select()->where('is_permission',  '=', '2')->get();
        $adminsaccesslevel = User::select()->where('is_permission',  '=', '1')->get();
        $usersaccesslevel = User::select()->where('is_permission',  '=', '0')->get();
            /* Head Manager */
            $hasanrabah = User::select()->where('id',  '=', '6')->get();
                /* KA MANAGER */
                $bashar =  User::select()->where('dc',  '=', '001010')->get();
                    /* KA SUPERVISOR  CSZ */
                    $firas = User::select()->where('dc',  '=', '001020')->get();
                        $firasteam = User::select()->where('dc',  'like', '00102%')->get();
                    /* KA SUPERVISOR  CSL */
                    $hazem = User::select()->where('dc',  '=', '001030')->get();
                        $hazemteam =  User::select()->where('dc',  'like', '00103%')->get();
                    /* KA SUPERVISOR CTK */
                    $awaden = User::select()->where('dc',  '=', '001040')->get();
                        $awadenteam = User::select()->where('dc',  'like', '00104%')->get();
                        /* WS MANAGER */ 
                    $odeh = User::select()->where('dc',  '=', '002010')->get();
                        $odehteam = User::select()->where('dc',  'like', '00201%')->get(); 

```


### Sequence ranges

```

    * Sequence tree

        - michael -> ' 0010210 - 001021999999 '
        - fahaddahasy -> ' 0010220 - 001022999999 '
        - abdullahnaser -> ' 0010230 - 001023999999 '
        - mohammedsayed -> ' 0010240 - 001024999999 '
        - ahmedmedhat -> ' 0010250 - 001025999999 '
        - noufal -> ' 0010310 - 001031999999 '
        - ruben -> ' 0010320 - 001032999999 '
        - samsudin -> ' 0010330 - 001033999999 '
        - osama -> ' 0010340 - 001034999999 '
        - ahmedshawqy -> ' 0010410 - 001041999999 '
        - hassanfathi -> ' 0010420 - 001042999999 '
        - hashem -> ' 0010430 - 001043999999 '
        - medhathassan -> ' 0010440 - 001044999999 '
        - suneer -> ' 0011110 - 001111999999 '
        - fahadhussein -> ' 0011120 - 001112999999 '
        - sultansalman -> ' 0011130 - 001113999999 '
        - medhat -> ' 0011140 - 001114999999 '

```

@endmarkdown

<h3 id="orders-sorting"><a class="header-link" href="#orders-sorting"></a>Orders $_GLOBAL Sorting & Arrangement</h3>

@markdown

    JustCreated Orders ->orderBy('updated_at', 'asc');

    Editing Orders ->orderBy('updated_at', 'asc');

    Reviewing Orders ->orderBy('updated_at', 'asc');

    Submitted Orders ->orderBy('updated_at', 'asc');

    Completed Orders ->orderBy('updated_at', 'asc');


    Items Insertion->orderBy('created_at', 'desc');



* Where Ascending

        Older
          |
          v
        Newer

        Completed@
        19/04/19 7:35PM
        19/04/19 8:18PM
        19/04/19 8:21PM
        19/04/19 8:33PM

* And Descending

        Newer
          |
          v
        Older
        
        Completed@
        19/04/19 8:33PM
        19/04/19 8:21PM
        19/04/19 8:18PM
        19/04/19 7:35PM

@endmarkdown

<h3 id="date-time-formats"><a class="header-link" href="#date-time-formats"></a>Date Time Formats</h3>

@markdown

```
$today = date("d/m/y g:ia");                    // 19/04/19 5:47pm
$today = date("d/m/y | g:i a");                 // 19/04/19 | 5:47 pm
$today = date("dmy | g:i a");                   // 190419 | 5:47 pm
$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$today = date("H:i:s");                         // 17:16:18
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)


```


```
@php 

    // Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
    // Mountain Standard Time (MST) Time Zone

    var_dump($today = date("d/m/y g:ia"));                    // 19/04/19 5:47pm
    var_dump($today = date("d/m/y | g:i a"));                 // 19/04/19 | 5:47 pm
    var_dump($today = date("dmy | g:i a"));                   // 190419 | 5:47 pm
    var_dump($today = date("F j, Y, g:i a"));                 // March 10, 2001, 5:16 pm
    var_dump($today = date("m.d.y"));                         // 03.10.01
    var_dump($today = date("j, n, Y"));                       // 10, 3, 2001
    var_dump($today = date("Ymd"));                           // 20010310
    var_dump($today = date('h-i-s, j-m-y, it is w Day'));     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
    var_dump($today = date('\i\t \i\s \t\h\e jS \d\a\y.'));   // it is the 10th day.
    var_dump($today = date("D M j G:i:s T Y"));               // Sat Mar 10 17:16:18 MST 2001
    var_dump($today = date('H:m:s \m \i\s\ \m\o\n\t\h'));     // 17:03:18 m is month
    var_dump($today = date("H:i:s"));                         // 17:16:18
    var_dump($today = date("Y-m-d H:i:s"));                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)


@endphp

```

@endmarkdown

<h3 id="data-base"><a class="header-link" href="#data-base"></a>Database & Tables Structure</h3>

@markdown







Random important commands

    /** SHOW RECORDS **/

    mysql> SELECT * FROM orders where ponumber="11631534";
    mysql> SELECT * FROM orderitems where ponumber="11631534";

    /** INSERT RECORDS **/

    mysql> INSERT INTO branches (branchnumber, branchname, salesgroup, dc, office) VALUES ("302959", "Othaim Markets Co. 172", "3761", "24", "CENR");


    /** UPDATE RECORDS **/

    mysql> UPDATE items SET itemnumber="56060009" WHERE itemnumber="56060006";
    mysql> UPDATE items SET itemnumber="56060109" WHERE itemnumber="56060106";
    mysql> UPDATE items SET itemnumber="56060509" WHERE itemnumber="56060506";


    /** DELETE RECORDS **/

    mysql> DELETE FROM orders WHERE id=147;
    mysql> DELETE FROM orders WHERE ponumber=40896073;
    mysql> DELETE FROM orderitems WHERE ponumber=987888;
    mysql> DELETE FROM branches WHERE branchnumber=303603;
    mysql> DELETE FROM items WHERE itemnumber="56060506";

    /** DROP TABLE **/

    DROP TABLE orders;
    DROP TABLE orderitems;



        mysql> show tables;
        +-----------------+
        | Tables_in_sgdb0 |
        +-----------------+
        | users           |
        | branches        |
        | items           |
        | orderitems      |
        | orders          |
        +-----------------+
        5 rows in set (0.00 sec)

        Import has been successfully finished, **595** queries executed. (items-no-duplicates.csv)

        mysql> desc users;
        +-------------------+---------------------+------+-----+-------------+----------------+
        | Field             | Type                | Null | Key | Default     | Extra          |
        +-------------------+---------------------+------+-----+-------------+----------------+
        | id                | bigint(20) unsigned | NO   | PRI | NULL        | auto_increment |
        | name              | varchar(255)        | NO   |     | NULL        |                |
        | email             | varchar(255)        | NO   |     | NULL        |                |
        | email_verified_at | timestamp           | YES  |     | NULL        |                |
        | password          | varchar(255)        | NO   |     | NULL        |                |
        | idnumber          | varchar(255)        | NO   |     | NULL        |                |
        | phonenumber       | int(11)             | NO   |     | NULL        |                |
        | photo             | varchar(255)        | NO   |     | default.svg |                |
        | is_permission     | tinyint(4)          | NO   |     | 0           |                |
        | remember_token    | varchar(100)        | YES  |     | NULL        |                |
        | created_at        | timestamp           | YES  |     | NULL        |                |
        | updated_at        | timestamp           | YES  |     | NULL        |                |
        +-------------------+---------------------+------+-----+-------------+----------------+
        12 rows in set (0.00 sec)


        mysql> desc branches;
        +--------------+------------------+------+-----+-----------+----------------+
        | Field        | Type             | Null | Key | Default   | Extra          |
        +--------------+------------------+------+-----+-----------+----------------+
        | id           | int(10) unsigned | NO   | PRI | NULL      | auto_increment |
        | branchnumber | int(11)          | NO   |     | NULL      |                |
        | branchname   | varchar(255)     | NO   |     | NULL      |                |
        | salesgroup   | varchar(255)     | YES  |     | NULL      |                |
        | dc           | varchar(255)     | YES  |     | NULL      |                |
        | office       | varchar(255)     | YES  |     | NULL      |                |
        | logo         | varchar(255)     | NO   |     | sgimg.png |                |
        | created_at   | timestamp        | YES  |     | NULL      |                |
        | updated_at   | timestamp        | YES  |     | NULL      |                |
        +--------------+------------------+------+-----+-----------+----------------+
        9 rows in set (0.00 sec)


        mysql> desc items;
        +------------+------------------+------+-----+----------+----------------+
        | Field      | Type             | Null | Key | Default  | Extra          |
        +------------+------------------+------+-----+----------+----------------+
        | itemid     | int(10) unsigned | NO   | PRI | NULL     | auto_increment |
        | itemnumber | int(11)          | YES  | MUL | NULL     |                |
        | itemname   | varchar(255)     | YES  |     | NULL     |                |
        | itemprice  | decimal(8,2)     | YES  |     | NULL     |                |
        | itemsku    | int(11)          | YES  |     | NULL     |                |
        | plant      | int(11)          | YES  |     | NULL     |                |
        | instock    | int(11)          | YES  |     | NULL     |                |
        | link       | varchar(255)     | YES  |     | NULL     |                |
        | type       | varchar(255)     | YES  |     | NULL     |                |
        | group      | varchar(255)     | YES  |     | NULL     |                |
        | itempic    | varchar(255)     | NO   |     | item.png |                |
        | created_at | timestamp        | YES  |     | NULL     |                |
        | updated_at | timestamp        | YES  |     | NULL     |                |
        +------------+------------------+------+-----+----------+----------------+
        13 rows in set (0.00 sec)


        mysql> desc orders;
        +--------------+------------------+------+-----+-------------+----------------+
        | Field        | Type             | Null | Key | Default     | Extra          |
        +--------------+------------------+------+-----+-------------+----------------+
        | id           | int(10) unsigned | NO   | PRI | NULL        | auto_increment |
        | orderid      | varchar(255)     | YES  |     | NULL        |                |
        | ordernumber  | int(11)          | NO   |     | NULL        |                |
        | staffname    | varchar(255)     | NO   |     | NULL        |                |
        | staffid      | int(11)          | NO   |     | NULL        |                |
        | ponumber     | varchar(255)     | NO   | MUL | NULL        |                |
        | branchnumber | int(11)          | NO   |     | NULL        |                |
        | branchname   | varchar(255)     | NO   |     | NULL        |                |
        | urgent       | varchar(255)     | YES  |     | off         |                |
        | slug         | varchar(255)     | NO   |     | NULL        |                |
        | status       | varchar(255)     | YES  |     | JustCreated |                |
        | totalitems   | int(11)          | YES  |     | NULL        |                |
        | totalqty     | int(11)          | YES  |     | NULL        |                |
        | totalprice   | decimal(18,2)    | YES  |     | NULL        |                |
        | attachedpo   | varchar(255)     | YES  |     | NULL        |                |
        | created_at   | timestamp        | YES  |     | NULL        |                |
        | updated_at   | timestamp        | YES  |     | NULL        |                |
        +--------------+------------------+------+-----+-------------+----------------+
        17 rows in set (0.00 sec)


        mysql> desc orderitems;
        +---------------+------------------+------+-----+---------+----------------+
        | Field         | Type             | Null | Key | Default | Extra          |
        +---------------+------------------+------+-----+---------+----------------+
        | id            | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
        | orderid       | varchar(255)     | YES  |     | NULL    |                |
        | ordernumber   | int(11)          | YES  |     | NULL    |                |
        | staffname     | varchar(255)     | YES  |     | NULL    |                |
        | staffid       | int(11)          | YES  |     | NULL    |                |
        | ponumber      | varchar(255)     | YES  | MUL | NULL    |                |
        | branchname    | varchar(255)     | YES  |     | NULL    |                |
        | branchnumber  | int(11)          | YES  |     | NULL    |                |
        | orderitems    | varchar(255)     | YES  |     | NULL    |                |
        | itemnumber    | int(11)          | YES  |     | NULL    |                |
        | itemqty       | int(11)          | YES  |     | NULL    |                |
        | freeitem      | int(11)          | YES  |     | NULL    |                |
        | itemprice     | decimal(18,2)    | YES  |     | NULL    |                |
        | orderstatus   | varchar(255)     | YES  |     | Editing |                |
        | slug          | varchar(255)     | NO   |     | NULL    |                |
        | totalqty      | int(11)          | YES  |     | NULL    |                |
        | totalfree     | int(11)          | YES  |     | NULL    |                |
        | totalprice    | decimal(18,2)    | YES  |     | NULL    |                |
        | totalqtyprice | decimal(18,2)    | YES  |     | NULL    |                |
        | created_at    | timestamp        | YES  |     | NULL    |                |
        | updated_at    | timestamp        | YES  |     | NULL    |                |
        +---------------+------------------+------+-----+---------+----------------+
        21 rows in set (0.00 sec)



        mysql> select * from users;
        +----+--------------------------------+---------------------------------+-------------+---------------+------------+--------+
        | id | name                           | email                  idnumber | phonenumber | is_permission | totalgrand | dc     |
        +----+--------------------------------+---------------------------------+-------------+---------------+------------+--------+
        |  1 | Ahmed M. Sulaimani             | ads@sunbulahgroup.com  5303     |   562204816 |             2 |       0.00 | 000000 |
        |  2 | ΓÇ¬Anonymous 1001ΓÇ¼ΓÇÅ        | pin9.in9@gmail.com     5604     |   500100500 |             0 |       0.00 | 0      |
        |  3 | Ahmed Al-Onazi                 | aoz@sg.com             1231     |   590090033 |             0 |       0.00 | 000000 |
        |  4 | Mohammed Makki                 | mzm@sunbulahgroup.com  1255     |   560004564 |             2 |       0.00 | 000000 |
        |  6 | Hasan Rabah                    | hmr@sunbulahgroup.com  9090     |   544636421 |             2 |       0.00 | 000000 |
        |  7 | Ahmed Alonazi                  | aai@sunbulahgroup.com  5298     |           0 |             0 |       0.00 | 000000 |
        |  8 | Micheal Lanes                  | mel@sunbulahgroup.com  1275     |   593226762 |             0 |  126662.00 | 001021 |
        |  9 | Abdalla Naser                  | abr@sunbulahgroup.com  2409     |   552266786 |             0 |       0.00 | 001023 |
        | 10 | Mohammed Sayed                 | med@sunbulahgroup.com  5275     |   568624977 |             0 |  139754.00 | 001024 |
        | 11 | Fahed Dahasy                   | fds@sunbulahgroup.com  2745     |   501003637 |             0 |       0.00 | 001022 |
        | 12 | Hassan Fathi                   | hfk@sunbulahgroup.com  4401     |   592246630 |             0 |  237885.00 | 001042 |
        | 13 | Samsudin                       | scn@sunbulahgroup.com  1171     |   507815622 |             0 |   77756.00 | 001033 |
        | 14 | Ahmed Medhat                   | adk@sunbulahgroup.com  4688     |   563040670 |             0 |       0.00 | 001025 |
        | 15 | Hashem                         | hmn@sunbulahgroup.com  3761     |   500427475 |             0 |  122232.00 | 001043 |
        | 16 | Wail                           | wng@sunbulahgroup.com  2469     |             |               |            |        |            
        | 17 | Noufal                         | nkp@sunbulahgroup.com  2076     |  2147483647 |             0 |       0.00 | 001031 |
        | 18 | Ruben M.                       | ram@sunbulahgroup.com  1555     |  2147483647 |             0 |   21703.00 | 001032 |
        | 19 | FIRAS / KA SUPERVISOR  CSZ     | foz@sunbulahgroup.com  0000     |   543997687 |             1 |       0.00 | 001020 |
        | 20 | Hazem / KA SUPERVISOR  CSL     | hhz@sunbulahgroup.com  0000     |  2147483647 |             1 |       0.00 | 001030 |
        | 21 | A. Shawky                      | asd@sunbulahgroup.com  1869     |   545892494 |             0 |   51612.00 | 001041 |
        | 22 | M. Hassan                      | ahd@sunbulahgroup.com  4417     |   541064360 |             0 |       0.00 | 001044 |
        | 23 | Odeh Hersh  / WS MANAGER       | oah@sunbulahgroup.com  0000     |   503667460 |             1 |       0.00 | 002010 |
        | 24 | BASHAR AL DALAA  / KA MANAGER  | bad@sunbulahgroup.com  0000     |   542129330 |             1 |       0.00 | 001010 |
        | 25 | M. Awaden  / KA SUPERVISOR CTK | mwd@sunbulahgroup.com  0000     |   558604371 |             1 |       0.00 | 001040 |
        | 26 | Sultan Salman                  | ssl@sunbulahgroup.com  1621     |   556593688 |             0 |  251249.00 | 001113 |
        | 27 | Osama M.R.                     | osa@sunbulahgroup.com  1141     |  2147483647 |             0 |    7122.00 | 001034 |
        +----+--------------------------------+---------------------------------+-------------+---------------+------------+--------+
        26 rows in set (0.00 sec)





        mysql> ALTER TABLE orderitems ADD askedprice DECIMAL(18,2);
        Query OK, 3946 rows affected (0.45 sec)
        Records: 3946  Duplicates: 0  Warnings: 0

@endmarkdown

<h5 id="orders"><a class="header-link" href="#orders"></a>Orders By Status in DB</h5>

@markdown

    mysql> select * from orders;
    +----+------------------------------------------------------------------------+-------------+----------------+---------+----------+--------------+------------------------------------------+--------+----------------------+-------------+------------+----------+------------+-----------------+---------------------+---------------------+
    | id | orderid                                                                | ordernumber | staffname      | staffid | ponumber | branchnumber | branchname                               | urgent | slug                 | status      | totalitems | totalqty | totalprice | attachedpo      | created_at          | updated_at          |
    +----+------------------------------------------------------------------------+-------------+----------------+---------+----------+--------------+------------------------------------------+--------+----------------------+-------------+------------+----------+------------+-----------------+---------------------+---------------------+
    |  1 | http://ipool.remotewebaccess.com/root/orders/4688/00008490139-40868653 |     8490139 | Ahmed Medhat   |    4688 | 40868653 |       303222 | 303222-PANDA #10003                      | on     | 00008490139-40868653 | Completed   |          1 |        7 |    1351.00 | NULL            | 2019-04-20 11:11:48 | 2019-04-20 11:55:35 |
    |  2 | http://ipool.remotewebaccess.com/root/orders/1275/00008651694-11639583 |     8651694 | Micheal Lanes  |    1275 | 11639583 |       302863 | 302863-Danube Co. Limited - 125 Panorama | on     | 00008651694-11639583 | Completed   |          2 |        7 |    1790.00 | NULL            | 2019-04-20 11:20:35 | 2019-04-20 11:55:35 |
    |  3 | http://ipool.remotewebaccess.com/root/orders/1275/00008439484-11639587 |     8439484 | Micheal Lanes  |    1275 | 11639587 |       302863 | 302863-Danube Co. Limited - 125 Panorama | on     | 00008439484-11639587 | Completed   |          6 |       10 |     970.00 | NULL            | 2019-04-20 11:22:07 | 2019-04-20 11:55:35 |
    |  4 | http://ipool.remotewebaccess.com/root/orders/1275/00007278270-40884487 |     7278270 | Micheal Lanes  |    1275 | 40884487 |       303334 | 303334-PANDA #10026                      | on     | 00007278270-40884487 | Completed   |          1 |       10 |    1880.00 | NULL            | 2019-04-20 11:43:37 | 2019-04-20 11:55:35 |
    |  5 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |     7791471 | Micheal Lanes  |    1275 | 40862097 |       303334 | 303334-PANDA #10026                      | on     | 00007791471-40862097 | Completed   |         19 |       46 |    5004.00 | NULL            | 2019-04-20 11:44:12 | 2019-04-20 11:55:35 |
    |  6 | http://ipool.remotewebaccess.com/root/orders/1275/00007057622-40861666 |     7057622 | Micheal Lanes  |    1275 | 40861666 |       302887 | 302887-PANDA #10010                      | on     | 00007057622-40861666 | Completed   |          6 |       15 |    1414.00 | NULL            | 2019-04-20 11:48:11 | 2019-04-20 11:55:35 |
    |  7 | http://ipool.remotewebaccess.com/root/orders/5275/00008547854-40880186 |     8547854 | Mohammed Sayed |    5275 | 40880186 |       302833 | 302833-PANDA #10022                      | on     | 00008547854-40880186 | Completed   |          1 |        1 |     344.00 | NULL            | 2019-04-20 11:52:39 | 2019-04-20 11:55:35 |
    |  8 | http://ipool.remotewebaccess.com/root/orders/5275/00007048723-11656314 |     7048723 | Mohammed Sayed |    5275 | 11656314 |       303936 | 303936-Danube Co. Limited - 155 Ghadeer  | on     | 00007048723-11656314 | Completed   |          1 |        2 |     730.00 | NULL            | 2019-04-20 11:53:14 | 2019-04-20 11:55:35 |
    |  9 | http://ipool.remotewebaccess.com/root/orders/5275/00008464877-11643943 |     8464877 | Mohammed Sayed |    5275 | 11643943 |       302587 | 302587-Danube Co. Limited - 120 Hayat    | on     | 00008464877-11643943 | Completed   |          1 |        1 |     300.00 | NULL            | 2019-04-20 11:53:43 | 2019-04-20 11:55:35 |
    | 10 | http://ipool.remotewebaccess.com/root/orders/5275/00007129881-11656268 |     7129881 | Mohammed Sayed |    5275 | 11656268 |       303936 | 303936-Danube Co. Limited - 155 Ghadeer  | on     | 00007129881-11656268 | Completed   |          2 |        4 |    2312.00 | NULL            | 2019-04-20 11:54:12 | 2019-04-20 11:55:35 |
    | 11 | NULL                                                                   |     7469552 | Micheal Lanes  |    1275 | test0-   |       302816 | 302816-PANDA #100                        | on     | 00007469552-test0-   | JustCreated |       NULL |     NULL |       NULL | NULL            | 2019-04-20 18:47:49 | 2019-04-20 19:00:13 |
    | 12 | http://ipool.remotewebaccess.com/root/orders/1275/00007779577-test0    |     7779577 | Micheal Lanes  |    1275 | test0    |       303452 | 303452-Danube Co. Limited - 136 Tital    | NULL   | 00007779577-test0    | Completed   |          2 |      130 |   22910.00 | 16041900000.pdf | 2019-04-20 19:20:54 | 2019-04-20 22:23:50 |
    | 13 | NULL                                                                   |     7153814 | Micheal Lanes  |    1275 | test1    |       302816 | 302816-PANDA #100                        | on     | 00007153814-test1    | Editing     |       NULL |     NULL |       NULL | NULL            | 2019-04-20 21:55:37 | 2019-04-20 21:55:54 |
    | 14 | NULL                                                                   |     7463542 | Micheal Lanes  |    1275 | test2    |       302828 | 302828-PANDA #5                          | on     | 00007463542-test2    | Reviewing   |       NULL |     NULL |       NULL | NULL            | 2019-04-20 21:55:56 | 2019-04-20 21:56:11 |
    +----+------------------------------------------------------------------------+-------------+----------------+---------+----------+--------------+------------------------------------------+--------+----------------------+-------------+------------+----------+------------+-----------------+---------------------+---------------------+
    14 rows in set (0.00 sec)

@endmarkdown


<h5 id="order-items"><a class="header-link" href="#order-items"></a>Order Items By Status in DB</h5>

@markdown

    mysql> select * from orderitems;
    +----+------------------------------------------------------------------------+-------------+----------------+---------+------------------------+------------------------------------------+--------------+-----------------------------------------------------+------------+---------+----------+-----------+-------------+----------------------+----------+-----------+------------+---------------+---------------------+---------------------+
    | id | orderid                                                                | ordernumber | staffname      | staffid | ponumber               | branchname                               | branchnumber | orderitems                                          | itemnumber | itemqty | freeitem | itemprice | orderstatus | slug                 | totalqty | totalfree | totalprice | totalqtyprice | created_at          | updated_at          |
    +----+------------------------------------------------------------------------+-------------+----------------+---------+------------------------+------------------------------------------+--------------+-----------------------------------------------------+------------+---------+----------+-----------+-------------+----------------------+----------+-----------+------------+---------------+---------------------+---------------------+
    |  1 | http://ipool.remotewebaccess.com/root/orders/4688/00008490139-40868653 |     8490139 | Ahmed Medhat   |    4688 | 40868653               | 303222-PANDA #10003                      |       303222 | NULL                                                |       NULL |    NULL |     NULL |      NULL | Completed   | 00008490139-40868653 |     NULL |      NULL |       NULL |       1351.00 | 2019-04-20 11:12:03 | 2019-04-20 11:55:35 |
    |  2 | http://ipool.remotewebaccess.com/root/orders/4688/00008490139-40868653 |        NULL | Ahmed Medhat   |    4688 | 40868653               | 303222-PANDA #10003                      |       303222 | 56060509 - SUNBULAH SHREDDED MOZZARELLA (6X1 KG)    |   56060509 |       7 |        0 |    193.00 | Completed   | 00008490139-40868653 |     NULL |      NULL |       NULL |       1351.00 | 2019-04-20 11:12:14 | 2019-04-20 11:55:35 |
    |  3 | http://ipool.remotewebaccess.com/root/orders/1275/00008651694-11639583 |     8651694 | Micheal Lanes  |    1275 | 11639583               | 302863-Danube Co. Limited - 125 Panorama |       302863 | NULL                                                |       NULL |    NULL |     NULL |      NULL | Completed   | 00008651694-11639583 |     NULL |      NULL |       NULL |       1790.00 | 2019-04-20 11:21:11 | 2019-04-20 11:55:35 |
    |  4 | http://ipool.remotewebaccess.com/root/orders/1275/00008651694-11639583 |        NULL | Micheal Lanes  |    1275 | 11639583               | 302863-Danube Co. Limited - 125 Panorama |       302863 | 56040036 - AL SHIFA HONEY DROPS(12x7g)              |   56040036 |       5 |        0 |    320.00 | Completed   | 00008651694-11639583 |     NULL |      NULL |       NULL |       1790.00 | 2019-04-20 11:21:30 | 2019-04-20 11:55:35 |
    |  5 | http://ipool.remotewebaccess.com/root/orders/1275/00008651694-11639583 |        NULL | Micheal Lanes  |    1275 | 11639583               | 302863-Danube Co. Limited - 125 Panorama |       302863 | 42680960 - SARY HONEY (12X250G) - RV                |   42680960 |       2 |        0 |     95.00 | Completed   | 00008651694-11639583 |     NULL |      NULL |       NULL |       1790.00 | 2019-04-20 11:21:48 | 2019-04-20 11:55:35 |
    |  6 | http://ipool.remotewebaccess.com/root/orders/1275/00008439484-11639587 |     8439484 | Micheal Lanes  |    1275 | 11639587               | 302863-Danube Co. Limited - 125 Panorama |       302863 | NULL                                                |       NULL |    NULL |     NULL |      NULL | Completed   | 00008439484-11639587 |     NULL |      NULL |       NULL |        970.00 | 2019-04-20 11:22:27 | 2019-04-20 11:55:35 |
    |  7 | http://ipool.remotewebaccess.com/root/orders/1275/00008439484-11639587 |        NULL | Micheal Lanes  |    1275 | 11639587               | 302863-Danube Co. Limited - 125 Panorama |       302863 | 59009212 - SUNBULAH VEGETABLE SPRING ROLL 12X240G   |   59009212 |       1 |        0 |     95.00 | Completed   | 00008439484-11639587 |     NULL |      NULL |       NULL |        970.00 | 2019-04-20 11:22:46 | 2019-04-20 11:55:35 |
    |  8 | http://ipool.remotewebaccess.com/root/orders/1275/00008439484-11639587 |        NULL | Micheal Lanes  |    1275 | 11639587               | 302863-Danube Co. Limited - 125 Panorama |       302863 | 40012018 - PUFF PASTRY BLOCK (24X400 G)             |   40012018 |       2 |        0 |    116.00 | Completed   | 00008439484-11639587 |     NULL |      NULL |       NULL |        970.00 | 2019-04-20 11:23:12 | 2019-04-20 11:55:35 |
    |  9 | http://ipool.remotewebaccess.com/root/orders/1275/00008439484-11639587 |        NULL | Micheal Lanes  |    1275 | 11639587               | 302863-Danube Co. Limited - 125 Panorama |       302863 | 40014118 - BURAKE PASTRY SHEET (5X1200G)            |   40014118 |       2 |        0 |     64.00 | Completed   | 00008439484-11639587 |     NULL |      NULL |       NULL |        970.00 | 2019-04-20 11:23:20 | 2019-04-20 11:55:35 |
    | 10 | http://ipool.remotewebaccess.com/root/orders/1275/00008439484-11639587 |        NULL | Micheal Lanes  |    1275 | 11639587               | 302863-Danube Co. Limited - 125 Panorama |       302863 | 40041418 - SAMBUSAK DOUGH RATIONALIZED (18X500G)    |   40041418 |       2 |        0 |     89.00 | Completed   | 00008439484-11639587 |     NULL |      NULL |       NULL |        970.00 | 2019-04-20 11:23:30 | 2019-04-20 11:55:35 |
    | 11 | http://ipool.remotewebaccess.com/root/orders/1275/00008439484-11639587 |        NULL | Micheal Lanes  |    1275 | 11639587               | 302863-Danube Co. Limited - 125 Panorama |       302863 | 40066118 - 16'S VOL-AU-VENT (12X510G)               |   40066118 |       2 |        0 |    108.00 | Completed   | 00008439484-11639587 |     NULL |      NULL |       NULL |        970.00 | 2019-04-20 11:23:47 | 2019-04-20 11:55:35 |
    | 12 | http://ipool.remotewebaccess.com/root/orders/1275/00008439484-11639587 |        NULL | Micheal Lanes  |    1275 | 11639587               | 302863-Danube Co. Limited - 125 Panorama |       302863 | 40260512 - 8'S BREADED CHICKEN BURGER (12X448G)     |   40260512 |       1 |        0 |    121.00 | Completed   | 00008439484-11639587 |     NULL |      NULL |       NULL |        970.00 | 2019-04-20 11:24:03 | 2019-04-20 11:55:35 |
    | 13 | http://ipool.remotewebaccess.com/root/orders/1275/00007278270-40884487 |     7278270 | Micheal Lanes  |    1275 | 40884487               | 303334-PANDA #10026                      |       303334 | NULL                                                |       NULL |    NULL |     NULL |      NULL | Completed   | 00007278270-40884487 |     NULL |      NULL |       NULL |       1880.00 | 2019-04-20 11:43:52 | 2019-04-20 11:55:35 |
    | 14 | http://ipool.remotewebaccess.com/root/orders/1275/00007278270-40884487 |        NULL | Micheal Lanes  |    1275 | 40884487               | 303334-PANDA #10026                      |       303334 | 58011106 - SUNBULAH TURKISH LABNEH (4X2.75KG)       |   58011106 |      10 |        0 |    188.00 | Completed   | 00007278270-40884487 |     NULL |      NULL |       NULL |       1880.00 | 2019-04-20 11:44:04 | 2019-04-20 11:55:35 |
    | 15 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |     7791471 | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | NULL                                                |       NULL |    NULL |     NULL |      NULL | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:44:20 | 2019-04-20 11:55:35 |
    | 16 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40004112 - CHICKEN PREMIER PIZZA (12X470G)          |   40004112 |       1 |        0 |    185.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:44:37 | 2019-04-20 11:55:35 |
    | 17 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40004212 - MARGARITA PIZZA (12X400G)                |   40004212 |       1 |        0 |    174.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:44:45 | 2019-04-20 11:55:35 |
    | 18 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40004312 - PEPPERONI PIZZA (12X470G)                |   40004312 |       1 |        0 |    185.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:44:51 | 2019-04-20 11:55:35 |
    | 19 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40004512 - SPICY CHICKEN PIZZA (12X470G)            |   40004512 |       1 |        0 |    185.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:44:59 | 2019-04-20 11:55:35 |
    | 20 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40060312 - BEEF KUBEE (12X420G)                     |   40060312 |       1 |        0 |    160.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:45:07 | 2019-04-20 11:55:35 |
    | 21 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40060412 - CHICKEN KUBEE (12X420G)                  |   40060412 |       1 |        0 |    160.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:45:15 | 2019-04-20 11:55:35 |
    | 22 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40051312 - HALF MOON SAMBUSAK- CHEESE (12X220G)     |   40051312 |       1 |        0 |    144.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:45:22 | 2019-04-20 11:55:35 |
    | 23 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40011218 - BURR PUFF PASTRY SQUARES (18X400GM)      |   40011218 |       6 |        0 |    117.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:45:35 | 2019-04-20 11:55:35 |
    | 24 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40011318 - SUNBULAH MINI PUFF PSTRY SQUAR (18X320G) |   40011318 |       3 |        0 |     95.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:45:47 | 2019-04-20 11:55:35 |
    | 25 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40041418 - SAMBUSAK DOUGH RATIONALIZED (18X500G)    |   40041418 |       6 |        0 |     89.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:45:59 | 2019-04-20 11:55:35 |
    | 26 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40073018 - SUNB BURR SPRING ROLL PASTRY (24X160GM)  |   40073018 |       6 |        0 |     92.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:46:34 | 2019-04-20 11:55:35 |
    | 27 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40076118 - PLAIN PARATHA (12X450G)                  |   40076118 |       2 |        0 |     54.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:46:45 | 2019-04-20 11:55:35 |
    | 28 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40473118 - SUNBULAH CUT GREEN BEANS (12X450 G)      |   40473118 |       4 |        0 |     66.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:47:03 | 2019-04-20 11:55:35 |
    | 29 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 50477618 - SUNBULAH BROCCOLI (20X400G)              |   50477618 |       1 |        0 |    143.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:47:10 | 2019-04-20 11:55:35 |
    | 30 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40477118 - SUNBULAH CHOPPED RED ONIONS (12X450G)    |   40477118 |       2 |        0 |     48.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:47:20 | 2019-04-20 11:55:35 |
    | 31 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40212012 - 15'S LAMB MEAT BALL (12X375G)            |   40212012 |       2 |        0 |    119.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:47:29 | 2019-04-20 11:55:35 |
    | 32 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40230412 - 20'S REG BEEF BRGR IN PLSTC BAG (8X1 KG) |   40230412 |       2 |        0 |    179.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:47:41 | 2019-04-20 11:55:35 |
    | 33 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 40250712 - 10'S GIANT BEEF BURGER (8X1KG)           |   40250712 |       1 |        0 |    187.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:47:48 | 2019-04-20 11:55:35 |
    | 34 | http://ipool.remotewebaccess.com/root/orders/1275/00007791471-40862097 |        NULL | Micheal Lanes  |    1275 | 40862097               | 303334-PANDA #10026                      |       303334 | 50487012 - SUNBULAH STRAWBERRY (10X800G)            |   50487012 |       4 |        0 |     86.00 | Completed   | 00007791471-40862097 |     NULL |      NULL |       NULL |       5004.00 | 2019-04-20 11:47:58 | 2019-04-20 11:55:35 |
    | 35 | http://ipool.remotewebaccess.com/root/orders/1275/00007057622-40861666 |     7057622 | Micheal Lanes  |    1275 | 40861666               | 302887-PANDA #10010                      |       302887 | NULL                                                |       NULL |    NULL |     NULL |      NULL | Completed   | 00007057622-40861666 |     NULL |      NULL |       NULL |       1414.00 | 2019-04-20 11:48:21 | 2019-04-20 11:55:35 |
    | 36 | http://ipool.remotewebaccess.com/root/orders/1275/00007057622-40861666 |        NULL | Micheal Lanes  |    1275 | 40861666               | 302887-PANDA #10010                      |       302887 | 40004312 - PEPPERONI PIZZA (12X470G)                |   40004312 |       1 |        0 |    185.00 | Completed   | 00007057622-40861666 |     NULL |      NULL |       NULL |       1414.00 | 2019-04-20 11:48:37 | 2019-04-20 11:55:35 |
    | 37 | http://ipool.remotewebaccess.com/root/orders/1275/00007057622-40861666 |        NULL | Micheal Lanes  |    1275 | 40861666               | 302887-PANDA #10010                      |       302887 | 40004512 - SPICY CHICKEN PIZZA (12X470G)            |   40004512 |       1 |        0 |    185.00 | Completed   | 00007057622-40861666 |     NULL |      NULL |       NULL |       1414.00 | 2019-04-20 11:48:46 | 2019-04-20 11:55:35 |
    | 38 | http://ipool.remotewebaccess.com/root/orders/1275/00007057622-40861666 |        NULL | Micheal Lanes  |    1275 | 40861666               | 302887-PANDA #10010                      |       302887 | 40011218 - BURR PUFF PASTRY SQUARES (18X400GM)      |   40011218 |       2 |        0 |    117.00 | Completed   | 00007057622-40861666 |     NULL |      NULL |       NULL |       1414.00 | 2019-04-20 11:48:56 | 2019-04-20 11:55:35 |
    | 39 | http://ipool.remotewebaccess.com/root/orders/1275/00007057622-40861666 |        NULL | Micheal Lanes  |    1275 | 40861666               | 302887-PANDA #10010                      |       302887 | 40073018 - SUNB BURR SPRING ROLL PASTRY (24X160GM)  |   40073018 |       4 |        0 |     92.00 | Completed   | 00007057622-40861666 |     NULL |      NULL |       NULL |       1414.00 | 2019-04-20 11:49:04 | 2019-04-20 11:55:35 |
    | 40 | http://ipool.remotewebaccess.com/root/orders/1275/00007057622-40861666 |        NULL | Micheal Lanes  |    1275 | 40861666               | 302887-PANDA #10010                      |       302887 | 40076118 - PLAIN PARATHA (12X450G)                  |   40076118 |       5 |        0 |     54.00 | Completed   | 00007057622-40861666 |     NULL |      NULL |       NULL |       1414.00 | 2019-04-20 11:49:12 | 2019-04-20 11:55:35 |
    | 41 | http://ipool.remotewebaccess.com/root/orders/1275/00007057622-40861666 |        NULL | Micheal Lanes  |    1275 | 40861666               | 302887-PANDA #10010                      |       302887 | 50487012 - SUNBULAH STRAWBERRY (10X800G)            |   50487012 |       2 |        0 |     86.00 | Completed   | 00007057622-40861666 |     NULL |      NULL |       NULL |       1414.00 | 2019-04-20 11:49:26 | 2019-04-20 11:55:35 |
    | 42 | http://ipool.remotewebaccess.com/root/orders/5275/00008547854-40880186 |     8547854 | Mohammed Sayed |    5275 | 40880186               | 302833-PANDA #10022                      |       302833 | NULL                                                |       NULL |    NULL |     NULL |      NULL | Completed   | 00008547854-40880186 |     NULL |      NULL |       NULL |        344.00 | 2019-04-20 11:52:50 | 2019-04-20 11:55:35 |
    | 43 | http://ipool.remotewebaccess.com/root/orders/5275/00008547854-40880186 |        NULL | Mohammed Sayed |    5275 | 40880186               | 302833-PANDA #10022                      |       302833 | 42162060 - AL-SHIFA ACACIA (12X250 G)-NEW           |   42162060 |       1 |        0 |    344.00 | Completed   | 00008547854-40880186 |     NULL |      NULL |       NULL |        344.00 | 2019-04-20 11:53:06 | 2019-04-20 11:55:35 |
    | 44 | http://ipool.remotewebaccess.com/root/orders/5275/00007048723-11656314 |     7048723 | Mohammed Sayed |    5275 | 11656314               | 303936-Danube Co. Limited - 155 Ghadeer  |       303936 | NULL                                                |       NULL |    NULL |     NULL |      NULL | Completed   | 00007048723-11656314 |     NULL |      NULL |       NULL |        730.00 | 2019-04-20 11:53:23 | 2019-04-20 11:55:35 |
    | 45 | http://ipool.remotewebaccess.com/root/orders/5275/00007048723-11656314 |        NULL | Mohammed Sayed |    5275 | 11656314               | 303936-Danube Co. Limited - 155 Ghadeer  |       303936 | 42163160 - AL-SHIFA BLACK FOREST HONEY 4(36X30G)    |   42163160 |       2 |        0 |    365.00 | Completed   | 00007048723-11656314 |     NULL |      NULL |       NULL |        730.00 | 2019-04-20 11:53:36 | 2019-04-20 11:55:35 |
    | 46 | http://ipool.remotewebaccess.com/root/orders/5275/00008464877-11643943 |     8464877 | Mohammed Sayed |    5275 | 11643943               | 302587-Danube Co. Limited - 120 Hayat    |       302587 | NULL                                                |       NULL |    NULL |     NULL |      NULL | Completed   | 00008464877-11643943 |     NULL |      NULL |       NULL |        300.00 | 2019-04-20 11:53:54 | 2019-04-20 11:55:35 |
    | 47 | http://ipool.remotewebaccess.com/root/orders/5275/00008464877-11643943 |        NULL | Mohammed Sayed |    5275 | 11643943               | 302587-Danube Co. Limited - 120 Hayat    |       302587 | 58011406 - SUNBULAH TURKISH LABNEH (18X700G)        |   58011406 |       1 |        0 |    300.00 | Completed   | 00008464877-11643943 |     NULL |      NULL |       NULL |        300.00 | 2019-04-20 11:54:05 | 2019-04-20 11:55:35 |
    | 48 | http://ipool.remotewebaccess.com/root/orders/5275/00007129881-11656268 |     7129881 | Mohammed Sayed |    5275 | 11656268               | 303936-Danube Co. Limited - 155 Ghadeer  |       303936 | NULL                                                |       NULL |    NULL |     NULL |      NULL | Completed   | 00007129881-11656268 |     NULL |      NULL |       NULL |       2312.00 | 2019-04-20 11:54:24 | 2019-04-20 11:55:35 |
    | 49 | http://ipool.remotewebaccess.com/root/orders/5275/00007129881-11656268 |        NULL | Mohammed Sayed |    5275 | 11656268               | 303936-Danube Co. Limited - 155 Ghadeer  |       303936 | 42151060 - AL-SHIFA SQUEEZE (12X250 G) -NEW         |   42151060 |       2 |        0 |    208.00 | Completed   | 00007129881-11656268 |     NULL |      NULL |       NULL |       2312.00 | 2019-04-20 11:54:36 | 2019-04-20 11:55:35 |
    | 50 | http://ipool.remotewebaccess.com/root/orders/5275/00007129881-11656268 |        NULL | Mohammed Sayed |    5275 | 11656268               | 303936-Danube Co. Limited - 155 Ghadeer  |       303936 | 42168260 - AL SHIFA SIDR HONEY (6x1KG) OCTO JARS    |   42168260 |       2 |        0 |    948.00 | Completed   | 00007129881-11656268 |     NULL |      NULL |       NULL |       2312.00 | 2019-04-20 11:54:45 | 2019-04-20 11:55:35 |
    | 51 | NULL                                                                   |     7469552 | Micheal Lanes  |    1275 | test0-                 | NULL                                     |       302816 | NULL                                                |       NULL |    NULL |     NULL |      NULL | JustCreated | 00007469552-test0-   |     NULL |      NULL |       NULL |          NULL | 2019-04-20 19:00:14 | 2019-04-20 19:00:14 |
    | 52 | http://ipool.remotewebaccess.com/root/orders/1275/00007779577-test0    |     7779577 | Micheal Lanes  |    1275 | test0                  | 303452-Danube Co. Limited - 136 Tital    |       303452 | NULL                                                |       NULL |    NULL |     NULL |      NULL | Completed   | 00007779577-test0    |     NULL |      NULL |       NULL |      22910.00 | 2019-04-20 19:21:15 | 2019-04-20 22:23:50 |
    | 53 | http://ipool.remotewebaccess.com/root/orders/1275/00007779577-test0    |        NULL | Micheal Lanes  |    1275 | test0                  | 303452-Danube Co. Limited - 136 Tital    |       303452 | 40011112 - 10'S PUFF PASTRY SQUARE (18X400G)        |   40011112 |      10 |        0 |    107.00 | Completed   | 00007779577-test0    |     NULL |      NULL |       NULL |      22910.00 | 2019-04-20 19:58:38 | 2019-04-20 22:23:50 |
    | 54 | http://ipool.remotewebaccess.com/root/orders/1275/00007779577-test0    |        NULL | Micheal Lanes  |    1275 | test0                  | 303452-Danube Co. Limited - 136 Tital    |       303452 | 40251012 - 10'S BEEF KEBAB (12X600G)                |   40251012 |     120 |       12 |    182.00 | Completed   | 00007779577-test0    |     NULL |      NULL |       NULL |      22910.00 | 2019-04-20 20:36:30 | 2019-04-20 22:23:50 |
    | 55 | NULL                                                                   |     7153814 | Micheal Lanes  |    1275 | test1                  | NULL                                     |       302816 | NULL                                                |       NULL |    NULL |     NULL |      NULL | JustCreated | 00007153814-test1    |     NULL |      NULL |       NULL |          NULL | 2019-04-20 21:55:48 | 2019-04-20 21:55:48 |
    | 56 | NULL                                                                   |        NULL | Micheal Lanes  |    1275 | [{"ponumber":"test1"}] | [{"branchname":"302816-PANDA #100"}]     |            0 | 40230512 - 20'S HOT BEEF BRGR IN PLSTC BAG (8X1 KG) |   40230512 |       3 |        0 |    179.00 | Editing     | 00007153814-test1    |     NULL |      NULL |       NULL |        537.00 | 2019-04-20 21:55:54 | 2019-04-20 21:55:54 |
    | 57 | NULL                                                                   |     7463542 | Micheal Lanes  |    1275 | test2                  | NULL                                     |       302828 | NULL                                                |       NULL |    NULL |     NULL |      NULL | JustCreated | 00007463542-test2    |     NULL |      NULL |       NULL |          NULL | 2019-04-20 21:56:04 | 2019-04-20 21:56:04 |
    | 58 | NULL                                                                   |        NULL | Micheal Lanes  |    1275 | [{"ponumber":"test2"}] | [{"branchname":"302828-PANDA #5"}]       |            0 | 40260112 - 24'S BREADED CHICKEN BURGER (12X1344G)   |   40260112 |      32 |        0 |    328.00 | Editing     | 00007463542-test2    |     NULL |      NULL |       NULL |      10496.00 | 2019-04-20 21:56:10 | 2019-04-20 21:56:10 |
    +----+------------------------------------------------------------------------+-------------+----------------+---------+------------------------+------------------------------------------+--------------+-----------------------------------------------------+------------+---------+----------+-----------+-------------+----------------------+----------+-----------+------------+---------------+---------------------+---------------------+
    58 rows in set (0.00 sec)

##### One item order e.g.

                +------------+--------+---------------------------------------------------+----------+------+-------+-----------+
    -> Header   | 40868653   | 303222 | NULL                                              |     NULL | NULL |  NULL |      NULL |
    -> Items    | 40868653   | 303222 | 56060509 - SUNBULAH SHREDDED MOZZARELLA (6X1 KG)  | 56060509 |    7 |     0 |    193.00 |
                +------------+--------+---------------------------------------------------+----------+------+-------+-----------+

```

    $today = date("Y-m-d", strtotime( '0 days' ) );	
    $todaysorderitems = OrderItems::whereNotNull('orderitems')->whereDate('created_at', $today )->where('orderstatus', '=', 'Completed' )->where('staffid', '=', $idnumber)->get();
    
```

@endmarkdown



<h5 id="report-export"><a class="header-link" href="#report-export"></a>Reports export</h5>




@markdown

###### CSV exported format vs. HTML copy & paste format:

![{{ asset('/images/assests/free.gif') }}]({{ asset('/images/assests/free.gif') }})

@endmarkdown


<h3 id="prices-list"><a class="header-link" href="#prices-list"></a>Prices List</h3>

<article class="markdown-body">







@markdown



        mysql> select * from itemsv2;
        +--------+------------+-------------------------------------------+--------------+--------------+---------+-------+---------+------+------+-----------+---------+------------+------------+
        | itemid | itemnumber | itemname                                  | itemoldprice | itemnewprice | itemsku | plant | instock | link | type | itemgroup | itempic | created_at | updated_at |
        +--------+------------+-------------------------------------------+--------------+--------------+---------+-------+---------+------+------+-----------+---------+------------+------------+
        |      1 |   50487612 | WALIMAH MANGO PULP (16X1KG)               |       135.00 |       135.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |      2 |   56380112 | ALAMBRA BASIL HALLOUMI (50X200G)          |       495.00 |       495.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |      3 |   32031960 | PROM ALSHIFA NAT 250G (12+3JAR FREE)-NEW  |        97.50 |        97.50 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |      4 |   42003760 | AL-SHIFA BLACK FOREST (6X1KG) SQUARE JAR  |       638.00 |       638.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |      5 |   50490318 | WALIMAH MIXED VEGETABLES(20X400G)RETAIL   |        80.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |      6 |   50490418 | WALIMA CUT GREEN BEANS (20X400G) RETAIL   |        80.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |      7 |   30041218 | PROMO KONAFAH DOUGH 12X( 500G+25% FREE)   |        77.00 |        77.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |      8 |   30044318 | 500G GULASH FILLO + 25% EXTRA FILL        |        84.00 |        84.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |      9 |   30060218 | P. P. SQUARES ( BUY 3 + GET 1 FREE)       |        97.00 |        97.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     10 |   30071218 | PROMO SPRING ROLL 160G(BUY 4 GET 1 FREE)  |        77.00 |        77.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     11 |   32031960 | PROM ALSHIFA NAT 250G (12+3JAR FREE)-NEW  |       190.00 |       190.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     12 |   32033060 | AL SHIFA NAT HONEY 125G(24+4FREE)-NEW     |       212.00 |       212.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     13 |   32041960 | AL SHIFA HONEY DUTY FREE PACK(6X4X250G)   |       840.00 |       840.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     14 |   32042060 | AL SHIFA HONEY DUTY FREE PACK (18X4X30G)  |       324.00 |       324.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     15 |   32042260 | AL SHIFA NATURAL 12(500G+ 250G SQZ FREE)  |       337.00 |       337.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     16 |   32042360 | AL SHIFA NATURAL 6(1 KG + 400G SQZ FREE)  |       281.00 |       281.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     17 |   32107060 | AL SHIFA PROMO 12(750G+125G ACA FREE)     |       428.00 |       428.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     18 |   32108060 | AL SHIFA 12 PRO(NAT 750G +BLACK F 125)    |       400.00 |       400.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     19 |   40003312 | SUPER SUPREME PIZZA (12X470G)             |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     20 |   40003412 | PEPPERONI SPECIAL PIZZA (12X470G)         |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     21 |   40003512 | MARGARITA PIZZA (12X400G)                 |       174.00 |       174.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     22 |   40003612 | CHICKEN PREMIER PIZZA (12X470G)           |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     23 |   40003712 | VEGGIE DELIGHT PIZZA (12X470G)            |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     24 |   40003812 | SPICY CHICKEN PIZZA (12X470G)             |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     25 |   40004012 | SUPER SUPREME PIZZA (12X470G)             |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     26 |   40004112 | CHICKEN PREMIER PIZZA (12X470G)           |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     27 |   40004212 | MARGARITA PIZZA (12X400G)                 |       174.00 |       174.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     28 |   40004312 | PEPPERONI PIZZA (12X470G)                 |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     29 |   40004412 | VEGGIE DELIGHT PIZZA (12X470G)            |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     30 |   40004512 | SPICY CHICKEN PIZZA (12X470G)             |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     31 |   40004612 | VEGGIE DELIGHT PIZZA (12X470G)            |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     32 |   40004812 | SMALL PIZZA CRUST (12X8X27.5G)            |        87.00 |        87.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     33 |   40004912 | MEDIUM PIZZA CRUST (12X3X165G)            |        99.00 |        99.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     34 |   40009412 | SUNBULAH SMALL PIZZA CRUST (12X8X27.5G)   |        87.00 |        87.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     35 |   40009418 | SUNBULAH SMALL PIZZA CRUST (12X8X27.5G)   |        87.00 |        87.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     36 |   40009712 | MEDIUM PIZZA CRUSTS (12X3X165G)           |        99.00 |        99.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     37 |   40009718 | MEDIUM PIZZA CRUST (12X3X165G)            |        99.00 |        99.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     38 |   40011012 | 20'S PUFF PASTRY SQUARE (9X800G)          |        89.00 |        89.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     39 |   40011018 | 20'S PUFF PASTRY SQUARE (9X800G)          |        89.00 |        89.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     40 |   40011112 | 10'S PUFF PASTRY SQUARE (18X400G)         |       107.00 |       107.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     41 |   40011118 | 10'S PUFF PASTRY SQUARE (18X400G)         |       107.00 |        95.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     42 |   40011212 | BURR PUFF PASTRY SQUARES (18X400GM)       |       117.00 |       117.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     43 |   40011218 | BURR PUFF PASTRY SQUARES (18X400GM)       |       117.00 |        95.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     44 |   40011312 | SUNBULAH MINI PUFF PSTRY SQUAR (18X320G)  |        95.00 |        95.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     45 |   40011318 | SUNBULAH MINI PUFF PSTRY SQUAR (18X320G)  |        95.00 |        95.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     46 |   40011418 | 10'S BUTTER PUFF PASTRY SQUARE (18X400G)  |       128.00 |       128.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     47 |   40011512 | 15'S LOW FAT PUFF PASTRY SQUAR (18X400G)  |       117.00 |       117.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     48 |   40011518 | 15'S LOW FAT PUFF PASTRY SQUAR (18X400G)  |       117.00 |        95.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     49 |   40011718 | 10'S WALIMA PUFF PASTRY (18X400G)         |        84.00 |        65.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     50 |   40012012 | PUFF PASTRY BLOCK (24X400 G)              |       116.00 |       116.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     51 |   40012018 | PUFF PASTRY BLOCK (24X400 G)              |       116.00 |       116.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     52 |   40012618 | PUFF PASTRY BLOCK (4X3.5 KG)              |        81.00 |        81.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     53 |   40013418 | CHOCOLATE PUFF PASTRY (18X400G)           |        93.00 |        95.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     54 |   40013518 | DESERT PUFF PASTRY (18X400G)              |        93.00 |        95.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     55 |   40013618 | PUFF PASTRY SHEET (4X5X350 G)             |        51.00 |        51.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     56 |   40013718 | CHOCOLATE PUFF PASTRY (18X200G)           |        93.00 |        93.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     57 |   40014118 | BURAKE PASTRY SHEET (5X1200G)             |        64.00 |        64.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     58 |   40016506 | LAMINATED DOUGH BUTTER SHEET (4X6X500G)   |       189.00 |       189.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     59 |   40016812 | UMM ALI CONVENIENT (12X150G)              |        99.00 |        99.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     60 |   40020012 | VANILLA POUND CAKE (12X300 G)             |        92.00 |        92.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     61 |   40021012 | CHOCOLATE POUND CAKE (12X300 G)           |        92.00 |        92.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     62 |   40022012 | SULTANA POUND CAKE (12X300G)              |        92.00 |        92.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     63 |   40023012 | ORANGE POUND CAKE (12X300 G)              |        92.00 |        92.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     64 |   40027012 | DATES POUND CAKE (12X300 G)               |        92.00 |        92.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     65 |   40028012 | BANANA POUND CAKE (12X300 G)              |        92.00 |        92.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     66 |   40040112 | FRYING BEEF SAMBUSAK 12(8X30G)            |       126.00 |       126.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     67 |   40041112 | BURR SANBUSAK DOUGH (18X500GM)            |        85.00 |        85.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     68 |   40041118 | BURR SANBUSAK DOUGH (18X500GM)            |        85.00 |        89.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     69 |   40041212 | FRYING CHICKEN SAMBUSAK (12X240G)         |       120.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     70 |   40041312 | FRYING VEGETABLE SAMBUSAK (12X240G)       |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     71 |   40041412 | SAMBUSAK DOUGH RATIONALIZED (18X500G)     |        89.00 |        89.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     72 |   40041418 | SAMBUSAK DOUGH RATIONALIZED (18X500G)     |        89.00 |        89.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     73 |   40041512 | FRYING BEEF SAMBUSAK (12X240G)            |       126.00 |       126.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     74 |   40041612 | FRYING CHEESE SAMBUSAK (12X240G)          |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     75 |   40042012 | KONAFAH DOUGH (12X500 G)                  |        77.00 |        77.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     76 |   40042018 | KONAFAH DOUGH (12X500 G)                  |        77.00 |        77.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     77 |   40042312 | FRYING CHICKEN SAMBUSAK - CAT (4X25X20G)  |        90.00 |        90.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     78 |   40042412 | FRYING CHEESE SAMBUSAK - CAT (4X25X20G)   |        75.00 |        75.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     79 |   40042512 | FRYING BEEF SAMBUSAK - CAT (4X25X20G)     |        90.00 |        90.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     80 |   40042612 | FRYING VEG. SANBUSAK ? CAT (4X25X20G)     |        72.00 |        72.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     81 |   40043012 | BAKLAWA FILLO (12X500 G)                  |        82.00 |        82.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     82 |   40043018 | BAKLAWA FILLO (12X500 G)                  |        82.00 |        77.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     83 |   40044012 | GULASH PASTRY LEAVES (12X500 G)           |        84.00 |        84.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     84 |   40044018 | GULASH PASTRY LEAVES (12X500 G)           |        84.00 |        77.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     85 |   40050012 | PUFF PASTREY BEEF PIE (12X360) GRAMS      |       121.00 |       121.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     86 |   40051012 | PUFF PASTRY CHEESE PIE (12X360) GRAMS     |       114.00 |       114.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     87 |   40051212 | HALF MOON SAMBUSAK- BEEF (12X220G)        |       144.00 |       144.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     88 |   40051312 | HALF MOON SAMBUSAK- CHEESE (12X220G)      |       144.00 |       144.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     89 |   40055512 | PLAIN POTATO CROQUETTES (C) 4X2.5KG       |        85.00 |        85.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     90 |   40056012 | MUSHROOM POTATO CROQUETTE (12X370G)       |       113.00 |       113.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     91 |   40057012 | CHEESE POTATO CROQUETTE (12X370G)         |       112.00 |       112.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     92 |   40060112 | 16'S CHICKEN KUBEE (12X480G)              |       182.00 |       182.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     93 |   40060212 | 16'S BEEF KUBEE (12X480G)                 |       182.00 |       182.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     94 |   40060312 | BEEF KUBEE (12X420G)                      |       160.00 |       160.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     95 |   40060412 | CHICKEN KUBEE (12X420G)                   |       160.00 |       160.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     96 |   40060712 | KUBEE (CATERING PACK) (4X2.5KG)           |       246.00 |       246.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     97 |   40066012 | 20'S MINI VOL-AU-VENT (12X170G)           |        79.00 |        79.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     98 |   40066018 | 20'S MINI VOL-AU-VENT (12X170G)           |        79.00 |        79.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |     99 |   40066112 | 16'S VOL-AU-VENT (12X510G)                |       108.00 |       108.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    100 |   40066118 | 16'S VOL-AU-VENT (12X510G)                |       108.00 |       108.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    101 |   40070012 | SPRING ROLL PASTRY (24X160 G)             |        77.00 |        77.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    102 |   40070018 | SPRING ROLL PASTRY (24X160 G)             |        77.00 |        77.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    103 |   40070112 | SPRING ROLL PASTRY (24X345 G)             |       129.00 |       129.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    104 |   40070118 | SPRING ROLL PASTRY (24X345 G)             |       129.00 |       129.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    105 |   40071012 | EGG SPRING ROLL PASTRY (24X160G)          |        84.00 |        84.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    106 |   40071018 | EGG SPRING ROLL PASTRY (24X160G)          |        84.00 |        77.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    107 |   40071112 | EGG SPRING ROLL PASTRY (24X345G)          |       143.00 |       143.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    108 |   40071118 | EGG SPRING ROLL PASTRY (24X345G)          |       143.00 |       129.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    109 |   40073012 | BURR SPRING ROLL PASTRY (24X160GM)        |        92.00 |        92.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    110 |   40073018 | SUNB BURR SPRING ROLL PASTRY (24X160GM)   |        92.00 |        77.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    111 |   40073312 | 8 VEG. SPRING ROLLS (12X8X30G)-NEW TRAY   |        95.00 |        95.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    112 |   40073412 | 8 CHKN SPRING ROLLS (12X8X30G)-NEW TRAY   |       102.00 |       102.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    113 |   40076112 | PLAIN PARATHA (12X450G)                   |        54.00 |        54.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    114 |   40076118 | PLAIN PARATHA (12X450G)                   |        54.00 |        54.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    115 |   40076418 | GARLIC PARATHA (12X540G)                  |        64.00 |        64.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    116 |   40080009 | BAGUETTE FRENCH 57 CM? (30X300G)          |        69.00 |        69.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    117 |   40080109 | BAGUETTE MULTICEREAL 57 CM?? (30X310G)    |       119.00 |       119.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    118 |   40080209 | DEMI BAGUETTE FRENCH 25CM (60X150G)       |        72.00 |        72.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    119 |   40080309 | DEMI BAGUETTE MULTICEREAL 25CM (60X150G)  |       120.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    120 |   40080409 | VIENNA BREAD 27 CM (45X150G)              |        76.00 |        76.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    121 |   40080509 | VIENNA BREAD 18 CM (50X 90G)              |        50.00 |        50.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    122 |   40081409 | PANINI BREAD 20 CM? (45X120G)             |        72.00 |        72.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    123 |   40081509 | LARGE CIABATTA PLAIN 18 CM (45X150G)      |        80.00 |        80.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    124 |   40081609 | LARGE CIABATTA OLIVES 18CM (45X150G)      |       108.00 |       108.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    125 |   40081709 | LARGE CIABATTA RYE 18 CM (45X150G)        |       100.00 |       100.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    126 |   40081809 | LARGE CIABATTA HERBS (OREGANO) (45X150G)  |       100.00 |       100.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    127 |   40082009 | BAGUETTE TRADITIONAL 57CM? (18X270G)      |        54.00 |        54.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    128 |   40082109 | RUSTIC LOAF CAMPAGNE 25 CM? (20X250G)     |        70.00 |        70.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    129 |   40082209 | RUSTIC LOAF MULTICEREAL 25 CM (20X250G)   |        70.00 |        70.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    130 |   40082509 | CIABATTA SACC PLAIN-S (80 PCS)            |        99.20 |        99.20 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    131 |   40082606 | CIABATTA PLAIN (16 X 4 X 150G)            |       128.00 |       128.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    132 |   40082706 | CIABATTA OLIVE ROLLS (16 X 4 X 150G)      |       141.00 |       141.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    133 |   40082806 | CIABATTA HERBS (16X4X150G)                |       141.00 |       141.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    134 |   40082906 | PANINI BREAD (10X4X120G)                  |        80.00 |        80.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    135 |   40083006 | DEMI BAGUETTE FRENCH (24X2X150G)          |       106.00 |       106.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    136 |   40083009 | FRENCH OVAL ROLLS? (90X60G)               |        36.00 |        36.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    137 |   40083109 | MULTI CEREALS OVAL ROLLS? (90X60G)        |        40.00 |        40.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    138 |   40083209 | KAISER ROLLS WHITE? (100X60G)             |        48.00 |        48.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    139 |   40083309 | KAISER ROLLS MULTI-CEREALS (100X60G)      |        54.00 |        54.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    140 |   40083409 | FRENCH OVAL ROLLS?? (120X40G)             |        44.00 |        44.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    141 |   40083509 | MULTI CEREALS OVAL ROLLS? (120X40G)       |        48.00 |        48.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    142 |   40083609 | KAISER ROLLS WHITE SMALL? (140X40G)       |        56.00 |        56.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    143 |   40083709 | KAISER ROLLS MULTI-CEREALS SMAL(140X40G)  |        56.00 |        56.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    144 |   40083809 | CIABATTA ROLLS? (100X40G)                 |        45.00 |        45.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    145 |   40083909 | CIABATTA OLIVES SQUARES? (100X40G)        |        55.00 |        55.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    146 |   40084009 | CIABATTA ROLLS HERBS (OREGANO)(100X40G)   |        55.00 |        55.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    147 |   40084109 | CIABATTA RYE ROLLS (100X40G)              |        60.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    148 |   40084609 | LONG CIABATTA SANDWICH HERBS (55X120G)    |        93.00 |        93.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    149 |   40084709 | LONG CIABATTA SANDWICH OLIVES (55X120G)   |        93.00 |        93.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    150 |   40084809 | LONG CIABATTA SANDWICH PLAIN (55X120G)    |        85.00 |        85.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    151 |   40084909 | LONG CIABATTA SANDWICH RYE(55X120G)       |        88.00 |        88.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    152 |   40085009 | RUSTIC MULTI CEREALS ROLLS? (140X40G)     |        70.00 |        70.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    153 |   40085109 | RUSTIC MINI BAGUETTE? (140X 40G)          |        70.00 |        70.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    154 |   40085309 | RUSTIC WALNUT RAISIN LOAF 25CM (20X250G)  |        90.00 |        90.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    155 |   40085609 | KAISER ROLLS SESAME SMALL? (120X40G)      |        90.00 |        90.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    156 |   40086309 | SOFT BREAD ROLLS - WHITE (120X40G)        |        48.00 |        48.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    157 |   40086409 | SOFT BREAD ROLLS - BROWN (120X40G)        |        54.00 |        54.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    158 |   40086709 | SACC SANDWICH 20N OLIVE (90X80GM)         |       176.40 |       176.40 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    159 |   40086809 | SACC SANDWICH 20N PLAIN (90X80GM)         |       138.60 |       138.60 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    160 |   40086909 | SACC SANDWICH 20N PLAIN (120X60G)         |       148.80 |       148.80 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    161 |   40087909 | BY PRODUCT SACC SANDWICH PLAIN (120X60G)  |        25.00 |        25.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    162 |   40090006 | LARGE BUTTER CROISSANT (100X90G)          |       145.00 |       145.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    163 |   40090106 | LARGE CHEESE CROISSANT (100X100G)         |       161.00 |       161.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    164 |   40090206 | LARGE CHOCOLATE CROISSANT (100X100G)      |       194.00 |       194.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    165 |   40090306 | LARGE ZAATAR CROISSANT (100X100G)         |       161.00 |       161.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    166 |   40090506 | MEDIUM BUTTER CROISSANT (180X50G)         |       145.00 |       145.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    167 |   40090606 | MEDIUM CHEESE CROISSANT (180X60G)         |       164.00 |       164.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    168 |   40090706 | MEDIUM CHOCOLATE CROISSANT (180X60G)      |       218.00 |       218.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    169 |   40090806 | MEDIUM ZAATAR CROISSANT (180X60G)         |       164.00 |       164.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    170 |   40091006 | MINI BUTTER CROISSANT (340X25G)           |       177.00 |       177.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    171 |   40091106 | MINI CHEESE CROISSANT (340X30G)           |       186.00 |       186.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    172 |   40091206 | MINI CHOCOLATE CROISSANT (340X30G)        |       228.00 |       228.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    173 |   40091306 | MINI ZAATAR CROISSANT (340X30G)           |       186.00 |       186.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    174 |   40093706 | LARGE PLAIN CROISSANT(100X90G) P          |       140.00 |       140.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    175 |   40093806 | LARGE CHEESE CROISSANT(100X100G) P        |       155.00 |       155.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    176 |   40093906 | LARGE CHOCOLATE CROISSANT(100X100G) P     |       184.00 |       184.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    177 |   40094006 | LARGE ZAATAR CROISSANT(100X100G) P        |       155.00 |       155.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    178 |   40094106 | MEDIUM PLAIN CROISSANT(180X50G) P         |       126.00 |       126.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    179 |   40094206 | MEDIUM CHEESE CROISSANT(180X60G) P        |       136.00 |       136.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    180 |   40094306 | MEDIUM CHOCOLATE CROISSANT(180X60G) P     |       196.00 |       196.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    181 |   40094406 | MEDIUM ZAATAR CROISSANT(180X60G) P        |       136.00 |       136.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    182 |   40094506 | MINI PLAIN CROISSANT (340X25G) P          |       177.00 |       177.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    183 |   40094606 | MINI CHEESE CROISSANT(340X30G) P          |       186.00 |       186.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    184 |   40094706 | MINI CHOCOLATE CROISSANT(340X30G) P       |       228.00 |       228.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    185 |   40094806 | MINI ZAATAR CROISSANT(340X30G) P          |       186.00 |       186.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    186 |   40095206 | LARGE BUTTER PANDA CROISSANT (100X90G)    |       140.00 |       140.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    187 |   40095306 | MEDIUM BUTTER PANDA CROISSANT (180X50G)   |       126.00 |       126.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    188 |   40095406 | MINI BUTTER PANDA CROISSANT (340X25G)     |       177.00 |       177.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    189 |   40210012 | 6'S LAMB BURGER (24X336G)                 |       209.00 |       209.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    190 |   40210212 | 24'S LAMB BURGER (12X1344G)               |       350.00 |       295.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    191 |   40212012 | 15'S LAMB MEAT BALL (12X375G)             |       119.00 |       119.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    192 |   40213012 | 10'S LAMB KEBAB (12X320G)                 |       101.00 |       101.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    193 |   40214012 | BEEF BURGER WALIMA (6X1.400G)             |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    194 |   40214112 | CHICKEN BREADED BURGER WALIMA (6X1.500G)  |       135.00 |       135.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    195 |   40230412 | 20'S REG BEEF BRGR IN PLSTC BAG (8X1 KG)  |       179.00 |       149.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    196 |   40230512 | 20'S HOT BEEF BRGR IN PLSTC BAG (8X1 KG)  |       179.00 |       149.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    197 |   40234312 | MARINATED BEEF SHREDDED-CANTON (5X2KGS)   |       343.00 |       343.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    198 |   40234412 | MARINATED BEEF SLICE-CANTON (5X2KGS)      |       343.00 |       343.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    199 |   40244612 | CHICKEN NUGGETS (4X2.5KG)                 |       170.00 |       170.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    200 |   40244712 | SUNBULAH 18'S CHICKEN BALLS (12X360G)     |        94.00 |        94.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    201 |   40244912 | SUNBULAH CHICKEN MEATBALLS CAT (4X2.5KG)  |       209.00 |       209.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    202 |   40245112 | CHICKEN DELUXE FILLET (12X420G)           |       200.00 |       200.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    203 |   40245212 | CRISPY CHICKEN TENDER (12X450G)           |       150.00 |       150.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    204 |   40245612 | BREADED CHICKEN FILLETS (12X450G)         |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    205 |   40245712 | CHICKEN NUGGETS ROYAL (4X2.5KG)           |       145.00 |       145.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    206 |   40245812 | MOZZARELLA STICK (12X240G)                |       148.00 |       148.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    207 |   40250012 | 24'S REGULAR BEEF BURGER (12X1344G)       |       380.00 |       295.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    208 |   40250112 | 4'S REGULAR BEEF BURGER (24X224G)         |       156.00 |       156.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    209 |   40250212 | 8'S REGULAR BEEF BURGER (12XX448G)        |       149.00 |       149.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    210 |   40250312 | 4'S HOT BEEF BURGER (24X224G)             |       156.00 |       156.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    211 |   40250412 | 8'S HOT BEEF BURGER (12X448G)             |       149.00 |       149.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    212 |   40250512 | 20'S HOT BEEF BRGR IN PLSTC BAG(8X1120G)  |       201.00 |       201.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    213 |   40250712 | 10'S GIANT BEEF BURGER (8X1KG)            |       187.00 |       160.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    214 |   40250812 | 18'S BEEF MEAT BALL (12X360G)             |       117.00 |       117.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    215 |   40250912 | BEEF MEAT BALLS (4X2.5KG) CAT.            |       155.00 |       155.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    216 |   40251012 | 10'S BEEF KEBAB (12X600G)                 |       182.00 |       182.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    217 |   40251612 | BEEF MEAT BALLS ROYAL (4X2.5KG)           |       120.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    218 |   40251812 | BEEF MEAT BALLS SUPER (4X2.5KG)           |       145.00 |       145.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    219 |   40255112 | CHICKEN POP CORN (12X400G)                |       139.00 |       128.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    220 |   42002060 | AL-SHIFA SIDR HONEY (6X500G)              |       600.00 |       600.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    221 |   40256012 | REGULAR CHICKEN NUGGETS (12X400G)         |       128.00 |       128.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    222 |   40256112 | FUN CHICKEN NUGGETS (12X400G)             |       130.00 |       128.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    223 |   40256212 | HOT CHICKEN NUGGETS (12X400G)             |       139.00 |       128.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    224 |   40255512 | IQF CHICKEN BREAST FREE SIZE (4X2.5KG)    |       200.00 |       200.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    225 |   40256312 | IQF CHICKEN BREAST 4OZ (4X2.5KG) - CAT    |       210.00 |       210.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    226 |   40256512 | IQF CHICKEN BREAST 65G (4X2.5KG) - CAT    |       185.00 |       185.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    227 |   40256712 | CHICKEN NUGGETS (8X750G)                  |       152.00 |       136.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    228 |   40260112 | 24'S BREADED CHICKEN BURGER (12X1344G)    |       328.00 |       295.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    229 |   40260412 | 4'S BREADED CHICKEN BURGER (24X224GM)     |       133.00 |       133.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    230 |   40260512 | 8'S BREADED CHICKEN BURGER (12X448G)      |       121.00 |       121.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    231 |   40260812 | 4'S UNBREADED CHICKEN BURGER (24X224G)    |       133.00 |       133.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    232 |   40260912 | 8'S UN-BREADED CHICKEN BURGER (12X448G)   |       121.00 |       121.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    233 |   40261012 | 24'S UN-BREADED CHCKN BURGER (12X1344G)   |       347.00 |       295.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    234 |   40262012 | 12'S BREADED CHICKEN BURGER (12X672G)     |       195.00 |       180.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    235 |   40262112 | 15'S BREADED CHCKN BURGER IN PB (8X750G)  |       138.00 |       126.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    236 |   40262212 | 15'S UNBREADED CHCKN BRGR IN PB (8X750G)  |       138.00 |       126.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    237 |   40262312 | HOME MADE BEEF BURGER                     |       195.00 |       195.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    238 |   40263112 | CHICKEN FILLET ESCALLOP REG (4X2.5 KG)    |       200.00 |       200.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    239 |   40263312 | CHICKEN HOT FILLETS                       |       220.00 |       220.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    240 |   40263412 | CHICKEN FAJITHA                           |       225.00 |       225.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    241 |   40263512 | CHICKEN FILLET CATERING 2.5 * 4           |       220.00 |       220.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    242 |   40256412 | IQF CHICKEN BREAST 6OZ (4X2.5KG) - CAT    |       220.00 |       220.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    243 |   40470018 | SUNBULAH GARDEN PEAS (24X250 G)           |        94.00 |        94.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    244 |   40470118 | SUNBULAH GARDEN PEAS (12X450 G)           |        81.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    245 |   40470218 | SUNBULAH GARDEN PEAS (12X900 G)           |       150.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    246 |   40470618 | SUNBULAH GARDEN PEAS (4X2.5 KG)           |        92.00 |        92.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    247 |   40470718 | SUNBULAH PEAS & CARROTS 12X450G           |        71.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    248 |   40470818 | SUNBULAH PEAS & CARROTS 12X900G           |       141.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    249 |   40471018 | SUNBULAH MIXED VEGETABLE (24X250 G)       |        86.00 |        86.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    250 |   40471118 | SUNBULAH MIXED VEGETABLE (12X450 G)       |        73.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    251 |   40471218 | SUNBULAH MIXED VEGETABLE (12X900 G)       |       141.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    252 |   40471618 | SUNBULAH MIXED VEGETABLE (4X2.5 KG)       |        90.00 |        90.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    253 |   40472118 | SUNBULAH BROAD BEANS (12X450 G)           |       103.00 |       103.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    254 |   40472218 | SUNBULAH BROAD BEANS (12X900 G)           |       193.00 |       193.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    255 |   40473112 | SUNBULAH CUT GREEN BEANS (12X450 G)       |        66.00 |        66.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    256 |   40473118 | SUNBULAH CUT GREEN BEANS (12X450 G)       |        66.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    257 |   40473218 | SUNBULAH CUT GREEN BEANS (12X900 G)       |       128.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    258 |   40473618 | SUNBULAH CUT GREEN BEANS (4X2.5 KG)       |       107.00 |       107.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    259 |   40474118 | SUNBULAH SWEET CORN (12X450 G)            |        89.00 |        65.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    260 |   40474218 | SUNBULAH SWEET CORN (12X900 G)            |       145.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    261 |   40474618 | SUNBULAH SWEET CORN (4X2.5KG)             |        90.00 |        90.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    262 |   40475112 | SUNBULAH CORN ON THE COB 840G(4X210G)     |       174.00 |       174.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    263 |   40475118 | SUNBULAH CORN ON THE COB (12X4X240G)      |       174.00 |       174.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    264 |   40475124 | SUNBULAH CORN ON THE COB 840G(4X210G)     |       174.00 |       174.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    265 |   40475518 | SUNB MINI CORN ON THE COB 6X12X140G       |       131.00 |       131.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    266 |   40560712 | SUNBULAH SHREDDED MOZZARELLA (4X2.3 KG)   |       200.00 |       200.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    267 |   42000160 | AL-SHIFA (NATURAL) (24X125G)              |       202.00 |       202.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    268 |   42000260 | AL-SHIFA (NATURAL) (12X750 G)             |       428.00 |       428.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    269 |   42001960 | AL-SHIFA NATURAL BULK HONEY (KGS)         |        33.00 |        33.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    270 |   42002160 | AL-SHIFA (ACACIA) (24X125G)               |       305.00 |       305.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    271 |   42004360 | AL-SHIFA BLACK FOREST (12X250 G)          |       383.00 |       383.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    272 |   42004660 | AL-SHIFA BLACK FOREST BULK HONEY (KGS)    |        60.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    273 |   42005460 | AL-SHIFA LIMETREE (12X500 G)              |       425.00 |       425.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    274 |   42006360 | AL-SHIFA CREAMY HONEY (12X250G)           |       145.00 |       145.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    275 |   42006460 | AL-SHIFA WHITE CREAMY HONEY (12X500G)     |       278.00 |       278.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    276 |   42006860 | LEATHER WOOD BULK HONEY (KGS)             |        64.00 |        64.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    277 |   42006960 | AL-SHIFA ARGENTINA CREAMY BULK (KGS)      |        33.00 |        33.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    278 |   42101060 | AL-SHIFA NATURAL (100X25 G)-NEW           |        57.00 |        57.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    279 |   42101160 | AL-SHIFA NATURAL (100X25 G) NADEC         |        57.00 |        57.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    280 |   42102060 | AL-SHIFA NATURAL (100X30 G)-NEW           |        67.00 |        67.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    281 |   42103060 | AL-SHIFA NATURAL HONEY (144 X 30G)-NEW    |       195.00 |       195.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    282 |   42103160 | ALSHIFA NAT 30G JARS SP ED 4(36X30G)-NEW  |       243.00 |       243.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    283 |   42104060 | AL-SHIFA (NATURAL) (24X125G)-NEW          |       212.00 |       212.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    284 |   42105060 | AL-SHIFA NATURAL (12X250 G)-NEW           |       190.00 |       190.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    285 |   42106060 | AL-SHIFA NATURAL (12X500 G)-NEW           |       337.00 |       337.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    286 |   42107060 | AL-SHIFA (NATURAL) (12X750 G)-NEW         |       473.00 |       473.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    287 |   42108060 | AL-SHIFA NATURAL (6X1 KG)-NEW SQUARE      |       268.00 |       268.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    288 |   42109060 | AL-SHIFA NATURAL (4X3KG)-NEW              |       495.00 |       495.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    289 |   42110060 | AL SHIFA NATURAL (6X1KG) - OCTO JARS      |       281.00 |       281.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    290 |   42151060 | AL-SHIFA SQUEEZE (12X250 G) -NEW          |       208.00 |       208.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    291 |   42151560 | AL-SHIFA SQUEEZE (12X400 G)-NEW           |       303.00 |       303.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    292 |   42157060 | AL SHIFA ACACIA (12X400G) SQUEEZE         |       547.00 |       547.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    293 |   42161060 | AL-SHIFA ACACIA HONEY (144 X 30G)-NEW     |       248.00 |       248.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    294 |   42161560 | AL-SHIFA (ACACIA) (24X125G)-NEW           |       369.00 |       369.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    295 |   42162060 | AL-SHIFA ACACIA (12X250 G)-NEW            |       344.00 |       344.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    296 |   42162560 | AL-SHIFA ACACIA (12X500 G)-NEW            |       610.00 |       610.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    297 |   42163060 | AL-SHIFA BLACK FOREST HONEY (144X30G)     |       248.00 |       248.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    298 |   42163160 | AL-SHIFA BLACK FOREST HONEY 4(36X30G)     |       365.00 |       365.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    299 |   42163560 | AL-SHIFA (BLACK FOREST) (24X125G)-NEW     |       468.00 |       468.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    300 |   42164060 | AL-SHIFA BLACK FOREST (12X250 G)-NEW      |       442.00 |       442.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    301 |   42164560 | AL-SHIFA BLACK FOREST (12X500 G)-NEW      |       850.00 |       850.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    302 |   42165060 | ALSHIFA BLACK FOREST (6X1KG) OCTO JAR     |       670.00 |       670.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    303 |   42165560 | AL-SHIFA ORANGE (12X500 G)-NEW            |       467.00 |       467.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    304 |   42166060 | AL-SHIFA LIMETREE (12X500 G)-NEW          |       467.00 |       467.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    305 |   42166560 | AL SHIFA HONEY GOLDEN NECTAR (12X500G)-N  |       276.00 |       276.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    306 |   42167060 | AL-SHIFA SIDR HONEY(144X30G)              |       432.00 |       432.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    307 |   42167160 | AL-SHIFA SIDR HONEY 4(36X28G)             |       608.00 |       608.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    308 |   42168060 | AL SHIFA SIDR HONEY (12X250G) - TB        |       650.00 |       650.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    309 |   42302060 | AL SHIFA NATURAL (12X500G) INDO SFRO      |       337.00 |       337.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    310 |   42312060 | AL SHIFA NATURAL (24X125G)TUN-2018        |       212.00 |       212.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    311 |   42313060 | AL SHIFA NATURAL (12X500G)TUN-2018        |       337.00 |       337.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    312 |   42314060 | AL SHIFA NATURAL (6X1KG)Square-TUN-2018   |       281.00 |       281.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    313 |   42561060 | AL SHIFA NATURAL (24X125G)??SFRO          |       212.00 |       212.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    314 |   42562060 | AL SHIFA NATURAL (12X500G)??SFRO          |       337.00 |       337.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    315 |   42572560 | AL SHIFA NATURAL(6X1KG) OCT- INDO - GIP   |       281.00 |       281.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    316 |   42680060 | SARY HONEY PORTIONS (100X25G) - RV        |        48.00 |        48.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    317 |   42680660 | SARY HONEY (24X70G) - RV                  |        51.00 |        51.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    318 |   42680760 | SARY HONEY (24X125G) - RV                 |        96.00 |        96.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    319 |   42680960 | SARY HONEY (12X250G) - RV                 |        95.00 |        95.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    320 |   42681260 | SARY HONEY SQUEEZY (12X400G) - RV         |       156.00 |       156.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    321 |   42681560 | SARY HONEY (12X500G) - RV                 |       180.00 |       180.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    322 |   42681860 | SARY HONEY JARS (6X1KG) - RV              |       168.00 |       168.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    323 |   42682160 | SARY HONEY JARS (6X1.5 KG) - RV           |       232.00 |       232.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    324 |   42682460 | SARY HONEY JARS (4X3 KG) - RV             |       281.00 |       281.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    325 |   50019111 | MINI DANISH CHOC. & HAZELNUT (225X40G)    |       151.00 |       151.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    326 |   50041324 | WALIMAH VEGETABLES SAMOSA 23G (4X50PC)    |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    327 |   50041712 | BEEF TOPSIDE CAP OFF GRADE A              |       644.00 |       644.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    328 |   50051612 | SUNBULAH PIZZA VEGETARIANA (12X420G)      |       210.00 |       210.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    329 |   50051712 | SUNBULAH PIZZA PESTO (12X380G)            |       210.00 |       210.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    330 |   50350118 | BULK SQUARE FISH BURGER 60 GRAM(10X1KG)   |       255.00 |       255.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    331 |   50350418 | BULK SQUARE FISH BURGER 60 GM (24X360G)   |       171.00 |       171.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    332 |   50350518 | BULK FISH FINGERS 25G - (30X300G)         |       137.00 |       137.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    333 |   50351112 | WALIMAH WHITE FISH FILLET (10X1KG)        |       120.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    334 |   50351124 | WALIMAH WHITE FISH FILLET (10X1KG)        |       120.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    335 |   50351212 | WALIMAH WHITE FISH FILLET (5X2KG)         |       115.00 |       115.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    336 |   50360912 | 12'S SQUARE FISH BURGER (12X720G)         |       280.00 |       280.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    337 |   50361012 | 12'S SUNBULAH FISH FINGER (12X300G)       |       123.00 |       123.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    338 |   50361018 | 12'S SUNBULAH FISH FINGER (12X300G)       |       123.00 |       123.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    339 |   50361112 | 24'S SUNBULAH FISH FINGER (12X600G)       |       226.00 |       226.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    340 |   50361212 | 10'S SUNBULAH JUMBO F/FINGER (12X560G)    |       206.00 |       206.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    341 |   50361912 | 6'S SQUARE FISH BURGER (12X360G)          |       145.00 |       145.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    342 |   50365212 | BREADED SHRIMPS (12X240G)                 |       154.00 |       154.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    343 |   50470218 | 1 INCH BULK CUT GREEN BEANS (1X20KGS.)    |       100.00 |       100.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    344 |   50470624 | BROAD BEANS (BULK 25 KGS.)                |       275.00 |       275.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    345 |   50470718 | MINI CORN ON THE COB (BULK) 96PCS         |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    346 |   50475818 | SUNB.SUPER CRISP F.F 7MM (6X1.5KG)        |        65.00 |        85.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    347 |   50475918 | FRENCH FRIES- 10MM (4X2.5KG) - (RETAIL)   |        53.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    348 |   50476018 | SUNB FRENCH FRIES 7MM-F-(10X1KG) RETAIL   |        63.00 |        65.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    349 |   50476118 | SUNB FRENCH FRIES 10MM-F-(10X1KG) RETAIL  |        61.00 |        65.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    350 |   50476818 | FRENCH FRIES - F -(CATERING) (4X2.5KG)    |        49.00 |        49.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    351 |   50476918 | FRENCH FRIES - U -(CATERING) (4X2.5KG)    |        49.00 |        49.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    352 |   50477212 | SUNBULAH SPINACH (20 X 400G)              |        44.00 |        44.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    353 |   50477318 | SUNBULAH SPICED POTATO WEDGES (4X2.5 KG)  |        85.00 |        85.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    354 |   50477518 | SUNB.SEASONED F.F 10MM(6X1.5)             |        75.00 |        90.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    355 |   50477618 | SUNBULAH BROCCOLI (20X400G)               |       143.00 |       143.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    356 |   50477712 | SUNBULAH ONION RINGS (8X1KG)              |       130.00 |       130.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    357 |   50477718 | SUNBULAH ONION RINGS (8X1KG)              |       130.00 |       130.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    358 |   50478018 | WALIMA PEELED TOMATO (24X400G)            |        46.00 |        46.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    359 |   50478118 | WALIMA PEELED TOMATO (6X2550G)            |        70.00 |        70.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    360 |   50478218 | WALIMA PEELED TOMATO EASY OPEN (24X400G)  |        46.00 |        46.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    361 |   50478318 | FRENCH FRIES-L- 10MM (CAT)(4X2.5KG) T     |        49.00 |        49.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    362 |   50478418 | THIN FRENCH FRIES-L-CAT 7MM (4X2.5KG)T    |        51.00 |        51.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    363 |   50480018 | SUNBULAH MEXICAN MIX VEG (20X450G)        |       107.00 |       107.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    364 |   50480118 | ASIAN MIXED VEGETABLES (20X450G)          |       115.00 |       115.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    365 |   50480318 | EUROPEAN MIXED VEGETABLES (20X450G)       |       107.00 |       107.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    366 |   50480418 | VEGETABLE SOUP MIX (20X450G)              |        90.00 |        90.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    367 |   50480618 | SUNBULAH MEXICAN MIX VEG (20X450G)-NP     |       107.00 |       107.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    368 |   50480718 | SUNBULAH ASIAN ?MIX VEG (20X450G)-NP      |       115.00 |       115.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    369 |   50480818 | SUNBULAH ITALIAN MIX VEG (20X450G)-NP     |       107.00 |       107.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    370 |   50480918 | SUNBULAH EURO MIX VEG (20X450G)-NP        |       107.00 |       107.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    371 |   50481018 | SUNBULAH 4 VEG SOUP MIX (20X450G)-NP      |        90.00 |        90.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    372 |   50482024 | MIXED VEGETABLES BULK (1X25KGS)           |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    373 |   50483024 | MIXED VEGETABLES BULK (1X23KGS)           |       100.00 |       100.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    374 |   50486018 | THIN FRENCH FRIES ?7 MM (4X2.5KG)-RETAIL  |        55.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    375 |   50486412 | SUNBULAH MOLOKHIA (20X400G)               |        76.00 |        76.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    376 |   50487012 | SUNBULAH STRAWBERRY (10X800G)             |        86.00 |        86.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    377 |   50487018 | SUNBULAH STRAWBERRY (10X800G)             |        86.00 |        86.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    378 |   50487112 | WALIMAH STRAWBERRY (10X800G)              |        58.00 |        58.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    379 |   50487318 | WALIMAH MIXED VEGETABLES (20X400G)        |        49.00 |        49.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    380 |   50487418 | WALIMAH MIXED VEGETABLES (20X400G)-CAT    |        49.00 |        49.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    381 |   50487512 | SUNBULAH MANGO SLICES (10X1KG)            |        90.00 |        90.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    382 |   50487618 | WALIMAH MANGO PULP (16X1KG)               |       135.00 |       135.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    383 |   50487712 | SUNBULAH GUAVA PULP (16X1KG)              |        90.00 |        90.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    384 |   50488412 | SUNBULAH STRAWBERRY (10X800G) FS          |        72.00 |        72.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    385 |   50488518 | BULK PEAS & CARROTS (1X20KGS)             |       105.00 |       105.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    386 |   50488624 | TWO WAY MIX PEAS & CARROTS (1X25KG)       |       135.00 |       135.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    387 |   50488718 | WALIMA FRENCH FRIES 10 MM (4X2.5 KG)      |        41.00 |        41.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    388 |   50488912 | SUNBULAH MANGO PULP AL PHONSO (16X1KG)    |       136.00 |       136.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    389 |   50488918 | SUNBULAH MANGO PULP AL PHONSO (16X1KG)    |       136.00 |       136.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    390 |   50489218 | WALIMA CUT GREEN BEANS (20X400G)-CAT      |        44.00 |        44.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    391 |   50489318 | WALIMA CUT GREEN BEANS (20X400G)          |        44.00 |        44.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    392 |   50489518 | BULK GARDEN PEAS (1X20KGS)                |       100.00 |       100.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    393 |   50490118 | SUNBULAH ARTICHOKE (20X400G)              |       154.00 |       154.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    394 |   50511118 | WALIMA FINE OKRA (20X400G)                |        80.00 |        80.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    395 |   50511318 | SUNBULAH OKRA ZERO 3.5 (20X400G)          |       120.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    396 |   50511518 | SUNBULAH OKRA EXTRA (20X400G)             |       137.00 |       137.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    397 |   50511618 | WALIMAH GREEN PEAS (20X400G)-CAT          |        53.00 |        53.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    398 |   50511718 | SUNBULAH OKRA EXTRA (20X400G)             |       137.00 |       137.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    399 |   51476718 | FRENCH FRIES-L- 10MM (CAT)(4X2.5KG) WH    |        49.00 |        49.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    400 |   52476718 | FRENCH FRIES-L- 10MM (CAT)(4X2.5KG) WH    |        49.00 |        49.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    401 |   53476718 | FRENCH FRIES-L- 10MM (CAT)(4X2.5KG) WH    |        49.00 |        49.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    402 |   56060006 | SUNBULAH SHREDDED MOZZARELLA (24X200 G)   |       180.00 |       180.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    403 |   56060106 | SUNBULAH SHREDDED MOZZARELLA (12X500G)    |       209.00 |       209.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    404 |   56060506 | SUNBULAH SHREDDED MOZZARELLA (6X1 KG)     |       193.00 |       193.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    405 |   56104112 | WALIMA PROCESSED CHEESE BLOCK -6X1.8KG)   |       190.00 |       190.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    406 |   56321712 | SUNBULAH FETA CHEESE - 16KG (1X16KG)      |       120.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    407 |   56321912 | SUNB WHITE CHEESE-TETRA PACK (12X500G)    |        96.00 |        96.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    408 |   56322112 | SUNB WHITE CHEESE-TETRA PACK (27X200G)    |       107.00 |       107.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    409 |   56322412 | SUNBULAH KASHKAVAL CHEESE (32X350G)       |       497.00 |       497.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    410 |   56322512 | SUNBULAH KASHKAVAL CHEESE (20X700G)       |       590.00 |       590.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    411 |   56343012 | WALIMAH MOZZARELLA BLOCK (4X2.3KG)        |       212.00 |       160.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    412 |   56343112 | SUNB MOZZARELLA BLOCK 9.2KG POL(4X2.3KG)  |       230.00 |       230.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    413 |   56360912 | SUNBULAH KASHKAVAL CHEESE (2X8KG)         |       570.00 |       529.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    414 |   56380012 | ALAMBRA HALLOUMI CHEESE(45X220G)          |       475.00 |       475.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    415 |   56380212 | ALAMBRA CHILLI HALLOUMI (50X200G)         |       495.00 |       495.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    416 |   56380312 | ALAMBRA LIGHT HALLOUMI (45X225G)          |       475.00 |       475.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    417 |   56380812 | SUNBULAH HALLOUMI CHEESE (40X250G)        |       418.00 |       418.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    418 |   56380912 | SUNB HALLOUMI CHEESE LIGHT (40X250G)      |       480.00 |       480.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    419 |   56920418 | WALIMA CANNED CREAM (48X170GM)            |       120.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    420 |   56930612 | SUNBULAH CHICKEN FRANKS (24X375G)         |       120.00 |       120.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    421 |   56930912 | WALIMA CHICKEN FRANKS (24 X 340G)         |        72.00 |        72.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    422 |   56932612 | WALIMA CHICKEN FRANKS UAE (24 X 340G)     |        72.00 |        72.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    423 |   57510218 | HOMMOS TAHINI / CHTAURA (24X380G)         |        61.00 |        61.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    424 |   57510224 | HOMMOS TAHINI / CHTAURA (24X380G)         |        61.00 |        61.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    425 |   57510318 | HOMMOS TAHINI / CHTAURA (24X180GM)        |        37.00 |        37.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    426 |   57510324 | HOMMOS TAHINI / CHTAURA (24X185G)         |        37.00 |        37.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    427 |   57512524 | SARY APRICOT JAM PLASTIC PORTION 224X30G  |        52.00 |        52.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    428 |   57512624 | SARY STRAWBERRY JAM PLASTIC PRTN 224X30G  |        52.00 |        52.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    429 |   57514218 | CILEKLI CHEESE CAKE/STRAWBERRY (1X1920G)  |        86.00 |        86.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    430 |   57514318 | KARA ORMAN PASTA/BLACK FOREST (1X1680G)   |        75.00 |        75.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    431 |   57514511 | MINI VANILLA CROWN 46G (120GX46G)         |       225.00 |       225.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    432 |   57514518 | SUNB ELMALI TART/APPLE PIE (1X1440G)      |        60.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    433 |   57514611 | MINI CINNAMON ROLL 46G (120GX46G)         |       225.00 |       225.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    434 |   57514618 | SUNB HAVUCLU KEK/CARROT CAKE (1X1750G)    |        80.00 |        80.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    435 |   57514711 | MINI RASPBERRY CROWN 46G (120GX46G)       |       225.00 |       225.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    436 |   57514718 | TIRAMISU KARE/TIRAMISU SQUARE (1X1400G)   |        64.00 |        64.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    437 |   57514811 | SUNB MINI APPLE CORONET (120GX46G)        |       225.00 |       225.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    438 |   57515518 | SUNBULAH POTATO WEDGES (12X750G)          |        83.00 |        83.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    439 |   57516418 | SUNB NEW YORK CHEESE CAKE (1X1920G)       |        87.00 |        87.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    440 |   57517012 | WALIMA EVAPORATED MILK (96X170G)          |       145.00 |       145.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    441 |   57518018 | SUNBULAH CRUNCHY CUTS (6X1.5KG)           |        87.00 |        99.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    442 |   58011106 | SUNBULAH TURKISH LABNEH (4X2.75KG)        |       188.00 |       188.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    443 |   58011206 | SUNBULAH TURKISH LABNEH (24X180G)         |       117.00 |       117.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    444 |   58011306 | SUNBULAH TURKISH LABNEH (24X475G)         |       240.00 |       240.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    445 |   58011406 | SUNBULAH TURKISH LABNEH (18X700G)         |       300.00 |       300.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    446 |   58011518 | SUNBULAH CAULIFLOWER (20X400G)            |        79.00 |        79.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    447 |   59000012 | FRICO EDAM CHEESE BALLS MILD (6X1.9KG)    |       408.00 |       408.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    448 |   59000112 | FRICO DELI GOUDA CUMIN 4X4.5KG(WHEEL)     |       702.00 |       702.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    449 |   59000212 | FRICO DELI HOLLAND GOUDA CHEESE 4X4.5KG   |       644.00 |       644.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    450 |   59000312 | FRICO EDAM CHEESE WITH CHILLIES(2X1.9KG)  |       163.00 |       163.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    451 |   59000412 | FRICO EDAM CHESSE WITH HERBS (2X1.9KG)    |       163.00 |       163.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    452 |   59000512 | FRICO GOAT'S CHEESE WHEEL (1X4.5KG)       |       263.00 |       263.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    453 |   59000612 | FRICO LIGHT CHEESE WHEEL (1X4.5KG)        |       205.00 |       205.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    454 |   59000712 | FRICO GOUDA CHEESE WITH CUMIN (1X4.5KG)   |       176.00 |       176.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    455 |   59000812 | FRICO GOUDA CHEESE WITH PEPPER (1X4.5KG)  |       193.00 |       193.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    456 |   59000912 | FRICO GOUDA HOLLAND CHEESE MILD(1X4.5KG)  |       161.00 |       161.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    457 |   59001012 | FRICO EDAM WEDGE MILD ( 24X235G )         |       298.00 |       298.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    458 |   59001112 | FRICO GOUDA CUMIN WEDGE (17X295G)         |       265.00 |       265.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    459 |   59001212 | FRICO GOUDA WEDGE MILD (17X295G)          |       231.00 |       231.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    460 |   59001312 | FRICO RED HOT DUTCH CHEESE WEDGE(13X235)  |       161.00 |       161.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    461 |   59001412 | FRICO HERBEY DUTCH WEDGE ( 13X235G )      |       161.00 |       161.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    462 |   59001512 | FRICO EMMENTAL CHEESE LOAF (5X3KG)        |       536.00 |       536.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    463 |   59001612 | FRICO EDAM SLICES MILD (12X150G)          |        96.00 |        96.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    464 |   59001712 | FRICO SMOKED PROCESSED CHEESE (4X2.85KG)  |       385.00 |       385.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    465 |   59001812 | FRICO MAASDAM CHEESE WHEEL (1X13KG)       |       558.00 |       558.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    466 |   59001912 | FRICO GOUDA SLICES MILD (12X150G)         |        96.00 |        96.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    467 |   59002012 | FRICO BABY EDAM CHEESE BALLS (6X900G)     |       238.00 |       238.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    468 |   59002212 | FRICO RED HOTDUTCH CHEESE SLICES(12X150)  |       115.00 |       115.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    469 |   59002312 | FRICO LIGHT CHEESE SLICES (12X150G)       |       115.00 |       115.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    470 |   59002412 | FRICO MAASDAM CHEES SLICES (12X150G)      |       115.00 |       115.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    471 |   59002512 | FRICO MIMOLETTE CH SLICES MILD (12X150G)  |       115.00 |       115.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    472 |   59002612 | FRICO CHEVRETTE CHEESE SLICES (12X150G)   |       144.00 |       144.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    473 |   59002712 | FRICO GOUDA OLD DUTCH MASTER (2X5KG)      |       520.00 |       520.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    474 |   59002812 | FRICO GC MEDITERRANEA HERB SEEDS(1X4.5K)  |       219.00 |       219.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    475 |   40478118 | SUNBULAH MIXED VEGETABLE (12X900 G)-SL    |       141.00 |       141.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    476 |   56040036 | AL SHIFA HONEY DROPS(12x7g)               |       320.00 |       320.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    477 |   40480018 | WALIMA GARDEN PEAS (20X400G)              |        80.00 |        80.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    478 |   42004060 | SARY HONEY (6X1.5KG)                      |       232.00 |       232.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    479 |   42030160 | SARY HONEY (24X80G)                       |        51.00 |        51.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    480 |   42030360 | SARY HONEY (24X70G)                       |        51.00 |        51.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    481 |   42030660 | SARY NATURAL HONEY (12X250G)              |        95.00 |        95.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    482 |   42030760 | SARY NATURAL HONEY (12X500G)              |       180.00 |       180.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    483 |   42031260 | SARY HONEY - PORTION (100X30G)            |        46.00 |        46.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    484 |   42031660 | SARY HONEY -JARS (6X1KG)                  |       168.00 |       168.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    485 |   42031760 | SARY HONEY -JARS (4X3KG)                  |       281.00 |       281.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    486 |   42032260 | SARY HONEY - PORTION (100X25G)            |        48.00 |        48.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    487 |   50485718 | THIN FRENCH FRIES-L-CAT 7MM (4X2.5KG)WH   |        51.00 |        51.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    488 |   50486512 | WALIMAH MOLOKIAH (20X400G)                |        64.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    489 |   50489418 | WALIMA SWEET CORN (20X400G)               |        80.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    490 |   50470318 | BULK CUT GREEN BEANS (1X25KGS.)           |       115.00 |       115.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    491 |   50511018 | WALIMAH OKRA - ONE(20X400G)               |        80.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    492 |   50511118 | WALIMA FINE OKRA (20X400G)                |        55.00 |        55.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    493 |   56040136 | AL SHIFA HONEY DROPS(24x7g)               |       320.00 |       320.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    494 |   56341912 | SUNB MOZZARELLA BLOCK 8.8KG CAN(4X2.2KG)  |       260.00 |       260.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    495 |   40267012 | FULLY COOKED 4OZ-QUIZ                     |       200.00 |       200.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    496 |   50470618 | BROAD BEANS (BULK 25 KGS.)                |       210.00 |       210.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    497 |   50489518 | BULK GARDEN PEAS (1X20KGS)                |       125.00 |       125.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    498 |   42151060 | AL-SHIFA SQUEEZE (12X250 G) -NEW          |       198.00 |       198.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    499 |   50483018 | BULK MIXED VEGETABLES (1X20KGS)           |        95.00 |        95.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    500 |   40255512 | IQF CHICKEN BREAST FREE SIZE (4X2.5KG)    |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    501 |   56936012 | BEEF SAMBUSA 20G(4X50PCS)                 |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    502 |   56936112 | CHICKEN SAMBUSA 20G(4X50PCS)              |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    503 |   56936212 | CHEESE SAMBUSAK 20g 4x50                  |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    504 |   56936312 | VEGETABLES SAMBUSAK 20g 4x50              |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    505 |   40256812 | IQF CHICKEN BREAST 6oz (4x2.5kg) - D      |       200.00 |       200.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    506 |   56930812 | BULK MINCED CHICKEN 5kgs                  |        23.50 |        23.50 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    507 |   59009012 | SUNBULAH CHEESE SANBUSAK (12X240G)        |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    508 |   59009112 | SUNBULAH VEGETABLE SAMBOSA 12X240G        |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    509 |   59009212 | SUNBULAH VEGETABLE SPRING ROLL 12X240G    |        95.00 |        95.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    510 |   59005006 | FRICO MOZZARELLA SHREDDED 12X200G         |       125.00 |       125.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    511 |   59006006 | FRICO MOZZARELLA SHREDDED 12X450G         |       260.00 |       260.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    512 |   32042460 | AL SHIFA NATURAL 1KG+125 SIDR HONEY FREE  |       281.00 |       281.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    513 |   59013024 | CITY CAFE 3IN1 STICKS - BAG -18G X20 PC   |       291.00 |       291.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    514 |   59012924 | CITY CAFE 3IN1 STICKS - BOX -18G X 24 PC  |       204.00 |       204.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    515 |   59012324 | CITY CREAMER ORIGINALPLASTIC JAR 12x170G  |        68.00 |        68.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    516 |   59012224 | CITY CREAMER -ORIGINALPLASTIC JAR-6X400G  |        68.00 |        68.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    517 |   59011924 | CITY CAPPUCCINO - HAZELNUTSACHET -12x17G  |       146.00 |       146.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    518 |   59011824 | CITY CAPPUCCINO - VANILLASACHET - 12x17G  |       146.00 |       146.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    519 |   59011724 | CITY CAPPUCCINO - CHOCOLATESACHET-12x17G  |       146.00 |       146.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    520 |   59011624 | CITY CAPPUCCINO - CARAMELSACHET - 12x17G  |       146.00 |       146.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    521 |   59011524 | CITY CAPPUCCINO - ORIGINALSACHET -12x17G  |       146.00 |       146.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    522 |   59011224 | CITY CAFE GOLD INSTANT CAFE (8x100G)GJ    |       156.00 |       156.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    523 |   59011124 | CITY CAFEORIGINAL INSTANT CAFE(6x200G)GJ  |        97.00 |        97.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    524 |   59011024 | CITY CAFE ORIGINALINSTANTCAFE(12x100G)GJ  |       108.00 |       108.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    525 |   59010924 | CITY CAFE ORIGINALINSTANTCAFE(12x50G)-GJ  |        73.00 |        73.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    526 |   59010824 | CITYCAFEDECAFFEINATED INSTCAFE(12x50G)GJ  |        73.00 |        73.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    527 |   59010724 | ARABI LIQUID COFFEE GLASS BOTTLE6X1000ML  |        73.00 |        73.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    528 |   59010624 | HAMWI COFFEE DARK EXTRA CRDMN 4x10X500G   |      1277.00 |      1277.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    529 |   59010524 | HAMWI COFFEE EXTRA W CARDAMOM P4X10X500G  |      1277.00 |      1277.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    530 |   59010424 | HAMWI COFFEE EXTRA W CARDAMOM P4X25X200G  |      1414.00 |      1414.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    531 |   59010324 | HAMWI COFFEE CLASSIC W CRDMN P 4X10X500G  |      1164.00 |      1164.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    532 |   59010224 | HAMWI COFFEE CLASSIC W CRDMN P 4x25X200G  |      1253.00 |      1253.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    533 |   59010124 | HAMWI COFFEE MOCHA WO CRDMN P 4x10X500G   |      1164.00 |      1164.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    534 |   59010024 | HAMWI COFFEE MOCHA WO CRDMN P4x25X200G    |      1253.00 |      1253.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    535 |   40477218 | SUNBULAH GARDEN PEAS (24X250 G)-SL        |        94.00 |        94.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    536 |   40477318 | SUNBULAH GARDEN PEAS (12X450 G)-SL        |        81.00 |        81.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    537 |   40477418 | SUNBULAH GARDEN PEAS (12X900 G)-SL        |       150.00 |       150.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    538 |   40477518 | SUNBULAH GARDEN PEAS (4X2.5 KG)-SL        |        92.00 |        92.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    539 |   40477618 | SUNBULAH PEAS AND CARROTS (12X450 G)-SL   |        71.00 |        71.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    540 |   40477718 | SUNBULAH PEAS AND CARROTS (12X900 G)-SL   |       141.00 |       141.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    541 |   40477818 | SUNBULAH MIXED VEGETABLE (24X250 G)-SL    |        86.00 |        86.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    542 |   40477918 | SUNBULAH MIXED VEGETABLE (12X450 G)-SL    |        73.00 |        73.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    543 |   40478018 | SUNBULAH MIXED VEGETABLE (4X2.5 KG)-SL    |        90.00 |        90.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    544 |   42680360 | SARY HONEY PORTIONS (100X30G) - RV        |        48.00 |        48.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    545 |   59010715 | ARABI LIQUID COFFEEGLASS BOTTLE -1000ML   |        73.00 |        73.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    546 |   59030024 | HAMWI COFFEE MOCHA WO CRDMN P( 25X200G)   |       314.00 |       314.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    547 |   59030124 | HAMWI COFFEE MOCHA WO CRDMN P (10X500G)   |       291.00 |       291.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    548 |   59030224 | HAMWI COFFEE CLASSIC W CRDMN P (25X200G)  |       314.00 |       314.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    549 |   59030324 | HAMWI COFFEE CLASSIC W CRDMN P (10X500G)  |       291.00 |       291.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    550 |   59030424 | HAMWI COFFEE EXTRA W CARDAMOM (25X200G)   |       354.00 |       354.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    551 |   59030524 | HAMWI COFFEE EXTRA W CARDAMOM (10X500G)   |       320.00 |       320.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    552 |   59030624 | HAMWI COFFEE DARK EXTRA CRDMN (10X500G)   |       320.00 |       320.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    553 |   59004012 | SUNBULAH MOLOKHAI/TAQLIYA                 |        96.00 |        96.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    554 |   40235412 | FROZEN FALAFEL                            |        72.00 |        72.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    555 |   40474112 | SUNBULAH SWEET CORN (12X450 G)            |        89.00 |        89.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    556 |   42690360 | SARY FOREST HONEY (12x500g)               |       500.00 |       500.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    557 |   42690460 | SARY FOREST HONEY (6X1KG) SQUARE JAR      |       425.00 |       425.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    558 |   40477118 | SUNBULAH CHOPPED RED ONIONS (12X450G)     |        48.00 |        48.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    559 |   56343412 | SUN MOZZARELLA BLK (4X2.3KG) VEG FAT      |       160.00 |       160.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    560 |   42103260 | AL-SHIFA NATIONAL DAY SPECIAL (12x500g)   |       337.00 |       337.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    561 |   42103360 | SUMRA NATIONAL DAY SPECIAL (6x500G)       |       840.00 |       840.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    562 |   50019212 | MINI DANISH PASTRY APPLE (250x36G)        |       165.00 |       165.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    563 |   50019312 | MINI DANISH PASTRY RED FRUITS (257x35G)   |       200.00 |       200.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    564 |   50476718 | FRENCH FRIES-L- 10MM (CAT)(4X2.5KG) WH    |        55.00 |        55.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    565 |   50485718 | THIN FRENCH FRIES-L-CAT 7MM (4X2.5KG)WH   |        57.00 |        57.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    566 |   40080906 | DEMI BAGUETTE FRENCH (24x2x150G)          |       110.00 |       110.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    567 |   32170260 | SHIFA PROMO BLACK FOREST(500G+500G FREE)  |       425.00 |       425.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    568 |   59007024 | SIBLOU LIGHT MEAT CHUNKS IN OIL 48x150G   |       200.00 |        60.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    569 |   59008024 | SIBLOU LIGHT MEAT CHUNKS IN CHILI 48x150G |       208.00 |       200.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    570 |   59003112 | KERRYGOLD RED CHEDDAR CHEESE (4X5 KG)     |       880.00 |       208.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    571 |   59003212 | KERRYGOLD WHITE CHEDDAR CHEESE (4X5 KG)   |       880.00 |       880.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    572 |   42690160 | SARY ACACIA HONEY (12X500g)               |       409.00 |       880.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    573 |   42690260 | SARY ACACIA HONEY (6X1KG) SQUARE JAR      |       361.00 |       409.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    574 |   56041036 | AL SHIFA WITH ROYAL JELLY 5% (6X250G)     |       371.00 |       361.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    575 |   40480218 | WALIMA GARDEN PEAS (20X400G)-RETAIL       |        60.00 |       371.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    576 |   40042718 | WALIMA KONAFAH (12X500 G)                 |        72.00 |        72.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    577 |   55000018 | NAI ICED HIBISCUS FLOWER TEA (12X473ML)   |        99.00 |        99.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    578 |   55000118 | NAI ICED WITH WHITE PEONY TEA (12X473ML)  |        99.00 |        99.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    579 |   55000218 | NAI ICED PEKOE BLACK TEA ORANG(12X473ML)  |        99.00 |        99.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    580 |   55000318 | NAI ICED CHUN MEI GREEN TEA (12X473ML)    |        99.00 |        99.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    581 |   55000418 | NAI ICED HIBISCUS FLOWER TEA PROMO-PK     |        22.00 |        22.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    582 |   42168260 | AL SHIFA SIDR HONEY (6x1KG) OCTO JARS     |       948.00 |       948.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    583 |   40070218 | WALIMA SPRING ROLL  (24X160 G)            |        69.00 |        69.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    584 |   51300012 | SOLO SUMBOSA DOUGH-B(24x375G)             |       249.53 |       249.53 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    585 |   51300014 | SOLO SUMBOSA DOUGH-AR(24x375G)            |       249.53 |       249.53 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    586 |   51300112 | SOLO SUMBOSA DOUGH-B(24X360G)             |       249.53 |       249.53 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    587 |   51300114 | SOLO SUMBOSA DOUGH-AR(24X360G)            |       249.53 |       249.53 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    588 |   40041718 | EMPANADA DOUGH ( 12 X 360 G)              |       125.00 |       125.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    589 |   56060509 | SUNBULAH SHREDDED MOZZARELLA (6X1 KG)     |       193.00 |       193.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    590 |   56060009 | SUNBULAH SHREDDED MOZZARELLA (24X200 G)   |       180.00 |       180.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        |    591 |   56060109 | SUNBULAH SHREDDED MOZZARELLA (12X500G)    |       209.00 |       209.00 |    NULL |  NULL |    NULL | NULL | NULL | NULL      | NULL    | NULL       | NULL       |
        +--------+------------+-------------------------------------------+--------------+--------------+---------+-------+---------+------+------+-----------+---------+------------+------------+


@endmarkdown


</article>









                    <div style="padding-top:220px">
                    </div>
                    <hr />
                </div>
            @endif
        </div>
    </div>
@endsection
