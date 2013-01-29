<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Lochsley's Knit Hats</title>
        <meta name="viewport" content="width=device-width">
        
        {{ HTML::style('css/base.css'); }}
        {{ Asset::container('bootstrapper')->styles(); }}
        
        <!-- Cascade controller and action specific stylesheets -->
        {{ Asset::styles(); }}
        
        <!-- Head scripts -->
        {{ Asset::container('header')->scripts(); }}
    </head>
    <body>
        @section('navigation_bar')
        <?php
        $userMenu = array(array('My Cart', '#'));
        $userMenu[] = Auth::check() ? array('Sign Out', URL::to("logout")) : array('Sign In', URL::to("login"));
        
        $pages = array(
            array('Home', URL::to_action("home@index")),
            array('Hats', URL::to_action("home@browse")),
            array('Design', URL::to_action("home@custom")),
            array('Testimonials', URL::to_action("home@testimonials")),
        );
        
        if(true) {//TODO If Admin, then enable
            $pages = array_merge($pages, array(
                array(Navigation::VERTICAL_DIVIDER),
                array('Products', URL::to_action("admin.products@index")),
                array('Orders', URL::to_action("admin@orders")),
                array('Stats', URL::to_action("admin@stats")),
            ));
        }

        echo Navbar::create(array(), Navbar::FIX_TOP)
                ->with_brand('Lochsley\'s Knit Hats', URL::base())
                ->with_menus(Navigation::links($pages))
                ->with_menus(
                    Navigation::links($userMenu),
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
        
        <!-- Twitter Bootstrap scripts -->
        {{ Asset::container('bootstrapper')->scripts(); }}
        
        <!-- Footer scripts -->
        {{ Asset::container('footer')->scripts(); }}
    </body>
</html>
