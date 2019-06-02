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




#### ``` cd ../ ```