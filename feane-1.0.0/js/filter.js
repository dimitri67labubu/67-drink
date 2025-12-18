// Debug check if jQuery is loaded
if (typeof jQuery === 'undefined') {
    console.error('jQuery is not loaded!');
} else {
    console.log('jQuery is loaded', jQuery.fn.jquery);
}

// Debug check if Isotope is loaded
if (typeof Isotope === 'undefined') {
    console.error('Isotope is not loaded!');
} else {
    console.log('Isotope is loaded');
}

jQuery(document).ready(function($) {
    console.log('Document ready');
    
    // Debug: Check if we can find the grid and filters
    console.log('Grid elements found:', $('.grid').length);
    console.log('Filter elements found:', $('.filters_drinks li').length);

    // Initialize Isotope
    var $grid = $('.grid');
    
    $grid.isotope({
        itemSelector: '.grid-item',
        layoutMode: 'masonry'
    });

    // Add click handler directly
    $('.filters_drinks li').each(function() {
        $(this).on('click', function(e) {
            e.preventDefault();
            console.log('Filter clicked');
            
            var filterValue = $(this).attr('data-filter');
            console.log('Filter value:', filterValue);
            
            $('.filters_drinks li').removeClass('active');
            $(this).addClass('active');
            
            $grid.isotope({ filter: filterValue });
        });
    });

    // Log when Isotope is initialized
    $grid.on('arrangeComplete', function() {
        console.log('Isotope arrange complete');
    });
});