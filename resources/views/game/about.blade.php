<!-- Main defined layout will be called here -->
@extends('layouts/game')

<!-- Content will be yielded where required -->
@section('content')

<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Game Warrior showcases information related to the origin of many games.</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Our Humble Beginnings</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Counter-Strike 1.6 was the game that laid the foundation for the development of this website. It was the first game that revolutionized the gaming industry and was promoted by World Cyber Games.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Prime Focus</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">We mainly focus on five categories to distribute our data. These categories are Adventure, Shooter, Racing, Horror, and Strategy.</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Adventure Gaming</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">An adventure game is a video game in which the player assumes the role of a protagonist in an interactive story driven by exploration and puzzle-solving.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Shooter Games</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Shooter games are a subgenre of action video game, which often test the player's spatial awareness, reflexes, and speed in both isolated single player or networked multiplayer environments.</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/5.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Racing Games</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">The racing video game genre is the genre of video games, either in the first-person or third-person perspective, in which the player partakes in a racing competition with any type of land, water, air or space vehicles.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/6.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Horror Games</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">A horror game is a video game genre centered on horror fiction and typically designed to scare the player. Unlike most other video game genres, which are classified by their gameplay, horror games are nearly always based on narrative or visual presentation, and use a variety of gameplay types.</p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/7.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Strategy Games</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">A strategy game or strategic game is a game in which the players' uncoerced, and often autonomous decision-making skills have a high significance in determining the outcome. Almost all strategy games require internal decision tree style thinking, and typically very high situational awareness.</p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Be Part
                        <br />
                        Of Our
                        <br />
                        Story!
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>

@stop()