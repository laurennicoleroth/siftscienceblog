<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SiftScienceTheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="topnav" class="light">
	<a href="/" class="sift-brand">
		<svg class="color-logo">
			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-color-logo"></use>
		</svg>
		<svg class="color-hexagon">
			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-color-hexagon"></use>
		</svg>
		<svg class="monochrome-logo">
			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-monochrome-logo"></use>
		</svg>
    <svg class="monochrome-logo">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-monochrome-logo"></use>
    </svg>
		<svg class="monochrome-hexagon">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-monochrome-hexagon">
      </use>
    </svg>
    </a>
      <nav>
        <li>
          <span>Products</span>
          <div class="menu-dropdown">
            <a href="https://siftscience.com/chargebacks">Chargeback Prevention</a>
            <a href="https://siftscience.com/account-abuse">Account Abuse Prevention</a>
            <a href="https://siftscience.com/device-fingerprinting">Device Fingerprinting</a>
            <hr>
            <a href="https://siftscience.com/how-sift-works">How It Works</a>
          </div>
        </li>
        &nbsp;
        <li>
          <span>Industries</span>
          <div class="menu-dropdown">
            <a href="https://siftscience.com/digital-cash">Digital Cash</a>
            <a href="https://siftscience.com/e-commerce">E-Commerce</a>
            <a href="https://siftscience.com/on-demand">On Demand</a>
            <a href="https://siftscience.com/online-marketplace">Online Marketplace</a>
            <a href="https://siftscience.com/payment-gateway">Payment Gateway</a>
            <a href="https://siftscience.com/travel">Travel</a>
          </div>
        </li>&nbsp;<li>
        <span>pricing</span>
        <div class="menu-dropdown">
          <a href="https://siftscience.com/pricing#chargebacks">Chargeback Prevention</a>
          <a href="https://siftscience.com/pricing#account-abuse">Account Abuse Prevention</a>
          <a href="https://siftscience.com/device-fingerprinting#prices">Device Fingerprinting</a>
        </div>
      </li>
      &nbsp;
      <li>
        <a href="https://siftscience.com/case-studies">customers</a>
      </li>&nbsp;<li>
      <a href="https://siftscience.com/developers/overview">developers</a>
      <div class="menu-dropdown">
        <a href="https://siftscience.com/resources/guides">Integration Guides</a>
        <a href="https://siftscience.com/resources/tutorials">Tutorials</a>
        <a href="https://siftscience.com/developers/docs">API References</a>
        <a href="https://siftscience.com/developers/overview#client-libraries">Client Libraries</a>
      </div>
    </li>
    &nbsp;
    <li>
      <span>contact</span>
      <div class="menu-dropdown">
        <a href="https://siftscience.com/contact-sales">Contact Sales</a>
        <a href="https://siftscience.com/contact-support">Contact Support</a>
        <a href="https://siftscience.com/partners/sift-for-partners">For Partners</a>
        <a href="https://support.siftscience.com">Visit our Help Center</a>
      </div>
    </li>
  </nav>

  <div class="utility-nav">
    <span class="console-login">
      <span data-reactid=".0">
        <span data-reactid=".0.$=10">
          <a href="https://siftscience.com/contact-sales" class="request-demo" data-reactid=".0.$=10.0">
            <span class="SvgIcon envelope" data-reactid=".0.$=10.0.0">
              <svg class="icon-envelope">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-envelope"></use>
              </svg>
            </span>
            <span data-reactid=".0.$=10.0.1">Request demo</span>
          </a>
          <a href="https://siftscience.com/console/login" data-reactid=".0.$=10.1">log in</a>
          <a href="https://siftscience.com/signup" class="signup" data-reactid=".0.$=10.2">sign up</a>
        </span>
      </span>
    </span>
    <div class="veggieburger-wrap">
      <svg class="veggieburger">
        <rect y="0" width="24" height="4"></rect>
        <rect y="8" width="24" height="4"></rect>
        <rect y="16" width="24" height="4"></rect>
      </svg>
    </div>
  </div>

  <div class="mobile-menu">
    <div class="mobile-menu-container">
      <div class="menu-set">
        <h5>Products</h5>
        <ul>
          <li>
            <a href="https://siftscience.com/chargebacks">Chargeback Prevention</a>
          </li>
          <li>
            <a href="https://siftscience.com/account-abuse">Account Abuse Prevention</a>
          </li>
          <li>
            <a href="https://siftscience.com/device-fingerprinting">Device Fingerprinting</a>
          </li>
          <li>
            <a href="https://siftscience.com/how-sift-works">How It Works</a>
          </li>
        </ul>
      </div>
      <div class="menu-set">
        <h5>Pricing</h5>
        <ul>
          <li>
            <a href="https://siftscience.com/pricing#chargebacks">Chargeback Prevention</a>
          </li>
          <li>
            <a href="https://siftscience.com/pricing#account-abuse">Account Abuse Prevention</a>
          </li>
          <li>
            <a href="https://siftscience.com/device-fingerprinting#prices">Device Fingerprinting</a>
          </li>
        </ul>
      </div>
      <div class="menu-set">
        <h5>Industries</h5>
        <ul>
          <li>
            <a href="https://siftscience.com/digital-cash">Digital Cash</a>
          </li>
          <li>
            <a href="https://siftscience.com/e-commerce">E-Commerce</a>
          </li>
          <li>
            <a href="https://siftscience.com/on-demand">On Demand</a>
          </li>
          <li>
            <a href="https://siftscience.com/online-marketplace">Online Marketplace</a>
          </li>
          <li>
            <a href="https://siftscience.com/payment-gateway">Payment Gateway</a>
          </li>
          <li>
            <a href="https://siftscience.com/travel">Travel</a>
          </li>
        </ul>
      </div>

      <div class="menu-set">
        <h5>Customers</h5>
        <ul>
          <li>
            <a href="https://siftscience.com/case-studies">Case Studies</a>
          </li>
        </ul>
      </div>

      <div class="menu-set">
        <h5>Developers</h5>
        <ul>
          <li>
            <a href="https://siftscience.com/resources/guides">Integration Guides</a>
          </li>
          <li>
            <a href="https://siftscience.com/resources/tutorials">Tutorials</a>
          </li>
          <li>
            <a href="https://siftscience.com/developers/docs">API References</a>
          </li>
          <li>
            <a href="https://siftscience.com/developers/overview#client-libraries">Client Libraries</a>
          </li>
        </ul>
      </div>

      <div class="menu-set">
        <h5>Contact</h5>
        <ul>
          <li>
            <a href="https://siftscience.com/contact-sales">Contact Sales</a>
          </li>
          <li>
            <a href="https://siftscience.com/contact-support">Contact Support</a>
          </li>
          <li>
            <a href="https://siftscience.com/partners/sift-for-partners">For Partners</a>
          </li>
          <li>
            <a href="https://support.siftscience.com">Support Center</a>
          </li>
        </ul>
      </div>
      <hr>
      <div class="menu-set">
        <ul>
          <li>
            <a href="https://siftscience.com/about">About</a>
          </li>
          <li>
            <a href="https://siftscience.com/jobs">Jobs</a>
          </li>
        </ul>
      </div>

      <div class="menu-set">
        <ul>
          <li>
            <a href="http://blog.siftscience.com">Blog</a>
          </li>
          <li>
            <a href="mailto:info@siftscience.com">Email Us</a>
          </li>
        </ul>
      </div>

      <span class="console-login">
        <span data-reactid=".1">
          <span data-reactid=".1.$=10">
            <a href="https://siftscience.com/contact-sales" class="request-demo" data-reactid=".1.$=10.0">
              <span class="SvgIcon envelope" data-reactid=".1.$=10.0.0">
                <svg class="icon-envelope">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-envelope"></use>
                </svg>
              </span>
              <span data-reactid=".1.$=10.0.1">Request demo</span>
            </a>
            <a href="https://siftscience.com/console/login" data-reactid=".1.$=10.1">log in</a>
            <a href="https://siftscience.com/signup" class="signup" data-reactid=".1.$=10.2">sign up</a>
          </span>
        </span>
      </span>
    </div>
  </div>
</header>

<svg width="0" height="0" style="position:absolute">

    <symbol viewBox="0.3 0 21 19" id="icon-color-hexagon">
      <path fill="#F16B2E" d="M9.7 9.1l5.6-3.2L21 9.1v6.5l-5.7 3.2-5.6-3.2"></path>
      <path fill="#225165" d="M12.5 2.1L9.1.2 5.7 2.1v4L9.1 8l3.4-1.9"></path>
      <path fill="#26A9E0" d="M8.5 9.1L5.9 7.6 3.3 9.1V12l2.6 1.5L8.5 12"></path>
      <path fill="#F16B2E" d="M4.4 2.1L2.5 1 .6 2.1v2.2l1.9 1.2 1.9-1.2"></path>
    </symbol>

    <symbol viewBox="0 0 131 19" id="icon-color-logo">
      <path fill="#F16B2E" d="M9.4 9.1L15 5.9l5.7 3.2v6.5L15 18.8l-5.6-3.2"></path>
      <path fill="#225165" d="M12.2 2.1L8.8.2 5.4 2.1v4L8.8 8l3.4-1.9"></path>
      <path fill="#26A9E0" d="M8.2 9.1L5.6 7.6 3 9.1V12l2.6 1.5L8.2 12"></path>
      <g fill="#404041">
        <path d="M25.4 16.6l1.1-1.7c.8.8 2.3 1.5 3.7 1.5s2.2-.6 2.2-1.5c0-2.2-6.6-.6-6.6-4.8 0-1.8 1.5-3.3 4.3-3.3 1.9 0 3.3.7 4.3 1.5l-1 1.7c-.7-.8-1.9-1.3-3.3-1.3-1.3 0-2 .6-2 1.3 0 2 6.6.5 6.6 4.9 0 1.9-1.6 3.4-4.6 3.4-1.9 0-3.6-.6-4.7-1.7zM36.2 4.2c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5zm.3 13.8V7h2.4v11h-2.4zM42.3 18V9.1h-1.8V7h1.8v-.6c0-2.4 1.4-3.8 3.5-3.8 1 0 2 .2 2.6 1l-.9 1.5c-.3-.3-.7-.5-1.3-.5-.9 0-1.5.6-1.5 1.8V7h2.2v2.1h-2.2V18h-2.4z"></path>
        <path d="M48.7 15.5V9.1h-1.8V7h1.8V5.2l2.3-.8V7h2.2v2.1H51v5.8c0 .8.4 1.3 1 1.3.5 0 .9-.2 1.1-.4l.6 1.8c-.4.4-1.1.7-2.3.7-1.8 0-2.7-1-2.7-2.8zM58 16.6l1.1-1.7c.8.8 2.3 1.5 3.7 1.5 1.4 0 2.2-.6 2.2-1.5 0-2.2-6.6-.6-6.6-4.8 0-1.8 1.5-3.3 4.3-3.3 1.9 0 3.3.7 4.3 1.5L66 10c-.7-.8-1.9-1.3-3.3-1.3-1.3 0-2 .6-2 1.3 0 2 6.6.5 6.6 4.9 0 1.9-1.6 3.4-4.6 3.4-1.8 0-3.5-.6-4.7-1.7zM68.5 12.5c0-3.3 2.3-5.8 5.7-5.8 2.1 0 3.4.9 4.2 2l-1.6 1.5c-.6-.9-1.5-1.3-2.5-1.3-2 0-3.3 1.5-3.3 3.6s1.3 3.7 3.3 3.7c1.1 0 1.9-.5 2.5-1.3l1.6 1.5c-.8 1-2.1 2-4.2 2-3.4-.1-5.7-2.5-5.7-5.9zM79.6 4.2c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5zm.3 13.8V7h2.4v11h-2.4zM84.1 12.5c0-3.2 2.3-5.8 5.6-5.8s5.4 2.5 5.4 6v.6h-8.5c.2 1.7 1.4 3 3.5 3 1.1 0 2.3-.4 3.1-1.2l1.1 1.6c-1.1 1-2.7 1.6-4.5 1.6-3.2 0-5.7-2.3-5.7-5.8zm5.6-3.8c-2 0-3 1.6-3.1 2.9h6.2c-.1-1.3-.9-2.9-3.1-2.9zM104.3 18v-6.9c0-1.7-.9-2.3-2.2-2.3-1.2 0-2.3.7-2.8 1.5V18h-2.4V7h2.4v1.5c.7-.9 2.1-1.8 3.9-1.8 2.4 0 3.5 1.3 3.5 3.5V18h-2.4zM108.5 12.5c0-3.3 2.3-5.8 5.7-5.8 2.1 0 3.4.9 4.2 2l-1.6 1.5c-.6-.9-1.5-1.3-2.5-1.3-2 0-3.3 1.5-3.3 3.6s1.3 3.7 3.3 3.7c1.1 0 1.9-.5 2.5-1.3l1.6 1.5c-.8 1-2.1 2-4.2 2-3.3-.1-5.7-2.5-5.7-5.9zM119.3 12.5c0-3.2 2.3-5.8 5.6-5.8s5.4 2.5 5.4 6v.6h-8.5c.2 1.7 1.4 3 3.5 3 1.1 0 2.3-.4 3.1-1.2l1.1 1.6c-1.1 1-2.7 1.6-4.5 1.6-3.3 0-5.7-2.3-5.7-5.8zm5.5-3.8c-2 0-3 1.6-3.1 2.9h6.2c0-1.3-.9-2.9-3.1-2.9z"></path>
      </g>
      <path fill="#F16B2E" d="M4.1 2.1L2.2 1 .3 2.1v2.2l1.9 1.2 1.9-1.2"></path>
    </symbol>

    <symbol viewBox="0 0 21 19" id="icon-monochrome-hexagon">
      <path d="M9.4 9.1L15 5.9l5.7 3.2v6.5L15 18.8l-5.6-3.2M12.2 2.1L8.8.2 5.4 2.1v4L8.8 8l3.4-1.9M8.2 9.1L5.6 7.6 3 9.1V12l2.6 1.5L8.2 12M4.1 2.1L2.2 1 .3 2.1v2.2l1.9 1.2 1.9-1.2"></path>
    </symbol>

    <symbol viewBox="0 0 131 19" id="icon-monochrome-logo">
      <path d="M9.4 9.1L15 5.9l5.7 3.2v6.5L15 18.8l-5.6-3.2M12.2 2.1L8.8.2 5.4 2.1v4L8.8 8l3.4-1.9M8.2 9.1L5.6 7.6 3 9.1V12l2.6 1.5L8.2 12">
      </path>
      <g>
        <path d="M25.4 16.6l1.1-1.7c.8.8 2.3 1.5 3.7 1.5s2.2-.6 2.2-1.5c0-2.2-6.6-.6-6.6-4.8 0-1.8 1.5-3.3 4.3-3.3 1.9 0 3.3.7 4.3 1.5l-1 1.7c-.7-.8-1.9-1.3-3.3-1.3-1.3 0-2 .6-2 1.3 0 2 6.6.5 6.6 4.9 0 1.9-1.6 3.4-4.6 3.4-1.9 0-3.6-.6-4.7-1.7zM36.2 4.2c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5zm.3 13.8V7h2.4v11h-2.4zM42.3 18V9.1h-1.8V7h1.8v-.6c0-2.4 1.4-3.8 3.5-3.8 1 0 2 .2 2.6 1l-.9 1.5c-.3-.3-.7-.5-1.3-.5-.9 0-1.5.6-1.5 1.8V7h2.2v2.1h-2.2V18h-2.4z"></path>
        <path d="M48.7 15.5V9.1h-1.8V7h1.8V5.2l2.3-.8V7h2.2v2.1H51v5.8c0 .8.4 1.3 1 1.3.5 0 .9-.2 1.1-.4l.6 1.8c-.4.4-1.1.7-2.3.7-1.8 0-2.7-1-2.7-2.8zM58 16.6l1.1-1.7c.8.8 2.3 1.5 3.7 1.5 1.4 0 2.2-.6 2.2-1.5 0-2.2-6.6-.6-6.6-4.8 0-1.8 1.5-3.3 4.3-3.3 1.9 0 3.3.7 4.3 1.5L66 10c-.7-.8-1.9-1.3-3.3-1.3-1.3 0-2 .6-2 1.3 0 2 6.6.5 6.6 4.9 0 1.9-1.6 3.4-4.6 3.4-1.8 0-3.5-.6-4.7-1.7zM68.5 12.5c0-3.3 2.3-5.8 5.7-5.8 2.1 0 3.4.9 4.2 2l-1.6 1.5c-.6-.9-1.5-1.3-2.5-1.3-2 0-3.3 1.5-3.3 3.6s1.3 3.7 3.3 3.7c1.1 0 1.9-.5 2.5-1.3l1.6 1.5c-.8 1-2.1 2-4.2 2-3.4-.1-5.7-2.5-5.7-5.9zM79.6 4.2c0-.8.7-1.5 1.5-1.5s1.5.7 1.5 1.5-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5zm.3 13.8V7h2.4v11h-2.4zM84.1 12.5c0-3.2 2.3-5.8 5.6-5.8s5.4 2.5 5.4 6v.6h-8.5c.2 1.7 1.4 3 3.5 3 1.1 0 2.3-.4 3.1-1.2l1.1 1.6c-1.1 1-2.7 1.6-4.5 1.6-3.2 0-5.7-2.3-5.7-5.8zm5.6-3.8c-2 0-3 1.6-3.1 2.9h6.2c-.1-1.3-.9-2.9-3.1-2.9zM104.3 18v-6.9c0-1.7-.9-2.3-2.2-2.3-1.2 0-2.3.7-2.8 1.5V18h-2.4V7h2.4v1.5c.7-.9 2.1-1.8 3.9-1.8 2.4 0 3.5 1.3 3.5 3.5V18h-2.4zM108.5 12.5c0-3.3 2.3-5.8 5.7-5.8 2.1 0 3.4.9 4.2 2l-1.6 1.5c-.6-.9-1.5-1.3-2.5-1.3-2 0-3.3 1.5-3.3 3.6s1.3 3.7 3.3 3.7c1.1 0 1.9-.5 2.5-1.3l1.6 1.5c-.8 1-2.1 2-4.2 2-3.3-.1-5.7-2.5-5.7-5.9zM119.3 12.5c0-3.2 2.3-5.8 5.6-5.8s5.4 2.5 5.4 6v.6h-8.5c.2 1.7 1.4 3 3.5 3 1.1 0 2.3-.4 3.1-1.2l1.1 1.6c-1.1 1-2.7 1.6-4.5 1.6-3.3 0-5.7-2.3-5.7-5.8zm5.5-3.8c-2 0-3 1.6-3.1 2.9h6.2c0-1.3-.9-2.9-3.1-2.9z"></path>
      </g>
      <path d="M4.1 2.1L2.2 1 .3 2.1v2.2l1.9 1.2 1.9-1.2"></path>
    </symbol>

    <symbol viewBox="0 12 500 75" id="icon-footer-logo">
      <path fill="#F16B2E" d="M36.1 48.1l21.5-12.5 21.5 12.5V73L57.6 85.3 36.1 73"></path>
      <path fill="#618B9E" d="M46.7 21.2l-13.1-7.5-13 7.5v15.2l13 7.6 13.1-7.6"></path>
      <path fill="#26A9E0" d="M31.2 47.9l-9.7-5.8-9.9 5.8v11.3l9.9 5.8 9.7-5.8"></path>
      <g fill="#FFF">
        <path d="M97.2 76.7l4.1-6.5c3 3 8.8 6 14.2 6s8.2-2.4 8.2-5.6c0-8.2-25.4-2.4-25.4-18.5 0-6.9 6-12.7 16.4-12.7 7.1 0 12.5 2.4 16.4 6l-3.7 6.4c-2.6-2.8-7.3-5-12.5-5-4.9 0-7.9 2.2-7.9 5 0 7.5 25.4 1.9 25.4 18.7 0 7.5-6.2 13.1-17.6 13.1-6.6-.3-13.1-2.6-17.6-6.9zM138.5 29.4c0-3.2 2.6-5.6 5.6-5.6 3.2 0 5.6 2.4 5.6 5.6s-2.4 5.6-5.6 5.6c-3 0-5.6-2.6-5.6-5.6zm1.3 52.7v-42h9.2v42.1h-9.2zM162.1 82.1v-34h-6.9v-8h6.9v-2.4c0-9.2 5.2-14.6 13.3-14.6 3.7 0 7.5.9 10.1 3.7l-3.6 5.6c-1.3-1.1-2.8-1.9-4.9-1.9-3.6 0-5.8 2.4-5.8 7.1V40h8.6v8h-8.6v34h-9.1z"></path>
        <path d="M186.4 72.4V48.1h-6.9v-8h6.9V33l9.2-3v10.1h8.6v8h-8.6v22.1c0 2.8 1.3 5 3.9 5 1.7 0 3.4-.7 4.1-1.5l2.2 6.9c-1.7 1.5-4.3 2.6-8.6 2.6-7.1.1-10.8-3.9-10.8-10.8zM222.2 76.7l4.1-6.5c3 3 8.8 6 14.2 6 5.4 0 8.2-2.4 8.2-5.6 0-8.2-25.4-2.4-25.4-18.5 0-6.9 6-12.7 16.4-12.7 7.1 0 12.5 2.4 16.4 6l-3.7 6.4c-2.6-2.8-7.3-5-12.5-5-4.9 0-7.9 2.2-7.9 5 0 7.5 25.4 1.9 25.4 18.7 0 7.5-6.2 13.1-17.6 13.1-6.7-.3-13.3-2.6-17.6-6.9zM262.2 61c0-12.7 9-22.1 21.7-22.1 8.2 0 13.1 3.6 16.1 7.5l-6 5.6c-2.4-3.4-5.6-5-9.7-5-7.7 0-12.7 5.8-12.7 13.8 0 8.2 5 14 12.7 14 4.1 0 7.3-1.7 9.7-5l6 5.6c-3 3.9-7.9 7.5-16.1 7.5-12.7.4-21.7-9-21.7-21.9zM304.7 29.4c0-3.2 2.6-5.6 5.6-5.6 3.2 0 5.6 2.4 5.6 5.6s-2.6 5.6-5.6 5.6-5.6-2.6-5.6-5.6zm1.1 52.7v-42h9.2v42.1h-9.2zM322.1 61c0-12.1 8.8-22.1 21.3-22.1 12.7 0 20.7 9.7 20.7 22.8v2.4h-32.5c.7 6.4 5.4 11.6 13.5 11.6 4.1 0 9-1.7 12-4.7l4.1 6c-4.1 3.9-10.3 6.2-17 6.2-12.8.1-22.1-8.7-22.1-22.2zm21.3-14.4c-7.9 0-11.4 6-11.8 11.2h23.6c-.2-5-3.6-11.2-11.8-11.2zM399.3 82.1V55.8c0-6.5-3.4-8.8-8.4-8.8-4.7 0-8.8 2.8-10.8 5.6V82h-9.2V40.1h9.2v5.8c2.8-3.4 8.2-6.7 14.8-6.7 9 0 13.6 4.9 13.6 13.5v29.5h-9.2zM415.5 61c0-12.7 9-22.1 21.7-22.1 8.2 0 13.1 3.6 16.1 7.5l-6 5.6c-2.4-3.4-5.6-5-9.7-5-7.7 0-12.7 5.8-12.7 13.8 0 8.2 5 14 12.7 14 4.1 0 7.3-1.7 9.7-5l6 5.6c-3 3.9-7.9 7.5-16.1 7.5-12.7.4-21.7-9-21.7-21.9zM456.6 61c0-12.1 8.8-22.1 21.3-22.1 12.7 0 20.7 9.7 20.7 22.8v2.4h-32.5c.7 6.4 5.4 11.6 13.5 11.6 4.1 0 9-1.7 12-4.7l4.1 6c-4.1 3.9-10.3 6.2-17 6.2-12.7.1-22.1-8.7-22.1-22.2zm21.3-14.4c-7.9 0-11.4 6-11.8 11.2h23.6c-.2-5-3.5-11.2-11.8-11.2z"></path>
        </g>
        <path fill="#F16B2E" d="M15.7 21.2l-7.3-4.1-7.3 4.1v8.6l7.3 4.3 7.3-4.3"></path>
      </symbol>

      <symbol viewBox="0 0 21 15" id="icon-envelope">
        <path d="M.9 1.5c.6.3 8.3 5.1 8.6 5.2.3.2.7.3 1 .3.4 0 .7-.1 1-.3.3-.2 8-4.9 8.6-5.3.5-.3 1-1.4 0-1.4H.8c-1 0-.5 1.1.1 1.5zm19.5 2.6c-.6.4-8.5 5-8.9 5.2-.4.2-.7.3-1.1.3-.4 0-.7 0-1.1-.3C9 9.1 1.2 4.5.5 4.1c-.4-.2-.5.1-.5.3v9.5c0 .5.8 1.1 1.3 1.1h18.3c.5 0 1.4-.6 1.4-1.1V4.4c0-.2-.1-.5-.6-.3z"></path>
      </symbol>

      <symbol viewBox="0 0 42.2 48.7" id="icon-search">
        <path d="M23.1 8.3c-2-2.5-5-4-8.2-4-2.4 0-4.6.8-6.4 2.2-2.2 1.7-3.6 4.2-3.9 7S5 19 6.7 21.2c2 2.5 5 4 8.2 4 2.4 0 4.6-.8 6.4-2.2 4.6-3.6 5.4-10.2 1.8-14.7zm-3 13.1c-1.5 1.2-3.3 1.8-5.2 1.8-2.6 0-5-1.2-6.7-3.2C5.4 16.3 6 11 9.7 8.1c1.5-1.2 3.3-1.8 5.2-1.8 2.6 0 5 1.2 6.7 3.2 2.8 3.7 2.2 9-1.5 11.9z"></path>
        <path d="M41.5 40.6l-7.2-9.2c-.6-.8-1.6-1.3-2.7-1.3h-.4l-5.1-6.5c1.6-2.1 2.7-4.5 3-7.2.5-3.9-.6-7.7-3-10.8C23.3 2 19.1 0 14.6 0c-3.3 0-6.4 1.1-9 3.1-6.3 5-7.5 14.2-2.5 20.5 2.8 3.6 7 5.6 11.5 5.6 2.1 0 4.1-.4 6-1.3l4.9 6.2c-.3.4-.5.9-.6 1.5-.1.9.1 1.8.7 2.5l7.2 9.2c.6.8 1.6 1.3 2.7 1.3.8 0 1.5-.3 2.1-.7l3.3-2.6c1.5-1.1 1.8-3.2.6-4.7zM4.7 22.4C.4 16.9 1.4 9 6.8 4.7c2.3-1.8 5-2.7 7.8-2.7 3.9 0 7.5 1.8 9.9 4.8 2.1 2.7 3 6 2.6 9.3-.4 3.3-2.1 6.3-4.7 8.4-2.2 1.8-4.9 2.7-7.8 2.7-3.9 0-7.5-1.7-9.9-4.8zm18.9 3.7c.4-.3.8-.7 1.2-1l4.6 5.8-2.4 1.9-4.6-5.8 1.2-.9zm16.1 17.7l-3.3 2.6c-.6.5-1.5.3-1.9-.2L27.3 37c-.4-.5-.4-1.1 0-1.6l4-3.2c.1 0 .3-.1.4-.1.4 0 .8.2 1.1.5l7.2 9.2c.4.6.3 1.5-.3 2z"></path>
      </symbol>

      <symbol viewBox="0 0 17 30" id="icon-facebook">
        <path d="M16.8 5.2H12c-.6 0-1.2.7-1.2 1.7v3.4h6v4.9h-6V30H5.3V15.3H.2v-4.9h5.1V7.5C5.3 3.4 8.1 0 12.1 0h4.8v5.2z"></path>
      </symbol>

      <symbol viewBox="0 0 92.5 58.8" id="icon-g-plus">
        <title>Layer 1 copy</title>
        <path d="M.1 27.9c-1 12.4 7.2 24.5 18.7 28.9 11.4 4.4 26.1 1.4 33.4-8.9 4.8-6.5 5.9-14.9 5.3-22.7-9.4-.1-18.7-.1-28.1 0v10c5.6.2 11.2.1 16.8.2-2.5 12.4-19.4 16.4-28.3 8.3-9.2-7.1-8.7-22.7.8-29.3 6.7-5.3 16.2-4 22.9.6 2.6-2.4 5.1-5 7.4-7.7C43.5 2.8 36.6-.3 29.4 0 14.2-.5.3 12.8.1 27.9zM75.7 16.7c0 2.8-.1 5.6-.1 8.4-2.8 0-5.6 0-8.4.1v8.3c2.8 0 5.6.1 8.4.1 0 2.8 0 5.6.1 8.4h8.4c0-2.8 0-5.6.1-8.4 2.8 0 5.6 0 8.4-.1v-8.3c-2.8 0-5.6 0-8.4-.1 0-2.8 0-5.6-.1-8.4h-8.4z"></path>
        <path d="M.1 27.9C.3 12.8 14.2-.5 29.4 0 36.6-.3 43.5 2.8 49 7.3c-2.4 2.7-4.8 5.3-7.4 7.7-6.7-4.6-16.2-5.9-22.9-.6-9.6 6.6-10 22.2-.8 29.3 8.9 8.1 25.8 4.1 28.3-8.3-5.6-.1-11.2 0-16.8-.2v-10h28.1c.6 7.9-.5 16.2-5.3 22.7-7.3 10.3-22 13.3-33.4 8.9C7.2 52.4-.9 40.3.1 27.9zM75.7 16.7H84c0 2.8 0 5.6.1 8.4 2.8 0 5.6 0 8.4.1v8.3c-2.8 0-5.6 0-8.4.1 0 2.8 0 5.6-.1 8.4h-8.4c0-2.8 0-5.6-.1-8.4-2.8 0-5.6-.1-8.4-.1v-8.3c2.8 0 5.6 0 8.4-.1.2-2.8.2-5.6.2-8.4z"></path>
      </symbol>

      <symbol viewBox="0 0 30 25" id="icon-twitter">
        <path d="M30 3.2c-1.1.5-2.3.8-3.5 1 1.3-.8 2.2-2 2.7-3.4-1.2.7-2.5 1.2-3.9 1.5C24.2 1.1 22.6.4 20.8.4c-3.4 0-6.2 2.8-6.2 6.2 0 .5.1 1 .2 1.4-5.1-.4-9.7-2.8-12.7-6.6-.5.9-.8 2-.8 3.1 0 2.1 1.1 4 2.7 5.1-1 0-2-.3-2.8-.8v.1c0 3 2.1 5.5 4.9 6-.5.1-1.1.2-1.6.2-.4 0-.8 0-1.2-.1.8 2.4 3.1 4.2 5.7 4.3C7 21 4.4 22 1.5 22c-.5 0-1 0-1.5-.1 2.7 1.7 6 2.8 9.4 2.8 11.3 0 17.5-9.4 17.5-17.5v-.8c1.2-.9 2.3-2 3.1-3.2z"></path>
      </symbol>

      <symbol viewBox="0 0 30 30" id="icon-linked-in">
        <path d="M6.8 3.6c0 1.8-1.3 3.2-3.5 3.2-2 0-3.3-1.4-3.3-3.2C0 1.8 1.4.4 3.4.4c2.1 0 3.4 1.4 3.4 3.2zM.2 30V9.4h6.4V30H.2zM10.4 15.9c0-2.6-.1-4.7-.2-6.6h5.6l.3 2.9h.1c.8-1.4 2.9-3.3 6.4-3.3 4.2 0 7.4 2.8 7.4 8.9V30h-6.4V18.6c0-2.7-.9-4.5-3.2-4.5-1.8 0-2.8 1.2-3.3 2.4-.2.4-.2 1-.2 1.6V30h-6.4V15.9z"></path>
      </symbol>

      <symbol viewBox="0 0 92.5 58.8" id="icon-g-plus">
        <title>Layer 1 copy</title>
        <path d="M.1 27.9c-1 12.4 7.2 24.5 18.7 28.9 11.4 4.4 26.1 1.4 33.4-8.9 4.8-6.5 5.9-14.9 5.3-22.7-9.4-.1-18.7-.1-28.1 0v10c5.6.2 11.2.1 16.8.2-2.5 12.4-19.4 16.4-28.3 8.3-9.2-7.1-8.7-22.7.8-29.3 6.7-5.3 16.2-4 22.9.6 2.6-2.4 5.1-5 7.4-7.7C43.5 2.8 36.6-.3 29.4 0 14.2-.5.3 12.8.1 27.9zM75.7 16.7c0 2.8-.1 5.6-.1 8.4-2.8 0-5.6 0-8.4.1v8.3c2.8 0 5.6.1 8.4.1 0 2.8 0 5.6.1 8.4h8.4c0-2.8 0-5.6.1-8.4 2.8 0 5.6 0 8.4-.1v-8.3c-2.8 0-5.6 0-8.4-.1 0-2.8 0-5.6-.1-8.4h-8.4z"></path>
        <path d="M.1 27.9C.3 12.8 14.2-.5 29.4 0 36.6-.3 43.5 2.8 49 7.3c-2.4 2.7-4.8 5.3-7.4 7.7-6.7-4.6-16.2-5.9-22.9-.6-9.6 6.6-10 22.2-.8 29.3 8.9 8.1 25.8 4.1 28.3-8.3-5.6-.1-11.2 0-16.8-.2v-10h28.1c.6 7.9-.5 16.2-5.3 22.7-7.3 10.3-22 13.3-33.4 8.9C7.2 52.4-.9 40.3.1 27.9zM75.7 16.7H84c0 2.8 0 5.6.1 8.4 2.8 0 5.6 0 8.4.1v8.3c-2.8 0-5.6 0-8.4.1 0 2.8 0 5.6-.1 8.4h-8.4c0-2.8 0-5.6-.1-8.4-2.8 0-5.6-.1-8.4-.1v-8.3c2.8 0 5.6 0 8.4-.1.2-2.8.2-5.6.2-8.4z"></path>
      </symbol>
  </svg>

<?php if (!is_single() ) { ?>

<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div id="welcome" class="col-xs-12 col-sm-7 col-md-6">
          <h1>Welcome to Sift blog!</h1>
          <p class="site-description">Where online fraud fighting, engineering innovations, industry insights, and startup life come together.</p>
      </div>
      <div id="blog-lady" class="col-xs-12 col-sm-5 col-md-6">
        <img src="http://siftscienceblog.laurennicoleroth.com/wp-content/themes/siftsciencetheme/assets/img/blog-lady.svg"/>
      </div>
    </div>
  </div>
</div>

<div class="row" id="subnav">
  <div class="container">
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="/">All</a></li>
        <li><a href="/">Most Popular</a></li>
        <li><a href="/tag/fraud/">Fraud</a></li>
        <li><a href="/tag/engineering/">Engineering</a></li>
        <li><a href="/tag/commerce/">Commerce</a></li>
        <li><a href="/tag/tutorials/">Tutorials</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li id="search-glass"><img src="http://siftscienceblog.laurennicoleroth.com/wp-content/themes/siftsciencetheme/assets/img/searchglass.png"/></li>
        <li><a href="https://siftscience.com/signup" class="register">Newsletter Sign Up</a></li>
      </ul>
    </div>
  </div>
</div>

<?php } ?>


