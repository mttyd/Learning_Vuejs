<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vue.js in PHP</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue-router.js"></script>
</head>
<body>
    <div id="app">
        <p>{{ message }}</p>    
    </div>

    <script>
    new Vue({
            const Home = { template: '<div> Home page </div>'};
            const About = { template: '<div> About page </div>'};
        
            el: "#app",
            data: {
                message: 'Hello Vue from PHP!'
            }
    });
    </script>
</body>
</html>