<?php var_dump( '+--------+----------+------------------------+-----------------------+----------
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
--+');



?>