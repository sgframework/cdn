@extends('layouts.root')
@section('content')



<link href="{{ asset('css/assets/css/github-markdown.css') }}" rel="stylesheet">
<article class="markdown-body">

        <img src="{{ asset('images/assests/sgimg.png') }}" align="right" style="height: 64px"/>
        <h1 id="welcome-to-sunbulah-group-framework"><a class="header-link" href="#welcome-to-sunbulah-group-framework"></a> SunbulahGroup Developers Portal</h1>
        <span><a href="https://badge.fury.io/js/sgcdn"><img src="https://badge.fury.io/js/sgcdn.png" alt="npm version" height="18"></a></span> <span><a href="https://badge.fury.io/py/sgpy"><img src="https://badge.fury.io/py/sgpy.png" alt="PyPI version" height="18"></a></span> <span><a href="https://www.npmjs.org/package/sgcdn" rel="nofollow"><img src="http://img.shields.io/npm/v/sgcdn.svg?style=flat" alt="NPM Version"></a> <a href="https://saythanks.io/to/sgframework"><img src="https://img.shields.io/badge/Say%20Thanks-!-1EAEDB.svg" alt="Say Thanks!" /></a></span> <span><a href="https://badge.fury.io/rb/xss"><img src="https://badge.fury.io/rb/xss.svg" alt="Gem Version" height="18"></a> </span>  <span><a href="https://www.rubydoc.info/gems/xss/0.0.0">xss/info</a></span><pre style="background-color:black;text-align: center;"><code style="color:red;" class="language-cmd">


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
<h2 id="server-environemt--requirments">Server Environemt &amp; Requirments.</h2>
<h4 id="framework--api-required-packeges">Framework &amp; API Required Packeges:</h4>
<ul>
<li><strong>Git</strong> 2.21.0</li>
<li><strong>PHP</strong> 7.2.7^</li>
<li><strong>MySQL Server</strong> 5.5</li>
<li><strong>Composer</strong> 1.8.4</li>
<li><strong>Redis server</strong> 3.2.100</li>
</ul>
<h4 id="mail-server">Mail Server</h4>
<ul>
<li><strong>Default Mailing Server</strong></li>
</ul>
<h4 id="clis--commandline-tools-recommended-packeges">CLIs &amp; Commandline Tools Recommended Packeges:</h4>
<ul>
<li><strong>NPM</strong> 6.4.1</li>
<li><strong>NodeJS</strong> 10.15.3</li>
<li><strong>Python</strong> 3.6^</li>
<li><strong>pip</strong> 9.0.1</li>
<li><strong>Ruby</strong> 3.6^</li>
<li><strong>Perl</strong> 5.8.8</li>
</ul>
<h3 id="trees">Trees</h3>
<ul>
<li><p><strong>PHP</strong> 7.2.7^</p>
<pre><code>  |
  |____ Web Server &amp; Platform.
  |   |
  |   |__________ Laravel Framework 5.8.18 (MVC) &quot;https://localhost/&quot;
  |   |__________ Mail Server &quot;https://localhost/mail&quot;
  |
  |____ Databases
  |   |
  |   |_________ MySql 
  |             |______phpMyAdmin &quot;https://localhost/pma&quot;
  |
  |
  |____ CLIs &amp; CMD Tools.
      |
      |__________ composer 1.8.4
      |
      |__________ artisan
</code></pre>
</li>
<li><p><strong>NPM</strong> 6.4.1</p>
</li>
<li><p><strong>Python</strong></p>
<pre><code>  |
  |____ Compilers &amp; Package Builders.
  |   |
  |   |__________ pip 19.1.1
  |   |
  |   |__________ wheel 0.33.4
</code></pre>
</li>
<li><p><strong>Ruby</strong> 3.6^</p>
<pre><code>  |
  |____ Compilers &amp; Package Builders.
  |   |
  |   |__________ Rake 12.3.2
  |   |
  |   |__________ Gem 2.5.5.157
  |   |
  |   |__________ Bundle 2.0.1
  |
  |____ CLIs
  |   |__________ irb
  |   |
  |   |__________ pry
  |
  |____ Web Server &amp; Platform
  |   |
  |   |__________ Rails (MVC)
  |
  |___ Documentation Server &amp; Generator.
      |
      |__________ Gem Server
      |
      |__________ yard
      |
      |__________ rdoc
</code></pre>
</li>
<li><p><strong>Perl</strong> 5.8.8</p>
<pre><code>  |
  |____ Archives
      |
      |__________ CPAN 0.33.4 ==archive of perl resources==
</code></pre>
</li>
</ul>


<h2 id="setup-dev-env"><a class="header-link" href="#setup-dev-env"></a> Setup Development Environment</h2>




<h3 id="github"><a class="header-link" href="#github"></a><i class="fab fa-github" aria-hidden="true"></i> Github</h3>

Get started by cloning into project's repository after installing <a href="https://desktop.github.com/"><img src="{{ asset('images/assests/github-desktop.png') }}" width="25px" height="25px" /> GitHub Desktop</a>
<br /><em style="font-size:12px">run CMD or terminal and enter the following commands.</em>
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





<h3 id="vsc"><a class="header-link" href="#vsc"></a><img src="{{ asset('images/assests/vsc.png') }}" width="80px" height="35px" />  Visual Studio Code</h3>

First install <strong><a href="https://code.visualstudio.com/download">VSC</a></strong>

<br />

Then install <strong>GitHub</strong> extension for VSC
<pre><code class="language-markdown">   

Name: GitHub
Id: knisterpeter.vscode-github
Description: Integrates github and its workflows into vscode
Version: 0.30.2
Publisher: KnisterPeter
VS Marketplace Link: <a href="https://marketplace.visualstudio.com/items?itemName=KnisterPeter.vscode-github">Install</a>

</code></pre>

Then clone into prject's repository by following <a class="header-link" href="#github">github</a> instructions above.

<div style="padding: 30px 30px 10px 30px;margin: 0px 40px 00px 40px;">
<img src="{{ asset('images/assests/vs1.png') }}" width="720px" height="420px" />

</div>
<div style="padding: 0px 30px 30px 30px; margin: 0px 40px 40px 40px;">

<img src="{{ asset('images/assests/vs2.png') }}" width="460px" height="320px" />

</div>


The main concept of the framework's functionality is a route passed as an array into a controller to be rendered by a view.
<br />
<h4>Repository Structre:</h4>

<pre style="background-color:black;"><code style="color:#ddd;" class="language-cmd">
Microsoft Windows [Version 10.0.17763.503]
(c) 2018 Microsoft Corporation. All rights reserved.

F:\BACKUPS\SG\prod-v2.00\cdn>tree
Folder PATH listing for volume 3TB
Volume serial number is D8D9-4ABE
F:.
├───<span style="font-size:16px"><b>app</b></span>
│   ├───Charts
│   ├───Console
│   │   └───Commands
│   ├───Exceptions
│   ├───Http
│   │   ├───<strong>Controllers</strong>
│   ├───Mail
│   ├───<strong>Models</strong>
│   ├───Notifications
│   └───Providers
├───<span style="font-size:16px"><b>database</b></span>
│   ├───factories
│   ├───<strong>migrations</strong>
│   └───seeds
├───<span style="font-size:16px"><b>resources</b> </span><em style="font-size:9px">Where views are rendered from</em>
│   ├───js
│   ├───lang
│   ├───sass
│   └───<strong>views</strong>
│       ├───auth
│       ├───branches
│       ├───dashboard
│       ├───errors
│       ├───global
│       ├───items
│       ├───layouts
│       ├───orders
│       ├───process
│       ├───profile
│       ├───root
│       │   ├───md 
│       │   │   └───dev.blade.php <-- You Are Here 
│       │   ├───orders
│       │   ├───partials
│       │   └───stats
│       ├───rtv
│       ├───search
├───<span style="font-size:16px"><b>routes</b> </span><em style="font-size:9px">Where views are defined</em>
├───<span style="font-size:16px"><b>public</b> </span><em style="font-size:9px">Where all public resources are stored.</em>
│   ├───attachments
│   │   ├───pos
│   │   │   ├───1141
│   │   │   ├───1171
│   │   │   ├───1275
│   │   │   ├───1555
│   │   │   ├───1621
│   │   │   ├───1869
│   │   │   ├───2409
│   │   │   ├───2508
│   │   │   ├───2745
│   │   │   ├───3761
│   │   │   ├───4241
│   │   │   ├───4401
│   │   │   ├───4417
│   │   │   ├───466
│   │   │   ├───4688
│   │   │   └───5275
│   │   └───zip
│   ├───cmd
│   ├───orders
│   │   ├───1141
│   │   ├───1171
│   │   ├───1275
│   │   ├───1555
│   │   ├───1621
│   │   ├───1869
│   │   ├───2409
│   │   ├───2508
│   │   ├───2745
│   │   ├───3761
│   │   ├───4241
│   │   ├───4401
│   │   ├───4417
│   │   ├───466
│   │   ├───4688
│   │   └───5275
│   ├───reports
│   │   ├───1141
│   │   ├───1171
│   │   ├───1275
│   │   ├───1555
│   │   ├───1621
│   │   ├───1869
│   │   ├───2409
│   │   ├───2508
│   │   ├───2745
│   │   ├───3761
│   │   ├───4241
│   │   ├───4401
│   │   ├───4417
│   │   ├───466
│   │   ├───4688
│   │   └───5275
├───<span style="font-size:16px"><b>sgcdn</b></span> NPM<span style="color:#0099cc"> (master) </span>repository
│   ├───bin
│   └───sgnode
├───<span style="font-size:16px"><b>sgpy</b></span> Python<span style="color:#0099cc"> (master) </span>repository
└───<span style="font-size:16px"><b>x_SGDC</b></span> Ruby<span style="color:#0099cc"> (master) </span>repository
    ├───bin
    └───lib



</code></pre>

<div style="padding:30px;margin:40px">


<img src="{{ asset('images/assests/vs3.png') }}" />

</div>
<div style="padding:30px;margin:40px">


<img src="{{ asset('images/assests/vs4.png') }}" />

</div>
<div style="padding:30px;margin:40px">


<img src="{{ asset('images/assests/vs5.png') }}" />

</div>
<div style="padding:30px;margin:40px">


<img src="{{ asset('images/assests/push.png') }}" />
</div>


<h2>SERVER SIDE</h2>
<h3 id="php"><a class="header-link" href="#php"></a><img src="{{ asset('images/assests/php.png') }}" width="80px" height="35px" /> Composer, Artisan</h3>
<h4>Composer</h4>
<p>To include a package using composer</p>
<p><b>manually</b> including composer packages</p>
<ul>
    <li>Add declaration manually into <code>composer.json</code> (in "require" section)</li>
Add the ServiceProvider in <code>config/app.php</code>
<pre style="font-size:10px"><code class="language-php">

'providers' => [
    /*
     * Package Service Providers...
     */
    Maatwebsite\Excel\ExcelServiceProvider::class,
]
</code></pre>
    <li>Add Class Aliases in <code>config/app.php</code></li>

    <pre style="font-size:10px"><code class="language-php">

'aliases' => [

    'Excel' => Maatwebsite\Excel\Facades\Excel::class,
]
</code></pre>
</ul>
<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider"
</code></pre>


<p><b>via composer</b></p>

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>composer require <span style="color:green"><</span><span style="color:green">backage name></span>
</code></pre>

<p>Then run</p>

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>composer update
</code></pre>

<p>To remove a package using composer</p>
<ul>
    <li>Remove declaration from composer.json (in "require" section)</li>
    <li>Remove any Class Aliases from app.php.</li>
    <li>Remove any references to the package from my code :-)</li>
</ul>

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd"> 
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>composer update
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>composer dump-autoload
</code></pre>

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>composer --help
Usage:
  help [options] [--] [<command_name>]

Arguments:
  command                        The command to execute
  command_name                   The command name [default: "help"]

Options:
      --xml                      To output help as XML
      --format=FORMAT            The output format (txt, xml, json, or md) [default: "txt"]
      --raw                      To output raw command help
  -h, --help                     Display this help message
  -q, --quiet                    Do not output any message
  -V, --version                  Display this application version
      --ansi                     Force ANSI output
      --no-ansi                  Disable ANSI output
  -n, --no-interaction           Do not ask any interactive question
      --profile                  Display timing and memory usage information
      --no-plugins               Whether to disable plugins.
  -d, --working-dir=WORKING-DIR  If specified, use the given directory as working directory.
  -v|vv|vvv, --verbose           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Help:
  The help command displays help for a given command:

    php C:\composer\composer.phar help list

  You can also output the help in other formats by using the --format option:

    php C:\composer\composer.phar help --format=xml list

  To display the list of available commands, please use the list command.




</code></pre>

<h4>Artisan</h4>
Most Important Artisan Commands
<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>php artisan --help
Usage:
  command [options] [arguments]

Options:
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
      --env[=ENV]       The environment the command should run under
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  clear-compiled       Remove the compiled class file
  down                 Put the application into maintenance mode
  dump-server          Start the dump server to collect dump information.
  env                  Display the current framework environment
  help                 Displays help for a command
  inspire              Display an inspiring quote
  list                 Lists commands
  migrate              Run the database migrations
  optimize             Cache the framework bootstrap files
  preset               Swap the front-end scaffolding for the application
  serve                Serve the application on the PHP development server
  tinker               Interact with your application
  up                   Bring the application out of maintenance mode
 app
  app:name             Set the application namespace
 auth
  auth:clear-resets    Flush expired password reset tokens
 cache
  cache:clear          Flush the application cache
  cache:forget         Remove an item from the cache
  cache:table          Create a migration for the cache database table
 command
  command:orders       Get All Orders...
 config
  config:cache         Create a cache file for faster configuration loading
  config:clear         Remove the configuration cache file
 db
  db:seed              Seed the database with records
 event
  event:cache          Discover and cache the application's events and listeners
  event:clear          Clear all cached events and listeners
  event:generate       Generate the missing events and listeners based on registration
  event:list           List the application's events and listeners
 get
  get:stats            Command description
 key
  key:generate         Set the application key
 make
  make:auth            Scaffold basic login and registration views and routes
  make:channel         Create a new channel class
  make:chart           Creates a new chart
  make:command         Create a new Artisan command
  make:controller      Create a new controller class
  make:event           Create a new event class
  make:exception       Create a new custom exception class
  make:export          Create a new export class
  make:factory         Create a new model factory
  make:import          Create a new import class
  make:job             Create a new job class
  make:listener        Create a new event listener class
  make:mail            Create a new email class
  make:middleware      Create a new middleware class
  make:migration       Create a new migration file
  make:model           Create a new Eloquent model class
  make:notification    Create a new notification class
  make:observer        Create a new observer class
  make:policy          Create a new policy class
  make:provider        Create a new service provider class
  make:request         Create a new form request class
  make:resource        Create a new resource
  make:rule            Create a new validation rule
  make:seeder          Create a new seeder class
  make:test            Create a new test class
 migrate
  migrate:fresh        Drop all tables and re-run all migrations
  migrate:install      Create the migration repository
  migrate:refresh      Reset and re-run all migrations
  migrate:reset        Rollback all database migrations
  migrate:rollback     Rollback the last database migration
  migrate:status       Show the status of each migration
 notifications
  notifications:table  Create a migration for the notifications table
 optimize
  optimize:clear       Remove the cached bootstrap files
 package
  package:discover     Rebuild the cached package manifest
 queue
  queue:failed         List all of the failed queue jobs
  queue:failed-table   Create a migration for the failed queue jobs database table
  queue:flush          Flush all of the failed queue jobs
  queue:forget         Delete a failed queue job
  queue:listen         Listen to a given queue
  queue:restart        Restart queue worker daemons after their current job
  queue:retry          Retry a failed queue job
  queue:table          Create a migration for the queue jobs database table
  queue:work           Start processing jobs on the queue as a daemon
 route
  route:cache          Create a route cache file for faster route registration
  route:clear          Remove the route cache file
  route:list           List all registered routes
 schedule
  schedule:run         Run the scheduled commands
 session
  session:table        Create a migration for the session database table
 storage
  storage:link         Create a symbolic link from "public/storage" to "storage/app/public"
 vendor
  vendor:publish       Publish any publishable assets from vendor packages
 view
  view:cache           Compile all of the application's Blade templates
  view:clear           Clear all compiled view files

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>php artisan cache:clear
Application cache cleared!

  </code></pre>

<p>To create a new table in database, run the following command.</p>
<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>php artisan make:migration create_foo_table
Created Migration: 2019_05_24_132649_create_foo_table

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>cd database/migrations

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\database\migrations>dir
 Volume in drive C has no label.
 Volume Serial Number is 7276-2F1C

 Directory of C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\database\migrations

05/24/2019  01:26 PM     DIR           .
05/24/2019  01:26 PM     DIR           ..
04/22/2019  09:54 PM             1,156 2019_03_26_204242_create_users_table.php
03/27/2019  10:38 PM               683 2019_03_27_193702_create_password_resets_table.php
04/11/2019  12:32 PM             1,170 2019_03_27_193737_create_items_table.php
03/27/2019  11:32 PM               966 2019_03_27_194709_create_staff_table.php
05/05/2019  10:29 PM             1,585 2019_03_29_140749_create_orders_table.php
04/06/2019  02:40 PM               890 2019_03_29_142125_create_branches_table.php
03/31/2019  03:58 PM               713 2019_03_31_125820_create_statuses_table.php
05/05/2019  10:34 PM             2,044 2019_04_01_202640_create_orderitems_table.php
04/19/2019  04:10 PM             1,060 2019_04_19_155504_create_submitted_table.php
05/04/2019  08:26 PM             1,266 2019_05_04_193254_create_itemsv2_table.php
05/04/2019  07:42 PM               595 2019_05_04_194222_create_itemsv3_table.php
05/10/2019  02:21 AM               781 2019_05_10_022125_create_notifications_table.php
<b>05/24/2019  01:26 PM               583 2019_05_24_132649_create_foo_table.php</b>
05/16/2019  10:35 PM            33,364 cmd.sql
              14 File(s)         46,856 bytes
               2 Dir(s)  78,427,213,824 bytes free

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\database\migrations>
</code></pre>


<p>Create a new <b>Controller</b> by running the following command.</p>
<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>php artisan make:controller FooController
Controller created successfully.

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>cd app/Http/Controllers
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\app\Http\Controllers>
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\app\Http\Controllers>dir
 Volume in drive C has no label.
 Volume Serial Number is 7276-2F1C

 Directory of C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\app\Http\Controllers

05/24/2019  01:33 PM     DIR           .
05/24/2019  01:33 PM     DIR           ..
03/27/2019  05:59 PM     DIR           Auth
05/11/2019  12:51 AM             2,519 BranchesController.php
03/27/2019  07:05 PM               361 Controller.php
03/28/2019  02:16 AM               511 DashboardController.php
<b>05/24/2019  01:33 PM               120 FooController.php</b>
05/12/2019  12:18 AM           153,920 GlobalController.php
05/04/2019  06:39 PM               475 HomeController.php
05/11/2019  12:56 AM             2,981 ItemsController.php
04/02/2019  08:12 PM               601 MailController.php
05/18/2019  02:29 PM            43,848 OrdersController.php
03/28/2019  03:56 AM               507 ProcessController.php
05/24/2019  01:24 AM           157,090 ProfileController.php
05/24/2019  12:40 PM           263,651 RootController.php
03/29/2019  02:26 AM               510 RtvController.php
05/04/2019  08:39 PM             2,830 SearchController.php
05/14/2019  11:43 PM             1,970 UploadController.php
              15 File(s)        631,894 bytes
               3 Dir(s)  78,428,176,384 bytes free

</code></pre>


<p>Create a new <b>Model</b> by running the following command.</p>
<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>php artisan make:model Foo
Model created successfully.

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>cd app/Models

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\app\Models>dir
 Volume in drive C has no label.
 Volume Serial Number is 7276-2F1C

 Directory of C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\app\Models

05/04/2019  08:36 PM     DIR           .
05/04/2019  08:36 PM     DIR           ..
05/08/2019  11:03 PM             1,297 Branch.php
<b>05/24/2019  01:36 PM                99 Foo.php</b>
04/12/2019  07:58 PM             2,686 Item.php
05/11/2019  12:57 AM             2,742 Itemv2.php
03/27/2019  11:55 PM               289 Like.php
03/27/2019  11:55 PM               148 Link.php
05/08/2019  11:02 PM             6,422 Order.php
05/04/2019  09:47 PM             2,496 OrderItems.php
04/12/2019  06:18 PM             1,210 Root.php
03/27/2019  11:55 PM             1,040 Status.php
03/27/2019  11:55 PM               408 Upload.php
03/31/2019  04:20 PM             3,974 User.php
              11 File(s)         22,712 bytes
               2 Dir(s)  78,427,693,056 bytes free
</code></pre>

<h2>ANYWHERE ACCESS</h2>




<h3 id="vsc"><a class="header-link" href="#vsc"></a><img src="{{ asset('images/assests/npm.png') }}" width="80px" height="35px" />   <img src="{{ asset('images/assests/nodejs.png') }}" width="80px" height="35px" /> </h3>
<a href="https://badge.fury.io/js/sgcdn"><img src="https://badge.fury.io/js/sgcdn.png" alt="npm version" height="18"></a><br />
First <a href="https://nodejs.org/en/" target="_blank">download</a> & install <strong>NPM & NodeJS</strong> for windows.
<br />
on Linux Terminal

<pre><code class="language-bash">   

root@0x01:~# apt-get install npm nodejs 
root@0x01:~# npm -v
    5.8.0
root@0x01:~# node -v
    v10.15.2
root@0x01:~# npm i sgcdn
root@0x01:~# cd node_modules/sgcdn
root@0x01:~/node_modules/sgcdn# ls
    bin  index.js  obj  package.json  sgcdn-1.0.2.tgz  sgcdn.njsproj  sgcdn.sln
root@0x01:~/node_modules/sgcdn# cd bin
root@0x01:~/node_modules/sgcdn/bin# ls
    Microsoft.NodejsTools.WebRole.dll  cmd.js
root@0x01:~/node_modules/sgcdn/bin# node cmd.js
    This is a message from the sgcdn package HELLLOO
root@0x01:~/node_modules/sgcdn/bin#
</code></pre>
<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\.npm\sgnode>npm pack
npm notice
npm notice package: sgcdn@1.0.6
npm notice === Tarball Contents ===
npm notice 491B   package.json
npm notice 106B   index.js
npm notice 1.1kB  LICENSE
npm notice 606B   sgcdn-1.0.2.tgz
npm notice 3.7kB  sgcdn.njsproj
npm notice 1.1kB  sgcdn.sln
npm notice 49B    bin/cmd.js
npm notice 32.8kB bin/Microsoft.NodejsTools.WebRole.dll
npm notice 42B    obj/Debug/sgcdn.njsproj.CoreCompileInputs.cache
npm notice 349B   obj/Debug/sgcdn.njsproj.FileListAbsolute.txt
npm notice 4.0kB  obj/Debug/sgcdn.njsprojAssemblyReference.cache
npm notice 42B    obj/Release/sgcdn.njsproj.CoreCompileInputs.cache
npm notice === Tarball Details ===
npm notice name:          sgcdn
npm notice version:       1.0.6
npm notice filename:      sgcdn-1.0.6.tgz
npm notice package size:  22.5 kB
npm notice unpacked size: 44.4 kB
npm notice shasum:        018be498508a68b1c8764b3e330aecf256f22393
npm notice integrity:     sha512-W8fKH4nL3hZ3S[...]4OvgHPKNtzrTw==
npm notice total files:   12
npm notice
sgcdn-1.0.6.tgz

</code></pre>
<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  


                            :.:,:,                          
                          ` :.:,:,``                        
                          :`:.:,:,.:                        
                          :`:.:,:,.:                        
                          :`:.:,:,.:                        
                          ::;.:,::::                        
                          :`.::::.`:                        
                          :`  :;  `:                        
       :  :  :.           :`  ::  `:            :  :  `     
       ,:`.;. ;:          ::  :: `;:          `:, ;; :;`    
        `:, :: :;         :`::::::.:         ::` :: ;:      
       ,, :: :::,;        :` `::` `:        :::,:. ::       
        :: :; :: `;.      :`  ::  `:      `:: :; .:. ;:     
         :; :;`:  .::     ::  ::  ::     .:,  : :: .:,      
        ; ,;`.;:  , :;    :.:`::`;.:    ::`,  ::; ::        
        ::`.:;::: :  ,;   :` ,::, `:   ;;  : `;:,:; ,:      
         `::`   :;:   ::` :`  ::  `: `;;   :.:. .:;;;       
           :,    :;   , ;,;.  ::  .:::.,   ::     ;:        
            ::`::..:.``  : ;: :: :: :  ,  :;::  `:,         
             :;    `::`  :  .::::.  :  `.;,   ,;:`          
              .:`   :::  :    ;:    :  ,;`    ;:            
                ::::  :; :    :,    : :; ::: ::             
                 ::    ,::    :,    :;:    .:.              
                  :;  .:::,   :,   ,::.   :;                
                   .:::   ::  :,  :;  ::;;:                 
                  `::      ;; :, ::      :                  
             `.:;;:.::      ,::::,      ,:::.               
         .::::, :`   ::     `::;.      ::  .::;:`           
    `:::::  :`   :`   :::::::::;;:::  ::    :  ,;:::        
    .,` :`   :`   :,:::;:.   :,;   ,:::,   :    :``::::.    
    `,::::`   ::::::, `:     : ::    `::::;.   :    ::,::   
  `:::`   ::::::  ,`  :`    :,  :     :   :::::`   ::::     
     ,:::;:`  :   :   ;     ;   :,    :   ;  `:::::: `::::, 
 :::;:.   :   :   : .::    ;,    :    `,  ,   :  `::::,  `: 
 ,   `:::;,  .``:;:::`::::;:     ::::,`:::`:  .`  :` `::::. 
   .::,  : :::::`     :   ;,:   :;: `::` `:;:: :  `;::.  .;:
      ,::;:.`        ;`  `: :.  ; :`  .:     .:;:, : .::::  
      ,`            `:   :.  ; ;` ,:   :         ,::::`  .  
                    ;::::;   :::   :::,,:            ::     
                   `:   ;.:  ; ;  :::  .:                   
                   ;   `; ,`:. ,,`: :   ::                  
                  `; ``;.  ;;   ;:  ::   :                  
                  ;::`.;.  :.   :.  `;::::.                 
                 `:   :.:  :     ;  :;.  `;                 
                 :   .: `::.     : :``;   :`                
                .:.::;`  :;      `::  ;`  `:                
                ;:;:.;:  :.       ;   :::::;                
               .: : ;`:  :        `: `:: :.,:               
               ;`::.: :::`         : ;,,: ; :               
                 : ;`::::          ,;,: : :`::              
                ::.: : :`           ; ;.::.:                
                : :`::.:            ::`; : :                
                 .: : :`             : : :.,:               
                 :`:,                  ,: ;                 
                .:                      , ;`                
                                          .:                
                                          </code></pre>


<h3 id="python"><a class="header-link" href="#python"></a><img src="{{ asset('images/assests/python.png') }}" width="70px" height="80px" /></h3>
<a href="https://badge.fury.io/py/sgpy"><img src="https://badge.fury.io/py/sgpy.png" alt="PyPI version" height="18"></a> <br />
First <a href="https://www.python.org/downloads/" target="_blank">download</a> & install <strong>Python</strong> for windows.
<br />
on Linux Terminal

<pre><code class="language-bash">   
root@0x01:~# apt-get install python
root@0x01:~# git clone https://github.com/sgframework/sgpy.git
    Cloning into 'sgpy'...
    remote: Enumerating objects: 9, done.
    remote: Counting objects: 100% (9/9), done.
    remote: Compressing objects: 100% (8/8), done.
    remote: Total 9 (delta 1), reused 0 (delta 0), pack-reused 0
    Unpacking objects: 100% (9/9), done.
root@0x01:~# cd sgpy/
root@0x01:~/sgpy# ls
    LICENSE  README.md  x.py
root@0x01:~/sgpy# python x.py
    What do you want to search for ? >>
</code></pre>
<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy>python setup.py --help-commands
Standard commands:
  build             build everything needed to install
  build_py          "build" pure Python modules (copy to build directory)
  build_ext         build C/C++ extensions (compile/link to build directory)
  build_clib        build C/C++ libraries used by Python extensions
  build_scripts     "build" scripts (copy and fixup #! line)
  clean             clean up temporary files from 'build' command
  install           install everything from build directory
  install_lib       install all Python modules (extensions and pure Python)
  install_headers   install C/C++ header files
  install_scripts   install scripts (Python or otherwise)
  install_data      install data files
  sdist             create a source distribution (tarball, zip file, etc.)
  register          register the distribution with the Python package index
  bdist             create a built (binary) distribution
  bdist_dumb        create a "dumb" built distribution
  bdist_rpm         create an RPM distribution
  bdist_wininst     create an executable installer for MS Windows
  check             perform some checks on the package
  upload            upload binary package to PyPI

Extra commands:
  alias             define a shortcut to invoke one or more commands
  bdist_egg         create an "egg" distribution
  develop           install package in 'development mode'
  dist_info         create a .dist-info directory
  easy_install      Find/get/install Python packages
  egg_info          create a distribution's .egg-info directory
  install_egg_info  Install an .egg-info directory for the package
  rotate            delete older distributions, keeping N newest files
  saveopts          save supplied options to setup.cfg or other config file
  setopt            set an option in setup.cfg or another config file
  test              run unit tests after in-place build
  upload_docs       Upload documentation to PyPI

usage: setup.py [global_opts] cmd1 [cmd1_opts] [cmd2 [cmd2_opts] ...]
   or: setup.py --help [cmd1 cmd2 ...]
   or: setup.py --help-commands
   or: setup.py cmd --help


C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy>
</code></pre>

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy>python setup.py sdist
running sdist
running egg_info
writing sgpy.egg-info\PKG-INFO
writing dependency_links to sgpy.egg-info\dependency_links.txt
writing entry points to sgpy.egg-info\entry_points.txt
writing requirements to sgpy.egg-info\requires.txt
writing top-level names to sgpy.egg-info\top_level.txt
reading manifest file 'sgpy.egg-info\SOURCES.txt'
reading manifest template 'MANIFEST.in'
warning: no files found matching '*' under directory 'data'
writing manifest file 'sgpy.egg-info\SOURCES.txt'
running check
creating sgpy-1.0.3
creating sgpy-1.0.3\sgpy.egg-info
creating sgpy-1.0.3\src
creating sgpy-1.0.3\src\sgapi
creating sgpy-1.0.3\src\sgapi\data
copying files to sgpy-1.0.3...
copying LICENSE.txt -> sgpy-1.0.3
copying MANIFEST.in -> sgpy-1.0.3
copying README.md -> sgpy-1.0.3
copying setup.cfg -> sgpy-1.0.3
copying setup.py -> sgpy-1.0.3
copying sgpy.egg-info\PKG-INFO -> sgpy-1.0.3\sgpy.egg-info
copying sgpy.egg-info\SOURCES.txt -> sgpy-1.0.3\sgpy.egg-info
copying sgpy.egg-info\dependency_links.txt -> sgpy-1.0.3\sgpy.egg-info
copying sgpy.egg-info\entry_points.txt -> sgpy-1.0.3\sgpy.egg-info
copying sgpy.egg-info\requires.txt -> sgpy-1.0.3\sgpy.egg-info
copying sgpy.egg-info\top_level.txt -> sgpy-1.0.3\sgpy.egg-info
copying src\sgapi\__init__.py -> sgpy-1.0.3\src\sgapi
copying src\sgapi\main.py -> sgpy-1.0.3\src\sgapi
copying src\sgapi\x.py -> sgpy-1.0.3\src\sgapi
copying src\sgapi\data\flash.dat -> sgpy-1.0.3\src\sgapi\data
Writing sgpy-1.0.3\setup.cfg
Creating tar archive
removing 'sgpy-1.0.3' (and everything under it)

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy>pip install -e .
Obtaining file:///C:/Program%20Files/Windows%20Server/Bin/WebApps/Site/cdn/sgpy
Requirement already satisfied: peppercorn in c:\program files\python37\lib\site-packages (from sgpy==1.0.3) (0.6)
Installing collected packages: sgpy
  Found existing installation: sgpy 1.0.3
    Uninstalling sgpy-1.0.3:
      Successfully uninstalled sgpy-1.0.3
  Running setup.py develop for sgpy
Successfully installed sgpy

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy>twine upload --skip-existing dist/*
Enter your username: sgpy
Enter your password:
Uploading distributions to https://upload.pypi.org/legacy/
  Skipping sgpy-1.0.1-py2.py3-none-any.whl because it appears to already exist
  Skipping sgpy-1.0.1-py3.7.egg because it appears to already exist
  Skipping sgpy-1.0.1.tar.gz because it appears to already exist
  Skipping sgpy-1.0.2.tar.gz because it appears to already exist
Uploading sgpy-1.0.3.tar.gz
100%|█████████████████████████████████████████████████████████████████████████████████████████████████████████████████████| 20.5k/20.5k [00:02<span><</span>00:00, 8.81kB/s]


C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy>python setup.py install
running install
running bdist_egg
running egg_info
writing sgpy.egg-info\PKG-INFO
writing dependency_links to sgpy.egg-info\dependency_links.txt
writing entry points to sgpy.egg-info\entry_points.txt
writing requirements to sgpy.egg-info\requires.txt
writing top-level names to sgpy.egg-info\top_level.txt
reading manifest file 'sgpy.egg-info\SOURCES.txt'
reading manifest template 'MANIFEST.in'
warning: no files found matching '*' under directory 'data'
writing manifest file 'sgpy.egg-info\SOURCES.txt'
installing library code to build\bdist.win-amd64\egg
running install_lib
running build_py
creating build\bdist.win-amd64\egg
creating build\bdist.win-amd64\egg\sgapi
copying build\lib\sgapi\chat.py -> build\bdist.win-amd64\egg\sgapi
creating build\bdist.win-amd64\egg\sgapi\data
copying build\lib\sgapi\data\flash.dat -> build\bdist.win-amd64\egg\sgapi\data
copying build\lib\sgapi\echo.py -> build\bdist.win-amd64\egg\sgapi
copying build\lib\sgapi\favicon.ico -> build\bdist.win-amd64\egg\sgapi
copying build\lib\sgapi\listen.py -> build\bdist.win-amd64\egg\sgapi
copying build\lib\sgapi\main.py -> build\bdist.win-amd64\egg\sgapi
copying build\lib\sgapi\server.py -> build\bdist.win-amd64\egg\sgapi
copying build\lib\sgapi\x.py -> build\bdist.win-amd64\egg\sgapi
copying build\lib\sgapi\__init__.py -> build\bdist.win-amd64\egg\sgapi
copying build\lib\sgapi\__main__.py -> build\bdist.win-amd64\egg\sgapi
byte-compiling build\bdist.win-amd64\egg\sgapi\chat.py to chat.cpython-37.pyc
byte-compiling build\bdist.win-amd64\egg\sgapi\echo.py to echo.cpython-37.pyc
byte-compiling build\bdist.win-amd64\egg\sgapi\listen.py to listen.cpython-37.pyc
byte-compiling build\bdist.win-amd64\egg\sgapi\main.py to main.cpython-37.pyc
byte-compiling build\bdist.win-amd64\egg\sgapi\server.py to server.cpython-37.pyc
byte-compiling build\bdist.win-amd64\egg\sgapi\x.py to x.cpython-37.pyc
byte-compiling build\bdist.win-amd64\egg\sgapi\__init__.py to __init__.cpython-37.pyc
byte-compiling build\bdist.win-amd64\egg\sgapi\__main__.py to __main__.cpython-37.pyc
installing package data to build\bdist.win-amd64\egg
running install_data
creating build\bdist.win-amd64\egg\data
copying src\sgapi\data\flash.dat -> build\bdist.win-amd64\egg\data
creating build\bdist.win-amd64\egg\EGG-INFO
copying sgpy.egg-info\PKG-INFO -> build\bdist.win-amd64\egg\EGG-INFO
copying sgpy.egg-info\SOURCES.txt -> build\bdist.win-amd64\egg\EGG-INFO
copying sgpy.egg-info\dependency_links.txt -> build\bdist.win-amd64\egg\EGG-INFO
copying sgpy.egg-info\entry_points.txt -> build\bdist.win-amd64\egg\EGG-INFO
copying sgpy.egg-info\requires.txt -> build\bdist.win-amd64\egg\EGG-INFO
copying sgpy.egg-info\top_level.txt -> build\bdist.win-amd64\egg\EGG-INFO
zip_safe flag not set; analyzing archive contents...
creating 'dist\sgpy-1.0.8-py3.7.egg' and adding 'build\bdist.win-amd64\egg' to it
removing 'build\bdist.win-amd64\egg' (and everything under it)
Processing sgpy-1.0.8-py3.7.egg
Removing c:\program files\python37\lib\site-packages\sgpy-1.0.8-py3.7.egg
Copying sgpy-1.0.8-py3.7.egg to c:\program files\python37\lib\site-packages
sgpy 1.0.8 is already the active version in easy-install.pth
Installing sgpy-script.py script to C:\Program Files\Python37\Scripts
Installing sgpy.exe script to C:\Program Files\Python37\Scripts

Installed c:\program files\python37\lib\site-packages\sgpy-1.0.8-py3.7.egg
Processing dependencies for sgpy==1.0.8
Searching for peppercorn==0.6
Best match: peppercorn 0.6
Adding peppercorn 0.6 to easy-install.pth file

Using c:\program files\python37\lib\site-packages
Finished processing dependencies for sgpy==1.0.8

</code></pre>


<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy\src>dir
 Volume in drive C has no label.
 Volume Serial Number is 7276-2F1C

 Directory of C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy\src

05/24/2019  10:45 PM     DIR           .
05/24/2019  10:45 PM     DIR           ..
05/24/2019  10:45 PM     DIR           sgapi
               0 File(s)              0 bytes
               3 Dir(s)  77,068,972,032 bytes free

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy\src>cd sgapi

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy\src\sgapi>dir
 Volume in drive C has no label.
 Volume Serial Number is 7276-2F1C

 Directory of C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy\src\sgapi

05/24/2019  10:45 PM     DIR           .
05/24/2019  10:45 PM     DIR           ..
05/24/2019  10:15 PM     DIR           data
05/24/2019  06:02 PM               129 main.py
05/24/2019  06:33 PM               190 pip-delete-this-directory.txt
05/24/2019  06:05 PM                41 x.py
05/24/2019  10:03 PM               112 __init__.py
               4 File(s)            472 bytes
               3 Dir(s)  77,068,972,032 bytes free

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy\src\sgapi>python main.py
Your IP is 5.132.219.28, 5.132.219.28

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy\src\sgapi>python x.py
Hello, World!



┌────────────────────────────────────────┐
│0: pip install -e .                     │
│1: python setup.py sdist                │
│2: pip install -e .                     │
│3: twine upload --skip-existing dist/*  │
│4: python setup.py sdist                │
│5: pip install -e .                     │
│6: twine upload --skip-existing dist/*  │
│7: python setup.py sdist                │
│8: pip install -e .                     │
│9: dir                                  │
└────────────────────────────────────────┘

</code></pre>

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Users\a7med\Desktop\development>pip install sgpy==1.0.1
Collecting sgpy==1.0.1
  Using cached https://files.pythonhosted.org/packages/b3/b5/6e148a8eaae37241cb931f59568392461db694197082d5e018bffc9ce2f3/sgpy-1.0.1-py2.py3-none-any.whl
Requirement already satisfied: peppercorn in c:\program files\python37\lib\site-packages (from sgpy==1.0.1) (0.6)
Installing collected packages: sgpy
Successfully installed sgpy-1.0.1
</code></pre>


<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Program Files\Python37\Scripts>sgpy
Call your main application code here

C:\>sgpy
Call your main application code here

</code></pre>

<h5 id="python-server-init"><a class="header-link" href="#python-server-init"></a> Python Server Initiation</h5>

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgpy\src\sgapi>python -m http.server 8000
Serving HTTP on 0.0.0.0 port 8000 (http://0.0.0.0:8000/) ...
127.0.0.1 - - [25/May/2019 00:42:12] "GET / HTTP/1.1" 200 -
127.0.0.1 - - [25/May/2019 00:42:12] code 404, message File not found
127.0.0.1 - - [25/May/2019 00:42:12] "GET /favicon.ico HTTP/1.1" 404 -
127.0.0.1 - - [25/May/2019 00:42:15] "GET /server.py HTTP/1.1" 200 -
127.0.0.1 - - [25/May/2019 00:42:19] "GET /x.py HTTP/1.1" 200 -
127.0.0.1 - - [25/May/2019 00:42:21] "GET /__init__.py HTTP/1.1" 200 -
127.0.0.1 - - [25/May/2019 00:42:23] "GET /data/ HTTP/1.1" 200 -
127.0.0.1 - - [25/May/2019 00:42:24] "GET /data/flash.csv HTTP/1.1" 200 -
127.0.0.1 - - [25/May/2019 00:42:26] "GET /data/flash.dat HTTP/1.1" 200 -
127.0.0.1 - - [25/May/2019 00:42:29] "GET /main.py HTTP/1.1" 200 -
127.0.0.1 - - [25/May/2019 00:42:34] "GET /pip-delete-this-directory.txt HTTP/1.1" 200 -
</code></pre>

<h3 id="ruby"><a class="header-link" href="#ruby"></a><img src="{{ asset('images/assests/ruby.jpg') }}" width="50px" height="50px" /> Ruby</h3>
<span><a href="https://badge.fury.io/rb/xss"><img src="https://badge.fury.io/rb/xss.svg" alt="Gem Version" height="18"></a></span> <span><a href="https://www.rubydoc.info/gems/xss/0.0.0">xss/info</a></span><br />
First <a href="https://rubyinstaller.org/downloads/" target="_blank">download</a> & install <strong>Ruby</strong> for windows.
<br />
on Linux Terminal

<pre><code class="language-bash">   

root@0x01:~# apt-get install ruby
root@0x01:~# gem install xss
    Fetching xss-0.0.0.gem
    Successfully installed xss-0.0.0
    Parsing documentation for xss-0.0.0
    Installing ri documentation for xss-0.0.0
    Done installing documentation for xss after 0 seconds
    1 gem installed
root@0x01:~# irb
    irb(main):001:0> require 'xss'
        => true
    irb(main):002:0> Xss.hi
        Hello world!
        => nil
    irb(main):003:0> quit()
root@0x01:~#
</code></pre>

<h5 id="bisc"><a class="header-link" href="#bisc"></a>Package build, install and push commands.</h5>


<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

xss.gemspec file 
    s.version  = '0.0.3'



C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem build xss
Successfully built RubyGem
  Name: xss
  Version: 0.0.3
  File: xss-0.0.3.gem

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem install xss
Successfully installed xss-0.0.3
Parsing documentation for xss-0.0.3
Installing ri documentation for xss-0.0.3
Done installing documentation for xss after 0 seconds
1 gem installed

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem push xss-0.0.3.gem
Pushing gem to https://rubygems.org...
Successfully registered gem: xss (0.0.3)

</code></pre>


<h5 id="gem"><a class="header-link" href="#gem"></a>Gem</h5>

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  



C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem install rake
Successfully installed rake-12.3.2
Parsing documentation for rake-12.3.2
Installing ri documentation for rake-12.3.2
Done installing documentation for rake after 0 seconds
1 gem installed
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem install rails
Successfully installed rails-5.2.3
Parsing documentation for rails-5.2.3
Done installing documentation for rails after 0 seconds
1 gem installed
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem install bundle
Fetching: bundle-0.0.1.gem (100%)
Successfully installed bundle-0.0.1
Parsing documentation for bundle-0.0.1
Installing ri documentation for bundle-0.0.1
Done installing documentation for bundle after 0 seconds
1 gem installed
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem install travis
Successfully installed travis-1.8.10
Parsing documentation for travis-1.8.10
Installing ri documentation for travis-1.8.10
Done installing documentation for travis after 1 seconds
1 gem installed

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem install xss -v 0.0.8
Temporarily enhancing PATH for MSYS/MINGW...
Building native extensions. This could take a while...
Thanks for installing SGRB!
Successfully installed xss-0.0.8-x64-mingw32
Done installing documentation for xss after 0 seconds
1 gem installed

</code></pre>






<h5 id="rails"><a class="header-link" href="#rails"></a>Rails.</h5>

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rails server -b cdn.ies.com -p 810
=> Booting Puma
=> Rails 5.2.3 application starting in development
=> Run `rails server -h` for more startup options
*** SIGUSR2 not implemented, signal based restart unavailable!
*** SIGUSR1 not implemented, signal based restart unavailable!
*** SIGHUP not implemented, signal based logs reopening unavailable!
Puma starting in single mode...
* Version 3.12.1 (ruby 2.5.5-p157), codename: Llamas in Pajamas
* Min threads: 5, max threads: 5
* Environment: development
* Listening on tcp://cdn.ies.com:810
Use Ctrl-C to stop

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rails about
About your application's environment
Rails version             5.2.3
Ruby version              2.5.5-p157 (x64-mingw32)
RubyGems version          2.7.6.2
Rack version              2.0.7
JavaScript Runtime        Duktape
Middleware                Rack::Sendfile, ActionDispatch::Static, ActionDispatch::Executor, ActiveSupport::Cache::Strategy::LocalCache::Middleware, Rack::Runtime, Rack::MethodOverride, ActionDispatch::RequestId, ActionDispatch::RemoteIp, Sprockets::Rails::QuietAssets, Rails::Rack::Logger, ActionDispatch::ShowExceptions, WebConsole::Middleware, ActionDispatch::DebugExceptions, ActionDispatch::Reloader, ActionDispatch::Callbacks, ActiveRecord::Migration::CheckPending, ActionDispatch::Cookies, ActionDispatch::Session::CookieStore, ActionDispatch::Flash, ActionDispatch::ContentSecurityPolicy::Middleware, Rack::Head, Rack::ConditionalGet, Rack::ETag, Rack::TempfileReaper
Application root          C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb
Environment               development
Database adapter          mysql2
Database schema version   0

$ rails -v
Rails 5.2.3

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rails stats
+----------------------+--------+--------+---------+---------+-----+-------+
| Name                 |  Lines |    LOC | Classes | Methods | M/C | LOC/M |
+----------------------+--------+--------+---------+---------+-----+-------+
| Controllers          |      2 |      2 |       1 |       0 |   0 |     0 |
| Helpers              |      2 |      2 |       0 |       0 |   0 |     0 |
| Jobs                 |      2 |      2 |       1 |       0 |   0 |     0 |
| Models               |      3 |      3 |       1 |       0 |   0 |     0 |
| Mailers              |      4 |      4 |       1 |       0 |   0 |     0 |
| Channels             |      8 |      8 |       2 |       0 |   0 |     0 |
| JavaScripts          |     29 |      4 |       0 |       1 |   0 |     2 |
| Libraries            |    661 |    454 |       1 |      70 |  70 |     4 |
| Controller tests     |      0 |      0 |       0 |       0 |   0 |     0 |
| Helper tests         |      0 |      0 |       0 |       0 |   0 |     0 |
| Model tests          |      0 |      0 |       0 |       0 |   0 |     0 |
| Mailer tests         |      0 |      0 |       0 |       0 |   0 |     0 |
| Integration tests    |      0 |      0 |       0 |       0 |   0 |     0 |
| System tests         |      0 |      0 |       0 |       0 |   0 |     0 |
+----------------------+--------+--------+---------+---------+-----+-------+
| Total                |    711 |    479 |       7 |      71 |  10 |     4 |
+----------------------+--------+--------+---------+---------+-----+-------+
  Code LOC: 479     Test LOC: 0     Code to Test Ratio: 1:0.0

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rails generate
Usage: rails generate GENERATOR [args] [options]

General options:
  -h, [--help]     # Print generator's options and usage
  -p, [--pretend]  # Run but do not make any changes
  -f, [--force]    # Overwrite files that already exist
  -s, [--skip]     # Skip files that already exist
  -q, [--quiet]    # Suppress status output

Please choose a generator below.

Rails:
  application_record
  assets
  channel
  controller
  generator
  helper
  integration_test
  jbuilder
  job
  mailer
  migration
  model
  resource
  scaffold
  scaffold_controller
  system_test
  task

ActiveRecord:
  active_record:application_record

Coffee:
  coffee:assets

Js:
  js:assets

TestUnit:
  test_unit:generator
  test_unit:plugin



</code></pre>

<h5 id="rake"><a class="header-link" href="#rake"></a>Rake.</h5>

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rake --tasks
rake build            # Build xss-0.0.0.gem into the pkg directory
rake clean            # Remove any temporary products
rake clobber          # Remove any generated files
rake compile          # Compile all the extensions
rake compile:sgrb     # Compile sgrb
rake install          # Build and install xss-0.0.0.gem into system gems
rake install:local    # Build and install xss-0.0.0.gem into system gems wi...
rake release[remote]  # Create tag v0.0.0 and build and push xss-0.0.0.gem ...
rake test             # Run tests



-- commandes summery for virsion control and biuld, push to master repo --



C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rake clean
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rake build
xss 0.0.3 built to pkg/xss-0.0.3.gem.

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rake install
xss 0.0.3 built to pkg/xss-0.0.3.gem.
xss (0.0.3) installed.

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rake release
xss 0.0.3 built to pkg/xss-0.0.3.gem.


C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>bundle
Fetching gem metadata from https://rubygems.org/.............
Resolving dependencies...
Using rake 12.3.2
Using bundler 2.0.1
Using power_assert 1.1.4
Using rake-compiler 1.0.7
Using xss 0.0.4 (was 0.0.3) from source at `.`
Using test-unit 3.3.3
Bundle complete! 3 Gemfile dependencies, 6 gems now installed.
Use `bundle info [gemname]` to see where a bundled gem is installed.

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>bundle
Fetching gem metadata from https://rubygems.org/.............
Resolving dependencies...
Using rake 12.3.2
Using bundler 2.0.1
Using power_assert 1.1.4
Using rake-compiler 1.0.7
Using xss 0.0.4 (x64-mingw32) from source at `.`
Using test-unit 3.3.3
Bundle complete! 3 Gemfile dependencies, 6 gems now installed.
Use `bundle info [gemname]` to see where a bundled gem is installed.
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb\pkg>bundle info xss
  * xss (0.0.4)
        Summary: xSGRB!
        Homepage: https://rubygems.org/gems/xss
        Path: C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rake build
xss 0.0.4 built to pkg/xss-0.0.4-x64-mingw32.gem.

</code></pre>
<h5 id="ruby"><a class="header-link" href="#ruby"></a><img src="{{ asset('images/assests/ruby.jpg') }}" width="50px" height="50px" /> Ruby Advanced.</h5>

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  


C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem install pry
Fetching: coderay-1.1.2.gem (100%)
Successfully installed coderay-1.1.2
Fetching: pry-0.12.2.gem (100%)
Successfully installed pry-0.12.2
invalid options: -SNw2
(invalid options are ignored)
Parsing documentation for coderay-1.1.2
Installing ri documentation for coderay-1.1.2
Parsing documentation for pry-0.12.2
Installing ri documentation for pry-0.12.2
Done installing documentation for coderay, pry after 6 seconds
2 gems installed

[5] pry(main)> require 'xss'
=> true
[6] pry(main)> Xss.hi
Hello world!
=> nil

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>pry
[1] pry(main)> @
At the top level.
[3] pry(main)> ls
self.methods: inspect  to_s
locals: _  __  _dir_  _ex_  _file_  _in_  _out_  _pry_
[4] pry(main)> cd _ex_
[5] pry(nil):1> ls
JSON::Ext::Generator::GeneratorMethods::NilClass#methods: to_json
NilClass#methods: &  ===  ^  __pry__  inspect  nil?  pretty_print_cycle  rationalize  to_a  to_c  to_f  to_h  to_i  to_r  to_s  |
locals: _  __  _dir_  _ex_  _file_  _in_  _out_  _pry_
[6] pry(nil):1> @
Inside nil.
[7] pry(nil):1> cd ..
[8] pry(main)> ls
self.methods: inspect  to_s
locals: _  __  _dir_  _ex_  _file_  _in_  _out_  _pry_
[9] pry(main)> cd _file_
[10] pry(nil):1> ls
JSON::Ext::Generator::GeneratorMethods::NilClass#methods: to_json
NilClass#methods: &  ===  ^  __pry__  inspect  nil?  pretty_print_cycle  rationalize  to_a  to_c  to_f  to_h  to_i  to_r  to_s  |
locals: _  __  _dir_  _ex_  _file_  _in_  _out_  _pry_
[11] pry(nil):1> cd ..
[12] pry(main)> ls
self.methods: inspect  to_s
locals: _  __  _dir_  _ex_  _file_  _in_  _out_  _pry_
[13] pry(main)> cd _in_
[14] pry(#<Pry::Ring>):1> ls
Pry::Ring#methods: <<  []  clear  count  max_size  size  to_a
self.methods: __pry__
instance variables: @buffer  @count  @max_size  @mutex
locals: _  __  _dir_  _ex_  _file_  _in_  _out_  _pry_
[15] pry(#<Pry::Ring>):1> count
=> 15
[16] pry(#<Pry::Ring>):1> count
=> 16
[17] pry(#<Pry::Ring>):1> @
Inside #<Pry::Ring>.

[18] pry(#<Pry::Ring>):1> max_size
=> 100
[19] pry(#<Pry::Ring>):1> clear
=> 0
[1] pry(#<Pry::Ring>):1> []
=> []
[2] pry(#<Pry::Ring>):1> ['hello']
=> ["hello"]
[3] pry(#<Pry::Ring>):1> print "hola"
hola=> nil
[10] pry(#<Pry::Ring>):1> .sgpy
Call your main application code here
[4] pry(#<Pry::Ring>):1> help
Help
  help               Show a list of commands or information about a specific command.

Context
  cd                 Move into a new context (object or scope).
  find-method        Recursively search for a method within a class/module or the current namespace.
  ls                 Show the list of vars and methods in the current scope.
  pry-backtrace      Show the backtrace for the pry session.
  raise-up           Raise an exception out of the current pry instance.
  reset              Reset the repl to a clean state.
  watch              Watch the value of an expression and print a notification whenever it changes.
  whereami           Show code surrounding the current context.
  wtf?               Show the backtrace of the most recent exception.

Editing
  /^\s*!\s*$/        Clear the input buffer.
  amend-line         Amend a line of input in multi-line mode.
  edit               Invoke the default editor on a file.
  hist               Show and replay readline history.
  play               Playback a string variable, method, line, or file as input.
  show-input         Show the contents of the input buffer for the current multi-line expression.

Introspection
  ri                 View ri documentation.
  show-doc           Show the documentation for a method or class.
  show-source        Show the source for a method or class.
  stat               View method information and set _file_ and _dir_ locals.

Gems
  gem-cd             Change working directory to specified gem's directory.
  gem-install        Install a gem and refresh the gem cache.
  gem-list           List and search installed gems.
  gem-open           Opens the working directory of the gem in your editor.
  gem-readme         Show the readme bundled with a rubygem
  gem-search         Search for a gem with the rubygems.org json api
  gem-stat           Show the statistics of a gem (requires internet connection)

Commands
  import-set         Import a pry command set.
  install-command    Install a disabled command.

Aliases
  !!!                Alias for `exit-program`
  !!@                Alias for `exit-all`
  $                  Alias for `show-source`
  (?-mix:whereami[!?]+) Alias for `whereami`
  ?                  Alias for `show-doc`
  @                  Alias for `whereami`
  clipit             Alias for `gist --clip`
  file-mode          Alias for `shell-mode`
  history            Alias for `hist`
  quit               Alias for `exit`
  quit-program       Alias for `exit-program`
  reload-method      Alias for `reload-code`

<span><</span>page break> --- Press enter to continue ( q<span><</span>enter> to break ) --- <span><</span>page break>

  show-method        Alias for `show-source`

Input and output
  .<span><</span>shell command>   All text following a '.' is forwarded to the shell.
  cat                Show code from a file, pry's input buffer, or the last exception.
  change-inspector   Change the current inspector proc.
  change-prompt      Change the current prompt.
  clear-screen       Clear the contents of the screen/window pry is running in.
  fix-indent         Correct the indentation for contents of the input buffer
  list-inspectors    List the inspector procs available for use.
  save-file          Export to a file using content from the repl.
  shell-mode         Toggle shell mode. bring in pwd prompt and file completion.

Misc
  gist               Upload code, docs, history to https://gist.github.com/.
  pry-version        Show pry version.
  reload-code        Reload the source file that contains the specified code object.
  toggle-color       Toggle syntax highlighting.

Navigating pry
  !pry               Start a pry session on current self.
  disable-pry        Stops all future calls to pry and exits the current session.
  exit               Pop the previous binding.
  exit-all           End the current pry session.
  exit-program       End the current program.
  jump-to            Jump to a binding further up the stack.
  nesting            Show nesting information.


[38] pry(#<Pry::Ring>)> shell-mode
pry #<Pry::Ring>:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb $ .gem install nano
Successfully installed nano-0.8.2
Done installing documentation for nano after 0 seconds
1 gem installed
pry #<Pry::Ring>:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb $ .gem install cat
Fetching: cat-0.2.1.gem (100%)
Successfully installed cat-0.2.1
Building YARD (yri) index for cat-0.2.1...
Done installing documentation for cat after 0 seconds
1 gem installed



pry #<Pry::Ring>:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb $ .cat .pryrc
def sgrb
  puts "hello world!"
end
pry #<Pry::Ring>:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb $ load ".pryrc"
=> true
pry #<Pry::Ring>:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb $ sgrb
hello world!
=> nil
pry #<Pry::Ring>:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb $ cd Pry
pry Pry:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb $ .bundle
Using rake 12.3.2
Using bundler 2.0.1
Using power_assert 1.1.4
Using rake-compiler 1.0.7
Using test-unit 3.3.3
Using xss 0.0.3 from source at `.`
Bundle complete! 3 Gemfile dependencies, 6 gems now installed.
Use `bundle info [gemname]` to see where a bundled gem is installed.
pry Pry:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb * .bundle info xss
  * xss (0.0.3)
        Summary: xSGDC!
        Homepage: https://rubygems.org/gems/xss
        Path: C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb
pry Pry:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb *

pry #<Pry::Ring>:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb $ cd Gem
pry Gem:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb $ sgrb
hello world!
=> nil
pry Gem:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb $ .sgpy
Call your main application code here
pry Gem:C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb $


[209] pry(main)> cd JSON
[210] pry(JSON):1> ls
constants:
  CircularDatastructure  FAST_STATE_PROTOTYPE  GenericObject  JSON_LOADED  MinusInfinity          NaN           Parser       PRETTY_STATE_PROTOTYPE  State          VERSION        VERSION_BUILD  VERSION_MINOR
  Ext                    GeneratorError        Infinity       JSONError    MissingUnicodeSupport  NestingError  ParserError  SAFE_STATE_PROTOTYPE    UnparserError  VERSION_ARRAY  VERSION_MAJOR
JSON.methods:
  []         create_id=      dump                  dump_default_options=  fast_unparse  generator   iconv  load_default_options   parse   parser   pretty_generate  recurse_proc  state   unparse
  create_id  deep_const_get  dump_default_options  fast_generate          generate      generator=  load   load_default_options=  parse!  parser=  pretty_unparse   restore       state=
instance variables: @create_id  @dump_default_options  @generator  @load_default_options  @parser  @state
locals: _  __  _dir_  _ex_  _file_  _in_  _out_  _pry_
[211] pry(JSON):1> ['222']
=> ["222"]
[212] pry(JSON):1> dump('hi')
=> "\"hi\""

</code></pre>



<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  




┌────────────────────────────────────────┐
│0: gem install bundle                   │
│1: bundle install --jobs=3 --retry=3    │
│2: bundle info sgrb                     │
│3: bundle info                          │
│4: bundle info gem sgrb                 │
│5: bundle info rake                     │
│6: cd .bundle                           │
│7: dir                                  │
│8: config                               │
│9: gem install xss                      │
│10: dir                                 │
│11: cd ..                               │
│12: dir                                 │
│13: rake                                │
│14: rake --tasks                        │
│15: rake build                          │
│16: dir                                 │
│17: cd pkg                              │
│18: dir                                 │
│19: cd ..                               │
│20: die                                 │
│21: dir                                 │
│22: rake test                           │
│23: rake release                        │
│24: gem push                            │
│25: gem push xss-0.0.0.gem              │
│29: gem build xss                       │
│30: gem push xss                        │
│31: xss-0.0.0.gem                       │
│34: rake compile:sgrb                   │
└────────────────────────────────────────┘


┌────────────────────────────────────────┐
│    gem install travis                  │
│0: travis                               │
│1: travis init                          │
│2: travis init --force to override      │
│3: travis enable                        │
│4: dir                                  │
│5: travis setup anynines                │
│6: travis report --org                  │
│7: travis setup anynines                │
│8: dir                                  │
│9: git push                             │
│10: gem push                            │
│12: gem                                 │
│13: rake build                          │
│14: rak                                 │
│15: rake                                │
│16: rake --trace                        │
│17: gem install bundler                 │
│18: dir                                 │
│19: bundle install                      │
│20: bundle update --bundler             │
│22: gem install bundler:2.0.1           │
│23: bundle install                      │
│24: dir                                 │
│25: cd .bundle                          │
│26: dir                                 │
│27: config                              │
│28: cd ..                               │
│29: dir                                 │
│30: rake                                │
│31: rake --tasks                        │
│32: rake build                          │
│33: rake compile:sgrb                   │
│34: rake --tasks                        │
│35: rake install:local                  │
│36: rake release                        │
│37: rake release --trace                │
│38: gem push xss-0.0.2.gem              │
│39: rake --tasks                        │
│40: rake build                          │
│41: gem push xss-0.0.2.gem              │
│42: cd pkg                              │
│43: gem push xss-0.0.2.gem              │
│45: cd..                                │
│47: gem install xss                     │
└────────────────────────────────────────┘
</code></pre>

<h3 id="curl"><a class="header-link" href="#curl"></a><img src="{{ asset('images/assests/curl.svg') }}" width="100px" height="80px" /></h3>

Windows 10 comes with a built in curl. Manually installing on older windows versions.

First download & install <strong>curl</strong> for <a href="{{ url('/mirror/x86/curl.zip') }}">windows 7, 8 x86.</a> | <a href="{{ url('/mirror/x64/curl.zip') }}">windows 7, 8 x64.</a>

unzip archived <code>curl.zip</code>, then copy & paste its content into a directory e.g. %S%

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Users\a7med>curl http://cdn.ies.com/api/total-sales
{"YTD Total Sales:":"3,240,505.00 SAR"}
</code></pre>

<pre><code class="language-bash">  
root@0x01:~# bash <(curl -s http://cdn.ies.com/cmd/banner.sh --dump-header dump.txt)
███████╗██╗   ██╗███╗   ██╗██████╗ ██╗   ██╗██╗      █████╗ ██╗  ██╗     ██████╗ ██████╗  ██████╗ ██╗   ██╗██████╗
██╔════╝██║   ██║████╗  ██║██╔══██╗██║   ██║██║     ██╔══██╗██║  ██║    ██╔════╝ ██╔══██╗██╔═══██╗██║   ██║██╔══██╗
███████╗██║   ██║██╔██╗ ██║██████╔╝██║   ██║██║     ███████║███████║    ██║  ███╗██████╔╝██║   ██║██║   ██║██████╔╝
╚════██║██║   ██║██║╚██╗██║██╔══██╗██║   ██║██║     ██╔══██║██╔══██║    ██║   ██║██╔══██╗██║   ██║██║   ██║██╔═══╝
███████║╚██████╔╝██║ ╚████║██████╔╝╚██████╔╝███████╗██║  ██║██║  ██║    ╚██████╔╝██║  ██║╚██████╔╝╚██████╔╝██║
╚══════╝ ╚═════╝ ╚═╝  ╚═══╝╚═════╝  ╚═════╝ ╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝     ╚═════╝ ╚═╝  ╚═╝ ╚═════╝  ╚═════╝ ╚═╝
root@0x01:~# cat dump.txt
HTTP/1.1 200 OK
Content-Type: application/x-sh
Last-Modified: Fri, 24 May 2019 02:29:06 GMT
Accept-Ranges: bytes
ETag: "223fa75d811d51:0"
Server: Microsoft-IIS/8.5
X-Powered-By: ASP.NET
Date: Fri, 24 May 2019 02:29:09 GMT
Content-Length: 1839

root@0x01:~# bash <(curl -s http://cdn.ies.com/cmd/banner.sh) 
root@0x01:~# bash <(curl -s http://cdn.ies.com/cmd/install.sh) #install npm node python ruby
root@0x01:~# bash <(curl -s http://cdn.ies.com/cmd/cmatrix.sh)
root@0x01:~# node <(curl -s http://cdn.ies.com/cmd/cmd.js)
root@0x01:~# python <(curl -s http://cdn.ies.com/cmd/echo.py)
hello

<h5>Upload anything anywhere.</h5>
root@0x01:~# curl --upload-file dump.txt https://keep.sh/dump.txt

<h5>Download anything anywhere.</h5>
root@0x01:~# curl -L https://keep.sh/3d1fd43a21/dump.txt > dump.txt

<h5>Get all orders</h5>
root@0x01:~# curl -i -H "Accept: application/xml" http://cdn.ies.com/api/test

root@0x01:~# bash <(curl -s http://cdn.ies.com/cmd/install.sh)
root@0x01:~# bash <(curl -s http://cdn.ies.com/cmd/install.sh)
root@0x01:~# bash <(curl -s http://cdn.ies.com/cmd/install.sh)
</code></pre>





<h3 id="perl"><a class="header-link" href="#perl"></a> Perl</h3>


<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

root@0x01:/var/www/html/sgpl# perl -h

Usage: perl [switches] [--] [programfile] [arguments]
  -0[octal]         specify record separator (\0, if no argument)
  -a                autosplit mode with -n or -p (splits $_ into @F)
  -C[number/list]   enables the listed Unicode features
  -c                check syntax only (runs BEGIN and CHECK blocks)
  -d[:debugger]     run program under debugger
  -D[number/list]   set debugging flags (argument is a bit mask or alphabets)
  -e program        one line of program (several -e's allowed, omit programfile)
  -E program        like -e, but enables all optional features
  -f                don't do $sitelib/sitecustomize.pl at startup
  -F/pattern/       split() pattern for -a switch (//'s are optional)
  -i[extension]     edit <> files in place (makes backup if extension supplied)
  -Idirectory       specify @INC/#include directory (several -I's allowed)
  -l[octal]         enable line ending processing, specifies line terminator
  -[mM][-]module    execute "use/no module..." before executing program
  -n                assume "while (<>) { ... }" loop around program
  -p                assume loop like -n but print line also, like sed
  -s                enable rudimentary parsing for switches after programfile
  -S                look for programfile using PATH environment variable
  -t                enable tainting warnings
  -T                enable tainting checks
  -u                dump core after parsing program
  -U                allow unsafe operations
  -v                print version, patchlevel and license
  -V[:variable]     print configuration summary (or a single Config.pm variable)
  -w                enable many useful warnings
  -W                enable all warnings
  -x[directory]     ignore text before #!perl line (optionally cd to directory)
  -X                disable all warnings

Run 'perldoc perl' for more help with Perl.

phsycho@x000001:~$ quilt
Usage: quilt [--trace[=verbose]] [--quiltrc=XX] command [-h] ...
       quilt --version
Commands are:
        add       fold    mail      refresh  snapshot
        annotate  fork    new       remove   top
        applied   graph   next      rename   unapplied
        delete    grep    patches   revert   upgrade
        diff      header  pop       series
        edit      import  previous  setup
        files     init    push      shell

Global options:

--trace
        Runs the command in bash trace mode (-x). For internal debugging.

--quiltrc file
        Use the specified configuration file instead of ~/.quiltrc (or
        /etc/quilt.quiltrc if ~/.quiltrc does not exist).  See the pdf
        documentation for details about its possible contents.  The
        special value "-" causes quilt not to read any configuration
        file.

--version
        Print the version number and exit immediately.
        

        EXAMPLE OF WORKING TREE
              work/
              ├── patches/
              │    ├── series         (list of patches to apply)
              │    ├── patch1.diff    (one particular patch)
              │    ├── patch2.diff
              │    └── ...
              ├── .pc/
              │    ├── .quilt_patches (content of QUILT_PATCHES)
              │    ├── .quilt_series  (content of QUILT_SERIES)
              │    ├── patch1.diff/   (copy of patched files)
              │    │    └── ...
              │    ├── patch2.diff/
              │    │    └── ...
              │    └── ...
              └── ...
              
┌────────────────────────────────────────┐
│0: perl call-mod.pl                     │
│1: perl getItem.pl                      │
│2: rpm -ql curl                         │
│3: perl getItem.pl                      │
│4: perl call-mod.pl                     │
│5: dir                                  │
│6: perl Makefile.pl                     │
│7: cpan                                 │
│8: perl                                 │
│9: perl getItem.pl                      │
└────────────────────────────────────────┘

ppm profile save my-modules.xml

</code></pre>




<h3 id="cpan"><a class="header-link" href="#cpan"></a><img src="{{ asset('images/assests/cpan.png') }}" width="100px" height="80px" /> CPAN</h3>


<pre><code class="language-bash">  

root@0x01:/var/www/html/sgpl# cpan
Loading internal logger. Log::Log4perl recommended for better logging

cpan shell -- CPAN exploration and modules installation (v2.20)
Enter 'h' for help.

cpan[1]> h

Display Information                                                  (ver 2.20)
 command  argument          description
 a,b,d,m  WORD or /REGEXP/  about authors, bundles, distributions, modules
 i        WORD or /REGEXP/  about any of the above
 ls       AUTHOR or GLOB    about files in the author's directory
    (with WORD being a module, bundle or author name or a distribution
    name of the form AUTHOR/DISTRIBUTION)

Download, Test, Make, Install...
 get      download                     clean    make clean
 make     make (implies get)           look     open subshell in dist directory
 test     make test (implies make)     readme   display these README files
 install  make install (implies test)  perldoc  display POD documentation

Upgrade installed modules
 r        WORDs or /REGEXP/ or NONE    report updates for some/matching/all
 upgrade  WORDs or /REGEXP/ or NONE    upgrade some/matching/all modules

Pragmas
 force  CMD    try hard to do command  fforce CMD    try harder
 notest CMD    skip testing

Other
 h,?           display this menu       ! perl-code   eval a perl command
 o conf [opt]  set and query options   q             quit the cpan shell
 reload cpan   load CPAN.pm again      reload index  load newer indices
 autobundle    Snapshot                recent        latest CPAN uploads
cpan[2]>
</code></pre>






<pre><code class="language-markdown">   



</code></pre>

<script src="https://embed.runkit.com" data-element-id="my-element"></script>

<!-- anywhere else on your page -->
<div id="my-element">
const getJSON = require("async-get-json");
const getGitHubAPIStatus = getJSON("https://status.github.com/api/status.json");

module.exports.endpoint = async function (request, response)
{
    response.end(JSON.stringify(await getGitHubAPIStatus));
}



</div>







<pre><code class="language-bash"> 
root@0x01:~/ssh-keys# ssh-keygen -t rsa -b 4096 -C root@ipool.remotewebaccess.com
Generating public/private rsa key pair.
Enter file in which to save the key (/root/.ssh/id_rsa): keys
Enter passphrase (empty for no passphrase):
Enter same passphrase again:
Your identification has been saved in keys.
Your public key has been saved in keys.pub.
The key fingerprint is:
SHA256:IYq7v6miom7COSEqXmPYbVoI6WeQTEA+a1Oe2bvr3WA root@ipool.remotewebaccess.com
The key's randomart image is:
+---[RSA 4096]----+
|o.               |
|o                |
| + .  . .        |
|o B.+. . .       |
| X.+..  S        |
|+.*.o .          |
|+o+O = E         |
|*==.=.+ o        |
|%+++==.. .       |
+----[SHA256]-----+
root@0x01:~/ssh-keys#

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
 <br /> <img src="{{ asset('images/assests/nodejs.png') }}" style="padding:20px" width="40px" height="25px" /> NodeJS  <img src="{{ asset('images/assests/jquery.gif') }}" style="padding:20px" width="40px" height="25px" /> jQuery  <img src="{{ asset('images/assests/python.png') }}" style="padding:20px" width="50px" height="60px" /> Python  <img src="{{ asset('images/assests/ruby.jpg') }}" style="padding:20px" width="30px" height="30px" /> Ruby <img src="{{ asset('images/assests/curl.svg') }}" style="padding:20px" width="40px" height="25px" /> curl

</div>

<div style="text-align:center;margin: 30px;padding: 20px">
    Source <code>code</code> written by <img src="{{ asset('images/assests/vsc.png') }}" style="padding:20px" width="120px" height="60px" />, managed and controlled by <i class="fab fa-github"></i> GitHub
</div>

</article>

@endsection