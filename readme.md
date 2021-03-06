<link href="http://ipool.remotewebaccess.com/css/assets/css/github-markdown.css" rel="stylesheet">
<article class="markdown-body">

<img src="http://ipool.remotewebaccess.com/images/assests/sgimg.png" align="right" style="height: 64px"/>

# SunbulahGroup Developers Portal

<a href="https://badge.fury.io/js/sgcdn">![](https://badge.fury.io/js/sgcdn.png)</a> <a href="https://badge.fury.io/py/sgpy">![](https://badge.fury.io/py/sgpy.png)</a> <a href="https://www.npmjs.org/package/sgcdn">![](http://img.shields.io/npm/v/sgcdn.svg?style=flat)</a> <a href="https://saythanks.io/to/sgframework">![](https://img.shields.io/badge/Say%20Thanks-!-1EAEDB.svg)</a> <a href="https://badge.fury.io/rb/xss">![](https://badge.fury.io/rb/xss.svg)</a>  <a href="https://www.rubydoc.info/gems/xss/0.0.0">xss/info</a>

```cmd

███████╗██╗   ██╗███╗   ██╗██████╗ ██╗   ██╗██╗      █████╗ ██╗  ██╗     ██████╗ ██████╗  ██████╗ ██╗   ██╗██████╗
██╔════╝██║   ██║████╗  ██║██╔══██╗██║   ██║██║     ██╔══██╗██║  ██║    ██╔════╝ ██╔══██╗██╔═══██╗██║   ██║██╔══██╗
███████╗██║   ██║██╔██╗ ██║██████╔╝██║   ██║██║     ███████║███████║    ██║  ███╗██████╔╝██║   ██║██║   ██║██████╔╝
╚════██║██║   ██║██║╚██╗██║██╔══██╗██║   ██║██║     ██╔══██║██╔══██║    ██║   ██║██╔══██╗██║   ██║██║   ██║██╔═══╝
███████║╚██████╔╝██║ ╚████║██████╔╝╚██████╔╝███████╗██║  ██║██║  ██║    ╚██████╔╝██║  ██║╚██████╔╝╚██████╔╝██║
╚══════╝ ╚═════╝ ╚═╝  ╚═══╝╚═════╝  ╚═════╝ ╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝     ╚═════╝ ╚═╝  ╚═╝ ╚═════╝  ╚═════╝ ╚═╝

```

### Server Environemt & Requirments.

#### Framework & API Required Packeges:

- **GitHub** 2.21.0
- **PHP** 7.2.7^
- **MySQL Server** 5.5
- **Composer** 1.8.4
- **Redis server** 3.2.100

#### Mail Server

- **Default Mailing Server**

#### CLIs & Commandline Tools Recommended Packeges:

- **NPM** 6.4.1
- **Python** 3.6^
- **Ruby** 3.6^
- **curl** 7.64.0
- ~~**Perl** 5.8.8~~

#### Developer Packages

- **Visual Studio Code**
- **Github ext for vscode**
- **node** 10.15.3
- **pip** 9.0.1
- **wheel** 0.33.4
- **gem** 2.5.5.157
- **bundle** 2.0.1
- **rake** 12.3.2
- **rails** 5.2.3
- **travis** 1.8.10
- **cpan** 1.03

## First STEP

<h3 id="github"><a class="header-link" href="#github"></a><i class="fa fa-github" aria-hidden="true"></i> Github</h3>

Get started by cloning into project's repository after installing <a href="https://desktop.github.com/"><img src="http://ipool.remotewebaccess.com/images/
/assests/github-desktop.png" width="25px" height="25px" /> GitHub Desktop</a>
<br /><em style="font-size:12px">run CMD or terminal and enter the following commands.</em>

### IIS Manager Setup

- Install <a href="http://ipool.remotewebaccess.com/mirror/x64/WebPlatformInstaller_x64_en-US.msi" target="_blank">Web Platform Installer x64</a> 

![admin+path-setup](http://ipool.remotewebaccess.com/images/assests/wpi1.png)

- PHP, MySql installation

![admin+path-setup](http://ipool.remotewebaccess.com/images/assests/installed-pkgs.png)

> @ this point you should've already installed & configured GitHub and cloned into cdn to point the server to ``` cdn/public ``` directory.

- Path & Administrator Credintials Setup

![admin+path-setup](http://ipool.remotewebaccess.com/images/assests/admin-path-setup2.png)

> @ this point, you should have already installed and configured the following:

- Internet Information Server (IIS) Manager.

- GitHub 

- PHP 7.2^

- MySql 5.1^ + Connector

After setting up IIS Server Manager and installing GitHub

Run <kbd> ``` ⌘ Start + R ``` </kbd>  and paste the following  ==[1]==

    runas /user:Administrator "C:\Program Files\Git\git-bash.exe"

then press Enter ↵

    [1] Note that Without Administrator's prevlidges you won`t be able to create, edit or delete directory.

```bash

X000001+Administrator@x000001 MINGW64 ~
$ cd /c/inetpub/wwwroot/

X000001+Administrator@x000001 MINGW64 /c/inetpub/wwwroot
$ mkdir test

X000001+Administrator@x000001 MINGW64 /c/inetpub/wwwroot
$ ls
proXject/ test/  web.config

X000001+Administrator@x000001 MINGW64 /c/inetpub/wwwroot
$ rmdir test/

X000001+Administrator@x000001 MINGW64 /c/inetpub/wwwroot
$ ls
proXject/ web.config

X000001+Administrator@x000001 MINGW64 /c/inetpub/wwwroot
$ git clone https://github.com/sgframework/cdn.git
Cloning into 'cdn'...
remote: Enumerating objects: 624, done.
remote: Counting objects: 100% (624/624), done.
remote: Compressing objects: 100% (359/359), done.
remote: Total 2368 (delta 335), reused 463 (delta 236), pack-reused 1744
Receiving objects: 100% (2368/2368), 105.61 MiB | 10.42 MiB/s, done.
Resolving deltas: 100% (1254/1254), done.

X000001+Administrator@x000001 MINGW64 /c/inetpub/wwwroot
$ cd cdn

X000001+Administrator@x000001 MINGW64 /c/inetpub/wwwroot/cdn
$ ls
 CODE_OF_CONDUCT.md   app         composer.json   config.json         package.json   readme.md   server.php 
 CONTRIBUTING.md      artisan     composer.lock   database            phpunit.xml    resources   storage      web.config
 LICENSE

```

By this point nothing is working yet due to one missing ``` .env ``` file, which contain sensitive data. You can get this archived <a href="http://ipool.remotewebaccess.com/mirror/secret/dev-pack.zip" target="_blank">dev-pack.zip</a> file and unzip it into the top level directory ``` /cdn ``` 

``` dev-pack.zip ``` contains the following files

```cmd

  $ zip -r dev-pack.zip .env vendors/ node_modules/ .git/ public/assets/

phsycho@x000001:/mnt/c/inetpub/wwwroot/cdn$ unzip dev-pack.zip
Archive:  dev-pack.zip
  inflating: .env
  inflating: vendors/
  inflating: node_modules/
  inflating: .git/
  inflating: public/assets/

```

<h3 id="php"><a class="header-link" href="#php"></a><img src="http://ipool.remotewebaccess.com/images/assests/php.png" width="80px" height="35px" /> Composer, Artisan</h3>

#### Installing Composer

> @ thist point you should have already installed & configured the following:
**required by composer**

- Internet Information Server (IIS) Manager.

- GitHub

- **PHP** 7.2^

- MySql 5.1^ + Connector


To install composer simply run <a href="http://ipool.remotewebaccess.com/mirror/Composer-Setup.exe" target="_blank">Composer-Setup.exe</a> installer and walk through the steps.

##### Test composer by running the following commands in command line prompt

```cmd

C:\Users\a7med>composer -V
Composer version 1.8.5 2019-04-09 17:46:47

C:\Users\a7med>composer
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 1.8.5 2019-04-09 17:46:47

Usage:
  command [options] [arguments]

Options:
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

Available commands:
  about                Shows the short information about Composer.
  archive              Creates an archive of this composer package.
  browse               Opens the package's repository URL or homepage in your browser.
  check-platform-reqs  Check that platform requirements are satisfied.
  clear-cache          Clears composer's internal package cache.
  clearcache           Clears composer's internal package cache.
  config               Sets config options.
  create-project       Creates new project from a package into given directory.
  depends              Shows which packages cause the given package to be installed.
  diagnose             Diagnoses the system to identify common errors.
  dump-autoload        Dumps the autoloader.
  dumpautoload         Dumps the autoloader.
  exec                 Executes a vendored binary/script.
  global               Allows running commands in the global composer dir ($COMPOSER_HOME).
  help                 Displays help for a command
  home                 Opens the package's repository URL or homepage in your browser.
  i                    Installs the project dependencies from the composer.lock file if present, or falls back on the composer.json.
  info                 Shows information about packages.
  init                 Creates a basic composer.json file in current directory.
  install              Installs the project dependencies from the composer.lock file if present, or falls back on the composer.json.
  licenses             Shows information about licenses of dependencies.
  list                 Lists commands
  outdated             Shows a list of installed packages that have updates available, including their latest version.
  prohibits            Shows which packages prevent the given package from being installed.
  remove               Removes a package from the require or require-dev.
  require              Adds required packages to your composer.json and installs them.
  run-script           Runs the scripts defined in composer.json.
  search               Searches for packages.
  self-update          Updates composer.phar to the latest version.
  selfupdate           Updates composer.phar to the latest version.
  show                 Shows information about packages.
  status               Shows a list of locally modified packages, for packages installed from source.
  suggests             Shows package suggestions.
  u                    Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
  update               Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
  upgrade              Upgrades your dependencies to the latest version according to composer.json, and updates the composer.lock file.
  validate             Validates a composer.json and composer.lock.
  why                  Shows which packages cause the given package to be installed.
  why-not              Shows which packages prevent the given package from being installed.

```

> @ this point you can also run ``` php artisan ``` commands since it requires php & composer to work.

```cmd

C:\inetpub\wwwroot\cdn>php artisan
Laravel Framework 5.8.19

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
 key
  key:generate         Set the application key
 make
  make:auth            Scaffold basic login and registration views and routes
  make:channel         Create a new channel class
  make:command         Create a new Artisan command
  make:controller      Create a new controller class
  make:event           Create a new event class
  make:exception       Create a new custom exception class
  make:factory         Create a new model factory
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

```

Now you should have a fully functional up and running framework.

It's recommended that you continue to install optional packages.

## **Recommended installation pakcages.

### Mail Server

- **Default Mailing Server**

### CLIs & Commandline Tools Recommended Packeges:

- **NPM** 6.4.1
- **NodeJS** 10.15.3
- **Python** 3.6^
- **pip** 9.0.1
- **Ruby** 3.6^
- **curl** 7.64.0
- ~~Perl 5.8~~

<h3 id="vsc"><a class="header-link" href="#vsc"></a><img src="http://ipool.remotewebaccess.com/images/assests/npm.png" width="80px" height="35px" />   <img src="http://ipool.remotewebaccess.com/images/assests/nodejs.png" width="80px" height="35px" /> </h3>
<a href="https://badge.fury.io/js/sgcdn"><img src="https://badge.fury.io/js/sgcdn.png" alt="npm version" height="18"></a>

First <i class="fa fa-download"></i> download <a href="http://ipool.remotewebaccess.com/mirror/x86/node-v10.15.3-x86.msi">x86</a> | <a href="http://ipool.remotewebaccess.com/mirror/x64/node-v10.15.3-x64.msi" target="_blank">x64</a> & install <strong>NPM & NodeJS</strong> for windows. 

on Linux Terminal

```bash

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

```

<h3 id="python"><a class="header-link" href="#python"></a><img src="http://ipool.remotewebaccess.com/images/assests/python.png" width="70px" height="80px" /></h3>
<a href="https://badge.fury.io/py/sgpy"><img src="https://badge.fury.io/py/sgpy.png" alt="PyPI version" height="18"></a> <br />
First  <i class="fa fa-download"></i> download <a href="http://ipool.remotewebaccess.com/mirror/x86/python-3.7.3-x86.exe" target="_blank">x86</a> | <a href="http://ipool.remotewebaccess.com/mirror/x64/python-3.7.3-x64.exe" target="_blank">x64</a> & install <strong>Python</strong> for windows.
<br />
on Linux Terminal

```bash

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

```

<h3 id="ruby"><a class="header-link" href="#ruby"></a><img src="http://ipool.remotewebaccess.com/images/assests/ruby.jpg" width="50px" height="50px" /> Ruby</h3>
<span><a href="https://badge.fury.io/rb/xss"><img src="https://badge.fury.io/rb/xss.svg" alt="Gem Version" height="18"></a></span> <span><a href="https://www.rubydoc.info/gems/xss/0.0.0">xss/info</a></span><br />
First <i class="fa fa-download"></i> download <a href="http://ipool.remotewebaccess.com/mirror/x86/rubyinstaller-devkit-2.5.5-1-x86.exe" target="_blank">x86</a> | <a href="http://ipool.remotewebaccess.com/mirror/x64/rubyinstaller-devkit-2.5.5-1-x64.exe" target="_blank">x64</a> & install <strong>Ruby</strong> for windows.

on Linux Terminal

```bash

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

```

<h3 id="curl"><a class="header-link" href="#curl"></a><img src="http://ipool.remotewebaccess.com/images/assests/curl.svg" width="100px" height="80px" /></h3>

Windows 10 comes with a built in curl. Manually installing on older windows versions.

First download & install <strong>curl</strong> for <a href="http://ipool.remotewebaccess.com/mirror/x86/curl.zip">windows 7, 8 x86.</a> | <a href="http://ipool.remotewebaccess.com/mirror/x64/curl.zip">windows 7, 8 x64.</a>

unzip archived <code>curl.zip</code>, then copy & paste its content into a directory e.g. %S%

```cmd

C:\Users\a7med>curl http://cdn.ies.com/api/total-sales
{"YTD Total Sales:":"3,240,505.00 SAR"}

```

------------------------

> Everything is up and running smothly hopefully :zap:

If every thing done correctly you should be able to run and test the following commands

```cmd

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>php -v
PHP 7.3.1 (cli) (built: Jan  9 2019 22:22:34) ( NTS MSVC15 (Visual C++ 2017) x64 )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.1, Copyright (c) 1998-2018 Zend Technologies

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>mysql -u root -p
Enter password: ********
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 11
Server version: 8.0.16 MySQL Community Server - GPL

C:\composer>composer -V
Composer version 1.8.4 2019-02-11 10:52:10

C:\Program Files\nodejs>npm -v
6.4.1

C:\Program Files\nodejs>node -v
v10.15.3

C:\Program Files\Python37>python -V
Python 3.7.3

C:\ruby>ruby -v
ruby 2.5.5p157 (2019-03-15 revision 67260) [x64-mingw32]

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>curl -V
curl 7.64.0 (x86_64-w64-mingw32) libcurl/7.64.0 OpenSSL/1.1.1a (Schannel) zlib/1.2.11 libidn2/2.1.1 nghttp2/1.36.0


```

This is it... :sunglasses:

> Some other packages are required for development purposes, can be found in         developers installation guide, it includes the following:

- PiPy  ``` pip ``` => _Python package bundler_

- Wheel ```wheel``` => _Python archiver_

- Gem   ```gem``` => _Ruby interactive CLI_

- Bundler ``` bundle ``` => _Gem archiver & compiler_

- Rake ``` rake ``` => _Gem compiler_

- Rails ``` rails ``` => _Framework built with ruby_

- Travis ``` travis ``` => _Advanced Tools_

- Perl ``` perl ``` => _never used._

- CPAN ``` gcc ``` => _C/C++ compiler_

```cmd

C:\Program Files\Python36\lib\site-packages>pip -V
pip 9.0.1 from c:\program files\python36\lib\site-packages (python 3.6

C:\Program Files\Python36>wheel version
wheel 0.33.4

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>ruby -v -e \
'p Gem.ruby_version'
<Gem::Version "2.5.5.157">

C:\ruby>bundle -v
Bundler version 2.0.1

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>rake -V
rake, version 12.3.2

$ rails -v
Rails 5.2.3

C:\travis.rb\bin>travis -v
1.8.10

C:\ruby>perl -v
This is perl, v5.8.8 built for msys-64int

C:\cpan\bin>gcc -v
gcc version 7.4.0 (GCC)

```

What you expect is exactly what you will get :)

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
<p><a href="http://ipool.remotewebaccess.com/root/readme"></a></p>
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
<p>Login to <a href="http://ipool.remotewebaccess.com/pma" target="_blank">phpMyAdmin</a> to manage connected sgdb0 database.</p>



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



###### CSV exported format vs. HTML copy & paste format:

![http://ipool.remotewebaccess.com//images/assests/free.gif](http://ipool.remotewebaccess.com//images/assests/free.gif)

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

## Server Environemt & Requirments.

#### Framework & API Required Packeges:

- **Git** 2.21.0
- **PHP** 7.2.7^
- **MySQL Server** 5.5
- **Composer** 1.8.4
- **Redis server** 3.2.100

#### Mail Server

- **Default Mailing Server**

#### CLIs & Commandline Tools Recommended Packeges:

- **NPM** 6.4.1
- **NodeJS** 10.15.3
- **Python** 3.6^
- **pip** 9.0.1
- **Ruby** 3.6^
- **Perl** 5.8.8






### Trees

- **PHP** 7.2.7^
        
        |
        |____ Web Server & Platform.
        |   |
        |   |__________ Laravel Framework 5.8.18 (MVC) "https://localhost/"
        |   |__________ Mail Server "https://localhost/mail"
        |
        |____ Databases
        |   |
        |   |_________ MySql 
        |             |______phpMyAdmin "https://localhost/pma"
        |
        |
        |____ CLIs & CMD Tools.
            |
            |__________ composer 1.8.4
            |
            |__________ artisan
        
- **NPM** 6.4.1

- **Python** 

        |
        |____ Compilers & Package Builders.
        |   |
        |   |__________ pip 19.1.1
        |   |
        |   |__________ wheel 0.33.4
        

- **Ruby** 3.6^

        |
        |____ Compilers & Package Builders.
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
        |____ Web Server & Platform
        |   |
        |   |__________ Rails (MVC)
        |
        |___ Documentation Server & Generator.
            |
            |__________ Gem Server
            |
            |__________ yard
            |
            |__________ rdoc

- **Perl** 5.8.8

        |
        |____ Archives
            |
            |__________ CPAN 0.33.4 ==archive of perl resources==

<h2 id="setup-dev-env"><a class="header-link" href="#setup-dev-env"></a> Setup Development Environment</h2>




<h3 id="github"><a class="header-link" href="#github"></a><i class="fab fa-github" aria-hidden="true"></i> Github</h3>

Get started by cloning into project's repository after installing <a href="https://desktop.github.com/"><img src="http://ipool.remotewebaccess.com/images/assests/github-desktop.png" width="25px" height="25px" /> GitHub Desktop</a>
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





<h3 id="vsc"><a class="header-link" href="#vsc"></a><img src="http://ipool.remotewebaccess.com/images/assests/vsc.png" width="80px" height="35px" />  Visual Studio Code</h3>

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
<img src="http://ipool.remotewebaccess.com/images/assests/vs1.png" width="720px" height="420px" />

</div>
<div style="padding: 0px 30px 30px 30px; margin: 0px 40px 40px 40px;">

<img src="http://ipool.remotewebaccess.com/images/assests/vs2.png" width="460px" height="320px" />

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


<img src="http://ipool.remotewebaccess.com/images/assests/vs3.png" />

</div>
<div style="padding:30px;margin:40px">


<img src="http://ipool.remotewebaccess.com/images/assests/vs4.png" />

</div>
<div style="padding:30px;margin:40px">


<img src="http://ipool.remotewebaccess.com/images/assests/vs5.png" />

</div>
<div style="padding:30px;margin:40px">


<img src="http://ipool.remotewebaccess.com/images/assests/push.png" />
</div>


<h2>SERVER SIDE</h2>
<h3 id="php"><a class="header-link" href="#php"></a><img src="http://ipool.remotewebaccess.com/images/assests/php.png" width="80px" height="35px" /> Composer, Artisan</h3>
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




<h3 id="vsc"><a class="header-link" href="#vsc"></a><img src="http://ipool.remotewebaccess.com/images/assests/npm.png" width="80px" height="35px" />   <img src="http://ipool.remotewebaccess.com/images/assests/nodejs.png" width="80px" height="35px" /> </h3>
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


<h3 id="python"><a class="header-link" href="#python"></a><img src="http://ipool.remotewebaccess.com/images/assests/python.png" width="70px" height="80px" /></h3>
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

<h3 id="ruby"><a class="header-link" href="#ruby"></a><img src="http://ipool.remotewebaccess.com/images/assests/ruby.jpg" width="50px" height="50px" /> Ruby</h3>
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
<h5 id="ruby"><a class="header-link" href="#ruby"></a><img src="http://ipool.remotewebaccess.com/images/assests/ruby.jpg" width="50px" height="50px" /> Ruby Advanced.</h5>

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

<h3 id="curl"><a class="header-link" href="#curl"></a><img src="http://ipool.remotewebaccess.com/images/assests/curl.svg" width="100px" height="80px" /></h3>

Windows 10 comes with a built in curl. Manually installing on older windows versions.

First download & install <strong>curl</strong> for <a href="http://ipool.remotewebaccess.com/mirror/x86/curl.zip">windows 7, 8 x86.</a> | <a href="http://ipool.remotewebaccess.com//mirror/x64/curl.zip">windows 7, 8 x64.</a>

unzip archived <code>curl.zip</code>, then copy & paste its content into a directory e.g. %S%

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

C:\Users\a7med>curl http://ipool.remotewebaccess.com/api/total-sales
{"YTD Total Sales:":"3,240,505.00 SAR"}
</code></pre>

<pre><code class="language-bash">  
root@0x01:~# bash <(curl -s http://ipool.remotewebaccess.com/cmd/banner.sh --dump-header dump.txt)
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

root@0x01:~# bash <(curl -s http://ipool.remotewebaccess.com/cmd/banner.sh) 
root@0x01:~# bash <(curl -s http://ipool.remotewebaccess.com/cmd/install.sh) #install npm node python ruby
root@0x01:~# bash <(curl -s http://ipool.remotewebaccess.com/cmd/cmatrix.sh)
root@0x01:~# node <(curl -s http://ipool.remotewebaccess.com/cmd/cmd.js)
root@0x01:~# python <(curl -s http://ipool.remotewebaccess.com/cmd/echo.py)
hello

<h5>Upload anything anywhere.</h5>
root@0x01:~# curl --upload-file dump.txt https://keep.sh/dump.txt

<h5>Download anything anywhere.</h5>
root@0x01:~# curl -L https://keep.sh/3d1fd43a21/dump.txt > dump.txt

<h5>Get all orders</h5>
root@0x01:~# curl -i -H "Accept: application/xml" http://ipool.remotewebaccess.com/api/test

root@0x01:~# bash <(curl -s http://ipool.remotewebaccess.com/cmd/install.sh)
root@0x01:~# bash <(curl -s http://ipool.remotewebaccess.com/cmd/install.sh)
root@0x01:~# bash <(curl -s http://ipool.remotewebaccess.com/cmd/install.sh)
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




<h3 id="cpan"><a class="header-link" href="#cpan"></a><img src="http://ipool.remotewebaccess.com/images/assests/cpan.png" width="100px" height="80px" /> CPAN</h3>


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










## SG Framework API CDN.

### Server Environemt & Requirments.


<h3 id="python"><a class="header-link" href="#python"></a><img src="http://ipool.remotewebaccess.com/images/assests/python.png" width="70px" height="80px" /></h3>
<img src="https://badge.fury.io/py/sgpy.png" alt="PyPI version" height="18"><br />












#### Framework & API Required Packeges:

- **Git** 2.21.0
- **PHP** 7.2.7^
- **MySQL Server** 5.5
- **Composer** 1.8.4
- **Redis server** 3.2.100

#### Mail Server

- **Default Mailing Server**

#### CLIs & Commandline Tools Recommended Packeges:

- **NPM** 6.4.1
- **NodeJS** 10.15.3
- **Python** 3.6^
- **pip** 9.0.1
- **Ruby** 3.6^
- **Perl** 5.8.8






### Trees

- **PHP** 7.2.7^
        
        |
        |____ Web Server & Platform.
        |   |
        |   |__________ Laravel Framework 5.8.18 (MVC) "https://localhost/"
        |   |__________ Mail Server "https://localhost/mail"
        |
        |____ Databases
        |   |
        |   |_________ MySql 
        |             |______phpMyAdmin "https://localhost/pma"
        |
        |
        |____ CLIs & CMD Tools.
            |
            |__________ composer 1.8.4
            |
            |__________ artisan
        
- **NPM** 6.4.1

- **Python** 

        |
        |____ Compilers & Package Builders.
        |   |
        |   |__________ pip 19.1.1
        |   |
        |   |__________ wheel 0.33.4
        

- **Ruby** 3.6^

        |
        |____ Compilers & Package Builders.
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
        |____ Web Server & Platform
        |   |
        |   |__________ Rails (MVC)
        |
        |___ Documentation Server & Generator.
            |
            |__________ Gem Server
            |
            |__________ yard
            |
            |__________ rdoc
            
            
        

- **Perl** 5.8.8

        |
        |____ Archives
            |
            |__________ CPAN 0.33.4 ==archive of perl resources==
            
## Installed Packages by Service.

### Laravel

#### Composer Installed Packages

```cmd

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>composer show
balping/json-raw-encoder              v1.0.0   Encode arrays to json with raw JS objects (eg. callbacks) in them
beyondcode/laravel-dump-server        1.2.2    Symfony Var-Dump Server for Laravel
consoletvs/charts                     6.5.0    The laravel charting package
dnoegel/php-xdg-base-dir              0.1      implementation of xdg base directory specification for php
doctrine/inflector                    v1.3.0   Common String Manipulations with regard to casing and singular/plural rules.
doctrine/instantiator                 1.2.0    A small, lightweight utility to instantiate objects in PHP without invoking their constructors
doctrine/lexer                        v1.0.1   Base library for a lexer that can be used in Top-Down, Recursive Descent Parsers.
dragonmantank/cron-expression         v2.3.0   CRON for PHP: Calculate the next or previous run date and determine if a CRON expression is due
egulias/email-validator               2.1.8    A library for validating emails against several RFCs
erusev/parsedown                      1.7.3    Parser for Markdown.
fideloper/proxy                       4.1.0    Set trusted proxies for Laravel
filp/whoops                           2.3.1    php error handling for cool kids
fzaninotto/faker                      v1.8.0   Faker is a PHP library that generates fake data for you.
graham-campbell/markdown              v10.3.0  Markdown Is A CommonMark Wrapper For Laravel 5
hamcrest/hamcrest-php                 v2.0.0   This is the PHP port of Hamcrest Matchers
jakub-onderka/php-console-color       v0.2
jakub-onderka/php-console-highlighter v0.4     Highlight PHP code in terminal
laravel/framework                     v5.8.18  The Laravel Framework.
laravel/tinker                        v1.0.8   Powerful REPL for the Laravel framework.
league/commonmark                     0.18.5   PHP Markdown parser based on the CommonMark spec
league/flysystem                      1.0.52   Filesystem abstraction: Many filesystems, one API.
maatwebsite/excel                     3.1.13   Supercharged Excel exports and imports in Laravel
markbaker/complex                     1.4.7    PHP Class for working with complex numbers
markbaker/matrix                      1.1.4    PHP Class for working with matrices
mockery/mockery                       1.2.2    Mockery is a simple yet flexible PHP mock object framework
monolog/monolog                       1.24.0   Sends your logs to files, sockets, inboxes, databases and various web services
myclabs/deep-copy                     1.9.1    Create deep copies (clones) of your objects
nesbot/carbon                         2.18.0   A simple API extension for DateTime.
nikic/php-parser                      v4.2.1   A PHP parser written in PHP
nunomaduro/collision                  v2.1.1   Cli error handling for console/command-line PHP applications.
opis/closure                          3.2.0    A library that can be used to serialize closures (anonymous functions) and arbitrary objects.
paragonie/random_compat               v9.99.99 PHP 5.x polyfill for random_bytes() and random_int() from PHP 7
phar-io/manifest                      1.0.3    Component for reading phar.io manifest information from a PHP Archive (PHAR)
phar-io/version                       2.0.1    Library for handling version information and constraints
phpdocumentor/reflection-common       1.0.1    Common reflection classes used by phpdocumentor to reflect the code structure
phpdocumentor/reflection-docblock     4.3.1    With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve in...
phpdocumentor/type-resolver           0.4.0
phpoffice/phpspreadsheet              1.6.0    PHPSpreadsheet - Read, Create and Write Spreadsheet documents in PHP - Spreadsheet engine
phpoption/phpoption                   1.5.0    Option Type for PHP
phpspec/prophecy                      1.8.0    Highly opinionated mocking framework for PHP 5.3+
phpunit/php-code-coverage             6.1.4    Library that provides collection, processing, and rendering functionality for PHP code coverage information.
phpunit/php-file-iterator             2.0.2    FilterIterator implementation that filters files based on a list of suffixes.
phpunit/php-text-template             1.2.1    Simple template engine.
phpunit/php-timer                     2.1.1    Utility class for timing
phpunit/php-token-stream              3.0.1    Wrapper around PHP's tokenizer extension.
phpunit/phpunit                       7.5.11   The PHP Unit Testing framework.
predis/predis                         v1.1.1   Flexible and feature-complete Redis client for PHP and HHVM
psr/container                         1.0.0    Common Container Interface (PHP FIG PSR-11)
psr/log                               1.1.0    Common interface for logging libraries
psr/simple-cache                      1.0.1    Common interfaces for simple caching
psy/psysh                             v0.9.9   An interactive shell for modern PHP.
ramsey/uuid                           3.8.0    Formerly rhumsaa/uuid. A PHP 5.4+ library for generating RFC 4122 version 1, 3, 4, and 5 universally uniq...
sebastian/code-unit-reverse-lookup    1.0.1    Looks up which function or method a line of code belongs to
sebastian/comparator                  3.0.2    Provides the functionality to compare PHP values for equality
sebastian/diff                        3.0.2    Diff implementation
sebastian/environment                 4.2.2    Provides functionality to handle HHVM/PHP environments
sebastian/exporter                    3.1.0    Provides the functionality to export PHP variables for visualization
sebastian/global-state                2.0.0    Snapshotting of global state
sebastian/object-enumerator           3.0.3    Traverses array structures and object graphs to enumerate all referenced objects
sebastian/object-reflector            1.1.1    Allows reflection of object attributes, including inherited and non-public ones
sebastian/recursion-context           3.0.0    Provides functionality to recursively process PHP variables
sebastian/resource-operations         2.0.1    Provides a list of PHP built-in functions that operate on resources
sebastian/version                     2.0.1    Library that helps with managing the version number of Git-hosted PHP projects
swiftmailer/swiftmailer               v6.2.1   Swiftmailer, free feature-rich PHP mailer
symfony/console                       v4.2.8   Symfony Console Component
symfony/contracts                     v1.1.0   A set of abstractions extracted out of the Symfony components
symfony/css-selector                  v4.2.8   Symfony CssSelector Component
symfony/debug                         v4.2.8   Symfony Debug Component
symfony/event-dispatcher              v4.2.8   Symfony EventDispatcher Component
symfony/finder                        v4.2.8   Symfony Finder Component
symfony/http-foundation               v4.2.8   Symfony HttpFoundation Component
symfony/http-kernel                   v4.2.8   Symfony HttpKernel Component
symfony/polyfill-ctype                v1.11.0  Symfony polyfill for ctype functions
symfony/polyfill-iconv                v1.11.0  Symfony polyfill for the Iconv extension
symfony/polyfill-intl-idn             v1.11.0  Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions
symfony/polyfill-mbstring             v1.11.0  Symfony polyfill for the Mbstring extension
symfony/polyfill-php72                v1.11.0  Symfony polyfill backporting some PHP 7.2+ features to lower PHP versions
symfony/process                       v4.2.8   Symfony Process Component
symfony/routing                       v4.2.8   Symfony Routing Component
symfony/translation                   v4.2.8   Symfony Translation Component
symfony/var-dumper                    v4.2.8   Symfony mechanism for exploring and dumping PHP variables
theseer/tokenizer                     1.1.2    A small library for converting tokenized PHP source code into XML and potentially other formats
tijsverkoyen/css-to-inline-styles     2.2.1    CssToInlineStyles is a class that enables you to convert HTML-pages/files into HTML-pages/files with inli...
vlucas/phpdotenv                      v3.3.3   Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.
webmozart/assert                      1.4.0    Assertions to validate method input/output with nice error messages.


```

### NPM

#### Installed nodes

```cmd

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn
+-- axios@0.18.0
| +-- follow-redirects@1.7.0
| | `-- debug@3.2.6
| |   `-- ms@2.1.1
| `-- is-buffer@1.1.6
+-- bootstrap@4.3.1
+-- chart.js@2.8.0
| +-- chartjs-color@2.3.0
| | +-- chartjs-color-string@0.6.0
| | | `-- color-name@1.1.3
| | `-- color-convert@0.5.3
| `-- moment@2.24.0
+-- cross-env@5.2.0
| +-- cross-spawn@6.0.5
| | +-- nice-try@1.0.5
| | +-- path-key@2.0.1
| | +-- semver@5.7.0 deduped
| | +-- shebang-command@1.2.0
| | | `-- shebang-regex@1.0.0
| | `-- which@1.3.1
| |   `-- isexe@2.0.0
| `-- is-windows@1.0.2
+-- git@0.1.5
| `-- mime@1.2.9
+-- github-markdown-css@3.0.1
+-- jquery@3.4.1
+-- laravel-mix@4.0.15
| +-- @babel/core@7.4.0
| | +-- @babel/code-frame@7.0.0
| | | `-- @babel/highlight@7.0.0
| | |   +-- chalk@2.4.2 deduped
| | |   +-- esutils@2.0.2 deduped
| | |   `-- js-tokens@4.0.0
| | +-- @babel/generator@7.4.0
| | | +-- @babel/types@7.4.0 deduped
| | | +-- jsesc@2.5.2
| | | +-- lodash@4.17.11 deduped
| | | +-- source-map@0.5.7 deduped
| | | `-- trim-right@1.0.1
| | +-- @babel/helpers@7.4.2
| | | +-- @babel/template@7.4.0 deduped
| | | +-- @babel/traverse@7.4.0 deduped
| | | `-- @babel/types@7.4.0 deduped
| | +-- @babel/parser@7.4.2
| | +-- @babel/template@7.4.0
| | | +-- @babel/code-frame@7.0.0 deduped
| | | +-- @babel/parser@7.4.2 deduped
| | | `-- @babel/types@7.4.0 deduped
| | +-- @babel/traverse@7.4.0
| | | +-- @babel/code-frame@7.0.0 deduped
| | | +-- @babel/generator@7.4.0 deduped
| | | +-- @babel/helper-function-name@7.1.0
| | | | +-- @babel/helper-get-function-arity@7.0.0 deduped
| | | | +-- @babel/template@7.4.0 deduped
| | | | `-- @babel/types@7.4.0 deduped
| | | +-- @babel/helper-split-export-declaration@7.4.0
| | | | `-- @babel/types@7.4.0 deduped
| | | +-- @babel/parser@7.4.2 deduped
| | | +-- @babel/types@7.4.0 deduped
| | | +-- debug@4.1.1
| | | | `-- ms@2.1.1 deduped
| | | +-- globals@11.11.0
| | | `-- lodash@4.17.11 deduped
| | +-- @babel/types@7.4.0
| | | +-- esutils@2.0.2
| | | +-- lodash@4.17.11 deduped
| | | `-- to-fast-properties@2.0.0
| | +-- convert-source-map@1.6.0 deduped
| | +-- debug@4.1.1
| | | `-- ms@2.1.1 deduped
| | +-- json5@2.1.0
| | | `-- minimist@1.2.0
| | +-- lodash@4.17.11 deduped
| | +-- resolve@1.10.0
| | | `-- path-parse@1.0.6
| | +-- semver@5.7.0 deduped
| | `-- source-map@0.5.7 deduped
| +-- @babel/plugin-proposal-object-rest-spread@7.4.0
| | +-- @babel/helper-plugin-utils@7.0.0
| | `-- @babel/plugin-syntax-object-rest-spread@7.2.0
| |   `-- @babel/helper-plugin-utils@7.0.0 deduped
| +-- @babel/plugin-transform-runtime@7.4.0
| | +-- @babel/helper-module-imports@7.0.0
| | | `-- @babel/types@7.4.0 deduped
| | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- resolve@1.10.0 deduped
| | `-- semver@5.7.0 deduped
| +-- @babel/preset-env@7.4.2
| | +-- @babel/helper-module-imports@7.0.0 deduped
| | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-proposal-async-generator-functions@7.2.0
| | | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | | +-- @babel/helper-remap-async-to-generator@7.1.0
| | | | +-- @babel/helper-annotate-as-pure@7.0.0 deduped
| | | | +-- @babel/helper-wrap-function@7.2.0
| | | | | +-- @babel/helper-function-name@7.1.0 deduped
| | | | | +-- @babel/template@7.4.0 deduped
| | | | | +-- @babel/traverse@7.4.0 deduped
| | | | | `-- @babel/types@7.4.0 deduped
| | | | +-- @babel/template@7.4.0 deduped
| | | | +-- @babel/traverse@7.4.0 deduped
| | | | `-- @babel/types@7.4.0 deduped
| | | `-- @babel/plugin-syntax-async-generators@7.2.0 deduped
| | +-- @babel/plugin-proposal-json-strings@7.2.0
| | | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | | `-- @babel/plugin-syntax-json-strings@7.2.0 deduped
| | +-- @babel/plugin-proposal-object-rest-spread@7.4.0 deduped
| | +-- @babel/plugin-proposal-optional-catch-binding@7.2.0
| | | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | | `-- @babel/plugin-syntax-optional-catch-binding@7.2.0 deduped
| | +-- @babel/plugin-proposal-unicode-property-regex@7.4.0
| | | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | | +-- @babel/helper-regex@7.0.0
| | | | `-- lodash@4.17.11 deduped
| | | `-- regexpu-core@4.5.4
| | |   +-- regenerate@1.4.0
| | |   +-- regenerate-unicode-properties@8.0.2
| | |   | `-- regenerate@1.4.0 deduped
| | |   +-- regjsgen@0.5.0
| | |   +-- regjsparser@0.6.0
| | |   | `-- jsesc@0.5.0
| | |   +-- unicode-match-property-ecmascript@1.0.4
| | |   | +-- unicode-canonical-property-names-ecmascript@1.0.4
| | |   | `-- unicode-property-aliases-ecmascript@1.0.5
| | |   `-- unicode-match-property-value-ecmascript@1.1.0
| | +-- @babel/plugin-syntax-async-generators@7.2.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-syntax-json-strings@7.2.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-syntax-object-rest-spread@7.2.0 deduped
| | +-- @babel/plugin-syntax-optional-catch-binding@7.2.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-arrow-functions@7.2.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-async-to-generator@7.4.0
| | | +-- @babel/helper-module-imports@7.0.0 deduped
| | | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | | `-- @babel/helper-remap-async-to-generator@7.1.0 deduped
| | +-- @babel/plugin-transform-block-scoped-functions@7.2.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-block-scoping@7.4.0
| | | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | | `-- lodash@4.17.11 deduped
| | +-- @babel/plugin-transform-classes@7.4.0
| | | +-- @babel/helper-annotate-as-pure@7.0.0
| | | | `-- @babel/types@7.4.0 deduped
| | | +-- @babel/helper-define-map@7.4.0
| | | | +-- @babel/helper-function-name@7.1.0 deduped
| | | | +-- @babel/types@7.4.0 deduped
| | | | `-- lodash@4.17.11 deduped
| | | +-- @babel/helper-function-name@7.1.0 deduped
| | | +-- @babel/helper-optimise-call-expression@7.0.0
| | | | `-- @babel/types@7.4.0 deduped
| | | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | | +-- @babel/helper-replace-supers@7.4.0
| | | | +-- @babel/helper-member-expression-to-functions@7.0.0
| | | | | `-- @babel/types@7.4.0 deduped
| | | | +-- @babel/helper-optimise-call-expression@7.0.0 deduped
| | | | +-- @babel/traverse@7.4.0 deduped
| | | | `-- @babel/types@7.4.0 deduped
| | | +-- @babel/helper-split-export-declaration@7.4.0 deduped
| | | `-- globals@11.11.0 deduped
| | +-- @babel/plugin-transform-computed-properties@7.2.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-destructuring@7.4.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-dotall-regex@7.2.0
| | | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | | +-- @babel/helper-regex@7.0.0 deduped
| | | `-- regexpu-core@4.5.4 deduped
| | +-- @babel/plugin-transform-duplicate-keys@7.2.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-exponentiation-operator@7.2.0
| | | +-- @babel/helper-builder-binary-assignment-operator-visitor@7.1.0
| | | | +-- @babel/helper-explode-assignable-expression@7.1.0
| | | | | +-- @babel/traverse@7.4.0 deduped
| | | | | `-- @babel/types@7.4.0 deduped
| | | | `-- @babel/types@7.4.0 deduped
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-for-of@7.4.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-function-name@7.2.0
| | | +-- @babel/helper-function-name@7.1.0 deduped
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-literals@7.2.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-modules-amd@7.2.0
| | | +-- @babel/helper-module-transforms@7.2.2
| | | | +-- @babel/helper-module-imports@7.0.0 deduped
| | | | +-- @babel/helper-simple-access@7.1.0 deduped
| | | | +-- @babel/helper-split-export-declaration@7.4.0 deduped
| | | | +-- @babel/template@7.4.0 deduped
| | | | +-- @babel/types@7.4.0 deduped
| | | | `-- lodash@4.17.11 deduped
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-modules-commonjs@7.4.0
| | | +-- @babel/helper-module-transforms@7.2.2 deduped
| | | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | | `-- @babel/helper-simple-access@7.1.0
| | |   +-- @babel/template@7.4.0 deduped
| | |   `-- @babel/types@7.4.0 deduped
| | +-- @babel/plugin-transform-modules-systemjs@7.4.0
| | | +-- @babel/helper-hoist-variables@7.4.0
| | | | `-- @babel/types@7.4.0 deduped
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-modules-umd@7.2.0
| | | +-- @babel/helper-module-transforms@7.2.2 deduped
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-named-capturing-groups-regex@7.4.2
| | | `-- regexp-tree@0.1.5
| | +-- @babel/plugin-transform-new-target@7.4.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-object-super@7.2.0
| | | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | | `-- @babel/helper-replace-supers@7.4.0 deduped
| | +-- @babel/plugin-transform-parameters@7.4.0
| | | +-- @babel/helper-call-delegate@7.4.0
| | | | +-- @babel/helper-hoist-variables@7.4.0 deduped
| | | | +-- @babel/traverse@7.4.0 deduped
| | | | `-- @babel/types@7.4.0 deduped
| | | +-- @babel/helper-get-function-arity@7.0.0
| | | | `-- @babel/types@7.4.0 deduped
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-regenerator@7.4.0
| | | `-- regenerator-transform@0.13.4
| | |   `-- private@0.1.8
| | +-- @babel/plugin-transform-shorthand-properties@7.2.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-spread@7.2.2
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-sticky-regex@7.2.0
| | | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | | `-- @babel/helper-regex@7.0.0 deduped
| | +-- @babel/plugin-transform-template-literals@7.2.0
| | | +-- @babel/helper-annotate-as-pure@7.0.0 deduped
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-typeof-symbol@7.2.0
| | | `-- @babel/helper-plugin-utils@7.0.0 deduped
| | +-- @babel/plugin-transform-unicode-regex@7.2.0
| | | +-- @babel/helper-plugin-utils@7.0.0 deduped
| | | +-- @babel/helper-regex@7.0.0 deduped
| | | `-- regexpu-core@4.5.4 deduped
| | +-- @babel/types@7.4.0 deduped
| | +-- browserslist@4.5.2
| | | +-- caniuse-lite@1.0.30000954 deduped
| | | +-- electron-to-chromium@1.3.119
| | | `-- node-releases@1.1.11
| | |   `-- semver@5.7.0 deduped
| | +-- core-js-compat@3.0.0
| | | +-- browserslist@4.5.2 deduped
| | | +-- core-js@3.0.0
| | | +-- core-js-pure@3.0.0
| | | `-- semver@5.7.0 deduped
| | +-- invariant@2.2.4
| | | `-- loose-envify@1.4.0
| | |   `-- js-tokens@4.0.0 deduped
| | +-- js-levenshtein@1.1.6
| | `-- semver@5.7.0 deduped
| +-- @babel/runtime@7.4.2
| | `-- regenerator-runtime@0.13.2
| +-- autoprefixer@9.5.0
| | +-- browserslist@4.5.2 deduped
| | +-- caniuse-lite@1.0.30000954
| | +-- normalize-range@0.1.2
| | +-- num2fraction@1.2.2
| | +-- postcss@7.0.14
| | | +-- chalk@2.4.2 deduped
| | | +-- source-map@0.6.1
| | | `-- supports-color@6.1.0
| | |   `-- has-flag@3.0.0 deduped
| | `-- postcss-value-parser@3.3.1
| +-- babel-loader@8.0.5
| | +-- find-cache-dir@2.1.0
| | | +-- commondir@1.0.1
| | | +-- make-dir@2.1.0
| | | | +-- pify@4.0.1 deduped
| | | | `-- semver@5.7.0 deduped
| | | `-- pkg-dir@3.0.0
| | |   `-- find-up@3.0.0 deduped
| | +-- loader-utils@1.2.3 deduped
| | +-- mkdirp@0.5.1
| | | `-- minimist@0.0.8
| | `-- util.promisify@1.0.0
| |   +-- define-properties@1.1.3
| |   | `-- object-keys@1.1.0
| |   `-- object.getownpropertydescriptors@2.0.3
| |     +-- define-properties@1.1.3 deduped
| |     `-- es-abstract@1.13.0
| |       +-- es-to-primitive@1.2.0
| |       | +-- is-callable@1.1.4 deduped
| |       | +-- is-date-object@1.0.1
| |       | `-- is-symbol@1.0.2
| |       |   `-- has-symbols@1.0.0
| |       +-- function-bind@1.1.1
| |       +-- has@1.0.3
| |       | `-- function-bind@1.1.1 deduped
| |       +-- is-callable@1.1.4
| |       +-- is-regex@1.0.4
| |       | `-- has@1.0.3 deduped
| |       `-- object-keys@1.1.0 deduped
| +-- babel-merge@2.0.1
| | +-- @babel/core@7.4.0 deduped
| | +-- deepmerge@2.2.1
| | `-- object.omit@3.0.0
| |   `-- is-extendable@1.0.1
| |     `-- is-plain-object@2.0.4 deduped
| +-- chokidar@2.1.5
| | +-- anymatch@2.0.0
| | | +-- micromatch@3.1.10 deduped
| | | `-- normalize-path@2.1.1
| | |   `-- remove-trailing-separator@1.1.0
| | +-- async-each@1.0.2
| | +-- braces@2.3.2
| | | +-- arr-flatten@1.1.0
| | | +-- array-unique@0.3.2
| | | +-- extend-shallow@2.0.1
| | | | `-- is-extendable@0.1.1
| | | +-- fill-range@4.0.0
| | | | +-- extend-shallow@2.0.1
| | | | | `-- is-extendable@0.1.1
| | | | +-- is-number@3.0.0
| | | | | `-- kind-of@3.2.2
| | | | |   `-- is-buffer@1.1.6 deduped
| | | | +-- repeat-string@1.6.1
| | | | `-- to-regex-range@2.1.1
| | | |   +-- is-number@3.0.0 deduped
| | | |   `-- repeat-string@1.6.1 deduped
| | | +-- isobject@3.0.1
| | | +-- repeat-element@1.1.3
| | | +-- snapdragon@0.8.2
| | | | +-- base@0.11.2
| | | | | +-- cache-base@1.0.1
| | | | | | +-- collection-visit@1.0.0
| | | | | | | +-- map-visit@1.0.0
| | | | | | | | `-- object-visit@1.0.1 deduped
| | | | | | | `-- object-visit@1.0.1
| | | | | | |   `-- isobject@3.0.1 deduped
| | | | | | +-- component-emitter@1.2.1 deduped
| | | | | | +-- get-value@2.0.6
| | | | | | +-- has-value@1.0.0
| | | | | | | +-- get-value@2.0.6 deduped
| | | | | | | +-- has-values@1.0.0
| | | | | | | | +-- is-number@3.0.0 deduped
| | | | | | | | `-- kind-of@4.0.0
| | | | | | | |   `-- is-buffer@1.1.6 deduped
| | | | | | | `-- isobject@3.0.1 deduped
| | | | | | +-- isobject@3.0.1 deduped
| | | | | | +-- set-value@2.0.0
| | | | | | | +-- extend-shallow@2.0.1
| | | | | | | | `-- is-extendable@0.1.1 deduped
| | | | | | | +-- is-extendable@0.1.1
| | | | | | | +-- is-plain-object@2.0.4 deduped
| | | | | | | `-- split-string@3.1.0 deduped
| | | | | | +-- to-object-path@0.3.0
| | | | | | | `-- kind-of@3.2.2
| | | | | | |   `-- is-buffer@1.1.6 deduped
| | | | | | +-- union-value@1.0.0
| | | | | | | +-- arr-union@3.1.0 deduped
| | | | | | | +-- get-value@2.0.6 deduped
| | | | | | | +-- is-extendable@0.1.1
| | | | | | | `-- set-value@0.4.3
| | | | | | |   +-- extend-shallow@2.0.1
| | | | | | |   | `-- is-extendable@0.1.1 deduped
| | | | | | |   +-- is-extendable@0.1.1 deduped
| | | | | | |   +-- is-plain-object@2.0.4 deduped
| | | | | | |   `-- to-object-path@0.3.0 deduped
| | | | | | `-- unset-value@1.0.0
| | | | | |   +-- has-value@0.3.1
| | | | | |   | +-- get-value@2.0.6 deduped
| | | | | |   | +-- has-values@0.1.4
| | | | | |   | `-- isobject@2.1.0
| | | | | |   |   `-- isarray@1.0.0 deduped
| | | | | |   `-- isobject@3.0.1 deduped
| | | | | +-- class-utils@0.3.6
| | | | | | +-- arr-union@3.1.0
| | | | | | +-- define-property@0.2.5
| | | | | | | `-- is-descriptor@0.1.6 deduped
| | | | | | +-- isobject@3.0.1 deduped
| | | | | | `-- static-extend@0.1.2
| | | | | |   +-- define-property@0.2.5
| | | | | |   | `-- is-descriptor@0.1.6 deduped
| | | | | |   `-- object-copy@0.1.0
| | | | | |     +-- copy-descriptor@0.1.1
| | | | | |     +-- define-property@0.2.5
| | | | | |     | `-- is-descriptor@0.1.6 deduped
| | | | | |     `-- kind-of@3.2.2
| | | | | |       `-- is-buffer@1.1.6 deduped
| | | | | +-- component-emitter@1.2.1
| | | | | +-- define-property@1.0.0
| | | | | | `-- is-descriptor@1.0.2
| | | | | |   +-- is-accessor-descriptor@1.0.0
| | | | | |   | `-- kind-of@6.0.2 deduped
| | | | | |   +-- is-data-descriptor@1.0.0
| | | | | |   | `-- kind-of@6.0.2 deduped
| | | | | |   `-- kind-of@6.0.2 deduped
| | | | | +-- isobject@3.0.1 deduped
| | | | | +-- mixin-deep@1.3.1
| | | | | | +-- for-in@1.0.2 deduped
| | | | | | `-- is-extendable@1.0.1 deduped
| | | | | `-- pascalcase@0.1.1
| | | | +-- debug@2.6.9
| | | | | `-- ms@2.0.0
| | | | +-- define-property@0.2.5
| | | | | `-- is-descriptor@0.1.6
| | | | |   +-- is-accessor-descriptor@0.1.6
| | | | |   | `-- kind-of@3.2.2
| | | | |   |   `-- is-buffer@1.1.6 deduped
| | | | |   +-- is-data-descriptor@0.1.4
| | | | |   | `-- kind-of@3.2.2
| | | | |   |   `-- is-buffer@1.1.6 deduped
| | | | |   `-- kind-of@5.1.0
| | | | +-- extend-shallow@2.0.1
| | | | | `-- is-extendable@0.1.1
| | | | +-- map-cache@0.2.2
| | | | +-- source-map@0.5.7 deduped
| | | | +-- source-map-resolve@0.5.2 deduped
| | | | `-- use@3.1.1
| | | +-- snapdragon-node@2.1.1
| | | | +-- define-property@1.0.0
| | | | | `-- is-descriptor@1.0.2
| | | | |   +-- is-accessor-descriptor@1.0.0
| | | | |   | `-- kind-of@6.0.2 deduped
| | | | |   +-- is-data-descriptor@1.0.0
| | | | |   | `-- kind-of@6.0.2 deduped
| | | | |   `-- kind-of@6.0.2 deduped
| | | | +-- isobject@3.0.1 deduped
| | | | `-- snapdragon-util@3.0.1
| | | |   `-- kind-of@3.2.2
| | | |     `-- is-buffer@1.1.6 deduped
| | | +-- split-string@3.1.0
| | | | `-- extend-shallow@3.0.2 deduped
| | | `-- to-regex@3.0.2
| | |   +-- define-property@2.0.2 deduped
| | |   +-- extend-shallow@3.0.2 deduped
| | |   +-- regex-not@1.0.2 deduped
| | |   `-- safe-regex@1.1.0
| | |     `-- ret@0.1.15
| | +-- UNMET OPTIONAL DEPENDENCY fsevents@1.2.7
| | | +-- UNMET OPTIONAL DEPENDENCY nan@2.13.2
| | | `-- UNMET OPTIONAL DEPENDENCY node-pre-gyp@0.10.3
| | |   +-- UNMET OPTIONAL DEPENDENCY detect-libc@1.0.3
| | |   +-- UNMET DEPENDENCY mkdirp@0.5.1
| | |   | `-- UNMET DEPENDENCY minimist@0.0.8
| | |   +-- UNMET OPTIONAL DEPENDENCY needle@2.2.4
| | |   | +-- UNMET OPTIONAL DEPENDENCY debug@2.6.9
| | |   | | `-- UNMET OPTIONAL DEPENDENCY ms@2.0.0
| | |   | +-- UNMET OPTIONAL DEPENDENCY iconv-lite@0.4.24
| | |   | | `-- UNMET OPTIONAL DEPENDENCY safer-buffer@2.1.2
| | |   | `-- UNMET OPTIONAL DEPENDENCY sax@1.2.4
| | |   +-- UNMET OPTIONAL DEPENDENCY nopt@4.0.1
| | |   | +-- UNMET OPTIONAL DEPENDENCY abbrev@1.1.1
| | |   | `-- UNMET OPTIONAL DEPENDENCY osenv@0.1.5
| | |   |   +-- UNMET OPTIONAL DEPENDENCY os-homedir@1.0.2
| | |   |   `-- UNMET OPTIONAL DEPENDENCY os-tmpdir@1.0.2
| | |   +-- UNMET OPTIONAL DEPENDENCY npm-packlist@1.2.0
| | |   | +-- UNMET OPTIONAL DEPENDENCY ignore-walk@3.0.1
| | |   | | `-- UNMET DEPENDENCY minimatch@3.0.4
| | |   | |   `-- UNMET DEPENDENCY brace-expansion@1.1.11
| | |   | |     +-- UNMET DEPENDENCY balanced-match@1.0.0
| | |   | |     `-- UNMET DEPENDENCY concat-map@0.0.1
| | |   | `-- UNMET OPTIONAL DEPENDENCY npm-bundled@1.0.5
| | |   +-- UNMET OPTIONAL DEPENDENCY npmlog@4.1.2
| | |   | +-- UNMET OPTIONAL DEPENDENCY are-we-there-yet@1.1.5
| | |   | | +-- UNMET OPTIONAL DEPENDENCY delegates@1.0.0
| | |   | | `-- UNMET OPTIONAL DEPENDENCY readable-stream@2.3.6
| | |   | |   +-- UNMET OPTIONAL DEPENDENCY core-util-is@1.0.2
| | |   | |   +-- UNMET DEPENDENCY inherits@2.0.3
| | |   | |   +-- UNMET OPTIONAL DEPENDENCY isarray@1.0.0
| | |   | |   +-- UNMET OPTIONAL DEPENDENCY process-nextick-args@2.0.0
| | |   | |   +-- UNMET DEPENDENCY safe-buffer@5.1.2
| | |   | |   +-- UNMET OPTIONAL DEPENDENCY string_decoder@1.1.1
| | |   | |   | `-- UNMET DEPENDENCY safe-buffer@5.1.2
| | |   | |   `-- UNMET OPTIONAL DEPENDENCY util-deprecate@1.0.2
| | |   | +-- UNMET DEPENDENCY console-control-strings@1.1.0
| | |   | +-- UNMET OPTIONAL DEPENDENCY gauge@2.7.4
| | |   | | +-- UNMET OPTIONAL DEPENDENCY aproba@1.2.0
| | |   | | +-- UNMET DEPENDENCY console-control-strings@1.1.0
| | |   | | +-- UNMET OPTIONAL DEPENDENCY has-unicode@2.0.1
| | |   | | +-- UNMET OPTIONAL DEPENDENCY object-assign@4.1.1
| | |   | | +-- UNMET OPTIONAL DEPENDENCY signal-exit@3.0.2
| | |   | | +-- UNMET DEPENDENCY string-width@1.0.2
| | |   | | | +-- UNMET DEPENDENCY code-point-at@1.1.0
| | |   | | | +-- UNMET DEPENDENCY is-fullwidth-code-point@1.0.0
| | |   | | | | `-- UNMET DEPENDENCY number-is-nan@1.0.1
| | |   | | | `-- UNMET DEPENDENCY strip-ansi@3.0.1
| | |   | | +-- UNMET DEPENDENCY strip-ansi@3.0.1
| | |   | | | `-- UNMET DEPENDENCY ansi-regex@2.1.1
| | |   | | `-- UNMET OPTIONAL DEPENDENCY wide-align@1.1.3
| | |   | |   `-- UNMET DEPENDENCY string-width@1.0.2
| | |   | `-- UNMET OPTIONAL DEPENDENCY set-blocking@2.0.0
| | |   +-- UNMET OPTIONAL DEPENDENCY rc@1.2.8
| | |   | +-- UNMET OPTIONAL DEPENDENCY deep-extend@0.6.0
| | |   | +-- UNMET OPTIONAL DEPENDENCY ini@1.3.5
| | |   | +-- UNMET OPTIONAL DEPENDENCY minimist@1.2.0
| | |   | `-- UNMET OPTIONAL DEPENDENCY strip-json-comments@2.0.1
| | |   +-- UNMET OPTIONAL DEPENDENCY rimraf@2.6.3
| | |   | `-- UNMET OPTIONAL DEPENDENCY glob@7.1.3
| | |   |   +-- UNMET OPTIONAL DEPENDENCY fs.realpath@1.0.0
| | |   |   +-- UNMET OPTIONAL DEPENDENCY inflight@1.0.6
| | |   |   | +-- UNMET DEPENDENCY once@1.4.0
| | |   |   | `-- UNMET DEPENDENCY wrappy@1.0.2
| | |   |   +-- UNMET DEPENDENCY inherits@2.0.3
| | |   |   +-- UNMET DEPENDENCY minimatch@3.0.4
| | |   |   +-- UNMET DEPENDENCY once@1.4.0
| | |   |   | `-- UNMET DEPENDENCY wrappy@1.0.2
| | |   |   `-- UNMET OPTIONAL DEPENDENCY path-is-absolute@1.0.1
| | |   +-- UNMET OPTIONAL DEPENDENCY semver@5.6.0
| | |   `-- UNMET OPTIONAL DEPENDENCY tar@4.4.8
| | |     +-- UNMET OPTIONAL DEPENDENCY chownr@1.1.1
| | |     +-- UNMET OPTIONAL DEPENDENCY fs-minipass@1.2.5
| | |     | `-- UNMET DEPENDENCY minipass@2.3.5
| | |     +-- UNMET DEPENDENCY minipass@2.3.5
| | |     | +-- UNMET DEPENDENCY safe-buffer@5.1.2
| | |     | `-- UNMET DEPENDENCY yallist@3.0.3
| | |     +-- UNMET OPTIONAL DEPENDENCY minizlib@1.2.1
| | |     | `-- UNMET DEPENDENCY minipass@2.3.5
| | |     +-- UNMET DEPENDENCY mkdirp@0.5.1
| | |     +-- UNMET DEPENDENCY safe-buffer@5.1.2
| | |     `-- UNMET DEPENDENCY yallist@3.0.3
| | +-- glob-parent@3.1.0
| | | +-- is-glob@3.1.0
| | | | `-- is-extglob@2.1.1 deduped
| | | `-- path-dirname@1.0.2
| | +-- inherits@2.0.3
| | +-- is-binary-path@1.0.1
| | | `-- binary-extensions@1.13.1
| | +-- is-glob@4.0.1
| | | `-- is-extglob@2.1.1
| | +-- normalize-path@3.0.0
| | +-- path-is-absolute@1.0.1
| | +-- readdirp@2.2.1
| | | +-- graceful-fs@4.1.15 deduped
| | | +-- micromatch@3.1.10 deduped
| | | `-- readable-stream@2.3.6
| | |   +-- core-util-is@1.0.2
| | |   +-- inherits@2.0.3 deduped
| | |   +-- isarray@1.0.0
| | |   +-- process-nextick-args@2.0.0
| | |   +-- safe-buffer@5.1.2 deduped
| | |   +-- string_decoder@1.1.1 deduped
| | |   `-- util-deprecate@1.0.2
| | `-- upath@1.1.2
| +-- clean-css@4.2.1
| | `-- source-map@0.6.1
| +-- concatenate@0.0.2
| | `-- globs@0.1.4
| |   `-- glob@7.1.3 deduped
| +-- css-loader@1.0.1
| | +-- babel-code-frame@6.26.0
| | | +-- chalk@1.1.3
| | | | +-- ansi-styles@2.2.1
| | | | +-- escape-string-regexp@1.0.5 deduped
| | | | +-- has-ansi@2.0.0 deduped
| | | | +-- strip-ansi@3.0.1 deduped
| | | | `-- supports-color@2.0.0
| | | +-- esutils@2.0.2 deduped
| | | `-- js-tokens@3.0.2
| | +-- css-selector-tokenizer@0.7.1
| | | +-- cssesc@0.1.0
| | | +-- fastparse@1.1.2 deduped
| | | `-- regexpu-core@1.0.0
| | |   +-- regenerate@1.4.0 deduped
| | |   +-- regjsgen@0.2.0
| | |   `-- regjsparser@0.1.5
| | |     `-- jsesc@0.5.0
| | +-- icss-utils@2.1.0
| | | `-- postcss@6.0.23
| | |   +-- chalk@2.4.2 deduped
| | |   +-- source-map@0.6.1
| | |   `-- supports-color@5.5.0 deduped
| | +-- loader-utils@1.2.3 deduped
| | +-- lodash@4.17.11 deduped
| | +-- postcss@6.0.23
| | | +-- chalk@2.4.2 deduped
| | | +-- source-map@0.6.1
| | | `-- supports-color@5.5.0 deduped
| | +-- postcss-modules-extract-imports@1.2.1
| | | `-- postcss@6.0.23
| | |   +-- chalk@2.4.2 deduped
| | |   +-- source-map@0.6.1
| | |   `-- supports-color@5.5.0 deduped
| | +-- postcss-modules-local-by-default@1.2.0
| | | +-- css-selector-tokenizer@0.7.1 deduped
| | | `-- postcss@6.0.23
| | |   +-- chalk@2.4.2 deduped
| | |   +-- source-map@0.6.1
| | |   `-- supports-color@5.5.0 deduped
| | +-- postcss-modules-scope@1.1.0
| | | +-- css-selector-tokenizer@0.7.1 deduped
| | | `-- postcss@6.0.23
| | |   +-- chalk@2.4.2 deduped
| | |   +-- source-map@0.6.1
| | |   `-- supports-color@5.5.0 deduped
| | +-- postcss-modules-values@1.3.0
| | | +-- icss-replace-symbols@1.1.0
| | | `-- postcss@6.0.23
| | |   +-- chalk@2.4.2 deduped
| | |   +-- source-map@0.6.1
| | |   `-- supports-color@5.5.0 deduped
| | +-- postcss-value-parser@3.3.1 deduped
| | `-- source-list-map@2.0.1
| +-- dotenv@6.2.0
| +-- dotenv-expand@4.2.0
| +-- extract-text-webpack-plugin@4.0.0-beta.0
| | +-- async@2.6.2
| | | `-- lodash@4.17.11 deduped
| | +-- loader-utils@1.2.3 deduped
| | +-- schema-utils@0.4.7
| | | +-- ajv@6.10.0 deduped
| | | `-- ajv-keywords@3.4.0 deduped
| | `-- webpack-sources@1.3.0
| |   +-- source-list-map@2.0.1 deduped
| |   `-- source-map@0.6.1
| +-- file-loader@2.0.0
| | +-- loader-utils@1.2.3 deduped
| | `-- schema-utils@1.0.0
| |   +-- ajv@6.10.0 deduped
| |   +-- ajv-errors@1.0.1
| |   `-- ajv-keywords@3.4.0 deduped
| +-- friendly-errors-webpack-plugin@1.7.0
| | +-- chalk@1.1.3
| | | +-- ansi-styles@2.2.1
| | | +-- escape-string-regexp@1.0.5
| | | +-- has-ansi@2.0.0
| | | | `-- ansi-regex@2.1.1 deduped
| | | +-- strip-ansi@3.0.1 deduped
| | | `-- supports-color@2.0.0
| | +-- error-stack-parser@2.0.2
| | | `-- stackframe@1.0.4
| | `-- string-width@2.1.1
| |   +-- is-fullwidth-code-point@2.0.0
| |   `-- strip-ansi@4.0.0
| |     `-- ansi-regex@3.0.0
| +-- fs-extra@7.0.1
| | +-- graceful-fs@4.1.15
| | +-- jsonfile@4.0.0
| | | `-- graceful-fs@4.1.15 deduped
| | `-- universalify@0.1.2
| +-- glob@7.1.3
| | +-- fs.realpath@1.0.0
| | +-- inflight@1.0.6
| | | +-- once@1.4.0 deduped
| | | `-- wrappy@1.0.2
| | +-- inherits@2.0.3 deduped
| | +-- minimatch@3.0.4
| | | `-- brace-expansion@1.1.11
| | |   +-- balanced-match@1.0.0
| | |   `-- concat-map@0.0.1
| | +-- once@1.4.0
| | | `-- wrappy@1.0.2 deduped
| | `-- path-is-absolute@1.0.1 deduped
| +-- html-loader@0.5.5
| | +-- es6-templates@0.2.3
| | | +-- recast@0.11.23
| | | | +-- ast-types@0.9.6
| | | | +-- esprima@3.1.3
| | | | +-- private@0.1.8 deduped
| | | | `-- source-map@0.5.7 deduped
| | | `-- through@2.3.8
| | +-- fastparse@1.1.2
| | +-- html-minifier@3.5.21
| | | +-- camel-case@3.0.0
| | | | +-- no-case@2.3.2
| | | | | `-- lower-case@1.1.4
| | | | `-- upper-case@1.1.3
| | | +-- clean-css@4.2.1 deduped
| | | +-- commander@2.17.1
| | | +-- he@1.2.0
| | | +-- param-case@2.1.1
| | | | `-- no-case@2.3.2 deduped
| | | +-- relateurl@0.2.7
| | | `-- uglify-js@3.4.10
| | |   +-- commander@2.19.0
| | |   `-- source-map@0.6.1
| | +-- loader-utils@1.2.3 deduped
| | `-- object-assign@4.1.1
| +-- imagemin@6.1.0
| | +-- file-type@10.9.0
| | +-- globby@8.0.2
| | | +-- array-union@1.0.2
| | | | `-- array-uniq@1.0.3
| | | +-- dir-glob@2.0.0
| | | | +-- arrify@1.0.1
| | | | `-- path-type@3.0.0
| | | |   `-- pify@3.0.0
| | | +-- fast-glob@2.2.6
| | | | +-- @mrmlnc/readdir-enhanced@2.2.1
| | | | | +-- call-me-maybe@1.0.1
| | | | | `-- glob-to-regexp@0.3.0
| | | | +-- @nodelib/fs.stat@1.1.3
| | | | +-- glob-parent@3.1.0 deduped
| | | | +-- is-glob@4.0.1 deduped
| | | | +-- merge2@1.2.3
| | | | `-- micromatch@3.1.10 deduped
| | | +-- glob@7.1.3 deduped
| | | +-- ignore@3.3.10
| | | +-- pify@3.0.0
| | | `-- slash@1.0.0
| | +-- make-dir@1.3.0
| | | `-- pify@3.0.0
| | +-- p-pipe@1.2.0
| | +-- pify@4.0.1
| | `-- replace-ext@1.0.0
| +-- img-loader@3.0.1
| | `-- loader-utils@1.2.3 deduped
| +-- lodash@4.17.11 deduped
| +-- md5@2.2.1
| | +-- charenc@0.0.2
| | +-- crypt@0.0.2
| | `-- is-buffer@1.1.6 deduped
| +-- optimize-css-assets-webpack-plugin@5.0.1
| | +-- cssnano@4.1.10
| | | +-- cosmiconfig@5.2.0
| | | | +-- import-fresh@2.0.0
| | | | | +-- caller-path@2.0.0
| | | | | | `-- caller-callsite@2.0.0
| | | | | |   `-- callsites@2.0.0
| | | | | `-- resolve-from@3.0.0 deduped
| | | | +-- is-directory@0.3.1
| | | | +-- js-yaml@3.13.1
| | | | | +-- argparse@1.0.10
| | | | | | `-- sprintf-js@1.0.3
| | | | | `-- esprima@4.0.1
| | | | `-- parse-json@4.0.0
| | | |   +-- error-ex@1.3.2
| | | |   | `-- is-arrayish@0.2.1
| | | |   `-- json-parse-better-errors@1.0.2 deduped
| | | +-- cssnano-preset-default@4.0.7
| | | | +-- css-declaration-sorter@4.0.1
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- timsort@0.3.0
| | | | +-- cssnano-util-raw-cache@4.0.1
| | | | | `-- postcss@7.0.14 deduped
| | | | +-- postcss@7.0.14 deduped
| | | | +-- postcss-calc@7.0.1
| | | | | +-- css-unit-converter@1.1.1
| | | | | +-- postcss@7.0.14 deduped
| | | | | +-- postcss-selector-parser@5.0.0 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-colormin@4.0.3
| | | | | +-- browserslist@4.5.2 deduped
| | | | | +-- color@3.1.0
| | | | | | +-- color-convert@1.9.3 deduped
| | | | | | `-- color-string@1.5.3
| | | | | |   +-- color-name@1.1.3 deduped
| | | | | |   `-- simple-swizzle@0.2.2
| | | | | |     `-- is-arrayish@0.3.2
| | | | | +-- has@1.0.3 deduped
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-convert-values@4.0.1
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-discard-comments@4.0.2
| | | | | `-- postcss@7.0.14 deduped
| | | | +-- postcss-discard-duplicates@4.0.2
| | | | | `-- postcss@7.0.14 deduped
| | | | +-- postcss-discard-empty@4.0.1
| | | | | `-- postcss@7.0.14 deduped
| | | | +-- postcss-discard-overridden@4.0.1
| | | | | `-- postcss@7.0.14 deduped
| | | | +-- postcss-merge-longhand@4.0.11
| | | | | +-- css-color-names@0.0.4
| | | | | +-- postcss@7.0.14 deduped
| | | | | +-- postcss-value-parser@3.3.1 deduped
| | | | | `-- stylehacks@4.0.3
| | | | |   +-- browserslist@4.5.2 deduped
| | | | |   +-- postcss@7.0.14 deduped
| | | | |   `-- postcss-selector-parser@3.1.1
| | | | |     +-- dot-prop@4.2.0 deduped
| | | | |     +-- indexes-of@1.0.1 deduped
| | | | |     `-- uniq@1.0.1 deduped
| | | | +-- postcss-merge-rules@4.0.3
| | | | | +-- browserslist@4.5.2 deduped
| | | | | +-- caniuse-api@3.0.0
| | | | | | +-- browserslist@4.5.2 deduped
| | | | | | +-- caniuse-lite@1.0.30000954 deduped
| | | | | | +-- lodash.memoize@4.1.2
| | | | | | `-- lodash.uniq@4.5.0
| | | | | +-- cssnano-util-same-parent@4.0.1
| | | | | +-- postcss@7.0.14 deduped
| | | | | +-- postcss-selector-parser@3.1.1
| | | | | | +-- dot-prop@4.2.0
| | | | | | | `-- is-obj@1.0.1
| | | | | | +-- indexes-of@1.0.1 deduped
| | | | | | `-- uniq@1.0.1 deduped
| | | | | `-- vendors@1.0.2
| | | | +-- postcss-minify-font-values@4.0.2
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-minify-gradients@4.0.2
| | | | | +-- cssnano-util-get-arguments@4.0.0
| | | | | +-- is-color-stop@1.1.0
| | | | | | +-- css-color-names@0.0.4 deduped
| | | | | | +-- hex-color-regex@1.1.0
| | | | | | +-- hsl-regex@1.0.0
| | | | | | +-- hsla-regex@1.0.0
| | | | | | +-- rgb-regex@1.0.1
| | | | | | `-- rgba-regex@1.0.0
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-minify-params@4.0.2
| | | | | +-- alphanum-sort@1.0.2
| | | | | +-- browserslist@4.5.2 deduped
| | | | | +-- cssnano-util-get-arguments@4.0.0 deduped
| | | | | +-- postcss@7.0.14 deduped
| | | | | +-- postcss-value-parser@3.3.1 deduped
| | | | | `-- uniqs@2.0.0
| | | | +-- postcss-minify-selectors@4.0.2
| | | | | +-- alphanum-sort@1.0.2 deduped
| | | | | +-- has@1.0.3 deduped
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-selector-parser@3.1.1
| | | | |   +-- dot-prop@4.2.0 deduped
| | | | |   +-- indexes-of@1.0.1 deduped
| | | | |   `-- uniq@1.0.1 deduped
| | | | +-- postcss-normalize-charset@4.0.1
| | | | | `-- postcss@7.0.14 deduped
| | | | +-- postcss-normalize-display-values@4.0.2
| | | | | +-- cssnano-util-get-match@4.0.0
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-normalize-positions@4.0.2
| | | | | +-- cssnano-util-get-arguments@4.0.0 deduped
| | | | | +-- has@1.0.3 deduped
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-normalize-repeat-style@4.0.2
| | | | | +-- cssnano-util-get-arguments@4.0.0 deduped
| | | | | +-- cssnano-util-get-match@4.0.0 deduped
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-normalize-string@4.0.2
| | | | | +-- has@1.0.3 deduped
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-normalize-timing-functions@4.0.2
| | | | | +-- cssnano-util-get-match@4.0.0 deduped
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-normalize-unicode@4.0.1
| | | | | +-- browserslist@4.5.2 deduped
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-normalize-url@4.0.1
| | | | | +-- is-absolute-url@2.1.0
| | | | | +-- normalize-url@3.3.0
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-normalize-whitespace@4.0.2
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-ordered-values@4.1.2
| | | | | +-- cssnano-util-get-arguments@4.0.0 deduped
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-reduce-initial@4.0.3
| | | | | +-- browserslist@4.5.2 deduped
| | | | | +-- caniuse-api@3.0.0 deduped
| | | | | +-- has@1.0.3 deduped
| | | | | `-- postcss@7.0.14 deduped
| | | | +-- postcss-reduce-transforms@4.0.2
| | | | | +-- cssnano-util-get-match@4.0.0 deduped
| | | | | +-- has@1.0.3 deduped
| | | | | +-- postcss@7.0.14 deduped
| | | | | `-- postcss-value-parser@3.3.1 deduped
| | | | +-- postcss-svgo@4.0.2
| | | | | +-- is-svg@3.0.0
| | | | | | `-- html-comment-regex@1.1.2
| | | | | +-- postcss@7.0.14 deduped
| | | | | +-- postcss-value-parser@3.3.1 deduped
| | | | | `-- svgo@1.2.0
| | | | |   +-- chalk@2.4.2 deduped
| | | | |   +-- coa@2.0.2
| | | | |   | +-- @types/q@1.5.2
| | | | |   | +-- chalk@2.4.2 deduped
| | | | |   | `-- q@1.5.1
| | | | |   +-- css-select@2.0.2
| | | | |   | +-- boolbase@1.0.0
| | | | |   | +-- css-what@2.1.3
| | | | |   | +-- domutils@1.7.0
| | | | |   | | +-- dom-serializer@0.1.1
| | | | |   | | | +-- domelementtype@1.3.1 deduped
| | | | |   | | | `-- entities@1.1.2
| | | | |   | | `-- domelementtype@1.3.1
| | | | |   | `-- nth-check@1.0.2
| | | | |   |   `-- boolbase@1.0.0 deduped
| | | | |   +-- css-select-base-adapter@0.1.1
| | | | |   +-- css-tree@1.0.0-alpha.28
| | | | |   | +-- mdn-data@1.1.4
| | | | |   | `-- source-map@0.5.7 deduped
| | | | |   +-- css-url-regex@1.1.0
| | | | |   +-- csso@3.5.1
| | | | |   | `-- css-tree@1.0.0-alpha.29
| | | | |   |   +-- mdn-data@1.1.4 deduped
| | | | |   |   `-- source-map@0.5.7 deduped
| | | | |   +-- js-yaml@3.13.1 deduped
| | | | |   +-- mkdirp@0.5.1 deduped
| | | | |   +-- object.values@1.1.0
| | | | |   | +-- define-properties@1.1.3 deduped
| | | | |   | +-- es-abstract@1.13.0 deduped
| | | | |   | +-- function-bind@1.1.1 deduped
| | | | |   | `-- has@1.0.3 deduped
| | | | |   +-- sax@1.2.4
| | | | |   +-- stable@0.1.8
| | | | |   +-- unquote@1.1.1
| | | | |   `-- util.promisify@1.0.0 deduped
| | | | `-- postcss-unique-selectors@4.0.1
| | | |   +-- alphanum-sort@1.0.2 deduped
| | | |   +-- postcss@7.0.14 deduped
| | | |   `-- uniqs@2.0.0 deduped
| | | +-- is-resolvable@1.1.0
| | | `-- postcss@7.0.14 deduped
| | `-- last-call-webpack-plugin@3.0.0
| |   +-- lodash@4.17.11 deduped
| |   `-- webpack-sources@1.3.0 deduped
| +-- postcss-loader@3.0.0
| | +-- loader-utils@1.2.3 deduped
| | +-- postcss@7.0.14 deduped
| | +-- postcss-load-config@2.0.0
| | | +-- cosmiconfig@4.0.0
| | | | +-- is-directory@0.3.1 deduped
| | | | +-- js-yaml@3.13.1 deduped
| | | | +-- parse-json@4.0.0 deduped
| | | | `-- require-from-string@2.0.2
| | | `-- import-cwd@2.1.0
| | |   `-- import-from@2.1.0
| | |     `-- resolve-from@3.0.0 deduped
| | `-- schema-utils@1.0.0
| |   +-- ajv@6.10.0 deduped
| |   +-- ajv-errors@1.0.1 deduped
| |   `-- ajv-keywords@3.4.0 deduped
| +-- style-loader@0.23.1
| | +-- loader-utils@1.2.3 deduped
| | `-- schema-utils@1.0.0
| |   +-- ajv@6.10.0 deduped
| |   +-- ajv-errors@1.0.1 deduped
| |   `-- ajv-keywords@3.4.0 deduped
| +-- terser@3.17.0
| | +-- commander@2.19.0
| | +-- source-map@0.6.1
| | `-- source-map-support@0.5.11
| |   +-- buffer-from@1.1.1
| |   `-- source-map@0.6.1
| +-- terser-webpack-plugin@1.2.3
| | +-- cacache@11.3.2
| | | +-- bluebird@3.5.3
| | | +-- chownr@1.1.1
| | | +-- figgy-pudding@3.5.1
| | | +-- glob@7.1.3 deduped
| | | +-- graceful-fs@4.1.15 deduped
| | | +-- lru-cache@5.1.1
| | | | `-- yallist@3.0.3
| | | +-- mississippi@3.0.0
| | | | +-- concat-stream@1.6.2
| | | | | +-- buffer-from@1.1.1 deduped
| | | | | +-- inherits@2.0.3 deduped
| | | | | +-- readable-stream@2.3.6 deduped
| | | | | `-- typedarray@0.0.6
| | | | +-- duplexify@3.7.1
| | | | | +-- end-of-stream@1.4.1 deduped
| | | | | +-- inherits@2.0.3 deduped
| | | | | +-- readable-stream@2.3.6 deduped
| | | | | `-- stream-shift@1.0.0
| | | | +-- end-of-stream@1.4.1
| | | | | `-- once@1.4.0 deduped
| | | | +-- flush-write-stream@1.1.1
| | | | | +-- inherits@2.0.3 deduped
| | | | | `-- readable-stream@2.3.6 deduped
| | | | +-- from2@2.3.0
| | | | | +-- inherits@2.0.3 deduped
| | | | | `-- readable-stream@2.3.6 deduped
| | | | +-- parallel-transform@1.1.0
| | | | | +-- cyclist@0.2.2
| | | | | +-- inherits@2.0.3 deduped
| | | | | `-- readable-stream@2.3.6 deduped
| | | | +-- pump@3.0.0
| | | | | +-- end-of-stream@1.4.1 deduped
| | | | | `-- once@1.4.0 deduped
| | | | +-- pumpify@1.5.1
| | | | | +-- duplexify@3.7.1 deduped
| | | | | +-- inherits@2.0.3 deduped
| | | | | `-- pump@2.0.1
| | | | |   +-- end-of-stream@1.4.1 deduped
| | | | |   `-- once@1.4.0 deduped
| | | | +-- stream-each@1.2.3
| | | | | +-- end-of-stream@1.4.1 deduped
| | | | | `-- stream-shift@1.0.0 deduped
| | | | `-- through2@2.0.5
| | | |   +-- readable-stream@2.3.6 deduped
| | | |   `-- xtend@4.0.1 deduped
| | | +-- mkdirp@0.5.1 deduped
| | | +-- move-concurrently@1.0.1
| | | | +-- aproba@1.2.0
| | | | +-- copy-concurrently@1.0.5
| | | | | +-- aproba@1.2.0 deduped
| | | | | +-- fs-write-stream-atomic@1.0.10 deduped
| | | | | +-- iferr@0.1.5
| | | | | +-- mkdirp@0.5.1 deduped
| | | | | +-- rimraf@2.6.3 deduped
| | | | | `-- run-queue@1.0.3 deduped
| | | | +-- fs-write-stream-atomic@1.0.10
| | | | | +-- graceful-fs@4.1.15 deduped
| | | | | +-- iferr@0.1.5 deduped
| | | | | +-- imurmurhash@0.1.4
| | | | | `-- readable-stream@2.3.6 deduped
| | | | +-- mkdirp@0.5.1 deduped
| | | | +-- rimraf@2.6.3 deduped
| | | | `-- run-queue@1.0.3
| | | |   `-- aproba@1.2.0 deduped
| | | +-- promise-inflight@1.0.1
| | | +-- rimraf@2.6.3
| | | | `-- glob@7.1.3 deduped
| | | +-- ssri@6.0.1
| | | | `-- figgy-pudding@3.5.1 deduped
| | | +-- unique-filename@1.1.1
| | | | `-- unique-slug@2.0.1
| | | |   `-- imurmurhash@0.1.4 deduped
| | | `-- y18n@4.0.0 deduped
| | +-- find-cache-dir@2.1.0 deduped
| | +-- schema-utils@1.0.0
| | | +-- ajv@6.10.0 deduped
| | | +-- ajv-errors@1.0.1 deduped
| | | `-- ajv-keywords@3.4.0 deduped
| | +-- serialize-javascript@1.6.1
| | +-- source-map@0.6.1
| | +-- terser@3.17.0 deduped
| | +-- webpack-sources@1.3.0 deduped
| | `-- worker-farm@1.6.0
| |   `-- errno@0.1.7
| |     `-- prr@1.0.1
| +-- vue-loader@15.7.0
| | +-- @vue/component-compiler-utils@2.6.0
| | | +-- consolidate@0.15.1
| | | | `-- bluebird@3.5.3 deduped
| | | +-- hash-sum@1.0.2 deduped
| | | +-- lru-cache@4.1.5
| | | | +-- pseudomap@1.0.2
| | | | `-- yallist@2.1.2
| | | +-- merge-source-map@1.1.0
| | | | `-- source-map@0.6.1
| | | +-- postcss@7.0.14 deduped
| | | +-- postcss-selector-parser@5.0.0
| | | | +-- cssesc@2.0.0
| | | | +-- indexes-of@1.0.1
| | | | `-- uniq@1.0.1
| | | +-- prettier@1.16.3
| | | +-- source-map@0.6.1
| | | `-- vue-template-es2015-compiler@1.9.1
| | +-- hash-sum@1.0.2
| | +-- loader-utils@1.2.3 deduped
| | +-- vue-hot-reload-api@2.3.3
| | `-- vue-style-loader@4.1.2
| |   +-- hash-sum@1.0.2 deduped
| |   `-- loader-utils@1.2.3 deduped
| +-- webpack@4.29.6
| | +-- @webassemblyjs/ast@1.8.5
| | | +-- @webassemblyjs/helper-module-context@1.8.5 deduped
| | | +-- @webassemblyjs/helper-wasm-bytecode@1.8.5
| | | `-- @webassemblyjs/wast-parser@1.8.5
| | |   +-- @webassemblyjs/ast@1.8.5 deduped
| | |   +-- @webassemblyjs/floating-point-hex-parser@1.8.5
| | |   +-- @webassemblyjs/helper-api-error@1.8.5 deduped
| | |   +-- @webassemblyjs/helper-code-frame@1.8.5
| | |   | `-- @webassemblyjs/wast-printer@1.8.5 deduped
| | |   +-- @webassemblyjs/helper-fsm@1.8.5
| | |   `-- @xtuc/long@4.2.2
| | +-- @webassemblyjs/helper-module-context@1.8.5
| | | +-- @webassemblyjs/ast@1.8.5 deduped
| | | `-- mamacro@0.0.3
| | +-- @webassemblyjs/wasm-edit@1.8.5
| | | +-- @webassemblyjs/ast@1.8.5 deduped
| | | +-- @webassemblyjs/helper-buffer@1.8.5
| | | +-- @webassemblyjs/helper-wasm-bytecode@1.8.5 deduped
| | | +-- @webassemblyjs/helper-wasm-section@1.8.5
| | | | +-- @webassemblyjs/ast@1.8.5 deduped
| | | | +-- @webassemblyjs/helper-buffer@1.8.5 deduped
| | | | +-- @webassemblyjs/helper-wasm-bytecode@1.8.5 deduped
| | | | `-- @webassemblyjs/wasm-gen@1.8.5 deduped
| | | +-- @webassemblyjs/wasm-gen@1.8.5
| | | | +-- @webassemblyjs/ast@1.8.5 deduped
| | | | +-- @webassemblyjs/helper-wasm-bytecode@1.8.5 deduped
| | | | +-- @webassemblyjs/ieee754@1.8.5 deduped
| | | | +-- @webassemblyjs/leb128@1.8.5 deduped
| | | | `-- @webassemblyjs/utf8@1.8.5 deduped
| | | +-- @webassemblyjs/wasm-opt@1.8.5
| | | | +-- @webassemblyjs/ast@1.8.5 deduped
| | | | +-- @webassemblyjs/helper-buffer@1.8.5 deduped
| | | | +-- @webassemblyjs/wasm-gen@1.8.5 deduped
| | | | `-- @webassemblyjs/wasm-parser@1.8.5 deduped
| | | +-- @webassemblyjs/wasm-parser@1.8.5 deduped
| | | `-- @webassemblyjs/wast-printer@1.8.5
| | |   +-- @webassemblyjs/ast@1.8.5 deduped
| | |   +-- @webassemblyjs/wast-parser@1.8.5 deduped
| | |   `-- @xtuc/long@4.2.2 deduped
| | +-- @webassemblyjs/wasm-parser@1.8.5
| | | +-- @webassemblyjs/ast@1.8.5 deduped
| | | +-- @webassemblyjs/helper-api-error@1.8.5
| | | +-- @webassemblyjs/helper-wasm-bytecode@1.8.5 deduped
| | | +-- @webassemblyjs/ieee754@1.8.5
| | | | `-- @xtuc/ieee754@1.2.0
| | | +-- @webassemblyjs/leb128@1.8.5
| | | | `-- @xtuc/long@4.2.2 deduped
| | | `-- @webassemblyjs/utf8@1.8.5
| | +-- acorn@6.1.1
| | +-- acorn-dynamic-import@4.0.0
| | +-- ajv@6.10.0
| | | +-- fast-deep-equal@2.0.1
| | | +-- fast-json-stable-stringify@2.0.0
| | | +-- json-schema-traverse@0.4.1
| | | `-- uri-js@4.2.2
| | |   `-- punycode@2.1.1
| | +-- ajv-keywords@3.4.0
| | +-- chrome-trace-event@1.0.0
| | | `-- tslib@1.9.3
| | +-- enhanced-resolve@4.1.0
| | | +-- graceful-fs@4.1.15 deduped
| | | +-- memory-fs@0.4.1 deduped
| | | `-- tapable@1.1.1 deduped
| | +-- eslint-scope@4.0.3
| | | +-- esrecurse@4.2.1
| | | | `-- estraverse@4.2.0 deduped
| | | `-- estraverse@4.2.0
| | +-- json-parse-better-errors@1.0.2
| | +-- loader-runner@2.4.0
| | +-- loader-utils@1.2.3 deduped
| | +-- memory-fs@0.4.1
| | | +-- errno@0.1.7 deduped
| | | `-- readable-stream@2.3.6 deduped
| | +-- micromatch@3.1.10
| | | +-- arr-diff@4.0.0
| | | +-- array-unique@0.3.2 deduped
| | | +-- braces@2.3.2 deduped
| | | +-- define-property@2.0.2
| | | | +-- is-descriptor@1.0.2
| | | | | +-- is-accessor-descriptor@1.0.0
| | | | | | `-- kind-of@6.0.2 deduped
| | | | | +-- is-data-descriptor@1.0.0
| | | | | | `-- kind-of@6.0.2 deduped
| | | | | `-- kind-of@6.0.2 deduped
| | | | `-- isobject@3.0.1 deduped
| | | +-- extend-shallow@3.0.2
| | | | +-- assign-symbols@1.0.0
| | | | `-- is-extendable@1.0.1 deduped
| | | +-- extglob@2.0.4
| | | | +-- array-unique@0.3.2 deduped
| | | | +-- define-property@1.0.0
| | | | | `-- is-descriptor@1.0.2
| | | | |   +-- is-accessor-descriptor@1.0.0
| | | | |   | `-- kind-of@6.0.2 deduped
| | | | |   +-- is-data-descriptor@1.0.0
| | | | |   | `-- kind-of@6.0.2 deduped
| | | | |   `-- kind-of@6.0.2 deduped
| | | | +-- expand-brackets@2.1.4
| | | | | +-- debug@2.6.9
| | | | | | `-- ms@2.0.0
| | | | | +-- define-property@0.2.5
| | | | | | `-- is-descriptor@0.1.6 deduped
| | | | | +-- extend-shallow@2.0.1
| | | | | | `-- is-extendable@0.1.1
| | | | | +-- posix-character-classes@0.1.1
| | | | | +-- regex-not@1.0.2 deduped
| | | | | +-- snapdragon@0.8.2 deduped
| | | | | `-- to-regex@3.0.2 deduped
| | | | +-- extend-shallow@2.0.1
| | | | | `-- is-extendable@0.1.1
| | | | +-- fragment-cache@0.2.1 deduped
| | | | +-- regex-not@1.0.2 deduped
| | | | +-- snapdragon@0.8.2 deduped
| | | | `-- to-regex@3.0.2 deduped
| | | +-- fragment-cache@0.2.1
| | | | `-- map-cache@0.2.2 deduped
| | | +-- kind-of@6.0.2 deduped
| | | +-- nanomatch@1.2.13
| | | | +-- arr-diff@4.0.0 deduped
| | | | +-- array-unique@0.3.2 deduped
| | | | +-- define-property@2.0.2 deduped
| | | | +-- extend-shallow@3.0.2 deduped
| | | | +-- fragment-cache@0.2.1 deduped
| | | | +-- is-windows@1.0.2 deduped
| | | | +-- kind-of@6.0.2 deduped
| | | | +-- object.pick@1.3.0 deduped
| | | | +-- regex-not@1.0.2 deduped
| | | | +-- snapdragon@0.8.2 deduped
| | | | `-- to-regex@3.0.2 deduped
| | | +-- object.pick@1.3.0
| | | | `-- isobject@3.0.1 deduped
| | | +-- regex-not@1.0.2
| | | | +-- extend-shallow@3.0.2 deduped
| | | | `-- safe-regex@1.1.0 deduped
| | | +-- snapdragon@0.8.2 deduped
| | | `-- to-regex@3.0.2 deduped
| | +-- mkdirp@0.5.1 deduped
| | +-- neo-async@2.6.0 deduped
| | +-- node-libs-browser@2.2.0
| | | +-- assert@1.4.1 deduped
| | | +-- browserify-zlib@0.2.0
| | | | `-- pako@1.0.10
| | | +-- buffer@4.9.1
| | | | +-- base64-js@1.3.0
| | | | +-- ieee754@1.1.13
| | | | `-- isarray@1.0.0 deduped
| | | +-- console-browserify@1.1.0
| | | | `-- date-now@0.1.4
| | | +-- constants-browserify@1.0.0
| | | +-- crypto-browserify@3.12.0
| | | | +-- browserify-cipher@1.0.1
| | | | | +-- browserify-aes@1.2.0
| | | | | | +-- buffer-xor@1.0.3
| | | | | | +-- cipher-base@1.0.4 deduped
| | | | | | +-- create-hash@1.2.0 deduped
| | | | | | +-- evp_bytestokey@1.0.3 deduped
| | | | | | +-- inherits@2.0.3 deduped
| | | | | | `-- safe-buffer@5.1.2 deduped
| | | | | +-- browserify-des@1.0.2
| | | | | | +-- cipher-base@1.0.4 deduped
| | | | | | +-- des.js@1.0.0
| | | | | | | +-- inherits@2.0.3 deduped
| | | | | | | `-- minimalistic-assert@1.0.1 deduped
| | | | | | +-- inherits@2.0.3 deduped
| | | | | | `-- safe-buffer@5.1.2 deduped
| | | | | `-- evp_bytestokey@1.0.3
| | | | |   +-- md5.js@1.3.5 deduped
| | | | |   `-- safe-buffer@5.1.2 deduped
| | | | +-- browserify-sign@4.0.4
| | | | | +-- bn.js@4.11.8
| | | | | +-- browserify-rsa@4.0.1
| | | | | | +-- bn.js@4.11.8 deduped
| | | | | | `-- randombytes@2.1.0 deduped
| | | | | +-- create-hash@1.2.0 deduped
| | | | | +-- create-hmac@1.1.7 deduped
| | | | | +-- elliptic@6.4.1
| | | | | | +-- bn.js@4.11.8 deduped
| | | | | | +-- brorand@1.1.0
| | | | | | +-- hash.js@1.1.7
| | | | | | | +-- inherits@2.0.3 deduped
| | | | | | | `-- minimalistic-assert@1.0.1 deduped
| | | | | | +-- hmac-drbg@1.0.1
| | | | | | | +-- hash.js@1.1.7 deduped
| | | | | | | +-- minimalistic-assert@1.0.1 deduped
| | | | | | | `-- minimalistic-crypto-utils@1.0.1 deduped
| | | | | | +-- inherits@2.0.3 deduped
| | | | | | +-- minimalistic-assert@1.0.1 deduped
| | | | | | `-- minimalistic-crypto-utils@1.0.1
| | | | | +-- inherits@2.0.3 deduped
| | | | | `-- parse-asn1@5.1.4
| | | | |   +-- asn1.js@4.10.1
| | | | |   | +-- bn.js@4.11.8 deduped
| | | | |   | +-- inherits@2.0.3 deduped
| | | | |   | `-- minimalistic-assert@1.0.1 deduped
| | | | |   +-- browserify-aes@1.2.0 deduped
| | | | |   +-- create-hash@1.2.0 deduped
| | | | |   +-- evp_bytestokey@1.0.3 deduped
| | | | |   +-- pbkdf2@3.0.17 deduped
| | | | |   `-- safe-buffer@5.1.2 deduped
| | | | +-- create-ecdh@4.0.3
| | | | | +-- bn.js@4.11.8 deduped
| | | | | `-- elliptic@6.4.1 deduped
| | | | +-- create-hash@1.2.0
| | | | | +-- cipher-base@1.0.4
| | | | | | +-- inherits@2.0.3 deduped
| | | | | | `-- safe-buffer@5.1.2 deduped
| | | | | +-- inherits@2.0.3 deduped
| | | | | +-- md5.js@1.3.5
| | | | | | +-- hash-base@3.0.4
| | | | | | | +-- inherits@2.0.3 deduped
| | | | | | | `-- safe-buffer@5.1.2 deduped
| | | | | | +-- inherits@2.0.3 deduped
| | | | | | `-- safe-buffer@5.1.2 deduped
| | | | | +-- ripemd160@2.0.2
| | | | | | +-- hash-base@3.0.4 deduped
| | | | | | `-- inherits@2.0.3 deduped
| | | | | `-- sha.js@2.4.11
| | | | |   +-- inherits@2.0.3 deduped
| | | | |   `-- safe-buffer@5.1.2 deduped
| | | | +-- create-hmac@1.1.7
| | | | | +-- cipher-base@1.0.4 deduped
| | | | | +-- create-hash@1.2.0 deduped
| | | | | +-- inherits@2.0.3 deduped
| | | | | +-- ripemd160@2.0.2 deduped
| | | | | +-- safe-buffer@5.1.2 deduped
| | | | | `-- sha.js@2.4.11 deduped
| | | | +-- diffie-hellman@5.0.3
| | | | | +-- bn.js@4.11.8 deduped
| | | | | +-- miller-rabin@4.0.1
| | | | | | +-- bn.js@4.11.8 deduped
| | | | | | `-- brorand@1.1.0 deduped
| | | | | `-- randombytes@2.1.0 deduped
| | | | +-- inherits@2.0.3 deduped
| | | | +-- pbkdf2@3.0.17
| | | | | +-- create-hash@1.2.0 deduped
| | | | | +-- create-hmac@1.1.7 deduped
| | | | | +-- ripemd160@2.0.2 deduped
| | | | | +-- safe-buffer@5.1.2 deduped
| | | | | `-- sha.js@2.4.11 deduped
| | | | +-- public-encrypt@4.0.3
| | | | | +-- bn.js@4.11.8 deduped
| | | | | +-- browserify-rsa@4.0.1 deduped
| | | | | +-- create-hash@1.2.0 deduped
| | | | | +-- parse-asn1@5.1.4 deduped
| | | | | +-- randombytes@2.1.0 deduped
| | | | | `-- safe-buffer@5.1.2 deduped
| | | | +-- randombytes@2.1.0
| | | | | `-- safe-buffer@5.1.2 deduped
| | | | `-- randomfill@1.0.4
| | | |   +-- randombytes@2.1.0 deduped
| | | |   `-- safe-buffer@5.1.2 deduped
| | | +-- domain-browser@1.2.0
| | | +-- events@3.0.0
| | | +-- https-browserify@1.0.0
| | | +-- os-browserify@0.3.0
| | | +-- path-browserify@0.0.0
| | | +-- process@0.11.10
| | | +-- punycode@1.4.1
| | | +-- querystring-es3@0.2.1
| | | +-- readable-stream@2.3.6 deduped
| | | +-- stream-browserify@2.0.2
| | | | +-- inherits@2.0.3 deduped
| | | | `-- readable-stream@2.3.6 deduped
| | | +-- stream-http@2.8.3
| | | | +-- builtin-status-codes@3.0.0
| | | | +-- inherits@2.0.3 deduped
| | | | +-- readable-stream@2.3.6 deduped
| | | | +-- to-arraybuffer@1.0.1
| | | | `-- xtend@4.0.1
| | | +-- string_decoder@1.1.1
| | | | `-- safe-buffer@5.1.2 deduped
| | | +-- timers-browserify@2.0.10
| | | | `-- setimmediate@1.0.5
| | | +-- tty-browserify@0.0.0
| | | +-- url@0.11.0 deduped
| | | +-- util@0.11.1
| | | | `-- inherits@2.0.3 deduped
| | | `-- vm-browserify@0.0.4
| | |   `-- indexof@0.0.1
| | +-- schema-utils@1.0.0
| | | +-- ajv@6.10.0 deduped
| | | +-- ajv-errors@1.0.1 deduped
| | | `-- ajv-keywords@3.4.0 deduped
| | +-- tapable@1.1.1
| | +-- terser-webpack-plugin@1.2.3 deduped
| | +-- watchpack@1.6.0
| | | +-- chokidar@2.1.5 deduped
| | | +-- graceful-fs@4.1.15 deduped
| | | `-- neo-async@2.6.0 deduped
| | `-- webpack-sources@1.3.0 deduped
| +-- webpack-cli@3.3.0
| | +-- chalk@2.4.2
| | | +-- ansi-styles@3.2.1
| | | | `-- color-convert@1.9.3
| | | |   `-- color-name@1.1.3 deduped
| | | +-- escape-string-regexp@1.0.5 deduped
| | | `-- supports-color@5.5.0 deduped
| | +-- cross-spawn@6.0.5 deduped
| | +-- enhanced-resolve@4.1.0 deduped
| | +-- findup-sync@2.0.0
| | | +-- detect-file@1.0.0
| | | +-- is-glob@3.1.0
| | | | `-- is-extglob@2.1.1 deduped
| | | +-- micromatch@3.1.10 deduped
| | | `-- resolve-dir@1.0.1
| | |   +-- expand-tilde@2.0.2
| | |   | `-- homedir-polyfill@1.0.3 deduped
| | |   `-- global-modules@1.0.0 deduped
| | +-- global-modules@1.0.0
| | | +-- global-prefix@1.0.2
| | | | +-- expand-tilde@2.0.2 deduped
| | | | +-- homedir-polyfill@1.0.3
| | | | | `-- parse-passwd@1.0.0
| | | | +-- ini@1.3.5
| | | | +-- is-windows@1.0.2 deduped
| | | | `-- which@1.3.1 deduped
| | | +-- is-windows@1.0.2 deduped
| | | `-- resolve-dir@1.0.1 deduped
| | +-- import-local@2.0.0
| | | +-- pkg-dir@3.0.0 deduped
| | | `-- resolve-cwd@2.0.0
| | |   `-- resolve-from@3.0.0
| | +-- interpret@1.2.0
| | +-- loader-utils@1.2.3 deduped
| | +-- supports-color@5.5.0
| | | `-- has-flag@3.0.0
| | +-- v8-compile-cache@2.0.2
| | `-- yargs@12.0.5 deduped
| +-- webpack-dev-server@3.2.1
| | +-- ansi-html@0.0.7
| | +-- bonjour@3.5.0
| | | +-- array-flatten@2.1.2
| | | +-- deep-equal@1.0.1
| | | +-- dns-equal@1.0.0
| | | +-- dns-txt@2.0.2
| | | | `-- buffer-indexof@1.1.1
| | | +-- multicast-dns@6.2.3
| | | | +-- dns-packet@1.3.1
| | | | | +-- ip@1.1.5 deduped
| | | | | `-- safe-buffer@5.1.2 deduped
| | | | `-- thunky@1.0.3
| | | `-- multicast-dns-service-types@1.1.0
| | +-- chokidar@2.1.5 deduped
| | +-- compression@1.7.4
| | | +-- accepts@1.3.5
| | | | +-- mime-types@2.1.22 deduped
| | | | `-- negotiator@0.6.1
| | | +-- bytes@3.0.0
| | | +-- compressible@2.0.16
| | | | `-- mime-db@1.38.0
| | | +-- debug@2.6.9
| | | | `-- ms@2.0.0
| | | +-- on-headers@1.0.2
| | | +-- safe-buffer@5.1.2 deduped
| | | `-- vary@1.1.2
| | +-- connect-history-api-fallback@1.6.0
| | +-- debug@4.1.1
| | | `-- ms@2.1.1 deduped
| | +-- del@3.0.0
| | | +-- globby@6.1.0
| | | | +-- array-union@1.0.2 deduped
| | | | +-- glob@7.1.3 deduped
| | | | +-- object-assign@4.1.1 deduped
| | | | +-- pify@2.3.0
| | | | `-- pinkie-promise@2.0.1
| | | |   `-- pinkie@2.0.4
| | | +-- is-path-cwd@1.0.0
| | | +-- is-path-in-cwd@1.0.1
| | | | `-- is-path-inside@1.0.1
| | | |   `-- path-is-inside@1.0.2
| | | +-- p-map@1.2.0
| | | +-- pify@3.0.0
| | | `-- rimraf@2.6.3 deduped
| | +-- express@4.16.4
| | | +-- accepts@1.3.5 deduped
| | | +-- array-flatten@1.1.1
| | | +-- body-parser@1.18.3
| | | | +-- bytes@3.0.0 deduped
| | | | +-- content-type@1.0.4 deduped
| | | | +-- debug@2.6.9
| | | | | `-- ms@2.0.0
| | | | +-- depd@1.1.2 deduped
| | | | +-- http-errors@1.6.3 deduped
| | | | +-- iconv-lite@0.4.23
| | | | | `-- safer-buffer@2.1.2
| | | | +-- on-finished@2.3.0 deduped
| | | | +-- qs@6.5.2 deduped
| | | | +-- raw-body@2.3.3
| | | | | +-- bytes@3.0.0 deduped
| | | | | +-- http-errors@1.6.3 deduped
| | | | | +-- iconv-lite@0.4.23 deduped
| | | | | `-- unpipe@1.0.0 deduped
| | | | `-- type-is@1.6.16 deduped
| | | +-- content-disposition@0.5.2
| | | +-- content-type@1.0.4
| | | +-- cookie@0.3.1
| | | +-- cookie-signature@1.0.6
| | | +-- debug@2.6.9
| | | | `-- ms@2.0.0
| | | +-- depd@1.1.2
| | | +-- encodeurl@1.0.2
| | | +-- escape-html@1.0.3
| | | +-- etag@1.8.1
| | | +-- finalhandler@1.1.1
| | | | +-- debug@2.6.9
| | | | | `-- ms@2.0.0
| | | | +-- encodeurl@1.0.2 deduped
| | | | +-- escape-html@1.0.3 deduped
| | | | +-- on-finished@2.3.0 deduped
| | | | +-- parseurl@1.3.2 deduped
| | | | +-- statuses@1.4.0 deduped
| | | | `-- unpipe@1.0.0
| | | +-- fresh@0.5.2
| | | +-- merge-descriptors@1.0.1
| | | +-- methods@1.1.2
| | | +-- on-finished@2.3.0
| | | | `-- ee-first@1.1.1
| | | +-- parseurl@1.3.2
| | | +-- path-to-regexp@0.1.7
| | | +-- proxy-addr@2.0.4
| | | | +-- forwarded@0.1.2
| | | | `-- ipaddr.js@1.8.0
| | | +-- qs@6.5.2
| | | +-- range-parser@1.2.0
| | | +-- safe-buffer@5.1.2 deduped
| | | +-- send@0.16.2
| | | | +-- debug@2.6.9
| | | | | `-- ms@2.0.0 deduped
| | | | +-- depd@1.1.2 deduped
| | | | +-- destroy@1.0.4
| | | | +-- encodeurl@1.0.2 deduped
| | | | +-- escape-html@1.0.3 deduped
| | | | +-- etag@1.8.1 deduped
| | | | +-- fresh@0.5.2 deduped
| | | | +-- http-errors@1.6.3 deduped
| | | | +-- mime@1.4.1
| | | | +-- ms@2.0.0
| | | | +-- on-finished@2.3.0 deduped
| | | | +-- range-parser@1.2.0 deduped
| | | | `-- statuses@1.4.0 deduped
| | | +-- serve-static@1.13.2
| | | | +-- encodeurl@1.0.2 deduped
| | | | +-- escape-html@1.0.3 deduped
| | | | +-- parseurl@1.3.2 deduped
| | | | `-- send@0.16.2 deduped
| | | +-- setprototypeof@1.1.0
| | | +-- statuses@1.4.0
| | | +-- type-is@1.6.16
| | | | +-- media-typer@0.3.0
| | | | `-- mime-types@2.1.22 deduped
| | | +-- utils-merge@1.0.1
| | | `-- vary@1.1.2 deduped
| | +-- html-entities@1.2.1
| | +-- http-proxy-middleware@0.19.1
| | | +-- http-proxy@1.17.0
| | | | +-- eventemitter3@3.1.0
| | | | +-- follow-redirects@1.7.0 deduped
| | | | `-- requires-port@1.0.0
| | | +-- is-glob@4.0.1 deduped
| | | +-- lodash@4.17.11 deduped
| | | `-- micromatch@3.1.10 deduped
| | +-- import-local@2.0.0 deduped
| | +-- internal-ip@4.2.0
| | | +-- default-gateway@4.2.0
| | | | +-- execa@1.0.0 deduped
| | | | `-- ip-regex@2.1.0
| | | `-- ipaddr.js@1.9.0
| | +-- ip@1.1.5
| | +-- killable@1.0.1
| | +-- loglevel@1.6.1
| | +-- opn@5.5.0
| | | `-- is-wsl@1.1.0
| | +-- portfinder@1.0.20
| | | +-- async@1.5.2
| | | +-- debug@2.6.9
| | | | `-- ms@2.0.0
| | | `-- mkdirp@0.5.1 deduped
| | +-- schema-utils@1.0.0
| | | +-- ajv@6.10.0 deduped
| | | +-- ajv-errors@1.0.1 deduped
| | | `-- ajv-keywords@3.4.0 deduped
| | +-- selfsigned@1.10.4
| | | `-- node-forge@0.7.5
| | +-- semver@5.7.0 deduped
| | +-- serve-index@1.9.1
| | | +-- accepts@1.3.5 deduped
| | | +-- batch@0.6.1
| | | +-- debug@2.6.9
| | | | `-- ms@2.0.0
| | | +-- escape-html@1.0.3 deduped
| | | +-- http-errors@1.6.3
| | | | +-- depd@1.1.2 deduped
| | | | +-- inherits@2.0.3 deduped
| | | | +-- setprototypeof@1.1.0 deduped
| | | | `-- statuses@1.4.0 deduped
| | | +-- mime-types@2.1.22
| | | | `-- mime-db@1.38.0 deduped
| | | `-- parseurl@1.3.2 deduped
| | +-- sockjs@0.3.19
| | | +-- faye-websocket@0.10.0
| | | | `-- websocket-driver@0.7.0
| | | |   +-- http-parser-js@0.5.0
| | | |   `-- websocket-extensions@0.1.3
| | | `-- uuid@3.3.2
| | +-- sockjs-client@1.3.0
| | | +-- debug@3.2.6 deduped
| | | +-- eventsource@1.0.7
| | | | `-- original@1.0.2
| | | |   `-- url-parse@1.4.4 deduped
| | | +-- faye-websocket@0.11.1
| | | | `-- websocket-driver@0.7.0 deduped
| | | +-- inherits@2.0.3 deduped
| | | +-- json3@3.3.2
| | | `-- url-parse@1.4.4
| | |   +-- querystringify@2.1.1
| | |   `-- requires-port@1.0.0 deduped
| | +-- spdy@4.0.0
| | | +-- debug@4.1.1
| | | | `-- ms@2.1.1 deduped
| | | +-- handle-thing@2.0.0
| | | +-- http-deceiver@1.2.7
| | | +-- select-hose@2.0.0
| | | `-- spdy-transport@3.0.0
| | |   +-- debug@4.1.1
| | |   | `-- ms@2.1.1 deduped
| | |   +-- detect-node@2.0.4
| | |   +-- hpack.js@2.1.6
| | |   | +-- inherits@2.0.3 deduped
| | |   | +-- obuf@1.1.2 deduped
| | |   | +-- readable-stream@2.3.6 deduped
| | |   | `-- wbuf@1.7.3 deduped
| | |   +-- obuf@1.1.2
| | |   +-- readable-stream@3.2.0
| | |   | +-- inherits@2.0.3 deduped
| | |   | +-- string_decoder@1.1.1 deduped
| | |   | `-- util-deprecate@1.0.2 deduped
| | |   `-- wbuf@1.7.3
| | |     `-- minimalistic-assert@1.0.1
| | +-- strip-ansi@3.0.1
| | | `-- ansi-regex@2.1.1
| | +-- supports-color@6.1.0
| | | `-- has-flag@3.0.0 deduped
| | +-- url@0.11.0
| | | +-- punycode@1.3.2
| | | `-- querystring@0.2.0
| | +-- webpack-dev-middleware@3.6.1
| | | +-- memory-fs@0.4.1 deduped
| | | +-- mime@2.4.0
| | | +-- range-parser@1.2.0 deduped
| | | `-- webpack-log@2.0.0 deduped
| | +-- webpack-log@2.0.0
| | | +-- ansi-colors@3.2.4
| | | `-- uuid@3.3.2 deduped
| | `-- yargs@12.0.2
| |   +-- cliui@4.1.0 deduped
| |   +-- decamelize@2.0.0
| |   | `-- xregexp@4.0.0
| |   +-- find-up@3.0.0 deduped
| |   +-- get-caller-file@1.0.3 deduped
| |   +-- os-locale@3.1.0 deduped
| |   +-- require-directory@2.1.1 deduped
| |   +-- require-main-filename@1.0.1 deduped
| |   +-- set-blocking@2.0.0 deduped
| |   +-- string-width@2.1.1 deduped
| |   +-- which-module@2.0.0 deduped
| |   +-- y18n@4.0.0 deduped
| |   `-- yargs-parser@10.1.0
| |     `-- camelcase@4.1.0
| +-- webpack-merge@4.2.1
| | `-- lodash@4.17.11 deduped
| +-- webpack-notifier@1.7.0
| | +-- node-notifier@5.4.0
| | | +-- growly@1.3.0
| | | +-- is-wsl@1.1.0 deduped
| | | +-- semver@5.7.0 deduped
| | | +-- shellwords@0.1.1
| | | `-- which@1.3.1 deduped
| | +-- object-assign@4.1.1 deduped
| | `-- strip-ansi@3.0.1 deduped
| `-- yargs@12.0.5
|   +-- cliui@4.1.0
|   | +-- string-width@2.1.1 deduped
|   | +-- strip-ansi@4.0.0
|   | | `-- ansi-regex@3.0.0
|   | `-- wrap-ansi@2.1.0
|   |   +-- string-width@1.0.2
|   |   | +-- code-point-at@1.1.0
|   |   | +-- is-fullwidth-code-point@1.0.0
|   |   | | `-- number-is-nan@1.0.1
|   |   | `-- strip-ansi@3.0.1 deduped
|   |   `-- strip-ansi@3.0.1 deduped
|   +-- decamelize@1.2.0
|   +-- find-up@3.0.0
|   | `-- locate-path@3.0.0
|   |   +-- p-locate@3.0.0
|   |   | `-- p-limit@2.2.0
|   |   |   `-- p-try@2.1.0
|   |   `-- path-exists@3.0.0
|   +-- get-caller-file@1.0.3
|   +-- os-locale@3.1.0
|   | +-- execa@1.0.0
|   | | +-- cross-spawn@6.0.5 deduped
|   | | +-- get-stream@4.1.0
|   | | | `-- pump@3.0.0 deduped
|   | | +-- is-stream@1.1.0
|   | | +-- npm-run-path@2.0.2
|   | | | `-- path-key@2.0.1 deduped
|   | | +-- p-finally@1.0.0
|   | | +-- signal-exit@3.0.2
|   | | `-- strip-eof@1.0.0
|   | +-- lcid@2.0.0
|   | | `-- invert-kv@2.0.0
|   | `-- mem@4.2.0
|   |   +-- map-age-cleaner@0.1.3
|   |   | `-- p-defer@1.0.0
|   |   +-- mimic-fn@2.0.0
|   |   `-- p-is-promise@2.0.0
|   +-- require-directory@2.1.1
|   +-- require-main-filename@1.0.1
|   +-- set-blocking@2.0.0
|   +-- string-width@2.1.1 deduped
|   +-- which-module@2.0.0
|   +-- y18n@4.0.0
|   `-- yargs-parser@11.1.1
|     +-- camelcase@5.2.0
|     `-- decamelize@1.2.0 deduped
+-- lodash@4.17.11
+-- popper.js@1.15.0
+-- resolve-url-loader@2.3.2
| +-- adjust-sourcemap-loader@1.2.0
| | +-- assert@1.4.1
| | | `-- util@0.10.3
| | |   `-- inherits@2.0.1
| | +-- camelcase@1.2.1
| | +-- loader-utils@1.2.3 deduped
| | +-- lodash.assign@4.2.0
| | +-- lodash.defaults@3.1.2
| | | +-- lodash.assign@3.2.0
| | | | +-- lodash._baseassign@3.2.0
| | | | | +-- lodash._basecopy@3.0.1
| | | | | `-- lodash.keys@3.1.2 deduped
| | | | +-- lodash._createassigner@3.1.1
| | | | | +-- lodash._bindcallback@3.0.1
| | | | | +-- lodash._isiterateecall@3.0.9
| | | | | `-- lodash.restparam@3.6.1 deduped
| | | | `-- lodash.keys@3.1.2
| | | |   +-- lodash._getnative@3.9.1
| | | |   +-- lodash.isarguments@3.1.0
| | | |   `-- lodash.isarray@3.0.4
| | | `-- lodash.restparam@3.6.1
| | +-- object-path@0.9.2
| | `-- regex-parser@2.2.10
| +-- camelcase@4.1.0
| +-- convert-source-map@1.6.0
| | `-- safe-buffer@5.1.2
| +-- loader-utils@1.2.3
| | +-- big.js@5.2.2
| | +-- emojis-list@2.1.0
| | `-- json5@1.0.1
| |   `-- minimist@1.2.0 deduped
| +-- lodash.defaults@4.2.0
| +-- rework@1.0.1
| | +-- convert-source-map@0.3.5
| | `-- css@2.2.4
| |   +-- inherits@2.0.3 deduped
| |   +-- source-map@0.6.1
| |   +-- source-map-resolve@0.5.2
| |   | +-- atob@2.1.2
| |   | +-- decode-uri-component@0.2.0
| |   | +-- resolve-url@0.2.1
| |   | +-- source-map-url@0.4.0
| |   | `-- urix@0.1.0 deduped
| |   `-- urix@0.1.0 deduped
| +-- rework-visit@1.0.0
| +-- source-map@0.5.7
| `-- urix@0.1.0
+-- sass@1.20.1
| `-- chokidar@2.1.5 deduped
+-- sass-loader@7.1.0
| +-- clone-deep@2.0.2
| | +-- for-own@1.0.0
| | | `-- for-in@1.0.2
| | +-- is-plain-object@2.0.4
| | | `-- isobject@3.0.1 deduped
| | +-- kind-of@6.0.2
| | `-- shallow-clone@1.0.0
| |   +-- is-extendable@0.1.1
| |   +-- kind-of@5.1.0
| |   `-- mixin-object@2.0.1
| |     +-- for-in@0.1.8
| |     `-- is-extendable@0.1.1
| +-- loader-utils@1.2.3 deduped
| +-- lodash.tail@4.1.1
| +-- neo-async@2.6.0
| +-- pify@3.0.0
| `-- semver@5.7.0
+-- sgcdn@1.0.3 -> C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\.npm\sgcdn
+-- vue@2.6.10
`-- xterm@3.13.2

```


### Ruby

#### Installed Gems

```cmd

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn\sgrb>gem list

*** LOCAL GEMS ***

actioncable (5.2.3)
actionmailer (5.2.3)
actionpack (5.2.3)
actionview (5.2.3)
activejob (5.2.3)
activemodel (5.2.3)
activerecord (5.2.3)
activestorage (5.2.3)
activesupport (5.2.3)
addressable (2.6.0, 2.4.0)
archive-zip (0.12.0)
arel (9.0.0)
awesome_print (1.8.0)
backports (3.15.0)
bigdecimal (default: 1.3.4)
bindex (0.7.0)
bootsnap (1.4.4)
builder (3.2.3)
bundle (0.0.1)
bundler (2.0.1)
byebug (11.0.1)
capybara (3.22.0)
cat (0.2.1)
childprocess (1.0.1)
chromedriver-helper (2.1.1)
cmath (default: 1.0.0)
coderay (1.1.2)
coffee-rails (4.2.2)
coffee-script (2.4.1)
coffee-script-source (1.12.2)
concurrent-ruby (1.1.5)
crass (1.0.4)
csv (default: 1.0.0)
curl (0.0.9)
date (default: 1.0.0)
dbm (default: 1.0.0)
did_you_mean (1.2.0)
docile (1.3.1)
duktape (2.3.0.0)
erubi (1.8.0)
etc (default: 1.0.0)
ethon (0.12.0)
execjs (2.7.0)
faraday (0.15.4)
faraday_middleware (0.13.1)
fcntl (default: 1.0.0)
ffi (1.11.1 x64-mingw32)
fiddle (default: 1.0.0)
fileutils (default: 1.0.2)
gdbm (default: 2.0.0)
gh (0.15.1)
gist (5.0.0)
globalid (0.4.2)
highline (1.7.10)
i18n (1.6.0)
io-console (default: 0.4.6)
io-like (0.3.0)
ipaddr (default: 1.2.0)
jbuilder (2.9.1)
json (2.2.0, default: 2.1.0)
launchy (2.4.3)
loofah (2.2.3)
mail (2.7.1)
marcel (0.3.3)
metaclass (0.0.4)
method_source (0.9.2)
mimemagic (0.3.3)
mini_mime (1.0.1)
mini_portile2 (2.4.0)
minitest (5.11.3, 5.10.3)
mocha (1.8.0)
msgpack (1.2.10 x64-mingw32)
multi_json (1.13.1)
multipart-post (2.1.1)
mysql2 (0.5.2 x64-mingw32)
nano (0.8.2)
net-http-persistent (2.9.4)
net-http-pipeline (1.0.1)
net-telnet (0.1.1)
nio4r (2.3.1)
nokogiri (1.10.3 x64-mingw32)
openssl (default: 2.1.2)
power_assert (1.1.4, 1.1.1)
pry (0.12.2)
pry-doc (1.0.0)
psych (default: 3.0.2)
public_suffix (3.1.0)
puma (3.12.1)
pusher-client (0.6.2)
rack (2.0.7)
rack-test (1.1.0)
rails (5.2.3)
rails-dom-testing (2.0.3)
rails-html-sanitizer (1.0.4)
railties (5.2.3)
rake (12.3.2, 12.3.0)
rake-compiler (1.0.7)
rb-fsevent (0.10.3)
rb-inotify (0.10.0)
rdoc (default: 6.0.1)
regexp_parser (1.5.1)
rubyzip (1.2.3)
sass (3.7.4)
sass-listen (4.0.0)
sass-rails (5.0.7)
scanf (default: 1.0.0)
sdbm (default: 1.0.0)
selenium-webdriver (3.142.3)
simplecov (0.16.1)
simplecov-html (0.10.2)
sprockets (3.7.2)
sprockets-rails (3.2.1)
sqlite3 (1.4.1)
sqlite3-ruby (1.3.3)
stringio (default: 0.0.1)
strscan (default: 1.0.0)
test-unit (3.3.3, 3.2.7)
thor (0.20.3)
thread_safe (0.3.6)
tilt (2.0.9)
travis (1.8.10)
turbolinks (5.2.0)
turbolinks-source (5.2.0)
typhoeus (0.8.0)
tzinfo (1.2.5)
tzinfo-data (1.2019.1)
uglifier (4.1.20)
unidecoder (1.1.2)
web-console (3.7.0)
webrick (default: 1.4.2)
websocket (1.2.8)
websocket-driver (0.7.0)
websocket-extensions (0.1.3)
xmlrpc (0.3.0)
xpath (3.2.0)
xss (0.1.1 x64-mingw32, 0.1.0 x64-mingw32, 0.0.9 x64-mingw32, 0.0.8 x64-mingw32, 0.0.7 x64-mingw32, 0.0.6 x64-mingw32, 0.0.5 x64-mingw32, 0.0.4 ruby x64-mingw32, 0.0.3, 0.0.2, 0.0.0)
yard (0.9.19)
zeitwerk (2.1.6)
zlib (default: 1.0.0)

```



## Python


### Installation




First <a href="https://www.python.org/downloads/" target="_blank">download</a> & install <strong>Python</strong> for windows.
<br />

#### On Linux Terminal

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

#### On Command Line Windows
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



### Setup, install and push pip package.

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

##### Python & pip commands

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


C:\Users\a7med\Desktop\development>pip install sgpy==1.0.1
Collecting sgpy==1.0.1
  Using cached https://files.pythonhosted.org/packages/b3/b5/6e148a8eaae37241cb931f59568392461db694197082d5e018bffc9ce2f3/sgpy-1.0.1-py2.py3-none-any.whl
Requirement already satisfied: peppercorn in c:\program files\python37\lib\site-packages (from sgpy==1.0.1) (0.6)
Installing collected packages: sgpy
Successfully installed sgpy-1.0.1


C:\Program Files\Python37\Scripts>sgpy
Call your main application code here

C:\>sgpy
Call your main application code here

</code></pre>

#### Python Server Initiation

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



#### Installed pip's

```cmd

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>pip list
Package    Version
---------- -------
peppercorn 0.6
pip        19.1.1
setuptools 28.8.0
sgpy       1.0.8


C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>pip show sgpy
Name: sgpy
Version: 1.0.8
Summary: Python project extending main framework functionalities
Home-page: https://github.com/sgframework/sgpy
Author: sgpy
Author-email: ads@ipool.remotewebaccess.com
License: MIT
Location: c:\program files\python36\lib\site-packages
Requires: peppercorn
Required-by:

```

#### cmd commands history

<pre style="font-size:10px;background-color:black;"><code style="color:#ddd;" class="language-cmd">  

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


## Directories Structure

Wherever you clone into ``` https://github.com/sgframework/cdn.git ``` cdn directory will be your top level directiory.

    Last version of CDN prod-v1.13


#### ``` cd cdn ``` (ROOT<!-- Top Level Directory -->) ==TOP LEVEL==

```bash

C:\Program Files\Windows Server\Bin\WebApps\Site\cdn>ls -la
total 907
drwxr-xr-x  27 Administrator Administrators   8192 May 30 21:50 .
drwxr-xr-x  26 Administrator Administrators  12288 Jun  1 11:11 ..
-rw-r--r--   1 Administrator Administrators    213 Mar 26 19:44 .editorconfig
-rw-r--r--   1 Administrator Administrators    812 Mar 27 19:52 .env
drwxr-xr-x   7 Administrator Administrators   4096 May 28 01:07 .git
-rw-r--r--   1 Administrator Administrators    111 Mar 26 19:44 .gitattributes
drwxr-xr-x   3 Administrator Administrators      0 May 18 12:58 .github
-rw-r--r--   1 Administrator Administrators    313 May 25 16:30 .gitignore
drwxr-xr-x   4 Administrator Administrators      0 May 23 00:52 .npm
drwxr-xr-x   2 Administrator Administrators      0 May 20 01:40 .vscode
drwxr-xr-x   3 Administrator Administrators   4096 May 30 21:50 .yardoc
-rw-r--r--   1 Administrator Administrators   3437 May 18 12:58 CODE_OF_CONDUCT.md
-rw-r--r--   1 Administrator Administrators   4309 May 18 12:58 CONTRIBUTING.md
-rw-r--r--   1 Administrator Administrators   1101 Mar 27 19:29 LICENSE
drwxr-xr-x  10 Administrator Administrators   4096 May 24 13:44 app
-rwxr-xr-x   1 Administrator Administrators   1686 Mar 26 19:44 artisan
drwxr-xr-x   3 Administrator Administrators      0 Mar 27 17:59 bootstrap
-rw-r--r--   1 Administrator Administrators   1701 May 24 12:46 composer.json
-rw-r--r--   1 Administrator Administrators 181930 May 24 12:47 composer.lock
drwxr-xr-x   2 Administrator Administrators   4096 May 24 12:22 config
-rw-r--r--   1 Administrator Administrators  18215 Apr  3 01:06 config.json
drwxr-xr-x   5 Administrator Administrators   4096 Mar 27 17:32 database "sgdb0"
drwxr-xr-x   4 Administrator Administrators   4096 May 30 21:08 doc
drwxr-xr-x 706 Administrator Administrators 196608 May 22 23:06 node_modules "NPM"
-rw-r--r--   1 Administrator Administrators 401403 May 22 23:06 package-lock.json
-rw-r--r--   1 Administrator Administrators   1318 May 22 23:06 package.json
-rw-r--r--   1 Administrator Administrators   1156 Mar 26 19:44 phpunit.xml
drwxr-xr-x   4 Administrator Administrators   4096 May 28 20:19 proXject
drwxr-xr-x  16 Administrator Administrators   4096 May 28 02:22 public "web server must point to this dir"
-rw-r--r--   1 Administrator Administrators     24 Apr  2 19:03 readme.md
drwxr-xr-x   6 Administrator Administrators      0 Mar 27 17:32 resources
drwxr-xr-x   2 Administrator Administrators      0 May 12 17:45 routes
-rw-r--r--   1 Administrator Administrators    563 Mar 26 19:44 server.php
drwxr-xr-x   3 Administrator Administrators   4096 May 28 02:33 sgapi
drwxr-xr-x   6 Administrator Administrators   4096 May 29 23:20 sgc "C/C++ package"
drwxr-xr-x   6 Administrator Administrators   4096 May 26 07:27 sgcdn "NPM package"
drwxr-xr-x   8 Administrator Administrators   4096 May 30 21:50 sgpl "Perl package"
drwxr-xr-x  12 Administrator Administrators   4096 May 30 21:50 sgpy "Python package"
drwxr-xr-x  20 Administrator Administrators   8192 May 31 13:21 sgrb "Ruby package"
drwxr-xr-x   5 Administrator Administrators   4096 May 13 20:45 storage
drwxr-xr-x   4 Administrator Administrators   4096 Apr  2 19:02 tests
drwxr-xr-x  47 Administrator Administrators  12288 May 24 12:47 vendor
-rw-r--r--   1 Administrator Administrators      0 Apr  1 21:18 view('vendor.html.layout')
-rw-r--r--   1 Administrator Administrators    168 Mar 26 21:56 web.config
-rw-r--r--   1 Administrator Administrators    537 Mar 26 19:44 webpack.mix.js


```



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


<h5 id="poweredby"><a class="header-link" href="#poweredby"></a>Powered By</h5>

<div style="text-align:center;margin: 30px;padding: 20px;border: dotted black 2px;">
    <img src="http://ipool.remotewebaccess.com/images/assests/php.jpg" style="padding:20px" width="40px" height="25px" /> php <img src="http://ipool.remotewebaccess.com/images/assests/mysql.png" style="padding:20px" width="40px" height="25px" /> MySql <img src="http://ipool.remotewebaccess.com/images/assests/js.png" style="padding:20px" width="40px" height="30px" /> JavaScript  <img src="http://ipool.remotewebaccess.com/images/assests/npm.png" style="padding:20px" width="45px" height="22px" /> npm <a href="https://www.npmjs.org/package/sgcdn" rel="nofollow"><img src="http://img.shields.io/npm/v/sgcdn.svg?style=flat" alt="NPM Version"></a>
 <br /> <img src="http://ipool.remotewebaccess.com/images/assests/nodejs.png" style="padding:20px" width="40px" height="25px" /> NodeJS  <img src="http://ipool.remotewebaccess.com/images/assests/jquery.gif" style="padding:20px" width="40px" height="25px" /> jQuery  <img src="http://ipool.remotewebaccess.com/images/assests/python.png" style="padding:20px" width="50px" height="60px" /> Python  <img src="http://ipool.remotewebaccess.com/images/assests/ruby.jpg" style="padding:20px" width="30px" height="30px" /> Ruby <img src="http://ipool.remotewebaccess.com/images/assests/curl.svg" style="padding:20px" width="40px" height="25px" /> curl

</div>

<div style="text-align:center;margin: 30px;padding: 20px">
    Source <code>code</code> written by <img src="http://ipool.remotewebaccess.com/images/assests/vsc.png" style="padding:20px" width="120px" height="60px" />, managed and controlled by <i class="fab fa-github"></i> GitHub
</div>

</article>