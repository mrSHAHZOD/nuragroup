<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="{{asset('front/assets/news.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body>
    <div class="container row news" style="padding: 80px 0px;">
        <div class="col-1 animate__animated animate__fadeInRight">
            <a href="{{url('/')}}">
                <div class="nazad">
                    <img src="front/nazad.svg" alt="">
                    <p>{{$site['qaytish']}}</p>
                </div>
                
            </a>
        </div>
        <div class="col-2 animate__animated animate__fadeInRight">
            <div class="title-blue">
                <p>{{$site['news']}}</p>
            </div>
            @foreach($new as $n)
            <a href="{{ url('/new/'.$n->id) }}" class="post">
                <div class="col">
                    <img src="{{URL::to($n->img)}}" alt="">
                </div>
                <div class="col">
                    <h3>{{$n->$title_news}}</h3>
                    <p>{{$n->$content_news}}</p>
                    <small>{{$n->created_at}}</small>
                </div>
            </a>
            @endforeach

            <form action="{{url('/news')}}" method="get">
               
                <div class="posts">

                <? if($count != $j){?>
                    <button style="margin-top: 50px;">
                        {{$site['more']}}
                    </button>
                    <? }
                    else

                    {?>
                        <h1></h1>
                   <? }
                     ?>
                </div>
                <?

                if(!isset($_GET["count"]))
                    $c = 2;
                else
                    $c = $_GET["count"] + 2;
                ?>

                <input type="hidden" name="count" value="<? echo $c ; ?>">
            </form>
        </div>
    </div>
    <div class="footer">
        <footer>
            <div class="logo">
                <img src="front/assets/mobile/foot.svg" alt="">
            </div>
            <div class="item">
            {{$site['telefon']}}: <br>
               <p> +998 (95) 476 76 76</p>
            </div>
            <div class="item">
            {{$site['pochta']}}: <br>
               <p>info@chint.uz</p>
            </div>
            <div class="item">
            {{$site['manzil']}}: <br>
               <p>100027 {{$site['adres']}},
               </p>
            </div>
        </footer>
    </div>
</body>
</html>