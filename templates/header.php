<!-- this is the header template -->

<header>
    <div id="headCon">
        <h2 class="hidden">Header Area</h2>
        <div id="logo">
            <router-link class="route" to="/home"><img src="./public/images/logo_blue.svg" alt="Company Logo"></router-link>
        </div>
        <div id="mainNav">
                <router-link class="route" to="/home">Home</router-link>
                <router-link class="route" to="/facts">Facts</router-link>
                <router-link class="route" to="/facts">Get Tested</router-link>
                <router-link class="route" to="/facts">About</router-link>
                <router-link class="route" to="/facts">Contact</router-link>
                <router-link class="route" id="signupBtn" to="/signup">SIGNUP</router-link>
        </div>
    </div>
</header>


