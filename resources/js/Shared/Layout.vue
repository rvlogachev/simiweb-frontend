<template>
  <div class="ii oz i_ uv">


    <header class="k ij tf mz hq pt po" x-data="{ top: true }"
            @scroll.window="top = window.pageYOffset > 10 ? false : true" :class="{ 'bg-white hj shadow-lg' : !top }">
      <div class="sc tj fc vs">
        <div class="ii un uo ia mr">

          <!-- Site branding -->
          <div class="s_ np">
            <!-- Logo -->
            <a class="block" href="" aria-label="Cruip">
              <svg class="iq if" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <radialGradient cx="21.152%" cy="86.063%" fx="21.152%" fy="86.063%" r="79.941%"
                                  id="header-logo">
                    <stop stop-color="#4FD1C5" offset="0%"></stop>
                    <stop stop-color="#81E6D9" offset="25.871%"></stop>
                    <stop stop-color="#338CF5" offset="100%"></stop>
                  </radialGradient>
                </defs>
                <rect width="32" height="32" rx="16" fill="url(#header-logo)" fill-rule="nonzero"></rect>
              </svg>
            </a>
          </div>

          <!-- Desktop navigation -->
          <nav class="me mh">

            <!-- Desktop menu links -->
            <ul class="ii sj ui ue un">
              <li>
                <a class="c_ pm fh ya fp ii un hq pn po" href="pricing.html">Pricing</a>
              </li>
              <li>
                <a class="c_ pm fh ya fp ii un hq pn po" href="about.html">About us</a>
              </li>
              <li>
                <a class="c_ pm fh ya fp ii un hq pn po" href="tutorials.html">Tutorials</a>
              </li>
              <li>
                <a class="c_ pm fh ya fp ii un hq pn po" href="blog.html">Blog</a>
              </li>
              <!-- 1st level: hover -->
              <li class="j" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <a class="c_ pm fh ya fp ii un hq pn po" href="#0" aria-haspopup="true"
                   :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="">
                  Resources
                  <svg class="iz il ft cj oy nd s_" viewBox="0 0 12 12"
                       xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.28 4.305L5.989 8.598 1.695 4.305A1 1 0 00.28 5.72l5 5a1 1 0 001.414 0l5-5a1 1 0 10-1.414-1.414z"></path>
                  </svg>
                </a>
                <!-- 2nd level: hover -->
                <ul class="sz _ te tt se bg-white fp nv uy shadow-lg" x-show="open"
                    x-transition:enter="hq pu pr om" x-transition:enter-start="hg ot"
                    x-transition:enter-end="hy on" x-transition:leave="hq pu pr"
                    x-transition:leave-start="hy" x-transition:leave-end="hg" x-cloak="">
                  <li>
                    <a class="cc cn c_ pm ii fp fc cg" href="documentation.html" @focus="open = true"
                       @focusout="open = false">Documentation</a>
                  </li>
                  <li>
                    <a class="cc cn c_ pm ii fp fc cg" href="support.html" @focus="open = true"
                       @focusout="open = false">Support center</a>
                  </li>
                  <li>
                    <a class="cc cn c_ pm ii fp fc cg" href="404.html" @focus="open = true"
                       @focusout="open = false">404</a>
                  </li>
                </ul>
              </li>
            </ul>

            <!-- Desktop sign in links -->
            <ul class="ii sj ui ue un">
              <li>
                <a class="cc c_ pm fc fd ii un hq pn po" href="signin.html">Sign in</a>
              </li>
              <li>
                <a class="r cq ao pf nm" href="signup.html">
                  <span>Sign up</span>
                  <svg class="iz il ft cj s_ ng ny" viewBox="0 0 12 12"
                       xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"
                          fill-rule="nonzero"></path>
                  </svg>
                </a>
              </li>
            </ul>

          </nav>

          <!-- Mobile menu -->
          <div class="ii mn" x-data="{ expanded: false }">

            <!-- Hamburger button -->
            <button class="l" :class="{ 'active': expanded }" @click.stop="expanded = !expanded"
                    aria-controls="mobile-nav" :aria-expanded="expanded">
              <span class="b">Menu</span>
              <svg class="st ic ft ck" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <rect y="4" width="24" height="2"></rect>
                <rect y="11" width="24" height="2"></rect>
                <rect y="18" width="24" height="2"></rect>
              </svg>
            </button>

            <!-- Mobile navigation -->
            <nav id="mobile-nav" class="_ te ih ln tl tn ij um bg-white" @click.outside="expanded = false"
                 @keydown.escape.window="expanded = false" x-show="expanded" x-transition:enter="hq pu pr om"
                 x-transition:enter-start="hg ot" x-transition:enter-end="hy on" x-transition:leave="hq pu pr"
                 x-transition:leave-start="hy" x-transition:leave-end="hg" x-cloak="">
              <ul class="fc fp">
                <li>
                  <a class="ii c_ pm fp" href="pricing.html">Pricing</a>
                </li>
                <li>
                  <a class="ii c_ pm fp" href="about.html">About us</a>
                </li>
                <li>
                  <a class="ii c_ pm fp" href="tutorials.html">Tutorials</a>
                </li>
                <li>
                  <a class="ii c_ pm fp" href="blog.html">Blog</a>
                </li>
                <li class="fp tq uq uz border-gray-200">
                  <span class="ii c_ pm fp">Resources</span>
                  <ul class="lr">
                    <li>
                      <a class="cn ii cc c_ pm fp" href="documentation.html">Documentation</a>
                    </li>
                    <li>
                      <a class="cn ii cc c_ pm fp" href="support.html">Support center</a>
                    </li>
                    <li>
                      <a class="cn ii cc c_ pm fp" href="404.html">404</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="ii cc ij c_ pm fp us" href="signin.html">Sign in</a>
                </li>
                <li>
                  <a class="r cq ao pf ij tq" href="signup.html">
                    <span>Sign up</span>
                    <svg class="iz il ft cj s_ ng ny" viewBox="0 0 12 12"
                         xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"
                            fill="#999" fill-rule="nonzero"></path>
                    </svg>
                  </a>
                </li>
              </ul>
            </nav>

          </div>

        </div>
      </div>
    </header>




      <slot />




    <footer>
      <div class="sc tj fv vs">

        <!-- Top area: Blocks -->
        <div class="io dz uu fm ge uq border-gray-200">

          <!-- 1st block -->
          <div class="dc gd">
            <div class="nk">
              <!-- Logo -->
              <a class="in" href="" aria-label="Cruip">
                <svg class="iq if" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                  <defs>
                    <radialGradient cx="21.152%" cy="86.063%" fx="21.152%" fy="86.063%" r="79.941%"
                                    id="footer-logo">
                      <stop stop-color="#4FD1C5" offset="0%"></stop>
                      <stop stop-color="#81E6D9" offset="25.871%"></stop>
                      <stop stop-color="#338CF5" offset="100%"></stop>
                    </radialGradient>
                  </defs>
                  <rect width="32" height="32" rx="16" fill="url(#footer-logo)"
                        fill-rule="nonzero"></rect>
                </svg>
              </a>
            </div>
            <div class="cn c_">
              <a class="c_ pm hq pn po" href="#0">Terms</a> · <a class="c_ pm hq pn po"
                                                                           href="#0">Privacy
              Policy</a>
            </div>
          </div>

          <!-- 2nd block -->
          <div class="dh vh gv">
            <h6 class="he cc nk">Products</h6>
            <ul class="cn">
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Web Studio</a>
              </li>
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">DynamicBox Flex</a>
              </li>
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Programming Forms</a>
              </li>
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Integrations</a>
              </li>
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Command-line</a>
              </li>
            </ul>
          </div>

          <!-- 3rd block -->
          <div class="dh vh gv">
            <h6 class="he cc nk">Resources</h6>
            <ul class="cn">
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Documentation</a>
              </li>
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Tutorials &amp; Guides</a>
              </li>
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Blog</a>
              </li>
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Support Center</a>
              </li>
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Partners</a>
              </li>
            </ul>
          </div>

          <!-- 4th block -->
          <div class="dh vh gv">
            <h6 class="he cc nk">Company</h6>
            <ul class="cn">
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Home</a>
              </li>
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">About us</a>
              </li>
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Company values</a>
              </li>
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Pricing</a>
              </li>
              <li class="nk">
                <a class="c_ pm hq pn po" href="#0">Privacy Policy</a>
              </li>
            </ul>
          </div>

          <!-- 5th block -->
          <div class="dh vh gd">
            <h6 class="he cc nk">Subscribe</h6>
            <p class="cn c_ nw">Get the latest news and articles to your inbox every month.</p>
            <form>
              <div class="ii ue nw">
                <div class="ij">
                  <label class="block cn b" for="newsletter">Email</label>
                  <div class="j ii un sp">
                    <input id="newsletter" type="email" class="s ij he fh fp lo cn"
                           placeholder="Your email" required="">
                    <button type="submit" class="_ z ts" aria-label="Subscribe">
                      <span class="_ z to sn n_ tq aa" aria-hidden="true"></span>
                      <svg class="iz il ft ht tz s_" viewBox="0 0 12 12"
                           xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"
                              fill-rule="nonzero"></path>
                      </svg>
                    </button>
                  </div>
                  <!-- Success message -->
                  <!-- <p class="mt-2 text-green-600 text-sm">Thanks for subscribing!</p> -->
                </div>
              </div>
            </form>
          </div>

        </div>

        <!-- Bottom area -->
        <div class="me mb mx fg gt uq border-gray-200">

          <!-- Social links -->
          <ul class="ii nw vc vy vb">
            <li>
              <a class="ii us un c_ pm bg-white hover--bg-white-100 ub shadow hq pn po" href="#0"
                 aria-label="Twitter">
                <svg class="iq if ft" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                  <path d="M24 11.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H8c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z"></path>
                </svg>
              </a>
            </li>
            <li class="nv">
              <a class="ii us un c_ pm bg-white hover--bg-white-100 ub shadow hq pn po" href="#0"
                 aria-label="Github">
                <svg class="iq if ft" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z"></path>
                </svg>
              </a>
            </li>
            <li class="nv">
              <a class="ii us un c_ pm bg-white hover--bg-white-100 ub shadow hq pn po" href="#0"
                 aria-label="Facebook">
                <svg class="iq if ft" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.023 24L14 17h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V14H21l-1 3h-2.72v7h-3.257z"></path>
                </svg>
              </a>
            </li>
          </ul>

          <!-- Copyrights note -->
          <div class="cn c_ np">© Cruip.com. All rights reserved.</div>

        </div>

      </div>
    </footer>

  </div>
</template>

<script>
import Dropdown from '@/Shared/Dropdown'
import FlashMessages from '@/Shared/FlashMessages'
import Icon from '@/Shared/Icon'
import Logo from '@/Shared/Logo'
import MainMenu from '@/Shared/MainMenu'

const page = "page";

export default {
  components: {
    Dropdown,
    FlashMessages,
    Icon,
    Logo,
    MainMenu,
  },
  data() {
    return {
      showUserMenu: false,
      accounts: null,
    }
  },
  methods: {
    url() {
      return location.pathname.substr(1)
    },
    hideDropdownMenus() {
      this.showUserMenu = false
    },
  },
}
</script>
