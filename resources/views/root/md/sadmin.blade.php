@extends('layouts.root')
@section('content')



<link href="{{ asset('css/assets/css/github-markdown.css') }}" rel="stylesheet">
<article class="markdown-body">

<img src="http://ipool.remotewebaccess.com/images/assests/sgimg.png" align="right" style="height: 64px"/>
<h1 id="welcome-to-sunbulah-group-framework"><a class="header-link" href="#welcome-to-sunbulah-group-framework"></a> SunbulahGroup Server Administrator Installation Guide</h1>
<span><a href="https://badge.fury.io/js/sgcdn"><img src="https://badge.fury.io/js/sgcdn.png" alt="npm version" height="18"></a></span> <span><a href="https://badge.fury.io/py/sgpy"><img src="https://badge.fury.io/py/sgpy.png" alt="PyPI version" height="18"></a></span> <span><a href="https://www.npmjs.org/package/sgcdn" rel="nofollow"><img src="http://img.shields.io/npm/v/sgcdn.svg?style=flat" alt="NPM Version"></a> <a href="https://saythanks.io/to/sgframework"><img src="https://img.shields.io/badge/Say%20Thanks-!-1EAEDB.svg" alt="Say Thanks!" /></a></span> <span><a href="https://badge.fury.io/rb/xss"><img src="https://badge.fury.io/rb/xss.svg" alt="Gem Version" height="18"></a> </span>  <span><a href="https://www.rubydoc.info/gems/xss/0.0.0">xss/info</a></span>
@markdown





```bash

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

```

```cmd

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




```cmd

' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  '
'    _____             __          __      __       ______                      '
'   / ___/__  ______  / /_  __  __/ /___ _/ /_     / ____/________  __  ______  '
'   \__ \/ / / / __ \/ __ \/ / / / / __ `/ __ \   / / __/ ___/ __ \/ / / / __ \ '
'  ___/ / /_/ / / / / /_/ / /_/ / / /_/ / / / /  / /_/ / /  / /_/ / /_/ / /_/ / '
' /____/\__,_/_/ /_/_.___/\__,_/_/\__,_/_/ /_/   \____/_/   \____/\__,_/ .___/  '
'                                                                   /_/         '
' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  ' '  '

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
    
```



@endmarkdown

    
&copy; SunbulahGroup <p style="font-size:8px">Written by: <b>Ahmed M. Sulaimani 5303</b></p>
</article>

@endsection