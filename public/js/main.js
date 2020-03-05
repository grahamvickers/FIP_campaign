import splashPage from "./modules/splashPage.js";
import contactPage from "./modules/contactPage.js";
import ErrorPage from "./modules/ErrorPage.js";

(() => {
    const router = new VueRouter({
        routes: [
            { path: '/', redirect: { name: "home" } },
            { path: '/home', name: "home", component: splashPage },
            { path: '/contact', name: "contact", component: contactPage },
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