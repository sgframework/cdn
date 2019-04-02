# Smart Home Kit #

![icon](https://ipool.remotewebaccess.com/wp-content/uploads/2019/03/HomeKit-Icon_4-100x100.jpg)

## Installation Guide ##

[![Build Status](https://travis-ci.org/exploi8/SHKit.svg?branch=master)](https://travis-ci.org/exploi8/SHKit)

** Introduction **

First things first, you need to know the concept of connectiong a micro controller with a server to be able to walk throughout this guide with no problems.

In order for you to install and setup the required software and hardware together you will need the following:

### Hardware parts ###

- RaspberryPi as a micro controller can be purshased from any online store.
- Relays module to preform switching an electrical component on and off simultaneously.
- Breadboard to make connections with I/O pins. (optional)
- Cables.

#### step 1 ####

Download latest RasparypiPi :link: [(Raspbian Stretch) Operation System][Software] then burn it into a memory card, using either :link: [win32diskimager][win32diskimager], [Etcher][Etcher] or any other .img burn app you preffer.

![Etcher](https://ipool.remotewebaccess.com/wp-content/uploads/2019/03/etching.png)

**Prepare and initialize required repositories.**

Set a static IP Address

Open Terminal and type the following commands:

```sh
pi@raspberrypi:~ $ sudo apt-get update && sudo apt-get upgrade -y
pi@raspberrypi:~ $ sudo apt-get install npm
pi@raspberrypi:~ $ git clone https://github.com/exploi8/SHKit.git
pi@raspberrypi:~ $ cd SHKit

```

#### step 2 ####

Setup Node-RED for first time use:
By now you should see virsions of npm and node:

```sh
pi@raspberrypi:~ $ node -v
v8.11.1
pi@raspberrypi:~ $ npm -v
1.4.21

```

Auto start services on boot, by entering the following commands:

```sh
pi@raspberrypi:~ $ sudo systemctl enable nodered.service
````

You can specify the service you want it to run on boot with follwing syntax replacing ~~sample~~

```sh
sudo systemctl daemon-reload
sudo systemctl enable sample.service

Install Node-RED Dashboard blugin.

```sh
pi@raspberrypi:~ $ cd .node-red
pi@raspberrypi:~/.node-red $ npm i node-red-dashboard
pi@raspberrypi:~/.node-red $ sudo reboot
```

Now you can open your browser and point to your IP address and Node-RED default port 1880

##### Flows Control Home Page #####

[http://127.0.0.1:1880](http://127.0.0.1:1880)

![Node-RED](https://ipool.remotewebaccess.com/wp-content/uploads/2019/03/IMG_9162.jpg)

##### Dashboard Home Page #####

[http://127.0.0.1:1880/ui](http://127.0.0.1:1880/ui)

![Node-RED-ui](https://ipool.remotewebaccess.com/wp-content/uploads/2019/03/photo_2019-03-16_23-25-01-330x480.jpg)

#### step 3 ####

[Continuo to next step](https://github.com/exploi8/SHKit/blob/master/node/)
___

Check out the [iESH docs][iESH-docs] for more info on how to get the most out of iEcho Smart Systems. File all bugs/feature requests at [iESH’s GitHub repo][iESH-gh]

[iESH-docs]: https://exploi8.github.io/SHKit
[iESH-gh]:   https://github.com/exploi8/SHKit
[Software]: https://downloads.raspberrypi.org/raspbian_full_latest
[win32diskimager]: https://ipool.remotewebaccess.com/wp-content/uploads/2019/03/win32diskimager-1.0.0-install.zip
[Etcher]: https://ipool.remotewebaccess.com/wp-content/uploads/2019/03/Etcher-1.0.0-beta.17-win32-x64.zip

+--------+----------+------------------------+-----------------------+----------
--------------------------------------------------------------+-----------------
--+
| Domain | Method | URI | Name | Action | Middleware |<br /><hr />
+--------+----------+------------------------+-----------------------+----------
--------------------------------------------------------------+-----------------
--+
|| GET|HEAD | /| global.index| cdn\Http\
Controllers\GlobalController@getIndex                         | web,auth
  |
|| GET|HEAD | admins| admins| cdn\Http\
Controllers\HomeController@admins                             | web,is-admin,aut
h |
|        | GET|HEAD | alert                  |                       | Closure
                                                              | web
  |
|        | GET|HEAD | api/user               |                       | Closure
                                                              | api,auth:api
  |
|        | GET|HEAD | branch/add             | branches.add          | cdn\Http\
Controllers\BranchesController@addBranch                      | web,auth
  |
|        | POST     | branch/insert          | branches.insert       | cdn\Http\
Controllers\BranchesController@InsertBranches                 | web,auth
  |
|        | GET|HEAD | branches               | branches.index        | cdn\Http\
Controllers\BranchesController@getBranches                    | web,auth
  |
|        | GET|HEAD | dashboard              | dashboard.index       | cdn\Http\
Controllers\DashboardController@index                         | web,auth
  |
|        | GET|HEAD | item/add               | items.add             | cdn\Http\
Controllers\ItemsController@addItem                           | web,auth
  |
|        | POST     | item/insert            | items.insert          | cdn\Http\
Controllers\ItemsController@InsertItems                       | web,auth
  |
|        | GET|HEAD | items                  | items.index           | cdn\Http\
Controllers\ItemsController@getItems                          | web,auth
  |
|        | POST     | login                  |                       | cdn\Http\
Controllers\Auth\LoginController@login                        | web,guest
  |
|        | GET|HEAD | login                  | login                 | cdn\Http\
Controllers\Auth\LoginController@showLoginForm                | web,guest
  |
|        | POST     | logout                 | logout                | cdn\Http\
Controllers\Auth\LoginController@logout                       | web
  |
|        | GET|HEAD | order/add              | orders.add            | cdn\Http\
Controllers\OrdersController@addOrder                         | web,auth
  |
|        | GET|HEAD | order/add/step1        | orders.partials.step1 | cdn\Http\
Controllers\OrdersController@addOrderStep1                    | web,auth
  |
|        | GET|HEAD | order/add/step2        | orders.partials.step1 | cdn\Http\
Controllers\OrdersController@addOrderStep2                    | web,auth
  |
|        | GET|HEAD | order/add/urgent       | orders.urgent         | cdn\Http\
Controllers\OrdersController@addUrgentOrder                   | web,auth
  |
|        | POST     | order/insert           | orders.insert         | cdn\Http\
Controllers\OrdersController@InsertOrders                     | web,auth
  |
|        | POST     | order/post/step1       | orders.step1.insert   | cdn\Http\
Controllers\OrdersController@postOrderStep1                   | web,auth
  |
|        | POST     | order/post/step2       | orders.step1.insert   | cdn\Http\
Controllers\OrdersController@postOrderStep2                   | web,auth
  |
|        | GET|HEAD | orders                 | orders.index          | cdn\Http\
Controllers\OrdersController@getOrders                        | web,auth
  |
|        | POST     | password/email         | password.email        | cdn\Http\
Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest
  |
|        | POST     | password/reset         | password.update       | cdn\Http\
Controllers\Auth\ResetPasswordController@reset                | web,guest
  |
|        | GET|HEAD | password/reset         | password.request      | cdn\Http\
Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest
  |
|        | GET|HEAD | password/reset/{token} | password.reset        | cdn\Http\
Controllers\Auth\ResetPasswordController@showResetForm        | web,guest
  |
|        | POST     | profile/edit           | profile.edit          | cdn\Http\
Controllers\ProfileController@profileEdit                     | web
  |
|        | GET|HEAD | profile/edit           | profile.get           | cdn\Http\
Controllers\ProfileController@getEdit                         | web
  |
|        | POST     | profile/imgupdate      | photo.edit            | cdn\Http\
Controllers\UploadController@photoEdit                        | web
  |
|        | POST     | register               |                       | cdn\Http\
Controllers\Auth\RegisterController@register                  | web,guest
  |
|        | GET|HEAD | register               | register              | cdn\Http\
Controllers\Auth\RegisterController@showRegistrationForm      | web,guest
  |
|        | GET|HEAD | root                   | root.index            | cdn\Http\
Controllers\RootController@getIndex                           | web,auth
  |
|        | GET|HEAD | search/branches        | search.branches       | cdn\Http\
Controllers\SearchController@getBranches                      | web
  |
|        | GET|HEAD | search/items           | search.items          | cdn\Http\
Controllers\SearchController@getItems                         | web
  |
|        | GET|HEAD | submit-rtv             | rtv.index             | cdn\Http\
Controllers\RtvController@getIndex                            | web,auth
  |
|        | GET|HEAD | tests                  | tests.index           | cdn\Http\
Controllers\RootController@getTest                            | web,auth
  |
|        | GET|HEAD | tests/review           | orders.review         | cdn\Http\
Controllers\RootController@getReview                          | web,auth
  |
|        | GET|HEAD | user/{name}            | dashboard.index       | cdn\Http\
Controllers\ProfileController@getProfile                      | web
  |
+--------+----------+------------------------+-----------------------+----------
--------------------------------------------------------------+-----------------
--+



