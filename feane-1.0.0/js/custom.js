// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();


// isotope js
$(window).on('load', function () {
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        layoutMode: 'masonry',
        transitionDuration: '0.4s'
    });

    // Filter items on button click
    $('.filters_drinks li').on('click', function() {
        var filterValue = $(this).attr('data-filter');
        $('.filters_drinks li').removeClass('active');
        $(this).addClass('active');
        $grid.isotope({ filter: filterValue });
    });

    // Initial layout
    $grid.isotope('layout');
});

// nice select
$(document).ready(function() {
    $('select').niceSelect();
  });

/** google_map js **/
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

// client section owl carousel
$(".client_owl-carousel").owlCarousel({
    loop: true,
    margin: 0,
    dots: false,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});

// Search bar: show on click, simple client-side search
(function() {
    console.log('[search] init module');
    function collectItems() {
        var set = new Map();
        document.querySelectorAll('[data-item-name]').forEach(function(el) {
            var name = el.getAttribute('data-item-name').trim();
            if (name) set.set(name, {name: name, href: el.getAttribute('href') || '#'});
        });
        document.querySelectorAll('.drink-item, .drink-name').forEach(function(el) {
            var name = el.textContent.trim();
            if (name) set.set(name, {name: name, href: el.closest('a') ? el.closest('a').getAttribute('href') : '#'});
        });
        document.querySelectorAll('a.drink-link').forEach(function(el) {
            var name = el.textContent.trim();
            if (name) set.set(name, {name: name, href: el.getAttribute('href') || '#'});
        });
        return Array.from(set.values());
    }

    var fallbackItems = [
        {name: 'Whisky Aged 12 ans', href: 'drinks.html#whisky12'},
        {name: 'Vodka Pure', href: 'drinks.html#vodka'},
        {name: 'Vin Rouge Réserve', href: 'drinks.html#vinrouge'}
    ];

    var items = (function() { var c = collectItems(); return c.length ? c : fallbackItems; })();

    function initSearch() {
        console.log('[search] initSearch');
        var input = document.getElementById('site-search');
        var btn = document.getElementById('search-btn');
        var resultsBox = document.getElementById('search-results');
        var form = input ? input.closest('form') : null;

        if (!input || !btn || !resultsBox) {
            console.log('[search] elements missing', {input: !!input, btn: !!btn, resultsBox: !!resultsBox});
            return;
        }

        // Hide input initially (idempotent)
        try { input.style.display = input.style.display || 'none'; } catch (e) {}

        function renderResults(matches, query) {
            resultsBox.innerHTML = '';
            if (!matches.length) {
                var none = document.createElement('div');
                none.className = 'dropdown-item disabled';
                none.textContent = 'Aucun résultat pour "' + (query || '') + '"';
                resultsBox.appendChild(none);
                resultsBox.style.display = 'block';
                return;
            }
            matches.slice(0,10).forEach(function(item){
                var a = document.createElement('a');
                a.className = 'dropdown-item';
                a.href = item.href || '#';
                a.textContent = item.name;
                resultsBox.appendChild(a);
            });
            resultsBox.style.display = 'block';
        }

        function doSearch() {
            var q = (input.value || '').trim().toLowerCase();
            if (!q) { resultsBox.style.display = 'none'; return; }
            var matches = items.filter(function(it){ return it.name.toLowerCase().indexOf(q) !== -1; });
            renderResults(matches, q);
        }

        // Toggle show on first click, otherwise run search
        btn.removeEventListener && btn.removeEventListener('click', function(){});
        btn.addEventListener('click', function(e){
            console.log('[search] search-btn clicked');
            e.preventDefault();
            var current = window.getComputedStyle(input).display;
            if (current === 'none') {
                input.style.display = 'inline-block';
                input.focus();
            } else {
                // If already visible, perform search
                doSearch();
            }
        });

        // Enter triggers search, other keys live-search
        input.addEventListener('keyup', function(e){
            if (e.key === 'Escape') { input.value=''; resultsBox.style.display='none'; input.blur(); input.style.display='none'; return; }
            if (e.key === 'Enter') { doSearch(); return; }
            doSearch();
        });

        // Hide when clicking outside
        document.addEventListener('click', function(e){
            if (!form || !form.contains(e.target)) {
                input.style.display = 'none';
                resultsBox.style.display = 'none';
            }
        });
    }

    // Call init right away in case DOM is ready, and also on jQuery ready and DOMContentLoaded as fallback
    try { initSearch(); } catch (err) { console.log('[search] initSearch error', err); }
    if (window.jQuery) {
        jQuery(function(){ try { initSearch(); } catch (err) { console.log('[search] jQuery init error', err); } });
    }
    document.addEventListener('DOMContentLoaded', function(){ try { initSearch(); } catch (err) { console.log('[search] DOMContentLoaded init error', err); } });
})();