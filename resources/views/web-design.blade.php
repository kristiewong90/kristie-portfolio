@extends('layout')

@section('content')

  <div class="page-hero"></div>

  <div class="container">

    <div class="row">
      <div class="col-6">
        <h2>HTML & CSS assignment</h2>
        <hr>
        <p>
          The purpose of this assignment was to create a four page website.
          We needed to include a page with a list of products and a contact page.
          The site needed to be responsive and should have a mobile menu.
          I chose to do a mockup of a typical e-commerce site.
        </p>
        <h3>the challenge</h3>
        <p>
          One of the first challenges I had was making my navigation responsive. I wanted to have a hamburger button in the top right corner and have the contents of the navigation drop down when clicked. However, I ran out of time and wasn’t able to add it to my assignment. As you can see on the contact page, my mobile navigation is a centered list. It’s still functional and easy for users to find. It just isn’t the most aesthetically pleasing. Another challenge I had in this assignment was the placement of the form in the footer. I initially tried to place it using the float method. That wasn’t working, so I used bootstrap which I should have just done in the first place. It’s funny reflecting back on the challenges I had in my first couple of assignments. It’s humbling to see how far I’ve come. Having said that, my challenges have become much more complicated. I wish these minor issues were still the most challenging problems for me!
        </p>
        <h3>what I learned</h3>
        <p>
          This assignment helped expand my knowledge of HTML and CSS basics. I learned how to use bootstrap to make responsive designs (minus my navbar). My styles on this assignment are pretty basic, but this assignment taught me that I really like creating clean, minimalist designs.
          You can check out my code here: <a href="https://github.com/kristiewong90/Assignment-4">Github</a>
        </p>
      </div>


      <div class="col-6">
        <div class="top-image">
          <img src="/img/web-design-home.gif" alt="Web Design Site">
        </div>
        <div class="row">
          <div class="col-6"><img src="/img/web-design-about-page.gif" alt="Web Design About Page"></div>
          <div class="col-6"><img src="/img/web-design-contact.gif" alt="Web Design Contact Page"></div>
        </div>
      </div>
    </div>






    <div class="more-portfolio">
      put 3 more cards here for "more-portfolio", try using extends
    </div>

  </div>


@endsection
