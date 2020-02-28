export default {
    template: `
    <section>
        <div id="landing">
            <img src="../public/images/landing.svg">
        </div>

        <div id="welcome">
            <h2>Welcome Area</h2>
            <h4>Our Slogan</h4>
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
    </section>
    `,

    created: function() {
        console.log("Splash Page Rendered");
    }
}