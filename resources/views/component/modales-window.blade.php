<!-- Modal window Purchase start-->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-title" style="color: {{$lending['main_color']}};">{{$lending['h1']}}</div>
        <div class="separator"></div>
        {{--<div class="modal-photo">--}}
            {{--<img src="{{url('storage/images/main-photo.png')}}" alt="goods">--}}
        {{--</div>--}}
        <form id="formPurchase" action="#">
            <label class="modal-form-item">Введите Ваш номер телефона: <input type="text" name="phone" placeholder="Номер телефона"></label>
            <label class="modal-form-item">Введите Ваш электорнный адре: <input type="text" name="email" placeholder="E-mail"></label>
            <label class="modal-form-item">Введите ФИО:<input type="text" name="full_name" placeholder="Фамилия Имя Отчество"></label>
            <label class="modal-form-item">Город и отделение "Новой Почты": <br/><input type="text" name="additional_information" placeholder="Город, № отделения"></label>
            <!--<div class="bg purchase-btn mod-btn" style="background-image: url(./img/purchase-bg.png)">-->
            <!--<input id="btnSend" type="submit" class="fg purchase-btn mod-btn" style="background-image: url(./img/purchase-fg.png)" tabindex="0" >-->
            <!--</div>-->
            <button id="btnSend" class="push-btn">
                ЗАКАЗАТЬ СО СКИДКОЙ
            </button>

        </form>
    </div>
</div>
<!-- Modal window Purchase end-->

<!-- Modal window OK start -->
<div id="modalOk" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="{{url('storage/images/ok.png')}}" alt="OK!">
        <div class="mod-stat">
            <span>Ваш заказ принят!</span><br/>
            <span>Наш менеджер свяжется с вами в ближайшее время</span><br/>
            <span>Спасибо за покупку!</span>
        </div>
    </div>
</div>
<!-- Modal window OK end -->

<!-- Modal window BAD start -->
<div id="modalBad" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <img src="{{url('storage/images/sorry.png')}}" alt="OK!">
        <div class="mod-stat">
            <span>Возникла ошибка связи...</span>
            <span>Попробуйте повторить заказ позже</span>
        </div>
    </div>
</div>
<!-- Modal window BAD end -->