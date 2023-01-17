
    Alpine.data('pricingSwitch', () => ({
        value: true,
        priceOutput: {
            plan1: {
                false: ['$', '0', '/month'],
                true: ['$', '0', '/month']
            },
            plan2: {
                false: ['$', '34', '/month'],
                true: ['$', '24', '/month']
            },
            plan3: {
                false: ['$', '59', '/month'],
                true: ['$', '49', '/month']
            },
            plan4: {
                false: ['$', '109', '/month'],
                true: ['$', '99', '/month']
            }
        }
    }))

    Alpine.data('carousel', () => ({
        active: 0,
        autorotate: true,
        autorotateTiming: 7000,
        items: [
            {
                img: 'testimonial-01.jpg',
                alt: 'Testimonial 01',
                quote: '“ I love this product and would recommend it to anyone. Could be not easier to use, and our multiple websites are wonderful. We get nice comments all the time. “',
                name: 'Darya Finger',
                role: 'CEO & Co-Founder',
                team: '@Dropbox',
                link: '#0'
            },
            {
                img: 'testimonial-02.jpg',
                alt: 'Testimonial 02',
                quote: '“ Not only in my career but in education as well, I feel grateful that Simple pushed me to expand my horizons and strive to accomplish more.“',
                name: 'Greg Sebastian',
                role: 'Head of Design',
                team: '@Shopify',
                link: '#0'
            },
            {
                img: 'testimonial-03.jpg',
                alt: 'Testimonial 03',
                quote: '“ I feel grateful that Simple pushed me to expand my horizons and strive to accomplish more, not only in my career but in education as well.“',
                name: 'Dominik Prasad',
                role: 'Backend Lead',
                team: '@Google',
                link: '#0'
            }
        ],
        init() {
            if (this.autorotate) {
                this.autorotateInterval = setInterval(() => {
                    this.active = this.active + 1 === this.items.length ? 0 : this.active + 1
                }, this.autorotateTiming)
            }
            this.$watch('active', callback => this.heightFix())
        },
        stopAutorotate() {
            clearInterval(this.autorotateInterval)
            this.autorotateInterval = null
        },
        heightFix() {
            this.$nextTick(() => {
                this.$refs.testimonials.style.height = this.$refs.testimonials.children[this.active + 1].offsetHeight + 'px'
            })
        }
    }))
