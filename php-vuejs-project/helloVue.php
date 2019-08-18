<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vue.js in PHP</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
    <div id="app">
        <p>{{ message }}</p>    
    </div>

    <script>
    new Vue({
            el: "#app",
            data: {
                message: 'Hello Vue from PHP!'
            }
    });
    </script>
</body>
</html>