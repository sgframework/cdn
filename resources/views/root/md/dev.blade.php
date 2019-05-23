@extends('layouts.root')
@section('content')



<link href="{{ asset('css/assets/css/github-markdown.css') }}" rel="stylesheet">
<article class="markdown-body">
        <img src="{{ asset('images/assests/sgimg.png') }}" align="right" style="height: 64px"/>
        <h1 id="welcome-to-sunbulah-group-framework"><a class="header-link" href="#welcome-to-sunbulah-group-framework"></a> SunbulahGroup Developers Portal</h1>
<pre style="background-color:black;text-align: center;"><code style="color:red;" class="language-cmd">


{{ shell_exec('cd ./cmd && banner.bat') }}


</code></pre>

<h3 id="dev-timeline"><a class="header-link" href="#dev-timeline"></a><i class="fa fa-tasks" aria-hidden="true"></i> Development Timeline</h3>

<h5 id="new-features"><a class="header-link" href="#new-features"></a>Newly integrated features and services.</h5>


<ul>
<li><p>Create  <strong><i class="fa fa-plus-circle"></i> New Order</strong></p>
<p class="language-markdown">
    - Create a new order. <span style="color:green">+++++++++</span><span style="color:red">----</span>
</p>
        <ul class="contains-task-list">
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span>urgent</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span>Attach PO</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span>free, <span style="color:green">+</span>di$count</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span>serializing PO sequence</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span>change/<span style="color:green">+</span>delete PO</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span>⌘ Hotkeys</li>
                <ul style="background-color:ghostwhite">
                <span style="font-size:10px;padding-left:20px">Anywhereaccess:</span>  <br />
                <span style="font-size:10px;padding-left:40px"><kbd>⌘  Alt + n</kbd> => <i class="fa fa-plus-circle"></i> <span style="font-size:10px">New Order </span>  <br />
                <span style="font-size:10px;padding-left:20px"> Insert Items View:</span>  <br />

                <span style="font-size:10px;padding-left:40px"><kbd>⌘  Alt + q</kbd> => Insert Item.</span>  <br />
                <span style="font-size:10px;padding-left:40px"><kbd>⌘  Alt + a</kbd> => Proceed Reviewing Order.</span>  <br />
                <span style="font-size:10px;padding-left:20px">Review Order View:</span>  <br />
                <span style="font-size:10px;padding-left:40px"><kbd>⌘  Alt + a</kbd> => Proceed Submitting Order.</span>  <br />
                </ul><br />
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span>ccursor autofocus-&gt;need to be improved furthermore</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox"/> <span style="color:red">-</span> Create a new RTV order <span style="color:red">-</span> <em style="font-size:12px">missing skus</em></li>           
            <li class="task-list-item"><input disabled="disabled" type="checkbox"/> <span style="color:red">-</span> Create a new Wohlesale order</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox"/> <span style="color:red">-</span> Create a new FS order</li>
        </ul>
    <p class="language-markdown">
            - <i class="fas fa-dollar-sign"></i> New &amp; Old prices list. <span style="color:green">++</span><span style="color:red">-</span> 
        <ul class="contains-task-list">
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span>Old Prices List</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span>New Prices List</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" /> <span style="color:red">-</span> Mini Market Prices List</li>
        </ul>
    </p>

    
</li>


<li><p>Reviewing orders <i class="fas fa-eye"></i></p>

<p class="language-markdown">
        - Reviewing. <span style="color:green">++++</span> 
        <ul class="contains-task-list">
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Today's orders statuses and workflow.</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> OrderItems</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Totals</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Attache PO</li>
        </ul>
    </p>
</li>


<li><p>Members Home <i class="fas fa-home"></i></p>

<p class="language-markdown">
        - Home. <span style="color:green">+</span>
        <ul class="contains-task-list">
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Member's overall order status, preformance &amp; averages.</li>
        </ul>
    </p>
</li>


<li><p>Members Dashboard <i class="fas fa-tachometer-alt"></i></p>

<p class="language-markdown">
        - Dashboard. <span style="color:green">+</span><span style="color:red">---</span> 
        <ul class="contains-task-list">
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Member's overall preformance &amp; averages.</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" /> <span style="color:red">-</span> Teamates overall preformance &amp; averages -&gt;</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" /> <span style="color:red">-</span> Team totals &amp; averages -&gt;</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" /> <span style="color:red">-</span> Charts &amp; Comprehensive Statistics.</li>
        </ul>
    </p>
</li>


<li><p>Orders processing <i class="fa fa-cogs"></i></p>

<p class="language-markdown">
        - Review orders. <span style="color:green">++++++++</span> 
        <ul class="contains-task-list">
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> CreatedBy.</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> OrderItems</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Totals</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Attached PO</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Timestamps</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Exporting orders by user in csv format ready to upload to SAP with a little modifications sometimes whenever free or discount occurred.</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Stats by indivisual member.</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Processed by overall progress, totals and averages.</li>
        </ul>
    </p>
</li>


<li><p>Statistics <i class="far fa-chart-bar"></i></p>

<p class="language-markdown">
        - Review orders. <span style="color:green">+++++</span><span style="color:red">--</span>
        <ul class="contains-task-list">
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Stats by month, year quarters, and year.</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Stats by team and individual team member</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" /> <span style="color:red">-</span> Stats by division/department</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox"  /> <span style="color:red">-</span>  Stats by coustomer of each member</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Best preformance member of the month</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Best member sales of current day</li>
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Best team sales of current day.</li>
        </ul>
    </p>
</li>
<h3 id="permissions"><a class="header-link" href="#permissions"></a>Permissions and access levels</h3>
<pre><code class="language-php">
is_permission [ 
    '0' => 'User', 011, 021, 031, 041
    '1' => 'Admin', 010, 020, 030, 040
    '2' => 'SuperAdmin' 000000
    ];
</code></pre>
<pre><code class="language-markdown">
Tree [SG]

        * byDistriputionChannel
            -&gt; HASSAN M. RABAH 000000
                - Retail
                    -&gt; BASHAR AL DALAA  / KA MANAGER 001010
                        -&gt; FIRAS / KA SUPERVISOR  CSZ 001020
                            -&gt; Michael 001021
                            -&gt; Fahad 001022
                            -&gt; Abdalla Naser 001023
                            -&gt; M. Sayed 001024
                            -&gt; A. Medhat 001025
                            -&gt; Wail 001026
                        -&gt; Hazem / KA SUPERVISOR  CSL 001030
                            -&gt; Noufal 001031
                            -&gt; Ruben M. 001032
                            -&gt; Samsudin 001033
                            -&gt; Osama M.R. 001034
                        -&gt; M. Awaden  / KA SUPERVISOR CTK 001040
                            -&gt; A. Shawky 001041
                            -&gt; Hassan Fathi 001042
                            -&gt; Hesham 001043
                            -&gt; M. Hassan 001044
                        -&gt; WAEL GHAZI / KA SUPERVISOR Qaseem 001110
                            -&gt; Suneer 001111
                            -&gt; Fahad Hussein 001112
                            -&gt; Sultan Salman 001113
                            -&gt; Medhat 001114
                - Whole Sale 
                    -&gt; Odeh Hersh 002010
                        -&gt; Elsayed M. Ibrahim 002011
                        -&gt; Anas 002012
                        -&gt; Mujahed Radwan 002013
                        -&gt; Amr M. Eisa 002014

                    -&gt; WS channel Qaseem 002110
                        -&gt; Moneer 002111
                        -&gt; Nasser Ahmed 002112
                    
                - Food Service
                - Van

-------------------------------------

            6 digits structre

                001 = Retail
                    010 = SUPERVISOR
                        011 = User
                002 = WS
                    020 = SUPERVISOR
                        021 = User    
                003 = FS
                    030 = SUPERVISOR
                        031 = User
                004 = VAN
                    040 = SUPERVISOR
                        041 = User
</code></pre>
<hr />
<pre><code class="language-php">
PHP Code:
$suaccesslevel = User::select()-&gt;where('is_permission', '=', '2')-&gt;get();
$adminsaccesslevel = User::select()-&gt;where('is_permission', '=', '1')-&gt;get();
$usersaccesslevel = User::select()-&gt;where('is_permission', '=', '0')-&gt;get();
    /* Head Manager */
    $hasanrabah = User::select()-&gt;where('id', '=', '6')-&gt;get();
        /* KA MANAGER */
        $bashar =  User::select()-&gt;where('dc', '=', '001010')-&gt;get();
            /* KA SUPERVISOR  CSZ */
            $firas = User::select()-&gt;where('dc', '=', '001020')-&gt;get();
                $firasteam = User::select()-&gt;where('dc', 'like', '00102%')-&gt;get();
            /* KA SUPERVISOR  CSL */
            $hazem = User::select()-&gt;where('dc', '=', '001030')-&gt;get();
                $hazemteam =  User::select()-&gt;where('dc', 'like', '00103%')-&gt;get();
            /* KA SUPERVISOR CTK */
            $awaden = User::select()-&gt;where('dc', '=', '001040')-&gt;get();
                $awadenteam = User::select()-&gt;where('dc', 'like', '00104%')-&gt;get();
                /* WS MANAGER */ 
            $odeh = User::select()-&gt;where('dc', '=', '002010')-&gt;get();
                $odehteam = User::select()-&gt;where('dc', 'like', '00201%')-&gt;get(); 

</code></pre>

<h3 id="sequence-ranges"><a class="header-link" href="#sequence-ranges"></a> Sequence ranges</h3>
<pre><code class="language-php">
* Sequence tree

$staff->count(); // = 17 Member
    - michael -&gt; ' 0010210 - 001021999999 '
    - fahaddahasy -&gt; ' 0010220 - 001022999999 '
    - abdullahnaser -&gt; ' 0010230 - 001023999999 '
    - mohammedsayed -&gt; ' 0010240 - 001024999999 '
    - ahmedmedhat -&gt; ' 0010250 - 001025999999 '
    - noufal -&gt; ' 0010310 - 001031999999 '
    - ruben -&gt; ' 0010320 - 001032999999 '
    - samsudin -&gt; ' 0010330 - 001033999999 '
    - osama -&gt; ' 0010340 - 001034999999 '
    - ahmedshawqy -&gt; ' 0010410 - 001041999999 '
    - hassanfathi -&gt; ' 0010420 - 001042999999 '
    - hashem -&gt; ' 0010430 - 001043999999 '
    - medhathassan -&gt; ' 0010440 - 001044999999 '
    - suneer -&gt; ' 0011110 - 001111999999 '
    - fahadhussein -&gt; ' 0011120 - 001112999999 '
    - sultansalman -&gt; ' 0011130 - 001113999999 '
    - medhat -&gt; ' 0011140 - 001114999999 '
</code></pre>
<h3 id="orders-_global-sorting--arrangement"><a class="header-link" href="#orders-_global-sorting--arrangement"></a>Orders $_GLOBAL Sorting &amp; Arrangement</h3>
<p><a href="http://cdn.ies.com/root/readme"></a></p>
<p><code>JustCreated Orders -&gt;orderBy('updated_at', 'asc');</code> ⬇️</p>
<p><code>Editing Orders -&gt;orderBy('updated_at', 'asc');</code> ⬇️</p>
<p><code>Reviewing Orders -&gt;orderBy('updated_at', 'asc');</code> ⬇️</p>
<p><code>Submitted Orders -&gt;orderBy('updated_at', 'asc');</code> ⬇️</p>
<p><code>Completed Orders -&gt;orderBy('updated_at', 'asc');</code> ⬇️</p>
<p><code>Items Insertion-&gt;orderBy('created_at', 'desc');</code> ⬆️</p>
<pre><code class="language-php">* Where Ascending
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
</code></pre>
<h3 id="date-time-formats"><a class="header-link" href="#date-time-formats"></a><i class="far fa-calendar-alt"></i> Date Time Formats</h3>
<pre><code class="language-php">
$today = date(&quot;d/m/y g:ia&quot;); ->most_used_date_format 
$today = date(&quot;d/m/y | g:i a&quot;);
$today = date(&quot;dmy | g:i a&quot;);
$today = date(&quot;F j, Y, g:i a&quot;);
$today = date(&quot;m.d.y&quot;);
$today = date(&quot;j, n, Y&quot;);
$today = date(&quot;Ymd&quot;);
$today = date('h-i-s, j-m-y, it is w Day');
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');
$today = date(&quot;D M j G:i:s T Y&quot;);
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');
$today = date(&quot;H:i:s&quot;);
$today = date(&quot;Y-m-d H:i:s&quot;);

/* RESULTS */

string(16) "09/05/19 10:06pm" ->most_used_date_format 
string(19) "09/05/19 | 10:06 pm"
string(17) "090519 | 10:06 pm"
string(21) "May 9, 2019, 10:06 pm"
string(8) "05.09.19"
string(10) "9, 5, 2019"
string(8) "20190509"
string(38) "10-06-27, 9-05-19, 0631 0627 4 Thupm19"
string(18) "it is the 9th day."
string(27) "Thu May 9 22:06:27 +03 2019"
string(19) "22:05:27 m is month"
string(8) "22:06:27"
string(19) "2019-05-09 22:06:27"
</code></pre>

<h3 id="search_engine"><a class="header-link" href="#search_engine"></a><i class="fas fa-search"></i> Search Engine</h3>


<li><p></p>
<h5 id="search-terms">Search Terms:</h5>
<ul>
<li><p>By Staff Name or ID</p>
<pre><code class="language-sql">
+---------------+---------+
| staffname     | staffid |
+---------------+---------+
| Micheal Lanes |    1275 |
+---------------+---------+
</code></pre>

</li>
<li><p>2019-04-20 by date search format or time 11:22:07</p>

<pre><code class="language-sql">
+---------------------+
| created_at          |
+---------------------+
| 2019-04-20 11:22:07 |
+---------------------+
</code></pre>
</li>
<li><p>Processed by:  5303</p>
<pre><code class="language-sql">
+-------------+
| processedby |
+-------------+
| 5303        |
+-------------+
</code></pre>
</li>
<li>Any part of a slug: randomly generated 8 digits number starts with <code>00008</code> or <code>00007</code> combined with PO number seperated by hyphin <code>&quot;-&quot;</code> with no spaces in between.</li>
<pre><code class="language-sql">

+----------------------+
| slug                 |
+----------------------+
| 00008439484-11639587 |
+----------------------+
</code></pre>
</li>
<li><p>By Customer name or number</p>
<pre><code class="language-sql">
+------------------------------------------+
| branchname                               |
+------------------------------------------+
| 302863-Danube Co. Limited - 125 Panorama |
+------------------------------------------+
</code></pre>
</li>
<li><p>By Order status</p>
<pre><code class="language-sql">
+-------------+
| status      |
+-------------+
| Completed   |
+-------------+
| Submitted   |
+-------------+
| Reviewing   |
+-------------+
| Editing     |
+-------------+
| JustCreated |
+-------------+
</code></pre>
</li>
</ul>

<h3 id="archiving"><a class="header-link" href="#archiving"></a><i class="fa fa-archive"></i> Archiving &amp; orders history</h3>
<ul>


    <p class="language-markdown">
        - Orders history. <span style="color:green">+</span>
        <ul class="contains-task-list">
            <li class="task-list-item"><input disabled="disabled" type="checkbox" checked="checked" /> <span style="color:green">+</span> Orders older than two days will be archived, still accessable. But hidden from front, dashboard and stats views to avoid confusion N' load faster..</li>
        </ul>
    </p>


</ul>



<h3 id="sql"><a class="header-link" href="#sql"></a><i class="fa fa-database" aria-hidden="true"></i> SQL</h3>

<h3 id="mysql">MySql</h3>
<p>Login to <a href="{{ url('/pma') }}" target="_blank">phpMyAdmin</a> to manage connected sgdb0 database.</p>



<pre><code class="language-sql">     
    
usage: 
    INSERT INTO `tablename` VALUES ('val1', 'val2', 'val3');
    UPDATE `tablename` SET 'col'=`new_val` WHERE 'col'=`condition`;
    DELETE FROM `tablename` WHERE 'col'=`condition`;


mysql&gt; show tables;
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

</code></pre>   
<h5 id="orders"><a class="header-link" href="#orders"></a>Orders By Status in DB</h5>
<pre><code class="language-sql">      

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

</code></pre>
<h5 id="order-items"><a class="header-link" href="#order-items"></a>Order Items By Status in DB</h5>
<pre><code class="language-sql">      

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

</code></pre>
<h5 id="one-item-order-eg">One item order e.g.</h5>
<pre><code class="language-sql">                +------------+--------+---------------------------------------------------+----------+------+-------+-----------+
    -&gt; Header   | 40868653   | 303222 | NULL                                              |     NULL | NULL |  NULL |      NULL |
    -&gt; Items    | 40868653   | 303222 | 56060509 - SUNBULAH SHREDDED MOZZARELLA (6X1 KG)  | 56060509 |    7 |     0 |    193.00 |
                +------------+--------+---------------------------------------------------+----------+------+-------+-----------+

</code></pre>
<pre><code class="language-php">
    $today = date(&quot;Y-m-d&quot;, strtotime( '0 days' ) );	
    $todaysorderitems = OrderItems::whereNotNull('orderitems')-&gt;whereDate('created_at', $today )-&gt;where('orderstatus', '=', 'Completed' )-&gt;where('staffid', '=', $idnumber)-&gt;get();
    
</code></pre>


@markdown

###### CSV exported format vs. HTML copy & paste format:

![{{ asset('/images/assests/free.gif') }}]({{ asset('/images/assests/free.gif') }})

@endmarkdown


<h5 id="routes"><a class="header-link" href="#routes"></a>All Routes</h5>

<pre><code class="language-bash">

    C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>php artisan route:list
   
   {{ $routeslist }}
</code></pre>

<h5 id="all-orders"><a class="header-link" href="#all-orders"></a>All Orders</h5>

<pre><code class="language-sql">
mysql&gt; select * from orders;

<!--{{ $outputt }}-->

</code></pre>

<h5 id="all-items"><a class="header-link" href="#all-items"></a>All Items</h5>


<pre><code class="language-sql">

mysql&gt; select * from itemsv2;


    
</code></pre>







<h3 id="banner"><a class="header-link" href="#banner"></a>Banner</h3>
<script src="https://gist.github.com/sgframework/55af49af1fa53973fa3d41f51b2938cd.js"></script>




<h5 id="banner-bat"><a class="header-link" href="#banner-bat"></a>Banners</h5>

<script src="https://gist.github.com/sgframework/777536b600117a959c7acfac64bbeab1.js"></script>

<pre style="background-color:black;text-align:center"><code style="color:red;" class="language-cmd">


{{ shell_exec('cd ./cmd && banner.bat') }}


</code></pre>
<pre style="background-color:black;text-align:center"><code style="color:#ddd;" class="language-cmd">


{{ shell_exec('cd ./cmd && banner.bat') }}


</code></pre>
<pre style="background-color:black;text-align:center"><code style="color:red;" class="language-markdown">


{{ shell_exec('cd ./cmd && banner.bat') }}


</code></pre>
<pre style="background-color:black;text-align:center"><code style="color:red;" class="language-js">

' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  '
'    _____             __          __      __       ______                      '
'   / ___/__  ______  / /_  __  __/ /___ _/ /_     / ____/________  __  ______  '
'   \__ \/ / / / __ \/ __ \/ / / / / __ `/ __ \   / / __/ ___/ __ \/ / / / __ \ '
'  ___/ / /_/ / / / / /_/ / /_/ / / /_/ / / / /  / /_/ / /  / /_/ / /_/ / /_/ / '
' /____/\__,_/_/ /_/_.___/\__,_/_/\__,_/_/ /_/   \____/_/   \____/\__,_/ .___/  '
'                                                                   /_/         '
' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  '
</code></pre>
<pre style="background-color:black;text-align:left"><code style="color:red;" class="language-cmd">


{{ shell_exec('cd ./cmd && skull-banner.bat') }}


</code></pre>


<h3 id="github"><a class="header-link" href="#github"></a><i class="fab fa-github" aria-hidden="true"></i> Github</h3>

Get started by cloning into project's repository after installing <a href="https://desktop.github.com/"><i class="fab fa-github" aria-hidden="true"></i> GitHub Desktop</a>
<br /><em>run CMD or terminal and enter the follwing commands.</em>
<pre><code class="language-shell">   

root@0x01:~# git clone https://github.com/sgframework/cdn.git
Cloning into 'cdn'...
remote: Enumerating objects: 624, done.
remote: Counting objects: 100% (624/624), done.
remote: Compressing objects: 100% (359/359), done.
remote: Total 2368 (delta 335), reused 463 (delta 236), pack-reused 1744
Receiving objects: 100% (2368/2368), 105.61 MiB | 10.42 MiB/s, done.
Resolving deltas: 100% (1254/1254), done.
root@0x01:~# cd cdn
root@0x01:~/cdn# ls
 CODE_OF_CONDUCT.md   app         composer.json   config.json         package.json   readme.md   server.php  'view('\''vendor.html.layout'\'')'
 CONTRIBUTING.md      artisan     composer.lock   database            phpunit.xml    resources   storage      web.config
 LICENSE              bootstrap   config          package-lock.json   public         routes      tests        webpack.mix.js

</code></pre>

After finish editing you can first stage the changes you have made by:

<pre><code class="language-shell">   
git stage index.blade.php composer.json web.php
</code></pre>

After staging changes you can now commit and must commit with a massage <code>-m</code>

<pre><code class="language-shell">   
git commit -m prod-v2.09
</code></pre>

Last thing you'll need to push to master repository:

<pre><code class="language-shell">   
git push
</code></pre>

If changes been made to master repository you'll need to pull to sync:

<pre><code class="language-shell">   
git pull
</code></pre>





<h5 id="you-are-here"><a class="header-link" href="#you-are-here"></a>Working Directory</h5>

<pre style="background-color:black;"><code style="color:#ddd;" class="language-cmd">

C:\>cd C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\resources\views\root\md && dir
{{ shell_exec('cd ../resources/views/root/md && dir') }}
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\resources\views\root\md>


</code></pre>

<h5 id="JSExecutableCommands"><a class="header-link" href="#JSExecutableCommands"></a>JS Executable Commands</h5>

<pre style="background-color:black;"><code style="color:#ddd;" class="language-cmd">

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\public\cmd>node cmd.js
{{ shell_exec('cd ./cmd && node cmd.js') }}
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\public\cmd>

</code></pre>


<h5 id="poweredby"><a class="header-link" href="#poweredby"></a>Powered By</h5>

<div style="text-align:center;margin: 30px;padding: 20px;border: dotted black 2px;">
    <img src="{{ asset('images/assests/php.jpg') }}" style="padding:20px" width="40px" height="25px" /> php <img src="{{ asset('images/assests/mysql.png') }}" style="padding:20px" width="40px" height="25px" /> MySql <img src="{{ asset('images/assests/js.png') }}" style="padding:20px" width="40px" height="30px" /> JavaScript  <img src="{{ asset('images/assests/npm.png') }}" style="padding:20px" width="45px" height="22px" /> npm <a href="https://www.npmjs.org/package/sgcdn" rel="nofollow"><img src="http://img.shields.io/npm/v/sgcdn.svg?style=flat" alt="NPM Version"></a>
 <br /> <img src="{{ asset('images/assests/nodejs.png') }}" style="padding:20px" width="40px" height="25px" /> NodeJS  <img src="{{ asset('images/assests/jquery.gif') }}" style="padding:20px" width="40px" height="25px" /> jQuery  <img src="{{ asset('images/assests/python.png') }}" style="padding:20px" width="60px" height="40px" /> Python  <img src="{{ asset('images/assests/ruby.jpg') }}" style="padding:20px" width="35px" height="25px" /> Ruby 
</div>

<div style="text-align:center;margin: 30px;padding: 20px">
    Source <code>code</code> written by <img src="{{ asset('images/assests/vsc.png') }}" style="padding:20px" width="120px" height="60px" />, managed and controlled by <i class="fab fa-github"></i> GitHub
</div>

</article>

@endsection