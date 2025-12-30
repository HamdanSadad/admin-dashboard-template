<!-- Custom scripts: adjust main content offset and keep layout consistent -->
<script>
    (function() {
        function adjustMainOffset() {
            var sidenav = document.querySelector('.sidenav.fixed-start');
            var main = document.querySelector('.main-content');
            if (!sidenav || !main) return;
            var rect = sidenav.getBoundingClientRect();
            var gap = 48; // extra breathing room (increased)
            if (window.innerWidth >= 1200) {
                // use the right edge of the sidenav (viewport px) so transforms are accounted for
                var right = Math.ceil(rect.right || (rect.left + rect.width || 280));
                main.style.marginLeft = (right + gap) + 'px';
            } else {
                main.style.marginLeft = '';
            }
        }
        var resizeTimer = null;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(adjustMainOffset, 80);
        });
        document.addEventListener('DOMContentLoaded', adjustMainOffset);
        // run after a short delay to catch later layout changes
        setTimeout(adjustMainOffset, 300);
        // adjust after the sidenav toggle (if present)
        var icon = document.getElementById('iconSidenav');
        if (icon) icon.addEventListener('click', function() {
            setTimeout(adjustMainOffset, 150);
        });
        // observe body class changes (pinned/unpinned) and re-adjust
        try {
            var mo = new MutationObserver(function() {
                adjustMainOffset();
            });
            mo.observe(document.body, {
                attributes: true,
                attributeFilter: ['class']
            });
        } catch (e) {}
    })();
</script>