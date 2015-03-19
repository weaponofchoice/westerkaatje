if $('.section-grid').length > 0
  grid = $('.section-grid ul')
  
  $('main').imagesLoaded(->
    grid.isotope {}
    return
  )