<template>
  <main class="sj">

    <section class="am ay ak">
      <div class="sc tj fv vs">
        <div class="li ls gs go">

          <!-- Page header -->
          <div class="sh tj ce ls go">
            <h1 class="h1">Welcome. We exist to make entrepreneurism easier.</h1>
          </div>

          <!-- Form -->
          <div class="sg tj">
            <form>
              <div class="ii ue na nw">
                <div class="ij fh">
                  <label class="block he cn cc re" for="name">Name <span class="hc">*</span></label>
                  <input id="name" type="text" class="s ij he" placeholder="Enter your name" required="">
                </div>
              </div>
              <div class="ii ue na nw">
                <div class="ij fh">
                  <label class="block he cn cc re" for="email">Email <span class="hc">*</span></label>
                  <input id="email" type="email" class="s ij he" placeholder="Enter your email address" required="">
                </div>
              </div>
              <div class="ii ue na nw">
                <div class="ij fh">
                  <label class="block he cn cc re" for="password">Password <span class="hc">*</span></label>
                  <input id="password" type="password" class="s ij he" placeholder="Enter your password" required="">
                </div>
              </div>
              <div class="ii ue na ro">
                <div class="ij fh">
                  <button class="n cz au pl ij">Sign up</button>
                </div>
              </div>
              <div class="cn text-gray-500 ce ie">
                By creating an account, you agree to the <a class="hd" href="signup.html#0">terms &amp; conditions</a>, and our <a class="hd" href="signup.html#0">privacy policy</a>.
              </div>
            </form>
            <div class="ii un nf">
              <div class="uq an sj rs" aria-hidden="true"></div>
              <div class="c_ cv">Or</div>
              <div class="uq an sj nm" aria-hidden="true"></div>
            </div>
            <form>
              <div class="ii ue na nq">
                <div class="ij fh">
                  <button class="n le cz ao pf ij j ii un">
                    <svg class="ss iv ft cz hb s_ nu" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.95 0C3.578 0 0 3.578 0 7.95c0 3.479 2.286 6.46 5.466 7.553.397.1.497-.199.497-.397v-1.392c-2.187.497-2.683-.993-2.683-.993-.398-.895-.895-1.193-.895-1.193-.696-.497.1-.497.1-.497.795.1 1.192.795 1.192.795.696 1.292 1.888.895 2.286.696.1-.497.298-.895.497-1.093-1.79-.2-3.578-.895-3.578-3.975 0-.895.298-1.59.795-2.087-.1-.2-.397-.994.1-2.087 0 0 .695-.2 2.186.795a6.408 6.408 0 011.987-.299c.696 0 1.392.1 1.988.299 1.49-.994 2.186-.795 2.186-.795.398 1.093.199 1.888.1 2.087.496.596.795 1.291.795 2.087 0 3.08-1.889 3.677-3.677 3.875.298.398.596.895.596 1.59v2.187c0 .198.1.497.596.397C13.714 14.41 16 11.43 16 7.95 15.9 3.578 12.323 0 7.95 0z"></path>
                    </svg>
                    <span class="sk lj lq rz">Continue with GitHub</span>
                  </button>
                </div>
              </div>
              <div class="ii ue na">
                <div class="ij fh">
                  <button class="n le cz ap pd ij j ii un">
                    <svg class="ss iv ft cz hb s_ nu" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z"></path>
                    </svg>
                    <span class="sk lj lq rz">Continue with Google</span>
                  </button>
                </div>
              </div>
            </form>
            <div class="c_ ce ro">
              Already using Simple? <a class="ht pg hq pn po" href="signin.html">Sign in</a>
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
