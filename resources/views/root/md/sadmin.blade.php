@extends('layouts.root')
@section('content')



<link href="{{ asset('css/assets/css/github-markdown.css') }}" rel="stylesheet">
<article class="markdown-body">

        <img src="{{ asset('images/assests/sgimg.png') }}" align="right" style="height: 64px"/>
        <h1 id="welcome-to-sunbulah-group-framework"><a class="header-link" href="#welcome-to-sunbulah-group-framework"></a> SunbulahGroup Server Administrator Portal</h1>
        <span><a href="https://www.npmjs.org/package/sgcdn" rel="nofollow"><img src="http://img.shields.io/npm/v/sgcdn.svg?style=flat" alt="NPM Version"></a> <a href="https://saythanks.io/to/sgframework"><img src="https://img.shields.io/badge/Say%20Thanks-!-1EAEDB.svg" alt="Say Thanks!" /></a></span> <span><a href="https://badge.fury.io/rb/xss"><img src="https://badge.fury.io/rb/xss.svg" alt="Gem Version" height="18"></a> </span>  <span><a href="https://www.rubydoc.info/gems/xss/0.0.0">xss/info</a></span> <span><a href="https://badge.fury.io/js/sgcdn"><img src="https://badge.fury.io/js/sgcdn.png" alt="npm version" height="18"></a></span> <span><a href="https://badge.fury.io/py/sgpy"><img src="https://badge.fury.io/py/sgpy.png" alt="PyPI version" height="18"></a></span> <br /><br /> 
<pre style="background-color:black;text-align: center;"><code style="color:red;" class="language-cmd">
    {{ shell_exec('cd ./cmd && banner.bat') }}
</code></pre>


<h3 id="dev-timeline"><a class="header-link" href="#dev-timeline"></a><i class="fa fa-tasks" aria-hidden="true"></i> Server Environemt & Requirments.</h3>
<ul>
<li>Git 2.21.0 <code>--required</code></li>
<li>PHP 7.2.7^ <code>--required</code></li>
<li>MySQL Server 5.5 <code>--required</code></li>
<li>Composer 1.8.4 <code>--required</code></li>
<li>NPM 6.4.1 <code>--required</code></li>
<li>NodeJS 10.15.3 <code>--required</code></li>
<li>Redis server 3.2.100 <code>--required</code></li>
<li>Python 3.6^ <code>--optional</code></li>
<li>pip 9.0.1 <code>--optional</code></li>

<li>Ruby 3.6^ <code>--optional</code></li>
Compilers & Package Builders.
rake, version 12.3.2
<li>wheel 0.33.4 <code>--optional</code></li>

CLIs
irb


<li>Perl 5.8.8 <code>--optional</code></li>
Archives
<li>CPAN 0.33.4 <code>--optional</code></li>
    ==archive of perl resources==

</ul>








Check if installation succeeded by running the following commands:

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\"Path to"\cdn>php -v
PHP 7.2.7 (cli) (built: Jun 19 2018 23:13:48) ( NTS MSVC15 (Visual C++ 2017) x64 )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies

C:\Program Files\MySQL\MySQL Server 5.5\bin>mysqlshow.exe -u root -p
Enter password: ********
+-----------------------------------+--------+
|             Databases             | Tables |
+-----------------------------------+--------+
| sgdb0                             |     10 |
+-----------------------------------+--------+

Administrator@cdn MINGW64 /bin
$ git-flow version
1.12.0 (AVH Edition)

C:\composer>composer -V
Composer version 1.8.4 2019-02-11 10:52:10

C:\Program Files\nodejs>npm -v
6.4.1

C:\Program Files\nodejs>node -v
v10.15.3

C:\Program Files\Redis>redis-server.exe -v
Redis server v=3.2.100 sha=00000000:0 malloc=jemalloc-3.6.0 bits=64 build=dd26f1f93c5130ee

C:\Program Files\Redis>redis-cli.exe -v
redis-cli 3.2.100

C:\Program Files\Python37>python -V
Python 3.7.3

C:\Program Files\Python36\lib\site-packages>pip -V
pip 9.0.1 from c:\program files\python36\lib\site-packages (python 3.6

C:\Program Files\Python36>wheel version
wheel 0.33.4

C:\ruby>ruby -v
ruby 2.5.5p157 (2019-03-15 revision 67260) [x64-mingw32]

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>ruby -v -e 'p Gem.ruby_version'
ruby 2.5.5p157 (2019-03-15 revision 67260) [x64-mingw32]
#<span><</span>Gem::Version "2.5.5.157">

C:\ruby>bundle -v
Bundler version 2.0.1
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

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>bundle info xss
  * xss (0.0.4)
        Summary: xSGDC!
        Homepage: https://rubygems.org/gems/xss
        Path: C:/Program Files/Windows Server/Bin/WebApps/Site/cdn/sgrb

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
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rake build
xss 0.0.4 built to pkg/xss-0.0.4-x64-mingw32.gem.

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rake -V
rake, version 12.3.2

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rake
mkdir -p lib/specs
mkdir -p tmp/x64-mingw32/specs/2.5.5
cd tmp/x64-mingw32/specs/2.5.5
C:/ruby/bin/ruby.exe -I. ../../../../ext/specs/extconf.rb
checking for malloc()... yes
checking for free()... yes
creating Makefile
cd -
cd tmp/x64-mingw32/specs/2.5.5
C:\Strawberry\c\bin/gmake.exe
generating specs-x64-mingw32.def
gmake: *** No rule to make target '/C/ruby/include/ruby-2.5.0/ruby.h', needed by 'specs.o'.  Stop.
rake aborted!
Command failed with status (2): [C:\Strawberry\c\bin/gmake.exe...]

Tasks: TOP => default => compile => compile:x64-mingw32 => compile:specs:x64-mingw32 => copy:specs:x64-mingw32:2.5.5 => tmp/x64-mingw32/specs/2.5.5/specs.so
(See full trace by running task with --trace)
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>cd tmp\x64-mingw32\specs\2.5.5
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb\tmp\x64-mingw32\specs\2.5.5>make
compiling ../../../../ext/specs/specs.c
linking shared-object specs/specs.so

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb\tmp\x64-mingw32\specs\2.5.5>cd ../../../../ext/specs/

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb\ext\specs>ls
extconf.rb  mkmf.log  specs.c

Administrator@cdn MINGW64 /bin
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




C:\ruby>perl -v

This is perl, v5.8.8 built for msys-64int

C:\travis.rb\bin>travis -v
1.8.10

C:\cpan\bin>gcc -v
gcc version 7.4.0 (GCC)

C:\cpan>cpan YAML::Marshall

/usr/lib/perl5/5.8/CPAN/Config.pm initialized.


CPAN is the world-wide archive of perl resources. It consists of about
100 sites that all replicate the same contents all around the globe.
Many countries have at least one CPAN site already. The resources
found on CPAN are easily accessible with the CPAN.pm module. If you
want to use CPAN.pm, you have to configure it properly.

If you do not want to enter a dialog now, you can answer 'no' to this
question and I'll try to autoconfigure. (Note: you can revisit this
dialog anytime later by typing 'o conf init' at the cpan prompt.)

Are you ready for manual configuration? [yes]




</code></pre>



<h5 id="dev-timeline"><a class="header-link" href="#dev-timeline"></a><i class="fa fa-tasks" aria-hidden="true"></i> Start a Decumentation Server.</h5>


</code></pre>
<p>Start Gem Server</p>
<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  
C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem server -p 8880 --dir C:/ruby/lib/ruby/gems/2.5.0 --no-daemon
Server started at http://[::]:8880
Server started at http://0.0.0.0:8880

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem install xss --source http://cdn.ies.com:8880/
</code></pre>



<p>Install & Start Yard Doc Server</p>

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem install yard
--------------------------------------------------------------------------------
As of YARD v0.9.2:

RubyGems "--document=yri,yard" hooks are now supported. You can auto-configure
YARD to automatically build the yri index for installed gems by typing:

    $ yard config --gem-install-yri

See `yard config --help` for more information on RubyGems install hooks.

You can also add the following to your .gemspec to have YARD document your gem
on install:

    spec.metadata["yard.run"] = "yri" # use "yard" to build full HTML docs.

--------------------------------------------------------------------------------
Successfully installed yard-0.9.19
Done installing documentation for yard after 0 seconds
1 gem installed




@endsection