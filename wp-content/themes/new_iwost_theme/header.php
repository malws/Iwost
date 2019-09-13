<div id="app">
    <nav v-bind:class="active" v-on:click.prevent>

        <a href="#" class="home" v-on:click="makeActive('home')">Home</a>
        <a href="#" class="projects" v-on:click="makeActive('projects')">Projects</a>
        <a href="#" class="services" v-on:click="makeActive('services')">Services</a>
        <a href="#" class="contact" v-on:click="makeActive('contact')">Contact</a>
     </nav>

    <p>You chose <b>{{active}}</b></p>
</div> 