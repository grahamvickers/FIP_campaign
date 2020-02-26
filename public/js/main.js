import splashPage from "./modules/splashPage.js";
import signupPage from "./modules/signupPage.js";
import ErrorPage from "./modules/ErrorPage.js";

const router = new VueRouter({
    routes: [
        { path: '/app', name: "home", component: splashPage },
        { path: '/signup', name: "signup", component: signupPage },
        { path: '*', name: "error", component: ErrorPage}
    ]
})