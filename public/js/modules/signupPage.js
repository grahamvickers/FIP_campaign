export default {
    template: `
    <section class="formPage">
        <!-- this is the sign up form -->
        <h2>Sign up and join our mailing list!</h2>
        <div id="signupWrap">
            <div class="signup">
                <div class="signupCon">
                    <h3>Enjoy our weekly newsletters, safe sex tips, upcoming event info and so much more. JOIN NOW!</h3>
                    <p>By signing up you agree to our terms and conditons, you may also unsubscribe at any time.</p>
                </div>

                <div id="line">
                </div>

                <div class="signupCon">
                    <form action="" method="">

                        <input type="text" name="firstName" id="firstName" value="" placeholder="What's your full name?">

                        <input type="email" name="email" id="userEmail" value="" placeholder="What's your email?">

                        <button name="submit">SIGN UP NOW</button>
                    </form>
                <div>
        </div>
        
    </section>
    `,

    created: function() {
        console.log("Sign Up Page Rendered");
    }
}