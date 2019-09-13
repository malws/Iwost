const postList = {
    template: '#post-list-template',
    data: function() {
        return {
            posts: ''
        }
    },

    created: function(){
        posts = this.$resource('/iwost/wp-json/wp/v2/posts');
        posts.get(function(posts){
            this.posts = posts;
        })
    }
}

const router = new VueRouter({
    routes: [
        { path: '/', component: postList}
    ],
})

var App = new Vue({
    el: '#app',
    router
})