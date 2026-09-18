<?php

$routes = [
    "home" => "/",
    "about" => "/about",
    "services" => "/services",
    "portfolio" => "/portfolio",
    "contact" => "/contact",
    "blogs" => "/blogs",
    "single-blog" => "/blog/{slug}"
];

$DB = [
    "HOSTNAME" => "127.0.0.1",
    "DBNAME" => "atis_carbon",
    "USERNAME" => "root",
    "PASSWORD" => ""
];

$errors = [
    "required" => "لطفا همه فیلد ها را پر کنید",
    "email" => "ایمیل وارد شده نامعتبر است",
    "addComment" => "کامنت شما منتشر نشد"
];

$success = [
    "comment" => "کامنت شما با موفقیت منتشر شد"
];