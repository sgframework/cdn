@extends('layouts.root')
@section('content')

<pre><code class="language-bash">

{{ $outputt }}

</code></pre>

<link href="{{ asset('css/assets/css/github-markdown.css') }}" rel="stylesheet">
<article class="markdown-body">
        <img src="{{ asset('images/assests/sgimg.png') }}" align="right" style="height: 64px"/>
        <h1 id="welcome-to-sunbulah-group-framework"><a class="header-link" href="#welcome-to-sunbulah-group-framework"></a> Welcome to Sunbulah Group Framework</h1>
        <script src="https://gist.github.com/sgframework/777536b600117a959c7acfac64bbeab1.js"></script>

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


<h5 id="routes"><a class="header-link" href="#routes"></a>All Routes</h5>

<pre><code class="language-cmd">

    C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>php artisan route:list
    +--------+----------+----------------------------------------------------------------+-----------------------+------------------------------------------------------------------------+------------------------------+
    | Domain | Method   | URI                                                            | Name                  | Action                                                                 | Middleware                   |
    +--------+----------+----------------------------------------------------------------+-----------------------+------------------------------------------------------------------------+------------------------------+
    |        | GET|HEAD | /                                                              | global.index          | cdn\Http\Controllers\GlobalController@getIndex                         | web,auth                     |
    |        | GET|HEAD | admin/{id}                                                     | dashboard.admin       | cdn\Http\Controllers\ProfileController@getAdmin                        | web                          |
    |        | GET|HEAD | admins                                                         | admins                | cdn\Http\Controllers\HomeController@admins                             | web,is-admin,auth            |
    |        | GET|HEAD | alert                                                          |                       | Closure                                                                | web                          |
    |        | GET|HEAD | api/dashboard/orders/{slug}                                    |                       | Closure                                                                | api                          |
    |        | GET|HEAD | api/echo/xml                                                   |                       | Closure                                                                | api                          |
    |        | GET|HEAD | api/echo/xml/{ordernumber}                                     |                       | Closure                                                                | api                          |
    |        | GET|HEAD | api/export-orders-csv/{idnumber}/completed                     |                       | Closure                                                                | api                          |
    |        | GET|HEAD | api/order/{ordernumber}                                        |                       | Closure                                                                | api                          |
    |        | GET|HEAD | api/orderitems/{ordernumber}                                   |                       | Closure                                                                | api                          |
    |        | GET|HEAD | api/orders/user/{slug}                                         |                       | Closure                                                                | api                          |
    |        | GET|HEAD | api/test                                                       |                       | Closure                                                                | api                          |
    |        | GET|HEAD | api/user                                                       |                       | Closure                                                                | api,auth:api                 |
    |        | GET|HEAD | branch/add                                                     | branches.add          | cdn\Http\Controllers\BranchesController@addBranch                      | web,auth                     |
    |        | POST     | branch/insert                                                  | branches.insert       | cdn\Http\Controllers\BranchesController@InsertBranches                 | web,auth                     |
    |        | GET|HEAD | branches                                                       | branches.index        | cdn\Http\Controllers\BranchesController@getCustomers                   | web,auth                     |
    |        | GET|HEAD | email/resend                                                   | verification.resend   | cdn\Http\Controllers\Auth\VerificationController@resend                | web,auth,throttle:6,1        |
    |        | GET|HEAD | email/verify                                                   | verification.notice   | cdn\Http\Controllers\Auth\VerificationController@show                  | web,auth                     |
    |        | GET|HEAD | email/verify/{id}                                              | verification.verify   | cdn\Http\Controllers\Auth\VerificationController@verify                | web,auth,signed,throttle:6,1 |
    |        | GET|HEAD | export-orderitems-csv                                          |                       | Closure                                                                | web                          |
    |        | GET|HEAD | export-orders-csv                                              |                       | Closure                                                                | web                          |
    |        | GET|HEAD | export-orders-csv/submitted/to/completed/now                   |                       | Closure                                                                | web                          |
    |        | GET|HEAD | export-orders-csv/submitted/to/completed/{idnumber}/all        |                       | Closure                                                                | web                          |
    |        | GET|HEAD | export-orders-csv/today                                        |                       | Closure                                                                | web                          |
    |        | GET|HEAD | export-orders-csv/{idnumber}/completed                         |                       | Closure                                                                | web                          |
    |        | GET|HEAD | export-orders-orderitems-csv/excel                             |                       | Closure                                                                | web                          |
    |        | GET|HEAD | export-orders-orderitems-csv/function                          |                       | Closure                                                                | web                          |
    |        | GET|HEAD | export-orders-orderitems-csv/submitted/to/completed            |                       | Closure                                                                | web                          |
    |        | GET|HEAD | export-orders-orderitems-csv/today                             |                       | Closure                                                                | web                          |
    |        | GET|HEAD | export-orders-orderitems-csv/{idnumber}/submitted/to/completed |                       | Closure                                                                | web                          |
    |        | GET|HEAD | export-orders-orderitems-xml                                   |                       | Closure                                                                | web                          |
    |        | GET|HEAD | item/add                                                       | items.add             | cdn\Http\Controllers\ItemsController@addItem                           | web,auth                     |
    |        | POST     | item/insert                                                    | items.insert          | cdn\Http\Controllers\ItemsController@InsertItems                       | web,auth                     |
    |        | GET|HEAD | items                                                          | items.index           | cdn\Http\Controllers\ItemsController@getNewItems                       | web,auth                     |
    |        | POST     | login                                                          |                       | cdn\Http\Controllers\Auth\LoginController@login                        | web,guest                    |
    |        | GET|HEAD | login                                                          | login                 | cdn\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest                    |
    |        | POST     | logout                                                         | logout                | cdn\Http\Controllers\Auth\LoginController@logout                       | web                          |
    |        | GET|HEAD | mail                                                           | tests.email           | cdn\Http\Controllers\RootController@getMail                            | web,auth                     |
    |        | GET|HEAD | manager                                                        | global.manager        | cdn\Http\Controllers\GlobalController@getManager                       | web,auth                     |
    |        | GET|HEAD | manager/{id}                                                   | dashboard.manager     | cdn\Http\Controllers\ProfileController@getManager                      | web                          |
    |        | GET|HEAD | md                                                             | tests.markdown        | cdn\Http\Controllers\RootController@getMd                              | web,auth                     |
    |        | GET|HEAD | old/branches                                                   | branches.index        | cdn\Http\Controllers\BranchesController@getBranches                    | web,auth                     |
    |        | GET|HEAD | order/add                                                      | orders.add            | cdn\Http\Controllers\OrdersController@addOrder                         | web,auth                     |
    |        | GET|HEAD | order/add/step1                                                | orders.partials.step1 | cdn\Http\Controllers\OrdersController@addOrderStep1                    | web,auth                     |
    |        | GET|HEAD | order/add/step2                                                | orders.partials.step2 | cdn\Http\Controllers\OrdersController@addOrderStep2                    | web,auth                     |
    |        | GET|HEAD | order/add/urgent                                               | orders.urgent         | cdn\Http\Controllers\OrdersController@addUrgentOrder                   | web,auth                     |
    |        | POST     | order/insert/step1                                             | orders.insert.step1   | cdn\Http\Controllers\OrdersController@insertOrderStep1                 | web,auth                     |
    |        | POST     | order/insert/step2                                             |                       | cdn\Http\Controllers\OrdersController@insertOrderStep2                 | web,auth                     |
    |        | GET|HEAD | orders                                                         | orders.index          | cdn\Http\Controllers\OrdersController@getOrders                        | web,auth                     |
    |        | GET|HEAD | orders/order/{slug}                                            | orders.order          | cdn\Http\Controllers\OrdersController@getOrderNumber                   | web,auth                     |
    |        | POST     | orders/order/{slug}/attachpo                                   | orders.attachpo       | cdn\Http\Controllers\OrdersController@attachPo                         | web,auth                     |
    |        | POST     | orders/order/{slug}/backedit                                   | orders.backedit       | cdn\Http\Controllers\OrdersController@backEditOrderItems               | web,auth                     |
    |        | POST     | orders/order/{slug}/change                                     | update.po             | cdn\Http\Controllers\OrdersController@updatePo                         | web,auth                     |
    |        | POST     | orders/order/{slug}/delete                                     | delete.po             | cdn\Http\Controllers\OrdersController@deletePo                         | web,auth                     |
    |        | GET|HEAD | orders/order/{slug}/edit                                       | orders.edit           | cdn\Http\Controllers\OrdersController@editOrderNumber                  | web,auth                     |
    |        | POST     | orders/order/{slug}/insert                                     | orders.insert         | cdn\Http\Controllers\OrdersController@insertOrderItems                 | web,auth                     |
    |        | POST     | orders/order/{slug}/remove/{itemnumber}                        | orders.remove         | cdn\Http\Controllers\OrdersController@removeOrderItem                  | web,auth                     |
    |        | POST     | orders/order/{slug}/remove/{ponumber}                          | orders.destroy        | cdn\Http\Controllers\OrdersController@removeOrder                      | web,auth                     |
    |        | GET|HEAD | orders/order/{slug}/review                                     | orders.review         | cdn\Http\Controllers\OrdersController@reviewOrderItems                 | web,auth                     |
    |        | POST     | orders/order/{slug}/submit                                     | orders.submit         | cdn\Http\Controllers\OrdersController@submitOrder                      | web,auth                     |
    |        | GET|HEAD | orders/order/{slug}/success                                    | orders.success        | cdn\Http\Controllers\OrdersController@successOrder                     | web,auth                     |
    |        | POST     | password/email                                                 | password.email        | cdn\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest                    |
    |        | POST     | password/reset                                                 | password.update       | cdn\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest                    |
    |        | GET|HEAD | password/reset                                                 | password.request      | cdn\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest                    |
    |        | GET|HEAD | password/reset/{token}                                         | password.reset        | cdn\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest                    |
    |        | POST     | profile/edit                                                   | profile.edit          | cdn\Http\Controllers\ProfileController@profileEdit                     | web                          |
    |        | GET|HEAD | profile/edit                                                   | profile.get           | cdn\Http\Controllers\ProfileController@getEdit                         | web                          |
    |        | POST     | profile/imgupdate                                              | photo.edit            | cdn\Http\Controllers\UploadController@photoEdit                        | web                          |
    |        | POST     | promo/mass/upload                                              | promo.order           | cdn\Http\Controllers\OrdersController@promoOrder                       | web,auth                     |
    |        | GET|HEAD | register                                                       | register              | cdn\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest                    |
    |        | POST     | register                                                       |                       | cdn\Http\Controllers\Auth\RegisterController@register                  | web,guest                    |
    |        | GET|HEAD | root                                                           | root.index            | cdn\Http\Controllers\RootController@getIndex                           | web,auth                     |
    |        | GET|HEAD | root/mysql/sgdb0                                               | root.mysql            | cdn\Http\Controllers\RootController@getDB                              | web,auth                     |
    |        | POST     | root/mysql/sgdb0/post                                          | root.mysql.post       | cdn\Http\Controllers\RootController@postCommand                        | web,auth                     |
    |        | GET|HEAD | root/orders/{idnumber}                                         | root.user.orders      | cdn\Http\Controllers\RootController@getOrdersByUserId                  | web,auth                     |
    |        | GET|HEAD | root/orders/{idnumber}/submitted/to/completed                  | root.orderexport      | cdn\Http\Controllers\OrdersController@exportReport                     | web,auth                     |
    |        | GET|HEAD | root/orders/{idnumber}/{slug}                                  | root.userorder.orders | cdn\Http\Controllers\RootController@getOrdersByIdAndSlug               | web,auth                     |
    |        | POST     | root/orders/{idnumber}/{slug}/success                          | orders.complete       | cdn\Http\Controllers\RootController@completeOrder                      | web,auth                     |
    |        | GET|HEAD | root/readme                                                    | root.readme           | cdn\Http\Controllers\RootController@getReadMe                          | web,auth                     |
    |        | GET|HEAD | root/readme-v0.02                                              | root.md               | cdn\Http\Controllers\RootController@getRM                              | web,auth                     |
    |        | GET|HEAD | root/readme-v0.03                                              | root.md.index         | cdn\Http\Controllers\RootController@getRMindex                         | web,auth                     |
    |        | GET|HEAD | root/search/orders                                             | search.orders         | cdn\Http\Controllers\SearchController@getOrder                         | web                          |
    |        | GET|HEAD | root/tree                                                      | root.tree             | cdn\Http\Controllers\RootController@getTree                            | web,auth                     |
    |        | GET|HEAD | root/users                                                     | root.users            | cdn\Http\Controllers\RootController@getUsers                           | web,auth                     |
    |        | GET|HEAD | root/users/orders/all                                          | root.orders.all       | cdn\Http\Controllers\RootController@getAllOrders                       | web,auth                     |
    |        | GET|HEAD | root/users/orders/stats                                        | root.stats.totals     | cdn\Http\Controllers\RootController@getStats                           | web,auth                     |
    |        | GET|HEAD | search/branches                                                | search.branches       | cdn\Http\Controllers\SearchController@getBranches                      | web                          |
    |        | GET|HEAD | search/items                                                   | search.items          | cdn\Http\Controllers\SearchController@getItems                         | web                          |
    |        | GET|HEAD | search/pos                                                     | search.pos            | cdn\Http\Controllers\SearchController@getPos                           | web                          |
    |        | GET|HEAD | submit-rtv                                                     | rtv.index             | cdn\Http\Controllers\RtvController@getIndex                            | web,auth                     |
    |        | GET|HEAD | test0                                                          |                       | Closure                                                                | web                          |
    |        | GET|HEAD | test1                                                          |                       | Closure                                                                | web                          |
    |        | GET|HEAD | tests                                                          | tests.index           | cdn\Http\Controllers\RootController@getTest                            | web,auth                     |
    |        | GET|HEAD | tests-csv                                                      | tests.index           | cdn\Http\Controllers\RootController@getCsv                             | web,auth                     |
    |        | GET|HEAD | tests/othaim                                                   | tests.othaim          | cdn\Http\Controllers\OrdersController@listOthiam                       | web,auth                     |
    |        | GET|HEAD | tests/review                                                   | orders.review         | cdn\Http\Controllers\RootController@getReview                          | web,auth                     |
    |        | GET|HEAD | user/{id}                                                      | dashboard.index       | cdn\Http\Controllers\ProfileController@getProfile                      | web                          |
    |        | GET|HEAD | user/{id}/orders                                               | dashboard.orders      | cdn\Http\Controllers\OrdersController@getOrdersbyUser                  | web,auth                     |
    |        | GET|HEAD | user/{id}/orders/archive                                       | dashboard.archive     | cdn\Http\Controllers\ProfileController@getArchive                      | web                          |
    +--------+----------+----------------------------------------------------------------+-----------------------+------------------------------------------------------------------------+------------------------------+

</code></pre>



<pre><code class="language-sql">

mysql&gt; select * from itemsv2;
+--------+------------+-------------------------------------------+--------------+--------------+
| itemid | itemnumber | itemname                                  | itemoldprice | itemnewprice |
+--------+------------+-------------------------------------------+--------------+--------------+
|      1 |   50487612 | WALIMAH MANGO PULP (16X1KG)               |       135.00 |       135.00 |
|      2 |   56380112 | ALAMBRA BASIL HALLOUMI (50X200G)          |       495.00 |       495.00 |
|      3 |   32031960 | PROM ALSHIFA NAT 250G (12+3JAR FREE)-NEW  |        97.50 |        97.50 |
|      4 |   42003760 | AL-SHIFA BLACK FOREST (6X1KG) SQUARE JAR  |       638.00 |       638.00 |
|      5 |   50490318 | WALIMAH MIXED VEGETABLES(20X400G)RETAIL   |        80.00 |        60.00 |
|      6 |   50490418 | WALIMA CUT GREEN BEANS (20X400G) RETAIL   |        80.00 |        60.00 |
|      7 |   30041218 | PROMO KONAFAH DOUGH 12X( 500G+25% FREE)   |        77.00 |        77.00 |
|      8 |   30044318 | 500G GULASH FILLO + 25% EXTRA FILL        |        84.00 |        84.00 |
|      9 |   30060218 | P. P. SQUARES ( BUY 3 + GET 1 FREE)       |        97.00 |        97.00 |
|     10 |   30071218 | PROMO SPRING ROLL 160G(BUY 4 GET 1 FREE)  |        77.00 |        77.00 |
|     11 |   32031960 | PROM ALSHIFA NAT 250G (12+3JAR FREE)-NEW  |       190.00 |       190.00 |
|     12 |   32033060 | AL SHIFA NAT HONEY 125G(24+4FREE)-NEW     |       212.00 |       212.00 |
|     13 |   32041960 | AL SHIFA HONEY DUTY FREE PACK(6X4X250G)   |       840.00 |       840.00 |
|     14 |   32042060 | AL SHIFA HONEY DUTY FREE PACK (18X4X30G)  |       324.00 |       324.00 |
|     15 |   32042260 | AL SHIFA NATURAL 12(500G+ 250G SQZ FREE)  |       337.00 |       337.00 |
|     16 |   32042360 | AL SHIFA NATURAL 6(1 KG + 400G SQZ FREE)  |       281.00 |       281.00 |
|     17 |   32107060 | AL SHIFA PROMO 12(750G+125G ACA FREE)     |       428.00 |       428.00 |
|     18 |   32108060 | AL SHIFA 12 PRO(NAT 750G +BLACK F 125)    |       400.00 |       400.00 |
|     19 |   40003312 | SUPER SUPREME PIZZA (12X470G)             |       185.00 |       185.00 |
|     20 |   40003412 | PEPPERONI SPECIAL PIZZA (12X470G)         |       185.00 |       185.00 |
|     21 |   40003512 | MARGARITA PIZZA (12X400G)                 |       174.00 |       174.00 |
|     22 |   40003612 | CHICKEN PREMIER PIZZA (12X470G)           |       185.00 |       185.00 |
|     23 |   40003712 | VEGGIE DELIGHT PIZZA (12X470G)            |       185.00 |       185.00 |
|     24 |   40003812 | SPICY CHICKEN PIZZA (12X470G)             |       185.00 |       185.00 |
|     25 |   40004012 | SUPER SUPREME PIZZA (12X470G)             |       185.00 |       185.00 |
|     26 |   40004112 | CHICKEN PREMIER PIZZA (12X470G)           |       185.00 |       185.00 |
|     27 |   40004212 | MARGARITA PIZZA (12X400G)                 |       174.00 |       174.00 |
|     28 |   40004312 | PEPPERONI PIZZA (12X470G)                 |       185.00 |       185.00 |
|     29 |   40004412 | VEGGIE DELIGHT PIZZA (12X470G)            |       185.00 |       185.00 |
|     30 |   40004512 | SPICY CHICKEN PIZZA (12X470G)             |       185.00 |       185.00 |
|     31 |   40004612 | VEGGIE DELIGHT PIZZA (12X470G)            |       185.00 |       185.00 |
|     32 |   40004812 | SMALL PIZZA CRUST (12X8X27.5G)            |        87.00 |        87.00 |
|     33 |   40004912 | MEDIUM PIZZA CRUST (12X3X165G)            |        99.00 |        99.00 |
|     34 |   40009412 | SUNBULAH SMALL PIZZA CRUST (12X8X27.5G)   |        87.00 |        87.00 |
|     35 |   40009418 | SUNBULAH SMALL PIZZA CRUST (12X8X27.5G)   |        87.00 |        87.00 |
|     36 |   40009712 | MEDIUM PIZZA CRUSTS (12X3X165G)           |        99.00 |        99.00 |
|     37 |   40009718 | MEDIUM PIZZA CRUST (12X3X165G)            |        99.00 |        99.00 |
|     38 |   40011012 | 20'S PUFF PASTRY SQUARE (9X800G)          |        89.00 |        89.00 |
|     39 |   40011018 | 20'S PUFF PASTRY SQUARE (9X800G)          |        89.00 |        89.00 |
|     40 |   40011112 | 10'S PUFF PASTRY SQUARE (18X400G)         |       107.00 |       107.00 |
|     41 |   40011118 | 10'S PUFF PASTRY SQUARE (18X400G)         |       107.00 |        95.00 |
|     42 |   40011212 | BURR PUFF PASTRY SQUARES (18X400GM)       |       117.00 |       117.00 |
|     43 |   40011218 | BURR PUFF PASTRY SQUARES (18X400GM)       |       117.00 |        95.00 |
|     44 |   40011312 | SUNBULAH MINI PUFF PSTRY SQUAR (18X320G)  |        95.00 |        95.00 |
|     45 |   40011318 | SUNBULAH MINI PUFF PSTRY SQUAR (18X320G)  |        95.00 |        95.00 |
|     46 |   40011418 | 10'S BUTTER PUFF PASTRY SQUARE (18X400G)  |       128.00 |       128.00 |
|     47 |   40011512 | 15'S LOW FAT PUFF PASTRY SQUAR (18X400G)  |       117.00 |       117.00 |
|     48 |   40011518 | 15'S LOW FAT PUFF PASTRY SQUAR (18X400G)  |       117.00 |        95.00 |
|     49 |   40011718 | 10'S WALIMA PUFF PASTRY (18X400G)         |        84.00 |        65.00 |
|     50 |   40012012 | PUFF PASTRY BLOCK (24X400 G)              |       116.00 |       116.00 |
|     51 |   40012018 | PUFF PASTRY BLOCK (24X400 G)              |       116.00 |       116.00 |
|     52 |   40012618 | PUFF PASTRY BLOCK (4X3.5 KG)              |        81.00 |        81.00 |
|     53 |   40013418 | CHOCOLATE PUFF PASTRY (18X400G)           |        93.00 |        95.00 |
|     54 |   40013518 | DESERT PUFF PASTRY (18X400G)              |        93.00 |        95.00 |
|     55 |   40013618 | PUFF PASTRY SHEET (4X5X350 G)             |        51.00 |        51.00 |
|     56 |   40013718 | CHOCOLATE PUFF PASTRY (18X200G)           |        93.00 |        93.00 |
|     57 |   40014118 | BURAKE PASTRY SHEET (5X1200G)             |        64.00 |        64.00 |
|     58 |   40016506 | LAMINATED DOUGH BUTTER SHEET (4X6X500G)   |       189.00 |       189.00 |
|     59 |   40016812 | UMM ALI CONVENIENT (12X150G)              |        99.00 |        99.00 |
|     60 |   40020012 | VANILLA POUND CAKE (12X300 G)             |        92.00 |        92.00 |
|     61 |   40021012 | CHOCOLATE POUND CAKE (12X300 G)           |        92.00 |        92.00 |
|     62 |   40022012 | SULTANA POUND CAKE (12X300G)              |        92.00 |        92.00 |
|     63 |   40023012 | ORANGE POUND CAKE (12X300 G)              |        92.00 |        92.00 |
|     64 |   40027012 | DATES POUND CAKE (12X300 G)               |        92.00 |        92.00 |
|     65 |   40028012 | BANANA POUND CAKE (12X300 G)              |        92.00 |        92.00 |
|     66 |   40040112 | FRYING BEEF SAMBUSAK 12(8X30G)            |       126.00 |       126.00 |
|     67 |   40041112 | BURR SANBUSAK DOUGH (18X500GM)            |        85.00 |        85.00 |
|     68 |   40041118 | BURR SANBUSAK DOUGH (18X500GM)            |        85.00 |        89.00 |
|     69 |   40041212 | FRYING CHICKEN SAMBUSAK (12X240G)         |       120.00 |       120.00 |
|     70 |   40041312 | FRYING VEGETABLE SAMBUSAK (12X240G)       |       110.00 |       110.00 |
|     71 |   40041412 | SAMBUSAK DOUGH RATIONALIZED (18X500G)     |        89.00 |        89.00 |
|     72 |   40041418 | SAMBUSAK DOUGH RATIONALIZED (18X500G)     |        89.00 |        89.00 |
|     73 |   40041512 | FRYING BEEF SAMBUSAK (12X240G)            |       126.00 |       126.00 |
|     74 |   40041612 | FRYING CHEESE SAMBUSAK (12X240G)          |       110.00 |       110.00 |
|     75 |   40042012 | KONAFAH DOUGH (12X500 G)                  |        77.00 |        77.00 |
|     76 |   40042018 | KONAFAH DOUGH (12X500 G)                  |        77.00 |        77.00 |
|     77 |   40042312 | FRYING CHICKEN SAMBUSAK - CAT (4X25X20G)  |        90.00 |        90.00 |
|     78 |   40042412 | FRYING CHEESE SAMBUSAK - CAT (4X25X20G)   |        75.00 |        75.00 |
|     79 |   40042512 | FRYING BEEF SAMBUSAK - CAT (4X25X20G)     |        90.00 |        90.00 |
|     80 |   40042612 | FRYING VEG. SANBUSAK ? CAT (4X25X20G)     |        72.00 |        72.00 |
|     81 |   40043012 | BAKLAWA FILLO (12X500 G)                  |        82.00 |        82.00 |
|     82 |   40043018 | BAKLAWA FILLO (12X500 G)                  |        82.00 |        77.00 |
|     83 |   40044012 | GULASH PASTRY LEAVES (12X500 G)           |        84.00 |        84.00 |
|     84 |   40044018 | GULASH PASTRY LEAVES (12X500 G)           |        84.00 |        77.00 |
|     85 |   40050012 | PUFF PASTREY BEEF PIE (12X360) GRAMS      |       121.00 |       121.00 |
|     86 |   40051012 | PUFF PASTRY CHEESE PIE (12X360) GRAMS     |       114.00 |       114.00 |
|     87 |   40051212 | HALF MOON SAMBUSAK- BEEF (12X220G)        |       144.00 |       144.00 |
|     88 |   40051312 | HALF MOON SAMBUSAK- CHEESE (12X220G)      |       144.00 |       144.00 |
|     89 |   40055512 | PLAIN POTATO CROQUETTES (C) 4X2.5KG       |        85.00 |        85.00 |
|     90 |   40056012 | MUSHROOM POTATO CROQUETTE (12X370G)       |       113.00 |       113.00 |
|     91 |   40057012 | CHEESE POTATO CROQUETTE (12X370G)         |       112.00 |       112.00 |
|     92 |   40060112 | 16'S CHICKEN KUBEE (12X480G)              |       182.00 |       182.00 |
|     93 |   40060212 | 16'S BEEF KUBEE (12X480G)                 |       182.00 |       182.00 |
|     94 |   40060312 | BEEF KUBEE (12X420G)                      |       160.00 |       160.00 |
|     95 |   40060412 | CHICKEN KUBEE (12X420G)                   |       160.00 |       160.00 |
|     96 |   40060712 | KUBEE (CATERING PACK) (4X2.5KG)           |       246.00 |       246.00 |
|     97 |   40066012 | 20'S MINI VOL-AU-VENT (12X170G)           |        79.00 |        79.00 |
|     98 |   40066018 | 20'S MINI VOL-AU-VENT (12X170G)           |        79.00 |        79.00 |
|     99 |   40066112 | 16'S VOL-AU-VENT (12X510G)                |       108.00 |       108.00 |
|    100 |   40066118 | 16'S VOL-AU-VENT (12X510G)                |       108.00 |       108.00 |
|    101 |   40070012 | SPRING ROLL PASTRY (24X160 G)             |        77.00 |        77.00 |
|    102 |   40070018 | SPRING ROLL PASTRY (24X160 G)             |        77.00 |        77.00 |
|    103 |   40070112 | SPRING ROLL PASTRY (24X345 G)             |       129.00 |       129.00 |
|    104 |   40070118 | SPRING ROLL PASTRY (24X345 G)             |       129.00 |       129.00 |
|    105 |   40071012 | EGG SPRING ROLL PASTRY (24X160G)          |        84.00 |        84.00 |
|    106 |   40071018 | EGG SPRING ROLL PASTRY (24X160G)          |        84.00 |        77.00 |
|    107 |   40071112 | EGG SPRING ROLL PASTRY (24X345G)          |       143.00 |       143.00 |
|    108 |   40071118 | EGG SPRING ROLL PASTRY (24X345G)          |       143.00 |       129.00 |
|    109 |   40073012 | BURR SPRING ROLL PASTRY (24X160GM)        |        92.00 |        92.00 |
|    110 |   40073018 | SUNB BURR SPRING ROLL PASTRY (24X160GM)   |        92.00 |        77.00 |
|    111 |   40073312 | 8 VEG. SPRING ROLLS (12X8X30G)-NEW TRAY   |        95.00 |        95.00 |
|    112 |   40073412 | 8 CHKN SPRING ROLLS (12X8X30G)-NEW TRAY   |       102.00 |       102.00 |
|    113 |   40076112 | PLAIN PARATHA (12X450G)                   |        54.00 |        54.00 |
|    114 |   40076118 | PLAIN PARATHA (12X450G)                   |        54.00 |        54.00 |
|    115 |   40076418 | GARLIC PARATHA (12X540G)                  |        64.00 |        64.00 |
|    116 |   40080009 | BAGUETTE FRENCH 57 CM? (30X300G)          |        69.00 |        69.00 |
|    117 |   40080109 | BAGUETTE MULTICEREAL 57 CM?? (30X310G)    |       119.00 |       119.00 |
|    118 |   40080209 | DEMI BAGUETTE FRENCH 25CM (60X150G)       |        72.00 |        72.00 |
|    119 |   40080309 | DEMI BAGUETTE MULTICEREAL 25CM (60X150G)  |       120.00 |       120.00 |
|    120 |   40080409 | VIENNA BREAD 27 CM (45X150G)              |        76.00 |        76.00 |
|    121 |   40080509 | VIENNA BREAD 18 CM (50X 90G)              |        50.00 |        50.00 |
|    122 |   40081409 | PANINI BREAD 20 CM? (45X120G)             |        72.00 |        72.00 |
|    123 |   40081509 | LARGE CIABATTA PLAIN 18 CM (45X150G)      |        80.00 |        80.00 |
|    124 |   40081609 | LARGE CIABATTA OLIVES 18CM (45X150G)      |       108.00 |       108.00 |
|    125 |   40081709 | LARGE CIABATTA RYE 18 CM (45X150G)        |       100.00 |       100.00 |
|    126 |   40081809 | LARGE CIABATTA HERBS (OREGANO) (45X150G)  |       100.00 |       100.00 |
|    127 |   40082009 | BAGUETTE TRADITIONAL 57CM? (18X270G)      |        54.00 |        54.00 |
|    128 |   40082109 | RUSTIC LOAF CAMPAGNE 25 CM? (20X250G)     |        70.00 |        70.00 |
|    129 |   40082209 | RUSTIC LOAF MULTICEREAL 25 CM (20X250G)   |        70.00 |        70.00 |
|    130 |   40082509 | CIABATTA SACC PLAIN-S (80 PCS)            |        99.20 |        99.20 |
|    131 |   40082606 | CIABATTA PLAIN (16 X 4 X 150G)            |       128.00 |       128.00 |
|    132 |   40082706 | CIABATTA OLIVE ROLLS (16 X 4 X 150G)      |       141.00 |       141.00 |
|    133 |   40082806 | CIABATTA HERBS (16X4X150G)                |       141.00 |       141.00 |
|    134 |   40082906 | PANINI BREAD (10X4X120G)                  |        80.00 |        80.00 |
|    135 |   40083006 | DEMI BAGUETTE FRENCH (24X2X150G)          |       106.00 |       106.00 |
|    136 |   40083009 | FRENCH OVAL ROLLS? (90X60G)               |        36.00 |        36.00 |
|    137 |   40083109 | MULTI CEREALS OVAL ROLLS? (90X60G)        |        40.00 |        40.00 |
|    138 |   40083209 | KAISER ROLLS WHITE? (100X60G)             |        48.00 |        48.00 |
|    139 |   40083309 | KAISER ROLLS MULTI-CEREALS (100X60G)      |        54.00 |        54.00 |
|    140 |   40083409 | FRENCH OVAL ROLLS?? (120X40G)             |        44.00 |        44.00 |
|    141 |   40083509 | MULTI CEREALS OVAL ROLLS? (120X40G)       |        48.00 |        48.00 |
|    142 |   40083609 | KAISER ROLLS WHITE SMALL? (140X40G)       |        56.00 |        56.00 |
|    143 |   40083709 | KAISER ROLLS MULTI-CEREALS SMAL(140X40G)  |        56.00 |        56.00 |
|    144 |   40083809 | CIABATTA ROLLS? (100X40G)                 |        45.00 |        45.00 |
|    145 |   40083909 | CIABATTA OLIVES SQUARES? (100X40G)        |        55.00 |        55.00 |
|    146 |   40084009 | CIABATTA ROLLS HERBS (OREGANO)(100X40G)   |        55.00 |        55.00 |
|    147 |   40084109 | CIABATTA RYE ROLLS (100X40G)              |        60.00 |        60.00 |
|    148 |   40084609 | LONG CIABATTA SANDWICH HERBS (55X120G)    |        93.00 |        93.00 |
|    149 |   40084709 | LONG CIABATTA SANDWICH OLIVES (55X120G)   |        93.00 |        93.00 |
|    150 |   40084809 | LONG CIABATTA SANDWICH PLAIN (55X120G)    |        85.00 |        85.00 |
|    151 |   40084909 | LONG CIABATTA SANDWICH RYE(55X120G)       |        88.00 |        88.00 |
|    152 |   40085009 | RUSTIC MULTI CEREALS ROLLS? (140X40G)     |        70.00 |        70.00 |
|    153 |   40085109 | RUSTIC MINI BAGUETTE? (140X 40G)          |        70.00 |        70.00 |
|    154 |   40085309 | RUSTIC WALNUT RAISIN LOAF 25CM (20X250G)  |        90.00 |        90.00 |
|    155 |   40085609 | KAISER ROLLS SESAME SMALL? (120X40G)      |        90.00 |        90.00 |
|    156 |   40086309 | SOFT BREAD ROLLS - WHITE (120X40G)        |        48.00 |        48.00 |
|    157 |   40086409 | SOFT BREAD ROLLS - BROWN (120X40G)        |        54.00 |        54.00 |
|    158 |   40086709 | SACC SANDWICH 20N OLIVE (90X80GM)         |       176.40 |       176.40 |
|    159 |   40086809 | SACC SANDWICH 20N PLAIN (90X80GM)         |       138.60 |       138.60 |
|    160 |   40086909 | SACC SANDWICH 20N PLAIN (120X60G)         |       148.80 |       148.80 |
|    161 |   40087909 | BY PRODUCT SACC SANDWICH PLAIN (120X60G)  |        25.00 |        25.00 |
|    162 |   40090006 | LARGE BUTTER CROISSANT (100X90G)          |       145.00 |       145.00 |
|    163 |   40090106 | LARGE CHEESE CROISSANT (100X100G)         |       161.00 |       161.00 |
|    164 |   40090206 | LARGE CHOCOLATE CROISSANT (100X100G)      |       194.00 |       194.00 |
|    165 |   40090306 | LARGE ZAATAR CROISSANT (100X100G)         |       161.00 |       161.00 |
|    166 |   40090506 | MEDIUM BUTTER CROISSANT (180X50G)         |       145.00 |       145.00 |
|    167 |   40090606 | MEDIUM CHEESE CROISSANT (180X60G)         |       164.00 |       164.00 |
|    168 |   40090706 | MEDIUM CHOCOLATE CROISSANT (180X60G)      |       218.00 |       218.00 |
|    169 |   40090806 | MEDIUM ZAATAR CROISSANT (180X60G)         |       164.00 |       164.00 |
|    170 |   40091006 | MINI BUTTER CROISSANT (340X25G)           |       177.00 |       177.00 |
|    171 |   40091106 | MINI CHEESE CROISSANT (340X30G)           |       186.00 |       186.00 |
|    172 |   40091206 | MINI CHOCOLATE CROISSANT (340X30G)        |       228.00 |       228.00 |
|    173 |   40091306 | MINI ZAATAR CROISSANT (340X30G)           |       186.00 |       186.00 |
|    174 |   40093706 | LARGE PLAIN CROISSANT(100X90G) P          |       140.00 |       140.00 |
|    175 |   40093806 | LARGE CHEESE CROISSANT(100X100G) P        |       155.00 |       155.00 |
|    176 |   40093906 | LARGE CHOCOLATE CROISSANT(100X100G) P     |       184.00 |       184.00 |
|    177 |   40094006 | LARGE ZAATAR CROISSANT(100X100G) P        |       155.00 |       155.00 |
|    178 |   40094106 | MEDIUM PLAIN CROISSANT(180X50G) P         |       126.00 |       126.00 |
|    179 |   40094206 | MEDIUM CHEESE CROISSANT(180X60G) P        |       136.00 |       136.00 |
|    180 |   40094306 | MEDIUM CHOCOLATE CROISSANT(180X60G) P     |       196.00 |       196.00 |
|    181 |   40094406 | MEDIUM ZAATAR CROISSANT(180X60G) P        |       136.00 |       136.00 |
|    182 |   40094506 | MINI PLAIN CROISSANT (340X25G) P          |       177.00 |       177.00 |
|    183 |   40094606 | MINI CHEESE CROISSANT(340X30G) P          |       186.00 |       186.00 |
|    184 |   40094706 | MINI CHOCOLATE CROISSANT(340X30G) P       |       228.00 |       228.00 |
|    185 |   40094806 | MINI ZAATAR CROISSANT(340X30G) P          |       186.00 |       186.00 |
|    186 |   40095206 | LARGE BUTTER PANDA CROISSANT (100X90G)    |       140.00 |       140.00 |
|    187 |   40095306 | MEDIUM BUTTER PANDA CROISSANT (180X50G)   |       126.00 |       126.00 |
|    188 |   40095406 | MINI BUTTER PANDA CROISSANT (340X25G)     |       177.00 |       177.00 |
|    189 |   40210012 | 6'S LAMB BURGER (24X336G)                 |       209.00 |       209.00 |
|    190 |   40210212 | 24'S LAMB BURGER (12X1344G)               |       350.00 |       295.00 |
|    191 |   40212012 | 15'S LAMB MEAT BALL (12X375G)             |       119.00 |       119.00 |
|    192 |   40213012 | 10'S LAMB KEBAB (12X320G)                 |       101.00 |       101.00 |
|    193 |   40214012 | BEEF BURGER WALIMA (6X1.400G)             |       110.00 |       110.00 |
|    194 |   40214112 | CHICKEN BREADED BURGER WALIMA (6X1.500G)  |       135.00 |       135.00 |
|    195 |   40230412 | 20'S REG BEEF BRGR IN PLSTC BAG (8X1 KG)  |       179.00 |       149.00 |
|    196 |   40230512 | 20'S HOT BEEF BRGR IN PLSTC BAG (8X1 KG)  |       179.00 |       149.00 |
|    197 |   40234312 | MARINATED BEEF SHREDDED-CANTON (5X2KGS)   |       343.00 |       343.00 |
|    198 |   40234412 | MARINATED BEEF SLICE-CANTON (5X2KGS)      |       343.00 |       343.00 |
|    199 |   40244612 | CHICKEN NUGGETS (4X2.5KG)                 |       170.00 |       170.00 |
|    200 |   40244712 | SUNBULAH 18'S CHICKEN BALLS (12X360G)     |        94.00 |        94.00 |
|    201 |   40244912 | SUNBULAH CHICKEN MEATBALLS CAT (4X2.5KG)  |       209.00 |       209.00 |
|    202 |   40245112 | CHICKEN DELUXE FILLET (12X420G)           |       200.00 |       200.00 |
|    203 |   40245212 | CRISPY CHICKEN TENDER (12X450G)           |       150.00 |       150.00 |
|    204 |   40245612 | BREADED CHICKEN FILLETS (12X450G)         |       185.00 |       185.00 |
|    205 |   40245712 | CHICKEN NUGGETS ROYAL (4X2.5KG)           |       145.00 |       145.00 |
|    206 |   40245812 | MOZZARELLA STICK (12X240G)                |       148.00 |       148.00 |
|    207 |   40250012 | 24'S REGULAR BEEF BURGER (12X1344G)       |       380.00 |       295.00 |
|    208 |   40250112 | 4'S REGULAR BEEF BURGER (24X224G)         |       156.00 |       156.00 |
|    209 |   40250212 | 8'S REGULAR BEEF BURGER (12XX448G)        |       149.00 |       149.00 |
|    210 |   40250312 | 4'S HOT BEEF BURGER (24X224G)             |       156.00 |       156.00 |
|    211 |   40250412 | 8'S HOT BEEF BURGER (12X448G)             |       149.00 |       149.00 |
|    212 |   40250512 | 20'S HOT BEEF BRGR IN PLSTC BAG(8X1120G)  |       201.00 |       201.00 |
|    213 |   40250712 | 10'S GIANT BEEF BURGER (8X1KG)            |       187.00 |       160.00 |
|    214 |   40250812 | 18'S BEEF MEAT BALL (12X360G)             |       117.00 |       117.00 |
|    215 |   40250912 | BEEF MEAT BALLS (4X2.5KG) CAT.            |       155.00 |       155.00 |
|    216 |   40251012 | 10'S BEEF KEBAB (12X600G)                 |       182.00 |       182.00 |
|    217 |   40251612 | BEEF MEAT BALLS ROYAL (4X2.5KG)           |       120.00 |       120.00 |
|    218 |   40251812 | BEEF MEAT BALLS SUPER (4X2.5KG)           |       145.00 |       145.00 |
|    219 |   40255112 | CHICKEN POP CORN (12X400G)                |       139.00 |       128.00 |
|    220 |   42002060 | AL-SHIFA SIDR HONEY (6X500G)              |       600.00 |       600.00 |
|    221 |   40256012 | REGULAR CHICKEN NUGGETS (12X400G)         |       128.00 |       128.00 |
|    222 |   40256112 | FUN CHICKEN NUGGETS (12X400G)             |       130.00 |       128.00 |
|    223 |   40256212 | HOT CHICKEN NUGGETS (12X400G)             |       139.00 |       128.00 |
|    224 |   40255512 | IQF CHICKEN BREAST FREE SIZE (4X2.5KG)    |       200.00 |       200.00 |
|    225 |   40256312 | IQF CHICKEN BREAST 4OZ (4X2.5KG) - CAT    |       210.00 |       210.00 |
|    226 |   40256512 | IQF CHICKEN BREAST 65G (4X2.5KG) - CAT    |       185.00 |       185.00 |
|    227 |   40256712 | CHICKEN NUGGETS (8X750G)                  |       152.00 |       136.00 |
|    228 |   40260112 | 24'S BREADED CHICKEN BURGER (12X1344G)    |       328.00 |       295.00 |
|    229 |   40260412 | 4'S BREADED CHICKEN BURGER (24X224GM)     |       133.00 |       133.00 |
|    230 |   40260512 | 8'S BREADED CHICKEN BURGER (12X448G)      |       121.00 |       121.00 |
|    231 |   40260812 | 4'S UNBREADED CHICKEN BURGER (24X224G)    |       133.00 |       133.00 |
|    232 |   40260912 | 8'S UN-BREADED CHICKEN BURGER (12X448G)   |       121.00 |       121.00 |
|    233 |   40261012 | 24'S UN-BREADED CHCKN BURGER (12X1344G)   |       347.00 |       295.00 |
|    234 |   40262012 | 12'S BREADED CHICKEN BURGER (12X672G)     |       195.00 |       180.00 |
|    235 |   40262112 | 15'S BREADED CHCKN BURGER IN PB (8X750G)  |       138.00 |       126.00 |
|    236 |   40262212 | 15'S UNBREADED CHCKN BRGR IN PB (8X750G)  |       138.00 |       126.00 |
|    237 |   40262312 | HOME MADE BEEF BURGER                     |       195.00 |       195.00 |
|    238 |   40263112 | CHICKEN FILLET ESCALLOP REG (4X2.5 KG)    |       200.00 |       200.00 |
|    239 |   40263312 | CHICKEN HOT FILLETS                       |       220.00 |       220.00 |
|    240 |   40263412 | CHICKEN FAJITHA                           |       225.00 |       225.00 |
|    241 |   40263512 | CHICKEN FILLET CATERING 2.5 * 4           |       220.00 |       220.00 |
|    242 |   40256412 | IQF CHICKEN BREAST 6OZ (4X2.5KG) - CAT    |       220.00 |       220.00 |
|    243 |   40470018 | SUNBULAH GARDEN PEAS (24X250 G)           |        94.00 |        94.00 |
|    244 |   40470118 | SUNBULAH GARDEN PEAS (12X450 G)           |        81.00 |        60.00 |
|    245 |   40470218 | SUNBULAH GARDEN PEAS (12X900 G)           |       150.00 |       120.00 |
|    246 |   40470618 | SUNBULAH GARDEN PEAS (4X2.5 KG)           |        92.00 |        92.00 |
|    247 |   40470718 | SUNBULAH PEAS &amp; CARROTS 12X450G           |        71.00 |        60.00 |
|    248 |   40470818 | SUNBULAH PEAS &amp; CARROTS 12X900G           |       141.00 |       120.00 |
|    249 |   40471018 | SUNBULAH MIXED VEGETABLE (24X250 G)       |        86.00 |        86.00 |
|    250 |   40471118 | SUNBULAH MIXED VEGETABLE (12X450 G)       |        73.00 |        60.00 |
|    251 |   40471218 | SUNBULAH MIXED VEGETABLE (12X900 G)       |       141.00 |       120.00 |
|    252 |   40471618 | SUNBULAH MIXED VEGETABLE (4X2.5 KG)       |        90.00 |        90.00 |
|    253 |   40472118 | SUNBULAH BROAD BEANS (12X450 G)           |       103.00 |       103.00 |
|    254 |   40472218 | SUNBULAH BROAD BEANS (12X900 G)           |       193.00 |       193.00 |
|    255 |   40473112 | SUNBULAH CUT GREEN BEANS (12X450 G)       |        66.00 |        66.00 |
|    256 |   40473118 | SUNBULAH CUT GREEN BEANS (12X450 G)       |        66.00 |        60.00 |
|    257 |   40473218 | SUNBULAH CUT GREEN BEANS (12X900 G)       |       128.00 |       120.00 |
|    258 |   40473618 | SUNBULAH CUT GREEN BEANS (4X2.5 KG)       |       107.00 |       107.00 |
|    259 |   40474118 | SUNBULAH SWEET CORN (12X450 G)            |        89.00 |        65.00 |
|    260 |   40474218 | SUNBULAH SWEET CORN (12X900 G)            |       145.00 |       120.00 |
|    261 |   40474618 | SUNBULAH SWEET CORN (4X2.5KG)             |        90.00 |        90.00 |
|    262 |   40475112 | SUNBULAH CORN ON THE COB 840G(4X210G)     |       174.00 |       174.00 |
|    263 |   40475118 | SUNBULAH CORN ON THE COB (12X4X240G)      |       174.00 |       174.00 |
|    264 |   40475124 | SUNBULAH CORN ON THE COB 840G(4X210G)     |       174.00 |       174.00 |
|    265 |   40475518 | SUNB MINI CORN ON THE COB 6X12X140G       |       131.00 |       131.00 |
|    266 |   40560712 | SUNBULAH SHREDDED MOZZARELLA (4X2.3 KG)   |       200.00 |       200.00 |
|    267 |   42000160 | AL-SHIFA (NATURAL) (24X125G)              |       202.00 |       202.00 |
|    268 |   42000260 | AL-SHIFA (NATURAL) (12X750 G)             |       428.00 |       428.00 |
|    269 |   42001960 | AL-SHIFA NATURAL BULK HONEY (KGS)         |        33.00 |        33.00 |
|    270 |   42002160 | AL-SHIFA (ACACIA) (24X125G)               |       305.00 |       305.00 |
|    271 |   42004360 | AL-SHIFA BLACK FOREST (12X250 G)          |       383.00 |       383.00 |
|    272 |   42004660 | AL-SHIFA BLACK FOREST BULK HONEY (KGS)    |        60.00 |        60.00 |
|    273 |   42005460 | AL-SHIFA LIMETREE (12X500 G)              |       425.00 |       425.00 |
|    274 |   42006360 | AL-SHIFA CREAMY HONEY (12X250G)           |       145.00 |       145.00 |
|    275 |   42006460 | AL-SHIFA WHITE CREAMY HONEY (12X500G)     |       278.00 |       278.00 |
|    276 |   42006860 | LEATHER WOOD BULK HONEY (KGS)             |        64.00 |        64.00 |
|    277 |   42006960 | AL-SHIFA ARGENTINA CREAMY BULK (KGS)      |        33.00 |        33.00 |
|    278 |   42101060 | AL-SHIFA NATURAL (100X25 G)-NEW           |        57.00 |        57.00 |
|    279 |   42101160 | AL-SHIFA NATURAL (100X25 G) NADEC         |        57.00 |        57.00 |
|    280 |   42102060 | AL-SHIFA NATURAL (100X30 G)-NEW           |        67.00 |        67.00 |
|    281 |   42103060 | AL-SHIFA NATURAL HONEY (144 X 30G)-NEW    |       195.00 |       195.00 |
|    282 |   42103160 | ALSHIFA NAT 30G JARS SP ED 4(36X30G)-NEW  |       243.00 |       243.00 |
|    283 |   42104060 | AL-SHIFA (NATURAL) (24X125G)-NEW          |       212.00 |       212.00 |
|    284 |   42105060 | AL-SHIFA NATURAL (12X250 G)-NEW           |       190.00 |       190.00 |
|    285 |   42106060 | AL-SHIFA NATURAL (12X500 G)-NEW           |       337.00 |       337.00 |
|    286 |   42107060 | AL-SHIFA (NATURAL) (12X750 G)-NEW         |       473.00 |       473.00 |
|    287 |   42108060 | AL-SHIFA NATURAL (6X1 KG)-NEW SQUARE      |       268.00 |       268.00 |
|    288 |   42109060 | AL-SHIFA NATURAL (4X3KG)-NEW              |       495.00 |       495.00 |
|    289 |   42110060 | AL SHIFA NATURAL (6X1KG) - OCTO JARS      |       281.00 |       281.00 |
|    290 |   42151060 | AL-SHIFA SQUEEZE (12X250 G) -NEW          |       208.00 |       208.00 |
|    291 |   42151560 | AL-SHIFA SQUEEZE (12X400 G)-NEW           |       303.00 |       303.00 |
|    292 |   42157060 | AL SHIFA ACACIA (12X400G) SQUEEZE         |       547.00 |       547.00 |
|    293 |   42161060 | AL-SHIFA ACACIA HONEY (144 X 30G)-NEW     |       248.00 |       248.00 |
|    294 |   42161560 | AL-SHIFA (ACACIA) (24X125G)-NEW           |       369.00 |       369.00 |
|    295 |   42162060 | AL-SHIFA ACACIA (12X250 G)-NEW            |       344.00 |       344.00 |
|    296 |   42162560 | AL-SHIFA ACACIA (12X500 G)-NEW            |       610.00 |       610.00 |
|    297 |   42163060 | AL-SHIFA BLACK FOREST HONEY (144X30G)     |       248.00 |       248.00 |
|    298 |   42163160 | AL-SHIFA BLACK FOREST HONEY 4(36X30G)     |       365.00 |       365.00 |
|    299 |   42163560 | AL-SHIFA (BLACK FOREST) (24X125G)-NEW     |       468.00 |       468.00 |
|    300 |   42164060 | AL-SHIFA BLACK FOREST (12X250 G)-NEW      |       442.00 |       442.00 |
|    301 |   42164560 | AL-SHIFA BLACK FOREST (12X500 G)-NEW      |       850.00 |       850.00 |
|    302 |   42165060 | ALSHIFA BLACK FOREST (6X1KG) OCTO JAR     |       670.00 |       670.00 |
|    303 |   42165560 | AL-SHIFA ORANGE (12X500 G)-NEW            |       467.00 |       467.00 |
|    304 |   42166060 | AL-SHIFA LIMETREE (12X500 G)-NEW          |       467.00 |       467.00 |
|    305 |   42166560 | AL SHIFA HONEY GOLDEN NECTAR (12X500G)-N  |       276.00 |       276.00 |
|    306 |   42167060 | AL-SHIFA SIDR HONEY(144X30G)              |       432.00 |       432.00 |
|    307 |   42167160 | AL-SHIFA SIDR HONEY 4(36X28G)             |       608.00 |       608.00 |
|    308 |   42168060 | AL SHIFA SIDR HONEY (12X250G) - TB        |       650.00 |       650.00 |
|    309 |   42302060 | AL SHIFA NATURAL (12X500G) INDO SFRO      |       337.00 |       337.00 |
|    310 |   42312060 | AL SHIFA NATURAL (24X125G)TUN-2018        |       212.00 |       212.00 |
|    311 |   42313060 | AL SHIFA NATURAL (12X500G)TUN-2018        |       337.00 |       337.00 |
|    312 |   42314060 | AL SHIFA NATURAL (6X1KG)Square-TUN-2018   |       281.00 |       281.00 |
|    313 |   42561060 | AL SHIFA NATURAL (24X125G)??SFRO          |       212.00 |       212.00 |
|    314 |   42562060 | AL SHIFA NATURAL (12X500G)??SFRO          |       337.00 |       337.00 |
|    315 |   42572560 | AL SHIFA NATURAL(6X1KG) OCT- INDO - GIP   |       281.00 |       281.00 |
|    316 |   42680060 | SARY HONEY PORTIONS (100X25G) - RV        |        48.00 |        48.00 |
|    317 |   42680660 | SARY HONEY (24X70G) - RV                  |        51.00 |        51.00 |
|    318 |   42680760 | SARY HONEY (24X125G) - RV                 |        96.00 |        96.00 |
|    319 |   42680960 | SARY HONEY (12X250G) - RV                 |        95.00 |        95.00 |
|    320 |   42681260 | SARY HONEY SQUEEZY (12X400G) - RV         |       156.00 |       156.00 |
|    321 |   42681560 | SARY HONEY (12X500G) - RV                 |       180.00 |       180.00 |
|    322 |   42681860 | SARY HONEY JARS (6X1KG) - RV              |       168.00 |       168.00 |
|    323 |   42682160 | SARY HONEY JARS (6X1.5 KG) - RV           |       232.00 |       232.00 |
|    324 |   42682460 | SARY HONEY JARS (4X3 KG) - RV             |       281.00 |       281.00 |
|    325 |   50019111 | MINI DANISH CHOC. &amp; HAZELNUT (225X40G)    |       151.00 |       151.00 |
|    326 |   50041324 | WALIMAH VEGETABLES SAMOSA 23G (4X50PC)    |       110.00 |       110.00 |
|    327 |   50041712 | BEEF TOPSIDE CAP OFF GRADE A              |       644.00 |       644.00 |
|    328 |   50051612 | SUNBULAH PIZZA VEGETARIANA (12X420G)      |       210.00 |       210.00 |
|    329 |   50051712 | SUNBULAH PIZZA PESTO (12X380G)            |       210.00 |       210.00 |
|    330 |   50350118 | BULK SQUARE FISH BURGER 60 GRAM(10X1KG)   |       255.00 |       255.00 |
|    331 |   50350418 | BULK SQUARE FISH BURGER 60 GM (24X360G)   |       171.00 |       171.00 |
|    332 |   50350518 | BULK FISH FINGERS 25G - (30X300G)         |       137.00 |       137.00 |
|    333 |   50351112 | WALIMAH WHITE FISH FILLET (10X1KG)        |       120.00 |       120.00 |
|    334 |   50351124 | WALIMAH WHITE FISH FILLET (10X1KG)        |       120.00 |       120.00 |
|    335 |   50351212 | WALIMAH WHITE FISH FILLET (5X2KG)         |       115.00 |       115.00 |
|    336 |   50360912 | 12'S SQUARE FISH BURGER (12X720G)         |       280.00 |       280.00 |
|    337 |   50361012 | 12'S SUNBULAH FISH FINGER (12X300G)       |       123.00 |       123.00 |
|    338 |   50361018 | 12'S SUNBULAH FISH FINGER (12X300G)       |       123.00 |       123.00 |
|    339 |   50361112 | 24'S SUNBULAH FISH FINGER (12X600G)       |       226.00 |       226.00 |
|    340 |   50361212 | 10'S SUNBULAH JUMBO F/FINGER (12X560G)    |       206.00 |       206.00 |
|    341 |   50361912 | 6'S SQUARE FISH BURGER (12X360G)          |       145.00 |       145.00 |
|    342 |   50365212 | BREADED SHRIMPS (12X240G)                 |       154.00 |       154.00 |
|    343 |   50470218 | 1 INCH BULK CUT GREEN BEANS (1X20KGS.)    |       100.00 |       100.00 |
|    344 |   50470624 | BROAD BEANS (BULK 25 KGS.)                |       275.00 |       275.00 |
|    345 |   50470718 | MINI CORN ON THE COB (BULK) 96PCS         |       110.00 |       110.00 |
|    346 |   50475818 | SUNB.SUPER CRISP F.F 7MM (6X1.5KG)        |        65.00 |        85.00 |
|    347 |   50475918 | FRENCH FRIES- 10MM (4X2.5KG) - (RETAIL)   |        53.00 |        60.00 |
|    348 |   50476018 | SUNB FRENCH FRIES 7MM-F-(10X1KG) RETAIL   |        63.00 |        65.00 |
|    349 |   50476118 | SUNB FRENCH FRIES 10MM-F-(10X1KG) RETAIL  |        61.00 |        65.00 |
|    350 |   50476818 | FRENCH FRIES - F -(CATERING) (4X2.5KG)    |        49.00 |        49.00 |
|    351 |   50476918 | FRENCH FRIES - U -(CATERING) (4X2.5KG)    |        49.00 |        49.00 |
|    352 |   50477212 | SUNBULAH SPINACH (20 X 400G)              |        44.00 |        44.00 |
|    353 |   50477318 | SUNBULAH SPICED POTATO WEDGES (4X2.5 KG)  |        85.00 |        85.00 |
|    354 |   50477518 | SUNB.SEASONED F.F 10MM(6X1.5)             |        75.00 |        90.00 |
|    355 |   50477618 | SUNBULAH BROCCOLI (20X400G)               |       143.00 |       143.00 |
|    356 |   50477712 | SUNBULAH ONION RINGS (8X1KG)              |       130.00 |       130.00 |
|    357 |   50477718 | SUNBULAH ONION RINGS (8X1KG)              |       130.00 |       130.00 |
|    358 |   50478018 | WALIMA PEELED TOMATO (24X400G)            |        46.00 |        46.00 |
|    359 |   50478118 | WALIMA PEELED TOMATO (6X2550G)            |        70.00 |        70.00 |
|    360 |   50478218 | WALIMA PEELED TOMATO EASY OPEN (24X400G)  |        46.00 |        46.00 |
|    361 |   50478318 | FRENCH FRIES-L- 10MM (CAT)(4X2.5KG) T     |        49.00 |        49.00 |
|    362 |   50478418 | THIN FRENCH FRIES-L-CAT 7MM (4X2.5KG)T    |        51.00 |        51.00 |
|    363 |   50480018 | SUNBULAH MEXICAN MIX VEG (20X450G)        |       107.00 |       107.00 |
|    364 |   50480118 | ASIAN MIXED VEGETABLES (20X450G)          |       115.00 |       115.00 |
|    365 |   50480318 | EUROPEAN MIXED VEGETABLES (20X450G)       |       107.00 |       107.00 |
|    366 |   50480418 | VEGETABLE SOUP MIX (20X450G)              |        90.00 |        90.00 |
|    367 |   50480618 | SUNBULAH MEXICAN MIX VEG (20X450G)-NP     |       107.00 |       107.00 |
|    368 |   50480718 | SUNBULAH ASIAN ?MIX VEG (20X450G)-NP      |       115.00 |       115.00 |
|    369 |   50480818 | SUNBULAH ITALIAN MIX VEG (20X450G)-NP     |       107.00 |       107.00 |
|    370 |   50480918 | SUNBULAH EURO MIX VEG (20X450G)-NP        |       107.00 |       107.00 |
|    371 |   50481018 | SUNBULAH 4 VEG SOUP MIX (20X450G)-NP      |        90.00 |        90.00 |
|    372 |   50482024 | MIXED VEGETABLES BULK (1X25KGS)           |       110.00 |       110.00 |
|    373 |   50483024 | MIXED VEGETABLES BULK (1X23KGS)           |       100.00 |       100.00 |
|    374 |   50486018 | THIN FRENCH FRIES ?7 MM (4X2.5KG)-RETAIL  |        55.00 |        60.00 |
|    375 |   50486412 | SUNBULAH MOLOKHIA (20X400G)               |        76.00 |        76.00 |
|    376 |   50487012 | SUNBULAH STRAWBERRY (10X800G)             |        86.00 |        86.00 |
|    377 |   50487018 | SUNBULAH STRAWBERRY (10X800G)             |        86.00 |        86.00 |
|    378 |   50487112 | WALIMAH STRAWBERRY (10X800G)              |        58.00 |        58.00 |
|    379 |   50487318 | WALIMAH MIXED VEGETABLES (20X400G)        |        49.00 |        49.00 |
|    380 |   50487418 | WALIMAH MIXED VEGETABLES (20X400G)-CAT    |        49.00 |        49.00 |
|    381 |   50487512 | SUNBULAH MANGO SLICES (10X1KG)            |        90.00 |        90.00 |
|    382 |   50487618 | WALIMAH MANGO PULP (16X1KG)               |       135.00 |       135.00 |
|    383 |   50487712 | SUNBULAH GUAVA PULP (16X1KG)              |        90.00 |        90.00 |
|    384 |   50488412 | SUNBULAH STRAWBERRY (10X800G) FS          |        72.00 |        72.00 |
|    385 |   50488518 | BULK PEAS &amp; CARROTS (1X20KGS)             |       105.00 |       105.00 |
|    386 |   50488624 | TWO WAY MIX PEAS &amp; CARROTS (1X25KG)       |       135.00 |       135.00 |
|    387 |   50488718 | WALIMA FRENCH FRIES 10 MM (4X2.5 KG)      |        41.00 |        41.00 |
|    388 |   50488912 | SUNBULAH MANGO PULP AL PHONSO (16X1KG)    |       136.00 |       136.00 |
|    389 |   50488918 | SUNBULAH MANGO PULP AL PHONSO (16X1KG)    |       136.00 |       136.00 |
|    390 |   50489218 | WALIMA CUT GREEN BEANS (20X400G)-CAT      |        44.00 |        44.00 |
|    391 |   50489318 | WALIMA CUT GREEN BEANS (20X400G)          |        44.00 |        44.00 |
|    392 |   50489518 | BULK GARDEN PEAS (1X20KGS)                |       100.00 |       100.00 |
|    393 |   50490118 | SUNBULAH ARTICHOKE (20X400G)              |       154.00 |       154.00 |
|    394 |   50511118 | WALIMA FINE OKRA (20X400G)                |        80.00 |        80.00 |
|    395 |   50511318 | SUNBULAH OKRA ZERO 3.5 (20X400G)          |       120.00 |       120.00 |
|    396 |   50511518 | SUNBULAH OKRA EXTRA (20X400G)             |       137.00 |       137.00 |
|    397 |   50511618 | WALIMAH GREEN PEAS (20X400G)-CAT          |        53.00 |        53.00 |
|    398 |   50511718 | SUNBULAH OKRA EXTRA (20X400G)             |       137.00 |       137.00 |
|    399 |   51476718 | FRENCH FRIES-L- 10MM (CAT)(4X2.5KG) WH    |        49.00 |        49.00 |
|    400 |   52476718 | FRENCH FRIES-L- 10MM (CAT)(4X2.5KG) WH    |        49.00 |        49.00 |
|    401 |   53476718 | FRENCH FRIES-L- 10MM (CAT)(4X2.5KG) WH    |        49.00 |        49.00 |
|    402 |   56060006 | SUNBULAH SHREDDED MOZZARELLA (24X200 G)   |       180.00 |       180.00 |
|    403 |   56060106 | SUNBULAH SHREDDED MOZZARELLA (12X500G)    |       209.00 |       209.00 |
|    404 |   56060506 | SUNBULAH SHREDDED MOZZARELLA (6X1 KG)     |       193.00 |       193.00 |
|    405 |   56104112 | WALIMA PROCESSED CHEESE BLOCK -6X1.8KG)   |       190.00 |       190.00 |
|    406 |   56321712 | SUNBULAH FETA CHEESE - 16KG (1X16KG)      |       120.00 |       120.00 |
|    407 |   56321912 | SUNB WHITE CHEESE-TETRA PACK (12X500G)    |        96.00 |        96.00 |
|    408 |   56322112 | SUNB WHITE CHEESE-TETRA PACK (27X200G)    |       107.00 |       107.00 |
|    409 |   56322412 | SUNBULAH KASHKAVAL CHEESE (32X350G)       |       497.00 |       497.00 |
|    410 |   56322512 | SUNBULAH KASHKAVAL CHEESE (20X700G)       |       590.00 |       590.00 |
|    411 |   56343012 | WALIMAH MOZZARELLA BLOCK (4X2.3KG)        |       212.00 |       160.00 |
|    412 |   56343112 | SUNB MOZZARELLA BLOCK 9.2KG POL(4X2.3KG)  |       230.00 |       230.00 |
|    413 |   56360912 | SUNBULAH KASHKAVAL CHEESE (2X8KG)         |       570.00 |       529.00 |
|    414 |   56380012 | ALAMBRA HALLOUMI CHEESE(45X220G)          |       475.00 |       475.00 |
|    415 |   56380212 | ALAMBRA CHILLI HALLOUMI (50X200G)         |       495.00 |       495.00 |
|    416 |   56380312 | ALAMBRA LIGHT HALLOUMI (45X225G)          |       475.00 |       475.00 |
|    417 |   56380812 | SUNBULAH HALLOUMI CHEESE (40X250G)        |       418.00 |       418.00 |
|    418 |   56380912 | SUNB HALLOUMI CHEESE LIGHT (40X250G)      |       480.00 |       480.00 |
|    419 |   56920418 | WALIMA CANNED CREAM (48X170GM)            |       120.00 |       120.00 |
|    420 |   56930612 | SUNBULAH CHICKEN FRANKS (24X375G)         |       120.00 |       120.00 |
|    421 |   56930912 | WALIMA CHICKEN FRANKS (24 X 340G)         |        72.00 |        72.00 |
|    422 |   56932612 | WALIMA CHICKEN FRANKS UAE (24 X 340G)     |        72.00 |        72.00 |
|    423 |   57510218 | HOMMOS TAHINI / CHTAURA (24X380G)         |        61.00 |        61.00 |
|    424 |   57510224 | HOMMOS TAHINI / CHTAURA (24X380G)         |        61.00 |        61.00 |
|    425 |   57510318 | HOMMOS TAHINI / CHTAURA (24X180GM)        |        37.00 |        37.00 |
|    426 |   57510324 | HOMMOS TAHINI / CHTAURA (24X185G)         |        37.00 |        37.00 |
|    427 |   57512524 | SARY APRICOT JAM PLASTIC PORTION 224X30G  |        52.00 |        52.00 |
|    428 |   57512624 | SARY STRAWBERRY JAM PLASTIC PRTN 224X30G  |        52.00 |        52.00 |
|    429 |   57514218 | CILEKLI CHEESE CAKE/STRAWBERRY (1X1920G)  |        86.00 |        86.00 |
|    430 |   57514318 | KARA ORMAN PASTA/BLACK FOREST (1X1680G)   |        75.00 |        75.00 |
|    431 |   57514511 | MINI VANILLA CROWN 46G (120GX46G)         |       225.00 |       225.00 |
|    432 |   57514518 | SUNB ELMALI TART/APPLE PIE (1X1440G)      |        60.00 |        60.00 |
|    433 |   57514611 | MINI CINNAMON ROLL 46G (120GX46G)         |       225.00 |       225.00 |
|    434 |   57514618 | SUNB HAVUCLU KEK/CARROT CAKE (1X1750G)    |        80.00 |        80.00 |
|    435 |   57514711 | MINI RASPBERRY CROWN 46G (120GX46G)       |       225.00 |       225.00 |
|    436 |   57514718 | TIRAMISU KARE/TIRAMISU SQUARE (1X1400G)   |        64.00 |        64.00 |
|    437 |   57514811 | SUNB MINI APPLE CORONET (120GX46G)        |       225.00 |       225.00 |
|    438 |   57515518 | SUNBULAH POTATO WEDGES (12X750G)          |        83.00 |        83.00 |
|    439 |   57516418 | SUNB NEW YORK CHEESE CAKE (1X1920G)       |        87.00 |        87.00 |
|    440 |   57517012 | WALIMA EVAPORATED MILK (96X170G)          |       145.00 |       145.00 |
|    441 |   57518018 | SUNBULAH CRUNCHY CUTS (6X1.5KG)           |        87.00 |        99.00 |
|    442 |   58011106 | SUNBULAH TURKISH LABNEH (4X2.75KG)        |       188.00 |       188.00 |
|    443 |   58011206 | SUNBULAH TURKISH LABNEH (24X180G)         |       117.00 |       117.00 |
|    444 |   58011306 | SUNBULAH TURKISH LABNEH (24X475G)         |       240.00 |       240.00 |
|    445 |   58011406 | SUNBULAH TURKISH LABNEH (18X700G)         |       300.00 |       300.00 |
|    446 |   58011518 | SUNBULAH CAULIFLOWER (20X400G)            |        79.00 |        79.00 |
|    447 |   59000012 | FRICO EDAM CHEESE BALLS MILD (6X1.9KG)    |       408.00 |       408.00 |
|    448 |   59000112 | FRICO DELI GOUDA CUMIN 4X4.5KG(WHEEL)     |       702.00 |       702.00 |
|    449 |   59000212 | FRICO DELI HOLLAND GOUDA CHEESE 4X4.5KG   |       644.00 |       644.00 |
|    450 |   59000312 | FRICO EDAM CHEESE WITH CHILLIES(2X1.9KG)  |       163.00 |       163.00 |
|    451 |   59000412 | FRICO EDAM CHESSE WITH HERBS (2X1.9KG)    |       163.00 |       163.00 |
|    452 |   59000512 | FRICO GOAT'S CHEESE WHEEL (1X4.5KG)       |       263.00 |       263.00 |
|    453 |   59000612 | FRICO LIGHT CHEESE WHEEL (1X4.5KG)        |       205.00 |       205.00 |
|    454 |   59000712 | FRICO GOUDA CHEESE WITH CUMIN (1X4.5KG)   |       176.00 |       176.00 |
|    455 |   59000812 | FRICO GOUDA CHEESE WITH PEPPER (1X4.5KG)  |       193.00 |       193.00 |
|    456 |   59000912 | FRICO GOUDA HOLLAND CHEESE MILD(1X4.5KG)  |       161.00 |       161.00 |
|    457 |   59001012 | FRICO EDAM WEDGE MILD ( 24X235G )         |       298.00 |       298.00 |
|    458 |   59001112 | FRICO GOUDA CUMIN WEDGE (17X295G)         |       265.00 |       265.00 |
|    459 |   59001212 | FRICO GOUDA WEDGE MILD (17X295G)          |       231.00 |       231.00 |
|    460 |   59001312 | FRICO RED HOT DUTCH CHEESE WEDGE(13X235)  |       161.00 |       161.00 |
|    461 |   59001412 | FRICO HERBEY DUTCH WEDGE ( 13X235G )      |       161.00 |       161.00 |
|    462 |   59001512 | FRICO EMMENTAL CHEESE LOAF (5X3KG)        |       536.00 |       536.00 |
|    463 |   59001612 | FRICO EDAM SLICES MILD (12X150G)          |        96.00 |        96.00 |
|    464 |   59001712 | FRICO SMOKED PROCESSED CHEESE (4X2.85KG)  |       385.00 |       385.00 |
|    465 |   59001812 | FRICO MAASDAM CHEESE WHEEL (1X13KG)       |       558.00 |       558.00 |
|    466 |   59001912 | FRICO GOUDA SLICES MILD (12X150G)         |        96.00 |        96.00 |
|    467 |   59002012 | FRICO BABY EDAM CHEESE BALLS (6X900G)     |       238.00 |       238.00 |
|    468 |   59002212 | FRICO RED HOTDUTCH CHEESE SLICES(12X150)  |       115.00 |       115.00 |
|    469 |   59002312 | FRICO LIGHT CHEESE SLICES (12X150G)       |       115.00 |       115.00 |
|    470 |   59002412 | FRICO MAASDAM CHEES SLICES (12X150G)      |       115.00 |       115.00 |
|    471 |   59002512 | FRICO MIMOLETTE CH SLICES MILD (12X150G)  |       115.00 |       115.00 |
|    472 |   59002612 | FRICO CHEVRETTE CHEESE SLICES (12X150G)   |       144.00 |       144.00 |
|    473 |   59002712 | FRICO GOUDA OLD DUTCH MASTER (2X5KG)      |       520.00 |       520.00 |
|    474 |   59002812 | FRICO GC MEDITERRANEA HERB SEEDS(1X4.5K)  |       219.00 |       219.00 |
|    475 |   40478118 | SUNBULAH MIXED VEGETABLE (12X900 G)-SL    |       141.00 |       141.00 |
|    476 |   56040036 | AL SHIFA HONEY DROPS(12x7g)               |       320.00 |       320.00 |
|    477 |   40480018 | WALIMA GARDEN PEAS (20X400G)              |        80.00 |        80.00 |
|    478 |   42004060 | SARY HONEY (6X1.5KG)                      |       232.00 |       232.00 |
|    479 |   42030160 | SARY HONEY (24X80G)                       |        51.00 |        51.00 |
|    480 |   42030360 | SARY HONEY (24X70G)                       |        51.00 |        51.00 |
|    481 |   42030660 | SARY NATURAL HONEY (12X250G)              |        95.00 |        95.00 |
|    482 |   42030760 | SARY NATURAL HONEY (12X500G)              |       180.00 |       180.00 |
|    483 |   42031260 | SARY HONEY - PORTION (100X30G)            |        46.00 |        46.00 |
|    484 |   42031660 | SARY HONEY -JARS (6X1KG)                  |       168.00 |       168.00 |
|    485 |   42031760 | SARY HONEY -JARS (4X3KG)                  |       281.00 |       281.00 |
|    486 |   42032260 | SARY HONEY - PORTION (100X25G)            |        48.00 |        48.00 |
|    487 |   50485718 | THIN FRENCH FRIES-L-CAT 7MM (4X2.5KG)WH   |        51.00 |        51.00 |
|    488 |   50486512 | WALIMAH MOLOKIAH (20X400G)                |        64.00 |        60.00 |
|    489 |   50489418 | WALIMA SWEET CORN (20X400G)               |        80.00 |        60.00 |
|    490 |   50470318 | BULK CUT GREEN BEANS (1X25KGS.)           |       115.00 |       115.00 |
|    491 |   50511018 | WALIMAH OKRA - ONE(20X400G)               |        80.00 |        60.00 |
|    492 |   50511118 | WALIMA FINE OKRA (20X400G)                |        55.00 |        55.00 |
|    493 |   56040136 | AL SHIFA HONEY DROPS(24x7g)               |       320.00 |       320.00 |
|    494 |   56341912 | SUNB MOZZARELLA BLOCK 8.8KG CAN(4X2.2KG)  |       260.00 |       260.00 |
|    495 |   40267012 | FULLY COOKED 4OZ-QUIZ                     |       200.00 |       200.00 |
|    496 |   50470618 | BROAD BEANS (BULK 25 KGS.)                |       210.00 |       210.00 |
|    497 |   50489518 | BULK GARDEN PEAS (1X20KGS)                |       125.00 |       125.00 |
|    498 |   42151060 | AL-SHIFA SQUEEZE (12X250 G) -NEW          |       198.00 |       198.00 |
|    499 |   50483018 | BULK MIXED VEGETABLES (1X20KGS)           |        95.00 |        95.00 |
|    500 |   40255512 | IQF CHICKEN BREAST FREE SIZE (4X2.5KG)    |       110.00 |       110.00 |
|    501 |   56936012 | BEEF SAMBUSA 20G(4X50PCS)                 |       110.00 |       110.00 |
|    502 |   56936112 | CHICKEN SAMBUSA 20G(4X50PCS)              |       110.00 |       110.00 |
|    503 |   56936212 | CHEESE SAMBUSAK 20g 4x50                  |       110.00 |       110.00 |
|    504 |   56936312 | VEGETABLES SAMBUSAK 20g 4x50              |       110.00 |       110.00 |
|    505 |   40256812 | IQF CHICKEN BREAST 6oz (4x2.5kg) - D      |       200.00 |       200.00 |
|    506 |   56930812 | BULK MINCED CHICKEN 5kgs                  |        23.50 |        23.50 |
|    507 |   59009012 | SUNBULAH CHEESE SANBUSAK (12X240G)        |       110.00 |       110.00 |
|    508 |   59009112 | SUNBULAH VEGETABLE SAMBOSA 12X240G        |       110.00 |       110.00 |
|    509 |   59009212 | SUNBULAH VEGETABLE SPRING ROLL 12X240G    |        95.00 |        95.00 |
|    510 |   59005006 | FRICO MOZZARELLA SHREDDED 12X200G         |       125.00 |       125.00 |
|    511 |   59006006 | FRICO MOZZARELLA SHREDDED 12X450G         |       260.00 |       260.00 |
|    512 |   32042460 | AL SHIFA NATURAL 1KG+125 SIDR HONEY FREE  |       281.00 |       281.00 |
|    513 |   59013024 | CITY CAFE 3IN1 STICKS - BAG -18G X20 PC   |       291.00 |       291.00 |
|    514 |   59012924 | CITY CAFE 3IN1 STICKS - BOX -18G X 24 PC  |       204.00 |       204.00 |
|    515 |   59012324 | CITY CREAMER ORIGINALPLASTIC JAR 12x170G  |        68.00 |        68.00 |
|    516 |   59012224 | CITY CREAMER -ORIGINALPLASTIC JAR-6X400G  |        68.00 |        68.00 |
|    517 |   59011924 | CITY CAPPUCCINO - HAZELNUTSACHET -12x17G  |       146.00 |       146.00 |
|    518 |   59011824 | CITY CAPPUCCINO - VANILLASACHET - 12x17G  |       146.00 |       146.00 |
|    519 |   59011724 | CITY CAPPUCCINO - CHOCOLATESACHET-12x17G  |       146.00 |       146.00 |
|    520 |   59011624 | CITY CAPPUCCINO - CARAMELSACHET - 12x17G  |       146.00 |       146.00 |
|    521 |   59011524 | CITY CAPPUCCINO - ORIGINALSACHET -12x17G  |       146.00 |       146.00 |
|    522 |   59011224 | CITY CAFE GOLD INSTANT CAFE (8x100G)GJ    |       156.00 |       156.00 |
|    523 |   59011124 | CITY CAFEORIGINAL INSTANT CAFE(6x200G)GJ  |        97.00 |        97.00 |
|    524 |   59011024 | CITY CAFE ORIGINALINSTANTCAFE(12x100G)GJ  |       108.00 |       108.00 |
|    525 |   59010924 | CITY CAFE ORIGINALINSTANTCAFE(12x50G)-GJ  |        73.00 |        73.00 |
|    526 |   59010824 | CITYCAFEDECAFFEINATED INSTCAFE(12x50G)GJ  |        73.00 |        73.00 |
|    527 |   59010724 | ARABI LIQUID COFFEE GLASS BOTTLE6X1000ML  |        73.00 |        73.00 |
|    528 |   59010624 | HAMWI COFFEE DARK EXTRA CRDMN 4x10X500G   |      1277.00 |      1277.00 |
|    529 |   59010524 | HAMWI COFFEE EXTRA W CARDAMOM P4X10X500G  |      1277.00 |      1277.00 |
|    530 |   59010424 | HAMWI COFFEE EXTRA W CARDAMOM P4X25X200G  |      1414.00 |      1414.00 |
|    531 |   59010324 | HAMWI COFFEE CLASSIC W CRDMN P 4X10X500G  |      1164.00 |      1164.00 |
|    532 |   59010224 | HAMWI COFFEE CLASSIC W CRDMN P 4x25X200G  |      1253.00 |      1253.00 |
|    533 |   59010124 | HAMWI COFFEE MOCHA WO CRDMN P 4x10X500G   |      1164.00 |      1164.00 |
|    534 |   59010024 | HAMWI COFFEE MOCHA WO CRDMN P4x25X200G    |      1253.00 |      1253.00 |
|    535 |   40477218 | SUNBULAH GARDEN PEAS (24X250 G)-SL        |        94.00 |        94.00 |
|    536 |   40477318 | SUNBULAH GARDEN PEAS (12X450 G)-SL        |        81.00 |        81.00 |
|    537 |   40477418 | SUNBULAH GARDEN PEAS (12X900 G)-SL        |       150.00 |       150.00 |
|    538 |   40477518 | SUNBULAH GARDEN PEAS (4X2.5 KG)-SL        |        92.00 |        92.00 |
|    539 |   40477618 | SUNBULAH PEAS AND CARROTS (12X450 G)-SL   |        71.00 |        71.00 |
|    540 |   40477718 | SUNBULAH PEAS AND CARROTS (12X900 G)-SL   |       141.00 |       141.00 |
|    541 |   40477818 | SUNBULAH MIXED VEGETABLE (24X250 G)-SL    |        86.00 |        86.00 |
|    542 |   40477918 | SUNBULAH MIXED VEGETABLE (12X450 G)-SL    |        73.00 |        73.00 |
|    543 |   40478018 | SUNBULAH MIXED VEGETABLE (4X2.5 KG)-SL    |        90.00 |        90.00 |
|    544 |   42680360 | SARY HONEY PORTIONS (100X30G) - RV        |        48.00 |        48.00 |
|    545 |   59010715 | ARABI LIQUID COFFEEGLASS BOTTLE -1000ML   |        73.00 |        73.00 |
|    546 |   59030024 | HAMWI COFFEE MOCHA WO CRDMN P( 25X200G)   |       314.00 |       314.00 |
|    547 |   59030124 | HAMWI COFFEE MOCHA WO CRDMN P (10X500G)   |       291.00 |       291.00 |
|    548 |   59030224 | HAMWI COFFEE CLASSIC W CRDMN P (25X200G)  |       314.00 |       314.00 |
|    549 |   59030324 | HAMWI COFFEE CLASSIC W CRDMN P (10X500G)  |       291.00 |       291.00 |
|    550 |   59030424 | HAMWI COFFEE EXTRA W CARDAMOM (25X200G)   |       354.00 |       354.00 |
|    551 |   59030524 | HAMWI COFFEE EXTRA W CARDAMOM (10X500G)   |       320.00 |       320.00 |
|    552 |   59030624 | HAMWI COFFEE DARK EXTRA CRDMN (10X500G)   |       320.00 |       320.00 |
|    553 |   59004012 | SUNBULAH MOLOKHAI/TAQLIYA                 |        96.00 |        96.00 |
|    554 |   40235412 | FROZEN FALAFEL                            |        72.00 |        72.00 |
|    555 |   40474112 | SUNBULAH SWEET CORN (12X450 G)            |        89.00 |        89.00 |
|    556 |   42690360 | SARY FOREST HONEY (12x500g)               |       500.00 |       500.00 |
|    557 |   42690460 | SARY FOREST HONEY (6X1KG) SQUARE JAR      |       425.00 |       425.00 |
|    558 |   40477118 | SUNBULAH CHOPPED RED ONIONS (12X450G)     |        48.00 |        48.00 |
|    559 |   56343412 | SUN MOZZARELLA BLK (4X2.3KG) VEG FAT      |       160.00 |       160.00 |
|    560 |   42103260 | AL-SHIFA NATIONAL DAY SPECIAL (12x500g)   |       337.00 |       337.00 |
|    561 |   42103360 | SUMRA NATIONAL DAY SPECIAL (6x500G)       |       840.00 |       840.00 |
|    562 |   50019212 | MINI DANISH PASTRY APPLE (250x36G)        |       165.00 |       165.00 |
|    563 |   50019312 | MINI DANISH PASTRY RED FRUITS (257x35G)   |       200.00 |       200.00 |
|    564 |   50476718 | FRENCH FRIES-L- 10MM (CAT)(4X2.5KG) WH    |        55.00 |        55.00 |
|    565 |   50485718 | THIN FRENCH FRIES-L-CAT 7MM (4X2.5KG)WH   |        57.00 |        57.00 |
|    566 |   40080906 | DEMI BAGUETTE FRENCH (24x2x150G)          |       110.00 |       110.00 |
|    567 |   32170260 | SHIFA PROMO BLACK FOREST(500G+500G FREE)  |       425.00 |       425.00 |
|    568 |   59007024 | SIBLOU LIGHT MEAT CHUNKS IN OIL 48x150G   |       200.00 |        60.00 |
|    569 |   59008024 | SIBLOU LIGHT MEAT CHUNKS IN CHILI 48x150G |       208.00 |       200.00 |
|    570 |   59003112 | KERRYGOLD RED CHEDDAR CHEESE (4X5 KG)     |       880.00 |       208.00 |
|    571 |   59003212 | KERRYGOLD WHITE CHEDDAR CHEESE (4X5 KG)   |       880.00 |       880.00 |
|    572 |   42690160 | SARY ACACIA HONEY (12X500g)               |       409.00 |       880.00 |
|    573 |   42690260 | SARY ACACIA HONEY (6X1KG) SQUARE JAR      |       361.00 |       409.00 |
|    574 |   56041036 | AL SHIFA WITH ROYAL JELLY 5% (6X250G)     |       371.00 |       361.00 |
|    575 |   40480218 | WALIMA GARDEN PEAS (20X400G)-RETAIL       |        60.00 |       371.00 |
|    576 |   40042718 | WALIMA KONAFAH (12X500 G)                 |        72.00 |        72.00 |
|    577 |   55000018 | NAI ICED HIBISCUS FLOWER TEA (12X473ML)   |        99.00 |        99.00 |
|    578 |   55000118 | NAI ICED WITH WHITE PEONY TEA (12X473ML)  |        99.00 |        99.00 |
|    579 |   55000218 | NAI ICED PEKOE BLACK TEA ORANG(12X473ML)  |        99.00 |        99.00 |
|    580 |   55000318 | NAI ICED CHUN MEI GREEN TEA (12X473ML)    |        99.00 |        99.00 |
|    581 |   55000418 | NAI ICED HIBISCUS FLOWER TEA PROMO-PK     |        22.00 |        22.00 |
|    582 |   42168260 | AL SHIFA SIDR HONEY (6x1KG) OCTO JARS     |       948.00 |       948.00 |
|    583 |   40070218 | WALIMA SPRING ROLL  (24X160 G)            |        69.00 |        69.00 |
|    584 |   51300012 | SOLO SUMBOSA DOUGH-B(24x375G)             |       249.53 |       249.53 |
|    585 |   51300014 | SOLO SUMBOSA DOUGH-AR(24x375G)            |       249.53 |       249.53 |
|    586 |   51300112 | SOLO SUMBOSA DOUGH-B(24X360G)             |       249.53 |       249.53 |
|    587 |   51300114 | SOLO SUMBOSA DOUGH-AR(24X360G)            |       249.53 |       249.53 |
|    588 |   40041718 | EMPANADA DOUGH ( 12 X 360 G)              |       125.00 |       125.00 |
|    589 |   56060509 | SUNBULAH SHREDDED MOZZARELLA (6X1 KG)     |       193.00 |       193.00 |
|    590 |   56060009 | SUNBULAH SHREDDED MOZZARELLA (24X200 G)   |       180.00 |       180.00 |
|    591 |   56060109 | SUNBULAH SHREDDED MOZZARELLA (12X500G)    |       209.00 |       209.00 |
+--------+------------+-------------------------------------------+--------------+--------------+
    
</code></pre>







<h3 id="banner"><a class="header-link" href="#banner"></a>Banner</h3>
<script src="https://gist.github.com/sgframework/55af49af1fa53973fa3d41f51b2938cd.js"></script>


<pre><code class="language-php">
&lt;?php 
echo "HelloWorld"; 
?&gt;
</code></pre>


<pre><code class="language-js">


{ "face": "😂" } 

// or 

{ "face": "\uD83D\uDE02" }

</code></pre>

<pre><code class="language-css">

.markdown-body .pl-mi2 {
background-color: #005cc5;
color: #f6f8fa;
}

.markdown-body .pl-mdr {
color: #6f42c1;
font-weight: 700;
}

</code></pre>

<pre><code class="language-html ">

&lt;script type="text/javascript" src="{{ asset('js/jush.js') }}"></script>
&lt;script type="text/javascript"&gt;
    jush.style('&lt;?php asset("css/jush.css"); ?>');
    jush.highlight_tag('code');
&lt;/script>

</code></pre>







@markdown

###### CSV exported format vs. HTML copy & paste format:

![{{ asset('/images/assests/free.gif') }}]({{ asset('/images/assests/free.gif') }})

@endmarkdown





</article>






















@endsection