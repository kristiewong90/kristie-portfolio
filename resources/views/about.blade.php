@extends('layout')

@section('content')

  <div class="page-hero"></div>

  <div class="about container">

    <div class="row">
      <div class="col">
        <h1 class="about-title">about me</h1>
      </div>
    </div>

    <div class="row about-box">
      <div class="about-image col-md-4 col-sm-12">
        <img src="../img/kristie-portfolio-image.jpg" alt="Kristie Wong Image" style="visibility:visible; right: 0%;">
      </div>
      <div class="about-textbox col-md-8 col-sm-12">
        <p>My background is a bit unusual, but I think that’s what makes me unique. I have my Bachelor of Arts in Economics; however, I never found a passion for that. Somehow, I landed a job as a Junior Accountant and again never found a passion for that. While traveling I started a blog and developed a burning distaste for WordPress themes. All I wanted to do was design and customize my theme. Then it clicked! Maybe my passion is designing and developing creative websites. I booked the next flight home and enrolled myself in the Web Development program at the Southern Alberta Institute of Technology (SAIT). And here we are!</p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-4">

        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
          <div class="flipper">
            <div class="front">
              <img src="/img/user.gif" alt="User Icon">
            </div>
            <div class="back">
              <h4>soft skills</h4>
            </div>
          </div>
        </div>
        <div class="softSkills text">
          <p>
            <strong>Humor</strong>
            My top strength is Humor which means I enjoy bringing smiles to others’ faces. I like to laugh and make others laugh, and are often fun to be around. I am able to bring a lighter side to gloomy situations.
          </p>
          <p>
            <strong>Fairness</strong>
            Treating all people the same according to notions of fairness and justice; not letting feelings bias decisions about others; giving everyone a fair chance.
          </p>
          <p>
            Reference: <a href="http://www.viacharacter.org" target="_blank">Via Character</a>
          </p>
        </div>
      </div>


      <div class="col-md-4">
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
          <div class="flipper">
            <div class="front">
              <img src="/img/code.gif" alt="Code Icon">
            </div>
            <div class="back">
              <h4>technical skills</h4>
            </div>
          </div>
        </div>

        <div class="technicalSkills-text">
          <div class="bar flex">
            <div class="bar fill">
              <div class="tag bold flex"><strong>CSS</strong></div>
            </div>
          </div>

          <div class="bar flex">
            <div class="bar fill">
              <div class="tag bold flex"><strong>HTML</strong></div>
            </div>
          </div>

          <div class="bar flex">
            <div class="bar fill">
              <div class="tag bold flex"><strong>Javascript</strong></div>
            </div>
          </div>

          <div class="bar flex">
            <div class="bar fill">
              <div class="tag bold flex"><strong>PHP</strong></div>
            </div>
          </div>

          <div class="bar flex">
            <div class="bar fill">
              <div class="tag bold flex"><strong>Photoshop/Illustrator</strong></div>
            </div>
          </div>

          <div class="bar flex">
            <div class="bar fill">
              <div class="tag bold flex"><strong>WordPress</strong></div>
            </div>
          </div>

          <div class="bar flex">
            <div class="bar fill">
              <div class="tag bold flex"><strong>UX / UI Design</strong></div>
            </div>
          </div>
        </div>
      </div>



      <div class="col-md-4">
        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
          <div class="flipper">
            <div class="front">
              <img src="/img/bicycle.gif" alt="User Icon">
            </div>
            <div class="back">
              <h4>other interests</h4>
            </div>
          </div>
        </div>
        <div class="other text">
          <p>
            When I’m not coding you can try to catch me outside jogging along the river. If I’m not there I’m probably working on <a href="https://www.etsy.com/shop/FIRSTGLASSLADIESYYC" target="_blank">stained glass</a> with my two friends in our studio.
            If you still can't find me, I'm probably curled up at home with a cup of tea and my dog, Maggie.
          </p>
        </div>
      </div>

    </div>
  </div>
@endsection
