<?php

use Bootstrapper\Navbar as Navbar;
use Bootstrapper\Navigation as Navigation;
use Laravel\URL as URL;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Lochsley's Knit Hats</title>
        <meta name="viewport" content="width=device-width">
        {{ Asset::container('bootstrapper')->styles(); }}
        {{ Asset::container('bootstrapper')->scripts(); }}
        <style>
            .wrapper  {
                padding: 10px 20px;
            }
        </style>
    </head>
    <body>
        @section('navigation_bar')
        <?php
        echo Navbar::create(array(), Navbar::FIX_TOP)
                ->with_brand('Lochsley\'s Knit Hats', URL::base())
                ->with_menus(
                    Navigation::links(
                        array(
                            array('Home', URL::to_action("home@index")),
                            array('Hats', URL::to_action("home@browse")),
                            array('Design', URL::to_action("home@custom")),
                            array('Testimonials', URL::to_action("home@testimonials")),
                        )
                    )
                )
                ->with_menus(
                    Navigation::links(
                            array(
                                array('My Cart', '#'),
                                array('Sign In', '#'),
                            )
                    ), 
                    array('class' => 'pull-right')
                );
        ?>
        @yield_section
        <div class="wrapper">
            <header>              
                <h1>@yield('header-title')</h1>
                <h3>@yield('header-subtitle')</h3>
            </header>
            <div role="main" class="main">
                @yield('content')
            </div>
        </div>
    </body>
</html>
