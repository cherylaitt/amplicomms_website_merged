<?php include('header.php') ?> 
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' type='text/css' href='../css/style.css'>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box
    }

    .mySlides {
      display: none
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
      margin-top: 180px;
    }

    .img-container {
      background-color: white;
    }

    .mySlides:hover {
      filter: brightness(80%);
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    .active {
      background-color: #717171;
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

      .prev,
      .next,
      .text {
        font-size: 11px
      }
    }

    /* .heartbox {
     position: absolute;
     top: 200px;
     left: 50%;
     transform: translate(-50%, -50%)
 } */

 svg {
     cursor: pointer;
     overflow: visible;
     width: 60px;
     margin: 20px
 }

 svg #heart {
     transform-origin: center;
     animation: animateHeartOut .3s linear forwards
 }

 svg #main-circ {
     transform-origin: 29.5px 29.5px
 }

 .checkbox {
     display: none
 }

 .checkbox:checked+label svg #heart {
     transform: scale(0.2);
     fill: #E2264D;
     animation: animateHeart .3s linear forwards .25s
 }

 .checkbox:checked+label svg #main-circ {
     transition: all 2s;
     animation: animateCircle .3s linear forwards;
     opacity: 1
 }

 .checkbox:checked+label svg #heartgroup1 {
     opacity: 1;
     transition: .1s all .3s
 }

 .checkbox:checked+label svg #heartgroup1 #heart1 {
     transform: scale(0) translate(0, -30px);
     transform-origin: 0 0 0;
     transition: .5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup1 #heart2 {
     transform: scale(0) translate(10px, -50px);
     transform-origin: 0 0 0;
     transition: 1.5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup2 {
     opacity: 1;
     transition: .1s all .3s
 }

 .checkbox:checked+label svg #heartgroup2 #heart1 {
     transform: scale(0) translate(30px, -15px);
     transform-origin: 0 0 0;
     transition: .5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup2 #heart2 {
     transform: scale(0) translate(60px, -15px);
     transform-origin: 0 0 0;
     transition: 1.5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup3 {
     opacity: 1;
     transition: .1s all .3s
 }

 .checkbox:checked+label svg #heartgroup3 #heart1 {
     transform: scale(0) translate(30px, 0px);
     transform-origin: 0 0 0;
     transition: .5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup3 #heart2 {
     transform: scale(0) translate(60px, 10px);
     transform-origin: 0 0 0;
     transition: 1.5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup4 {
     opacity: 1;
     transition: .1s all .3s
 }

 .checkbox:checked+label svg #heartgroup4 #heart1 {
     transform: scale(0) translate(30px, 15px);
     transform-origin: 0 0 0;
     transition: .5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup4 #heart2 {
     transform: scale(0) translate(40px, 50px);
     transform-origin: 0 0 0;
     transition: 1.5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup5 {
     opacity: 1;
     transition: .1s all .3s
 }

 .checkbox:checked+label svg #heartgroup5 #heart1 {
     transform: scale(0) translate(-10px, 20px);
     transform-origin: 0 0 0;
     transition: .5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup5 #heart2 {
     transform: scale(0) translate(-60px, 30px);
     transform-origin: 0 0 0;
     transition: 1.5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup6 {
     opacity: 1;
     transition: .1s all .3s
 }

 .checkbox:checked+label svg #heartgroup6 #heart1 {
     transform: scale(0) translate(-30px, 0px);
     transform-origin: 0 0 0;
     transition: .5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup6 #heart2 {
     transform: scale(0) translate(-60px, -5px);
     transform-origin: 0 0 0;
     transition: 1.5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup7 {
     opacity: 1;
     transition: .1s all .3s
 }

 .checkbox:checked+label svg #heartgroup7 #heart1 {
     transform: scale(0) translate(-30px, -15px);
     transform-origin: 0 0 0;
     transition: .5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup7 #heart2 {
     transform: scale(0) translate(-55px, -30px);
     transform-origin: 0 0 0;
     transition: 1.5s transform .3s
 }

 .checkbox:checked+label svg #heartgroup2 {
     opacity: 1;
     transition: .1s opacity .3s
 }

 .checkbox:checked+label svg #heartgroup3 {
     opacity: 1;
     transition: .1s opacity .3s
 }

 .checkbox:checked+label svg #heartgroup4 {
     opacity: 1;
     transition: .1s opacity .3s
 }

 .checkbox:checked+label svg #heartgroup5 {
     opacity: 1;
     transition: .1s opacity .3s
 }

 .checkbox:checked+label svg #heartgroup6 {
     opacity: 1;
     transition: .1s opacity .3s
 }

 .checkbox:checked+label svg #heartgroup7 {
     opacity: 1;
     transition: .1s opacity .3s
 }

 @keyframes animateCircle {
     40% {
         transform: scale(10);
         opacity: 1;
         fill: #DD4688
     }

     55% {
         transform: scale(11);
         opacity: 1;
         fill: #D46ABF
     }

     65% {
         transform: scale(12);
         opacity: 1;
         fill: #CC8EF5
     }

     75% {
         transform: scale(13);
         opacity: 1;
         fill: transparent;
         stroke: #CC8EF5;
         stroke-width: .5
     }

     85% {
         transform: scale(17);
         opacity: 1;
         fill: transparent;
         stroke: #CC8EF5;
         stroke-width: .2
     }

     95% {
         transform: scale(18);
         opacity: 1;
         fill: transparent;
         stroke: #CC8EF5;
         stroke-width: .1
     }

     100% {
         transform: scale(19);
         opacity: 1;
         fill: transparent;
         stroke: #CC8EF5;
         stroke-width: 0
     }
 }

 @keyframes animateHeart {
     0% {
         transform: scale(0.2)
     }

     40% {
         transform: scale(1.2)
     }

     100% {
         transform: scale(1)
     }
 }

 @keyframes animateHeartOut {
     0% {
         transform: scale(1.4)
     }

     100% {
         transform: scale(1)
     }
 }
 </style>

<body>

  <div class="slideshow-container">
  <div class="heartbox">
    <div class="mySlides">
      <div class="img-container">
        <img id="imagebtn" onclick="location.href = 'product_1.php';" src="../images/product_1.webp" style="width:50%">
          <input type="checkbox" class="checkbox" id="checkbox" />
                    <label for="checkbox"> 
                        <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                            <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                                <path
                                    d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                                    id="heart" fill="#AAB8C2" />
                                <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
                                <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                                    <circle id="heart1" fill="#9CD8C3" cx="2" cy="6" r="2" />
                                    <circle id="heart2" fill="#8CE8C3" cx="5" cy="2" r="2" />
                                </g>
                                <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="7" r="2" />
                                    <circle id="heart2" fill="#91D2FA" cx="3" cy="2" r="2" />
                                </g>
                                <g id="heartgroup3" opacity="0" transform="translate(52 28)">
                                    <circle id="heart2" fill="#9CD8C3" cx="2" cy="7" r="2" />
                                    <circle id="heart1" fill="#8CE8C3" cx="4" cy="2" r="2" />
                                </g>
                                <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                                    <circle id="heart2" fill="#CC8EF5" cx="5" cy="6" r="2" />
                                    <circle id="heart1" fill="#CC8EF5" cx="2" cy="2" r="2" />
                                </g>
                                <g id="heartgroup5" opacity="0" transform="translate(14 50)">
                                    <circle id="heart1" fill="#91D2FA" cx="6" cy="5" r="2" />
                                    <circle id="heart2" fill="#91D2FA" cx="2" cy="2" r="2" />
                                </g>
                                <g id="heartgroup4" opacity="0" transform="translate(35 50)">
                                    <circle id="heart1" fill="#F48EA7" cx="6" cy="5" r="2" />
                                    <circle id="heart2" fill="#F48EA7" cx="2" cy="2" r="2" />
                                </g>
                                <g id="heartgroup1" opacity="0" transform="translate(24)">
                                    <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3" r="2" />
                                    <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2" r="2" />
                                </g>
                            </g>
                        </svg> 
                    </label>
      </div>
    </div>

    <div class="mySlides">
      <div class="img-container">
        <img
          src="../images/product_2.webp"
          style="width:50%">
          <input type="checkbox" class="checkbox" id="checkbox_2" />
        <label for="checkbox_2"> 
            <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                    <path
                        d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                        id="heart" fill="#AAB8C2" />
                    <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
                    <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                        <circle id="heart1" fill="#9CD8C3" cx="2" cy="6" r="2" />
                        <circle id="heart2" fill="#8CE8C3" cx="5" cy="2" r="2" />
                    </g>
                    <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="7" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="3" cy="2" r="2" />
                    </g>
                    <g id="heartgroup3" opacity="0" transform="translate(52 28)">
                        <circle id="heart2" fill="#9CD8C3" cx="2" cy="7" r="2" />
                        <circle id="heart1" fill="#8CE8C3" cx="4" cy="2" r="2" />
                    </g>
                    <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                        <circle id="heart2" fill="#CC8EF5" cx="5" cy="6" r="2" />
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup5" opacity="0" transform="translate(14 50)">
                        <circle id="heart1" fill="#91D2FA" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup4" opacity="0" transform="translate(35 50)">
                        <circle id="heart1" fill="#F48EA7" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#F48EA7" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup1" opacity="0" transform="translate(24)">
                        <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3" r="2" />
                        <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2" r="2" />
                    </g>
                </g>
            </svg> 
        </label> 
      </div>
    </div>

    <div class="mySlides">
      <div class="img-container">
        <img
          src="../images/product_3.webp"
          style="width:50%">
          <input type="checkbox" class="checkbox" id="checkbox_3" />
        <label for="checkbox_3"> 
            <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                    <path
                        d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                        id="heart" fill="#AAB8C2" />
                    <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
                    <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                        <circle id="heart1" fill="#9CD8C3" cx="2" cy="6" r="2" />
                        <circle id="heart2" fill="#8CE8C3" cx="5" cy="2" r="2" />
                    </g>
                    <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="7" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="3" cy="2" r="2" />
                    </g>
                    <g id="heartgroup3" opacity="0" transform="translate(52 28)">
                        <circle id="heart2" fill="#9CD8C3" cx="2" cy="7" r="2" />
                        <circle id="heart1" fill="#8CE8C3" cx="4" cy="2" r="2" />
                    </g>
                    <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                        <circle id="heart2" fill="#CC8EF5" cx="5" cy="6" r="2" />
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup5" opacity="0" transform="translate(14 50)">
                        <circle id="heart1" fill="#91D2FA" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup4" opacity="0" transform="translate(35 50)">
                        <circle id="heart1" fill="#F48EA7" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#F48EA7" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup1" opacity="0" transform="translate(24)">
                        <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3" r="2" />
                        <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2" r="2" />
                    </g>
                </g>
            </svg> 
        </label> 
      </div>
    </div>

    <div class="mySlides">
      <div class="img-container">
        <img
          src="../images/product_4.webp"
          style="width:50%">
          <input type="checkbox" class="checkbox" id="checkbox_4" />
        <label for="checkbox_4"> 
            <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                    <path
                        d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                        id="heart" fill="#AAB8C2" />
                    <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
                    <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                        <circle id="heart1" fill="#9CD8C3" cx="2" cy="6" r="2" />
                        <circle id="heart2" fill="#8CE8C3" cx="5" cy="2" r="2" />
                    </g>
                    <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="7" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="3" cy="2" r="2" />
                    </g>
                    <g id="heartgroup3" opacity="0" transform="translate(52 28)">
                        <circle id="heart2" fill="#9CD8C3" cx="2" cy="7" r="2" />
                        <circle id="heart1" fill="#8CE8C3" cx="4" cy="2" r="2" />
                    </g>
                    <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                        <circle id="heart2" fill="#CC8EF5" cx="5" cy="6" r="2" />
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup5" opacity="0" transform="translate(14 50)">
                        <circle id="heart1" fill="#91D2FA" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup4" opacity="0" transform="translate(35 50)">
                        <circle id="heart1" fill="#F48EA7" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#F48EA7" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup1" opacity="0" transform="translate(24)">
                        <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3" r="2" />
                        <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2" r="2" />
                    </g>
                </g>
            </svg> 
        </label> 
      </div>
    </div>

    <div class="mySlides">
      <div class="img-container">
        <img
          src="../images/product_5.webp"
          style="width:50%">
          <input type="checkbox" class="checkbox" id="checkbox_5" />
        <label for="checkbox_5"> 
            <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                    <path
                        d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                        id="heart" fill="#AAB8C2" />
                    <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
                    <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                        <circle id="heart1" fill="#9CD8C3" cx="2" cy="6" r="2" />
                        <circle id="heart2" fill="#8CE8C3" cx="5" cy="2" r="2" />
                    </g>
                    <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="7" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="3" cy="2" r="2" />
                    </g>
                    <g id="heartgroup3" opacity="0" transform="translate(52 28)">
                        <circle id="heart2" fill="#9CD8C3" cx="2" cy="7" r="2" />
                        <circle id="heart1" fill="#8CE8C3" cx="4" cy="2" r="2" />
                    </g>
                    <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                        <circle id="heart2" fill="#CC8EF5" cx="5" cy="6" r="2" />
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup5" opacity="0" transform="translate(14 50)">
                        <circle id="heart1" fill="#91D2FA" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup4" opacity="0" transform="translate(35 50)">
                        <circle id="heart1" fill="#F48EA7" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#F48EA7" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup1" opacity="0" transform="translate(24)">
                        <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3" r="2" />
                        <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2" r="2" />
                    </g>
                </g>
            </svg> 
        </label> 
      </div>
    </div>

    <div class="mySlides">
      <div class="img-container">
        <img
          src="../images/product_6.webp"
          style="width:50%">
          <input type="checkbox" class="checkbox" id="checkbox_6" />
        <label for="checkbox_6"> 
            <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                    <path
                        d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                        id="heart" fill="#AAB8C2" />
                    <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
                    <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                        <circle id="heart1" fill="#9CD8C3" cx="2" cy="6" r="2" />
                        <circle id="heart2" fill="#8CE8C3" cx="5" cy="2" r="2" />
                    </g>
                    <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="7" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="3" cy="2" r="2" />
                    </g>
                    <g id="heartgroup3" opacity="0" transform="translate(52 28)">
                        <circle id="heart2" fill="#9CD8C3" cx="2" cy="7" r="2" />
                        <circle id="heart1" fill="#8CE8C3" cx="4" cy="2" r="2" />
                    </g>
                    <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                        <circle id="heart2" fill="#CC8EF5" cx="5" cy="6" r="2" />
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup5" opacity="0" transform="translate(14 50)">
                        <circle id="heart1" fill="#91D2FA" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup4" opacity="0" transform="translate(35 50)">
                        <circle id="heart1" fill="#F48EA7" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#F48EA7" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup1" opacity="0" transform="translate(24)">
                        <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3" r="2" />
                        <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2" r="2" />
                    </g>
                </g>
            </svg> 
        </label> 
      </div>
    </div>

    <div class="mySlides">
      <div class="img-container">
        <img
          src="../images/product_7.webp"
          style="width:50%">
          <input type="checkbox" class="checkbox" id="checkbox_7" />
        <label for="checkbox_7"> 
            <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                    <path
                        d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                        id="heart" fill="#AAB8C2" />
                    <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
                    <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                        <circle id="heart1" fill="#9CD8C3" cx="2" cy="6" r="2" />
                        <circle id="heart2" fill="#8CE8C3" cx="5" cy="2" r="2" />
                    </g>
                    <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="7" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="3" cy="2" r="2" />
                    </g>
                    <g id="heartgroup3" opacity="0" transform="translate(52 28)">
                        <circle id="heart2" fill="#9CD8C3" cx="2" cy="7" r="2" />
                        <circle id="heart1" fill="#8CE8C3" cx="4" cy="2" r="2" />
                    </g>
                    <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                        <circle id="heart2" fill="#CC8EF5" cx="5" cy="6" r="2" />
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup5" opacity="0" transform="translate(14 50)">
                        <circle id="heart1" fill="#91D2FA" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup4" opacity="0" transform="translate(35 50)">
                        <circle id="heart1" fill="#F48EA7" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#F48EA7" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup1" opacity="0" transform="translate(24)">
                        <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3" r="2" />
                        <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2" r="2" />
                    </g>
                </g>
            </svg> 
        </label> 
      </div>
    </div>

    <div class="mySlides">
      <div class="img-container">
        <img
          src="../images/product_8.webp"
          style="width:50%">
          <input type="checkbox" class="checkbox" id="checkbox_8" />
        <label for="checkbox_8"> 
            <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg">
                <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                    <path
                        d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z"
                        id="heart" fill="#AAB8C2" />
                    <circle id="main-circ" fill="#E2264D" opacity="0" cx="29.5" cy="29.5" r="1.5" />
                    <g id="heartgroup7" opacity="0" transform="translate(7 6)">
                        <circle id="heart1" fill="#9CD8C3" cx="2" cy="6" r="2" />
                        <circle id="heart2" fill="#8CE8C3" cx="5" cy="2" r="2" />
                    </g>
                    <g id="heartgroup6" opacity="0" transform="translate(0 28)">
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="7" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="3" cy="2" r="2" />
                    </g>
                    <g id="heartgroup3" opacity="0" transform="translate(52 28)">
                        <circle id="heart2" fill="#9CD8C3" cx="2" cy="7" r="2" />
                        <circle id="heart1" fill="#8CE8C3" cx="4" cy="2" r="2" />
                    </g>
                    <g id="heartgroup2" opacity="0" transform="translate(44 6)">
                        <circle id="heart2" fill="#CC8EF5" cx="5" cy="6" r="2" />
                        <circle id="heart1" fill="#CC8EF5" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup5" opacity="0" transform="translate(14 50)">
                        <circle id="heart1" fill="#91D2FA" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#91D2FA" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup4" opacity="0" transform="translate(35 50)">
                        <circle id="heart1" fill="#F48EA7" cx="6" cy="5" r="2" />
                        <circle id="heart2" fill="#F48EA7" cx="2" cy="2" r="2" />
                    </g>
                    <g id="heartgroup1" opacity="0" transform="translate(24)">
                        <circle id="heart1" fill="#9FC7FA" cx="2.5" cy="3" r="2" />
                        <circle id="heart2" fill="#9FC7FA" cx="7.5" cy="2" r="2" />
                    </g>
                </g>
            </svg> 
        </label> 
      </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  </div>
  <br>

  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }

      slides[slideIndex - 1].style.display = "block";
    }
  </script>

<iframe src="test2.php" style="height:1000px;width:100%; border:none;" title="Iframe Example"></iframe>

</body>

<?php include('footer.php') ?>
