<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
    <input name="arg1" type="text" id="arg1">
    <button class="sum">+</button>
    <button class="div">/</button>
    <button class="min">-</button>
    <button class="mul">*</button>
    <input name="arg2" type="text" id="arg2">
        =
    <input name="result" class="result" type="text" id="result" value="">
</div>

<script>

    let sum = document.querySelector('.sum');
    let min = document.querySelector('.min');
    let mul = document.querySelector('.mul');
    let div = document.querySelector('.div');
    let actions = document.querySelector('.actions');
    let result = document.querySelector('.result');
    let arg1 = document.getElementById('arg1');
    let arg2 = document.getElementById('arg2');

    document.addEventListener("DOMContentLoaded", () => {
        sum.addEventListener("click", e => {
            let ac = 'sum'
            as(ac)
        })
        min.addEventListener("click", e => {
            let ac = 'min'
            as(ac)
        })
        mul.addEventListener("click", e => {
            let ac = 'mul'
            as(ac)
        })
        div.addEventListener("click", e => {
            let ac = 'div'
            as(ac)
        })
    })

    async function as (ac) {
        const response = await fetch('add.php', {
            method: 'POST',
            headers: new Headers({
                'Content-Type': 'application/json'
            }),
            body: JSON.stringify({
                arg1: arg1.value,
                arg2: arg2.value
            }),
        });
        const answer = await response.json();
        if (ac == "sum") {
            result.value = answer.sum;
        }
        if (ac == "div") {
            result.value = answer.div;
        }
        if (ac == "min") {
            result.value = answer.min;
        }
        if (ac == "mul") {
            result.value = answer.mul;
        }
    };




</script>
</body>
</html>