export default {
    template: `
    <section>
        <div id="landing">
            <img src="./public/images/.jpg" class="landing" alt="landing image" width="100%">
        </div>

        <div id="welcome">
            <div class="welcome">
                <h2>Be Educated, Be Kind,<br>Be the Cure</h2>
                <h3>#WeAreGenZ</h3>
                <button>Get The Facts</button>
            </div>
        </div>

        <div id="box1">
            <h2>Be Educated</h2>
            <h3>First things first…HIV Vs AIDS - What’s the difference?</h3>
            <p>
            HIV is a Virus, AIDS is a Condition.
            HIV is a virus that can lead to immune system deterioration. The term “HIV” stands for human immunodeficiency virus. Only humans can contract it, and it attacks the immune system.
            </p>
            <div class="seeMore">
                <img src="./public/images/seemore.svg" class="seeMoreIcon" alt="landing image" height="20px" width="15px">
                <p>See More</p>
            </div>
        </div>

        <div id="box2">
            <h2>Be Educated</h2>
            <h3>First things first…HIV Vs AIDS - What’s the difference?</h3>
            <p>
            HIV is a Virus, AIDS is a Condition.
            HIV is a virus that can lead to immune system deterioration. The term “HIV” stands for human immunodeficiency virus. Only humans can contract it, and it attacks the immune system. 
            </p>
            <div class="seeMore">
                <img src="./public/images/seemore.svg" class="seeMoreIcon" alt="landing image" height="20px" width="15px">
                <p>See More</p>
            </div>
        </div>

        <div id="box3">
            <h2>Be Educated</h2>
            <h3>First things first…HIV Vs AIDS - What’s the difference?</h3>
            <p>
            HIV is a Virus, AIDS is a Condition.
            HIV is a virus that can lead to immune system deterioration. The term “HIV” stands for human immunodeficiency virus. Only humans can contract it, and it attacks the immune system.
            </p>
            <div class="seeMore">
                <img src="./public/images/seemore.svg" class="seeMoreIcon" alt="landing image" height="20px" width="15px">
                <p>See More</p>
            </div>
        </div>

        <!-- loading in the php signup template -->
        <?php include 'templates/signup.php'?>
    </section>
    `,

    created: function() {
        console.log("Splash Page Rendered");
    }
}