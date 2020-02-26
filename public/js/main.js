import splashPage from "./modules/splashPage.js";
import factsPage from "./modules/factsPage.js";
import signupPage from "./modules/signupPage.js";
import ErrorPage from "./modules/ErrorPage.js";

(() => {
    const router = new VueRouter({
        routes: [
            { path: '/', redirect: { name: "home" } },
            { path: '/home', name: "home", component: splashPage },
            { path: '/facts', name: "facts", component: factsPage },
            { path: '/signup', name: "signup", component: signupPage },
            { path: '*', name: "error", component: ErrorPage}
        ]
    })

    const vm = new Vue({
        data: {

        },
    
        created: function() {
            console.log('app is up and running')
        },
    
        methods: {
    
        },
        
        router: router
    }).$mount("#app");
})();