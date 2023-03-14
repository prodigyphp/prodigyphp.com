<aside
        x-data="visibleNavHighlighter"
        x-ref="sidebar"
        x-on:scroll.window.throttle.50ms="onScroll()">
    <ul class="space-y-3 text-sm">
        <li class="text-gray-400">On this page</li>
    <template x-for="heading in headings">
        <li>
        <a :href="'#' + heading.id"
           :class="{ 'text-blue-500': visibleHeadingId == heading.id, 'text-gray-500' : visibleHeadingId != heading.id }"
           class="hover:text-blue-500">
            <span x-text="heading.innerText"></span>
        </a>
        </li>
    </template>
    </ul>
</aside>

<script>

    document.addEventListener('alpine:initializing', () => {
        Alpine.data('visibleNavHighlighter', () => ({
            headings: undefined,
            visibleHeadingId: null,

            init() {
                // Grab all the headings inside the main container.
                this.headings = document.querySelectorAll('[listen-for-intersection-of-titles] h2, [listen-for-intersection-of-titles] h3')

                this.assignHeadingIds()

                this.onScroll()

                let initialScroll = 0;
                let initialScrollOffset = this.$refs.sidebar.getBoundingClientRect().top;
                this.$refs.sidebar.scroll(0, initialScroll - initialScrollOffset - 20);
            },

            assignHeadingIds() {
                // If a heading doesn't have an [id], we'll give it one
                // based on its text content.
                this.headings.forEach(heading => {
                    if (heading.id) return

                    // heading.id = heading.textContent.replace(/\s+/g, '-').toLowerCase()
                    heading.id = this.slugify(heading.textContent);
                })
            },
            slugify(text) {
                return text.toString().toLowerCase()
                    .replace(/\s+/g, '-')           // Replace spaces with -
                    .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                    .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                    .replace(/^-+/, '')             // Trim - from start of text
                    .replace(/-+$/, '');            // Trim - from end of text
            },

            onScroll() {
                // We're gonna highlight the first heading above an imaginary
                // drawn horizontally across the center of the screen.

                // Get the distance from the top of that line.
                let relativeTop = window.innerHeight / 2

                let headingsByDistanceFromTop = {}

                // Populate an object of headings by their distance from our
                // imaginary lines as the keys.
                this.headings.forEach(heading => {
                    headingsByDistanceFromTop[heading.getBoundingClientRect().top - relativeTop] = heading
                })

                // Grab the first one that is above that line.
                let closestNegativeTop = Math.max(...Object.keys(headingsByDistanceFromTop).filter(top => top < 0))

                // If we couldn't find one, don't highlight anything.
                if (closestNegativeTop >= 0 || [Infinity, NaN, -Infinity].includes(closestNegativeTop)) return this.visibleHeadingId = null

                // Otherwise, highlight that heading.
                this.visibleHeadingId = headingsByDistanceFromTop[closestNegativeTop].id
            },
        }))
    })

</script>