<?php

/* @var $this yii\web\View */
$this->registerJsFile('@web/js/scriptjs.js', ['depends'=> 'yii\web\YiiAsset']);
use yii\helpers\Html;

$this->title = 'Цены';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
<div class="row">
    <div class="col-lg-4 mc">
        <b>Квартиры (количество комнат):</b><br/>
                 <br/>
                <select onchange="calc()" id="type_desigq">
                    <option value="0">Выбрать</option>
                    <option value="550">1-комнатная</option>
                    <option value="600">2-комнатная</option>
                    <option value="650">3-комнатная</option>
                    <option value="700">4-комнатная</option>
                </select><br/>
                <!--<input type="checkbox" onchange="calc()" value="3000" id="is_htmlq" /> <label for="is_html">Требуется верстка?</label>-->
                <br/>
                <!--Кол-во вариантов: <input type="text" id="countq" value="1" onchange="calc()" />-->
                <div>Ориентировочная стоимость: <span id="resultq">0</span> грн.</div>
            </div>
    
    <div class="col-lg-4 mc">
<b>Другие виды недвижимости:</b><br/>
        <select onchange="calcw()" id="type_designw">
            <option value="0">Выбрать</option>
            <option value="12">Офисы, ТРЦ</option>
            <option value="9">Производственные объекты</option>
            <option value="10">Автосалоны</option>
            <option value="20">Общепит</option>
        </select><br/>
        <!--<input type="checkbox" onchange="calcw()" value="3000" id="is_htmlw" /> <label for="is_html">Требуется верстка?</label>-->
        <br/>
        Площадь м² : <input type="text" id="countw" value="1" onchange="calcw()" />
        <div>Ориентировочная стоимость: <span id="resultqw">0</span> грн.</div>       
    </div>
    
    <div class="col-lg-4 mc">
        <p>Оценка стоимости обработки остальных видов помещений происходит в процессе разговора. Нам нужно знать какую площадь предстоит обработать.<br/> Звоните <a href="tel:+380672825669"> +380672825669 </a> </p>
        
        <p>Если Вы хотите узнать стоимость прямо сейчас, но возможности позвонить нет, то пиши в <a href="https://www.instagram.com/dnepr__disinfection/">Директ</a>, обязательно укажи эти данные:<br/>
            - Адрес;<br/>
            - Тип помещения;<br/>
            - Его площадь;</p> 
        
        Или заполните форму и мы с Вами свяжемся
        <p><?php echo Html::a('Перейти к форме', ['site/contact'], ['class'=>'btn btn-default castombuttn1']); ?></p>
        (Работаем в Днепропетровской области)
    </div>
    
</div>
    
    
</div>