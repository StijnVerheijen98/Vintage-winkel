<a href="#" id="home">Menu Item</a>
{{--JS for highlighting menu item?--}}
<script defer>
    document.addEventListener('DOMContentLoaded', () => {
        if ((page = document.querySelector('nav #' + '@yield("currPage")')) !== null) {
            page.classList.add('current');
        }
    });
</script>
