<!-- Bottom main section start -->
<div class="top-container" style="background-image: url({{url($lending['banner'])}})" >    <section class="main-container">
        <section class="goods-text">
            <div class="goods-title"><div>{{$lending['h1']}}</div></div>
            <div class="discount" style="color: {{$lending['main_color']}};">СО СКИДКОЙ</div>
            <div class="price">
                <div class="price-title">
                    <span>Старая цена</span>
                    <span>Новая цена</span>
                </div>
                <div class="price-value">
                    <div class="price-old-value" style="background-color: {{$lending['main_color']}}; color: rgb(255, 255, 255)">{{$lending['first_price']}} грн</div>
                    <div class="price-new-value" style="background-color: rgb(255, 255, 255); color: {{$lending['main_color']}};">{{$lending['second_price']}} грн</div>
                </div>
            </div>
            <div id="clockdivB">
                <div id="clockdivHB">
                    <span class="days"></span>
                    <div class="smalltext">Дни</div>
                </div>
                <div class="clock-div">
                    <span class="hours" ></span>
                    <div class="smalltext">Часы</div>
                </div>
                <div class="clock-div">
                    <span class="minutes"></span>
                    <div class="smalltext">Минуты</div>
                </div>
                <div class="clock-div">
                    <span class="seconds"></span>
                    <div class="smalltext">Секунды</div>
                </div>
            </div>

            <!--<div id="purchase-btnB" class="bg purchase-btn" style="background-image: url(./img/purchase-bg.png)">-->
            <!--<div class="fg purchase-btn" style="background-image: url(./img/purchase-fg.png)" tabindex="0"></div>-->
            <!--</div>-->
            <button id="purchase-btnB" class="push-btn">
                ЗАКАЗАТЬ СО СКИДКОЙ
            </button>
        </section>
        <!--<section class="main-photo">-->
        <!--<div><img src="./img/main-photo.png" alt="goods"></div>-->
        <!--</section>-->
    </section></div>
<!-- Bottom main section end-->