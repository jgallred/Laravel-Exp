@layout('shared.sitebase')

@section('header-title')
Lochsley's Knit Hats
@endsection

@section('header-subtitle')
Warm, comfortable hats to keep you warm on those cold Provo nights
@endsection

@section('content')
<p>My name is Lochsley (Yes, it is of Robin Hood origin), and I love making knit hats! Knitting for me is a great 
    stress reliever. My life has been pretty stressful lately, which means I have made a lot of hats. This
    is good news for you, though, because it means you can now purchase my hats!</p>

<p>Each hat is lovingly hand-crafted on a knitting loom. It takes me about 1.5 hours, or 4 episodes of 
    Parks and Recreation (The best show on earth) to make a hat. I have lots of fun doing them. </p>

<p> I have many hats already made. Feel free to {{ HTML::link_to_action('home@browse','browse my hats') }}. If you find one (or 7)
    that you like, then buy them from me! </p>                

<p> I take a limited number of custom orders too! Check out our {{ HTML::link_to_action('home@custom','hat designer') }}. 
    Pick one of my cool designs, customize you colors, and I'll make it just for you!</p>

<p> You can knit too! It's easy and fun. Find out more {{ HTML::link('#','here') }}.</p>
@endsection
