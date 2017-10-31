<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Общие вопросы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="q-item">
        <div class="question">
            <p>1. Есть массив: <code>$a = array(‘ a b c ’, ‘ abc ’, ‘e dw’);</code>
                напишите код который из всех элементов массива удалит пробелы. (с комментариями)
            </p>
        </div>
        <div class="answer">
            <code>$b = array_map(function($item){
                return preg_replace("/\s+/","",$item);
                },$a);<br>
            <?php
            $a = array(' a b c ', ' abc ', 'e dw');
            $b = array_map(function($item){
                return preg_replace("/\s+/","",$item);
                },$a);
            var_dump($b);
            ?>
            </code>
            <p>Проходим функцией array_map() по всем єлементам массива и удалем
            пробелы функцией preg_replace().
            </p>
        </div>
    </div>
    <div class="q-item">
        <div class="question">
            <p>2. Объедините 2 массива в один.
                <code>$a = array(‘ a b c ’, ‘ abc ’, ‘e dw’);</code> и <code>$b = array(‘123’,‘abc’, ‘456’);</code>
                (с комментариями)</p>
        </div>
        <div class="answer">
            <code> $c = array_merge($a,$b);<br>
                <?php
                $a = array(' a b c ', ' abc ', 'e dw');
                $b = array('123','abc', '456');
                $c = array_merge($a,$b);
                var_dump($c);
                ?>
            </code>
            <p>Объединяем два массива функцией array_merge().
            </p>
        </div>
    </div>
    <div class="q-item">
        <div class="question">
            <p>3. В чем разница между margin и padding?</p>
        </div>
        <div class="answer">

            <p>margin - внешний отступ у элемента.<br>
               padding - внутренний отступ у элемента.
            </p>
            <div style="background: greenyellow;display: inline-block">
                <div style="display: inline-block;margin: 10px; background: green;width: 100px;height: 100px">margin</div>
            </div>
            <div style="display: inline-block;padding: 10px; background: blue;width: 100px;height: 100px">padding</div>
        </div>
    </div>
    <div class="q-item">
        <div class="question">
            <p>4. Как в CSS убрать подчеркивание для всех ссылок на странице?</p>
        </div>
        <div class="answer">

            <p>a{ text-decoration:none;}
                <a style="text-decoration: none">ссылка 1</a>
                <a >ссылка 2</a>
            </p>

        </div>
    </div>
    <div class="q-item">
        <div class="question">
            <p>5. В чем вообще смысл jQuery? Зачем оно надо?</p>
        </div>
        <div class="answer">

            <p>Кратко, jQuery - это обертка над javascript, позволяющая
                навешивать события одновремено на несколько элементов одной строкой кода.
                Кроме того с jQuery удобно использовать "цепочки" действий.
            </p>

        </div>
    </div>
    <div class="q-item">
            <div class="question">
                <p>6. Как подключить JQuery к веб-странице?</p>
            </div>
            <div class="answer">

                <p>Фреймворк yii2 поддерживает JQuery "из коробки".
                    &ltscript src="/assets/9d462d1a/jquery.js"&gt; &lt/script&gt;<br>
                    Также можно подлючить двумя способами:<br>
                    1. - Скачать нужную версию с офиц. сайта и подлючить<br>
                    &ltscript src="/js/jquery-3.2.1.min.js"&gt; &lt/script&gt;<br>
                    2. Подлючить по прямой ссылке - https://code.jquery.com/<br>
                    &ltscript src="https://code.jquery.com/jquery-3.2.1.min.js"&gt; &lt/script&gt;<br>
                </p>

            </div>
    </div>
    <div class="q-item">
        <div class="question">
            <p>7. Что такое &lt;ol&gt;, &lt;ul&gt; и &lt;li&gt;?</p>
        </div>
        <div class="answer">

            <p>Это теги списков.<br>
                &lt;ol&gt; - нумерованный список.<br>
                &lt;ul&gt; - не нумерованный список.<br>
                &lt;li&gt; - элемент списка.<br>
            </p>

        </div>
    </div>
    <div class="q-item">
        <div class="question">
            <p>8. Зачем нужны теги &lt;tr&gt;, &lt;th&gt;, &lt;td&gt; ?</p>
        </div>
        <div class="answer">

            <p>Это теги таблицы.<br>
                &lt;tr&gt; - тег строки.<br>
                &lt;th&gt; - тег заголовка столбца.<br>
                &lt;td&gt; - тег ячейки.<br>
            </p>

        </div>
    </div>
</div>
