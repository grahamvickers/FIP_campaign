export default {
    template: `
    <section>

        <div id="section1">

            <div id="welcomeDesk">
                <div class="welcome">
                    <h2>Be Educated, Be Kind,<br>Be the Cure</h2>
                    <h3>#WeAreGenZ</h3>
                    <button>Get The Facts</button>
                </div>
            </div>

            <div id="landing">
                <img src="./public/images/.jpg" class="landing" alt="landing image" width="100%">
            </div>
        
        
        </div>

        <div id="welcome">
            <div class="welcome">
                <h2>Be Educated, Be Kind,<br>Be the Cure</h2>
                <h3>#WeAreGenZ</h3>
                <button>Get The Facts</button>
            </div>
        </div>

        <div id="box1Wrapper">

        <div id="box1">
            <div class="boxinside boxinside1">
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
        </div>

            <div class="circleImg1">
            </div>

        </div>


        <div id="box2Wrapper">

        <div id="box2">
            <div class="boxinside">
            <h2>Be Educated</h2>
            <h3>First things first…HIV Vs AIDS - What’s the difference?</h3>
            <p>
            HIV is a Virus, AIDS is a Condition.
            HIV is a virus that can lead to immune system deterioration.<br>The term “HIV” stands for human immunodeficiency virus. Only humans can contract it, and it attacks the immune system.
            </p>
            <div class="seeMore">
                <img src="./public/images/seemore.svg" class="seeMoreIcon" alt="landing image" height="20px" width="15px">
                <p>See More</p>
            </div>
            </div>   
        </div>

            <div class="circleImg2">
            </div>

        </div>

        <div id="box1Wrapper">

        <div id="box3">
            <div class="boxinside boxinside1">
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
        </div>

            <div class="circleImg1 circleImg">
            </div>

        </div>



        <div id="section2">

            <h2>Get Tested Today</h2>

            <div id="squareWrapper">
            <div id="infoSquares">
            <div class="infoSquare1 infoSquare">
                <img src="./public/images/building.jpg" class="" alt="Regional HIV/AIDS Connection" height="" width="">
                <h3>Regional HIV/AIDS<br>Connection</h3>
            </div>
        </div>

        <div id="infoSquares">
            <div class="infoSquare2 infoSquare">
                <img src="./public/images/building.jpg" class="" alt="Regional HIV/AIDS Connection" height="" width="">
                <h3>Student Health Services<br>
                At Western University</h3>
            </div>
        </div>

        <div id="infoSquares">
            <div class="infoSquare3 infoSquare">
                <img src="./public/images/building.jpg" class="" alt="Regional HIV/AIDS Connection" height="" width="">
                <h3>Regional HIV/AIDS<br>
                Connection</h3>
            </div>
        </div>
            
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