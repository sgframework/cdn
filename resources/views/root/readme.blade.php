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


<!--<h3 id="codes"><a class="header-link" href="#codes"></a>Codes & Syntaxes</h3>

<article class="markdown-body">








@markdown


> "In a few moments he was barefoot, his stockings folded in his pockets and his
  canvas shoes dangling by their knotted laces over his shoulders and, picking a
  pointed salt-eaten stick out of the jetsam among the rocks, he clambered down
  the slope of the breakwater."

@endmarkdown-->


</article>









                    <div style="padding-top:220px">
                    </div>
                    <hr />
                </div>
            @endif
        </div>
    </div>
@endsection
