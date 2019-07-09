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
@endmarkdown

<h3 id="inc-pkgs"><a class="header-link" href="#inc-pkgs"></a>Included Packages.</h5>

<h5>Server Admin Tools & Kits</h5>

<i class="far fa-file-archive"></i> <a href="http://ipool.remotewebaccess.com/mirror/packs/server-install.zip" target="_blank">server-install.zip 560 MB <i class="fa fa-download"></i></a>

@markdown

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



@endmarkdown


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


<h3 id="github"><a class="header-link" href="#github"></a><i class="fab fa-github" aria-hidden="true"></i> Github</h3>

Get started by cloning into project's repository after installing <a href="https://github.com/git-for-windows/git/releases/download/v2.22.0.windows.1/Git-2.22.0-32-bit.exe"><img src="http://ipool.remotewebaccess.com/images/
/assests/git.png" width="25px" height="25px" /> Git x86</a> |  <a href="https://github.com/git-for-windows/git/releases/download/v2.22.0.windows.1/Git-2.22.0-64-bit.exe"><img src="http://ipool.remotewebaccess.com/images/
/assests/git.png" width="25px" height="25px" /> Git x64</a>
<br /><em style="font-size:12px">run CMD or terminal and enter the following commands.</em>

@markdown

### IIS Manager Setup


After setting up server by enabling Internet Information Services (IIS) Manager, you should be able to visit <a href="http://localhost/">http://localhost/</a>

![localhost](http://ipool.remotewebaccess.com/images/assests/localhost.png)

- Install [Web Platform Installer x64](http://ipool.remotewebaccess.com/mirror/x64/WebPlatformInstaller_x64_en-US.msi) 

  
![install-wpi](http://ipool.remotewebaccess.com/images/assests/install-wpi.png)

![wpi1](http://ipool.remotewebaccess.com/images/assests/wpi1.png)

- PHP, MySql installation

Create a new MySql administrator password for user 'root'

![mysql-pass](http://ipool.remotewebaccess.com/images/assests/mysql-pass.png)


Password must match in ```cdn/.env``` file.

```
APP_NAME=SunbulahGroup
APP_ENV=local
APP_KEY=base64:oyFpcnaAE8pzuJ6iTsQb2qwQFLAPd38hpVkLxRiv+sQ=
APP_DEBUG=true
APP_URL=http://ipool.remotewebaccess.com

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sgdb0
DB_USERNAME=root
DB_PASSWORD=********

```



![installing](http://ipool.remotewebaccess.com/images/assests/installing.png)

![done](http://ipool.remotewebaccess.com/images/assests/done.png)

![installed-pkgs](http://ipool.remotewebaccess.com/images/assests/installed-pkgs.png)

#### Testing PHP with Git Bash

you can skip this step 

```

Administrator@sgcdn MINGW64 /
$ cd /c/inetpub/wwwroot/

Administrator@sgcdn MINGW64 /c/inetpub/wwwroot
$ ls
iis-85.png  iisstart.htm

Administrator@sgcdn MINGW64 /c/inetpub/wwwroot
$ nano

Administrator@sgcdn MINGW64 /c/inetpub/wwwroot
$ nano index.php

Administrator@sgcdn MINGW64 /c/inetpub/wwwroot
$ ls
iis-85.png  ~~iisstart.htm~~  **index.php**

Administrator@sgcdn MINGW64 /c/inetpub/wwwroot
$ rm iisstart.htm

Administrator@sgcdn MINGW64 /c/inetpub/wwwroot
$ ls
iis-85.png  **index.php**

Administrator@sgcdn MINGW64 /c/inetpub/wwwroot

```

![php-test](http://ipool.remotewebaccess.com/images/assests/php-test.png)


> @ this point, you should have already installed and configured the following:

- Internet Information Server (IIS) Manager.

- GitHub 

- PHP 7.2^

- MySql 5.1^ + Connector

After setting up IIS Server Manager and installing GitHub

Run <kbd> ``` ⌘ Start + R ``` </kbd>  and paste the following  

    "C:\Program Files\Git\git-bash.exe"

then press Enter ↵


```bash

Administrator@sgcdn MINGW64 /
$ cd /c/inetpub/wwwroot/

Administrator@sgcdn MINGW64 /c/inetpub/wwwroot
$ git clone https://github.com/sgframework/cdn.git
Cloning into 'cdn'...
remote: Enumerating objects: 772, done.
remote: Counting objects: 100% (772/772), done.
remote: Compressing objects: 100% (452/452), done.
remote: Total 2516 (delta 425), reused 569 (delta 282), pack-reused 1744
Receiving objects: 100% (2516/2516), 106.13 MiB | 10.30 MiB/s, done.
Resolving deltas: 100% (1344/1344), done.

Administrator@sgcdn MINGW64 /c/inetpub/wwwroot
$ cd cdn/

Administrator@sgcdn MINGW64 /c/inetpub/wwwroot/cdn (master)
$ ls
app/                CONTRIBUTING.md    public/     sgpl/
artisan*            database/          readme.md   sgpy/
bootstrap/          doc/               resources/  sgrb/
CODE_OF_CONDUCT.md  index.xml          routes/     storage/
composer.json       LICENSE            server.php  tests/
composer.lock       package.json       sgapi/      web.config
config/             package-lock.json  sgc/        webpack.mix.js
config.json         phpunit.xml        sgcdn/


```

By this point nothing is working yet due to one missing ``` .env ``` file, which contain sensitive data. You can get this archived 


@endmarkdown

<a href="http://ipool.remotewebaccess.com/mirror/secret/dev-pack.zip" target="_blank">dev-pack.zip</a> 

@markdown

file and unzip it into the top level directory ``` /cdn ``` 

``` dev-pack.zip ``` contains the following files

```cmd

$ zip -r dev-pack.zip .env vendors/ node_modules/ .git/ public/assets/

```

![unzip](http://ipool.remotewebaccess.com/images/assests/unzip.png)

```cmd

phsycho@x000001:/mnt/c/inetpub/wwwroot/cdn$ unzip dev-pack.zip
Archive:  dev-pack.zip
  inflating: .env
  inflating: vendors/
  inflating: node_modules/
  inflating: .git/
  inflating: public/assets/

```

> @ this point you should've already installed & configured GitHub and cloned into cdn to point the server to ``` cdn/public ``` directory.

- Path & Administrator Credintials Setup

![admin+path-setup2](http://ipool.remotewebaccess.com/images/assests/admin-path-setup2.png)

#### Now you can visit [http://localhost/](http://localhost/) again after pointing to correct folder.

![success](http://ipool.remotewebaccess.com/images/assests/success.png)

## SUCCESS

#### Last STEP

### MySql Integration.

Easiest way via MySQL 8.0 Command Line Client

First create sgdb0 database

Run <kbd> ``` ⌘ Start + R ``` </kbd>  and paste the following  

    cmd

then press Enter ↵

```
Microsoft Windows [Version 6.3.9600]
(c) 2013 Microsoft Corporation. All rights reserved.

C:\Users\Administrator>C:\"Program Files"\MySQL\"MySQL Server 5.5"\bin\mysqladmin.exe -u root -p create sgdb0
Enter password: ********

```

Then download latest backed-up version of database [sgdb0.170619.sql](http://ipool.remotewebaccess.com/mirror/secret/sgdb0.170619.sql)

Create a new directory on Desktop called db where all database files will be stored.

```cmd
C:\Users\Administrator>cd Desktop

C:\Users\Administrator\Desktop>mkdir db

C:\Users\Administrator\Desktop>cd db

C:\Users\Administrator\Desktop\db>copy ..\..\Downloads\sgdb0.170619.sql .
        1 file(s) copied.

C:\Users\Administrator\Desktop\db>dir
 Volume in drive C has no label.
 Volume Serial Number is 1082-2AB3

 Directory of C:\Users\Administrator\Desktop\db

06/17/2019  10:48 PM    <DIR>          .
06/17/2019  10:48 PM    <DIR>          ..
06/17/2019  10:46 PM         4,544,206 sgdb0.170619.sql
               1 File(s)      4,544,206 bytes
               2 Dir(s)  124,304,355,328 bytes free

C:\Users\Administrator\Desktop\db>

```

#### After creating sgdb0 and downloading ```sgdb0.170619.sql```

```

C:\Users\Administrator\Desktop\db>C:\"Program Files"\MySQL\"MySQL Server 5.5"\bin\mysql.exe -u root -p sgdb0 < C:\Users\Administrator\Desktop\db\sgdb0.170619.sql
Enter password: ********

C:\Users\Administrator\Desktop\db>

```

![success](http://ipool.remotewebaccess.com/images/assests/done-success.png)

# Installation & First Initialization SUCCEEDED.
----------------------

@endmarkdown

<h3 id="php"><a class="header-link" href="#php"></a><img src="http://ipool.remotewebaccess.com/images/assests/php.png" width="80px" height="35px" /> Composer, Artisan</h3>

@markdown


#### Installing Composer

> @ thist point you should have already installed & configured the following:
    **required by composer**
    
- Internet Information Server (IIS) Manager.

- GitHub 

- **PHP** 7.2^

- MySql 5.1^ + Connector


To install composer simply run 

@endmarkdown

<a href="http://ipool.remotewebaccess.com/mirror/Composer-Setup.exe" target="_blank">Composer-Setup.exe</a> 

@markdown

installer and walk through the steps.

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

#### Last step is to setup phpMyAdmin to be able to access MySql database via browser.

First download & unzip archived [pma.zip](http://ipool.remotewebaccess.com/mirror/secret/pma.zip) file into a directory of your choice. e.g. ```C:\inetpub\wwwroot```


Then you'll need to add a new application from IIS Manager pointing to same extracted file  e.g. ```C:\inetpub\wwwroot\phpmyadmin```

![add-pma](http://ipool.remotewebaccess.com/images/assests/add-pma.png)

![add-pma](http://ipool.remotewebaccess.com/images/assests/pma.png)

![add-pma](http://ipool.remotewebaccess.com/images/assests/localhost-pma.png)

![add-pma](http://ipool.remotewebaccess.com/images/assests/order-items.png)

Now you should have a fully functional up and running framework.

It's recommended that you continue installing optional packages.

----------------------

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




@endmarkdown



<h3 id="vsc"><a class="header-link" href="#vsc"></a><img src="http://ipool.remotewebaccess.com/images/assests/npm.png" width="80px" height="35px" />   <img src="http://ipool.remotewebaccess.com/images/assests/nodejs.png" width="80px" height="35px" /> </h3>
<a href="https://badge.fury.io/js/sgcdn"><img src="https://badge.fury.io/js/sgcdn.png" alt="npm version" height="18"></a>

First <i class="fa fa-download"></i> download <a href="http://ipool.remotewebaccess.com/mirror/x86/node-v10.15.3-x86.msi">x86</a> | <a href="http://ipool.remotewebaccess.com/mirror/x64/node-v10.15.3-x64.msi" target="_blank">x64</a> & install <strong>NPM & NodeJS</strong> for windows. 

@markdown

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



@endmarkdown


<h3 id="python"><a class="header-link" href="#python"></a><img src="http://ipool.remotewebaccess.com/images/assests/python.png" width="70px" height="80px" /></h3>
<a href="https://badge.fury.io/py/sgpy"><img src="https://badge.fury.io/py/sgpy.png" alt="PyPI version" height="18"></a> <br />
First  <i class="fa fa-download"></i> download <a href="http://ipool.remotewebaccess.com/mirror/x86/python-3.7.3-x86.exe" target="_blank">x86</a> | <a href="http://ipool.remotewebaccess.com/mirror/x64/python-3.7.3-x64.exe" target="_blank">x64</a> & install <strong>Python</strong> for windows.
<br />

@markdown

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


@endmarkdown

<h3 id="ruby"><a class="header-link" href="#ruby"></a><img src="http://ipool.remotewebaccess.com/images/assests/ruby.jpg" width="50px" height="50px" /> Ruby</h3>
<span><a href="https://badge.fury.io/rb/xss"><img src="https://badge.fury.io/rb/xss.svg" alt="Gem Version" height="18"></a></span> <span><a href="https://www.rubydoc.info/gems/xss/0.0.0">xss/info</a></span><br />
First <i class="fa fa-download"></i> download <a href="http://ipool.remotewebaccess.com/mirror/x86/rubyinstaller-devkit-2.5.5-1-x86.exe" target="_blank">x86</a> | <a href="http://ipool.remotewebaccess.com/mirror/x64/rubyinstaller-devkit-2.5.5-1-x64.exe" target="_blank">x64</a> & install <strong>Ruby</strong> for windows.

@markdown

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

@endmarkdown

<h3 id="curl"><a class="header-link" href="#curl"></a><img src="http://ipool.remotewebaccess.com/images/assests/curl.svg" width="100px" height="80px" /></h3>

Windows 10 comes with a built in curl. Manually installing on older windows versions.

First download & install <strong>curl</strong> for <a href="http://ipool.remotewebaccess.com/mirror/x86/curl.zip">windows 7, 8 x86.</a> | <a href="http://ipool.remotewebaccess.com/mirror/x64/curl.zip">windows 7, 8 x64.</a>
  
  unzip archived <code>curl.zip</code>, then copy & paste its content into a directory e.g. %S%
  
@markdown

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


> Some other packages are required for development purposes, can be found in    [developers installation guide](http://ipool.remotewebaccess.com/root/dev-v0.03#inc-pkgs) , it includes the following:

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