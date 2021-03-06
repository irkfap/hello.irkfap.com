<?php header("HTTP/1.1 404 Not Found"); ?><!doctype html>
<!--
_      __     ___     _    _        ______  _____     ___
(_    _) |    \  \   | )  / \    ___)    /  \    |    \
  |  |   |     )  |  |/  /   |  (__     /    \   |     )
  |  |   |    /   |     (    |   __)   /  ()  \  |  __/
 _|  |_  | |\ \   |  |\  \   |  (     |   __   | | |
(      )_| |_\ \_/   |_)  \_/    \____|  (__)  |_| |_____
-->
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Irkutsk First Amendment Protectors. The oldest IT community in the region">
  <meta name="keywords" content="Irkfap,Irkutsk,Фапка,Фапочка,Иркфап,Fapočka">
  <meta name="author" content="Irkfap Community">

  <title>Irkfap Community</title>
  <meta name="title" content="Irkfap Community">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ff0000">
  <meta name="theme-color" content="#ff0000">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://irkfap.com/">
  <meta property="og:title" content="Irkfap Community">
  <meta property="og:description" content="Irkutsk First Amendment Protectors. The oldest IT community in the region. Highly toxic nonprofit organization">
  <meta property="og:image" content="https://irkfap.com/img/cover-image.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://irkfap.com/">
  <meta property="twitter:title" content="Irkfap Community">
  <meta property="twitter:description" content="Irkutsk First Amendment Protectors. The oldest IT community in the region. Highly toxic nonprofit organization">
  <meta property="twitter:image" content="https://irkfap.com/img/cover-image.png">

  <meta name="robots" content="index, follow">
  <link rel="dns-prefetch" href="https://mc.yandex.ru">
  <link rel="dns-prefetch" href="https://www.google-analytics.com">

  <link type="text/plain" rel="author" href="/humans.txt">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300;700&display=swap" rel="stylesheet">

  <style>
    html, body {
      width: 100%;
      height: 100%;
    }
    body {
      margin: 0;
    }
    h1,h2,h3,h4,h5,h6 {
      font-family: 'Bellota Text', sans-serif;
    }

    .caption {
      font-family: "Bellota Text", sans-serif;
      font-weight: 700;
      font-size: 50vw;
    }
    @media only screen and (max-width: 667px) {
      .caption {
        font-weight: 300;
      }
    }
  </style>

</head>
<body>
  <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <!-- https://tympanus.net/codrops/2019/02/19/svg-filter-effects-creating-texture-with-feturbulence/ -->
      <!-- https://www.sarasoueidan.com/blog/svg-filters/ -->
      <filter id="watercolor" x="0%" y="0%" width="100%" height="100%">
        <!-- paper texture { -->
        <!-- FIXME: use <feImage>? -->
        <feTurbulence type="fractalNoise" baseFrequency="0.04" numOctaves="5" result="noise"/>

        <feDiffuseLighting in="noise" lighting-color="white" surfaceScale="3" result="texture">
          <feDistantLight azimuth="45" elevation="60" />
        </feDiffuseLighting>

        <!-- FIXME: Firefox compatibility -->
        <feComponentTransfer in="texture" result="texture-contrast">
          <feFuncR type="gamma" amplitude="1.1" exponent="1.1"/>
          <feFuncG type="gamma" amplitude="1.1" exponent="1.1"/>
          <feFuncB type="gamma" amplitude="1.1" exponent="1.1"/>
        </feComponentTransfer>
        <!-- } paper texture -->

        <feMorphology operator="dilate" radius="10" in="SourceGraphic" result="text-expand"/>

        <feTurbulence type="turbulence" baseFrequency="0.05"
                      numOctaves="2" result="turbulence"/>
        <feDisplacementMap in2="turbulence" in="text-expand" result="text-fringe"
                           scale="10" xChannelSelector="A" yChannelSelector="R"/>
        <feGaussianBlur in="text-fringe" stdDeviation="2" result="text-fringe-smooth"/>

        <feGaussianBlur in="texture-contrast" stdDeviation="0.5" result="texture-map"/>
        <feDisplacementMap in="text-fringe-smooth" in2="texture-map" result="mapped-text"
                           scale="30" xChannelSelector="R" yChannelSelector="R"/>

        <feColorMatrix in="mapped-text" result="text-opacity"
                       type="matrix" values="1 0 0   0 0
                                0 1 0   0 0
                                0 0 1   0 0
                                0 0 0 0.9 0"/>

        <feBlend in="texture-contrast" in2="text-opacity" mode="multiply" result="blend"/>
      </filter>
    </defs>

    <g filter="url(#watercolor)">
      <rect x="0" y="0" width="100%" height="100%" fill="none" />
      <text fill="red"
            dominant-baseline="middle"
            alignment-baseline="middle"
            text-anchor="middle"
            class="caption" x="50%" y="50%">404</text>
    </g>
  </svg>

</body>
<!--
 ____________
< Irkfap.com >
 ------------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
-->
</html>
