<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Домашняя страница', route('home'));
});

// Home > Products
Breadcrumbs::register('products', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Авторские ручные работы', route('products'));
});
// Home > Products > Product
Breadcrumbs::register('show_product', function($breadcrumbs)
{
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Изделие', route('show_product'));
});

// Home > Articles
Breadcrumbs::register('articles', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Мастер-классы', route('articles'));
});
// Home > Articles > Article
Breadcrumbs::register('show_article', function($breadcrumbs)
{
    $breadcrumbs->parent('articles');
    $breadcrumbs->push('Читаем и учимся', route('show_article'));
});

// Home > Events
Breadcrumbs::register('events', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Последние новости', route('events'));
});
// Home > Events > Event
Breadcrumbs::register('show_event', function($breadcrumbs)
{
    $breadcrumbs->parent('events');
    $breadcrumbs->push('Это интересно', route('show_event'));
});







// Home > Blog
Breadcrumbs::register('blog', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Page]
Breadcrumbs::register('page', function($breadcrumbs, $page)
{
    $breadcrumbs->parent('category', $page->category);
    $breadcrumbs->push($page->title, route('page', $page->id));
});

