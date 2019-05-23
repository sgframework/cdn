@extends('layouts.root')
@section('content')



<link href="{{ asset('css/assets/css/github-markdown.css') }}" rel="stylesheet">
<article class="markdown-body">
        <img src="{{ asset('images/assests/sgimg.png') }}" align="right" style="height: 64px"/>
        <h1 id="welcome-to-sunbulah-group-framework"><a class="header-link" href="#welcome-to-sunbulah-group-framework"></a> Welcome to Sunbulah Group Framework</h1>
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

</article>

@endsection