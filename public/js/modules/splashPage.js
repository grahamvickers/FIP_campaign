export default {
    template: `
    <section>
        <div id="landing">
            <img src="./public/images/.jpg" alt="yellow condom" width="100%" height="">
        </div>

        <div id="welcome">
            <h2>Our Mission</h2>
            <h4>Be Educated, Be Kind, Be The Cure.</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
        </div>

        <div id="stats">
            <h2>Stats Area</h2>
            <h4>Secondary heading</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
        </div>

        <!-- loading in the php signup template -->
        <?php include 'templates/signup.php'?>
    </section>
    `,

    created: function() {
        console.log("Splash Page Rendered");
    }
}