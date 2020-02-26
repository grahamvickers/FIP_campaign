export default {
    template: `
    <section class="formPage">
        <!-- this is the sign up form -->
        <div class="signup">
            <h2>SIGN UP TO LEARN MORE!</h2>
            <h4>By signing up you agree to our terms and conditons, you may also unsubscribe at any time.</h4>
            <form action="" method="">

                <input type="text" name="firstName" id="firstName" value="" placeholder='First Name'>

                <input type="text" name="lastName" id="lastName" value="" placeholder='Last Name'>

                <input type="email" name="email" id="userEmail" value="" placeholder='Email'>

                <input type="text" name="city" id="userCity" value="" placeholder='City'>

                <input type="text" name="country" id="userCountry" value="" placeholder='Country'>

                <button name="submit">SIGN UP NOW</button>
            </form>
        </div>
    </section>
    `,

    created: function() {
        console.log("Sign Up Page Rendered");
    }
}