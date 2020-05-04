/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        function calc() {
            var type_design = document.getElementById("type_desigq"); //получаем ссылку на элемент Select (Тип дизайна)
//            var is_html = document.getElementById("is_htmlq"); //получаем ссылку на чекбокс (Требуется верстка?)
//            var count = document.getElementById("countq"); //получаем ссылку на элемент input (Кол-во вариантов)
            var result = document.getElementById("resultq"); //получаем ссылку на элемент span, в него будем писать стоимость дизайна

            var price = 0;
            price += parseInt(type_design.options[type_design.selectedIndex].value);
//            price += (is_html.checked == true) ? parseInt(is_html.value) : 0;
//            price = parseInt(count.value) * price;

            result.innerHTML = price;
        }

        function calcw() {
            var type_design = document.getElementById("type_designw"); //получаем ссылку на элемент Select (Тип дизайна)
//            var is_html = document.getElementById("is_htmlw"); //получаем ссылку на чекбокс (Требуется верстка?)
            var count = document.getElementById("countw"); //получаем ссылку на элемент input (Кол-во вариантов)
            var result = document.getElementById("resultqw"); //получаем ссылку на элемент span, в него будем писать стоимость дизайна

            var price = 0;
            price += parseInt(type_design.options[type_design.selectedIndex].value);
//            price += (is_html.checked == true) ? parseInt(is_html.value) : 0;
            price = parseInt(count.value) * price;

            result.innerHTML = price;
        }