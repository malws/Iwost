<!DOCTYPE html> 
<html <?php language_attributes(); ?>> 
<head> 
   <?php wp_head(); ?> 
   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
   <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>

</head> 

<body> 
<html>
   <head>
      <title>VueJs Instance</title>
      <script type = "text/javascript" src = "js/vue.js"></script>
      <script type = "text/javascript" src = "js/vue-router.js"></script>
   </head>
   <body>
      <div id = "app">
      <posts></posts>
         <h1>Routing Example</h1>
         <p>
            <router-link to = "/route1">Router Link 1</router-link>
            <router-link to = "/route2">Router Link 2</router-link>
         </p>
         <!-- route outlet -->
         <!-- component matched by the route will render here -->
         <router-view></router-view>
      </div>
   </body>
</html>
    <?php wp_footer(); ?> 
</body> 
</html>