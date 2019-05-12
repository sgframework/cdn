@extends('layouts.root')
@section('content')




<link href="{{ asset('css/assets/css/github-markdown.css') }}" rel="stylesheet">

<article class="markdown-body">
        <img src="{{ asset('images/assests/sgimg.png') }}" align="right" style="height: 64px"/>
        <h2 id="users"><a class="header-link" href="#users"></a><i class="fa fa-users" aria-hidden="true"></i> All Users</h2>
        <script src="https://gist.github.com/sgframework/777536b600117a959c7acfac64bbeab1.js"></script>



<table>
    <thead>
        <tr>
            <th></th>
            <th>ID#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone#</th>
            <th>Access Level</th>
            <th>DC.</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td><img style="border-radius:50%" width="80px" height="50px" src="{{ asset('/images/uploads/avatars')}}/{{ $user->photo }}" /></td>
            <td>{{ $user->idnumber }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>+966{{ $user->phonenumber }}</td>
            <td>{{ $user->is_permission }}</td>
            <td>{{ $user->dc }}</td>
        </tr>
        @endforeach
    </tbody>
</table>



<pre><code class="language-sql">     
mysql> select * from users;
+----+-----------------------------------+-----------------------+-------------------+----------+-------------+--------------+---------------+------------+--------+
| id | name                              | email                 | email_verified_at | idnumber | phonenumber | photo        | is_permission | totalgrand | dc     |
+----+-----------------------------------+-----------------------+-------------------+----------+-------------+--------------+---------------+------------+--------+
|  1 | Ahmed M. Sulaimani                | ads@sunbulahgroup.com | NULL              | 5303     |   562204816 | os_debian.png|             2 |       0.00 | 000000 |
|  3 | Ahmed Al-Onazi                    | aoz@sg.com            | NULL              | 1231     |   590090033 | default.svg  |             0 |       0.00 | 000000 |
|  4 | Mohammed Makki                    | mzm@sunbulahgroup.com | NULL              | 1255     |   560004564 | default.svg  |             2 |       0.00 | 000000 |
|  6 | Hasan Rabah                       | hmr@sunbulahgroup.com | NULL              | 9090     |   544636421 | default.svg  |             2 |       0.00 | 000000 |
|  7 | Ahmed Alonazi                     | aai@sunbulahgroup.com | NULL              | 5298     |           0 | default.svg  |             0 |       0.00 | 000000 |
|  8 | Micheal Lanes                     | mel@sunbulahgroup.com | NULL              | 1275     |   593226762 | default.svg  |             0 |   46212.00 | 001021 |
|  9 | Abdalla Naser                     | abr@sunbulahgroup.com | NULL              | 2409     |   552266786 | default.svg  |             0 |   69034.00 | 001023 |
| 10 | Mohammed Sayed                    | med@sunbulahgroup.com | NULL              | 5275     |   568624977 | mo.png       |             0 |  192457.50 | 001024 |
| 11 | Fahed Dahasy                      | fds@sunbulahgroup.com | NULL              | 2745     |   501003637 | default.svg  |             0 |  104987.50 | 001022 |
| 12 | Hassan Fathi                      | hfk@sunbulahgroup.com | NULL              | 4401     |   592246630 | default.svg  |             0 |   99441.00 | 001042 |
| 13 | Samsudin                          | scn@sunbulahgroup.com | NULL              | 1171     |   507815622 | default.svg  |             0 |   50563.00 | 001033 |
| 14 | Ahmed Medhat                      | adk@sunbulahgroup.com | NULL              | 4688     |   563040670 | default.svg  |             0 |   34721.00 | 001025 |
| 15 | Hesham                            | hmn@sunbulahgroup.com | NULL              | 3761     |   500427475 | default.svg  |             0 |   87829.00 | 001043 |
| 17 | Noufal                            | nkp@sunbulahgroup.com | NULL              | 2076     |  2147483647 | default.svg  |             0 |    6131.00 | 001031 |
| 18 | Ruben M.                          | ram@sunbulahgroup.com | NULL              | 1555     |  2147483647 | default.svg  |             0 |   63505.00 | 001032 |
| 19 | FIRAS / KA SUPERVISOR  CSZ        | foz@sunbulahgroup.com | NULL              | 0000     |   543997687 | default.svg  |             1 |       0.00 | 001020 |
| 20 | Hazem / KA SUPERVISOR  CSL        | hhz@sunbulahgroup.com | NULL              | 0000     |  2147483647 | default.svg  |             1 |       0.00 | 001030 |
| 21 | A. Shawky                         | asd@sunbulahgroup.com | NULL              | 1869     |   545892494 | default.svg  |             0 |   38344.90 | 001041 |
| 22 | M. Hassan                         | ahd@sunbulahgroup.com | NULL              | 4417     |   541064360 | default.svg  |             0 |       0.00 | 001044 |
| 23 | Odeh Hersh  / WS MANAGER          | oah@sunbulahgroup.com | NULL              | 0000     |   503667460 | default.svg  |             1 |       0.00 | 002010 |
| 24 | BASHAR AL DALAA  / KA MANAGER     | bad@sunbulahgroup.com | NULL              | 0000     |   542129330 | default.svg  |             1 |       0.00 | 001010 |
| 25 | M. Awaden  / KA SUPERVISOR CTK    | mwd@sunbulahgroup.com | NULL              | 0000     |   558604371 | default.svg  |             1 |       0.00 | 001040 |
| 26 | Sultan Salman                     | ssl@sunbulahgroup.com | NULL              | 1621     |   556593688 | default.svg  |             0 |   57698.00 | 001113 |
| 27 | Osama M.R.                        | osa@sunbulahgroup.com | NULL              | 1141     |  2147483647 | default.svg  |             0 |    8129.00 | 001034 |
| 28 | WAEL GHAZI / KA SUPERVISOR Qaseem | wng@sunbulahgroup.com | NULL              | 2469     |   557634675 | wail.png     |             1 |       0.00 |        |
| 29 | Suneer                            | msn@sunbulahgroup.com | NULL              | 466      |   554946096 | default.svg  |             0 |  123701.00 |        |
| 30 | Fahad Hussein                     | ffh@sunbulahgroup.com | NULL              | 2508     |   556593688 | default.svg  |             0 |  127118.10 |        |
| 31 | Medhat                            | mem@sunbulahgroup.com | NULL              | 4241     |   553984873 | default.svg  |             0 |  180422.00 |        |
+----+-----------------------------------+-----------------------+-------------------+----------+-------------+--------------+---------------+------------+--------+
29 rows in set (0.00 sec)

</code></pre>
</article>






















@endsection