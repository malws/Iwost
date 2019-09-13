<?php get_header(); ?>

	<div class="white-wrap">
        <div id="app">
            <router-view></router-view>
        </div>
    </div>

    <template id="post-list-template">
        <div v-for="post in posts">
            {{ post.id }}
        </div>
    </template>

<?php get_footer(); ?>