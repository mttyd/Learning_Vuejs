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

{{  data  }}   - declaratively inject a piece of data.  Can be used for data variables and 1 line js expressions
{{ +1 }} 

# Attributes
v-bind is used for injecting attributes So if you have data that is an image location
```<img src="{{ picture }}>``` won't work you need
```<img v-bind:src"picture">```  This will load the img source from the picture: bound data from vue
You can shorthand v-bind with :  ```<img :src="picture">``` 
v-if   good way to hide something if it doesn't exist.  This example shows div1 but not div 2
You can go into the chrome console and type app.isSuccess = false and change the selected div
```<section id="app" class="section container">
{{ picture }}
<img v-bind:src="picture">
<div v-if="isSuccess" class="notification is-success">
We did it!
</div>
<div v-if="!isSuccess" class="notification is-danger">
We didn't do it
</div>
</section>
<!-- our javascript -->
<script>
const app = new Vue({
el: '#app',
data: {
picture: 'https://cdn.shopify.com/s/files/1/0191/7850/products/RICKMORTY_37_-_4x6_COVER_B_SOLICIT_WEB.jpg?v=1524614198',
isSuccess: true
}
});
</script>```

Looping over an array is pretty easy with v-for and data binding
 <section id="app" class="section container">

```
    <ul class = "user-list">
      <li v-for="user in users">
        <img v-bind:src="user.avatar"><br>
        Name: {{ user.name }}<br>
        Username: {{ user.username }}
      </li>
    </ul>
    <!-- <ul class="user-list"></ul> -->
    

  </section>

  <!-- our javascript -->
  <script>    
    const users = [
      {
        name: 'Chris',
        username: 'chrisoncode',
        avatar: 'https://pbs.twimg.com/profile_images/850147482117865472/O28qQSrN_400x400.jpg'
      },
      {
        name: 'Nick',
        username: 'whatnicktweets',
        avatar: 'https://pbs.twimg.com/profile_images/502500686588690432/wXBzuCBj_400x400.jpeg'
      },
      {
        name: 'Holly',
        username: 'hollylawly',
        avatar: 'https://pbs.twimg.com/profile_images/926258409552297985/Vk18Dg9M_400x400.jpg'
      }
    ];


    // vue =======================================================
    const app = new Vue({
      el: '#app',
      data: {
        users: users
      }
    });
  </script>
  ```