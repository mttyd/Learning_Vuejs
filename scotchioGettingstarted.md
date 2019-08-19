https://scotch.io/courses/getting-started-with-vuejs/downloading-files?autoplay=true

View works off of templates that you can bind data to.  Applications consist of elements, data, methods

In chrome console you can type the element ID of your Vue object and you will be able to see details in the console

You can also use bound variable and change them in the console app.name = "test"
```
<section id = "app" class="section container">
{{ myVariableOne }}
</section>



<script>
var app = new Vue({
el: '#app',
data: {
myVariableOne: 'something cool',
myVariableTwo: 'something even cooler'
},
methods: {
celebrate: function () {
alert('CELEBRATING!');
}
}
});
</script>
```

Firing off the method from a button
```
<a class="button is-info" v-on:click="celebrate"> 
	Do the Celebration!
</a>
```
Getting data into the method
``` alert(`${this.name} is celebrating!`); ```

# Stopped at section 7