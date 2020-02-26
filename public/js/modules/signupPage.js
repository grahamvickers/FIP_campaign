export default {
    template: `
    <section class="formPage">
        <!-- this is the sign up form -->
        <div class="signup">

            <h2>Sign up and join our mailing list!</h2>
            <h3>Enjoy our weekly newsletters, safe sex tips, upcoming event info and so much more. JOIN NOW!</h3>
            <h4>By signing up you agree to our terms and conditons, you may also unsubscribe at any time.</h4>

            <form action="" method="">

                <input type="text" name="firstName" id="firstName" value="" placeholder="What's your full name?">

                <input type="email" name="email" id="userEmail" value="" placeholder="What's your email?">

                <button name="submit">SIGN UP NOW</button>
            </form>
        </div>
    </section>
    `,

    created: function() {
        console.log("Sign Up Page Rendered");
    }
}