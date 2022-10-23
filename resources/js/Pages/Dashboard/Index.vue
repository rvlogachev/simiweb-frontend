<template>
  <main class="sj">
    <!-- Hero -->
    <section class="j">

      <!-- Illustration behind hero content -->
      <div class="_ tr om or ti w tc" aria-hidden="true">
        <svg width="1360" height="578" viewBox="0 0 1360 578" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="illustration-01">
              <stop stop-color="#FFF" offset="0%"></stop>
              <stop stop-color="#EAEAEA" offset="77.402%"></stop>
              <stop stop-color="#DFDFDF" offset="100%"></stop>
            </linearGradient>
          </defs>
          <g fill="url(#illustration-01)" fill-rule="evenodd">
            <circle cx="1232" cy="128" r="128"></circle>
            <circle cx="155" cy="443" r="64"></circle>
          </g>
        </svg>
      </div>

      <div class="sc tj fv vs">

        <!-- Hero content -->
        <div class="li ls gs go">

          <!-- Section header -->
          <div class="ce ls gu">
            <h1 class="co gp cd cb cx nw" data-aos="zoom-y-out">Make your website <span
                    class="fe hu ag ab aj">wonderful</span></h1>
            <div class="sh tj">
              <p class="cr c_ nz" data-aos="zoom-y-out" data-aos-delay="150">Our landing page template
                works on all devices, so you only have to set it up once, and get beautiful results
                forever.</p>
              <div class="sp tj dj db vr" data-aos="zoom-y-out" data-aos-delay="300">
                <div>
                  <a class="n cz au pl ij nw dx dv" href="#0">Start free trial</a>
                </div>
                <div>
                  <a class="n cz ao pf ij dx dg" href="#0">Learn more</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Hero image -->
          <div x-data="{ modalExpanded: false }">
            <div class="j ii us nz" data-aos="zoom-y-out" data-aos-delay="450">
              <div class="ii oz us">
                <img class="tj uy hx" src="assets/inertia/images/hero-image-01.png" width="768" height="432"
                     alt="Hero">
                <svg class="_ z sm tj mf ip" width="768" height="432" viewBox="0 0 768 432"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs>
                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="hero-ill-a">
                      <stop stop-color="#FFF" offset="0%"></stop>
                      <stop stop-color="#EAEAEA" offset="77.402%"></stop>
                      <stop stop-color="#DFDFDF" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient x1="50%" y1="0%" x2="50%" y2="99.24%" id="hero-ill-b">
                      <stop stop-color="#FFF" offset="0%"></stop>
                      <stop stop-color="#EAEAEA" offset="48.57%"></stop>
                      <stop stop-color="#DFDFDF" stop-opacity="0" offset="100%"></stop>
                    </linearGradient>
                    <radialGradient cx="21.152%" cy="86.063%" fx="21.152%" fy="86.063%" r="79.941%"
                                    id="hero-ill-e">
                      <stop stop-color="#4FD1C5" offset="0%"></stop>
                      <stop stop-color="#81E6D9" offset="25.871%"></stop>
                      <stop stop-color="#338CF5" offset="100%"></stop>
                    </radialGradient>
                    <circle id="hero-ill-d" cx="384" cy="216" r="64"></circle>
                  </defs>
                  <g fill="none" fill-rule="evenodd">
                    <circle fill-opacity=".04" fill="url(#hero-ill-a)" cx="384" cy="216"
                            r="128"></circle>
                    <circle fill-opacity=".16" fill="url(#hero-ill-b)" cx="384" cy="216"
                            r="96"></circle>
                    <g fill-rule="nonzero">
                      <use fill="#000" xlink:href="#hero-ill-d"></use>
                      <use fill="url(#hero-ill-e)" xlink:href="#hero-ill-d"></use>
                    </g>
                  </g>
                </svg>
              </div>
              <button class="_ te ii un om oi bg-white ub cc df fi shadow-lg"
                      @click.prevent="modalExpanded = true" aria-controls="modal">
                <svg class="st ic ft cj dl s_" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zm0 2C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12z"></path>
                  <path d="M10 17l6-5-6-5z"></path>
                </svg>
                <span class="nm">Watch the full video (2 min)</span>
              </button>
            </div>

            <!-- Modal backdrop -->
            <div class="k z th bg-white av hz hj" x-show="modalExpanded" x-transition:enter="hq pu pr"
                 x-transition:enter-start="hg" x-transition:enter-end="hy" x-transition:leave="hq pu pi"
                 x-transition:leave-start="hy" x-transition:leave-end="hg" aria-hidden="true"
                 x-cloak=""></div>

            <!-- Modal dialog -->
            <div id="modal" class="k z th uv ii un us om fv vs" role="dialog" aria-modal="true"
                 aria-labelledby="modal-headline" x-show="modalExpanded" x-transition:enter="hq pu pr"
                 x-transition:enter-start="hg op" x-transition:enter-end="hy od"
                 x-transition:leave="hq pu pr" x-transition:leave-start="hy od"
                 x-transition:leave-end="hg op" x-cloak="">
              <div class="bg-white ud sc ij ik" @click.outside="modalExpanded = false"
                   @keydown.escape.window="modalExpanded = false">
                <div class="j lv">
                  <iframe class="_ ij ib" src="https://www.youtube.com/embed/qz4F1uMzihY"
                          title="Video" webkitallowfullscreen="" mozallowfullscreen=""
                          allowfullscreen=""></iframe>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- Features -->
    <section class="j">

      <!-- Section background (needs .relative class on parent and next sibling elements) -->
      <div class="_ z af w rh" aria-hidden="true"></div>
      <div class="_ tn tt tw sn fu iw bg-gray-200 om oi"></div>

      <div class="j sc tj fv vs">
        <div class="lm ga">

          <!-- Section header -->
          <div class="sh tj ce ls gu">
            <h1 class="h2 nw">How Simple works</h1>
            <p class="cr c_">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
          </div>

          <!-- Top image -->
          <div class="ls gu">
            <img src="assets/inertia/images/features-top-image.png" width="1104" height="325" alt="Features top">
          </div>

          <!-- Section content -->
          <div class="mt mm m_" x-data="{ tab: '1' }">

            <!-- Content -->
            <div class="sy mf mo tj vp gm v_">
              <div class="gl yf yv nz">
                <h3 class="h3 nq">Powerful suite of tools</h3>
                <p class="cr c_">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                  dolore pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
              </div>
              <!-- Tabs buttons -->
              <div class="nz vb">
                <button :class="tab !== '1' ? 'bg-white shadow-md border-gray-200 py' : 'bg-gray-200 border-transparent'"
                        class="lz ii un ci fa uy uk hq pt po nq" @click.prevent="" @click="tab = '1'">
                  <div>
                    <div class="ch cy cw re">Building the Simple ecosystem</div>
                    <div class="c_">Take collaboration to the next level with security and
                      administrative features built for teams.
                    </div>
                  </div>
                  <div class="ii us un iq if bg-white ub shadow s_ nm">
                    <svg class="iz il ft" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.953 4.29a.5.5 0 00-.454-.292H6.14L6.984.62A.5.5 0 006.12.173l-6 7a.5.5 0 00.379.825h5.359l-.844 3.38a.5.5 0 00.864.445l6-7a.5.5 0 00.075-.534z"></path>
                    </svg>
                  </div>
                </button>
                <button :class="tab !== '2' ? 'bg-white shadow-md border-gray-200 py' : 'bg-gray-200 border-transparent'"
                        class="lz ii un ci fa uy uk hq pt po nq" @click.prevent="" @click="tab = '2'">
                  <div>
                    <div class="ch cy cw re">Building the Simple ecosystem</div>
                    <div class="c_">Take collaboration to the next level with security and
                      administrative features built for teams.
                    </div>
                  </div>
                  <div class="ii us un iq if bg-white ub shadow s_ nm">
                    <svg class="iz il ft" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z"
                            fill-rule="nonzero"></path>
                    </svg>
                  </div>
                </button>
                <button :class="tab !== '3' ? 'bg-white shadow-md border-gray-200 py' : 'bg-gray-200 border-transparent'"
                        class="lz ii un ci fa uy uk hq pt po" @click.prevent="" @click="tab = '3'">
                  <div>
                    <div class="ch cy cw re">Building the Simple ecosystem</div>
                    <div class="c_">Take collaboration to the next level with security and
                      administrative features built for teams.
                    </div>
                  </div>
                  <div class="ii us un iq if bg-white ub shadow s_ nm">
                    <svg class="iz il ft" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.334 8.06a.5.5 0 00-.421-.237 6.023 6.023 0 01-5.905-6c0-.41.042-.82.125-1.221a.5.5 0 00-.614-.586 6 6 0 106.832 8.529.5.5 0 00-.017-.485z"
                            fill="#191919" fill-rule="nonzero"></path>
                    </svg>
                  </div>
                </button>
              </div>
            </div>

            <!-- Tabs items -->
            <div class="sy mf mo tj vd gm nz vb vc" data-aos="zoom-y-out">
              <div class="j ii oz ce yc">
                <!-- Item 1 -->
                <div class="ij" x-show="tab === '1'" x-transition:enter="hq po ps om td"
                     x-transition:enter-start="hg os" x-transition:enter-end="hy on"
                     x-transition:leave="hq po pt om _" x-transition:leave-start="hy on"
                     x-transition:leave-end="hg oo">
                  <div class="j is oz">
                    <img class="mf tj uy" src="assets/inertia/images/features-home-bg-01.png" width="500"
                         height="375" alt="Features bg">
                    <img class="mf _ ij tn om og" src="assets/inertia/images/features-home-element-01.png"
                         width="500" height="147" alt="Element 01" style="top:22%">
                    <img class="mf _ ij tn om og v" src="assets/inertia/images/features-home-element-02.png"
                         width="500" height="158" alt="Element 02" style="top:39%">
                    <img class="mf _ ij tn ti om og m" src="assets/inertia/images/features-home-element-03.png"
                         width="500" height="167" alt="Element 03" style="top:77%">
                  </div>
                </div>
                <!-- Item 2 -->
                <div class="ij" x-show="tab === '2'" x-transition:enter="hq po ps om td"
                     x-transition:enter-start="hg os" x-transition:enter-end="hy on"
                     x-transition:leave="hq po pt om _" x-transition:leave-start="hy on"
                     x-transition:leave-end="hg oo">
                  <div class="j is oz">
                    <img class="mf tj uy" src="assets/inertia/images/features-home-bg-01.png" width="500"
                         height="375" alt="Features bg">
                    <img class="mf _ ij tn ti om og m" src="assets/inertia/images/features-home-element-03.png"
                         width="500" height="167" alt="Element 03" style="top:18%">
                    <img class="mf _ ij tn om og v" src="assets/inertia/images/features-home-element-02.png"
                         width="500" height="158" alt="Element 02" style="top:40%">
                    <img class="mf _ ij tn om og" src="assets/inertia/images/features-home-element-01.png"
                         width="500" height="147" alt="Element 01" style="top:79%">
                  </div>
                </div>
                <!-- Item 3 -->
                <div class="ij" x-show="tab === '3'" x-transition:enter="hq po ps om td"
                     x-transition:enter-start="hg os" x-transition:enter-end="hy on"
                     x-transition:leave="hq po pt om _" x-transition:leave-start="hy on"
                     x-transition:leave-end="hg oo">
                  <div class="j is oz">
                    <img class="mf tj uy" src="assets/inertia/images/features-home-bg-01.png" width="500"
                         height="375" alt="Features bg">
                    <img class="mf _ ij tn om og" src="assets/inertia/images/features-home-element-01.png"
                         width="500" height="147" alt="Element 01" style="top:22%">
                    <img class="mf _ ij tn om og v" src="assets/inertia/images/features-home-element-02.png"
                         width="500" height="158" alt="Element 02" style="top:39%">
                    <img class="mf _ ij tn ti om og m" src="assets/inertia/images/features-home-element-03.png"
                         width="500" height="167" alt="Element 03" style="top:77%">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- Features blocks -->
    <section class="j">

      <!-- Section background (needs .relative class on parent and next sibling elements) -->
      <div class="_ z tu vj g_ ao w" aria-hidden="true"></div>
      <div class="_ tn tt ti tw sn fu iw bg-gray-200 om ou"></div>

      <div class="j sc tj fv vs">
        <div class="fy gn">

          <!-- Section header -->
          <div class="sh tj ce ls go">
            <h2 class="h2 nw">Explore the solutions</h2>
            <p class="cr c_">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
          </div>

          <!-- Items -->
          <div class="sg tj io ua mv yi ut ma yt">

            <!-- 1st item -->
            <div class="j ii oz un fs bg-white uy hx">
              <svg class="si ia ff rp nk" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                  <rect class="ft ht" width="64" height="64" rx="32"></rect>
                  <g stroke-width="2">
                    <path class="fn hr"
                          d="M34.514 35.429l2.057 2.285h8M20.571 26.286h5.715l2.057 2.285"></path>
                    <path class="fn cz" d="M20.571 37.714h5.715L36.57 26.286h8"></path>
                    <path class="fn hr" stroke-linecap="square"
                          d="M41.143 34.286l3.428 3.428-3.428 3.429"></path>
                    <path class="fn cz" stroke-linecap="square"
                          d="M41.143 29.714l3.428-3.428-3.428-3.429"></path>
                  </g>
                </g>
              </svg>
              <h4 class="cr ch cy cw re">Headless CMS</h4>
              <p class="c_ ce">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <!-- 2nd item -->
            <div class="j ii oz un fs bg-white uy hx">
              <svg class="si ia ff rp nk" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                  <rect class="ft ht" width="64" height="64" rx="32"></rect>
                  <g stroke-width="2" transform="translate(19.429 20.571)">
                    <circle class="fn cz" stroke-linecap="square" cx="12.571" cy="12.571"
                            r="1.143"></circle>
                    <path class="fn cz"
                          d="M19.153 23.267c3.59-2.213 5.99-6.169 5.99-10.696C25.143 5.63 19.514 0 12.57 0 5.63 0 0 5.629 0 12.571c0 4.527 2.4 8.483 5.99 10.696"></path>
                    <path class="fn hr"
                          d="M16.161 18.406a6.848 6.848 0 003.268-5.835 6.857 6.857 0 00-6.858-6.857 6.857 6.857 0 00-6.857 6.857 6.848 6.848 0 003.268 5.835"></path>
                  </g>
                </g>
              </svg>
              <h4 class="cr ch cy cw re">Headless CMS</h4>
              <p class="c_ ce">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <!-- 3rd item -->
            <div class="j ii oz un fs bg-white uy hx">
              <svg class="si ia ff rp nk" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                  <rect class="ft ht" width="64" height="64" rx="32"></rect>
                  <g stroke-width="2">
                    <path class="fn hr"
                          d="M34.743 29.714L36.57 32 27.43 43.429H24M24 20.571h3.429l1.828 2.286"></path>
                    <path class="fn cz" stroke-linecap="square"
                          d="M34.743 41.143l1.828 2.286H40M40 20.571h-3.429L27.43 32l1.828 2.286"></path>
                    <path class="fn hr" d="M36.571 32H40"></path>
                    <path class="fn cz" d="M24 32h3.429" stroke-linecap="square"></path>
                  </g>
                </g>
              </svg>
              <h4 class="cr ch cy cw re">Headless CMS</h4>
              <p class="c_ ce">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <!-- 4th item -->
            <div class="j ii oz un fs bg-white uy hx">
              <svg class="si ia ff rp nk" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                  <rect class="ft ht" width="64" height="64" rx="32"></rect>
                  <g stroke-width="2">
                    <path class="fn cz"
                          d="M32 37.714A5.714 5.714 0 0037.714 32a5.714 5.714 0 005.715 5.714"></path>
                    <path class="fn cz"
                          d="M32 37.714a5.714 5.714 0 015.714 5.715 5.714 5.714 0 015.715-5.715M20.571 26.286a5.714 5.714 0 005.715-5.715A5.714 5.714 0 0032 26.286"></path>
                    <path class="fn cz"
                          d="M20.571 26.286A5.714 5.714 0 0126.286 32 5.714 5.714 0 0132 26.286"></path>
                    <path class="fn hr"
                          d="M21.714 40h4.572M24 37.714v4.572M37.714 24h4.572M40 21.714v4.572"
                          stroke-linecap="square"></path>
                  </g>
                </g>
              </svg>
              <h4 class="cr ch cy cw re">Headless CMS</h4>
              <p class="c_ ce">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <!-- 5th item -->
            <div class="j ii oz un fs bg-white uy hx">
              <svg class="si ia ff rp nk" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                  <rect class="ft ht" width="64" height="64" rx="32"></rect>
                  <g stroke-width="2">
                    <path class="fn cz"
                          d="M19.429 32a12.571 12.571 0 0021.46 8.89L23.111 23.11A12.528 12.528 0 0019.429 32z"></path>
                    <path class="fn hr"
                          d="M32 19.429c6.943 0 12.571 5.628 12.571 12.571M32 24a8 8 0 018 8"></path>
                    <path class="fn cz" d="M34.286 29.714L32 32"></path>
                  </g>
                </g>
              </svg>
              <h4 class="cr ch cy cw re">Headless CMS</h4>
              <p class="c_ ce">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <!-- 6th item -->
            <div class="j ii oz un fs bg-white uy hx">
              <svg class="si ia ff rp nk" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                  <rect class="ft ht" width="64" height="64" rx="32"></rect>
                  <g stroke-width="2" stroke-linecap="square">
                    <path class="fn cz"
                          d="M29.714 40.358l-4.777 2.51 1.349-7.865-5.715-5.57 7.898-1.147L32 21.13l3.531 7.155 7.898 1.147L40 32.775"></path>
                    <path class="fn hr" d="M44.571 43.429H34.286M44.571 37.714H34.286"></path>
                  </g>
                </g>
              </svg>
              <h4 class="cr ch cy cw re">Headless CMS</h4>
              <p class="c_ ce">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- Features world -->
    <section>
      <div class="sc tj fv vs">
        <div class="fy gn">

          <!-- Section header -->
          <div class="sh tj ce ls gu">
            <h1 class="h2 nw">Simple can help you scale internationally</h1>
            <p class="cr c_">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
          </div>

          <!-- World illustration -->
          <div class="ii oz un lm gc">
            <div class="j">
              <!-- Halo effect -->
              <svg class="_ z tr tu om or oi w" width="800" height="800" viewBox="0 0 800 800"
                   style="max-width: 200%;" xmlns="http://www.w3.org/2000/svg">
                <g class="ft cj hb">
                  <circle class="c" cx="400" cy="400" r="200"></circle>
                  <circle class="c p" cx="400" cy="400" r="200"></circle>
                  <circle class="c d" cx="400" cy="400" r="200"></circle>
                </g>
              </svg>
              <!-- Globe image -->
              <img class="j ub hx" src="assets/inertia/images/planet.png" width="400" height="400" alt="Planet">
              <!-- Static dots -->
              <svg class="_ ta ij ip" viewBox="0 0 400 400" style="left: 12%;"
                   xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <filter x="-41.7%" y="-34.2%" width="183.3%" height="185.6%"
                          filterUnits="objectBoundingBox" id="world-ill-a">
                    <feOffset dy="4" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                    <feGaussianBlur stdDeviation="6" in="shadowOffsetOuter1"
                                    result="shadowBlurOuter1"></feGaussianBlur>
                    <feColorMatrix
                            values="0 0 0 0 0 0 0 0 0 0.439215686 0 0 0 0 0.956862745 0 0 0 0.32 0"
                            in="shadowBlurOuter1"></feColorMatrix>
                  </filter>
                  <filter x="-83.3%" y="-68.5%" width="266.7%" height="271.2%"
                          filterUnits="objectBoundingBox" id="world-ill-c">
                    <feOffset dy="4" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
                    <feGaussianBlur stdDeviation="6" in="shadowOffsetOuter1"
                                    result="shadowBlurOuter1"></feGaussianBlur>
                    <feColorMatrix
                            values="0 0 0 0 0 0 0 0 0 0.439215686 0 0 0 0 0.956862745 0 0 0 0.32 0"
                            in="shadowBlurOuter1"></feColorMatrix>
                  </filter>
                  <filter x="-7.3%" y="-23.8%" width="114.5%" height="147.6%"
                          filterUnits="objectBoundingBox" id="world-ill-e">
                    <feGaussianBlur stdDeviation="2" in="SourceGraphic"></feGaussianBlur>
                  </filter>
                  <ellipse id="world-ill-b" cx="51" cy="175.402" rx="24" ry="23.364"></ellipse>
                  <ellipse id="world-ill-d" cx="246" cy="256.201" rx="12" ry="11.682"></ellipse>
                  <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="world-ill-f">
                    <stop stop-color="#0070F4" stop-opacity="0" offset="0%"></stop>
                    <stop stop-color="#0070F4" stop-opacity=".64" offset="52.449%"></stop>
                    <stop stop-color="#0070F4" stop-opacity="0" offset="100%"></stop>
                  </linearGradient>
                </defs>
                <g transform="translate(0 -.818)" fill="none" fill-rule="evenodd">
                  <use fill="#000" filter="url(#world-ill-a)" xlink:href="#world-ill-b"></use>
                  <use fill="#0070F4" xlink:href="#world-ill-b"></use>
                  <use fill="#000" filter="url(#world-ill-c)" xlink:href="#world-ill-d"></use>
                  <use fill="#0070F4" xlink:href="#world-ill-d"></use>
                  <ellipse fill-opacity=".32" fill="#0070F4" cx="293" cy="142.303" rx="8"
                           ry="7.788"></ellipse>
                  <ellipse fill-opacity=".64" fill="#0070F4" cx="250" cy="187.083" rx="6"
                           ry="5.841"></ellipse>
                  <ellipse fill-opacity=".64" fill="#0070F4" cx="13" cy="233.811" rx="2"
                           ry="1.947"></ellipse>
                  <ellipse fill="#0070F4" cx="29" cy="114.072" rx="2" ry="1.947"></ellipse>
                  <path d="M258 256.2l87-29.204" stroke="#666" stroke-width="2" opacity=".16"
                        filter="url(#world-ill-e)"></path>
                  <path d="M258 251.333c111.333-40.237 141-75.282 89-105.136M136 103.364c66.667 4.543 104.667 32.45 114 83.72"
                        stroke="url(#world-ill-f)" stroke-width="2" stroke-dasharray="2"></path>
                </g>
              </svg>
              <!-- Dynamic dots -->
              <svg class="_ sm" width="48" height="48" viewBox="0 0 48 48"
                   style="width: 12%;top: 45%; left: 50%;" xmlns="http://www.w3.org/2000/svg">
                <g class="ft ht">
                  <circle class="c h p" cx="24" cy="24" r="8"></circle>
                  <circle class="c h d" cx="24" cy="24" r="8"></circle>
                  <circle cx="24" cy="24" r="8"></circle>
                </g>
              </svg>
              <svg class="_ sm" width="48" height="48" viewBox="0 0 48 48"
                   style="width: 12%;top: 19%; left: 46%;" xmlns="http://www.w3.org/2000/svg">
                <g class="ft ht">
                  <circle class="c h" cx="24" cy="24" r="8"></circle>
                  <circle class="c h d" cx="24" cy="24" r="8"></circle>
                  <circle cx="24" cy="24" r="8"></circle>
                </g>
              </svg>
              <!-- Avatars -->
              <img class="_ sm om og" src="assets/inertia/images/planet-avatar-01.png" width="261" height="105"
                   alt="Planet avatar 01" style="width: 65.25%; top: -3%; right: -27%;">
              <img class="_ sm om og m" src="assets/inertia/images/planet-avatar-02.png" width="355" height="173"
                   alt="Planet avatar 02" style="width: 88.7%; bottom: -20%; right: -18%;">
              <!-- Black icon -->
              <svg class="_ ta sm sa ip ub hx" viewBox="0 0 80 80" style="width: 20%; left: 6%;"
                   xmlns="http://www.w3.org/2000/svg">
                <circle class="ft he" cx="40" cy="40" r="40"></circle>
                <path class="fn cz"
                      d="M30.19 41.221c7.074 3.299 12.957-4.7 20.03-1.401l1.769.824-1.419-3.883M43.988 50.877l3.887-1.41-1.769-.824c-2.19-1.021-3.475-2.651-4.42-4.512M38.724 36.91c-.944-1.86-2.23-3.49-4.42-4.512"
                      stroke-linecap="square" stroke-width="2"></path>
              </svg>
              <!-- Blue icon -->
              <svg class="_ sm si ip ub hx" viewBox="0 0 64 64" style="width: 16%; top: 32%; left: -27%;"
                   xmlns="http://www.w3.org/2000/svg">
                <circle class="ft ht" cx="32" cy="32" r="32"></circle>
                <path class="fn cz" d="M20.733 31.416l18.127-8.452M43.039 31.926L24.913 40.38"
                      stroke-width="2" fill="none"></path>
                <path class="fn cz" stroke-linecap="square"
                      d="M32.238 20.595l6.622 2.369-2.442 6.594M31.534 42.747l-6.621-2.368 2.442-6.595"
                      stroke-width="2" fill="none"></path>
              </svg>
              <!-- White icon -->
              <svg class="_ sm si ip ub hx" viewBox="0 0 64 64" style="width: 16%; top: 55%; right: -16%;"
                   xmlns="http://www.w3.org/2000/svg">
                <circle class="ft ha" fill="#FBFBFB" cx="32" cy="32" r="32"></circle>
                <path class="ft hf"
                      d="M37.11 32.44l-1.69 4.646-8.458-3.078.676-1.859-4.773 1.42 2.744 4.156.677-1.858 9.396 3.42a.994.994 0 001.278-.587l2.03-5.576-1.88-.684zM27.037 30.878l1.691-4.646 8.457 3.078-.676 1.858 4.773-1.42-2.744-4.155-.676 1.858-9.397-3.42a.994.994 0 00-1.278.587l-2.03 5.576 1.88.684z"></path>
              </svg>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- News -->
    <section>
      <div class="sc tj fv vs">
        <div class="fy gn">

          <!-- Section header -->
          <div class="sh tj ce ls go">
            <h2 class="h2">The most innovative businesses choose Simple</h2>
          </div>

          <!-- Categories -->
          <div class="rd vq">
            <ul class="ii ue us cn cc tb">
              <li class="tx">
                <a class="is ce ha fp fv ub au pl hq pn po" href="#0">Developers</a>
              </li>
              <li class="tx">
                <a class="is ce he fp fv ub bg-white ph hk hq pn po" href="#0">SaaS</a>
              </li>
              <li class="tx">
                <a class="is ce he fp fv ub bg-white ph hk hq pn po" href="#0">Web
                  Agencies</a>
              </li>
              <li class="tx">
                <a class="is ce he fp fv ub bg-white ph hk hq pn po" href="#0">E-Commerce</a>
              </li>
              <li class="tx">
                <a class="is ce he fp fv ub bg-white ph hk hq pn po" href="#0">Startups</a>
              </li>
            </ul>
          </div>

          <!-- Articles list -->
          <div class="sg tj mf">
            <div class="io uf mg mj mq ut">

              <!-- 1st article -->
              <article class="ii oz ib" data-aos="zoom-y-out">
                <header>
                  <a class="block rn" href="blog-post.html">
                    <figure class="j id lv uv g uy">
                      <img class="_ z ij ib fr om ov pa hq ps pu" src="assets/inertia/images/news-01.jpg"
                           width="352" height="198" alt="News 01">
                    </figure>
                  </a>
                  <div class="nq">
                    <ul class="ii ue cu cc tk">
                      <li class="t_">
                        <a class="is ce ha fk fh ub ac pp hq pn po" href="#0">Case
                          studies</a>
                      </li>
                      <li class="t_">
                        <a class="is ce he fk fh ub bg-white ph hk hq pn po"
                           href="#0">Hubspot</a>
                      </li>
                    </ul>
                  </div>
                  <h3 class="cr ch cy cw">
                    <a class="pg" href="blog-post.html">“How HubSpot saved 25% on developing costs
                      by switching to Simple.”</a>
                  </h3>
                </header>
                <footer class="cn ii un rv">
                  <div class="ii s_ rs">
                    <a class="j" href="#0">
                                              <span class="_ z ty" aria-hidden="true"><span
                                                      class="_ z ty bg-white ub"></span></span>
                      <img class="j ub" src="assets/inertia/images/news-author-01.jpg" width="32" height="32"
                           alt="Author 01">
                    </a>
                  </div>
                  <div>
                    <span class="c_">By </span>
                    <a class="cc pg" href="#0">Lisa Allison</a>
                  </div>
                </footer>
              </article>

              <!-- 2nd article -->
              <article class="ii oz ib" data-aos="zoom-y-out" data-aos-delay="150">
                <header>
                  <a class="block rn" href="blog-post.html">
                    <figure class="j id lv uv g uy">
                      <img class="_ z ij ib fr om ov g pa hq ps pu" src="assets/inertia/images/news-02.jpg"
                           width="352" height="198" alt="News 02">
                    </figure>
                  </a>
                  <div class="nq">
                    <ul class="ii ue cu cc tk">
                      <li class="t_">
                        <a class="is ce ha fk fh ub ac pp hq pn po" href="#0">Case
                          studies</a>
                      </li>
                      <li class="t_">
                        <a class="is ce he fk fh ub bg-white ph hk hq pn po"
                           href="#0">Facebook</a>
                      </li>
                    </ul>
                  </div>
                  <h3 class="cr ch cy cw">
                    <a class="pg" href="blog-post.html">“How Facebook brought 13% cost savings to
                      their bottom line with Simple’s products.”</a>
                  </h3>
                </header>
                <footer class="cn ii un rv">
                  <div class="ii s_ rs">
                    <a class="j rm" href="#0">
                                              <span class="_ z ty" aria-hidden="true"><span
                                                      class="_ z ty bg-white ub"></span></span>
                      <img class="j ub" src="assets/inertia/images/news-author-02.jpg" width="32" height="32"
                           alt="Author 02">
                    </a>
                  </div>
                  <div>
                    <span class="c_">By </span>
                    <a class="cc pg" href="#0">Knut Mayer</a>
                  </div>
                </footer>
              </article>

              <!-- 3rd article -->
              <article class="ii oz ib" data-aos="zoom-y-out" data-aos-delay="300">
                <header>
                  <a class="block rn" href="blog-post.html">
                    <figure class="j id lv uv g uy">
                      <img class="_ z ij ib fr om ov g pa hq ps pu" src="assets/inertia/images/news-03.jpg"
                           width="352" height="198" alt="News 03">
                    </figure>
                  </a>
                  <div class="nq">
                    <ul class="ii ue cu cc tk">
                      <li class="t_">
                        <a class="is ce ha fk fh ub ac pp hq pn po" href="#0">Case
                          studies</a>
                      </li>
                      <li class="t_">
                        <a class="is ce he fk fh ub bg-white ph hk hq pn po"
                           href="#0">Tinder</a>
                      </li>
                    </ul>
                  </div>
                  <h3 class="cr ch cy cw">
                    <a class="pg" href="blog-post.html">“How Tinder grew 115% and saved 120 Hours
                      each week by outsourcing to Simple.”</a>
                  </h3>
                </header>
                <footer class="cn ii un rv">
                  <div class="ii s_ rs">
                    <a class="j" href="#0">
                                              <span class="_ z ty" aria-hidden="true"><span
                                                      class="_ z ty bg-white ub"></span></span>
                      <img class="j ub" src="assets/inertia/images/news-author-01.jpg" width="32" height="32"
                           alt="Author 01">
                    </a>
                  </div>
                  <div>
                    <span class="c_">By </span>
                    <a class="cc pg" href="#0">Lisa Allison</a>
                  </div>
                </footer>
              </article>

            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Cta -->
    <section>
      <div class="sc tj fv vs">
        <div class="ls go">

          <!-- CTA box -->
          <div class="au uy fw fx gr gi hw" data-aos="zoom-y-out">

            <div class="ii oz yo uo un">

              <!-- CTA content -->
              <div class="rn gb gw ce yl">
                <h3 class="h3 cz nk">Ready to get started?</h3>
                <p class="cz ci hb">We have a generous free tier available to get you started right
                  away.</p>
              </div>

              <!-- CTA button -->
              <div>
                <a class="n ht ag aw ak" href="#0">Get started for free</a>
              </div>

            </div>

          </div>

        </div>
      </div>
    </section>
  </main>
</template>

<script>
import Layout from '@/Shared/Layout'

export default {
  metaInfo: { title: 'Dashboard' },
  layout: Layout,
}
</script>
