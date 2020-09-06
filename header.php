<?php
if(!defined('signup'))
{
  header("Location: ../Project/Sherlock-webpage/Main.html");
  exit();
}
else {
  header("Location: ../Project/Sherlock-webpage/temp.html");
  exit();
}
?>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
  <rect width="100%" height="100%" fill="#E7E7E8"/>
  <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/9473/a.svg" width="100%" height="100%" />
</svg>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink">
  <defs>
    <clipPath id="mask">
      <circle id="mask-circle" cx="50%" cy="50%" r="8%" style="fill: #ffffff"/>
    </clipPath>
  </defs>
  <g clip-path="url(#mask)">
    <rect width="100%" height="100%" fill="#272730"/>
    <image xmlns:xlink= "http://www.w3.org/1999/xlink" xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/9473/b.svg" width="100%" height="100%" />
  </g>
  <circle id="circle-shadow" cx="50%" cy="50%" r="8%" style="stroke: #fff; fill: transparent; stroke-width: 5;" />
</svg>

<div>
  SVG <del>Masking</del> <ins>clip-path</ins> Experiment.<br/>
  <span>Move your mouse/finger over the image.</span>
</div>

<a href="https://twitter.com/pixelia_me" target="_blank">@pixelia_me</a>
